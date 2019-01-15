<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j07060faq_manager_questions
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$mrConfig = getPropertySpecificSettings();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$kb = jomres_singleton_abstract::getInstance('jomres_knowledgebase');

		//property
		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', '_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', '_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', '_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', '_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', false),
			);

		if ($mrConfig[ 'singleRoomProperty' ] != '1') {
			$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
				'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', '_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', false),
				'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', '_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', false),
				);

			$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
				'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', '_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', false),
				'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', '_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', false),
				);
		}

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', '_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', '_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', '_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', '_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', '_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', '_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', false),
			);

		if ($thisJRUser->superPropertyManager) {
			$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
				'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', '_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', false),
				'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', '_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', false),
			);
		} else {
			$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY'][] = array(
				'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', '_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', false),
				'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', '_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', false),
			);
		}

		//payments
		$kb->manager_faq['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', '_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', '_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', '_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', false),
			'answer' => jr_gettext('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', '_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', '_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', '_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', false),
			);

		//bookings
		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', '_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', '_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', '_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', '_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', '_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', '_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', false),
			);

		//images
		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', '_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', '_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', '_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', '_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', '_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', '_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', '_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', '_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', '_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', '_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', false),
			);

		$kb->manager_faq['_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', '_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', false),
			'answer' => jr_gettext('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', '_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', false),
			);
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
