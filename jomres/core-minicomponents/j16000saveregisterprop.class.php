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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000saveregisterprop
	{
	function j16000saveregisterprop()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}

		$roomClass						= jomresGetParam( $_POST, 'roomClass', 0 );
		$property_name					= jomresGetParam( $_POST, 'property_name', "New Property" );
		$property_street				= jomresGetParam( $_POST, 'property_street', "Street" );
		$property_town					= jomresGetParam( $_POST, 'property_town', "Town" );
		$property_region				= jomresGetParam( $_POST, 'property_region', "" );
		$property_country				= jomresGetParam( $_POST, 'property_country', "" );
		$property_postcode				= jomresGetParam( $_POST, 'property_postcode', "" );
		$property_tel					= jomresGetParam( $_POST, 'property_tel', "" );
		$property_fax					= jomresGetParam( $_POST, 'property_fax', "" );
		$property_email					= jomresGetParam( $_POST, 'property_email', "" );
		$property_mappinglink			= urlencode(jomresGetParam( $_POST, 'property_mappinglink', "" ) );
		$property_description			= jomresGetParam( $_POST, 'property_description', "Change Me" );
		$property_checkin_times			= jomresGetParam( $_POST, 'property_checkin_times', "" );
		$property_area_activities		= jomresGetParam( $_POST, 'property_area_activities', "" );
		$property_driving_directions	= jomresGetParam( $_POST, 'property_driving_directions', "" );
		$property_airports				= jomresGetParam( $_POST, 'property_airports', "" );
		$property_othertransport		= jomresGetParam( $_POST, 'property_othertransport', "" );
		$property_policies_disclaimers	= jomresGetParam( $_POST, 'property_policies_disclaimers', "" );
		$property_type					= intval(jomresGetParam( $_POST, 'propertyType', "" ));
		$property_stars					= intval(jomresGetParam( $_POST, 'stars', "" ) );
		$features_list					= jomresGetParam( $_POST, 'features_list', array() );
		$crate							= jomresGetParam( $_POST, 'crate', 0 );
		$userid						= jomresGetParam( $_POST, 'userid', 0 );

		if (count($features_list)>1)
			$featuresList=implode(",",$features_list);
		if (count($features_list)==1)
			{
			$featuresList=implode(",",$features_list);
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
			'$property_policies_disclaimers','$property_stars','$property_type','$apikey'
			)";
		$newPropId=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY',_JOMRES_MR_AUDIT_INSERT_PROPERTY,FALSE));
		
		if ($roomClass == 0)
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
		
		$today = date("Y/m/d");
		$validfrom=$today;
		$validto=date("Y/m/d",mktime(0, 0, 0, date("m")	, date("d"), date("Y")+1));
		if ($jrConfig['useGlobalRoomTypes']!="1")
			{
			$query="INSERT INTO #__jomres_room_classes (
			`room_class_abbv`,`room_class_full_desc`,`property_uid` )
			VALUES
			('CHANGE ME','CHANGE ME','$newPropId')";
			$rmTypeId=doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE);
			}
		else
			{
			$query="SELECT room_classes_uid FROM #__jomres_room_classes WHERE property_uid = '0' LIMIT 1";
			$rmTypeId=doSelectSql($query,1);
			}
		if ($singleRoomProperty==0)
			{
			$query="INSERT INTO #__jomres_rates (
				`rate_title`,`rate_description`,`validfrom`,`validto`,`roomrateperday`,
				`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,`ignore_pppn`,
				`allow_we`,`property_uid`)
				VALUES
				('CHANGE ME','CHANGE ME','$validfrom','$validto','100',
				'1','100','1','10','$rmTypeId','0',
				'1','$newPropId')";
			$tariffid=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF',_JOMRES_MR_AUDIT_INSERT_TARIFF,FALSE));
			$query="INSERT INTO #__jomres_rooms (
				`room_classes_uid`,`propertys_uid`,`room_name`,`room_number`,
				`room_floor`,`room_disabled_access`,`max_people`,`smoking`)
				VALUES
				('$rmTypeId','$newPropId','CHANGE ME','N/A',
				'N/A','0','10','0')";
				
			doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM);
			}
		
		$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$newPropId."','singleRoomProperty','".$singleRoomProperty."')";
		doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));
		
		// Let's find all of this manager's property uids, then we can add the new Id to that list. If we didn't create the whole id array, any item NOT in that array would be removed from the manager's properties by the updateManagerIdToPropertyXrefTable function
		$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '".$userid."'";
		$managersToPropertyList = doSelectSql($query);
		$authorisedProperties = array();
		foreach ($managersToPropertyList as $x)
			{
			$authorisedProperties[]=$x->property_uid;
			}
		$authorisedProperties[]=$newPropId;
		updateManagerIdToPropertyXrefTable($userid,$authorisedProperties );

		// Now we can create the cross reference in the property commisson rate xreference
		$property = new jrportal_property();
		$property->property_id=$newPropId;
		$property->crate_id=$crate;
		$property->commitNewProperty();

		jr_import('jrportal_user');
		$userObj= new jrportal_user();
		$userObj->id=$userid;
		$userObj->getJUser();

		$subject=_JOMRES_REGISTRATION_CREATEDPROPERTY.$property_name;
		$message=_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER.$userObj->username;
		sendAdminEmail($subject,$message);
		jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listpropertys","");
		$url=$url."&mosmsg=". urlencode( $msg );
		echo "<script>document.location.href='$url';</script>\n";
		exit();

		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}