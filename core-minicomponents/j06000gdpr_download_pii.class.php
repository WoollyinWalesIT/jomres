<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
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

class j06000gdpr_download_pii
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
				'task' => 'gdpr_my_data',
				'info' => '_JOMRES_GDPR_MY_DATA',
				'arguments' => array()
				);

			return;
		}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		if ($thisJRUser->id > 0 ) {
			jr_import('jomres_gdpr_personal_information_collections');
			$jomres_gdpr_personal_information_collections = new jomres_gdpr_personal_information_collections();
			$jomres_gdpr_personal_information_collections->set_id($thisJRUser->id);
			$pii = $jomres_gdpr_personal_information_collections->collect_pii();
		} else {
			$pii = array();
		}

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		$pii['country'] = $tmpBookingHandler->tmpguest['country'];
		$pii['ip'] = $tmpBookingHandler->info['ip'];
		
		$pageoutput = array();
		$output = array();
		
		$output['PII'] = json_encode($pii);
		$output['_JOMRES_COM_MR_BACK'] = jr_gettext('_JOMRES_COM_MR_BACK', '_JOMRES_COM_MR_BACK', false);
		$output['_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT'] = jr_gettext('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', false);
		
		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('gdpr_my_data_download.html');
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
