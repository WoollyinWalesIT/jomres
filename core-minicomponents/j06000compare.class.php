<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
     * Builds the property comparison page from the list properties page
	 * 
	 */

class j06000compare
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
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
					'task' => 'compare',
					'arguments' => array(0 => array(
							'argument' => 'property_uids',
							'arg_info' => '_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS',
							'arg_example' => '12,8,7',
							),
						),
					'info' => '_JOMRES_SHORTCODES_06000COMPARE',
				);

			return;
		}

		//add_gmaps_source();
		$property_uids = jomresGetParam($_REQUEST, 'property_uids', '');

		// Clean them sukkas up
		if ($property_uids != '') {
			$bang = explode(',', $property_uids);
			$tmp = array();
			foreach ($bang as $p) {
				if ((int) $p > 0) {
					$tmp[ ] = (int) $p;
				}
			}
			$property_uids = $tmp;
		} else {
			$property_uids = array();
		}

		$output = array();
		$output[ '_JOMRES_RETURN_TO_RESULTS' ] = jr_gettext('_JOMRES_RETURN_TO_RESULTS', '_JOMRES_RETURN_TO_RESULTS', false, false);
		$output[ 'RETURN_TO_RESULTS_LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=search');

		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', false, false);
		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false, false);
		$output[ '_JOMRES_FRONT_PTYPE' ] = jr_gettext('_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false, false);
		$output[ '_JOMRES_SORTORDER_STARS' ] = jr_gettext('_JOMRES_SORTORDER_STARS', '_JOMRES_SORTORDER_STARS', false, false);
		$output[ '_JOMRES_TARIFFSFROM' ] = jr_gettext('_JOMRES_TARIFFSFROM', '_JOMRES_TARIFFSFROM', false, false);
		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', false, false);

		if (!empty($property_uids)) {
			$tick = JOMRES_IMAGES_RELPATH.'jomresimages/small/Tick.png';
			$cross = JOMRES_IMAGES_RELPATH.'jomresimages/small/Cancel.png';

			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data_multi($property_uids);

			$jomres_property_list_prices = jomres_singleton_abstract::getInstance('jomres_property_list_prices');
			$jomres_property_list_prices->gather_lowest_prices_multi($property_uids);

			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images_multi($property_uids, array('property'));

			$featuresArray = array();
			$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
			$propertyFeaturesList = doSelectSql($query);
			foreach ($propertyFeaturesList as $f) {
				$hotel_feature_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int) $f->hotel_features_uid, stripslashes($f->hotel_feature_abbv), false, false);
				$hotel_feature_full_desc = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int) $f->hotel_features_uid, stripslashes($f->hotel_feature_full_desc), false, false);
				$featuresArray[ $f->hotel_features_uid ] = array('hotel_feature_abbv' => $hotel_feature_abbv, 'hotel_feature_full_desc' => $hotel_feature_full_desc, 'image' => $f->image);
			}

			$query = 'SELECT id,ptype FROM #__jomres_ptypes';
			$ptypes = doSelectSql($query);
			$property_types = array();
			foreach ($ptypes as $p) {
				$property_types[ $p->id ] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPES'.(int) $p->id, $p->ptype, false, false);
			}

			$no_image_image = JOMRES_IMAGES_RELPATH.'noimage.gif';

			// We need to find out which features are used by all properties found in the search results
			$all_used_features = array();
			foreach ($current_property_details->multi_query_result as $property) {
				$propertyFeaturesArray = explode(',', ($property[ 'property_features' ]));
				if (!empty($propertyFeaturesArray)) {
					foreach ($propertyFeaturesArray as $v) {
						if ($v > 0) {
							$all_used_features[ $v ] = $v;
						}
					}
				}
			}

			$rows = array();
			foreach ($current_property_details->multi_query_result as $property_uid => $property) {
				$r = $property;
				$r[ 'PROPERTY_UID' ] = $property_uid;
				$Args = array('property_uid' => $property_uid, 'width' => '119', 'height' => '95', 'disable_ui' => true);
				$MiniComponents->specificEvent('01050', 'x_geocoder', $Args);
				$r[ 'MAP' ] = $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];

				if (isset($jomres_property_list_prices->lowest_prices[$property_uid])) {
					$r[ 'PRICE_PRE_TEXT' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRE_TEXT' ];
					$r[ 'PRICE_PRICE' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'PRICE' ];
					$r[ 'PRICE_POST_TEXT' ] = $jomres_property_list_prices->lowest_prices[$property_uid][ 'POST_TEXT' ];
				}


				$property_image = JOMRES_IMAGES_RELPATH.'noimage.gif';
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.'_property_'.$property_uid.'.jpg')) {
					$property_image = JOMRES_IMAGELOCATION_RELPATH.$property_uid.'_property_'.$property_uid.'.jpg';
				}

				$jomres_media_centre_images->get_images($property_uid, array('property'));
				$r[ 'IMAGETHUMB' ] = $jomres_media_centre_images->images ['property'][0][0]['small'];
				$r[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images ['property'][0][0]['medium'];

				$propertyFeaturesArray = explode(',', ($property[ 'property_features' ]));
				if (!empty($propertyFeaturesArray)) {
					$fs = array();
					foreach ($featuresArray as $k => $v) {
						if (in_array($k, $all_used_features)) {
							if (in_array($k, $propertyFeaturesArray)) {
								if (!using_bootstrap()) {
									$fs[ ] = array('IMAGE' => '<div class="ui-icon ui-icon-check" style="height:20px;"></div>', 'CLASS' => $class);
								} else {
									$fs[ ] = array('IMAGE' => '<i class="fa fa-check"></i>');
								}
							} else {
								$fs[ ] = array('IMAGE' => '');
							}
						}
					}
					$t = new patTemplate();
					$t->addRows('fs', $fs);
					$t->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
					$t->readTemplatesFromInput('compare_features.html');
					$r[ 'FEATURES' ] = $t->getParsedTemplate();
				}

				$r[ 'STARSIMAGES' ] = '';
				for ($i = 1; $i <= $property[ 'stars' ]; ++$i) {
					$r[ 'STARSIMAGES' ] .= '<img src="'.JOMRES_IMAGES_RELPATH.'star.png" alt="star" border="0" />';
				}

				$r[ 'LIVE_SITE' ] = get_showtime('live_site');
				$r[ 'MOREINFORMATIONLINK' ] = get_property_details_url($property_uid);
				$r[ 'MOREINFORMATION' ] = jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', $editable = false, true);
				$r[ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);
				$ptype = $property[ 'ptype_id' ];
				$r[ 'PROPERTY_TYPE' ] = $property_types[ $ptype ];

				// This is the string where the "remove from this list" url is build from
				$property_uids_url_string = '&property_uids=';
				foreach ($property_uids as $id) {
					if ($id != $property_uid) {
						$property_uids_url_string .= $id.',';
					}
				}
				$r[ '_JOMRES_REMOVE' ] = jr_gettext('_JOMRES_REMOVE', '_JOMRES_REMOVE', false, false);
				$r[ 'REMOVE_LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=compare'.$property_uids_url_string);
				$rows[ ] = $r;
			}

			$i = 0;
			$features = array();
			foreach ($featuresArray as $feature_id => $feature) {
				if (in_array($feature_id, $all_used_features)) {
					if ($i % 2) {
						$class = 'odd';
					} else {
						$class = 'even';
					}
					$features[ ] = array('FEATURE_NAME' => $feature[ 'hotel_feature_abbv' ], 'CLASS' => $class);
					++$i;
				}
			}

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('features', $features);
			$tmpl->addRows('rows', $rows);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('compare.html');
			$tmpl->displayParsedTemplate();
		} else { // Oh, the naughty little tinker, they've removed all properties from their list, we'll just send them back to the search results
			$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
			$MiniComponents->triggerEvent('01004'); // optional
			$MiniComponents->triggerEvent('01005'); // optional
			$MiniComponents->triggerEvent('01006'); // optional
			$MiniComponents->triggerEvent('01007'); // optional
			$componentArgs[ 'propertys_uid' ] = $tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ];
			$MiniComponents->triggerEvent('01010', $componentArgs); // listPropertys
		}
	}

	public function getRetVals()
	{
		return null;
	}
}
