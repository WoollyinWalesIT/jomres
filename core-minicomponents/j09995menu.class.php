<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.6.0
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

	class j09995menu
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
			// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
			$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
			if ($MiniComponents->template_touch) {
				$this->template_touchable = false;

				return;
			}

			if (AJAXCALL) {
				return;
			}

			$menuoff = get_showtime('menuoff');
			if ($menuoff === true) {
				return;
			}

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$property_uid = getDefaultProperty();

			$mrConfig = getPropertySpecificSettings($property_uid);

			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

			$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');

			$viewproperty_url = get_property_details_url($property_uid);
			$dobooking_url = get_booking_url($property_uid);

			jr_import('jomres_occupancy_levels');
			$jomres_occupancy_levels = new jomres_occupancy_levels($property_uid);

			// There are some differences between J3 & J4 and the font awesome icons
			$font_awesome_envelope = 'fa-envelope-o';
			$font_awesome_picture = 'fa-picture-o';
			$font_awesome_dashboard = 'fa-dashboard';
			$font_awesome_logout = 'fa-sign-out';
			$font_awesome_delete = 'fa-trash-o';
			$font_awesome_tariffs = 'fa-usd';
			$font_awesome_edit = 'fa-pencil-square-o';
			$font_awesome_childpolicies = 'fa-users';
			$font_awesome_language = 'fa-language';

			if (jomres_bootstrap_version() == '5') {
				$font_awesome_envelope = 'fa-envelope';
				$font_awesome_picture = 'fa-images';
				$font_awesome_dashboard = 'fa-tachometer-alt';
				$font_awesome_logout = 'fas fa-sign-out';
				$font_awesome_delete = 'fa-trash';
				$font_awesome_tariffs = 'fa-dollar-sign';
				$font_awesome_edit = 'fa-edit';
				$font_awesome_childpolicies = 'fa-child';
				$font_awesome_language = 'fas fa-language';
			}

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
				$jomres_menu->add_item(1, jr_gettext('_JRPORTAL_CPANEL', '_JRPORTAL_CPANEL', false), 'cpanel', $font_awesome_dashboard);

				if ($mrConfig[ 'is_real_estate_listing' ] != '1') {
					$jomres_menu->add_item(1, jr_gettext('_JOMRES_TIMELINE', '_JOMRES_TIMELINE', false), 'dashboard', 'fa-calendar');
				}
			}

			//my account section menus
			if ($thisJRUser->accesslevel >= 1) {
				$jomres_menu->add_item(10, jr_gettext('_JOMRES_MY_ACCOUNT_EDIT', '_JOMRES_MY_ACCOUNT_EDIT', false), 'edit_my_account', 'fa-user');
				$jomres_menu->add_item(10, jr_gettext('GUEST_PROFILE_TITLE_MY', 'GUEST_PROFILE_TITLE_MY', false), 'show_user_profile', 'fa-user');
			}

			if ($thisJRUser->accesslevel == 1 && $jrConfig['is_single_property_installation'] == '0' && $jrConfig[ 'selfRegistrationAllowed' ] == '1') {
				$jomres_menu->add_item(10, jr_gettext('_JOMRES_USER_LISTMYPROPERTY', '_JOMRES_USER_LISTMYPROPERTY', false), 'new_property', 'fa-plus');
			}

			if ($thisJRUser->accesslevel == 1) {
				$jomres_menu->add_item(10, jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS', '_JOMCOMP_MYUSER_LISTBOOKINGS', false), 'mulistbookings', 'fa-list');
				$jomres_menu->add_item(10, jr_gettext('_JRPORTAL_INVOICES_SHOWINVOICES', '_JRPORTAL_INVOICES_SHOWINVOICES', false), 'list_invoices', 'fa-list');
			}

			if ($thisJRUser->accesslevel >= 1 && get_showtime('numberOfPropertiesInSystem') > 1) {
				$jomres_menu->add_item(10, jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES', '_JOMCOMP_MYUSER_VIEWFAVOURITES', false), 'muviewfavourites', 'fa-heart');
			}

			if ($thisJRUser->accesslevel == 0) {
				$jomres_menu->add_item(10, 'Register', 'cms_user_register', 'fa-user-plus');
				$jomres_menu->add_item(10, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', false), 'cms_user_login', 'fa-sign-in-alt');
			}

			if ($thisJRUser->accesslevel >= 1) {
				$jomres_menu->add_item(10, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', false), 'logout', $font_awesome_logout);
			}

			if (!isset($jrConfig[ 'api_core_show' ])) {
				$jrConfig[ 'api_core_show' ] =1;
			}

			if ($thisJRUser->accesslevel >= 1 && $jrConfig[ 'api_core_show' ] == '1') {
				$jomres_menu->add_item(10, jr_gettext('_OAUTH_TITLE', '_OAUTH_TITLE', false), 'oauth', 'fa-key');
				$jomres_menu->add_item(10, jr_gettext('API_DOCUMENTATION_TITLE', 'API_DOCUMENTATION_TITLE', false), 'api_documentation', 'fa-book');
			}

			if (!isset($jrConfig[ 'webhooks_core_show' ])) {
				$jrConfig[ 'webhooks_core_show' ] =1;
			}

			if ($thisJRUser->accesslevel >= 50 && $jrConfig[ 'api_core_show' ] == '1') {
				$jomres_menu->add_item(10, jr_gettext('WEBHOOKS_CORE', 'WEBHOOKS_CORE', false), 'webhooks_core', 'fa-key');
				$jomres_menu->add_item(10, jr_gettext('WEBHOOKS_DOCUMENTATION_TITLE', 'WEBHOOKS_DOCUMENTATION_TITLE', false), 'webhooks_core_documentation', 'fa-book');
			}

			if ($jrConfig[ 'enable_gdpr_compliant_fucntionality' ] == "1") {
				$jomres_menu->add_item(10, jr_gettext('_JOMRES_GDPR_APP_MENU_ITEM', '_JOMRES_GDPR_APP_MENU_ITEM', false), 'show_consent_form', 'fa-lock');
				$jomres_menu->add_item(10, jr_gettext('_JOMRES_GDPR_MY_DATA', '_JOMRES_GDPR_MY_DATA', false), 'gdpr_my_data', 'fa-lock');
			}

			//properties section menus
			if ($thisJRUser->accesslevel >= 50) {
				$jomres_menu->add_item(20, jr_gettext('_JRPORTAL_CPANEL_LISTPROPERTIES', '_JRPORTAL_CPANEL_LISTPROPERTIES', false), 'listyourproperties', 'fa-list');
			}

			$property_limit_reached = false;
			if (function_exists("get_number_of_allowed_properties")) {
				if (get_showtime('numberOfPropertiesInSystem') >= get_number_of_allowed_properties()) {
					$property_limit_reached = true;
				}
			}

			if ($thisJRUser->accesslevel > 50 && $jrConfig['is_single_property_installation'] == '0' && ($jrConfig[ 'selfRegistrationAllowed' ] == '1' || $thisJRUser->accesslevel >= 90) && !$property_limit_reached) {
				$jomres_menu->add_item(20, jr_gettext('_JOMRES_COM_MR_NEWPROPERTY', '_JOMRES_COM_MR_NEWPROPERTY', false), 'new_property', 'fa-plus');
			}

			if ($thisJRUser->accesslevel >= 50) {
				if ($viewproperty_url) {
					$jomres_menu->add_item(20, jr_gettext('_JOMRES_FRONT_PREVIEW', '_JOMRES_FRONT_PREVIEW', false), $viewproperty_url, 'fa-eye', true);
				}
			}

			if ($thisJRUser->accesslevel > 50 && get_showtime('numberOfPropertiesInSystem') > 1 && isset($thisJRUser->authorisedProperties[1])) {
				$jomres_menu->add_item(20, jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE', '_JOMRES_COM_MR_PROPERTY_DELETE', false), 'delete_property', $font_awesome_delete);
			}

			//booking section menus
			if ($thisJRUser->accesslevel >= 50 && $mrConfig[ 'is_real_estate_listing' ] != '1') {
				$jomres_menu->add_item(30, jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', false), 'list_bookings', 'fa-list');

				if ($dobooking_url) {
					$jomres_menu->add_item(30, jr_gettext('_JOMRES_HNEW_BOOKING', '_JOMRES_HNEW_BOOKING', false), $dobooking_url, 'fa-plus', true);
				}
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
				$jomres_menu->add_item(60, jr_gettext('_JOMRES_OVERALL_ROOMS_BOOKED', '_JOMRES_OVERALL_ROOMS_BOOKED', false), 'weekly_occupancy_percentages', 'fa-percent');
			}

			//misc section menus
			if ($thisJRUser->accesslevel >= 50) {
				$jomres_menu->add_item(70, jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', false), 'search', 'fa-search');
				$jomres_menu->add_item(70, 'Typography', 'typography', 'fas fa-paint-brush');
			}

			//settings section menus
			if ($thisJRUser->accesslevel > 50) {
				$jomres_menu->add_item(80, jr_gettext('_JOMRES_PATHWAY_PROPERTYDETAILS', '_JOMRES_PATHWAY_PROPERTYDETAILS', false), 'edit_property', $font_awesome_edit);
				$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC', '_JOMRES_COM_MR_GENERALCONFIGDESC', false), 'business_settings', 'fa-cogs');
				$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false), 'payment_gateways', "fas fa-wallet" );


				$jomres_menu->add_item(80, jr_gettext('JOMRES_TRANSLATIONS_TITLE', 'JOMRES_TRANSLATIONS_TITLE', false), 'translating', $font_awesome_language);

				$jomres_menu->add_item(80, jr_gettext('_JOMRES_MEDIA_CENTRE_TITLE', '_JOMRES_MEDIA_CENTRE_TITLE', false), 'media_centre', $font_awesome_picture);

				if ($mrConfig[ 'is_real_estate_listing' ] != '1' && $mrConfig['tariffmode'] != '0' && !get_showtime('is_jintour_property')) {
					$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false), 'list_resources', 'fa-bed');
				}

				if ($mrConfig[ 'is_real_estate_listing' ] != '1' && $mrConfig['tariffmode'] == '0' && !get_showtime('is_jintour_property')) {
					$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false).' &amp; '.jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false), 'edit_tariffs_normal', $font_awesome_tariffs);
				}

				if ($mrConfig[ 'is_real_estate_listing' ] != '1') {


					// This secret setting will not be modifyable through site config, but by adding it to /jomres/configuration.php admins will be able to use old guest types and not be forced to use new occupancies
					if (isset($jrConfig[ 'secret_setting_use_old_guest_types' ]) && $jrConfig[ 'secret_setting_use_old_guest_types' ] === "1") {
						$jomres_menu->add_item(80, jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', false), 'listcustomertypes', 'fa-users');
					} else {
						// Other tariff config modes are being disabled, consolidating to just Micromanage.
						$jomres_menu->add_item(80, jr_gettext('JOMRES_OCCUPANCY_LEVELS_TITLE', 'JOMRES_OCCUPANCY_LEVELS_TITLE', false), 'list_occupancy_levels', 'fa-users');
						$jomres_menu->add_item(80, jr_gettext('JOMRES_POLICIES_CHILDREN', 'JOMRES_POLICIES_CHILDREN', false), 'child_policies', $font_awesome_childpolicies);
					}

					$jomres_menu->add_item(80, jr_gettext('_JOMRES_EMAIL_TEMPLATES_TITLE', '_JOMRES_EMAIL_TEMPLATES_TITLE', false), 'list_emails', $font_awesome_envelope);
				}
				if ($mrConfig[ 'is_real_estate_listing' ] != '1' &&
					!get_showtime('is_jintour_property') &&
					$mrConfig[ 'singleRoomProperty' ] != '1' &&
					$jrConfig[ 'frontend_room_type_editing_allowed' ] == "1"
				) {
					$jomres_menu->add_item(80, jr_gettext('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', false), 'list_room_types', 'fa-pencil-square-o');
				}
			}

			//help section menus
			if ($thisJRUser->accesslevel >= 50) { //FAQ works for guests too, but since it doesn`t have any content by default, we`ll just hide the menu for guests
				$jomres_menu->add_item(90, jr_gettext('_JOMRES_FAQ', '_JOMRES_FAQ', false), 'faq', 'fa-question');
				$jomres_menu->add_item(90, jr_gettext('VIDEO_TUTORIALS', 'VIDEO_TUTORIALS', false), 'videos', 'fa-youtube-play');
			}
		}


		public function getRetVals()
		{
			return null;
		}
	}
