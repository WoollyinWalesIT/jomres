<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06000show_facebook_page
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
	 
	public function __construct($componentArgs = null)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}
		
		if ($property_uid == 0) {
			return;
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$ePointFilepath = get_showtime('ePointFilepath');
		$mrConfig = getPropertySpecificSettings($property_uid);

		if ($mrConfig['facebook_page'] == '') {
			$this->retVals = '';

			return '';
		} else {
			$output = array();
			$pageoutput = array();

			$output['FACEBOOK_PAGE'] = $mrConfig['facebook_page'];

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();

			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('show_facebook_page.html');
			$this->retVals = $tmpl->getParsedTemplate();

			if ($output_now) {
				echo $this->retVals;
			}
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
