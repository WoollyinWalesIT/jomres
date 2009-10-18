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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Configuration panel for Wise prices
 #
* @package Jomres
#
 */
class j00501xwiseprice {
	/**
	#
	 * Constructor: Outputs inputs for configuring dynamically adjustable prices
	#
	 */	
	function j00501xwiseprice($componentArgs)
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
		if ($mrConfig['singleRoomProperty'] == 0)
			{
			$yesno = array();
			$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
			$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE) );

			if (!isset($mrConfig['wisepriceactive']) || empty($mrConfig['wisepriceactive']) )
				$mrConfig['wisepriceactive']='0';
			if (!isset($mrConfig['wisepricethreshold']) || empty($mrConfig['wisepricethreshold']) )
				$mrConfig['wisepricethreshold']='60';
				
			if (!isset($mrConfig['wiseprice10discount']) || empty($mrConfig['wiseprice10discount']) )
				$mrConfig['wiseprice10discount']='30';
			if (!isset($mrConfig['wiseprice25discount']) || empty($mrConfig['wiseprice25discount']) )
				$mrConfig['wiseprice25discount']='20';
			if (!isset($mrConfig['wiseprice50discount']) || empty($mrConfig['wiseprice50discount']) )
				$mrConfig['wiseprice50discount']='10';
			if (!isset($mrConfig['wiseprice75discount']) || empty($mrConfig['wiseprice75discount']) )
				$mrConfig['wiseprice75discount']='5';
			
			$wisepriceactive = jomresHTML::selectList( $yesno, 'cfg_wisepriceactive', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['wisepriceactive'] );
			
			$wisepricethreshold = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_wisepricethreshold', 'size="1" class="inputbox"', $mrConfig['wisepricethreshold'], "%02d" );
			
			$wiseprice10discount  = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_wiseprice10discount', 'size="1" class="inputbox"', $mrConfig['wiseprice10discount'], "%02d" );
			$wiseprice25discount  = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_wiseprice25discount', 'size="1" class="inputbox"', $mrConfig['wiseprice25discount'], "%02d" );
			$wiseprice50discount  = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_wiseprice50discount', 'size="1" class="inputbox"', $mrConfig['wiseprice50discount'], "%02d" );
			$wiseprice75discount  = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_wiseprice75discount', 'size="1" class="inputbox"', $mrConfig['wiseprice75discount'], "%02d" );

			$configurationPanel->startPanel(_JOMCOMP_WISEPRICE_TITLE);
			
			$configurationPanel->setleft(_JOMCOMP_WISEPRICE_ACTIVE);
			$configurationPanel->setmiddle($wisepriceactive);
			$configurationPanel->setright("");
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMCOMP_WISEPRICE_THREASHOLD);
			$configurationPanel->setmiddle($wisepricethreshold);
			$configurationPanel->setright("");
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMCOMP_WISEPRICE_PERCENTAGE10);
			$configurationPanel->setmiddle($wiseprice10discount);
			$configurationPanel->setright(_JOMCOMP_WISEPRICE_DISCOUNT);
			$configurationPanel->insertSetting();
				 
			$configurationPanel->setleft(_JOMCOMP_WISEPRICE_PERCENTAGE25);
			$configurationPanel->setmiddle($wiseprice25discount);
			$configurationPanel->setright(_JOMCOMP_WISEPRICE_DISCOUNT);
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMCOMP_WISEPRICE_PERCENTAGE50);
			$configurationPanel->setmiddle($wiseprice50discount);
			$configurationPanel->setright(_JOMCOMP_WISEPRICE_DISCOUNT);
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMCOMP_WISEPRICE_PERCENTAGE75);
			$configurationPanel->setmiddle($wiseprice75discount);
			$configurationPanel->setright(_JOMCOMP_WISEPRICE_DISCOUNT);
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft(_JOMCOMP_WISEPRICE_TITLE_DESC);
			$configurationPanel->setmiddle("");
			$configurationPanel->setright(_JOMCOMP_WISEPRICE_TITLE_DESC_FULL);
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