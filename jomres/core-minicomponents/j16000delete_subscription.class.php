<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000delete_subscription {
	function j16000delete_subscription()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$id				= (int)jomresGetParam( $_REQUEST, 'id', 0 );
		jr_import('jrportal_subscriptions');
		$subscription = new jrportal_subscriptions();
		if ($id > 0)
			{
			$subscription->id = $id;
			if ($subscription->deleteSubscription())
				{
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=list_subscriptions","");
				}
			else
				echo "Error, couldn't delete subscription.";
			}
		else
			echo "Error, couldn't delete subscription, ID not found.";
			
		

		
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>