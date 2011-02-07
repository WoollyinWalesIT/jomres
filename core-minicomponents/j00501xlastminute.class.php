<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Configuration panel for gallery link input
 #
* @package Jomres
#
 */
class j00501xlastminute {
	/**
	#
	 * Constructor: Outputs the gallery link config inputs
	#
	 */	
	function j00501xlastminute($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
			
		$configurationPanel=$componentArgs['configurationPanel'];
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		if ($mrConfig['singleRoomProperty'] == 1)
			{
			$yesno = array();
			$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
			$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE) );

			if (!isset($mrConfig['lastminuteactive']) || empty($mrConfig['lastminuteactive']) )
				$mrConfig['lastminuteactive']='0';
			if (!isset($mrConfig['lastminutethreshold']) || empty($mrConfig['lastminutethreshold']) )
				$mrConfig['lastminutethreshold']='6';
			if (!isset($mrConfig['lastminutediscount']) || empty($mrConfig['lastminutediscount']) )
				$mrConfig['lastminutediscount']='20';
			
			$configurationPanel->startPanel(_JOMCOMP_LASTMINUTE_CPANEL);
			$lastminuteactive = jomresHTML::selectList( $yesno, 'cfg_lastminuteactive', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['lastminuteactive'] );
			$lastminutethreshold = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_lastminutethreshold', 'size="1" class="inputbox"', $mrConfig['lastminutethreshold'], "%02d" );
			$lastminutediscount  = jomresHTML::integerSelectList( 01, 100, 1, 'cfg_lastminutediscount', 'size="1" class="inputbox"', $mrConfig['lastminutediscount'], "%02d" );

			$configurationPanel->setleft(_JOMCOMP_LASTMINUTE_ACTIVE);
			$configurationPanel->setmiddle($lastminuteactive);
			$configurationPanel->setright(_JOMCOMP_LASTMINUTE_ACTIVE_DESC);
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMCOMP_LASTMINUTE_THREASHOLD);
			$configurationPanel->setmiddle($lastminutethreshold);
			$configurationPanel->setright(_JOMCOMP_LASTMINUTE_THREASHOLD_DESC);
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMCOMP_LASTMINUTE_DISCOUNT);
			$configurationPanel->setmiddle($lastminutediscount);
			$configurationPanel->setright(_JOMCOMP_LASTMINUTE_DISCOUNT_DESC);
			$configurationPanel->insertSetting();
			
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