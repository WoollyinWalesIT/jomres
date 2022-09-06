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

class j10501booking_form
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

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];

		if (!isset($jrConfig[ 'admin_options_level' ])) {
			$jrConfig[ 'admin_options_level' ] = 0;
		}

		$configurationPanel->startPanel(jr_gettext('_JOMRES_PATHWAY_BOOKINGFORM', '_JOMRES_PATHWAY_BOOKINGFORM', false));

		if ($jrConfig[ 'admin_options_level' ] > 1) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', false));
			$configurationPanel->setmiddle($lists['show_booking_form_in_property_details']);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', false));
			$configurationPanel->insertSetting();
		}

		$configurationPanel->setleft(jr_gettext('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', false));
		$configurationPanel->setmiddle($lists['send_email_copies_to_site_admins']);
		$configurationPanel->setright(jr_gettext('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', false));
		$configurationPanel->insertSetting();

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			if (!isset($jrConfig[ 'minimum_deposit_percentage' ])) {
				$jrConfig[ 'minimum_deposit_percentage' ] = 0;
			}

			$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_MINIMUM_DEPOSIT', '_JOMRES_CONFIG_MINIMUM_DEPOSIT', false));
			$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_minimum_deposit_percentage" value="'.$jrConfig[ 'minimum_deposit_percentage' ].'" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', '_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', false));
			$configurationPanel->insertSetting();
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_BOOKINGORM_TAX_OUTPUT', '_JOMRES_BOOKINGORM_TAX_OUTPUT', false));
			$configurationPanel->setmiddle($lists['show_tax_in_totals_summary']);
			$configurationPanel->setright(jr_gettext('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', false));
			$configurationPanel->insertSetting();
		}

		if ($jrConfig[ 'admin_options_level' ] > 0) {
			$jrConfig[ 'useNewusers' ] = '1'; // For Jomres v9.11 and GDPR compliance we are now forcing the system to create new users whenever a booking is made
			/* $configurationPanel->setleft(jr_gettext('_JOMRES_COM_NEWUSER', '_JOMRES_COM_NEWUSER', false));
			$configurationPanel->setmiddle($lists['useNewusers']);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_NEWUSER_DESC', '_JOMRES_COM_NEWUSER_DESC', false));
			$configurationPanel->insertSetting(); */

			$configurationPanel->setleft(jr_gettext('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', false));
			$configurationPanel->setmiddle($lists['useNewusers_sendemail']);
			$configurationPanel->setright(jr_gettext('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', false));
			$configurationPanel->insertSetting();
		}

		if ($jrConfig[ 'admin_options_level' ] > 1) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_BOOKINGFORM_LOCK_TITLE', '_JOMRES_BOOKINGFORM_LOCK_TITLE', false));
			$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_room_lock_timeout" value="'.$jrConfig[ 'room_lock_timeout' ].'" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_BOOKINGFORM_LOCK_DESC', '_JOMRES_BOOKINGFORM_LOCK_DESC', false));
			$configurationPanel->insertSetting();
		}


		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10522', $componentArgs);

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
