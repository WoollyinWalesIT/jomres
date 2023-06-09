<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
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

class j06001show_network_stats_for_contract
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

			return;
		}
		
		$this->retVals = '';
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		if (isset($componentArgs['contract_uid'])) {
			$contract_uid = (int)$componentArgs['contract_uid'];
			$property_uid = $componentArgs['property_uid'];
		} else {
			$contract_uid = jomresGetParam($_REQUEST, 'contract_uid', 0);
			$property_uid = getDefaultProperty();
		}

		if ($contract_uid == 0) {
			return;
		}
		
		$current_contract_details = jomres_singleton_abstract::getInstance('basic_contract_details');
		$current_contract_details->gather_data($contract_uid, $property_uid);
		
		if (!array_key_exists($contract_uid, $current_contract_details->contract)) { // The contract uid is wrong. Was it for a different property?
			return;
		}
		
		if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
			return;
		}

		if (isset($_REQUEST[ 'output_now' ])) {
			$output_now = (bool) jomresGetParam($_REQUEST, 'output_now', 1);
		} elseif (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool)$componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}
		
		$output = array();
		$pageoutput = array();
		
		$stats = json_decode($current_contract_details->contract[$contract_uid]['contractdeets']['network_stats']);
		
		if (isset($stats->stats->bookings)) {
			$output[ 'BOOKINGS' ]	= $stats->stats->bookings;
		} else {
			$output[ 'BOOKINGS' ]	= 0;
		}
		
		if (isset($stats->stats->bookings)) {
			$output[ 'NOSHOWS' ]	=  $stats->stats->noshows;
		} else {
			$output[ 'NOSHOWS' ]	=  0;
		}
		
		

		$output[ 'BOOKING_NOSHOW_NETWORK_STATUS' ]	= jr_gettext('BOOKING_NOSHOW_NETWORK_STATUS', 'BOOKING_NOSHOW_NETWORK_STATUS');
		$output[ 'BOOKING_NOSHOW_BOOKINGS' ]		= jr_gettext('BOOKING_NOSHOW_BOOKINGS', 'BOOKING_NOSHOW_BOOKINGS');
		$output[ 'BOOKING_NOSHOW_NOSHOWS' ]			= jr_gettext('BOOKING_NOSHOW_NOSHOWS', 'BOOKING_NOSHOW_NOSHOWS');
		$output[ 'BOOKING_NOSHOW_INFO' ]			= jr_gettext('BOOKING_NOSHOW_INFO', 'BOOKING_NOSHOW_INFO');

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('show_network_stats_for_contract.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$this->retVals = $tmpl->getParsedTemplate();

		if ($output_now) {
			echo $this->retVals;
		}
	}



	public function getRetVals()
	{
		return $this->retVals;
	}
}
