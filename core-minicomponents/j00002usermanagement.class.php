<?php
/**
#
 * Mini-component core file: Manages user information
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Manages user access rights
 #
* @package Jomres
#
 */
class j00002usermanagement {

	/**
	#
	 * Manages user access rights
	#
	 */
	function j00002usermanagement($componentArgs=null)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$thisJRUser= new jr_user();
		if ($thisJRUser->userIsManager==TRUE)
			$thisJRUser->check_currentproperty();
		$thisProperty = trim( jomresGetParam( $_REQUEST, 'thisProperty', 0 ) );
		if (in_array($thisProperty,$thisJRUser->authorisedProperties) && $thisProperty != $thisJRUser->currentproperty)
			{
			if ($thisJRUser->userIsManager==TRUE && $thisProperty>0)
				{
				$thisJRUser->set_currentproperty($thisProperty);
				$qString=$_SERVER['QUERY_STRING'];
				jomresRedirect( jomresURL("index.php?".$qString) );
				}
			}
		if ($thisJRUser->currentproperty == 0 && $thisJRUser->userIsManager)
			$thisJRUser->setToAnyAuthorisedProperty();
		$this->userObject=$thisJRUser;
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
		return $this->userObject;
		}
	}


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
	function jr_user()
		{
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
		
		$sessionid = session_id();
		if( $sessionid == "" )
			{
			return false;
			}

		$this->id=jomres_cmsspecific_getcurrentusers_id();
		
		if ($this->id != "0")
			{
			$this->userIsRegistered=TRUE;

			$query = "SELECT userid,username,access_level,property_uid,currentproperty,pu FROM #__jomres_managers WHERE userid = '".(int)$this->id."' LIMIT 1";
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
					if ($authUser->pu == "1")
						{
						$this->superPropertyManager = true;
						if ($this->superPropertyManagersAreGods)
							{
							$query = "SELECT propertys_uid,property_name FROM #__jomres_propertys ORDER BY property_name ASC";;
							$propertysList =doSelectSql($query);
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
							if (count($propertysList) >0)
								{
								foreach ($propertysList as $p)
									{
									$this->authorisedPropertyDetails[$p->propertys_uid]=array('property_name'=>$p->property_name);
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
						else
							trigger_error ("This manager ".(int)$this->id."  hasn't got any properties.", E_USER_ERROR);
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
		else
			{
			trigger_error ("Unable to reassign a manager to any existing, authorised property. Either last property in database has been deleted, or this manager has rights to no properties.", E_USER_ERROR);
			}
		}
	}
?>