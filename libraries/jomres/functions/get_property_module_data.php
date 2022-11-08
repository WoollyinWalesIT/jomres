<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.6.0
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// Intended as a utility function used by Jomres modules to display information about a property in modules
	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 */
	function get_property_module_data($property_uid_array, $alt_template_path = '', $alt_template_name = '', $vertical = false)
	{
		output_ribbon_styling();

		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		jr_import('jomres_property_categories');
		$jomres_property_categories = new jomres_property_categories();

		jr_import('jomres_reviews');
		$Reviews = new jomres_reviews();
		$Reviews->getRatingsMulti($property_uid_array);

		$return_data = array();
		$animationDelay = 0;

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data_multi($property_uid_array);

		$jomres_property_list_prices = jomres_singleton_abstract::getInstance('jomres_property_list_prices');
		$jomres_property_list_prices->gather_lowest_prices_multi($property_uid_array);

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_images_multi($property_uid_array, array('property'));

		jr_import('jomres_ribbon_generator');

		jr_import('jomres_markdown');
		$jomres_markdown = new jomres_markdown();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$shortlist_items = array();

		if (isset($tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ])) {
			$shortlist_items = $tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ];
		}


		if ($thisJRUser->userIsRegistered) {
			$shortlist_items = array();
			$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
			$query = "SELECT `property_uid` FROM #__jomcomp_mufavourites WHERE `my_id` = '".(int) $thisJRUser->id."'";
			$propys = doSelectSql($query);
			if (!empty($propys)) {
				foreach ($propys as $p) {
					if (!in_array($p->property_uid, $shortlist_items)) {
						$shortlist_items[] = (int) $p->property_uid;
					}
				}
				$tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ] = $shortlist_items;
			}
		}

		$featured = jr_gettext('_JRPORTAL_FEATUREDLISTINGS_WORD_FEATURED', '_JRPORTAL_FEATUREDLISTINGS_WORD_FEATURED', false);

		// Property details can change depending on the search settings chosen, and the current exchange rate, so we'll use these details when building the cache file name to ensure that it's correct for this user
		$tmpBookingHandler = jomres_getSingleton('jomres_temp_booking_handler');
		$currency_code = $tmpBookingHandler->user_settings[ 'current_exchange_rate' ];

		/*		if (isset($_REQUEST['alt_template_name']) && $_REQUEST['alt_template_name'] != '' ) {
					$key =  $_REQUEST['alt_template_name'];
					$_REQUEST[$key.'.html'] = $_REQUEST['alt_template_name'].'.html';
					unset($_REQUEST['alt_template_name']);
				}*/
		$template_file_name = 'basic_module_output.html';
		if ($alt_template_name == '' && isset($_REQUEST[$template_file_name]) && $_REQUEST[$template_file_name] != '') {
			$temp_template = jomresGetParam($_REQUEST, $template_file_name, '');
			if (file_exists(get_override_directory().JRDS.$temp_template)) {
				$template_file_name = $temp_template;
			}
		}

		if ($alt_template_name != '' ) {
			$template_file_name = $alt_template_name;
		}

		if (!isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections'])) {
			$tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections'] = array();
		}
		$search_selections = base64_encode(serialize($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']));
		$cache_file_pattern = substr($search_selections, 30, 50)."_".$currency_code."_".$template_file_name;

		$cache_feature_enabled = false;

		foreach ($property_uid_array as $property_uid) {
			if ($property_uid > 0) {

				$cache_dir = JOMRES_TEMP_ABSPATH.'get_property_module_data';
				if (!is_dir($cache_dir)) {
					mkdir($cache_dir);
				}
				if (!is_dir($cache_dir)) {
					throw new Exception("Unable to create cache directoy ".$cache_dir);
				}

				$cache_file = $cache_dir.JRDS.$property_uid."_".$cache_file_pattern;

				if ($cache_feature_enabled && file_exists($cache_file) && $jrConfig[ 'development_production' ] != 'development' ) {
					$cache_contents = unserialize(base64_decode(file_get_contents($cache_file)));
					$res[ $property_uid ][ 'template' ] = $cache_contents['template'];
					$res[ $property_uid ][ 'data' ] = $cache_contents['data'];
				} else {
					$property_data = $current_property_details->multi_query_result[ $property_uid ];

					$property_data[ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);

					if (!in_array($property_uid, $shortlist_items)) {
						$shortlist_output = array();
						$shortlist_pageoutput = array();
						$shortlist_output['TEXT'] = jr_gettext('_JOMRES_ADDTOSHORTLIST', '_JOMRES_ADDTOSHORTLIST', false);
						$shortlist_pageoutput[ ] = $shortlist_output;
						$tmpl = new patTemplate();
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
						$tmpl->readTemplatesFromInput('shortlist_removed.html');
						$tmpl->addRows('pageoutput', $shortlist_pageoutput);
						$property_data[ 'SHORTLIST' ] = $tmpl->getParsedTemplate();
					} else {
						$shortlist_output = array();
						$shortlist_pageoutput = array();
						$shortlist_output['TEXT'] = jr_gettext('_JOMRES_REMOVEFROMSHORTLIST', '_JOMRES_REMOVEFROMSHORTLIST', false);
						$shortlist_pageoutput[ ] = $shortlist_output;
						$tmpl = new patTemplate();
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
						$tmpl->readTemplatesFromInput('shortlilst_added.html');
						$tmpl->addRows('pageoutput', $shortlist_pageoutput);
						$property_data[ 'SHORTLIST' ] = $tmpl->getParsedTemplate();
					}

					$Reviews->property_uid = $property_uid;
					$itemRating = $Reviews->showRating($property_uid);
					$property_data['AVERAGE_RATING'] = number_format($itemRating['avg_rating'], 1, '.', '');
					$property_data['NUMBER_OF_REVIEWS'] = $itemRating['counter'];

					$property_data['_JOMRES_REVIEWS'] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false);
					$property_data['_JOMRES_REVIEWS_AVERAGE_RATING'] = jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING', '_JOMRES_REVIEWS_AVERAGE_RATING', false);
					$property_data['_JOMRES_REVIEWS_TOTAL_VOTES'] = jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES', '_JOMRES_REVIEWS_TOTAL_VOTES', false);
					$property_data['_JOMRES_REVIEWS'] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false);
					$property_data['COLON'] = ' : ';
					$property_data['HYPHEN'] = ' - ';
					$property_data['RATING_TEXT_COLOUR'] = 'text-muted';

					$rob = array();
					$reviews_output_button = array();
					$no_reviews_output_button = array();

					$jomres_ribbon_generator = new jomres_ribbon_generator($property_uid);

					if (jomres_bootstrap_version() == '5') {
						if ((int)$property_data['NUMBER_OF_REVIEWS'] > 0) {   // For Joomla 4 BS5 template sets
							$jomres_ribbon_generator->set_review_score($itemRating['avg_rating'], $itemRating["rating_ribbon_text"]);

							$rob['RATING_TEXT_COLOUR'] = 'text-success';
							$rob['AVERAGE_RATING'] = number_format($itemRating['avg_rating'], 1, '.', '');

							$rob['RATING_SCORE_TEXT'] = '';
							if ($rob['AVERAGE_RATING'] > 5) {
								$rob['RATING_SCORE_TEXT'] = jomres_badge(
									$itemRating["rating_ribbon_text"],
									'success'
								);
							}

							if ($rob['AVERAGE_RATING'] <= 5) {
								$rob['RATING_TEXT_COLOUR'] = 'text-warning';
								$rob['RATING_SCORE_TEXT'] = '';
							}

							$rob['UID'] = $property_uid;
							$rob['RANDOM_IDENTIFIER'] = $property_data[ 'RANDOM_IDENTIFIER' ];
							$rob['AVERAGE_RATING'] = $property_data['AVERAGE_RATING'];
							$rob['NUMBER_OF_REVIEWS'] = $itemRating['counter'];
							$rob['_JOMRES_REVIEWS_CLICKTOSHOW'] = jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW', '_JOMRES_REVIEWS_CLICKTOSHOW', false);
							$rob['_JOMRES_REVIEWS_AVERAGE_RATING'] = jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING', '_JOMRES_REVIEWS_AVERAGE_RATING', false);
							$rob['_JOMRES_REVIEWS_TOTAL_VOTES'] = jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES', '_JOMRES_REVIEWS_TOTAL_VOTES', false);
							$rob['_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL'] = jr_gettext('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', false);

							$reviews_output_button[] = $rob;

							$tmpl = new patTemplate();
							$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
							$tmpl->readTemplatesFromInput('list_properties_reviews_section.html');
							$tmpl->addRows('reviews_output', $reviews_output_button);
							$property_data['REVIEWS_SECTION'] = $tmpl->getParsedTemplate();

							$tmpl = new patTemplate();
							$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
							$tmpl->readTemplatesFromInput('module_data_reviews_button.html');
							$tmpl->addRows('reviews_button', $reviews_output_button);
							$property_data['REVIEWS_BUTTON'] = $tmpl->getParsedTemplate();
						} else { // There aren't any reviews, we'll show a "these guys are new" badge instead
							$new_listing_blub = jr_gettext('JOMRES_REVIEWS_NONE_NEW', 'JOMRES_REVIEWS_NONE_NEW', false);
							$no_reviews_output_button = [0 => [
								'JOMRES_REVIEWS_NONE_NEW' =>
									jomres_badge($new_listing_blub, 'warning')
							]];
							$tmpl = new patTemplate();
							$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
							$tmpl->readTemplatesFromInput('list_properties_reviews_section_no_reviews.html');
							$tmpl->addRows('reviews_button', $no_reviews_output_button);
							$property_data['REVIEWS_SECTION'] = $tmpl->getParsedTemplate();
						}
					}

					if ($property_data['featured'] == true) {
						$jomres_ribbon_generator->set_review_score(10, $featured);
					}
					$property_data['RIBBON'] = $jomres_ribbon_generator->generate_html();

					$mrConfig = getPropertySpecificSettings($property_uid);

					if ($mrConfig['hide_local_address'] == '1') {
						$property_data[ 'property_street' ] =  jr_gettext('HIDDEN_ADDRESS_PLACEHOLDER', 'HIDDEN_ADDRESS_PLACEHOLDER', false);
					}

					$property_data[ 'MAX_OCCUPANCY' ] = $mrConfig['accommodates'];

					$current_property_details->gather_data($property_uid);

					set_showtime('property_uid', $property_uid);
					set_showtime('property_type', $current_property_details->property_type);
					set_showtime('ptype_id', $current_property_details->ptype_id);

					$jomres_media_centre_images->get_images($property_uid, array('property'));

					$property_data['UID'] = $property_uid;
					$property_data[ 'THUMBNAIL' ] = $jomres_media_centre_images->images ['property'][0][0]['small'];

					$property_data[ 'IMAGELARGE' ] = $jomres_media_centre_images->images ['property'][0][0]['large'];
					$property_data[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images ['property'][0][0]['medium'];
					$property_data[ 'IMAGETHUMB' ] = $jomres_media_centre_images->images ['property'][0][0]['small'];
					$property_data[ 'PROPERTY_IMAGE_OR_SLIDESHOW' ] = $MiniComponents->specificEvent('06000', 'show_property_main_image', array('output_now' => false, 'property_uid' => $property_uid , 'image_size' => 'medium' ));

					$property_data[ 'PROPERTY_DESCRIPTION' ] = ($jomres_markdown->get_markdown($current_property_details->property_description));

					$property_data[ 'PRICE_PRE_TEXT' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRE_TEXT' ];
					$property_data[ 'PRICE_PRICE' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRICE' ];
					$property_data[ 'PRICE_POST_TEXT' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'POST_TEXT' ];

					$property_data[ 'PROPERTY_UID' ] = $property_uid;

					$property_data[ 'LIVE_SITE' ] = get_showtime('live_site');
					$property_data[ 'MOREINFORMATION' ] = jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', $editable = false, true);
					$property_data[ 'QUICKINFORMATION' ] = jr_gettext('_JOMRES_QUICK_INFO', '_JOMRES_QUICK_INFO', $editable = false, true);
					$property_data[ 'MOREINFORMATIONLINK' ] = get_property_details_url($property_uid);
					$output['CANONICAL_URL'] = get_showtime('live_site').get_property_details_url($property_uid, 'sef');
					$property_data[ 'BOOKINGLINK' ] = get_booking_url($property_uid);
					if ($mrConfig[ 'singleRoomProperty' ] == '1') {
						if ($mrConfig[ 'requireApproval' ] == '1') {
							$property_data[ 'BOOKTHIS_TEXT' ] = jr_gettext('_BOOKING_CALCQUOTE', '_BOOKING_CALCQUOTE', false);
						} else {
							$property_data[ 'BOOKTHIS_TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', false);
						}
					} else {
						if ($mrConfig[ 'requireApproval' ] == '1') {
							$property_data[ 'BOOKTHIS_TEXT' ] = jr_gettext('_BOOKING_CALCQUOTE', '_BOOKING_CALCQUOTE', false);
						} else {
							$property_data[ 'BOOKTHIS_TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM', '_JOMRES_FRONT_MR_MENU_BOOKAROOM', false);
						}
					}

					$property_data[ 'STARSIMAGES' ] = $MiniComponents->specificEvent('06000', 'show_property_stars', array('property_uid' => $property_uid , 'output_now' => false ));

					$property_data[ 'TOWN_SEARCH_LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&town='.jomres_decode($current_property_details->multi_query_result[ $property_uid ][ 'property_town' ]));
					$property_data[ 'REGION_SEARCH_LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&region='.$current_property_details->multi_query_result[ $property_uid ][ 'property_region_id' ]);
					$property_data[ 'COUNTRY_SEARCH_LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&country='.jomres_decode($current_property_details->multi_query_result[ $property_uid ][ 'property_country_code' ]));


					$property_data[ 'SUPERIOR' ] = '';
					if ($property_data[ 'superior' ] == 1) {
						$property_data[ 'SUPERIOR' ] = '<img src="'.JOMRES_IMAGES_RELPATH.'superior.png" alt="superior" border="0" />';
					}
					if ($property_data['cat_id'] > 0) {
						$jomres_property_categories->get_property_category($property_data['cat_id']);
						$property_data["PROPERTY_CATEGORY"]		= $jomres_property_categories->title;
					} else {
						$property_data["PROPERTY_CATEGORY"]		= 'Uncategorized';
					}


					//animations
					$property_data[ 'ANIMATION_DELAY' ] = $animationDelay;
					$animationDelay = $animationDelay + 300;

					$pageoutput = array($property_data);
					$tmpl = new patTemplate();
					if ($alt_template_path != '') {
						$tmpl->setRoot($alt_template_path);
					} else {
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
					}
					$tmpl->addRows('pageoutput', $pageoutput);

					if (isset($current_property_details->multi_query_result[ $property_uid ][ 'room_types' ]) && !empty($current_property_details->multi_query_result[ $property_uid ][ 'room_types' ])) {
						$tmpl->addRows('room_types', $current_property_details->multi_query_result[ $property_uid ][ 'room_types' ]);
					}

					if (
						isset($property_data[ 'room_features' ]) &&
						is_array($property_data[ 'room_features' ]) &&
						!empty($property_data[ 'room_features' ]) &&
						!is_null($property_data[ 'room_features' ])
					) {
						$tmpl->addRows('room_features',$property_data[ 'room_features' ] );
					}

					if (
						isset($property_data[ 'property_features_names' ]) &&
						is_array($property_data[ 'property_features_names' ]) &&
						!empty($property_data[ 'property_features_names' ]) &&
						!is_null($property_data[ 'property_features_names' ])
					) {
						$tmpl->addRows('property_features_names',$property_data[ 'property_features_names' ]);
					}

					$tmpl->readTemplatesFromInput($template_file_name);
					$res[ $property_uid ][ 'template' ] = $tmpl->getParsedTemplate();
					$res[ $property_uid ][ 'data' ] = $property_data;

					if ($cache_feature_enabled && $jrConfig[ 'development_production' ] != 'development') {
						$success = file_put_contents(
							$cache_file , base64_encode(
								serialize(
									$res[ $property_uid ]
								)
							)
						);
					}
				}
			}
		}

		return $res;
	}
