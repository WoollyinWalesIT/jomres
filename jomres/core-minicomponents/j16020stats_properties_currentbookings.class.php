<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16020stats_properties_currentbookings
	{
	function j16020stats_properties_currentbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
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
		$query="SELECT contract_uid,property_uid FROM #__jomres_contracts WHERE `cancelled` = 0 AND bookedout = 0";
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