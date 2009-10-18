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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jrportal_sms_clickatell_message
	{
	function jrportal_sms_clickatell_message()
		{
		$this->id				= 0;
		$this->username			= '';
		$this->number			= '';
		$this->message			= '';
		$this->property_uid		= 0;
		$this->send_time		= '';
		$this->ack				= 0;
		$this->apiMsgid			= '';
		}
  
	function getMessage()
		{
		if ($this->id > 0 )
			{
			$query = "SELECT
				`id`,`username`,`number`,`message`,`property_uid`,`send_time`,`ack`,`apiMsgid`
				FROM #__jomresportal_sms_clickatell_messages WHERE `id`='$this->id' LIMIT 1";

			$result=doSelectSql($query);
			if ($result && count($result)==1)
				{
				foreach ($result as $r)
					{
					$this->id				= $r->id;
					$this->username			= $r->username;
					$this->number			= $r->number;
					$this->message			= $r->message;
					$this->property_uid		= $r->property_uid;
					$this->send_time		= $r->send_time;
					$this->ack				= $r->ack;
					$this->apiMsgid			= $r->apiMsgid;
					}
				return true;
				}
			else
				{
				if (count($result)==0)
					{
					error_logging( "No Messages were found with that id");
					return false;
					}
				if (count($result)> 1)
					{
					error_logging("More than one Message was found with that id");
					return false;
					}
				}
			}
		else
			{
			error_logging( "ID of Message not available");
			return false;
			}
		}

	function commitNewMessage()
		{
		if ($this->id < 1 )
			{
			$query="INSERT INTO #__jomresportal_sms_clickatell_messages
				(
				`username`,
				`number`,
				`message`,
				`property_uid`,
				`send_time`,
				`ack`,
				`apiMsgid`
				)
				VALUES
				(
				'".(string)$this->username."',
				'".(string)$this->number."',
				'".(string)$this->message."',
				'".(int)$this->property_uid."',
				'".date( 'Y-m-d H:i:s' )."',
				'".(int)$this->ack."',
				''
				)";
			$id=doInsertSql($query,"");
			if ($id)
				{
				$this->id=$id;
				return true;
				}
			else
				{
				error_logging( "ID of Message could not be found after apparent successful insert");
				return false;
				}
			}
		error_logging( "ID of Message already available. Are you sure you are creating a new Message?");
		return false;
		}

	function commitUpdateMessage()
		{
		if ($this->id > 0 )
			{
			$query="UPDATE #__jomresportal_sms_clickatell_messages SET
				`username`		= '".(string)$this->username."',
				`number`		= '".(string)$this->number."',
				`message`		= '".(string)$this->message."',
				`property_uid`	= '".(int)$this->property_uid."',
				`send_time`		= '".(string)$this->send_time."',
				`ack`			= '".(int)$this->ack."',
				`apiMsgid`		= '".(string)$this->apiMsgid."'
				WHERE `id`='$this->id'";
			return doInsertSql($query,"");
			}
		error_logging( "ID of Message not available");
		return false;
		}

	}

?>