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


class j00006ads {
	function j00006ads($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		// if ($thisJRUser->userIsManager)
			// return;
		
		if (!defined('JOMRES_NOHTML'))
			{
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig=$siteConfig->get();
			if (!isset($jrConfig['jquery_ui_theme_detected']))
				$jrConfig['jquery_ui_theme_detected'] = "jomres^jquery-ui-1.8.16.custom.css";
			
			$themeArr = explode ("^",$jrConfig['jquery_ui_theme_detected']);

			$request = "theme=".$themeArr[0];
			if (_JOMRES_MOBILE)
				$request = "&mobile=1";

			$curl_handle=curl_init();
			curl_setopt($curl_handle,CURLOPT_URL,'http://adsense.jomres.net/index.php?'.$request);
			curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
			curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
			$response = curl_exec($curl_handle);
			curl_close($curl_handle);
			$ad = json_decode($response);
			echo '<p>'.$ad->ad.'</p>';
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>