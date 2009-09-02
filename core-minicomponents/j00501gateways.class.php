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
 * Configuration panel for gateways
 #
* @package Jomres
#
 */
class j00501gateways {
	/**
	#
	 * Constructor: Outputs configuration options for gateways
	#
	 */
	function j00501gateways($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$configurationPanel=$componentArgs['configurationPanel'];
		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		
		if ($paypal_settings->paypalConfigOptions['override'] == "0")
			{
			$lists=$componentArgs['lists'];
			$gatewayNames=$componentArgs['gatewayNames'];

			$configurationPanel->startPanel(_JOMRES_COM_A_GATEWAYLIST);

			$configurationPanel->setleft(_JOMRES_COM_A_GATEWAY_USEGATEWAYS);
			$configurationPanel->setmiddle($lists['useOnlinepayment']);
			$configurationPanel->setright(_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft();
			$configurationPanel->setmiddle();
			$configurationPanel->setright(_JOMRES_COM_A_GATEWAY_ENABLED);
			$configurationPanel->insertSetting();

			$MiniComponents->triggerEvent('00509',$componentArgs);

			$outputArray=$MiniComponents->miniComponentData['00509'];
			foreach ($outputArray as $gw)
				{
				$configurationPanel->setleft($gw['button']);
				$configurationPanel->setmiddle($gw['link']);
				$configurationPanel->setright($gw['active']);
				$configurationPanel->insertSetting();
				}
			$configurationPanel->endPanel();
			}
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