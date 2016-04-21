<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j02320regprop3 
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager)
			return;

		$property_name						= trim(jomresGetParam( $_POST, 'property_name', "" ));
		
		if ($property_name == '')
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL."&task=registerProp_step1" ),"");
		
		if ($jrConfig['limit_property_country'] == "0")
			$property_country				= jomresGetParam( $_POST, 'new_property_country', "" );
		else
			$property_country				= $jrConfig['limit_property_country_country'];
		$property_region					= jomresGetParam( $_POST, 'region', "" );
		$property_email						= jomresGetParam( $_POST, 'property_email', "" );
		$property_site_id					= jomresGetParam( $_POST, 'property_site_id', '' );
		$property_type						= intval(jomresGetParam( $_POST, 'propertyType', "" ));
		$management_process					= jomresGetParam( $_POST, 'management_process','' );
		$price								= jomresGetParam( $_POST, 'price','' );

		$price=str_replace(",","",$price);
		
		if ( $management_process == "realestate" )
			$realestate						= true;

		$apikey=createNewAPIKey();

		$query     = "SELECT mrp_srp_flag FROM #__jomres_ptypes WHERE id = " . (int) $property_type . " LIMIT 1";
		$mrp_srp_flag = doSelectSql( $query , 1 );
		if ($mrp_srp_flag == "2" )
			$mrp_srp_flag = "0"; // We're going to assume that all newly created properties are MRPs

		if (!isset($jrConfig['automatically_approve_new_properties']))
			$jrConfig['automatically_approve_new_properties']=1;
		
		$approved = 0;
		if ($jrConfig['automatically_approve_new_properties'] =="1")
			$approved=1;
		
		$query="INSERT INTO #__jomres_propertys (`property_name`,`property_email`,`property_country`,`property_region`,`property_key` , `ptype_id`,`apikey` , `approved`,`property_site_id`)
			VALUES
			('".$property_name."','".$property_email."','".$property_country."','".$property_region."' , '".(float)$price."' , '".(int)$property_type."' , '".$apikey."' ,".(int)$approved." , '".$property_site_id."')";
		
		$newPropId=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY','_JOMRES_MR_AUDIT_INSERT_PROPERTY',FALSE));
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_NAME", $property_name, true, $newPropId );

		if ($realestate ==false)
			{
			if ($mrp_srp_flag == "0")
				$singleRoomProperty="0";
			else
				{
				$singleRoomProperty="1";
				$query="INSERT INTO #__jomres_rooms (
					`room_classes_uid`,
					`propertys_uid`,
					`max_people`
					)VALUES (
					0,
					".(int)$newPropId.",
					'10'
					)";
				if (!doInsertSql($query)) 
					trigger_error ("Sql error when saving new room", E_USER_ERROR);
				
				
				}
			$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$newPropId."','singleRoomProperty','".$singleRoomProperty."')";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',FALSE));
			}
		else
			{
			$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$newPropId."','is_real_estate_listing',1)";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',FALSE));
			}
		
		if (!$thisJRUser->userIsManager)
			{
			jr_import('jrportal_user_functions');
			$ufuncs=new jrportal_user_functions();
			$userdeets=$ufuncs->getJoomlaUserDetailsForJoomlaId($thisJRUser->id);
			$query="INSERT INTO #__jomres_managers (`userid`,`username`,`property_uid`,`access_level`)VALUES (".(int)$userdeets['id'].",'".(string)$userdeets['username']."','".(int)$newPropId."','2')";
			$managerId=doInsertSql($query,jr_gettext("_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY",'_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY'));
			}
		
		$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messaging->set_message(jr_gettext("_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY",'_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY'));
		$thisJRUser->authorisedProperties[]=$newPropId;
		updateManagerIdToPropertyXrefTable($thisJRUser->id,$thisJRUser->authorisedProperties );
		$componentArgs=array('property_uid'=>(int)$newPropId);
		$MiniComponents->triggerEvent('04901',$componentArgs); // Trigger point for welcome email
		$subject=jr_gettext("_JOMRES_REGISTRATION_CREATEDPROPERTY",'_JOMRES_REGISTRATION_CREATEDPROPERTY',false).$property_name;
		$message=jr_gettext("_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER",'_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER',false).$thisJRUser->username;

		if ($approved ==0)
			{
			$link = JOMRES_SITEPAGE_URL_ADMIN."&task=list_properties_awaiting_approval";
			$subject=jr_gettext("_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT",'_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT',false);
			$message=jr_gettext("_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT",'_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT',false).$link;
			sendAdminEmail($subject,$message);
			}

		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL."&thisProperty=".$newPropId ),"");
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