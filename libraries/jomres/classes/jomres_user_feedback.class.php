<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

// A class for providing feedback to all users
class jomres_user_feedback
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->user_feedback_messages = array();
		$this->messages = '';
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_messages()
	{
		if (!empty($this->user_feedback_messages)) {
			foreach ($this->user_feedback_messages as $message) {
				$this->messages .= $message;
			}

			return $this->messages;
		}

		return false;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function construct_message($message_array = array())
	{
		if (empty($message_array)) {
			return false;
		}

		$button = '';
		if (isset($message_array['link'])) {
			$pageoutput = array();
			$output = array();
			
			$output['LINK'] = $message_array['link'];
			$output['BUTTON_TEXT'] = $message_array['button_text'];
			
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('user_feedback_button.html');
			$button = $tmpl->getParsedTemplate();
		}

		$pageoutput = array();
		$output = array();

		if (isset($message_array['message'])) {
			$output['MESSAGE'] = $message_array['message'];
		}
		
		if (isset($message_array['css_class'])) {
			$output['CSS_CLASS'] = $message_array['css_class'];
		}
		
		$output['ACTION_LINK'] = $button;

		$pageoutput[] = $output;

		$tmpl = new patTemplate();
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('user_feedback_pane.html');

		$this->user_feedback_messages[] = $tmpl->getParsedTemplate();
		
		return true;
	}
}
