<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

defined( '_JEXEC' ) or die( '' );
jimport( 'joomla.filter.output' );

function JomresBuildRoute(&$query)
	{
	static $items;
	$route_query = $query;  // We need to work within this function with the $route_query variable, not $query. It seems to be that the assignation &$query on some servers means that once the property name query further down has been run, then Joomla's $query becomes whatever the sql query was. Don't know why, and I'm not going to dig around to find out. We'll work internally on $route_query, then set $query to $route_query at the end, that seems to fix it.
	if (!defined('_JOMRES_INITCHECK')) define('_JOMRES_INITCHECK', 1 );
	global $thisJRUser;
	if (file_exists(JPATH_BASE.DS.'jomres'.DS.'core-plugins'.DS.'alternative_init'.DS.'alt_init.php'))
		require_once(JPATH_BASE.DS.'jomres'.DS.'core-plugins'.DS.'alternative_init'.DS.'alt_init.php');
	elseif (file_exists(JPATH_BASE.DS.'jomres'.DS.'remote_plugins'.DS.'alternative_init'.DS.'alt_init.php') )
		require_once(JPATH_BASE.DS.'jomres'.DS.'remote_plugins'.DS.'alternative_init'.DS.'alt_init.php');
	else
		require_once(JPATH_BASE.DS.'jomres'.DS.'integration.php');
	
	$jrConfig					=	getSiteSettings();
	$segments = array();
	
	$menu		=& JSite::getMenu();
	// Get the menu items for this component.
	if (!$items) {
		$component	= &JComponentHelper::getComponent('com_jomres');
		$items		= $menu->getItems('componentid', $component->id);
	}

	if ($route_query['task'] == "dobooking" && isset($route_query['remus']) )
		return array();
	
	if (isset($route_query['property_uid']) || isset($route_query['selectedProperty']))
		{
		if (isset($route_query['selectedProperty']))
			$pid = $route_query['selectedProperty'];
		else
			$pid = $route_query['property_uid'];
		$sql = "SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = ".(int)$pid." LIMIT 1";
		$property_name = doSelectSql($sql,1);
		}
	switch($route_query['task'])
		{
		case 'viewproperty':
			$segments[] = $route_query['task'];
			$segments[] = JFilterOutput::stringURLSafe(jomres_decode($property_name));
			$segments[] = $route_query['property_uid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			break;
		case 'dobooking':
			$segments[] = "dobooking";
			$segments[] = JFilterOutput::stringURLSafe(jomres_decode($property_name));
			$segments[] = $route_query['selectedProperty'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['selectedProperty']))
					unset( $route_query['selectedProperty'] );
			break;
		case 'showTariffs':
			$segments[] = $route_query['task'];
			$segments[] = $route_query['property_uid'];
			$segments[] = $route_query['op'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			if (isset($route_query['op']))
					unset( $route_query['op'] );
			break;
		case 'slideshow':
			$segments[] = $route_query['task'];
			$segments[] = $route_query['property_uid'];
			$segments[] = $route_query['op'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			if (isset($route_query['op']))
					unset( $route_query['op'] );
			if (isset($route_query['popup']))
					unset( $route_query['popup'] );
			break;
		case 'showRoomsListing':
			$segments[] = $route_query['task'];
			$segments[] = $route_query['property_uid'];
			$segments[] = $route_query['op'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			if (isset($route_query['op']))
					unset( $route_query['op'] );
			if (isset($route_query['popup']))
					unset( $route_query['popup'] );
			break;
		}
	if (isset($route_query['calledByModule'] ))
		{
		$segments[] = $jrConfig['sef_task_alias_search'];
		if (isset($route_query['town']))
			{
			$segments[] = JFilterOutput::stringURLSafe(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
			$segments[] = JomresFilterString($route_query['town']);
			unset($route_query['town']);
			}
		if (isset($route_query['region']))
			{
			$segments[] = JFilterOutput::stringURLSafe(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
			$segments[] = JomresFilterString($route_query['region']);
			unset($route_query['region']);
			}
		if (isset($route_query['country']))
			{
			$segments[] = JFilterOutput::stringURLSafe(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
			$segments[] = JomresFilterString($route_query['country']);
			unset($route_query['country']);
			}
		if (isset($route_query['send']))
			unset( $route_query['send'] );
		if (isset($route_query['calledByModule']))
			unset( $route_query['calledByModule'] );
		}
	$query = $route_query;
	return $segments;
	}

// ******************************************************************************************************************************
// ******************************************************************************************************************************
// ******************************************************************************************************************************
	
function JomresParseRoute($segments)
	{
		if (!defined('_JOMRES_INITCHECK')) define('_JOMRES_INITCHECK', 1 );
	global $thisJRUser;
	if (file_exists(JPATH_BASE.DS.'jomres'.DS.'core-plugins'.DS.'alternative_init'.DS.'alt_init.php'))
		require_once(JPATH_BASE.DS.'jomres'.DS.'core-plugins'.DS.'alternative_init'.DS.'alt_init.php');
	elseif (file_exists(JPATH_BASE.DS.'jomres'.DS.'remote_plugins'.DS.'alternative_init'.DS.'alt_init.php') )
		require_once(JPATH_BASE.DS.'jomres'.DS.'remote_plugins'.DS.'alternative_init'.DS.'alt_init.php');
	else
		require_once(JPATH_BASE.DS.'jomres'.DS.'integration.php');
	$vars = array();
	global $thisJRUser;
	if (!defined('_JOMRES_INITCHECK'))
		define('_JOMRES_INITCHECK', 1 );
	require_once('jomres/integration.php');
	$jrConfig =	getSiteSettings();
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
			$searchParam = $segments[1];
			$vars['send'] = "Search";
			$vars['calledByModule'] = 'mod_jomsearch_m0';
			if($searchParam==JFilterOutput::stringURLSafe(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN)) $searchParam= 'town';
			if($searchParam==JFilterOutput::stringURLSafe(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY)) $searchParam= 'country';
			if($searchParam==JFilterOutput::stringURLSafe(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION)) $searchParam= 'region';
			$vars[$searchParam] = JomresFilterString($segments[2]);
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
	
function JomresFilterString($dirtyString)
	{
	$stripCharsArray=array(',','~','!','@','%','^','*','(',')','+','<','>',':',';','{','}','[',']','---','--','-','..,','.',' ');
	$cleanStringForURL=strtolower(str_replace($stripCharsArray,'_',$dirtyString));
	return $cleanStringForURL;
	}

?>