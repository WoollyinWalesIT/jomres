<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
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
	 * Property Configuration page tabs. Offers booking form related configuration options.
	 * 
	 */

class j00501booking_form
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

		if ($componentArgs['is_channel_property']) {
			return;
		}

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$mrConfig = getPropertySpecificSettings();
		if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
			return;
		}
		$lists = $componentArgs[ 'lists' ];
		//$tabs=$componentArgs['tabs'];
		$weekenddayDropdown = $componentArgs[ 'weekenddayDropdown' ];
		$booking_form_rooms_list_style = $componentArgs[ 'booking_form_rooms_list_style' ];
		$booking_form_daily_weekly_monthly = $componentArgs[ 'booking_form_daily_weekly_monthly' ];
		
		if (!isset($mrConfig[ 'externalBookingFormUrl' ])) {
			$mrConfig[ 'externalBookingFormUrl' ] = '';
		}

		$configurationPanel->startPanel(jr_gettext('_JOMRES_HBOOKING_FORM', '_JOMRES_HBOOKING_FORM', false));

		if ( $jrConfig[ 'compatability_property_configuration' ] != 1 ) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_BOOKING_FORM_EXTERNAL_URL', '_JOMRES_BOOKING_FORM_EXTERNAL_URL', false));
			$configurationPanel->setmiddle('<input type="url" class="inputbox form-control"  size="50" name="cfg_externalBookingFormUrl" value="' . $mrConfig['externalBookingFormUrl'] . '" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', '_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', false));
			$configurationPanel->insertSetting();
		}

		if ($mrConfig[ 'singleRoomProperty' ] != '1') {
			$configurationPanel->setleft(jr_gettext('_JOMRES_ROOMMSLIST_STYLE', '_JOMRES_ROOMMSLIST_STYLE', false));
			$configurationPanel->setmiddle($booking_form_rooms_list_style);
			$configurationPanel->setright(jr_gettext('_JOMRES_ROOMMSLIST_STYLE_DESC', '_JOMRES_ROOMMSLIST_STYLE_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_LIMITROOMSLIST', '_JOMRES_COM_LIMITROOMSLIST', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control" size="5" name="cfg_returnRoomsLimit" value="'.$mrConfig[ 'returnRoomsLimit' ].'">');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_LIMITROOMSLIST_DESC', '_JOMRES_COM_LIMITROOMSLIST_DESC', false));
			$configurationPanel->insertSetting();
		}

		if ( $jrConfig[ 'compatability_property_configuration' ] != 1 ) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', false));
			$configurationPanel->setmiddle($lists['auto_detect_country_for_booking_form']);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', false));
			$configurationPanel->insertSetting();
		}

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_CONFIGCOUNTRIES', '_JOMRES_COM_CONFIGCOUNTRIES', false));
		$configurationPanel->setmiddle(configCountries());
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		if (!get_showtime('is_jintour_property')) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_EXTRAS', '_JOMRES_COM_A_EXTRAS', false));
			$configurationPanel->setmiddle($lists[ 'showExtras' ]);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_EXTRAS_DESC', '_JOMRES_COM_A_EXTRAS_DESC', false));
			$configurationPanel->insertSetting();
		}

		if ($mrConfig[ 'wholeday_booking' ] == '1') {
			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', false));
			$configurationPanel->setmiddle($lists[ 'showdepartureinput' ]);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', false));
			$configurationPanel->insertSetting();
		} else {
			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SHOWDEPARTUREINPUT', '_JOMRES_COM_A_SHOWDEPARTUREINPUT', false));
			$configurationPanel->setmiddle($lists[ 'showdepartureinput' ]);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', false));
			$configurationPanel->insertSetting();
		}

		if ( $jrConfig[ 'compatability_property_configuration' ] != 1 ) {
			$configurationPanel->insertHeading(jr_gettext('_JOMRES_HREQUIRED_FIELDS', '_JOMRES_HREQUIRED_FIELDS', false));

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_name' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '_JOMRES_FRONT_MR_DISPGUEST_SURNAME'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_surname' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_houseno' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_street' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_town' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_postcode' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_country' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_tel' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL'));
			$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_mobile' ]);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

		}

		$mrConfig[ 'bookingform_requiredfields_email' ] = "1"; // For GDPR compliance, bookings will always require an email address and the property manager will not be allowed to change this setting
		
		/* $configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL'));
		$configurationPanel->setmiddle($lists[ 'bookingform_requiredfields_email' ]);
		$configurationPanel->setright();
		$configurationPanel->insertSetting(); */

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
