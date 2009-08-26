<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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