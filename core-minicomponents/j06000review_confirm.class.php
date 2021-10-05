<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
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

class j06000review_confirm
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$rating_id = (int) $_GET[ 'rating_id' ];
		$state = (int) $_GET[ 'state' ];

		if ($jrConfig[ 'use_reviews' ] == '1' && $rating_id > 0) {
			$string = '';

			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();

			$property_uid = $Reviews->get_property_uid_for_rating_id($rating_id);
			
			if ($property_uid == 0) { // This definately isn't right. Just return without doing anything else.
				return;
			}
			
			$Reviews->property_uid = $property_uid;

			if ($Reviews->checkConfirmUniqueIp($rating_id) != 0) {
				echo '0';
				return;
			}

			$Reviews->save_confirmation($rating_id, $state);
			echo '1';
			return;
		}
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
