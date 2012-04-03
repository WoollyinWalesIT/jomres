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

class jomres_cache
	{
	/**
	#
	 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table
	#
	 */
	//function jomres_cache($args)
	function jomres_cache($key="",$property_uid=0,$userSpecific=false)
		{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$this->useCaching = $jrConfig['useCaching'];
		$this->lang = get_showtime('lang');
		$this->cache_folder=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS;
		$this->expiration = 3600;
		if (strlen($key)>0 && $this->useCaching == "1")
			{
			$this->setKey($key);
			$this->setPropertyUid($property_uid);
			$this->setUserID($userSpecific);
			$this->generateFilename();
			}
		}

	function setKey($key)
		{
		$this->key = $key;
		}
		
	function setPropertyUid($property_uid)
		{
		if ($property_uid>0)
			$this->property_uid = $property_uid;
		else
			$this->property_uid = 0;
		}
		
	function setUserID($userSpecific)
		{
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if ($userSpecific)
			$this->user_id = $thisJRUser->userid;
		else
			$this->user_id = 0;
		}

	function generateFilename()
		{
		$jomresConfig_secret = get_showtime('secret');
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$registeredFlag = "0";
		$receptionistFlag = "0";
		$managerFlag = "0";
		$superPropertyManagerFlag = "1";

		if ($thisJRUser->userIsRegistered)
			$registeredFlag = "0";
		if ($thisJRUser->accesslevel == "1")
			$receptionistFlag = "1";
		if ($thisJRUser->accesslevel == "2")
			$managerFlag = "1";
		if ($this->superPropertyManager)
			$superPropertyManagerFlag = "1";
		if ($this->user_id>0)
			$prefix = md5($jomresConfig_secret.$this->user_id);
		else
			$prefix = md5($jomresConfig_secret.$this->property_uid);
		/*
		if ($this->user_id>0)
			$prefix = $jomresConfig_secret.$this->user_id;
		else
			$prefix = $jomresConfig_secret.$this->property_uid;
		*/
		$this->filename =$prefix."-"."-".$this->key.$registeredFlag."-".$receptionistFlag."-".$managerFlag."-".$superPropertyManagerFlag."-".$this->lang.".txt";
		}

	function readCache()  
		{
		if ($this->useCaching == "0")
			return false;
		if ( !is_dir($this->cache_folder) OR !is_writable($this->cache_folder))
			return false;

		$cache_path = $this->cache_folder.$this->filename;

		if (!@file_exists($cache_path))
			return false;

		if (filemtime($cache_path) < (time() - $this->expiration))
			return false;


		if (!$fp = @fopen($cache_path, 'rb'))
			return false;

		flock($fp, LOCK_SH);

		$cache = '';

		if (filesize($cache_path) > 0)
			$cache = unserialize(fread($fp, filesize($cache_path)));
		else

			$cache = NULL;

		flock($fp, LOCK_UN);
		fclose($fp);
		return $cache;
		}
		
	function setCache($data)
		{
		if ( !is_dir($this->cache_folder) OR !is_writable($this->cache_folder))
			return false;

		$cache_path = $this->cache_folder.$this->filename;
		//echo "Writing ".$cache_path;
		if ( ! $fp = fopen($cache_path, 'wb'))
			return false;

		if (flock($fp, LOCK_EX))
			{
			fwrite($fp, serialize($data));
			flock($fp, LOCK_UN);
			}
		else
			{
			return false;
			}
		fclose($fp);
		return true;
		}

		
	function trashCacheForProperty($property_uid)
		{
		$jomresConfig_secret = get_showtime('secret');
		if ( !is_dir($this->cache_folder) OR !is_writable($this->cache_folder))
			return false;
		$searchElement = md5($jomresConfig_secret.$property_uid);
		//echo $searchElement."<br>";
		$dirContents = $this->getCacheDirectoryContents();
		foreach ( $dirContents as $filename)
			{
			$explodedFilename = explode("--",$filename);
			$prefix = $explodedFilename[0];
			//echo $prefix."<br>";
			if ($prefix == $searchElement)
				{
				//echo "deleting".$this->cache_folder.$filename."<br>";
				unlink($this->cache_folder.$filename);
				}
			}
		}
		
	function trashCacheForUser($user_id)
		{
		$jomresConfig_secret = get_showtime('secret');
		if ( !is_dir($this->cache_folder) OR !is_writable($this->cache_folder))
			return false;
					
		$searchElement = md5($jomresConfig_secret.$user_id);
		//$searchElement = $jomresConfig_secret.$user_id;
		$dirContents = $this->getCacheDirectoryContents();
		foreach ( $dirContents as $filename)
			{
			$explodedFilename = explode("--",$filename);
			$prefix = $explodedFilename[0];
			if ($prefix == $searchElement)
				{
				//echo "deleting".$this->cache_folder.$filename."<br>";
				unlink($this->cache_folder.$filename);
				}
			}
		}
		
	function getCacheDirectoryContents()
		{
		$d = @dir($this->cache_folder);
		$docs = array();
		if($d)
			{
			while (false !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.' )
					{
					$docs[] =$entry;
					}
				}
			$d->close();
			}
		return $docs;
		}
	}


?>