<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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