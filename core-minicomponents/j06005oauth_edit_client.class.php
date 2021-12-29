<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2021 Vince Wooll
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

class j06005oauth_edit_client
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
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$available_scopes = array();
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

		jr_import("jomres_oauth_scopes");
		$scopes_class = new jomres_oauth_scopes($ePointFilepath);
		$output = array();
		
		$client_id = jomresGetParam( $_REQUEST, 'client_id', "" );
		
		$output['PAGETITLE']=jr_gettext('_OAUTH_APPS', '_OAUTH_APPS', false);
		$output['_OAUTH_APIKEY']=jr_gettext('_OAUTH_APIKEY', '_OAUTH_APIKEY', false);
		$output['_OAUTH_SECRET']=jr_gettext('_OAUTH_SECRET', '_OAUTH_SECRET', false);
		$output['_OAUTH_REDIRECT_URI']=jr_gettext('_OAUTH_REDIRECT_URI', '_OAUTH_REDIRECT_URI', false);
		$output['_OAUTH_SCOPE_TITLE']=jr_gettext('_OAUTH_SCOPE_TITLE', '_OAUTH_SCOPE_TITLE', false);
		$output['_OAUTH_IDENTIFIER']	= jr_gettext('_OAUTH_IDENTIFIER', '_OAUTH_IDENTIFIER', false);
		$output['_OAUTH_CLIENT_ID_INFO']	= jr_gettext('_OAUTH_CLIENT_ID_INFO', '_OAUTH_CLIENT_ID_INFO', false);
		$output['_OAUTH_IDENTIFIER_PLACEHOLDER']	= jr_gettext('_OAUTH_IDENTIFIER_PLACEHOLDER', '_OAUTH_IDENTIFIER_PLACEHOLDER', false);
		
		$output['_OAUTH_GRANT_TYPES']	= jr_gettext('_OAUTH_GRANT_TYPES', '_OAUTH_GRANT_TYPES', false);
		$output['_OAUTH_IMPLICIT_NOTES']	= jr_gettext('_OAUTH_IMPLICIT_NOTES', '_OAUTH_IMPLICIT_NOTES', false);
		$output['_OAUTH_AUTHORISATION_URL']	= jr_gettext('_OAUTH_AUTHORISATION_URL', '_OAUTH_AUTHORISATION_URL', false);

		$query = "SELECT client_id , client_secret , scope , identifier , redirect_uri FROM #__jomres_oauth_clients WHERE client_id = '".$client_id."' AND user_id = ".(int)$thisJRUser->userid . ' LIMIT 1 ';
		$result = doSelectSql($query);
		
		$client_scopes = array();
		if (count($result)>0)
			{
			foreach ($result as $client)
				{
				$output['CLIENT_ID']=$client->client_id;
				$output['CLIENT_SECRET']=$client->client_secret;
				$output['IDENTIFIER']=$client->identifier;
				
				$output['REDIRECT_URI']=$client->redirect_uri;

				if (trim($client->scope) != "" )
					$client_scopes= explode  ( "," , $client->scope );

				if ( $output['CLIENT_SECRET'] == "")
					{
					$output['CLIENT_SECRET'] = createNewAPIKey();
					}
				}
			}
		else
			{
			$output['IDENTIFIER']="";
			$output['CLIENT_ID']=generateJomresRandomString( 15 );
			$output['CLIENT_SECRET'] =createNewAPIKey();
			$output['REDIRECT_URI'] =get_showtime( 'live_site' )."/".JOMRES_ROOT_DIRECTORY."/api/";
			}
		
		$output['AUTHORIZE_URL'] = JOMRES_SITEPAGE_URL_AJAX.'&task=oauth_isauthorised&response_type=token&client_id='.$output['CLIENT_ID'].'&redirect_uri='. $output['REDIRECT_URI'];
		
		$rows=array();
		foreach ($scopes_class->default_scopes as $category => $category_scopes)
			{
			$po=array();
			$o =array();
			$scope_rows=array();

			$o['_OAUTH_SCOPE_CATEGORY'] = jr_gettext( $category , $category );
			foreach ($category_scopes as $scope)
				{
				if ( in_array ( $scope->user_type ,  $available_scopes ) )
					{
					$sr=array();
					$sr['CHECKED'] = '';
					if ( in_array ( $scope->scope ,  $client_scopes ) )
						$sr['CHECKED'] = "checked='checked'";
					
					$sr['SCOPE'] = $scope->scope;
					$sr['SCOPE_FRIENDLY'] = jr_gettext( $scope->definition , $scope->definition );
					$sr['SCOPE_DESCRIPTION'] = jr_gettext( $scope->description , $scope->description );
					$scope_rows[]=$sr;
					}
				}

			if ( count($scope_rows)>0)
				{
				$po[]=$o;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND  );
				$tmpl->readTemplatesFromInput( 'scope_categories.html' );
				$tmpl->addRows( 'pageoutput', $po );
				$tmpl->addRows( 'rows', $scope_rows );
				$rows[]['SCOPES'] = $tmpl->getParsedTemplate();
				}
			}
		
		
		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "&task=oauth" ), '' );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_client' );
		if ( $client_id != '' ) 
			$jrtb .= $jrtbar->toolbarItem( 'delete', jomresURL( JOMRES_SITEPAGE_URL . "&task=delete_client&client_id=".$client_id."&no_html=1" ), '' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND  );
		$tmpl->readTemplatesFromInput( 'edit_client.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}


	function getRetVals()
		{
		return null;
		}
	}