<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16020stats_properties_currentbookings_values
	{
	function j16020stats_properties_currentbookings_values()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
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