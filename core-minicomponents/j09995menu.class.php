<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j09995menu
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		if (AJAXCALL) {
			return;
		}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
		$property_uid = getDefaultProperty();
        
		$mrConfig = getPropertySpecificSettings($property_uid);
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');
		
		$login_url = get_showtime('live_site').'/'.jomres_cmsspecific_getlogin_task();
		$registration_url = jomres_cmsspecific_getregistrationlink();
		$property_details_url = get_property_details_url($property_uid);
        
		//define the core sections
		$jomres_menu->add_section(1, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', false));
		$jomres_menu->add_section(10, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', false));
		$jomres_menu->add_section(20, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', false));
		$jomres_menu->add_section(30, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', false));
		$jomres_menu->add_section(40, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', false));
		$jomres_menu->add_section(50, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', false));
		$jomres_menu->add_section(60, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', false));
		$jomres_menu->add_section(70, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', false));
		$jomres_menu->add_section(80, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', false));
		$jomres_menu->add_section(90, jr_gettext('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', '_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', false));
		
		//define the core  menu items
		//dashboard section menus
		if ($thisJRUser->accesslevel >= 50) {
			$jomres_menu->add_item(1, jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', false), 'dashboard', 'fa-calendar');
		}
		
		//my account section menus
		if ($thisJRUser->accesslevel >= 1) {
			$jomres_menu->add_item(10, jr_gettext('_JOMRES_MY_ACCOUNT_EDIT', '_JOMRES_MY_ACCOUNT_EDIT', false), 'edit_my_account', 'fa-user');
		}
		
		if ($thisJRUser->accesslevel == 1 && $jrConfig['is_single_property_installation'] == '0' && $jrConfig[ 'selfRegistrationAllowed' ] == '1') {
			$jomres_menu->add_item(10, jr_gettext('_JOMRES_USER_LISTMYPROPERTY', '_JOMRES_USER_LISTMYPROPERTY', false), 'new_property', 'fa-plus');
		}
		
		if ($thisJRUser->accesslevel == 1) {
			$jomres_menu->add_item(10, jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS', '_JOMCOMP_MYUSER_LISTBOOKINGS', false), 'mulistbookings', 'fa-list');
			$jomres_menu->add_item(10, jr_gettext('_JRPORTAL_INVOICES_SHOWINVOICES', '_JRPORTAL_INVOICES_SHOWINVOICES', false), 'list_invoices', 'fa-list');
		}
		
		if ($thisJRUser->accesslevel >= 1) {
			$jomres_menu->add_item(10, jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES', '_JOMCOMP_MYUSER_VIEWFAVOURITES', false), 'muviewfavourites', 'fa-heart');
		}
		
		if ($thisJRUser->accesslevel == 0) {
			$jomres_menu->add_item(10, 'Register', $registration_url, 'fa-user-plus', true);
			$jomres_menu->add_item(10, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', false), $login_url, 'fa-sign-in', true);
		}
		
		if ($thisJRUser->accesslevel >= 1) {
			$jomres_menu->add_item(10, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', false), 'logout', 'fa-sign-out');
		}
		
		//properties section menus
		if ($thisJRUser->accesslevel >= 50) {
			$jomres_menu->add_item(20, jr_gettext('_JRPORTAL_CPANEL_LISTPROPERTIES', '_JRPORTAL_CPANEL_LISTPROPERTIES', false), 'listyourproperties', 'fa-list');
		}

		if ($thisJRUser->accesslevel > 50 && $jrConfig['is_single_property_installation'] == '0' && ($jrConfig[ 'selfRegistrationAllowed' ] == '1' || $thisJRUser->accesslevel >= 90)) {
			$jomres_menu->add_item(20, jr_gettext('_JOMRES_COM_MR_NEWPROPERTY', '_JOMRES_COM_MR_NEWPROPERTY', false), 'new_property', 'fa-plus');
		}

		if ($thisJRUser->accesslevel >= 50) {
			$jomres_menu->add_item(20, jr_gettext('_JOMRES_FRONT_PREVIEW', '_JOMRES_FRONT_PREVIEW', false), $property_details_url, 'fa-eye', true);
		}
		
		if ($thisJRUser->accesslevel > 50) {
			$jomres_menu->add_item(20, jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE', '_JOMRES_COM_MR_PROPERTY_DELETE', false), 'delete_property', 'fa-trash-o');
		}
		
		//booking section menus
		if ($thisJRUser->accesslevel >= 50 && $mrConfig[ 'is_real_estate_listing' ] != '1') {
			$jomres_menu->add_item(30, jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', false), 'list_bookings', 'fa-list');
			$jomres_menu->add_item(30, jr_gettext('_JOMRES_HNEW_BOOKING', '_JOMRES_HNEW_BOOKING', false), get_booking_url($property_uid), 'fa-plus', true);
		}
		
		//guests section menus
		if ($thisJRUser->accesslevel >= 50 && $mrConfig[ 'is_real_estate_listing' ] != '1') {
			$jomres_menu->add_item(40, jr_gettext('_JOMRES_HLIST_GUESTS_MENU', '_JOMRES_HLIST_GUESTS_MENU', false), 'list_guests', 'fa-list');
			$jomres_menu->add_item(40, jr_gettext('_JOMRES_COM_MR_NEWGUEST', '_JOMRES_COM_MR_NEWGUEST', false), 'edit_guest', 'fa-plus');
		}
		
		//invoices section menus
		if ($thisJRUser->accesslevel >= 50 && $mrConfig[ 'is_real_estate_listing' ] != '1') {
			$jomres_menu->add_item(50, jr_gettext('_JOMRES_HLIST_INVOICES_MENU', '_JOMRES_HLIST_INVOICES_MENU', false), 'list_invoices', 'fa-list');
		}

		//reports section menus
		if ($thisJRUser->accesslevel > 50 && $mrConfig[ 'is_real_estate_listing' ] != '1') {
			$jomres_menu->add_item(60, jr_gettext('_JOMRES_CHARTS', '_JOMRES_CHARTS', false), 'charts', 'fa-line-chart');
		}

		//misc section menus
		if ($thisJRUser->accesslevel >= 1) {
			$jomres_menu->add_item(70, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', false), 'search', 'fa-search');
		}

		//settings section menus
		if ($thisJRUser->accesslevel > 50) {
			$jomres_menu->add_item(80, jr_gettext('_JOMRES_PATHWAY_PROPERTYDETAILS', '_JOMRES_PATHWAY_PROPERTYDETAILS', false), 'edit_property', 'fa-pencil-square-o');
			$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC', '_JOMRES_COM_MR_GENERALCONFIGDESC', false), 'business_settings', 'fa-cogs');
		
			if ($mrConfig[ 'is_real_estate_listing' ] != '1' && $mrConfig['tariffmode'] != '0' && !get_showtime('is_jintour_property')) {
				$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false), 'list_resources', 'fa-bed');
			}
			
			if ($mrConfig[ 'is_real_estate_listing' ] != '1' && $mrConfig['tariffmode'] == '0' && !get_showtime('is_jintour_property')) {
				$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false).' &amp; '.jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false), 'edit_tariffs_normal', 'fa-usd');
			}

			$jomres_menu->add_item(80, jr_gettext('_JOMRES_MEDIA_CENTRE_TITLE', '_JOMRES_MEDIA_CENTRE_TITLE', false), 'media_centre', 'fa-picture-o');

			if ($mrConfig[ 'is_real_estate_listing' ] != '1') {
				$jomres_menu->add_item(80, jr_gettext('_JOMRES_EMAIL_TEMPLATES_TITLE', '_JOMRES_EMAIL_TEMPLATES_TITLE', false), 'list_emails', 'fa-envelope-o');
			}
		}
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
