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

class j16020stats_properties_clicks
	{
	function j16020stats_properties_clicks()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
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