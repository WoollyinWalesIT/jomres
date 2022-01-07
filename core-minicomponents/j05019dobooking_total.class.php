<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.1.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
     * Adds javascript and inputs to the booking form if this is a booking that is being amended, pertaining to overriding the booking total
     *
	 */

class j05019dobooking_total
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
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$this->returnValue = array();

		if (!$thisJRUser->userIsManager) {
			return;
		}
		if (!isset($tmpBookingHandler->tmpbooking[ 'amend_contract' ])) {
			return;
		}
		if ($tmpBookingHandler->tmpbooking[ 'amend_contract' ] == 0) {
			return;
		}

		$newTask = 'handlereq_total';
		$inputName = 'overtotal';
		$defaultValue = '';
		if (isset($tmpBookingHandler->tmpbooking[ 'override_contract_total' ]) && ($tmpBookingHandler->tmpbooking[ 'override_contract_total' ] != '')) {
			$currfmt = jomres_singleton_abstract::getInstance('jomres_currency_format');
			$defaultValue = $currfmt->get_formatted($tmpBookingHandler->tmpbooking[ 'override_contract_total' ]);
		}

		$bookingFormInsert[ 'TOTAL_HEADER' ] = jr_gettext('_JOMCOMP_AMEND_OVERRIDE_TOTAL', '_JOMCOMP_AMEND_OVERRIDE_TOTAL');
		$bookingFormInsert[ 'TOTAL_INPUT' ] = '<input class="inputbox" size="12" type="text" id="'.$inputName.'" value="'.$defaultValue.'" onChange="jomresAjax_'.$newTask.'(this.value)">';
		$bookingFormInsert[ 'TOTAL_AJAXSTRING' ] = '<script>
			jomresJquery(document).ready(function() {
				/**
				 * We show a simple loading indicator
				 * using the jomresJquery ajax events
				 */
				});

			function jomresAjax_' .$newTask.'(value){
				var params = {
				option: "com_jomres",
				task: "' .$newTask.'",
				no_html: "1",
				' .$inputName.': value
				};
				var tosend = value;
				jomresJquery.ajax({
				type: "GET",
				url: "index.php",
				async: false,
				data: params,
				dataType: "script"
				})
				};
			</script>';

		$this->returnValue = $bookingFormInsert;
	}


	/**
	 * Must be included in every mini-component.
	 #
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	 */
	public function getRetVals()
	{
		return $this->returnValue;
	}
}
