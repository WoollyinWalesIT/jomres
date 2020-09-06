<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
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
	 * Property Configuration page tabs. Offers property details page settings.
	 * 
	 */


class j00501propertydetailsoptions
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

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$mrConfig = getPropertySpecificSettings();
		$lists = $componentArgs[ 'lists' ];

		if ( $jrConfig[ 'compatability_property_configuration' ] != 1 ) {
			$configurationPanel->startPanel(jr_gettext('PROPERTY_DETAILS_PAGE_OPTIONS', 'PROPERTY_DETAILS_PAGE_OPTIONS', false));

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', false));
			$configurationPanel->setmiddle('<input text="text" class="inputbox" size="5" name="cfg_facebook_page" value="' . $mrConfig['facebook_page'] . '"/>');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('HIDDEN_ADDRESS_SETTING', 'HIDDEN_ADDRESS_SETTING', false));
			$configurationPanel->setmiddle($lists['hide_local_address']);
			$configurationPanel->setright(jr_gettext('HIDDEN_ADDRESS_SETTING_DESC', 'HIDDEN_ADDRESS_SETTING_DESC', false));
			$configurationPanel->insertSetting();

			if ($mrConfig['is_real_estate_listing'] == 0) {


				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SHOWONLYAVLCAL', '_JOMRES_COM_A_SHOWONLYAVLCAL', false));
				$configurationPanel->setmiddle($lists['showOnlyAvailabilityCalendar']);
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', false));
				$configurationPanel->insertSetting();

				if ($mrConfig['showOnlyAvailabilityCalendar'] == '1') {
					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MONTHSTOSHOW', '_JOMRES_COM_MONTHSTOSHOW', false));
					$configurationPanel->setmiddle('<input type="number" class="inputbox" size="5" name="cfg_CalendarMonthsToShow" value="' . $mrConfig['CalendarMonthsToShow'] . '"/>');
					$configurationPanel->setright(jr_gettext('_JOMRES_COM_MONTHSTOSHOW_DESC', '_JOMRES_COM_MONTHSTOSHOW_DESC', false));
					$configurationPanel->insertSetting();

					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MONTHS_STARTOFYEAR', '_JOMRES_COM_MONTHS_STARTOFYEAR', false));
					$configurationPanel->setmiddle($lists['calstartfrombeginningofyear']);
					$configurationPanel->setright(jr_gettext('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', false));
					$configurationPanel->insertSetting();
				}
			}

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', false));
			$configurationPanel->setmiddle($lists['showSlideshowInline']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', false));
			$configurationPanel->setmiddle($lists['showSlideshowLink']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			if ($mrConfig['is_real_estate_listing'] == 0) {
				if ($mrConfig['singleRoomProperty'] != '1') {
					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', false));
					$configurationPanel->setmiddle($lists['roomslistinpropertydetails']);
					$configurationPanel->setright();
					$configurationPanel->insertSetting();

					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SHOWROOMSLISTLINK', '_JOMRES_COM_A_SHOWROOMSLISTLINK', false));
					$configurationPanel->setmiddle($lists['showRoomsListingLink']);
					$configurationPanel->setright();
					$configurationPanel->insertSetting();
				}

				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', false));
				$configurationPanel->setmiddle($lists['showAvailabilityCalendar']);
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', false));
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', false));
				$configurationPanel->setmiddle($lists['showTariffsInline']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', false));
				$configurationPanel->setmiddle($lists['showTariffsLink']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(jr_gettext('JOMRES_COM_A_VERBOSETARIFFINTO', 'JOMRES_COM_A_VERBOSETARIFFINTO', false));
				$configurationPanel->setmiddle($lists['verbosetariffinfo']);
				$configurationPanel->setright(jr_gettext('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', false));
				$configurationPanel->insertSetting();
			}

			if (!isset($mrConfig['galleryLink'])) {
				$mrConfig['galleryLink'] = '';
			}

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_GALLERYLINK', '_JOMRES_COM_A_GALLERYLINK', false));
			$configurationPanel->setmiddle('<input type="url" class="inputbox form-control"  size="50" name="cfg_galleryLink" value="' . $mrConfig['galleryLink'] . '" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_GALLERYLINK_DESC', '_JOMRES_COM_A_GALLERYLINK_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', false));
			$configurationPanel->setmiddle($lists['showPfeaturesCategories']);
			$configurationPanel->setright(jr_gettext('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->endPanel();
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
