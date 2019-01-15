<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000cron_gdpr_cleanup
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

			
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			
			jr_import('jomres_gdpr_cleanup');
			$jomres_gdpr_cleanup = new jomres_gdpr_cleanup();
			
			$query = "SELECT contract_uid , invoice_uid FROM #__jomres_contracts WHERE `departure` <= DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL ".(int)$jrConfig[ 'gdpr_booking_retention_period' ]." DAY) ";
			$result = doSelectSql($query);

			if (!empty($result)) {
				
				foreach ($result as $r ){
					if ($r->contract_uid > 0 && $r->invoice_uid > 0 ) {
						$jomres_gdpr_cleanup->cleanup_booking($r->contract_uid , $r->invoice_uid );
					}
				}
			}
			
			$query = "SELECT id FROM #__jomresportal_invoices WHERE `due_date` <= DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL ".(int)$jrConfig[ 'gdpr_other_invoice_retention_period' ]." DAY) ";
			$result = doSelectSql($query);

			if (!empty($result)) {
				foreach ($result as $r ){
					if ( $r->id > 0 ) {
						$jomres_gdpr_cleanup->cleanup_invoice( $r->id );
					}
				}
			}

	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
