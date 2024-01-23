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

class j06000show_property_reviews_summary
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'show_property_reviews_summary',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
					),
				);

			return;
		}
		$this->retVals = '';

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}
		
		if ($property_uid == 0) {
			return;
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		if ((int) $jrConfig[ 'use_reviews' ] == 0) {
			return;
		}

		$output = array();
		$pageoutput = array();

		jr_import('jomres_reviews');
		$Reviews = new jomres_reviews();
		$Reviews->property_uid = $property_uid;
		$itemRating = $Reviews->showRating($property_uid);

		$output[ 'AVERAGE_RATING' ] = number_format($itemRating[ 'avg_rating' ], 1, '.', '');
		$output[ 'NUMBER_OF_REVIEWS' ] = $itemRating[ 'counter' ];
		$output[ '_JOMRES_REVIEWS_AVERAGE_RATING' ] = jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING', '_JOMRES_REVIEWS_AVERAGE_RATING', false, false);
		$output[ '_JOMRES_REVIEWS_TOTAL_VOTES' ] = jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES', '_JOMRES_REVIEWS_TOTAL_VOTES', false, false);

		$rating_text = $Reviews->generate_review_rating_text($output[ 'AVERAGE_RATING' ]) ;

		$output['RATING_TEXT_COLOUR'] = 'text-success';
		$output['RATING_SCORE_TEXT'] = jomres_badge(
			$rating_text,
			'success'
		);
		if ($output['AVERAGE_RATING'] > 5 && $output['AVERAGE_RATING'] < 7) {
			$output['RATING_TEXT_COLOUR'] = 'text-warning';
			$output['RATING_SCORE_TEXT'] = jomres_badge(
				$rating_text,
				'warning'
			);
		}

		if ($output['AVERAGE_RATING'] <= 5) {
			$rob['RATING_TEXT_COLOUR'] = 'text-danger';
			$output['RATING_SCORE_TEXT'] = jomres_badge(
				$rating_text,
				'danger'
			);
		}

		$output['SHOW_PROPERTY_REVIEWS_URL'] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_reviews&property_uid='.$property_uid);

		$pageoutput[] = $output;

		$tmpl = new patTemplate();
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('show_property_reviews_summary.html');
		$result = $tmpl->getParsedTemplate();

		if ($output_now) {
			echo $result;
		} else {
			$this->retVals = $result;
		}
	}

	//this must be included in all mini-components
	public function getRetVals()
	{
		return $this->retVals;
	}
}
