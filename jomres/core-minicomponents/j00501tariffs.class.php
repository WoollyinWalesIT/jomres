<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$configurationPanel=$componentArgs['configurationPanel'];
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$mrConfig=getPropertySpecificSettings();
		
		$lists=$componentArgs['lists'];
		$paymentAmounts=$componentArgs['paymentAmounts'];
		$tariffModelsDropdown=$componentArgs['tariffModelsDropdown'];
		$tariffModeDD=$componentArgs['tariffModeDD'];
	
		$this->outputConversionJavascript();
		$currfmt = jomres_singleton_abstract::getInstance('jomres_currency_format');
		$cformatdropdown=$currfmt->get_currency_format_dropdowninput();


		if (!isset($mrConfig['margin']) || empty($mrConfig['margin']) )
			$mrConfig['margin']="0.00";

		$configurationPanel->startPanel(jr_gettext("_JOMRES_COM_A_TARIFFS",_JOMRES_COM_A_TARIFFS,false));
		
		if ($jrConfig['useGlobalCurrency'] !="1")
			{
			if (!isset($mrConfig['property_currencycode'])) // for v4.5 converting the old currencyCode value to property_currencycode
				$mrConfig['property_currencycode'] = $mrConfig['currencyCode'];
			jr_import("currency_codes");
			$c_codes = new currency_codes($mrConfig['property_currencycode']);

			$dropdown = $c_codes->makeCodesDropdown();
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_CURRENCYCODE",_JOMRES_COM_A_CURRENCYCODE,false));
			$configurationPanel->setmiddle($dropdown);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			}
			
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				{
				$configurationPanel->setleft(jr_gettext("JOMRES_COM_A_TARIFFMODE",JOMRES_COM_A_TARIFFMODE,false));
				$configurationPanel->setmiddle($tariffModeDD);
				$configurationPanel->setright(jr_gettext("JOMRES_COM_A_TARIFFMODE_DESC",JOMRES_COM_A_TARIFFMODE_DESC,false));
				$configurationPanel->insertSetting();
					
				$configurationPanel->setleft(jr_gettext("_JOMRES_CURRENCYFORMAT",_JOMRES_CURRENCYFORMAT,false));
				$configurationPanel->setmiddle($cformatdropdown);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_TARIFFS_MODEL",_JOMRES_COM_A_TARIFFS_MODEL,false));
				$configurationPanel->setmiddle($tariffModelsDropdown);
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_TARIFFS_MODEL_DESC",_JOMRES_COM_A_TARIFFS_MODEL_DESC,false));
				$configurationPanel->insertSetting();
				}
			
			$configurationPanel->setleft(jr_gettext("_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE",_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE,false));
			$configurationPanel->setmiddle( taxrates_makerateDropdown( array(),$mrConfig['accommodation_tax_code'] ,'cfg_accommodation_tax_code' ));
			$configurationPanel->setright('');
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_TAXINCLUSIVE",_JOMRES_COM_A_TAXINCLUSIVE,false));
			$configurationPanel->setmiddle($lists['prices_inclusive']);
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_TAXINCLUSIVE_DESC",_JOMRES_COM_A_TAXINCLUSIVE_DESC,false));
			$configurationPanel->insertSetting();
			}
			
			


		if ($mrConfig['is_real_estate_listing']==0)
			{
			if (isset($MiniComponents->registeredClasses['00011manager_option_04_guesttypeadmin']))
				{
				if ($mrConfig['wholeday_booking'] == "1")
					{
					$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY",_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY,false));
					$configurationPanel->setmiddle($lists['perPersonPerNight']);
					$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY",_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY,false));
					$configurationPanel->insertSetting();
					}
				else
					{
					$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_TARIFFS_PER",_JOMRES_COM_A_TARIFFS_PER,false));
					$configurationPanel->setmiddle($lists['perPersonPerNight']);
					$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_TARIFFS_PER_DESC",_JOMRES_COM_A_TARIFFS_PER_DESC,false));
					$configurationPanel->insertSetting();
					}
				}
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT",_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT,false));
			$configurationPanel->setmiddle($lists['chargeDepositYesNo']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST",_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST,false));
			$configurationPanel->setmiddle($lists['depositIsOneNight']);
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC",_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC,false));
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE",_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE,false));
			$configurationPanel->setmiddle($lists['depositIsPercentage']);
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC",_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC,false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEPOSIT_VALUE",_JOMRES_COM_A_DEPOSIT_VALUE,false));
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_depositValue" value="'.$mrConfig['depositValue'].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE",_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE,false));
			$configurationPanel->setmiddle($lists['use_variable_deposits']);
			if ($mrConfig['wholeday_booking'] == "1")
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY",_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY,false));
			else
				$configurationPanel->setright(jr_gettext("_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC",_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC,false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS",_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS,false));
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_variable_deposit_threashold" value="'.$mrConfig['variable_deposit_threashold'].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext("_JOMRES_COM_CHARGING_CONFIG",_JOMRES_COM_CHARGING_CONFIG,false));
			$configurationPanel->setmiddle($paymentAmounts);
			$configurationPanel->setright(jr_gettext("_JOMRES_COM_CHARGING_CONFIG_DESC",_JOMRES_COM_CHARGING_CONFIG_DESC,false));
			$configurationPanel->insertSetting();

			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				{
				$configurationPanel->setleft(jr_gettext("_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP",_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP,false));
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