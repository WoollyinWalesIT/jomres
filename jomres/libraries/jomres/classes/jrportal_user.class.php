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

class jrportal_user
	{
	function jrportal_user()
		{
		$this->id					= 0;
		$this->manager_uid			= 0;
		$this->jos_id				= 0;
		$this->portal_booking_id	= 0;
		$this->username				= '';
		$this->email				= '';
		$this->created				= "0000-00-00 00:00:00";
		}

	function getJUser()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				id,manager_uid,jos_id,portal_booking_id,username,email,created
				FROM #__jomresportal_users WHERE `id`='$this->id' LIMIT 1";
			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= $r->id;
					$this->manager_uid			= $r->manager_uid;
					$this->jos_id				= $r->jos_id;
					$this->portal_booking_id	= $r->portal_booking_id;
					$this->username				= $r->username;
					$this->email				= $r->email;
					$this->created				= $r->created;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					$this->error = "No users were found with that id";
					return false;
					}
				if (count($result)> 1)
					{
					$this->error = "More than one user was found with that id";
					return false;
					}
				}
			}
		else
			{
			$this->error = "ID of user not available";
			return false;
			}
		}

	function commitNewUser()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_users
				(
				`manager_uid`,
				`jos_id`,
				`portal_booking_id`,
				`username`,
				`email`,
				`created`
				)
				VALUES
				(
				'$this->manager_uid',
				'$this->jos_id',
				'$this->portal_booking_id',
				'$this->username',
				'$this->email',
				'".date("Y-m-d H-i-s")."'
				)";
			$result = doInsertSql($query,'');

			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				$this->error = "ID of user could not be found after apparent successful insert";
				return false;
				}
			}
		$this->error = "ID of user already available. Are you sure you are creating a new user?";
		return false;
		}

	function commitUpdateUser()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_users SET
				`manager_uid` 			= '$this->manager_uid',
				`jos_id` 				= '$this->jos_id',
				`portal_booking_id` 	= '$this->portal_booking_id',
				`username` 				= '$this->username',
				`email` 				= '$this->email',
				`created` 				= '$this->created'
				WHERE `id`				= '$this->id'";
			return doInsertSql($query,'');
			}
		$this->error = "ID of user not available";
		return false;
		}

	function deleteUser()
		{
		$query="DELETE FROM #__jomresportal_users WHERE `id`='$this->id' LIMIT 1";
		return doInsertSql($query,'');
		}

	}

?>