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
	 * Core Minicomponent.
	 *
	 * 
	 */

class j06000show_login_form
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
		
		$output['_JOMRES_LOGIN_RESET_MESSAGE'] = jr_gettext('_JOMRES_LOGIN_RESET_MESSAGE', '_JOMRES_LOGIN_RESET_MESSAGE', false);
		$output['_JOMRES_LOGIN_RESET_BUTTON'] = jr_gettext('_JOMRES_LOGIN_RESET_BUTTON', '_JOMRES_LOGIN_RESET_BUTTON', false);
		
		if (!this_cms_is_wordpress()) {
			$output['RESET_URL'] = get_showtime('live_site').'/index.php?option=com_users&task=reset&view=reset&lang='.get_showtime('lang_shortcode');
		} else {
			$output['RESET_URL'] = wp_lostpassword_url();
		}
		
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


	public function getRetVals()
	{
		return $this->retVals;
	}
}
