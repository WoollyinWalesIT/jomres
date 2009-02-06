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
		$getVNW=1;
		$pluginName=jomresGetParam( $_REQUEST, 'plugin', '' );
		$pluginName=str_replace("<x>","",$pluginName);
		//$pluginName=str_replace(" ","_",$pluginName);
		if ($debugging) echo "Attempting download of ".$pluginName."<br>";
		$pluginsDirPath=JOMRESPATH_BASE.JRDS.'remote_plugins'.JRDS;
		$updateDirPath=JOMRESPATH_BASE.JRDS.'updates'.JRDS;

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

		$queryServer="http://updates.jomres.net/index.php?r=gp&vnw=".$getVNW."&plugin=".$pluginName;
		if ($debugging) echo $queryServer;

		$newfilename=JOMRESPATH_BASE.JRDS."updates".JRDS.$pluginName.".vnw";
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

			if ($getVNW == 1)
				{
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
				}
			else
				{
				$filestats=stat($newfilename);
				$remote_plugin_contents_string=file_get_contents($newfilename);
				$remote_plugin_contents=explode( "<~~~~~~~>",$remote_plugin_contents_string);
				$totalStringSize=strlen($remote_plugin_contents[1]);
				if ((int) $totalStringSize != (int) $remote_plugin_contents[0])
					{
					echo "File type: ".filetype($newfilename)."<br>";

					echo "Downloaded file size reported by PHP ".filesize($newfilename)."<br>";
					echo "File size error. Expected ".$remote_plugin_contents[0]." but got ".$totalStringSize." <br>";
					echo "Last 50 chars ".substr($remote_plugin_contents[1], -50, 50)."<br><br><br><br><br>";
					echo "Memory usage: ".memory_get_usage  (TRUE );
					echo "<br>";
					echo "Peak usage: ".memory_get_peak_usage  ( TRUE  );
					echo "<br>";
					var_dump($filestats);
					exit;
					}
				$files=explode( "<~~~~~>",$remote_plugin_contents[1]);
				foreach ($files as $remote_plugin_file)
					{
					$contents=explode("<~~~>",$remote_plugin_file);
					$plugin_filename=$contents[0];
					$plugin_filesize=$contents[1];
					$plugin_contents=$contents[2];
					//echo $plugin_filename. " - ".$plugin_filesize."<br>";
					if (mb_strlen($plugin_filename)>0 && mb_strlen($plugin_contents)>0)
						{
						echo mb_strlen  ($plugin_contents)."<br>";
						if (strlen($plugin_contents) == $plugin_filesize)
							{
							$filename=$updateDirPath."unpacked".JRDS.$plugin_filename;
							$fh=fopen($filename,"wb");
							if (fwrite($fh, $plugin_contents) === FALSE)
								{
								echo "Cannot write to file ($filename)";
								exit;
								}
							else echo "Created ".$filename."<br/>";
							fclose($fh);
							}
					else
							echo "Filesize error. Expected a string of ".$plugin_filesize." length, but got a string of ".strlen($plugin_contents)." length.<br/>";
						}
					}
				}

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
				if (!$debugging) jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."task=showplugins");
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