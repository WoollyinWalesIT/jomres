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

class j06002save_integration
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ) { $this->template_touchable = false; return; }

		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

		jr_import("webhooks");
		$webhooks = new webhooks($thisJRUser->id);
		$all_webhooks = $webhooks->get_all_webhooks();
		
		$integration_id = (int)jomresGetParam( $_POST,'integration_id', 0 );
		
		$settings = array();
		foreach ( $_POST as $key=>$val ) {
			if ($key != "nohtml" && $key != "task" && $key != "integration_id" && $key != "jomres_csrf_token" ) {
				$val = jomresGetParam( $_POST, $key, '' );
				$key = filter_var($key, FILTER_SANITIZE_SPECIAL_CHARS); // Trust nobody
				$webhooks->set_setting( $integration_id , $key , $val );
			}
		}
		
	   
		$webhooks->commit_integration($integration_id);
		
		
	  
		/* if (!$thisJRUser->userIsManager)
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
		
		$client_id			= jomresGetParam( $_POST, 'client_id', "" );
		$client_secret		= jomresGetParam( $_POST, 'client_secret', "" );
		$posted_scopes		= jomresGetParam( $_POST, 'scopes', array() );
		
		$requested_scopes = '';

		$redirect_uri = get_showtime( 'live_site' )."/".JOMRES_ROOT_DIRECTORY."/api/";
		$grant_types = null;
		
		//var_dump($posted_scopes);exit;
		foreach ($scopes_class->default_scopes as $category => $category_scopes)
			{
			foreach ($category_scopes as $scope)
				{
				if ( in_array ( $scope->user_type ,  $available_scopes ) && in_array( $scope->scope , $posted_scopes )  )
					{
					$requested_scopes .= $scope->scope.",";
					}
				}
			
			}
		$requested_scopes = rtrim($requested_scopes, ",");


		if ($client_id == "" || $client_secret == "")
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=oauth_edit_client&client_id=".$client_id ), "" );

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$query = "SELECT client_id , client_secret FROM #__jomres_oauth_clients WHERE client_id = '".$client_id."' AND user_id = ".(int)$thisJRUser->userid . ' LIMIT 1 ';
		$result = doSelectSql($query);

		if (count($result)==0)
			{
			$query = "INSERT INTO #__jomres_oauth_clients 
				(`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id`) 
				VALUES 
				('".$client_id."','".$client_secret."','".$redirect_uri."',null,'".$requested_scopes."',".(int)$thisJRUser->userid.")";
			}
		else
			{
			$query = "UPDATE #__jomres_oauth_clients SET `client_secret`='".$client_secret."',`redirect_uri`='".$redirect_uri."',`grant_types`=null,`scope`='".$requested_scopes."' WHERE user_id =".(int)$thisJRUser->userid." AND client_id ='".$client_id."'";
			}

		if ( !doInsertSql( $query, jr_gettext( '_OAUTH_CREATED', '_OAUTH_CREATED', false ) ) ) trigger_error( "Unable to update oauth client details, mysql db failure", E_USER_ERROR ); */
		
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=webhooks_core" ), "" ); 
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>