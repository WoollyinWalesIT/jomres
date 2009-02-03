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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

class j16020stats_properties_currentbookings
	{
	function j16020stats_properties_currentbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$query="SELECT property_name,propertys_uid
		FROM #__jomres_propertys ORDER BY property_name";
		$result=doSelectSql($query);
		$propertys=array();
		foreach ($result as $r)
			{
			$propertys[$r->propertys_uid]=array('property_name'=>$r->property_name,'count'=>0);
			}
		$query="SELECT contract_uid,property_uid FROM #__jomres_contracts WHERE `cancelled` = 0 ";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$oldcount=$propertys[$r->property_uid]['count'];
				$oldcount++;
				$propertys[$r->property_uid]['count']=$oldcount++;
				}
			}
		$graphLabels="";
		$graphValues="";
		$counter=0;
		$numberOfResults=count($result);
		foreach ($propertys as $p)
			{
			$graphLabels.=$p['property_name'];
			$graphValues.=$p['count'];
			$counter++;
			//if ($counter<$numberOfResults)
			//	{
				$graphLabels.=",";
				$graphValues.=",";
			//	}
			}
		
		$graphParams=makeJsGraphOutput($graphLabels,$graphValues,"hBar","","divGraph");
		$this->retVal='<div class="graphcontainer"></div>';
		$this->retVal.='<div id="divGraph"></div>';
		$this->retVal.=$graphParams;
		echo $this->retVal;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVal;
		}	
	}