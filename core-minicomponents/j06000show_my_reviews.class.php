<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
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

class j06000show_my_reviews
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
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$this->retVals = '';
		
		$cms_user_id = (int)jomresGetParam($_REQUEST, 'cms_user_id', 0);
		
		if (isset($componentArgs['cms_user_id']) && $cms_user_id == 0 ) {
			$cms_user_id = $componentArgs['cms_user_id'];
		} elseif ($thisJRUser->userIsRegistered && $cms_user_id == 0) {
			$cms_user_id = (int)$thisJRUser->id;
		}
		
		if ($cms_user_id == 0 ) {
			return;
		}
		
		if (isset($_REQUEST[ 'output_now' ])) {
			$output_now = (bool) jomresGetParam($_REQUEST, 'output_now', 1);
		} elseif (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool)$componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}
		
		$output = array();
		$private_output = array();
		

		$query = "SELECT rating_id , review_title , item_id , rating FROM #__jomres_reviews_ratings WHERE user_id = ".(int)$cms_user_id." AND published = 1";
		$reviews = doSelectSql($query);
		if (empty($reviews)) {
			return;
		}
		
		$property_uids = array();
		foreach ($reviews as $review) {
			$property_uids[] = $review->item_id;
		}
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$images = $jomres_media_centre_images->get_images_multi($property_uids, array('property'));

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data_multi($property_uids);
		
		$rows = array();
		foreach ( $reviews as $review ) {

			if (array_key_exists ($review->item_id , $current_property_details->multi_query_result)  ) {
				$property = $current_property_details->multi_query_result[$review->item_id];
				
				if (  $property['published'] == 1 ) {
					$r = array();
					if (isset($images[$review->item_id]["property"][0][0]["small"])) {
						$r['IMAGE'] =$images[$review->item_id]["property"][0][0]["small"];
					} else {
						$r['IMAGE'] = $images["noimage-small"];
					}

					$r[ 'GUEST_PROFILE_MY_REVIEWS_I_SAID' ] = jr_gettext('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'GUEST_PROFILE_MY_REVIEWS_I_SAID', false, false);
					$r[ 'GUEST_PROFILE_MY_REVIEWS_I_SCORED' ] = jr_gettext('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'GUEST_PROFILE_MY_REVIEWS_I_SCORED', false, false);
					
					$r['PROPERTY_NAME'] = $property['property_name'];
					$r['REVIEW_TITLE'] = $review->review_title;
					$r['REVIEW_SCORE'] = $review->rating;
					$r['VIEW_PROPERTY_REVIEWS'] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_reviews&property_uid='.$review->item_id);
					$rows[] = $r;
				}
			}
		}
		
		$output[ 'GUEST_PROFILE_MY_REVIEWS' ] = jr_gettext('GUEST_PROFILE_MY_REVIEWS', 'GUEST_PROFILE_MY_REVIEWS', false, false);
		
		if (!empty($rows)) {
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('simple_review_list.html');
			$this->retVals = $tmpl->getParsedTemplate();
		}

			
		if ($output_now) {
			echo $this->retVals;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
