<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_login_form
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                'task' => 'show_login_form',
                'info' => '_JOMRES_SHORTCODE_LOGIN_FORM'
                );

            return;
        }
        $this->retVals = '';

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

		
		$output = array();
		$pageoutput = array();
		
		$reasonoutput = array();
		$reasonoutput [0]['LOGIN_REASON'] = '';
        if (isset($componentArgs[ 'login_reason' ])) {
			$reasonoutput [0]['LOGIN_REASON'] = $componentArgs[ 'login_reason' ];
        }
		
		$output['_JOMRES_LOGIN_USERNAME'] = jr_gettext('_JOMRES_LOGIN_USERNAME', '_JOMRES_LOGIN_USERNAME', false);
		$output['_JOMRES_LOGIN_PASSWORD'] = jr_gettext('_JOMRES_LOGIN_PASSWORD', '_JOMRES_LOGIN_PASSWORD', false);
		$output['_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN'] = jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', false);
		$output['RETURN_URL'] = getCurrentUrl(true);
		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('reasonoutput', $reasonoutput);
		$tmpl->readTemplatesFromInput('login_form.html');
		$result = $tmpl->getParsedTemplate();

        if ($output_now) {
            echo $result;
        } else {
            $this->retVals = $result;
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
