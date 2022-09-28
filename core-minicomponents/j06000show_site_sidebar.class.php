<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
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

class j06000show_site_sidebar
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
			return;
		}
		$this->retVals = null;

		if ((int)jomres_bootstrap_version() < 5) {
			return '';
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($componentArgs) || !isset($componentArgs['property_details_object'])) {
			throw new Exception('Error, property_details_object not set');
		}

		$property_details_object = $componentArgs['property_details_object'];
		unset($property_details_object->multi_query_result); // Don't need it, let's free up some memory

		$property_uid = $property_details_object->property_uid;

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		$pageoutput = array();
		$output     = array();

		$output['PROPERTY_NAME']    = $property_details_object->property_name;
		$output['PROPERTY_REGION']  = $property_details_object->property_region;
		$output['PROPERTY_COUNTRY'] = $property_details_object->property_country;
		$output['STARS']			= $property_details_object->stars;


		$output['BUSINESS_NAME']        = $jrConfig['business_name'];
		$output['BUSINESS_VAT_NUMBER']  = $jrConfig['business_vat_number'];
		$output['BUSINESS_ADDRESS']     = $jrConfig['business_address'];
		$output['BUSINESS_STREET']      = $jrConfig['business_street'];
		$output['BUSINESS_TOWN']        = $jrConfig['business_town'];
		$output['BUSINESS_REGION']      = find_region_name($jrConfig['business_region']);
		$output['BUSINESS_COUNTRY']     = $jrConfig['business_country'];
		$output['BUSINESS_POSTCODE']    = $jrConfig['business_postcode'];
		$output['BUSINESS_TELEPHONE']   = jomres_decode($jrConfig['business_telephone']);
		$output['BUSINESS_EMAIL']       = jomres_hide_email($jrConfig['business_email']);

		
		$output['_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES']	= jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', false);
		if ($jrConfig[ 'business_languages' ] != '') {
			$business_languages = explode(",", $jrConfig[ 'business_languages' ]); // We won't ask admin to add quotes around languages, instead we'll do that ourselves
			$output['BUSINESS_LANGUAGES'] = sprintf("%s", implode(" ", $business_languages));
			;
		}

		$output['JOMRES_SITE_SIDEBAR_INSPIRATION']			= jr_gettext('JOMRES_SITE_SIDEBAR_INSPIRATION', 'JOMRES_SITE_SIDEBAR_INSPIRATION', false);
		$output['JOMRES_SITE_SIDEBAR_INSPIRATION_BLURB']	= jr_gettext('JOMRES_SITE_SIDEBAR_INSPIRATION_BLURB', 'JOMRES_SITE_SIDEBAR_INSPIRATION_BLURB', false);


		$query = 'SELECT `propertys_uid`, `published` FROM #__jomres_propertys';
		$result = doSelectSql($query);
		$output['NUMBER_OF_PROPERTIES_IN_SYSTEM'] = count($result);

		$query = 'SELECT `rating_id` FROM #__jomres_reviews_ratings';
		$result = doSelectSql($query);
		$output['NUMBER_OF_REVIEWS_IN_SYSTEM'] = count($result);

		$output['JOMRES_SITE_SIDEBAR_HELP_TITLE']					= jr_gettext('JOMRES_SITE_SIDEBAR_HELP_TITLE', 'JOMRES_SITE_SIDEBAR_HELP_TITLE', false);
		$output['JOMRES_SITE_SIDEBAR_HELP_BLURB']					= jr_gettext('JOMRES_SITE_SIDEBAR_HELP_BLURB', 'JOMRES_SITE_SIDEBAR_HELP_BLURB', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_TITLE']					= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_TITLE', 'JOMRES_SITE_SIDEBAR_WHY_TITLE', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE']			= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', 'JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1']		= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', 'JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2']		= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', 'JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE']			= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', 'JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS']	= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', 'JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS']	= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', 'JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE']			= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', 'JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT']		= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', 'JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT']		= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', 'JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', false);

		// Property uid of 0 to the contact form will send emails to the site owner's email address as configured in $jrConfig['business_email']
		$output['CONTACT_FORM']										= $MiniComponents->specificEvent('06000', 'contactowner', ['property_uid' => 0 , 'noshownow' => true ]);

		$output['JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA']		= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', 'JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', false);
		$output['JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD']		= jr_gettext('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', 'JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', false);


		$social_media_facebook		= [];
		$social_media_instagram		= [];
		$social_media_pintrest		= [];
		$social_media_linkedin		= [];
		$social_media_twitter		= [];
		$social_media_tiktok		= [];
		$social_media_whatsapp		= [];
		$social_media_youtube		= [];

		$social_meeja_platforms = get_sm_platforms();
		foreach ($social_meeja_platforms as $key => $val) {
			if (!isset($jrConfig[$key])) {
				if ($key == 'social_media_whatsapp') {
					$jrConfig[$key] = '359884339947';
				} else {
					$jrConfig[$key] = 'jomres';
				}
			}
		}

		if (isset($jrConfig['social_media_facebook']) && trim($jrConfig['social_media_facebook']) != '') {
			$social_media_facebook		= [ 0 =>
				[
					'SOCIAL_MEDIA_FACEBOOK'	=> $jrConfig['social_media_facebook'] ,
					'URL' => $social_meeja_platforms['social_media_facebook']['url'],
					'NAME' => $social_meeja_platforms['social_media_facebook']['name']
				]];
		}

		if (isset($jrConfig['social_media_instagram']) && trim($jrConfig['social_media_instagram']) != '') {
			$social_media_instagram		= [ 0 =>
			[
				'SOCIAL_MEDIA_INSTAGRAM'	=> $jrConfig['social_media_instagram'] ,
				'URL' => $social_meeja_platforms['social_media_instagram']['url'],
				'NAME' => $social_meeja_platforms['social_media_instagram']['name']
			]];
		}

		if (isset($jrConfig['social_media_pintrest']) && trim($jrConfig['social_media_pintrest']) != '') {
			$social_media_pintrest		= [ 0 =>
			[
				'SOCIAL_MEDIA_PINTREST'	=> $jrConfig['social_media_pintrest'] ,
				'URL' => $social_meeja_platforms['social_media_pintrest']['url'],
				'NAME' => $social_meeja_platforms['social_media_pintrest']['name']
			]];
		}

		if (isset($jrConfig['social_media_linkedin']) && trim($jrConfig['social_media_linkedin']) != '') {
			$social_media_linkedin		= [ 0 =>
			[
				'SOCIAL_MEDIA_LINKEDIN'	=> $jrConfig['social_media_linkedin'] ,
				'URL' => $social_meeja_platforms['social_media_linkedin']['url'],
				'NAME' => $social_meeja_platforms['social_media_linkedin']['name']
			]];
		}

		if (isset($jrConfig['social_media_twitter']) && trim($jrConfig['social_media_twitter']) != '') {
			$social_media_twitter		= [ 0 =>
			[
				'SOCIAL_MEDIA_TWITTER'	=> $jrConfig['social_media_twitter'] ,
				'URL' => $social_meeja_platforms['social_media_twitter']['url'],
				'NAME' => $social_meeja_platforms['social_media_twitter']['name']
			]];
		}

		if (isset($jrConfig['social_media_tiktok']) && trim($jrConfig['social_media_tiktok']) != '') {
			$social_media_tiktok		= [ 0 =>
			[
				'SOCIAL_MEDIA_TIKTOK'	=> $jrConfig['social_media_tiktok'] ,
				'URL' => $social_meeja_platforms['social_media_tiktok']['url'],
				'NAME' => $social_meeja_platforms['social_media_tiktok']['name']
			]];
		}

		if (isset($jrConfig['social_media_whatsapp']) && trim($jrConfig['social_media_whatsapp']) != '') {
			$social_media_whatsapp		= [ 0 =>
			[
				'SOCIAL_MEDIA_WHATSAPP'	=> $jrConfig['social_media_whatsapp'] ,
				'URL' => $social_meeja_platforms['social_media_whatsapp']['url'],
				'NAME' => $social_meeja_platforms['social_media_whatsapp']['name']
			]];
		}

		if (isset($jrConfig['social_media_youtube']) && trim($jrConfig['social_media_youtube']) != '') {
			$social_media_youtube		= [ 0 =>
			[
				'SOCIAL_MEDIA_YOUTUBE'	=> $jrConfig['social_media_youtube'] ,
				'URL' => $social_meeja_platforms['social_media_youtube']['url'],
				'NAME' => $social_meeja_platforms['social_media_youtube']['name']
			]];
		}

		if (isset($componentArgs['output_now'])) {
			$output_now = $componentArgs['output_now'];
		} else {
			$output_now = true;
		}

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);

		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('social_media_facebook', $social_media_facebook);
		$tmpl->addRows('social_media_instagram', $social_media_instagram);
		$tmpl->addRows('social_media_pintrest', $social_media_pintrest);
		$tmpl->addRows('social_media_linkedin', $social_media_linkedin);
		$tmpl->addRows('social_media_twitter', $social_media_twitter);
		$tmpl->addRows('social_media_tiktok', $social_media_tiktok);
		$tmpl->addRows('social_media_whatsapp', $social_media_whatsapp);
		$tmpl->addRows('social_media_youtube', $social_media_youtube);

		$tmpl->readTemplatesFromInput('show_site_sidebar.html');
		$template = $tmpl->getParsedTemplate();
		if ($output_now) {
			echo $template;
		} else {
			$this->retVals = $template;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}

/*
 *
 *
* $property_details_object  useful variables
 *
 *
  ["property_name"]=>
  string(11) "Hotel Valle"
  ["property_street"]=>
  string(11) "Asheldon Rd"
  ["property_town"]=>
  string(7) "Torquay"
  ["property_postcode"]=>
  string(7) "TQ1 2QS"
  ["property_region"]=>
  string(5) "Devon"
  ["property_region_id"]=>
  string(4) "1113"
  ["property_country"]=>
  string(14) "United Kingdom"
  ["property_country_code"]=>
  string(2) "GB"
  ["property_tel"]=>
  string(12) "01000 123456"
  ["property_fax"]=>
  string(12) "01000 654321"
  ["property_email"]=>
  string(21) "vince.wooll@gmail.com"
  ["published"]=>
  int(1)
  ["ptype_id"]=>
  int(1)
  ["property_type"]=>
  string(14) "propertyrental"
  ["property_type_title"]=>
  string(5) "Hotel"
  ["stars"]=>
  int(3)
  ["superior"]=>
  int(1)
  ["lat"]=>
  string(10) "51.5006800"
  ["long"]=>
  string(10) "-0.1431700"
  ["metatitle"]=>
  string(0) ""
  ["metadescription"]=>
  string(0) ""
  ["metakeywords"]=>
  string(0) ""
  ["property_features"]=>
  string(27) ",32,34,35,30,40,41,4,77,47,"
  ["property_mappinglink"]=>
  string(0) ""
  ["real_estate_property_price"]=>
  string(1) "0"
  ["property_description"]=>
  string(445) "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ["property_checkin_times"]=>
  string(445) "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ["property_area_activities"]=>
  string(445) "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ["property_driving_directions"]=>
  string(445) "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ["property_airports"]=>
  string(445) "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ["property_othertransport"]=>
  string(445) "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ["property_policies_disclaimers"]=>
  string(445) "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
  ["apikey"]=>
  string(50) "lXXSrzGDuFGoSkatqbBTgByaSCxMATTtqkzGZitBKtpsFHFHcz"
  ["approved"]=>
  int(1)
  ["permit_number"]=>
  string(0) ""
  ["completed"]=>
  int(1)
  ["cat_id"]=>
  int(1)
  ["accommodation_tax_rate"]=>
  float(20)
  ["room_types"]=>
  array(1) {
	[1]=>
	array(3) {
	  ["abbv"]=>
	  string(19) "Room Double beds xx"
	  ["desc"]=>
	  string(0) ""
	  ["image"]=>
	  string(10) "double.png"
	}
  }
  ["rooms"]=>
  array(2) {
	[1]=>
	string(1) "1"
	[2]=>
	string(1) "2"
  }
  ["rooms_by_type"]=>
  array(1) {
	[1]=>
	array(2) {
	  [0]=>
	  string(1) "1"
	  [1]=>
	  string(1) "2"
	}
  }
  ["rooms_max_people"]=>
  array(1) {
	[1]=>
	array(2) {
	  [1]=>
	  string(1) "2"
	  [2]=>
	  string(1) "2"
	}
  }
  ["this_property_room_classes"]=>
  array(4) {
	[4]=>
	array(3) {
	  ["abbv"]=>
	  string(17) "Room 4 Poster bed"
	  ["desc"]=>
	  string(0) ""
	  ["image"]=>
	  string(14) "fourposter.png"
	}
	[1]=>
	array(3) {
	  ["abbv"]=>
	  string(19) "Room Double beds xx"
	  ["desc"]=>
	  string(0) ""
	  ["image"]=>
	  string(10) "double.png"
	}
	[3]=>
	array(3) {
	  ["abbv"]=>
	  string(11) "Room Single"
	  ["desc"]=>
	  string(0) ""
	  ["image"]=>
	  string(10) "single.png"
	}
	[2]=>
	array(3) {
	  ["abbv"]=>
	  string(14) "Room Twin beds"
	  ["desc"]=>
	  string(0) ""
	  ["image"]=>
	  string(8) "twin.png"
	}
  }
  ["features"]=>
  array(9) {
	[32]=>
	array(6) {
	  ["abbv"]=>
	  string(12) "24hr service"
	  ["desc"]=>
	  string(17) "24hr Room service"
	  ["image"]=>
	  string(10) "24hour.png"
	  ["cat_id"]=>
	  int(9)
	  ["cat_title"]=>
	  string(8) "Services"
	  ["include_in_filters"]=>
	  int(1)
	}
	[34]=>
	array(6) {
	  ["abbv"]=>
	  string(16) "Bureau de change"
	  ["desc"]=>
	  string(33) "Bureau de change available onsite"
	  ["image"]=>
	  string(13) "fees_euro.png"
	  ["cat_id"]=>
	  int(9)
	  ["cat_title"]=>
	  string(8) "Services"
	  ["include_in_filters"]=>
	  int(1)
	}
	[35]=>
	array(6) {
	  ["abbv"]=>
	  string(16) "Bureau de change"
	  ["desc"]=>
	  string(33) "Bureau de change available onsite"
	  ["image"]=>
	  string(14) "fees_pound.png"
	  ["cat_id"]=>
	  int(9)
	  ["cat_title"]=>
	  string(8) "Services"
	  ["include_in_filters"]=>
	  int(1)
	}
	[30]=>
	array(6) {
	  ["abbv"]=>
	  string(8) "Elevator"
	  ["desc"]=>
	  string(8) "Elevator"
	  ["image"]=>
	  string(12) "elevator.png"
	  ["cat_id"]=>
	  int(0)
	  ["cat_title"]=>
	  string(0) ""
	  ["include_in_filters"]=>
	  int(1)
	}
	[40]=>
	array(6) {
	  ["abbv"]=>
	  string(3) "Gym"
	  ["desc"]=>
	  string(16) "Gymnasium onsite"
	  ["image"]=>
	  string(8) "gym2.png"
	  ["cat_id"]=>
	  int(0)
	  ["cat_title"]=>
	  string(0) ""
	  ["include_in_filters"]=>
	  int(1)
	}
	[41]=>
	array(6) {
	  ["abbv"]=>
	  string(11) "Hairdresser"
	  ["desc"]=>
	  string(18) "Hairdresser onsite"
	  ["image"]=>
	  string(15) "hairdresser.png"
	  ["cat_id"]=>
	  int(0)
	  ["cat_title"]=>
	  string(0) ""
	  ["include_in_filters"]=>
	  int(1)
	}
	[4]=>
	array(6) {
	  ["abbv"]=>
	  string(7) "Minibar"
	  ["desc"]=>
	  string(15) "Minibar in room"
	  ["image"]=>
	  string(20) "air_conditioning.png"
	  ["cat_id"]=>
	  int(0)
	  ["cat_title"]=>
	  string(0) ""
	  ["include_in_filters"]=>
	  int(1)
	}
	[77]=>
	array(6) {
	  ["abbv"]=>
	  string(4) "Wifi"
	  ["desc"]=>
	  string(14) "Wifi available"
	  ["image"]=>
	  string(8) "wifi.png"
	  ["cat_id"]=>
	  int(5)
	  ["cat_title"]=>
	  string(11) "Living Area"
	  ["include_in_filters"]=>
	  int(1)
	}
	[47]=>
	array(6) {
	  ["abbv"]=>
	  string(3) "WWW"
	  ["desc"]=>
	  string(25) "Internet access available"
	  ["image"]=>
	  string(12) "internet.png"
	  ["cat_id"]=>
	  int(2)
	  ["cat_title"]=>
	  string(9) "Amenities"
	  ["include_in_filters"]=>
	  int(1)
	}

 *
 */
