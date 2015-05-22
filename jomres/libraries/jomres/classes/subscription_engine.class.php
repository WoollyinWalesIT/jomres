<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class subscription_engine
	{
	private static $configInstance;

	public function __construct()
		{
		self::$configInstance         	= false;
		get_showtime("subscribable_features");
		$this->subscriptions_feature_enabled = true;
		}

	public static function getInstance()
	{
		if ( !self::$configInstance )
			{
			self::$configInstance = new subscription_engine();
			}

		return self::$configInstance;
		}

	public function __clone()
		{
		trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
		}
	
	public function __set( $setting, $value )
		{
		$this->$setting = $value;
		return true;
		}

	public function __get( $setting )
		{
		return $this->$setting;
		}
	
	public function check_minicomponent_can_be_run( $event )
		{
		// Here be magic. We'll need to check if this user has a subscription for this feature. If so, they can run the minicomp. If not, then GTFO

		if (!$this->subscriptions_feature_enabled) // Subscription's feature is not enabled, we'll always return true
			return true;
		
		// Code here to check to see if we are in admin area. If we are, we'll always return true
		if (  jomres_cmsspecific_areweinadminarea() )
			return true;
		
		// Placeholder
		$feature_name = $this->get_feature_name_for_eventpoint($event);
	
		if ( $feature_name !== false )
			{
			if ( $this->is_this_feature_name_subscribed($feature_name) )
				{
				return true;
				}
			else
				{
				$feature = $this->get_feature_details_for_eventpoint($event);
				
				$output=array();
				$pageoutput=array();

				$output['MESSAGE'] = $feature['not_subscribed_message'];

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'not_subscribed.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->displayParsedTemplate();
				}
			}
		else
			{
			return true;
			}
		}
	
	private function get_feature_name_for_eventpoint($event)
		{
		$subscribable_features = get_showtime("subscribable_features");
		$count = count($subscribable_features);
		for ($i=0;$i<$count;$i++)
			{
			$feature_name = key($subscribable_features[$i]);
			$minicomponents = $subscribable_features[$i][$feature_name]['minicomponents'];
			if ( in_array ( $event , $minicomponents ) )
				return $feature_name;
			}
		return false;
		}
	
	private function get_feature_details_for_eventpoint($event)
		{
		$subscribable_features = get_showtime("subscribable_features");
		$count = count($subscribable_features);
		for ($i=0;$i<$count;$i++)
			{
			$feature_name = key($subscribable_features[$i]);
			$minicomponents = $subscribable_features[$i][$feature_name]['minicomponents'];
			if ( in_array ( $event , $minicomponents ) )
				return $subscribable_features[$i][$feature_name];
			}
		}
		
	// todo
	private function is_this_feature_name_subscribed($feature_name)
		{
		return true;
		}
	}
