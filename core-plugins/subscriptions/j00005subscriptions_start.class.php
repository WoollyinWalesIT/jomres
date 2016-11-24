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

class j00005subscriptions_start
	{
	function __construct()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$ePointFilepath = get_showtime('ePointFilepath');
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
	
		if (file_exists($ePointFilepath.'language'.JRDS.get_showtime('lang').'.php'))
			require_once($ePointFilepath.'language'.JRDS.get_showtime('lang').'.php');
		else
			{
			if (file_exists($ePointFilepath.'language'.JRDS.'en-GB.php'))
				require_once($ePointFilepath.'language'.JRDS.'en-GB.php');
			}
		
		//if subscriptions are not enabled, no need to go any further
		if ( (int)$jrConfig[ 'useSubscriptions' ] == 0 )
			return;

		if ( jomres_cmsspecific_areweinadminarea() && !AJAXCALL )
			{
			$basic_subscription_package_details = jomres_singleton_abstract::getInstance( 'basic_subscription_package_details' );
			
			if (count($basic_subscription_package_details->allPackages) < 1)
				{
				$souput      = array ();
				$spageoutput = array ();
				
				$soutput[ 'SUBSCRIPTION_WARNING' ] = jr_gettext('_SUBSCRIPTION_WARNING', '_SUBSCRIPTION_WARNING', false);
	
				$spageoutput[] = $soutput;
				$tmpl = new patTemplate();
				$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
				$tmpl->readTemplatesFromInput( 'subscription_warning.html' );
				$tmpl->addRows( 'pageoutput', $spageoutput );
				$tmpl->displayParsedTemplate();
				}
			}
	
		//apply the plugins subscription features restrictions for this cms user id
		if ( !jomres_cmsspecific_areweinadminarea() )
			{
			$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
			
			if ( 
				($thisJRUser->userIsRegistered && !$thisJRUser->superPropertyManager && !$thisJRUser->userIsManager) || //new subscriber
				($thisJRUser->userIsManager && $thisJRUser->accesslevel > 50 && !$thisJRUser->superPropertyManager) //higher than receptionist but not super property manager
				)
				{
				$MiniComponents->triggerEvent( '00007' ); 
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
