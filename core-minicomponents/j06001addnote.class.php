<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.0
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

class j06001addnote
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
			$this->template_touchable = true;

			return;
		}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager) {
			return;
		}
		$pageoutput = array();
		$output = array();
		$contract_uid = jomresGetParam($_REQUEST, 'contract_uid', 0);
		if ($contract_uid == 0) {
			return;
		}

		$defaultProperty = getDefaultProperty();
		$current_contract_details = jomres_singleton_abstract::getInstance('basic_contract_details');
		$current_contract_details->gather_data($contract_uid, $defaultProperty);
			
		$output[ 'BOOKING_NUMBER' ] = $current_contract_details->contract[$contract_uid]['contractdeets']['tag'];
		$output[ 'GUEST_NAME' ] = $current_contract_details->contract[$contract_uid]['guestdeets']['firstname']." ".$current_contract_details->contract[$contract_uid]['guestdeets']['surname'];
			
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();

		$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$contract_uid), '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'savenote');
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'HNEWTEXT' ] = jr_gettext('_JOMCOMP_BOOKINGNOTES_ADD', '_JOMCOMP_BOOKINGNOTES_ADD');
		$output[ 'CONTRACT_UID' ] = $contract_uid;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('add_note.html');
		$tmpl->displayParsedTemplate();
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMCOMP_BOOKINGNOTES_ADD', '_JOMCOMP_BOOKINGNOTES_ADD');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
