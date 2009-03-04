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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000addplugin
	{
	function j16000addplugin()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site;

		$detect_os = strtoupper($_SERVER["SERVER_SOFTWARE"]); // converted to uppercase
		$pos = strpos($detect_os, "WIN32");
		if ($pos === false) {
		      define("JRDS" , "/");
		} else {
		      define("JRDS" , "\\");
		}

		$debugging=false;

		$thirdparty=jomresGetParam( $_REQUEST, 'thirdparty', false );

		$pluginsDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
		$updateDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'updates'.JRDS;

		if (!is_dir($pluginsDirPath) )
			{
			if (!mkdir($pluginsDirPath))
				{
				echo "Couldn't make $pluginsDirPath folder. Please create it manually and ensure that apache/your web server has write access to that folder.<br/>";
				return false;
				}
			}
		
		if (is_dir($pluginsDirPath.$pluginName) )
			{
			emptyDir($pluginsDirPath.$pluginName);
			@rmdir($pluginsDirPath.$pluginName);
			}

		if (is_dir($updateDirPath."unpacked") )
			{
			if ($debugging) echo "<br>Removing ".$updateDirPath."unpacked<br>";
			emptyDir($updateDirPath."unpacked");
			rmdir($updateDirPath."unpacked");
			}
			
		emptyDir($updateDirPath);
		
		
		if ($thirdparty)
			{
			$error=false;
			
			$formElement=$_FILES['pluginfile'];

			if ($formElement['name']!="")
				{
				$newfilename=$updateDirPath.$formElement['name'].".vnw";
				if( strtolower($formElement['type']) != "application/zip" )
					{
					$error=true;
					$errorDesc="<br>Filename: ".$formElement['name']." Wrong type of file. Only .zip files allowed";
					} 
				else 
					{
					if (is_uploaded_file ($formElement['tmp_name'])  )
						{
						$plugin_tmp			= $formElement['tmp_name'];
						echo "Copying ".$img_destination."<br>";
						if (!move_uploaded_file ($plugin_tmp,$newfilename) )
							{
							$error=true;
							$errorDesc="<b>move_uploaded_file failed</b>";
							}
						}
					}
				}
			if ($error)
				{
				echo $errorDesc;
				return false;
				}
			}
		else
			{
			$pluginName=jomresGetParam( $_REQUEST, 'plugin', '' );
			$pluginName=str_replace("<x>","",$pluginName);
			//$pluginName=str_replace(" ","_",$pluginName);
			if ($debugging) echo "Attempting download of ".$pluginName."<br>";
			$newfilename=$updateDirPath.JRDS.$pluginName.".vnw";
			$queryServer="http://updates.jomres.net/index.php?r=gp&vnw=".$getVNW."&plugin=".$pluginName;
			if ($debugging) echo $queryServer;

			$out = fopen($newfilename, 'wb');
			if ($out == FALSE)
				{ print "Couldn't create new file $newfilename. Possible file permission problem?<br/>"; exit; }
			$curl_handle = curl_init($queryServer);
			curl_setopt($curl_handle, CURLOPT_FILE, $out);
			curl_setopt($curl_handle, CURLOPT_HEADER, 0);
			curl_setopt($curl_handle, CURLOPT_URL, $queryServer);
			curl_setopt($curl_handle, CURLOPT_FORBID_REUSE, 1);
			curl_setopt($curl_handle, CURLOPT_FRESH_CONNECT, 1);
			curl_exec($curl_handle);
			curl_close($curl_handle);
			fclose($out);
			}

		if (!file_exists($newfilename) || filesize($newfilename)==0 )
			{
			echo "Something went wrong downloading the update files. Quitting";
			return false;
			}

		if ($debugging) echo "<br>Downloaded $newfilename<br>";

		if (mkdir($updateDirPath."unpacked"))
			{
			if ($debugging) echo "<br>Starting extraction of $newfilename<br>";
			clearstatcache() ;

			if (!class_exists("dUnzip2"))
				require_once (JOMRESPATH_BASE.JRDS."libraries".JRDS."dUnzip2.inc.php");
			//var_dump($newfilename);exit;
			$zip = new dUnzip2($newfilename);
			// Activate debug
			$zip->debug = $debugging;
			// Unzip all the contents of the zipped file to this folder
			$zip->getList();
			$result=$zip->unZipAll($updateDirPath."unpacked");
			if ($result['result']==false)
				{
				echo "Emptying ".$updateDirPath."unpacked"."<br>";
				emptyDir($updateDirPath."unpacked");
				rmdir($updateDirPath."unpacked");
				echo $result['msg'];
				return false;
				}
			$zip->close();

			if(!unlink($newfilename)) echo "Error removing $newfilename<br/>";
			mkdir($pluginsDirPath.$pluginName);
			if ($debugging) echo "<br>Completed extract of $newfilename<br>";
			if ($debugging) echo "<br>Moving contents of ".$updateDirPath."unpacked to ".$pluginsDirPath.$pluginName."<br>";

			if (file_exists($updateDirPath."unpacked".JRDS."plugin_dependencies_check.php") )
				{
				require_once($updateDirPath."unpacked".JRDS."plugin_dependencies_check.php");
				$info = new plugin_check_dependencies();
				if (!$info->test_result)
					{
					echo " Failed dependencies check. Please ensure that you've installed the following plugins before attempting to install this one: <br/>";
					foreach ($info->dependencies as $d)
						{
						echo $d;
						}
					return;
					}
				}
			if (file_exists($updateDirPath."unpacked".JRDS."plugin_exclusions_check.php") )
				{
				require_once($updateDirPath."unpacked".JRDS."plugin_exclusions_check.php");
				$info = new plugin_check_exclusions();
				if (!$info->test_result)
					{
					echo " Failed plugin_check_exclusions check. Please ensure that you've un-installed the following plugins before attempting to install this one: <br/>";
					foreach ($info->exclusions as $d)
						{
						echo $d."<br/>";
						}
					echo " One or more may be installed, this list is a list of plugins that the plugin that you are trying to install will conflict with. <br/>";
					return;
					}
				}
			$result=dirmv($updateDirPath."unpacked", $pluginsDirPath.$pluginName, true, $funcloc = "/");
			if ($result['success'])
				{
				if ($debugging) echo "<br>Moved contents of $newfilename to ".$pluginsDirPath.$pluginName."<br>";
				if(!rmdir($updateDirPath."unpacked")) echo "Error removing $updateDirPath/unpacked<br/>";
				if (file_exists($pluginsDirPath.$pluginName.JRDS."plugin_install.php") )
					{
					define ("JOMRES_INSTALLER",1);
					require_once ($pluginsDirPath.$pluginName.JRDS."plugin_install.php");
					}
				if (!$debugging) jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."&task=showplugins");
				}
			else
				echo "There was an error while unpacking and moving the plugin";
			}
		else
			echo "Error creating unpack folder";

		$registry = new minicomponent_registry(false);
		$registry->regenerate_registry();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>