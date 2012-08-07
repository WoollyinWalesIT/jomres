<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
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
			
			$newRoomButton='<div class="well">'.$newRoomButton.'</div>';
			
			$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomFeature&amp;"),'');
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&"),'');
			$jrtb .= $jrtbar->endTable();
			$newRoomFeatureButton=$jrtb;
			
			$newRoomFeatureButton='<div class="well">'.$newRoomFeatureButton.'</div>';

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

			$roomRowInfo =array();
			foreach($roomsList as $room)
				{
				$roomRow =array();

				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;roomUid=".$room->room_uid),'');
				if ($mrConfig['singleRoomProperty'] ==  '1' && count($roomsList)< 1)
					$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;roomUid=".($room->room_uid)."&clone=1"),'');
				elseif ($mrConfig['singleRoomProperty'] ==  '0')
					$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoom&amp;roomUid=".($room->room_uid)."&clone=1"),'');

				$jrtb .= $jrtbar->endTable();
				$roomRow['BUTTONS'] =$jrtb;
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

				$roomRow['ROOM_TYPE'] = $roomClassAbbv;
				$roomRow['ROOM_NAME'] =stripslashes(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE'.$room->room_uid,stripslashes($room->room_name)));
				$roomRow['ROOM_NUMBER'] =$room->room_number;
				$roomRow['ROOM_FLOOR'] =$room->room_floor;

				$disabled=$room->room_disabled_access;
				if ($disabled)
					$disabledAccess=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE);
				else
					$disabledAccess=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE);
				$roomRow['DISABLED_ACCESS'] =$disabledAccess;
				$roomRow['MAX_PEOPLE'] =$room->max_people;
				$smoking=$room->smoking;
				if ($smoking)
					$smokingRoom=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE);
				else
					$smokingRoom=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE);
				
				$roomRow['SMOKING'] ='';
				if ($mrConfig['showSmoking']=="1")
					$roomRow['SMOKING'] =$smokingRoom;

				$room_image=getImageForProperty("room",$defaultProperty,$room->room_uid);
				$thumb=getThumbnailForImage($room_image);
				if ($thumb)
					$room_image=$thumb;
				$roomRow['ROOM_IMAGE'] =$room_image;

				$roomFeaturesString=$room->room_features_uid;
				$roomFeaturesArray=explode(",",$roomFeaturesString);
				$listTxt.="";
				if (count($roomFeaturesList) > 0)
					{
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
					}
				
				$roomRow['ROOM_FEATURES'] =$listTxt;
				$roomRowInfo[] = $roomRow;
				}
			
			
			$roomFeaturesRowInfo  =array();
			foreach($roomFeaturesList as $roomFeature)
				{
				$feature = array();
				$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomFeature&amp;featureUid=".($roomFeature->room_features_uid)),'');
				$jrtb .= $jrtbar->toolbarItem('copy',jomresURL(JOMRES_SITEPAGE_URL."&task=editRoomFeature&amp;featureUid=".($roomFeature->room_features_uid)."&clone=1"),'');
				$jrtb .= $jrtbar->endTable();
				$feature['BUTTONS']= $jrtb;
				$feature['FEATURE']=(jr_gettext(_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION.$roomFeature->room_features_uid,$roomFeature->feature_description));
				$roomFeaturesRowInfo[]=$feature;
				}
			
			$this->roomPropertyConfig_html( $newPropertyButton,$newRoomButton,$newRoomFeatureButton,$newRoomClassButton,$newPropertyFeatureButton, $roomRowInfo,$roomFeaturesRowInfo,$propertyRowInfo,$option,$roomCount,$roomTypeCount );
			}
		}

	function roomPropertyConfig_html( $newPropertyButton,$newRoomButton,$newRoomFeatureButton,$newRoomClassButton,$newPropertyFeatureButton, $roomRowInfo,$roomFeaturesRowInfo,$propertyRowInfo,$option,$roomCount,$roomTypeCount )
		{
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		$defaultProperty=$thisJRUser->defaultproperty;
		$currentProperty=getDefaultProperty();
		echo '<h2 class="page-header">'.jr_gettext('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE',_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE)."</h2>";
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
			$output=array();
			$pageoutput = array();
			
			$output['_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK',_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK);
			$output['_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS);
			$output['_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME);
			$output['_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER);
			$output['_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR);
			$output['_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS);
			$output['_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE);
			$output['_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING);
		
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_rooms.html');
			$tmpl->addRows( 'rows',$roomRowInfo);
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$rooms = $tmpl->getParsedTemplate();

			$contentPanel->setcontent($rooms);

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

			$output=array();
			$pageoutput = array();
			
			$output['_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT',_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT);
			$output['_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT',_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT);

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'list_room_features.html');
			$tmpl->addRows( 'rows',$roomFeaturesRowInfo);
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$rooms = $tmpl->getParsedTemplate();

			$contentPanel->startPanel(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES',_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES,FALSE));
			$contentPanel->setcontent($newRoomFeatureButton);
			$contentPanel->setcontent($rooms);
			$contentPanel->insertContent();
			$contentPanel->endPanel();
			}

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