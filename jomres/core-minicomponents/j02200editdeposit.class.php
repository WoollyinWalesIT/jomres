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
 * Constructs and displays edit deposit form
 #
* @package Jomres
#
 */
class j02200editdeposit {
	/**
	#
	 * Constructor:Constructs and displays edit deposit form
	#
	 */
	function j02200editdeposit()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$contractUid=jomresGetParam( $_REQUEST, 'contractUid',0 );
		if ($contractUid>0)
			{
			$defaultProperty=getDefaultProperty();
			$query="SELECT guest_uid,deposit_required,contract_total,tag FROM #__jomres_contracts WHERE contract_uid = '".(int)$contractUid."' AND property_uid = '".(int)$defaultProperty."'";
			$depositList =doSelectSql($query,2);
			$guestUid=$depositList['guest_uid'];
			$contract_total=$depositList['contract_total'];
			$depositRequired=$depositList['deposit_required'];
			$tag=$depositList['tag'];
			$status = 'status=no,toolbar=20,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no';
			$link =JOMRES_SITEPAGE_URL."&task=editCreditcard&popup=1&guestUid=$guestUid";
			$link="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"\">".jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT)."</a>";
			$output['CREDITCARDLINK']=$link;
			$output['HBOOKINGNUMBER']		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER',_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER);
			$output['HCONTRACT_TOTAL']	=jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL);
			$output['HDEPOSITREQUIRED']	=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
			$output['HDEPOSIT_REF']		=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF);
			$output['BOOKINGNUMBER']		=$tag;
			$output['CONTRACT_TOTAL']		=$mrConfig['currency'].$contract_total;
			$output['DEPOSITREQUIRED']	=$mrConfig['currency'].$depositRequired;
			$output['CONTRACTUID']		=$contractUid;

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveDeposit');
			$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=listNewBookings"),'');
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;

			//$output['TOOLBAR']=$jrtb;
			$output['GUESTUID']=$guestUid;
			$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE);

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'edit_deposit.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			}
		else
			echo "Incorrect contract uid";
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