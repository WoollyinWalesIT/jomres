<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


/**
#
 * 
 #
* @package Jomres
#
 */
class j02320regprop3 {
	/**
	#
	 * Constructor: 
	#
	 */
	function j02320regprop3()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if (!subscribers_checkUserHasSubscriptionsToCreateNewProperty() && !$thisJRUser->superPropertyManager && $jrConfig['useSubscriptions']=="1" )
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=list_subscription_packages","");

		
		if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager)
			return;
			
		
		$roomClass						= jomresGetParam( $_POST, 'roomClass', 0 );
		$mrpsrp							= jomresGetParam( $_POST, 'mrpsrp', "" );

		$property_name					= jomresGetParam( $_POST, 'property_name', "" );
		$property_street				= jomresGetParam( $_POST, 'property_street', "" );
		$property_town					= jomresGetParam( $_POST, 'property_town', "" );
		$property_region				= jomresGetParam( $_POST, 'property_region', "" );
		$property_country				= jomresGetParam( $_POST, 'property_country', "" );
		$property_postcode				= jomresGetParam( $_POST, 'property_postcode', "" );
		$property_tel					= jomresGetParam( $_POST, 'property_tel', "" );
		$property_fax					= jomresGetParam( $_POST, 'property_fax', "" );
		$property_email					= jomresGetParam( $_POST, 'property_email', "" );
		$property_mappinglink			= urlencode(jomresGetParam( $_POST, 'property_mappinglink', "" ) );
		$property_description			= jomresGetParam( $_POST, 'property_description', "" );
		$property_checkin_times			= jomresGetParam( $_POST, 'property_checkin_times', "" );
		$property_area_activities		= jomresGetParam( $_POST, 'property_area_activities', "" );
		$property_driving_directions	= jomresGetParam( $_POST, 'property_driving_directions', "" );
		$property_airports				= jomresGetParam( $_POST, 'property_airports', "" );
		$property_othertransport		= jomresGetParam( $_POST, 'property_othertransport', "" );
		$property_policies_disclaimers	= jomresGetParam( $_POST, 'property_policies_disclaimers', "" );
		$property_type					= intval(jomresGetParam( $_POST, 'propertyType', "" ));
		//$isthisanmrp					= intval(jomresGetParam( $_POST, 'isthisanmrp', 0 ));
		$property_stars					= intval(jomresGetParam( $_POST, 'stars', "" ) );
		$features_list					= jomresGetParam( $_POST, 'pid', array() );

		$realestate						= (int)jomresGetParam( $_POST, 'realestate', 0 );
		
		if (count($features_list)>1)
			$featuresList=implode(",",$features_list);
		if (count($features_list)==1)
			{
			$featuresList=implode(",",$features_list);
			//
			}
		$featuresList=",".$featuresList.",";

		$apikey=createNewAPIKey();
		
		$query="INSERT INTO #__jomres_propertys (`property_name`,`property_street`,`property_town`,
			`property_region`,`property_country`,`property_postcode`,`property_tel`,`property_fax`,
			`property_email`,`property_features`,`property_mappinglink`,
			`property_description`,`property_checkin_times`,`property_area_activities`,
			`property_driving_directions`,`property_airports`,`property_othertransport`,`property_policies_disclaimers`,stars,ptype_id,apikey)
			VALUES
			('$property_name','$property_street',
			'$property_town','$property_region','$property_country','$property_postcode','$property_tel',
			'$property_fax','$property_email','$featuresList',
			'$property_mappinglink','$property_description','$property_checkin_times','$property_area_activities',
			'$property_driving_directions','$property_airports','$property_othertransport',
			'$property_policies_disclaimers','".(int)$property_stars."','".(int)$property_type."','".$apikey."'
			)";
		$newPropId=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY',_JOMRES_MR_AUDIT_INSERT_PROPERTY,FALSE));

		if ($realestate ==0)
			{
			if ($mrpsrp == "MRP")
				$singleRoomProperty="0";
			else
				{
				$singleRoomProperty="1";
				$query="INSERT INTO #__jomres_rooms (
					`room_classes_uid`,
					`propertys_uid`,
					`max_people`
					)VALUES (
					'".$roomClass."',
					".(int)$newPropId.",
					'100'
					)";
				if (!doInsertSql($query)) 
					trigger_error ("Sql error when saving new room", E_USER_ERROR);
				}
			$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$newPropId."','singleRoomProperty','".$singleRoomProperty."')";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));
			}
		else
			{
			$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$newPropId."','is_real_estate_listing',1)";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));
			}
			


		if (!$thisJRUser->userIsManager)
			{
			jr_import('jrportal_user_functions');
			$ufuncs=new jrportal_user_functions();
			$userdeets=$ufuncs->getJoomlaUserDetailsForJoomlaId($thisJRUser->id);
			$query="INSERT INTO #__jomres_managers (`userid`,`username`,`property_uid`,`access_level`)VALUES (".(int)$userdeets['id'].",'".(string)$userdeets['username']."','".(int)$newPropId."','2')";
			$managerId=doInsertSql($query,_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY);
			}
		
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message(_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY);
		$thisJRUser->authorisedProperties[]=$newPropId;
		updateManagerIdToPropertyXrefTable($thisJRUser->id,$thisJRUser->authorisedProperties );
		$componentArgs=array('property_uid'=>(int)$newPropId);
		$MiniComponents->triggerEvent('04901',$componentArgs); // Trigger point. Not currently used, but available if somebody wants a trigger point after the create property phase.
		$subject=_JOMRES_REGISTRATION_CREATEDPROPERTY.$property_name;
		$message=_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER.$thisJRUser->username;
		sendAdminEmail($subject,$message);
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForUser($thisJRUser->userid);
		if ($realestate ==0)
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=propertyadmin&thisProperty=".$newPropId,"");
		else
			jomresRedirect( JOMRES_SITEPAGE_URL."&thisProperty=".$newPropId,"");
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