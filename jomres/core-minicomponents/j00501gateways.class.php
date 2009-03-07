<?php
/**
#
 * Mini-component core file: Configuration panel plugin. Constructs gateway configuration links
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $configurationPanel;
		$paypal_settings = new jrportal_paypal_settings();
		$paypal_settings->get_paypal_settings();
		
		if ($paypal_settings->paypalConfigOptions['override'] == "0")
			{
			$lists=$componentArgs['lists'];
			$jomresConfig_live_site=$componentArgs['jomresConfig_live_site'];
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