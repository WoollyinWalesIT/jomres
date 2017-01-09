<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00060toptemplate
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        if (get_showtime('topoff')) {
            return;
        }

        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $management_view = jomresGetParam($_REQUEST, 'tmpl', false);
        $popup = intval(jomresGetParam($_REQUEST, 'popup', 0));
        //$tz         	   	= $componentArgs[ 'tz' ];
        $jomreslang 		= jomres_singleton_abstract::getInstance( 'jomres_language' );

        if (AJAXCALL || $popup == 1) {
            return;
        }

        $output = array();
        $output[ 'PROPERTYNAME' ] = '';
        $output[ 'HACTIVE_PROPERTY' ] = '';
        $output[ 'MANAGEMENT_VIEW_DROPDOWN' ] = '';
        $output[ 'EDITING_MODE_DROPDOWN' ] = '';
        $output[ 'TIMEZONE_DROPDOWN' ] = '';
        $output[ 'TIMEZONEBLURB' ] = '';
        $output[ 'PROPERTY_SELECTOR_DROPDOWN' ] = '';
        $output[ 'CURRENT_PROPERTY_STYLE' ] = '';
        $output['FB_LOCALISE'] = str_replace('-', '_', get_showtime('lang'));

        $editing_mode = jomres_singleton_abstract::getInstance('jomres_editing_mode');
        $result = $editing_mode->make_editing_mode_dropdown();

        if ($result) {
            $editing_dropdown[ ][ 'EDITING_MODE_DROPDOWN' ] = $result;
            set_showtime('menuitem_editing_mode_dropdown', $editing_dropdown[ 0 ][ 'EDITING_MODE_DROPDOWN' ]);
        }

        if (this_cms_is_joomla() || this_cms_is_wordpress()) {
            if ($thisJRUser->userIsManager) {
                $output[ 'HACTIVE_PROPERTY' ] = jr_gettext('_JOMRES_HSTATUS_CURRENT', '_JOMRES_HSTATUS_CURRENT').': ';

                set_showtime('menuitem_propertyname', $output[ 'PROPERTYNAME' ]);

                jr_import('jomres_management_view');
                $jomres_management_view = new jomres_management_view();
                $management_dropdown = $jomres_management_view->get_dropdown();
                $output[ 'MANAGEMENT_VIEW_DROPDOWN' ] = $management_dropdown;

                set_showtime('menuitem_management_view_dropdown', $output[ 'MANAGEMENT_VIEW_DROPDOWN' ]);

                /* Timezone feature disabled
                if ( $jrConfig[ 'use_timezone_switcher' ] == "1" )
                    {
                    $timezone_dropdown[ 0 ][ 'TIMEZONE_DROPDOWN' ] = $tz->get_dropdown();
                    $date = new DateTime( null, new DateTimeZone( $thisJRUser->users_timezone ) );
                    $timezone_dropdown[ 0 ][ 'TIMEZONEBLURB' ] = outputDate( date_format( $date, "Y/m/d" ) ) . " " . date_format( $date, "H:i:s" );
                    }
                set_showtime( "menuitem_timezone_dropdown", $timezone_dropdown[ 0 ][ 'TIMEZONE_DROPDOWN' ] );
                set_showtime( "menuitem_timezoneblurb", $timezone_dropdown[ 0 ][ 'TIMEZONEBLURB' ] );*/
            }
        }

        if (using_bootstrap()) {
            if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'logo.png')) {
                $output[ 'LOGO_RELATIVE_URL' ] = JOMRES_IMAGELOCATION_RELPATH.'/logo.png';
            } elseif (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'logo.jpg')) {
                $output[ 'LOGO_RELATIVE_URL' ] = JOMRES_IMAGELOCATION_RELPATH.'/logo.jpg';
            } else {
                $output[ 'LOGO_RELATIVE_URL' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/logo.png';
            }
        } else {
            $output[ 'LOGO_RELATIVE_URL' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/jrlogo.png';
        }

        $output[ 'SANITY_CHECKS' ] = get_showtime('sanity_check_warnings');
        $output[ 'NEXT' ] = jr_gettext('_PN_NEXT', '_PN_NEXT', false, false);
        $output[ 'PREVIOUS' ] = jr_gettext('_PN_PREVIOUS', '_PN_PREVIOUS', false, false);

        $output[ 'BACKLINK' ] = '<a href="javascript:history.go(-1)">'.jr_gettext('_JOMRES_COM_MR_BACK', '_JOMRES_COM_MR_BACK').'</a>';
        $output[ 'LIVESITE' ] = get_showtime('live_site');
        if (defined('JOMRESDATEPICKERLANG')) {
            $output[ 'DATEPICKERLANG' ] = JOMRESDATEPICKERLANG;
        }

        $lang_dropdown = array();
        if ($jrConfig[ 'showLangDropdown' ] == '1')
            {
            $lang_dropdown[ ][ 'LANGDROPDOWN' ] = $jomreslang->get_languageselection_dropdown();
            set_showtime( "menuitem_langdropdown", $lang_dropdown[ 0 ][ 'LANGDROPDOWN' ] );
            }

        if ($thisJRUser->userIsManager) {
            if (!get_showtime('heavyweight_system') && $management_view && using_bootstrap()) {
                jr_import('jomres_property_selector_dropdown');
                $jomres_property_selector_dropdown = new jomres_property_selector_dropdown();
                $output['PROPERTY_SELECTOR_DROPDOWN'] = $jomres_property_selector_dropdown->get_dropdown();
                set_showtime('property_selector_dropdown', $output['PROPERTY_SELECTOR_DROPDOWN']);
            } else {
                $defaultProperty = getDefaultProperty();
                $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
                $current_property_details->gather_data($defaultProperty);
                $output[ 'PROPERTYNAME' ] = $current_property_details->property_name;
            }
        } else {
            $output[ 'CURRENT_PROPERTY_STYLE' ] = 'display:none;';
        }

        $output['_JOMRES_FAQ'] = jr_gettext('_JOMRES_FAQ', '_JOMRES_FAQ', false);

        $messaging = array();

        $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
        $messages = $jomres_messaging->get_messages();

        if (count($messages) > 0) {
            foreach ($messages as $mes) {
                $m[ 'MESSAGE' ] = $mes;
                $messaging[ ] = $m;
            }
        }

        $output[ 'DEVICE_TYPE' ] = trim(get_showtime('device_type'));

        if (using_bootstrap()) {
            $output[ 'USING_BOOTSTRAP' ] = 'true';
        } else {
            $output[ 'USING_BOOTSTRAP' ] = 'false';
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        if ($management_view) {
            $tmpl->readTemplatesFromInput('management_top.html');
        } else {
            $tmpl->readTemplatesFromInput('top.html');
        }
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('messages', $messaging);
        //$tmpl->addRows( 'timezone_dropdown', $timezone_dropdown );
        $tmpl->addRows( 'lang_dropdown', $lang_dropdown );
        if ($result) {
            $tmpl->addRows('editing_dropdown', $editing_dropdown);
        }
        $tmpl->displayParsedTemplate();
        $pageoutput = array();
        $output = array();
    }

    public function touch_template_language()
    {
        $output = array();
        $output[ ] = jr_gettext('_PN_NEXT', '_PN_NEXT');
        $output[ ] = jr_gettext('_PN_PREVIOUS', '_PN_PREVIOUS');
        $output[ ] = jr_gettext('_JOMRES_CONVERSION_DISCLAIMER', '_JOMRES_CONVERSION_DISCLAIMER');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

/**
 * Must be included in every mini-component.
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
