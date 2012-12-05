<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000ajax_list_properties_awaiting_approval
	{
	function j16000ajax_list_properties_awaiting_approval()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$property_uid	= jomresGetParam( $_REQUEST, 'property_uid', 0 );

		$curl_handle=curl_init();
		curl_setopt($curl_handle,CURLOPT_URL,JOMRES_SITEPAGE_URL_NOSEF."&tmpl=component&is_wrapped=1&task=viewproperty&topoff=1&popup=1&property_uid=".$property_uid);
		curl_setopt($curl_handle,CURLOPT_TIMEOUT, 8);
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$page = curl_exec($curl_handle);
		curl_close($curl_handle);

		echo $page;
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}