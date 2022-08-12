<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
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

class j06005oauth
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
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			$this->shortcode_data = array (
				"task" => "oauth",
				"info" => "_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN",
				"arguments" => array ()
				);
			return;
			}

		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if ( !$jomres_gdpr_optin_consent->user_consents_to_storage()&& !isset($_REQUEST['skip_consent_form'])  ) {
			echo $consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form' , array ('output_now' => false) );
			return;
		}

		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

		if (!$thisJRUser->userIsManager)
			{
			$available_scopes = array ( "user");
			}
		elseif ($thisJRUser->userIsManager && !$thisJRUser->superPropertyManager)
			{
			$available_scopes = array ( "user" , "manager" );
			}
			elseif ($thisJRUser->userIsManager && $thisJRUser->superPropertyManager)
			{
			$available_scopes = array ( "user" , "manager" , "super" );
			}

		$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
		jr_import("jomres_oauth_scopes");
		$scopes_class = new jomres_oauth_scopes($ePointFilepath);
		$all_available_scopes = array();
		foreach ($scopes_class->default_scopes as $category => $category_scopes)
			{
			foreach ($category_scopes as $scope)
				{
				$all_available_scopes[$scope->scope] = jr_gettext($scope->definition , $scope->definition , false );
				}
			}
		
		$output = array();
		$rows=array();
		
		$output['PAGETITLE']			= jr_gettext('_OAUTH_APPS', '_OAUTH_APPS', false);
		$output['_OAUTH_APIKEY']		= jr_gettext('_OAUTH_APIKEY', '_OAUTH_APIKEY', false);
		$output['_OAUTH_IDENTIFIER']	= jr_gettext('_OAUTH_IDENTIFIER', '_OAUTH_IDENTIFIER', false);
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		
		
		
		$output['_OAUTH_INFORMATION_1']									= jr_gettext('_OAUTH_INFORMATION_1', '_OAUTH_INFORMATION_1', false);
		$output['_OAUTH_INFORMATION_2']									= jr_gettext('_OAUTH_INFORMATION_2', '_OAUTH_INFORMATION_2', false);
		$output['_OAUTH_INFORMATION_SECURITY_TITLE']					= jr_gettext('_OAUTH_INFORMATION_SECURITY_TITLE', '_OAUTH_INFORMATION_SECURITY_TITLE', false);
		$output['_OAUTH_INFORMATION_SECURITY_DESC']						= jr_gettext('_OAUTH_INFORMATION_SECURITY_DESC', '_OAUTH_INFORMATION_SECURITY_DESC', false);
		$output['_OAUTH_INFORMATION_END_POINT_TITLE']					= jr_gettext('_OAUTH_INFORMATION_END_POINT_TITLE', '_OAUTH_INFORMATION_END_POINT_TITLE', false);
		$output['_OAUTH_INFORMATION_END_POINT_DESC']					= jr_gettext('_OAUTH_INFORMATION_END_POINT_DESC', '_OAUTH_INFORMATION_END_POINT_DESC', false);
		$output['_OAUTH_INFORMATION_EXAMPLE_SCRIPT']					= jr_gettext('_OAUTH_INFORMATION_EXAMPLE_SCRIPT', '_OAUTH_INFORMATION_EXAMPLE_SCRIPT', false);
		$output['_OAUTH_INFORMATION_AUTHENTICATION_TITLE']				= jr_gettext('_OAUTH_INFORMATION_AUTHENTICATION_TITLE', '_OAUTH_INFORMATION_AUTHENTICATION_TITLE', false);
		$output['_OAUTH_INFORMATION_AUTHENTICATION_DESC']				= jr_gettext('_OAUTH_INFORMATION_AUTHENTICATION_DESC', '_OAUTH_INFORMATION_AUTHENTICATION_DESC', false);
		$output['_OAUTH_INFORMATION_AUTHENTICATION_EXAMPLE']			= jr_gettext('_OAUTH_INFORMATION_AUTHENTICATION_EXAMPLE', '_OAUTH_INFORMATION_AUTHENTICATION_EXAMPLE', false);
		$output['_OAUTH_INFORMATION_METHODS_TITLE']						= jr_gettext('_OAUTH_INFORMATION_METHODS_TITLE', '_OAUTH_INFORMATION_METHODS_TITLE', false);
		$output['_OAUTH_INFORMATION_METHODS_DESC']						= jr_gettext('_OAUTH_INFORMATION_METHODS_DESC', '_OAUTH_INFORMATION_METHODS_DESC', false);
		$output['_OAUTH_INFORMATION_REQUESTS_TITLE']					= jr_gettext('_OAUTH_INFORMATION_REQUESTS_TITLE', '_OAUTH_INFORMATION_REQUESTS_TITLE', false);
		$output['_OAUTH_INFORMATION_REQUESTS_DESC_1']					= jr_gettext('_OAUTH_INFORMATION_REQUESTS_DESC_1', '_OAUTH_INFORMATION_REQUESTS_DESC_1', false);
		$output['_OAUTH_INFORMATION_REQUESTS_DESC_2']					= jr_gettext('_OAUTH_INFORMATION_REQUESTS_DESC_2', '_OAUTH_INFORMATION_REQUESTS_DESC_2', false);
		$output['_OAUTH_INFORMATION_REQUESTS_SUCCESS_RESPONSE_DESC']	= jr_gettext('_OAUTH_INFORMATION_REQUESTS_SUCCESS_RESPONSE_DESC', '_OAUTH_INFORMATION_REQUESTS_SUCCESS_RESPONSE_DESC', false);
		$output['_OAUTH_INFORMATION_REQUESTS_SUCCESS_RESPONSE']			= jr_gettext('_OAUTH_INFORMATION_REQUESTS_SUCCESS_RESPONSE', '_OAUTH_INFORMATION_REQUESTS_SUCCESS_RESPONSE', false);
		$output['_OAUTH_INFORMATION_REQUESTS_FAILURE_RESPONSE_DESC']	= jr_gettext('_OAUTH_INFORMATION_REQUESTS_FAILURE_RESPONSE_DESC', '_OAUTH_INFORMATION_REQUESTS_FAILURE_RESPONSE_DESC', false);
		$output['_OAUTH_INFORMATION_REQUESTS_FAILURE_RESPONSE']			= jr_gettext('_OAUTH_INFORMATION_REQUESTS_FAILURE_RESPONSE', '_OAUTH_INFORMATION_REQUESTS_FAILURE_RESPONSE', false);
		
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		$output['_OAUTH_SCOPE_TITLE']	= jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		
		
		$query = "SELECT client_id,scope,identifier FROM #__jomres_oauth_clients WHERE user_id = ".(int)$thisJRUser->id;
		$result = doSelectSql($query);

		if (count($result)>0)
			{
			foreach ($result as $client)
				{
				if ($client->client_id != "system" && $client->client_id != $thisJRUser->username)
					{
					$r=array();
					$r['CLIENT_ID']=$client->client_id;
					$r['IDENTIFIER']=$client->identifier;
					$r['SCOPE']= '';
					if (trim($client->scope) != "" )
						{
						$bang= explode  ( "," , $client->scope );
						foreach ($bang as $scope_definition)
							{
							if (isset($all_available_scopes[$scope_definition]))
								$r['SCOPE'] .= $all_available_scopes[$scope_definition].", ";
							
							}
						}
					$r['SCOPE'] = rtrim(trim($r['SCOPE']), ",");
					$toolbar->newToolbar();
					$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL .'&task=oauth_edit_client&client_id='.$r['CLIENT_ID'] ), jr_gettext( 'COMMON_VIEW', 'COMMON_VIEW', false ) );
					$toolbar->addSecondaryItem('fa fa-trash', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_client&client_id='.$r['CLIENT_ID']), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));
					$r['EDITLINK']=$toolbar->getToolbar();
					
					$rows[]=$r;
					}
				}
			}
			
		$toolbar->newToolbar();
		$toolbar->addItem( 'icon-edit', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=oauth_edit_client&client_id=' ), jr_gettext( 'COMMON_NEW', 'COMMON_NEW', false ) );
		$output['JOMRESTOOLBAR']=$toolbar->getToolbar();
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND  );
		$tmpl->readTemplatesFromInput( 'list_clients.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}



	function getRetVals()
		{
		return null;
		}
	}