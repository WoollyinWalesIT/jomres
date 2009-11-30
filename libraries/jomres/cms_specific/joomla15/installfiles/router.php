<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

function JomresBuildRoute(&$query)
	{
	static $items;
	if (!defined('_JOMRES_INITCHECK'))
		define('_JOMRES_INITCHECK', 1 );
	global $thisJRUser;
	require_once('jomres/integration.php');
	$jrConfig					=	getSiteSettings();
	
	$segments = array();
	
	$menu		=& JSite::getMenu();
	// Get the menu items for this component.
	if (!$items) {
		$component	= &JComponentHelper::getComponent('com_jomres');
		$items		= $menu->getItems('componentid', $component->id);
	}

	if ($query['task'] == "dobooking" && isset($query['remus']) )
		return array();
	
	if (isset($query['property_uid']) || isset($query['selectedProperty']))
		{
		if (isset($query['selectedProperty']))
			$pid = $query['selectedProperty'];
		else
			$pid = $query['property_uid'];
		$sql = "SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = ".(int)$pid." LIMIT 1";
		$property_name = doSelectSql($sql,1);
		}
	
	switch($query['task'])
		{
		case 'viewproperty':
			$segments[] = $query['task'];
			$segments[] = $property_name;
			$segments[] = $query['property_uid'];
			unset( $query['task'] );
			unset( $query['property_uid'] );
			break;
		case 'dobooking':
			$segments[] = "dobooking";
			$segments[] = $property_name;
			$segments[] = $query['selectedProperty'];
			unset( $query['task'] );
			unset( $query['selectedProperty'] );
			break;
		case 'showTariffs':
			$segments[] = $query['task'];
			$segments[] = $query['property_uid'];
			$segments[] = $query['op'];
			unset( $query['task'] );
			unset( $query['property_uid'] );
			unset( $query['op'] );
			break;
		case 'slideshow':
			$segments[] = $query['task'];
			$segments[] = $query['property_uid'];
			$segments[] = $query['op'];
			unset( $query['task'] );
			unset( $query['property_uid'] );
			unset( $query['op'] );
			unset( $query['popup'] );
			break;
		case 'showRoomsListing':
			$segments[] = $query['task'];
			$segments[] = $query['property_uid'];
			$segments[] = $query['op'];
			unset( $query['task'] );
			unset( $query['property_uid'] );
			unset( $query['op'] );
			unset( $query['popup'] );
			break;
		default :
			$segments[] = "";
			break;
		}
		
	if (isset($query['calledByModule'] ))
		{
		$segments[] = $jrConfig['sef_task_alias_search'];
		if (isset($query['town']))
			{
			$segments[] = _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN;
			$segments[] = $query['town'];
			unset( $query['town'] );
			}
		if (isset($query['region']))
			{
			$segments[] = _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION;
			$segments[] = $query['region'];
			unset( $query['region'] );
			}
		if (isset($query['country']))
			{
			$segments[] = _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY;
			$segments[] = $query['country'];
			unset( $query['country'] );
			}
		unset( $query['send'] );
		unset( $query['calledByModule'] );
		}
		
	//	var_dump($segments);
	if (count($segments)==0)
		{
		var_dump($query);
		echo "<br>";
		}
	return $segments;
	}

// ******************************************************************************************************************************
// ******************************************************************************************************************************
// ******************************************************************************************************************************
	
	
function JomresParseRoute($segments)
	{
	$vars = array();
	global $thisJRUser;
	if (!defined('_JOMRES_INITCHECK'))
		define('_JOMRES_INITCHECK', 1 );
	require_once('jomres/integration.php');
	$jrConfig					=	getSiteSettings();
	switch($segments[0])
		{
		case 'viewproperty':
			$vars['task'] = "viewproperty";
			$vars['property_uid'] = $segments[2];
			break;
		case "dobooking":
			require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'dobooking.class.php');
			$vars['task'] = "dobooking";
			if (!$thisJRUser->userIsManager)
				$vars['selectedProperty'] = $segments[2];
			break;
		case $jrConfig['sef_task_alias_search']:
			$searchParam = strtolower($segments[1]);
			$vars['send'] = "Search";
			$vars['calledByModule'] = 'mod_jomsearch_m0';
			$vars[$searchParam] = $segments[2];
			break;
		case 'showTariffs':
			$vars['task'] = "showTariffs";
			$vars['property_uid'] = $segments[1];
			$vars['op'] = $segments[2];
			break;
		case 'slideshow':
			$vars['task'] = "slideshow";
			$vars['property_uid'] = $segments[1];
			$vars['op'] = $segments[2];
			break;
		case 'showRoomsListing':
			$vars['task'] = "showRoomsListing";
			$vars['property_uid'] = $segments[1];
			$vars['op'] = $segments[2];
			break;
		}
	return $vars;
	}
?>