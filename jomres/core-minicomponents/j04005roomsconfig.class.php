<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Mini-component core file: Constructs the javascript tab booking details page
 #
* @package Jomres
#
 */
class j04005roomsconfig {
	/**
	#
	 * Collates the room/property configuration tabs
	#
	 */
	function j04005roomsconfig($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}

		$mrConfig=getPropertySpecificSettings();
		$output=array();
		$defaultProperty=getDefaultProperty();
		
		$basic_property_details =jomres_getSingleton('basic_property_details');
		$basic_property_details->gather_data($defaultProperty);
		$property_type_id = $basic_property_details->ptype_id;
		$room_classes_array = array();
		if (count($basic_property_details->this_property_room_classes)>0)
			{
			foreach ( $basic_property_details->this_property_room_classes as $key=>$val )
				{
				$room_classes_array[]= $key;
				}
			$genericOrClasses = genericOr($room_classes_array,"room_classes_uid");
			}
		
		$propertyRowInfo="";

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."' ORDER BY room_number ";
		$roomsList =doSelectSql($query);

		$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,property_uid FROM #__jomres_room_classes  WHERE property_uid = '0' AND ".$genericOrClasses." ORDER BY room_class_abbv ";
		$roomsClassList =doSelectSql($query);

		$query = "SELECT propertys_uid,property_name,property_street,property_town,property_postcode,property_region,property_country,property_tel,property_fax,property_email,property_features,published,apikey FROM #__jomres_propertys  WHERE propertys_uid = '".(int)$defaultProperty."' ORDER BY property_name ";
		$propertysList =doSelectSql($query);
		$query="SELECT `roomrateperday`,`roomclass_uid`,`maxpeople` FROM #__jomres_rates WHERE property_uid = '".(int)$defaultProperty."'";
		$tariffList=doSelectSql($query);

		if (count($roomsClassList) == 0)
			{
			echo "Error, can't find any room types for this property type. You will need to edit your room types and associate them with a property type first.";
			return;
			}

		$roomTypesArray=array();
		$allTariffsForRoomType=array();

		if ($mrConfig['singleRoomProperty'] ==  '1' && count($roomsList)>1 ) // Looks like property manager has changed from MRP to SRP. Let's clean things up and start anew
			{
			$query="DELETE FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."'";
			$result=doInsertSql($query,"");
			$query="DELETE FROM #__jomres_rates WHERE property_uid = '".(int)$defaultProperty."'";
			$result=doInsertSql($query,"");
			$roomsList = array();
			$tariffList=array();
			}

		foreach ($roomsClassList as $roomType) // First we need to gather some information about tariffs & rooms
			{
			if (count($roomsList)>0)
				{
				foreach ($roomsList as $room)
					{
					if ($room->room_classes_uid == $roomType->room_classes_uid )
						{
						$count=$roomTypesArray[$roomType->room_classes_uid]['counter'];
						$roomTypesArray[$roomType->room_classes_uid]['counter']=$count+1;
						$roomTypesArray[$roomType->room_classes_uid]['existingrooms'][]=$room->room_uid;
						$roomTypesArray[$roomType->room_classes_uid]['max_people']=$room->max_people;
						}
					}
				}
			if (count($tariffList)>0)
				{
				foreach ($tariffList as $tariff)
					{
					if ($tariff->roomclass_uid == $roomType->room_classes_uid )
						{
						$count=$allTariffsForRoomType[$roomType->room_classes_uid]['counter'];
						$allTariffsForRoomType[$roomType->room_classes_uid]['counter']=$count+1;
						$allTariffsForRoomType[$roomType->room_classes_uid]['roomrateperday']=$tariff->roomrateperday;
						$allTariffsForRoomType[$roomType->room_classes_uid]['maxpeople']=$tariff->maxpeople;
						}
					}
				}
			}


		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_normalmode_tariffs');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL.""),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['HROOMCLASS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV',_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV);
		$output['HNUMBEROFROOMS']=jr_gettext('_JOMRES_NUMBEROFROOMSAVAILABLE',_JOMRES_NUMBEROFROOMSAVAILABLE);
		$output['HROOMRATEPERDAY']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY);
		$output['HPROPERTYTYPE']=jr_gettext('JOMRES_PROPERTYTYPE',JOMRES_PROPERTYTYPE);
		$output['HROOMTYPE']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE);
		$output['HMAXPEOPLE_ROOM']=jr_gettext('JOMRES_MAXPEOPLEINROOM',JOMRES_MAXPEOPLEINROOM);
		$output['HMAXPEOPLE_TARIFF']=jr_gettext('JOMRES_MAXPEOPLEINBOOKING',JOMRES_MAXPEOPLEINBOOKING);

		if ($mrConfig['singleRoomProperty'] ==  '0')  ///////////////////////////////////////////////////////////// MRPs
			{
			// Now we can start to create our rows
			$rows=array();
			foreach ($roomsClassList as $roomType) // First we need to gather some information about tariffs & rooms
				{
				$roomtype_id=$roomType->room_classes_uid;
				$r=array();
				//$roomtype_abbr=jr_gettext(_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION.$roomType->room_classes_uid, $roomType->room_class_abbv);
				$roomtype_abbr = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomType->room_classes_uid,		stripslashes($roomType->room_class_abbv),false,false);
						
				$r['ROOM_CLASS_ABBV'] = $roomtype_abbr;
				$r['ROOMNUMBERDROPDOWN'] = jomresHTML::integerSelectList( 00, 150, 1, "numberofRooms[$roomtype_id]", 'size="1" class="inputbox"', $roomTypesArray[$roomtype_id]['counter'], "%02d" );
				$r['ROOMRATEPERDAY']='<input class="inputbox" style="text-align:right" size="4" type="text" name="roomrateperday['.$roomtype_id.']" value="'.$allTariffsForRoomType[$roomType->room_classes_uid]['roomrateperday'].'" />';
				$r['MAX_PEOPLE_ROOM']=jomresHTML::integerSelectList( 00, 100, 1, "max_people[$roomtype_id]", 'size="1" class="inputbox"', $roomTypesArray[$roomType->room_classes_uid]['max_people'], "%02d" );
				$r['MAX_PEOPLE_TARIFF']= jomresHTML::integerSelectList( 01, 100, 1, "maxpeople_tariff[$roomtype_id]", 'size="1" class="inputbox"', $allTariffsForRoomType[$roomtype_id]['maxpeople'], "%02d" );
				$existingrooms="";
				$counter=1;
				$numberOfExistingRooms=count($roomTypesArray[$roomType->room_classes_uid]['existingrooms']);

				foreach ( $roomTypesArray[$roomType->room_classes_uid]['existingrooms'] as $id)
					{
					$existingrooms.=$id;
					if ($counter<$numberOfExistingRooms)
						$existingrooms.=",";
					$counter++;
					}
				$r['existingrooms']='<input type="hidden" name="existingrooms['.$roomtype_id.']" value="'.$existingrooms.'" />';
				$rows[]=$r;
				}
				
			$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
				
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_normalmode_roomtariffs.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tariffRoomOutput=$tmpl->getParsedTemplate();
			}
		else //////////////////////////////////////////////////////////////////////////////// SRPs
			{

			foreach ($roomTypesArray as $key=>$val)
				{
				$type_id=$key;
				}

			if ($mrConfig['tariffChargesStoredWeeklyYesNo']=="1")
				$output['RATETEXT']=_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK;
			else
				$output['RATETEXT']=_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY;
			$output['ROOMRATEPERDAY']='<input class="inputbox" style="text-align:right" size="4" type="text" name="roomrateperday" value="'.$allTariffsForRoomType[$type_id]['roomrateperday'].'" />';
			$output['MAX_PEOPLE']='<input class="inputbox" style="text-align:right" size="4" type="text" name="max_people" value="'.$roomTypesArray[$type_id]['max_people'].'" />';
			$rows=array();
			foreach ($roomsClassList as $roomType) // First we need to gather some information about tariffs & rooms
				{
				$r=array();
				$roomtype_id=$roomType->room_classes_uid;
				$selected="";
				if ($type_id == (int)$roomtype_id)
					$selected=" checked ";
				$r['ROOM_CLASS_ABBV'] = $roomType->room_class_abbv;
				$r['ROOM_CLASS_RADIO'] ='<input type="radio" name="roomtype" value="'.$roomtype_id.'" '.$selected.'> '.$r['ROOM_CLASS_ABBV'];
				$rows[]=$r;
				}

			$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
				
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_normalmode_roomtariffs_srp.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tariffRoomOutput=$tmpl->getParsedTemplate();
			}
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		foreach($propertysList as $property)
			{
			$published=$property->published;
			if ($published)
				{
				$img = get_showtime('live_site')."/jomres/images/jomresimages/small/tick.png";
				}
			else
				{
				$img = get_showtime('live_site')."/jomres/images/jomresimages/small/publish_x.png";
				}

			$property_image=getImageForProperty("property",$property->propertys_uid,$property->propertys_uid);

			$propertyRowInfo .="<tr>";
			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editProperty&amp;propertyUid=".$property->propertys_uid),'');
			if (!$published)
				$jrtb .= $jrtbar->toolbarItem('unpublish',jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty'.jomresURLToken()),jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH',_JOMRES_COM_MR_VRCT_PUBLISH,false));
			else
				$jrtb .= $jrtbar->toolbarItem('publish',jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty'.jomresURLToken()),jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH',_JOMRES_COM_MR_VRCT_UNPUBLISH,false) );
			$jrtb .= $jrtbar->endTable();
			$propertyRowInfo .="<td class=\"jradmin_field_ca\">".$jrtb."</td>";
			$propertyRowInfo .="<td class=\"jradmin_field_ca\">".stripslashes(($property->property_street ))."</td>";
			$propertyRowInfo .="<td class=\"jradmin_field_ca\">".stripslashes(($property->property_town) )."</td>";
			$propertyRowInfo .="<td class=\"jradmin_field_ca\">".($property->property_region )."</td>";
			$propertyRowInfo .="<td class=\"jradmin_field_ca\">".($property->property_country )."</td>";
			$propertyRowInfo .="<td class=\"jradmin_field_ca\">".stripslashes(($property->property_postcode))."</td></tr>";
			$propertyRowInfo .='<tr><td colspan="6" class=\"jradmin_field_ca\"><img src="'.$property_image.'" border="0" width="'.$mrConfig['editiconsize'].'" height="'.$mrConfig['editiconsize'].'"></td>';
			$propertyRowInfo .="</tr>";

			// Uncomment the following lines to show the apikey in the frontend property admin
			$propertyRowInfo .='
			<script type="text/javascript">
			function select_all(obj)
				{ var text_val=eval(obj);
				text_val.focus();
				text_val.select();
				if (!document.all) return; // IE only
					r= text_val.createTextRange();
				r.execCommand(\'copy\');
				} </script>
				';
			$propertyRowInfo .='<tr><td class=\"jradmin_subheader_la\" colspan=\"6\">APIKEY: <input type="text" size="50" class="inputbox" name="apikey'.$id.'" value="'.$property->apikey.'" READONLY onclick="select_all(this)"/></td></tr>';
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$defaultProperty=$thisJRUser->defaultproperty;
		$currentProperty=getDefaultProperty();
		echo jr_gettext('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE',_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE);
		jr_import('jomres_content_tabs');
		$contentPanel = new jomres_content_tabs();
		$contentPanel->startTabs();
		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM',_JOMRES_COM_MR_VRCT_TAB_ROOM,FALSE));
		$contentPanel->setcontent($tariffRoomOutput);
		$contentPanel->insertContent();
		$contentPanel->endPanel();



		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS,FALSE));
		$contentPanel->setcontent($newPropertyButton);
		$contentPanel->setcontent('<table>
			<tr>
			<td class="jradmin_subheader_ca">&nbsp;</td>
			<td class="jradmin_subheader_ca">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET).'</td>
			<td class="jradmin_subheader_ca">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN).'</td>
			<td class="jradmin_subheader_ca">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION).'</td>
			<td class="jradmin_subheader_ca">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY).'</td>
			<td class="jradmin_subheader_ca">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE).'</td>
			');
		$contentPanel->setcontent('</tr>');
		$contentPanel->setcontent($propertyRowInfo);
		$contentPanel->setcontent('</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$contentPanel->endTabs();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM',_JOMRES_COM_MR_VRCT_TAB_ROOM);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE',_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV',_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV);
		$output[]		= jr_gettext('_JOMRES_NUMBEROFROOMSAVAILABLE',_JOMRES_NUMBEROFROOMSAVAILABLE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY);
		$output[]		= jr_gettext('JOMRES_PROPERTYTYPE',JOMRES_PROPERTYTYPE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE);
		$output[]		= jr_gettext('JOMRES_MAXPEOPLEINROOM',JOMRES_MAXPEOPLEINROOM);
		$output[]		= jr_gettext('JOMRES_MAXPEOPLEINBOOKING',JOMRES_MAXPEOPLEINBOOKING);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>