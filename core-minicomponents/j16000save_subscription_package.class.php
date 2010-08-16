<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000save_subscription_package {
	function j16000save_subscription_package()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$id				= (int)jomresGetParam( $_POST, 'id', 0 );
		$name			= (string)jomresGetParam( $_POST, 'name', "" );
		$description	= (string)jomresGetParam( $_POST, 'description', "" );
		$frequency		= (string)jomresGetParam( $_POST, 'frequency', "M" );
		$trial_period	= (int)jomresGetParam( $_POST, 'trial_period', "" );
		$trial_amount	= (float)jomresGetParam( $_POST, 'trial_amount', 0.00 );
		$full_amount	= (float)jomresGetParam( $_POST, 'full_amount', 0.00 );
		$rooms_limit	= (int)jomresGetParam( $_POST, 'rooms_limit', 0 );
		$property_limit	= (int)jomresGetParam( $_POST, 'property_limit', 0 );
		$tax_code_id	= (int)jomresGetParam( $_POST, 'taxrate', 0 );

		jr_import('jrportal_subscriptions_packages');
		$package = new jrportal_subscriptions_packages();
		if ($id > 0)
			{
			$package->id = $id;
			$package->getSubscriptionPackage();
			}
			
		$package->name=$name;
		$package->description=$description;
		$package->frequency=$frequency;
		$package->trial_period=$trial_period;
		$package->trial_amount=$trial_amount;
		$package->full_amount=$full_amount;
		$package->rooms_limit=$rooms_limit;
		$package->property_limit=$property_limit;
		$package->tax_code_id=$tax_code_id;
		
		if ($id > 0)
			$package->commitUpdateSubscriptionPackage();
		else
			$package->commitSubscriptionPackage();

		jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=list_subscription_packages","");
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>