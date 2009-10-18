<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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