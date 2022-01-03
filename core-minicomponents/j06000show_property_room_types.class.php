<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
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
	 * 
	 */

class j06000show_property_room_types
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'show_property_room_types',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
					),
				);

			return;
		}
		$this->retVals = '';

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}
		
		$this->property_uid = $property_uid;
		
		if ($property_uid == 0) {
			return;
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		$output_now = true;
		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool) $componentArgs[ 'output_now' ];
		}

		$mrConfig = getPropertySpecificSettings($property_uid);
		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data($property_uid);

		$this->getTariffRanges($property_uid);
		
		$output = array();

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_images($property_uid);
		$jomres_media_centre_images->get_site_images('rmtypes'); // These are administrator created room type images. If the property manager doesn't upload images for a room type (which is quite possible if they aren't given the option) then we'll "fallback" to admin created images instead. 
		
		$resource_type = 'room_types';
		
		if (!empty($basic_property_details->room_types)) {
			$room_types = array();
			$output[ '_JOMRES_SEARCH_RTYPES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', false);

			foreach ($basic_property_details->room_types as $key => $val) {
				$resource_id = $key;
				
				if (isset($jomres_media_centre_images->images [$resource_type] [$resource_id])) {
					$images = $jomres_media_centre_images->images [$resource_type] [$resource_id];
				} else {
					if ( isset($basic_property_details->this_property_room_classes[$key]) && file_exists(JOMRES_IMAGELOCATION_ABSPATH.'rmtypes/'.$basic_property_details->this_property_room_classes[$key]['image'])) {
						$images = array( array ( "large" => JOMRES_IMAGELOCATION_RELPATH.'rmtypes/'.$basic_property_details->this_property_room_classes[$key]['image']) );
					} else {
						$images = array ( array(
							"large" => $jomres_media_centre_images->multi_query_images['noimage-large'],
							"medium" => $jomres_media_centre_images->multi_query_images['noimage-medium'],
							"small" => $jomres_media_centre_images->multi_query_images['noimage-small']
						) );
					}
				}
				
				
				
				$room_type[ 'ROOM_TYPE' ] = '';
				$room_type[ 'ROOM_TYPE_TEXT' ] = '';
				$room_type[ 'ROOM_TYPE_COUNTER' ] = 0;
				if (isset($basic_property_details->this_property_room_classes[$key])) {
					$url = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_room_type&property_uid='.$property_uid.'&room_classes_uid='.$key);
					$room_type[ 'ROOM_TYPE' ] =
						jomres_makeTooltip(
							$basic_property_details->this_property_room_classes,
							$basic_property_details->this_property_room_classes[$key]['abbv'],
							$basic_property_details->this_property_room_classes[$key]['desc'],
							$images[0]['large'],
							'',
							'room_type',
							array(),
							$url
							);
					$room_type[ 'ROOM_TYPE_TEXT' ] = $basic_property_details->this_property_room_classes[$key]['abbv'];
					$room_type[ 'ROOM_TYPE_COUNTER' ] = count($basic_property_details->rooms_by_type[$key]);
					$room_type[ 'ROOM_TYPE_PAGE_URL' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_room_type&property_uid='.$property_uid.'&room_classes_uid='.$key);
					
					$room_type[ 'ROOM_TYPE_PRICE' ] = ' ??? ';
					
					if (isset($this->roomTypePriceRanges[$key])) {
						$room_type[ 'ROOM_TYPE_PRICE' ] = $this->roomTypePriceRanges[$key];
					}
				}

				$room_types[] = $room_type;
			}

			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('room_types', $room_types);
			if ($mrConfig['singleRoomProperty'] == '1') {
				$tmpl->readTemplatesFromInput('show_property_room_types_srp.html');
			} else {
				$tmpl->readTemplatesFromInput('show_property_room_types.html');
			}
			$features_template = $tmpl->getParsedTemplate();
			if ($output_now) {
				echo $features_template;
			} else {
				$this->retVals = $features_template;
			}
		} else {
			$output[ '_JOMRES_SEARCH_RTYPES' ] = '';
		}
	}

	private function getTariffRanges($property_uid) 
	{
		$this->roomTypePriceRanges = array();
		
		$today = date('Y/m/d', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
		
		$query = "SELECT `rates_uid`,`rate_title`,`roomclass_uid`,`roomrateperday`
			FROM #__jomres_rates WHERE property_uid = ".(int)$property_uid."
			AND DATE_FORMAT(`validto`, '%Y/%m/%d') >= DATE_FORMAT('".$today."', '%Y/%m/%d')
			AND roomrateperday > 0
			";

		$tariffs = doSelectSql($query);

		if (empty($tariffs)) {
			return $this->roomTypePriceRanges;
		}
		
		$this->allPropertyTariffs = array();
		
		foreach ($tariffs as $t) {
			$roomrate = $t->roomrateperday;
			$this->allPropertyTariffs[ $t->roomclass_uid ][] = $roomrate;
		}

		$to = jr_gettext( '_JOMCOMP_WISEPRICE_TO', '_JOMCOMP_WISEPRICE_TO' );

		foreach ($this->allPropertyTariffs as $key=>$val) {
			
			$val = array_unique($val);
			
			if (count($val) == 1 ) { // There's only one price for this tariff/room type combo
				$this->roomTypePriceRanges[$key] = output_price($val[0]);
			} else {
				$highest = output_price(max($val)); 
				$lowest = output_price(min($val)); 
				$this->roomTypePriceRanges[$key] = $lowest." ".$to." ".$highest;
			}
		}
	}
	
	private function get_nett_price($price)
	{
		$mrConfig = getPropertySpecificSettings($this->property_uid);
		if ($mrConfig[ 'prices_inclusive' ] == 1) {
			
			$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');
			$cfgcode = $mrConfig[ 'accommodation_tax_code' ];
			$accommodation_tax_rate = (float) $jrportal_taxrate->taxrates[ $cfgcode ][ 'rate' ];
			
			$divisor = ($accommodation_tax_rate / 100) + 1;
			$price = $price / $divisor;
		}

		return $price;
	}
	
	
	public function getRetVals()
	{
		return $this->retVals;
	}
}
