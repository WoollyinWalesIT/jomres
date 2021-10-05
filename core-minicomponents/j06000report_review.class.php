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

class j06000report_review
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
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsRegistered) {
			$MiniComponents->triggerEvent('02280');
		} else {
			$rating_id = jomresGetParam($_REQUEST, 'rating_id', 0);

			if ($rating_id > 0) {
				$output[ '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL' ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', false, false);
				$output[ '_JOMRES_REVIEWS_REPORT_REVIEW' ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW', '_JOMRES_REVIEWS_REPORT_REVIEW', false, false);
				$output[ '_JOMRES_REVIEWS_SUBMIT' ] = jr_gettext('_JOMRES_REVIEWS_SUBMIT', '_JOMRES_REVIEWS_SUBMIT', false, false);
				$output[ '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR' ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', false, false);
				$output[ 'JOMRES_COM_A_MESSAGE' ] = jr_gettext('JOMRES_COM_A_MESSAGE', 'JOMRES_COM_A_MESSAGE', false, false);
				
				$output[ 'PROPERTY_DETAILS_URL' ] = get_property_details_url(get_showtime('last_viewed_property_uid'));

				$output[ 'RATING_ID' ] = $rating_id;

				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('report_review.html');
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->displayParsedTemplate();
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
