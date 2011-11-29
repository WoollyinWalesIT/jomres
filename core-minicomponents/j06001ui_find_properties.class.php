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

class j06001ui_find_properties
	{
	function j06001ui_find_properties()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$thisJRUser=jomres_getSingleton('jr_user');
		
		$users_properties = array();
		foreach ($thisJRUser->authorisedPropertyDetails as $key=>$val)
			{
			$users_properties[]=$key;
			}
		$gor= genericOr($users_properties,'propertys_uid');

		$initial = strtolower(jomresGetParam( $_REQUEST, 'initial', "" ));
		$query = "SELECT propertys_uid,property_name FROM #__jomres_propertys WHERE property_name LIKE '".$initial."%' AND ".$gor. "ORDER BY `property_name`";
		$result = doSelectSql($query);
		$output = '';
		if (count($result)>0)
			{
			foreach ($result as $property)
				{
				if (function_exists('jomres_decode'))
					$pn=jomres_decode($thisJRUser->authorisedPropertyDetails[$property->propertys_uid]['property_name']);
				else
					$pn=$thisJRUser->authorisedPropertyDetails[$property->propertys_uid]['property_name'];
				
				$output .= '<div><a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&thisProperty='.$property->propertys_uid).'" class="fg-button ui-state-default ui-corner-all">'.$pn.'</a/div>' ;
				}
			}
		echo $output;
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}