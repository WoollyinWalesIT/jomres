<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06000opted_out
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
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$output = array();
		if (!isset($_REQUEST['url_already_forwarded']) && isset($_REQUEST['jr_redirect_url']) )
			$output['RETURN_URL'] = jr_base64url_encode($_REQUEST['jr_redirect_url']);
		else 
			$output['RETURN_URL'] = $_REQUEST['jr_redirect_url'];
		
		$output['_JOMRES_GDPR_NOCONSENT_INTRO']						= jr_gettext('_JOMRES_GDPR_NOCONSENT_INTRO', '_JOMRES_GDPR_NOCONSENT_INTRO', false);
		$output['_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT']				= jr_gettext('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', false);
		$output['_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT']	= jr_gettext('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', false);
		$output['_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE']	= jr_gettext('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', false);
		

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('opted_out.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return null;
	}
}
