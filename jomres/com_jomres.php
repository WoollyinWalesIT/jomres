<?php
/**
 * sh404SEF support for Jomrescomponent.
 * Copyright Woollyinwales IT 2009
 */

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

// ------------------  standard plugin initialize function - don't change ---------------------------
global $sh_LANG, $sefConfig;

$shLangName 				= 	'';
$shLangIso 					= 	'';
$title 						= 	array();
$shItemidString 			= 	'';
$dosef 						= 	shInitializePlugin( $lang, $shLangName, $shLangIso, $option);

if ($dosef == false) 
	return;

// If arrivalDate set then no sef url -just return don't want to bung up the db with all the availabilty calendar stuff 
if (isset($arrivalDate))
	{
	$dosef					=	false;
	return;
	}

$task 						= 	isset($task) ? @$task : null;

if (!isset($task))
	$task					=	"search";

if ($task == 'dynamicsearch')
	$task	=	"search";

if ($task != 'search' && $task != "dobooking" && $task != "viewproperty")
	{
	$dosef					=	false;
	return;
	}

//Include the jomres stuff
require_once('components/com_jomres/integration.php');
$jrConfig					=	getSiteSettings();
	
// remove common URL from GET vars list, so that they don't show up as query string in the URL
shRemoveFromGETVarsList('option');
if (!empty($lang))
	shRemoveFromGETVarsList('lang');
if (isset($Itemid))
	shRemoveFromGETVarsList('Itemid');
if (!empty($limitstart)) 
	shRemoveFromGETVarsList('limitstart');

if ($task != 'search')
	{
	if (!empty($limit)) 
		shRemoveFromGETVarsList('limit');
	if (!empty($page)) 
		shRemoveFromGETVarsList('page');
	}	

// Set defaults if set to blank
if ($jrConfig['sef_task_alias_viewproperty'] == "")
	$jrConfig['sef_task_alias_viewproperty']	=	"details";
if ($jrConfig['sef_task_alias_dobooking'] == "")
	$jrConfig['sef_task_alias_dobooking']		=	"book";
if ($jrConfig['sef_task_alias_search'] == "")
	$jrConfig['sef_task_alias_search']			=	"search";
	
//Start building the SEF URL
if ($jrConfig['sef_jomres_url_prefix'] != "")
	$title[] 			= 	$jrConfig['sef_jomres_url_prefix'];	

if ($property_uid || $selectedProperty) 
	{
	if ($property_uid > 0)
		{
		$property			=	$property_uid;
		shRemoveFromGETVarsList('property_uid');
		}
	else	
		{
		$property			=	$selectedProperty;
		shRemoveFromGETVarsList('selectedProperty');
		}

	$query = "SELECT property_name,property_country,property_region,property_town,ptype_id FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property."'";
	$jr_property = doSelectSql($query);
	foreach ($jr_property as $element) 
		{
		$property_name 		= 	$element->property_name;
		$property_country 	= 	getSimpleCountry($element->property_country);
		$property_region 	= 	$element->property_region;
		$property_town 		= 	$element->property_town;

		$query = "SELECT ptype FROM #__jomres_ptypes WHERE id = '".(int)$element->ptype_id."'";
		$ptype = doSelectSql($query);
		foreach ($ptype as $p) 
			$property_type 		= 	$p->ptype;
		}

	if ($jrConfig['sef_property_url_country'])
		$title[] 				= 	$property_country;

	if ($jrConfig['sef_property_url_region'])	
		$title[] 				= 	$property_region;

	if ($jrConfig['sef_property_url_town'])	
		$title[] 				= 	$property_town;

	if ($jrConfig['sef_property_url_ptype'])	
		$title[] 				= 	$property_type;

	if ($jrConfig['sef_property_url_propertyname'])	
		{
		$temp					=	$property_name;
		if ($jrConfig['sef_property_url_property_id'])	
			$temp				.=	'-'.$property;

		$title[] 				= 	$temp;
		}
	}

switch ($task)
	{
	case 'viewproperty':
		$title[] 				= 	$jrConfig['sef_task_alias_viewproperty'];
		shRemoveFromGETVarsList('task');
			
		break; 
	case 'dobooking':
		$title[] 				= 	$jrConfig['sef_task_alias_dobooking'];
		shRemoveFromGETVarsList('task');

		break; 
	case 'search':
		if ($jrConfig['sef_search_url_country'])
			{
			if (isset($country) && $country != "All")
				{
				$property_country 	= 	getSimpleCountry($country);
				$title[] 			= 	$property_country;
				shRemoveFromGETVarsList('country');
				}
			elseif ($jrConfig['sef_default_country'] != "")
				{
				$title[] 			= 	$jrConfig['sef_default_country'];
				shRemoveFromGETVarsList('country');
				}
			}			
				
		if ($jrConfig['sef_search_url_region'])
			{
			if (isset($region) && $region != "All")
				{
				$title[] 			= 	$region;
				shRemoveFromGETVarsList('region');
				}
			elseif ($jrConfig['sef_default_region'] != "")
				{
				$title[] 			= 	$jrConfig['sef_default_region'];
				shRemoveFromGETVarsList('region');
				}
			}			

		if ($jrConfig['sef_search_url_town'])
			{
			if (isset($town) && $town != "All")
				{
				$title[] 			= 	$town;
				shRemoveFromGETVarsList('town');
				}
			elseif ($jrConfig['sef_default_town'] != "")
				{
				$title[] 			= 	$jrConfig['sef_default_town'];
				shRemoveFromGETVarsList('town');
				}
			}			

		if (isset($ptype) && $jrConfig['sef_search_url_ptype'])
			{
			if ($ptype != "All") 
				{
				$query = "SELECT ptype FROM #__jomres_ptypes WHERE id = '".(int)$ptype."' LIMIT 1";
				$ptype = doSelectSql($query);
				foreach ($ptype as $p) 
					$title[] 	= 	$p->ptype;
				shRemoveFromGETVarsList('ptype');
				}
			elseif ($jrConfig['sef_default_ptype'] != "")
				{
				$title[] 		= 	$jrConfig['sef_default_ptype'];
				shRemoveFromGETVarsList('ptype');
				}
			}

		$title[] 				= 	$jrConfig['sef_task_alias_search'];
		shRemoveFromGETVarsList('task');
		shRemoveFromGETVarsList('send');

		break;
	default:
		$dosef					=	false;	
		break;
	}

// ------------------  standard plugin finalize function - don't change ---------------------------
if ($dosef){
	$string 		= 	shFinalizePlugin( $string, $title, $shAppendString, $shItemidString,
	(isset($limit) ? @$limit : null), (isset($limitstart) ? @$limitstart : null),
	(isset($shLangName) ? @$shLangName : null));
}
// ------------------  standard plugin finalize function - don't change ---------------------------
?>
