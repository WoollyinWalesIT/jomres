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


class j06000selectcombo {
	function j06000selectcombo()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		jr_import('jomSearch');
		/*
		if( !function_exists('json_encode') )
			{
			require_once(JOMRESPATH_BASE.JRDS.'libraries'.JRDS.'json'.JRDS.'JSON.php');
			function json_encode($data) 
				{
				$json = new Services_JSON();
				return( $json->encode($data) );
				}
			}
		*/
		$allPropertyLocations=prepGeographicSearch();
		
		$filter=jomresGetParam( $_REQUEST, 'filter',"" );
		$q = jomresGetParam( $_REQUEST, 'q',"" );
		$searchAll = jr_gettext('_JOMRES_SEARCH_ALL',_JOMRES_SEARCH_ALL,false,false);
		
		if ($filter == "country")
			{
			$regions=array();
			foreach ($allPropertyLocations as $locations)
				{
				foreach ($locations as $location)
					{
					$t = jomres_decode($location['region']);
					if ($location['country']==$q)
						{
						$regions[$t]=$t;
						}
					else if ($q==$searchAll)
						$regions[$t]=$t;
					}
				}
			if (count($regions)>0)
				$ret_array=array_unique($regions);
			}
		
		if ($filter == "region")
			{
			$towns=array();
			foreach ($allPropertyLocations as $locations)
				{
				foreach ($locations as $location)
					{
					$t = jomres_decode($location['property_town']);
					if ($location['region']==$q)
						{
						$towns[$t]=$t;
						}
					else if ($q==$searchAll)
						$towns[$t]=$t;
					}
				}
			if (count($towns)>0)
				$ret_array=array_unique($towns);
			}

		$ret_string="["."{\"oV\":\"".$searchAll."\", \"oT\": \"".$searchAll."\"},";
		foreach ($ret_array as $key=>$val)
			{
			$ret_string.="{\"oV\":\"".$key."\", \"oT\": \"".$val."\"},";
			}
		$ret_string = substr($ret_string, 0, -1);
		$ret_string.="]";

		// The following uses json_encode, but it requires that the server be either built with json in php, or php5.2. As we're not forcing 5.2 (only php5) we'll leave it commented out and use the above functionality to build the json response, however it's useful to leave it in place in case we need to confirm the above formatting of the json response.
		// $ret_json = array();
		// $ret_json[] = array("oV"=>$searchAll,"oT"=>$searchAll);
		// foreach ($ret_array as $key=>$val)
			// {
			// $ret_string.="{oV:\"".$key."\", oT: \"".$val."\"},";
			// $ret_json[] = array("oV"=>$key,"oT"=>$val);
			// }
		// $ret_string = json_encode($ret_json);
		// 
		
		echo $ret_string;
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>