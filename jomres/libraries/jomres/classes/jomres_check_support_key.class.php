<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jomres_check_support_key
	{
	function jomres_check_support_key ($task)
		{
		$this->task = $task;
		$this->key_valid = false;
		if (isset($_REQUEST['support_key']) && strlen($_REQUEST['support_key']) > 0)
			$this->save_key($task);
		$this->check_license_key();
		
		}

	function check_license_key()
		{
		$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
		$licensekey=doSelectSql($query,1);
		if (strlen(trim($licensekey))==0)
			{
			$this->show_key_input();
			}
		$this->key_hash=$licensekey;
		$license_checked = queryUpdateServer("check_key.php","key=".$this->key_hash,"updates");
		$ret_result = (int)$license_checked;
		//$ret_result = 1;
		if ($ret_result == 0)
			{
			echo "<center>Support key not received by remote server</center>";
			}
		elseif ($ret_result == 1)
			{
			echo '<center><h2>Support key is not, or is no longer, valid. Please visit <a href="http://www.jomres.net">Jomres.net to purchase an up-to-date support key</a></h2><br/> You will not be able to download upgrades to Jomres or plugins without a valid support key.</center>';
			}
		elseif ($ret_result == 2)
			{
			echo "<center>Support key is valid, you can download upgrades and plugins.</center>";
			$this->key_valid = true;
			}
		if (!$this->key_valid)
			$this->show_key_input();
			
		}
		
	function show_key_input()
		{
		?>
		<center>
		<form action="<?php echo $this->task;?>" method="post" >
		<div class="jomresinstaller_panel">
		Please enter your support number in the following field.<br/>
		<input class="inputbox" type="text" name="support_key" value="" size="35"/>
		</div>
		<BUTTON NAME="combo" TYPE="submit" value="0" <STRONG>Save support key</STRONG></BUTTON>
		</form>
		</center>
		<?php
		}
		
	function save_key($return_url)
		{
		$lkey = trim($_REQUEST['support_key']);
		$query="SELECT value FROM #__jomres_settings WHERE property_uid LIKE '0' AND akey LIKE 'jomres_licensekey'";
		$settingsList=doSelectSql($query);
		if (count($settingsList)==0)
			$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('0','jomres_licensekey','$lkey')";
		else
			$query="UPDATE #__jomres_settings SET `value`='".$lkey."' WHERE property_uid = '0' and akey = 'jomres_licensekey'";
		$result=doInsertSql($query,'');
		return $result;
		}
	
	}

?>