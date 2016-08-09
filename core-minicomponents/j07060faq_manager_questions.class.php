<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j07060faq_manager_questions
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		
		$mrConfig           = getPropertySpecificSettings();
		
		$faq_questions = get_showtime("faq_questions");
		
		if (is_null($faq_questions))
			$faq_questions = array();
		
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY","_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY","_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY",false),
			);

		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW","_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW","_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW",false),
			);
		
		if ( $mrConfig[ 'singleRoomProperty' ] != "1" )
			{
			$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array (
				"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP","_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP",false),
				"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP","_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP",false),
				);
			}

		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES","_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES","_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES",false),
			);
		
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS","_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS","_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS",false),
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS","_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS","_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS",false),
			);

		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY","_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY","_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY",false),
			);

		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS","_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS","_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS",false),
			);
		
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE","_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE","_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE",false),
			);
			
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK","_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK","_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK",false),
			);
			
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO","_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO","_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO",false),
			);
			
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN","_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN","_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN",false),
			);
			
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES","_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES","_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES",false),
			);
			
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS","_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES","_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES",false),
			);
			
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW","_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW","_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW",false),
			);
			
		$faq_questions ['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS","_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS","_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS",false),
			);
			
		set_showtime("faq_questions" , $faq_questions );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}