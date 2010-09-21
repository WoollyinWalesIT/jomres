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

class j16000partners_property_find
	{
	function j16000partners_property_find()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$search_string	= strtolower(jomresGetParam( $_REQUEST, 'value', '' ));
		
		$keywords= mysql_real_escape_string($search_string);
		$words = explode( ' ', $keywords );
		$wheres = array();
		foreach ($words as $word)
			{
			$wheres2 = array();
			$wheres2[] = "LOWER(property_name) LIKE '%$word%'";
			$wheres2[] = "LOWER(property_street) LIKE '%$word%'";
			$wheres2[] = "LOWER(property_town) LIKE '%$word%'";
			$wheres2[] = "LOWER(property_region) LIKE '%$word%'";
			$wheres2[] = "LOWER(property_postcode) LIKE '%$word%'";
			$wheres[] = implode( ' OR ', $wheres2 );
			}
		$where = '(' . implode( ($phrase == 'all' ? ') AND (' : ') OR ('), $wheres ) . ')';
		$query="SELECT propertys_uid,property_name FROM #__jomres_propertys ";
		$query.=" WHERE ( $where ) ";
		$results=doSelectSql($query);

		if (count($results)==0)
			echo "No results";
		else
			{
			$return = '<table>';
			foreach ($results as $res)
				{
				$return .='<tr><td>'.$res->property_name.'</td></tr>';
				}
			$return .='</table>';
			echo $return;
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}