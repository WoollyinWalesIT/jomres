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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Saves a tariff
 #
* @package Jomres
#
 */
class j02215savetariff_micromanage {
	/**
	#
	 * Constructor: Saves a tariff
	#
	 */
	function j02215savetariff_micromanage()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		$tariffinput		= $_POST['tariffinput'];
		$tarifftypeid		=intval(jomresGetParam( $_POST, 'tarifftypeid', 0 ));
		$tarifftypename		=jomresGetParam( $_POST, 'tarifftypename', "" );
		$mindays			=intval(jomresGetParam( $_POST, 'mindays', 0 ));
		$maxdays			=intval(jomresGetParam( $_POST, 'maxdays', 0 ));
		$minpeople			=intval(jomresGetParam( $_POST, 'minpeople', 0 ));
		$maxpeople			=intval(jomresGetParam( $_POST, 'maxpeople', 0 ));
		$roomClass			=intval(jomresGetParam( $_POST, 'roomClass', 0 ));
		$fixed_dayofweek	=intval(jomresGetParam( $_POST, 'fixed_dayofweek', 0 ));

		/*
		$ignore_pppn		=intval(jomresGetParam( $_POST, 'ignore_pppn', 0 ));
		$allow_we			=intval(jomresGetParam( $_POST, 'allow_we', 0 ));
		*/
		$ignore_pppn		= 0 ;
		$allow_we			= 1 ;
		
		// security check
		if ($tarifftypeid > 0)
			{
			$query="SELECT `name` FROM #__jomcomp_tarifftypes WHERE id = '".(int)$tarifftypeid."' AND property_uid = '".(int)$defaultProperty."' ";
			$result=doSelectSql($query);
			if (count($result) == 0)
				trigger_error ("Unable to update tariff details, incorrect tarifftype id / property uid combination. Possible hack attempt", E_USER_ERROR);
			}
		$newTariffsArray=array();
		reset($tariffinput);
		for($i = 0;$i <= 0; $i++) next($tariffinput); // Setting the pointer to the first element in the array to find the key, and thereby the first date in the tariffs
		$lastdate=date("Y/m/d",key($tariffinput));
		$v=key($tariffinput);
		$lastvalue=(float)$tariffinput[$v];
		$counter=0;

		// Let's construct an array that'll contain the important parts of our new tariffs
		foreach ($tariffinput as $epoch=>$value)
			{
			$counter++;
			$epoch=(int)$epoch;
			
			$date=date("Y/m/d",$epoch);
			$daybefore=date("Y/m/d",strtotime("-1 day",$epoch));
			if (!is_null($lastvalue))
				{
				if ($value!=$lastvalue)
					{
					$newTariffsArray[]=array('start'=>$lastdate,'end'=>$daybefore,'value'=>$lastvalue);
					$lastdate=$date;
					}
				else
					{
					
					if ($counter == count($tariffinput))
						{
						$newTariffsArray[]=array('start'=>$lastdate,'end'=>$date,'value'=>$lastvalue);
						$lastdate=$date;
						}
					}
				}
			$lastvalue=$value;
			}
		if ($tarifftypeid > 0)
			{
			// next we need to find all the tariff uids that are associated with this tariff type
			$query="SELECT tariff_id FROM #__jomcomp_tarifftype_rate_xref WHERE tarifftype_id = '".(int)$tarifftypeid."'";
			$rateIds=doSelectSql($query);
			$rates=array();
			foreach ($rateIds as $r)
				{
				$rates[]=$r->tariff_id;
				}
			$gor=genericOr($rates,'rates_uid');
			// now we can remove the old tariffs
			if (count($rates)>0)
				{
				$query="DELETE FROM #__jomres_rates WHERE ".$gor."";
				//echo $query."<br>";
				$result=doInsertSql($query,'');
				}
			// delete the old __jomcomp_tarifftype_rate_xref records
			$gor=genericOr($rates,'tariff_id');
			if (count($rates)>0)
				{
				$query="DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE ".$gor."";
				//echo $query."<br>";
				$result=doInsertSql($query,'');
				}
			}

		// and create new ones based on the new details
		$newRateIds=array();
		
		foreach ($newTariffsArray as $t)
			{
			// We need all of the new rate ids, so can't use multiple insert here, instead we'll insert each at a time
			$validfrom_ts=str_replace("/","-",$t['start']);
			$validto_ts=str_replace("/","-",$t['end']);
			$query="INSERT INTO #__jomres_rates (
			`rate_title`,`rate_description`,`validfrom`,`validto`,`roomrateperday`,`mindays`,`maxdays`,
			`minpeople`,`maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`dayofweek`,`validfrom_ts`,`validto_ts`,`property_uid`)
			VALUES
			('$tarifftypename','','".$t['start']."','".$t['end']."','".$t['value']."','".(int)$mindays."','".(int)$maxdays."',
			'".(int)$minpeople."','".(int)$maxpeople."','".(int)$roomClass."','".(int)$ignore_pppn."','0','".(int)$allow_we."',".(int)$fixed_dayofweek.",'".$validfrom_ts."',
			'".$validto_ts."','".(int)$defaultProperty."')";
			//echo $query."<br>";
			$newRateIds[]=doInsertSql($query,'');
			}

		// finally we want to create a new tariff type if it doesn't exist
		if ($tarifftypeid==0)
			{
			$query="INSERT INTO #__jomcomp_tarifftypes (`name`,`property_uid`) VALUES ('$tarifftypename','".(int)$defaultProperty."')";
			$tarifftypeid=doInsertSql($query,'');
			}
		else
			{
			$query="UPDATE #__jomcomp_tarifftypes SET `name`='$tarifftypename' WHERE id = '".(int)$tarifftypeid."' AND property_uid = '".(int)$defaultProperty."'";
			$result=doInsertSql($query,'');
			}
		//echo $query."<br>";
		// and update __jomcomp_tarifftype_rate_xref with the tariff type/tariff uids.
		$newRateStr="";
		$counter=1;
		foreach ($newRateIds as $r)
			{
			$newRateStr.="('".(int)$tarifftypeid."','".(int)$r."','".(int)$roomClass."','".(int)$defaultProperty."')";
			if ($counter< count($newRateIds) )
				$newRateStr.=",";
			$counter++;
			}
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF',_JOMRES_MR_AUDIT_INSERT_TARIFF,FALSE));
		$query="INSERT INTO #__jomcomp_tarifftype_rate_xref (`tarifftype_id`,`tariff_id`,`roomclass_uid`,`property_uid`) VALUES".$newRateStr;
		if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF',_JOMRES_MR_AUDIT_INSERT_TARIFF,FALSE))) returnToPropertyConfig($saveMessage);
		trigger_error ("Unable to update tariff details, mysql db failure", E_USER_ERROR);
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>