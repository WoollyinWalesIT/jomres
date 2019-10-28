<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################


class j16000stripe_subscribe
{
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		if (defined('AUTO_UPGRADE')) {
			return;
		}

		jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'blockui-npm/', 'jquery.blockUI.js');

		jr_import('jomres_check_support_key');
		$key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=stripe_subscribe');

		if (!$key_validation->key_valid) {

		$output = array();
		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('stripe_subscribe.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$subscription_form = $tmpl->getParsedTemplate();
		
		$output = array();
		$pageoutput = array();
		
		$output['SUBSCRIPTION_FORM_USER_DETAILS'] = $subscription_form;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('stripe_subscribe_wrapper.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		echo $tmpl->getParsedTemplate();
		}
	else {
		$output = array();
		$pageoutput = array();
		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('stripe_subscribed.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		echo $tmpl->getParsedTemplate();
		}

	}

	public function getRetVals()
	{
		return null;
	}
}
