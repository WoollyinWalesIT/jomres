<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
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

class j06005save_client
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
	 
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ) { $this->template_touchable = false; return; }

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
		
		jr_import("jomres_oauth_scopes");
		$scopes_class = new jomres_oauth_scopes($ePointFilepath);
		
		$identifier			= jomresGetParam( $_POST, 'identifier', "" );
		$client_id			= jomresGetParam( $_POST, 'client_id', "" );
		$client_secret		= jomresGetParam( $_POST, 'client_secret', "" );
		$redirect_uri		= jomresGetParam( $_POST, 'redirect_uri', "" );
		$posted_scopes		= jomresGetParam( $_POST, 'scopes', array() );
		
		$requested_scopes = '';

		$grant_types = null;
		
		if ( $client_id != $thisJRUser->username ) {
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
			$query = "SELECT client_id FROM #__jomres_oauth_clients WHERE client_id = '".$client_id."' AND user_id = ".(int)$thisJRUser->userid . ' LIMIT 1 ';
			$result = doSelectSql($query);

			if (count($result)==0)
				{
				$query = "INSERT INTO #__jomres_oauth_clients 
					(`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id` , `identifier` ) 
					VALUES 
					('".$client_id."','".$client_secret."','".$redirect_uri."',null,'".$requested_scopes."',".(int)$thisJRUser->userid." , '".$identifier."' )";
				}
			else
				{
				$query = "UPDATE #__jomres_oauth_clients SET `client_secret`='".$client_secret."',`redirect_uri`='".$redirect_uri."',`grant_types`=null,`scope`='".$requested_scopes."',`identifier`='".$identifier."' WHERE user_id =".(int)$thisJRUser->userid." AND client_id ='".$client_id."'";
				}

			if ( !doInsertSql( $query, jr_gettext( '_OAUTH_CREATED', '_OAUTH_CREATED', false ) ) ) trigger_error( "Unable to update oauth client details, mysql db failure", E_USER_ERROR );
		}
		
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=oauth" ), "" ); 
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */

	function getRetVals()
		{
		return null;
		}
	}
