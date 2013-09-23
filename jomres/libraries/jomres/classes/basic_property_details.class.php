<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class basic_property_details
	{
	// Store the single instance of Database
	private static $configInstance;
	private static $internal_debugging;
	private static $property_data;

	public function __construct()
		{
		self::$internal_debugging          = false;
		self::$property_data               = array ();
		$this->multi_query_result          = array ();
		$this->untranslated_property_names = array ();
		$this->property_names = array();
		$this->get_all_room_types();
		$this->get_all_property_types();
		$this->get_all_property_features();
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new basic_property_details();
			}

		return self::$configInstance;
		}

	public function __clone()
		{
		trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
		}

	public function __set( $setting, $value )
		{
		if ( self::$internal_debugging ) echo "Setting " . $setting . " to " . $value . " <br>";
		$this->$setting = $value;

		return true;
		}

	public function __get( $setting )
		{
		if ( self::$internal_debugging ) echo "Getting " . $setting . " which is " . $this->$setting . "<br>";

		return $this->$setting;
		}

	public function get_property_name( $property_uid = 0, $editable = true )
		{
		if ( $property_uid == 0 ) $property_uid = $this->property_uid;
		
		if (!array_key_exists($property_uid, $this->property_names))
			$this->get_property_name_multi(array($property_uid));
		
		$property_name = $this->property_names[ $property_uid ];

		return $property_name;
		}

	public function get_property_name_multi( $property_uids = array (), $database_obj = false )
		{
		//return false if there are no property uids in the array/object
		if ( count( $property_uids ) == 0 ) return false;

		$customTextObj = jomres_singleton_abstract::getInstance( 'custom_text' );
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );

		//change $property_uids object to array
		if ( $database_obj )
			{
			$tmp_arr = array ();
			foreach ( $property_uids as $id )
				{
				$tmp_arr[] = $id->propertys_uid;
				}
			if (count($tmp_arr)>0)
				{
				$property_uids=array();
				$property_uids=$tmp_arr;
				unset ( $tmp_arr );
				}
			}
		
		//check if we`re getting property names for all properties in the system
		sort($property_uids);
		$all_properties_in_system=get_showtime('all_properties_in_system');
		sort($all_properties_in_system);
		$diff=array_diff($all_properties_in_system, $property_uids);
		
		//check if property names are cached
		$cached_property_names=$c->isCached('all_property_names_in_system');
		$cached_property_names_untranslated=$c->isCached('all_property_names_in_system_untranslated');

		//set property names from cache if available
		if ( $cached_property_names )
			{
			$this->property_names=$c->retrieve('all_property_names_in_system');
			$this->untranslated_property_names=$c->retrieve('all_property_names_in_system_untranslated');
			
			return $this->property_names;
			}
		
		if ( !$cached_property_names )
			{
			$performance_monitor = jomres_singleton_abstract::getInstance( 'jomres_performance_monitor' );
			$performance_monitor->set_point( "pre-property name multi" );

			$original_property_uid = get_showtime( 'property_uid' );
			
			//unset property uids that already have been handled by $this->gather_data_multi() function
			$temp_array = array ();
			foreach ( $property_uids as $id )
				{
				if ( !array_key_exists( $id, $this->multi_query_result ) ) $temp_array[ ] = $id;
				}
			$property_uids = $temp_array;
			unset ( $temp_array );

			$gor = genericOr( $property_uids, 'propertys_uid' );
	
			$query          = "SELECT property_name,propertys_uid FROM #__jomres_propertys WHERE " . $gor;
			$property_names = doSelectSql( $query );
			if ( !get_showtime( 'heavyweight_system' ) )
				{
				foreach ( $property_names as $p )
					{
					// We need to set showtime here otherwise the jr_gettext function won't know which property's info we're looking for
					set_showtime( 'property_uid', $p->propertys_uid );
					$this->untranslated_property_names[ $p->propertys_uid ] = $p->property_name;
					$property_name                                          = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_NAME', $p->property_name, false, false );
					$this->property_names[ $p->propertys_uid ]              = $property_name;
					}
				}
			else
				{
				foreach ( $property_names as $p )
					{
					$this->property_names[ $p->propertys_uid ]              = $p->property_name;
					$this->untranslated_property_names[ $p->propertys_uid ] = $p->property_name;
					}
				}
			if (count($diff)==0 && get_showtime('all_properties_in_system'))
				{
				$c->store('all_property_names_in_system',$this->property_names);
				$c->store('all_property_names_in_system_untranslated',$this->untranslated_property_names);
				}
			set_showtime( 'property_uid', $original_property_uid );
			$performance_monitor->set_point( "post-property name multi" );
			}

		return $this->property_names;
		}


	public function gather_data( $property_uid = 0 )
		{
		if ( $property_uid == $this->property_uid ) // No need to re-gather the info
			{
			return true;
			}
		
		$this->property_uid = (int) $property_uid;
		
		if ( $this->property_uid === 0 )
			{
			echo "Fatal Error, property uid not set, exiting <br/>";
			//echo_backtrace();
			exit;
			}
		
		$customTextObj      = jomres_singleton_abstract::getInstance( 'custom_text' );
		$customTextObj->get_custom_text_for_property( $this->property_uid );

		$this->gather_data_multi(array($this->property_uid)); //if more properties are on the same page (for example if we have an NGM module published) and changes the property uid showtime, when the showtime is set back to this property uid, the query will be executed again, because this property uid is not in the multi_query_result. So we use gather_data_multi to get data for this property_uid, then reuse this data later from $this->multi_query_result if necessary.
		
		if ( array_key_exists( $this->property_uid, $this->multi_query_result ) )
			{
			$this->property_name         = $this->multi_query_result[ $this->property_uid ][ 'property_name' ];
			$this->property_street       = $this->multi_query_result[ $this->property_uid ][ 'property_street' ];
			$this->property_town         = $this->multi_query_result[ $this->property_uid ][ 'property_town' ];
			$this->property_postcode     = $this->multi_query_result[ $this->property_uid ][ 'property_postcode' ];
			$this->property_region       = $this->multi_query_result[ $this->property_uid ][ 'property_region' ];
			$this->property_country      = $this->multi_query_result[ $this->property_uid ][ 'property_country' ];
			$this->property_country_code = $this->multi_query_result[ $this->property_uid ][ 'property_country_code' ];

			$this->property_tel               = $this->multi_query_result[ $this->property_uid ][ 'property_tel' ];
			$this->property_fax               = $this->multi_query_result[ $this->property_uid ][ 'property_fax' ];
			$this->property_email             = $this->multi_query_result[ $this->property_uid ][ 'property_email' ];
			$this->published                  = $this->multi_query_result[ $this->property_uid ][ 'published' ];
			$this->ptype_id                   = $this->multi_query_result[ $this->property_uid ][ 'ptype_id' ];
			$this->property_type              = $this->multi_query_result[ $this->property_uid ][ 'property_type' ];
			$this->property_type_title        = $this->multi_query_result[ $this->property_uid ][ 'property_type_title' ];
			$this->stars                      = $this->multi_query_result[ $this->property_uid ][ 'stars' ];
			$this->superior                   = $this->multi_query_result[ $this->property_uid ][ 'superior' ];
			$this->lat                        = $this->multi_query_result[ $this->property_uid ][ 'lat' ];
			$this->long                       = $this->multi_query_result[ $this->property_uid ][ 'long' ];
			$this->metatitle                  = $this->multi_query_result[ $this->property_uid ][ 'metatitle' ];
			$this->metadescription            = $this->multi_query_result[ $this->property_uid ][ 'metadescription' ];
			$this->metakeywords               = $this->multi_query_result[ $this->property_uid ][ 'metakeywords' ];
			$this->property_features          = $this->multi_query_result[ $this->property_uid ][ 'property_features' ];
			$this->property_mappinglink       = $this->multi_query_result[ $this->property_uid ][ 'property_mappinglink' ];
			$this->real_estate_property_price = $this->multi_query_result[ $this->property_uid ][ 'real_estate_property_price' ];

			$this->property_description          = $this->multi_query_result[ $this->property_uid ][ 'property_description' ];
			$this->property_checkin_times        = $this->multi_query_result[ $this->property_uid ][ 'property_checkin_times' ];
			$this->property_area_activities      = $this->multi_query_result[ $this->property_uid ][ 'property_area_activities' ];
			$this->property_driving_directions   = $this->multi_query_result[ $this->property_uid ][ 'property_driving_directions' ];
			$this->property_airports             = $this->multi_query_result[ $this->property_uid ][ 'property_airports' ];
			$this->property_othertransport       = $this->multi_query_result[ $this->property_uid ][ 'property_othertransport' ];
			$this->property_policies_disclaimers = $this->multi_query_result[ $this->property_uid ][ 'property_policies_disclaimers' ];
			$this->apikey                        = $this->multi_query_result[ $this->property_uid ][ 'apikey' ];
			$this->approved                      = $this->multi_query_result[ $this->property_uid ][ 'approved' ];

			$this->accommodation_tax_rate		 =$this->multi_query_result[ $this->property_uid ][ 'accommodation_tax_rate' ];
			$this->room_types                    =$this->multi_query_result[ $this->property_uid ][ 'room_types' ];
			$this->rooms                         =$this->multi_query_result[ $this->property_uid ][ 'rooms' ];
			}

		$mrConfig = getPropertySpecificSettings( $this->property_uid );
		$mrConfig[ 'singleRoomProperty' ] == '0' ? $srp_only = 0 : $srp_only = 1;
		
		if ( !isset( $this->this_property_room_classes ) )
			{
			$this->this_property_room_classes = array ();
			$query                            = "SELECT a.roomtype_id FROM #__jomres_roomtypes_propertytypes_xref a, #__jomres_room_classes b WHERE a.propertytype_id =" . (int) $this->ptype_id . " AND (a.roomtype_id = b.room_classes_uid AND b.srp_only = '" . $srp_only . "' )";
			$roomtypes                        = doSelectSql( $query );
			foreach ( $roomtypes as $roomClass )
				{
				$this->this_property_room_classes[ (int) $roomClass->roomtype_id ] = $this->classAbbvs[ $roomClass->roomtype_id ];
				}
			}

		$bang = explode( ",", $this->property_features );
		$propertyFeaturesArray = array ();
		foreach ( $bang as $b )
			{
			if ( (int) $b != 0 ) $propertyFeaturesArray[ ] = (int) $b;
			}
		if (count($propertyFeaturesArray)>0)
			{
			$this->features=array();
			foreach($propertyFeaturesArray as $f)
				{
				$this->features[$f]['abbv'] = $this->all_property_features[$f]['abbv'];
				$this->features[$f]['desc'] = $this->all_property_features[$f]['desc'];
				$this->features[$f]['image'] =$this->all_property_features[$f]['image'];;
				}
			}

		// This array is only used by the showRoomDetails task. It's pointless constantly running this query when it's not used anywhere else.
		if ( get_showtime( 'task' ) == "showRoomDetails" )
			{
			if ( !isset( $this->room_features ) ) $this->room_features = array ();
			if ( !isset( $this->room_features[ $this->property_uid ] ) )
				{
				$query        = "SELECT room_features_uid,feature_description FROM #__jomres_room_features WHERE property_uid = '" . $this->property_uid . "' OR property_uid = '0' ";
				$roomFeatures = doSelectSql( $query );
				if ( count( $roomFeatures ) > 0 )
					{
					foreach ( $roomFeatures as $f )
						{
						$this->room_features[ $this->property_uid ][ (int) $f->room_features_uid ][ 'desc' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION' . (int) $f->room_features_uid, stripslashes( $f->feature_description ) );
						}
					}
				}
			}
		}

	function get_gross_accommodation_price( $nett_amount, $property_uid = 0 )
		{
		$nett_amount = (float) $nett_amount;

		if ( $property_uid != $this->property_uid )
			{
			$mrConfig               = getPropertySpecificSettings( $property_uid );
			$taxrates               = taxrates_getalltaxrates();
			$cfgcode                = $mrConfig[ 'accommodation_tax_code' ];
			$rate                   = $taxrates[ $cfgcode ];
			$accommodation_tax_rate = (float) $rate[ 'rate' ];
			}
		else
			{
			$accommodation_tax_rate = $this->accommodation_tax_rate;
			}

		$tax   = ( $nett_amount / 100 ) * $accommodation_tax_rate;
		$gross = $nett_amount + $tax;

		return $gross;
		}


	public function gather_data_multi( $property_uids = array (), $editable = false )
		{
		$no_html = get_showtime( 'no_html' );
		$popup   = get_showtime( 'popup' );
		//$editable = true;
		if ( $no_html == "1" || $popup == "1" ) $editable = false;

		// First we need to extract those uids that are not already in the $this->multi_query_result var, this (may) reduce the number of properties we need to query
		$temp_array = array ();
		foreach ( $property_uids as $id )
			{
			if ( !array_key_exists( $id, $this->multi_query_result ) ) $temp_array[ ] = $id;
			}
		$property_uids = $temp_array;
		unset ( $temp_array );

		$taxrates = taxrates_getalltaxrates();

		if ( count( $property_uids ) > 0 )
			{
			$gor = genericOr( $property_uids, 'propertys_uid' );

			$query = "SELECT `propertys_uid`,`property_name`,`property_street`,`property_town`,`property_postcode`,`property_region`,`property_country`,`property_tel`,`property_fax`,`property_email`,`published`,`ptype_id`,
`stars`,`superior`,`lat`,`long`,`metatitle`,`metadescription`,`metakeywords`,`property_features`,`property_mappinglink`,`property_key`,`property_description`,`property_checkin_times`,`property_driving_directions`,`property_airports`,`property_othertransport`,`property_policies_disclaimers`,`apikey`,`approved` FROM #__jomres_propertys WHERE " . $gor;

			$propertyData = doSelectSql( $query );

			$customTextObj = jomres_singleton_abstract::getInstance( 'custom_text' );
			foreach ( $propertyData as $data )
				{
				
				set_showtime( 'property_uid', $data->propertys_uid );
				set_showtime( 'property_type', $this->all_property_types[ (int) $data->ptype_id ] );
				$countryname = getSimpleCountry( $data->property_country );
				$customTextObj->get_custom_text_for_property( $data->propertys_uid );
				
				$this->multi_query_result[ $data->propertys_uid ][ 'propertys_uid' ]     = $data->propertys_uid;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_name' ]     = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_NAME', $data->property_name, $editable, false );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_street' ]   = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_STREET', $data->property_street, $editable, false );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_town' ]     = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN', $data->property_town, $editable, false );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_postcode' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_POSTCODE', $data->property_postcode, $editable, false );
				if ( is_numeric( $data->property_region ) )
					{
					$jomres_regions                                                        = jomres_singleton_abstract::getInstance( 'jomres_regions' );
					$this->multi_query_result[ $data->propertys_uid ][ 'property_region' ] = jr_gettext( "_JOMRES_CUSTOMTEXT_REGIONS_" . $data->property_region, $jomres_regions->regions[ $data->property_region ][ 'regionname' ], $editable, false );
					}
				else
				$this->multi_query_result[ $data->propertys_uid ][ 'property_region' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_REGION', $data->property_region, $editable, false );

				$this->multi_query_result[ $data->propertys_uid ][ 'property_country' ]      = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_COUNTRY', getSimpleCountry( $data->property_country ), $editable, false );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_country_code' ] = $data->property_country;

				$this->multi_query_result[ $data->propertys_uid ][ 'property_tel' ]        = $data->property_tel;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_fax' ]        = $data->property_fax;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_email' ]      = $data->property_email;
				$this->multi_query_result[ $data->propertys_uid ][ 'published' ]           = (int) $data->published;
				$this->multi_query_result[ $data->propertys_uid ][ 'ptype_id' ]            = (int) $data->ptype_id;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_type' ]       = $this->all_property_types[ (int) $data->ptype_id ];
				$this->multi_query_result[ $data->propertys_uid ][ 'property_type_title' ] = $this->all_property_type_titles[ (int) $data->ptype_id ];

				$this->multi_query_result[ $data->propertys_uid ][ 'stars' ]    = (int) $data->stars;
				$this->multi_query_result[ $data->propertys_uid ][ 'superior' ] = (int) $data->superior;

				$this->multi_query_result[ $data->propertys_uid ][ 'lat' ]                        = $data->lat;
				$this->multi_query_result[ $data->propertys_uid ][ 'long' ]                       = $data->long;
				$this->multi_query_result[ $data->propertys_uid ][ 'metatitle' ]                  = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE', $data->metatitle, false, false );
				$this->multi_query_result[ $data->propertys_uid ][ 'metadescription' ]            = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION', $data->metadescription, false, false );
				$this->multi_query_result[ $data->propertys_uid ][ 'metakeywords' ]               = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS', $data->metakeywords, false, false );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_features' ]          = $data->property_features;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_mappinglink' ]       = $data->property_mappinglink;
				$this->multi_query_result[ $data->propertys_uid ][ 'real_estate_property_price' ] = $data->property_key;

				$this->multi_query_result[ $data->propertys_uid ][ 'property_description' ]          = jomres_cmsspecific_parseByBots( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', $data->property_description, $editable, false ) );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_checkin_times' ]        = jomres_cmsspecific_parseByBots( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES', $data->property_checkin_times, $editable, false ) );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_area_activities' ]      = jomres_cmsspecific_parseByBots( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES', $data->property_area_activities, $editable, false ) );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_driving_directions' ]   = jomres_cmsspecific_parseByBots( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS', $data->property_driving_directions, $editable, false ) );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_airports' ]             = jomres_cmsspecific_parseByBots( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS', $data->property_airports, $editable, false ) );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_othertransport' ]       = jomres_cmsspecific_parseByBots( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT', $data->property_othertransport, $editable, false ) );
				$this->multi_query_result[ $data->propertys_uid ][ 'property_policies_disclaimers' ] = jomres_cmsspecific_parseByBots( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS', $data->property_policies_disclaimers, $editable, false ) );
				$this->multi_query_result[ $data->propertys_uid ][ 'apikey' ]                        = $data->apikey;
				$this->multi_query_result[ $data->propertys_uid ][ 'approved' ]                      = (bool) $data->approved;
				
				$this->property_names[$data->propertys_uid] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_NAME', $data->property_name, $editable, false );
				$this->untranslated_property_names[$data->propertys_uid] = $data->property_name;
				}

			$temp_rooms = array ();
			$gor        = genericOr( $property_uids, 'propertys_uid' );
			$query      = "SELECT `room_uid`,`room_classes_uid`,`propertys_uid` FROM #__jomres_rooms WHERE " . $gor;
			$rooms      = doSelectSql( $query );
			foreach ( $rooms as $room )
				{
				$this->multi_query_result[ $room->propertys_uid ][ 'rooms' ][ $room->room_uid ] = $room->room_uid ;
				$this->multi_query_result[ $room->propertys_uid ][ 'room_types' ][ $room->room_classes_uid ][ 'abbv' ]  = $this->all_room_types[ $room->room_classes_uid ][ 'room_class_abbv' ];
				$this->multi_query_result[ $room->propertys_uid ][ 'room_types' ][ $room->room_classes_uid ][ 'desc' ]  = $this->all_room_types[ $room->room_classes_uid ][ 'room_class_full_desc' ];
				$this->multi_query_result[ $room->propertys_uid ][ 'room_types' ][ $room->room_classes_uid ][ 'image' ] = $this->all_room_types[ $room->room_classes_uid ][ 'image' ];
				}

			// This array is only used by the showRoomDetails task. It's pointless constantly running this query when it's not used anywhere else.
			if ( get_showtime( 'task' ) == "showRoomDetails" )
				{
				$gor                 = genericOr( $property_uids, 'property_uid' );
				$this->room_features = array ();
				$query               = "SELECT room_features_uid,feature_description,property_uid FROM #__jomres_room_features WHERE " . $gor;
				$roomFeatures        = doSelectSql( $query );
				if ( count( $roomFeatures ) > 0 )
					{
					foreach ( $roomFeatures as $f )
						{
						$this->multi_query_result[ $f->property_uid ][ 'room_features' ][ $f->room_features_uid ][ 'desc' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION' . (int) $f->room_features_uid, stripslashes( $f->feature_description ) );
						}
					}
				}

			foreach ( $property_uids as $id )
				{
				$mrConfig = getPropertySpecificSettings( $id );
				$cfgcode  = $mrConfig[ 'accommodation_tax_code' ];
				$rate     = $taxrates[ $cfgcode ];
				//$this->accommodation_tax_rate=(float)$rate['rate'];
				$this->multi_query_result[ $id ][ 'accommodation_tax_rate' ] = (float) $rate[ 'rate' ];
				}
			}

		return $this->multi_query_result;
		}


	private function get_all_room_types()
		{
		$this->classAbbvs     = array ();
		$this->all_room_types = array ();
		$this->roomtypes_propertytypes_xref = array ();
		$room_type_ids        = array ();
		
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$all_room_types_details=$c->retrieve('all_room_types_details');
		
		if (true===is_array($all_room_types_details))
			{
			$this->all_room_types=$all_room_types_details['all_room_types'];
			$this->classAbbvs=$all_room_types_details['classAbbvs'];
			$this->roomtypes_propertytypes_xref=$all_room_types_details['roomtypes_propertytypes_xref'];
			}
		else
			{
			$query                = "SELECT `room_classes_uid`,`room_class_abbv`,`room_class_full_desc`,`image`,`srp_only` FROM #__jomres_room_classes WHERE property_uid =0 ";
			$roomtypes            = doSelectSql( $query );
			if ( count( $roomtypes ) > 0 )
				{
				foreach ( $roomtypes as $rt )
					{
					$this->all_room_types[ $rt->room_classes_uid ][ 'room_classes_uid' ] = $rt->room_classes_uid;
					$this->all_room_types[ $rt->room_classes_uid ][ 'room_class_abbv' ]  = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV' . (int) $rt->room_classes_uid, stripslashes( $rt->room_class_abbv ), false, false );;
					$this->all_room_types[ $rt->room_classes_uid ][ 'room_class_full_desc' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC' . (int) $rt->room_classes_uid, stripslashes( $rt->room_class_full_desc ), false, false );
					$this->all_room_types[ $rt->room_classes_uid ][ 'image' ]                = $rt->image;
					$this->all_room_types[ $rt->room_classes_uid ][ 'srp_only' ]             = $rt->srp_only;
					$room_type_ids[ ]                                                        = $rt->room_classes_uid;
	
					// To a degree, this is a duplication of effort, however we don't know if other scripts are using the $this->classAbbvs variable, so we'll reuse this code from the previous gather_data method.
					$this->classAbbvs[ (int) $rt->room_classes_uid ][ 'abbv' ]  = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV' . (int) $rt->room_classes_uid, stripslashes( $rt->room_class_abbv ), false, false );
					$this->classAbbvs[ (int) $rt->room_classes_uid ][ 'desc' ]  = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC' . (int) $rt->room_classes_uid, stripslashes( $rt->room_class_full_desc ), false, false );
					$this->classAbbvs[ (int) $rt->room_classes_uid ][ 'image' ] = $rt->image;
					}
				}
	
			$query                              = "SELECT roomtype_id,propertytype_id FROM #__jomres_roomtypes_propertytypes_xref";
			$roomtypes                          = doSelectSql( $query );
			foreach ( $roomtypes as $roomClass )
				{
				$this->roomtypes_propertytypes_xref[ (int) $roomClass->propertytype_id ] = $this->classAbbvs[ $roomClass->roomtype_id ];
				}
			$c->store('all_room_types_details',array('all_room_types'=>$this->all_room_types,'classAbbvs'=>$this->classAbbvs,'roomtypes_propertytypes_xref'=>$this->roomtypes_propertytypes_xref));
			}	
		}


	private function get_all_property_types()
		{
		$this->all_property_types       = array ();
		$this->all_property_type_titles = array ();
		
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$all_property_types_details=$c->retrieve('all_property_types_details');
		
		if (true===is_array($all_property_types_details))
			{
			$this->all_property_types       = $all_property_types_details['all_property_types'];
			$this->all_property_type_titles = $all_property_types_details['all_property_type_titles'];
			}
		else
			{
			$query                          = "SELECT id,ptype,ptype_desc FROM #__jomres_ptypes";
			$propertytypes                  = doSelectSql( $query );
			if ( count( $propertytypes ) > 0 )
				{
				foreach ( $propertytypes as $pt )
					{
					$this->all_property_types[ $pt->id ]       = $pt->ptype_desc;
					$this->all_property_type_titles[ $pt->id ] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTYTYPE' . (int) $pt->id, $pt->ptype, false, false );
					}
				}
			$c->store('all_property_types_details',array('all_property_types'=>$this->all_property_types,'all_property_type_titles'=>$this->all_property_type_titles));
			}
		}
	

	private function get_all_property_features()
		{
		$this->all_property_features = array();
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$all_property_features_details=$c->retrieve('all_property_features_details');
		
		if (true===is_array($all_property_features_details))
			{
			$this->all_property_features=$all_property_features_details;
			}
		else
			{
			$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
			$propertyFeaturesList= doSelectSql($query);
			if (count($propertyFeaturesList)>0)
				{
				foreach($propertyFeaturesList as $propertyFeature)
					{
					$this->all_property_features[(int)$propertyFeature->hotel_features_uid]['abbv'] = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int)$propertyFeature->hotel_features_uid,	stripslashes($propertyFeature->hotel_feature_abbv),false,false);
					$this->all_property_features[(int)$propertyFeature->hotel_features_uid]['desc'] = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int)$propertyFeature->hotel_features_uid,	stripslashes($propertyFeature->hotel_feature_full_desc),false,false);
					$this->all_property_features[(int)$propertyFeature->hotel_features_uid]['image'] =$propertyFeature->image;
					}
				}
			$c->store('all_property_features_details',$this->all_property_features);
			}
		} 

	}

?>