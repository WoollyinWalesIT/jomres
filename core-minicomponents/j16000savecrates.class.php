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

		//
		$crates=$tmpCrates;
		jr_import('jrportal_property_functions');
		$propertyFunctions		= new jrportal_property_functions();
		$portalPropertyList		= $propertyFunctions->getAllPortalProperties();
		$portalPropertyIds		= array();
		foreach ($portalPropertyList as $p)
			{
			$portalPropertyIds[]=$p['property_id'];
			}
		
		jr_import('jrportal_property');

		foreach ($crates as $k=>$v)
			{
			$crate_id=$v;
			$jrportal_property = new jrportal_property();
			
			if (!in_array($k,$portalPropertyIds) )
				{
				$jrportal_property->property_id=$k;
				$jrportal_property->crate_id=$v;
				$jrportal_property->commitNewProperty();
				}
			else
				{
				$jrportal_property->property_id=$k;
				$jrportal_property->getProperty();
				$jrportal_property->crate_id=$v;
				$jrportal_property->commitUpdatePropertyByPropertyid();
				}
			}

		jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."&task=list_properties_initials", '');
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}