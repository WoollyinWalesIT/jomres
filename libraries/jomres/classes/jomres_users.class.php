<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

//Access levels
//50: receptionist
//70: property manager
//90: super property manager
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_users
	{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
		{
		$this->_init();
		}
	
	/**
	 * 
	 *
	 *
	 */

	public function _init()
		{
		$this->id						= 0;						//(int) manager id
		$this->cms_user_id				= 0;						//(int) cms user id
		$this->username					= '';						//(string) cms user username
		$this->access_level				= 0;						//(int) access level: 50:receptionist, 70:manager, 90:super property manager
		$this->currentproperty			= 0;						//(int) current property
		$this->apikey					= '';						//(string) manager api key
		$this->suspended				= 0;						//(int) suspended 0/1
		$this->last_active				= '1970-01-01 00:00:01';	//(datetime) Y-m-d H:i:s
		
		$this->authorised_properties	= array();					//(array) property uids that this user has access to
		
		$this->users	 				= false;					//(array) existing users
		
		$this->properties_users_xref	= array();					//(array) properties users xref
		
		$this->all_cms_users			= false;					//(array) all cms users - TODO: find a better way
		}

	//get all jomres users	
	/**
	 * 
	 *
	 *
	 */

	function get_users()
		{
		if ( is_array($this->users) )
			{
			return true;
			}
		
		$this->users = array();
		
		//Get all cms users TODO: find a better way so we won`t need to get all, there could be thousands
		if ( !is_array($this->all_cms_users) )
			{
			$this->all_cms_users = jomres_cmsspecific_getCMSUsers();
			}
		
		$query	= "SELECT `manager_uid`, `userid`, `access_level`, `currentproperty`, `apikey`, `suspended`, `last_active` FROM #__jomres_managers";
		$result = doSelectSql( $query );
		
		if ( $result )
			{
			foreach ( $result as $r )
				{
				$this->users[(int)$r->userid]['id'] 					= (int)$r->manager_uid;
				$this->users[(int)$r->userid]['cms_user_id'] 			= (int)$r->userid;
				$this->users[(int)$r->userid]['access_level'] 			= (int)$r->access_level;
				$this->users[(int)$r->userid]['currentproperty'] 		= (int)$r->currentproperty;
				$this->users[(int)$r->userid]['apikey'] 				= $r->apikey;
				$this->users[(int)$r->userid]['suspended'] 				= (int)$r->suspended;
				$this->users[(int)$r->userid]['last_active'] 			= $r->last_active;

				if (isset($this->all_cms_users[ $r->userid ][ 'username' ]))
					$this->users[(int)$r->userid]['username'] 			= $this->all_cms_users[ $r->userid ][ 'username' ];
				else
					$this->users[(int)$r->userid]['username'] 			= '';
				
				$this->users[(int)$r->userid]['authorised_properties'] 	= array(); //we`ll later get the authorised properties for each manager to save doing a query for each
				}
			}
		
		if ( !empty($this->users) )
			{
			$query = "SELECT `manager_id`, `property_uid` FROM #__jomres_managers_propertys_xref WHERE `manager_id` IN (" . jomres_implode( array_keys($this->users) ) . ")";
			$result = doSelectSql( $query );

			if ( $result )
				{
				foreach ( $result as $r )
					{
					$this->users[(int)$r->manager_id]['authorised_properties'][] = (int)$r->property_uid;
					$this->properties_users_xref[$r->property_uid][] = (int)$r->manager_id;
					}
				}
			}
		
		return true;
		}
	
	//get jomres user by id	
	/**
	 * 
	 *
	 *
	 */

	function get_user( $cms_user_id = 0 )
		{
		if ( (int)$cms_user_id == 0 )
			{
			throw new Exception( "Error: User id not set.");
			}
		
		if ( (int)$cms_user_id == $this->cms_user_id ) //we already have the data loaded
			{
			return true;
			}
		
		if ( !isset( $this->users[$cms_user_id] ) )
			{
			//Get all cms users TODO: find a better way so we won`t need to get all, there could be thousands
			if ( !is_array($this->all_cms_users) )
				{
				$this->all_cms_users = jomres_cmsspecific_getCMSUsers();
				}
			
			$query	= "SELECT `manager_uid`, `userid`, `access_level`, `currentproperty`, `apikey`, `suspended`, `last_active` FROM #__jomres_managers WHERE `userid` = " . (int)$cms_user_id;
			$result = doSelectSql( $query );
			
			if ( $result )
				{
				foreach ( $result as $r )
					{
					$this->id 						= (int)$r->manager_uid;
					$this->cms_user_id 				= (int)$r->userid;
					$this->access_level 			= (int)$r->access_level;
					$this->currentproperty 			= (int)$r->currentproperty;
					$this->apikey 					= $r->apikey;
					$this->suspended				= (int)$r->suspended;
					$this->last_active				= $r->last_active;

					if (isset($this->all_cms_users[ $r->userid ][ 'username' ]))
						$this->username 			= $this->all_cms_users[ $r->userid ][ 'username' ];
					else
						$this->username 			= '';
					
					$this->authorised_properties 	= array(); //we`ll later get the authorised properties for each manager to save doing a query for each
					}
				
				$query = "SELECT `manager_id`, `property_uid` FROM #__jomres_managers_propertys_xref WHERE `manager_id` = " . (int)$cms_user_id;
				$result = doSelectSql( $query );

				if ( $result )
					{
					foreach ( $result as $r )
						{
						$this->authorised_properties[] = (int)$r->property_uid;
						}
					}
				
				return true;
				}
			else
				{
				return false;
				}
			}
		else
			{
			$this->id						= $this->users[$cms_user_id]['id'];
			$this->cms_user_id				= $this->users[$cms_user_id]['cms_user_id'];
			$this->access_level				= $this->users[$cms_user_id]['access_level'];
			$this->currentproperty 			= $this->users[$cms_user_id]['currentproperty'];
			$this->apikey					= $this->users[$cms_user_id]['apikey'];
			$this->suspended				= $this->users[$cms_user_id]['suspended'];
			$this->last_active				= $this->users[$cms_user_id]['last_active'];
			$this->username					= $this->users[$cms_user_id]['username'];
			$this->authorised_properties	= $this->users[$cms_user_id]['authorised_properties'];
			
			return true;
			}
		
		return false;
		}

	//save new user	
	/**
	 * 
	 *
	 *
	 */

	function commit_new_user()
		{
		if ( $this->id > 0 )
			{
			throw new Exception( "Error: User id is set, are you sure you`re creating a new user?");
			}
		
		if ( $this->cms_user_id == 0 )
			{
			throw new Exception( "Error: Cms user id not set");
			}
		
		//if super property manager, then don`t save any assigned properties, because this user level has access to all
		if ( $this->access_level >= 90 )
			{
			$this->authorised_properties = array();
			}
		
		//assign the jomres user role to this new user
		$query = "INSERT INTO #__jomres_managers 
						(
						`userid`,
						`access_level`,
						`currentproperty`,
						`apikey`
						)
					VALUES 
						(
						" . (int) $this->cms_user_id . ",
						" . (int) $this->access_level . ",
						" . (int) reset($this->authorised_properties) . ",
						'" . $this->apikey . "'
						)";
		
		if ( !doInsertSql( $query, '' ) )
			{
			throw new Exception( "Error: User insert failed.");
			}
		
		//update user`s assigned properties
		updateManagerIdToPropertyXrefTable( $this->cms_user_id, $this->authorised_properties );
		
		return true;
		}
	
	//update existing user	
	/**
	 * 
	 *
	 *
	 */

	function commit_update_user()
		{
		if ( $this->id == 0 )
			{
			throw new Exception( "Error: User id not set");
			}
		
		if ( $this->cms_user_id == 0 )
			{
			throw new Exception( "Error: Cms user id not set");
			}
		
		//if super property manager, then don`t save any assigned properties, because this user level has access to all
		if ( $this->access_level >= 90 )
			{
			$this->authorised_properties = array();
			}
		
		//update user role details
		$query = "UPDATE #__jomres_managers SET `access_level` = " . (int)$this->access_level . " WHERE `userid` = " . (int)$this->cms_user_id;
		
		if ( !doInsertSql( $query, '' ) )
			{
			throw new Exception( "Error: User update failed");
			}
		
		updateManagerIdToPropertyXrefTable( $this->cms_user_id, $this->authorised_properties );
		
		return true;
		}
	
	//delete user	
	/**
	 * 
	 *
	 *
	 */

	function delete_user( $cms_user_id = 0 )
		{
		if ( $cms_user_id == 0 )
			{
			throw new Exception( "Error: cms user id not set");
			}

		$query = "DELETE FROM #__jomres_managers WHERE `userid` = " . $cms_user_id;
		
		if ( !doInsertSql( $query, '' ) )
			{
			throw new Exception( "Error: User delete failed");
			}
		
		//this will remove all user`s assigned properties
		updateManagerIdToPropertyXrefTable( $cms_user_id, array() );
		
		return true;
		}
	
	//this function generates a new user api key for an existing user by cms_user_id	
	/**
	 * 
	 *
	 *
	 */

	function generate_user_api_key()
		{
		if ( $this->cms_user_id == 0 )
			{
			throw new Exception( "Error: cms user id not set");
			}
		
		$apikey = createNewAPIKey();
			
		$query  = "UPDATE #__jomres_managers SET `apikey`= '" . $apikey . "' WHERE `userid` = " . $this->cms_user_id;
		
		if ( !doInsertSql( $query, '' ) )
			{
			throw new Exception( "Error: Inserting new user`s api key failed");
			}
		
		return true;
		}
	
	// Will find all manager ids for a property id. Note, only returns managers who are not Super Property Managers	
	/**
	 * 
	 *
	 *
	 */

	public function getManagerIdsForProperty($property_uid = 0, $notIncludingSuperManagers = false)
	{
		if ( $property_uid == 0 )
			{
			throw new Exception( "Error: Property uid not set");
			}

		$usersArray = array();
		
		$query = 'SELECT a.id, a.manager_id FROM #__jomres_managers_propertys_xref a, #__jomres_managers b WHERE a.property_uid = '.(int) $property_uid.' ';

		if ($notIncludingSuperManagers) {
			$query .= ' AND ( a.manager_id = b.userid AND b.access_level < 90 ) ';
		}

		$result = doSelectSql($query);
		
		if (!empty($result)) {
			foreach ($result as $r) {
				$usersArray[ $r->id ][ 'manager_id' ] = $r->manager_id;
			}
		}

		return $usersArray;
	}
}
