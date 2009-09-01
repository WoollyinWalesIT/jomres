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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j06000test_unsubscribe
	{
	function j06000test_unsubscribe()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser;
		
		$subscription_id	=(int)jomresGetParam( $_REQUEST, 'id', 0 );
		
		jr_import('jrportal_subscriptions');
		$subscription = new jrportal_subscriptions();
		$subscription->id=$subscription_id;
		if ($subscription->getSubscription())
			{
			$subscription->status="3";
			$subscription->commitUpdateSubscription();
			$allowedProperties = subscribers_getAvailablePropertySlots($subscription->cms_user_id);
			$existingPublishedProperties = subscribers_getManagersPublishedProperties($subscription->cms_user_id);
			$difference=count($existingPublishedProperties) - $allowedProperties;
			// Let's unpublish a few properties
			if ($allowedProperties <= count($existingPublishedProperties) && $difference > 0 )
				{
				gateway_log("Unpublishing ".$difference." properties due to unsubscribe from ".(int)$subscription->cms_user_id);
				subscribers_unpublishNproperties($difference,$subscription->cms_user_id);
				}
			}
		else
			gateway_log("Subscription id not found");
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}