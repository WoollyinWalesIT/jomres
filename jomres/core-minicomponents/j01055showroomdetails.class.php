<?php
/**
#
 * Mini-component core file: Constructs and displays room details. Will show either one room, or all depending on how it's called
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Shows room details/availability calendar in property details/popup depending on property configuration
 #
* @package Jomres
#
 */
class j01055showroomdetails {
	/**
	#
	 * Constructor: If this is a single room property it will show the availability calendar for the property, else if "all" it will list all rooms, else it will show the availability and details of just one room
	#
	 */
	function j01055showroomdetails($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$all=$componentArgs['all'];
		if ($all)
			$property_uid=(int)$componentArgs['property_uid'];
		global $mrConfig,$jomresConfig_live_site,$noshowavlcal,$noshowroom,$Itemid,$MiniComponents,$jrConfig;
		$this->retVals = '';
		$roomUid	= intval( jomresGetParam( $_REQUEST, 'roomUid', 0 ) );
		$featureList=array();
		if (!$all)
			$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking  FROM #__jomres_rooms WHERE  room_uid  = '".(int)$roomUid."'";
		else
			$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking  FROM #__jomres_rooms WHERE propertys_uid = '".(int)$property_uid."' ORDER BY room_number,room_name";
		$roomList =doSelectSql($query);
		if (count($roomList)>0)
			{
			if (!$all)
				{
				foreach ($roomList as $room)
					{
					$property_uid=(int)$room->propertys_uid;
					}
				getPropertySpecificSettings($property_uid);
				property_header($property_uid);
				}
			$headersList['HIMAGEHEADER']="";
			$headersList['COM_A_BASICTEMPLATE_SHOWROOMS']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS',_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS);
			$headersList['COM_A_BASICTEMPLATE_SHOWROOMS_TITLE']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE,FALSE);
			$headersList['HEADER_ROOMNUMBER']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER);
			$headersList['HEADER_ROOMTYPE']= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE);
			$headersList['HEADER_SMOKING']= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING);
			$headersList['HEADER_ROOMNAME']= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME);
			if ($all)
				$headersList['HEADER_AVLCALLINK']= jr_gettext('_JOMRES_FRONT_AVAILABILITY',_JOMRES_FRONT_AVAILABILITY);
			else
				$headersList['HEADER_AVLCALLINK']= "";
			$headersList['HEADER_ROOMFLOOR']= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR);
			$headersList['HEADER_DISABLEDACCESS']= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS);
			$headersList['HEADER_MAXPEOPLE']= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE);

			foreach ($roomList as $room)
				{
				$roomRow=array();
				$room_uid=$room->room_uid;
				$room_classes_uid=$room->room_classes_uid;
				$propertys_uid=$room->propertys_uid;
				$room_features_uid=$room->room_features_uid;
				$room_name=jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME'.$room_uid,stripslashes($room->room_name) );
				$room_number=stripslashes($room->room_number);
				$room_floor=stripslashes($room->room_floor);
				$room_disabled_access=$room->room_disabled_access;
				$max_people=$room->max_people;
				$smoking=$room->smoking;
//				$roomImageLocation=FALSE;
//				$query="SELECT filelocation FROM #__jomres_room_images WHERE roomid = '".(int)$room_uid."'";
//				$roomImageList =doSelectSql($query);
//				$room_image=$jomresConfig_live_site."/jomres/images/noimage.gif";
//				if (count($roomImageList)>0)
//					{
//					foreach ($roomImageList as $imageLocation)
//						{
//						$room_image=$jomresConfig_live_site.$imageLocation->filelocation;
//						}
//					if ($roomImageLocation!="")
//						$room_image=$jomresConfig_live_site.$roomImageLocation;
//					}
				$room_image=getImageForProperty("room",$property_uid,$room->room_uid);

				$avl_link="<a href=\"".jomresURL("index.php?option=com_jomres&task=showRoomDetails&Itemid=$Itemid&roomUid=$room_uid" )."\">".jr_gettext('_JOMRES_FRONT_AVAILABILITY',_JOMRES_FRONT_AVAILABILITY,$editable=true,$isLink=true)."</a>";
				$query = "SELECT room_class_abbv FROM #__jomres_room_classes WHERE room_classes_uid = '".(int)$room_classes_uid."'";
				$roomsClassList =doSelectSql($query);
				foreach ($roomsClassList as $roomClass)
					{
					$classAbbv = stripslashes($roomClass->room_class_abbv);
					}
				//$propertyName getPropertyNameNoTables($property_uid)
				if ($room_disabled_access == 1)
					$disabledAccess= jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
				else
					$disabledAccess=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO) ;
				if ($smoking == 1)
					$smoking= jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
				else
					$smoking= jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO);


				$roomFeatureDescriptionsArray=array();
				$roomFeatureUidsArray=explode(",",$room_features_uid);
				$featurelist=array();
				foreach ($roomFeatureUidsArray as $featureUid)
					{
					$requestedFeature=$featureUid;
					$query="SELECT feature_description FROM #__jomres_room_features WHERE room_features_uid = '".(int)$requestedFeature."'";
					$requestedRoomFeatures =doSelectSql($query);
					foreach ($requestedRoomFeatures as $pulledFeature)
						{
						$roomFeatureDescriptionsArray['ROOMFEATURE']=stripslashes($pulledFeature->feature_description);
						$featurelist[]=$roomFeatureDescriptionsArray;
						}
					}
				$roomRow['IMAGE']= $room_image;
				$roomRow['ROOMNUMBER']= $room_number;
				$roomRow['ROOMTYPE']= $classAbbv;
				$roomRow['SMOKING']= $smoking;
				$roomRow['ROOMNAME']= $room_name;
				if ($all)
					$roomRow['AVLCALLINK']= $avl_link;
				else
					$roomRow['AVLCALLINK']= "";
				$roomRow['ROOMFLOOR']= $room_floor;
				$roomRow['DISABLEDACCESS']= $disabledAccess;
				$roomRow['MAXPEOPLE']= $max_people;

				$rows[]=$roomRow;
				}
			$headers[]=$headersList;

			$tmpl = new patTemplate();
			if ($featurelist[0])
				$tmpl->addRows( 'room_features',$featurelist );
			$tmpl->addRows( 'room_headers', $headers);
			$tmpl->addRows( 'room_details', $rows );
			$mcOutput=$MiniComponents->getAllEventPointsData('01050');
			if (count($mcOutput)>0)
				{
				foreach ($mcOutput as $key=>$val)
					{
					$tmpl->addRows( 'customOutput_'.$key, array($val) );
					}
				}
			$componentArgs=array('tmpl'=>$tmpl);
		    if (!$all)
		    	{
				if ($MiniComponents->eventFileExistsCheck('00240'))
					{
					$MiniComponents->triggerEvent('00240',$componentArgs); //
					}
				else
					{
				    $tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'show_room.html' );
					$tmpl->displayParsedTemplate();
					}
				}
			else
				{
				if (!$noshowroom)
					{
					if ($MiniComponents->eventFileExistsCheck('00238'))
						{
						$MiniComponents->triggerEvent('00238',$componentArgs); //
						}
					else
						{
					    $tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
						$tmpl->readTemplatesFromInput( 'show_rooms.html' );
						if ($jrConfig['composite_property_details']!="1")
							$tmpl->displayParsedTemplate();
						else
							$this->retVals=$tmpl->getParsedTemplate();
						}
					}
				}
	    	if (!$all && !$noshowavlcal)  // This shows the room and it's availability if the user clicks on the availability link in the rooms list template. 
				{
				showAvailability($room_uid,"",$propertys_uid,6);
				}
			if ($mrConfig['dumpTemplate']=="1")
				$tmpl->dump();
			}
		}


	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS',_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS);
		$output[]		=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME);
		$output[]		=jr_gettext('_JOMRES_FRONT_AVAILABILITY',_JOMRES_FRONT_AVAILABILITY);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE);

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
		return $this->retVals;
		}
	}
?>