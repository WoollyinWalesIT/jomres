<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

//used for getting all properties in system, deleting, saving existing and inserting new ones
//to get the details of an existing property use basic_property_details class
class jomres_properties
	{
	private static $configInstance;

	public function __construct()
		{
		$this->init_property();
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_properties();
			}

		return self::$configInstance;
		}
	
	function init_property()
		{
		$this->propertys_uid 					= 0;
		$this->property_name 					= '';
		$this->property_street 					= '';
		$this->property_town 					= '';
		$this->property_region 					= '';
		$this->property_country 				= '';
		$this->property_postcode 				= '';
		$this->property_tel 					= '';
		$this->property_fax 					= '';
		$this->property_email 					= '';
		$this->property_features 				= array();
		$this->property_mappinglink 			= '';
		$this->property_description 			= '';
		$this->property_checkin_times 			= '';
		$this->property_area_activities 		= '';
		$this->property_driving_directions 		= '';
		$this->property_airports 				= '';
		$this->property_othertransport 			= '';
		$this->property_policies_disclaimers 	= '';
		$this->price		 					= '';
		$this->published 						= 0;
		$this->stars 							= 0;
		$this->superior 						= 0;
		$this->ptype_id							= 0;
		$this->apikey 							= '';
		$this->lat 								= '';
		$this->long 							= '';
		$this->metatitle 						= '';
		$this->metadescription 					= '';
		$this->metakeywords 					= '';
		//$this->timestamp 						= date("Y/m/d H:i:s");
		$this->approved 						= 0;
		$this->property_site_id 				= '';
		$this->permit_number 					= '';
		
		$this->all_property_uids				= false;
		}
	
	//Get all properties in the system
	function get_all_properties()
		{
		if ( is_array($this->all_property_uids) )
			{
			return true;
			}
		
		set_showtime( 'heavyweight_system', false );

		$query = "SELECT `propertys_uid`, `published` FROM #__jomres_propertys";
		$result = doSelectSql( $query );
		
		$numberOfPropertiesInSystem = count( $result );
		
		if ( $numberOfPropertiesInSystem > 200 ) 
			set_showtime( 'heavyweight_system', true );
		
		set_showtime( 'numberOfPropertiesInSystem', $numberOfPropertiesInSystem );
		
		$all_propertys           = array ();
		$all_published_propertys = array ();
		
		foreach ( $result as $r )
			{
			$all_propertys[] = $r->propertys_uid;
			
			if ( $r->published == "1" ) 
				$all_published_propertys[ ] = $r->propertys_uid;
			}

		set_showtime( 'all_properties_in_system', $all_propertys );
		set_showtime( 'published_properties_in_system', $all_published_propertys );
		
		$this->all_property_uids = array( 'all_propertys' => $all_propertys, 'all_published_propertys' => $all_published_propertys );
		
		return true;
		}
	
	function commit_new_property()
		{
		if ( $this->propertys_uid > 0 )
			{
			throw new Exception ("Error: Property uid already set. Are you sure you`re inserting a new property?");
			}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		//get property type details
		$jomres_property_types = jomres_singleton_abstract::getInstance( 'jomres_property_types' );
		$jomres_property_types->get_property_type($this->ptype_id);
		
		//set real estate flag
		// mrp_srp_flag:
		// 0 - hotel
		// 1 - villa/apartment
		// 2 - both - BC, resets to 0
		// 3 - tours
		// 4 - real estate
		$realestate	= false;
		if ( $jomres_property_types->property_type['mrp_srp_flag'] == 4 )
			$realestate	= true;
		
		//set new property api key
		$this->apikey = createNewAPIKey();
		
		//set mrp srp flag
		$mrp_srp_flag = $jomres_property_types->property_type['mrp_srp_flag'];
		if ($mrp_srp_flag == "2" )
			$mrp_srp_flag = "0"; // We're going to assume that all newly created properties are MRPs
		
		//set approved flag
		if ( !isset($jrConfig['automatically_approve_new_properties']) )
			$jrConfig['automatically_approve_new_properties'] = 1;

		if ( (int)$jrConfig['automatically_approve_new_properties'] == 1 )
			$this->approved = 1;
		
		//insert new property details
		$query="INSERT INTO #__jomres_propertys 
							(
							`property_name`,
							`property_email`,
							`property_country`,
							`property_region`,
							`property_key`,
							`ptype_id`,
							`apikey`, 
							`approved`,
							`property_site_id`
							)
						VALUES
							(
							'".$this->property_name."',
							'".$this->property_email."',
							'".$this->property_country."',
							'".$this->property_region."', 
							'".(float)$this->price."',
							".(int)$this->ptype_id.",
							'".$this->apikey."',
							".(int)$this->approved.",
							'".$this->property_site_id."'
							)";
		
		$this->propertys_uid = doInsertSql( $query, jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY','_JOMRES_MR_AUDIT_INSERT_PROPERTY',false) );
		
		if ( !$this->propertys_uid )
			{
			throw new Exception ( "Error: New property insert failed." );
			}
		
		//insert the property name in the custom text table
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_NAME", $this->property_name, true, $this->propertys_uid );
		
		//insert settings
		if ( !$realestate )
			{
			if ($mrp_srp_flag == "0")
				$singleRoomProperty = "0";
			else
				{
				$singleRoomProperty = "1";
				
				//create a default single room property room that can be edited later
				$query="INSERT INTO #__jomres_rooms 
									(
									`room_classes_uid`,
									`propertys_uid`,
									`max_people`
									)
								VALUES 
									(
									0,
									".(int)$this->propertys_uid.",
									10
									)";
				
				if ( !doInsertSql( $query ) ) 
					{
					throw new Exception ( "Error: New srp default room insert failed." );
					}
				}
			$query = "INSERT INTO #__jomres_settings 
								(
								`property_uid`,
								`akey`,
								`value`
								) 
							VALUES 
								(
								".(int)$this->propertys_uid.",
								'singleRoomProperty',
								'".$singleRoomProperty."'
								)";
			
			if ( !doInsertSql( $query, jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',false) ) )
				{
				throw new Exception ( "Error: singleRoomProperty setting insert failed." );
				}
			}
		else
			{
			$query = "INSERT INTO #__jomres_settings 
								(
								`property_uid`,
								`akey`,
								`value`
								) 
							VALUES 
								(
								".(int)$this->propertys_uid.",
								'is_real_estate_listing',
								'1'
								)";
			if ( !doInsertSql( $query, jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',false) ) )
				{
				throw new Exception ( "Error: is_real_estate_listing setting insert failed." );
				}
			}
		
		//insert new manager
		if ( !$thisJRUser->userIsManager )
			{
			jr_import('jrportal_user_functions');
			$ufuncs = new jrportal_user_functions();
			$userdeets = $ufuncs->getJoomlaUserDetailsForJoomlaId( $thisJRUser->id );
			
			$query = "INSERT INTO #__jomres_managers 
								(
								`userid`,
								`username`,
								`property_uid`,
								`access_level`
								) 
							VALUES 
								(
								".(int)$userdeets['id'].", 
								'".$userdeets['username']."', 
								'".(int)$this->propertys_uid."', 
								'2'
								)";
			if ( !doInsertSql( $query, jr_gettext("_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY",'_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY') ) )
				{
				throw new Exception ( "Error: New manager insert failed." );
				}
			}
		
		//update authorised properties for this (new) manager
		$thisJRUser->authorisedProperties[] = $this->propertys_uid;
		updateManagerIdToPropertyXrefTable( $thisJRUser->id, $thisJRUser->authorisedProperties );
		
		return true;
		}
	
	function commit_update_property()
		{
		if ( $this->propertys_uid == 0 )
			{
			throw new Exception ("Error: Property uid not set. Are you sure you`re editing an existing property?");
			}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		//check if the new property type allows booking rooms in the property, the property itself or neither (tour/real estate), so we can delete all rooms and tariffs
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($this->propertys_uid);

		if ($this->ptype_id != $current_property_details->ptype_id)
			{
			// we`ll use function params here because this way we can reuse both functions from other code too if needed
			if( !$this->check_mrp_srp_flags_match( $this->ptype_id, $current_property_details->ptype_id ) )
				{
				//delete rooms, tariffs and property settings
				$this->delete_rooms_tariffs_settings();
				
				//update property settings table, the singleRoomProperty and is_real_estate_listing settings
				$this->update_property_settings();
				}
			}
		
		//check if the property has an api key
		$apiclause = "";
		
		$query = "SELECT `apikey` FROM #__jomres_propertys WHERE `propertys_uid` = " . (int)$this->propertys_uid;
		$apikey = doSelectSql( $query, 1 );
		
		if ( trim($apikey) == '' )
			{
			$this->apikey = createNewAPIKey();
			$apiclause = " `apikey` = '" . $this->apikey . "', ";
			}
		
		//approval and published status
		$this->approved 			= 1;
		
		if ( (int)$jrConfig['automatically_approve_new_properties'] == 0 && !$thisJRUser->superPropertyManager )
			{
			$this->approved = 0;
			}
		
		if ( !empty($this->property_features) )
			{
			$property_features = ','.jomres_implode($this->property_features).',';
			}
		else
			{
			$property_features = '';
			}

		//update property
		$query = "UPDATE #__jomres_propertys SET
						`property_name` = '".$this->property_name."',
						`property_street` = '".$this->property_street."',
						`property_town` = '".$this->property_town."',
						`property_region` = '".$this->property_region."',
						`property_country` = '".$this->property_country."',
						`property_postcode` = '".$this->property_postcode."',
						`property_tel` = '".$this->property_tel."',
						`property_fax` = '".$this->property_fax."',
						`property_email` = '".$this->property_email."',
						`property_features` = '".$property_features."',
						`property_key` = '".(string)$this->price."',
						`property_mappinglink` = '".$this->property_mappinglink."',
						`property_description` = '".$this->property_description."',
						`property_checkin_times` = '".$this->property_checkin_times."',
						`property_area_activities` = '".$this->property_area_activities."',
						`property_driving_directions` = '".$this->property_driving_directions."',
						`property_airports` = '".$this->property_airports."',
						`property_othertransport` = '".$this->property_othertransport."',
						`property_policies_disclaimers` = '".$this->property_policies_disclaimers."',
						`lat` = '".$this->lat."',
						`long` = '".$this->long."',
						`metatitle` = '".$this->metatitle."',
						`metadescription` = '".$this->metadescription."',
						`metakeywords` = '".$this->metakeywords."',
						`approved` = ".(int)$this->approved.",
						`stars` = ".(int) $this->stars.",
						`superior` = ".(int)$this->superior.",
						" . $apiclause . "
						`ptype_id` = ".(int)$this->ptype_id.",
						`property_site_id` = '".$this->property_site_id."',
						`permit_number` = '".$this->permit_number."'
					WHERE `propertys_uid` = " . (int)$this->propertys_uid;

		if ( !doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', false ) ) )
			{
			throw new Exception ("Error: Property update intert failed.");
			}
		
		//update custom text
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_NAME", $this->property_name, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_STREET", $this->property_street, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_TOWN", $this->property_town, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION", $this->property_description, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES", $this->property_checkin_times, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES", $this->property_area_activities, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS", $this->property_driving_directions, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS", $this->property_airports, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT", $this->property_othertransport, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS", $this->property_policies_disclaimers, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE", $this->metatitle, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION", $this->metadescription, true );
		updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS", $this->metakeywords, true );
		
		return true;
		}
	
	private function check_mrp_srp_flags_match($ptype_id1 = 0, $ptype_id2 = 0)
		{
		if ( $ptype_id1 == 0 )
			{
			throw new Exception ("Error: Property type id 1 not set.");
			}
		
		if ( $ptype_id2 == 0 )
			{
			throw new Exception ("Error: Property type id 2 not set.");
			}
		
		//get all property type details
		$jomres_property_types = jomres_singleton_abstract::getInstance( 'jomres_property_types' );
		$jomres_property_types->get_all_property_types();

		if ( isset($jomres_property_types->property_types[$ptype_id1]['mrp_srp_flag']) )
			$mrp_srp_1 = $jomres_property_types->property_types[$ptype_id1]['mrp_srp_flag'];
		else
			throw new Exception ("Error: Property type id 1 doesn`t exist.");
		
		if ( isset($jomres_property_types->property_types[$ptype_id2]['mrp_srp_flag']) )
			$mrp_srp_2 = $jomres_property_types->property_types[$ptype_id2]['mrp_srp_flag'];
		else
			throw new Exception ("Error: Property type id 2 doesn`t exist.");
		
		if ( $mrp_srp_1 == $mrp_srp_2 )
			return true;
		else
			return false;
		}
	
	private function delete_rooms_tariffs_settings( $delete_rooms = true, $delete_tariffs = true, $delete_settings = true )
		{
		if ( $this->propertys_uid == 0 )
			{
			throw new Exception ("Error: Property uid not set.");
			}

		//delete rooms
		if ( $delete_rooms )
			{
			$query="DELETE FROM #__jomres_rooms WHERE `propertys_uid` = ".(int)$this->propertys_uid." LIMIT 10000";
			if ( !doInsertSql($query,'') )
				{
				throw new Exception ("Error: Could not delete from rooms table.");
				}
			
			//delete room features
			$query="DELETE FROM #__jomres_room_features WHERE `property_uid` = ".(int)$this->propertys_uid." LIMIT 10000";
			if ( !doInsertSql($query,'') )
				{
				throw new Exception ("Error: Could not delete from room features table.");
				}
			}

		//delete tariffs
		if ( $delete_tariffs )
			{
			$query="DELETE FROM #__jomres_rates WHERE `property_uid` = ".(int)$this->propertys_uid." LIMIT 10000";
			if ( !doInsertSql($query,'') )
				{
				throw new Exception ("Error: Could not delete from rates table.");
				}
			
			//delete tarifftype xrefs
			$query="DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE `property_uid` = ".(int)$this->propertys_uid." LIMIT 10000";
			if ( !doInsertSql($query,'') )
				{
				throw new Exception ("Error: Could not delete from tarifftype xref table.");
				}
			}
		
		//delete property settings
		if ( $delete_settings )
			{
			$query="DELETE FROM #__jomres_settings WHERE `property_uid` = ".(int)$this->propertys_uid." LIMIT 10000";
			if ( !doInsertSql($query,'') )
				{
				throw new Exception ("Error: Could not delete from settings table.");
				}
			}
		
		return true;
		}
	
	private function update_property_settings()
		{
		if ( $this->propertys_uid == 0 )
			{
			throw new Exception ("Error: Property uid not set.");
			}
		
		//get all property type details
		$jomres_property_types = jomres_singleton_abstract::getInstance( 'jomres_property_types' );
		$jomres_property_types->get_property_type($this->ptype_id);

		// mrp_srp_flag:
		// 0 - hotel
		// 1 - villa/apartment
		// 2 - both - BC, resets to 0
		// 3 - tours
		// 4 - real estate
		switch( $jomres_property_types->property_type['mrp_srp_flag'] )
			{
			case 1:
				$singleRoomProperty = 1;
				$is_real_estate_listing = 0;
				break;
			case 2:
				$singleRoomProperty = 0;
				$is_real_estate_listing = 0;
				break;
			case 3:
				$singleRoomProperty = 1;
				$is_real_estate_listing = 0;
				break;
			case 4:
				$singleRoomProperty = 0;
				$is_real_estate_listing = 1;
				break;
			default:
				$singleRoomProperty = 0;
				$is_real_estate_listing = 0;
				break;
			}
		
		$query = "INSERT INTO #__jomres_settings 
							(
							`property_uid`,
							`akey`,
							`value`
							) 
						VALUES 
							(
							".(int)$this->propertys_uid.",
							'is_real_estate_listing',
							'".$is_real_estate_listing."'
							),
							(
							".(int)$this->propertys_uid.",
							'singleRoomProperty',
							'".$singleRoomProperty."'
							)";
		if ( !doInsertSql( $query, '' ) )
			{
			throw new Exception ( "Error: Cound not insert singleRoomProperty and is_real_estate_listing settings." );
			}
		
		return true;
		}
	}
