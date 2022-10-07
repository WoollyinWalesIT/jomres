<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
 *  @version Jomres 10.5.5
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 *          A basic class for pulling property details information
	 *
	 *          Used extensively throughout Jomres, this is used as a singleton to ensure that we maintain property information in ram for as long as possible without having to constantly query the database for lots of complex information
	 */

class basic_property_details
{
	/**
	 *
	 * Constructor
	 *
	 * Sets up sitewide room types, property types and property features
	 *
	 */

	private static $internal_debugging;

	public function __construct()
	{
		self::$internal_debugging = false;
		$this->multi_query_result = array();
		$this->property_names = array();
		$this->property_uid = 0;
		$this->featured_properties = array();

		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->eventSpecificlyExistsCheck('00005', "featured_listings")) {
			$this->get_featured_properties();
		}

		$this->get_all_room_types();
		$this->get_all_property_types();
		$this->get_all_property_features();
		$this->get_global_room_features(); // Has a different naming pattern because the get_all_room_features method isn't used by this class, instead it's used by other scripts. Because I wanted to make it so that get_basic_module_data function changes required the minimum number of queries to be called when this singleton is initiated to get room feature information, a new method is created for this purpose and the results put into $this->global_room_features
	}

	/**
	 *
	 * Setter
	 *
	 */

	public function __set($setting, $value)
	{
		if (self::$internal_debugging) {
			echo 'Setting '.$setting.' to '.$value.' <br>';
		}
		$this->$setting = $value;

		return true;
	}

	/**
	 *
	 * Getter
	 *
	 */

	public function __get($setting)
	{
		if (self::$internal_debugging) {
			echo 'Getting '.$setting.' which is '.$this->$setting.'<br>';
		}
		if (isset($this->$setting)) {
			return $this->$setting;
		} else {
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			if ($jrConfig['development_production'] == 'development') {
				var_dump(debug_print_backtrace());
				exit;
				throw new Exception("Setting doesn't exist ".$setting, 2);
			} else {
				return null;
			}
		}
	}

	/*
	 *
	 * Find featured properties
	 *
	 */

	private function get_featured_properties()
	{
		$query = "SELECT `property_uid` FROM #__jomresportal_featured_properties";
		$result = doSelectSQL($query);

		if (!empty($result)) {
			foreach ($result as $r) {
				$this->featured_properties[] = (int)$r->property_uid;
			}
		}
	}

	/**
	 *
	 * Method for returning the property name
	 *
	 */

	public function get_property_name($property_uid = 0, $editable = true)
	{
		if ($property_uid == 0) {
			$property_uid = $this->property_uid;
		}

		if (!isset($this->property_names[$property_uid])) {
			$this->get_property_name_multi(array($property_uid));
		}

		$property_name = $this->property_names[ $property_uid ];

		return $property_name;
	}

	/**
	 *
	 * Get property names for multiple property uids
	 *
	 */

	public function get_property_name_multi($property_uids = array(), $database_obj = false)
	{
		//return false if there are no property uids in the array/object
		if (empty($property_uids)) {
			return false;
		}

		$customTextObj = jomres_singleton_abstract::getInstance('custom_text');

		//change $property_uids object to array
		if ($database_obj) {
			$tmp_arr = array();
			foreach ($property_uids as $id) {
				$tmp_arr[] = $id->propertys_uid;
			}
			if (!empty($tmp_arr)) {
				$property_uids = array();
				$property_uids = $tmp_arr;
				unset($tmp_arr);
			}
		}

		//check if we`re getting property names for all properties in the system
		sort($property_uids);
		$all_properties_in_system = get_showtime('all_properties_in_system');
		if (is_array($all_properties_in_system)) {
			sort($all_properties_in_system);
			$diff = array_diff($all_properties_in_system, $property_uids);
		} else {
			$diff = array();
		}

		$original_property_uid = get_showtime('property_uid');

		//unset property uids that already have been handled by $this->gather_data_multi() function
		$temp_array = array();
		foreach ($property_uids as $id) {
			if (!isset($this->multi_query_result[$id]) && !isset($this->property_names[ $id ])) {
				$temp_array[] = $id;
			} else {
				if (isset($this->multi_query_result[$id]['property_name'])) {
					$this->property_names[ $id ] = $this->multi_query_result[$id]['property_name'];
				}
			}
		}
		$property_uids = $temp_array;
		unset($temp_array);

		if (!empty($property_uids)) {
			$query = 'SELECT `propertys_uid`, `property_name`, `ptype_id` FROM #__jomres_propertys WHERE `propertys_uid` IN ('.jomres_implode($property_uids).') ';
			$property_names = doSelectSql($query);
			if (!get_showtime('heavyweight_system')) {
				//get custom text for these properties
				$customTextObj->gather_data($property_uids);

				foreach ($property_names as $p) {
					// We need to set showtime here otherwise the jr_gettext function won't know which property's info we're looking for
					set_showtime('property_uid', $p->propertys_uid);

					$this->property_names[ $p->propertys_uid ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME', $p->property_name, false);
				}
			} else {
				foreach ($property_names as $p) {
					$this->property_names[ $p->propertys_uid ] = $p->property_name;
				}
			}

			//set back the initial property uid
			set_showtime('property_uid', $original_property_uid);
		}

		return $this->property_names;
	}

	/**
	 *
	 * Collect information about an individual property
	 *
	 */

	public function gather_data($property_uid = 0)
	{
		if (!isset($this->multi_query_result)) {
			$this->multi_query_result = array();
		}
		if ($property_uid == $this->property_uid) { // No need to re-gather the info
			return true;
		}

		$this->property_uid = (int) $property_uid;

		if ($this->property_uid == 0) {
			throw new Exception('Property uid not set', 2);
		}

		/**
		 *
		 * if more properties are on the same page (for example if we have an NGM module published) and changes the property uid showtime, when the showtime is set back to this property uid,
		 * the query will be executed again, because this property uid is not in the multi_query_result. So we use gather_data_multi to get data for this property_uid,
		 * then reuse this data later from $this->multi_query_result if necessary.
		 *
		 */
		$this->gather_data_multi(array($this->property_uid));

		if (isset($this->multi_query_result[$this->property_uid])) {
			$this->property_name = $this->multi_query_result[ $this->property_uid ][ 'property_name' ];
			$this->property_street = $this->multi_query_result[ $this->property_uid ][ 'property_street' ];
			$this->property_town = $this->multi_query_result[ $this->property_uid ][ 'property_town' ];
			$this->property_postcode = $this->multi_query_result[ $this->property_uid ][ 'property_postcode' ];
			$this->property_region = $this->multi_query_result[ $this->property_uid ][ 'property_region' ];
			$this->property_region_id = $this->multi_query_result[ $this->property_uid ][ 'property_region_id' ];

			$this->property_country = $this->multi_query_result[ $this->property_uid ][ 'property_country' ];
			$this->property_country_code = $this->multi_query_result[ $this->property_uid ][ 'property_country_code' ];

			$this->property_tel = $this->multi_query_result[ $this->property_uid ][ 'property_tel' ];
			$this->property_fax = $this->multi_query_result[ $this->property_uid ][ 'property_fax' ];
			$this->property_email = $this->multi_query_result[ $this->property_uid ][ 'property_email' ];
			$this->published = $this->multi_query_result[ $this->property_uid ][ 'published' ];
			$this->ptype_id = $this->multi_query_result[ $this->property_uid ][ 'ptype_id' ];
			$this->property_type = $this->multi_query_result[ $this->property_uid ][ 'property_type' ];
			$this->property_type_title = $this->multi_query_result[ $this->property_uid ][ 'property_type_title' ];
			$this->stars = $this->multi_query_result[ $this->property_uid ][ 'stars' ];
			$this->superior = $this->multi_query_result[ $this->property_uid ][ 'superior' ];
			$this->lat = $this->multi_query_result[ $this->property_uid ][ 'lat' ];
			$this->long = $this->multi_query_result[ $this->property_uid ][ 'long' ];
			$this->metatitle = $this->multi_query_result[ $this->property_uid ][ 'metatitle' ];
			$this->metadescription = $this->multi_query_result[ $this->property_uid ][ 'metadescription' ];
			$this->metakeywords = $this->multi_query_result[ $this->property_uid ][ 'metakeywords' ];
			$this->property_features = $this->multi_query_result[ $this->property_uid ][ 'property_features' ];
			$this->property_mappinglink = $this->multi_query_result[ $this->property_uid ][ 'property_mappinglink' ];
			$this->real_estate_property_price = $this->multi_query_result[ $this->property_uid ][ 'real_estate_property_price' ];

			$this->property_description = $this->multi_query_result[ $this->property_uid ][ 'property_description' ];
			$this->property_checkin_times = $this->multi_query_result[ $this->property_uid ][ 'property_checkin_times' ];
			$this->property_area_activities = $this->multi_query_result[ $this->property_uid ][ 'property_area_activities' ];
			$this->property_driving_directions = $this->multi_query_result[ $this->property_uid ][ 'property_driving_directions' ];
			$this->property_airports = $this->multi_query_result[ $this->property_uid ][ 'property_airports' ];
			$this->property_othertransport = $this->multi_query_result[ $this->property_uid ][ 'property_othertransport' ];
			$this->property_policies_disclaimers = $this->multi_query_result[ $this->property_uid ][ 'property_policies_disclaimers' ];
			$this->apikey = $this->multi_query_result[ $this->property_uid ][ 'apikey' ];
			$this->approved = $this->multi_query_result[ $this->property_uid ][ 'approved' ];
			$this->permit_number = $this->multi_query_result[ $this->property_uid ][ 'permit_number' ];
			$this->completed  = $this->multi_query_result[ $this->property_uid ][ 'completed' ];
			$this->cat_id  = $this->multi_query_result[ $this->property_uid ][ 'cat_id' ];

			$this->featured = false;
			if (in_array($this->property_uid, $this->featured_properties)) {
				$this->featured = true;
			}

			$this->accommodation_tax_rate = $this->multi_query_result[ $this->property_uid ][ 'accommodation_tax_rate' ];

			if (isset($this->multi_query_result[ $this->property_uid ][ 'room_types' ])) {
				$this->room_types = $this->multi_query_result[ $this->property_uid ][ 'room_types' ];
			} else {
				$this->room_types = array();
			}

			if (isset($this->multi_query_result[ $this->property_uid ][ 'rooms' ])) {
				$this->rooms = $this->multi_query_result[ $this->property_uid ][ 'rooms' ];
				$this->rooms_by_type = $this->multi_query_result[ $this->property_uid ][ 'rooms_by_type' ];
				$this->rooms_max_people = $this->multi_query_result[ $this->property_uid ][ 'rooms_max_people' ];
			} else {
				$this->rooms = array();
				$this->rooms_by_type = array();
				$this->rooms_max_people = array();
			}
		}

		$mrConfig = getPropertySpecificSettings($this->property_uid);

		//get all room types assigned to this property type
		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();

		$this->this_property_room_classes = array();
		if (isset($jomres_room_types->all_ptype_rtype_xrefs[$this->ptype_id])) {
			foreach ($jomres_room_types->all_ptype_rtype_xrefs[$this->ptype_id] as $rtype) {
				if (isset($this->classAbbvs[ $rtype ]) &&
					(
						(isset($jomres_room_types->room_types[$rtype]) && $jomres_room_types->room_types[$rtype]['property_uid'] == 0) ||
						isset($jomres_room_types->property_specific_room_types[$this->property_uid][$rtype])
					)
				) {
					$this->this_property_room_classes[ $rtype ] = $this->classAbbvs[ $rtype ];
				}
			}
		}

		$bang = explode(',', $this->property_features);
		$propertyFeaturesArray = array();
		foreach ($bang as $b) {
			if ((int) $b != 0) {
				$propertyFeaturesArray[ ] = (int) $b;
			}
		}

		$this->features = array();
		if (!empty($propertyFeaturesArray)) {
			foreach ($propertyFeaturesArray as $f) {
				$this->features[$f]['abbv'] = $this->all_property_features[$f]['abbv'];
				$this->features[$f]['desc'] = $this->all_property_features[$f]['desc'];
				$image = str_replace('/jomres/', '/JOMRES_ROOT_DIRECTORY/', $this->all_property_features[$f]['image']);
				$this->features[$f]['image'] = $image;
				$this->features[$f]['cat_id'] = $this->all_property_features[$f]['cat_id'];
				$this->features[$f]['cat_title'] = $this->all_property_features[$f]['cat_title'];
				$this->features[$f]['include_in_filters'] = $this->all_property_features[$f]['include_in_filters'];
			}
		}
	}

	/**
	 *
	 * Calculate the gross price for the accommodation, taking into account the property accommodation tax rate
	 *
	 */

	public function get_gross_accommodation_price($nett_amount, $property_uid = 0)
	{
		$nett_amount = (float) $nett_amount;

		$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

		if ($property_uid != $this->property_uid) {
			$mrConfig = getPropertySpecificSettings($property_uid);
			$cfgcode = $mrConfig[ 'accommodation_tax_code' ];
			$accommodation_tax_rate = (float) $jrportal_taxrate->taxrates[ $cfgcode ][ 'rate' ];
		} else {
			$accommodation_tax_rate = $this->accommodation_tax_rate;
		}

		$tax = ($nett_amount / 100) * $accommodation_tax_rate;
		$gross = $nett_amount + $tax;

		return $gross;
	}

	/**
	 *
	 * Calculate the nett price for the accommodation
	 *
	 */

	public function get_nett_accommodation_price($gross_amount, $property_uid = 0)
	{
		$gross_amount = (float) $gross_amount;

		$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

		if ($property_uid != $this->property_uid) {
			$mrConfig = getPropertySpecificSettings($property_uid);
			$cfgcode = $mrConfig[ 'accommodation_tax_code' ];
			$accommodation_tax_rate = (float) $jrportal_taxrate->taxrates[ $cfgcode ][ 'rate' ];
		} else {
			$accommodation_tax_rate = $this->accommodation_tax_rate;
		}

		$divisor = ($accommodation_tax_rate / 100) + 1;
		$nett = $gross_amount / $divisor;

		return $nett;
	}

	/**
	 *
	 * Get data for multiple properties
	 *
	 */

	public function gather_data_multi($property_uids = array(), $editable = false)
	{
		$no_html = get_showtime('no_html');
		$popup = get_showtime('popup');
		//$editable = true;
		if ($no_html == '1' || $popup == '1') {
			$editable = false;
		}

		/**
		 * First we need to extract those uids that are not already in the $this->multi_query_result var, this (may) reduce the number of properties we need to query
		 */
		$temp_array = array();
		foreach ($property_uids as $id) {
			if (!isset($this->multi_query_result[$id])) {
				$temp_array[ ] = $id;
			}
		}
		$property_uids = $temp_array;
		unset($temp_array);

		$customTextObj = jomres_singleton_abstract::getInstance('custom_text');
		$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');
		$jomres_config_property_singleton = jomres_singleton_abstract::getInstance('jomres_config_property_singleton');

		if (!empty($property_uids)) {
			$query = 'SELECT 
							`propertys_uid`,
							`property_name`,
							`property_street`,
							`property_town`,
							`property_postcode`,
							`property_region`,
							`property_country`,
							`property_tel`,
							`property_fax`,
							`property_email`,
							`published`,
							`ptype_id`,
							`stars`,
							`superior`,
							`lat`,
							`long`,
							`metatitle`,
							`metadescription`,
							`metakeywords`,
							`property_features`,
							`property_mappinglink`,
							`property_key`,
							`property_description`,
							`property_checkin_times`,
							`property_area_activities`,
							`property_driving_directions`,
							`property_airports`,
							`property_othertransport`,
							`property_policies_disclaimers`,
							`apikey`,
							`approved`,
							`permit_number`,
							`completed`,
							`cat_id` 
						FROM #__jomres_propertys 
						WHERE propertys_uid IN (' .jomres_implode($property_uids).') ';
			$propertyData = doSelectSql($query);

			//load all property specific settings
			$jomres_config_property_singleton->get_property_settings($property_uids);

			//get custom text for these properties
			$customTextObj->gather_data($property_uids);

			//save the original property uid and type so we can reset this after we`re done
			$original_property_uid = get_showtime('property_uid');
			$original_property_type = get_showtime('property_type');

			foreach ($propertyData as $data) {
				set_showtime('property_uid', $data->propertys_uid);
				if (isset($this->all_property_types[ (int) $data->ptype_id ])) {
					set_showtime('property_type', $this->all_property_types[ (int) $data->ptype_id ]);
				}

				$countryname = getSimpleCountry($data->property_country);

				$this->multi_query_result[ $data->propertys_uid ][ 'published' ] = (int) $data->published;

				$this->multi_query_result[ $data->propertys_uid ][ 'propertys_uid' ] = $data->propertys_uid;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_name' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME_'.$data->propertys_uid, $data->property_name, $editable, false);
				$this->multi_query_result[ $data->propertys_uid ][ 'property_street' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_STREET_'.$data->propertys_uid, $data->property_street, $editable, false);
				$this->multi_query_result[ $data->propertys_uid ][ 'property_town' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_TOWN_'.$data->propertys_uid, $data->property_town, $editable, false);
				$this->multi_query_result[ $data->propertys_uid ][ 'property_postcode' ] = $data->property_postcode;
				if (is_numeric($data->property_region)) {
					$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');

					//check if region id exists
					if ($jomres_regions->get_region_name($data->property_region) == null) {
						$this->multi_query_result[ $data->propertys_uid ][ 'published' ] = 0;
						if ((int) $data->published == 1) {
							$query = "UPDATE #__jomres_propertys SET `published` = 0 WHERE `propertys_uid` = ".(int)$data->propertys_uid.' LIMIT 1';
							doInsertSql($query, "System automatically unpublished property with incorrect region id");
						}
					}

					$this->multi_query_result[ $data->propertys_uid ][ 'property_region' ] = jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$data->property_region, $jomres_regions->get_region_name($data->property_region), $editable, false);
					$this->multi_query_result[ $data->propertys_uid ][ 'property_region_id' ] = $data->property_region;
				} else { // This is a fallback for older properties that used to use region names instead of region ids
					$this->multi_query_result[ $data->propertys_uid ][ 'property_region' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION', $data->property_region, $editable, false);
					$this->multi_query_result[ $data->propertys_uid ][ 'property_region_id' ] = 0;
				}

				$this->multi_query_result[ $data->propertys_uid ][ 'property_country' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_COUNTRY', getSimpleCountry($data->property_country), $editable, false);
				$this->multi_query_result[ $data->propertys_uid ][ 'property_country_code' ] = $data->property_country;

				$this->multi_query_result[ $data->propertys_uid ][ 'property_tel' ] = $data->property_tel;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_fax' ] = $data->property_fax;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_email' ] = $data->property_email;


				$this->multi_query_result[ $data->propertys_uid ][ 'ptype_id' ] = (int) $data->ptype_id;
				if (isset($this->all_property_types[ (int) $data->ptype_id ])) {
					$this->multi_query_result[ $data->propertys_uid ][ 'property_type' ] = $this->all_property_types[ (int) $data->ptype_id ];
					$this->multi_query_result[ $data->propertys_uid ][ 'property_type_title' ] = $this->all_property_type_titles[ (int) $data->ptype_id ];
				}

				$this->multi_query_result[ $data->propertys_uid ][ 'stars' ] = (int) $data->stars;
				$this->multi_query_result[ $data->propertys_uid ][ 'superior' ] = (int) $data->superior;

				$this->multi_query_result[ $data->propertys_uid ][ 'lat' ] = $data->lat;
				$this->multi_query_result[ $data->propertys_uid ][ 'long' ] = $data->long;
				$this->multi_query_result[ $data->propertys_uid ][ 'metatitle' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE_'.$data->propertys_uid, $data->metatitle, false);
				$this->multi_query_result[ $data->propertys_uid ][ 'metadescription' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION_'.$data->propertys_uid, $data->metadescription, false);
				$this->multi_query_result[ $data->propertys_uid ][ 'metakeywords' ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS_'.$data->propertys_uid, $data->metakeywords, false);
				$this->multi_query_result[ $data->propertys_uid ][ 'property_features' ] = $data->property_features;
				$this->multi_query_result[ $data->propertys_uid ][ 'property_features_names' ] = array();
				if (!empty($this->all_property_features) && !empty($this->multi_query_result[ $data->propertys_uid ][ 'property_features' ]) ) {
					$feature_ids = explode("," , $this->multi_query_result[ $data->propertys_uid ][ 'property_features' ] );
					foreach ($feature_ids as $feature_id) {
						if ( trim($feature_id) != "" && (int)$feature_id > 0 && isset($this->all_property_features[$feature_id]) ) {
							$this->multi_query_result[ $data->propertys_uid ][ 'property_features_names' ][$feature_id]['abbv'] = $this->all_property_features[$feature_id]['abbv'];
							$this->multi_query_result[ $data->propertys_uid ][ 'property_features_names' ][$feature_id]['search_url'] = jomresURL(JOMRES_SITEPAGE_URL.'&task=search&calledByModule=mod_jomsearch_m0&feature_uids[]='.$feature_id);
						}
					}
				}

				$this->multi_query_result[ $data->propertys_uid ][ 'property_mappinglink' ] = $data->property_mappinglink;
				$this->multi_query_result[ $data->propertys_uid ][ 'real_estate_property_price' ] = $data->property_key;

				$this->multi_query_result[ $data->propertys_uid ][ 'property_description' ] = jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION_'.$data->propertys_uid, $data->property_description, $editable, false));
				$this->multi_query_result[ $data->propertys_uid ][ 'property_checkin_times' ] = jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES_'.$data->propertys_uid, $data->property_checkin_times, $editable, false));
				$this->multi_query_result[ $data->propertys_uid ][ 'property_area_activities' ] = jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES_'.$data->propertys_uid, $data->property_area_activities, $editable, false));
				$this->multi_query_result[ $data->propertys_uid ][ 'property_driving_directions' ] = jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS_'.$data->propertys_uid, $data->property_driving_directions, $editable, false));
				$this->multi_query_result[ $data->propertys_uid ][ 'property_airports' ] = jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS_'.$data->propertys_uid, $data->property_airports, $editable, false));
				$this->multi_query_result[ $data->propertys_uid ][ 'property_othertransport' ] = jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT_'.$data->propertys_uid, $data->property_othertransport, $editable, false));
				$this->multi_query_result[ $data->propertys_uid ][ 'property_policies_disclaimers' ] = jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS_'.$data->propertys_uid, $data->property_policies_disclaimers, $editable, false));
				$this->multi_query_result[ $data->propertys_uid ][ 'apikey' ] = $data->apikey;
				$this->multi_query_result[ $data->propertys_uid ][ 'approved' ] = (int)$data->approved;
				$this->multi_query_result[ $data->propertys_uid ][ 'permit_number' ] = (string) $data->permit_number;
				$this->multi_query_result[ $data->propertys_uid ][ 'completed' ] = (int)$data->completed;
				$this->multi_query_result[ $data->propertys_uid ][ 'cat_id' ] = (int)$data->cat_id;

				$this->multi_query_result[ $data->propertys_uid ][ 'featured' ] = false;
				if (in_array($data->propertys_uid, $this->featured_properties)) {
					$this->multi_query_result[ $data->propertys_uid ][ 'featured' ] = true;
				}

				$this->property_names[$data->propertys_uid] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME_'.$data->propertys_uid, $data->property_name, $editable, false);
			}

			$temp_rooms = array();
			$query = 'SELECT `room_uid`,`room_classes_uid`,`propertys_uid`,`max_people` , `max_adults` , `max_children` , `room_features_uid`   FROM #__jomres_rooms WHERE propertys_uid IN ('.jomres_implode($property_uids).') ';
			$rooms = doSelectSql($query);

			foreach ($rooms as $room) {
				$this->multi_query_result[ $room->propertys_uid ][ 'rooms' ][ $room->room_uid ] = $room->room_uid;
				if (isset($this->all_room_types[ $room->room_classes_uid ])) {
					$this->multi_query_result[ $room->propertys_uid ][ 'room_types' ][ $room->room_classes_uid ][ 'abbv' ] = $this->all_room_types[ $room->room_classes_uid ][ 'room_class_abbv' ];
					$this->multi_query_result[ $room->propertys_uid ][ 'room_types' ][ $room->room_classes_uid ][ 'desc' ] = jomres_decode($this->all_room_types[ $room->room_classes_uid ][ 'room_class_full_desc' ]);
					$this->multi_query_result[ $room->propertys_uid ][ 'room_types' ][ $room->room_classes_uid ][ 'image' ] = $this->all_room_types[ $room->room_classes_uid ][ 'image' ];
				}

				$this->multi_query_result[ $room->propertys_uid ][ 'rooms_by_type' ][ $room->room_classes_uid ][] = $room->room_uid;
				$this->multi_query_result[ $room->propertys_uid ][ 'rooms_max_people' ][ $room->room_classes_uid ][$room->room_uid] = $room->max_people;
				$this->multi_query_result[ $room->propertys_uid ][ 'rooms_max_adults' ][ $room->room_classes_uid ][$room->room_uid] = $room->max_adults;
				$this->multi_query_result[ $room->propertys_uid ][ 'rooms_max_children' ][ $room->room_classes_uid ][$room->room_uid] = $room->max_children;


				// The goal here is to populate the $this->multi_query_result[  $data->propertys_uid ][ 'room_features' ] variable for all room features of this property
				if ( !isset($this->multi_query_result[ $data->propertys_uid ][ 'room_features' ]) ) {
					$this->multi_query_result[ $data->propertys_uid ][ 'room_features' ] = array();
				}

				$bang = explode( "," , $room->room_features_uid );

				if (!empty($bang) && $bang != [ 0 => '' ] ) {
					foreach ($bang as $rm_feature_id) {
						if ( trim($rm_feature_id) != '' && (int)$rm_feature_id > 0 && isset($this->global_room_features[$rm_feature_id] ) ) {
							$this->multi_query_result[  $data->propertys_uid ][ 'room_features' ][$rm_feature_id]['abbv'] = $this->global_room_features[$rm_feature_id]['feature_description'];
							$this->multi_query_result[  $data->propertys_uid ][ 'room_features' ][$rm_feature_id]['id'] = $rm_feature_id;
						}
					}
				}
			}

			foreach ($propertyData as $d) {
				$mrConfig = getPropertySpecificSettings($d->propertys_uid);
				$cfgcode = $mrConfig[ 'accommodation_tax_code' ];

				if (isset($jrportal_taxrate->taxrates[ $cfgcode ][ 'rate' ])) {
					$this->multi_query_result[ $d->propertys_uid ][ 'accommodation_tax_rate' ] = (float) $jrportal_taxrate->taxrates[ $cfgcode ][ 'rate' ];
				} else {
					$this->multi_query_result[ $d->propertys_uid ][ 'accommodation_tax_rate' ] = 0.00;
				}
			}

			//set back the initial property type and property uid
			set_showtime('property_uid', $original_property_uid);
			set_showtime('property_type', $original_property_type);
		}

		return $this->multi_query_result;
	}

	/**
	 *
	 * Get all room types, includes both global room types, plus those created just by this property
	 *
	 */

	private function get_all_room_types()
	{
		$this->classAbbvs = array();
		$this->all_room_types = array();
		$this->roomtypes_propertytypes_xref = array();

		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();

		if (!empty($jomres_room_types->room_types)) {
			foreach ($jomres_room_types->room_types as $rt) {
				$this->all_room_types[ $rt['room_classes_uid'] ][ 'room_classes_uid' ] = $rt['room_classes_uid'];
				$this->all_room_types[ $rt['room_classes_uid'] ][ 'room_class_abbv' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rt['room_classes_uid'], stripslashes($rt['room_class_abbv']), false);
				$this->all_room_types[ $rt['room_classes_uid'] ][ 'room_class_full_desc' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rt['room_classes_uid'], stripslashes($rt['room_class_full_desc']), false);
				$this->all_room_types[ $rt['room_classes_uid'] ][ 'image' ] = $rt['image'];

				// To a degree, this is a duplication of effort, however we don't know if other scripts are using the $this->classAbbvs variable, so we'll reuse this code from the previous gather_data method.
				$this->classAbbvs[ $rt['room_classes_uid'] ][ 'abbv' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rt['room_classes_uid'], stripslashes($rt['room_class_abbv']), false);
				$this->classAbbvs[ $rt['room_classes_uid'] ][ 'desc' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rt['room_classes_uid'], stripslashes($rt['room_class_full_desc']), false);
				$this->classAbbvs[ $rt['room_classes_uid'] ][ 'image' ] = $rt['image'];
			}
		}

		if (!empty($jomres_room_types->property_specific_room_types)) {
			foreach ($jomres_room_types->property_specific_room_types as $property_room_type) {
				foreach ($property_room_type as $rt) {
					$this->all_room_types[ $rt['room_classes_uid'] ][ 'room_classes_uid' ] = $rt['room_classes_uid'];
					$this->all_room_types[ $rt['room_classes_uid'] ][ 'room_class_abbv' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rt['room_classes_uid'], stripslashes($rt['room_class_abbv']), false);
					$this->all_room_types[ $rt['room_classes_uid'] ][ 'room_class_full_desc' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rt['room_classes_uid'], stripslashes($rt['room_class_full_desc']), false);
					$this->all_room_types[ $rt['room_classes_uid'] ][ 'image' ] = $rt['image'];

					// To a degree, this is a duplication of effort, however we don't know if other scripts are using the $this->classAbbvs variable, so we'll reuse this code from the previous gather_data method.
					$this->classAbbvs[ $rt['room_classes_uid'] ][ 'abbv' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rt['room_classes_uid'], stripslashes($rt['room_class_abbv']), false);
					$this->classAbbvs[ $rt['room_classes_uid'] ][ 'desc' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rt['room_classes_uid'], stripslashes($rt['room_class_full_desc']), false);
					$this->classAbbvs[ $rt['room_classes_uid'] ][ 'image' ] = $rt['image'];
				}
			}
		}

		//each property type with it`s assigned room types.
		$this->roomtypes_propertytypes_xref = $jomres_room_types->all_ptype_rtype_xrefs;
	}

	/**
	 *
	 * Get all property types
	 *
	 */

	private function get_all_property_types()
	{
		$this->all_property_types = array();
		$this->all_property_type_titles = array();

		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
		$jomres_property_types->get_all_property_types();

		if (!empty($jomres_property_types->property_types)) {
			foreach ($jomres_property_types->property_types as $pt) {
				$this->all_property_types[ $pt['id'] ] = $pt['ptype_desc'];
				$this->all_property_type_titles[ $pt['id'] ] = $pt['ptype'];
			}
		}
	}

	/**
	 *
	 * Get all property features
	 *
	 */

	private function get_all_property_features()
	{
		$this->all_property_features = array();

		$jomres_property_features = jomres_singleton_abstract::getInstance('jomres_property_features');
		$jomres_property_features->get_all_property_features();

		$this->all_property_features = $jomres_property_features->property_features;
	}

	/**
	 *
	 * Get all room features
	 *
	 */

	public function get_all_resource_features($property_uid = 0, $including_global_room_features = false)
	{
		$this->all_room_features = array();

		$clause = ' `property_uid` = '.(int) $property_uid;

		if ($including_global_room_features) {
			$clause .= ' OR `property_uid` = 0 ';
		}

		$query = 'SELECT `room_features_uid`, `feature_description`, `property_uid`, `ptype_xref`, `image` FROM #__jomres_room_features WHERE '.$clause;
		$roomFeatures = doSelectSql($query);
		if (!empty($roomFeatures)) {
			foreach ($roomFeatures as $f) {
				$this->all_room_features[ $f->room_features_uid ][ 'room_features_uid' ] = (int) $f->room_features_uid;
				$this->all_room_features[ $f->room_features_uid ][ 'feature_description' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $f->room_features_uid, stripslashes($f->feature_description), false);
				$this->all_room_features[ $f->room_features_uid ][ 'image' ] = $f->image;

				if ($f->ptype_xref != '') {
					$this->all_room_features[ $f->room_features_uid ][ 'ptype_xref' ] = unserialize($f->ptype_xref);
				} else {
					$this->all_room_features[ $f->room_features_uid ][ 'ptype_xref' ] = array();
				}
			}
		}
	}

	public function get_global_room_features()
	{
		$this->global_room_features = array();

		$query = 'SELECT `room_features_uid`, `feature_description`, `property_uid`, `ptype_xref`, `image` , `property_uid` FROM #__jomres_room_features';
		$roomFeatures = doSelectSql($query);
		if (!empty($roomFeatures)) {
			foreach ($roomFeatures as $f) {
				$this->global_room_features[ $f->room_features_uid ][ 'room_features_uid' ] = (int) $f->room_features_uid;
				$this->global_room_features[ $f->room_features_uid ][ 'property_uid' ] = (int) $f->property_uid;
				$this->global_room_features[ $f->room_features_uid ][ 'feature_description' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $f->room_features_uid, stripslashes($f->feature_description), false);
				$this->global_room_features[ $f->room_features_uid ][ 'image' ] = $f->image;

				if ($f->ptype_xref != '') {
					$this->global_room_features[ $f->room_features_uid ][ 'ptype_xref' ] = unserialize($f->ptype_xref);
				} else {
					$this->global_room_features[ $f->room_features_uid ][ 'ptype_xref' ] = array();
				}
			}
		}
	}
}
