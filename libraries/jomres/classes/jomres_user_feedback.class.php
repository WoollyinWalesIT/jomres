<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// A class for providing feedback to all users
//not currently used in any way
class jomres_user_feedback
{
	private static $configInstance;

    public function __construct()
    {
        $this->user_feedback_messages = array();
        $this->messages = '';
		$this->css_classes_danger = 'danger';
		$this->css_classes_warning = 'warning';
		$this->css_classes_successs = 'success';
		$this->css_classes_info = 'info';
    }
	
	public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function generate_messages()
    {
        if (!empty($this->user_feedback_messages)) {
            foreach ($this->user_feedback_messages as $message) {
                $this->messages .= $this->construct_message($message);
            }
        }

        return $this->messages;
    }

    public function construct_message($message_array)
    {
        $button = '';
        if (isset($message_array['LINK'])) {
            $pageoutput = array();
            $output = array();
            $output['LINK'] = $message_array['LINK'];
            $output['BUTTON_TEXT'] = $message_array['BUTTON_TEXT'];
            $pageoutput[ ] = $output;
            $tmpl = new patTemplate();
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->readTemplatesFromInput('user_feedback_button.html');
            $button = $tmpl->getParsedTemplate();
        }

        $pageoutput = array();
        $output = array();

        $output['MESSAGE'] = $message_array['MESSAGE'];
        $output['ACTION_LINK'] = $button;
        switch ($message_array['CSS_CLASS']) {
            case 'danger':
                $output['CSS_CLASS'] = $this->css_classes_danger;
                break;
            case 'warning':
                $output['CSS_CLASS'] = $this->css_classes_warning;
                break;
            case 'success':
                $output['CSS_CLASS'] = $this->css_classes_successs;
                break;
            case 'info':
            default:
                $output['CSS_CLASS'] = $this->css_classes_info;
                break;
            }

        $output['CSS_CLASS'] = $message_array['CSS_CLASS'];

        $pageoutput[ ] = $output;

        $tmpl = new patTemplate();
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        $tmpl->readTemplatesFromInput('user_feedback_pane.html');

        $this->user_feedback_messages[] = $tmpl->getParsedTemplate();
    }
}
