<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10501roi
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();

		$configurationPanel 			= $componentArgs[ 'configurationPanel' ];
		$lists 							= $componentArgs[ 'lists' ];

		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{				
			$configurationPanel->startPanel( jr_gettext( "_JRPORTAL_ROI_TAB", _JRPORTAL_ROI_TAB, false ) );
	
			$configurationPanel->setleft( jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_USE', _JRPORTAL_SUBSCRIPTIONS_USE, false ) );
			$configurationPanel->setmiddle( $lists['useSubscriptions'] );
			$configurationPanel->setright( jr_gettext( '_JRPORTAL_SUBSCRIPTIONS_USE', _JRPORTAL_SUBSCRIPTIONS_USE, false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JRPORTAL_INVOICES_COMMISSION_USE', _JRPORTAL_INVOICES_COMMISSION_USE, false ) );
			$configurationPanel->setmiddle( $lists['use_commission'] );
			$configurationPanel->setright( jr_gettext( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', _JRPORTAL_INVOICES_COMMISSION_USE_DESC, false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JRPORTAL_CONFIG_DEFAULT_CRATE', _JRPORTAL_CONFIG_DEFAULT_CRATE, false ) );
			$configurationPanel->setmiddle( $lists['defaultCrate'] );
			$configurationPanel->setright( jr_gettext( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', _JRPORTAL_CONFIG_DEFAULT_CRATE_DESC, false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', _JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS, false ) );
			$configurationPanel->setmiddle( $lists['manager_bookings_trigger_commission'] );
			$configurationPanel->setright( jr_gettext( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', _JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC, false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', _JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND, false ) );
			$configurationPanel->setmiddle( $lists['commission_autosuspend_on_overdue'] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', _JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD, false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_commission_autosuspend_on_overdue_threashold" value="' . $jrConfig[ 'commission_autosuspend_on_overdue_threashold' ] . '" />' );
			$configurationPanel->setright( jr_gettext( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', _JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC, false ) );
			$configurationPanel->insertSetting();
		
			$configurationPanel->endPanel();
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
