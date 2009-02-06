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

class j10002stats
	{
	function j10002stats()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $htmlFuncs,$indexphp;
		$this->cpanelButton=$htmlFuncs->cpanelButton($indexphp.'?option=com_jomres&task=showstats', 'ChartBarTrend.png', _JRPORTAL_STATS_PATETITLE);
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}	
	}