<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * 	 * @package Jomres\Core\Classes
 * Manages the current user's access rights.
 */

//Access levels
//50: receptionist
//70: property manager
//90: super property manager

class jr_user
{
	private static $internal_debugging;
	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		self::$internal_debugging = false;

		$this->init_user();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init_user( $id = 0 )
	{
		//jomres user role
		$this->jomres_manager_id 				= 0;						//user/manager id in the _jomres_managers table
		$this->id 								= 0;						//cms user id TODO: remove duplicate from the entire codebase
		$this->userid 							= 0;						//cms user id TODO: remove duplicate from the entire codebase
		$this->username 						= '';					   //logged in user`s username
		$this->accesslevel 						= 0;						//user access level
		$this->currentproperty 					= 0;						//user`s current property
		$this->last_active 						= '1970-01-01 00:00:01';	//last active
		$this->authorisedProperties 			= array();				  //array of properties that this user has access to
		//$this->users_timezone					= "America/Lima";			//user timezone - not used anymore
		$this->userIsSuspended 					= false;					//user is suspended true/false

		$this->userIsRegistered 				= false;					//user is registered true/false
		$this->userIsManager 					= false;					//user is manaager true/false TODO: separate this for receptionists to userIsReceptionist
		$this->superPropertyManager 			= false;					//user is super property manager true/false
		//$this->userIsReceptionist				= false;					//user is receptionist true/false
		//$this->userIsPartner					= false;					//user is partner true/false TODO: add support for partners in jr_user
		//$this->userIsAgency					= false;					//user is travel agency true/false TODO: add support for travel agencies
		//$this->userIsHousekeeper				= false;					//user is housekeeper true/false TODO: add support for housekeeping
		//$this->userIsMaintenance				= false;					//user is maintenance staff true/false TODO: add support for maintenance staff

		//user profile details (for any logged in user)
		$this->profile_id = 0;
		$this->cms_user_id = 0;
		$this->firstname = '';
		$this->surname = '';
		$this->house = '';
		$this->street = '';
		$this->town = '';
		$this->region = '';
		$this->postcode = '';
		$this->country = '';
		$this->email = '';
		$this->tel_landline = '';
		$this->tel_mobile = '';
		$this->tel_fax = '';
		$this->vat_number = '';
		$this->vat_number_validated = '';
		$this->vat_number_validation_response = '';
		$this->params = array(); //user settings
		$this->drivers_license = '';
		$this->passport_number = '';
		$this->iban = '';
		$this->about_me = '';

		if ( $id == 0 ) {
			if (defined("JOMRES_API_CMS_ROOT") ) {
			$this->id = Flight::get('user_id');
			} else {
				$this->id = jomres_cmsspecific_getcurrentusers_id();
			}
		} else {
			$this->id = $id;
		}
		

		if ($this->id > 0) {
			$this->userIsRegistered = true;
			
			//registered user access level will be 1 (lowest after 0:not registered)
			$this->accesslevel = 1;

			//get user profile details
			$this->get_user_profile();

			//get user role details
			$this->get_user_role();
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function __set($setting, $value)
	{
		if (self::$internal_debugging) {
			echo 'Setting '.$setting.' to '.$value.' <br>';
		}

		$this->$setting = $value;

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function __get($setting)
	{
		if (self::$internal_debugging) {
			echo 'Getting '.$setting.' which is '.$this->$setting.'<br>';
		}

		if (isset($this->$setting)) {
			return $this->$setting;
		}

		return null;
	}

	/**
	 * Get user profile details for the logged in user.
	 */
	public function get_user_profile()
	{
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
		
		if ($this->id == 0) {
			throw new Exception('Error: Can`t get user profile for cms user id 0');
		}

		$query = 'SELECT
						`id`,
						`cms_user_id`,
						`enc_firstname`,
						`enc_surname`,
						`enc_house`,
						`enc_street`,
						`enc_town`,
						`enc_county`,
						`enc_country`,
						`enc_postcode`,
						`enc_tel_landline`,
						`enc_tel_mobile`,
						`enc_email`,
						`enc_vat_number`,
						`vat_number_validated`,
						`vat_number_validation_response`,
						`params`,
						`enc_preferences`,
						`enc_drivers_license`,
						`enc_passport_number`,
						`enc_iban`,
						`enc_about_me`
					FROM #__jomres_guest_profile 
					WHERE `cms_user_id` = ' .(int) $this->id.' 
					LIMIT 1 ';
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $r) {
				$this->profile_id						= $r->id;
				$this->cms_user_id						= $r->cms_user_id;
				$this->firstname						= $this->jomres_encryption->decrypt($r->enc_firstname);
				$this->surname							= $this->jomres_encryption->decrypt($r->enc_surname);
				$this->house							= $this->jomres_encryption->decrypt($r->enc_house);
				$this->street							= $this->jomres_encryption->decrypt($r->enc_street);
				$this->town								= $this->jomres_encryption->decrypt($r->enc_town);
				$this->region							= $this->jomres_encryption->decrypt($r->enc_county);
				$this->country							= $this->jomres_encryption->decrypt($r->enc_country);
				$this->postcode							= $this->jomres_encryption->decrypt($r->enc_postcode);
				$this->tel_landline						= $this->jomres_encryption->decrypt($r->enc_tel_landline);
				$this->tel_mobile						= $this->jomres_encryption->decrypt($r->enc_tel_mobile);
				$this->email							= $this->jomres_encryption->decrypt($r->enc_email);
				$this->vat_number						= $this->jomres_encryption->decrypt($r->enc_vat_number);
				$this->vat_number_validated				= $r->vat_number_validated;
				$this->vat_number_validation_response	= $r->vat_number_validation_response;
				$this->drivers_license					= $this->jomres_encryption->decrypt($r->enc_drivers_license);
				$this->passport_number					= $this->jomres_encryption->decrypt($r->enc_passport_number);
				$this->iban								= $this->jomres_encryption->decrypt($r->enc_iban);
				$this->about_me							= $this->jomres_encryption->decrypt($r->enc_about_me);
				$this->preferences							= $this->jomres_encryption->decrypt($r->enc_preferences);
				 
				
				if (!empty($r->params)) {
					$this->params = json_decode($r->params, true);
				}
			}
		} else { 
		
			// 14th June 2018
			// Registered user has no row in guest profile table. Some things, such as widgets on the dashboard, require a row in this table, and it'll fail with a silly error if the user tries to select a widget without it. As a result, we'll create a record in the profile table for this user, to get  us around this problem.
		
			// 27th Feb 2019
			// This section of code was creating problems where multiple profile records would be being created preventing bookings from going ahead. Disabled for now. It shouldn't, but it did.
			
			/* $query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`) VALUES ( '".(int) $this->id."' )";
			doInsertSql($query , '' ); */
		}
		
		$this->jomres_encryption = null;
		return true;
	}

	/**
	 * Get user role for the logged in user.
	 */
	public function get_user_role()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Can`t get user role for cms user id 0');
		}

		$query = 'SELECT 
						`manager_uid`,
						`userid`,
						`access_level`,
						`currentproperty`,
						`suspended`,
						`users_timezone`,
						`last_active`
					FROM #__jomres_managers 
					WHERE `userid` = ' .(int) $this->id.' 
					LIMIT 1 ';
		$result = doSelectSql($query);

		if (!empty($result)) {
			//TODO: change this to a function that checks the access level
			$this->userIsManager = true;

			foreach ($result as $r) {
				$this->jomres_manager_id = $r->manager_uid;
				$this->userid = $r->userid;
				$this->accesslevel = $r->access_level;
				$this->currentproperty = $r->currentproperty;
				$this->username = jomres_cmsspecific_getcurrentusers_username();
				$this->userIsSuspended = (bool) $r->suspended;

				if (isset($r->last_active)) {
					$this->last_active = $r->last_active;
				}
				
				/* if ( isset( $r->users_timezone ) )
					{
					$this->users_timezone 				= $r->users_timezone;
					} */

				if ($this->accesslevel >= 90) { //this user is a super property manager (or even higher) and has access to all properties
					$this->superPropertyManager = true;

					//get all properties in system.
					$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
					$jomres_properties->get_all_properties();

					$this->authorisedProperties = get_showtime('all_properties_in_system');
				} else { //this user has access only to it`s own properties
					$this->superPropertyManager = false;

					$query = 'SELECT `property_uid` FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '.(int) $this->id;
					$managersToPropertyList = doSelectSql($query);

					if (!empty($managersToPropertyList)) {
						foreach ($managersToPropertyList as $x) {
							$this->authorisedProperties[] = $x->property_uid;
						}
					}

					if (empty($this->authorisedProperties) && !defined('_JOMRES_INITCHECK_ADMIN')) {
						// We can't throw an error here, otherwise the whole MiniComponents variable isn't created and all sorts of wonderful things might happen, so instead we'll just reset the user so that they don't have any access rights to properties
						// TODO: silently remove the manager user role from this user
						$this->reset_manager_to_non_manager();
					}
				}

				if (!empty($this->authorisedProperties)) {
					if (!in_array($this->currentproperty, $this->authorisedProperties)) {
						$this->currentproperty = $this->setToAnyAuthorisedProperty();

						$this->set_currentproperty($this->currentproperty);
					}
				}
			}
		}

		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//update user profile params
	public function update_params()
	{
		if ( $this->id == 0 ) {
			throw new Exception( "Error: Cms user id not set");
		}

		if ($this->profile_id == 0) {
			$query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`,`enc_firstname`,`enc_surname`,`enc_house`,`enc_street`,`enc_town`,`enc_county`,`enc_country`,`enc_postcode`,`enc_tel_landline`,`enc_tel_mobile`,`enc_email`,`enc_vat_number`,`vat_number_validated`) VALUES ('".(int) $this->id."','','','','','','','','','','','','',0)";
			if (!doInsertSql($query, '')) {
				throw new Exception( 'Unable to insert user profile details');
			}
		}
		
		//update user params
		$query = "UPDATE #__jomres_guest_profile SET `params` = '".json_encode($this->params)."' WHERE `cms_user_id` = " . (int)$this->id;
		
		if ( !doInsertSql( $query, '' ) ) {
			throw new Exception( "Error: User params update failed");
		}
		
		return true;
	}
	
	/**
	 * Reset manager to non manager.
	 */
	private function reset_manager_to_non_manager()
	{
		$this->accesslevel = 1;
		$this->currentproperty = 0;
		$this->last_active = '1970-01-01 00:00:01';
		$this->authorisedProperties = array();
		$this->jomres_manager_id = 0;

		$this->userIsManager = false;
		$this->superPropertyManager = false;
		$this->userIsSuspended = false;
	}

	/**
	 * Get the manger's current property. If it is unset (the manager has just deleted a property) then resets the current property to the first property encountered in the propertys table.
	 */
	public function check_currentproperty()
	{
		$query = 'SELECT `propertys_uid` FROM #__jomres_propertys WHERE `propertys_uid` = '.(int) $this->currentproperty.' LIMIT 1';
		$result = doSelectSql($query, 1);
		if ((int) $result == 0) {
			$this->setToAnyAuthorisedProperty(); // The super admin's current property is unset. Let's find the first property uid in the database & set to that.
		}
	}

	/**
	 * Sets the users current property to N. Used by the select property dropdown, typically.
	 */
	public function set_currentproperty($currentProperty)
	{
		if (in_array($currentProperty, $this->authorisedProperties)) {
			$query = 'UPDATE #__jomres_managers SET `currentproperty`='.(int) $currentProperty.' WHERE `userid` = '.(int) $this->id;

			if (!doInsertSql($query, false)) {
				trigger_error('Unable to set current property, mysql db failure', E_USER_ERROR);
			}

			$this->currentproperty = $currentProperty;
		}
	}

	/**
	 * Typically called when a manager has deleted a property, finds another property that they are authorised to manage and makes this their current property.
	 */
	public function setToAnyAuthorisedProperty()
	{
		if (!empty($this->authorisedProperties)) {
			reset($this->authorisedProperties);

			return current($this->authorisedProperties);
		} elseif (!defined('_JOMRES_INITCHECK_ADMIN')) {
			trigger_error('Unable to reassign a manager to any existing, authorised property. Either last property in database has been deleted, or this manager has rights to no properties.', E_USER_ERROR);
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	//checks if the current user is a super property manager
	public function is_super_property_manager()
	{
		if ($this->accesslevel == 90) {
			return true;
		}

		return false;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//checks if the current user is a property manager
	public function is_property_manager()
	{
		if ($this->accesslevel == 70) {
			return true;
		}

		return false;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//checks if the current user is a receptionist
	public function is_receptionist()
	{
		if ($this->accesslevel == 50) {
			return true;
		}

		return false;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//checks if the current user is a receptionist
	public function is_registered()
	{
		if ($this->accesslevel == 1) {
			return true;
		}

		return false;
	}
}
