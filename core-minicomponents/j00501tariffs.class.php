<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $configurationPanel,$thisJRUser;
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$mrConfig=$componentArgs['mrConfig'];
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
			
		if ($jrConfig['useGlobalCurrency'] !="1")
			{
			$configurationPanel->setleft(_JOMRES_COM_A_CURRENCYSYMBOL);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_currency" value="'.$mrConfig['currency'].'" />');
			$configurationPanel->setright(_JOMRES_COM_A_CURRENCYSYMBOL_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_CURRENCYCODE);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_currencyCode" value="'.$mrConfig['currencyCode'].'" />');
			$configurationPanel->setright(_JOMRES_COM_A_CURRENCYCODE_DESC);
			$configurationPanel->insertSetting();
			}

		$configurationPanel->setleft(_JOMRES_COM_A_TARIFFS_PER);
		$configurationPanel->setmiddle($lists['perPersonPerNight']);
		$configurationPanel->setright(_JOMRES_COM_A_TARIFFS_PER_DESC);
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT);
		$configurationPanel->setmiddle($lists['chargeDepositYesNo']);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE);
		$configurationPanel->setmiddle($lists['depositIsPercentage']);
		$configurationPanel->setright(_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC);
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_DEPOSIT_VALUE);
		$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_depositValue" value="'.$mrConfig['depositValue'].'" />');
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
			



		
		$configurationPanel->setleft(JOMRES_COM_A_VERBOSETARIFFINTO);
		$configurationPanel->setmiddle($lists['verbosetariffinfo']);
		$configurationPanel->setright(JOMRES_COM_A_VERBOSETARIFFINTO_DESC);
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft(_JOMRES_COM_A_TAX_WARNING);
		$configurationPanel->setmiddle();
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_ROOMTAX);
		$configurationPanel->setmiddle($lists['roomTaxYesNo']);
		$configurationPanel->setright(_JOMRES_COM_A_ROOMTAX_DESC);
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_ROOMTAX_FIXED);
		$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_roomTaxFixed" value="'.$mrConfig['roomTaxFixed'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_ROOMTAX_PERCENTAGE);
		$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_roomTaxPercentage" value="'.$mrConfig['roomTaxPercentage'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_EUROTAX);
		$configurationPanel->setmiddle($lists['euroTaxYesNo']);
		$configurationPanel->setright(_JOMRES_COM_A_EUROTAX_DESC);
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(_JOMRES_COM_A_EUROTAX_PERCENTAGE);
		$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="5" name="cfg_euroTaxPercentage" value="'.$mrConfig['euroTaxPercentage'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		/*
		$codes= currencyCodesArray();
		$conversionSelect='<select size=11 name="cfg_currencyCodes[]" id=currencyCodes multiple onMouseDown="GetCurrentListValues(this);" onchange="FillListValues(this);" style="width:200;">';
		$codeOptionStr="";
		$mrConfigCodesArray=explode(",",$mrConfig['currencyCodes']);
		foreach ($codes as $key=>$code)
			{
			$selected="";
			if (in_array($key,$mrConfigCodesArray) )
				$selected="selected";
			$codeOptionStr.='<option value="'.$key.'"  '.$selected.'>'.$key.' '.$code['country'].' '.$code['currencyname'].'</option>';
			}
		$conversionSelect.=$codeOptionStr;
		$conversionSelect.='</select><br><font face=arial size=1><a href="javascript:SelectAllList(document.adminForm.currencyCodes);" style="color:blue;">select all</a> &nbsp;&nbsp;<a href="javascript:DeselectAllList(document.adminForm.currencyCodes);" style="color:blue;">deselect all</a></font>';

		$configurationPanel->setleft(_JOMRES_SHOWGOOGLECURRENCYLINKS);
		$configurationPanel->setmiddle($lists['showGoogleCurrencyLink']);
		$configurationPanel->setright($conversionSelect);
		$configurationPanel->insertSetting();
		*/
		
		$configurationPanel->setleft(_JOMRES_SHOWGOOGLECURRENCYLINKS);
		$configurationPanel->setmiddle($lists['showGoogleCurrencyLink']);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
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