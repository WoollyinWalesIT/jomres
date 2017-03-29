<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.28
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000viewproperty
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = (int) $componentArgs[ 'property_uid' ];
        } elseif (isset($_REQUEST['property_uid'])) {
            $property_uid = (int) $_REQUEST['property_uid'];
        } else {
            return;
        }

        if (!user_can_view_this_property($property_uid)) {
            return;
        }

        $customTextObj = jomres_singleton_abstract::getInstance('custom_text');
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

        $mrConfig = getPropertySpecificSettings($property_uid);
        if ($mrConfig['showOnlyAvailabilityCalendar'] == '1') {
            $componentArgs[ 'property_uid' ] = $property_uid;
            if ($mrConfig['singleRoomProperty'] == '1') {
                echo $MiniComponents->specificEvent('06000', 'srp_calendar', array('output_now' => false, 'property_uid' => $property_uid, 'months_to_show' => 24));
            } else {
                echo $MiniComponents->triggerEvent('00018', $componentArgs);
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

        //show property header
        property_header($property_uid);

        $output = array();
        $pageoutput = array();

        //trigger point before the property details
        $MiniComponents->triggerEvent('00015', array('property_uid' => $property_uid));

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
        if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
            if ($mrConfig[ 'showAvailabilityCalendar' ] == 1) {
                $output['INLINE_CALENDAR'] = $MiniComponents->specificEvent('06000', 'ui_availability_calendar', array('output_now' => false, 'property_uid' => $property_uid));
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
        
		/* if (!empty($mappinglink)) {
            $link = array();

            if (filter_var($mappinglink, FILTER_VALIDATE_URL) === true) {
                $link[ 'LINK' ] = jomresURL($mappinglink);
                $link [ 'TEXT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', false, false);
                $mappinglink[ ] = $link;
            }
        } */

        //booking link
        if ($mrConfig[ 'visitorscanbookonline' ] == '1' && $jrConfig[ 'show_booking_form_in_property_details' ] != '1' && $mrConfig[ 'is_real_estate_listing' ] == 0) {
            $link = array();
            $url = get_booking_url($property_uid);
            if ((($mrConfig[ 'fixedArrivalDateYesNo' ] == '1' || $mrConfig[ 'fixedPeriodBookings' ] == '1')) && !isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ])) { // We'll add an invalid arrival date if the fixed arrival date setting is set to Yes. This way we can force the booking engine to see the arrival date is wrong and it'll rebuild the available rooms list, which it doesn't if the date is correct when coming from the Book a room link.
            $url .= '&amp;arrivalDate=2009-01-01';
            }
            if ($jrConfig[ 'useSSLinBookingform' ] == '1') {
                $url = jomresURL($url, 1);
            } else {
                $url = jomresURL($url);
            }

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
        if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
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
        $output[ 'PRINT_ICON' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/Printer.png';
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

        //set content/tabs that will be displayed inline
        $standalone_elements = array();
        if ($jrConfig[ 'property_details_in_tabs' ] == '0' && !isset($_REQUEST[ 'jr_printable' ])) {
            $standalone_elements = array(
                'TABCONTENT_01_MAIN_DETAILS',
                'TABCONTENT_01_MORE_INFO',
                'TABCONTENT_02_BOOKINGFORM',
                'TABCONTENT_02_MAP',
                'TABCONTENT_03_REVIEWS',
                'TABCONTENT_06_EXTRAS',
                );
        }

        //generate the tabs
        $tmpl = new patTemplate();

        if (count($MiniComponents->miniComponentData[ '00035' ]) > 0) {
            $tab_titles = array();
            $tab_contents = array();
            $tab_active = false;
            foreach ($MiniComponents->miniComponentData[ '00035' ] as $key => $tabs) {
                if ($tabs != '') {
                    if (!in_array(strtoupper($key), $standalone_elements)) {
                        if ($tabs[ 'TAB_ANCHOR' ] != '' && $tabs[ 'TAB_TITLE' ] != '' && $tabs[ 'TAB_CONTENT' ] != '') {
                            if (!$tab_active) {
                                $tab_class = 'active';
                                $tab_active = true;
                            } else {
                                $tab_class = '';
                            }

                            $content = $tabs[ 'TAB_CONTENT' ];
                            $title = $tabs[ 'TAB_TITLE' ];

                            if (isset($tabs[ 'TAB_ID' ])) {
                                $tab_id = $tabs[ 'TAB_ID' ];
                            } else {
                                $tab_id = $tabs[ 'TAB_TITLE' ];
                            }

                            $tab_titles[ ] = array('TAB_ANCHOR' => $tabs[ 'TAB_ANCHOR' ], 'TAB_TITLE' => $title, 'ACTIVE' => $tab_class, 'TAB_ID' => $tab_id);
                            $tab_contents[ ] = array('TAB_CONTENT' => $content, 'TAB_TITLE' => $title, 'TAB_ANCHOR' => $tabs[ 'TAB_ANCHOR' ], 'ACTIVE' => $tab_class);
                            $output[ strtoupper($key.'_tabtitle') ] = $title;
                            $output[ strtoupper($key.'_tab_content') ] = $content;
                        }
                    } else {
                        if (strtoupper($key) == 'TABCONTENT_06_EXTRAS') {
                            $extras_output [0][ strtoupper($key).'_CONTENT' ] = $tabs[ 'TAB_CONTENT' ];
                            $extras_output [0][ strtoupper($key).'_TITLE' ] = $tabs[ 'TAB_TITLE' ];
                            $extras_output [0][ strtoupper($key).'_ANCHOR' ] = $tabs[ 'TAB_ANCHOR' ];

                            $tmpl->addRows('extras_output', $extras_output);
                        } else {
                            $output [ strtoupper($key).'_CONTENT' ] = $tabs[ 'TAB_CONTENT' ];
                            $output [ strtoupper($key).'_TITLE' ] = $tabs[ 'TAB_TITLE' ];
                            $output [ strtoupper($key).'_ANCHOR' ] = $tabs[ 'TAB_ANCHOR' ];
                        }
                    }
                }
            }
            $tmpl->addRows('tabs_titles', $tab_titles);
            $tmpl->addRows('tabs_content', $tab_contents);
        }

        //all output is built by now, so let`s display the page
        $pageoutput[] = $output;

        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('bookinglink', $bookinglink);

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
            if ($jrConfig[ 'property_details_in_tabs' ] == '1') {
                $tmpl->readTemplatesFromInput('composite_property_details.html');
            } else {
                $tmpl->readTemplatesFromInput('composite_property_details_notabs.html');
            }
        }

        $tmpl->displayParsedTemplate();

        //trigger point after the property details
        $MiniComponents->triggerEvent('00016', array('property_uid' => $property_uid));
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT');
        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL');
        $output[ ] = jr_gettext('_JOMRES_PATHWAY_PROPERTYDETAILS', '_JOMRES_PATHWAY_PROPERTYDETAILS');
        $output[ ] = jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION');
        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE');
        $output[ ] = jr_gettext('_JOMRES_FRONT_SLIDESHOW', '_JOMRES_FRONT_SLIDESHOW');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS');

        $output[ ] = jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS');
        $output[ ] = jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS');
        $output[ ] = jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE');
        $output[ ] = jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE');
        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY');
        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM', '_JOMRES_FRONT_MR_MENU_BOOKAROOM');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK');
        $output[ ] = jr_gettext('_JOMRES_FRONT_GALLERYLINK', '_JOMRES_FRONT_GALLERYLINK');
        $output[ ] = jr_gettext('_JOMRES_FRONT_SLIDESHOW', '_JOMRES_FRONT_SLIDESHOW');
        $output[ ] = jr_gettext('_JOMRES_FRONT_TARIFFS', '_JOMRES_FRONT_TARIFFS');

        $output[ ] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS');

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
