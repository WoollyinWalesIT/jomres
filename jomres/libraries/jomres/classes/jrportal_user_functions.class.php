<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

// Functions supplied as a class so that they can be extended easily without rewriting  the functions
class jrportal_user_functions
	{
	// Supplied the Joomla user's id, method will return their details
	function getJoomlaUserDetailsForJoomlaId( $id )
		{
		$userArray = array ();
		$result    = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id( $id );

		if ( count( $result ) > 0 )
			{
			foreach ( $result as $r )
				{
				$userArray[ 'id' ]       = $r[ 'id' ];
				$userArray[ 'name' ]     = $r[ 'name' ];
				$userArray[ 'username' ] = $r[ 'username' ];
				$userArray[ 'email' ]    = $r[ 'email' ];
				}
			}

		return $userArray;
		}

	// Supplied the Jomres manager's id, method will return their Joomla users id
	function getManagerIdForJosId( $id )
		{
		$query  = "SELECT manager_uid FROM #__jomres_managers WHERE userid = ".(int)$id." LIMIT 1";
		$result = doSelectSql( $query );
		if ( count( $result ) > 0 )
			{
			foreach ( $result as $r )
				{
				return $r->manager_uid;
				}
			}

		return false;
		}

	// Will find all manager ids for a property id. Note, only returns managers who are not Super Property Managers
	function getManagerIdsForProperty( $property_uid, $notIncludingSuperManagers = false )
		{
		$usersArray = array ();
		$query      = "SELECT a.id, a.manager_id FROM #__jomres_managers_propertys_xref a, #__jomres_managers b WHERE a.property_uid = ".(int)$property_uid." ";
		
		if ( $notIncludingSuperManagers ) 
			$query .= " AND ( a.manager_id = b.userid AND b.pu != 1 ) ";
		
		$result = doSelectSql( $query );
		if ( count( $result ) > 0 )
			{
			foreach ( $result as $r )
				{
				$usersArray[ $r->id ][ 'manager_id' ] = $r->manager_id;
				}
			}

		return $usersArray;
		}

	function getAllManagers()
		{
		$usersArray = array ();
		$query      = "SELECT manager_uid,userid,username FROM #__jomres_managers";
		$result     = doSelectSql( $query );
		if ( count( $result ) > 0 )
			{
			foreach ( $result as $r )
				{
				$usersArray[ $r->manager_uid ][ 'manager_uid' ] = $r->manager_uid;
				$usersArray[ $r->manager_uid ][ 'userid' ]      = $r->userid;
				$usersArray[ $r->manager_uid ][ 'username' ]    = $r->username;
				}
			}

		return $usersArray;
		}

	function makeManagersDropdown( $id = null )
		{
		$managerIds = $this->getAllManagers();
		$options    = array ();
		foreach ( $managerIds as $v )
			{
			$options[ ] = jomresHTML::makeOption( $v[ 'userid' ], $v[ 'username' ] );
			}

		return jomresHTML::selectList( $options, "userid", 'class="inputbox" size="1"', 'value', 'text', $id );
		}
	}
