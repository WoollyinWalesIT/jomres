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

class j16000purchase_plugins
	{
	function j16000purchase_plugins()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
			
		$items = jomresGetParam( $_REQUEST, 'items', '' );
		$username = jomresGetParam( $_REQUEST, 'username', '' );
		$password = jomresGetParam( $_REQUEST, 'password', '' );
		if ($username == "" || $password == "")
			{
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins', "Error, you didn't enter your jomres.net username or password" );
			exit;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		if (!isset($jrConfig['license_server_username']))
			{
			$query = "INSERT INTO #__jomres_site_settings (`akey`,`value`) VALUES ('license_server_username','".$username."'),('license_server_password','".$password."')";
			$result = doInsertSql($query,'');
			}
		else
			{
			$query = "UPDATE #__jomres_site_settings SET `value`='".$username."' WHERE `akey`='license_server_username'";
			$result = doInsertSql($query,'');
			$query = "UPDATE #__jomres_site_settings SET `value`='".$password."' WHERE `akey`='license_server_password'";
			$result = doInsertSql($query,'');
			}


		$request = "request=create_invoice&username=".$username."&password=".$password."&items=".$items;
		$response = query_shop($request);
		if ($response->success)
			{
			echo "Thank you for your purchase, a link to the invoice has been created and emailed to you. When the invoice has been paid you will be able to use the Jomres Plugin Manager to install the plugin(s).";
			}
		else
			{
			echo "Sorry, there was a problem creating the invoice, please press the back button in your browser and choose your plugins again, then double check your License Server username and password are correct.";
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
