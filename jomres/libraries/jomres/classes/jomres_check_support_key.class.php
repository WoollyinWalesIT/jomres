<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_check_support_key
	{
	function jomres_check_support_key ($task,$pk="",$plugin="")
		{
		$this->task = $task;
		$this->key_valid = false;
		if (isset($_REQUEST['support_key']) && strlen($_REQUEST['support_key']) > 0)
			$this->save_key($task);
		$this->check_license_key($pk,$plugin);
		}

	function check_license_key($pk,$plugin)
		{
		$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
		$licensekey=doSelectSql($query,1);
		// if (strlen(trim($licensekey))==0)
			// {
			// $this->show_key_input();
			// }

		if ($pk == "")
			{
			$this->key_hash = $licensekey;
			$str = "key=".$licensekey;
			}
		else
			{
			$this->key_hash = $pk;
			$str = "plugin_key=".$pk."&plugin=".$plugin;
			}
		
		$license_checked = queryUpdateServer("check_key.php",$str,"updates");
		$ret_result = (int)$license_checked;
		if ($ret_result == 2)
			$this->key_valid = true;
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