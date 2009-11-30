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

class jrportal_paypal_settings
	{
	function jrportal_paypal_settings()
		{
		$this->paypalConfigOptions=array();
		$this->paypalConfigOptions['usesandbox']="1";
		$this->paypalConfigOptions['currencycode']="EUR";
		$this->paypalConfigOptions['email']="";
		$this->paypalConfigOptions['override']="";
		}
	
	
	function get_paypal_settings()
		{
		
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = 'backend_paypal_settings'";
		$settingList=doSelectSql($query);
		foreach ($settingList as $s)
			{
			$this->paypalConfigOptions[$s->setting]=$s->value;
			}
		if ($this->paypalConfigOptions['usesandbox']=="1")
			{
			$this->paypalConfigOptions['submit_url']= 'https://www.sandbox.paypal.com/cgi-bin/webscr';
			$this->paypalConfigOptions['callback_url'] = 'www.sandbox.paypal.com/cgi-bin/webscr';
			}
		else
			{
			$this->paypalConfigOptions['submit_url']= 'https://www.paypal.com/cgi-bin/webscr';
			$this->paypalConfigOptions['callback_url'] = 'www.paypal.com/cgi-bin/webscr';
			}
		return $this->paypalConfigOptions;
		}

	function save_paypal_settings()
		{
		
		foreach ($_POST as $k=>$v)
			{
			$dirty = (string) $k;
			$k=addslashes($dirty);
			if ($k!='task' && $k!='plugin' && $k !="jomrestoken" && $k !="option" )
				$values[$k]=jomresGetParam( $_POST, $k, "" );
			}
		foreach ($values as $k=>$v)
			{
			$query="SELECT id FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = 'backend_paypal_settings' AND setting = '$k'";
			$settingList=doSelectSql($query);
			if (count($settingList)>0)
				{
				foreach ($settingList as $set)
					{
					$id=$set->id;
					}
				$query="UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = 0 AND plugin = 'backend_paypal_settings' AND setting = '$k'";
				doInsertSql($query,"");
				}
			else
				{
				$query="INSERT INTO #__jomres_pluginsettings
					(`prid`,`plugin`,`setting`,`value`) VALUES
					(0,'backend_paypal_settings','$k','$v')";
				doInsertSql($query,"");
				}
			}
		}
		

	}

?>