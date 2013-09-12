<?php
/**
* Core file
*
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright    2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_array_cache {

	/**
	* The path to the cache file folder
	*
	* @var string
	*/
	private $_cachepath = 'cache/';
	
	/**
	* The name of the default cache file
	*
	* @var string
	*/
	private $_cachename = 'jomres';
	
	/**
	* The cache file extension
	*
	* @var string
	*/
	private $_extension = '.cache';
	
	/**
	* Caching enabled/disabled
	*
	* @var bool
	*/
	private $_useCaching = false;
	
	/**
	* Cached data
	*
	* @var array
	*/
	private $_cachedData = array();
	
	/**
	* File loaded flag, to prevent reading the file more than once.
	*
	* @var bool
	*/
	private $_fileLoaded = false;
	
	/**
	* Default constructor
	*
	* @param string|array [optional] $config
	* @return void
	*/
	public function __construct($config = null)
		{
		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();
		if (!isset($jrConfig[ 'useArrayCaching' ]))
			{
			$jrConfig[ 'useArrayCaching' ] = false;
			}
		$this->_useCaching  = (bool)$jrConfig[ 'useArrayCaching' ];
		if (true === isset($config)) 
			{
			if (is_string($config)) 
				{
				$this->setCache($config);
				} 
			elseif (is_array($config)) 
				{
				$this->setCache($config['name']);
				$this->setCachePath($config['path']);
				$this->setExtension($config['extension']);
				}
			}
		else
			$this->setCachePath(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS);
		$this->lang=$this->get_cache_lang();
		$this->_loadCache();
		//$this->eraseExpired();
		}

	/**
	* Check whether data accociated with a key
	*
	* @param string $key
	* @return boolean
	*/
	public function isCached($key)
		{
		return isset($this->_cachedData[$key]['data']);
		}

	/**
	* Store data in the cache
	*
	* @param string $key
	* @param mixed $data
	* @param integer [optional] $expiration
	* @return object
	*/
	public function store($key, $data, $expiration = 0)
		{
		if (!$this->_useCaching) return false;
		$storeData = array(
			'time'   => time(),
			'expire' => $expiration,
			'data'   => $data
			);
		if (true === is_array($this->_cachedData)) 
			{
			$this->_cachedData[$key] = $storeData;
			}
		else
			$this->_cachedData = array($key => $storeData);
		$cacheData = json_encode($this->_cachedData);
		file_put_contents($this->getCacheDir(), $cacheData);
		unset($cacheData);
		return $this;
		}

	/**
	* Retrieve cached data by its key
	* 
	* @param string $key
	* @param boolean [optional] $timestamp
	* @return string
	*/
	public function retrieve($key, $timestamp = false)
		{
		if (!$this->_useCaching) return false;
		(false === $timestamp) ? $type = 'data' : $type = 'time';
		if (!isset($this->_cachedData[$key][$type]))
			{
			$this->_cachedData[$key][$type] = null;
			}
		return $this->_cachedData[$key][$type];
		}

	/**
	* Retrieve all cached data
	* 
	* @param boolean [optional] $meta
	* @return array
	*/
	public function retrieveAll($meta = false) 
		{
		if (!$this->_useCaching) return false;
		if ($meta === false) 
			{
			$results = array();
			if ($this->_cachedData) 
				{
				foreach ($cachedData as $k => $v)
					{
					$results[$k] = $v['data'];
					}
				}
			return $results;
			} 
		else
			return $this->_cachedData;
		}

	/**
	* Erase cached entry by its key
	* 
	* @param string $key
	* @return object
	*/
	public function erase($key) 
		{
		if (!$this->_useCaching) return false;
		if (true === is_array($this->_cachedData)) 
			{
			if (true === isset($this->_cachedData[$key])) 
				{
				unset($this->_cachedData[$key]);
				$cacheData = json_encode($this->_cachedData);
				file_put_contents($this->getCacheDir(), $cacheData);
				}
			}
		return $this;
		}

	/**
	* Erase all expired entries
	* 
	* @return integer
	*/
	public function eraseExpired()
		{
		if (!$this->_useCaching) return false;
		if (true === is_array($this->_cachedData))
			{
			$counter = 0;
			foreach ($this->_cachedData as $key => $entry)
				{
				if (true === $this->_checkExpired($entry['time'], $entry['expire'])) 
					{
	 				unset($this->_cachedData[$key]);
	  				$counter++;
					}
				}
			if ($counter > 0) 
				{
				$cacheData = json_encode($cacheData);
				file_put_contents($this->getCacheDir(), $cacheData);
				}
			return $counter;
			}
		}

	/**
	* Erase all cached entries
	* 
	* @return object
	*/
	public function eraseAll() 
		{
		if (!$this->_useCaching) return false;
		if (count($this->_cachedData)>0)
			{
			$cacheDir = $this->getCacheDir();
			if (true === file_exists($cacheDir)) 
				{
				$cacheFile = fopen($cacheDir, 'w');
				fclose($cacheFile);
				}
			$this->_cachedData = array();
			}
		foreach (glob($this->getCachePath()."*".$this->getExtension()) as $filename)
			{
			if($filename!=$this->getCacheDir())
				{
				$cacheFile = fopen($filename, 'w');
				fclose($cacheFile);
				}
			}
		return $this;
		}

	/**
	* Load appointed cache
	* 
	* @return mixed
	*/
	private function _loadCache() 
		{
		if (!$this->_fileLoaded)
			{
			if (file_exists($this->getCacheDir()))
				{
				$file = file_get_contents($this->getCacheDir());
				$this->_cachedData=json_decode($file, true);
				$this->_fileLoaded=true;
				unset($file);
				}
			else
				return false;
			}
		return true;
		}

	/**
	* Get the cache directory path
	* 
	* @return string
	*/
	public function getCacheDir() 
		{
		if (true === $this->_checkCacheDir())
			{
			$filename = $this->getCache();
			$filename = preg_replace('/[^0-9a-z\.\_\-]/i', '', strtolower($filename));
			return $this->getCachePath() . $this->_getHash($filename) . $this->getExtension();
			}
		}

	/**
	* Get the filename hash
	* 
	* @return string
	*/
	private function _getHash($filename)
		{
		return sha1($filename);
		}

	/**
	* Check whether a timestamp is still in the duration 
	* 
	* @param integer $timestamp
	* @param integer $expiration
	* @return boolean
	*/
	private function _checkExpired($timestamp, $expiration)
		{
		$result = false;
		if ($expiration !== 0) 
			{
			$timeDiff = time() - $timestamp;
			($timeDiff > $expiration) ? $result = true : $result = false;
			}
		return $result;
		}

	/**
	* Check if a writable cache directory exists and if not create a new one
	* 
	* @return boolean
	*/
	private function _checkCacheDir()
		{
		if (!is_dir($this->getCachePath()) && !mkdir($this->getCachePath(), 0775, true))
			{
			throw new Exception('Unable to create cache directory ' . $this->getCachePath());
			} 
		elseif (!is_readable($this->getCachePath()) || !is_writable($this->getCachePath())) 
			{
			if (!chmod($this->getCachePath(), 0775)) 
				{
				throw new Exception($this->getCachePath() . ' must be readable and writeable');
				}
			}
		return true;
		}
	
	/**
	* Get the filename hash
	* 
	* @return string
	*/
	private function _refreshCache()
		{
		$this->_cachedData = array();
		$this->_loadCache();
		return $this;
		}

	/**
	* Cache path Setter
	* 
	* @param string $path
	* @return object
	*/
	public function setCachePath($path)
		{
		$this->_cachepath = $path;
		return $this;
		}

	/**
	* Cache path Getter
	* 
	* @return string
	*/
	public function getCachePath() 
		{
		return $this->_cachepath;
		}

	/**
	* Cache name Setter
	* 
	* @param string $name
	* @return object
	*/
	public function setCache($name)
		{
		$this->_cachename = $name;
		return $this;
		}
	
	/**
	* Cache name Getter
	* 
	* @return void
	*/
	public function getCache() 
		{
		return $this->_cachename.$this->lang;
		}
	
	/**
	* Cache language Getter
	* 
	* @return string
	*/
	public function get_cache_lang()
		{
		$cache_lang=get_showtime('lang');
		if (jomres_cmsspecific_areweinadminarea())
			{
			if ( isset( $_POST[ 'jomreslang' ] ) )
				{
				$cache_lang = (string) RemoveXSS( jomresGetParam( $_POST, 'jomreslang', "" ) );
				}
			elseif ( isset( $_GET[ 'jomreslang' ] ) )
				{
				$cache_lang = (string) RemoveXSS( jomresGetParam( $_GET, 'jomreslang', "" ) );
				}
			}
		return $cache_lang;
		}

	/**
	* Cache file extension Setter
	* 
	* @param string $ext
	* @return object
	*/
	public function setExtension($ext)
		{
		$this->_extension = $ext;
		return $this;
		}

	/**
	* Cache file extension Getter
	* 
	* @return string
	*/
	public function getExtension()
		{
		return $this->_extension;
		}
	
	}