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

class j16020stats_properties_currentbookings_values
	{
	function j16020stats_properties_currentbookings_values()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$currencycodes=currencyCodesArray();
		$query="SELECT property_name,propertys_uid
		FROM #__jomres_propertys ORDER BY property_name";
		$result=doSelectSql($query);
		$propertys=array();
		
		foreach ($result as $r)
			{
			if (!is_null($r->propertys_uid) )
				$propertys[$r->propertys_uid]=array('property_name'=>$r->property_name, 'currency_codes'=>array() );
			}
		$query="SELECT contract_uid,property_uid,contract_total,currency_code FROM #__jomres_contracts WHERE `cancelled` = 0 ";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				if (!is_null($r->currency_code) && !is_null($propertys[$r->property_uid]))
					{
					settype ($r->contract_total,'float');
					if (array_key_exists($r->currency_code,$propertys[$r->property_uid]['currency_codes']) )
						{
						$oldvalue=$propertys[$r->property_uid]['currency_codes'][$r->currency_code];
						$newvalue=$r->contract_total+$oldvalue;
						}
					else
						{
						$newvalue=$r->contract_total;
						}
					$propertys[$r->property_uid]['currency_codes'][$r->currency_code]=$newvalue;
					
					}
				}
			}

		$counter=0;
		$numberOfResults=count($propertys);
		$graphLabels="";
		$graphValues="";
		foreach ($propertys as $p)
			{
			if (is_array($p['currency_codes']) )
				{
				foreach ($p['currency_codes'] as $cc=>$val)
					{
					
					$graphLabels.=$p['property_name'].' '.$cc;
					$graphValues.=number_format($val,2, '.', '');
					$counter++;
					if ($counter<$numberOfResults)
						{
						$graphLabels.=",";
						$graphValues.=",";
						}
					}
				}
			}
		$graphLabels=substr($graphLabels,0,-1);
		$graphValues=substr($graphValues,0,-1);
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