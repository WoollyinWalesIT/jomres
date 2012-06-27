<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000addplugin
	{
	function j16000addplugin()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$debugging=false;
		define ("JOMRES_INSTALLER",1);
		$thirdparty=jomresGetParam( $_REQUEST, 'thirdparty', false );
		$pluginName=jomresGetParam( $_REQUEST, 'plugin', '' );
		$autoupgrade=jomresGetParam( $_REQUEST, 'autoupgrade', 0 );
		$pluginName=str_replace("<x>","",$pluginName);
		$pluginName=str_replace("&#60;x&#62;","",$pluginName);

		jr_import('jomres_check_support_key');
		$pk="";
		if (isset($_REQUEST['plugin_key']))
			{
			$pk=$_REQUEST['plugin_key'];
			$plugin = $_REQUEST['plugin'];
			}

		$key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN."&task=addplugin&no_html=1&plugin=".$pluginName,$pk,$plugin);
		$this->key_valid = $key_validation->key_valid;

		if ($thirdparty)
			$remote_pluginsDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
		else
			$remote_pluginsDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS;
		
		$updateDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'updates'.JRDS;

		if (strlen($pluginName)==0 && !$thirdparty)
			{
			echo "Error, no plugin name passed";
			if ($autoupgrade == 0) if ($autoupgrade == 0) return false; else { echo "FALSE"; return;} else { echo "FALSE"; return;}

			}

		if (!is_dir($remote_pluginsDirPath) )
			{
			if (!mkdir($remote_pluginsDirPath))
				{
				echo "Couldn't make $remote_pluginsDirPath folder. Please create it manually and ensure that apache/your web server has write access to that folder.<br/>";
				if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
				}
			else
				if ($debugging) echo "Made ".$remote_pluginsDirPath."<br>";
			}
		else
			if ($debugging) echo "No need to make ".$remote_pluginsDirPath."<br>";

		if (strlen($pluginName)>0)
			{
			if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName) )
				{
				emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName);
				if ($debugging) echo "Removing ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName."<br>";
				@rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName);
				}
			if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName) )
				{
				emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName);
				if ($debugging) echo "Removing ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName."<br>";
				@rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName);
				}
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
			$blowdedUp = explode(".",$formElement['name']);
			$pluginName = $blowdedUp[0];
			if ($formElement['name']!="")
				{
				if (strstr($formElement['name'],"-") ) 
					{
					$pos = strpos($formElement['name'], "-");
					$temp_file_name = substr ($formElement['name'],$pos+1);
					$newfilename=$updateDirPath.$temp_file_name;
					$pos = strpos($temp_file_name, ".zip");
					$pluginName=substr($temp_file_name, 0, $pos);
					}
				else
					$newfilename=$updateDirPath.$formElement['name']."";

				if (is_uploaded_file ($formElement['tmp_name'])  )
					{
					$plugin_tmp			= $formElement['tmp_name'];
					if (!copy ($plugin_tmp,$newfilename) )
						{
						$error=true;
						$errorDesc="<b>move_uploaded_file failed</b>";
						}
					}
				}
			if ($error)
				{
				echo $errorDesc;
				if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
				}
			}
		else
			{
			if ($this->key_valid)
				{
				if (!mkdir($remote_pluginsDirPath.$pluginName.JRDS))
					{
					echo "Couldn't make the folder ".$remote_pluginsDirPath.$pluginName.JRDS." so quitting.";
					if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
					}

				if ($debugging) echo "Attempting download of ".$pluginName."<br>";
				$newfilename=$updateDirPath.$pluginName.".vnw";
				$p='';
				if (isset($_REQUEST['plugin']))
					$p="&plugin=".$pluginName;
					$queryServer="http://plugins.jomres4.net/index.php?r=gp&cms="._JOMRES_DETECTED_CMS."&vnw=1&key=".$key_validation->key_hash.$p;

				if ($debugging) echo $queryServer;
				
				$curl_handle = curl_init($queryServer);
				$file_handle = fopen($newfilename, 'wb');
				if ($file_handle == FALSE)
					{ print "Couldn't create new file $newfilename. Possible file permission problem?<br/>"; if ($autoupgrade == 0) return false; else { echo "FALSE"; return;} }

				curl_setopt($curl_handle, CURLOPT_FILE, $file_handle);
				curl_setopt($curl_handle, CURLOPT_HEADER, 0);
					
				$result=curl_exec($curl_handle);
				curl_close($curl_handle);
				fclose($file_handle);
				curl_close($curl_handle);
				fclose($file_handle);
				}
			}

		if (!file_exists($newfilename) || filesize($newfilename)==0 )
			{
			echo "Something went wrong downloading the update files. Quitting";
			if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
			}

		if ($debugging) echo "<br>Downloaded $newfilename<br>";

		if (mkdir($updateDirPath."unpacked"))
			{
			if ($debugging) echo "<br>Starting extraction of $newfilename<br>";
			clearstatcache() ;

			if ($thirdparty)
				{
				if (!class_exists("PclZip"))
					require_once (JOMRESPATH_BASE.JRDS."libraries".JRDS.'pclzip'.JRDS."pclzip.lib.php");
				
				$archive = new PclZip($newfilename);
				$list = $archive->extract(PCLZIP_OPT_PATH, $updateDirPath."unpacked", PCLZIP_OPT_REMOVE_PATH, $pluginName.'/');
				}
			else
				{
				if (!class_exists("dUnzip2"))
					require_once (JOMRESPATH_BASE.JRDS."libraries".JRDS."dUnzip2.inc.php");
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
					if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
					}
				$zip->close();
				}

			if(!unlink($newfilename)) echo "Error removing $newfilename<br/>";

			if ($debugging) echo "<br>Completed extract of $newfilename<br>";
			if ($debugging) echo "<br>Moving contents of ".$updateDirPath."unpacked to ".$remote_pluginsDirPath.$pluginName."<br>";

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
					if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
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
					if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
					}
				}
			
			include(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'jomres_config.php');
			$this_jomres_version = explode(".",$mrConfig['version']);
			require_once($updateDirPath."unpacked".JRDS."plugin_info.php");
			$classname = "plugin_info_".$pluginName;
			$plugin_class = new $classname();
			$min_jomres_ver = explode(".",$plugin_class->data['min_jomres_ver']);
			if ( count($min_jomres_ver) == 3 && count($this_jomres_version) == 3)
				{
				$min_major_version = $min_jomres_ver[0];
				$min_minor_version = $min_jomres_ver[1];
				$min_revis_version = $min_jomres_ver[2];
				
				$current_major_version = $this_jomres_version[0];
				$current_minor_version = $this_jomres_version[1];
				$current_revis_version = $this_jomres_version[2];
				
				$error = true;
				if ( $current_major_version >= $min_major_version && $current_minor_version >= $min_minor_version && $current_revis_version >= $min_revis_version )
					$error = false;

				if ($current_major_version >= $min_major_version && $current_minor_version > $min_minor_version)
					$error = false;

				if ($current_major_version > $min_major_version) 
					$error = false;

				if ($error)
					{
					echo "Error, this plugin requires at least version ".$plugin_class->data['min_jomres_ver']." of Jomres";
					if ($autoupgrade == 0) return false; else { echo "FALSE"; return;}
					}
				}
			
			$result=dirmv($updateDirPath."unpacked", $remote_pluginsDirPath.$pluginName, true, $funcloc = "/");
			if ($result['success'])
				{
				//echo $remote_pluginsDirPath.$pluginName.JRDS."plugin_install.php";exit;
				if ($debugging) echo "<br>Moved contents of $newfilename to ".$remote_pluginsDirPath.$pluginName."<br>";
				if(!rmdir($updateDirPath."unpacked")) echo "Error removing $updateDirPath/unpacked<br/>";
				if (file_exists($remote_pluginsDirPath.$pluginName.JRDS."plugin_install.php") )
					{
					
					require_once ($remote_pluginsDirPath.$pluginName.JRDS."plugin_install.php");
					}
				touch ($remote_pluginsDirPath.$pluginName.JRDS."index.html");
				jr_import('minicomponent_registry');
				$registry = new minicomponent_registry(false);
				$registry->regenerate_registry();
				emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS);
				if ($autoupgrade == 0)
					{
					if ($plugin_class->data['type'] == "mambot" || $plugin_class->data['type'] == "module")
						{
						if (_JOMRES_DETECTED_CMS == "joomla16" || _JOMRES_DETECTED_CMS == "joomla17" || _JOMRES_DETECTED_CMS == "joomla25")
							{
							if (!$debugging) jomresRedirect(get_showtime("live_site")."/".JOMRES_ADMINISTRATORDIRECTORY."/index.php?option=com_installer&view=discover");
							}
						else
							{
							if (!$debugging) jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."&task=showplugins#".$pluginName);
							}
						}
					else
						{ 
						if (!$debugging) jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."&task=showplugins#".$pluginName); 
						}
					}
				else
					{
					echo "TRUE";
					}
				//
				}
			else
				echo "There was an error while unpacking and moving the plugin";
			}
		else
			echo "Error creating unpack folder";

		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>