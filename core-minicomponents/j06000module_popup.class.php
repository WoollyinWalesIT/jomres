<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000module_popup
	{
	function j06000module_popup()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$property_uid = (int)jomresGetParam($_REQUEST,"id",0);
		$result = '';
		if ($property_uid > 0)
			{
			$current_property_details =jomres_getSingleton('basic_property_details');
			$current_property_details->gather_data($property_uid);
			$inline_calendar = $MiniComponents->specificEvent('06000','ui_availability_calendar',array('property_uid'=>$property_uid,'return_calendar'=>"1",'noshowlegend'=>"1") );
			
			$result = $inline_calendar;
			}
		echo $result;
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>