<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
 *  @version Jomres 10.3.0
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Generates and displays the search results property list page
	 *
	 */

	class j01010listpropertys
	{
		/**
		 *
		 * Constructor
		 *
		 * Main functionality of the Minicomponent
		 *
		 *
		 *
		 */

		public function __construct($componentArgs)
		{
			// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
			$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
			if ($MiniComponents->template_touch) {
				$this->template_touchable = false;

				return;
			}

			jr_import('jomres_markdown');
			$jomres_markdown = new jomres_markdown();

			output_ribbon_styling();

			$MiniComponents->triggerEvent('01008', $componentArgs); // optional

			jr_import('jomres_ribbon_generator');

			$data_only 					= jomresGetParam($_REQUEST, 'dataonly', false);
			$propertylist_layout 		= jomresGetParam($_REQUEST, 'propertylist_layout', '');
			$this->jr_page 					= (int)jomresGetParam($_REQUEST, 'jr_page', 0);
			$return_to_search_results 	= jomresGetParam($_REQUEST, 'return_to_search_results', false);
			$arrivalDate 				= jomresGetParam($_REQUEST, 'arrivalDate', '');
			$departureDate 				= jomresGetParam($_REQUEST, 'departureDate', '');

			if (!AJAXCALL) {
				$show_property_list_header = true;
			} else {
				$show_property_list_header = false;
			}

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

			$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

			$stayDays = 1;

			if (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) && $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] != '' && $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ]) {
				$start = $tmpBookingHandler->tmpsearch_data['jomsearch_availability'];
				$end = $tmpBookingHandler->tmpsearch_data['jomsearch_availability_departure'];

				$range = get_periods($start, $end);
				$stayDays = count($range);
			} elseif (
				isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']) &&
				(isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate']) && $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] != '') &&
				(isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate']) && $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'] != '')
			) {
				$start = JSCalConvertInputDates($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'], $siteCal = true);
				$end = JSCalConvertInputDates($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'], $siteCal = true);

				$range = get_periods($start, $end);
				$stayDays = count($range);
			}

			if (!isset($tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ])) {
				$tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ] = $jrConfig[ 'property_list_layout_default' ];
			}

			$MiniComponents->triggerEvent('01004');
			$property_list_layouts = get_showtime('property_list_layouts');

			if (count($property_list_layouts) == 1) {
				$default_layout = array_keys($property_list_layouts);
				$tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ] = $default_layout[ 0 ];
			}

			$layout_rows = array();
			$all_layouts = array();
			if (((defined('JOMRES_NOHTML') && JOMRES_NOHTML == 0) || get_showtime('task') == 'ajax_search_filter' || get_showtime('task') == 'search' ) && count($property_list_layouts) > 1) {
				foreach ($property_list_layouts as $key => $layouts) {
					$all_layouts[ ] = $key;
					$r = array();
					$r[ 'TITLE' ] = $layouts[ 'title' ];
					$r[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=listproperties&propertylist_layout='.$key);
					$layout_rows[ ] = $r;
				}
			}

			if ($propertylist_layout != '' && in_array($propertylist_layout, $all_layouts)) {
				$tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ] = $propertylist_layout;
			}
			$layout = $tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ];

			$propertys_uids = $componentArgs[ 'propertys_uid' ];

			$live_scrolling_enabled = get_showtime('live_scrolling_enabled');

			if (!isset($componentArgs[ 'live_scrolling_enabled' ]) && is_null($live_scrolling_enabled)) {
				$live_scrolling_enabled = (bool) $jrConfig['live_scrolling_enabled'];
			} elseif (isset($componentArgs[ 'live_scrolling_enabled' ])) {
				$live_scrolling_enabled = (bool) $componentArgs[ 'live_scrolling_enabled' ];
			}

			$show_paging = false;
			if (!$live_scrolling_enabled || (AJAXCALL && $jrConfig['live_scrolling_enabled'] == '0')) {
				$show_paging = true;
			}

			if ($propertys_uids == '') {
				$propertys_uids = array();
			}

			if ( ($propertylist_layout != '' || $this->jr_page > 0 || $return_to_search_results) && isset($tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ] ) ) {
				$propertys_uids = $tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ];
			}

			if (empty($propertys_uids)) {
				return;
			}


			if (!AJAXCALL || get_showtime('task') == 'ajax_search_filter') {
				$propertys_uids = $MiniComponents->triggerEvent('01009', array('propertys_uids' => $propertys_uids)); // Pre list properties parser. Allows us to to filter property lists if required
				$tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ] = $propertys_uids;
			}

			if (isset($property_list_layouts[ $layout ][ 'custom_task' ])) {
				$new_task = $property_list_layouts[ $layout ][ 'custom_task' ];
				set_showtime('task', $new_task);
				echo $MiniComponents->specificEvent('06000', $new_task, array('layout_rows' => $layout_rows, 'property_uids' => $componentArgs[ 'propertys_uid' ]));
			} else {
				$shortlist_items = array();

				if (isset($tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ])) {
					$shortlist_items = $tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ];
				}

				if ($thisJRUser->userIsRegistered) {
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

				if (isset($property_list_layouts[ $layout ][ 'layout' ])) {
					$layout_template = $property_list_layouts[ $layout ][ 'layout' ];
				} else {
					$layout_template = 'list_properties.html';
				}

				if (jomres_bootstrap_version() == '5' ) {
					if (function_exists('get_available_property_list_templates')) {
						$available_list_templates = get_available_property_list_templates();
						$available_photo_templates =get_available_property_photo_templates();
						$lpt = $_REQUEST['list_properties_template'];
						if (isset($lpt) && $lpt != '') {
							if ( array_key_exists( $lpt , $available_list_templates) ||
								array_key_exists( $lpt ,$available_photo_templates ) ) {
									$layout_template = $lpt.'.html';
							}
							if ( array_key_exists( $lpt , $available_list_templates) ) {
								$show_property_list_header = $available_list_templates[$lpt]['show_property_list_header'];
							} else {
								$show_property_list_header = $available_photo_templates[$lpt]['show_property_list_header'];
							}
						}
					}
				}

				if (!isset($layout_path_to_template)) {
					if (!isset($property_list_layouts[ $layout ][ 'path' ])) {
						$layout_path_to_template = JOMRES_TEMPLATEPATH_FRONTEND;
					} else {
						$layout_path_to_template = $property_list_layouts[ $layout ][ 'path' ];
					}
				}


				if ($live_scrolling_enabled) {
					jomres_cmsspecific_addheaddata('javascript', JOMRES_JS_RELPATH, 'jquery.livequery.js');
				}

				if ($jrConfig[ 'is_single_property_installation' ] == '1') {
					$arrival_clause = '';

					if ($arrivalDate != '') {
						$arrival_clause = '&arrivalDate='.$arrivalDate.'&departureDate='.$departureDate;
					}
					jomresRedirect(get_booking_url($propertys_uids[ 0 ], '', $arrival_clause), '');
				}

				if (!isset($jrConfig['use_budget_feature'])) {
					$jrConfig['use_budget_feature'] = '1';
				}

				$budget_output = array();
				if (using_bootstrap() && $jrConfig['use_budget_feature'] == '1') {
					jr_import('jomres_user_budget');
					$budget = new jomres_user_budget();

					$budget_output[0]['BUDGET_DROPDOWN'] = $budget->get_budget_dropdown();
				}

				if (!empty($propertys_uids)) {
					$header_output = array();

					$header_output[ 'HARRIVALDATE' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', false);
					$header_output[ 'HDEPARTUREDATE' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', false);

					if (isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'])) {
						$header_output[ 'ARRIVALDATE' ] = generateDateInput('arrivalDate', $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'], 'ad', true);
					}
					if (isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'])) {
						$header_output[ 'DEPARTUREDATE' ] = generateDateInput('departureDate', $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'], false, true, false);
					}
					$header_output[ 'HSEARCH' ] = jr_gettext('_JOMRES_SEARCH_BUTTON', '_JOMRES_SEARCH_BUTTON');
					if (!using_bootstrap()) {
						$header_output[ 'THEBUTTON' ] = '<input type="submit" name="send" value="'.jr_gettext('_JOMRES_SEARCH_BUTTON', '_JOMRES_SEARCH_BUTTON', false).'" class="button" />';
					} else {
						$header_output[ 'THEBUTTON' ] = '<input type="submit" class="btn btn-primary" name="send" value="'.jr_gettext('_JOMRES_SEARCH_BUTTON', '_JOMRES_SEARCH_BUTTON', false).'" />';
					}

					$header_output[ 'ORDER_DROPDOWN' ] = get_showtime('order_dropdown');
					$header_output[ 'CLICKTOHIDE' ] = jr_gettext('_JOMRES_REVIEWS_CLICKTOHIDE', '_JOMRES_REVIEWS_CLICKTOHIDE', false);
					$header_output[ 'CLICKTOSHOW' ] = jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW', '_JOMRES_REVIEWS_CLICKTOSHOW', false);



					$compare = array();
					$shortlist = array();
					if ((defined('JOMRES_NOHTML') && JOMRES_NOHTML == 0) || get_showtime('task') == 'ajax_search_filter') {
						$compare[] = array('_JOMRES_COMPARE' => jr_gettext('_JOMRES_COMPARE', '_JOMRES_COMPARE', false), 'COMPARELINK' => '<script type="text/javascript">var compare_url = "'.jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=compare').'";</script>');
						if (get_showtime('task') != 'show_shortlisted_properties') {
							$shortlist[] = array('_JOMRES_VIEWSHORTLIST' => jr_gettext('_JOMRES_VIEWSHORTLIST', '_JOMRES_VIEWSHORTLIST', false), 'SHORTLISTLINK' => jomresURL(JOMRES_SITEPAGE_URL.'&task=show_shortlisted_properties'));
						}
					}

					if (defined('JOMRES_NOHTML') && JOMRES_NOHTML == 0 && get_showtime('task') != 'ajax_search_filter') {
						$output[ 'JOMRES_SITEPAGE_URL_AJAX' ] = "<script type=\"text/javascript\"> var live_site_ajax = '".JOMRES_SITEPAGE_URL_AJAX."'; </script>";
					}

					if ($live_scrolling_enabled) {
						$limit = (int) $jrConfig[ 'property_list_limit' ];
					} else {
						$limit = count($propertys_uids);
					}

					$i = 0;
					foreach ($propertys_uids as $puid) {
						if ($i < $limit) {
							$propertysToShow[] = $puid;
						}
						++$i;
					}

					if (get_showtime('disable_paging') == true) {
						$show_paging = false;
					}

					$output['PAGING'] = '';
					if ($show_paging) {
						$pagination_result = $this->generate_paging($propertys_uids, (int) $jrConfig[ 'property_list_limit' ]);
						$output['PAGING'] = $pagination_result['PAGINATION'];
						$current_page = $pagination_result['current_page'];
						$propertysToShow = array_slice($propertys_uids, ($current_page - 1) * (int) $jrConfig[ 'property_list_limit' ], (int) $jrConfig[ 'property_list_limit' ]);
					}
				}

				$templateCounter = 1;

				if ($arrivalDate == '') {
					if (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) && $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] != '') {
						$arrivalDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ];
					} else {
						$arrivalDate = date('Y/m/d');
					}
				} else {
					$arrivalDate = JSCalConvertInputDates($arrivalDate, $siteCal = true);
				}

				$date_elements = explode('/', $arrivalDate);
				$unixTodaysDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);

				$featured_properties = get_showtime('featured_properties');
				if (!empty($featured_properties)) { // only store the featured properties if their count is > 0. That's because featured properties are only set in non-ajax calls. If it's an ajax called, we don't want to set the featured properties to null
					$tmpBookingHandler->tmpsearch_data[ 'featured_properties' ] = $featured_properties;
				} else {
					$tmpBookingHandler->tmpsearch_data[ 'featured_properties' ] = array();
				}

				$guest_budget = '';
				if ($jrConfig['use_budget_feature'] == '1' && using_bootstrap()) {
					$guest_budget = $budget->get_budget();
				}

				$current_jintour_properties = get_showtime('jintour_properties');
				if ($current_jintour_properties == false ) {
					$current_jintour_properties = array();
				}
				if (!empty($propertysToShow)) {
					$property_details = array();

					//save the initial property type and property uid
					$original_property_uid = get_showtime('property_uid');
					$original_property_type = get_showtime('property_type');

					$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
					$current_property_details->gather_data_multi($propertysToShow);

					$jomres_property_list_prices = jomres_singleton_abstract::getInstance('jomres_property_list_prices');
					$jomres_property_list_prices->gather_lowest_prices_multi($propertysToShow, $lowest_ever = false, $hide_rpn = true);

					$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
					$jomres_media_centre_images->get_images_multi($propertysToShow, array('property'));

					$jomres_property_payment_methods = jomres_singleton_abstract::getInstance('jomres_property_payment_methods');
					$jomres_property_payment_methods->get_gateways_multi($propertysToShow);

					// Last booked
					$lastBookedArray = array();
					$query = 'SELECT `property_uid`, max(`timestamp`) AS ts FROM #__jomres_contracts WHERE `property_uid` IN ('.jomres_implode($propertysToShow).') AND `timestamp` IS NOT NULL GROUP BY `property_uid` ';
					$result = doSelectSql($query);
					if (!empty($result)) {
						foreach ($result as $r) {
							$date = jomres_nicetime($r->ts);
							if ($date != '') {
								$lastBookedArray[ $r->property_uid ] = $date;
							}
						}
					}

					if ($jrConfig[ 'use_reviews' ] == '1') {
						jr_import('jomres_reviews');
						$Reviews = new jomres_reviews();
						$Reviews->getRatingsMulti($propertysToShow);
					}

					$MiniComponents->triggerEvent('01011', array('property_uids' => $propertysToShow)); // Discount finding script uses this trigger. We'll send it an array of property uids to reduce the number of queries it performs.
					$MiniComponents->triggerEvent('01012', array('property_uids' => $propertysToShow));

					$properties_where_guest_has_already_booked = array();
					if ($thisJRUser->id > 0 ) {
						$query = 'SELECT `property_uid` FROM #__jomres_guests WHERE `property_uid` IN ('.jomres_implode($propertysToShow).') AND mos_userid = '.(int)$thisJRUser->id;
						$xistingBookings = doSelectSql($query);
						if (!empty($xistingBookings)) {
							foreach ($xistingBookings as $booking) {
								$properties_where_guest_has_already_booked[] = $booking->property_uid;
							}
						}
					}

					foreach ($propertysToShow as $propertys_uid) {
						$property_deets = array();
						set_showtime('property_uid', $propertys_uid);
						set_showtime('property_type', $current_property_details->multi_query_result[ $propertys_uid ]['property_type']);

						$mrConfig = getPropertySpecificSettings($propertys_uid);

						$jomres_ribbon_generator = new jomres_ribbon_generator( $propertys_uid );

						$property_deets['GATEWAYS'] = '';
						$payment_methods = $jomres_property_payment_methods->get_property_gateways($propertys_uid);

						if (!empty($payment_methods)) {
							$tmpl = new patTemplate();
							$tmpl->addRows('pageoutput', $payment_methods);

							$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
							$tmpl->readTemplatesFromInput('list_properties_gateways_snippet.html');
							$property_deets['GATEWAYS'] = $tmpl->getParsedTemplate();
						}

						$featureList = array();
						$ptown = stripslashes($current_property_details->multi_query_result[ $propertys_uid ]['property_town']);
						$property_stars = $current_property_details->multi_query_result[ $propertys_uid ]['stars'];
						$propertyDesc = $jomres_markdown->get_markdown(strip_tags(jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION_'.$propertys_uid, $current_property_details->multi_query_result[ $propertys_uid ]['property_description'], false))));

						if (in_array($propertys_uid, $tmpBookingHandler->tmpsearch_data[ 'featured_properties' ])) {
							if (!isset($jrConfig[ 'featured_listings_emphasis' ]) || $jrConfig[ 'featured_listings_emphasis' ] == '') {
								$jrConfig[ 'featured_listings_emphasis' ] = 'panel-primary';
							}

							$property_deets[ 'FEATURED_LISTINGS_CLASS' ] = $jrConfig[ 'featured_listings_emphasis' ];
						} else {
							$property_deets[ 'FEATURED_LISTINGS_CLASS' ] = 'panel-default';
						}

						$property_deets[ 'BUDGET_BORDER_CLASS' ] = '';

						if ($guest_budget > 0 && $jrConfig['use_budget_feature'] == '1' && using_bootstrap()) {
							if (
								$guest_budget >= $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'RAW_PRICE' ] &&
								$jomres_property_list_prices->lowest_prices[$propertys_uid][ 'RAW_PRICE' ] > 0
							) {
								$property_deets[ 'BUDGET_BORDER_CLASS' ] = 'panel-success';
							} else {
								$property_deets[ 'BUDGET_BORDER_CLASS' ] .= ' property-list-overbudget-properties';
							}

							// Don't know if I want to use this yet. Jomres 8.1
							/*if ( $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'RAW_PRICE' ] > ($guest_budget*3))
								{
								$property_deets[ 'BUDGET_BORDER_CLASS' ] = "panel-danger property-list-overbudget-properties";
								} */
						}

						if ($jrConfig[ 'use_reviews' ] == '1') {
							$Reviews->property_uid = $propertys_uid;
							$itemRating = $Reviews->showRating($propertys_uid);

							$property_deets['AVERAGE_RATING'] = number_format($itemRating['avg_rating'], 1, '.', '');
							$property_deets['NUMBER_OF_REVIEWS'] = $itemRating['counter'];

							$property_deets['_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL'] = jr_gettext('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', false);

							$property_deets['_JOMRES_REVIEWS'] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false);
							$property_deets['_JOMRES_REVIEWS_AVERAGE_RATING'] = jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING', '_JOMRES_REVIEWS_AVERAGE_RATING', false);
							$property_deets['_JOMRES_REVIEWS_TOTAL_VOTES'] = jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES', '_JOMRES_REVIEWS_TOTAL_VOTES', false);
							$property_deets['_JOMRES_REVIEWS'] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false);

							$property_deets['COLON'] = ' : ';
							$property_deets['HYPHEN'] = ' - ';
							$property_deets['RATING_TEXT_COLOUR'] = 'text-muted';


							$rob = array();
							$reviews_output_button = array();
							$no_reviews_output_button = array();

							if ( jomres_bootstrap_version() == '5' ) {

								if ((int)$property_deets['NUMBER_OF_REVIEWS'] > 0) {   // For Joomla 4 BS5 template sets

									$jomres_ribbon_generator->set_review_score( $itemRating['avg_rating'] , $itemRating["rating_ribbon_text"] );

									$rob['RATING_TEXT_COLOUR'] = 'text-success';
									$rob['AVERAGE_RATING'] = number_format($itemRating['avg_rating'], 1, '.', '');

									$rob['RATING_SCORE_TEXT'] = '';
									if ($rob['AVERAGE_RATING'] > 5 ) {
										$rob['RATING_SCORE_TEXT'] = jomres_badge(
											$itemRating["rating_ribbon_text"],
											'success'
										);
									}

									if ($rob['AVERAGE_RATING'] <= 5) {
										$rob['RATING_TEXT_COLOUR'] = 'text-warning';
										$rob['RATING_SCORE_TEXT'] = '';
									}

									$rob['UID'] = $propertys_uid;
									$rob['AVERAGE_RATING'] = $property_deets['AVERAGE_RATING'];
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
									$property_deets['REVIEWS_SECTION'] = $tmpl->getParsedTemplate();

									$tmpl = new patTemplate();
									$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
									$tmpl->readTemplatesFromInput('list_properties_reviews_button.html');
									$tmpl->addRows('reviews_button', $reviews_output_button);
									$property_deets['REVIEWS_BUTTON'] = $tmpl->getParsedTemplate();

								} else { // There aren't any reviews, we'll show a "these guys are new" badge instead
									$new_listing_blub = jr_gettext('JOMRES_REVIEWS_NONE_NEW', 'JOMRES_REVIEWS_NONE_NEW', false);
									$no_reviews_output_button = [0 => [
										'JOMRES_REVIEWS_NONE_NEW' =>
											jomres_badge(	$new_listing_blub , 'warning')
									]];
									$tmpl = new patTemplate();
									$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
									$tmpl->readTemplatesFromInput('list_properties_reviews_section_no_reviews.html');
									$tmpl->addRows('reviews_button', $no_reviews_output_button);
									$property_deets['REVIEWS_SECTION'] = $tmpl->getParsedTemplate();
								}
							}


							// Older code that'll be left in situ for now til Joomla 3 is no more.
							// Property review information needs to be in it's own array so that a patTemplate condition can be used to decide if reviews are shown or no.
							// To allow BC with older templates we'll copy the review info from the old property deets array to a new property_reviews array.
							if ((int) $property_deets[ 'NUMBER_OF_REVIEWS' ] > 0) {
								$property_reviews = array();
								$property_reviews[0][ 'AVERAGE_RATING' ] = $property_deets[ 'AVERAGE_RATING' ];
								$property_reviews[0][ 'NUMBER_OF_REVIEWS' ] = $property_deets[ 'NUMBER_OF_REVIEWS' ];
								$property_reviews[0][ '_JOMRES_REVIEWS_AVERAGE_RATING' ] = $property_deets[ '_JOMRES_REVIEWS_AVERAGE_RATING' ];
								$property_reviews[0][ '_JOMRES_REVIEWS_TOTAL_VOTES' ] = $property_deets[ '_JOMRES_REVIEWS_TOTAL_VOTES' ];
								$property_reviews[0][ '_JOMRES_REVIEWS' ] = $property_deets[ '_JOMRES_REVIEWS' ];
								$property_reviews[0][ '_JOMRES_REVIEWS_CLICKTOSHOW' ] =  jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW', '_JOMRES_REVIEWS_CLICKTOSHOW', false);
								$property_reviews[0][ 'COLON' ] = $property_deets[ 'COLON' ];
								$property_reviews[0][ 'HYPHEN' ] = $property_deets[ 'HYPHEN' ];
								$property_reviews[0][ 'REVIEWS_RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);
								$property_reviews[0][ 'UID' ] = $propertys_uid;

								$property_reviews[0][ 'PROPERTY_NAME' ] = urlencode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_name' ]);

								$property_reviews[0][ 'MODAL_BUTTON' ] =
									make_modal_button(
										$property_reviews[0][ '_JOMRES_REVIEWS_CLICKTOSHOW' ],  // Test of the button
										'show_property_reviews',								// The task being called
										'&property_uid='.$propertys_uid,						// Extra arguments being added to the url for that specific task
										$property_reviews[0][ 'PROPERTY_NAME' ],				// The title of the modal
										'btn-default'											// The colour of the button
									);

								$tmpl = new patTemplate();
								$tmpl->addRows('property_reviews', $property_reviews);
								$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
								$tmpl->readTemplatesFromInput('list_properties_reviews_snippet.html');
								$property_deets [ 'REVIEWS_SNIPPET' ] = $tmpl->getParsedTemplate();
							} else {
								$property_deets [ 'REVIEWS_SNIPPET' ] = jr_gettext('_JOMRES_REVIEWS_NOREVIEWS', '_JOMRES_REVIEWS_NOREVIEWS', false);
							}
						} else {
							$property_deets[ 'AVERAGE_RATING' ] = '';
							$property_deets[ 'NUMBER_OF_REVIEWS' ] = '';
							$property_deets[ '_JOMRES_REVIEWS_AVERAGE_RATING' ] = '';
							$property_deets[ '_JOMRES_REVIEWS_TOTAL_VOTES' ] = '';
							$property_deets[ '_JOMRES_REVIEWS' ] = '';
							$property_deets[ '_JOMRES_REVIEWS_CLICKTOSHOW' ] = '';
							$property_deets[ 'COLON' ] = '';
							$property_deets[ 'HYPHEN' ] = '';
							$property_deets[ 'REVIEWS' ] = '';
							$property_deets [ 'REVIEWS_SNIPPET' ] = '';
							$property_deets[ 'RATING_TEXT_COLOUR' ] = 'text-muted';
						}

						//$property_deets['AVAILABILITY_CALENDAR'] = $MiniComponents->specificEvent('06000','ui_availability_calendar',array('property_uid'=>$property->propertys_uid,'output_now'=>"1",'noshowlegend'=>1) );

						$stars = $current_property_details->multi_query_result[$propertys_uid]['stars'];

						$starslink = $MiniComponents->specificEvent('06000', 'show_property_stars', array('property_uid' => $propertys_uid , 'output_now' => false ));

						$property_deets[ 'SUPERIOR' ] = '';
						if ($current_property_details->multi_query_result[ $propertys_uid ]['superior'] == 1) {
							$property_deets[ 'SUPERIOR' ] = '<img src="'.JOMRES_IMAGES_RELPATH.'superior.png" alt="superior" border="0" />';
						}

						$rtRows = '';
						$rtRowsLabels = '';
						if (isset($current_property_details->multi_query_result[ $propertys_uid ][ 'room_types' ]) && !empty($current_property_details->multi_query_result[ $propertys_uid ][ 'room_types' ])) {
							$rTypes = $current_property_details->multi_query_result[ $propertys_uid ][ 'room_types' ];
							foreach ($rTypes as $rtd) {
								$rtRows .= jomres_makeTooltip($rtd['abbv'], $rtd['abbv'], $rtd['desc'],  JOMRES_IMAGELOCATION_RELPATH.'rmtypes/'.$rtd['image'], '', 'room_type', array());
								$rtRowsLabels .= '<span class="label label-info">'.trim($rtd['abbv']).'</span> ';
							}
						}

						$property_deets[ 'ROOMTYPES' ] = $rtRows;
						$property_deets[ 'ROOMTYPES_LABELS' ] = $rtRowsLabels;

						$propertyFeaturesArray = explode(',', ($current_property_details->multi_query_result[ $propertys_uid ]['property_features']));

						if (!empty($propertyFeaturesArray)) {
							$featureList = '';
							$counter = 0;
							foreach ($propertyFeaturesArray as $f) {
								if ($f != '') {
									if (($counter / 10) == 0) {
										$br = '<br />';
									}
									$hotel_feature_abbv = $current_property_details->all_property_features[ $f ]['abbv'];
									$hotel_feature_full_desc = $current_property_details->all_property_features[ $f ]['desc'];
									$feature_image = JOMRES_IMAGELOCATION_RELPATH.'pfeatures/'.$current_property_details->all_property_features[ $f ]['image'];
									$featureList .= jomres_makeTooltip($hotel_feature_abbv, $hotel_feature_abbv, $hotel_feature_full_desc, $feature_image, '', 'property_feature', array());
									++$counter;
								}
							}
							$property_deets[ 'FEATURELIST' ] = $featureList;
						}

						$property_deets[ 'PRICE_PRE_TEXT' ] = $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRE_TEXT' ];
						$property_deets[ 'PRICE_PRICE' ] = $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRICE' ];
						$property_deets[ 'PRICE_POST_TEXT' ] = $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'POST_TEXT' ];
						if (isset($jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRICE_NOCONVERSION' ])) {
							$property_deets[ 'PRICE_NOCONVERSION' ] = $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRICE_NOCONVERSION' ];
						}

						//total price
						$plugin_will_provide_lowest_price = false;
						$MiniComponents->triggerEvent('07015', array('property_uid' => $propertys_uid)); // Optional
						$mcOutput = $MiniComponents->getAllEventPointsData('07015');
						if (!empty($mcOutput)) {
							foreach ($mcOutput as $val) {
								if ($val == true) {
									$plugin_will_provide_lowest_price = true;
								}
							}
						}

						if ($mrConfig[ 'is_real_estate_listing' ] == 0 && !$plugin_will_provide_lowest_price && $jomres_property_list_prices->lowest_prices[$propertys_uid]['PRICE'] != jr_gettext('_JOMRES_PRICE_ON_APPLICATION', '_JOMRES_PRICE_ON_APPLICATION', '', true, false)) {//&& $stayDays > 1)
							if ($jomres_property_list_prices->lowest_prices[$propertys_uid]['RAW_PRICE'] > 0) {
								$property_deets[ 'PRICE_CUMULATIVE' ] = $jomres_property_list_prices->lowest_prices[$propertys_uid]['PRICE_CUMULATIVE'];
							} else {
								$property_deets[ 'PRICE_CUMULATIVE' ] = $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRICE' ];
							}

							$property_deets['FOR'] = jr_gettext('_JOMRES_FOR', '_JOMRES_FOR', false);
							if ($jomres_property_list_prices->lowest_prices[$propertys_uid]['RAW_PRICE'] > 0) {
								if ($mrConfig[ 'wholeday_booking' ] == '1') {
									$property_deets[ 'NIGHTS_TEXT' ] = jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', false);
								} else {
									if ($stayDays == 1) {
										$property_deets[ 'NIGHTS_TEXT' ] = jr_gettext('_JOMRES_PRICINGOUTPUT_NIGHT', '_JOMRES_PRICINGOUTPUT_NIGHT', false);
									} else {
										$property_deets[ 'NIGHTS_TEXT' ] = jr_gettext('_JOMRES_PRICINGOUTPUT_NIGHTS', '_JOMRES_PRICINGOUTPUT_NIGHTS', false);
									}
								}
								if ($stayDays == 0 ) {
									$stayDays = 1;
								}
								$property_deets[ 'STAY_DAYS' ] = $stayDays;
							} else {
								$property_deets[ 'NIGHTS_TEXT' ] = '';
								$property_deets[ 'STAY_DAYS' ] = '';
							}
						} elseif ($mrConfig[ 'is_real_estate_listing' ] == 1) {
							$property_deets[ 'PRICE_CUMULATIVE' ] = $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRICE' ];
						}
						//end total price

						if (array_key_exists($propertys_uid, $lastBookedArray)) {
							$property_deets[ 'LASTBOOKED' ] = jr_gettext('_JOMRES_DATEPERIOD_LATESTBOOKING', '_JOMRES_DATEPERIOD_LATESTBOOKING').' '.$lastBookedArray[ $propertys_uid ];
							if (!using_bootstrap()) {
								$property_deets[ 'LASTBOOKING_STYLE' ] = 'ui-state-highlight ui-corner-all';
							} else {
								$property_deets[ 'LASTBOOKING_STYLE' ] = 'alert alert-warning';
							}
						}

						$property_deets[ 'COUNTER' ] = $templateCounter;
						++$templateCounter;

						if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
							if ($mrConfig[ 'visitorscanbookonline' ] == '1') {
								$property_deets[ 'LINK' ] = get_booking_url($propertys_uid);

								if ($mrConfig[ 'singleRoomProperty' ] == '1') {
									if ($mrConfig[ 'requireApproval' ] == '1') {
										$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext('_BOOKING_CALCQUOTE', '_BOOKING_CALCQUOTE', false);
									} else {
										$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', false);
									}
								} else {
									if ($mrConfig[ 'requireApproval' ] == '1') {
										$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext('_BOOKING_CALCQUOTE', '_BOOKING_CALCQUOTE', false);
									} else {
										$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM', '_JOMRES_FRONT_MR_MENU_BOOKAROOM', false);
									}
								}
							} else {
								$property_deets[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=contactowner&selectedProperty='.$propertys_uid);
								$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', false);
							}
						} else {
							$property_deets[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=contactowner&selectedProperty='.$propertys_uid);
							$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', false);
						}

						if (strlen($current_property_details->multi_query_result[ $propertys_uid ][ 'property_name' ]) > 15 && $layout == 'tile') {
							$property_deets[ 'PROP_NAME' ] = jr_substr($current_property_details->multi_query_result[ $propertys_uid ][ 'property_name' ], 0, 14).'&hellip;';
						} else {
							$property_deets[ 'PROP_NAME' ] = $current_property_details->multi_query_result[ $propertys_uid ][ 'property_name' ];
						}

						$property_deets[ 'PROPERTY_NAME_FULL' ] = $current_property_details->multi_query_result[ $propertys_uid ][ 'property_name' ];

						$property_deets[ 'LAT' ] = str_replace( "&#45;" , "-"  , $current_property_details->multi_query_result[ $propertys_uid ][ 'lat' ]);
						$property_deets[ 'LONG' ] = str_replace( "&#45;" , "-"  , $current_property_details->multi_query_result[ $propertys_uid ][ 'long' ]);

						// Hiding property address
						$property_deets[ 'PROP_STREET' ] = stripslashes($current_property_details->multi_query_result[ $propertys_uid ][ 'property_street' ]);

						$user_can_view_address = true;
						if ( $mrConfig['hide_local_address'] == '1' ) {
							$user_can_view_address = false;
						}
						if ( $mrConfig['hide_local_address'] == '1' && $thisJRUser->id > 0 ) {
							if ( in_array($propertys_uid , $properties_where_guest_has_already_booked) ) {
								$user_can_view_address = true;
							}
						}

						if ( !$user_can_view_address ) {
							$property_deets[ 'PROP_STREET' ] =  jr_gettext('HIDDEN_ADDRESS_PLACEHOLDER', 'HIDDEN_ADDRESS_PLACEHOLDER', false);
						}
						// End hiding property address

						$property_deets[ 'PROP_TOWN' ] = '<a style="text-decoration:none;" href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&town='.jomres_decode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_town' ])).'">'.jomres_decode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_town' ]).'</a>';
						$property_deets[ 'PROP_POSTCODE' ] = stripslashes($current_property_details->multi_query_result[ $propertys_uid ][ 'property_postcode' ]);
						$property_deets[ 'PROP_REGION' ] = '<a style="text-decoration:none;" href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&region='.$current_property_details->multi_query_result[ $propertys_uid ][ 'property_region_id' ]).'">'.jomres_decode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_region' ]).'</a>';
						$property_deets[ 'PROP_COUNTRY' ] = '<a style="text-decoration:none;" href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&country='.jomres_decode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_country_code' ])).'">'.jomres_decode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_country' ]).'</a>';

						$property_deets[ 'LIVESITE' ] = get_showtime('live_site');
						$property_deets[ 'UID' ] = $propertys_uid;
						$property_deets[ 'MOREINFORMATION' ] = jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', $editable = false, true);
						$property_deets[ 'MOREINFORMATIONLINK' ] = get_property_details_url($propertys_uid);
						$property_deets[ 'MOREINFORMATIONLINK_AJAX' ] = get_property_details_url($propertys_uid,'ajax');
						$property_deets[ 'MOREINFORMATIONLINK_SEFSAFE' ] = get_property_details_url($propertys_uid,'sefsafe');
						$property_deets[ 'PROPERTYNAME' ] = $property_deets[ 'PROP_NAME' ];

						$property_deets[ '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES');
						$property_deets[ '_JOMRES_FRONT_ROOMTYPES' ] = jr_gettext('_JOMRES_FRONT_ROOMTYPES', '_JOMRES_FRONT_ROOMTYPES');
						$property_deets[ 'JS_SAFE_PROPERTYNAME' ] = preg_replace('/[^A-Za-z0-9_-]+/', '', $property_deets[ 'PROP_NAME' ]);
						$property_deets[ 'PROPERTYTOWN' ] = jomres_decode($ptown);
						$property_deets[ 'PROPERTYREGION' ] = jomres_decode(stripslashes($current_property_details->multi_query_result[ $propertys_uid ][ 'property_region' ]));
						$property_deets[ 'PROPERTYCOUNTRY' ] = jomres_decode(stripslashes($current_property_details->multi_query_result[ $propertys_uid ][ 'property_country' ]));

						$property_deets[ 'TELEPHONE_NUMBER' ] = jomres_decode($current_property_details->multi_query_result[ $propertys_uid ]['property_tel']);

						if ((int) $jrConfig['override_property_contact_details'] == 1) {
							if ($jrConfig['override_property_contact_tel'] != '') {
								$output[ 'TELEPHONE_NUMBER' ] = str_replace("&#38;#43;" , "+" , $jrConfig['override_property_contact_tel'] );
							}
						}

						if (strlen($propertyDesc) > (int) $jrConfig[ 'propertyListDescriptionLimit' ]) {
							$property_deets[ 'PROPERTYDESC' ] = jr_substr($propertyDesc, 0, $jrConfig[ 'propertyListDescriptionLimit' ]).'...';
						} else {
							$property_deets[ 'PROPERTYDESC' ] = $propertyDesc;
						}

						$property_deets[ '_JOMRES_QUICK_INFO' ] = jr_gettext('_JOMRES_QUICK_INFO', '_JOMRES_QUICK_INFO', false);

						if (isset($mrConfig[ 'galleryLink' ])) {
							$property_deets[ 'REMOTE_URL' ] = $mrConfig[ 'galleryLink' ];
						}

						$property_deets[ 'EDIT_LINK' ] = '';
						if (!empty($thisJRUser->authorisedProperties)) {
							if ( in_array($propertys_uid ,$thisJRUser->authorisedProperties )) {
								$property_deets[ 'EDIT_LINK' ] = '<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&task=dashboard&thisProperty='.$propertys_uid).'" class="owner-links btn btn-danger">'.jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME','_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME',false).'</a>';
							}
						}

						$property_deets[ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);
						$property_deets[ '_JOMRES_COMPARE' ] = jr_gettext('_JOMRES_COMPARE', '_JOMRES_COMPARE', false);

						if (!in_array($propertys_uid, $shortlist_items)) {
							$shortlist_output = array();
							$shortlist_pageoutput = array();
							$shortlist_output['TEXT'] = jr_gettext('_JOMRES_ADDTOSHORTLIST', '_JOMRES_ADDTOSHORTLIST', false);
							$shortlist_pageoutput[ ] = $shortlist_output;
							$tmpl = new patTemplate();
							$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
							$tmpl->readTemplatesFromInput('shortlist_removed.html');
							$tmpl->addRows('pageoutput', $shortlist_pageoutput);
							$property_deets[ 'SHORTLIST' ] = $tmpl->getParsedTemplate();
						} else {
							$shortlist_output = array();
							$shortlist_pageoutput = array();
							$shortlist_output['TEXT'] = jr_gettext('_JOMRES_REMOVEFROMSHORTLIST', '_JOMRES_REMOVEFROMSHORTLIST', false);
							$shortlist_pageoutput[ ] = $shortlist_output;
							$tmpl = new patTemplate();
							$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
							$tmpl->readTemplatesFromInput('shortlilst_added.html');
							$tmpl->addRows('pageoutput', $shortlist_pageoutput);
							$property_deets[ 'SHORTLIST' ] = $tmpl->getParsedTemplate();
						}

						add_gmaps_source(); // Needs to be included, regardless of the settings below because the module popup will not work without it.

						$showmaps = false;
						$layout = $tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ];
						if (get_showtime('layout_showmaps') != null || $layout == 'listwithmaps') {
							if (get_showtime('layout_mapwidth') == null) {
								$mapwidth = '119';
								$mapheight = '95';
							} else {
								$mapwidth = get_showtime('layout_mapwidth');
								$mapheight = get_showtime('layout_mapheight');
							}
							$args = array('property_uid' => $propertys_uid, 'width' => $mapwidth, 'height' => $mapheight, 'disable_ui' => true);
							$MiniComponents->specificEvent('01050', 'x_geocoder', $args);
							$property_deets[ 'MAP' ] = $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];
						}

						$property_deets[ 'PROPERTY_TYPE' ] = jomres_badge($current_property_details->multi_query_result[ $propertys_uid ]['property_type_title'] , 'info' );
						$property_deets[ 'PROPERTY_TYPE_SEARCH_URL' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=search&ptype='.$current_property_details->multi_query_result[ $propertys_uid ]['ptype_id']);

						$property_deets[ 'AGENT_LINK' ] = make_agent_link($propertys_uid);

						$property_deets[ '_JOMRES_AGENT' ] = jr_gettext('_JOMRES_AGENT', '_JOMRES_AGENT');

						$property_deets[ 'STARS' ] = $starslink;

						$property_deets[ 'REQUIRE_APPROVAL' ] = '';
						$property_deets[ 'REQUIRE_APPROVAL_CLASS' ] = '';
						if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
							if ($mrConfig[ 'requireApproval' ] == '1' || $mrConfig['visitorscanbookonline'] == '0') {
								$property_deets[ 'REQUIRE_APPROVAL' ] = jr_gettext('_BOOKING_ONREQUEST', '_BOOKING_ONREQUEST', false);
								$property_deets[ 'REQUIRE_APPROVAL_CLASS' ] = 'booking-onrequest';
							} else {
								$property_deets[ 'REQUIRE_APPROVAL' ] = jr_gettext('_BOOKING_INSTANT', '_BOOKING_INSTANT', false);
								$property_deets[ 'REQUIRE_APPROVAL_CLASS' ] = 'booking-instant';
							}
						}

						//property image or slideshow
						$property_deets[ 'PROPERTY_IMAGE_OR_SLIDESHOW' ] = $MiniComponents->specificEvent('06000', 'show_property_main_image', array('output_now' => false, 'property_uid' => $propertys_uid));

						$jomres_media_centre_images->get_images($propertys_uid, array('property'));

						if (isset($jomres_media_centre_images->images['property'][0][0]['large'])) {
							$property_deets[ 'IMAGELARGE' ] = $jomres_media_centre_images->images['property'][0][0]['large'];
						} else {
							$property_deets[ 'IMAGELARGE' ] = $jomres_media_centre_images->multi_query_images['noimage-large'];
						}

						if (isset($jomres_media_centre_images->images['property'][0][0]['medium'])) {
							$property_deets[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images['property'][0][0]['medium'];
						} else {
							$property_deets[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->multi_query_images['noimage-medium'];
						}

						if (isset($jomres_media_centre_images->images['property'][0][0]['small'])) {
							$property_deets[ 'IMAGETHUMB' ] = $jomres_media_centre_images->images['property'][0][0]['small'];
						} else {
							$property_deets[ 'IMAGETHUMB' ] = $jomres_media_centre_images->multi_query_images['noimage-small'];
						}

						$MiniComponents->triggerEvent('01011', array('property_uid' => $propertys_uid)); // Optional
						$mcOutput = $MiniComponents->getAllEventPointsData('01011');
						if (!empty($mcOutput)) {
							foreach ($mcOutput as $key => $val) {
								if (!is_null($val)) {
									$result = array_merge($property_deets, $val);
									if ( isset($val['LASTMINUTE']) && $val['LASTMINUTE'] != null ) {
										$result['DISCOUNT_OVERLAY'] = simple_template_output(JOMRES_TEMPLATEPATH_FRONTEND , 'last_minute_overlay.html' , $val['LASTMINUTE'] );
									} else {
										$result['DISCOUNT_OVERLAY'] = '';
									}
									$property_deets = $result;
								}
							}
						} else {
							$result['DISCOUNT_OVERLAY'] = '';
						}

						$MiniComponents->triggerEvent('01012', array('property_uid' => $propertys_uid)); // Optional
						$mcOutput = $MiniComponents->getAllEventPointsData('01012');
						if (!empty($mcOutput)) {
							foreach ($mcOutput as $key => $val) {
								if (!is_null($val)) {
									$result = array_merge($property_deets, $val);
									$property_deets = $result;
								}
							}
						}

						$result['PRICE_PRE_TEXT'] = '';
						if ( in_array ( $propertys_uid , $current_jintour_properties)   ) {
							$property_deets[ 'PRICE_PRE_TEXT' ] = jr_gettext('_JOMRES_TARIFFSFROM', '_JOMRES_TARIFFSFROM', false);
							$property_deets[ 'PRICE_POST_TEXT' ] = jr_gettext('_JOMRES_BOOKINGFORM_PERPERSON', '_JOMRES_BOOKINGFORM_PERPERSON', false);
						}

						$property_deets['RIBBON'] = $jomres_ribbon_generator->generate_html();
						$property_details[ ] = $property_deets;
					}

					if ((!AJAXCALL || get_showtime('task') == 'ajax_search_filter') && $show_property_list_header == true ) {
						$header_pageoutput[ ] = $header_output;
						$tmpl = new patTemplate();
						$tmpl->addRows('header_pageoutput', $header_pageoutput);
						$tmpl->addRows('layout_rows', $layout_rows);
						$tmpl->addRows('compare', $compare);
						$tmpl->addRows('shortlist', $shortlist);

						$tmpl->addRows('budget_output', $budget_output);
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
						$tmpl->readTemplatesFromInput('list_properties_header.html');
						$output[ 'HEADER' ] = $tmpl->getParsedTemplate();
					}


					$pageoutput[ ] = $output;
					$tmpl = new patTemplate();
					if (isset($property_reviews)) {
						$tmpl->addRows('property_reviews', $property_reviews);
					}

					$tmpl->addRows('pageoutput', $pageoutput);
					$tmpl->addRows('property_details', $property_details);
					$tmpl->setRoot($layout_path_to_template);
					$tmpl->readTemplatesFromInput($layout_template);
					$tmpl->displayParsedTemplate();


					//set back the initial property type and property uid
					set_showtime('property_uid', $original_property_uid);
					set_showtime('property_type', $original_property_type);
				}
			}
		}

		public function generate_paging($propertys_uids, $limit)
		{
			$output = array();
			$first_output = array();
			$last_output = array();
			$pages_output = array();
			$prev_output = array();
			$next_output = array();

			$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

			$selections = '';
			if (isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections'])) {
				foreach ($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections'] as $key => $val) {
					switch ($key) {
						case 'stars':
							foreach ($val as $v) {
								$selections .= '&stars='.$v[0];
							}
							break;
						case 'pricerange_value_from':
							$selections .= '&pricerange_value_from='.$val;
							break;
						case 'pricerange_value_to':
							$selections .= '&pricerange_value_to='.$val;
							break;
						case 'feature_uids':
							foreach ($val as $v) {
								$selections .= '&feature_uids[]='.$v;
							}
							break;
						case 'countries':
							foreach ($val as $v) {
								$selections .= '&countries[]='.$v;
							}
							break;
						case 'regions':
							foreach ($val as $v) {
								$selections .= '&regions[]='.$v;
							}
							break;
						case 'towns':
							foreach ($val as $v) {
								$selections .= '&towns[]='.$v;
							}
							break;
						case 'room_type_uids':
							foreach ($val as $v) {
								$selections .= '&room_type_uids[]='.$v;
							}
							break;
						case 'property_type_uids':
							foreach ($val as $v) {
								$selections .= '&property_type_uids[]='.$v;
							}
							break;
						case 'guestnumbers':
							foreach ($val as $v) {
								$selections .= '&guestnumbers[]='.$v;
							}
							break;
						case 'arrivalDate':
							$selections .= '&arrivalDate='.$val;
							break;
						case 'departureDate':
							$selections .= '&departureDate='.$val;
							break;
					}
				}
			}

			if ($this->jr_page == 0) {
				$current_page = 1;
			} else {
				$current_page = $this->jr_page;
			}

			$totalItems = count($propertys_uids);
			$urlPattern = JOMRES_SITEPAGE_URL.'&task=search&jr_page=(:num)'.$selections;

			//build the pagination
			jr_import('jomres_pagination');
			$paginator = new jomres_pagination($totalItems, $limit, $current_page, $urlPattern);

			//previous page
			if ($paginator->getPrevUrl()) {
				$prev_output[]['PREV_URL'] = jomresURL($paginator->getPrevUrl());
				$first_output[]['FIRST_URL'] = jomresURL(JOMRES_SITEPAGE_URL.'&task=search'.$selections);
			}

			//next page
			if ($paginator->getNextUrl()) {
				$next_output[]['NEXT_URL'] = jomresURL($paginator->getNextUrl());
				$last_output[]['LAST_URL'] = jomresURL(JOMRES_SITEPAGE_URL.'&task=search&jr_page='.ceil($totalItems / $limit).$selections);
			}

			//pages
			foreach ($paginator->getPages() as $page) {
				$r = array();
				if ($page['url']) {
					if ($page['isCurrent']) {
						$r['PAGE_CLASS'] = 'active';
					}
					$r['PAGE_URL'] = jomresURL($page['url']);
				} else {
					$r['PAGE_CLASS'] = 'disabled';
					$r['PAGE_URL'] = 'javascript:void();';
				}

				$r['PAGE_NUMBER'] = $page['num'];
				$pages_output[] = $r;
			}

			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('first_output', $first_output);
			$tmpl->addRows('last_output', $last_output);
			$tmpl->addRows('prev_output', $prev_output);
			$tmpl->addRows('next_output', $next_output);
			$tmpl->addRows('pages_output', $pages_output);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('list_properties_pagination.html');
			$pagination = $tmpl->getParsedTemplate();

			return array('PAGINATION' => $pagination, 'current_page' => $current_page);
		}

		/**
		 * Must be included in every mini-component.
		#
		 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
		 */

		public function getRetVals()
		{
			return null;
		}
	}
