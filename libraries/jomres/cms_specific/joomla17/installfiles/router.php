<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

/* Contributed by Antony, many thanks */

defined( '_JEXEC' ) or die( '' );

function JomresBuildRoute(&$query)
	{
	static $items;
	$route_query = $query;  
	
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

	if ($route_query['task'] == "dobooking" && isset($route_query['remus']) )
		return array();
	
	if (isset($route_query['property_uid']) || isset($route_query['selectedProperty']))
		{
		if (isset($route_query['selectedProperty']))
		$pid = $route_query['selectedProperty'];
		else
		$pid = $route_query['property_uid'];

		$current_property_details =jomres_getSingleton('basic_property_details');
		$tmpname_array = $current_property_details->property_names;
		if (is_null($tmpname_array[$pid]))
			{
			$sql = "SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = ".(int)$pid." LIMIT 1";
			$property_name = doSelectSql($sql,1);
			}
		else
			$property_name = $tmpname_array[$pid];
		}
		
	switch($route_query['task'])
		{
//the viewproperty is one of the urls that contain the property_uid, here i replaced this line of code $segments[] = $route_query['task']; with this line of code: $segments[] = viewprofile;  Another url that uses the property_uid for example is the editproperty in the control panel, you can copy this link and then change the "editproperty" to what ever you want, as i have done below...

		case 'viewproperty':
			$segments[] = viewprofile;
			$segments[] = trim($property_name);
			$segments[] = $route_query['property_uid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			break;
//this editproperty gives me a link like so: http://www.xxxxx.com/editprofile/fawltyxx/1.html			
		case 'editProperty':
			$segments[] = editprofile;
			$segments[] = trim($property_name);
			$segments[] = $route_query['propertyUid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['propertyUid']))
					unset( $route_query['propertyUid'] );
			break;
						
		case 'hotelSettings':
			$segments[] = businesssettings;
			$segments[] = trim($property_name);
			$segments[] = $route_query['property_uid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			break;
			
		case 'propertyadmin':
			$segments[] = pricingAndServices;
			$segments[] = trim($property_name);
			$segments[] = $route_query['property_uid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			break;
						
		case 'listCustomerTypes':
			$segments[] = listClientTypes;
			$segments[] = trim($property_name);
			$segments[] = $route_query['property_uid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			break;
		case 'listCoupons':
			$segments[] = createCouponsVouchersTickets;
			$segments[] = trim($property_name);
			$segments[] = $route_query['property_uid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			break;
		case 'listExtras':
			$segments[] = addExtraServicesandPrices;
			$segments[] = trim($property_name);
			$segments[] = $route_query['property_uid'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['property_uid']))
					unset( $route_query['property_uid'] );
			break;
		case 'dobooking':
			$segments[] = "dobooking";
			$segments[] = trim($property_name);
			$segments[] = $route_query['selectedProperty'];
			if (isset($route_query['task']))
					unset( $route_query['task'] );
			if (isset($route_query['selectedProperty']))
					unset( $route_query['selectedProperty'] );
			break;
		case 'showTariffs':
			$segments[] = showpricing;
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
			$segments[] = showServiceLists;
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
			$segments[] = town;
			$segments[] = JomresFilterString($route_query['town']);
			unset( $route_query['town'] );
			}
// this part deals with the search url. here i have left as is basically: if i remove the region from the $segments[] = region; and replace it with: $segments[] = ""; when someone does a search on your site and they choose western cape as the region, the url will look like this: http://www.xxx.com/whatever/westerncape/xxxxx  instead of http://www.xxx.com/whatever/region/westerncape/xxxxx i prefer it without the url heading, makes the url shorter and sweater.. easier to pass or send to friend... you can also change it to something else instead of blank and region you could have countriesdividents.. anything you want get the picture?
		if (isset($route_query['region']))
			{
			$segments[] = region;
			$segments[] = JomresFilterString($route_query['region']);
			unset( $route_query['region'] );
			}
		if (isset($route_query['country']))
			{
			$segments[] = country;
			$segments[] = JomresFilterString($route_query['country']);
			unset( $route_query['country'] );
			}
//her i removed the heading so when description is searched, only the searched words are shown, not the heading as well.
		if (isset($route_query['description']))
			{
			$segments[] = "";
			$segments[] = JomresFilterString($route_query['description']);
			unset( $route_query['description'] );
			}    
		if (isset($route_query['ratestitle']))
			{
			$segments[] = "";
			$segments[] = JomresFilterString($route_query['ratestitle']);
			unset( $route_query['ratestitle'] );
			}			
		if (isset($route_query['language']))
			{
			$segments[] = "";
			$segments[] = JomresFilterString($route_query['language']);
			unset( $route_query['language'] );
			}
		if (isset($route_query['arrivalDate']))
			{
			$segments[] = "";
			$segments[] = JomresFilterString($route_query['arrivalDate']);
			unset( $route_query['arrivalDate'] );
			}
		if (isset($route_query['departureDate']))
			{
			$segments[] = "";
			$segments[] = JomresFilterString($route_query['departureDate']);
			unset( $route_query['departureDate'] );
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
	$vars = array();
	global $thisJRUser;
	if (!defined('_JOMRES_INITCHECK'))
		define('_JOMRES_INITCHECK', 1 );
	require_once('jomres/integration.php');
	$jrConfig					=	getSiteSettings();
	switch($segments[0])
		{
//what ever you called or change it from in the top must be changed here to the changed or added words.. is case sensetive to what you added above.. this is for the control panel urls and everything else, except the search url, they are handled just above the funny lines above..
		case 'viewproperty':
			$vars['task'] = "viewprofile";
			$vars['property_uid'] = $segments[2];
			break;
		case 'editProperty':
			$vars['task'] = "editprofile";
			$vars['property_uid'] = $segments[2];
			break;
		case 'hotelSettings':
			$vars['task'] = "businesssettings";
			$vars['property_uid'] = $segments[2];
			break;
		case 'propertyadmin':
			$vars['task'] = "pricingAndServices";
			$vars['property_uid'] = $segments[2];
			break;			
		case 'listCoupons':
			$vars['task'] = "createCouponsVouchersTickets";
			$vars['property_uid'] = $segments[2];
			break;
		case 'listExtras':
			$vars['task'] = "addExtraServicesandPrices";
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
			$vars['task'] = "showpricing";
			$vars['property_uid'] = $segments[1];
			$vars['op'] = $segments[2];
			break;
		case 'slideshow':
			$vars['task'] = "slideshow";
			$vars['property_uid'] = $segments[1];
			$vars['op'] = $segments[2];
			break;
		case 'showRoomsListing':
			$vars['task'] = "showServiceLists";
			$vars['property_uid'] = $segments[1];
			$vars['op'] = $segments[2];
			break;
		}
	return $vars;
	}
	
function JomresFilterString($dirtyString)
	{
// if you get any strange character in your url that you would like to remove, add them here. I added this here myself '%2F', i think off-hand it is a "/" character or a "&" character.. 
	$stripCharsArray=array('%2F',',','~','!','@','%','^','*','(',')','+','<','>',':',';','{','}','[',']','---','--','-','..,','.',' ');
	$cleanStringForURL=str_replace($stripCharsArray,'_',$dirtyString);
	return $cleanStringForURL;
	}

?>

?>