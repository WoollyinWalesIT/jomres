<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000managers_find
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$search_string = trim( strtolower( jomresGetParam( $_REQUEST, 'term', '' ) ) );
		$all_users     = jomres_cmsspecific_getCMSUsers();

		$existing_managers = array ();
		$query             = "SELECT userid FROM #__jomres_managers";
		$managerList       = doSelectSql( $query );
		foreach ( $managerList as $manager )
			{
			$existing_managers[ ] = $manager->userid;
			}

		$results = array ();
		foreach ( $all_users as $user )
			{
			if ( strlen( stristr( strtolower( $user[ 'username' ] ), $search_string ) ) > 0 ) $results[ ] = $user;
			}
		if ( count( $results ) == 0 ) echo "";
		else
			{
			$result_array = array ();
			$count        = count( $results );

			for ( $i = 0; $i < $count; $i++ )
				{
				if ( $results[ $i ][ 'username' ] !== null && !in_array( $results[ $i ][ 'id' ], $existing_managers ) ) $result_array[ ] = $results[ $i ][ 'username' ];
				}

			echo json_encode( $result_array );
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}