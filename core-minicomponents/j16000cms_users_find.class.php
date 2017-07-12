<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.6
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000cms_users_find
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

		$existing_managers = array ();
		
		//get all jomres user ids
		$query = "SELECT `userid` AS cms_user_id FROM #__jomres_managers";
		$result = doSelectSql( $query );
		
		foreach ( $result as $r )
			{
			$existing_managers[] = $r->cms_user_id;
			}

		//find cms users that match term
		$cms_users = jomres_cmsspecific_find_cms_users($search_string);
		
		if ( empty( $cms_users ) ) 
			{
			echo "";
			die();
			}
		else
			{
			$users_array = array ();
			$i = 0;
			
			foreach ( $cms_users as $r )
				{
				if ( $r[ 'username' ] !== null && !in_array( $r[ 'id' ], $existing_managers ) )
					{
					$users_array[ $i ][ 'cms_user_id' ] = $r[ 'id' ];
					$users_array[ $i ][ 'username' ] = $r[ 'username' ];
					}
				
				$i++;
				}

			echo json_encode( $users_array );
			die();
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
