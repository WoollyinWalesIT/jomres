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


/**
#
 * Puts the colour scheme css file into the header
 #
* @package Jomres
#
 */
class j99999pack_javascript
	{
	/**
	#
	 * Constructor: Puts the colour scheme css file into the header
	#
	 */
	function j99999pack_javascript()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (defined('JOMRES_NOHTML'))
			return;

		if (defined("JOMRES_JS")) // This has already been run, let's not do it again
			return;
		define("JOMRES_JS",1);
		
		
		/////// JAVASCRIPT
		
		$cached_js_file_abs = get_showtime('js_cache_path');
		$cached_js_filename = get_showtime('js_cache_filename');
		$jomres_js_cache = get_showtime('js_cache');

		if (get_showtime('javascript_caching_enabled'))
			{
			file_put_contents ($cached_js_file_abs.$cached_js_filename,$jomres_js_cache);
			}
		//else { echo "oops, didn't make any output";exit;}
		
		$cached_js_file_livesite = 'jomres/temp/javascript_css_cache/';
		if (!jomres_cmsspecific_areweinadminarea())
			{
			$version = "?v".$this->check_watch_file("js",get_showtime('js_cache_identifier'),$cached_js_file_abs.$cached_js_filename);
			jomres_cmsspecific_addheaddata("javascript",$cached_js_file_livesite,$cached_js_filename.$version,true);
			}
		
		/////// CSS
		
		$cached_css_file_abs = get_showtime('css_cache_path');
		$cached_css_filename = get_showtime('css_cache_filename');
		$jomres_css_cache = get_showtime('css_cache');
		if (get_showtime('css_caching_enabled'))
			{
			file_put_contents ($cached_css_file_abs.$cached_css_filename,$jomres_css_cache);
			}
		//else { echo "oops, didn't make any output";exit;}
		
		$cached_css_file_livesite = 'jomres/temp/javascript_css_cache/';
		if (!jomres_cmsspecific_areweinadminarea())
			{
			$version = "?v".$this->check_watch_file("css",get_showtime('css_cache_identifier'),$cached_css_file_abs.$cached_css_filename);
			jomres_cmsspecific_addheaddata("css",$cached_css_file_livesite,$cached_css_filename.$version,true);
			}
		}

	// The purpose of the exercise here is to create a watch file, based on the identifier of the user,
	// in which we'll store an object which has the md5 hash of the file we're watching, plus a version. If the md5 hash of the file has changed
	// we'll increment the version. The version is returned to the calling method and appended to the javascript/css file. This means that if the javascript changes, the user will get an updated version of that file (the browser will not use the cached version, instead it'll use the newer one).
	function check_watch_file($type="js",$identifier,$watched_file)
		{
		$watch_filename = $identifier."_".$type."_watchfile.php";
		if (type=="js")
			$abs_path = get_showtime('js_cache_path');
		else
			$abs_path = get_showtime('css_cache_path');
		
		$current_filehash = md5_file($watched_file);
		
		$obj = json_decode(file_get_contents ($abs_path.$watch_filename));
		
		if (!is_object($obj)) // The watch object hasn't been created yet
			{
			$obj = new stdClass;
			$obj->watched_file_hash=$current_filehash;
			$obj->version = 1;
			file_put_contents ($abs_path.$watch_filename,json_encode($obj));
			
			}
		else
			{
			$old_hash = $obj->watched_file_hash;
			if ($old_hash != $current_filehash) // The file's hash has changed, we'll write the new hash, and increment the version.
				{
				$obj->watched_file_hash=$current_filehash;
				$obj->version++;
				file_put_contents ($abs_path.$watch_filename,json_encode($obj));
				}
			else // No change
				{
				
				// Do we really need to fput here?
				
				//file_put_contents ($abs_path.$watch_filename,json_encode($obj));
				}
			}
		return $obj->version;
		}
	
	function _remove_old_files()
		{
		$d = @dir($this->session_directory);
		$docs = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if(is_file($this->session_directory.$filename) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
					{
					$docs[] =$filename;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				foreach ($docs as $f)
					{
					$last_modified = filemtime  ( $this->session_directory."/".$f);
					$seconds_timediff = time() - $last_modified;
					//echo $seconds_timediff;
					if ($seconds_timediff>$this->timeout)
						unlink  ($this->session_directory."/".$f);
					}
				}
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
		{
		return null;
		}
	}
?>