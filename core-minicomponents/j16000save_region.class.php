<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
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

class j16000save_region
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
		$id = intval(jomresGetParam($_REQUEST, 'id', 0));
		$regionname = (string) jomresGetParam($_REQUEST, 'regionname', '');
		$countrycode = strtoupper((string) jomresGetParam($_REQUEST, 'countrycode', ''));
		if ($id == 0) {
			$query = "INSERT INTO #__jomres_regions (`countrycode`,`regionname`) VALUES ('".$countrycode."','".$regionname."')";
			$id = doInsertSql($query);
		} else {
			$query = "UPDATE #__jomres_regions SET `countrycode`='".$countrycode."',`regionname`='".$regionname."' WHERE id = ".$id;
			$result = doInsertSql($query);
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_regions'), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
