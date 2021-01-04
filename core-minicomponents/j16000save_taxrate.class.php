<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
 *
 * @copyright	2005-2021 Vince Wooll
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

class j16000save_taxrate
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
		$id = intval(jomresGetParam($_POST, 'id', 0));
		$code = jomresGetParam($_POST, 'code', '');
		$description = jomresGetParam($_POST, 'description', '');
		$rate_val = jomresGetParam($_POST, 'rate', 0.00);
		$is_eu_country = jomresGetParam($_POST, 'is_eu_country', false);

		$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

		$jrportal_taxrate->tmp_taxrate['id'] = $id;
		$jrportal_taxrate->tmp_taxrate['code'] = $code;
		$jrportal_taxrate->tmp_taxrate['description'] = $description;
		$jrportal_taxrate->tmp_taxrate['rate'] = $rate_val;
		$jrportal_taxrate->tmp_taxrate['is_eu_country'] = $is_eu_country;

		if ($id > 0) {
			$jrportal_taxrate->commitUpdateTaxRate();
		} else {
			$jrportal_taxrate->commitTaxRate();
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_taxrates'), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
