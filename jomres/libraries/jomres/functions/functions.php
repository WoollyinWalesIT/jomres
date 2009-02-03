<?php
/**
#
 * Ancillary functions that don't belong in a mini-component
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

// This function is used by jomresGetParam and is called after a parameter is called (typically an input string) has been sanitised. It allows us to reconvert some code, such as &lt;br/&gt; back to <br/>
// The string will already have been cleaned by filter var sanitize string.
function jomres_reconvertString($clean)
	{
	$clean = str_replace("&lt;br/&gt;", "<br>", $clean);
	$clean = str_replace("&#60;p&#62;", "<p>", $clean);
	$clean = str_replace("&#60;/p&#62;", "</p>", $clean);
	return $clean;
	}



function init_javascript($mainframe,$jrConfig,$thisJRUser,$version,$jomresConfig_live_site,$jomresConfig_lang)
	{
	if (!defined("JOMRES_JSCALLED") )
		{
		define ('JOMRES_JSCALLED',1);
		}
	else
		return;

	$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', 0 );
	$popup				= (int)jomresGetParam( $_REQUEST, 'popup', 0 );


	// Include all the various css & javascript files we need
	if (!$no_html)
		{
		if (defined('_JOMRES_NEWJOOMLA') )
			{
			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/includes/js/overlib_mini.js"></script>');
			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/includes/js/overlib_hideform_mini.js"></script>');
			}
		else
			mosCommonHTML::loadOverlib();

		if ($jrConfig['autoDetectJSCalendarLang'] == "1")
			{
			$calfileSought="calendar-".$jomresConfig_lang.".js";
			if (file_exists(JOMRESPATH_BASE.JRDS.'javascript'.JRDS.'cal'.JRDS.'lang'.JRDS.$calfileSought))
				$jrConfig['jscalendarLangfile']=$calfileSought;
			}

		$option = $_REQUEST['option'];
		if ((strstr( $version, "Mambo" ) && $popup == 1) || $option != "com_jomres")
			{
			// The javascript calendar has been removed from frontend activation as it's confusing for many users. To re-enable it, uncomment the following code and see the generateDateInput functions in dobookings.class.php, and functions.php, and several lines in jomres.php
			//echo '<link rel="stylesheet" type="text/css" href="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/css/'.$mrConfig['jscalendarCSSfile'].'" title="win2k-cold-1" />';
			echo '<link rel="stylesheet" type="text/css" href="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/css/'.$jrConfig['jscalendarCSSfile'].'" title="win2k-cold-1" />';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/calendar.js"></script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/calendar-setup.js"></script>';
			//echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/lang/'.$mrConfig['jscalendarLangfile'].'"></script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/lang/'.$jrConfig['jscalendarLangfile'].'"></script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.js"></script>';
			echo '<script type="text/javascript">jQuery.noConflict();</script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jomres.js"></script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/interface.js"></script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.cookee.js"></script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.blockUI.js"></script>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/heartbeat.js"></script>';
			if ($jrConfig['editinplace']==1 && $thisJRUser->userIsManager)
				echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.jeditable.pack.js"></script>';
			if ($thisJRUser->userIsManager)
				{
				echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/MiniColorPicker.js"></script>';
				}
			}
		else
			{
			if (!defined("JOMRES_CALENDARJSCALLED") )
				{
				define ('JOMRES_CALENDARJSCALLED',1);
				// The javascript calendar has been removed from frontend activation as it's confusing for many users. To re-enable it, uncomment the following code and see the generateDateInput functions in dobookings.class.php, and functions.php, and several lines in jomres.php
				//$mainframe->addCustomHeadTag('<link rel="stylesheet" type="text/css" href="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/css/'.$mrConfig['jscalendarCSSfile'].'" title="win2k-cold-1" />');
				$mainframe->addCustomHeadTag('<link rel="stylesheet" type="text/css" href="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/css/'.$jrConfig['jscalendarCSSfile'].'" title="win2k-cold-1" />');
				$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/calendar.js"></script>');
				$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/calendar-setup.js"></script>');
				//$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/lang/'.$mrConfig['jscalendarLangfile'].'"></script>');
				$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/cal/lang/'.$jrConfig['jscalendarLangfile'].'"></script>');
				}

			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.js"></script>');
			$mainframe->addCustomHeadTag('<script type="text/javascript">jQuery.noConflict();</script>');
			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jomres.js"></script>');
			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/interface.js"></script>');
			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.cookee.js"></script>');
			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.blockUI.js"></script>');
			$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/heartbeat.js"></script>');
			if ($jrConfig['editinplace']==1 && $thisJRUser->userIsManager)
				$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/jquery.jeditable.pack.js"></script>');
			if ($thisJRUser->userIsManager)
				{
				$mainframe->addCustomHeadTag('<script type="text/javascript" src="'.$jomresConfig_live_site.'/components/com_jomres/javascript/MiniColorPicker.js"></script>');
				}
			}
		}


	}

function getThisMonthName($monthNumber,$editable=true)
	{
	$monthNumber=$monthNumber-1;
	$mName=constant('_JRPORTAL_MONTHS_LONG_'.$monthNumber);
	$thisMonthName=jr_gettext('_JOMRES_CUSTOMTEXT_'.$monthNumber,$mName,$editable);
	return $thisMonthName;
	}

function install_external_plugin($plugin_name,$plugin_type,$mambot_type='',$params='',$remote_plugin_component_folder="c",$remote_plugin_administrator_folder="a",$remote_plugin_module_folder="m",$remote_plugin_mambot_folder="b")
	{

	switch ($plugin_type)
		{
		case 'component':
			$component_full_name="com_".$plugin_name;

			$component_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS.$remote_plugin_component_folder.JRDS;
			$administrator_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS.$remote_plugin_administrator_folder.JRDS;

			$component_target=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS.$component_full_name;
			$administrator_target=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ADMINISTRATORDIRECTORY.JRDS."components".JRDS.$component_full_name;

			if (!test_and_make_directory($component_target))
				{
				error_logging( "Error, unable to write to ".$component_target." Please ensure that the parent path is writable by the web server ");
				return false;
				}

			if (!test_and_make_directory($administrator_target))
				{
				error_logging( "Error, unable to write to ".$administrator_target." Please ensure that the parent path is writable by the web server ");
				return false;
				}

			$query= "SELECT id FROM #__components where name = '".$plugin_name."'";
			$result=doSelectSql($query);
			if (count($result)>0)
				{
				$query="DELETE FROM #__components WHERE `name` = '".$plugin_name."'";
				$result=doInsertSql($query,"");
				}

			$extraClause="";
			$extraClausePara="";
			if (_JOMRES_NEWJOOMLA == 1)
				{
				$extraClause=",`enabled`";
				$extraClausePara=",'1'";
				}
			$query="INSERT INTO #__components
			(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`".$extraClause.")
			VALUES
			('".$plugin_name."','','0','0','','".$plugin_name."','".$component_full_name."','0','../components/com_jomres/images/jricon.png','0',' '".$extraClausePara.")";

			$result=doInsertSql($query,"");

			if ($result)
				{
				//echo "Moving contents of ".$component_source." to ".$component_target."<br/>";
				$component_move_result=dirmv($component_source, $component_target, true, $funcloc = "/");
				//echo "Moving contents of ".$administrator_source." to ".$administrator_target."<br/>";
				$admin_move_result=dirmv($administrator_source, $administrator_target, true, $funcloc = "/");
				if ($component_move_result['success'] && $admin_move_result['success'] )
					return true;
				else
					return false;
				}
			else
				return false;
			break;
		case 'module':
			$module_full_name="mod_".$plugin_name;

			$module_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS.$remote_plugin_module_folder.JRDS;
			if (_JOMRES_NEWJOOMLA == 1)
				{
				$module_xml_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS."xml".JRDS."1.5";
				$module_target=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS.$module_full_name;
				}
			else
				{
				$module_xml_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS."xml".JRDS."1.0";
				$module_target=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS;
				}
			if (!test_and_make_directory($module_target))
				{
				error_logging( "Error, unable to write to ".$module_target." Please ensure that the parent path is writable by the web server ");
				return false;
				}
			$query= "SELECT id FROM #__modules where title = '".$plugin_name."'";
			$result=doSelectSql($query);
			if (count($result)>0)
				{
				$query="DELETE FROM #__modules WHERE `title` = '".$plugin_name."'";
				$result=doInsertSql($query,"");
				}
			$query="INSERT INTO #__modules
			(`title`,`content`,`ordering`,`position`,`checked_out`,`checked_out_time`,`published`,`module`,`numnews`,`access`,`showtitle`,`params`,`iscore`,`client_id`)
			VALUES
			('".$plugin_name."','','0','left','0','0000-00-00 00:00:00','0','mod_".$plugin_name."','0','0','1','".$params."','0','0')";
			$result=doInsertSql($query,"");
			if ($result)
				{
				//echo "Moving contents of ".$component_source." to ".$component_target."<br/>";
				$module_xml_move_result=dirmv($module_xml_source, $module_target, true, $funcloc = "/");
				$module_move_result=dirmv($module_source, $module_target, true, $funcloc = "/");
				if ($module_move_result['success'] && $module_xml_move_result['success'])
					return true;
				else
					return false;
				}
			else
				return false;
			break;
		case 'mambot':
			//$mambot_full_name=$plugin_name;
			$table="#__mambots";
			if (_JOMRES_NEWJOOMLA == 1)
				$table="#__plugins";

			$mambot_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS.$remote_plugin_mambot_folder.JRDS;
			if (_JOMRES_NEWJOOMLA == 1)
				{
				$mambot_xml_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS."xml".JRDS."1.5";

				$mambot_target=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."plugins".JRDS.$mambot_type.JRDS;
				}
			else
				{
				$mambot_xml_source=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."remote_plugins".JRDS.$plugin_name.JRDS."xml".JRDS."1.0";
				$mambot_target=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."mambots".JRDS.$mambot_type.JRDS;

				}
			if (!test_and_make_directory($mambot_target))
				{
				error_logging( "Error, unable to write to ".$mambot_target." Please ensure that the parent path is writable by the web server ");
				return false;
				}
			$query= "SELECT id FROM ".$table." where name = '".$plugin_name."'";
			$result=doSelectSql($query);
			if (count($result)>0)
				{
				$query="DELETE FROM ".$table." WHERE `name` = '".$plugin_name."'";
				$result=doInsertSql($query,"");
				}
			$query="INSERT INTO ".$table."
			(`name`,`element`,`folder`,`access`,`ordering`,`published`,`iscore`,`client_id`,`checked_out`,`checked_out_time`,`params`)
			VALUES
			('".$plugin_name."','".$plugin_name."','".$mambot_type."','0','0','1','0','0','0','0000-00-00 00:00:00','".$params."')";
			$result=doInsertSql($query,"");
			if ($result)
				{
				//echo "Moving contents of ".$component_source." to ".$component_target."<br/>";
				$mambot_xml_move_result=dirmv($mambot_xml_source, $mambot_target, true, $funcloc = "/");
				$mambot_move_result=dirmv($mambot_source, $mambot_target, true, "/");
				if ($mambot_xml_move_result['success'] && $mambot_move_result['success'])
					return true;
				else
					return false;
				}
			else
				return false;
			break;
		}



	}

function test_and_make_directory($dir)
	{
	if (!is_dir($dir) )
		{
		if (!@mkdir($dir))
			{
			echo "Error, unable to make folder ".$dir." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";
			return false;
			}
		else
			return true;
		}
	else
		{
		if (!is_writable($dir) )
			return false;
		else
			return true;
		}
	}

if (!function_exists('file_get_contents'))
	{
	function file_get_contents($filename, $incpath = false, $resource_context)
		{
		 if (false === $fh = fopen($filename, 'rb', $incpath))
			{
			trigger_error('file_get_contents() failed to open stream: No such file or directory', E_USER_WARNING);
			return false;
			}
	 		clearstatcache();
			if ($fsize == @filesize($filename))
				{
				$data = fread($fh, $fsize);
				}
			else
				{
				$data = '';
				while (!feof($fh))
					{
					$data .= fread($fh, 8192);
					}
				}
			fclose($fh);
			return $data;
		}
	}

function emptyDir($dir,$root=null)
	{
	if ($root==null)
		$root=$dir;
	if(!$dh = @opendir($dir)) return false;
	while (false !== ($obj = readdir($dh)))
		{
		if($obj=='.' || $obj=='..') continue;
		if (!@unlink($dir.'/'.$obj)) emptyDir($dir.'/'.$obj, $root);
		}
	closedir($dh);
	if ($dir != $root)
		@rmdir($dir);
	}
/*
Does what it says on the tin
*/
function dropPlugin($pluginName)
	{
	$pluginPath=JOMRESPATH_BASE.JRDS."remote_plugins".JRDS.$pluginName;
	if (file_exists($pluginPath.JRDS."plugin_uninstall.php") )
		{
		define ("JOMRES_INSTALLER",1);
		include($pluginPath.JRDS."plugin_uninstall.php");
		}
	emptyDir($pluginPath);
	if (rmdir($pluginPath))
		return true;
	return false;
	}

/*
Does what it says on the tin
*/
function queryUpdateServer($script,$queryString)
	{
	$updateServer="http://updates.jomres.net";
	if (strlen($script)==0)
		$script="index.php";
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,$updateServer."/".$script."?".$queryString);
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$response = trim(curl_exec($curl_handle));
	curl_close($curl_handle);
	return $response;
	}

// http://www.php.net/manual/en/function.rename.php#61152
// Moves the contents of source dir to destination dir
	function dirmv($source, $dest, $overwrite = true, $funcloc = NULL)
		{
		global $movedFileLog;
		$debugging=false;
		$movedFileLog=array();
		//$success=true;
		/*
		if(is_null($funcloc))
			{
			$dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
			$funcloc = '/';
			}
		*/
		if(!is_dir( $dest . $funcloc))
			mkdir( $dest . $funcloc); // make subdirectory before subdirectory is copied
		//echo "Opening " . $source . $funcloc."<br/>";
		if($handle = opendir( $source . $funcloc))
			{ // if the folder exploration is sucsessful, continue
			//echo "Opened ". $source . $funcloc."<br/>";
			while(false !== ($file = readdir($handle)))
				{ // as long as storing the next file to $file is successful, continue
				if($file != '.' && $file != '..')
					{
					$path  = $source . $funcloc . $file;
					$path2 = $dest . $funcloc . $file;

					if(is_file( $path))
						{
						if(!is_file( $path2))
							{
							if(!@rename( $path,  $path2))
								{
								echo 'File ('.$path.') could not be moved, likely a permissions problem.';
								return array("success"=>false,"errormsg"=>'File ('.$path.') could not be moved, likely a permissions problem.');
								}
							}
						else
							if($overwrite)
								{
								if(!@unlink( $path2))
									{
									echo 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>';
									return array("success"=>false,"errormsg"=>'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>');
									}
								else
									{
									if(!@rename( $path,  $path2))
										{
										echo '<font color="red">File ('.$path.') could not be moved while overwritting, likely a permissions problem.</font><br/>';
										return array("success"=>false,"errormsg"=>'File ('.$path.') could not be moved while overwritting, likely a permissions problem.<br/>');
										}
									else
										$movedFileLog[]= "Moved ".$path."<br/> to ".$path2."<br/>";
									}
								}
							else
								{
								echo "Not allowed to overwrite" .$path2."<br/>"; // Not technically an error message, just advisory
								}
						}
					elseif(is_dir( $path))
						{
						dirmv($source, $dest, $overwrite, $funcloc . $file . JRDS); //recurse!
						rmdir( $path);
						}
					}
				}
			closedir($handle);
			}
		if ($debugging)
			{
			foreach ($movedFileLog as $m)
				echo $m."<br/>";
			}
		return array("success"=>true,"errormsg"=>'');
		//echo "Finished upgrade <br/>";
		} // end of dirmv()

/*
Allows us to work independantly of Joomla or Mambo's emailers
*/

function jomresMailer( $from, $jomresConfig_sitename, $to, $subject, $body,$mode=0)
	{
	global $jrConfig,$jomresConfig_smtpauth,$jomresConfig_smtphost,$jomresConfig_smtppass,$jomresConfig_smtpuser,$jomresConfig_mailer,$jomresConfig_debug;
	$emails=array();
	if (isset($jrConfig['useJomresEmailCheck']) && $jrConfig['useJomresEmailCheck']=="1")
		{
		if (is_array($to) )
			{
			foreach ($to as $t)
				{
				if (strlen($t)>0 && jomres_check_email_address($to))
					$emails[]=$to;
				}
			}
		else
			{
			if (strpos($to,",") ) // we've been passed a comma seperated list of emails, explode them then parse them
				{
				$addys=explode(",",$to);
				foreach ($addys as $t)
					{
					if (strlen($t)>0 && jomres_check_email_address($to))
						$emails[]=$t;
					}
				}
			else
				{
				if (strlen($to)>0 && jomres_check_email_address($to))
					$emails[]=$to;
				}
			}
		}
	else
		{
		if (strpos($to,",") ) // we've been passed a comma seperated list of emails, explode them then parse them
			{
			$addys=explode(",",$to);
			foreach ($addys as $t)
				{
				if (strlen($t)>0)
					$emails[]=$t;
				}
			}
		else
			{
			if (strlen($to)>0)
				$emails[]=$to;
			}
		}

	$mail = new jomresPHPMailer();
	if ($jomresConfig_debug =="1")
		$mail->SMTPDebug=true;
	if ($mode==1) $mail->IsHTML(true);

	if ($jomresConfig_smtpauth =="1")
		{
		$mail->SMTPAuth="1";
		}

	$mail->Username		=$jomresConfig_smtpuser;
	$mail->Password		=$jomresConfig_smtppass;
	$mail->Host			= $jomresConfig_smtphost;
	$mail->Mailer		= $jomresConfig_mailer;

	$mail->From			= $from;
	$mail->FromName		= $jomresConfig_sitename;

	foreach ($emails as $to)
		{
		if (strlen($to)>0)
			$mail->AddAddress($to,$to);
		}

	$mail->Subject		= $subject;
	$mail->Body			= $body;

	$mail->SetLanguage("en",JOMRESPATH_BASE.JRDS."libraries".JRDS."PHPMailer_v2.0.0".JRDS."language".JRDS);

	if(!$mail->Send())
		{
		error_logging("Error sending mail. Error caught by mailer was : ".$mail->ErrorInfo);
		return false;
		}
	return true;
	}

/**
#
 *Tests to see if an email address is valid. Includes tests of the A and MX records.
#
*/
function jomres_check_email_address($email)
	{
	//global $jrConfig;

	// Are we on windows? If so we can try to give our win user their own checkndsrr function. The exec might cause problems depending on how wamp/xamp/jsas is set up, but there's no harm in trying
	// http://uk2.php.net/manual/en/function.checkdnsrr.php#75158
	if(!function_exists('checkdnsrr'))
		{
		function checkdnsrr($hostName, $recType = '')
			{
			if(!empty($hostName))
				{
				if( $recType == '' ) $recType = "MX";
				@exec("nslookup -type=$recType $hostName", $result);
				// check each line to find the one that starts with the host name. If it exists then the function succeeded.
				foreach ($result as $line)
					{
					if(eregi("^$hostName",$line))
						{
						return true;
						}
					}
				// otherwise there was no mail handler for the domain
				return false;
				}
			return false;
			}
		}


	// First, we check that there's one @ symbol, and that the lengths are right
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email))
		{
		// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
		return false;
		}

	// Split it into sections to make life easier
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++)
		{
		if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
			{
			return false;
			}
		}

	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1]))
		{ // Check if domain is IP. If not, it should be valid domain name
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2)
			{
			return false; // Not enough parts to domain
			}
		for ($i = 0; $i < sizeof($domain_array); $i++)
			{
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i]))
				{
				return false;
				}
			}
		}
		//getmxrr($domain,$mxrecords)
	// DNS check of MX of the specified domainname
	if( !checkdnsrr($email_array[1], "MX") )
		{
		if( !checkdnsrr($email_array[1], "A"))
			{
			return false;
			}
		}
	return true;
	}

/**
#
 * Returns the guest details for a booking
#
*/
function addBookingNote($contract_uid,$property_uid,$message)
	{
	if ($contract_uid > 0 && $property_uid > 0 && strlen($message)>0)
		{
		$dt=date("Y-m-d H-i-s");
		$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".RemoveXSS($message)."','$dt','".(int)$property_uid."')";
		$result=doInsertSql($query,"");
		return $result;
		}
	else
		return false;
	}
/**
#
 * Returns the guest details for a booking
#
*/
function getGuestDetailsForContract($contract_uid)
	{
	$query="SELECT rate_rules FROM #__jomres_contracts WHERE contract_uid = ".(int)$contract_uid." LIMIT 1";
	$bookingData  = doSelectSql($query);

	if (count($bookingData)>0)
		{
		foreach ($bookingData as $booking)
			{
			$guesttypeOutput=array();
			$varianceArray=explode(",",$booking->rate_rules);
			foreach ($varianceArray as $v)
				{
				$vDeets=explode("_",$v);
				if ($vDeets[0]=="guesttype")
					{
					$vu=$vDeets[1];
					$vq=$vDeets[2];
					$vv=$vDeets[3];
					$query="SELECT `type` FROM #__jomres_customertypes where id = '".(int)$vu."' LIMIT 1 ";
					$vtitle=doSelectSql($query,1);
					$guesttypeOutput[]=array('title'=>$vtitle,'qty'=>$vq,'value'=>$vv);
					}
				}
			}
		if (count($guesttypeOutput)>0)
			sort($guesttypeOutput);
		return $guesttypeOutput;
		}
	else
		return array();
	}



/**
#
 * Cconstruct data from session variables
#
*/

function getCurrentBookingData($jomressession="")
	{
	// Whilst this is a new function to construct data from session variables, we'll need to do a bunch of jiggery pokery with the nice simple data pulled from the sess vars so that the data is in a format that's understood by other functions that previously received data that had been pulled from the database
	global $tmpBookingHandler;
	$obj=new stdClass;
	$tempBookingDataList=array();
	$userDeets=$tmpBookingHandler->getGuestData();
	foreach ($userDeets as $key=>$val)
		{
		$guestDetails->$key=$val;
		}
	$bobj=new stdClass;
	$bookingDeets=$tmpBookingHandler->getBookingData();
	foreach ($bookingDeets as $key=>$val)
		{
		$bobj->$key=$val;
		}
	$tempBookingDataList[0]=$bobj;
	$obj->guestDetails=$guestDetails;
	$obj->tempBookingDataList=$tempBookingDataList;
	$arr=array();
	$ob=$tempBookingDataList;
	if (count($ob)>0)
		{
		foreach ($ob as $k=>$v)
			{
			$arr[$k]=$v;
			}
		}
	$obj->tempBookingDataArray=$arr;
	return $obj;
	}

/**
#
 * Returns the guest details from the tmpguests session data
#
*/
function getbookingguestdata()
	{
	global $tmpBookingHandler;
	$userDeets=$tmpBookingHandler->getGuestData();
	return $userDeets;
	}

/**
#
 * Returns the booking details from the tmpbooking session data
#
*/
function gettempBookingdata()
	{
	global $tmpBookingHandler;
	$bookingDeets=$tmpBookingHandler->getBookingData();
	return $bookingDeets;
	}

/**
#
 * Adds a property uid to the current managers list of properties
#
*/
function addPropertyUidToUsersProperties($property_uid)
	{
	global $thisJRUser;
	if (!in_array($property_uid,$thisJRUser->authorisedProperties) )
		{
		$query="INSERT INTO #__jomres_managers_propertys_xref (`manager_id`,`property_uid`) VALUES ('".(int)$thisJRUser->userid."','".(int)$property_uid."')";
		doInsertSql($query,'');
		}
	}

/**
#
 * Adds a property uid to the manager's current list of properties
#
*/
function addPropertyUidToManagersProperties($manager_id,$property_uid)
	{
	$managersPropertys=array();
	$query="SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE manager_id = '".(int)$manager_id."'";
	$result=doSelectSql($query);
	foreach ($result as $r)
		{
		$managersPropertys[]=$r->property_uid;
		}
	if ($property_uid>0)
		{
		$managersPropertys[]=$property_uid;
		updateManagerIdToPropertyXrefTable($manager_id,$managersPropertys );
		}
	}
/**
#
 * Inserts the property manager/property uid into the xref table. Receives a property uid array which is a list of the users current properties and updates the xref table to that effect
 * If the $property_uidArray is empty then the manager will loose all access to properties, so ensure that $property_uidArray contains all of the current properties that the manager has rights to before passing data to this function
#
 */
function updateManagerIdToPropertyXrefTable($manager_id,$property_uidArray,$setCurrentPropertyToFirst=true)
	{
	$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '".(int)$manager_id."'";
	$managersToPropertyList = doSelectSql($query);
	$currentProperties=array();
	if (count($managersToPropertyList) > 0)
		{
		foreach ($managersToPropertyList as $x)
			{
			$currentProperties[]=$x->property_uid;
			}
		}
	$propertiesToBeRemovedArray=array();
	foreach ($currentProperties as $p)
		{
		if (!in_array($p,$property_uidArray) )
			$propertiesToBeRemovedArray[]=$p;
		}
	$propertiesToBeAddedArray=array();
	foreach ( $property_uidArray as $p)
		{
		if (!in_array($p,$currentProperties) )
			$propertiesToBeAddedArray[]=$p;
		}

	if (count($propertiesToBeRemovedArray) >0)
		{
		foreach ($propertiesToBeRemovedArray as $p)
			{
			$query="DELETE FROM #__jomres_managers_propertys_xref WHERE manager_id = '".(int)$manager_id."' AND property_uid = '".(int)$p."' ";
			doInsertSql($query,'');
			}
		}
	if (count($propertiesToBeAddedArray) >0)
		{
		foreach ($propertiesToBeAddedArray as $p)
			{
			$query="INSERT INTO #__jomres_managers_propertys_xref (`manager_id`,`property_uid`) VALUES ('".(int)$manager_id."','".(int)$p."')";
			doInsertSql($query,'');
			}
		}
	if ($setCurrentPropertyToFirst)
		{
		$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '".(int)$manager_id."'";
		$managersToPropertyList = doSelectSql($query);
		$currentProperties=array();
		foreach ($managersToPropertyList as $x)
			{
			$currentProperties[]=$x->property_uid;
			}
		$query="UPDATE #__jomres_managers SET `currentproperty`='$currentProperties[0]' WHERE userid = '".(int)$manager_id."'";
		doInsertSql($query,'');
		}
	}

/**
#
 * Handles errors generated by the system, redirects the user to an error page
#
 */
function errorHandler ($errno, $errstr, $errfile, $errline, $errcontext)
	{
	switch ($errno)
		{
		case E_USER_WARNING:
		case E_USER_NOTICE:
		case E_WARNING:
		case E_NOTICE:
		case E_CORE_WARNING:
		case E_COMPILE_WARNING:
			break;
		case E_USER_ERROR:
			recordError($errno, $errstr, $errfile, $errline, $errcontext);
		case E_ERROR:
		case E_PARSE:
		case E_CORE_ERROR:
		case E_COMPILE_ERROR:
			recordError($errno, $errstr, $errfile, $errline, $errcontext);
		default:
			break;
		} // switch
	} // errorHandler

function recordError($errno, $errstr, $errfile, $errline, $errcontext)
	{
	global $my;
	$errorstring = "Fatal Error: $errstr (# $errno).";
	$errorstring .= "User id '$my->id - $my->username'&nbsp;&nbsp;.";
	$errorstring .= "Error in line $errline of file '$errfile'.";
	$errorstring .= "Script: '{$_SERVER['PHP_SELF']}'";
	if (isset($errcontext['this']))
		{
		if (is_object($errcontext['this']))
			{
			$classname = get_class($errcontext['this']);
			$parentclass = get_parent_class($errcontext['this']);
			$errorstring .= "Object/Class: '$classname', Parent Class: '$parentclass'.";
			}
		}
	error_logging($errorstring);
	if (!@session_start())
		{
		@ini_set('session.save_handler', 'files');
		session_start();
		}
	session_unset();
	session_destroy();
	jomresRedirect("index.php?option=com_jomres&task=error", "FATAL ERROR" );
	}

/**
#
 * Creates the error log settings, calls writexml
#
 */
function error_logging($message)
	{
	global $jrConfig;
	$logfile=JOMRES_SYSTEMLOG_PATH.'jomres_error_log.xml';

	$log = "<![CDATA[".$message . "]]>";
	if ($jrConfig['emailErrors']=='1')
		mailJomresdotnet($message);
	writexml($logfile,"errorlog","errorlogentry",$log);
	}

/**
#
 * Creates the request log settings, calls writexml
#
 */
function request_log($loggingRequest)
	{
	if (LOGGINGREQUEST)
		{
		$logfile=JOMRES_SYSTEMLOG_PATH.'jomres_request_log.xml';
		$log="";
		if (count($_REQUEST)>0)
			{
			$log .="<![CDATA[";
			foreach ($_REQUEST as $key=>$value)
				{
				$log .=  $key . " " . $value." --- \n";
				}
			$log .="]]>\n";
			}
		// Write to log
		writexml($logfile,"requestlog","requestlogentry",$log);
		}
	}

/**
#
 * Creates the system log settings, calls writexml
#
 */
function system_log($message)
	{
	global $loggingEnabled,$loggingSystem;
	if ($loggingEnabled && $loggingSystem)
		{
		$logfile=JOMRES_SYSTEMLOG_PATH.'jomres_system_log.xml';
		$log = "<![CDATA[\n".$message . "]]>";
		writexml($logfile,"systemlog","systemlogentry",$log);
		}
	}

/**
#
 * Creates the jomres portal log settings, calls writexml
#
 */

function jrportalquery_log($message)
	{
	if (LOGGINGPORTAL)
		{
		$logfile=JOMRES_SYSTEMLOG_PATH.'jrportalquery_log.xml';
		$log = "<![CDATA[".$message . "]]>";
		writexml($logfile,"jrportalquerylog","jrportalquerylogentry",$log);
		}
	}

/**
#
 * Creates the gateway log settings, calls writexml
#
 */
function gateway_log($message)
	{
	if (LOGGINGGATEWAY)
		{
		$logfile=JOMRES_SYSTEMLOG_PATH.'jomres_gateway_log.xml';
		$log = "<![CDATA[".$message . "]]>";
		writexml($logfile,"gatewaylog","gatewaylogentry",$log);
		}
	}

/**
#
 * Writes the xml file. Reads the data in, resorts it so that the most recent entry is at the top
#
 */
function writexml($logfile,$rootelement,$entry,$newlines)
	{
	global $jomressession;

	$task 				= jomresGetParam( $_REQUEST, 'task', "" );

	if ($_REQUEST['option'] == "com_jomres")
		{
		$dt = date("Y-m-d H:i:s (T)");
		$rootElementStart="<".$rootelement.">\n";
		$entryStart="\t<".$entry.">\n";
		$datetime = "\t\t<datetime>" . $dt . "</datetime>\n";
		$session = "\t\t<jomressession>" . $jomressession . "</jomressession>\n";
		$taskEntry = "\t\t<task>" . $task . "</task>\n";
		$request = "\t\t<requesturi><![CDATA[" . $task . "]]></requesturi>\n";
		$message="\t\t\t<message>".$newlines."</message>\n";
		$entryEnd="\t</".$entry.">\n";
		$rootElementEnd="</".$rootelement.">\n";

		if (file_exists($logfile) )
			$fp=fopen($logfile,'r+');
		else
			$fp=fopen($logfile,'w');
		$lines = file($logfile);
		if (is_array($lines) && count($lines)>0 )
			{
			$l = array_shift($lines); // Remove the first element
			$l = array_pop($lines); // Remove the last element
			$oldlines = implode("",$lines);
			}
		else
			$oldlines="";
		//if (flock($fp, LOCK_EX)) { // do an exclusive lock
			fwrite($fp, $rootElementStart);
			fwrite($fp, $entryStart);
			fwrite($fp, $datetime);
			fwrite($fp, $session);
			fwrite($fp, $taskEntry);
			fwrite($fp, $request);
			fwrite($fp, $message);
			fwrite($fp, $entryEnd);
			fwrite($fp, $oldlines);
			fwrite($fp, $rootElementEnd);
			flock($fp, LOCK_UN);
		//	}
		fclose($fp);  // close file
		}
	}
/**
#
 * Redirects to $url
#
 */
function jomresRedirect( $url, $msg='' )
	{
	global $mainframe,$jrConfig;

	$url=str_replace("&amp;","&",$url);
	if ($jrConfig['errorChecking']!="1")
		{
		if (!defined('_JOMRES_NEWJOOMLA') )
			{
			echo "<script>document.location.href='$url';</script>\n";
			exit();
			}
		else
			{
			$mainframe->redirect( $url, JText::_( $msg ) );
			}
		}
	}


/**
#
 * Sanitises the overlib output
#
 */

function sanitiseOverlibOutput($data)
	{
	$data=str_replace("&#39;","'",$data);
	$data=str_replace("'","\\&#39;",$data);
	return $data;
	}


//------------------------------------
//-C O N F I G	S E T T I N G S	 ----
//------------------------------------

/**
#
 * Constructs the standard configuration settings for display in the config panel, then triggers events to show same configuration panels.
#
*/
function hotelSettings()
	{

	global $mrConfig,$configurationPanel;
	global $MiniComponents,$Itemid;
	global $jomresConfig_live_site;

	//global $_CONFIG;
	$property_uid=(int)getDefaultProperty();
	$mrConfig=getPropertySpecificSettings($property_uid);
	$option="com_jomres";

	$componentArgs=array();
	$componentArgs['mrConfig']=$mrConfig;
	$MiniComponents->triggerEvent('0500',$componentArgs); // Generate configuration options. Optional
	$gatewayNames=listGateways();

	// the default view
	$lists = array();

	// make a standard yes/no list
	$yesno = array();
	$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
	$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE) );

	$smokingOptions=array();
	$smokingOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
	$smokingOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE) );
	$smokingOptions[]=jomresHTML::makeOption( '2', jr_gettext('_JOMRES_FRONT_ROOMSMOKING_EITHER',_JOMRES_FRONT_ROOMSMOKING_EITHER,FALSE) );

	if ($mrConfig['newTariffModels'] != "1" && $mrConfig['newTariffModels'] != "2")	// backward compatablity for pre-2.5 users who haven't yet visited General Configuration and clicked Save
		$mrConfig['newTariffModels'] = "1";
	$tariffModels=array();
	$tariffModels[] = jomresHTML::makeOption(1, _JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF);
	$tariffModels[] = jomresHTML::makeOption(2, _JOMRES_COM_A_TARIFFS_MODEL_AVERAGES);
	$tariffModelsDropdown= jomresHTML::selectList($tariffModels, 'cfg_newTariffModels', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['newTariffModels']);

	$weekDays=array();
	$weekDays[] = jomresHTML::makeOption(1, _JOMRES_COM_MR_WEEKDAYS_MONDAY);
	$weekDays[] = jomresHTML::makeOption(2, _JOMRES_COM_MR_WEEKDAYS_TUESDAY);
	$weekDays[] = jomresHTML::makeOption(3, _JOMRES_COM_MR_WEEKDAYS_WEDNESDAY);
	$weekDays[] = jomresHTML::makeOption(4, _JOMRES_COM_MR_WEEKDAYS_THURSDAY);
	$weekDays[] = jomresHTML::makeOption(5, _JOMRES_COM_MR_WEEKDAYS_FRIDAY);
	$weekDays[] = jomresHTML::makeOption(6, _JOMRES_COM_MR_WEEKDAYS_SATURDAY);
	$weekDays[] = jomresHTML::makeOption(0, _JOMRES_COM_MR_WEEKDAYS_SUNDAY);

	$weekendDays=array();
	$weekendDays[] = jomresHTML::makeOption("5", _JOMRES_COM_MR_WEEKDAYS_FRIDAY);
	$weekendDays[] = jomresHTML::makeOption("6", _JOMRES_COM_MR_WEEKDAYS_SATURDAY);
	$weekendDays[] = jomresHTML::makeOption("0", _JOMRES_COM_MR_WEEKDAYS_SUNDAY);
	$weekendDays[] = jomresHTML::makeOption("4,5", _JOMRES_COM_MR_WEEKDAYS_THURSDAY.', '._JOMRES_COM_MR_WEEKDAYS_FRIDAY);
	$weekendDays[] = jomresHTML::makeOption("4,5,6",_JOMRES_COM_MR_WEEKDAYS_THURSDAY.', '._JOMRES_COM_MR_WEEKDAYS_FRIDAY.', '._JOMRES_COM_MR_WEEKDAYS_SATURDAY);
	$weekendDays[] = jomresHTML::makeOption("4,5,6,0",_JOMRES_COM_MR_WEEKDAYS_THURSDAY.', '._JOMRES_COM_MR_WEEKDAYS_FRIDAY.', '._JOMRES_COM_MR_WEEKDAYS_SATURDAY.', '._JOMRES_COM_MR_WEEKDAYS_SUNDAY);
	$weekendDays[] = jomresHTML::makeOption("5,6", _JOMRES_COM_MR_WEEKDAYS_FRIDAY.', '._JOMRES_COM_MR_WEEKDAYS_SATURDAY);
	$weekendDays[] = jomresHTML::makeOption("5,6,0", _JOMRES_COM_MR_WEEKDAYS_FRIDAY.', '._JOMRES_COM_MR_WEEKDAYS_SATURDAY.', '._JOMRES_COM_MR_WEEKDAYS_SUNDAY);
	$weekendDays[] = jomresHTML::makeOption("6,0", _JOMRES_COM_MR_WEEKDAYS_SATURDAY.', '._JOMRES_COM_MR_WEEKDAYS_SUNDAY);

	$jsInputDateFormats=array();
	$jsInputDateFormats[] =	jomresHTML::makeOption("%d/%m/%Y", "01/02/2006 - 1st February 2006");
	$jsInputDateFormats[] =	jomresHTML::makeOption("%Y/%m/%d", "2006/02/01");
	$jsInputDateFormats[] =	jomresHTML::makeOption("%m/%d/%Y", "02/01/2006");
	$jsInputDateFormats[] =	jomresHTML::makeOption("%d-%m-%Y", "01-02-2006");
	$jsInputDateFormats[] =	jomresHTML::makeOption("%Y-%m-%d", "2006-02-01");
	$jsInputDateFormats[] =	jomresHTML::makeOption("%m-%d-%Y", "02-01-2006");
	//$jsInputDateFormats[] =	jomresHTML::makeOption("%d.%m.%Y", "01.02.2006");
	$jsInputFormatDropdownList= jomresHTML::selectList($jsInputDateFormats, 'cfg_cal_input', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['cal_input']);

	//$slideshowNames=listSlideshows();
	//$slideshowDropdownList= jomresHTML::selectList($slideshowNames, 'cfg_slideshow', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['slideshow']);
	$smokingOptionDropdownList= jomresHTML::selectList($smokingOptions, 'cfg_defaultSmokingOption', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['defaultSmokingOption']);
	$weekdayDropdown= jomresHTML::selectList($weekDays, 'cfg_fixedArrivalDay', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['fixedArrivalDay']);
	$weekenddayDropdown= jomresHTML::selectList($weekendDays, 'cfg_weekenddays', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['weekenddays']);

	$depAmounts=array();
	$depAmounts[]= jomresHTML::makeOption( '0', _JOMRES_COM_CHARGING_DEPOSIT );
	$depAmounts[]= jomresHTML::makeOption( '1', _JOMRES_COM_CHARGING_FULLAMT );
	$paymentAmounts= jomresHTML::selectList($depAmounts, 'cfg_depAmount', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['depAmount']);

	if (!isset($mrConfig['tariffmode']))
		$mrConfig['tariffmode']=1;
	$tariffMode=array();
	$tariffMode[]= jomresHTML::makeOption( '0', JOMRES_COM_A_TARIFFMODE_NORMAL );
	$tariffMode[]= jomresHTML::makeOption( '2', JOMRES_COM_A_TARIFFMODE_TARIFFTYPES );
	$tariffMode[]= jomresHTML::makeOption( '1', JOMRES_COM_A_TARIFFMODE_ADVANCED );
	$tariffModeDD= jomresHTML::selectList($tariffMode, 'cfg_tariffmode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['tariffmode']);

	$iconsizes = array();
	$iconsizes[] = jomresHTML::makeOption( 'small', 'small' );
	$iconsizes[] = jomresHTML::makeOption( 'large', 'large' );
	$editIconSize = jomresHTML::selectList( $iconsizes, 'cfg_editiconsize', 'size="1" class="inputbox"', 'value', 'text', $mrConfig['editiconsize']);

	$fixedArrivalDatesRecurring = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_fixedArrivalDatesRecurring', 'size="1" class="inputbox"', $mrConfig['fixedArrivalDatesRecurring'], "%02d" );

	//$lists['tariffmodel']= jomresHTML::selectList( $tariffmodels, 'cfg_tariffmodel', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['tariffmodel'] );

	$lists['showRoomImageInBookingFormOverlib'] = jomresHTML::selectList( $yesno, 'cfg_showRoomImageInBookingFormOverlib', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showRoomImageInBookingFormOverlib'] );
	$lists['singlePersonSuppliment'] = jomresHTML::selectList( $yesno, 'cfg_singlePersonSuppliment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['singlePersonSuppliment'] );
	$lists['perPersonPerNight'] = jomresHTML::selectList( $yesno, 'cfg_perPersonPerNight', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['perPersonPerNight'] );
	$lists['depositIsPercentage'] = jomresHTML::selectList( $yesno, 'cfg_depositIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['depositIsPercentage'] );
	$lists['errorCheckingShowSQL'] = jomresHTML::selectList( $yesno, 'cfg_errorCheckingShowSQL', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['errorCheckingShowSQL'] );
	$lists['errorCheckingShowSQLvardump'] = jomresHTML::selectList( $yesno, 'cfg_errorCheckingShowSQLvardump', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['errorCheckingShowSQLvardump'] );
	$lists['errorChecking'] = jomresHTML::selectList( $yesno, 'cfg_errorChecking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['errorChecking'] );
	$lists['visitorscanbookonline'] = jomresHTML::selectList( $yesno, 'cfg_visitorscanbookonline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['visitorscanbookonline'] );
	$lists['fixedPeriodBookings'] = jomresHTML::selectList( $yesno, 'cfg_fixedPeriodBookings', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['fixedPeriodBookings'] );
	$lists['singleRoomProperty'] = jomresHTML::selectList( $yesno, 'cfg_singleRoomProperty', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['singleRoomProperty'] );
	$lists['fixedArrivalDateYesNo'] = jomresHTML::selectList( $yesno, 'cfg_fixedArrivalDateYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['fixedArrivalDateYesNo'] );
	$lists['showAvailabilityCalendar'] = jomresHTML::selectList( $yesno, 'cfg_showAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showAvailabilityCalendar'] );
	$lists['showAdminTapeview'] = jomresHTML::selectList( $yesno, 'cfg_showAdminTapeview', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showAdminTapeview'] );
	$lists['fixedPeriodBookingsShortYesNo'] = jomresHTML::selectList( $yesno, 'cfg_fixedPeriodBookingsShortYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['fixedPeriodBookingsShortYesNo'] );
	$lists['showExtras'] = jomresHTML::selectList( $yesno, 'cfg_showExtras', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showExtras'] );
	$lists['showSmoking'] = jomresHTML::selectList( $yesno, 'cfg_showSmoking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showSmoking'] );
	$lists['limitAdvanceBookingsYesNo'] = jomresHTML::selectList( $yesno, 'cfg_limitAdvanceBookingsYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['limitAdvanceBookingsYesNo'] );
	$lists['roomTaxYesNo'] = jomresHTML::selectList( $yesno, 'cfg_roomTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['roomTaxYesNo'] );
	$lists['euroTaxYesNo'] = jomresHTML::selectList( $yesno, 'cfg_euroTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['euroTaxYesNo'] );
	$lists['editingOn'] = jomresHTML::selectList( $yesno, 'cfg_editingOn', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['editingOn'] );
	$lists['popupsAllowed'] = jomresHTML::selectList( $yesno, 'cfg_popupsAllowed', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['popupsAllowed'] );
	$lists['showSlideshowLink'] = jomresHTML::selectList( $yesno, 'cfg_showSlideshowLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showSlideshowLink'] );
	$lists['showSlideshowInline'] = jomresHTML::selectList( $yesno, 'cfg_showSlideshowInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showSlideshowInline'] );
	$lists['showTariffsInline'] = jomresHTML::selectList( $yesno, 'cfg_showTariffsInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showTariffsInline'] );
	$lists['showTariffsLink'] = jomresHTML::selectList( $yesno, 'cfg_showTariffsLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showTariffsLink'] );
	$lists['useOnlinepayment'] = jomresHTML::selectList( $yesno, 'cfg_useOnlinepayment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['useOnlinepayment'] );
	$lists['showdepartureinput'] = jomresHTML::selectList( $yesno, 'cfg_showdepartureinput', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showdepartureinput'] );
	$lists['dateFormatStyle'] = jomresHTML::selectList( $yesno, 'cfg_dateFormatStyle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dateFormatStyle'] );
	$lists['calstartfrombeginningofyear'] = jomresHTML::selectList( $yesno, 'cfg_calstartfrombeginningofyear', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['calstartfrombeginningofyear'] );
	$lists['showGoogleCurrencyLink'] = jomresHTML::selectList( $yesno, 'cfg_showGoogleCurrencyLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showGoogleCurrencyLink'] );
	$lists['showRoomsInPropertyDetails'] = jomresHTML::selectList( $yesno, 'cfg_showRoomsInPropertyDetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showRoomsInPropertyDetails'] );
	$lists['showRoomsListingLink'] = jomresHTML::selectList( $yesno, 'cfg_showRoomsListingLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showRoomsListingLink'] );
	$lists['showOnlyAvailabilityCalendar'] = jomresHTML::selectList( $yesno, 'cfg_showOnlyAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['showOnlyAvailabilityCalendar'] );
	$lists['registeredUsersOnlyCanBook'] = jomresHTML::selectList( $yesno, 'cfg_registeredUsersOnlyCanBook', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['registeredUsersOnlyCanBook'] );
	$lists['roundupDepositYesNo'] = jomresHTML::selectList( $yesno, 'cfg_roundupDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['roundupDepositYesNo'] );
	$lists['chargeDepositYesNo'] = jomresHTML::selectList( $yesno, 'cfg_chargeDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['chargeDepositYesNo'] );
	$lists['tariffChargesStoredWeeklyYesNo'] = jomresHTML::selectList( $yesno, 'cfg_tariffChargesStoredWeeklyYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['tariffChargesStoredWeeklyYesNo'] );
	$lists['roomslistinpropertydetails'] = jomresHTML::selectList( $yesno, 'cfg_roomslistinpropertydetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['roomslistinpropertydetails'] );
	$lists['verbosetariffinfo'] = jomresHTML::selectList( $yesno, 'cfg_verbosetariffinfo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['verbosetariffinfo'] );


	$lists['bookingform_overlib_tariff_title_show'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_title_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_title_show'] );
	$lists['bookingform_overlib_tariff_desc_show'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_desc_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_desc_show'] );
	$lists['bookingform_overlib_tariff_rate_show'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_rate_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_rate_show'] );
	$lists['bookingform_overlib_tariff_starts_show']	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_starts_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_starts_show'] );
	$lists['bookingform_overlib_tariff_ends_show'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_ends_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_ends_show'] );
	$lists['bookingform_overlib_tariff_mindays_show']	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_mindays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_mindays_show'] );
	$lists['bookingform_overlib_tariff_maxdays_show']	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_maxdays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_maxdays_show'] );
	$lists['bookingform_overlib_tariff_minpeeps_show']	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_minpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_minpeeps_show'] );
	$lists['bookingform_overlib_tariff_maxpeeps_show']	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_maxpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_tariff_maxpeeps_show'] );

	$lists['bookingform_overlib_room_number_show'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_number_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_number_show'] );
	$lists['bookingform_overlib_room_name_show'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_name_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_name_show'] );
	$lists['bookingform_overlib_room_type_show'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_type_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_type_show'] );
	$lists['bookingform_overlib_room_smoking_show'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_smoking_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_smoking_show'] );
	$lists['bookingform_overlib_room_disabledaccess_show'] = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_disabledaccess_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_disabledaccess_show'] );
	$lists['bookingform_overlib_room_floor_show'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_floor_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_floor_show'] );
	$lists['bookingform_overlib_room_maxpeople_show'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_maxpeople_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_maxpeople_show'] );
	$lists['bookingform_overlib_room_features_show'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_features_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_overlib_room_features_show'] );

	$lists['bookingform_roomlist_showroomno'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showroomno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_roomlist_showroomno'] );
	$lists['bookingform_roomlist_showroomname'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showroomname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_roomlist_showroomname'] );
	$lists['bookingform_roomlist_showtarifftitle'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showtarifftitle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_roomlist_showtarifftitle'] );
	$lists['supplimentChargeIsPercentage'] 			= jomresHTML::selectList( $yesno, 'cfg_supplimentChargeIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['supplimentChargeIsPercentage'] );
	$lists['dumpTemplate'] 							= jomresHTML::selectList( $yesno, 'cfg_dumpTemplate', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dumpTemplate'] );

	$lists['bookingform_requiredfields_name'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_name', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_name'] );
	$lists['bookingform_requiredfields_surname'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_surname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_surname'] );
	$lists['bookingform_requiredfields_houseno'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_houseno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_houseno'] );
	$lists['bookingform_requiredfields_street'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_street', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_street'] );
	$lists['bookingform_requiredfields_town'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_town', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_town'] );
	$lists['bookingform_requiredfields_postcode'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_postcode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_postcode'] );
	$lists['bookingform_requiredfields_region'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_region', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_region'] );
	$lists['bookingform_requiredfields_country'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_country', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_country'] );
	$lists['bookingform_requiredfields_tel'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_tel', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_tel'] );
	$lists['bookingform_requiredfields_mobile'] 	= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_mobile', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_mobile'] );
	$lists['bookingform_requiredfields_email'] 		= jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_email', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['bookingform_requiredfields_email'] );

	$lists['dtv_dow_monday_is_percentage'] 		= jomresHTML::selectList( $yesno, 'cfg_dtv_dow_monday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dtv_dow_monday_is_percentage'] );
	$lists['dtv_dow_tuesday_is_percentage'] 	= jomresHTML::selectList( $yesno, 'cfg_dtv_dow_tuesday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dtv_dow_tuesday_is_percentage'] );
	$lists['dtv_dow_wednesday_is_percentage'] 	= jomresHTML::selectList( $yesno, 'cfg_dtv_dow_wednesday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dtv_dow_wednesday_is_percentage'] );
	$lists['dtv_dow_thursday_is_percentage'] 	= jomresHTML::selectList( $yesno, 'cfg_dtv_dow_thursday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dtv_dow_thursday_is_percentage'] );
	$lists['dtv_dow_friday_is_percentage'] 		= jomresHTML::selectList( $yesno, 'cfg_dtv_dow_friday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dtv_dow_friday_is_percentage'] );
	$lists['dtv_dow_saturday_is_percentage'] 	= jomresHTML::selectList( $yesno, 'cfg_dtv_dow_saturday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dtv_dow_saturday_is_percentage'] );
	$lists['dtv_dow_sunday_is_percentage'] 		= jomresHTML::selectList( $yesno, 'cfg_dtv_dow_sunday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['dtv_dow_sunday_is_percentage'] );

	$componentArgs=array();
	$componentArgs['mrConfig']=$mrConfig;
	$componentArgs['lists']=$lists;
	$componentArgs['weekdayDropdown']=$weekdayDropdown;
	$componentArgs['jsInputFormatDropdownList']=$jsInputFormatDropdownList;
	$componentArgs['smokingOptionDropdownList']=$smokingOptionDropdownList;
	$componentArgs['weekenddayDropdown']=$weekenddayDropdown;
	//$componentArgs['templateNamesDropdownList']=$templateNamesDropdownList;
	$componentArgs['paymentAmounts']=$paymentAmounts;
	$componentArgs['gatewayNames']=$gatewayNames;
	$componentArgs['editIconSize']=$editIconSize;
	$componentArgs['fixedArrivalDatesRecurring']=$fixedArrivalDatesRecurring;
	$componentArgs['tariffModelsDropdown']=$tariffModelsDropdown;
	$componentArgs['jomresConfig_live_site']=$jomresConfig_live_site;
	$componentArgs['tariffModeDD']=$tariffModeDD;
	$componentArgs['Itemid']=$Itemid;
	ob_start();

	// The following javascript is for selecting currency codes
	?>

	 	<form action="index.php?option=com_jomres" method="post" name="adminForm">
	 	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
		 <td width="100%" class="sectionname"><?php echo _JOMRES_COM_MR_GENERALCONFIGDESC; ?></td>
		</tr>
	 	</table>
	<?php

	$jrtbar = new jomres_toolbar();
	$jrtb	= $jrtbar->startTable();
	$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveHotelSettings');
	$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL("index.php?option=com_jomres&Itemid=$Itemid"),'');
	$jrtb .= $jrtbar->endTable();
	$output['JOMRESTOOLBAR']=$jrtb;

	echo $output['JOMRESTOOLBAR'];

	$configurationPanel = new jomres_configpanel();
	$componentArgs['configurationPanel']=$configurationPanel;

	$configurationPanel->startTabs();

	$MiniComponents->triggerEvent('0501',$componentArgs); // Generate configuration options tabs

	$configurationPanel->endTabs();

	echo '<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
	?>
	<input type="hidden" name="no_html" value="1">
	<input type="hidden" name="task" value="saveHotelSettings" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />
	<input type="hidden" name="cfg_version" value="<?php echo $mrConfig['version']; ?>" />
	<input type="hidden" name="cfg_jomresdotnet" value="<?php echo $mrConfig['jomresdotnet']; ?>" />
	<input type="hidden" name="property_uid" value="<?php echo $property_uid; ?>" />
	<?php
	foreach ($mrConfig as $k=>$v)
		{
		echo '<input type="hidden" name="oldsetting_cfg_'.$k.'" value="'.$v.'" />';
		echo "";
		}
	?>
	</form>

	<?php
	ob_end_flush();
	}


/**
#
 * Takes settings from the configuration and saves (most of them) to the jomres_settings table
#
*/
function saveHotelSettings()
	{
	global $Itemid;

	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$property_uid=(int)getDefaultProperty();
	//$updateText="";
	$tariffmodeChange=false;
	if ( $_POST['oldsetting_cfg_tariffmode'] == "1" && $_POST['cfg_tariffmode'] == "2") // Advanced  -> micromanage
		{
		echo "Deleting old tariffs";
		removeAllPropertyTariffs($property_uid);
		$tariffmodeChange=true;
		}
	if ( $_POST['oldsetting_cfg_tariffmode'] == "0" && $_POST['cfg_tariffmode'] == "2") // Normal  -> micromanage
		{
		echo "Deleting old tariffs";
		removeAllPropertyTariffs($property_uid);
		$tariffmodeChange=true;
		}
	if ( $_POST['oldsetting_cfg_tariffmode'] == "2" && ( $_POST['cfg_tariffmode'] == "0" || $_POST['cfg_tariffmode'] == "1" ) ) // Micromanage  -> normal/advanced
		{
		echo "Deleting old tariffs";
		removeAllPropertyEnhanceTariffsXref($property_uid);
		$tariffmodeChange=true;
		}
	if ( ($_POST['oldsetting_cfg_tariffmode'] == "1" || $_POST['oldsetting_cfg_tariffmode'] == "2") && $_POST['cfg_tariffmode'] == "0") // Advanced/Micromanage  -> normal
		{
		echo "Deleting old tariffs";
		removeAllPropertyTariffs($property_uid);
		removeAllPropertyEnhanceTariffsXref($property_uid);
		$tariffmodeChange=true;
		}
	if ( $_POST['oldsetting_cfg_tariffmode'] == "0" && $_POST['cfg_tariffmode'] != "0")
		$tariffmodeChange=true;

	foreach ($_POST as $k=>$v)
		{
		if (strpos( $k, 'cfg_' ) === 0 && $k != "cfg_jomres_licensekey")
			{
			$v=jomresGetParam( $_POST, $k, "" );
			$dirty = (string) $k;
			$k=addslashes($dirty);
			if (!get_magic_quotes_gpc())
				{
				$v = getEscaped( $v );
				}
			if (substr( $k, 4 ) =="currencyCodes")
				{
				$theArray=$_POST['cfg_currencyCodes'];
				$v=implode(",",$theArray);
				}
			if (substr( $k, 4 ) =="encKey")
				{
				saveKey($v);
				}
			else
				{
				$oldSettingKey='oldsetting_'.$k;
				$oldSettingVal=$_POST[$oldSettingKey];
				if ($k=="cfg_currency" && $_POST[$k]=='&#8364;') // We'll add this here because the input filter doesn't like euro currency entities.
					{
					$v='&#8364;';
					}
				if ($oldSettingVal!=$v)
					{
					//echo $oldSettingKey. ' '.$oldSettingVal.'<br>';
					$query="SELECT uid FROM #__jomres_settings WHERE property_uid LIKE '".(int)$property_uid."' and akey LIKE '".substr( $k, 4 )."'";
					$result=doSelectSql($query);
					if (count($result)==0)
						$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$property_uid."','".substr( $k, 4 )."','".$v."')";
					else
						$query="UPDATE #__jomres_settings SET `value`='".$v."' WHERE property_uid LIKE '".(int)$property_uid."' and akey LIKE '".substr( $k, 4 )."'";
					//echo $query."<br>";
					doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));
					}
				}
			}
		}

	/*
	if (!isset($_POST['cfg_currencyCodes']) || empty($_POST['cfg_currencyCodes'])	) // The currency codes list is empty, update the value field with an empty string
		{
		$query="UPDATE #__jomres_settings SET `value`='' WHERE property_uid LIKE '".(int)$property_uid."' and akey LIKE 'currencyCodes'";
		doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));
		}
	*/
	//var_dump($tariffmodeChange);exit;
	if ( $tariffmodeChange)
		jomresRedirect( jomresURL("index.php?option=com_jomres&task=propertyadmin&Itemid=$Itemid"), '' );
	else
		jomresRedirect( jomresURL("index.php?option=com_jomres&task=hotelSettings&Itemid=$Itemid&property_uid=$property_uid"), '' );
	}

function removeAllPropertyEnhanceTariffsXref($property_uid)
	{
	$query="DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE property_uid = ".(int)$property_uid;
	doInsertSql($query,'');
	$query="DELETE FROM #__jomcomp_tarifftypes WHERE property_uid = ".(int)$property_uid;
	doInsertSql($query,'');

	}

function removeAllPropertyTariffs($property_uid)
	{
	$query="DELETE FROM #__jomres_rates WHERE property_uid = '".(int)$property_uid."'";
	doInsertSql($query,'');
	}

function jomres_makeColourPickerInput($setting,$value)
	{
	$txt = '
		<input class="inputbox" id="cfg_'.$setting.'" name="cfg_'.$setting.'" size="7" value="'.$value.'" onChange="relateColor(\''.$setting.'\', this.value);">
				<a href="javascript:pickColor(\''.$setting.'\');"
				id="'.$setting.'" style="border: 1px solid '.$value.'; background:'.$value.'; font-family:Verdana; font-size:16px; text-decoration: none;">
				&nbsp;&nbsp;&nbsp;</a>';
	return $txt;
	}

/**
#
 * User has been logged out (or has attempted to access functionality illegally)
#
*/
function userHasBeenLoggedOut() {
	global $jomresConfig_live_site;
	echo '<center><img src="'.$jomresConfig_live_site.'/components/com_jomres/images/Restricted.png" align="middle" border="0" />';
	echo '<img src="'.$jomresConfig_live_site.'/components/com_jomres/images/Secured.png" align="middle" border="0" />';
	echo '<img src="'.$jomresConfig_live_site.'/components/com_jomres/images/Restricted.png" align="middle" border="0" /></center><br />';
	echo '<h2>'.jr_gettext('_JOMRES_JR_NOTLOGGEDIN',_JOMRES_JR_NOTLOGGEDIN).'</h2>';
	echo '<center><img src="'.$jomresConfig_live_site.'/components/com_jomres/images/Restricted.png" align="middle" border="0" />';
	echo '<img src="'.$jomresConfig_live_site.'/components/com_jomres/images/Secured.png" align="middle" border="0" />';
	echo '<img src="'.$jomresConfig_live_site.'/components/com_jomres/images/Restricted.png" align="middle" border="0" /></center><br />';


	//global $my;
	//trigger_error ("User attempted to view restricted functionality ".serialize($my), E_USER_ERROR);
} // end of function



/**
#
 * Makes a javascript date input field. Creates a random name for the form element each time so that multiple javascript forms can be used on the same page without collision
#
*/
function generateDateInput($fieldName,$dateValue,$myID=FALSE,$siteConfig=FALSE,$jrc=FALSE)
	{
	global $jrConfig,$jomresConfig_live_site,$jomresConfig_lang;
	// We need to give the javascript date function a randon name because it will be called by both the component and modules
	$javascriptFunctionName="";
	list($usec,$sec)=explode(" ",microtime());
	mt_srand($sec * $usec);
	$possible='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz';
	for ($i=0; $i<10; $i++)
		{
		$key=mt_rand(0, strlen($possible)-1);
		$javascriptFunctionName.=$possible[$key];
		}
	// jrc variable added so that $jrConfig can be defined if the calendar functionality is called by a module ...... old as of 2/12/2008, should be factored out at some point.
	if ($jrc)
		$jrConfig=$jrc;
	$dateFormat=$jrConfig['cal_input'];

	if ($dateValue=="")
		$dateValue = date("Y/m/d");

	$dateValue=JSCalmakeInputDates($dateValue,$siteConfig);
	$randomID=rand(1, 100); // Purely for the id tag
	$randomID2=rand(1, 100); // Purely for the id tag
	while ($randomID==$randomID2){$randomID2=rand(1, 100);};
	if ($fieldName=="arrivalDate")
		$output= showArrivaldateJS($dateFormat,$javascriptFunctionName,$randomID);
	else
		$output="";
	$output.="
		<input class=\"inputbox\" size=\"12\" type=\"text\" readonly=\"readonly\" name=\"".$fieldName."\"";
		if ($fieldName=="arrivalDate")

		$output.=' onchange="'.$javascriptFunctionName.'(this.value,form.name)"';
		// For version 3.2 we've changed how the calendar is implemented. Now, you need to click on the input to make the calendar popup. To revert to the older style of input, uncomment the following section and comment out the "popup on input click" section.

		// Popup on image click
		/*
		$output.=" value=\"".$dateValue."\" id=\"x".$randomID."\"/>
		<a class=\"dateinput_button\" href=\"#\"  id=\"x".$randomID2."\"  ><img src=\"".$jomresConfig_live_site."/components/com_jomres/images/calendar.png\" width=\"20\" height=\"20\" border=\"0\" alt=\"dateinput\" align=\"top\" ></a>
		<script type=\"text/javascript\">
		Calendar.setup({
			inputField	 :	\"x".$randomID."\",			//*
		ifFormat		:	\"".$dateFormat."\",
		//	showsTime		:	TRUE,
		button		:	\"x".$randomID2."\",		//*
		step			:	1
		});
		</script>
		";
		*/

		// Popup on input click
		$output.=" value=\"".$dateValue."\" id=\"x".$randomID."\"/>
		<img src=\"".$jomresConfig_live_site."/components/com_jomres/images/calendar.png\" width=\"20\" height=\"20\" border=\"0\" alt=\"dateinput\" align=\"top\" />
		<script type=\"text/javascript\">
		Calendar.setup({
			inputField	 :	\"x".$randomID."\",			//*
		ifFormat		:	\"".$dateFormat."\",
		//	showsTime		:	TRUE,
		button		:	\"x".$randomID."\",		//*
		step			:	1
		});
		</script>
		";
	return $output;
	}

/**
#
 * Triggesr the insert booking mini-comp 03020
#
 */
function insertInternetBooking($jomressession,$depositPaid=false,$confirmationPageRequired=true,$customTextForConfirmationForm="",$usejomressessionasCartid=false)
	{
	global $MiniComponents,$tmpBookingHandler,$Itemid;
	system_log("insertInternetBooking: Attempting to insert booking jsid: ".$jomressession);
	$property_uid=(int)$tmpBookingHandler->getBookingFieldVal("property_uid");
	$contract_total=(float)$tmpBookingHandler->getBookingFieldVal("contract_total");
	if ($contract_total == 0.00)
		jomresRedirect( jomresURL("index.php?option=com_jomres&task=viewproperty&Itemid=$Itemid&property_uid=$property_uid"), "" );
	$userIsManager=checkUserIsManager();
	$componentArgs=array('jomressession'=>$jomressession,'depositPaid'=>$depositPaid,'usejomressessionasCartid'=>$usejomressessionasCartid);
	$result=$MiniComponents->triggerEvent('03020',$componentArgs); // Trigger the insert booking mini-comp

	if ($result)
		{
		if ($confirmationPageRequired)
			{
			$componentArgs=array('property_uid'=>$property_uid);
			$componentArgs=array('customText'=>$customTextForConfirmationForm);
			$MiniComponents->triggerEvent('03030',$componentArgs); // Booking completed message
			if ($userIsManager)
				{
				echo jr_gettext('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE',_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE)."<br />";
				//echo "<a href=\"".jomresURL("index.php?option=com_jomres&task=editDeposit&contractUid=$contract_uid")."\">".jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE)."</a>";
				$jrtbar = new jomres_toolbar();
				$jrtb	= $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('editbooking',jomresURL("index.php?option=com_jomres&task=editDeposit&contractUid=".$result['contract_uid']),'');
				$jrtb .= $jrtbar->endTable();
				echo $jrtb;
				}
			}
		gateway_log("<h2>Resetting temp booking data</h2>");
		$tmpBookingHandler->resetTempBookingData();
		return $result;
		}
	else // If there's a failure at this point it shouldn't be because the guest cancelled at any stage. This is intended to trap errors that shouldn't be passed to the guest on the site
		{
		$subject =	"Insert of booking failed. Likely caused by a database insert function failure.\n\n";
		system_log($subject);
		}
	return false;
	}

/**
#
 * Used during the insert internet booking phase. Takes guest data from the tmpbookings table and inserts it into the guests table (or updates same, depending on the value of $existing_id)
#
*/
function insertGuestDeets($jomressession)
	{
	//global $my,$mykey;
	global $tmpBookingHandler,$jomresConfig_secret,$thisJRUser;
	$userIsManager=checkUserIsManager();

	$xCustomers=$tmpBookingHandler->getGuestData();

	$guests_uid		=(int)$xCustomers['guests_uid'];
	$mos_userid		=(int)$xCustomers['mos_userid'];
	$existing_id	=(int)$xCustomers['existing_id'];
	$email		=	quote_smart($xCustomers['email']);
	$firstname	=	quote_smart($xCustomers['firstname']);
	$surname	=	quote_smart($xCustomers['surname']);
	$house		=	quote_smart($xCustomers['house']);
	$street		=	quote_smart($xCustomers['street']);
	$town		=	quote_smart($xCustomers['town']);
	$region		=	quote_smart($xCustomers['region']);
	$country	=	quote_smart($xCustomers['country']);
	$postcode	=	quote_smart($xCustomers['postcode']);
	$landline	=	quote_smart($xCustomers['tel_landline']);
	$mobile		=	quote_smart($xCustomers['tel_mobile']);
	$property_uid=	(int)$tmpBookingHandler->getBookingPropertyId($tmpBookingHandler);

	$ccard_no	=	quote_smart($xCustomers['ccard_no']);
	$ccard_issued=	quote_smart($xCustomers['ccard_issued']);
	$ccard_expiry=	quote_smart($xCustomers['ccard_expiry']);
	$ccard_iss_no=	quote_smart($xCustomers['ccard_iss_no']);
	$ccard_name	=	quote_smart($xCustomers['ccard_name']);
	$ccv		=	quote_smart($xCustomers['ccv']);
	$type		=	quote_smart($xCustomers['type']);

	/*
	$defaultProperty=getDefaultProperty();
	if (!$userIsManager)
		{
		$defaultProperty=$property_uid;
		}
	*/
	$defaultProperty=getDefaultProperty();
	if (!$userIsManager && $thisJRUser->id >0)
		{
		$defaultProperty=$property_uid;
		$mos_userid=$thisJRUser->id;
		}
	else if (!$userIsManager && $thisJRUser->id == 0 )
		{
		$defaultProperty=$property_uid;
		$mos_userid=0;
		}

	if ($mos_userid > 0)
		{
		$query="SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int)$mos_userid."' AND `property_uid`= $property_uid LIMIT 1";
		$xistingGuests = doSelectSql($query);
		if (count($xistingGuests) >0)
			{
			foreach ($xistingGuests as $g)
				{
				$guests_uid = $g->guests_uid;
				}
			}
		else
			$guests_uid=0;
		}
		elseif ($existing_id > 0)
			$guests_uid=$existing_id;
		else
			$guests_uid=0;

	if ($guests_uid>0 )
		{
		$query="UPDATE	#__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',
		`town`= '$town',`county`= '$region',`country`= '$country',`postcode`= '$postcode',`tel_landline`= '$landline',`tel_mobile`= '$mobile',
		`property_uid`='".(int)$defaultProperty."',`email`='$email'
		WHERE guests_uid = '".(int)$guests_uid."'";
		doInsertSql($query,FALSE);
		$returnid=$guests_uid;
		}
	else
		{
		$query="INSERT INTO #__jomres_guests
		(`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`property_uid`,`email`";
		$query.=",`mos_userid`";
		$query.=") VALUES ('$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$defaultProperty','$email'";
		$query.=",'".(int)$mos_userid."'";
		$query.=")";
		$returnid=doInsertSql($query,FALSE);
		}


	if (!$returnid)
		{ echo "Error saving users details";exit; }

	if (strlen($ccard_no) > 0)
		{
		$property_uid=(int)$tmpBookingHandler->getBookingPropertyId();
		$query="UPDATE #__jomres_guests SET
			`ccard_no`=ENCODE('$ccard_no', '$jomresConfig_secret'),
			`ccard_issued`=ENCODE('$ccard_issued', '$jomresConfig_secret'),
			`ccard_expiry`=ENCODE('$ccard_expiry', '$jomresConfig_secret'),
			`ccard_iss_no`=ENCODE('$ccard_iss_no', '$jomresConfig_secret'),
			`ccard_name`=ENCODE('$ccard_name', '$jomresConfig_secret'),
			`ccv`=ENCODE('$ccv', '$jomresConfig_secret'),
			`type`=ENCODE('$type', '$jomresConfig_secret')
			WHERE guests_uid = '".(int)$returnid."'";
		doInsertSql($query,"");
		//$unencryptedKey="";
		$tmpBookingHandler->resetCreditCardDetails();
		}
	return $returnid;
	}

/**
#
 * depreciated
#
*/
function ValidateMail($Email) {
	$rBool=FALSE;
	if(preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $Email)){
		$rBool=TRUE;
	}
	return $rBool;
} // end of function


/**
#
 * Receives a date yyyy/mm/dd from the system and converts it to the configured output format
#
*/
function outputDate($thedate)
	{
	// Assumes the date $theDate comes from the system in the format YYYY/mm/dd
	global $mrConfig,$jomresConfig_locale;
	setlocale(LC_ALL, $jomresConfig_locale);
	$date_elements	= explode("/",$thedate);
	$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
	if ($mrConfig['dateFormatStyle']=="1")
		$formattedDate=date($mrConfig['cal_output'],$unixDate);
	else
		$formattedDate=strftime($mrConfig['cal_output'], $unixDate);
	return $formattedDate;
	}

/**
#
 * Makes the date for display in the javascript calendar. Will receive a yyyy/mm/dd formatted string and output it in the format desired by configuration settings
#
*/
function JSCalmakeInputDates($inputDate,$siteCal=FALSE)
	{
	global $mrConfig,$jrConfig;
	// Lets make the calendar dates for display in the js calendar. will receive a Y/m/d formatted string &	output it in the desired format
	// m d y. Probably unneccesary, but we'll do it anyway, to be on the safe side.
	$date_elements	= explode("/",$inputDate);
	$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

	$dateFormat=$jrConfig['cal_input'];
	switch ($dateFormat)
		{
		case "%d/%m/%Y":
			$theDate=adodb_date("d/m/Y",$unixDate);
		break;
		case "%Y/%m/%d":
			$theDate=adodb_date("Y/m/d",$unixDate);
		break;
		case "%m/%d/%Y":
			$theDate=adodb_date("m/d/Y",$unixDate);
		break;
		case "%d-%m-%Y":
			$theDate=adodb_date("d-m-Y",$unixDate);
		break;
		case "%Y-%m-%d":
			$theDate=adodb_date("Y-m-d",$unixDate);
		break;
		case "%m-%d-%Y":
			$theDate=adodb_date("m-d-Y",$unixDate);
		break;
		case "%d.%m.%Y":
			$theDate=adodb_date("d.m.Y",$unixDate);
		break;
		default:
			echo "Error in date format. Cannot continue.";
			exit;
		break;
		}
	return $theDate;
	}

/**
#
 * Converts a date that was supplied by the javascript calendar into yyyy/mm/dd for the system to use
#
*/
function JSCalConvertInputDates($inputDate,$siteCal=FALSE)
	{
	// Lets convert the input calendar dates to Y/m/d
	global $mrConfig,$jrConfig;

	$dateFormat=$jrConfig['cal_input'];
	switch ($dateFormat)
		{
		case "%d/%m/%Y":
			$date_elements	= explode("/",$inputDate);
			$unixDate= @adodb_mktime(0,0,0,$date_elements[1],$date_elements[0],$date_elements[2]);
		break;
		case "%Y/%m/%d":
			$date_elements	= explode("/",$inputDate);
			$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		break;
		case "%m/%d/%Y":
			$date_elements	= explode("/",$inputDate);
			$unixDate= adodb_mktime(0,0,0,$date_elements[0],$date_elements[1],$date_elements[2]);
		break;
		case "%d-%m-%Y":
			$date_elements	= explode("-",$inputDate);
			$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[0],$date_elements[2]);
		break;
		case "%Y-%m-%d":
			$date_elements	= explode("-",$inputDate);
			$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		break;
		case "%m-%d-%Y":
			$date_elements	= explode("-",$inputDate);
			$unixDate= adodb_mktime(0,0,0,$date_elements[0],$date_elements[1],$date_elements[2]);
		break;
		case "%d.%m.%Y":
			$date_elements	= explode(".",$inputDate);
			$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[0],$date_elements[2]);
		break;
		default:
			echo "Error in date format. Cannot continue.";
			exit;
		break;
		}
	$theDate=adodb_date("Y/m/d",$unixDate);
	return $theDate;
	}


/**
#
 * Generates the javascript used to update the departure date to 'whatever' date after arrival date. Shares the same function name as that used when creating the input, so that the basic script can be reused on the same page
#
*/
function showArrivaldateJS($dformat,$javascriptFunctionName,$randomID)
	{
	global $jomresSearchFormname;
	if (isset($jomresSearchFormname) && !empty($jomresSearchFormname) )
		$formname=$jomresSearchFormname;
	else
		$formname="bookingForm";
	?>
	<script language="JavaScript" type="text/javascript">
		function <?php echo $javascriptFunctionName;?>(arrivalDate,thisform){
		var dformat="<?php echo trim($dformat); ?>"
		var newday=0
		var day=0
		var mon=0
		var year=0
		if (dformat=="%d/%m/%Y"){
			dateArray=arrivalDate.split("/")
			day=dateArray[0]
			mon=dateArray[1]
			year=dateArray[2]
			}
		if (dformat=="%Y/%m/%d"){
			dateArray=arrivalDate.split("/")
			day=dateArray[2]
			mon=dateArray[1]
			year=dateArray[0]
			}
		if (dformat=="%m/%d/%Y"){
			dateArray=arrivalDate.split("/")
			day=dateArray[1]
			mon=dateArray[0]
			year=dateArray[2]
			}
		if (dformat=="%d-%m-%Y"){
			dateArray=arrivalDate.split("-")
			day=dateArray[0]
			mon=dateArray[1]
			year=dateArray[2]
			}
		if (dformat=="%Y-%m-%d"){
			dateArray=arrivalDate.split("-")
			day=dateArray[2]
			mon=dateArray[1]
			year=dateArray[0]
			}
		if (dformat=="%m-%d-%Y"){
			dateArray=arrivalDate.split("-")
	 			day=dateArray[1]
			mon=dateArray[0]
			year=dateArray[2]
			}

		var d = new Date(year,mon-1,day); with (d) setDate(getDate()+1)
		sday=String(d.getDate());
		smonth=String(d.getMonth()+1);
		if (sday.length == 1)
			fday="0"+sday;
		else
			fday=sday;
		if (smonth.length == 1)
			fmonth="0"+smonth;
		else
			fmonth=smonth;
		if (dformat=="%d/%m/%Y"){
			dd=fday+"/"+fmonth+"/"+String(d.getFullYear())
			}
		if (dformat=="%Y/%m/%d"){
			dd=String(d.getFullYear())+"/"+fmonth+"/"+fday
			}
		if (dformat=="%m/%d/%Y"){
			dd=fmonth+"/"+fday+"/"+String(d.getFullYear())
			}
		if (dformat=="%d-%m-%Y"){
			dd=fday+"-"+fmonth+"-"+String(d.getFullYear())
			}
		if (dformat=="%Y-%m-%d"){
			dd= String(d.getFullYear())+"-"+fmonth+"-"+fday
			}
		if (dformat=="%m-%d-%Y"){
			dd=fmonth+"-"+ fday+"-"+String(d.getFullYear())
			}
		document.<?php echo $formname;?>.departureDate.value=dd;
		}
		</script>
	<?php
	}



//--------------------------------------
//-E D I T	G A T E W A Y
//--------------------------------------


/**
#
 * Imports settings from jomres_config.php for new properties, or import settings into the db during install
#
 */
//--------------------------------------
//-I M P O R T	S E T T I N G S
//--------------------------------------

function importSettings($property_uid,$source_property_uid=0)
	{
	global $mrConfig;
	if ($property_uid == 0 )  // We're installing, so all settings will be inserted from jomres_config.php into the database. We'll use property_uid 0 to create baseline settings that all other properties will use as their default when they call getPropertySpecificSettings
		{
		include(JOMRESPATH_BASE.JRDS.'jomres_config.php' );
		foreach ($mrConfig as $k=>$v)
			{
			if (!insertSetting(0,$k,$v))
				error_logging("Error, couldn't import setting ".$k . " - " .$v. " for property uid 0 into the jomres_settings table ");
			}
		}
	else  // We have created a new property and are inserting their default settings into the db by pulling the default settings from the 0 property uid list
		{
		$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = ".$source_property_uid." AND akey LIKE '".$k."'";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			if (!insertSetting($property_uid,$set->akey,$set->value))
				error_logging("Error, couldn't import setting ".$set->akey . " - " .$set->value. " for property uid ".$property_uid." into the jomres_settings table ");
			}
		}
	return;
	}

// Companion to the importSettings function above
function insertSetting($property_uid,$k,$v)
	{
	$query="SELECT value FROM #__jomres_settings WHERE property_uid LIKE '".(int)$property_uid."' AND akey LIKE '".$k."'";
	$settingsList=doSelectSql($query);
	if (count($settingsList)==0)
		$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$property_uid."','".$k."','".$v."')";
	else
		$query="UPDATE #__jomres_settings SET `value`='".$v."' WHERE property_uid LIKE '".(int)$property_uid."' and akey LIKE '".$k."'";
	return doInsertSql($query,'');
	}

//-------------------------------
// G A T E W A Y	C O N F I G ---
//-------------------------------


/**
#
 * Saves a plugin's settings
#
*/
function savePlugin($plugin)
	{

	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$defaultProperty=getDefaultProperty();
	foreach ($_POST as $k=>$v)
		{
		$dirty = (string) $k;
		$k=RemoveXSS($dirty);
		if ($k!='task' && $k!='plugin' )
			$values[$k]=jomresGetParam( $_POST, $k, "" );
		}
	foreach ($values as $k=>$v)
		{
		$query="SELECT id FROM #__jomres_pluginsettings WHERE prid = '".(int)$defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
		$settingList=doSelectSql($query);
		if (count($settingList)>0)
			{
			/*
			foreach ($settingList as $set)
				{
				$id=$set->id;
				}
			*/
			$query="UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = '".(int)$defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_UPDATE',_JOMRES_MR_AUDIT_PLUGINS_UPDATE,FALSE));
			}
		else
			{
			$query="INSERT INTO #__jomres_pluginsettings
				(`prid`,`plugin`,`setting`,`value`) VALUES
				('".(int)$defaultProperty."','$plugin','$k','$v')";
			doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_INSERT',_JOMRES_MR_AUDIT_PLUGINS_INSERT,FALSE));
			}
		}
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'save_custom_text.html' );
	$tmpl->displayParsedTemplate();
	}

/**
#
 * depreciated
#
*/
function listGateways()
	{
	$listdir=JOMRESCONFIG_ABSOLUTE_PATH."/administrator/components/com_jomres/plugins/gateways/";
	$d = @dir($listdir);
	$folders=array();
	if($d)
		{
		$folders = array();
		//$docs = array();
		while (FALSE !== ($entry = $d->read()))
			{
			$gateway_folder = $entry;
			if(is_dir($listdir.'/'.$gateway_folder) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
				{
				$folders[] =$gateway_folder;
				}
			}
		$d->close();
		}

	return $folders;
	}

/**
#
 * Queries the slideshow folder for slideshows then creates a dropdown list to be used in the configuration panels
#
*/
function listSlideshows()
	{

	$listdir=JOMRESCONFIG_ABSOLUTE_PATH."/components/com_jomres/plugins/slideshows/";
	// get list of templates
	$d = @dir($listdir);
	if($d)
		{
		$folders = array();
		//$docs = array();
		while (FALSE !== ($entry = $d->read()))
			{
			$template_folder = $entry;
			if(is_dir($listdir.'/'.$template_folder) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
				{
				$folders[] =jomresHTML::makeOption( $template_folder, $template_folder );
				}
			}
		$d->close();
		}

	return $folders;
	}


/**
#
 * depreciated
#
*/
function saveKey ( $mykey )
	{

	$defaultProperty=getDefaultProperty();
	//Add code to check if config file is writeable.
	if (isset($mykey) && !empty($mykey) )
		{
		$keyFile = JOMRESCONFIG_ABSOLUTE_PATH.'/administrator/components/com_jomres/tmp/'.$defaultProperty.'_key.php';
		@chmod ($keyFile, 0700);
		if (is_file($keyFile) && !is_writable($keyFile))
				{
				jomresRedirect("index.php?option=com_jomres", "FATAL ERROR: Key File Not writeable" );
				}
			$txt = "<?php if (defined('JPATH_BASE'))";
			$txt .= "	defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );\n";
			$txt .= "else";
			$txt .= "	defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );\n";
			$txt.='$mykey="'.$mykey.'";?>';

		if ($fp = fopen( $keyFile, "w"))
			{
			fputs($fp, $txt, strlen($txt));
			fclose ($fp);
			}
		}
	}




//---------------------------------
//-P R O P E R T Y T Y P E S	 ----
//---------------------------------

/**
#
 * Shows the dropdown for selecting the property type in the edit property function
#
*/
function getPropertyTypeDropdown($propertyType="")
	{
	$query="SELECT id, ptype FROM #__jomres_ptypes WHERE published = '1' ORDER BY `ptype` ASC";
	$ptypeList = doSelectSql($query);
	if (count($ptypeList)>0)
		{
		foreach ($ptypeList as $ptype)
			{
			$ptypeOptions[]=jomresHTML::makeOption( $ptype->id,stripslashes($ptype->ptype) );
			}
		$ptypeDropDownList= jomresHTML::selectList($ptypeOptions, 'propertyType', 'class="inputbox" size="1"', 'value', 'text',$propertyType);
		}
	return $ptypeDropDownList;
	}

/**
#
 * Creates a filter dropdown
#
*/
function filterForm($selectname,$value,$format,$task="")
	{
	global $Itemid,$task;
	$defaultValue=$_REQUEST[$selectname];
	$javascript = "onchange=\"this.form.submit();\"";
	$selecthtml="\n<form action=\"index.php?option=com_jomres\" method=\"GET\" name=\"$selectname\"><span class=\"inputbox_wrapper\"><select class=\"inputbox\" name=\"$selectname\" $javascript>";
	$selecthtml .= "\n<option value=\"%\"></option>";
	$selecthtml .= "\n<option value=\"%\">".jr_gettext('_JOMRES_COM_A_RESET',_JOMRES_COM_A_RESET,FALSE)."</option>";
	if (count($value)>0)
		{
		foreach ($value as $v)
			{
			$v_output=$v;
			$selected="";
			if ($format=="date")
				$v_output=outputDate($v_output);
			if ($v==$defaultValue)
				$selected="selected";
			$selecthtml .= "\n<option value=\"$v\" ".$selected.">".$v_output."</option>";
			}
		}
	$selecthtml.="\n</select></span>
	<input type=\"hidden\" name=\"option\" value=\"com_jomres\" />
	<input type=\"hidden\" name=\"Itemid\" value=\"".$Itemid."\" />
	<input type=\"hidden\" name=\"task\" value=\"".$task."\" />
	</form>";
	return $selecthtml;
	}
/**
#
 * Receives a list of contract uids and generates a list of bookings based on those uids
#
*/
function showLiveBookings( $contractsList,$title,$arrivaldateDropdown)
	{
	global $jomresConfig_live_site,$Itemid;
	$defaultProperty=getDefaultProperty();
	if ($defaultProperty=="0")
		$defaultProperty="%";
	$today = date("Y/m/d");
	$pathToImages=$jomresConfig_live_site."/components/com_jomres/images";
	$img_pending=$pathToImages."/pending.gif";
	$img_arrivetoday=$pathToImages."/arrivetoday.gif";
	$img_resident=$pathToImages."/resident.gif";
	$img_departtoday=$pathToImages."/departtoday.gif";
	$img_stillhere=$pathToImages."/stillhere.gif";
	$img_late=$pathToImages."/late.gif";
	?>

	<table class="jradmin_innerwrapper">
	<tr>
		<td class="jomres_title" colspan="2"><?php echo $title;?></td>
	</tr>
	<tr>
		<td>Filter: </td><td><?php echo $arrivaldateDropdown;?></td>
	</tr>
	<tr>
		<td  colspan="2">
			<table class="jradmin_table">
			<tr>
				<td class="jradmin_subheader_ca"><img src="<?php echo $img_pending;?>" border=\"0\" /></td><td class="jradmin_subheader_ca"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING',_JOMRES_COM_MR_VIEWBOOKINGS_PENDING);?></td>
				<td class="jradmin_subheader_ca"> <img src="<?php echo $img_arrivetoday;?>" border=\"0\" /></td><td class="jradmin_subheader_ca"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY);?></td>
				<td class="jradmin_subheader_ca"><img src="<?php echo $img_resident;?>" border=\"0\" /></td><td class="jradmin_subheader_ca"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT',_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT);?></td>
			</tr><tr>
				<td class="jradmin_subheader_ca"><img src="<?php echo $img_departtoday;?>" border=\"0\" /></td><td class="jradmin_subheader_ca"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY);?></td>
				<td class="jradmin_subheader_ca"><img src="<?php echo $img_stillhere;?>" border=\"0\" /></td><td class="jradmin_subheader_ca"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE',_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE);?></td>
				<td class="jradmin_subheader_ca"><img src="<?php echo $img_late;?>" border=\"0\" /></td><td class="jradmin_subheader_ca"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_LATE',_JOMRES_COM_MR_VIEWBOOKINGS_LATE);?></td>
			</tr></table>

			<table class="jradmin_table" width="100%">
			<tr>
				<td class="jomres_title"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS',_JOMRES_COM_MR_VIEWBOOKINGS_STATUS);?></td>
				<td class="jomres_title"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME',_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME);?></td>
				<td class="jomres_title"><?php echo jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,true,false);?></td>
				<td class="jomres_title"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);?></td>
				<td class="jomres_title"><?php echo jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);?></td>
			</tr>
	<?php
	//$k = 0;
	//$i = 0;

	for ($i=0, $n=count( $contractsList ); $i < $n; $i++)
		{
		$imgToShow=$img_pending;
		$row = $contractsList[$i];
		$arrival=$row->arrival;
		$departure=$row->departure;
		$bookedIn=$row->booked_in;

		$date_elements	= explode("/",$today);
		$unixToday= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$date_elements	= explode("/",$arrival);
		$unixArrival= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$date_elements	= explode("/",$departure);
		$unixDeparture= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		if ($unixArrival==$unixToday && $bookedIn !="1")
			$imgToShow=$img_arrivetoday;
		if ($unixDeparture==$unixToday &&$bookedIn =="1")
			$imgToShow=$img_departtoday;
		if ($unixArrival <$unixToday && $bookedIn !="1")
			$imgToShow=$img_late;
		if ($unixDeparture> $unixToday && $bookedIn =="1")
			$imgToShow=$img_resident;
		if ($unixDeparture< $unixToday && $bookedIn =="1")
			$imgToShow=$img_stillhere;

		$jrtbar = new jomres_toolbar();
		$jrtb	= $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('edit',jomresURL("index.php?option=com_jomres&task=editBooking&Itemid=$Itemid&contract_uid=".$row->contract_uid ),'');
		$jrtb .= $jrtbar->endTable();
		//$rw=$jrtb;

		?>
			<tr>
			<td width="20" class="jradmin_field_ca"><?php echo "<img src=\"".$imgToShow."\" border=\"0\" />";?></td>

			<td  class="jradmin_field_ca"width="25%"><a href="<?php echo jomresURL("index.php?option=com_jomres&task=editBooking&Itemid=$Itemid&contract_uid=".($row->contract_uid ) );?>"><?php echo ($row->firstname );echo "&nbsp;"; echo ($row->surname ); ?></a></td>
			<td class="jradmin_field_ca"><?php echo $row->tag; ?></td>
			<td class="jradmin_field_ca"><?php echo outputDate($row->arrival); ?></td>
			<td class="jradmin_field_ca"><?php echo outputDate($row->departure); ?></td>
			</tr>
		<?php
		}
	?>
	</table>
	</td>
	</tr>
</table>
<?php
}//end function showLiveBookings

/**
#
 * Receives a property uid, returns an array of data for that property
#
*/
function getPropertyAddressForPrint($propertyUid)
	{
	//Returns an array containing the property address & contact details in table/row format. A rather crappy function, it's overused by other areas of Jomres, added indexedPropertyDetails for use by the global thisJomresPropertyDetails
	global $mainframe;
	$liveSite=$mainframe->getCfg( 'live_site' );
	$query="SELECT property_name,property_street,property_town,property_postcode,property_tel,property_fax,property_email,property_features,property_country,property_region,published,ptype_id,stars,
		property_description,property_checkin_times,property_area_activities,property_driving_directions,property_airports,property_othertransport,property_policies_disclaimers,`lat`,`long`,metatitle,metadescription FROM #__jomres_propertys WHERE propertys_uid = '".(int)$propertyUid."'";
	$propertyData=doSelectSql($query);
	foreach ($propertyData as $data)
		{
		$property_name=$data->property_name;
		$property_street=$data->property_street;
		$property_town=$data->property_town;
		$property_postcode=$data->property_postcode;
		$property_region=$data->property_region;
		$property_country=$data->property_country;
		$property_tel=$data->property_tel;
		$property_fax=$data->property_fax;
		$property_email=$data->property_email;

		$obj= new stdClass; // For use by queries that used to call mysql for this information, we'll just dress the data up as it used to come out of a query
		$obj->property_name=$property_name;
		$obj->property_street=$property_street;
		$obj->property_town=$property_town;
		$obj->property_postcode=$property_postcode;
		$obj->property_region=$property_region;
		$obj->property_country=$property_country;
		$obj->property_tel=$property_tel;
		$obj->property_features=$data->property_features;

		$obj->property_description=$data->property_description;
		$obj->property_checkin_times=$data->property_checkin_times;
		$obj->property_area_activities=$data->property_area_activities;
		$obj->property_driving_directions=$data->property_driving_directions;
		$obj->property_airports=$data->property_airports;
		$obj->property_othertransport=$data->property_othertransport;
		$obj->property_policies_disclaimers=$data->property_policies_disclaimers;

		$obj->property_email=$property_email;
		$obj->published=(int)$data->published;
		$obj->ptype_id=(int)$data->ptype_id;
		$obj->stars=(int)$data->stars;
		$obj->propertys_uid=(int)$propertyUid;

		$indexedPropertyDetails=array(
			"property_name"=>$property_name ,
			"property_street"=>$property_street ,
			"property_town"=>$property_town ,
			"property_postcode"=>$property_postcode ,
			"property_region"=>$property_region ,
			"property_country"=>$property_country ,
			"property_tel"=>$property_tel ,
			"property_features"=>$data->property_features ,
			"property_email"=>$property_email,
			"published"=>(int)$data->published,
			"ptype_id"=>(int)$data->ptype_id,
			"stars"=>(int)$data->stars,

			"property_description"=>$data->property_description ,
			"property_checkin_times"=>$data->property_checkin_times ,
			"property_area_activities"=>$data->property_area_activities ,
			"property_driving_directions"=>$data->property_driving_directions ,
			"property_airports"=>$data->property_airports ,
			"property_othertransport"=>$data->property_othertransport ,
			"property_policies_disclaimers"=>$data->property_policies_disclaimers ,

			"lat"=>$data->lat ,
			"long"=>$data->long ,
			"metatitle"=>$data->metatitle ,
			"metadescription"=>$data->metadescription ,

			"propertys_uid"=>(int)$propertyUid,
			"obj"=>array($obj)
			);


		}
	$propertyAddress=array($property_name,$property_street,$property_town,$property_postcode,$property_region,$property_country);
	$propertyContact=array($property_tel,$property_fax,$property_email,$liveSite);
	$propertyDataArray=array($property_name,$propertyAddress,$propertyContact,$indexedPropertyDetails);
	return $propertyDataArray;
	}

/**
#
 * Receives a guest's uid, returns an array of guest data
#
*/
function getGuestForPrint($guestUid)
	{
	$query="SELECT firstname,surname,house,street,town,postcode,county,country,email FROM #__jomres_guests WHERE guests_uid = '".(int)$guestUid."'";
	$guestData=doSelectSql($query);
	foreach ($guestData as $data)
		{
		$firstname=$data->firstname;
		$surname=$data->surname;
		$house=$data->house;
		$street=$data->street;
		$town=$data->town;
		$postcode=$data->postcode;
		$region=$data->county;
		$country=$data->country;
		$email=$data->email;
		}
	$guestAddress=array($firstname,$surname,$house,$street,$town,$postcode,$region,$country,$email);
	return $guestAddress;
	}


/**
#
 * Deletes an image
#
*/
function dropImage($defaultProperty,$imageType="",$itemUid="")
	{
	global $Itemid;
	$imageType		= getEscaped( jomresGetParam( $_REQUEST, 'imageType', '' ) );
	$itemUid		= getEscaped( jomresGetParam( $_REQUEST, 'itemUid', 0 ) );

	$defaultProperty=getDefaultProperty();
	$saveMessage =jr_gettext('_JOMRES_FILE_DELETED',_JOMRES_FILE_DELETED,FALSE);
	// Delete from the database and the file itself.
	// image type is a check. Depending on the image type will depend on if the item is removed from
	// the property database, the rooms or the resources
	switch ($imageType)
		{
		case 'property':
			$fileFullPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."images".JRDS."stories".JRDS."jomres".JRDS.$defaultProperty."_property_".$defaultProperty.".jpg";
			$returnTask="editProperty&propertyUid=".$itemUid;
		break;
		case 'room':
			$fileFullPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."images".JRDS."stories".JRDS."jomres".JRDS.$defaultProperty."_room_".$itemUid.".jpg";
			$returnTask="editRoom&roomUid=".$itemUid;
		break;
		}
	if (!unlink($fileFullPath))
		{
		echo "Error, couldn't delete ".$fileFullPath;
		error_logging("Error, couldn't delete ".$fileFullPath);
		}
	else
		jomresRedirect( jomresURL("index.php?option=com_jomres&task=$returnTask&Itemid=$Itemid"), $saveMessage );
	}

/**
#
 * Basic function for uploading a property image
#
*/
function uploadPropertyImage()
	{
	global $jrConfig,$Itemid;
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$defaultProperty=getDefaultProperty();
	$saveMessage=_JOMRES_FILE_UPDATED;

	$uploadedImage	=	$_FILES['image']['name'];
	$filename= split("\.", $_FILES['image']['name']);
	$numExtensions=(count($filename))-1;
	//$fileName=$filename[0];
	$fileExt=$filename[$numExtensions];
	$newFileName=$defaultProperty."_property_".(int)$defaultProperty.".".$fileExt;

	if ($uploadedImage)
		$checkedImage=uploadImageFromPost('image',$newFileName,$jrConfig['ss_imageLocation']);
	if ($checkedImage)
		{
		$query="SELECT propertyid FROM #__jomres_property_images WHERE propertyid = '".(int)$defaultProperty."'";
		$propertyList =doSelectSql($query);
		if (count($propertyList)>0)
			{
			$query="UPDATE #__jomres_property_images SET `filelocation`='".$checkedImage."' WHERE propertyid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE',_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE,FALSE))) exit;
			}
		else
			{
			$query="INSERT INTO #__jomres_property_images (`propertyid`,`filelocation`) VALUES ('".(int)$defaultProperty."','".$checkedImage."')";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE',_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE,FALSE))) exit;
			}
		jomresRedirect( jomresURL("index.php?option=com_jomres&task=editProperty&Itemid=$Itemid&propertyUid=$defaultProperty"), $saveMessage );
		}
	else
		echo "Error";
	}

/**
#
 * Basic function for uploading a room image
#
*/

function uploadRoomImage()
	{
	global $Itemid,$jrConfig;
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$defaultProperty=getDefaultProperty();
	$saveMessage=_JOMRES_FILE_UPDATED;
	$roomUid = intval(jomresGetParam( $_POST, 'roomUid', 0 ));
	$query="SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = ".(int)$defaultProperty."";
	$roomsList =doSelectSql($query);
	$propertysRooms=array();

	foreach ($roomsList as $r)
		{
		$propertysRooms[]=$r->room_uid;
		}
	if (in_array($roomUid,$propertysRooms) )
		{
		$uploadedImage	=	$_FILES['image']['name'];
		$filename= split("\.", $_FILES['image']['name']);
		$numExtensions=(count($filename))-1;
		//$fileName=$filename[0];
		$fileExt=$filename[$numExtensions];
		$newFileName=$defaultProperty."_room_".$roomUid.".".$fileExt;

		if ($uploadedImage)
			$checkedImage=uploadImageFromPost('image',$newFileName,$jrConfig['ss_imageLocation']);

		if ($checkedImage)
			{
			$query="SELECT roomid FROM #__jomres_room_images WHERE roomid = '".(int)$roomUid."'";
			$roomList =doSelectSql($query);
			if (count($roomList)>0)
				{
				$query="UPDATE #__jomres_room_images SET `filelocation`='".$checkedImage."' WHERE roomid = '".(int)$roomUid."'";
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE',_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE,FALSE))) exit;
				}
			else
				{
				$query="INSERT INTO #__jomres_room_images (`roomid`,`filelocation`) VALUES ('".(int)$roomUid."','".$checkedImage."')";
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE',_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE,FALSE))) exit;
				}
			jomresRedirect(jomresURL("index.php?option=com_jomres&task=editRoom&Itemid=$Itemid&roomUid=$roomUid"), $saveMessage );
			}
		}
	else
		trigger_error ("Unable to upload image, room uid does not match property's rooms", E_USER_ERROR);
	}

/**
#
 * Uploads an image an resizes it accoring to $jrConfig['maxwidth'] & $jrConfig['maxheight']
#
* @see images
#
*/
function uploadImageFromPost($formelement=null,$newName=null,$saveToPath=null)
	{
	global $jrConfig,$thisJRUser;
	$elementsToRemove=array(" ","\\","'",);
	$newName=strtolower(str_replace($elementsToRemove,"", $newName));
	if (isset($formelement) && isset($newName) && isset($saveToPath) )
		{
		if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.$saveToPath) )
			{
			if (!mkdir(JOMRESCONFIG_ABSOLUTE_PATH.$saveToPath) )
				{
				echo "Unable to make dir ".$saveToPath."<br>";
				return false;
				}
			}
		if (!defined("JOMRES_IMAGE_MAX_SIZE")||!defined("JOMRES_IMAGE_UPLOAD_PATH"))
			{
			define("JOMRES_IMAGE_MAX_SIZE",$jrConfig['fileSize']);
			define("JOMRES_IMAGE_UPLOAD_PATH",JOMRESCONFIG_ABSOLUTE_PATH.$saveToPath,"/");
			}
		$maxwidth = $jrConfig['maxwidth'];
		$maxHeight = $jrConfig['maxwidth'];
		// load the class
		$img = new images();
		// open a file
		if ($img->getImageFromPost($formelement) )
			{
			// make the image fit
			// Image resizing is a security function, as well as simply resizing the image. It reduces the liklihood of malformed headers in image files.
			$img->transformToFit($maxwidth,$maxHeight);
			if (!$img->imageresizeresult)
				{
				@unlink($img->fileToBeDeletedAtEnd);
				@unlink($img->orgImage);
				trigger_error ("Unable to resize image. Poss malformed image </b> ".$_FILES[$formelement]['name']." User id ".$thisJRUser->id, E_USER_ERROR);
				}
			// add a red stroke of 2 pixels to the image
			//$img->strokeImage(2,"FF0000");
			// save the image
			if (!$img->saveImage(JOMRES_IMAGE_UPLOAD_PATH.$newName) )
				{
				echo "Unable to save file ".JOMRES_IMAGE_UPLOAD_PATH.$newName." ";
				return false;
				}
			}
		else
			{
			return false;
			}
		}
	return $saveToPath.$newName;
	}

/**
#
 * Returns the property's name when passed a property uid
#
*/
function getPropertyName($property_uid)
	{
	// Gets the property name & returns the name as table data
	//global $database,$mrConfig;
	global $thisJomresPropertyDetails;
	if ($property_uid == $thisJomresPropertyDetails['propertys_uid'])
		return $thisJomresPropertyDetails['property_name'];
	else
		{
		$query="SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property_uid."'";
		$propertyList =doSelectSql($query);
		foreach ($propertyList as $property)
			{
			$propertyName=stripslashes($property->property_name);
			}
		return 	$propertyName;
		}
	}

/**
#
 * Takes a url, indexed array and a postage method. For use by gateways to post data to payment services.
#
*/
function gatewayPostage($outgoingURL,$postage,$method="post")
	{
	?>
	<script>
	toloadindex=toload.length+1;
	toload[1]=	"document.form.submit()";
	</script>
	<?php
	 	echo "<html>\n";
	 	echo "<head><title>".JOMRES_PHRASE_PROCESSING."</title></head>\n";
	 	echo "<body onLoad=\"document.form.submit();\">\n";
	 	echo "<center><h3>".JOMRES_PHRASE_PROCESSING."</h3></center>\n";
	 	echo "<form method=\"".$method."\" name=\"form\" action=\"".$outgoingURL."\">\n";
	foreach ($postage as $name => $value)
		{
		echo "<input type=\"hidden\" name=\"$name\" value=\"$value\">";
		}
	echo "</form>\n";
	echo "</body></html>\n";
	}



/**
#
 * Takes a url, indexed array and a postage method. For use by gateways to post data to payment services.
#
*/
/*
function gatewayPostage($outgoingURL,$postage,$method="post")
	{
	// $method is currently unused
	$fields = "";
	foreach( $postage as $key => $value ) $fields .= "$key=" . urlencode( $value ) . "&";
	$ch = curl_init($outgoingURL);
	curl_setopt($ch, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
	curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim( $fields, "& " )); // use HTTP POST to send form data
	### curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment this line if you get no gateway response. ###
	$resp = curl_exec($ch); //execute post and get results
	curl_close ($ch);
	}
*/

/**
#
 * Works out the difference between two dates in days
#
*/
function dateDiff($interval,$first_date,$second_date)
	{
	$first_date_ex = explode("/",$first_date);
	$second_date_ex = explode("/",$second_date);
	$fd=gregoriantojd($first_date_ex[1], $first_date_ex[2], $first_date_ex[0]);
	$sd=gregoriantojd($second_date_ex[1], $second_date_ex[2], $second_date_ex[0]);
	$days=$sd-$fd;
	return $days;
	}

/**
#
 * Pass an image location, will construct a size optimised <img src=""> string back, based on the image's original size
#
*/
function showImage($imageLocation,$target)
	{

	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH."/".$imageLocation))
		{
		//get the image size of the picture and load it into an array
		$mysock = getimagesize($imageLocation);
		if ($mysock)
			{
			// http://www.sitepoint.com/article/image-resizing-php
			//takes the larger size of the width and height and applies the formula accordingly...this is so this script will work dynamically with any size image
			$width=$mysock[0];
			$height=$mysock[1];
			if ($width > $height)
				$percentage = ($target / $width);
			else
				$percentage = ($target / $height);
			//gets the new value and applies the percentage, then rounds the value
			$width = round($width * $percentage);
			$height = round($height * $percentage);
			$result=" width=\"$width\" height=\"$height\"";
			echo "<img src=\"".$imageLocation."\" border=\"0\" ".$result." />";
			}
		else
			echo "&nbsp;";
		}
	}

/**
#
 * Checks for the existance of an image when passed an image type (eg property, room) and returns the file location
#
*/
function checkForImage($imageType,$itemUid)
	{
	global $mrConfig;
	$fileLocation=FALSE;
	switch ($imageType)
		{
		case 'property':
			$tableName=" #__jomres_property_images ";
			$fieldName="propertyid";
			break;
		case 'room':
			$tableName=" #__jomres_room_images ";
			$fieldName="roomid";
			break;
		case 'resource':
			$tableName=" #__jomres_resource_images ";
			$fieldName="resourceid";
			break;
			}
	$query="SELECT filelocation FROM ".$tableName." WHERE ".$fieldName." = '".$itemUid."'";
	$imageData =doSelectSql($query);
	if (count($imageData)>0)
		 {
		 if ($mrConfig['errorCheckingShowSQLvardump']) echo "<br><b>".var_dump($imageData)."</b><br>";
		 foreach ($imageData as $image)
		 		{
			$fileLocation=$image->filelocation;
			}
		 }
	return $fileLocation;
	}

function getImageForProperty($imageType,$property_uid,$itemUid)
	{
	global $jomresConfig_live_site;
	$fileLocation=FALSE;
	switch ($imageType)
		{
		case 'property':
			$default_image = $jomresConfig_live_site."/components/com_jomres/images/jrlogo.png";
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."images".JRDS."stories".JRDS."jomres".JRDS.$property_uid."_property_".$itemUid.".jpg"))
				$fileLocation = $jomresConfig_live_site."/images/stories/jomres/".$property_uid."_property_".$property_uid.".jpg";
			else
				$fileLocation = $default_image;
			break;
		case 'room':
			$default_image = $jomresConfig_live_site."/components/com_jomres/images/noimage.gif";
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."images".JRDS."stories".JRDS."jomres".JRDS.$property_uid."_room_".$itemUid.".jpg"))
				$fileLocation = $jomresConfig_live_site."/images/stories/jomres/".$property_uid."_room_".$itemUid.".jpg";
			else
				$fileLocation = $default_image;
			break;
		default :
			return false;
			}
	return $fileLocation;
	}
/**
#
 * Constructs the mrConfig data when passed a property uid.
#
*/
function getPropertySpecificSettings($property_uid)
	{
	global $mrConfig,$jrConfig;
	if (!isset($mrConfig) )
		$mrConfig = array();
	$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = 0";
	$settingsList=doSelectSql($query);
	if (count($settingsList)>0)
		{
		foreach ($settingsList as $setting)
			{
			$akey=$setting->akey;
			$value=$setting->value;
			$mrConfig[$akey]=$value;
			}
		if ($jrConfig['useGlobalCurrency'] =="1")
			{
			$mrConfig['currency']=$jrConfig['globalCurrency'];
			$mrConfig['currencyCode']=$jrConfig['globalCurrencyCode'];
			}
		}
	if ($property_uid > 0)
		{
		$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = '".(int)$property_uid."'";
		$settingsList=doSelectSql($query);
		if (count($settingsList)>0)
			{
			foreach ($settingsList as $setting)
				{
				$akey=$setting->akey;
				$value=$setting->value;
				//echo "Resetting mrConfig variables: Setting $akey ".$mrConfig['$akey']." to $value<br>";
				$mrConfig[$akey]=$value;
				}
			if ($jrConfig['useGlobalCurrency'] =="1")
				{
				$mrConfig['currency']=$jrConfig['globalCurrency'];
				$mrConfig['currencyCode']=$jrConfig['globalCurrencyCode'];
				}
			}
		}
	return $mrConfig;
	}

/**
#
 * Self registration step 1
#
*/
function registerProp_step1()
	{
	global $jomresConfig_live_site,$thisJRUser,$Itemid,$jrConfig;
		if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager )
		return;
	$propertyRegion[]=array("AF","");
	if (isset($_REQUEST['selectedCountry']) && !empty($_REQUEST['selectedCountry']))
		$selectedCountry	= jomresGetParam( $_REQUEST, 'selectedCountry', "" );
	$rgns=setupRegions($selectedCountry,$propertyRegion);
	if (!isset($rgns) || empty($rgns) )
		$output['REGIONDROPDOWN']="N/A";
	else
		$output['REGIONDROPDOWN']=setupRegions($selectedCountry,$propertyRegion);
	$output['COUNTRIESDROPDOWN']=createCountriesDropdown($selectedCountry);
	$output['MOSCONFIGLIVESITE']	=$jomresConfig_live_site;
	$output['REGISTRATION_INSTRUCTIONS_STEP1']=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1);
	$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
	$output['HREGION']= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
	$output['ITEMID']	=$Itemid;

	$pageoutput[]=$output;
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'register_property1.html');
	$tmpl->addRows( 'pageoutput',$pageoutput);
	$tmpl->displayParsedTemplate();
	}

/**
#
 * Self registration step 2
#
*/
function registerProp_step2()
	{
	global $jomresConfig_live_site,$thisJRUser,$Itemid,$jrConfig,$mrConfig;
	if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager)
		return;

	$output=array();

	$property_region				= jomresGetParam( $_POST, 'region', "" );
	$property_country				= jomresGetParam( $_POST, 'country', "" );

	$propertyFeatures="";


	// make a standard yes/no list
	$yesno = array();
	$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
	$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE) );

	$output['ISTHISANMRP']=jr_gettext('_JOMRES_COM_ISTHISANMRP',_JOMRES_COM_ISTHISANMRP);
	$output['ISTHISANMRP_DESC']=jr_gettext('_JOMRES_COM_ISTHISANMRP_DESC',_JOMRES_COM_ISTHISANMRP_DESC);
	$output['ISTHISANMRP_DROPDOWN']= jomresHTML::selectList( $yesno, 'isthisanmrp', 'class="inputbox" size="1"', 'value', 'text', '1' );

	$starsDropDownList="<select class=\"inputbox\" name=\"stars\">";
	for ($i=0, $n=5; $i <= $n; $i++)
		{
		$starsDropDownList .= "<option value=\"".$i."\">".$i."</option>";
		}
	$starsDropDownList.="</select>";

	$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE',_JOMRES_FRONT_PTYPE);

	$output['PROPERTY_TYPE_DROPDOWN']=getPropertyTypeDropdown($ptypeid);
	$propertyFeaturesArray=explode(",",$propertyFeatures);

	$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid FROM #__jomres_hotel_features	WHERE property_uid LIKE '0' ORDER BY hotel_feature_abbv ";
	$propertyFeaturesList=doSelectSql($query);
	if (count($propertyFeaturesList)>0)
		{
		foreach($propertyFeaturesList as $propertyFeature)
			{
			$r=array();
			$r['PID']=$propertyFeature->hotel_features_uid;
			if (in_array($propertyFeature->hotel_features_uid,$propertyFeaturesArray) )
				$r['ischecked']="checked";
			$r['FEATURE']=makeFeatureImages($propertyFeature->image,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,TRUE);
			$globalPfeatures[]=$r;
			}
		}
	if (isset($listTxt))
		$output['FEATURES']=$listTxt;

	$output['STARSDROPDOWN']=$starsDropDownList;

	$output['PROPERTY_NAME']					="";
	$output['PROPERTY_STREET']					="";
	$output['PROPERTY_TOWN']					="";
	$output['PROPERTY_POSTCODE']				="";
	$output['PROPERTY_TEL']						="";
	$output['PROPERTY_FAX']						="";
	$output['PROPERTY_EMAIL']					="";
	$output['PROPERTY_MAPPINGLINK']				="";
	$output['PROPERTY_DESCRIPTION']				="";
	$output['PROPERTY_CHECKIN_TIMES']			="";
	$output['PROPERTY_AREA_ACTIVITIES']			="";
	$output['PROPERTY_DRIVING_DIRECTIONS']		="";
	$output['PROPERTY_AIRPORTS']				="";
	$output['PROPERTY_OTHERTRANSPORT']			="";
	$output['PROPERTY_POLICIES_DISCLAIMERS']	="";
	$output['PROPERTY_REGION']					=$property_region;
	$output['PROPERTY_COUNTRY']					=$property_country;

	$output['INPUTBOXERRORBORDER']				=$mrConfig['inputBoxErrorBorder'];
	$output['INPUTBOXERRORBACKGROUND']			=$mrConfig['inputBoxErrorBackground'];
	$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2);
	$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2_BUTTON']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2,false,false);
	$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1);

	$output['HNAME']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
	$output['HSTREET']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
	$output['HTOWN']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
	$output['HPOSTCODE']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
	$output['HTELEPHONE']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
	$output['HFAX']					=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
	$output['HEMAIL']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL);
	$output['HSTARS']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS);
	$output['HFEATURES']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES);
	$output['HMAPPINGLINK']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK);
	$output['HPROPDESCRIPTION']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION);
	$output['HCHECKINTIMES']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES);
	$output['HAREAACTIVITIES']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES);
	$output['HDRIVINGDIRECTIONS']	=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS);
	$output['HAIRPORTS']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS);
	$output['HOTHERTRANSPORT']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT);
	$output['HPOLICIESDISCLAIMERS']	=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);
	$output['MOSCONFIGLIVESITE']	=$jomresConfig_live_site;
	$output['ITEMID']				=$Itemid;

	$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS);


	$pageoutput[]=$output;
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'register_property2.html');
	$tmpl->addRows( 'pageoutput',$pageoutput);
	if ($jrConfig['useGlobalPFeatures']=="1")
		$tmpl->addRows( 'globalPfeatures',$globalPfeatures);
	$tmpl->displayParsedTemplate();

	}

/**
#
 * Saves a self registered property
#
*/
function saveRegisterProp()
	{
	global $my,$thisJRUser,$jrConfig,$MiniComponents,$Itemid;
	if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager)
		return;
	$property_name					= jomresGetParam( $_POST, 'property_name', "" );
	$property_street				= jomresGetParam( $_POST, 'property_street', "" );
	$property_town					= jomresGetParam( $_POST, 'property_town', "" );
	$property_region				= jomresGetParam( $_POST, 'property_region', "" );
	$property_country				= jomresGetParam( $_POST, 'property_country', "" );
	$property_postcode				= jomresGetParam( $_POST, 'property_postcode', "" );
	$property_tel					= jomresGetParam( $_POST, 'property_tel', "" );
	$property_fax					= jomresGetParam( $_POST, 'property_fax', "" );
	$property_email					= jomresGetParam( $_POST, 'property_email', "" );
	$property_mappinglink			= urlencode(jomresGetParam( $_POST, 'property_mappinglink', "" ) );
	$property_description			= jomresGetParam( $_POST, 'property_description', "" );
	$property_checkin_times			= jomresGetParam( $_POST, 'property_checkin_times', "" );
	$property_area_activities		= jomresGetParam( $_POST, 'property_area_activities', "" );
	$property_driving_directions	= jomresGetParam( $_POST, 'property_driving_directions', "" );
	$property_airports				= jomresGetParam( $_POST, 'property_airports', "" );
	$property_othertransport		= jomresGetParam( $_POST, 'property_othertransport', "" );
	$property_policies_disclaimers	= jomresGetParam( $_POST, 'property_policies_disclaimers', "" );
	$property_type					= intval(jomresGetParam( $_POST, 'propertyType', "" ));
	$isthisanmrp					= intval(jomresGetParam( $_POST, 'isthisanmrp', 0 ));
	$property_stars					= intval(jomresGetParam( $_POST, 'stars', "" ) );
	$features_list					= jomresGetParam( $_POST, 'features_list', array() );


	if (count($features_list)>1)
		$featuresList=implode(",",$features_list);
	if (count($features_list)==1)
		{
		$featuresList=implode(",",$features_list);
		//
		}
	$featuresList=",".$featuresList.",";

	$apikey=createNewAPIKey();

	$query="INSERT INTO #__jomres_propertys (`property_name`,`property_street`,`property_town`,
		`property_region`,`property_country`,`property_postcode`,`property_tel`,`property_fax`,
		`property_email`,`property_features`,`property_mappinglink`,
		`property_description`,`property_checkin_times`,`property_area_activities`,
		`property_driving_directions`,`property_airports`,`property_othertransport`,`property_policies_disclaimers`,stars,ptype_id,apikey)
		VALUES
		('$property_name','$property_street',
		'$property_town','$property_region','$property_country','$property_postcode','$property_tel',
		'$property_fax','$property_email','$featuresList',
		'$property_mappinglink','$property_description','$property_checkin_times','$property_area_activities',
		'$property_driving_directions','$property_airports','$property_othertransport',
		'$property_policies_disclaimers','".(int)$property_stars."','".(int)$property_type."','".$apikey."'
		)";
	$newPropId=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_PROPERTY',_JOMRES_MR_AUDIT_INSERT_PROPERTY,FALSE));

	if ($isthisanmrp == 1)
		$singleRoomProperty="0";
	else
		$singleRoomProperty="1";
	$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int)$newPropId."','singleRoomProperty','".$singleRoomProperty."')";
	doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS,FALSE));

	/*
	$today = date("Y/m/d");
	$validfrom=$today;
	$validto=date("Y/m/d",mktime(0, 0, 0, date("m")	, date("d"), date("Y")+1));
	if ($jrConfig['useGlobalRoomTypes']!="1")
		{
		$query="INSERT INTO #__jomres_room_classes (
		`room_class_abbv`,`room_class_full_desc`,`property_uid` )
		VALUES
		('CHANGE ME','CHANGE ME','".(int)$newPropId."')";
		$rmTypeId=doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE);
		}
	else
		{
		$query="SELECT room_classes_uid FROM #__jomres_room_classes WHERE property_uid = '0' LIMIT 1";
		$rmTypeId=doSelectSql($query,1);
		}
	$query="INSERT INTO #__jomres_rates (
		`rate_title`,`rate_description`,`validfrom`,`validto`,`roomrateperday`,
		`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,`ignore_pppn`,
		`allow_we`,`property_uid`)
		VALUES
		('CHANGE ME','CHANGE ME','$validfrom','$validto','100',
		'1','100','1','10','".(int)$rmTypeId."','0',
		'1','".(int)$newPropId."')";
	$tariffid=doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF',_JOMRES_MR_AUDIT_INSERT_TARIFF,FALSE));
	$query="INSERT INTO #__jomres_rooms (
		`room_classes_uid`,`propertys_uid`,`room_name`,`room_number`,
		`room_floor`,`room_disabled_access`,`max_people`,`smoking`)
		VALUES
		('".(int)$rmTypeId."','".(int)$newPropId."','CHANGE ME','N/A',
		'N/A','0','10','0')";
	doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM);
	*/
	if (!$thisJRUser->userIsManager)
		{
		$query="INSERT INTO #__jomres_managers (`userid`,`username`,`property_uid`,`access_level`)VALUES ('".(int)$my->id."','$my->username','".(int)$newPropId."','2')";
		doInsertSql($query,_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY);
		}
	$thisJRUser->authorisedProperties[]=$newPropId;
	updateManagerIdToPropertyXrefTable($thisJRUser->id,$thisJRUser->authorisedProperties );
	$componentArgs=array('property_uid'=>(int)$newPropId);
	$MiniComponents->triggerEvent('04901',$componentArgs); // Trigger point. Not currently used, but available if somebody wants a trigger point after the create property phase.
	$subject=_JOMRES_REGISTRATION_CREATEDPROPERTY.$property_name;
	$message=_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER.$my->username;
	sendAdminEmail($subject,$message);
	jomresRedirect( "index.php?option=com_jomres&task=propertyadmin&thisProperty=".$newPropId."&Itemid=".$Itemid,"");
	}

/**
#
 * Creates an array of country codes, countries and currency names
#
*/
function currencyCodesArray()
	{
	$codes["AED"]=array('country'=>"United Arab Emirates",'currencyname'=>"Dirhams");
	$codes["AFN"]=array('country'=>"Afghanistan",'currencyname'=>"Afghanis");
	$codes["ALL"]=array('country'=>"Albania",'currencyname'=>"Leke");
	$codes["AMD"]=array('country'=>"Armenia",'currencyname'=>"Drams");
	$codes["ANG"]=array('country'=>"Netherlands Antilles",'currencyname'=>"Guilders/Florins");
	$codes["AOA"]=array('country'=>"Angola",'currencyname'=>"Kwanza");
	$codes["ARS"]=array('country'=>"Argentina",'currencyname'=>"Pesos");
	$codes["AUD"]=array('country'=>"Australia",'currencyname'=>"Dollars");
	$codes["AWG"]=array('country'=>"Aruba",'currencyname'=>"Guilders");
	$codes["AZN"]=array('country'=>"Azerbaijan",'currencyname'=>"New Manats");
	$codes["BAM"]=array('country'=>"Bosnia and Herzegovina",'currencyname'=>"Convertible Marka");
	$codes["BBD"]=array('country'=>"Barbados",'currencyname'=>"Dollars");
	$codes["BDT"]=array('country'=>"Bangladesh",'currencyname'=>"Taka");
	$codes["BGN"]=array('country'=>"Bulgaria",'currencyname'=>"Leva");
	$codes["BHD"]=array('country'=>"Bahrain",'currencyname'=>"Dinars");
	$codes["BIF"]=array('country'=>"Burundi",'currencyname'=>"Francs");
	$codes["BMD"]=array('country'=>"Bermuda",'currencyname'=>"Dollars");
	$codes["BND"]=array('country'=>"Brunei Darussalam",'currencyname'=>"Dollars");
	$codes["BOB"]=array('country'=>"Bolivia",'currencyname'=>"Bolivianos");
	$codes["BRL"]=array('country'=>"Brazil",'currencyname'=>"Brazil Real");
	$codes["BSD"]=array('country'=>"Bahamas",'currencyname'=>"Dollars");
	$codes["BTN"]=array('country'=>"Bhutan",'currencyname'=>"Ngultrum");
	$codes["BWP"]=array('country'=>"Botswana",'currencyname'=>"Pulas");
	$codes["BYR"]=array('country'=>"Belarus",'currencyname'=>"Rubles");
	$codes["BZD"]=array('country'=>"Belize",'currencyname'=>"Dollars");
	$codes["CAD"]=array('country'=>"Canada",'currencyname'=>"Dollars");
	$codes["CDF"]=array('country'=>"Congo/Kinshasa",'currencyname'=>"Congolese Francs");
	$codes["CHF"]=array('country'=>"Switzerland",'currencyname'=>"Francs");
	$codes["CLP"]=array('country'=>"Chile",'currencyname'=>"Pesos");
	$codes["CNY"]=array('country'=>"China",'currencyname'=>"Yuan Renminbi");
	$codes["COP"]=array('country'=>"Colombia",'currencyname'=>"Pesos");
	$codes["CRC"]=array('country'=>"Costa Rica",'currencyname'=>"Colones");
	$codes["CSD"]=array('country'=>"Serbia",'currencyname'=>"Dinars");
	$codes["CUP"]=array('country'=>"Cuba",'currencyname'=>"Pesos");
	$codes["CVE"]=array('country'=>"Cape Verde",'currencyname'=>"Escudos");
	$codes["CYP"]=array('country'=>"Cyprus",'currencyname'=>"Pounds");
	$codes["CZK"]=array('country'=>"Czech Republic",'currencyname'=>"Koruny");
	$codes["DJF"]=array('country'=>"Djibouti",'currencyname'=>"Francs");
	$codes["DKK"]=array('country'=>"Denmark",'currencyname'=>"Kroner");
	$codes["DOP"]=array('country'=>"Dominican Republic",'currencyname'=>"Pesos");
	$codes["DZD"]=array('country'=>"Algeria",'currencyname'=>"Algeria Dinars");
	$codes["EEK"]=array('country'=>"Estonia",'currencyname'=>"Krooni");
	$codes["EGP"]=array('country'=>"Egypt",'currencyname'=>"Pounds");
	$codes["ERN"]=array('country'=>"Eritrea",'currencyname'=>"Nakfa");
	$codes["ETB"]=array('country'=>"Ethiopia",'currencyname'=>"Birr");
	$codes["EUR"]=array('country'=>"Euro Member Countries",'currencyname'=>"Euro");
	$codes["FJD"]=array('country'=>"Fiji",'currencyname'=>"Dollars");
	$codes["FKP"]=array('country'=>"Falkland Islands (Malvinas)",'currencyname'=>"Pounds");
	$codes["GBP"]=array('country'=>"United Kingdom",'currencyname'=>"Pounds");
	$codes["GEL"]=array('country'=>"Georgia",'currencyname'=>"Lari");
	$codes["GGP"]=array('country'=>"Guernsey",'currencyname'=>"Pounds");
	$codes["GHC"]=array('country'=>"Ghana",'currencyname'=>"Cedis");
	$codes["GIP"]=array('country'=>"Gibraltar",'currencyname'=>"Pounds");
	$codes["GMD"]=array('country'=>"Gambia",'currencyname'=>"Dalasi");
	$codes["GNF"]=array('country'=>"Guinea",'currencyname'=>"Francs");
	$codes["GTQ"]=array('country'=>"Guatemala",'currencyname'=>"Quetzales");
	$codes["GYD"]=array('country'=>"Guyana",'currencyname'=>"Dollars");
	$codes["HKD"]=array('country'=>"Hong Kong",'currencyname'=>"Dollars");
	$codes["HNL"]=array('country'=>"Honduras",'currencyname'=>"Lempiras");
	$codes["HRK"]=array('country'=>"Croatia",'currencyname'=>"Kuna");
	$codes["HTG"]=array('country'=>"Haiti",'currencyname'=>"Gourdes");
	$codes["HUF"]=array('country'=>"Hungary",'currencyname'=>"Forint");
	$codes["IDR"]=array('country'=>"Indonesia",'currencyname'=>"Rupiahs");
	$codes["ILS"]=array('country'=>"Israel",'currencyname'=>"New Shekels");
	$codes["IMP"]=array('country'=>"Isle of Man",'currencyname'=>"Pounds");
	$codes["INR"]=array('country'=>"India",'currencyname'=>"Rupees");
	$codes["IQD"]=array('country'=>"Iraq",'currencyname'=>"Dinars");
	$codes["IRR"]=array('country'=>"Iran",'currencyname'=>"Rials");
	$codes["ISK"]=array('country'=>"Iceland",'currencyname'=>"Kronur");
	$codes["JEP"]=array('country'=>"Jersey",'currencyname'=>"Pounds");
	$codes["JMD"]=array('country'=>"Jamaica",'currencyname'=>"Dollars");
	$codes["JOD"]=array('country'=>"Jordan",'currencyname'=>"Dinars");
	$codes["JPY"]=array('country'=>"Japan",'currencyname'=>"Yen");
	$codes["KES"]=array('country'=>"Kenya",'currencyname'=>"Shillings");
	$codes["KGS"]=array('country'=>"Kyrgyzstan",'currencyname'=>"Soms");
	$codes["KHR"]=array('country'=>"Cambodia",'currencyname'=>"Riels");
	$codes["KMF"]=array('country'=>"Comoros",'currencyname'=>"Francs");
	$codes["KPW"]=array('country'=>"Korea (North)",'currencyname'=>"Won");
	$codes["KRW"]=array('country'=>"Korea (South)",'currencyname'=>"Won");
	$codes["KWD"]=array('country'=>"Kuwait",'currencyname'=>"Dinars");
	$codes["KYD"]=array('country'=>"Cayman Islands",'currencyname'=>"Dollars");
	$codes["KZT"]=array('country'=>"Kazakhstan",'currencyname'=>"Tenge");
	$codes["LAK"]=array('country'=>"Laos",'currencyname'=>"Kips");
	$codes["LBP"]=array('country'=>"Lebanon",'currencyname'=>"Pounds");
	$codes["LKR"]=array('country'=>"Sri Lanka",'currencyname'=>"Rupees");
	$codes["LRD"]=array('country'=>"Liberia",'currencyname'=>"Dollars");
	$codes["LSL"]=array('country'=>"Lesotho",'currencyname'=>"Maloti");
	$codes["LTL"]=array('country'=>"Lithuania",'currencyname'=>"Litai");
	$codes["LVL"]=array('country'=>"Latvia",'currencyname'=>"Lati");
	$codes["LYD"]=array('country'=>"Libya",'currencyname'=>"Dinars");
	$codes["MAD"]=array('country'=>"Morocco",'currencyname'=>"Dirhams");
	$codes["MDL"]=array('country'=>"Moldova",'currencyname'=>"Lei");
	$codes["MGA"]=array('country'=>"Madagascar",'currencyname'=>"Ariary");
	$codes["MKD"]=array('country'=>"Macedonia",'currencyname'=>"Denars");
	$codes["MMK"]=array('country'=>"Myanmar (Burma)",'currencyname'=>"Kyats");
	$codes["MNT"]=array('country'=>"Mongolia",'currencyname'=>"Tugriks");
	$codes["MOP"]=array('country'=>"Macau",'currencyname'=>"Patacas");
	$codes["MRO"]=array('country'=>"Mauritania",'currencyname'=>"Ouguiyas");
	$codes["MTL"]=array('country'=>"Malta",'currencyname'=>"Liri");
	$codes["MUR"]=array('country'=>"Mauritius",'currencyname'=>"Rupees");
	$codes["MVR"]=array('country'=>"Maldives (Maldive Islands)",'currencyname'=>"Rufiyaa");
	$codes["MWK"]=array('country'=>"Malawi",'currencyname'=>"Kwachas");
	$codes["MXN"]=array('country'=>"Mexico",'currencyname'=>"Pesos");
	$codes["MYR"]=array('country'=>"Malaysia",'currencyname'=>"Ringgits");
	$codes["MZM"]=array('country'=>"Mozambique",'currencyname'=>"Meticais");
	$codes["NAD"]=array('country'=>"Namibia",'currencyname'=>"Dollars");
	$codes["NGN"]=array('country'=>"Nigeria",'currencyname'=>"Nairas");
	$codes["NIO"]=array('country'=>"Nicaragua",'currencyname'=>"Cordobas");
	$codes["NOK"]=array('country'=>"Norway",'currencyname'=>"Krone");
	$codes["NPR"]=array('country'=>"Nepal",'currencyname'=>"Nepal Rupees");
	$codes["NZD"]=array('country'=>"New Zealand",'currencyname'=>"Dollars");
	$codes["OMR"]=array('country'=>"Oman",'currencyname'=>"Rials");
	$codes["PAB"]=array('country'=>"Panama",'currencyname'=>"Balboa");
	$codes["PEN"]=array('country'=>"Peru",'currencyname'=>"Nuevos Soles");
	$codes["PGK"]=array('country'=>"Papua New Guinea",'currencyname'=>"Kina");
	$codes["PHP"]=array('country'=>"Philippines",'currencyname'=>"Pesos");
	$codes["PKR"]=array('country'=>"Pakistan",'currencyname'=>"Rupees");
	$codes["PLN"]=array('country'=>"Poland",'currencyname'=>"Zlotych");
	$codes["PYG"]=array('country'=>"Paraguay",'currencyname'=>"Guarani");
	$codes["QAR"]=array('country'=>"Qatar",'currencyname'=>"Rials");
	$codes["ROL"]=array('country'=>"Romania",'currencyname'=>"Lei");
	$codes["RON"]=array('country'=>"Romania",'currencyname'=>"New Lei");
	$codes["RUB"]=array('country'=>"Russia",'currencyname'=>"Rubles");
	$codes["RWF"]=array('country'=>"Rwanda",'currencyname'=>"Rwanda Francs");
	$codes["SAR"]=array('country'=>"Saudi Arabia",'currencyname'=>"Riyals");
	$codes["SBD"]=array('country'=>"Solomon Islands",'currencyname'=>"Dollars");
	$codes["SCR"]=array('country'=>"Seychelles",'currencyname'=>"Rupees");
	$codes["SDD"]=array('country'=>"Sudan",'currencyname'=>"Dinars");
	$codes["SEK"]=array('country'=>"Sweden",'currencyname'=>"Kronor");
	$codes["SGD"]=array('country'=>"Singapore",'currencyname'=>"Dollars");
	$codes["SHP"]=array('country'=>"Saint Helena",'currencyname'=>"Pounds");
	$codes["SIT"]=array('country'=>"Slovenia",'currencyname'=>"Tolars");
	$codes["SKK"]=array('country'=>"Slovakia",'currencyname'=>"Koruny");
	$codes["SLL"]=array('country'=>"Sierra Leone",'currencyname'=>"Leones");
	$codes["SOS"]=array('country'=>"Somalia",'currencyname'=>"Shillings");
	$codes["SPL"]=array('country'=>"Seborga",'currencyname'=>"Luigini");
	$codes["SRD"]=array('country'=>"Suriname",'currencyname'=>"Dollars");
	$codes["STD"]=array('country'=>"São Tome and Principe",'currencyname'=>"Dobras");
	$codes["SVC"]=array('country'=>"El Salvador",'currencyname'=>"Colones");
	$codes["SYP"]=array('country'=>"Syria",'currencyname'=>"Pounds");
	$codes["SZL"]=array('country'=>"Swaziland",'currencyname'=>"Emalangeni");
	$codes["THB"]=array('country'=>"Thailand",'currencyname'=>"Baht");
	$codes["TJS"]=array('country'=>"Tajikistan",'currencyname'=>"Somoni");
	$codes["TMM"]=array('country'=>"Turkmenistan",'currencyname'=>"Manats");
	$codes["TND"]=array('country'=>"Tunisia",'currencyname'=>"Dinars");
	$codes["TOP"]=array('country'=>"Tonga",'currencyname'=>"Pa'anga");
	$codes["TRY"]=array('country'=>"Turkey",'currencyname'=>"New Lira");
	$codes["TTD"]=array('country'=>"Trinidad and Tobago",'currencyname'=>"Dollars");
	$codes["TVD"]=array('country'=>"Tuvalu",'currencyname'=>"Tuvalu Dollars");
	$codes["TWD"]=array('country'=>"Taiwan",'currencyname'=>"New Dollars");
	$codes["TZS"]=array('country'=>"Tanzania",'currencyname'=>"Shillings");
	$codes["UAH"]=array('country'=>"Ukraine",'currencyname'=>"Hryvnia");
	$codes["UGX"]=array('country'=>"Uganda",'currencyname'=>"Shillings");
	$codes["USD"]=array('country'=>"United States of America",'currencyname'=>"Dollars");
	$codes["UYU"]=array('country'=>"Uruguay",'currencyname'=>"Pesos");
	$codes["UZS"]=array('country'=>"Uzbekistan",'currencyname'=>"Sums");
	$codes["VEB"]=array('country'=>"Venezuela",'currencyname'=>"Bolivares");
	$codes["VND"]=array('country'=>"Viet Nam",'currencyname'=>"Dong");
	$codes["VUV"]=array('country'=>"Vanuatu",'currencyname'=>"Vatu");
	$codes["WST"]=array('country'=>"Samoa",'currencyname'=>"Tala");
	$codes["XAF"]=array('country'=>"Communauté Financière Africaine BEAC",'currencyname'=>"Francs");
	$codes["XCD"]=array('country'=>"East Caribbean",'currencyname'=>"Dollars");
	$codes["XOF"]=array('country'=>"Communauté Financière Africaine BCEAO",'currencyname'=>"Francs");
	$codes["XPF"]=array('country'=>"Comptoirs Français du Pacifique",'currencyname'=>"Francs");
	$codes["YER"]=array('country'=>"Yemen",'currencyname'=>"Rials");
	$codes["ZAR"]=array('country'=>"South Africa",'currencyname'=>"Rand");
	$codes["ZMK"]=array('country'=>"Zambia",'currencyname'=>"Kwacha");
	$codes["ZWD"]=array('country'=>"Zimbabwe",'currencyname'=>"Zimbabwe Dollars");
	return $codes;
	}

/**
#
 * Generic or creation function. Pass a number of ids and the field you're searching on, will return ( `xyx`='1' OR `xyx`='2' OR`xyx`='3' ) etc.
#
*/
function genericOr($idArray,$fieldToSearch,$idArrayisInteger=true)
	{
	$newArr=array();
	foreach ($idArray as $id)
		{
		$newArr[]=$id;
		}
	$idArray=$newArr;
	$txt=" ( `".$fieldToSearch."`=";
	for ($i=0, $n=count($idArray); $i < $n; $i++)
		{
		if ($idArrayisInteger)
			$id=(int)$idArray[$i];
		else
			$id=$idArray[$i];
		$txt .= " '$id' ";
		if ($i < count($idArray)-1)
			$txt .= " OR `".$fieldToSearch."`= ";
		}
	$txt .= " ) ";
	return $txt;
	}


/**
#
 * Returns the browser to the propertyadmin page after a save action
#
 */
function returnToPropertyConfig($saveMessage="")
	{
	global $mrConfig,$Itemid;
	if ($mrConfig['errorCheckingShowSQL']=="0")
		jomresRedirect( jomresURL("index.php?option=com_jomres&task=propertyadmin&Itemid=".$Itemid), $saveMessage );
	}

/**
#
 * Publish the user's property. Toggle action.
#
 */
function publishProperty()
	{
	global $MiniComponents;
	$MiniComponents->specificEvent('02272',"publishprop");
	}

/**
#
 * Validates a url passed from the configuration while saving
#
*/
function validateURL($url)
	{
	$url=urldecode($url);
	if (!strncasecmp($url,'javascript',10)) {
		$url="";
		}
	else
		{
		$url=strip_tags($url,'%26');
		}
	return $url;
	}

//-----------------------------------------------------------------
//-E D I T	R O O M S	A N D	P R O P E R T Y	D E T A I L S
//-----------------------------------------------------------------

/**
#
 * Not used (yet). Intended to be developed in the future for generating wysiwyg editors for property details intpu
#
*/
// Returns the editor area as a text string for inclusion in a template
function editorAreaText( $name, $content, $hiddenField, $width, $height, $col, $row )
	{
	global $mainframe, $_MAMBOTS;
	include( JOMRESCONFIG_ABSOLUTE_PATH."/editor/editor.php");
	$ret = "";
	if (defined('_JOMRES_NEWJOOMLA') )
		{
		$editor =& JFactory::getEditor();
		$ret =$editor->display($name, $content, $width, $height, $col, $row);
		}
	else
		{
		if (!defined( '_JOS_EDITORXTD_INCLUDED' ))
			{
			define( '_JOS_EDITORXTD_INCLUDED', 1 );
			$_MAMBOTS->loadBotGroup( 'editors-xtd' );
			}
		if ( method_exists($mainframe,'set') )
			$mainframe->set( 'loadEditor', true );
		$results = $_MAMBOTS->trigger( 'onEditorArea', array( $name, $content, $hiddenField, $width, $height, $col, $row ) );
		foreach ($results as $result)
			{
			if (trim($result))
				{
				$ret .= $result;
				}
			}
		}
	return $ret;
	}


function flashArea($name, $content)
	{
	$ret="";
	if (!defined("FLASH_AREAJS_SHOWN"))
		{
		$ret.='
		<script type="text/javascript">
	  		_editor_url = "components/com_jomres/libraries/flash_area/";// relative path to FlashArea
		</script>
		<script type="text/javascript" src="components/com_jomres/libraries/flash_area/flasharea.js"></script>
		';

		define("FLASH_AREAJS_SHOWN",1);
		}
	$ret.='
		<textarea name="'.$name.'" id="'.$name.'" cols="2" rows="1" >
		'.$content.'
		</textarea>
		<script>
		fa = new FlashArea(\''.$name.'\');
		cnf = fa.config;
		cnf.configFile = "jomres.xml";
		fa.generate();
		</script>
	<input class="jomres_message" type="Submit" value="Submit" >

	';
	return $ret;
	}
/**
#
 * Triggers the search functionality, set's "$randomSearch" to true
#
 */
function jomresShowSearch()
	{
	global $task;
	if ( empty($task) )
		{
		global $MiniComponents;
		$MiniComponents->triggerEvent('00030'); //Search mini-comp
		}
	}

/**
#
 * @deprecated
#
 */
function checkPortalExists()
	{
	global $jomresPortalAdminPath;
	$portalExists=false;
	if (file_exists($jomresPortalAdminPath.'/admin.jrportal.php') )
		$portalExists=true;
	return $portalExists;
	}


/**
#
 * Creates data for displaying an image. If $retString is true it will return <img etc, if false then it will return the same text in an array variable for passing to patTemplate
#
 */
function makeFeatureImages($image,$title,$description,$retString=false,$altLivesite="")
	{
	global $jomresConfig_live_site,$mrConfig,$thisJRUser;
	if (!empty($altLivesite))
		$jomresConfig_live_site=$altLivesite;
	$title=addslashes($title);
	$description=addslashes($description);
	$defaultImage="images/blank.png";
	if (!isset($image) || empty($image) )
		$image=$defaultImage;
	if (!isset($title) || empty($title) )
		$title="Empty";
	if (!isset($description) || empty($description) )
		$description="";
	$title=htmlentities($title);
	$description=htmlentities($description);

	$captionpopup="";
	$descriptonpopup="";
	/*
	if ($mrConfig['editingOn']=="1" && $thisJRUser->userIsManager)
		{
		$captionpopup=jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_CAPTION'.$image,$title,true,true );
		$descriptonpopup=jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_DESCRIPTION'.$image,$description,true,true );
		}
	*/
	$title=jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_CAPTION'.strtoupper($image),stripslashes($title),false,false );
	$description=jr_gettext('_JOMRES_CUSTOMTEXT_FEATUREBLURB_DESCRIPTION'.strtoupper($image),stripslashes($description),false,false );

	$title=str_replace("&#39;","\&#39;",$title);
	$title=str_replace("'","\'",$title);
	$description=str_replace("&#39;","\&#39;",$description);
	$description=str_replace("'","\'",$description);

	if ($retString)
		$r='<img src="'.$jomresConfig_live_site.'/'.$image.'" alt="" border="0" onmouseover="return overlib(\''.$description.'\', CAPTION, \''.$title.'\', BELOW, RIGHT);" onmouseout="return nd();" />';
	else
		{
		$r=array();
		$space="";
		if ($captionpopup != "")
			$space="<br>";
		$r['FEATURE']=$space.'<img src="'.$jomresConfig_live_site.'/'.$image.'" alt="" border="0" onmouseover="return overlib(\''.$description.'\', CAPTION, \''.$title.'\', BELOW, RIGHT);" onmouseout="return nd();" />'.$captionpopup.' '.$descriptonpopup;
		}
	return $r;
	}


/**
#
 * Increments the pcounter table when a property clicked and sets a cookie to say that this user has clicked this property
#
 */
function propertyClicked($p_uid)
	{
	global $database,$jomresConfig_live_site;
	$sessionCookieName 	= md5( 'site'.$jomresConfig_live_site);
	//$sessioncookie 		= jomresGetParam( $_REQUEST, $sessionCookieName, '' );
	$cookiename = "jomresp$p_uid";

	$alreadyClicked = jomresGetParam( $_COOKIE, $cookiename, '0' );
	if (!$alreadyClicked)
		{
		setcookie( $cookiename, '1', time()+60*60*24*30 );
		$query="SELECT p_uid FROM #__jomres_pcounter WHERE `p_uid` = '".(int)$p_uid."' LIMIT 1 ";
		 	$clickList= doSelectSql($query);
		 	if (count($clickList)>0)
			$query="UPDATE #__jomres_pcounter SET count=count+1 WHERE p_uid = '".(int)$p_uid."'";
		else
			{
			$query="INSERT INTO #__jomres_pcounter SET `count`='1',`p_uid`='".(int)$p_uid."'";
			}

		if (!doInsertSql($query,"") ) {
		 		echo "<script> alert('".$database->getErrorMsg()."'); window.history.go(-1); </script>\n";
	 		exit();
				}
		}
	}

/**
#
 * Strips slashes
#
 */
function quote_smart($value)
	{
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
		}

	$value = mysql_real_escape_string($value);
	return $value;
	}

/**
#
 * Makes a popup link
#
 */
function makePopupLink($link,$text,$isLocalPage=TRUE,$width=550,$height=500)
	{
	global $mrConfig,$jomresConfig_live_site,$jomresConfig_sef;
	//$popupButton= new JButtonPopup();
	//var_dump($popupButton);exit;

	if ($mrConfig['popupsAllowed'])
		{
		$format="";
		if ($isLocalPage)
			{
			if (defined('_JOMRES_NEWJOOMLA') )
				{
				$indexphp="index.php";
				$format="&tmpl=component";
				}
			else
				{
				if ($jomresConfig_sef=="1")
					$indexphp=$jomresConfig_live_site."/index2.php";
				else
					$indexphp="index2.php";
				}
			}
		else
			$indexphp="";
		$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width='.$width.',height='.$height.',directories=no,location=no';
		
		if ( $jrConfig['useSSLinBookingform'] == 1 && $_REQUEST['task'] == "editGuest" )
			{
			$jomresConfig_live_site = str_replace("http://","https://",$jomresConfig_live_site);
			}
		$thelink =$jomresConfig_live_site.$link;
		$thelink="<a href=\"javascript:void window.open('".$indexphp.$link.$format."', 'win2', '".$status."');\" rel=\"nofollow\" title=\"\">".$text."</a>";
		}
	else
		{
		if ($isLocalPage)
			$indexphp=$jomresConfig_live_site."/index.php";
		$thelink='<a href="'.jomresURL($indexphp.$link).'">'.$text.'</a>';
		}
	$thelink=str_replace("&amp;","&",$thelink);
	$thelink=str_replace("&","&amp;",$thelink);
	return $thelink;
	}

/**
#
 * Calls the show availability function, which in turn triggers the show availability event trigger. Exists for historical reasons
#
 */
function showSingleRoomPropAvl($property_uid)
	{
	$query="SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$property_uid."' LIMIT 1";
	$roomList = doSelectSql($query);
	foreach ($roomList as $room)
		{
		$roomUid=$room->room_uid;
		}
	showAvailability($roomUid,"",$property_uid,12);
	}

/**
#
 * Creates and echos the calendar month dropdown
#
 */
function showCalandarMonthDropdown()
	{
	global $mosConfig_locale,$Itemid;
	setlocale(LC_ALL, $mosConfig_locale );
	$currentMonth=date("Y/m/d");
	$dateElements=explode("/",$currentMonth);
	$nextMonth=strftime("%B %Y", mktime(0, 0, 0,$dateElements[1],1,$dateElements[0]));
	$nm= mktime(0, 0, 0,$dateElements[1],1,$dateElements[0]);
	echo "<table><tr>";
	for ($i=1;$i<=16;$i++)
		{
		$link="<td><a href=\"".sefRelToAbs("index.php?option=com_jomres&Itemid=$Itemid&requestedMonth=$nm")."\"><font size=\"1\">|".$nextMonth."</font></a></td>";
		echo $link;
		$nextMonth=strftime("%B %Y", mktime(0, 0, 0,$dateElements[1]+$i,1,$dateElements[0]));
		$nm= mktime(0, 0, 0,$dateElements[1]+$i,1,$dateElements[0]);
		if ($i%8==0 and $i<16)
			echo "</tr><tr>";
		}
	echo "</tr></table>";
	}

/**
#
 * Called by showSingleRoomPropAvl. Shows property availability calendars
#
 */
function showAvailability($roomUid,$requestedDate="",$property_uid,$showFullYear=12)
	{
	global $MiniComponents;
	$componentArgs=array();
	$componentArgs['roomUid']=$roomUid;
	$componentArgs['requestedDate']=$requestedDate;
	$componentArgs['property_uid']=$property_uid;
	$componentArgs['showFullYear']=$showFullYear;
	$MiniComponents->triggerEvent('0017',$componentArgs); // Availability calendar
	}

/**
#
 * Triggers the property header event/mini-component
#
 */
function property_header($property_uid)
	{
	global $MiniComponents;
	$MiniComponents->triggerEvent('01070',array('property_uid'=>$property_uid) ); // Call property header mini-component
	}

/**
	#
 * Sends emails to admins
#
*/
function sendAdminEmail($subject,$message)
	{
	global $jomresConfig_mailfrom, $jomresConfig_fromname,$acl;
	$m="";
	if (is_array($message) && count($message)>0 )
		{
		foreach ($message as $k=>$v)
			{
			$m.=$k. ' - '.$v.'\n';
			}
		$message=$m;
		}
	if (is_object($message) )
		{
		$m=print_r($message);
		$message=$m;
		}
	$message .= "\n\n\nPost details follow (may not be applicable to email) ";
	foreach ($_POST as $key => $value) { $message .= "\n$key: $value"; }
	if ($jomresConfig_mailfrom != "" && $jomresConfig_fromname != "")
		{
		$adminName2 = $jomresConfig_fromname;
		$adminEmail2 = $jomresConfig_mailfrom;
		}
	else
		{
		$query = "SELECT name, email FROM #__users WHERE LOWER( usertype ) = 'superadministrator' OR LOWER( usertype ) = 'super administrator'";
		$rows=doSelectSql($query);

		$row2			= $rows[0];
		$adminName2		= $row2->name;
		$adminEmail2	= $row2->email;
		}
	// get superadministrators id
	if (defined('_JOMRES_NEWJOOMLA') )
		{
		$authorize =& JFactory::getACL();
		$admins = $authorize->get_group_objects( 25, 'ARO' );
		}
	else
		$admins = $acl->get_group_objects( 25, 'ARO' );
	foreach ( $admins['users'] AS $id )
		{
		$query = "SELECT email, sendEmail FROM #__users WHERE id = ".(int)$id."" ;
		$rows=doSelectSql($query);
		$row = $rows[0];
		if ($row->sendEmail)
			{
			jomresMailer($adminEmail2, $adminName2, $row->email, $subject, $message);
			}
		}
	}


/**
#
 * Creates the javascript calendar language selection dropdown
#
 */
function createJSLanguageDropdown()
	{
	global $mrConfig;
	$currentLangFile=$mrConfig['jscalendarLangfile'];
	$calendarFileNamesArray=array("calendar-en.js","calendar-af.js","calendar-al.js","calendar-bg.js","calendar-big5.js","calendar-big5-utf8.js","calendar-br.js","calendar-ca.js","calendar-cs-utf8.js","calendar-cs-win.js","calendar-da.js","calendar-de.js","calendar-du.js","calendar-el.js","calendar-es.js","calendar-fi.js","calendar-fr.js","calendar-he-utf8.js","calendar-hr.js","calendar-hr-utf8.js","calendar-hu.js","calendar-it.js","calendar-jp.js","calendar-ko.js","calendar-ko-utf8.js","calendar-lt.js","calendar-lt-utf8.js","calendar-lv.js","calendar-nl.js","calendar-no.js","calendar-pl.js","calendar-pl-utf8.js","calendar-pt.js","calendar-ro.js","calendar-ru.js","calendar-ru_win_.js","calendar-si.js","calendar-sk.js","calendar-sp.js","calendar-sv.js","calendar-tr.js","calendar-zh.js","cn_utf8.js");
	$listTxt = '<span><select id="cfg_jscalendarLangfile" class="inputbox" name="cfg_jscalendarLangfile">';
	//$listTxt="<select class=\"inputbox\" name=\"cfg_jscalendarLangfile\">";
	foreach ($calendarFileNamesArray as $fileName)
		{
		$selected="";
		if ($fileName == $currentLangFile)
			$selected="selected";
		$listTxt .= "<option ".$selected." value=\"".$fileName."\" >".$fileName."</option>/n";
		}
	$listTxt .="</select></span>";
	return $listTxt;
	}

/**
#
 *  Creates the javascript calendar css selection dropdown
#
 */
function createJSCSSDropdown()
	{
	global $mrConfig;
	$currentCSSFile=$mrConfig['jscalendarCSSfile'];
	$calendarFileNamesArray=array("calendar-win2k-cold-2.css","calendar-blue2.css","calendar-blue.css","calendar-brown.css","calendar-green.css","calendar-system.css","calendar-tas.css","calendar-win2k-1.css","calendar-win2k-2.css","calendar-win2k-cold-1.css");
	$listTxt = '<span><select id="cfg_jscalendarCSSfile" class="inputbox" name="cfg_jscalendarCSSfile">';
	//$listTxt="<select class=\"inputbox\" name=\"cfg_jscalendarCSSfile\">";
	foreach ($calendarFileNamesArray as $fileName)
		{
		$selected="";
		if ($fileName == $currentCSSFile)
			$selected="selected";
		$listTxt .= "<option ".$selected." value=\"".$fileName."\" >".$fileName."</option>/n";
		}
	$listTxt .="</select></span>";
	return $listTxt;
	}

	/**
	 * This method creates a standard cpanel button
	 *
	 * @param unknown_type $link
	 * @param unknown_type $image
	 * @param unknown_type $text
	 */
	function _quickiconButton( $link, $image, $text, $path='/administrator/images/' ) {
		global $jomresConfig_live_site;
		?>
		<div style="padding:0 2px 0 0;text-align:center;vertical-align:middle;float:left;width:120px;height:110px;">
			<div class="icon" align="center">
				<a href="<?php echo $link; ?>" style="text-decoration:none;">
				<img src="<?php echo $jomresConfig_live_site.$path.$image;?>" border="0"><br />
				<span><?php echo $text; ?></span>
				</a>
			</div>
		</div>
		<?php
	}
?>