<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000addplugin
	{
	function j16000addplugin($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		include(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'jomres_config.php');
		$this_jomres_version = explode(".",$mrConfig['version']);
		$debugging=false;
		define ("JOMRES_INSTALLER",1);
		$thirdparty=jomresGetParam( $_REQUEST, 'thirdparty', false );
		
		$pluginName=jomresGetParam( $_REQUEST, 'plugin', '' );
		if (isset($componentArgs['plugin']))
			$pluginName = $componentArgs['plugin'];
		
		$autoupgrade=jomresGetParam( $_REQUEST, 'autoupgrade', false );
		if (isset($componentArgs['autoupgrade']))
			$autoupgrade=$componentArgs['autoupgrade'];

		$progress_messages = array();
		$error_messsage = array();
		$output = array();
		$pageoutput=array();
		$auto_installation_result=array();
		$auto_installation_results=array();
		
		$output['NEXT_STEP']='';
		
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
			{
			$formElement=$_FILES['pluginfile'];
			$blowdedUp = explode(".",$formElement['name']);
			$pluginName = $blowdedUp[0];
			}
		
		if ($thirdparty)
			$remote_pluginsDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
		else
			$remote_pluginsDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS;

		if (strlen($pluginName)==0 && !$thirdparty)
			{
			$error_messsage["ERROR"]="Error, no plugin name passed";
			if ($autoupgrade) return false; 
			}

		if (!is_dir($remote_pluginsDirPath) )
			{
			if (!mkdir($remote_pluginsDirPath))
				{
				$error_messsage["ERROR"]= "Couldn't make $remote_pluginsDirPath folder. Please create it manually and ensure that apache/your web server has write access to that folder.";
				if ($autoupgrade) return false;
				}
			else
				$progress_messages[] =  array("MESSAGE"=>"Made ".$remote_pluginsDirPath."");
			}
		else
			$progress_messages[] =  array("MESSAGE"=>"No need to make ".$remote_pluginsDirPath."");

		if (strlen($pluginName)>0)
			{
			if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName) )
				{
				emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName);
				$progress_messages[] =  array("MESSAGE"=>"Removing ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName."");
				@rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.$pluginName);
				}
			if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName) )
				{
				emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName);
				$progress_messages[] =  array("MESSAGE"=>"Removing ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName."");
				@rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS.$pluginName);
				}
			}
		
		$updateDirPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'updates'.JRDS.$pluginName.JRDS;

		
		if (is_dir($updateDirPath."unpacked") )
			{
			$progress_messages[] =  array("MESSAGE"=>"Cleaning up ".$updateDirPath." unpacked for a new installation of the plugin.");
			emptyDir($updateDirPath."unpacked");
			rmdir($updateDirPath."unpacked");
			}
		
		if (is_dir($updateDirPath) )
			{
			$progress_messages[] =  array("MESSAGE"=>"Cleaning up ".$updateDirPath." for a new installation of the plugin.");
			emptyDir($updateDirPath);
			rmdir($updateDirPath);
			}

		if (mkdir($updateDirPath))
			$progress_messages[] =  array("MESSAGE"=>"Made ".$updateDirPath." for a new installation of the plugin.");
		else
			{
			$error_messsage["ERROR"]="Couldn't make the folder ".$updateDirPath." so quitting.";
			echo $error_messsage["ERROR"];
			return;
			}
			
		if (mkdir($updateDirPath."unpacked"))
			$progress_messages[] =  array("MESSAGE"=>"Made ".$updateDirPath."unpacked for a new installation of the plugin.");
		else
			{
			$error_messsage["ERROR"]="Couldn't make the folder ".$updateDirPath."unpacked so quitting.";
			echo $error_messsage["ERROR"];
			return;
			}
		
		
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
				$error_messsage["ERROR"]=$errorDesc;
				if ($autoupgrade) return false;
				}
			
			}
		else
			{
			if ($this->key_valid)
				{
				if (!mkdir($remote_pluginsDirPath.$pluginName.JRDS))
					{
					$error_messsage["ERROR"]="Couldn't make the folder ".$remote_pluginsDirPath.$pluginName.JRDS." so quitting.";
					if ($autoupgrade) return false;
					}

				$progress_messages[] =  array("MESSAGE"=>"Attempting download of ".$pluginName."");
				$newfilename=$updateDirPath.$pluginName.".vnw";
				$p='';
				if (isset($_REQUEST['plugin']))
					$p="&plugin=".$pluginName;
				
				$queryServer="http://plugins.jomres4.net/index.php?r=gp&cms="._JOMRES_DETECTED_CMS."&vnw=1&key=".$key_validation->key_hash.$p."&jomresver=".$mrConfig['version'];

				$progress_messages[] =  array("MESSAGE"=>$queryServer);
				
				$curl_handle = curl_init($queryServer);
				$file_handle = fopen($newfilename, 'wb');
				if ($file_handle == FALSE)
					{
					$error_messsage["ERROR"]= "Couldn't create new file $newfilename. Possible file permission problem?";
					if ($autoupgrade) return false; 
					}

				curl_setopt($curl_handle, CURLOPT_FILE, $file_handle);
				curl_setopt($curl_handle, CURLOPT_HEADER, 0);
				curl_setopt($curl_handle, CURLOPT_USERAGENT,'Jomres');
					
				$result=curl_exec($curl_handle);
				curl_close($curl_handle);
				fclose($file_handle);
				curl_close($curl_handle);
				fclose($file_handle);
				}
			}

		if (!file_exists($newfilename) || filesize($newfilename)==0 )
			{
			$error_messsage["ERROR"]="Something went wrong downloading the update files. Quitting";
			if ($autoupgrade) return false;
			}

		$progress_messages[] =  array("MESSAGE"=>"Downloaded $newfilename");

		if (is_dir($updateDirPath."unpacked"))
			{
			$progress_messages[] =  array("MESSAGE"=>"Starting extraction of $newfilename");
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
					$error_messsage["ERROR"]= "Emptying ".$updateDirPath."unpacked"."";
					emptyDir($updateDirPath."unpacked");
					rmdir($updateDirPath."unpacked");
					$error_messsage["ERROR"]= $result['msg'];
					if ($autoupgrade) return false;
					}
				$zip->close();
				}

			if(!unlink($newfilename)) $error_messsage["ERROR"]= "Error removing $newfilename";

			$progress_messages[] =  array("MESSAGE"=>"Completed extract of $newfilename");
			$progress_messages[] =  array("MESSAGE"=>"Moving contents of ".$updateDirPath."unpacked to ".$remote_pluginsDirPath.$pluginName."");

			if (file_exists($updateDirPath."unpacked".JRDS."plugin_dependencies_check.php") )
				{
				require_once($updateDirPath."unpacked".JRDS."plugin_dependencies_check.php");
				$info = new plugin_check_dependencies();
				
				if (!$info->test_result)
					{
					if ($this->key_valid)
						{
						foreach ($info->dependencies as $d)
							{
							$auto_installation_result = array();
							if (!$autoupgrade)
								$auto_installation_result['MESSAGE']= "Attempting to auto-install dependancies";
							$result = $MiniComponents->specificEvent('16000','addplugin',array("plugin"=>$d,"autoupgrade"=>true));
							if (!$autoupgrade)
								{
								$discovery_required = false;
								if ($result['success'])
									{
									$auto_installation_result['MESSAGE']= "Auto installed ".$d." as it is required by ".$pluginName.".";
									if ($result['discovery_required'])
										$discovery_required = true;
									}
								else
									$auto_installation_result['MESSAGE']= "Failed to auto install ".$d.". Please install the plugin manually through the plugin manager.";
								$auto_installation_results[] = $auto_installation_result;
								}
							}
						}
					else
						{
						$error_messsage["ERROR"]=" Failed dependencies check. Please ensure that you've installed the following plugins before attempting to install this one: ";
						foreach ($info->dependencies as $d)
							{
							$error_messsage["ERROR"].= '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=addplugin&no_html=1&plugin='.$d.'" target="_blank">'.$d.'</a>';
							}
						}
					}

				}

			if (file_exists($updateDirPath."unpacked".JRDS."plugin_exclusions_check.php") )
				{
				require_once($updateDirPath."unpacked".JRDS."plugin_exclusions_check.php");
				$info = new plugin_check_exclusions();
				if (!$info->test_result)
					{
					$error_messsage["ERROR"]= " Failed plugin_check_exclusions check. Please ensure that you've un-installed the following plugins before attempting to install this one: ";
					foreach ($info->exclusions as $d)
						{
						$exclusions[] = array("MESSAGE"=> "Error, the plugin you are trying to install cannot be installed because ".$d." is already installed.");
						}
					//$error_messsage["ERROR"]= " One or more may be installed, this list is a list of plugins that the plugin that you are trying to install will conflict with. ";
					if ($autoupgrade) return false;
					}
				}
			

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
					$error_messsage["ERROR"]="Error, this plugin requires at least version ".$plugin_class->data['min_jomres_ver']." of Jomres";
					if ($autoupgrade) return false;
					}
				}
			
			$plugin_installed_successfully = false;

			$result=dirmv($updateDirPath."unpacked", $remote_pluginsDirPath.$pluginName, true, $funcloc = "/");
			if ($result['success'])
				{
				//echo $remote_pluginsDirPath.$pluginName.JRDS."plugin_install.php";exit;
				$progress_messages[] =  array("MESSAGE"=>"Moved contents of $newfilename to ".$remote_pluginsDirPath.$pluginName."");
				if(!rmdir($updateDirPath."unpacked")) echo "Error removing $updateDirPath/unpacked";
				if (file_exists($remote_pluginsDirPath.$pluginName.JRDS."plugin_install.php") )
					{
					require_once ($remote_pluginsDirPath.$pluginName.JRDS."plugin_install.php");
					}
				touch ($remote_pluginsDirPath.$pluginName.JRDS."index.html");

				if ($plugin_class->data['type'] == "mambot" || $plugin_class->data['type'] == "module")
					{
					if (_JOMRES_DETECTED_CMS == "joomla16" || _JOMRES_DETECTED_CMS == "joomla17" || _JOMRES_DETECTED_CMS == "joomla25" || _JOMRES_DETECTED_CMS == "joomla30")
						{
						if (!$autoupgrade)
							{
							$plugin_installed_successfully = true;
							$discovery_required = true;
							}
						else
							$this->retVals = array("success"=>true,"discovery_required"=>true);
						}
					else
						{
						if (!$autoupgrade) 
							{
							$plugin_installed_successfully = true;
							if (!isset($discovery_required))
								$discovery_required = false;
							}
						else
							$this->retVals = array("success"=>true,"discovery_required"=>false);
						}
					}
				else
					{ 
					if (!$autoupgrade) 
						{
						$plugin_installed_successfully = true;
						if (!isset($discovery_required))
							$discovery_required = false;
						}
					else
						$this->retVals = array("success"=>true,"discovery_required"=>false);
					}
				}
			else
				$error_messsage["ERROR"]="There was an error while unpacking and moving the plugin";
			}
		else
			$error_messsage["ERROR"]="Error ".$updateDirPath."unpacked does not exist";
		
		if (!$autoupgrade) 
			{
			if ($plugin_installed_successfully)
				{
				$success = array();
				if ($discovery_required)
					{
					$output['NEXT_STEP']=get_showtime("live_site")."/".JOMRES_ADMINISTRATORDIRECTORY."/index.php?option=com_installer&view=discover";
					$success[] = array("MESSAGE"=>"Successfully installed the ".$pluginName." plugin. The next button will take you to the Extension Discovery page where you can finish the plugin's installation.");
					}
				else
					{
					$output['NEXT_STEP']=JOMRES_SITEPAGE_URL_ADMIN."&task=showplugins#".$pluginName;
					$success[] = array("MESSAGE"=>"Successfully installed the ".$pluginName." plugin. The next page will take you back to the Jomres plugin manager.");
					}
				}
			
			jr_import('minicomponent_registry');
			$registry = new minicomponent_registry(false);
			$registry->regenerate_registry();
			emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS);
			
			$pageoutput[]=$output;
			$error_messages[]=$error_messsage;
			

			$tmpl = new patTemplate();
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'error_messages', $error_messages);
			$tmpl->addRows( 'auto_installation_results', $auto_installation_results);
			$tmpl->addRows( 'progress_messages', $progress_messages);
			$tmpl->addRows( 'exclusions', $exclusions);
			$tmpl->addRows( 'success', $success);
			
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'plugin_installation_result.html' );
			$tmpl->displayParsedTemplate();
			}
		else echo "1";
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
?>