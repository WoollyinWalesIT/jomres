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
		$use_js_cache=true;
		$jomres_js_cache = get_showtime('js_cache');
		$cached_js_file_abs = get_showtime('js_cache_path');
		$cached_js_filename = get_showtime('js_cache_filename');
		$cached_js_file_livesite = get_showtime('js_cache_livesite');
		
		if (is_null($jomres_js_cache) || strlen($jomres_js_cache) ==0)  // In effect, no files have been chosen to be cached, there's no point in continuing.
			return;
		
		if ($use_js_cache)
			{
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."class.JavaScriptPacker.php");

			$t1 = microtime(true);
			$packer = new JavaScriptPacker($jomres_js_cache,"Normal");
			$packed = $packer->pack();
			$t2 = microtime(true);
			
			$originalLength = strlen($script);
			$packedLength = strlen($packed);
			$ratio =  number_format($packedLength / $originalLength, 3);
			$time = sprintf('%.4f', ($t2 - $t1) );
			$jomres_js_cache = $packed;
			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			}
			
		$fp=fopen($cached_js_file_abs.$cached_js_filename,'w');
		fwrite($fp,$jomres_js_cache);
		fclose($fp);

		jomres_cmsspecific_addheaddata("javascript",'jomres/temp/javascript_cache/',$cached_js_filename,$cached_js_file_livesite.$cached_js_filename,true);
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