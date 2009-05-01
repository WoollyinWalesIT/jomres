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

// Functions supplied as a class so that they can be extended easily without rewriting  the functions
class jrportal_user_functions 
	{
	// Supplied the Joomla user's id, method will return their details
	function getJoomlaUserDetailsForJoomlaId($id)
		{
		$userArray=array();

		//$query = "SELECT id,name,username,email FROM #__users WHERE id = '$id' LIMIT 1";
		//$result=doSelectSql($query);

		$result=jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($id);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$userArray['id']		= $r->id;
				$userArray['name']		= $r->name; 
				$userArray['username']	= $r->username; 
				$userArray['email']		= $r->email;
				}
			}
		return $userArray;
		}

	// Supplied the Jomres manager's id, method will return their Joomla users id
	function getManagerIdForJosId($id)
		{
		$query = "SELECT manager_uid FROM #__jomres_managers WHERE userid = '$id' LIMIT 1";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				return $r->manager_uid;
				}
			}
		return false;
		}

	// Will find all manager ids for a property id. Note, only returns managers who are not Super Property Managers
	function getManagerIdsForProperty($property_uid,$includingSuperManagers=false)
		{
		$usersArray=array();
		$query = "SELECT `id`,`manager_id` FROM #__jomres_managers_propertys_xref WHERE property_uid = '$property_uid'";
		if ($includingSuperManagers)
			$query.=" AND pu = '0'";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$usersArray[$r->id]['manager_id']		= $r->manager_id;
				}
			}
		return $usersArray;
		}
	
	function getAllManagers()
		{
		$usersArray=array();
		$query = "SELECT manager_uid,userid,username FROM #__jomres_managers";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$usersArray[$r->manager_uid]['manager_uid']		= $r->manager_uid;
				$usersArray[$r->manager_uid]['userid']			= $r->userid;
				$usersArray[$r->manager_uid]['username']		= $r->username;
				}
			}
		return $usersArray;
		}
	
	function makeManagersDropdown($id=null)
		{
		$managerIds=$this->getAllManagers();
		$options = array();
		foreach ($managerIds as $v)
			{
			$options[] = jomresHTML::makeOption( $v['userid'], $v['username'] );
			}
		return jomresHTML::selectList( $options, "userid",'class="inputbox" size="1"', 'value', 'text', $id);
		}
	}
?>