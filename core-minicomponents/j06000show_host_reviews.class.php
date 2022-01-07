<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
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

class j06000show_host_reviews
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
		
		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();
		
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
		
		jr_import('jrportal_guest_profile');
		$jrportal_guest_profile = new jrportal_guest_profile();
		$jrportal_guest_profile->cms_user_id = $cms_user_id;
		$jrportal_guest_profile->get_guest_profile();
		$jrportal_guest_profile->get_guest_reviews();
	
		if (empty($jrportal_guest_profile->guest_reviews)) {
			return;
		}
		
		$property_uids = array();
		foreach ($jrportal_guest_profile->guest_reviews as $property_id => $review) {
			$property_uids[] = $property_id;
		}

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_images_multi($property_uids, array('property'));
		$images = $jomres_media_centre_images->multi_query_images;
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data_multi($property_uids);

		$rows = array();
		
		foreach ($jrportal_guest_profile->guest_reviews as $property_uid => $review ) {
			
			if (array_key_exists ($property_uid , $current_property_details->multi_query_result)  ) {
				$property = $current_property_details->multi_query_result[$property_uid];
				
				if (  $property['published'] == 1 ) {
					$r = array();

					if (isset($images[$property_uid]["property"][0][0]["small"])) {
						$r['IMAGE'] =$images[$property_uid]["property"][0][0]["small"];
					} else {
						$r['IMAGE'] = $images["noimage-small"];
					}

					$r[ 'GUEST_PROFILE_OF_HOST_SAID' ] = jr_gettext('GUEST_PROFILE_OF_HOST_SAID', 'GUEST_PROFILE_OF_HOST_SAID', false, false);

					$r['PROPERTY_NAME'] = $property['property_name'];
					$r['REVIEW_CONTENT'] = $review['review'];
					$r['VIEW_PROPERTY_LINK'] = get_property_details_url($property_uid);
					$rows[] = $r;
				}
			}
		}

		$output = array();

		$output[ 'GUEST_PROFILE_OF_ME' ] = jr_gettext('GUEST_PROFILE_OF_ME', 'GUEST_PROFILE_OF_ME' , false );

		$pageoutput[ ] = $output;

		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('show_host_reviews.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$this->retVals = $tmpl->getParsedTemplate();

		if ($output_now) {
			echo $this->retVals;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
