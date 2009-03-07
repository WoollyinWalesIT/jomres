<?php
/**
#
 * JRPortal core file
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

function taxrates_getalltaxrates()
	{
	$rates=array();
	$query="SELECT * FROM #__jomresportal_taxrates";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		foreach ($result as $r)
			{
			$rates[$r->id]['id']=$r->id;
			$rates[$r->id]['code']=$r->code;
			$rates[$r->id]['description']=$r->description;
			$rates[$r->id]['rate']=$r->rate;
			}
		}
	return $rates;
	}
	
function taxrates_makerateDropdown( $rates=array(),$selected='0' )
	{
	$ratesOptions=array();
	$ratesDropdown="";
	
	if (count($rates)<1)
		$rates=taxrates_getalltaxrates();
	if (count($rates>0) )
		{
		foreach($rates as $r)
			{
			$ratesOptions[]=jomresHTML::makeOption( $r['id'], $r['code']." ".$r['description'] );
			
			}
		$ratesDropdown= jomresHTML::selectList($ratesOptions, 'taxrate', 'class="inputbox" size="1"', 'value', 'text', $selected);
		}
		
	return $ratesDropdown;
	}
?>