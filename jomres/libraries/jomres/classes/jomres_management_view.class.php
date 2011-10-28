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

class jomres_management_view
	{
	function get_dropdown()
		{
		if (isset($_REQUEST['tmpl']) )
			$response = ' <a href="'.get_showtime('live_site').'/index.php?'.$this->remove_querystring_var("tmpl").'">'._JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW.'</a>';
		else
			$response = '<a href="'.get_showtime('liv_site').$_SERVER['REQUEST_URI'].'&tmpl=component">'._JOMRES_COM_MANAGEMENTVIEW_MANAGMENT.'</a>';
		return $response;
		}
		
	function remove_querystring_var($key) 
		{
		foreach($_GET as $variable => $value)
			{
			if($variable != $key)
				{
				$url .= $variable.'='.$value.'&';
				}
			}
		$url = rtrim($url,'&');
		return $url; 
		}
	}

?>