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

class j16020stats_properties_clicks
	{
	function j16020stats_properties_clicks()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$query="SELECT #__jomres_propertys.property_name,#__jomres_propertys.propertys_uid,#__jomres_propertys.published,#__jomres_pcounter.count 
		FROM #__jomres_propertys,#__jomres_pcounter 
		WHERE (#__jomres_propertys.propertys_uid = #__jomres_pcounter.p_uid)
		ORDER BY property_name";
		$result=doSelectSql($query);
		$graphValues="";
		$graphLabels="";
		$counter=0;
		$numberOfResults=count($result);
		foreach ($result as $r)
			{
			$graphLabels.=str_replace("'","",stripslashes($r->property_name));
			$graphValues.=$r->count;
			$counter++;
			if ($counter<$numberOfResults)
				{
				$graphLabels.=",";
				$graphValues.=",";
				}
			}
		
		$graphParams=makeJsGraphOutput($graphLabels,$graphValues,"hBar","","divGraph");
		$this->retVal= $graphParams;
		
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