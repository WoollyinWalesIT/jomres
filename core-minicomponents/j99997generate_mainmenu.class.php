<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.18
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j99997generate_mainmenu
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        // Stops the main menu from being generated twice.
        if (get_showtime('mainmenu_alreadyrun')) {
            return;
        }
        set_showtime('mainmenu_alreadyrun', true);

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $buttons = $componentArgs[ 'jomres_mainmenu_buttons_categorised' ];
        $button_o = array();

        $categories = array();
        $jomres_mainmenu_category_images = get_showtime('jomres_mainmenu_category_images');

        $management_view = $componentArgs[ 'management_view' ];

        foreach ($buttons as $category => $buts) {
            $categories[ $category ] = $category;
            $output[ 'CAT_IMAGE' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/down.png';
            if (isset($jomres_mainmenu_category_images[ $category ])) {
                $output[ 'CAT_IMAGE' ] = $jomres_mainmenu_category_images[ $category ];
            }

            $rows = array();
            foreach ($buts as $key => $val) {
                $old_task = '';
                $id = '';
                $elements = str_replace('&amp;', '&', $val[ 'link' ]);
                $bits = explode('&', $elements);
                foreach ($bits as $bobs) {
                    $bob = explode('=', $bobs);
                    if (isset($bob[ 1 ])) {
                        $old_task = '&attempted_task='.$bob[ 1 ];
                        $id = $bob[ 1 ];
                    }
                }

                $r = $val;
                $r[ 'LIVESITE' ] = get_showtime('live_site');
                $r[ 'TARGET' ] = '';
                $r[ 'ID_OPTION' ] = $id;
                if ($val[ 'external' ]) {
                    $r[ 'TARGET' ] = ' target="_blank" ';
                }

                $r[ 'disabled_class' ] = '';
                if ($r[ 'disabled' ]) {
                    $r[ 'link' ] = JOMRES_SITEPAGE_URL_NOSEF.'&task=feature_not_available'.$old_task;
                    if (!using_bootstrap()) {
                        $r[ 'disabled_class' ] = 'ui-state-error ui-state-disabled';
                    } else {
                        $r[ 'disabled_class' ] = 'disabled';
                    }
                }

                $button_link = str_replace('&amp;', '&', $val[ 'link' ]);
                parse_str($button_link, $url_params);
                if (array_key_exists('task', $url_params)) {
                    $button_task = $url_params[ 'task' ];

                    $r[ 'BADGES' ] = '';
                    $items_requiring_attention = get_number_of_items_requiring_attention_for_menu_option($button_task);
                    if (count($items_requiring_attention) > 0) {
                        foreach ($items_requiring_attention as $colour => $number) {
                            $tmpl = new patTemplate();
                            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
                            $tmpl->readTemplatesFromInput('frontend_menu_badge_'.$colour.'.html');
                            $tmpl->addRows('items_requiring_attention', array(array('NUMBER' => $number)));
                            $r[ 'BADGES' ] .= $tmpl->getParsedTemplate();
                        }
                    }

                    if ($button_task == jomresGetParam($_REQUEST, 'task', '')) {
                        if (!using_bootstrap()) {
                            $r[ 'ACTIVE' ] = 'ui-state-active';
                        } else {
                            $r[ 'ACTIVE' ] = 'active';
                        }
                    } else {
                        $r[ 'ACTIVE' ] = '';
                    }
                }

                $rows[ ] = $r;
            }

            $output[ 'CATEGORY' ] = mb_convert_case(ucwords($category), MB_CASE_TITLE);
            $output[ 'ID_CATEGORY' ] = str_replace(' ', '_', $category);
            $output[ 'LIVE_SITE' ] = get_showtime('live_site');

            $pageoutput = array();
            $pageoutput[ ] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            if (!$management_view) {
                if ($jrConfig[ 'alternate_mainmenu' ] == '0') {
                    $tmpl->readTemplatesFromInput('mainmenu_options.html');
                } else {
                    $tmpl->readTemplatesFromInput('mainmenu_options_alternate.html');
                }
            } else {
                $tmpl->readTemplatesFromInput('management_mainmenu_options.html');
            }
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $button_o[ ][ 'DIV' ] = $tmpl->getParsedTemplate();
        }

        $output = array();
        $pageoutput = array();

        $output[ 'PROPERTYNAME' ] = get_showtime('menuitem_propertyname');
        $output[ 'MENUITEM_TIMEZONE_DROPDOWN' ] = get_showtime('menuitem_timezone_dropdown');
        $output[ 'MENUITEM_TIMEZONEBLURB' ] = get_showtime('menuitem_timezoneblurb');
        $output[ 'MENUITEM_MANAGEMENT_VIEW_DROPDOWN' ] = get_showtime('menuitem_management_view_dropdown');
        $output[ 'MENUITEM_EDITING_MODE_DROPDOWN' ] = get_showtime('menuitem_editing_mode_dropdown');
        $output[ 'MENUITEM_LANGDROPDOWN' ] = get_showtime('menuitem_langdropdown');

        $output[ '_JOMRES_CONTROLPANEL' ] = jr_gettext('_JOMRES_CONTROLPANEL', '_JOMRES_CONTROLPANEL', false);
        $output[ '_JOMRES_MENU_SHOW' ] = jr_gettext('_JOMRES_MENU_SHOW', '_JOMRES_MENU_SHOW', false);
        $output[ '_JOMRES_MENU_HIDE' ] = jr_gettext('_JOMRES_MENU_HIDE', '_JOMRES_MENU_HIDE', false);

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

        if (get_showtime('task') == '') {
            $task = 'dashboard';
        } else {
            $task = get_showtime('task');
        }

        if (using_bootstrap()) {
            if ($thisJRUser->userIsManager || $task == 'registerProp_step1') {
                $fullscreen = false;
                $fullscreen_view = '_windowed';

                if ($_GET[ 'tmpl' ] == get_showtime('tmplcomponent')) {
                    $fullscreen = true;
                    $fullscreen_view = '_fullscreen';
                }

/* 				require_once( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'functions' . JRDS . 'build_product_tour_files.php' );
                build_product_tour_javascript_file();
                 if (file_exists ( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'product_tours' . JRDS . $task.'_' . get_showtime("lang").$fullscreen_view."-tour.js") )
                    {


                    jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY."/temp/product_tours/", $task.'_' . get_showtime("lang").$fullscreen_view."-tour.js" );
                    $help [0] [ 'PRODUCT_TOUR_PAGE_INFORMATION' ]      = jr_gettext( 'PRODUCT_TOUR_PAGE_INFORMATION', PRODUCT_TOUR_PAGE_INFORMATION, false, false );
                    }
                $output['TOUR_LABELS'] = "
                    var tour_next = '".jr_gettext("_PN_NEXT",_PN_NEXT,false)."';
                    var tour_prev = '".jr_gettext("_PN_PREVIOUS",_PN_PREVIOUS,false)."';
                    var tour_end = '".jr_gettext("END_TOUR",END_TOUR,false)."';
                    "; */
                $output[ 'TASK' ] = $task;
            }
        }

        if (!isset($jrConfig[ 'navbar_location' ])) {
            $jrConfig[ 'navbar_location' ] = 'component_area';
        }

        $output['NAVBAR_LOCATION'] = '';
        if ($jrConfig[ 'navbar_location' ] != 'component_area') {
            $output['NAVBAR_LOCATION'] = $jrConfig[ 'navbar_location' ];
        }

        if (!isset($jrConfig[ 'navbar_inverse' ])) {
            $jrConfig[ 'navbar_inverse' ] = 0;
        }

        $output['NAVBAR_INVERSE'] = 'navbar-default';
        if ($jrConfig[ 'navbar_inverse' ] != 0) {
            $output['NAVBAR_INVERSE'] = 'navbar-inverse';
        }

        $output['_JOMRES_BOOKING_NUMBER'] = jr_gettext('_JOMRES_BOOKING_NUMBER', '_JOMRES_BOOKING_NUMBER', false);
        $output['TAG_SEARCH_URL'] = jomresUrl(JOMRES_SITEPAGE_URL_NOSEF.'&task=list_bookings');
        $output['USER_FEEDBACK'] = get_showtime('user_feedback');

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        if (!$management_view) {
            if ($jrConfig[ 'alternate_mainmenu' ] == '0') {
                $tmpl->readTemplatesFromInput('mainmenu_wrapper.html');
            } else {
                $tmpl->readTemplatesFromInput('mainmenu_wrapper_alternate.html');
            }
        } else {
            $tmpl->readTemplatesFromInput('management_menu_wrapper.html');
        }
        $tmpl->addRows('button_output', $button_o);
        $tmpl->addRows('pageoutput', $pageoutput);
        //$tmpl->addRows( 'help', $help );
        $this->ret_vals = $tmpl->getParsedTemplate();
        echo $this->ret_vals;
    }

    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
