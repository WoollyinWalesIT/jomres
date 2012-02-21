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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (defined('JOMRES_NOHTML'))
			return;

		if (defined("JOMRES_JS")) // This has already been run, let's not do it again
			return;
		define("JOMRES_JS",1);

		$cached_js_file_abs = get_showtime('js_cache_path');
		$cached_js_filename = get_showtime('js_cache_filename');
		$jomres_js_cache = get_showtime('js_cache');

		if (get_showtime('javascript_caching_enabled'))
			{
			$fp=fopen($cached_js_file_abs.$cached_js_filename,'w');
			fwrite($fp,$jomres_js_cache);
			fclose($fp);
			}
		//else { echo "oops, didn't make any output";exit;}

		$cached_css_file_abs = get_showtime('css_cache_path');
		$cached_css_filename = get_showtime('css_cache_filename');
		$jomres_css_cache = get_showtime('css_cache');
		if (get_showtime('css_caching_enabled'))
			{
			$fp=fopen($cached_css_file_abs.$cached_css_filename,'w');
			fwrite($fp,$jomres_css_cache);
			fclose($fp);
			}
		//else { echo "oops, didn't make any output";exit;}
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