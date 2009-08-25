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

class jrportal_subscribers
	{
	function jrportal_subscribers()
		{
		$this->id					= 0;
		$this->cms_user_id			= 0;
		$this->firstname			= '';
		$this->surname				= '';
		$this->address				= '';
		$this->country				= '';
		$this->postcode				= '';

		$this->error				= null;
		}
		

	function getSubscriber()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`cms_user_id`,`firstname`,`surname`,`address`,`country`,`postcode`
				FROM #__jomresportal_subscribers WHERE `id`=".(int)$this->id." LIMIT 1";

			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id					= (int)$r->id;
					$this->cms_user_id			= (int)$r->cms_user_id;
					$this->firstname			= (string)$r->firstname;
					$this->surname				= (string)$r->surname;
					$this->address				= (string)$r->address;
					$this->country				= (string)$r->country;
					$this->postcode				= (string)$r->postcode;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					error_logging(  "No Subscribers were found with that id");
					return false;
					}
				if (count($result)> 1)
					{
					error_logging(  "More than one Subscriber was found with that id");
					return false;
					}
				}
			}
		else
			{
			error_logging(  "ID of Subscribers not available");
			return false;
			}
		}

	function commitSubscriber()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_subscribers
				(
				`cms_user_id`,
				`firstname`,
				`surname`,
				`address`,
				`country`,
				`postcode`
				)
				VALUES
				(
				'".(int)$this->cms_user_id."',
				'".(string)$this->firstname."',
				'".(string)$this->surname."',
				'".(string)$this->address."',
				'".(int)$this->country."',
				'".(string)$this->postcode."'
				)";
			
			$result=doInsertSql($query,"");
			if ($result)
				{
				$this->id=$result;
				return true;
				}
			else
				{
				error_logging(  "ID of Subscriber could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Subscriber already available. Are you sure you are creating a new Commission rate?");
		return false;
		}

	function commitUpdateSubscriber()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_subscribers SET
				`cms_user_id` 		= '".(int)$this->cms_user_id."',
				`firstname`			= '".(string)$this->firstname."',
				`surname` 			= '".(string)$this->surname."',
				`address` 			= '".(string)$this->address."',
				`country` 			= '".(string)$this->country."',
				`postcode` 			= '".(string)$this->postcode."'
				WHERE `id`=".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				return true;
			else
				{
				error_logging(  "ID of Subscriber could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging(  "ID of Subscriber not available");
		return false;
		}

	function deleteSubscriber()
		{
		if ($this->id > 0 )
			{
			$query="DELETE FROM #__jomresportal_subscribers WHERE `id` = ".(int)$this->id;
			$result=doInsertSql($query,"");
			if ($result)
				{
				return true;
				}
			else
				{
				error_logging(  "Could not delete Subscriber.");
				return false;
				}
			}
		error_logging(  "ID of Subscriber not available");
		return false;
		}
	}

?>