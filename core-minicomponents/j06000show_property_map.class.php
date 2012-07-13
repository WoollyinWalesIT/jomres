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

class j06000show_property_map
	{
	function j06000show_property_map($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		
		$show_now = 1;
		$mw = 600;
		$mh = 600;
		if (isset($_REQUEST['property_uid']))
			{
			$property_uid= (int)$_REQUEST['property_uid'];
			if (isset($_REQUEST['mw']))
				$mw = (int)$_REQUEST['mw'];
			if (isset($_REQUEST['mh']))
				$mh = (int)$_REQUEST['mh'];
			if (isset($_REQUEST['show_now']))
				$show_now = (int)$_REQUEST['show_now'];
			}
		else
			{
			$property_uid= (int)$componentArgs['property_uid'];
			if (isset($componentArgs['mw']))
				$mw= (int)$componentArgs['mw'];
			if (isset($componentArgs['mh']))
				$mh= (int)$componentArgs['mh'];
			if (isset($componentArgs['show_now']))
				$show_now= (int)$componentArgs['show_now'];
			}
		if ($property_uid == 0)
			return;
		
		$mrConfig=getPropertySpecificSettings($property_uid);
		$componentArgs=array('property_uid'=>$property_uid,"width"=>$mw,"height"=>$mh);
		$MiniComponents->specificEvent('01050','x_geocoder',$componentArgs);

		if ($show_now == 0)
			$this->retVals = $MiniComponents->miniComponentData['01050']['x_geocoder'];
		else
			echo $MiniComponents->miniComponentData['01050']['x_geocoder'];
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}	
	}