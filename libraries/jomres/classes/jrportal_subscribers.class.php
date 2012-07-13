<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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