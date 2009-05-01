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
 * Outgoing interrupt for cheque details
 #
* @package Jomres
#
 */

class j00600cheque {
	function j00600cheque($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $ePointFilepath,$eLiveSite,$mrConfig;
		global $thisJomresPropertyDetails;
		
		$plugin="cheque";
		$bookingdata=$componentArgs['bookingdata'];
		$output=array();
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$bookingdata['property_uid']."' AND plugin = '$plugin' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}
		$currfmt = new jomres_currency_format();
		
		
		$output['DEPOSIT']=$mrConfig['currency'].$currfmt->get_formatted($bookingdata['deposit_required']);
		$output['TOTAL']=$mrConfig['currency'].$currfmt->get_formatted($bookingdata['contract_total']);
		$bal=(float)$bookingdata['contract_total']-(float)$bookingdata['deposit_required'];
		$output['BALANCE']=$mrConfig['currency'].$currfmt->get_formatted($bal);

		$propertyAddressArray=getPropertyAddressForPrint((int)$bookingdata['property_uid']);
		$propertyContactArray=$propertyAddressArray[1];
		$propertyAddyArray=$propertyAddressArray[2];

		$output['PROP_NAME']=$propertyContactArray[0];
		$output['PROP_STREET']=$propertyContactArray[1];
		$output['PROP_TOWN']=$propertyContactArray[2];
		$output['PROP_POSTCODE']=$propertyContactArray[3];
		$output['PROP_REGION']=$propertyContactArray[4];

		$countryname=getSimpleCountry($propertyContactArray[5]);

		$output['PROP_COUNTRY']=ucfirst($countryname);
		$output['PROP_TEL']=$propertyAddyArray[0];
		$output['PROP_FAX']=$propertyAddyArray[1];
		$output['PROP_EMAIL']=$propertyAddyArray[2];
		$output['PROP_URL']=$propertyAddyArray[3];
		
		$output['GATEWAY']=$plugin;
		$output['JR_GATEWAY_SENDDEPOSITTO']=jr_gettext('_JOMRES_CUSTOMTEXT_SENDDEPOSITTO'.$plugin,"Please send your deposit of ");
		$output['JR_GATEWAY_BELOWADDRESS']=jr_gettext('_JOMRES_CUSTOMTEXT_BELOWADDRESS'.$plugin," to the address below ");
		$output['JR_GATEWAY_CONTACTUS1']=jr_gettext('_JOMRES_CUSTOMTEXT_CONTACTUS1'.$plugin,"If you have any problems, please do not hesitate to contact us. You can ring us on ");
		$output['JR_GATEWAY_CONTACTUS2']=jr_gettext('_JOMRES_CUSTOMTEXT_CONTACTUS2'.$plugin," or email us at ");
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( $ePointFilepath );
		$tmpl->readTemplatesFromInput( 'j00600'.$plugin.'.html' );
		$tmpl->addRows( 'interrupt_outgoing', $pageoutput );
		$tmpl->displayParsedTemplate();
		}
		
	function touch_template_language()
		{
		$output=array();
		$plugin="cheque";

		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_SENDDEPOSITTO'.$plugin,"Please send your deposit of ");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_BELOWADDRESS'.$plugin," to the address below ");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_CONTACTUS1'.$plugin,"If you have any problems, please do not hesitate to contact us. You can ring us on ");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_CONTACTUS2'.$plugin," or email us at ");
		
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}		
	}
	
?>