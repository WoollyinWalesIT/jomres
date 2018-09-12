<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.13.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06002edit_integration {
	function __construct() {
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		$found_webhook_minicomponents = array();
		foreach ($MiniComponents->registeredClasses['07300'] as $eventName => $eventDetails) {
		   $found_webhook_minicomponents[]=$eventName;
		}
		
		if (empty($found_webhook_minicomponents)) {
			throw new Exception("Error: Oops, you can't create a new Webhook integration until you've installed at least one webhook integration method/plugin");
		}
		
		
		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		
		jr_import("webhooks");
		$webhooks = new webhooks($thisJRUser->id);
		$all_webhooks = $webhooks->get_all_webhooks();
		
		$pageoutput = array();
		$output = array();
		
		$integration_id = (int)jomresGetParam( $_REQUEST, 'id', 0 );
		
		$output['PAGETITLE']					=jr_gettext('WEBHOOKS_INTEGRATION_EDIT', 'WEBHOOKS_INTEGRATION_EDIT', false);
		$output['WEBHOOKS_INTEGRATION_URL']	 =jr_gettext('WEBHOOKS_INTEGRATION_URL', 'WEBHOOKS_INTEGRATION_URL', false);
		$output['WEBHOOKS_INTEGRATION_ID']	  =jr_gettext('WEBHOOKS_INTEGRATION_ID', 'WEBHOOKS_INTEGRATION_ID', false);
		$output['WEBHOOKS_AUTH_METHOD_SELECT']  =jr_gettext('WEBHOOKS_AUTH_METHOD_SELECT', 'WEBHOOKS_AUTH_METHOD_SELECT', false);
		
		
		// Fist we need to find out the supported authentication methods
		$MiniComponents->triggerEvent('07300');  // As the authentication methods aren't relevent to front or backend they are numbered in the 07000s
		$authentication_methods = get_showtime('authentication_methods');
	
		if (isset($all_webhooks[$integration_id] )) {
			$output['INTEGRATION_ID']   = $all_webhooks[$integration_id]['id'];
			$output['URL']			  = $all_webhooks[$integration_id]['settings']['url'];
			$output['AUTHMETHOD']	   = $all_webhooks[$integration_id]['settings']['authmethod'];
		}
		else {
			$output['INTEGRATION_ID']   = '0';
			$output['URL']			 = 'https://';
			foreach ($found_webhook_minicomponents as $plugin) { // We don't know which plugin the admin has installed, we'll search all the 07300 scripts found and extract a filename then set that as default
				$output['AUTHMETHOD']	   = str_replace("webhooks_auth_method_" , "" , $plugin);
				
			}
			
		}
		
		$authMethods = array();
		if (!empty($authentication_methods)) {
			foreach ( $authentication_methods as $method ){
				$authMethods[ ] = jomresHTML::makeOption($method['plugin'], $method['plugin']);
			}
		}
		
		$output['AUTHMETHODSDROPDOWN'] = jomresHTML::selectList($authMethods, 'authmethod', 'class="inputbox"  onchange=get_auth_form(this.value); size="1"', 'value', 'text', $output['AUTHMETHOD'] , false );
		
		$output['AUTH_FORM'] = $MiniComponents->specificEvent('06002', 'ajax_webhooks_build_auth_form', array('output_now' => false, 'integration_id' => $output['INTEGRATION_ID'], 'auth_method' => $output['AUTHMETHOD']));

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "&task=webhooks_core" ), '' );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_integration' );
		if ( $integration_id != '' ) 
			$jrtb .= $jrtbar->toolbarItem( 'delete', jomresURL( JOMRES_SITEPAGE_URL . "&task=delete_integration&id=".$integration_id."&no_html=1" ), '' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_integration.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}