<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
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

class j06000viewproperty
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
						'task' => 'viewproperty',
						'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS',
						'arguments' =>
							array(
								0 => array(
									'argument' => 'property_uid',
									'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID',
									'arg_example' => '5',
								),
								1 => array(
									'argument' => 'view_property_template',
									'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME',
									'arg_example' => 'property_details_lux',
								),
							)
						);
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

        if ( jomres_bootstrap_version() == 5) {
            jomres_cmsspecific_addheaddata('css', JOMRES_CSS_RELPATH, 'b5vtabs.css');
        }

		$customTextObj = jomres_singleton_abstract::getInstance('custom_text');
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		jr_import('jomres_property_categories');
		$jomres_property_categories = new jomres_property_categories();

		jr_import('jomres_markdown');
		$jomres_markdown = new jomres_markdown();

		$mrConfig = getPropertySpecificSettings($property_uid);
		if ($mrConfig['showOnlyAvailabilityCalendar'] == '1') {
			
			if (isset($mrConfig[ 'CalendarMonthsToShow' ])) {
				$_REQUEST['months_to_show'] = (int)$mrConfig[ 'CalendarMonthsToShow' ];
			}

			$_REQUEST['start_month'] = 1;
			if (isset($mrConfig[ 'calstartfrombeginningofyear' ]) && !(bool)$mrConfig[ 'calstartfrombeginningofyear' ] ) {
				$_REQUEST['start_month'] = date("m");
			}
			
			 if ($mrConfig['singleRoomProperty'] == '1') {
				echo $MiniComponents->specificEvent('06000', 'srp_calendar', array('output_now' => false, 'property_uid' => $property_uid, 'months_to_show' => $_REQUEST['months_to_show'] ));
			} else {
				echo $MiniComponents->specificEvent('06000', 'mrp_calendar' , array('output_now' => false, 'property_uid' => $property_uid) );
			}

			return;
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if (!isset($jrConfig[ 'show_booking_form_in_property_details' ])) {
			$jrConfig[ 'show_booking_form_in_property_details' ] = '0';
		}

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		if ($thisJRUser->userIsManager && in_array($property_uid, $thisJRUser->authorisedProperties) && $property_uid != $thisJRUser->currentproperty) {
			$thisJRUser->set_currentproperty($property_uid);
			jomresRedirect(get_property_details_url($property_uid), '');
		}

		//property clicks counter
		if (!$thisJRUser->userIsManager) {
			propertyClicked($property_uid);
		}
		
		//trigger point before the property details
		$MiniComponents->triggerEvent('00015', array('property_uid' => $property_uid));
		
		//show property header
		property_header($property_uid);

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');

		$output = array();
		$pageoutput = array();

		$output["PROPERTY_NAME"]			= $current_property_details->multi_query_result[$property_uid]['property_name'];
		$output["PROPERTY_STREET"]			= $current_property_details->multi_query_result[$property_uid]['property_street'];
		$output["PROPERTY_TOWN"]			= $current_property_details->multi_query_result[$property_uid]['property_town'];
		$output["PROPERTY_POSTCODE"]		= $current_property_details->multi_query_result[$property_uid]['property_postcode'];
		$output["PROPERTY_REGION"]			= $current_property_details->multi_query_result[$property_uid]['property_region'];
		$output["PROPERTY_REGION_ID"]		= $current_property_details->multi_query_result[$property_uid]['property_region_id'];
		$output["PROPERTY_COUNTRY"]			= $current_property_details->multi_query_result[$property_uid]['property_country'];
		$output["PROPERTY_COUNTRY_CODE"]	= $current_property_details->multi_query_result[$property_uid]['property_country_code'];
		$output["PROPERTY_TEL"]				= $current_property_details->multi_query_result[$property_uid]['property_tel'];
		$output["PROPERTY_FAX"]				= $current_property_details->multi_query_result[$property_uid]['property_fax'];
		$output["PROPERTY_EMAIL"]			= $current_property_details->multi_query_result[$property_uid]['property_email'];
		$output["PROPERTY_TYPE"]			= $current_property_details->multi_query_result[$property_uid]['property_type'];
		$output["PTYPE_ID"]					= $current_property_details->multi_query_result[$property_uid]['ptype_id'];
		$output["PROPERTY_TYPE_TITLE"]		= $current_property_details->multi_query_result[$property_uid]['property_type_title'];
		$output["PROPERTY_LATITUDE"]		= $current_property_details->multi_query_result[$property_uid]['lat'];
		$output["PROPERTY_LONGITUDE"]		= $current_property_details->multi_query_result[$property_uid]['long'];

		$output["PROPERTY_CATEGORY"]		=$jomres_property_categories->get_property_category(  $current_property_details->multi_query_result[$property_uid]['cat_id'] );
		$output["PROPERTY_CATEGORY_ID"]		= $current_property_details->multi_query_result[$property_uid]['cat_id'];




		$output["GOOGLE_MAPS_API_KEY"]		= '';
		if ($jrConfig[ 'google_maps_api_key' ] != '') {
			$output["GOOGLE_MAPS_API_KEY"]		= $jrConfig[ 'google_maps_api_key' ];
		}

		//property slideshow
		if ($mrConfig[ 'showSlideshowInline' ] == '1') {
			$output['SLIDESHOW'] = $MiniComponents->specificEvent('06000', 'show_property_slideshow', array('output_now' => false, 'property_uid' => $property_uid));
		} else {
			$output['SLIDESHOW'] = '';
		}

		//property agent
		// Uncomment to add the agent pane to the property details page.
		$output['AGENT_DETAILS'] = $MiniComponents->specificEvent('06000', 'view_agent', array('output_now' => false, 'property_uid' => $property_uid));

		//property reviews summary
		$output['REVIEWS_SUMMARY'] = $MiniComponents->specificEvent('06000', 'show_property_reviews_summary', array('output_now' => false, 'property_uid' => $property_uid));

		//property inline availability calendar
		$output['INLINE_CALENDAR'] = '';
		
		
		$ui_calendar_requested_year = '';
		$ui_calendar_requested_month = '';
		$ui_calendar_requested_day = '';
		
		if ( isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] ) && $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] != '' ) {
			$bang = explode("/" , $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate']);
			$ui_calendar_requested_year = $bang[2];
			$ui_calendar_requested_month = $bang[1];
			$ui_calendar_requested_day = $bang[0];
		}

		
		if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
			if ($mrConfig[ 'showAvailabilityCalendar' ] == 1) {
				$output['INLINE_CALENDAR'] = $MiniComponents->specificEvent('06000', 'ui_availability_calendar', array('output_now' => false, 'property_uid' => $property_uid , "start_year" => $ui_calendar_requested_year , "start_month" => $ui_calendar_requested_month , "start_day" => $ui_calendar_requested_day ));
			}
		}

		//Property details buttons/links start
		$tariffslink = array();
		$slideshowlink = array();
		$gallerylink = array();
		$mappinglink = array();
		$bookinglink = array();
		$roomslistlink = array();

		//tariffs link
		if ($mrConfig[ 'is_real_estate_listing' ] == 0 && !get_showtime('is_jintour_property')) {
			if ($mrConfig[ 'showTariffsInline' ] == '1') {
				$link = array();
				$link[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL."&task=show_property_tariffs&property_uid=$property_uid");
				$link [ 'TEXT' ] = jr_gettext('_JOMRES_FRONT_TARIFFS', '_JOMRES_FRONT_TARIFFS', false, false);
				$tariffslink[ ] = $link;
			}
		}

		//slideshow link
		if ($mrConfig[ 'showSlideshowLink' ] == '1') {
			$link = array();
			$link[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_slideshow&property_uid='.$property_uid);
			$link [ 'TEXT' ] = jr_gettext('_JOMRES_FRONT_SLIDESHOW', '_JOMRES_FRONT_SLIDESHOW', false, false);
			$slideshowlink[ ] = $link;
		}

		//external link
		if (isset($mrConfig[ 'galleryLink' ]) && $mrConfig[ 'galleryLink' ] != '') {
			$link = array();

			$mrConfig[ 'galleryLink' ] = filter_var($mrConfig[ 'galleryLink' ], FILTER_SANITIZE_URL);

			$link[ 'GALLERYLINK' ] = preg_replace_callback("
				#((http|https|ftp)://(\S*?\.\S*?))(\s|\;|\)|\]|\[|\{|\}|,|\"|'|:|\<|$|\.\s)#i", 
				function($m) {return "'<a href=\"$m[1]\" target=\"_blank\" class=\"fg-button ui-state-default ui-corner-all\">$m[3]</a>$m[4]'";}, 
				$mrConfig[ 'galleryLink' ]);
			$gallerylink[ ] = $link;
		}

		//booking link
		if ($mrConfig[ 'visitorscanbookonline' ] == '1' && $jrConfig[ 'show_booking_form_in_property_details' ] != '1' && $mrConfig[ 'is_real_estate_listing' ] == 0) {
			$link = array();
			$url = get_booking_url($property_uid);
			if ((($mrConfig[ 'fixedArrivalDateYesNo' ] == '1' || $mrConfig[ 'fixedPeriodBookings' ] == '1')) && !isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ])) { // We'll add an invalid arrival date if the fixed arrival date setting is set to Yes. This way we can force the booking engine to see the arrival date is wrong and it'll rebuild the available rooms list, which it doesn't if the date is correct when coming from the Book a room link.
			$url .= '&amp;arrivalDate=2009-01-01';
			}
			
			$url = jomresURL($url);

			$link[ 'LINK' ] = $url;

			if ($mrConfig[ 'singleRoomProperty' ] == '1') {
				if ($mrConfig[ 'requireApproval' ] == '1') {
					$link[ 'TEXT' ] = jr_gettext('_BOOKING_CALCQUOTE', '_BOOKING_CALCQUOTE', false);
				} else {
					$link[ 'TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', false);
				}
			} else {
				if ($mrConfig[ 'requireApproval' ] == '1') {
					$link[ 'TEXT' ] = jr_gettext('_BOOKING_CALCQUOTE', '_BOOKING_CALCQUOTE', false);
				} else {
					$link[ 'TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM', '_JOMRES_FRONT_MR_MENU_BOOKAROOM', false);
				}
			}

			$bookinglink[ ] = $link;
		} else {
			$link = array();
			$link[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=$property_uid&amp;arrivalDate=2009-01-01");
			$link[ 'TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', false, false);
			$link[ 'BOOKINGLINK' ] = '<a href="'.$link[ 'LINK' ].'" class="fg-button ui-state-default ui-corner-all">'.$link[ 'TEXT' ].'</a>';
			$bookinglink[ ] = $link;
		}

		//room list link
		if ($mrConfig[ 'is_real_estate_listing' ] == 0 && !get_showtime('is_jintour_property') ) {
			if ($mrConfig[ 'showRoomsListingLink' ] == '1') {
				$link = array();
				$link[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_rooms&property_uid='.$property_uid);
				$link[ 'TEXT' ] = jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', false, false);
				$roomslistlink[ ] = $link;
			}
		}

		//contact owner link
		$link = array();
		$link[ 'LINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=contactowner&selectedProperty='.$property_uid);
		if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
			$link[ 'TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', false, false);
		} else {
			$link[ 'TEXT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', false, false);
		}
		$contactuslink[ ] = $link;

		//print link
		$output[ 'PRINT_ICON' ] = JOMRES_IMAGES_RELPATH.'jomresimages/small/Printer.png';
		$output[ 'PRINT_LINK' ] = jomresURL(get_property_details_url($property_uid,'sefsafe','&jr_printable=1&popup=1&tmpl='.get_showtime('tmplcomponent')));
		//Property details buttons/links end

		//real estate property price
		if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
			$output[ 'REAL_ESTATE_PROPERTY_PRICE' ] = output_price($current_property_details->real_estate_property_price);
		} else {
			$output[ 'REAL_ESTATE_PROPERTY_PRICE' ] = '';
		}

		//qr code
		$output['QR_CODE_DIRECTIONS'] = $MiniComponents->specificEvent('06000', 'show_property_qr_code_directions', array('output_now' => false, 'property_uid' => $property_uid));

		//get the tabs content
		if (!isset($jrConfig[ 'property_details_in_tabs' ])) {
			$jrConfig[ 'property_details_in_tabs' ] = '1';
		}

		$componentArgs[ 'property_uid' ] = $property_uid;
		$MiniComponents->triggerEvent('00035', $componentArgs);
		
		if ($mrConfig[ 'showAvailabilityCalendar' ] == 0) {
			unset($MiniComponents->miniComponentData[ '00035' ] ['tabcontent_04_availability_calendar']);
		}
 
			$standalone_elements = array();
			if ($jrConfig['property_details_in_tabs'] == '0' && !isset($_REQUEST['jr_printable'])) {
				$standalone_elements = array(
					'TABCONTENT_01_MAIN_DETAILS',
					'TABCONTENT_01_MORE_INFO',
					'TABCONTENT_02_BOOKINGFORM',
					'TABCONTENT_03_REVIEWS',
					'TABCONTENT_06_EXTRAS',
				);
			}

		if (trim($jrConfig['google_maps_api_key']) != '') {
			$standalone_elements[] = 'TABCONTENT_02_MAP';
		}
		
		//generate the tabs
		$tmpl = new patTemplate();
		
		$output['BOOKING_FORM'] = $MiniComponents->miniComponentData[ '00035' ]['tabcontent_02_bookingform'];

		//property features
		$output[ 'HFEATURES' ]	= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', false);
		$output['FEATURES']		= $MiniComponents->specificEvent('06000', 'show_property_features', array('output_now' => false, 'property_uid' => $property_uid , 'show_feature_categories' => true));

		//room types
		if ($mrConfig[ 'is_real_estate_listing' ] == 0 && $mrConfig[ 'singleRoomProperty' ] == '0' && !get_showtime('is_jintour_property')) {
			$room_type_output = [ 0 => [
				'_JOMRES_SEARCH_RTYPES'  =>
					jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', false),
				'ROOM_TYPES' =>
					$MiniComponents->specificEvent('06000', 'show_property_room_types', array('output_now' => false, 'property_uid' => $property_uid))
			]];

		} else {
			$room_type_output = array();
		}

		if ($mrConfig[ 'is_real_estate_listing' ] == 0 && $mrConfig[ 'singleRoomProperty' ] == '0' && !get_showtime('is_jintour_property')) {
			$rooms_output = array(
				0 => ['_JOMRES_COM_MR_QUICKRES_STEP2_TITLE' => jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE')]
			);
		} else {
			$rooms_output = array();
		}

		if ($mrConfig[ 'is_real_estate_listing' ] == 0 && !get_showtime('is_jintour_property')) {
			$tariffs_output = [ 0 => [ '_JOMRES_FRONT_TARIFFS' => jr_gettext('_JOMRES_FRONT_TARIFFS', '_JOMRES_FRONT_TARIFFS') ] ] ;
		} else {
			$tariffs_output = array();
		}

		if ($mrConfig[ 'is_real_estate_listing' ] == 0 && !get_showtime('is_jintour_property')) {
			$availability_output = [ 0 => [ '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY' => jr_gettext('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY') ]];
		} else {
			$availability_output = array();
		}


		$output['HPOLICIESDISCLAIMERS']	= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS');
		$output['HAVAILABILITY']		= jr_gettext('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY');
		$output['HROOMS']				= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', false, false);
		$output['HROOM_TYPES']		= jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES');
		$output['HTARIFFS']		= jr_gettext('_JOMRES_FRONT_TARIFFS', '_JOMRES_FRONT_TARIFFS');


		$output['TOWN']		= $current_property_details->property_town;
		$output['REGION']	= $current_property_details->property_region;
		$output['COUNTRY']	= $current_property_details->property_country;

		$output[ '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL' ]		= jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL');
		$output['TABCONTENT_03_CONTACT_TAB_CONTENT']	= $MiniComponents->specificEvent('06000', 'contactowner' , ['property_uid' => $property_uid , 'noshownow' => true , 'no_title' => true ]);

		$output[ 'HCHECKINTIMES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES');
		$output[ 'HAREAACTIVITIES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES');
		$output[ 'HDRIVINGDIRECTIONS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS');
		$output[ 'HAIRPORTS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS');
		$output[ 'HOTHERTRANSPORT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT');


		$output[ '_JOMRES_COM_MR_EXTRA_TITLE' ] = jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE', '_JOMRES_COM_MR_EXTRA_TITLE');

		$output[ '_JOMRES_REVIEWS' ] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS');
		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION');

		$output[ 'CHECKINTIMES' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_checkin_times));
		$output[ 'AREAACTIVITIES' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_area_activities));
		$output[ 'DRIVINGDIRECTIONS' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_driving_directions));
		$output[ 'AIRPORTS' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_airports));
		$output[ 'OTHERTRANSPORT' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_othertransport));

		if ( jomres_bootstrap_version() == '5' ) {
			unset($MiniComponents->miniComponentData['00035']['tabcontent_01_main_details']);
			unset($MiniComponents->miniComponentData['00035']['tabcontent_01_more_info']);
			unset($MiniComponents->miniComponentData['00035']['tabcontent_02_bookingform']);
			unset($MiniComponents->miniComponentData['00035']['tabcontent_03_reviews']);
			unset($MiniComponents->miniComponentData['00035']['tabcontent_04_availability_calendar']);
			unset($MiniComponents->miniComponentData['00035']['tabcontent_04_roomslist']);
			unset($MiniComponents->miniComponentData['00035']['tabcontent_05_tariffs']);
			unset($MiniComponents->miniComponentData['00035']['tabcontent_06_extras']);
		}

		// Unfortunately, in J4 this is still required
		if (!empty($MiniComponents->miniComponentData['00035'])) {
			$tab_titles = array();
			$tab_contents = array();
			$tab_active = false;
			foreach ($MiniComponents->miniComponentData['00035'] as $key => $tabs) {
				if ($tabs != '') {
					if (!in_array(strtoupper($key), $standalone_elements)) {
						if ($tabs['TAB_ANCHOR'] != '' && $tabs['TAB_TITLE'] != '' && $tabs['TAB_CONTENT'] != '') {
							if (!$tab_active) {
								$tab_class = 'active';
								$tab_active = true;
							} else {
								$tab_class = '';
							}

							$content = $tabs['TAB_CONTENT'];
							$title = $tabs['TAB_TITLE'];
							if (isset($tabs['TAB_ID'])) {
								$tab_id = $tabs['TAB_ID'];
							} else {
								$tab_id = $tabs['TAB_TITLE'];
							}

							$tab_titles[] = array('TAB_ANCHOR' => $tabs['TAB_ANCHOR'], 'TAB_TITLE' => $title, 'ACTIVE' => $tab_class, 'TAB_ID' => $tab_id);
							$tab_contents[] = array('TAB_CONTENT' => $content, 'TAB_TITLE' => $title, 'TAB_ANCHOR' => $tabs['TAB_ANCHOR'], 'ACTIVE' => $tab_class);
							$output[strtoupper($key . '_tabtitle')] = $title;
							$output[strtoupper($key . '_tab_content')] = $content;
						}
					} else {
						if (trim($jrConfig['google_maps_api_key']) != '' && strtoupper($key) == 'TABCONTENT_02_MAP') {
							$map_output = array();
							$map_output [0][strtoupper($key) . '_CONTENT'] = $tabs['TAB_CONTENT'];
							$map_output [0][strtoupper($key) . '_TITLE'] = $tabs['TAB_TITLE'];
							$map_output [0][strtoupper($key) . '_ANCHOR'] = $tabs['TAB_ANCHOR'];
							$tmpl->addRows('map_output', $map_output);
						}
						if (strtoupper($key) == 'TABCONTENT_06_EXTRAS') {
							$extras_output [0][strtoupper($key) . '_CONTENT'] = $tabs['TAB_CONTENT'];
							$extras_output [0][strtoupper($key) . '_TITLE'] = $tabs['TAB_TITLE'];
							$extras_output [0][strtoupper($key) . '_ANCHOR'] = $tabs['TAB_ANCHOR'];
							$tmpl->addRows('extras_output', $extras_output);
						} else {
							$output [strtoupper($key) . '_CONTENT'] = $tabs['TAB_CONTENT'];
							$output [strtoupper($key) . '_TITLE'] = $tabs['TAB_TITLE'];
							$output [strtoupper($key) . '_ANCHOR'] = $tabs['TAB_ANCHOR'];
						}
					}
				}
			}
			$tmpl->addRows('tabs_titles', $tab_titles);
			$tmpl->addRows('tabs_content', $tab_contents);

		}

        $output['DESCRIPTION'] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_description));

		// Doesn't make the slideshow functionality redundant, just makes the images available to the property details template if it's wanted.
		$jomres_media_centre_images->get_images($property_uid, array('slideshow'));
		$slideshow_imagesArray = $jomres_media_centre_images->images ['slideshow'] [0];
		$counter =0;

		$slideshow_images = [];
		foreach ($slideshow_imagesArray as $images) {
			$active = '';
			if ($counter == 0) {
				$active = 'active';
			}
			$slideshow_images[] = [
				'ACTIVE'				=> $active,
				'RANDOM_IDENTIFIER'		=> generateJomresRandomString(10),
				'COUNTER'				=> $counter,
				'SMALL_IMAGE'			=> $images ['small'],
				'MEDIUM_IMAGE'			=> $images ['medium'],
				'LARGE_IMAGE'			=> $images ['large'],
				'PROPERTY_NAME'			=> $output ["PROPERTY_NAME"] , // just in case we need captions
				'PROPERTY_DESCRIPTION'	=> $output ['DESCRIPTION'] ,
			];
			$counter++;
		}

        $output['SIDEBAR'] = $MiniComponents->specificEvent('06000', 'show_site_sidebar', array('output_now' => false, 'property_uid' => $property_uid, 'property_details_object' => $current_property_details ));


		//all output is built by now, so let`s display the page
		$pageoutput[] = $output;

		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('bookinglink', $bookinglink);

		$tmpl->addRows('room_type_output', $room_type_output);
		$tmpl->addRows('room_type_output_content', $room_type_output);

		$tmpl->addRows('rooms_output', $rooms_output);
		$tmpl->addRows('rooms_output_content', $rooms_output);

		$tmpl->addRows('tariffs_output', $tariffs_output);
		$tmpl->addRows('tariffs_output_content', $tariffs_output);

		$tmpl->addRows('availability_output', $availability_output);
		$tmpl->addRows('availability_output_content', $availability_output);

		if (!empty($slideshow_imagesArray)){
			$tmpl->addRows('slideshow_images', $slideshow_images);
			$tmpl->addRows('slideshow_images2', $slideshow_images); // Quite often slideshows need two sets of identical information
		}

		if ($mrConfig[ 'showSlideshowLink' ] == 1) {
			$tmpl->addRows('slideshowlink', $slideshowlink);
		}

		if ($mrConfig[ 'is_real_estate_listing' ] == 0 && $mrConfig[ 'showTariffsInline' ] == 1) {
			$tmpl->addRows('tariffslink', $tariffslink);
		}

		$tmpl->addRows('gallerylink', $gallerylink);

		if ($mrConfig[ 'singleRoomProperty' ] == '0' && $mrConfig[ 'showRoomsListingLink' ] == 1) {
			$tmpl->addRows('roomslistlink', $roomslistlink);
		}

		//$tmpl->addRows( 'mappinglink', $mappinglink );

		if ($mrConfig[ 'visitorscanbookonline' ] == '1') {
			$tmpl->addRows('contactuslink', $contactuslink);
		}

		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);

		if (isset($_REQUEST[ 'jr_printable' ])) {
			$tmpl->readTemplatesFromInput('composite_property_details_printable.html');
		} else {
			if (jomres_bootstrap_version() == '5' ) {
				if (isset($_REQUEST['view_property_template']) && $_REQUEST['view_property_template'] != '') {
					$tmpl->readTemplatesFromInput($_REQUEST['view_property_template'].'.html');
				} else {
					$tmpl->readTemplatesFromInput('property_details.html');
				}

			} else {
				if ($jrConfig[ 'property_details_in_tabs' ] == '1') {
					$tmpl->readTemplatesFromInput('composite_property_details.html');
				} else {
					$tmpl->readTemplatesFromInput('composite_property_details_notabs.html');
				}
			}
		}

		$tmpl->displayParsedTemplate();

		//trigger point after the property details
		$MiniComponents->triggerEvent('00016', array('property_uid' => $property_uid));
	}


/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return null;
	}
}
