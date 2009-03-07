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