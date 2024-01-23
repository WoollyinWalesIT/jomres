<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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

class j06005add_review
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

		if (!isset($_GET[ 'property_uid' ])) {
			$property_uid = get_showtime('property_uid');
		} else {
			$property_uid = (int) $_GET[ 'property_uid' ];
		}
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if (!$jomres_gdpr_optin_consent->user_consents_to_storage()&& !isset($_REQUEST['skip_consent_form'])) {
			echo $consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form', array ('output_now' => false));
			return;
		}
 

		if ($jrConfig[ 'use_reviews' ] == '1' && $property_uid > 0) {
			$output = array();
			$pageoutput = array();
			$rows = array();

			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();
			$Reviews->property_uid = $property_uid;
			$this_user_can_review_this_property = $Reviews->this_user_can_review_this_property();
			if ($this_user_can_review_this_property) {
				$output[ '_JOMRES_REVIEWS' ] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false, false);
				$output[ '_JOMRES_REVIEWS_TITLE' ] = jr_gettext('_JOMRES_REVIEWS_TITLE', '_JOMRES_REVIEWS_TITLE', false, false);
				$output[ '_JOMRES_REVIEWS_REVIEWBODY' ] = jr_gettext('_JOMRES_REVIEWS_REVIEWBODY', '_JOMRES_REVIEWS_REVIEWBODY', false, false);

				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', false, false);

				$output[ '_JOMRES_REVIEWS_SUBMIT' ] = jr_gettext('_JOMRES_REVIEWS_SUBMIT', '_JOMRES_REVIEWS_SUBMIT', false, false);

				$output[ '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', false, false);
				$output[ '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL' ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', false, false);

				$output[ '_JOMRES_REVIEWS_RATING' ] = jr_gettext('_JOMRES_REVIEWS_RATING', '_JOMRES_REVIEWS_RATING', false, false);
				$output[ '_JOMRES_REVIEWS_RATING_1' ] = jr_gettext('_JOMRES_REVIEWS_RATING_1', '_JOMRES_REVIEWS_RATING_1');
				$output[ '_JOMRES_REVIEWS_RATING_2' ] = jr_gettext('_JOMRES_REVIEWS_RATING_2', '_JOMRES_REVIEWS_RATING_2');
				$output[ '_JOMRES_REVIEWS_RATING_3' ] = jr_gettext('_JOMRES_REVIEWS_RATING_3', '_JOMRES_REVIEWS_RATING_3');
				$output[ '_JOMRES_REVIEWS_RATING_4' ] = jr_gettext('_JOMRES_REVIEWS_RATING_4', '_JOMRES_REVIEWS_RATING_4');
				$output[ '_JOMRES_REVIEWS_RATING_5' ] = jr_gettext('_JOMRES_REVIEWS_RATING_5', '_JOMRES_REVIEWS_RATING_5');
				$output[ '_JOMRES_REVIEWS_RATING_6' ] = jr_gettext('_JOMRES_REVIEWS_RATING_6', '_JOMRES_REVIEWS_RATING_6');

				$output[ '_JOMRES_REVIEWS_PROS' ] = jr_gettext('_JOMRES_REVIEWS_PROS', '_JOMRES_REVIEWS_PROS', false, false);
				$output[ '_JOMRES_REVIEWS_CONS' ] = jr_gettext('_JOMRES_REVIEWS_CONS', '_JOMRES_REVIEWS_CONS', false, false);
				$output[ '_JOMRES_REVIEWS_ADD_REVIEW' ] = jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW', '_JOMRES_REVIEWS_ADD_REVIEW', false, false);
				$output[ '_JOMRES_REVIEWS_COMPLETEALLFIELDS' ] = jr_gettext('_JOMRES_REVIEWS_COMPLETEALLFIELDS', '_JOMRES_REVIEWS_COMPLETEALLFIELDS', false, false);
				$output[ 'PROPERTY_DETAILS_URL' ] = get_property_details_url($property_uid);
				$output[ 'PROPERTY_UID' ] = $property_uid;
				$output[ '_JOMRES_COM_A_CANCEL' ] = jr_gettext('_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL', false);
				
				$output[ 'CONTRACT_UID' ] = 0;
				if (isset($_GET[ 'contract_uid' ])) {
					$output[ 'CONTRACT_UID' ] = (int)$_GET[ 'contract_uid' ];
				}
				
				$yesno = array();
				$yesno[] = jomresHTML::makeOption('0', jr_gettext("_JOMRES_COM_MR_NO", '_JOMRES_COM_MR_NO', false));
				$yesno[] = jomresHTML::makeOption('1', jr_gettext("_JOMRES_COM_MR_YES", '_JOMRES_COM_MR_YES', false));
				$output['ANONYMISE_YESNO']		= jomresHTML::selectList($yesno, 'anonymise', '', 'value', 'text', 0);
		
				$output[ '_JOMRES_REVIEWS_ANONYMISE' ] = jr_gettext('_JOMRES_REVIEWS_ANONYMISE', '_JOMRES_REVIEWS_ANONYMISE', false, false);
				$output[ '_JOMRES_REVIEWS_ANONYMISE_DESC' ] = jr_gettext('_JOMRES_REVIEWS_ANONYMISE_DESC', '_JOMRES_REVIEWS_ANONYMISE_DESC', false, false);
		
				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);

				$tmpl->readTemplatesFromInput('add_review.html');
				$this->retVals = $tmpl->getParsedTemplate();
				echo $this->retVals;
			} else {
				echo jr_gettext('_JOMRES_REVIEWS_ALREADYREVIEWED', '_JOMRES_REVIEWS_ALREADYREVIEWED', false, false);
			}
		}
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
