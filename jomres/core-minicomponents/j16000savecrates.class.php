<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000savecrates
	{
	function j16000savecrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$crates 				= jomresGetParam( $_POST, 'crates',array() );
		$tmpCrates=array();
		foreach ($_POST['crates'] as $k=>$v)
			{
			$key=intval($k);
			$value=intval($v);
			$tmpCrates[$key]=$value;
			}

		//var_dump($tmpCrates);exit;
		$crates=$tmpCrates;
		jr_import('jrportal_property_functions');
		$propertyFunctions		= new jrportal_property_functions();
		$portalPropertyList		= $propertyFunctions->getAllPortalProperties();
		$portalPropertyIds		= array();
		foreach ($portalPropertyList as $p)
			{
			$portalPropertyIds[]=$p['property_id'];
			}

		foreach ($crates as $k=>$v)
			{
			$crate_id=$v;
			jr_import('jrportal_property');
			$property = new jrportal_property();
			if (!in_array($k,$portalPropertyIds) )
				{
				$property->property_id=$k;
				$property->crate_id=$v;
				$property->commitNewProperty();
				}
			else
				{
				$property->getProperty();
				$property->property_id=$k;
				$property->crate_id=$v;
				$property->commitUpdatePropertyByPropertyid();
				}
			}

		jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."&task=listpropertys", '');
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}