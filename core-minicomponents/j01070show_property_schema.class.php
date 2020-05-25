<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.5
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
     * Generates significant information used in microdata, and then calls the relevant schema template to show the schema. The trigger number 01070 causes the schema to be shown after the property header template is output.
     *
     * TODO : Remove microdata from property_header.html
	 * 
	 */

class j01070show_property_schema
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

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}

		if ($property_uid == 0) {
			return;
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}
		
		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$mrConfig = getPropertySpecificSettings($property_uid);

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
		$basic_room_details->get_all_rooms($property_uid);
		
		$this->getTariffRanges($property_uid) ;
		
		$output = array();
		$pageoutput = array();

		//property image
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_images($property_uid, array('property'));
		$jomres_media_centre_images->get_images($property_uid, array('slideshow'));
		$jomres_media_centre_images->get_images($property_uid, array('rooms', 'room_features'));
		
		$output[ 'IMAGELARGE' ] = $jomres_media_centre_images->images ['property'][0][0]['large'];
		$output[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images ['property'][0][0]['medium'];
		$output[ 'IMAGETHUMB' ] = $jomres_media_centre_images->images ['property'][0][0]['small'];

		//property features
		$pFeatures = array();
		if (!empty($current_property_details->features)) {
			foreach ($current_property_details->features as $feature_id=>$f) {
				$pFeature = array();
				$pFeature[ 'NAME' ] = $f[ 'abbv' ];
				$pFeatures[] = $pFeature;
			}
		}

		if (!empty($current_property_details->room_types)) {
			$prices = array();
			$room_types = array();
			foreach ($current_property_details->room_types as $key => $val) {
				if (isset($current_property_details->this_property_room_classes[$key])) {
					$room_type[ 'ROOM_TYPE_TEXT' ] = $current_property_details->this_property_room_classes[$key]['abbv'];
					$room_type[ 'ROOM_TYPE_COUNTER' ] = count($current_property_details->rooms_by_type[$key]);

					if (isset($this->roomTypePriceRanges[$key])) {
						$prices = $this->roomTypePriceRanges[$key];
					} 
				}
				
				if ( isset($room_type)) {
					$room_types[] = $room_type;
				}
				
			}
		}

		$slideshow_images = array();
		if (!empty($jomres_media_centre_images->images ['slideshow'])) {
			foreach ($jomres_media_centre_images->images ['slideshow'] as $images ) {
				foreach ($images as $image ) {
					$basename = basename($image['medium']);
					$bang = explode ( "." , $basename , -1 );
					$word_string = implode ( "_" , $bang );
					$words = explode( "_" , $word_string ) ;

					$s = array();
					$s['ALT'] = '';
					$s['IMAGE']	= $image['medium'];
					foreach ( $bang as $word ) {
						$s['ALT']	.= $word;
					}
					
					$slideshow_images[] = $s;
				}

			}
		}
		
		$output["LOWEST_PRICE"] ='';
		$output["HIGHEST_PRICE"] = '';
		
		if ( !empty($this->roomTypePriceRanges)) {
			$output["LOWEST_PRICE"] = min($this->roomTypePriceRanges); // Either I'm going crackers, or there's something weird in PHP-land. My installation is throwing the highest for min() and the lowest for max(). I'm going to leave these with the theoretically correct code, even if my tests produce the wrong results, and wait to see if there's any feedback. 
			$output["HIGHEST_PRICE"] = max($this->roomTypePriceRanges);
		}

		
		$short_property_description = jomres_decode(jr_substr(strip_tags($current_property_details->property_description), 0, 200)).'...';

		//property details
		$output[ 'STARS' ] = $current_property_details->stars;
		$output[ 'PROPERTY_NAME' ] = $current_property_details->property_name;
		$output[ 'STREET' ] = $current_property_details->property_street;
		$output[ 'TOWN' ] = $current_property_details->property_town;
		$output[ 'REGION' ] = $current_property_details->property_region;
		$output[ 'COUNTRY' ] = $current_property_details->property_country;
		$output[ 'POSTCODE' ] = $current_property_details->property_postcode;
		$output[ 'TELEPHONE' ] = $current_property_details->property_tel;
		$output[ 'WHATSAPP_TELEPHONE' ] = str_replace( array ( "+" , "00") , "" , $current_property_details->property_tel);
		$output[ 'FAX' ] = $current_property_details->property_fax;
 
		$user_can_view_address = true;
		if ( $mrConfig['hide_local_address'] == '1' ) {
			$user_can_view_address = false;
		}

		if ( $mrConfig['hide_local_address'] == '1' && $thisJRUser->id > 0 ) {
			$query = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int)$thisJRUser->id."' AND `property_uid`= $property_uid LIMIT 1";
			$xistingGuests = doSelectSql($query);
			if (!empty($xistingGuests)) {
				$user_can_view_address = true;
			}
		}
		
		if ( !$user_can_view_address ) {
			$output[ 'STREET' ] =  jr_gettext('HIDDEN_ADDRESS_PLACEHOLDER', 'HIDDEN_ADDRESS_PLACEHOLDER', false);
		}
		
		$output['PROPERTY_LAT'] = $current_property_details->lat;
		$output['PROPERTY_LONG'] = $current_property_details->long;
		$output['SHORT_PROPERTY_DESCRIPTION'] = $short_property_description;
		
		
		
		//property contact details override
		if ((int) $jrConfig['override_property_contact_details'] == 1) {
			if ($jrConfig['override_property_contact_tel'] != '') {
				$output[ 'TELEPHONE' ] = str_replace("&#38;#43;" , "+" , $jrConfig['override_property_contact_tel'] );
			}

			if ($jrConfig['override_property_contact_fax'] != '') {
				$output[ 'FAX' ] = str_replace("&#38;#43;" , "+" , $jrConfig['override_property_contact_fax'] ); 
			}
		}

		$output[ 'DIRECT_URL' ] = get_property_details_url($property_uid);

		jr_import('jomres_reviews');
		$Reviews = new jomres_reviews();
		$Reviews->property_uid = $property_uid;
		$itemRating = $Reviews->showRating($property_uid);
		$itemReviews = $Reviews->showReviews($property_uid);
		$allReviews = $Reviews->get_all_reviews_index_by_property_uid(); 
		$propertyReviews = array();
		if (isset($allReviews[$property_uid])) {
			$propertyReviews = $allReviews[$property_uid];
		}
		
		
		$reviews = array();
		if (!empty($propertyReviews)) {
			foreach ( $propertyReviews as $review ) {
				$r = array();
				
				$r['ITEMREVIEWED']		=  $output[ 'PROPERTY_NAME' ];
				$r['RATINGVALUE']		=  $review[ 'rating' ];
				$r['BESTRATING']		=  10;
				$r['IMAGEMEDIUM']		=  $output[ 'IMAGEMEDIUM' ];
				
				if ( !isset($review->user_name) ||  $review->user_name == null ) {
					$r['AUTHOR']		=  jr_gettext('ANONYMOUS', 'ANONYMOUS', false);
				} else {
					$r['AUTHOR']		=  $review[ 'user_name' ];
				}
				
				$r[ 'STREET' ]			= $output[ 'STREET' ];
				$r[ 'TOWN' ]			= $output[ 'TOWN' ];
				$r[ 'REGION' ]			= $output[ 'REGION' ];
				$r[ 'COUNTRY' ]			= $output[ 'COUNTRY' ];
				$r[ 'POSTCODE' ]		= $output[ 'POSTCODE' ];
				$r[ 'TELEPHONE' ]		= $output[ 'TELEPHONE' ];
				
				$r[ 'LOWEST_PRICE' ]	= $output[ 'LOWEST_PRICE' ];
				$r[ 'HIGHEST_PRICE' ]	= $output[ 'HIGHEST_PRICE' ];
				
				$r['REVIEWBODY']		=  $review[ 'review_title' ]." ". $review[ 'review_description' ]." ". $review[ 'pros' ]." ". $review[ 'cons' ];
	
				$reviews[]= $r;
			}
		}
		

		$individualRatings = array ();
		if (isset($itemReviews['fields']) && !empty($itemReviews['fields'])) {
			foreach ($itemReviews['fields'] as $review ) {
				$individualRatings[] = $review['rating'];
			}
		}

		$ratings = array();
		
		if (!empty($individualRatings)) {
			$ratings = array();
			$ratings[0]['PROPERTY_NAME'] = $output[ 'PROPERTY_NAME' ];
			$ratings[0]['RATINGVALUE'] = $itemRating["avg_rating"];
			$ratings[0]['REVIEWCOUNT'] = $itemRating["counter"];
			$ratings[0]['BESTRATING'] = max($individualRatings);
			$ratings[0]['WORSTRATING'] = min($individualRatings);
		}

		
		
		$query = 'SELECT `rates_uid`,`rate_title`,`rate_description`,`validfrom`,`validto`,
			`roomrateperday`,`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
			`ignore_pppn`,`allow_ph`,`allow_we`
			FROM #__jomres_rates WHERE property_uid = ' .$property_uid.' ORDER BY rate_title,roomclass_uid,validto';
		$tariffsList = doSelectSql($query);
		
		jr_import('jomres_markdown');
		$jomres_markdown = new jomres_markdown();
		
		$room_type_images = array();
		
		if (!empty($basic_room_details->rooms)) {
			$room_rows = array();

			foreach ($basic_room_details->rooms as $room) {
			//	if ($room['room_classes_uid'] == $room_classes_uid || $room_classes_uid == "*" ) {
					$r = array();
					$room_type_id = $room['room_classes_uid'];
					

					$r[ 'ROOMNAME' ] = $room['room_name'];
					$r[ 'ROOMNUMBER' ] = stripslashes($room['room_number']);
					$r[ 'ROOMFLOOR' ] = stripslashes($room['room_floor']);
					$r[ 'MAXPEOPLE' ] = $room['max_people'];
					$r[ 'BED' ] = $current_property_details->room_types[$room_type_id]['abbv'];

					$r[ 'IMAGEMEDIUM' ] = JOMRES_IMAGES_RELPATH.'noimage.gif';

					if (isset($jomres_media_centre_images->images['rooms']) && $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['large'] != '') {
						$r[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['medium'];
					}

					$room_type_images[$room_type_id] = $r[ 'IMAGEMEDIUM' ];
					
					$r[ 'TAGLINE' ] = $room['tagline'];
					$r[ 'DESCRIPTION' ] = $jomres_markdown->get_markdown($room['description']);

					$room_rows[ ] = $r;
				//	}
				}
			}
			

		
		$query = 'SELECT `tarifftype_id`,`tariff_id`  FROM #__jomcomp_tarifftype_rate_xref  WHERE `property_uid` = '.(int) $property_uid;
		$result = doSelectSql($query);
		
		$tariff_tarifftypes_xref = array();
		
		if (!empty($result)) {
			foreach ($result as $r) {
				$tariff_tarifftypes_xref[ $r->tariff_id ] = $r->tarifftype_id;
			}
		}

		$currency_code = $mrConfig['property_currencycode'];
		$currency_codes = jomres_singleton_abstract::getInstance('currency_codes');
		//$symbols = $currency_codes->getSymbol($converted_currencycode);
		if ($currency_codes->symbols[$currency_code]['pre'] == "" ) {
			$currency_symbol = $currency_codes->symbols[$currency_code]['post'];
		} else {
			$currency_symbol = $currency_codes->symbols[$currency_code]['pre'];
		}
		
		
		if (!empty($tariffsList)) {
			$today = date('Y/m/d');
			$date_elements = explode('/', $today);
			$unixTodaysDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			$counter = 0;
			foreach ($tariffsList as $tariff) {
				$validfrom = $tariff->validfrom;
				$validto = $tariff->validto;
				$date_elements = explode('/', $validfrom);
				$unixValidfrom = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
				$date_elements = explode('/', $validto);
				$unixValidto = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);

				if ($unixTodaysDate < $unixValidto && isset($ratings[0]) ) {

					$r = $ratings[0];
					
					$r[ 'PROPERTY_NAME' ] = $output[ 'PROPERTY_NAME' ];
					$r[ 'DIRECT_URL' ] = $output[ 'DIRECT_URL' ];
					$r['CURRENCY_CODE'] = $currency_code;
					$r['CURRENCY_SYMBOL'] = $currency_symbol;
					$r['SKU'] = $tariff->rates_uid;
					
					
					if (isset($tariff_tarifftypes_xref[ $tariff->rates_uid ])) {
						$r[ 'TITLE' ] = jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID'.$tariff_tarifftypes_xref[ $tariff->rates_uid ], stripslashes($tariff->rate_title));
					} else {
						$r[ 'TITLE' ] = jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE'.$tariff->rates_uid, stripslashes($tariff->rate_title));
					}
					
					$r[ 'DESC' ] = jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFDESC'.$tariff->rates_uid, stripslashes($tariff->rate_description));
					$r[ 'ROOMCLASSABBV' ] = $current_property_details->room_types[$tariff->roomclass_uid]['abbv'];

					$r[ 'HMINPEEPS' ] 	= jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS', '_JOMRES_FRONT_TARIFFS_MINPEEPS');
					$r[ 'HMAXPEEPS' ] 	= jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS', '_JOMRES_FRONT_TARIFFS_MAXPEEPS');
					$r[ 'MINPEOPLE' ] = $tariff->minpeople;
					$r[ 'MAXPEOPLE' ] = $tariff->maxpeople;

					$r[ 'HSTARTS' ] 	= jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS', '_JOMRES_FRONT_TARIFFS_STARTS');
					$r[ 'HENDS' ] 		= jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS', '_JOMRES_FRONT_TARIFFS_ENDS');
					$r[ 'VALIDFROM' ]	= outputDate($tariff->validfrom);
					$r[ 'RAW_VALIDFROM' ]	= str_replace("/", "-" , $tariff->validfrom );
					$r[ 'VALIDTO' ]		= outputDate($tariff->validto);
					$r[ 'RAW_VALIDTO' ]	= str_replace("/", "-" , $tariff->validto );

					$r[ 'HMINDAYS' ] 	= jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS', '_JOMRES_FRONT_TARIFFS_MINDAYS');
					$r[ 'HMAXDAYS' ] 	= jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS', '_JOMRES_FRONT_TARIFFS_MAXDAYS');
					$r[ 'MINDAYS' ] = $tariff->mindays;
					$r[ 'MAXDAYS' ] = $tariff->maxdays;

					if ($mrConfig[ 'prices_inclusive' ] == 1) {
						$r['ROOMRATEPERDAY'] = $tariff->roomrateperday;
					} else {
						$r['ROOMRATEPERDAY'] = $current_property_details->get_gross_accommodation_price($tariff->roomrateperday, $property_uid);
					}

					if ($tariff->allow_we == '0') {
						$r[ 'NOTWEEKENDS' ] = jr_gettext('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', '_JOMRES_FRONT_TARIFFS_NOTWEEKEND');
					}
					
					$r['ROOM_TYPE_IMAGE'] = $room_type_images[$tariff->roomclass_uid];
					$tariff_deets[ ] = $r;
				}
			}
		}

		
		if ($mrConfig[ 'singleRoomProperty' ] == '1') {
			$template = 'schema_srp.html';
		} else {
			$template = 'schema_mrp.html';
		}


		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();

		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('pfeatures', $pFeatures);
		if (!empty($room_types)) {
			$tmpl->addRows('room_types', $room_types);
		}
		
		$tmpl->addRows('slideshow_images', $slideshow_images);

		if (!empty($room_rows)) {
			$tmpl->addRows('room_rows', $room_rows);
		}

		if (!empty($tariff_deets)) {
			$tmpl->addRows('tariff_deets', $tariff_deets);
		}
		
		
		if (!empty($ratings)) {
			$tmpl->addRows('ratings', $ratings);
		}
		
		if (!empty($reviews)) {
			$tmpl->addRows('reviews', $reviews);
		}

		$tmpl->readTemplatesFromInput($template);
		$tmpl->displayParsedTemplate();

		
	}

    /**
     * @param $property_uid
     * @return array
     * @throws Exception
     */
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
				$this->roomTypePriceRanges[] = output_price($val[0]);
			} else {
				$this->roomTypePriceRanges[] = output_price(max($val)); 
				$this->roomTypePriceRanges[] = output_price(min($val)); 
			}
		}
	}


    /**
     * @return null
     */
    public function getRetVals()
	{
		return null;
	}
}
