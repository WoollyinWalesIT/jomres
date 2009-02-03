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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

class j06000fe_stats
	{
	function j06000fe_stats()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site;
		echo '<script language="javascript" type="text/javascript" src="'.$jomresConfig_live_site.'/jomres/javascript/graphs.js"></script>';
		echo '<script language="javascript" type="text/javascript" src="'.$jomresConfig_live_site.'/jomres/javascript/jrportal.js"></script>';
		$defaultProperty=getDefaultProperty();
		$MiniComponents->specificEvent('16000','viewproperty',array('id'=>$defaultProperty));
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retval;
		}
	}
	




?>