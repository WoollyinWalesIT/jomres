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
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06001cancel_booking
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
		$mrConfig = getPropertySpecificSettings();
		$contract_uid = jomresGetParam($_REQUEST, 'contract_uid', 0);

		$jsLink = jomresURL(JOMRES_SITEPAGE_URL."&task=save_cancellation&contract_uid=$contract_uid");
		$defaultProperty = getDefaultProperty();
		$today = date('Y/m/d');
		$query = "SELECT arrival,deposit_paid,contract_total,deposit_required,booked_in,property_uid FROM #__jomres_contracts WHERE contract_uid = '".(int) $contract_uid."' AND property_uid = '".(int) $defaultProperty."'";
		$arrivalList = doSelectSql($query);
		if (!empty($arrivalList)) {
			foreach ($arrivalList as $cancellationFigures) {
				$arrival = $cancellationFigures->arrival;
				$deposit_paid = $cancellationFigures->deposit_paid;
				$contract_total = $cancellationFigures->contract_total;
				$deposit_required = $cancellationFigures->deposit_required;
				$booked_in = $cancellationFigures->booked_in;
				$property_uid = (int) $cancellationFigures->property_uid;
			}

			if ($booked_in != '1') {
				$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING');
				$output[ 'SAVEBUTTON' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', false);
				$output[ 'HREASON' ] = jr_gettext('_JOMRES_JR_BLACKBOOKING_REASON', '_JOMRES_JR_BLACKBOOKING_REASON');

				$output[ 'CONTRACT_UID' ] = $contract_uid;
				$output[ 'HARRIVAL' ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL');
				$output[ 'HCONTRACTTOTAL' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL');
				$output[ 'HDAYSTOARRIVAL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL');

				$output[ 'ARRIVAL' ] = outputDate($arrival);
				$output[ 'CONTRACTTOTAL' ] = output_price($contract_total);
				$output[ 'DAYSTOARRIVAL' ] = dateDiff('d', $today, $arrival);

				if ($deposit_paid == '1') {
					$output[ 'HDEPOSITPAID' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID');
					$output[ 'DEPOSITAMOUNT' ] = output_price($deposit_required);
				} else {
					$output[ 'HDEPOSITPAID' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT');
					$output[ 'DEPOSITAMOUNT' ] = '';
				}

				$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb = $jrtbar->startTable();

				$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$contract_uid), '');
				$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_cancellation');
				$jrtb .= $jrtbar->endTable();
				$output[ 'JOMRESTOOLBAR' ] = $jrtb;

				$pageoutput[ ] = $output;

				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
				$tmpl->readTemplatesFromInput('cancel_booking.html');
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->displayParsedTemplate();
				$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=yes,menubar=yes,resizable=yes,width=710,height=710,directories=no,location=no';
				$link = JOMRES_SITEPAGE_URL.'&task=invoiceForm&contract_uid='.$contract_uid;
			} else {
				echo jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN');
			}
		} else {
			trigger_error('Error when cancelling booking, incorrect contract uid used (hack attempt?)', E_USER_ERROR);
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
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
