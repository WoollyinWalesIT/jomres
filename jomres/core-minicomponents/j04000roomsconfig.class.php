<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Mini-component core file: Constructs the javascript tab booking details page
 #
* @package Jomres
#
 */
class j04000roomsconfig {
	/**
	#
	 * Collates the room/property configuration tabs
	#
	 */
	function j04000roomsconfig($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		
		// $mrConfig['tariffmode'] 0 = normal
		// $mrConfig['tariffmode'] 1 = advanced
		// $mrConfig['tariffmode'] 2 = micromanage

		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if ( $mrConfig['tariffmode']=="0")
			$MiniComponents->triggerEvent('04005'); //
		else
			{
			$defaultProperty=getDefaultProperty();
			$option="com_jomres";
		 	if ($jrConfig['useGlobalRoomTypes']=="1")
				$roomTypeSearchParameter="0";
			else
				$roomTypeSearchParameter=$defaultProperty;

			$roomRowInfo="";
			$roomFeaturesRowInfo="";
			$roomTypesRowInfo="";
			$propertyRowInfo="";
			$propertyFeaturesRowInfo="";
			$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."' ORDER BY propertys_uid,room_number ";
			$roomsList =doSelectSql($query);
			$query = "SELECT room_features_uid,feature_description,property_uid FROM #__jomres_room_features  WHERE property_uid = '".(int)$defaultProperty."' ORDER BY feature_description ";
			$roomFeaturesList =doSelectSql($query);
			$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,property_uid FROM #__jomres_room_classes  WHERE property_uid = '".(int)$roomTypeSearchParameter."' ORDER BY room_class_abbv ";
			$roomsClassList =doSelectSql($query);
			$query = "SELECT propertys_uid,property_name,property_street,property_town,property_postcode,property_region,property_country,property_tel,property_fax,property_email,property_features,published,apikey FROM #__jomres_propertys  WHERE propertys_uid = '".(int)$defaultProperty."' ORDER BY property_name ";
			$propertysList =doSelectSql($query);
			$query = "SELECT  hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,property_uid FROM #__jomres_hotel_features  WHERE property_uid = '".(int)$defaultProperty."' ORDER BY hotel_feature_abbv ";
			$propertyFeaturesList=doSelectSql($query);

			$newPropertyButton="";
			if ($thisJRUser->defaultproperty=="ANY" && !function_exists('botJRHP') )
				{
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editProperty&amp;"),'');
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL.""),'');
				$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteProperty"),'');
				$jrtb .= $jrtbar->endTable();
				$newPropertyButton=$jrtb;
				}
			$newRoomButton="";
			if ($mrConfig['singleRoomProperty'] ==  '1' && count($roomsList)< 1)
				{
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;"),'');
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&"),'');
				$jrtb .= $jrtbar->endTable();
				$newRoomButton=$jrtb;
				}
			if ($mrConfig['singleRoomProperty'] ==  '0')
				{
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;"),'');
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&"),'');
				$jrtb .= $jrtbar->endTable();
				$newRoomButton=$jrtb;
				}

			$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomFeature&amp;"),'');
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&"),'');
			$jrtb .= $jrtbar->endTable();
			$newRoomFeatureButton=$jrtb;

			$newRoomClassButton="";
			if ($mrConfig['singleRoomProperty'] ==  '1' && $roomTypeCount<1 )
				{
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomClass"),'' );
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL),'');
				$jrtb .= $jrtbar->endTable();
				$newRoomClassButton=$jrtb;
				}
			if ($mrConfig['singleRoomProperty'] ==  '0')
				{
				if ($jrConfig['useGlobalRoomTypes']!="1")
					{
					$jrtb  = $jrtbar->startTable();
					$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomClass"),'');
					$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL.""),'');
					$jrtb .= $jrtbar->endTable();
					$newRoomClassButton=$jrtb;
					}
				}
			$newPropertyFeatureButton="";
			if ($jrConfig['useGlobalPFeatures']!="1")
				{
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editPropertyFeature"),jr_gettext('_JOMRES_COM_MR_NEWPROPERTYFEATURE',_JOMRES_COM_MR_NEWPROPERTYFEATURE,FALSE) );
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL),'');
				$jrtb .= $jrtbar->endTable();
				$newPropertyFeatureButton=$jrtb;
				}

			$roomCount=count($roomsList);
			$roomRowInfo.="<tbody>";
			foreach($roomsList as $room)
				{
				$roomRowInfo .="<tr>
				";
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;roomUid=".$room->room_uid),'');
				if ($mrConfig['singleRoomProperty'] ==  '1' && count($roomsList)< 1)
					$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;roomUid=".($room->room_uid)."&clone=1"),'');
				elseif ($mrConfig['singleRoomProperty'] ==  '0')
					$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;roomUid=".($room->room_uid)."&clone=1"),'');

				$jrtb .= $jrtbar->endTable();
				$roomRowInfo .="<td>".$jrtb."</td>
				";
				$room_classes_uid=$room->room_classes_uid;
				$roomClassAbbv ="";
				foreach ($roomsClassList as $roomClass)
					{
					$roomClassUid=$roomClass->room_classes_uid;
					if ($roomClassUid == $room_classes_uid)
						{
						//$roomClassAbbv=jr_gettext(_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION.$roomClass->room_classes_uid,$roomClass->room_class_abbv);
						$roomClassAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,		stripslashes($roomClass->room_class_abbv),false,false);
						}
					}

				$roomRowInfo .="<td><b>".$roomClassAbbv."</b></td>
				";
				$roomRowInfo .="<td>".stripslashes(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE'.$room->room_uid,stripslashes($room->room_name)))."</td>
				";
				$roomRowInfo .="<td>".($room->room_number)."</td>
				";
				$roomRowInfo .="<td>".($room->room_floor)."</td>
				";

				$disabled=$room->room_disabled_access;
				if ($disabled)
					$disabledAccess=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE);
				else
					$disabledAccess=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE);
				$roomRowInfo .="<td>".$disabledAccess."</td>
				";
				$roomRowInfo .="<td>".($room->max_people)."</td>
				";
				$smoking=$room->smoking;
				if ($smoking)
					$smokingRoom=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE);
				else
					$smokingRoom=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE);
				if ($mrConfig['showSmoking']=="1")
					$roomRowInfo .="<td>".$smokingRoom."</td>
					";

				$room_image=getImageForProperty("room",$defaultProperty,$room->room_uid);
				$thumb=getThumbnailForImage($room_image);
				if ($thumb)
					$room_image=$thumb;
				$roomRowInfo .='<td><img src="'.$room_image.'" /></td>';

				$roomFeaturesString=$room->room_features_uid;
				$roomFeaturesArray=explode(",",$roomFeaturesString);
				$listTxt="<ul>";
				foreach($roomFeaturesList as $feature)
					{
					for ($i=0, $n=count($roomFeaturesArray); $i < $n; $i++)
						{
						if ($roomFeaturesArray[$i] == ($feature->room_features_uid))
							{
							$fd = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURES'.(int)$feature->room_features_uid,$feature->feature_description);
							$listTxt.="<li>".$fd."</li>
							";
							}
						}
					}
				$listTxt.="</ul>
				";
				$roomRowInfo .="
				</tr>
				";
				}
			$roomRowInfo.="</tbody>";
			
			$roomFeaturesRowInfo .="<tbody>";
			foreach($roomFeaturesList as $roomFeature)
				{
				$roomFeaturesRowInfo .="<tr>
				";
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomFeature&amp;featureUid=".($roomFeature->room_features_uid)),'');
				$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomFeature&amp;featureUid=".($roomFeature->room_features_uid)."&clone=1"),'');
				$jrtb .= $jrtbar->endTable();
				$roomFeaturesRowInfo .="<td>".$jrtb."</td>
				";
				$roomFeaturesRowInfo .="<td>".(jr_gettext(_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION.$roomFeature->room_features_uid,$roomFeature->feature_description))."</td>
				</tr>
				";
				}
			$roomFeaturesRowInfo .="</tbody>";	
			
			$roomTypeCount=count($roomsClassList);
			foreach($roomsClassList as $roomClass)
				{
				$roomTypesRowInfo .="<tr>
				";
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomClass&amp;classUid=".($roomClass->room_classes_uid)),'');
				$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomClass&amp;classUid=".($roomClass->room_classes_uid)."&clone=1"),'');
				$jrtb .= $jrtbar->endTable();
				$roomTypesRowInfo .="<td>".$jrtb."</td>
				";
				//$roomtype_abbr=jr_gettext(_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION.$roomClass->room_classes_uid,$roomClass->room_class_abbv);
				$roomtype_abbr = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,		stripslashes($roomClass->room_class_abbv),false,false);
				$roomTypesRowInfo .="<td><b>".$roomtype_abbr."</b></td>
				";
				$roomTypesRowInfo .="<td>".($roomClass->room_class_full_desc)."</td>
				</tr>
				";
				}


			//business/property tab disabled
			/*foreach($propertysList as $property)
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

				$propertyRowInfo .="<tr class=\"odd\">
				";
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editProperty&amp;propertyUid=".$property->propertys_uid),'');
				if (!$published)
					$jrtb .= $jrtbar->toolbarItem('unpublish',jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty'.jomresURLToken()),jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH',_JOMRES_COM_MR_VRCT_PUBLISH,false));
				else
					$jrtb .= $jrtbar->toolbarItem('publish',jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty'.jomresURLToken()),jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH',_JOMRES_COM_MR_VRCT_UNPUBLISH,false) );
				$jrtb .= $jrtbar->endTable();
				$propertyRowInfo .="<td>".$jrtb."</td>
				";

				$propertyRowInfo .="<td>".stripslashes(($property->property_street ))."</td>
				";
				$propertyRowInfo .="<td>".stripslashes(($property->property_town) )."</td>
				";
				$propertyRowInfo .="<td>".($property->property_region )."</td>
				";
				$propertyRowInfo .="<td>".($property->property_country )."</td>
				";
				$propertyRowInfo .="<td>".stripslashes(($property->property_postcode))."</td>
				</tr>
				";
				$propertyRowInfo .='<tr>
				<td colspan="6"><img src="'.$property_image.'" border="0" width="400" height="300"></td>
				';
				//$propertyRowInfo .="<td><a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=publishProperty&amp;propertyUid=".($property->propertys_uid))."\"><img src=\"".$img."\" border=\"0\"></a></td>";

				$propertyFeaturesString=$property->property_features;
				$propertyFeaturesArray=explode(",",$propertyFeaturesString);

				$propertyRowInfo .="</tr>
				";
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
				$propertyRowInfo .='<tr>
					<td class=\"jradmin_subheader_la\" colspan=\"6\">APIKEY: <input type="text" size="50" class="inputbox" name="apikey'.$id.'" value="'.$property->apikey.'" READONLY onclick="select_all(this)"/>
					</td>
				</tr>';
				}*/

			foreach($propertyFeaturesList as $propertyFeature)
				{
				$propertyFeaturesRowInfo .="<tr>";

				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editPropertyFeature&amp;propertyFeatureUid=".$propertyFeature->hotel_features_uid),'');
				$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editPropertyFeature&amp;propertyFeatureUid=".$propertyFeature->hotel_features_uid."&clone=1"),'');
				$jrtb .= $jrtbar->endTable();
				$propertyFeaturesRowInfo .="<td>".$jrtb."</td>";
				$propertyFeaturesRowInfo .="<td>".($propertyFeature->hotel_feature_abbv)."</td>";
				$propertyFeaturesRowInfo .="<td>".($propertyFeature->hotel_feature_full_desc)."</td></tr>";
				}
		 	$this->roomPropertyConfig_html( $newPropertyButton,$newRoomButton,$newRoomFeatureButton,$newRoomClassButton,$newPropertyFeatureButton, $roomRowInfo,$roomFeaturesRowInfo,$roomTypesRowInfo,$propertyRowInfo,$propertyFeaturesRowInfo,$option,$roomCount,$roomTypeCount );
		 	}
		}

	function roomPropertyConfig_html( $newPropertyButton,$newRoomButton,$newRoomFeatureButton,$newRoomClassButton,$newPropertyFeatureButton, $roomRowInfo,$roomFeaturesRowInfo,$roomTypesRowInfo,$propertyRowInfo,$propertyFeaturesRowInfo,$option,$roomCount,$roomTypeCount )
		{
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		$defaultProperty=$thisJRUser->defaultproperty;
		$currentProperty=getDefaultProperty();
		echo "<h2>".jr_gettext('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE',_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE)."</h2>";
		jr_import('jomres_content_tabs');
		$contentPanel = new jomres_content_tabs();
		$contentPanel->startTabs();
		if ($mrConfig['singleRoomProperty'] == "0")
			$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM',_JOMRES_COM_MR_VRCT_TAB_ROOM,FALSE));
		else
			$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB',_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB,FALSE));
		
		
		$contentPanel->setcontent($newRoomButton);
		
		if ($mrConfig['singleRoomProperty'] == "0")
			{
			$contentPanel->setcontent('
				<script language="JavaScript" type="text/javascript">
				jomresJquery(document).ready(function() {
					var oTable = jomresJquery(\'#roomrowinfo\').dataTable({
						"bJQueryUI": true,
						"bStateSave": true,
						"sPaginationType": "full_numbers"
					});
				} );
				</script>
				<table width="100%" border="0" id="roomrowinfo">
				<thead><tr>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK',_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK).'</th>
				<th>'.jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS).'</th>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME).'</th>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER).'</th>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR).'</th>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS).'</th>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE).'</th>
				');
		 	if ($mrConfig['showSmoking']=="1")
		 		$contentPanel->setcontent('<th>'.jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING).'</th>');
			$contentPanel->setcontent('<th>&nbsp;</th>');
			$contentPanel->setcontent('</tr></thead>
			');
			$contentPanel->setcontent($roomRowInfo);
			$contentPanel->setcontent('</table>');
			}
		else
			{
			$query = "SELECT room_classes_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."'";
			$original_room_classes_uid =doSelectSql($query,1);
			$query = "SELECT room_class_abbv FROM #__jomres_room_classes WHERE `room_classes_uid` = '".$original_room_classes_uid."' LIMIT 1";
			$room_class_abbv=doSelectSql($query,1);
			$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;roomUid=".$room->room_uid),'');
			$jrtb .= $jrtbar->endTable();
			$contentPanel->setcontent('<table><tr>
			<td>');
			$roomClassAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,		stripslashes($roomClass->room_class_abbv),false,false);
			$contentPanel->setcontent(_JOMRES_COM_MR_VRCT_PROPERTY_TYPE.$jrtb." ".$roomClassAbbv);
			$contentPanel->setcontent('</td>
			</tr></table>');
			}
		
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE',_JOMRES_COM_MR_LISTTARIFF_TITLE,FALSE));
		$contentPanel->setcontent($MiniComponents->triggerEvent('02210'));	//listTariffs($option);
		$contentPanel->insertContent();
		$contentPanel->endPanel();

		if ($mrConfig['singleRoomProperty'] == "0")
			{
			$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES',_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES,FALSE));
			$contentPanel->setcontent($newRoomFeatureButton);
			//$contentPanel->setcontent('<table>
			//<tr>');
			$contentPanel->setcontent('
				<script language="JavaScript" type="text/javascript">
				jomresJquery(document).ready(function() {
					var oTable = jomresJquery(\'#roomFeaturesRowInfo\').dataTable({
						"bJQueryUI": true,
						"bStateSave": true,
						"sPaginationType": "full_numbers"
					});
				} );
				</script>
				<table width="100%" border="0" id="roomFeaturesRowInfo">
				<thead><tr>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT',_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT).'</th>
				<th>'.jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT',_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT).'</th>');
			$contentPanel->setcontent('
			</tr></thead>');
			$contentPanel->setcontent($roomFeaturesRowInfo);
			$contentPanel->setcontent('
			</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();
			}
		//business/property tab disabled
		/*$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS,FALSE));
		$contentPanel->setcontent($newPropertyButton);
		$contentPanel->setcontent('<table width="100%" border="0">
			<tr>
			<th class="ui-state-default">&nbsp;</th>
			<th class="ui-state-default">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET).'</th>
			<th class="ui-state-default">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN).'</th>
			<th class="ui-state-default">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION).'</th>
			<th class="ui-state-default">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY).'</th>
			<th class="ui-state-default">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE).'</th>
			');
		$contentPanel->setcontent('
		</tr>');
		$contentPanel->setcontent($propertyRowInfo);
		$contentPanel->setcontent('</table>');
		$contentPanel->insertContent();
		$contentPanel->endPanel();
		if ($jrConfig['useGlobalPFeatures']!="1")
			{
			$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES',_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES,FALSE));
			$contentPanel->setcontent($newPropertyFeatureButton);
			$contentPanel->setcontent('<table>
				<tr>
				<td class="fg-toolbar ui-widget-header ui-corner-all">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK).'</td>;
				<td class="fg-toolbar ui-widget-header ui-corner-all">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV).'</td>
				<td class="fg-toolbar ui-widget-header ui-corner-all">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC).'</td>');
			$contentPanel->setcontent('
			</tr>');
			$contentPanel->setcontent($propertyFeaturesRowInfo);
			$contentPanel->setcontent('</table>');
			$contentPanel->insertContent();
			$contentPanel->endPanel();
			}*/
		$contentPanel->endTabs();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE',_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM',_JOMRES_COM_MR_VRCT_TAB_ROOM);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK',_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE);
	 	$output[]		=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES',_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES',_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK',_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC',_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE',_JOMRES_COM_MR_LISTTARIFF_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK',_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT',_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES',_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC',_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);

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