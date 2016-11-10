<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j00007subscriptions_property_limit
	{
	function __construct( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{ 
			$this->template_touchable = false; 
			return; 
			}
		
		//check if subscriptions are enabled, otherwise we don`t need to go forward
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		if ( (int)$jrConfig[ 'useSubscriptions' ] != 1 )
			return;

		//has to be named subscriptions_*, for example subscriptions_extras. This will be used when saving the edit subscriptions package form to get all subscriptions_* post data
		$feature_name = "subscriptions_property_limit";
		
		$subscribable_features = get_showtime("subscribable_features");
		
		if ( is_null ("subscribable_features"))
			$subscribable_features = array();
			
		$subscribable_features [ $feature_name ] = array (
			"minicomponents" => array (
				"00011manager_option_09_newproperty",
				"02300regprop1",
				"02320regprop3"
				),
			"name" => $feature_name,
			"friendlyname" => jr_gettext("_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT", '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', false ),
			"friendlydesc" => jr_gettext("_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT_DESC", '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT_DESC', false ),
			"input_type" => "number", //use "dropdown" for a yes/no dropdown, "text" for a simple text field, or "number" for a number input
			
			//if the input_type is number, set the min/max values
			"input_min" => "1",
			"input_max" => "99999",
			
			//"subscribe_url" => jomresURL( JOMRES_SITEPAGE_URL . "&task=feature_subscribe&feature_name=".$feature_name ),
			//"not_subscribed_message" => "Sorry, but you are not able to use this feature."
			);

		set_showtime ( "subscribable_features" , $subscribable_features );
		
		//if we`re in the admin area, return here
		if ( jomres_cmsspecific_areweinadminarea() )
			return;

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		
		$basic_subscription_details = jomres_singleton_abstract::getInstance( 'basic_subscription_details' );
		$basic_subscription_details->gatherData($thisJRUser->id);
		
		//if user if not subscribed yet but subscriptions are enabled
		if ( $basic_subscription_details->subscription['id'] == 0 )
			{
			foreach ( $subscribable_features[$feature_name]['minicomponents'] as $minicomponent )
				{
				unset( $MiniComponents->registeredClasses[$minicomponent] );
				}
			if ( get_showtime('task') == 'registerProp_step1' )
				set_showtime('task','my_subscriptions');
			}
		
		if ( $thisJRUser->accesslevel > 50 ) //this subscription feature is applicable only to manager users. new subscribers that don`t have any properties created yet don`t need this restriction
			{
			if ( count($thisJRUser->authorisedProperties) >= (int)$basic_subscription_details->package['params'][$subscribable_features[$feature_name]['name']] ) //max number of property slots reached
				{
				foreach ( $subscribable_features[$feature_name]['minicomponents'] as $minicomponent )
					{
					unset( $MiniComponents->registeredClasses[$minicomponent] );
					}
				
				//display a message to the subscriber that he`s used all available property slots for this subscription package
				//$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
				//$jomres_messaging->set_message( jr_gettext( '_JRPORTAL_SUBSCRIPTION_ALLSLOTSUSED', _JRPORTAL_SUBSCRIPTION_ALLSLOTSUSED, false ) );
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
