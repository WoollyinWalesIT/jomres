<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06002fe_stats
	{
	function j06002fe_stats()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager)
			return;
		echo '<script language="javascript" type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/graphs.js"></script>';
		echo '<script language="javascript" type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/jrportal.js"></script>';
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