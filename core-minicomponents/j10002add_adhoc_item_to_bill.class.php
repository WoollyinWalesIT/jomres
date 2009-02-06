<?php
/**
#
 * Mini-component core file:
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

class j10002add_adhoc_item_to_bill
	{
	function j10002add_adhoc_item_to_bill()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $htmlFuncs,$indexphp;
		$this->cpanelButton="";
		if ($MiniComponents->eventSpecificlyExistsCheck('00100',"nbill"))  // Check that at least one jrportal -> billing system plugin exists. If it does, we can show the button
			$this->cpanelButton=$htmlFuncs->cpanelButton(JOMRES_SITEPAGE_URL_ADMIN.'task=add_adhoc_item_to_bill', 'AddItem.png', _JRPORTAL_CPANEL_ADD_ADHOC_ITEM);
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}	
	}