<?php
/**
#
 * Mini-component core file: Shows the rooms/tariffs/room type/room feature/property tabs
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
 * Mini-component core file: Constructs the javascript tab booking details page
 #
* @package Jomres
#
 */
class j04900saveproperty {

	/**
	#
	 * Collates the room/property configuration tabs
	#
	 */
	function j04900saveproperty($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser,$jrConfig;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$this->newpropertyId	= 0;
		$propertyUid  = intval( jomresGetParam( $_POST, 'property_uid', 0 ) );
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($propertyUid);
		if ($propertyUid > 0 && !in_array($propertyUid,$jrConfig->authorisedProperties) )
			$propertyUid=getDefaultProperty();
		if ($jrConfig['selfRegistrationAllowed']=="0" && $propertyUid == 0)
			$propertyUid=getDefaultProperty();

		$property_name					= jomresGetParam( $_POST, 'property_name', "" );
		$property_street				= jomresGetParam( $_POST, 'property_street', "" );
		$property_town					= jomresGetParam( $_POST, 'property_town', "" );
		$property_region				= jomresGetParam( $_POST, 'region', "" );
		$property_country				= jomresGetParam( $_POST, 'country', "" );
		$property_postcode				= jomresGetParam( $_POST, 'property_postcode', "" );
		$property_tel					= jomresGetParam( $_POST, 'property_tel', "" );
		$property_fax					= jomresGetParam( $_POST, 'property_fax', "" );
		$property_email					= jomresGetParam( $_POST, 'property_email', "" );
		$metatitle						= jomresGetParam( $_POST, 'metatitle', "" );
		$metadescription				= jomresGetParam( $_POST, 'metadescription', "" );
		
		$lat							=jomresGetParam( $_POST, 'lat', 0.00 );
		$long							= jomresGetParam( $_POST, 'long', 0.00 );

		if ($jrConfig['allowHTMLeditor'] == "0")
			{
			$property_description			= jomresGetParam( $_POST, 'property_description', "" );
			$property_checkin_times			= jomresGetParam( $_POST, 'property_checkin_times', "" );
			$property_area_activities		= jomresGetParam( $_POST, 'property_area_activities', "" );
			$property_driving_directions	= jomresGetParam( $_POST, 'property_driving_directions', "" );
			$property_airports				= jomresGetParam( $_POST, 'property_airports', "" );
			$property_othertransport		= jomresGetParam( $_POST, 'property_othertransport', "" );
			$property_policies_disclaimers	= jomresGetParam( $_POST, 'property_policies_disclaimers', "" );
			}
		else
			{
			$property_description			= jomresGetParam( $_POST, 'property_description', "" , _MOS_ALLOWHTML );
			$property_checkin_times			= jomresGetParam( $_POST, 'property_checkin_times', "" , _MOS_ALLOWHTML );
			$property_area_activities		= jomresGetParam( $_POST, 'property_area_activities', "" , _MOS_ALLOWHTML );
			$property_driving_directions	= jomresGetParam( $_POST, 'property_driving_directions', "" , _MOS_ALLOWHTML );
			$property_airports				= jomresGetParam( $_POST, 'property_airports', "" , _MOS_ALLOWHTML );
			$property_othertransport		= jomresGetParam( $_POST, 'property_othertransport', "" , _MOS_ALLOWHTML );
			$property_policies_disclaimers	= jomresGetParam( $_POST, 'property_policies_disclaimers', "" , _MOS_ALLOWHTML );
			}
		$property_type					= jomresGetParam( $_POST, 'propertyType', 0 );
		$property_stars					= jomresGetParam( $_POST, 'stars', 0 );
		$features_list					= jomresGetParam( $_POST, 'features_list', "" );
		$pid							= jomresGetParam( $_POST, 'pid', array() );

		if ($property_name=="")
			$property_name='New property';

		if (!empty($features_list) )
			$features_list=array_merge($features_list,$pid);
		else
			$features_list=$pid;
		if (count($features_list)>1)
			$featuresList=implode(",",$features_list);
		if (count($features_list)==1)
			{
			$featuresList=$features_list[0];
			//$featuresList=$features_list;
			}
		$featuresList=",".$featuresList.",";

		if ($propertyUid==0)
			{
			$apikey=createNewAPIKey();
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT',_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT,FALSE);
			$query="INSERT INTO #__jomres_propertys (`property_name`,`property_street`,`property_town`,
					`property_region`,`property_country`,`property_postcode`,`property_tel`,`property_fax`,
					`property_email`,`property_features`,
					`property_description`,`property_checkin_times`,`property_area_activities`,
					`property_driving_directions`,`property_airports`,`property_othertransport`,`property_policies_disclaimers`,stars,ptype_id,apikey,`lat`,`long`,`metatitle`,`metadescription`)
					VALUES
					('$property_name','$property_street',
					'$property_town','$property_region','$property_country','$property_postcode','$property_tel',
					'$property_fax','$property_email','$featuresList',
					'$property_description','$property_checkin_times','$property_area_activities',
					'$property_driving_directions','$property_airports','$property_othertransport',
					'$property_policies_disclaimers','".(int)$property_stars."','".(int)$property_type."','$apikey','".$lat."','".$long."','".$metatitle."','".$metadescription."'
					)";
			$newPropId=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY',_JOMRES_MR_AUDIT_INSERT_PROPERTY,FALSE));
			
			if (!$newPropId)
				trigger_error ("Unable to insert into properties table, mysql db failure", E_USER_ERROR);
			$this->newpropertyId	=$newPropId;
			//updateActiveCountriesRegions($property_country,$property_region);
			$today = date("Y/m/d");
			$validfrom=$today;
			$validto=date("Y/m/d",mktime(0, 0, 0, date("m")  , date("d"), date("Y")+1));
			if ($jrConfig['useGlobalRoomTypes']!="1")
				{
				$query="INSERT INTO #__jomres_room_classes (
				`room_class_abbv`,`room_class_full_desc`,`property_uid` )
				VALUES
				('CHANGE ME','CHANGE ME','".(int)$newPropId."')";
				$rmTypeId=doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE);

				}
			else
				{
				$query="SELECT room_classes_uid FROM #__jomres_room_classes WHERE property_uid = '0' LIMIT 1";
				$rmTypeId=doSelectSql($query,1);
				}

			$query="INSERT INTO #__jomres_rates (
				`rate_title`,`rate_description`,`validfrom`,`validto`,`roomrateperday`,
				`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,`ignore_pppn`,
				`allow_we`,`property_uid`)
				VALUES
				('CHANGE ME','CHANGE ME','$validfrom','$validto','100',
				'1','100','1','10','".(int)$rmTypeId."','0',
				'1','".(int)$newPropId."')";
			$tariffid=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF',_JOMRES_MR_AUDIT_INSERT_TARIFF,FALSE));
			if (!$tariffid)
				trigger_error ("Unable to insert into tariffs table, mysql db failure", E_USER_ERROR);
			$query="INSERT INTO #__jomres_rooms (
			`room_classes_uid`,`propertys_uid`,`room_name`,`room_number`,
			`room_floor`,`room_disabled_access`,`max_people`,`smoking`)
			VALUES
			('".(int)$rmTypeId."','".(int)$newPropId."','CHANGE ME','N/A',
			'N/A','0','10','0')";
			if (!doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM))
				trigger_error ("Unable to insert into rooms table, mysql db failure", E_USER_ERROR);
			importSettings($newPropId);
			addPropertyUidToUsersProperties($newPropId);
			$thisJRUser->set_currentproperty($newPropId);
			$componentArgs=array('property_uid'=>$newPropId);
			$MiniComponents->triggerEvent('04901',$componentArgs); // Trigger point. Not currently used, but available if somebody wants a trigger point after the create property phase.
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION",$property_description,TRUE,$newPropId);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES",$property_checkin_times,TRUE,$newPropId);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES",$property_area_activities,TRUE,$newPropId);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS",$property_driving_directions,TRUE,$newPropId);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS",$property_airports,TRUE,$newPropId);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT",$property_othertransport,TRUE,$newPropId);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS",$property_policies_disclaimers,TRUE,$newPropId);
			returnToPropertyConfig($saveMessage);
			}
		else
			{
			$apiclause="";
			$query="SELECT apikey FROM #__jomres_propertys WHERE propertys_uid='".(int)$propertyUid."'";
			$apikey=doSelectSql($query,1);
			if (strlen($apikey)==0)
				{
				$apikey=createNewAPIKey();
				$apiclause="`apikey`='".$apikey."',";
				}
			$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE',_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE,FALSE);
			$query="UPDATE #__jomres_propertys SET
				`property_name`='$property_name',
				`property_street`='$property_street',
				`property_town`='$property_town',
				`property_region`='$property_region',
				`property_country`='$property_country',
				`property_postcode`='$property_postcode',
				`property_tel`='$property_tel',
				`property_fax`='$property_fax',
				`property_email`='$property_email',
				`property_features`='$featuresList',
				`property_key`='$property_key',
				`property_mappinglink`='$property_mappinglink',
				`property_description`='$property_description',
				`property_checkin_times`='$property_checkin_times',
				`property_area_activities`='$property_area_activities',
				`property_driving_directions`='$property_driving_directions',
				`property_airports`='$property_airports',
				`property_othertransport`='$property_othertransport',
				`property_policies_disclaimers`='$property_policies_disclaimers',
				`lat`='$lat',
				`long`='$long',
				`metatitle`='$metatitle',
				`metadescription`='$metadescription',
				`stars`='".(int)$property_stars."',
				".$apiclause."
				`ptype_id`='".(int)$property_type."'
				WHERE propertys_uid='".(int)$propertyUid."'";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_PROPERTY',_JOMRES_MR_AUDIT_UPDATE_PROPERTY,FALSE));
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION",$property_description,TRUE);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES",$property_checkin_times,TRUE);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES",$property_area_activities,TRUE);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS",$property_driving_directions,TRUE);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS",$property_airports,TRUE);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT",$property_othertransport,TRUE);
			updateCustomText("_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS",$property_policies_disclaimers,TRUE);
			jomresRedirect(JOMRES_SITEPAGE_URL."&task=editProperty&propertyUid=".$propertyUid);
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
		if ($this->newpropertyId >0)
			return $this->newpropertyId;
		else
			return null;
		}
	}


?>