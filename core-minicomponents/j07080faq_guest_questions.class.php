<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j07080faq_guest_questions
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$kb = jomres_singleton_abstract::getInstance('jomres_knowledgebase');

		//dummy faq
		$kb->guest_faq['_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING'][] = array(
			'question' => jr_gettext('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', '_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', false),
			'answer' => jr_gettext('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', '_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', false),
			);
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
