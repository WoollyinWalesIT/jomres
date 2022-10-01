<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
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
	 *
	 */

class j06001edit_deposit
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
		$mrConfig = getPropertySpecificSettings();
		$contract_uid = jomresGetParam($_REQUEST, 'contractUid', 0);
		if ($contract_uid > 0) {
			$defaultProperty = getDefaultProperty();
			$query = "SELECT guest_uid,deposit_required,contract_total,tag FROM #__jomres_contracts WHERE contract_uid = '".(int) $contract_uid."' AND property_uid = '".(int) $defaultProperty."'";
			$depositList = doSelectSql($query, 2);
			$guestUid = $depositList[ 'guest_uid' ];
			$contract_total = $depositList[ 'contract_total' ];
			$depositRequired = $depositList[ 'deposit_required' ];
			$tag = $depositList[ 'tag' ];
			$status = 'status=no,toolbar=20,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no';
			$output[ 'HBOOKINGNUMBER' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER');
			$output[ 'HCONTRACT_TOTAL' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL');
			$output[ 'HDEPOSITREQUIRED' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED');
			$output[ 'HDEPOSIT_REF' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF');
			$output[ '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE');

			$output[ 'BOOKINGNUMBER' ] = $tag;
			$output[ 'CONTRACT_TOTAL' ] = output_price($contract_total);
			$output[ 'DEPOSITREQUIRED' ] = output_price($depositRequired);
			$output[ 'DEPOSITREQUIREDRAW' ] = $depositRequired;
			$output[ 'CONTRACTUID' ] = $contract_uid;

			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();

			$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$contract_uid), '');
			$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_deposit');

			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			//$output['TOOLBAR']=$jrtb;
			$output[ 'GUESTUID' ] = $guestUid;
			$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE');

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->readTemplatesFromInput('edit_deposit.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->displayParsedTemplate();
		} else {
			echo 'Incorrect contract uid';
		}
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return null;
	}
}
