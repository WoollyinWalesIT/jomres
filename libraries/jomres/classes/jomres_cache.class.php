<?php
/**
#
 * xxxxxxxxxxxxxxxxxx
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class jomres_cache
	{
	/**
	#
	 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table
	#
	 */
	function jomres_cache($key="",$property_uid=0,$userSpecific=false)
		{
		global $jrConfig;
		$this->useCaching = $jrConfig['useCaching'];
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
		global $thisJRUser;
		if ($userSpecific)
			$this->user_id = $thisJRUser->userid;
		else
			$this->user_id = 0;
		}

	function generateFilename()
		{
		global $thisJRUser,$jomresConfig_secret;
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
		$this->filename =$prefix."-"."-".$this->key.$registeredFlag."-".$receptionistFlag."-".$managerFlag."-".$superPropertyManagerFlag.".txt";
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
		global $jomresConfig_secret;
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
		global $jomresConfig_secret;
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