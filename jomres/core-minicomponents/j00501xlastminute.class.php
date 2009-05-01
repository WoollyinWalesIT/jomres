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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
			
		global $configurationPanel;
		global $ePointFilepath,$jomresConfig_lang;
		$mrConfig=$componentArgs['mrConfig'];
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