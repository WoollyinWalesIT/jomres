<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
 * 	 * @package Jomres\Core\Classes
 *
 *
 * Search class and supporting functions.
 */
class jomSearch
{
	/**
	 * Constructs the search object.
	 */
	public function __construct($calledByModule, $includedInModule = false)
	{
		//var_dump($searchOptions);
		$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$this->formname = '';
		$this->searchAll = $searchAll;
		$this->filter = array('propertyname' => '', 'country' => '', 'region' => '', 'town' => '', 'description' => '', 'feature_uids' => '', 'arrival' => '', 'departure' => '', 'ptype' => '', 'cat_id' => '', 'room_type' => '');
		$this->makeFormName();

		if (!isset($calledByModule) || empty($calledByModule)) {
			$calledByModule = jomresGetParam($_REQUEST, 'calledByModule', 'mod_jomsearch_m0');
		}

		if (strlen($calledByModule) > 0) {
			$calledByModule = getEscaped($calledByModule);
			$this->calledByModule = $calledByModule;

			$this->templateFilePath = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS.$calledByModule.JRDS.$calledByModule;
			$this->templateFile = $calledByModule.'.html';

			if (
				($calledByModule == 'mod_jomsearch_m0' && $jrConfig[ 'integratedSearch_enable' ] == '1' && this_cms_is_joomla()) ||
				($calledByModule == 'mod_jomsearch_m0' && this_cms_is_wordpress() && $includedInModule)
				) {
				$this->templateFilePath = JOMRES_TEMPLATEPATH_FRONTEND;
				$this->templateFile = 'search.html';

				if (this_cms_is_wordpress() && $jrConfig['is_single_property_installation'] == '1') {
					$this->templateFile = 'search_single_property.html';
				}
			}

			$vals = jomres_cmsspecific_getSearchModuleParameters($calledByModule);

			if (isset($vals[ 'moduleclass_sfx' ])) {
				$moduleclass_sfx = $vals[ 'moduleclass_sfx' ];
			}

			if (!isset($vals[ 'useCols' ])) {
				$vals[ 'useCols' ] = false;
			}
			if (!isset($vals[ 'featurecols' ])) {
				$vals[ 'featurecols' ] = false;
			}
			if (!isset($vals[ 'geosearchtype' ])) {
				$vals[ 'geosearchtype' ] = 0;
			} // 0 none 1 Town 2 Region 3 Country
			if (!isset($vals[ 'propertyname' ])) {
				$vals[ 'propertyname' ] = false;
			}
			if (!isset($vals[ 'ptype' ])) {
				$vals[ 'ptype' ] = false;
			}
			if (!isset($vals[ 'cat_id' ])) {
				$vals[ 'cat_id' ] = false;
			}
			if (!isset($vals[ 'room_type' ])) {
				$vals[ 'room_type' ] = false;
			}
			if (!isset($vals[ 'features' ])) {
				$vals[ 'features' ] = false;
			}
			if (!isset($vals[ 'description' ])) {
				$vals[ 'description' ] = false;
			}
			if (!isset($vals[ 'availability' ])) {
				$vals[ 'availability' ] = false;
			}
			if (!isset($vals[ 'guestnumber' ])) {
				$vals[ 'guestnumber' ] = false;
			}
			if (!isset($vals[ 'stars' ])) {
				$vals[ 'stars' ] = false;
			}

			if (!isset($vals[ 'geosearch_dropdown' ])) {
				$vals[ 'geosearch_dropdown' ] = false;
			}
			if (!isset($vals[ 'propertyname_dropdown' ])) {
				$vals[ 'propertyname_dropdown' ] = false;
			}
			if (!isset($vals[ 'ptype_dropdown' ])) {
				$vals[ 'ptype_dropdown' ] = false;
			}
			if (!isset($vals[ 'room_type_dropdown' ])) {
				$vals[ 'room_type_dropdown' ] = false;
			}
			if (!isset($vals[ 'features_dropdown' ])) {
				$vals[ 'features_dropdown' ] = false;
			}
			if (!isset($vals[ 'priceranges' ])) {
				$vals[ 'priceranges' ] = false;
			}
			
			/* 
			The purpose is to allow us to add searchable urls without forcing the user to modify the configuration.php manually.

			Bit of a hack, but this class is so old but yet robust, I can't see it changing now.
			The called by module m0 is supposed to be set in Site Config integrated search, which was originally designed to offer a search "module" in the property list page. That was abandoned at some point
			however the m0 tage wasn't. Unfortunately, the various settings in site config are now missing, so it's not possible to configurationally enable them ( and that's a good thing, less options = less confusion), so instead we'll do that here.
			This *soley* enables searching on various arrays, *if* they're populated. It will inevitably add some queries, but only if calledbymodule is set to m0

			*/
			if ( $calledByModule == 'mod_jomsearch_m0' && !this_cms_is_wordpress() ){
				$vals[ 'propertyname' ] = true;
				$vals[ 'ptype' ]		= true;
				$vals[ 'cat_id' ]	   = true;
				$vals[ 'room_type' ]	= true;
				$vals[ 'features' ]	 = true;
				$vals[ 'description' ]  = true;
				$vals[ 'availability' ] = true;
				$vals[ 'guestnumber' ]  = true;
				$vals[ 'stars' ]		= true;
				$vals[ 'priceranges' ]  = true;
				}
			
			$useCols = $vals[ 'useCols' ];
			$featurecols = $vals[ 'featurecols' ];
			$geosearchtype = $vals[ 'geosearchtype' ];
			$pn = $vals[ 'propertyname' ];
			$ptype = $vals[ 'ptype' ];
			$cat_id = $vals[ 'cat_id' ];
			$room_type = $vals[ 'room_type' ];
			$features = $vals[ 'features' ];
			$description = $vals[ 'description' ];
			$availability = $vals[ 'availability' ];
			$guestnumber = $vals[ 'guestnumber' ];
			$stars = $vals[ 'stars' ];

			$geosearch_dropdown = $vals[ 'geosearch_dropdown' ];
			$propertyname_dropdown = $vals[ 'propertyname_dropdown' ];
			$ptype_dropdown = $vals[ 'ptype_dropdown' ];
			$room_type_dropdown = $vals[ 'room_type_dropdown' ];
			$features_dropdown = $vals[ 'features_dropdown' ];

			$priceranges = $vals[ 'priceranges' ];
			$pricerange_increments = $vals[ 'pricerange_increments' ];
			$selectcombo = $vals[ 'selectcombo' ];
		}
		$option = jomresGetParam($_REQUEST, 'option', '');

		$this->featurecols = $featurecols;
		$this->cols = $useCols;
		//$this->overlibLables=$useoverlibLabels;
		$searchOptions = array();
		if ($pn) {
			$searchOptions[ ] = 'propertyname';
		}
		if ($ptype) {
			$searchOptions[ ] = 'ptype';
		}
		if ($cat_id) {
			$searchOptions[ ] = 'cat_id';
		}
		if ($room_type) {
			$searchOptions[ ] = 'room_type';
		}
		if ($features) {
			$searchOptions[ ] = 'feature_uids';
		}
		if ($description) {
			$searchOptions[ ] = 'description';
		}
		if ($geosearchtype) {
			$searchOptions[ ] = $geosearchtype;
		}
		if ($availability) {
			$searchOptions[ ] = 'availability';
		}
		if ($priceranges) {
			$searchOptions[ ] = 'priceranges';
		}
		if ($guestnumber) {
			$searchOptions[ ] = 'guestnumber';
		}

		if ($stars) {
			$searchOptions[ ] = 'stars';
		}

		if ($selectcombo) {
			$searchOptions[ ] = 'selectcombo';
			$searchOptions[ ] = 'country';
			$searchOptions[ ] = 'region';
			$searchOptions[ ] = 'town';
		}

		$searchOutput = array('propertyname' => 'dropdown', 'country' => 'dropdown', 'region' => 'dropdown', 'town' => 'dropdown', 'feature_uids' => 'dropdown', 'ptype' => 'dropdown', 'cat_id' => 'dropdown', 'room_type' => 'dropdown');
		if (!$geosearch_dropdown) {
			$searchOutput[ 'country' ] = '';
			$searchOutput[ 'region' ] = '';
			$searchOutput[ 'town' ] = '';
		}
		if (!$propertyname_dropdown) {
			$searchOutput[ 'propertyname' ] = '';
		}
		if (!$ptype_dropdown) {
			$searchOutput[ 'ptype' ] = '';
		}
		if (!$room_type_dropdown) {
			$searchOutput[ 'room_type' ] = '';
		}
		if (!$features_dropdown) {
			$searchOutput[ 'feature_uids' ] = '';
		}

		$this->searchOptions = $searchOptions;
		$this->searchOutput = $searchOutput;
		$this->propertys_uid[ ] = get_showtime('published_properties_in_system');

		// -------------------------------------------------------------------------------------------------------------------------------------------
		if (in_array('propertyname', $this->searchOptions)) {
			$puids = array();
			$all_published_properties = array();
			$all_properties = array();
			$all_property_uids = false;
			$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

			$all_published_properties = get_showtime('published_properties_in_system');

			if (!$all_published_properties) {
				$query = 'SELECT propertys_uid,published FROM #__jomres_propertys';
				$result = doSelectSql($query);
				$numberOfPropertiesInSystem = count($result);
				foreach ($result as $r) {
					$all_properties[ ] = $r->propertys_uid;
					if ($r->published == '1') {
						$all_published_properties[ ] = $r->propertys_uid;
					}
				}
				set_showtime('numberOfPropertiesInSystem', $numberOfPropertiesInSystem);
				set_showtime('all_properties_in_system', $all_properties);
				set_showtime('published_properties_in_system', $all_published_properties);
			}

			$basic_property_details->get_property_name_multi($all_published_properties);
			foreach ($all_published_properties as $puid) {
				$this->prep[ 'propertyname' ][ ] = array('pn' => $basic_property_details->property_names[$puid], 'puid' => $puid);
			}
			asort($this->prep[ 'propertyname' ]);
		}
		// -------------------------------------------------------------------------------------------------------------------------------------------
		if (in_array('country', $this->searchOptions)) {
			$query = "SELECT DISTINCT property_country FROM  #__jomres_propertys WHERE published = '1' ORDER BY  property_country ASC";
			$activeCountriesList = doSelectSql($query);
			$tmpCountryArray = array();
			$tmpCountryArray[ ] = $this->searchAll;

			foreach ($activeCountriesList as $country) {
				if (!in_array($country->property_country, $tmpCountryArray)) {
					$this->prep[ 'country' ][ getSimpleCountry($country->property_country) ] = array('countrycode' => $country->property_country, 'countryname' => getSimpleCountry($country->property_country));
					$tmpCountryArray[ ] = $country->property_country;
				}
			}

			ksort($this->prep[ 'country' ]);
			array_unshift($this->prep[ 'country' ], array('countrycode' => $this->searchAll, 'countryname' => $this->searchAll));
		}
		if (in_array('region', $this->searchOptions)) {
			$query = "SELECT DISTINCT property_region,property_country FROM #__jomres_propertys WHERE published = '1' ORDER BY property_region ASC";
			$activeRegionsList = doSelectSql($query);
			$tmpRegionArray = array();

			$this->prep[ 'region' ][ ] = array('region' => $this->searchAll);
			$tmpRegionArray[ ] = $this->searchAll;

			foreach ($activeRegionsList as $region) {
				if (!in_array($region->property_region, $tmpRegionArray)) {
					$this->prep[ 'region' ][ ] = array('region' => find_region_name($region->property_region));
					$tmpRegionArray[ ] = find_region_name($region->property_region);
				}
			}
			$tmpRegionArray = array_unique($tmpRegionArray);
		}
		if (in_array('town', $this->searchOptions)) {
			//$result=prepGeographicSearch();
			$query = "SELECT DISTINCT (CASE WHEN (a.propertys_uid = b.property_uid 
															AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN' 
															AND b.language = '".get_showtime('lang')."') 
														THEN b.customtext 
														ELSE a.property_town 
													END) AS property_town,
										a.property_region,
										a.property_country 
									FROM #__jomres_propertys a
									LEFT JOIN #__jomres_custom_text b ON (a.propertys_uid = b.property_uid 
																			AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN' 
																			AND b.language = '".get_showtime('lang')."')
									WHERE a.published = '1' 
									ORDER BY property_town ASC ";
			$activeTownList = doSelectSql($query);
			$tmpTownArray = array();

			$this->prep[ 'town' ][ ] = array('town' => $this->searchAll);
			$town = $this->searchAll;
			$rname = $this->searchAll;
			$cname = $this->searchAll;
			$tmpRegionArray[ ] = $this->searchAll;
			foreach ($activeTownList as $town) {
				$t = stripslashes($town->property_town);
				if (!empty($town)) {
					$this->prep[ 'town' ][ $t ] = array('town' => stripslashes($town->property_town));
				}
			}
		}
		// -------------------------------------------------------------------------------------------------------------------------------------------
		// Currently returns an empty array
		if (in_array('description', $this->searchOptions)) {
			$result = prepDescriptiveSearch();
		}
		// -------------------------------------------------------------------------------------------------------------------------------------------
		if (in_array('availability', $searchOptions)) {
			$result = prepAvailabilitySearch();
			if (isset($result[ 'arrival' ])) {
				$this->prep[ 'arrival' ] = $result[ 'arrival' ];
			} else {
				$this->prep[ 'arrival' ] = '';
			}

			if (isset($result[ 'departure' ])) {
				$this->prep[ 'departure' ] = $result[ 'departure' ];
			} else {
				$this->prep[ 'departure' ] = '';
			}
		}
		// -------------------------------------------------------------------------------------------------------------------------------------------
		if (in_array('feature_uids', $this->searchOptions)) {
			$result = prepFeatureSearch();
			if ($result && !empty($result)) {
				foreach ($result as $feature) {
					if (!empty($feature[ 'title' ])) {
						$this->prep[ 'features' ][ ] = array('id' => $feature[ 'id' ], 'image' => JOMRES_IMAGELOCATION_RELPATH.'pfeatures/'.$feature[ 'image' ], 'title' => $feature[ 'title' ], 'description' => $feature[ 'description' ]);
					}
				}
			}
		}
		// -------------------------------------------------------------------------------------------------------------------------------------------
		if (in_array('room_type', $this->searchOptions)) {
			$result = prepRoomtypeSearch();

			if ($result && !empty($result)) {
				foreach ($result as $rtype) {
					if (!empty($rtype[ 'id' ]) && !empty($rtype[ 'title' ])) {
						$this->prep[ 'rtypes' ][ ] = array('id' => $rtype[ 'id' ], 'image' => JOMRES_IMAGELOCATION_RELPATH.'rmtypes/'.$rtype[ 'image' ], 'title' => $rtype[ 'title' ], 'description' => $rtype[ 'description' ]);
					}
				}
			}
		}
		// -------------------------------------------------------------------------------------------------------------------------------------------
		if (in_array('ptype', $this->searchOptions)) {
			$result = prepPropertyTypeSearch();
			if ($result && !empty($result)) {
				foreach ($result as $ptype) {
					$this->prep[ 'ptypes' ][ ] = array('id' => $ptype[ 'id' ], 'ptype' => $ptype[ 'ptype' ]);
					//if (!empty($ptype['id']) && !empty($ptype['ptype']) )
					//$this->prep['ptypes'][]=array('id'=>$ptype['id'] ,'ptype'=>$ptype['ptype'],'number'=>$ptype['number']);
				}
			}
		}
		
		if (in_array('cat_id', $this->searchOptions)) {
			$result = prepPropertyCategoriesSearch();
			if ($result && !empty($result)) {
				foreach ($result as $c) {
					$this->prep[ 'categories' ][ ] = array('id' => $c[ 'id' ], 'title' => $c[ 'title' ]);
					//if (!empty($ptype['id']) && !empty($ptype['ptype']) )
					//$this->prep['ptypes'][]=array('id'=>$ptype['id'] ,'ptype'=>$ptype['ptype'],'number'=>$ptype['number']);
				}
			}
		}

		if (in_array('priceranges', $this->searchOptions)) {
			$result = prepPriceRangeSearch($pricerange_increments);
			if ($result && !empty($result)) {
				foreach ($result as $r) {
					$this->prep[ 'priceranges' ][ ] = $r;
				}
			}
		}

		if (in_array('guestnumber', $this->searchOptions)) {
			$result = prepGuestnumberSearch();
			if ($result && !empty($result)) {
				$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);
				$this->prep[ 'guestnumber' ][ ] = array('id' => 0, 'guestnumber' => $searchAll);
				foreach ($result as $guestnumber) {
					$this->prep[ 'guestnumber' ][ ] = array('id' => (int) $guestnumber, 'guestnumber' => (int) $guestnumber);
				}
			}
		}

		if (in_array('stars', $this->searchOptions)) {
			$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);
			$this->prep[ 'stars' ][ ] = array('id' => 0, 'stars' => $searchAll);
			$this->prep[ 'stars' ][ ] = array('id' => 1, 'stars' => 1);
			$this->prep[ 'stars' ][ ] = array('id' => 2, 'stars' => 2);
			$this->prep[ 'stars' ][ ] = array('id' => 3, 'stars' => 3);
			$this->prep[ 'stars' ][ ] = array('id' => 4, 'stars' => 4);
			$this->prep[ 'stars' ][ ] = array('id' => 5, 'stars' => 5);
		}
	}

	/**
	 * Triggers the list_propertys mini-component.
	 */
	public function jomSearch_showresults()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$tmpResultsArray = end($this->propertys_uid);
		if (!empty($tmpResultsArray)) {
			$componentArgs = array();
			$componentArgs[ 'propertys_uid' ] = $tmpResultsArray;
			$MiniComponents->triggerEvent('01004', $componentArgs); // optional
			$MiniComponents->triggerEvent('01005', $componentArgs); // optional
			$MiniComponents->triggerEvent('01006', $componentArgs); // optional
			$MiniComponents->triggerEvent('01007', $componentArgs); // optional

			$MiniComponents->triggerEvent('01010', $componentArgs); // listPropertys
		} else {
			echo jr_gettext('_JOMRES_FRONT_NORESULTS', '_JOMRES_FRONT_NORESULTS', $editable = true, $islink = false);
		}
		//listPropertys($tmpResultsArray);
	}

	/**
	 * Performs a sorts the search results.
	 */
	public function sortResult()
	{
		$tmpArray = array();
		if (!empty($this->resultBucket)) {
			foreach ($this->resultBucket as $result) {
				$tmpArray[ ] = $result->propertys_uid;
			}
		}
		
		$tmpArray = array_unique($tmpArray);

		$this->propertys_uid[ ] = $tmpArray;
	}

	/**
	 * Performs a random search.
	 */
	public function jomSearch_random()
	{
		$result = array();
		$all_published_properties = get_showtime('published_properties_in_system');

		foreach ($all_published_properties as $k => $v) {
			$obj = new stdClass();
			$obj->propertys_uid = $v;
			$result[ ] = $obj;
		}
		$this->resultBucket = $result;
		$this->sortResult();
	}

	/**
	 * Performs a search based on country.
	 */
	public function jomSearch_country()
	{
		$filter = $this->filter[ 'country' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $property_ors) {
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE published = '1' AND property_country LIKE '$filter' $property_ors ";
			$this->resultBucket = doSelectSql($query);
		} else {
			$this->resultBucket = array();
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on region.
	 */
	public function jomSearch_region()
	{
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($this->filter[ 'region' ]) && $property_ors) {
			$filter = $this->filter[ 'region' ];
			if ($filter != '%') {
				$this->filter[ 'region' ] = jomres_cmsspecific_stringURLSafe($this->filter[ 'region' ]);
				$region_id = find_region_id($this->filter[ 'region' ]);
				if (!is_null($region_id)) {
					$this->filter[ 'region' ] .= "' OR property_region = ".(int) $region_id.'';
				} else {
					$this->filter[ 'region' ] .= "'";
				}

				$this->filter[ 'region' ] = str_replace('-', '%', $this->filter[ 'region' ]);
			}
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE published = '1' AND property_region LIKE '".$this->filter[ 'region' ]." $property_ors ";
			$this->resultBucket = doSelectSql($query);
		} else {
			$this->resultBucket = array();
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on city.
	 */
	public function jomSearch_town()
	{
		$filter = $this->filter[ 'town' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $property_ors) {
			if ($filter != '%') {
				$filter = jomres_cmsspecific_stringURLSafe($filter);
				$filter = str_replace('-', '%', $filter);
			}
			$query = "SELECT a.propertys_uid  
										FROM #__jomres_propertys a
										LEFT JOIN #__jomres_custom_text b ON (
																			a.propertys_uid = b.property_uid 
																			AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN' 
																			AND b.language = '".get_showtime('lang')."'
																			)
										WHERE a.published = 1  
											AND ( a.property_town LIKE '$filter' OR b.customtext LIKE '$filter') 
											$property_ors ";
			$this->resultBucket = doSelectSql($query);
		} else {
			$this->resultBucket = array();
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on text.
	 */
	public function jomSearch_description()
	{
		$filter = $this->filter[ 'description' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		$lang = get_showtime('lang');
		if (!empty($filter) && $property_ors) {
			$keywords = getEscaped($filter);
			$words = explode(' ', $keywords);
			$wheres = array();
			foreach ($words as $word) {
				$wheres2 = array();
				$wheres2[ ] = "LOWER(property_name) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_street) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_town) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_postcode) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_description) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_checkin_times) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_area_activities) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_driving_directions) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_airports) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_othertransport) LIKE '%$word%'";
				$wheres2[ ] = "LOWER(property_policies_disclaimers) LIKE '%$word%'";
				$wheres[ ] = implode(' OR ', $wheres2);
			}
			$where = '('.implode(($phrase == 'all' ? ') AND (' : ') OR ('), $wheres).')';
			$query = 'SELECT propertys_uid FROM #__jomres_propertys ';
			$query .= " WHERE published = 1 AND ( $where ) ";
			$query .= " $property_ors ";
			$set1 = doSelectSql($query);

			$query = '';
			$wheres = array();
			foreach ($words as $word) {
				$wheres2 = array();
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_NAME%' AND LOWER(a.customtext) LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_STREET%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_PROPERTY_POSTCODE%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang'";
				$wheres2[ ] = "a.constant LIKE '_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS%' AND LOWER(a.customtext)  LIKE '%$word%' AND a.language = '$lang' ";
				$wheres[ ] = implode(' OR ', $wheres2);
			}
			$where = '('.implode(($phrase == 'all' ? ') AND (' : ') OR ('), $wheres).')';
			$query = 'SELECT a.property_uid FROM #__jomres_custom_text a, #__jomres_propertys b ';
			$query .= " WHERE published = 1 AND ( $where ) AND ( a.property_uid = b.propertys_uid )";
			$query .= " $property_ors ";
			$set2 = doSelectSql($query);

			$result = array();

			if ($set1) {
				foreach ($set1 as $val) {
					$obj = new stdClass();
					$v = $val->propertys_uid;
					$obj->propertys_uid = $v;
					$result[ ] = $obj;
				}
			}
			if ($set2) {
				foreach ($set2 as $val) {
					$obj = new stdClass();
					$v = $val->property_uid;
					$obj->propertys_uid = $v;
					$result[ ] = $obj;
				}
			}

			$this->resultBucket = $result;
		} else {
			$this->resultBucket = array();
		}
		$this->sortResult();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function jomSearch_propertyname()
	{
		$filter = $this->filter[ 'propertyname' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		$lang = get_showtime('lang');
		if (!empty($filter) && $property_ors) {
			$keywords = getEscaped($filter);
			$query = 'SELECT propertys_uid FROM #__jomres_propertys ';
			$query .= " WHERE published = '1' AND property_name LIKE '%$keywords%' ";
			$set1 = doSelectSql($query);
			$query = 'SELECT a.property_uid FROM #__jomres_custom_text a, #__jomres_propertys b ';
			$query .= " WHERE published = '1' AND property_name LIKE '%$keywords%' AND a.language = $lang AND ( a.property_uid = b.propertys_uid )";
			$set2 = doSelectSql($query);

			$result = array();

			if ($set1) {
				foreach ($set1 as $val) {
					$obj = new stdClass();
					$v = $val->propertys_uid;
					$obj->propertys_uid = $v;
					$result[ ] = $obj;
				}
			}
			if ($set2) {
				foreach ($set2 as $val) {
					$obj = new stdClass();
					$v = $val->property_uid;
					$obj->propertys_uid = $v;
					$result[ ] = $obj;
				}
			}

			$this->resultBucket = $result;
		} else {
			$this->resultBucket = array();
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on property features.
	 */
	public function jomSearch_features()
	{
		$filter = $this->filter[ 'feature_uids' ];
		if ((int) $filter[ 0 ] == 0) {
			return;
		}
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $property_ors) {
			$ids = $filter;
			if (!empty($ids)) {
				$st = '';
				foreach ($ids as $id) {
					$st .= "'%,".$id.",%' AND property_features LIKE ";
				}
				$st = substr($st, 0, -28);
			}
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE published = '1' AND property_features LIKE $st  $property_ors ";
			$this->resultBucket = doSelectSql($query);
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on room types.
	 */
	public function jomSearch_roomtypes()
	{
		$filter = $this->filter[ 'room_type' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $property_ors) {
			$query = "SELECT propertys_uid FROM #__jomres_rooms WHERE  room_classes_uid LIKE '$filter'  $property_ors ";
			$this->resultBucket = doSelectSql($query);
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on property types.
	 */
	public function jomSearch_ptypes()
	{
		$filter = $this->filter[ 'ptype' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $property_ors) {
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE published = '1' AND ptype_id LIKE '$filter'  $property_ors ";
			$this->resultBucket = doSelectSql($query);
		}
		//var_dump($this->resultBucket);exit;
		$this->sortResult();
	}
	
	/**
	 * Performs a search based on property category.
	 */
	public function jomSearch_categories()
	{
		$filter = $this->filter[ 'cat_id' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $filter > 0 && $property_ors) {
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE published = '1' AND cat_id = $filter  $property_ors ";
			$this->resultBucket = doSelectSql($query);
		}
		//var_dump($this->resultBucket);exit;
		$this->sortResult();
	}

	/**
	 * Performs a search based on property types.
	 */
	public function jomSearch_guestnumber()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if (!isset($jrConfig[ 'guestnumbersearch' ])) {
			$jrConfig[ 'guestnumbersearch' ] = 'equal';
		}
		switch ($jrConfig[ 'guestnumbersearch' ]) {
			case 'lessthan':
				$clause = '<=';
				break;
			case 'equal':
				$clause = '=';
				break;
			case 'greaterthan':
				$clause = '>=';
				break;
		}

		$filter = (int) $this->filter[ 'guestnumber' ];
		$this->makeOrs('property_uid');
		$property_ors = $this->ors;
		$res = array();
		if (!empty($filter) && $property_ors) {
			$query = 'SELECT property_uid FROM #__jomres_rates WHERE maxpeople '.$clause.' '.$filter.' '.$property_ors;
			$result = doSelectSql($query);
			// We need to create a new result array with classes called propertys_uid in, cos that's what resultBucket needs. Annoying fiddly stuff because we've not consistently named the property uids column in various tables, but there you have it. It's not going to change now.
			foreach ($result as $r) {
				$resultObj = new stdClass();
				$resultObj->propertys_uid = $r->property_uid;
				if (!in_array($resultObj, $res)) {
					$res[ ] = $resultObj;
				}
			}
			$this->resultBucket = $res;
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on property types.
	 */
	public function jomSearch_stars()
	{
		$filter = (int) $this->filter[ 'stars' ];
		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $property_ors) {
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE stars LIKE '$filter' $property_ors";
			$this->resultBucket = doSelectSql($query);
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on price ranges.
	 */
	public function jomSearch_priceranges()
	{
		$filter = $this->filter[ 'priceranges' ];

		$this->makeOrs();
		$property_ors = $this->ors;
		if (!empty($filter) && $property_ors) {
			if ($filter != '%') {
				$property_ors = str_replace('propertys_uid', 'property_uid', $property_ors);

				//get arrival date
				$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

				$arrivalDate = date('Y/m/d', strtotime(date('Y/m/d').'+1 day'));

				if (isset($_REQUEST[ 'arrivalDate' ]) && $_REQUEST[ 'arrivalDate' ] != '') {
					$arrivalDate = JSCalConvertInputDates(jomresGetParam($_REQUEST, 'arrivalDate', ''));
				} elseif (!empty($tmpBookingHandler->tmpsearch_data)) {
					if (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) && trim($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) != '') {
						$arrivalDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ];
					} elseif (isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate']) && trim($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] != '')) {
						$arrivalDate = JSCalConvertInputDates($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'], $siteCal = true);
					}
				}

				$clause = "AND DATE_FORMAT('".$arrivalDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d') ";

				if (is_array($filter)) {
					$query = 'SELECT property_uid FROM #__jomres_rates WHERE roomrateperday >= '.$filter[ 'from' ].' AND roomrateperday <= '.$filter[ 'to' ]." $clause $property_ors ";
				} else {
					$query = "SELECT property_uid FROM #__jomres_rates WHERE roomrateperday LIKE '%' $clause $property_ors ";
				}
				$result = doSelectSql($query);

				if (is_array($filter)) {
					$property_ors = str_replace('property_uid', 'propertys_uid', $property_ors);
					$query = 'SELECT propertys_uid FROM #__jomres_propertys WHERE property_key >= '.$filter[ 'from' ].' AND property_key <= '.$filter[ 'to' ]."  $property_ors ";
					$result2 = doSelectSql($query);
				}

				// We need to create a new result array with classes called propertys_uid in, cos that's what resultBucket needs. Annoying fiddly stuff because we've not consistently named the property uids column in various tables, but there you have it. It's not going to change now.
				$res = array();
				foreach ($result as $r) {
					$resultObj = new stdClass();
					$resultObj->propertys_uid = $r->property_uid;
					if (!in_array($resultObj, $res)) {
						$res[ ] = $resultObj;
					}
				}
				if (!empty($result2)) {
					foreach ($result2 as $r) {
						$resultObj = new stdClass();
						$resultObj->propertys_uid = $r->propertys_uid;
						if (!in_array($resultObj, $res)) {
							$res[ ] = $resultObj;
						}
					}
				}

				$this->resultBucket = $res;
			} else {
				$ids = end($this->propertys_uid);
				$res = array();
				foreach ($ids as $r) {
					$resultObj = new stdClass();
					$resultObj->propertys_uid = $r;
					if (!in_array($resultObj, $res)) {
						$res[ ] = $resultObj;
					}
				}
				$this->resultBucket = $res;
			}
			//var_dump($this->resultBucket);exit;
		}
		$this->sortResult();
	}

	/**
	 * Performs a search based on availability.
	 */
	public function jomSearch_availability()
	{
		$all_property_rooms = array();
		$all_property_bookings = array();

		$arrivalDate = $this->filter[ 'arrival' ];
		$departureDate = $this->filter[ 'departure' ];

		$this->makeOrs();
		$property_ors = $this->ors;

		if ($arrivalDate != '' && $departureDate != '' && $property_ors) {
			if ($arrivalDate == $departureDate) {
				$stayDays = 1;
			} else {
				$stayDays = dateDiff('d', $arrivalDate, $departureDate);
			}
			$dateRangeArray = array();
			$date_elements = explode('/', $arrivalDate);
			$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			$secondsInDay = 86400;
			$currentUnixDay = $unixCurrentDate;
			$currentDay = $arrivalDate;
			for ($i = 0, $n = $stayDays; $i < $n; ++$i) {
				$currentDay = date('Y/m/d', $unixCurrentDate);
				$dateRangeArray[ ] = $currentDay;
				//echo $currentDay;
				$unixCurrentDate = $unixCurrentDate + $secondsInDay;
			}
			$propertiesWithFreeRoomsArray = array();

			$query = 'SELECT propertys_uid, room_uid, room_classes_uid, max_people FROM #__jomres_rooms WHERE propertys_uid IN ('.jomres_implode(end($this->propertys_uid)).') ';
			$roomsLists = doSelectSql($query);
			if (!empty($roomsLists)) {
				foreach ($roomsLists as $room) {
					$all_property_rooms[ $room->propertys_uid ][ $room->room_uid ] = array('room_classes_uid' => $room->room_classes_uid, 'room_uid' => $room->room_uid, 'max_people' => $room->max_people);
				}
			}

			$query = 'SELECT property_uid,room_uid,`date` FROM #__jomres_room_bookings WHERE property_uid IN ('.jomres_implode(end($this->propertys_uid)).') AND `date` IN ('.jomres_implode($dateRangeArray, false).') ';
			$datesList = doSelectSql($query);
			if (!empty($datesList)) {
				foreach ($datesList as $date) {
					$all_property_bookings[ $date->property_uid ][ ] = $date->room_uid;
				}
			}

			foreach (end($this->propertys_uid) as $property) {
				$propertyHasFreeRooms = false;
				$available_rooms = array();
				$max_capacity = 0;
				$roomsList = array();
				// Then we find their rooms
				// $query="SELECT room_uid,room_classes_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$property."'";
				// $roomsList=doSelectSql($query);

				if (isset($all_property_rooms[ (int) $property ])) {
					$roomsList = $all_property_rooms[ (int) $property ];
				}

				foreach ($roomsList as $room) {
					$ok = true;
					if (isset($_REQUEST[ 'room_type' ]) && $_REQUEST[ 'room_type' ] != $this->searchAll) {
						if (!empty($_REQUEST[ 'room_type' ]) && $room[ 'room_classes_uid' ] != $this->filter[ 'room_type' ]) {
							$ok = false;
						}
					}
					if ($ok) {
						// Then we see if each room is free on the date(s) in the date range array
						// $query="SELECT room_uid FROM #__jomres_room_bookings WHERE room_uid = '".(int)$room->room_uid."' AND property_uid ='".(int)$property."'  AND (".$st.")";
						// $datesList=doSelectSql($query);

						if (!isset($all_property_bookings[ $property ]) || (isset($all_property_bookings[ $property ]) && !in_array($room[ 'room_uid' ], $all_property_bookings[ $property ]))) {
							$propertyHasFreeRooms = true;
							$available_rooms[$room[ 'room_uid' ]] = $room;
						}

						// if (count($datesList)==0)
						// $propertyHasFreeRooms=TRUE;
					}
				}
				if ($propertyHasFreeRooms) {
					foreach ($available_rooms as $r) {
						$max_capacity += $r['max_people'];
					}

					if (!isset($this->filter[ 'guestnumber' ]) || (isset($this->filter[ 'guestnumber' ]) && (int) $this->filter[ 'guestnumber' ] == 0)) {
						$total_in_party = 1;
					} else {
						$total_in_party = (int)$this->filter[ 'guestnumber' ];
					}

					if ($total_in_party <= $max_capacity) {
						$propertiesWithFreeRoomsArray[ ] = $property;
						set_showtime('available_rooms'.$property, $available_rooms);
					}
				}
			}
			if (!empty($propertiesWithFreeRoomsArray)) {
				$propertiesWithFreeRoomsArray = array_unique($propertiesWithFreeRoomsArray);
				
				$this->propertys_uid[ ] = $propertiesWithFreeRoomsArray;
			} else {
				$this->propertys_uid[ ] = array();
			}
		} else {
			$this->propertys_uid[ ] = array();
		}
	}

	/**
	 * Constructs a set of ORs to be used in queries based on the last array of property uids in the propertys_uid array.
	 */
	public function makeOrs($column = 'propertys_uid')
	{
		$property_uids = end($this->propertys_uid);
		if (!empty($property_uids)) {
			$st = " AND $column IN (";
			foreach ($property_uids as $property) {
				$st .= "'".(int) $property."', ";
			}
			$st = substr($st, 0, -2);
			$this->ors = $st.') ';
		} else {
			$this->ors = false;
		}
	}

	/**
	 * Makes a random name for the availability search.
	 * We need to give the form a random name otherwise the availability search will not work, as it the same form generation function is used in multiple places.
	 */
	public function makeFormName()
	{
		// We need to give the form a random name otherwise the availability search will not work
		list($usec, $sec) = explode(' ', microtime());
		mt_srand($sec * $usec);
		$possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz';
		for ($i = 0; $i < 10; ++$i) {
			$key = mt_rand(0, strlen($possible) - 1);
			$this->formname .= $possible[ $key ];
		}
	}
} // End class jomSearch

/**
 * Prepares data for geographic searching. To save queries this is done once by getting data for all properties, then seperating the data into various arrays, which are then parsed by methods in the search class.
 */
function prepGeographicSearch()
{
	// Prepares the geographic data required for a search
	$lang = get_showtime('lang');

	$query = "SELECT DISTINCT (CASE WHEN (a.propertys_uid = b.property_uid 
														AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN' 
														AND b.language = '".$lang."') 
													THEN b.customtext 
													ELSE a.property_town 
												END) AS property_town,
									a.property_region,
									a.property_country,
									a.property_postcode 
								FROM #__jomres_propertys a
								LEFT JOIN #__jomres_custom_text b ON (a.propertys_uid = b.property_uid 
																		AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN' 
																		AND b.language = '".$lang."')
								WHERE a.published = '1' 
								ORDER BY a.property_country,a.property_region,property_town ";
	$propertyLocations = doSelectSql($query);
	$allPropertyLocations = array();
	foreach ($propertyLocations as $location) {
		$r = array();
		$r[ 'postcode' ] = $location->property_postcode;
		if (is_numeric($location->property_region)) {
			$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
			$r[ 'region' ] = jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$location->property_region, $jomres_regions->get_region_name($location->property_region), false);
		} else {
			$r[ 'region' ] = $location->property_region;
		}
		$r[ 'country' ] = $location->property_country;
		$r[ 'countryname' ] = getSimpleCountry($r[ 'country' ]);
		$r[ 'property_town' ] = $location->property_town;
		if (!empty($r[ 'property_town' ])) {
			$allPropertyLocations[ ] = $r;
		}
	}

	$result[ 'propertyLocations' ] = $allPropertyLocations;

	return $result;
}
	
	/**
	 * 
	 *
	 *
	 */

function prepGuestnumberSearch()
{
	$result = array();

	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();

	if ($jrConfig[ 'guestnumbersearch' ] == 'equal') {
		$query = 'SELECT DISTINCT maxpeople FROM #__jomres_rates ORDER by maxpeople ASC';
		$rateList = doSelectSql($query);
		foreach ($rateList as $rate) {
			$result[ ] = $rate->maxpeople;
		}
	} else {
		$query = 'SELECT MAX(maxpeople) FROM #__jomres_rates LIMIT 1';
		$maxpeople = (int) doSelectSql($query, 1);

		if ($maxpeople > 100) {
			$maxpeople = 100;
		}

		for ($i = 1; $i <= $maxpeople; ++$i) {
			$result[ ] = $i;
		}
	}

	return $result;
}

/**
 * Prepares data for searching on features.
 */
function prepFeatureSearch()
{
	// Prepares the Feature data required for a search
	$result = array();
	$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);

	$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

	// Added to speed up listing of features. Finds all property features against published propertys and creates a unique array of the feature uids. This way we can still have our list of features but not include any that are not assigned to any properties

	$uniqueFeatures = array();
	$query = "SELECT property_features FROM #__jomres_propertys WHERE published = '1'";
	$propertysfeatures = doSelectSql($query);
	foreach ($propertysfeatures as $pf) {
		$tmpArray = explode(',', $pf->property_features);
		foreach ($tmpArray as $featureuid) {
			if (!in_array($featureuid, $uniqueFeatures)) {
				$uniqueFeatures[ ] = $featureuid;
			}
		}
	}

	$r = array();
	$r[ 'id' ] = 0;
	$r[ 'title' ] = $searchAll;
	$r[ 'description' ] = $searchAll;
	$r[ 'image' ] = '';
	$r[ 'ptype_xref' ] = '';
	$result[ ] = $r;

	foreach ($basic_property_details->all_property_features as $propertyFeatureId => $feature) {

		if (in_array($propertyFeatureId, $uniqueFeatures) && $feature['include_in_filters'] == "1" ) {
			$r = array();
			$r[ 'id' ] = $propertyFeatureId;
			$r[ 'title' ] = $feature['abbv'];
			$r[ 'description' ] = $feature['desc'];
			$r[ 'image' ] = $feature['image'];
			$r[ 'ptype_xref' ] = $feature['ptype_xref'];
			$result[ ] = $r;
		}
	}

	return $result;
}

/**
 * Prepares data for searching on room types.
 */
function prepRoomtypeSearch()
{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();
	
	if (!isset($jrConfig['frontend_room_type_editing_show_property_room_types_in_search_options']) ) {
		$jrConfig['frontend_room_type_editing_show_property_room_types_in_search_options'] = "1";
	}

	// Prepares the Room type data required for a search
	$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);

	$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
	$jomres_room_types->get_all_room_types();
	$roomTypeList = $jomres_room_types->room_types;
	
	
	if ($jrConfig['frontend_room_type_editing_show_property_room_types_in_search_options'] == "1") {
		if (!empty($jomres_room_types->property_specific_room_types)) {
			foreach ($jomres_room_types->property_specific_room_types as $property ) {
				foreach ($property as $property_specific_room_type ) {
					$roomTypeList[] = $property_specific_room_type;
				}
			}
		}
	}

	$result = array();
	$r = array();
	$r[ 'id' ] = $searchAll;
	$r[ 'title' ] = $searchAll;
	$r[ 'description' ] = $searchAll;
	$r[ 'image' ] = '';
	$result[ ] = $r;

	foreach ($roomTypeList as $roomType) {
		$r = array();
		$r[ 'id' ] = $roomType['room_classes_uid'];
		$r[ 'title' ] = $roomType['room_class_abbv'];
		$r[ 'description' ] = $roomType['room_class_full_desc'];
		$r[ 'image' ] = $roomType['image'];
		$result[ ] = $r;
	}

	return $result;
}

/**
 * Returns an empty array.
 */
function prepDescriptiveSearch()
{
	$result = array();

	return $result;
}

/**
 * Prepares the availability search dates. If a search has already been done once then, if valid, the previously chosen dates are returned.
 */
function prepAvailabilitySearch()
{
	$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
	$result = array();
	//$availabilityArray=array();
	$today = date('Y/m/d');
	$date_elements = explode('/', $today);
	$unixTomorrowsDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ]);
	$unixTodaysDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
	$gmtTomorrowsDate = date('Y/m/d', $unixTomorrowsDate);

	$arrivalDate = '';
	$departureDate = '';

	if (isset($_REQUEST[ 'arrivalDate' ]) && jomresGetParam($_REQUEST, 'arrivalDate', '') != '') {
		$arrivalDate = jomresGetParam($_REQUEST, 'arrivalDate', '');

		if (isset($_REQUEST[ 'pdetails_cal' ])) {
			$arrivalDate = JSCalmakeInputDates($arrivalDate);
		}

		$arrivalDate = JSCalConvertInputDates($arrivalDate, $siteCal = true);
		$date_elements = explode('/', $arrivalDate);
		$unixTomorrowsDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ]);

		if (isset($_REQUEST[ 'departureDate' ])) {
			$departureDate = JSCalConvertInputDates(jomresGetParam($_REQUEST, 'departureDate', ''), $siteCal = true);
		} else {
			$departureDate = JSCalmakeInputDates(date('Y/m/d', $unixTomorrowsDate), $siteCal = true);
			$departureDate = JSCalConvertInputDates($departureDate, $siteCal = true);
		}
	} else {
		if (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) && $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] != '') {
			$arrivalDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ];
			$departureDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ];
		}
		/* else
			{
			$arrivalDate = JSCalmakeInputDates( date( "Y/m/d", $unixTodaysDate ), $siteCal = true );
			$arrivalDate = JSCalConvertInputDates( $arrivalDate, $siteCal = true );
			$departureDate = JSCalmakeInputDates( date( "Y/m/d", $unixTomorrowsDate ), $siteCal = true );
			$departureDate = JSCalConvertInputDates( $departureDate, $siteCal = true );
			} */
	}

	// Assuming the arrival date was passed from $_REQUEST
	if ($arrivalDate != '') {
		$date_elements = explode('/', $arrivalDate);
		$unixArrivalDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
		if ($arrivalDate != '') {
			if ($unixArrivalDate < $unixTodaysDate) {
				$arrivalDate = $today;
			}
		}

		$date_elements = explode('/', $departureDate);
		$unixDepartureDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
		if ($departureDate != '') {
			if ($unixDepartureDate < $unixTodaysDate) {
				$departureDate = $gmtTomorrowsDate;
			}
		}

		$result = array('arrival' => $arrivalDate, 'departure' => $departureDate);

		if ($arrivalDate != '' && $departureDate != '') {
			$tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] = $arrivalDate;
			$tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ] = $departureDate;
		}

		return $result;
	} else {
		return array();
	}
}

/**
 * Prepares the property type search data.
 */
function prepPropertyTypeSearch()
{
	// Prepares the PropertyType data required for a search
	$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);
	$result = array();
	$r = array();

	$r[ 'id' ] = $searchAll;
	$r[ 'ptype' ] = $searchAll;
	$r[ 'ptype_desc' ] = $searchAll;
	$result[ ] = $r;

	$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
	$jomres_property_types->get_all_property_types();

	if (!empty($jomres_property_types->property_types)) {
		foreach ($jomres_property_types->property_types as $pt) {
			$r = array();

			if ($pt['published'] == 1) {
				$r[ 'id' ] = $pt['id'];
				$r[ 'ptype' ] = $pt['ptype'];
				$r[ 'ptype_desc' ] = $pt['ptype_desc'];

				$result[ ] = $r;
			}
		}
	}

	//var_dump($result);exit;
	return $result;
}

/**
 * Prepares the property categories search data.
 */
function prepPropertyCategoriesSearch()
{
	// Prepares the property categories data required for a search
	$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);
	$result = array();
	$r = array();

	$r[ 'id' ] = $searchAll;
	$r[ 'title' ] = $searchAll;
	$r[ 'description' ] = $searchAll;
	$result[ ] = $r;

	$jomres_property_categories = jomres_singleton_abstract::getInstance('jomres_property_categories');
	$jomres_property_categories->get_all_property_categories();

	if (!empty($jomres_property_categories->property_categories)) {
		foreach ($jomres_property_categories->property_categories as $c) {
			$r = array();

			$r[ 'id' ] = $c['id'];
			$r[ 'title' ] = $c['title'];
			$r[ 'description' ] = $c['description'];

			$result[ ] = $r;
		}
	}

	//var_dump($result);exit;
	return $result;
}

/**
 * Prepares the price range search dropdown data.
 */
function prepPriceRangeSearch($increments = 10)
{
	// Prepares the PropertyType data required for a search
	$searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);

	$query = 'SELECT DISTINCT roomrateperday FROM #__jomres_rates,#__jomres_propertys WHERE #__jomres_rates.property_uid = #__jomres_propertys.propertys_uid AND #__jomres_propertys.published = 1 ORDER by #__jomres_rates.roomrateperday';
	$rateList = doSelectSql($query);

	$query = 'SELECT DISTINCT property_key FROM #__jomres_propertys WHERE published = 1 ORDER by property_key';
	$realestateList = doSelectSql($query);

	$result = array();
	$result[ ] = $searchAll;
	$allTariffs = array();
	foreach ($rateList as $rate) {
		$allTariffs[ ] = $rate->roomrateperday;
	}

	foreach ($realestateList as $rate) {
		if ((float) $rate->property_key > 0.00) {
			$allTariffs[ ] = $rate->property_key;
		}
	}

	sort($allTariffs);
	
	if ( isset($allTariffs[ 0 ])) {
		$highest = end($allTariffs);
		$lowest = reset($allTariffs);
		// Found during testing, when one property has the price 100,000,000 and the increments is left to the default 20, you'll get an out of memory error.
		// This is because you'll have up to half a million possible ranges. Here we'll test highest/increments. If the result is > 100 we'll have to set the increments to something a bit more sensible to stave off out of memory errors.
		if ($highest / $increments > 10000) {
			$increments = $increments * 1000;
		}

		$ranges = my_range(0, $highest, $increments);
		foreach ($ranges as $range) {
			$startRange = $range;
			$endRange = $range + $increments;
			$rangeHasElements = false;
			foreach ($allTariffs as $t) {
				if ($t > $startRange && $t <= $endRange) {
					$rangeHasElements = true;
				}
			}
			if ($rangeHasElements) {
				$result[ ] = $startRange.'-'.$endRange;
			}
		}
		$count = count($allTariffs) - 1;
		$highest = $allTariffs[ $count ];		
	}




	return $result;
}
	
	/**
	 * 
	 *
	 *
	 */

// http://uk.php.net/manual/en/function.range.php#82104
function my_range($start, $end, $step = 1)
{
	$range = array();
	for ($i = $start; $i < $end; $i += $step) {
		if (!(($i - $start) % $step)) {
			$range[ ] = $i;
		}
	}

	return $range;
}
