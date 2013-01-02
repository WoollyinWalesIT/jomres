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

class jomres_management_view
	{
	function get_dropdown()
		{
		jr_import('browser_detect');
		$b = new browser_detect();
		$is_mobile = $b->isMobile();
		set_showtime('mobile_browser',$is_mobile );

		$response = '';
		
		$pos = strpos($_SERVER['REQUEST_URI'], "?");
		if ($pos !== false)
			$connector = "&amp;";
		else
			$connector = "?";
		
		if ( !$is_mobile)
			{
			if (isset($_REQUEST['tmpl']) )
				$response = ' <a href="'.get_showtime('live_site').'/index.php?'.$this->remove_querystring_var("tmpl").'">'.jr_gettext("_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW",_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW,false).'</a>';
			else
				{
				$request_uri = str_replace("&amp;","&",$_SERVER['REQUEST_URI']);
				$request_uri = str_replace("&","&amp;",$request_uri);
				$response = '<a href="'.get_showtime('liv_site').$request_uri.$connector.'tmpl=component">'.jr_gettext("_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT",_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT,false).'</a>';
				}
			}
		return $response;
		}
		
	function remove_querystring_var($key) 
		{
		foreach($_GET as $variable => $value)
			{
			if($variable != $key)
				{
				$url .= $variable.'='.$value.'&amp;';
				}
			}
		$url = rtrim($url,'&amp;');
		return $url; 
		}
	}

?>