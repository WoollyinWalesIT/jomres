<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * 
	 *
	 *
	 */

class jomres_knowledgebase
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
		$jomres_language->get_language('faq');

		$this->admin_faq = false;
		$this->manager_faq = false;
		$this->guest_faq = false;
	}
	
	/**
	 * 
	 *
	 *
	 */

	// Get admin faq
	public function get_admin_faq()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if (!$this->admin_faq) {
			$this->admin_faq = array();

			$MiniComponents->triggerEvent('07070');
		}

		return $this->build_faq($this->admin_faq);
	}
	
	/**
	 * 
	 *
	 *
	 */

	// Get manager faq
	public function get_manager_faq()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if (!$this->manager_faq) {
			$this->manager_faq = array();

			$MiniComponents->triggerEvent('07060');
		}

		return $this->build_faq($this->manager_faq);
	}
	
	/**
	 * 
	 *
	 *
	 */

	// Get guest faq
	public function get_guest_faq()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if (!$this->guest_faq) {
			$this->guest_faq = array();

			$MiniComponents->triggerEvent('07080');
		}

		return $this->build_faq($this->guest_faq);
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function build_faq($faq = array())
	{
		if (empty($faq)) {
			return false;
		}

		$output = array();
		$pageoutput = array();
		$category_rows = array();
		$counter = 1;

		foreach ($faq as $category => $qa) {
			$output = array();
			$pageoutput = array();
			$rows = array();

			$output['CATEGORY'] = jr_gettext($category, $category, false);

			foreach ($qa as $question_set) {
				$r = array();

				$r['COUNTER'] = $counter;
				$r['QUESTION'] = $question_set['question'];
				$r['ANSWER'] = $question_set['answer'];

				$rows[] = $r;
				++$counter;
			}

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();

			if (jomres_cmsspecific_areweinadminarea()) {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			} else {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			}

			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$tmpl->readTemplatesFromInput('faq_questions.html');

			$category_rows[]['CATEGORY'] = $tmpl->getParsedTemplate();
		}

		$output = array();
		$pageoutput = array();

		$output['_JOMRES_FAQ'] = jr_gettext('_JOMRES_FAQ', '_JOMRES_FAQ', false);

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();

		if (jomres_cmsspecific_areweinadminarea()) {
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		} else {
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		}

		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('questions', $category_rows);
		$tmpl->readTemplatesFromInput('faq_pane.html');

		return $tmpl->getParsedTemplate();
	}
}
