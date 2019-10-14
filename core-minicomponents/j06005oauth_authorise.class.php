<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005oauth_authorise
	{
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

		$client_id			= jomresGetParam( $_REQUEST, 'client_id', "" );

		if ($client_id != "" )
			{
			$query = "SELECT client_id,client_secret,scope,redirect_uri FROM #__jomres_oauth_clients WHERE user_id = ".(int)$thisJRUser->userid;
			$result = doSelectSql($query);
			if ( count ($result) > 0 )
				{
				$user_client_ids = array();
				$user_client_secrets = array();
				$user_client_scopes = array();
				foreach ($result as $cid )
					{
					$user_client_ids[]=$cid->client_id;
					$user_client_secrets[ $cid->client_id ] = $cid->client_secret;
					$user_client_scopes[ $cid->client_id ] = $cid->scope;
					$user_client_scopes[ $cid->redirect_uri ] = $cid->redirect_uri;
					}
				if (!in_array($_REQUEST['client_id'],$user_client_ids))
					die("Unauthorised client id");
				}
			}
		else
			{
			die("Client id not passed");
			}
		
		define( 'JOMRES_API_CMS_ROOT' , JOMRESCONFIG_ABSOLUTE_PATH );

		// include our OAuth2 Server object
		
		if (file_exists(JOMRESPATH_BASE . '/api/oauth/inc_configs.php')) { // Check for the existance of this file, which in 9.9.5 doesn't exist, but in 9.9.6. Allows transition between versions and should be removed sometime after July 2018
			require_once JOMRESPATH_BASE . '/api/oauth/inc_configs.php';
		}
		
		require_once JOMRESPATH_BASE.'/api/oauth/server.php';

		$request = OAuth2\Request::createFromGlobals();
		$response = new OAuth2\Response();

		// validate the authorize request
		if (!$server->validateAuthorizeRequest($request, $response)) {
			$response->send();
			die;
		}

		// display an authorization form
		if (!isset($_POST['authorized'])) {
		  exit('
		<form method="post">
		  <label>Do You Authorize '.$client_id .'?</label><br />
		  <input type="submit" name="authorized" value="yes">
		  <input type="submit" name="authorized" value="no">
		</form>');
		}

		// print the authorization code if the user has authorized your client
		$is_authorized = ($_POST['authorized'] === 'yes');
		
		
				
		if ($is_authorized) 
			{
			$server->handleAuthorizeRequest($request, $response, $is_authorized , $thisJRUser->userid);
			}
		$response->send();
		die();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}