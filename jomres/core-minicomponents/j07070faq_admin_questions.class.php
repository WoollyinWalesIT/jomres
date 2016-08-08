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

class j07070faq_admin_questions
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

		$faq_questions = get_showtime("faq_questions");
		
		if (is_null($faq_questions))
			$faq_questions = array();
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES","_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES","_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD","_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD","_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD",false)
			);

		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES","_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES","_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES","_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES","_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES",false)
			);

		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS","_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS","_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES","_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES","_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS","_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS","_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY","_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY","_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY",false)
			);

		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS","_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS","_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL","_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL","_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL",false)
			);

		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY","_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY","_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE","_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE","_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE",false)
			);
		
		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED","_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED","_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED",false)
			);

		$faq_questions ['_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES'][] = array (
			"question" => jr_gettext("_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE","_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE",false),
			"answer" => jr_gettext("_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE","_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE",false)
			);
		
		
		
		
		
		set_showtime("faq_questions" , $faq_questions );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}