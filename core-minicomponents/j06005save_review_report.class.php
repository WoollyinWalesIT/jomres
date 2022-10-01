<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
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

class j06005save_review_report
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

		$rating_id = (int) $_REQUEST[ 'rating_id' ];
		$report = jomresGetParam($_REQUEST, 'report', '');

		if ($jrConfig[ 'use_reviews' ] == '1' && $rating_id > 0 && $report != '') {
			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();
			$Reviews->save_review_report($rating_id, $report);
			$property_uid = $Reviews->get_property_uid_for_rating_id($rating_id);

			$property_name = getPropertyName($property_uid);
			$subject = jr_gettext('JOMRES_NEWREPORT_SUBJECT', 'JOMRES_NEWREPORT_SUBJECT', false).' '.$property_name;
			$message = jr_gettext('JOMRES_NEWREPORT_MESSAGE', 'JOMRES_NEWREPORT_MESSAGE', false).' '.$property_name.'  '.JOMRES_SITEPAGE_URL_ADMIN.'&task=view_property_reviews&property_uid='.(int) $property_uid.'  <br/><br/>';
			sendAdminEmail($subject, $message);

			jomresRedirect(get_property_details_url($property_uid), '');
			exit;
		}
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
