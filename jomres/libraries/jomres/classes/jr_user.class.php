<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * Manages the jomres user's access rights
#
* @package Jomres
#
 */
class jr_user
	{
	/**
	#
	 * Constructor. Sets the user up based on the $my variable
	#
	 */
	private static $configInstance;
	private static $internal_debugging;
	
	public function __construct() 
		{
		self::$internal_debugging = false;
		$this->id 								= 0;
		$this->userid 							= FALSE;
		$this->username 						= FALSE;
		$this->userIsManager 					= FALSE;
		$this->accesslevel 						= FALSE;
		$this->defaultproperty 					= FALSE;
		$this->currentproperty 					= FALSE;
		$this->authorisedProperties 			= array();
		$this->authorisedPropertyDetails 		= array();
		$this->superPropertyManager 			= FALSE;
		$this->superPropertyManagersAreGods 	= TRUE;   // Change this to false to prevent super property managers from having rights to ALL properties
		$this->userIsRegistered					= FALSE;
		$this->users_timezone					= "America/Lima";
		$this->jomres_manager_id				= 0;
		$this->userIsSuspended					= FALSE;

		$this->id=jomres_cmsspecific_getcurrentusers_id();

		if ($this->id > 0 && $this->id != "0" && !is_null($this->id) )
			{
			$this->userIsRegistered=TRUE;

			$query = "SELECT * FROM #__jomres_managers WHERE userid = '".(int)$this->id."' LIMIT 1";
			$authorisedUsers=doSelectSql($query);
			if (count($authorisedUsers) > 0)
				{
				$this->userIsManager=TRUE;

				foreach ($authorisedUsers as $authUser)
					{
					$this->userid=$authUser->userid;
					$this->username=$authUser->username;
					$this->accesslevel=$authUser->access_level;
					$this->defaultproperty=$authUser->currentproperty;
					$this->currentproperty=$authUser->currentproperty;
					if (isset($authUser->users_timezone))
						$this->users_timezone=$authUser->users_timezone;
					$this->jomres_manager_id = $authUser->manager_uid;
					if ($authUser->suspended == "1")
						$this->userIsSuspended = true;
					
					$basic_property_details =jomres_getSingleton('basic_property_details');

					if ($authUser->pu == "1")
						{
						$this->superPropertyManager = true;
						if ($this->superPropertyManagersAreGods)
							{
							$query = "SELECT propertys_uid,property_name FROM #__jomres_propertys ORDER BY property_name ASC";;
							$propertysList =doSelectSql($query);
							$basic_property_details->get_property_name_multi($propertysList,true);
							if (count($propertysList) >0)
								{
								foreach ($propertysList as $p)
									{
									$this->authorisedProperties[]=$p->propertys_uid;
									$this->authorisedPropertyDetails[$p->propertys_uid]=array('property_name'=>$p->property_name);
									}
								}
							}
						else
							{
							$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '".(int)$this->id."'";
							$managersToPropertyList = doSelectSql($query);
							foreach ($managersToPropertyList as $x)
								{
								$this->authorisedProperties[]=$x->property_uid;
								}
							$gor= genericOr($this->authorisedProperties ,'propertys_uid');
							$query = "SELECT propertys_uid,property_name FROM #__jomres_propertys WHERE ".$gor. "ORDER BY property_name ASC";;
							$propertysList =doSelectSql($query);
							$basic_property_details->get_property_name_multi($propertysList,true);

							if (count($propertysList) >0)
								{
								foreach ($propertysList as $p)
									{
									
									$obj->property_name=$basic_property_details->get_property_name($key);
									$this->authorisedPropertyDetails[$p->propertys_uid]=array('property_name'=>$pname);
									}
								}
							}
						}
					else
						{
						$this->superPropertyManager = false;

						$query="SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '".(int)$this->id."'";
						$managersToPropertyList = doSelectSql($query);
						foreach ($managersToPropertyList as $x)
							{
							$this->authorisedProperties[]=$x->property_uid;
							}
						$gor= genericOr($this->authorisedProperties ,'propertys_uid');
						$query = "SELECT propertys_uid,property_name FROM #__jomres_propertys WHERE ".$gor. "ORDER BY property_name ASC";;
						$propertysList =doSelectSql($query);
						if (count($propertysList) >0)
							{
							foreach ($propertysList as $p)
								{
								$this->authorisedPropertyDetails[$p->propertys_uid]=array('property_name'=>$p->property_name);
								}
							}
						else if (!defined('_JOMRES_INITCHECK_ADMIN'))
							{
							trigger_error ("This manager ".(int)$this->id."  hasn't got any properties.", E_USER_ERROR);
							}
						}
					if (!in_array($this->currentproperty,$this->authorisedProperties))
						$this->currentproperty=$this->setToAnyAuthorisedProperty();
					}
				}
			else
				{
				$this->userid = FALSE;
				$this->username = FALSE;
				$this->userIsManager = FALSE;
				$this->accesslevel = FALSE;
				$this->defaultproperty = FALSE;
				$this->currentproperty = FALSE;
				$this->authorisedProperties = array();
				}
			}
		else
			{

			define($this->userIsManager,FALSE);

			}
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new showtime();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	public function __set($setting,$value)
		{
		if (self::$internal_debugging)
			echo "Setting ".$setting." to ".$value." <br>";
		$this->$setting = $value;
		return true;
		}
		
	public function __get($setting)
		{
		if (self::$internal_debugging)
			echo "Getting ".$setting." which is ".$this->$setting."<br>";
		if (isset($this->$setting))
			return $this->$setting;
		return null;
		}
	 

	/**
	#
	 * Get the manger's current property. If it is unset (the manager has just deleted a property) then resets the current property to the first property encountered in the propertys table
	#
	 */
	function check_currentproperty()
		{
		$query="SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid = '".(int)$this->currentproperty."'";
		$propertycount= doSelectSql($query);
		if (count($propertycount) == 0)
			{
			$this->setToAnyAuthorisedProperty();// The super admin's current property is unset. Let's find the first property uid in the database & set to that.
			}
		}

	/**
	#
	 * Sets the users current property to N. Used by the select property dropdown, typically.
	#
	 */
	function set_currentproperty($currentProperty)
		{

		if (in_array($currentProperty,$this->authorisedProperties) )
			{
			$query="UPDATE #__jomres_managers SET `currentproperty`='$currentProperty' WHERE userid = '".(int)$this->id."'";
			if (!doInsertSql($query,FALSE)) trigger_error ("Unable to set current property, mysql db failure", E_USER_ERROR);
			$this->currentproperty=$currentProperty;
			}
		}

	/**
	#
	 * Typically called when a manager has deleted a property, finds another property that they are authorised to manage and makes this their current property
	#
	 */
	function setToAnyAuthorisedProperty()
		{
		if (count($this->authorisedProperties)>0)
			{
			if ($this->authorisedProperties[0]>0)
				{
				$this->set_currentproperty($this->authorisedProperties[0]);
				return $this->authorisedProperties[0];
				}
			else
				{
				$this->set_currentproperty($this->authorisedProperties[1]);
				return $this->authorisedProperties[1];
				}
			}
		else if (!defined('_JOMRES_INITCHECK_ADMIN'))
			{
			trigger_error ("Unable to reassign a manager to any existing, authorised property. Either last property in database has been deleted, or this manager has rights to no properties.", E_USER_ERROR);
			}
		}
	}

?>