<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.6
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_header
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                'task' => 'show_property_header',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER',
                'arguments' => array(0 => array(
                        'argument' => 'property_uid',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID',
                        'arg_example' => '1',
                        ),
                    ),
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

        $output = array();
        $pageoutput = array();

        $output['PROPERTY_UID'] = $property_uid;
        $show_property_header = intval(jomresGetParam($_REQUEST, 'show_property_header', 1));
        if ($show_property_header == 0) {
            return;
        }

        //stars
        $stars = $current_property_details->stars;
        $starslink = '<img src="'.get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/blank.png" border="0" HEIGHT="1" hspace="10" VSPACE="1" alt="blank" />';
        if ($stars != '0') {
            $starslink = '';
            for ($i = 1; $i <= $stars; ++$i) {
                $starslink .= '<img src="'.get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/star.png" border="0" alt="star" />';
            }
            $starslink .= '';
        }

        if ($current_property_details->superior == 1) {
            $output[ 'SUPERIOR' ] = '<img src="'.get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/superior.png" alt="superior" border="0" />';
        } else {
            $output[ 'SUPERIOR' ] = '';
        }

        //property image
        $jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
        $jomres_media_centre_images->get_images($property_uid, array('property'));

        $output[ 'IMAGELARGE' ] = $jomres_media_centre_images->images ['property'][0][0]['large'];
        $output[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images ['property'][0][0]['medium'];
        $output[ 'IMAGETHUMB' ] = $jomres_media_centre_images->images ['property'][0][0]['small'];

        //property features
        $output['FEATURES'] = $MiniComponents->specificEvent('06000', 'show_property_features', array('output_now' => false, 'property_uid' => $property_uid, 'show_feature_categories' => false));

        //property room types
        $output['ROOMTYPES'] = $MiniComponents->specificEvent('06000', 'show_property_room_types', array('output_now' => false, 'property_uid' => $property_uid));

        //meta data
        if (strlen($current_property_details->metatitle) > 0) {
            jomres_cmsspecific_setmetadata('title', jomres_purify_html($current_property_details->metatitle));
        } else {
            $property_name = getPropertyName($property_uid);
            jomres_cmsspecific_setmetadata('title', jomres_purify_html($property_name));
        }

        if (strlen($current_property_details->metadescription) > 0) {
            jomres_cmsspecific_setmetadata('description', jomres_purify_html($current_property_details->metadescription));
        } else {
            jomres_cmsspecific_setmetadata('description', jomres_purify_html($current_property_details->property_description));
        }

        if (strlen($current_property_details->metakeywords) > 0) {
            jomres_cmsspecific_setmetadata('keywords', jomres_purify_html($current_property_details->metakeywords));
        } else {
            jomres_cmsspecific_setmetadata('keywords', $current_property_details->property_town.', '.$current_property_details->property_region.', '.$current_property_details->property_country);
        }

        //Facebook meta data
        $short_property_description = jomres_decode(jr_substr(strip_tags($current_property_details->property_description), 0, 200)).'...';
        jomres_cmsspecific_addcustomtag('<meta property="og:url" content="'.get_property_details_url($property_uid, 'nosef').'" />');
        jomres_cmsspecific_addcustomtag('<meta property="og:type" content="article" />');
        jomres_cmsspecific_addcustomtag('<meta property="og:title" content="'.jomres_decode($current_property_details->property_name).'" />');
        jomres_cmsspecific_addcustomtag('<meta property="og:description" content="'.$short_property_description.'" />');
        jomres_cmsspecific_addcustomtag('<meta property="og:image" content="'.$output[ 'IMAGELARGE' ].'" />');

        //property details
        $output[ 'STARS' ] = $starslink;
        $output[ 'PROPERTY_NAME' ] = $current_property_details->property_name;
        $output[ 'STREET' ] = $current_property_details->property_street;
        $output[ 'TOWN' ] = $current_property_details->property_town;
        $output[ 'REGION' ] = $current_property_details->property_region;
        $output[ 'COUNTRY' ] = $current_property_details->property_country;
        $output[ 'POSTCODE' ] = $current_property_details->property_postcode;
        $output[ 'TELEPHONE' ] = $current_property_details->property_tel;
        $output[ 'FAX' ] = $current_property_details->property_fax;

        $permit = array();
        if ($current_property_details->permit_number != '') {
            $permit[0][ 'PERMIT_NUMBER' ] = $current_property_details->permit_number;
            $permit[0][ '_JOMRES_PERMIT_NUMBER_TITLE' ] = jr_gettext('_JOMRES_PERMIT_NUMBER_TITLE', '_JOMRES_PERMIT_NUMBER_TITLE', false);
        }

        $output['PROPERTY_LAT'] = $current_property_details->lat;
        $output['PROPERTY_LONG'] = $current_property_details->long;
        $output['SHORT_PROPERTY_DESCRIPTION'] = $short_property_description;
        $output['_JOMRES_COM_A_CLICKFORMOREINFORMATION'] = jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '_JOMRES_COM_A_CLICKFORMOREINFORMATION', false);

        //property prices from
        $price = get_property_price_for_display_in_lists($property_uid);

        $output['PRICE'] = $price['PRICE'];
        $output['PRE_TEXT'] = $price['PRE_TEXT'];
        $output['POST_TEXT'] = $price['POST_TEXT'];

        //property contact details override
        if ((int) $jrConfig['override_property_contact_details'] == 1) {
            if ($jrConfig['override_property_contact_tel'] != '') {
                $output[ 'TELEPHONE' ] = $jrConfig['override_property_contact_tel'];
            }

            if ($jrConfig['override_property_contact_fax'] != '') {
                $output[ 'FAX' ] = $jrConfig['override_property_contact_fax'];
            }
        }

        if ($output[ 'TELEPHONE' ] != '') {
            $output[ 'HTELEPHONE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE').': ';
        }
        if ($output[ 'FAX' ] != '') {
            $output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX').': ';
        }

        //external link
        if (isset($mrConfig[ 'galleryLink' ]) && $mrConfig[ 'galleryLink' ] != '') {
            // http://www.worldofwebcraft.com/blog.php?id=250
            $pattern = '/[^\pL\pN$-_.+!*\'\(\)\,\{\}\|\\\\\^\~\[\]`\<\>\#\%\"\;\/\?\:\@\&\=\.]/u';
            $url = preg_replace($pattern, '', $mrConfig[ 'galleryLink' ]);

            $output[ 'GALLERYLINK' ] = str_replace('&#38;#38;amp;', '&', $url);
            $domain = parse_url(str_replace('&#38;#38;amp;', '&', $url));
            $output[ 'GALLERYDOMAIN' ] = $domain[ 'host' ];
        }

        $output[ 'JOMRES_TAPTOCALL' ] = jr_gettext('JOMRES_TAPTOCALL', 'JOMRES_TAPTOCALL', false, false);

        //shortlist/favourites
        if (isset($tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ]) && is_array($tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ])) {
            $shortlist_items = $tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ];
        } else {
            $shortlist_items = array();
        }

        if ($thisJRUser->userIsRegistered) {
            $query = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE `my_id` = '".(int) $thisJRUser->id."'";
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

        if (!in_array($property_uid, $shortlist_items)) {
            $shortlist_output = array();
            $shortlist_pageoutput = array();
            $shortlist_output['TEXT'] = jr_gettext('_JOMRES_ADDTOSHORTLIST', '_JOMRES_ADDTOSHORTLIST', false, false);
            $shortlist_pageoutput[ ] = $shortlist_output;

            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->readTemplatesFromInput('shortlist_removed_text.html');
            $tmpl->addRows('pageoutput', $shortlist_pageoutput);
            $output[ 'SHORTLIST' ] = $tmpl->getParsedTemplate();
        } else {
            $shortlist_output = array();
            $shortlist_pageoutput = array();
            $shortlist_output['TEXT'] = jr_gettext('_JOMRES_REMOVEFROMSHORTLIST', '_JOMRES_REMOVEFROMSHORTLIST', false, false);
            $shortlist_pageoutput[ ] = $shortlist_output;

            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->readTemplatesFromInput('shortlilst_added_text.html');
            $tmpl->addRows('pageoutput', $shortlist_pageoutput);
            $output[ 'SHORTLIST' ] = $tmpl->getParsedTemplate();
        }

        //approval labels
        if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
            if ($mrConfig[ 'requireApproval' ] == '1' || $mrConfig['visitorscanbookonline'] == '0') {
                $output[ 'REQUIRE_APPROVAL' ] = jr_gettext('_BOOKING_ONREQUEST', '_BOOKING_ONREQUEST', false);
                $output[ 'REQUIRE_APPROVAL_CLASS' ] = 'label-warning';
            } else {
                $output[ 'REQUIRE_APPROVAL' ] = jr_gettext('_BOOKING_INSTANT', '_BOOKING_INSTANT', false);
                $output[ 'REQUIRE_APPROVAL_CLASS' ] = 'label-success';
            }
        }

        //reviews link
        $reviews_link = array();
        if ($jrConfig[ 'use_reviews' ] == '1') {
            $reviews_link[0]['REVIEWS_LINK'] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_reviews&property_uid='.$property_uid);
            $reviews_link[0]['REVIEWS_TEXT'] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false, false);
        }

        //property agent
        $output[ 'AGENT_LINK' ] = make_agent_link($property_uid);
        $output[ '_JOMRES_AGENT' ] = jr_gettext('_JOMRES_AGENT', '_JOMRES_AGENT');

        //property buttons
        $output[ 'DIRECT_URL' ] = get_property_details_url($property_uid);
        $output[ 'CONTACT_LINK' ] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=contactowner&selectedProperty='.$property_uid);
        $output[ 'HCONTACT' ] = jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL');
        $output[ 'SHORTLIST_LINK' ] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=show_shortlisted_properties');
        $output[ 'HSHORTLIST' ] = jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES', '_JOMCOMP_MYUSER_VIEWFAVOURITES');
        $output[ 'HMAP' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK');

        //booking button
        $bookinglink = array();

        if ($mrConfig[ 'visitorscanbookonline' ] == '1' && $jrConfig[ 'show_booking_form_in_property_details' ] != '1' && $mrConfig[ 'is_real_estate_listing' ] == 0) {
            $link = array();
            $url = get_booking_url($property_uid);
            if ((($mrConfig[ 'fixedArrivalDateYesNo' ] == '1' || $mrConfig[ 'fixedPeriodBookings' ] == '1')) && !isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ])) { // We'll add an invalid arrival date if the fixed arrival date setting is set to Yes. This way we can force the booking engine to see the arrival date is wrong and it'll rebuild the available rooms list, which it doesn't if the date is correct when coming from the Book a room link.
            $url .= '&arrivalDate=2009-01-01';
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
        }

        //facebook buttons
        $output['FACEBOOK_BUTTONS'] = $MiniComponents->specificEvent('06000', 'show_facebook_buttons', array('output_now' => false, 'property_uid' => $property_uid));

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();

        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('reviews_link', $reviews_link);
        $tmpl->addRows('bookinglink', $bookinglink);
        $tmpl->addRows('permit', $permit);

        $tmpl->readTemplatesFromInput('property_header.html');
        $tmpl->displayParsedTemplate();

        if (!isset($componentArgs) || empty($componentArgs)) {
            $componentArgs = array('property_uid' => $property_uid);
        }

        $MiniComponents->triggerEvent('01070', $componentArgs); // Optional post header display
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
