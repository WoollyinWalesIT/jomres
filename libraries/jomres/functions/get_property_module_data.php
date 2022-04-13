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

// Intended as a utility function used by Jomres modules to display information about a property in modules
	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 */
	function get_property_module_data($property_uid_array, $alt_template_path = '', $alt_template_name = '', $vertical = false)
	{
		// for testing
		//$property_uid_array = array(1,12,43,14);
		//add_gmaps_source();

		output_ribbon_styling();

		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

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

		foreach ($property_uid_array as $property_uid) {
			if ($property_uid > 0) {
				$property_data = $current_property_details->multi_query_result[ $property_uid ];

				$property_data[ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);

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

				$jomres_ribbon_generator = new jomres_ribbon_generator( $property_uid );

				if ( jomres_bootstrap_version() == '5' ) {

					if ((int)$property_data['NUMBER_OF_REVIEWS'] > 0) {   // For Joomla 4 BS5 template sets
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
								jomres_badge(	$new_listing_blub , 'warning')
						]];
						$tmpl = new patTemplate();
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
						$tmpl->readTemplatesFromInput('list_properties_reviews_section_no_reviews.html');
						$tmpl->addRows('reviews_button', $no_reviews_output_button);
						$property_data['REVIEWS_SECTION'] = $tmpl->getParsedTemplate();
					}
				}

				$property_data['RIBBON'] = $jomres_ribbon_generator->generate_html();

				$mrConfig = getPropertySpecificSettings($property_uid);

				if ( $mrConfig['hide_local_address'] == '1' ) {
					$property_data[ 'property_street' ] =  jr_gettext('HIDDEN_ADDRESS_PLACEHOLDER', 'HIDDEN_ADDRESS_PLACEHOLDER', false);
				}

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

				$property_data[ 'PROPERTY_DESCRIPTION' ] = ($jomres_markdown->get_markdown($current_property_details->property_description));

				$property_data[ 'PRICE_PRE_TEXT' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRE_TEXT' ];
				$property_data[ 'PRICE_PRICE' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRICE' ];
				$property_data[ 'PRICE_POST_TEXT' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'POST_TEXT' ];

				$property_data[ 'PROPERTY_UID' ] = $property_uid;


				$property_data[ 'LIVE_SITE' ] = get_showtime('live_site');
				$property_data[ 'MOREINFORMATION' ] = jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', $editable = false, true);
				$property_data[ 'QUICKINFORMATION' ] = jr_gettext('_JOMRES_QUICK_INFO', '_JOMRES_QUICK_INFO', $editable = false, true);
				$property_data[ 'MOREINFORMATIONLINK' ] = get_property_details_url($property_uid);

				$property_data[ 'STARSIMAGES' ] = $MiniComponents->specificEvent('06000', 'show_property_stars', array('property_uid' => $property_uid , 'output_now' => false ));

				$property_data[ 'SUPERIOR' ] = '';
				if ($property_data[ 'superior' ] == 1) {
					$property_data[ 'SUPERIOR' ] = '<img src="'.JOMRES_IMAGES_RELPATH.'superior.png" alt="superior" border="0" />';
				}
				if ($property_data['cat_id'] > 0 ) {
					$jomres_property_categories->get_property_category($property_data['cat_id'] );
					$property_data["PROPERTY_CATEGORY"]		= $jomres_property_categories->title;
				} else {
					$property_data["PROPERTY_CATEGORY"]		= '&nbsp;';
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

				if (isset($current_property_details->multi_query_result[ $property_uid ][ 'room_features' ]) && !empty($current_property_details->multi_query_result[ $property_uid ][ 'room_features' ])) {
					$tmpl->addRows('room_features', $current_property_details->multi_query_result[ $property_uid ][ 'room_features' ]);
				}

				if ($alt_template_name != '') {
					$tmpl->readTemplatesFromInput($alt_template_name);
				} else {
					if (using_bootstrap() && jomres_bootstrap_version() == '3' && $vertical) {
						$tmpl->readTemplatesFromInput('basic_module_output_vertical.html');
					} else {
						$tmpl->readTemplatesFromInput('basic_module_output.html');
					}
				}
				$res[ $property_uid ][ 'template' ] = $tmpl->getParsedTemplate();
				$res[ $property_uid ][ 'data' ] = $property_data;
			}
		}

		return $res;
	}
