<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.9
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j99998user_feedback
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		if (get_showtime('no_html') == 1 || get_showtime('popup') == 1 || AJAXCALL) {
            return '';
        }

		$output = array();
		
        $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
        $messages = $jomres_messaging->get_messages();
		
		$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');

		if (!empty($messages)) {
			foreach ($messages as $message ) {
				$jomres_user_feedback->construct_message(array('message'=>$message, 'css_class'=>'alert-warning alert-error'));
			}
			
		}
		//no need to run this if there are no feedback messages set
		if (empty($jomres_user_feedback->user_feedback_messages)) {
			return;
		}

		$output[ 'MESSAGES' ] = $jomres_user_feedback->get_messages();

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('user_feedback.html');
		$tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
