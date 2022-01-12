<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000rest_api_connectivity_test
	{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

			if ( strstr(JOMRESPATH_BASE , '/wp-content/plugins/jomres/jomres/') ) { // We are buried deep in the wp plugins dir and the API needs to be in public_html/jomres
				echo "<p class='alert alert-danger'>Sorry, your installation of Jomres cannot currently support use of the REST API because the Jomres files are stored in ".JOMRESPATH_BASE." <br/><br/>If you want to use the REST API please move the files in this directory into the ".JOMRESCONFIG_ABSOLUTE_PATH."/jomres/ directory instead, then empty the ".JOMRESCONFIG_ABSOLUTE_PATH."/jomres/temp directory<br/><br/>Do NOT move the files in the directory above, you need the files in /plugins/jomres to remain in place, only move the files in /plugins/jomres/jomres/</p>";
				return;

			}

			$output	 = array ();
		$pageoutput = array ();

		jr_import('jomres_call_api');
		$jomres_call_api = new jomres_call_api('system');
		try {
			$response = $jomres_call_api->send_request("GET" , "core/report/");
			}
		catch (Exception $e) {
           // throw new Exception('Error: invalid response from local API, received '.$e->getMessage() );
        }


		$api_keys = $jomres_call_api->init_manager();

		$output['API_CLIENT'] = $api_keys['client_id'];
		$output['API_SECRET'] = $api_keys['client_secret'];

		$output[ '_OAUTH_APPS' ]		    = jr_gettext('_OAUTH_APPS', '_OAUTH_APPS', false);
		$output[ '_OAUTH_APIKEY' ]		= jr_gettext('_OAUTH_APIKEY', '_OAUTH_APIKEY', false);
		$output[ '_OAUTH_SECRET' ]		= jr_gettext('_OAUTH_SECRET', '_OAUTH_SECRET', false);

		$output['URL'] = $jomres_call_api->server."core/report/";
		
		if (is_object($response)) {
			$output['RESPONSE'] = json_encode($response, JSON_PRETTY_PRINT);
		} else {
			$output['RESPONSE'] = $response;
		}
		
		
		if ( isset($response->meta->code) && $response->meta->code == 200 ) {
			$test_passed = true;
			$output[ 'TEST_RESULT' ]		= jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', '_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', false);
			$output[ 'STATUS' ]				= "success";
		} else {
			$test_passed = false;
			$output[ 'TEST_RESULT' ]		= jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', '_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', false);
			$output[ 'STATUS' ]				= "danger";
		}
		
		$client = new GuzzleHttp\Client();

		$response = $client->request('POST', "https://app.jomres.net/jomres/api/get_sites/confirm/", [
			'form_params' => [
				
				'api_url' => urlencode(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/')
				]
			]);

		$body				= json_decode((string)$response->getBody());

		if ($body->meta->code == "200" && $body->data->response == true ) {
			
			$output[ '_JOMRES_REST_API_SYNDICATION_TEST' ] = jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', '_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', false);
			$output[ 'SYNDICATION_STATUS' ]				= "success";
		} else {
			$output[ '_JOMRES_REST_API_SYNDICATION_TEST' ] = jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', '_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', false);
			$output[ 'SYNDICATION_STATUS' ]				= "danger";
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$siteConfig->update_setting('appServerRegister',0);
		}
		
		
		$output[ '_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE' ] = jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', '_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', false);
		$output[ '_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO' ] = jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', '_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', false);
		$output[ '_JOMRES_REST_API_CONNECTIVITY_TEST' ] = jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST', '_JOMRES_REST_API_CONNECTIVITY_TEST', false);
		$output[ '_JOMRES_REST_API_CONNECTIVITY_TEST_INFO' ]		= jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', '_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', false);
		$output[ '_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED' ]		= jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', '_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', false);
		$output[ '_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE' ]	= jr_gettext('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', '_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', false);
		
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext("COMMON_CANCEL",'COMMON_CANCEL',false) );
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'rest_api_connectivity_test.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

  

	function getRetVals()
		{
		return null;
		}
	}
