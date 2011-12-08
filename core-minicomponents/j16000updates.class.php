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

class j16000updates
	{
	function j16000updates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		if (function_exists('jomres_getSingleton'))
			$MiniComponents =jomres_getSingleton('mcHandler');
		else
			global $MiniComponents,$jomresConfig_live_site;
		$jomresConfig_offline			= true;
		if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'defines.php') )
			{
			$CONFIG = new JConfig();
			$jomresConfig_offline			= $CONFIG->offline;
			}
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$this->updateServer="http://updates.jomres4.net";
		$this->updateFolder=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."updates";
		$this->overwriteAllowed = true;
		$this->movedFileLog = array();
		$this->debugging = false;
		$this->test_download = false;

		$configfile = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."jomres_config.php";  // This is just to pull in the Jomres version from mrConfig
		include($configfile);
		$thisVersion=$mrConfig['version'];
		echo "<br /><br /><br /><center><h2>This Jomres version: $thisVersion</h2></center><br />";

		$this->ftp_user_name = 'userid';
		$this->ftp_user_pass = 'password';
		$this->ftp_server = 'localhost';
		$this->ftp_root = JOMRESCONFIG_ABSOLUTE_PATH;
		if (!$this->checkUpdateDirectory())
			{
			echo "Can't create update folder $this->updateFolder";
			return;
			}
		if (!isset($_REQUEST['ftp_user_name']))
			{
			if (!$this->checkJomresDirectories())
				{
				$detect_os = strtoupper($_SERVER["SERVER_SOFTWARE"]); // converted to uppercase
				$pos = strpos($detect_os, "WIN32");
				$IIS = strpos($detect_os, "IIS");
				if ($pos === false && $IIS === false)
					{
					echo "Error, it's not possible to upgrade Jomres on this server as one or more files is not writable by php. It's likely that files were uploaded via ftp and are owned by the ftp user, not the web server's user. You are advised to change ownership of the files to the web server's user then try again.<br/>";
					}
				else
					{
					// We're on a win box
					echo "Error, it's not possible to upgrade Jomres on this server as one or more files is not writable by php. <br/>";
					}

				foreach ($this->directoryScanResults as $f)
					{
					echo $f."<br />";
					}
				return;
				}
			}
		else
			{
			$this->ftp_user_name = jomresGetParam( $_REQUEST, 'ftp_user_name', '' );
			$this->ftp_user_pass = jomresGetParam( $_REQUEST, 'ftp_user_pass', '' );
			$this->ftp_server = jomresGetParam( $_REQUEST, 'ftp_server', '' );
			$this->checkJomresDirectories();
			if (!$this->checkJomresDirectories())
				{
				echo "Error, it's not possible to upgrade Jomres on this server as one or more files is not writable by php. It's likely that files were uploaded via ftp and are owned by the ftp user, not the web server's user. You are advised to change ownership of the files to the web server's user then try again.<br/>";
				}
			}
		if (!isset($_REQUEST['encoding']) && !isset($_REQUEST['ftp_user_name']) )
			{
			$this->getUpdateInfo();
			}
		else if (!isset($_REQUEST['ftp_user_name']))
			{
			if (function_exists('jomres_getSingleton'))
				$liveSite="&live_site=".urlencode(get_showtime('live_site'));
			else
				$liveSite="&live_site=".$jomresConfig_live_site;

			$requiredEncoding=jomresGetParam( $_REQUEST, 'encoding', '' );
			$requiredVersion=jomresGetParam( $_REQUEST, 'version', '' );

			$updateFile = $this->updateServer."/index.php?encoding=".$requiredEncoding."&version=".$requiredVersion.$liveSite;
			$newfilename=$this->updateFolder."/jomres.zip";

			$out = fopen($newfilename, 'wb');
			if ($out == FALSE)
				{
				print "Couldn't create new file $newfilename. Possible file permission problem?<br/>";
				exit;
				}
			$curl_handle = curl_init($updateFile);
			curl_setopt($curl_handle, CURLOPT_FILE, $out);
			curl_setopt($curl_handle, CURLOPT_HEADER, 0);
			curl_setopt($curl_handle, CURLOPT_URL, $updateFile);
			curl_exec($curl_handle);
			curl_close($curl_handle);
			fclose($out);
			curl_close($curl_handle);
			fclose($out);

			if (file_exists($newfilename) && filesize($newfilename)>0 )
				echo "Got it<br />";
			else
				{
				echo "Something went wrong downloading the update files. Quitting";
				return;
				}
			require_once (JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."dUnzip2.inc.php");

			$zip = new dUnzip2($newfilename);
			// Activate debug
			$zip->debug = $this->debugging;
			// Unzip all the contents of the zipped file to this folder
			$zip->getList();
			if (mkdir($this->updateFolder.JRDS."unpacked"))
				{
				$zip->unZipAll($this->updateFolder.JRDS."unpacked");
				if (!$this->test_download)
					$this->dirmv($this->updateFolder.JRDS."unpacked".JRDS, JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS, $this->overwriteAllowed, $funcloc = "/");

				if (function_exists('jomres_getSingleton'))
					echo "Completed upgrade. Please ensure that you visit <a href=\"".get_showtime('live_site')."/jomres/install_jomres.php\">install_jomres.php</a> to complete any database changes that may be required";
				else
					echo "Completed upgrade. Please ensure that you visit <a href=\"".$jomresConfig_live_site."/jomres/install_jomres.php\">install_jomres.php</a> to complete any database changes that may be required";
				if ($this->debugging)
					{
					echo "<br/><br/><br/><br/><br/><br/>";
					echo "UPGRADE LOG<br/>";
					foreach ($this->movedFileLog as $record)
						echo $record;
					}
				jomresRedirect(get_showtime('live_site')."/jomres/install_jomres.php", '');
				}
			else
				echo "Error creating unpack folder";
			}
		}

		
	function getUpdateInfo()
		{
		print queryUpdateServer("updates_available.php","","updates");
		}

	function checkJomresDirectories()
		{
		$this->directoryScanResults=array();
		$jomresFrontDir = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres";
		$files_array = $this->recur_dir($jomresFrontDir);
		if (count($this->directoryScanResults) > 0)
			{
			return false;
			}
		return true;
		}

	function is_removeable($dir)
		{
		$folder = opendir($dir);
		while($file = readdir( $folder ))
		if($file != '.' && $file != '..' && ( !is_writable(  $dir.JRDS.$file  ) || (  is_dir(	$dir.JRDS.$file	) && !$this->is_removeable(	$dir.JRDS.$file	)  ) ))
			{
			 closedir($dir);
			 return false;
			}
		closedir($dir);
		return true;
		}

	function recur_dir($dir,$getWritablesFiles=false)
		{
		$dirlist = opendir($dir);
		while ($file = readdir ($dirlist))
		{
			if ($file != '.' && $file != '..')
			{

			$newpath = $dir.'/'.$file;
			if ($getWritablesFiles)
				{
				if (is_file($newpath) && is_writable($newpath) )
					$this->directoryScanResults[] = $dir.JRDS.$file;
				}
			else
				{
				if (is_file($newpath) && !is_writable($newpath) )
					$this->directoryScanResults[] = $dir.JRDS.$file;
				}
			$level = explode(JRDS,$newpath);
			if (!strstr($newpath,".svn" ) )
				{
				if (is_dir($newpath) )
					{
					$mod_array[] = array(
							'level'=>count($level)-1,
							'path'=>$newpath,
							'name'=>end($level),
							'kind'=>'dir',
							'mod_time'=>filemtime($newpath),
							'content'=>$this->recur_dir($newpath));
					}
				else
					{
					$mod_array[] = array(
							'level'=>count($level)-1,
							'path'=>$newpath,
							'name'=>end($level),
							'kind'=>'file',
							'mod_time'=>filemtime($newpath),
							'size'=>filesize($newpath));
					}
				}
			}
		}
		closedir($dirlist);
		return $mod_array;
		}

	function checkUpdateDirectory()
		{
		if (!is_dir($this->updateFolder) )
			{
			if (!mkdir($this->updateFolder))
				{
				echo "Error, unable to make folder ".$this->updateFolder." automatically therefore cannot store updates downloaded from the update server. Please create the folder manually and ensure that it's writable by the web server";
				return false;
				}
			}
		else
			{
			if (!is_writable($this->updateFolder))
				return false;
			}
		$this->emptyDir($this->updateFolder);
		return true;
		}

	// http://www.php.net/manual/en/function.unlink.php#79940
	function emptyDir($dir)
		{
		if(!$dh = @opendir($dir)) return;
		while (false !== ($obj = readdir($dh)))
			{
			if($obj=='.' || $obj=='..') continue;
			if (!@unlink($dir.JRDS.$obj)) $this->emptyDir($dir.JRDS.$obj, true);
			}
		closedir($dh);
		if ($dir != $this->updateFolder)
			@rmdir($dir);
		}

	function chmod_open()
		{
		$conn_id = ftp_connect($this->ftp_server);
		$login_result = ftp_login($conn_id, $this->ftp_user_name, $this->ftp_user_pass);
		if (!$login_result)
			{
			echo "Could not log in using the supplied details ".$this->ftp_user_name.' '.$this->ftp_user_pass;
			}
		return $conn_id;
		}

	function chmod_file($conn_id, $permissions, $path)
		{

		if (ftp_site($conn_id, 'CHMOD ' . $permissions . ' ' . $this->ftp_root . $path) !== false)
			{
			return TRUE;
			}
		else
			{
			return FALSE;
			}
		}
	// http://www.php.net/manual/en/function.rename.php#61152
	function dirmv($source, $dest, $overwrite = false, $funcloc = NULL)
		{
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
								echo '<font color="red">File ('.$path.') could not be moved, likely a permissions problem.</font><br/>';
								}
							}
						else
							if($overwrite)
								{
								if(!@unlink( $path2))
									{
									echo 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>';
									}
								else
									{
									if(!@rename( $path,  $path2))
										{
										echo '<font color="red">File ('.$path.') could not be moved while overwritting, likely a permissions problem.</font><br/>';
										}
									else
										$this->movedFileLog[]= "Moved ".$path."<br/> to ".$path2."<br/>";
									}
								}
							else
								echo "Not allowed to overwrite" .$path2."<br/>";
						}
					elseif(is_dir( $path))
						{
						$this->dirmv($source, $dest, $overwrite, $funcloc . $file . JRDS); //recurse!
						rmdir( $path);
						}
					}
				}
			closedir($handle);
			}
		//echo "Finished upgrade <br/>";
		} // end of dirmv()

	function chmod_close($conn_id)
		{
		ftp_close($conn_id);
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
	