<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Configuration panel for tariffs
 #
* @package Jomres
#
 */
class j00501tariffs {
	/**
	#
	 * Constructor: Constructs and displays input for configuring various tariff options
	#
	 */
	function j00501tariffs($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$configurationPanel=$componentArgs['configurationPanel'];
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$mrConfig=getPropertySpecificSettings();
		
		$lists=$componentArgs['lists'];
		$paymentAmounts=$componentArgs['paymentAmounts'];
		$tariffModelsDropdown=$componentArgs['tariffModelsDropdown'];
		$tariffModeDD=$componentArgs['tariffModeDD'];
	
		$this->outputConversionJavascript();
		$currfmt = jomres_getSingleton('jomres_currency_format');
		$cformatdropdown=$currfmt->get_currency_format_dropdowninput();


		if (!isset($mrConfig['margin']) || empty($mrConfig['margin']) )
			$mrConfig['margin']="0.00";

		$configurationPanel->startPanel(_JOMRES_COM_A_TARIFFS);
		
		if ($jrConfig['useGlobalCurrency'] !="1")
			{
			if (!isset($mrConfig['property_currencycode'])) // for v4.5 converting the old currencyCode value to property_currencycode
				$mrConfig['property_currencycode'] = $mrConfig['currencyCode'];
			jr_import("currency_codes");
			$c_codes = new currency_codes($mrConfig['property_currencycode']);

			$dropdown = $c_codes->makeCodesDropdown();
			$configurationPanel->setleft(_JOMRES_COM_A_CURRENCYCODE);
			$configurationPanel->setmiddle($dropdown);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			/*
			$configurationPanel->setleft(_JOMRES_COM_A_CURRENCYSYMBOL);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_currency" value="'.$mrConfig['currency'].'" />');
			$configurationPanel->setright(_JOMRES_COM_A_CURRENCYSYMBOL_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_CURRENCYCODE);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_currencyCode" value="'.$mrConfig['currencyCode'].'" />');
			$configurationPanel->setright(_JOMRES_COM_A_CURRENCYCODE_DESC);
			$configurationPanel->insertSetting();
			*/
			}
			
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				{
				$configurationPanel->setleft(JOMRES_COM_A_TARIFFMODE);
				$configurationPanel->setmiddle($tariffModeDD);
				$configurationPanel->setright(JOMRES_COM_A_TARIFFMODE_DESC);
				$configurationPanel->insertSetting();
					
				$configurationPanel->setleft(_JOMRES_CURRENCYFORMAT);
				$configurationPanel->setmiddle($cformatdropdown);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_MODEL);
				$configurationPanel->setmiddle($tariffModelsDropdown);
				$configurationPanel->setright(_JOMRES_COM_A_TARIFFS_MODEL_DESC);
				$configurationPanel->insertSetting();
				}
			
			$configurationPanel->setleft(_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE);
			$configurationPanel->setmiddle( taxrates_makerateDropdown( array(),$mrConfig['accommodation_tax_code'] ,'cfg_accommodation_tax_code' ));
			$configurationPanel->setright('');
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_TAXINCLUSIVE);
			$configurationPanel->setmiddle($lists['prices_inclusive']);
			$configurationPanel->setright(_JOMRES_COM_A_TAXINCLUSIVE_DESC);
			$configurationPanel->insertSetting();
			}
			
			


		if ($mrConfig['is_real_estate_listing']==0)
			{
			if (isset($MiniComponents->registeredClasses['00011manager_option_04_guesttypeadmin']))
				{
				if ($mrConfig['wholeday_booking'] == "1")
					{
					$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY);
					$configurationPanel->setmiddle($lists['perPersonPerNight']);
					$configurationPanel->setright(_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY);
					$configurationPanel->insertSetting();
					}
				else
					{
					$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_PER);
					$configurationPanel->setmiddle($lists['perPersonPerNight']);
					$configurationPanel->setright(_JOMRES_COM_A_TARIFFS_PER_DESC);
					$configurationPanel->insertSetting();
					}
				}
			
			$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT);
			$configurationPanel->setmiddle($lists['chargeDepositYesNo']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST);
			$configurationPanel->setmiddle($lists['depositIsOneNight']);
			$configurationPanel->setright(_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC);
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE);
			$configurationPanel->setmiddle($lists['depositIsPercentage']);
			$configurationPanel->setright(_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_VALUE);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_depositValue" value="'.$mrConfig['depositValue'].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE);
			$configurationPanel->setmiddle($lists['use_variable_deposits']);
			if ($mrConfig['wholeday_booking'] == "1")
				$configurationPanel->setright(_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY);
			else
				$configurationPanel->setright(_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_variable_deposit_threashold" value="'.$mrConfig['variable_deposit_threashold'].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMRES_COM_CHARGING_CONFIG);
			$configurationPanel->setmiddle($paymentAmounts);
			$configurationPanel->setright(_JOMRES_COM_CHARGING_CONFIG_DESC);
			$configurationPanel->insertSetting();

			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				{
				$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP);
				$configurationPanel->setmiddle($lists['roundupDepositYesNo']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();
				}
			}
	
		$configurationPanel->endPanel();
		}

	function outputConversionJavascript()
		{
		?>
		<script type="text/javascript" >
		var arrOldValues;

		function SelectAllList(CONTROL){
		for(var i = 0;i < CONTROL.length;i++){
		CONTROL.options[i].selected = true;
		}
		}

		function DeselectAllList(CONTROL){
		for(var i = 0;i < CONTROL.length;i++){
		CONTROL.options[i].selected = false;
		}
		}

		function FillListValues(CONTROL){
		var arrNewValues;
		var intNewPos;
		var strTemp = GetSelectValues(CONTROL);
		arrNewValues = strTemp.split(",");
		for(var i=0;i<arrNewValues.length-1;i++){
		if(arrNewValues[i]==1){
		intNewPos = i;
		}
		}

		for(var i=0;i<arrOldValues.length-1;i++){
		if(arrOldValues[i]==1 && i != intNewPos){
		CONTROL.options[i].selected= true;
		}
		else if(arrOldValues[i]==0 && i != intNewPos){
		CONTROL.options[i].selected= false;
		}
		if(arrOldValues[intNewPos]== 1){
		CONTROL.options[intNewPos].selected = false;
		}
		else{
		CONTROL.options[intNewPos].selected = true;
		}
		}
		}

		function GetSelectValues(CONTROL){
		var strTemp = "";
		for(var i = 0;i < CONTROL.length;i++){
		if(CONTROL.options[i].selected == true){
		strTemp += "1,";
		}
		else{
		strTemp += "0,";
		}
		}
		return strTemp;
		}

		function GetCurrentListValues(CONTROL){
		var strValues = "";
		strValues = GetSelectValues(CONTROL);
		arrOldValues = strValues.split(",")
		}
		</script>
		<?php
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>