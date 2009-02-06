<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################


class j06000selectcombo {
	function j06000selectcombo()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
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
					$t = str_replace("&#39;","'",$location['region']);
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
					$t = str_replace("&#39;","'",$location['property_town']);
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
		
		$ret_string="["."{oV:\"".$searchAll."\", oT: \"".$searchAll."\"},";
		foreach ($ret_array as $key=>$val)
			{
			$ret_string.="{oV:\"".$key."\", oT: \"".$val."\"},";
			}
		$ret_string = substr($ret_string, 0, -1);
		$ret_string.="]";
		echo $ret_string;
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>