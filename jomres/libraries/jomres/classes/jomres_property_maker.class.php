<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_property_maker
	{
	function jomres_property_maker($cms_user_id = 0)
		{
		$this->property_details = array();
		$this->property_mrconfig = array();
		$this->property_uid=0;
		$this->managers_uid = 0;
		$this->init_default_details();
		$this->cms_user_id = $cms_user_id;
		$this->success = false;
		$this->errors = array();
		}

	function set_property_detail($detail,$setting)
		{
		if (array_key_exists($detail,$this->property_details))
			{
			$this->property_details[$detail]=$setting;
			return true;
			}
		return false;
		}

	function set_config_setting($element,$setting)
		{
		$this->property_mrconfig[$element] = $setting;
		return true;
		}

	function create_new_property()
		{
		if (!$this->check_cms_user_id())
			return false;

		$this->insert_property();
		if ($this->property_uid > 0)
			{
			$this->insert_room_property_type_setting();
			if ($this->property_details['rate_per_night'] > 0.00)
				{
				$this->init_tariff();
				$this->create_new_tariff();
				}

			addPropertyUidToManagersProperties($this->cms_user_id,$this->property_uid);
			$this->success = true;
			}
		else
			{
			$this->errors[] = "Sql error when inserting property";
			return false;
			}
		return	$this->success;
		}

	function insert_config_settings()
		{
		if (count($this->property_mrconfig)>0)
			{
			foreach ($this->property_mrconfig as $k=>$v)
				{
				$element	= filter_var(RemoveXSS($k),FILTER_SANITIZE_SPECIAL_CHARS);
				$value		= filter_var(RemoveXSS($v),FILTER_SANITIZE_SPECIAL_CHARS);
				insertSetting($this->property_uid,$element,$value);
				}
			}
		}

	function insert_room_property_type_setting()
		{
		if ($this->property_details['is_real_estate_listing'] ==0)
			{
			if ($this->property_details['mrpsrp'] == "MRP")
				$singleRoomProperty="0";
			else
				$singleRoomProperty="1";

			$query="INSERT INTO #__jomres_rooms (
				`room_classes_uid`,
				`propertys_uid`,
				`max_people`
				)VALUES (
				'".$this->property_details['roomClass']."',
				".$this->property_uid.",
				'".(int)$this->property_details['max_in_room_or_property']."'
				)";
			if (!doInsertSql($query))
				$this->errors[] = "Sql error when saving new room";

			$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".$this->property_uid."','singleRoomProperty','".$singleRoomProperty."')";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));
			}
		else
			{
			$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".$this->property_uid."','is_real_estate_listing',1)";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));
			}
		}

	function insert_property()
		{
		$apikey=createNewAPIKey();
		$query="INSERT INTO #__jomres_propertys (`property_name`,`property_street`,`property_town`,
			`property_region`,`property_country`,`property_postcode`,`property_tel`,`property_fax`,
			`property_email`,`property_features`,`property_mappinglink`,
			`property_description`,`property_checkin_times`,`property_area_activities`,
			`property_driving_directions`,`property_airports`,`property_othertransport`,`property_policies_disclaimers`,stars,ptype_id,apikey)
			VALUES
			(
			'".filter_var(RemoveXSS($this->property_details['property_name']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_street']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_town']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_region']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_country']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_postcode']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_tel']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_fax']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_email']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['features_list']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_mappinglink']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_description']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_checkin_times']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_area_activities']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_driving_directions']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_airports']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_othertransport']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['property_policies_disclaimers']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			".(int)$this->property_details['property_stars'].",
			".(int)$this->property_details['property_type'].",
			'".$apikey."'
			)";
		$this->property_uid=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY',_JOMRES_MR_AUDIT_INSERT_PROPERTY,FALSE));
		if ($this->property_uid > 0)
			return true;
		return false;
		}

	function create_new_tariff()
		{
		$query="INSERT INTO #__jomres_rates (
			`rate_title`,
			`rate_description`,
			`validfrom`,
			`validto`,
			`roomrateperday`,
			`mindays`,
			`maxdays`,
			`minpeople`,
			`maxpeople`,
			`roomclass_uid`,
			`ignore_pppn`,
			`allow_ph`,
			`allow_we`,
			`weekendonly`,
			`validfrom_ts`,
			`validto_ts`,
			`property_uid`
			)VALUES (
			'".filter_var(RemoveXSS($this->property_details['tariff']['rate_title']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".filter_var(RemoveXSS($this->property_details['tariff']['rate_description']),FILTER_SANITIZE_SPECIAL_CHARS)."',
			'".$this->property_details['tariff']['validfrom']."',
			'".$this->property_details['tariff']['validto']."',
			'".(float)$this->property_details['rate_per_night']."',
			'".(int)$this->property_details['tariff']['mindays']."',
			'".(int)$this->property_details['tariff']['maxdays']."',
			'".(int)$this->property_details['tariff']['minpeople']."',
			'".(int)$this->property_details['tariff']['max_people']."',
			'".(int)$this->property_details['tariff']['roomclass_uid']."',
			'".(int)$this->property_details['tariff']['ignore_pppn']."',
			'".(int)$this->property_details['tariff']['allow_ph']."',
			'".(int)$this->property_details['tariff']['allow_we']."',
			'".(int)$this->property_details['tariff']['weekendonly']."',
			'".$this->property_details['tariff']['validfrom_ts']."',
			'".$this->property_details['tariff']['validto_ts']."',
			'".(int)$this->property_uid."'
			)";
		$result = doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_TARIFF);
		if ($result)
			return true;
		else
			{
			$this->errors[] = "Could not insert tariff ".$query;
			return false;
			}
		}

	function check_cms_user_id()
		{
		if ($this->cms_user_id ==0)
			{
			$this->errors[] = "CMS userid not set";
			return false;
			}

		$query = "SELECT manager_uid FROM #__jomres_managers WHERE userid = '".(int)$this->cms_user_id."' LIMIT 1";
		$authorisedUsers=doSelectSql($query);
		if (count($authorisedUsers) == 0)
			{
			$this->errors[] = "CMS user could not be confirmed as manager";
			return false;
			}
		else
			{
			foreach ($authorisedUsers as $u)
				{
				$this->managers_uid = $u->manager_uid;
				}
			}
		return true;
		}
	function init_default_details()
		{
		$this->property_details['roomClass']					= 5;  // The default room type. This information is held in the #__jomres_room_classes " table. Only needed if the property is an SRP
		$this->property_details['max_in_room_or_property']		= 2;

		$this->property_details['property_name']				= "New Property";
		$this->property_details['property_street']				= "Street";
		$this->property_details['property_town']				= "Town";
		$this->property_details['property_region']				= "";
		$this->property_details['property_country']				= "GB";
		$this->property_details['property_postcode']			= "";
		$this->property_details['property_tel']					= "";
		$this->property_details['property_fax']					= "";
		$this->property_details['property_email']				= "";
		$this->property_details['property_mappinglink']			= "";
		$this->property_details['property_description']			= "Change Me";
		$this->property_details['property_checkin_times']		= "";
		$this->property_details['property_area_activities']		= "";
		$this->property_details['property_driving_directions']	= "";
		$this->property_details['property_airports']			= "";
		$this->property_details['property_othertransport']		= "";
		$this->property_details['property_policies_disclaimers']= "";
		$this->property_details['property_type']				= 1;  // Eg Hotel/Villa/Cottage
		$this->property_details['property_stars']				= 0;
		$this->property_details['features_list']				= "";
		$this->property_details['crate']						= 0;
		$this->property_details['is_real_estate_listing']		= 0;

		$this->property_details['roomClass']					= 0;  // Complex for historic reasons. The room class is the room type or the property type (eg 1 bedroom)
		$this->property_details['mrpsrp']						= "MRP"; // By default propertys are MRPs

		// If this is set to something other than 0.00 when the property is created then a tariff will be created.
		$this->property_details['rate_per_night']				= 0.00;


		}
		
	function init_tariff()
		{
		// We aren't going to offer complex tariff settings in this maker, instead we'll create another script at a later time to perform that functionaity as there are likely to be users who want to modify tariffs on the fly to already created propertys
		// For now, we'll stick to creating a simple tariff
		// We'll call it later than init_default_details because we want to know the real $this->property_details['roomClass'], not the default
		$this->property_details['tariff']['rate_title']			= "Tariff";
		$this->property_details['tariff']['rate_description']	= "";

		$this->property_details['tariff']['mindays']			= 1;
		$this->property_details['tariff']['maxdays']			= 100;
		$this->property_details['tariff']['minpeople']			= 1;
		$this->property_details['tariff']['max_people']			= $this->property_details['max_in_room_or_property'];
		$this->property_details['tariff']['roomclass_uid']		= $this->property_details['roomClass'];
		$this->property_details['tariff']['ignore_pppn']		= 0;
		$this->property_details['tariff']['allow_ph']			= 0;   // Not currently used. A historic element, but we'll keep it anyway
		$this->property_details['tariff']['allow_we']			= 1;
		$this->property_details['tariff']['weekendonly']		= 0;
		date_default_timezone_set('UTC');
		$this->property_details['tariff']['validfrom']			= date("Y/m/d");
		$this->property_details['tariff']['validto']			= date("Y/m/d",strtotime("+10 years"));
		$this->property_details['tariff']['validfrom_ts']		= str_replace("/","-",$this->property_details['tariff']['validfrom']);
		$this->property_details['tariff']['validto_ts']			= str_replace("/","-",$this->property_details['tariff']['validto']);		
		}
	}
?>