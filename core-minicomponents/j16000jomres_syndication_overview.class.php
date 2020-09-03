<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000jomres_syndication_overview
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$this->retVals = '';

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		if ((int) $jrConfig['use_reviews'] != 1) {
			return;
		}

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		try {
			$output = array();
			$pageoutput = array();

			$client = new GuzzleHttp\Client();

			$response = $client->request('POST', "https://app.jomres.net/jomres/api/get_sites/confirm/", [
				'form_params' => [
					
					'api_url' => urlencode(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/')
					]
				]);

			$this_installation_listed_on_server = json_decode((string)$response->getBody());
			
			$response = $client->request('GET', "https://app.jomres.net/jomres/api/get_sites/");
			
			$total_sites_on_app_server = json_decode((string)$response->getBody());
			
			$response = $client->request('GET', "https://app.jomres.net/jomres/api/get_sites/page_view_counts");
			
			$total_page_views_in_network = json_decode((string)$response->getBody());
			
			$output[ 'TOTAL_PAGE_VIEWS' ] = $total_page_views_in_network->data->page_view_counts->total_page_views;
			$output[ 'TOTAL_SITES' ] = $total_sites_on_app_server->data->sites->total_sites;
			$output[ 'TOTAL_PROPERTIES' ] = $total_sites_on_app_server->data->sites->total_properties;
			
			$output[ '_JOMRES_SYNDICATION_STATS_TITLE' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_TITLE', '_JOMRES_SYNDICATION_STATS_TITLE', false);
			
			$output[ '_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', '_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', false);
			$output[ '_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', '_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', false);
			$output[ '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', false);
			$output[ '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', false);
			$output[ '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', false);
			$output[ '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', '_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', false);
			$output[ '_JOMRES_SYNDICATION_STATS_BLURB' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_BLURB', '_JOMRES_SYNDICATION_STATS_BLURB', false);
	
			if ($this_installation_listed_on_server->data->response == false ) {
				$output[ 'IS_LISTED' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', '_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', false);
				$output[ 'IS_LISTED_STATUS' ] = '😢';
			} else {
				$output[ 'IS_LISTED' ] = jr_gettext('_JOMRES_SYNDICATION_STATS_IS_LISTED', '_JOMRES_SYNDICATION_STATS_IS_LISTED', false);
				$output[ 'IS_LISTED_STATUS' ] = ' 😁';
			}
			
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('jomres_syndication_overview.html');

			if ($output_now) {
				$tmpl->displayParsedTemplate();
			} else {
				$this->retVals = $tmpl->getParsedTemplate();
			}
		} catch (Exception $e) {
			echo "Oops, looks like there was a problem talking to the app server.";
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
