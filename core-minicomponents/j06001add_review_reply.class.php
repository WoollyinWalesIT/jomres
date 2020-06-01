<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
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

class j06001add_review_reply
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

		$rating_id = jomresGetParam($_REQUEST, 'rating_id', 0);
		$property_uid = getDefaultProperty();
		
		if ($rating_id == 0 ) {
			throw new Exception('Rating id is empty. ');
		}
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		jr_import('jomres_reviews');
		$Reviews = new jomres_reviews();
		$Reviews->property_uid = $property_uid;
		$itemReviews = $Reviews->showReviews($property_uid);
		
		if ( isset($itemReviews['fields'][$rating_id] ) ) {
			$review = $itemReviews['fields'][$rating_id];
			
			$output = array();
			$pageoutput = array();
			
			$output['PAGETITLE'] = jr_gettext('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', '_JOMRES_REVIEWS_REPLY_OPPORTUNITY' , false );
			
			$output['_JOMRES_REVIEWS_TITLE'] = jr_gettext('_JOMRES_REVIEWS_TITLE', '_JOMRES_REVIEWS_TITLE' , false );
			$output['_JOMRES_REVIEWS_REVIEWBODY'] = jr_gettext('_JOMRES_REVIEWS_REVIEWBODY', '_JOMRES_REVIEWS_REVIEWBODY' , false );
			$output['_JOMRES_REVIEWS_PROS'] = jr_gettext('_JOMRES_REVIEWS_PROS', '_JOMRES_REVIEWS_PROS' , false );
			$output['_JOMRES_REVIEWS_CONS'] = jr_gettext('_JOMRES_REVIEWS_CONS', '_JOMRES_REVIEWS_CONS' , false );
			$output['_JOMRES_REVIEWS_SUBMITTEDDATE'] = jr_gettext('_JOMRES_REVIEWS_SUBMITTEDDATE', '_JOMRES_REVIEWS_SUBMITTEDDATE' , false );
			$output['_JOMRES_REVIEWS_REPLY_SAID'] = jr_gettext('_JOMRES_REVIEWS_REPLY_SAID', '_JOMRES_REVIEWS_REPLY_SAID' , false );
			$output['_JOMRES_REVIEWS_AVERAGE_RATING'] = jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING', '_JOMRES_REVIEWS_AVERAGE_RATING' , false );
			$output['_JOMRES_REVIEWS_PLACEHOLDER_REPLY'] = jr_gettext('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', '_JOMRES_REVIEWS_PLACEHOLDER_REPLY' , false );
			$output['_JOMRES_REVIEWS_REPLY_COMMENT'] = jr_gettext('_JOMRES_REVIEWS_REPLY_COMMENT', '_JOMRES_REVIEWS_REPLY_COMMENT' , false );
			$output[ 'PROPERTY_DETAILS_URL' ] = get_property_details_url($property_uid);
			$output['_JOMRES_REVIEWS_REPLY_OPPORTUNITY'] = jr_gettext('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', '_JOMRES_REVIEWS_REPLY_OPPORTUNITY' , false );
			
			$output['_JOMRES_REVIEWS_REPLY_RULES_WARNING'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_WARNING', '_JOMRES_REVIEWS_REPLY_RULES_WARNING' , false );
			$output['_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', '_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES' , false );
			$output['_JOMRES_REVIEWS_REPLY_RULES_REPORT'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_REPORT', '_JOMRES_REVIEWS_REPLY_RULES_REPORT' , false );
			$output['_JOMRES_REVIEWS_REPLY_RULES_FIRM'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_FIRM', '_JOMRES_REVIEWS_REPLY_RULES_FIRM' , false );
			$output['_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', '_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE' , false );
			$output['_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT' , false );
			$output['_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', '_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE' , false );
			$output['_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT'] = jr_gettext('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT' , false );
			
			$output['TITLE'] = $review['review_title'];
			$output['REVIEWBODY'] =  $review['review_description'];
			$output['PROS'] = $review['pros'];
			$output['CONS'] = $review['cons'];
			$output['SUBMITTEDDATE'] = $review['rating_date'];
			$output['REVIEWBODY_SAID'] = $review['user_name'];
			$output['AVERAGE_RATING'] = $review['rating'];
			$output['RATING_ID'] = $rating_id;
			
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('add_review_reply.html');
			echo $tmpl->getParsedTemplate();
		
		} else {
			throw new Exception('Rating does not exist.');
		}
		
	}


	public function getRetVals()
	{
		return null;
	}
}
