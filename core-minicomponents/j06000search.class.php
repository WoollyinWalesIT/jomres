<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000search
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;
            $this->shortcode_data = array(
                'task' => 'search',
                'info' => '_JOMRES_SHORTCODES_06000SEARCH',
                'arguments' => array(
                    array(
                        'argument' => 'country',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY',
                        'arg_example' => 'GB',
                        ),
                    array(
                        'argument' => 'region',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION',
                        'arg_example' => '1111',
                        ),
                    array(
                        'argument' => 'town',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN',
                        'arg_example' => 'Torquay',
                        ),
                    array(
                        'argument' => 'feature_uids',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS',
                        'arg_example' => '32', 
                        ),
                    array(
                        'argument' => 'room_type',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE',
                        'arg_example' => '2',
                        ),
                    array(
                        'argument' => 'ptype',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE',
                        'arg_example' => '1',
                        ),
                    array(
                        'argument' => 'priceranges',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES',
                        'arg_example' => '100-200',
                        ),
                    array(
                        'argument' => 'guestnumber',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER',
                        'arg_example' => '1',
                        ),
                    array(
                        'argument' => 'stars',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS',
                        'arg_example' => '4',
                        ),
                    array(
                        'argument' => 'arrivalDate',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE',
                        'arg_example' => date('Y/m/d', strtotime(date('Y/m/d').'+1 day')),
                        ),
					array(
                        'argument' => 'departureDate',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE',
                        'arg_example' => date('Y/m/d', strtotime(date('Y/m/d').'+2 days')),
                        ),
					array(
                        'argument' => 'cat_id',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY',
                        'arg_example' => '1',
                        ),
                    )
                );
            return;
        }
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $option = jomresGetParam($_REQUEST, 'option', '');

        $data_only = false;
        if (isset($_REQUEST[ 'dataonly' ])) {
            $data_only = true;
        }

        unset($sch);
        $doSearch = false;
        $includedInModule = false;
        $calledByModule = '';
        $searchRestarted = false;
        $showSearchOptions = true;

        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

        if (isset($componentArgs[ 'doSearch' ])) {
            $doSearch = $componentArgs[ 'doSearch' ];
        }
        if (isset($componentArgs[ 'includedInModule' ])) {
            $includedInModule = $componentArgs[ 'includedInModule' ];
        }
        if (isset($componentArgs[ 'calledByModule' ])) {
            $calledByModule = $componentArgs[ 'calledByModule' ];
        } else {
			$calledByModule = jomresGetParam($_REQUEST, 'calledByModule', '');
		}

        if (!$includedInModule) {
            $doSearch = true;
        } else {
            $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
            $tmpBookingHandler->initBookingSession();
            $showSearchOptions = true;
        }

        if ($calledByModule == '' && !isset($_REQUEST[ 'next' ])) {
            if ($jrConfig[ 'integratedSearch_enable' ] == '1') {
                $calledByModule = 'mod_jomsearch_m0';
            }
        }

        $calledByModule = getEscaped($calledByModule);

        $infoIcon = JOMRES_IMAGES_RELPATH.'information.png';
        $output = array();
        $pageoutput = array();
        $showButton = false;
        $searchAll = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false);

        jr_import('jomSearch');

        $sch = new jomSearch($calledByModule, $includedInModule);
        $sch->searchAll = $searchAll;
        $searchOptions = $sch->searchOptions;
        $h = '<input type="hidden" name="calledByModule" value="'.$sch->calledByModule.'"/><input type="hidden" name="Itemid" value="'.get_showtime('jomresItemid').'"/>';

        if (this_cms_is_wordpress()) {
            $h = '<input type="hidden" name="calledByModule" value="'.$sch->calledByModule.'"/><input type="hidden" name="page_id" value="'.get_showtime('jomresItemid').'"/>';
        }

        $output[ 'HIDDEN' ] = $h;
        $jomresSearchFormname = $sch->formname;
        $searchOutput = $sch->searchOutput;
        $featurecols = $sch->featurecols;

        $metaTitle = '';

        $unwanted = array('%', "'", '"');
		
		$propertyname = jomresGetParam($_REQUEST, 'propertyname', '');
		
        if ($propertyname != '') {
            if ($propertyname == $searchAll) {
                $sch->filter[ 'propertyname' ] = '%';
            } else {
                $sch->filter[ 'propertyname' ] = $propertyname;
                $sch->filter[ 'propertyname' ] = str_replace($unwanted, '', $sch->filter[ 'propertyname' ]);
                $metaTitle .= ' '.htmlspecialchars_decode($sch->filter[ 'propertyname' ], ENT_QUOTES);
            }
        }
		
		$country = jomresGetParam($_REQUEST, 'country', '');

        if ($country != '') {
            if ($country == $searchAll) {
                $sch->filter[ 'country' ] = '%';
            } else {
                $sch->filter[ 'country' ] = $country;
                $sch->filter[ 'country' ] = str_replace($unwanted, '', $sch->filter[ 'country' ]);
                $metaTitle .= ' '.getSimpleCountry($sch->filter[ 'country' ]);
            }
        }
		
		$region = jomresGetParam($_REQUEST, 'region', '');

        if ($region != '') {
            if ($region == $searchAll) {
                $sch->filter[ 'region' ] = '%';
            } else {
                $sch->filter[ 'region' ] = $region;
                $sch->filter[ 'region' ] = str_replace($unwanted, '', $sch->filter[ 'region' ]);
                $region_name = find_region_name($sch->filter[ 'region' ]);
                $metaTitle .= ' '.htmlspecialchars_decode($region_name, ENT_QUOTES);
            }
        }
		
		$town = jomresGetParam($_REQUEST, 'town', '');

        if ($town != '') {
            if ($town == $searchAll) {
                $sch->filter[ 'town' ] = '%';
            } else {
                $sch->filter[ 'town' ] = $town;
                $sch->filter[ 'town' ] = str_replace($unwanted, '', $sch->filter[ 'town' ]);
                $metaTitle .= ' '.htmlspecialchars_decode($sch->filter[ 'town' ], ENT_QUOTES);
            }
        }

        if (!empty($_REQUEST[ 'description' ])) {
            if ($_REQUEST[ 'description' ] != '') {
                $sch->filter[ 'description' ] = jomresGetParam($_REQUEST, 'description', '');
                $sch->filter[ 'description' ] = str_replace($unwanted, '', $sch->filter[ 'description' ]);
            }
        }

        if (!empty($_REQUEST[ 'feature_uids' ])) {
            if ($_REQUEST[ 'feature_uids' ] == $searchAll) {
                $sch->filter[ 'feature_uids' ] = '%';
            } else {
                $sch->filter[ 'feature_uids' ] = jomresGetParam($_REQUEST, 'feature_uids', array());
            }
        }

        if (!empty($_REQUEST[ 'room_type' ])) {
            if ($_REQUEST[ 'room_type' ] == $searchAll) {
                $sch->filter[ 'room_type' ] = '%';
            } else {
                $sch->filter[ 'room_type' ] = (int) jomresGetParam($_REQUEST, 'room_type', 0);
            }
        }

        if (!empty($_REQUEST[ 'ptype' ])) {
            if ($_REQUEST[ 'ptype' ] == $searchAll) {
                $sch->filter[ 'ptype' ] = '%';
            } else {
                $sch->filter[ 'ptype' ] = (int) jomresGetParam($_REQUEST, 'ptype', '');
            }
        }
		
		if (!empty($_REQUEST[ 'cat_id' ])) {
			$cat_id = jomresGetParam($_REQUEST, 'cat_id', 0);
			
            if ($cat_id == 0) {
                $sch->filter[ 'cat_id' ] = '%';
            } else {
                $sch->filter[ 'cat_id' ] = $cat_id;
            }
        }

        //	$_REQUEST['priceranges']="0-50";
        if (!empty($_REQUEST[ 'priceranges' ])) {
            if ($_REQUEST[ 'priceranges' ] == $searchAll) {
                $sch->filter[ 'priceranges' ] = '%';
            } else {
                $ranges = jomresGetParam($_REQUEST, 'priceranges', '');
                $rangeArr = explode('-', $ranges);
                $sch->filter[ 'priceranges' ] = array('from' => (int) $rangeArr[ 0 ], 'to' => (int) $rangeArr[ 1 ], 'raw' => $ranges);
            }
        }

        if (!empty($_REQUEST[ 'guestnumber' ])) {
            if ($_REQUEST[ 'guestnumber' ] == $searchAll) {
                $sch->filter[ 'guestnumber' ] = '%';
            } else {
                $sch->filter[ 'guestnumber' ] = (int) jomresGetParam($_REQUEST, 'guestnumber', '');
            }
        }

        if (!empty($_REQUEST[ 'stars' ])) {
            if ($_REQUEST[ 'stars' ] == $searchAll) {
                $sch->filter[ 'stars' ] = '%';
            } else {
                $sch->filter[ 'stars' ] = (int) jomresGetParam($_REQUEST, 'stars', '');
            }
        }

        if ($option == 'com_jomres' && ($propertyname != '' || $country != '' || $region != '' || $town != '')) {
            jomres_cmsspecific_setmetadata('title', $metaTitle);
        }

        //var_dump($sch->searchOptions);exit;

        if (!empty($_REQUEST[ 'arrivalDate' ]) && in_array('availability', $sch->searchOptions)) {
            $sch->filter[ 'arrival' ] = $sch->prep[ 'arrival' ];
            $sch->filter[ 'departure' ] = $sch->prep[ 'departure' ];
            $sch->filter[ 'arrival' ] = str_replace($unwanted, '', $sch->filter[ 'arrival' ]);
            $sch->filter[ 'departure' ] = str_replace($unwanted, '', $sch->filter[ 'departure' ]);
        }

        if (in_array('country', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_GEO_COUNTRYSEARCH' ] = jr_gettext('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', false);
        }
        if (in_array('region', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_GEO_REGIONSEARCH' ] = jr_gettext('_JOMRES_SEARCH_GEO_REGIONSEARCH', '_JOMRES_SEARCH_GEO_REGIONSEARCH', false);
        }
        if (in_array('town', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_GEO_TOWNSEARCH' ] = jr_gettext('_JOMRES_SEARCH_GEO_TOWNSEARCH', '_JOMRES_SEARCH_GEO_TOWNSEARCH', false);
        }
        if (in_array('description', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_DESCRIPTION_INFO' ] = jr_gettext('_JOMRES_SEARCH_DESCRIPTION_INFO', '_JOMRES_SEARCH_DESCRIPTION_INFO', false);
            $output[ 'JOMRES_SEARCH_DESCRIPTION_LABEL' ] = jr_gettext('_JOMRES_SEARCH_DESCRIPTION_LABEL', '_JOMRES_SEARCH_DESCRIPTION_LABEL', false);
        }
        if (in_array('feature_uids', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_FEATURE_INFO' ] = jr_gettext('_JOMRES_SEARCH_FEATURE_INFO', '_JOMRES_SEARCH_FEATURE_INFO', false);
        }
        if (in_array('room_type', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_RTYPES' ] = jr_gettext('_JOMRES_SEARCH_RTYPES', '_JOMRES_SEARCH_RTYPES', false);
        }
        if (in_array('availability', $searchOptions) && $showSearchOptions && get_showtime('task') != 'bookaroom') {
            $output[ 'JOMRES_SEARCH_AVL_INFO' ] = jr_gettext('_JOMRES_SEARCH_AVL_INFO', '_JOMRES_SEARCH_AVL_INFO', false);

            $output[ 'HARRIVALDATE' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', false);
            $output[ 'HDEPARTUREDATE' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', false);
        }

        if (in_array('ptype', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_PTYPES' ] = jr_gettext('_JOMRES_SEARCH_PTYPES', '_JOMRES_SEARCH_PTYPES', false);
        }
		
		if (in_array('cat_id', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_CATEGORY' ] = jr_gettext('_JOMRES_HCATEGORY', '_JOMRES_HCATEGORY', false);
        }

        if (in_array('priceranges', $searchOptions) && $showSearchOptions) {
            $output[ 'JOMRES_SEARCH_PRICERANGES' ] = jr_gettext('_JOMRES_SEARCH_PRICERANGES', '_JOMRES_SEARCH_PRICERANGES', false);
        }

        if (in_array('guestnumber', $searchOptions) && $showSearchOptions && get_showtime('task') != 'bookaroom') {
            $output[ 'HGUESTNUMBER' ] = jr_gettext('_JOMRES_SEARCH_GUESTNUMBER', '_JOMRES_SEARCH_GUESTNUMBER', false);
        }
        if (in_array('stars', $searchOptions) && $showSearchOptions && get_showtime('task') != 'bookaroom') {
            $output[ 'HSTARS' ] = jr_gettext('_JOMRES_SEARCH_STARS', '_JOMRES_SEARCH_STARS', false);
        }

        $output[ 'SUBMITURL' ] = jomresURL(JOMRES_SITEPAGE_URL_NOSEF);
        $output[ 'FORMNAME' ] = $jomresSearchFormname;

        if (!$data_only) {
            // -------------------------------------------------------------------------------------------------------------------------------------------

            if (in_array('selectcombo', $searchOptions) && $showSearchOptions) {
                if (!defined('_JOMRES_SELECTCOMBO')) {
                    // define("_JOMRES_SELECTCOMBO",1);
                    jomres_cmsspecific_addheaddata("javascript",JOMRES_JS_RELPATH, 'jquery.chainedSelects.js');

                    echo '
							<script language="JavaScript" type="text/javascript">
							jomresJquery(function()
							{
								jomresJquery(\'#country\').chainSelect(\'#rregion\',\'' .JOMRES_SITEPAGE_URL_AJAX.'&task=selectcombo&filter=country\',
								{ 
									before:function (target) //before request hide the target combobox and display the loading message
									{ 
										jomresJquery("#loading").css("display","block");
										jomresJquery(target).css("display","none");
									},
									after:function (target) //after request show the target combobox and hide the loading message
									{ 
										jomresJquery("#loading").css("display","none");
										jomresJquery(target).css("display","inline");
									}
								});
								jomresJquery(\'#rregion\').chainSelect(\'#ttown\',\'' .JOMRES_SITEPAGE_URL_AJAX.'&task=selectcombo&filter=region\',
								{ 
									before:function (target) 
									{ 
										jomresJquery("#loading").css("display","block");
										jomresJquery(target).css("display","none");
									},
									after:function (target) 
									{ 
										jomresJquery("#loading").css("display","none");
										jomresJquery(target).css("display","inline");
									}
								});
							});
							</script>
							';
                }
                foreach ($sch->prep[ 'country' ] as $country) {
                    if (trim(jomres_decode($country[ 'countryname' ])) != '') {
                        $countryArray[ ] = jomresHTML::makeOption($country[ 'countrycode' ], jomres_decode($country[ 'countryname' ]));
                    }
                }

                $output[ 'SELECTCOMBO_COUNTRY' ] = jomresHTML::selectList($countryArray, 'country', 'size="1" id="search_country" class="inputbox"', 'value', 'text', '').'<br />';
                $output[ 'SELECTCOMBO_HIDDENDROPDOWNS_REGION' ] = '<!-- state combobox is chained by country combobox--><select name="region" id="rregion" style="display:none"></select><br />';
                $output[ 'SELECTCOMBO_HIDDENDROPDOWNS_TOWN' ] = '<!-- city combobox is chained by state combobox--><select name="town" id="ttown" style="display:none"></select><br />';
                $showButton = true;
            }
        }

        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('propertyname', $searchOptions) && $showSearchOptions) {
            if (!empty($sch->prep[ 'propertyname' ])) {
                $propertyname = array();
                if (empty($sch->filter[ 'propertyname' ])) {
                    $selectOption = $sch->prep[ 'propertyname' ][ 0 ][ 'pn' ];
                } else {
                    $selectOption = $sch->filter[ 'propertyname' ];
                }

                if ($searchOutput[ 'propertyname' ] == 'dropdown') {
                    foreach ($sch->prep[ 'propertyname' ] as $property) {
                        $propertyname[ ] = jomresHTML::makeOption(jomres_decode($property[ 'pn' ]), jomres_decode($property[ 'pn' ]));
                    }
                    $output[ 'propertyname' ] = jomresHTML::selectList($propertyname, 'propertyname', 'size="1" ', 'value', 'text', $selectOption);
                    $showButton = true;
                } else {
                    $r = '';
                    foreach ($sch->prep[ 'propertyname' ] as $property) {
                        // you need to use special chars here otherwise the url will not work for non latin searches
                        $l = htmlspecialchars(get_property_details_url($property[ 'puid' ], 'sefsafe'));
                        $link = jomresURL($l);
                        $link = jomresValidateUrl($link);
                        $r .= '<a href="'.$link.'">'.jomres_decode($property[ 'pn' ]).'</a>&nbsp;';
                        if ($sch->cols == '1') {
                            $r .= '<br>';
                        }
                    }
                    $output[ 'propertyname' ] = $r;
                }
            } else {
                $output[ 'propertyname' ] = 'EMPTY';
            }
        }

        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('country', $searchOptions) && $showSearchOptions && !in_array('selectcombo', $searchOptions)) {
            $countryArray = array();
            if (!empty($sch->prep[ 'country' ])) {
                if (empty($sch->filter[ 'country' ])) {
                    $selectOption = $sch->prep[ 'country' ][ 0 ][ 'countrycode' ];
                } else {
                    $selectOption = $sch->filter[ 'country' ];
                }

                if ($searchOutput[ 'country' ] == 'dropdown') {
                    foreach ($sch->prep[ 'country' ] as $country) {
                        $countryArray[ ] = jomresHTML::makeOption($country[ 'countrycode' ], jomres_decode($country[ 'countryname' ]));
                    }
                    $output[ 'country' ] = jomresHTML::selectList($countryArray, 'country', 'size="1" ', 'value', 'text', $selectOption);
                    $showButton = true;
                } else {
                    $r = '';
                    foreach ($sch->prep[ 'country' ] as $country) {
                        $l = htmlspecialchars(JOMRES_SITEPAGE_URL.'&calledByModule='.$calledByModule.'&country='.$country[ 'countrycode' ]);
                        $link = jomresURL($l);
                        $link = jomresValidateUrl($link);
                        $r .= '<a href="'.$link.'">'.jomres_decode($country[ 'countryname' ]).'</a>&nbsp;';
                        if ($sch->cols == '1') {
                            $r .= '<br>';
                        }
                    }
                    $output[ 'country' ] = $r;
                }
            } else {
                $output[ 'country' ] = 'EMPTY';
            }
        }

        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('region', $searchOptions) && $showSearchOptions && !in_array('selectcombo', $searchOptions)) {
            $regionArray = array();
            if (!empty($sch->prep[ 'region' ])) {
                if (empty($sch->filter[ 'region' ])) {
                    $selectOption = $sch->prep[ 'region' ][ 0 ][ 'region' ];
                } else {
                    $selectOption = $sch->filter[ 'region' ];
                }

                if ($searchOutput[ 'region' ] == 'dropdown') {
                    foreach ($sch->prep[ 'region' ] as $region) {
                        $t = str_replace('&#39;', "'", $region[ 'region' ]); // This is important. php will not pass back, eg Sant&#39;Antimo, it will only pass back Sant, therefore we need to convert the &#39; to a ' to be shown in the url. When jomresGetParam runs it'll convert the ' back to &#39; and the search will run successfully.
                        $region_id = find_region_id(jomres_cmsspecific_stringURLSafe($t));
                        $region_name = find_region_name($t);
                        $regionArray[ ] = jomresHTML::makeOption($region_id, jomres_decode($region_name));
                    }
                    $output[ 'region' ] = jomresHTML::selectList($regionArray, 'region', 'size="1" ', 'value', 'text', $selectOption);
                    $showButton = true;
                } else {
                    $r = '';
                    foreach ($sch->prep[ 'region' ] as $region) {
                        $t = str_replace('&#39;', "'", $region[ 'region' ]); // This is important. php will not pass back, eg Sant&#39;Antimo, it will only pass back Sant, therefore we need to convert the &#39; to a ' to be shown in the url. When jomresGetParam runs it'll convert the ' back to &#39; and the search will run successfully.
                        $region_id = find_region_id(jomres_cmsspecific_stringURLSafe($t));
                        $region_name = find_region_name($t);
                        $l = htmlspecialchars(JOMRES_SITEPAGE_URL.'&calledByModule='.$calledByModule.'&region='.$region_id);
                        $link = jomresURL($l);
                        $link = jomresValidateUrl($link);
                        $r .= '<a href="'.$link.'">'.jomres_decode($region_name).'</a>&nbsp;';
                        if ($sch->cols == '1') {
                            $r .= '<br>';
                        }
                    }
                    $output[ 'region' ] = $r;
                }
            } else {
                $output[ 'region' ] = 'EMPTY';
            }
        }
        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('town', $searchOptions) && $showSearchOptions && !in_array('selectcombo', $searchOptions)) {
            $townArray = array();
            //var_dump($sch->prep['town']);
            $ta = $sch->prep[ 'town' ];
            if (!empty($sch->prep[ 'town' ])) {
                if (empty($sch->filter[ 'town' ])) {
                    $selectOption = $ta[ 0 ][ 'town' ];
                } else {
                    $selectOption = $sch->filter[ 'town' ];
                }
                if ($searchOutput[ 'town' ] == 'dropdown') {
                    foreach ($ta as $town) {
                        $t = str_replace('&#39;', "'", $town[ 'town' ]); // This is important. php will not pass back, eg Sant&#39;Antimo, it will only pass back Sant, therefore we need to convert the &#39; to a ' to be shown in the url. When jomresGetParam runs it'll convert the ' back to &#39; and the search will run successfully.
                        $townArray[ ] = jomresHTML::makeOption($town[ 'town' ], jomres_decode($t));
                    }
                    $output[ 'town' ] = jomresHTML::selectList($townArray, 'town', 'size="1" ', 'value', 'text', $selectOption);
                    $showButton = true;
                } else {
                    $r = '';
                    foreach ($ta as $town) {
                        $t = str_replace('&#39;', "'", $town[ 'town' ]); // This is important. php will not pass back, eg Sant&#39;Antimo, it will only pass back Sant, therefore we need to convert the &#39; to a ' to be shown in the url. When jomresGetParam runs it'll convert the ' back to &#39; and the search will run successfully.
                        $l = htmlspecialchars(JOMRES_SITEPAGE_URL.'&calledByModule='.$calledByModule.'&town='.$t);
                        $link = jomresURL($l);
                        $link = jomresValidateUrl($link);
                        $r .= '<a href="'.$link.'">'.jomres_decode($town[ 'town' ]).'</a>&nbsp;';
                        if ($sch->cols == '1') {
                            $r .= '<br>';
                        }
                    }
                    $output[ 'town' ] = $r;
                }
            } else {
                $output[ 'town' ] = 'EMPTY';
            }
        }
        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('description', $searchOptions) && $showSearchOptions) {
            if (empty($sch->filter[ 'description' ])) {
                $selectOption = $output[ 'JOMRES_SEARCH_DESCRIPTION_LABEL' ];
            } else {
                $selectOption = $sch->filter[ 'description' ];
            }
            $showButton = true;
            $output[ 'DESCRIPTION' ] = '<input class="inputbox" type="text" name="description" value="'.$sch->filter[ 'description' ].'"  onfocus="if (this.value ==\''.$output[ 'JOMRES_SEARCH_DESCRIPTION_LABEL' ].'\') {this.value = \'\'}" />';
        }
        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('feature_uids', $searchOptions) && $showSearchOptions) {
            $featureArray = array();
            if (!empty($sch->prep[ 'features' ])) {
                if (empty($sch->filter[ 'feature_uids' ])) {
                    $selectOption = $sch->prep[ 'features' ][ 0 ];
                } else {
                    $selectOption = $sch->filter[ 'feature_uids' ][ 0 ];
                }
                if ($searchOutput[ 'feature_uids' ] == 'dropdown') {
                    foreach ($sch->prep[ 'features' ] as $feature) {
                        $feature_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int) $feature[ 'id' ], jomres_decode($feature[ 'title' ]), false, false);
                        $featureArray[ ] = jomresHTML::makeOption($feature[ 'id' ], jomres_decode($feature_abbv));
                    }
                    $output[ 'feature' ] = jomresHTML::selectList($featureArray, 'feature_uids[]', 'size="1" ', 'value', 'text', $selectOption);
                } else { // Show the features as javascript popup
                    $r = '';
                    $counter = 0;
                    array_shift($sch->prep[ 'features' ]); // Gets rid of the "searchAll" option
                    foreach ($sch->prep[ 'features' ] as $feature) {
                        ++$counter;
                        $pid = $feature[ 'id' ];
                        $ischecked = '';
                        if (is_array($sch->filter[ 'feature_uids' ])) {
                            if (in_array($pid, $sch->filter[ 'feature_uids' ])) {
                                $ischecked = 'checked';
                            }
                        }

                        $feature_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int) $feature[ 'id' ], jomres_decode($feature[ 'title' ]), false, false);
                        $feature_desc = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int) $feature[ 'id' ], jomres_decode($feature[ 'description' ]), false, false);

                        $tmp = jomres_makeTooltip($feature_abbv, $feature_abbv, $feature_desc, $feature[ 'image' ] , '', 'property_feature', array());

                        $rows[ ] = $r;
                        $r .= '<div style="float : left;" >'.$tmp.'<input type="checkbox" name="feature_uids[]" value="'.$pid.'" '.$ischecked.' /></div>';
                    }
                    $output[ 'feature' ] = $r;
                }
            } else {
                $output[ 'feature' ] = 'EMPTY';
            }
            $showButton = true;
        }
        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('room_type', $searchOptions) && $showSearchOptions) {
            $rtypeArray = array();
            if (!empty($sch->prep[ 'rtypes' ])) {
                $r = '';
                if (empty($sch->filter[ 'room_type' ])) {
                    $selectOption = $sch->prep[ 'rtypes' ][ 0 ][ 'id' ];
                } else {
                    $selectOption = $sch->filter[ 'room_type' ];
                }
                if ($searchOutput[ 'room_type' ] == 'dropdown') {
                    foreach ($sch->prep[ 'rtypes' ] as $rtype) {
                        $roomClassAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int) $rtype[ 'id' ], jomres_decode($rtype[ 'title' ]), false, false);
                        $rtypeArray[ ] = jomresHTML::makeOption($rtype[ 'id' ], $roomClassAbbv);
                    }
                    $output[ 'room_type' ] = jomresHTML::selectList($rtypeArray, 'room_type', 'size="1"', 'value', 'text', $selectOption);
                    $showButton = true;
                } else {
                    foreach ($sch->prep[ 'rtypes' ] as $room_type) {
                        $roomClassAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int) $room_type[ 'id' ], jomres_decode($room_type[ 'title' ]), false, false);
                        $l = htmlspecialchars(JOMRES_SITEPAGE_URL.'&calledByModule='.$calledByModule.'&room_type='.$room_type[ 'id' ]);
                        $link = jomresURL($l);
                        $link = jomresValidateUrl($link);
                        $r .= '<a href="'.$link.'">'.$roomClassAbbv.'</a>&nbsp;';
                        if ($sch->cols == '1') {
                            $r .= '<br>';
                        }
                    }
                    $output[ 'room_type' ] = $r;
                }
            } else {
                $output[ 'room_type' ] = 'EMPTY';
            }
        }
        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('ptype', $searchOptions) && $showSearchOptions) {
            $ptypeArray = array();
            if (!empty($sch->prep[ 'ptypes' ])) {
                if (empty($sch->filter[ 'ptype' ])) {
                    $selectOption = $sch->prep[ 'ptypes' ][ 0 ][ 'id' ];
                } else {
                    $selectOption = $sch->filter[ 'ptype' ];
                }
                if ($searchOutput[ 'ptype' ] == 'dropdown') {
                    foreach ($sch->prep[ 'ptypes' ] as $ptype) {
                        $ptypeAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPE'.$ptype[ 'id' ], jomres_decode($ptype[ 'ptype' ]), false, false);

                        $ptypeArray[ ] = jomresHTML::makeOption($ptype[ 'id' ], $ptypeAbbv);
                    }
                    $output[ 'ptype' ] = jomresHTML::selectList($ptypeArray, 'ptype', 'size="1" ', 'value', 'text', $selectOption);
                    $showButton = true;
                } else {
                    $r = '';
                    foreach ($sch->prep[ 'ptypes' ] as $ptype) {
                        $ptypeAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPE'.$ptype[ 'id' ], jomres_decode($ptype[ 'ptype' ]), true, true);
                        //echo $ptypeAbbv;
                        $l = htmlspecialchars(JOMRES_SITEPAGE_URL.'&calledByModule='.$calledByModule.'&ptype='.$ptype[ 'id' ]);
                        $link = jomresURL($l);
                        $link = jomresValidateUrl($link);
                        $r .= '<a href="'.$link.'">'.$ptypeAbbv.'</a>';
                        if ($sch->cols == '1') {
                            $r .= '<br>';
                        }
                    }
                    $output[ 'ptype' ] = $r;
                }
            } else {
                $output[ 'ptype' ] = 'EMPTY';
            }
        }
		
		// -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('cat_id', $searchOptions) && $showSearchOptions) {
            $categoriesArray = array();
            if (!empty($sch->prep[ 'categories' ])) {
                if (empty($sch->filter[ 'categories' ])) {
                    $selectOption = $sch->prep[ 'categories' ][ 0 ][ 'id' ];
                } else {
                    $selectOption = $sch->filter[ 'categories' ];
                }

                foreach ($sch->prep[ 'categories' ] as $c) {
                    $categoriesArray[ ] = jomresHTML::makeOption($c[ 'id' ], $c[ 'title' ]);
                }
                $output[ 'categories' ] = jomresHTML::selectList($categoriesArray, 'cat_id', 'size="1" ', 'value', 'text', $selectOption);
                $showButton = true;
            } else {
                $output[ 'categories' ] = 'EMPTY';
            }
        }
		
        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('priceranges', $searchOptions) && $showSearchOptions) {
            $rangeArray = array();
            if (!empty($sch->prep[ 'priceranges' ])) {
                if (empty($sch->filter[ 'priceranges' ])) {
                    $selectOption = $sch->prep[ 'priceranges' ][ 0 ];
                } else {
                    $selectOption = $sch->filter[ 'priceranges' ][ 'raw' ];
                }
                foreach ($sch->prep[ 'priceranges' ] as $priceranges) {
                    $rangeArray[ ] = jomresHTML::makeOption($priceranges, $priceranges);
                }
                $output[ 'PRICERANGES' ] = jomresHTML::selectList($rangeArray, 'priceranges', 'size="1" ', 'value', 'text', $selectOption);
                $showButton = true;
            }
        }
        // -------------------------------------------------------------------------------------------------------------------------------------------

        if (in_array('availability', $searchOptions)) {
            $output[ 'ARRIVALDATE' ] = generateDateInput('arrivalDate', $sch->prep[ 'arrival' ], 'ad', true);
            $output[ 'DEPARTUREDATE' ] = generateDateInput('departureDate', $sch->prep[ 'departure' ], false, true, false);
            $showButton = true;
        }

        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('guestnumber', $searchOptions) && $showSearchOptions) {
            $guestnumberArray = array();
            if (!empty($sch->prep[ 'guestnumber' ])) {
                if (empty($sch->filter[ 'guestnumber' ])) {
                    $selectOption = $sch->prep[ 'guestnumber' ][ 0 ][ 'id' ];
                } else {
                    $selectOption = $sch->filter[ 'guestnumber' ];
                }
                foreach ($sch->prep[ 'guestnumber' ] as $guestnumber) {
                    $guestnumberArray[ ] = jomresHTML::makeOption($guestnumber[ 'id' ], $guestnumber[ 'guestnumber' ]);
                }
                $output[ 'guestnumber' ] = jomresHTML::selectList($guestnumberArray, 'guestnumber', 'size="1" ', 'value', 'text', $selectOption);
                $showButton = true;
            } else {
                $output[ 'guestnumber' ] = 'EMPTY';
            }
        }

        // -------------------------------------------------------------------------------------------------------------------------------------------
        if (in_array('stars', $searchOptions) && $showSearchOptions) {
            $starsArray = array();
            if (!empty($sch->prep[ 'stars' ])) {
                if (empty($sch->filter[ 'stars' ])) {
                    $selectOption = $sch->prep[ 'stars' ][ 0 ][ 'id' ];
                } else {
                    $selectOption = $sch->filter[ 'stars' ];
                }

                foreach ($sch->prep[ 'stars' ] as $stars) {
                    $starsArray[ ] = jomresHTML::makeOption($stars[ 'id' ], $stars[ 'stars' ]);
                }
                $output[ 'stars' ] = jomresHTML::selectList($starsArray, 'stars', 'size="1" ', 'value', 'text', $selectOption);
                $showButton = true;
            } else {
                $output[ 'stars' ] = 'EMPTY';
            }
        }

        // -------------------------------------------------------------------------------------------------------------------------------------------
        //if ($option=="com_jomres" && !$includedInModule)
        //	var_dump($sch);
        // -------------------------------------------------------------------------------------------------------------------------------------------

        if ($doSearch) {
            $numberOfPropertiesInSystem = get_showtime('numberOfPropertiesInSystem');
            if ($numberOfPropertiesInSystem > 1 && !$includedInModule && $calledByModule == '' && !isset($_REQUEST[ 'next' ]) && get_showtime('task') == '') {
                $sch->jomSearch_random();
            } else {
                if (in_array('propertyname', $searchOptions) && !empty($sch->filter[ 'propertyname' ])) {
                    $links = array();
                    foreach ($sch->prep[ 'propertyname' ] as $p) {
                        if ($p[ 'pn' ] == $sch->filter[ 'propertyname' ]) {
                            $links[] = htmlspecialchars(get_property_details_url($p[ 'puid' ], 'sefsafe'));
                        }
                    }
                    if (count($links) == 1) {
                        jomresRedirect(jomresURL($links[0]), $saveMessage);
                    } else {
                        $sch->jomSearch_propertyname();
                    }
                }

                if (!empty($sch->filter[ 'country' ])) {
                    $sch->jomSearch_country();
                }
                if (!empty($sch->filter[ 'region' ])) {
                    $sch->jomSearch_region();
                }
                if (!empty($sch->filter[ 'town' ])) {
                    $sch->jomSearch_town();
                }
                if (!empty($sch->filter[ 'ptype' ])) {
                    $sch->jomSearch_ptypes();
                }
				if (!empty($sch->filter[ 'cat_id' ])) {
                    $sch->jomSearch_categories();
                }
                if (!empty($sch->filter[ 'guestnumber' ])) {
                    $sch->jomSearch_guestnumber();
                }
                if (!empty($sch->filter[ 'stars' ])) {
                    $sch->jomSearch_stars();
                }

                if (!empty($sch->filter[ 'priceranges' ])) {
                    $sch->jomSearch_priceranges();
                }
                if (!empty($sch->filter[ 'feature_uids' ])) {
                    $sch->jomSearch_features();
                }
                if (!empty($sch->filter[ 'room_type' ])) {
                    $sch->jomSearch_roomtypes();
                }
                if (!empty($sch->filter[ 'description' ])) {
                    $sch->jomSearch_description();
                }
                if (!empty($sch->filter[ 'arrival' ])) {
                    $sch->jomSearch_availability();
                }
            }
        }
        if ($showButton == true) {
            $output[ 'SEARCHBLURB' ] = jr_gettext('_JOMRES_FRONT_MR_SEARCH_HERE', '_JOMRES_FRONT_MR_SEARCH_HERE');
            $output[ 'HSEARCH' ] = jr_gettext('_JOMRES_SEARCH_BUTTON', '_JOMRES_SEARCH_BUTTON',false);

            if (!using_bootstrap()) {
                $output[ 'THEBUTTON' ] = '<input type="submit" name="send" value="'.jr_gettext('_JOMRES_SEARCH_BUTTON', '_JOMRES_SEARCH_BUTTON', false).'" class="button" />';
            } else {
                $output[ 'THEBUTTON' ] = '<input type="submit" class="btn btn-primary" name="send" value="'.jr_gettext('_JOMRES_SEARCH_BUTTON', '_JOMRES_SEARCH_BUTTON', false).'" />';
            }
        }

        $pageoutput[ ] = $output;

        if (!$data_only) {
            if (!$doSearch || ($calledByModule == 'mod_jomsearch_m0' && $jrConfig[ 'integratedSearch_enable' ] == '1' && !this_cms_is_joomla() && !this_cms_is_wordpress())) {
                $stmpl = new patTemplate();
                $stmpl->setRoot($sch->templateFilePath);
                $stmpl->readTemplatesFromInput($sch->templateFile);
                $stmpl->addRows('search', $pageoutput);
                $stmpl->displayParsedTemplate();
            }
        }
        if ($doSearch && !isset($_REQUEST[ 'srchOnly' ])) {
            $sch->jomSearch_showresults();
        }
        unset($sch);
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_SEARCH_BUTTON', '_JOMRES_SEARCH_BUTTON');
        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_SEARCH_HERE', '_JOMRES_FRONT_MR_SEARCH_HERE');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL');

        $output[ ] = jr_gettext('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', '_JOMRES_SEARCH_GEO_COUNTRYSEARCH');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_GEO_REGIONSEARCH', '_JOMRES_SEARCH_GEO_REGIONSEARCH');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_GEO_TOWNSEARCH', '_JOMRES_SEARCH_GEO_TOWNSEARCH');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_DESCRIPTION_INFO', '_JOMRES_SEARCH_DESCRIPTION_INFO');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_DESCRIPTION_LABEL', '_JOMRES_SEARCH_DESCRIPTION_LABEL');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_FEATURE_INFO', '_JOMRES_SEARCH_FEATURE_INFO');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_RTYPES', '_JOMRES_SEARCH_RTYPES');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_AVL_INFO', '_JOMRES_SEARCH_AVL_INFO');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_GUESTNUMBER', '_JOMRES_SEARCH_GUESTNUMBER');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_STARS', '_JOMRES_SEARCH_STARS');
        $output[ ] = jr_gettext('_JOMRES_SEARCH_PRICERANGES', '_JOMRES_SEARCH_PRICERANGES');

        $output[ ] = jr_gettext('_JOMRES_SEARCH_PTYPES', '_JOMRES_SEARCH_PTYPES');

        $query = "SELECT room_classes_uid, room_class_abbv, room_class_full_desc,image FROM #__jomres_room_classes WHERE property_uid = '0' ORDER BY room_class_abbv ";
        $roomTypeList = doSelectSql($query);
        foreach ($roomTypeList as $rtype) {
            $output[ ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION'.$rtype->room_classes_uid, jomres_decode($rtype->room_class_abbv));
        }

        $query = "SELECT id, ptype FROM #__jomres_ptypes WHERE published = '1' ORDER BY `order` ASC";
        $ptypeList = doSelectSql($query);
        foreach ($ptypeList as $ptype) {
            $output[ ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPE'.$ptype->id, jomres_decode($ptype->ptype));
        }
        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
