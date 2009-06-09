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

function subscribers_thisUserIsASubscriber($id=0)
	{
	global $thisJRUser;
	if ($id == 0)
		$id=$thisJRUser->id;
	$query="SELECT id FROM #__jomresportal_subscriptions WHERE cms_user_id =".(int)$id."";
	$result=doSelectSql($query);
	if (count($result) > 0 )
		return true;
	return false;
	}
	
function subscribers_unpublishNproperties($numberOfPropertiesToUnpublish,$cms_user_id)
	{
	if ($numberOfPropertiesToUnpublish > 0 && $cms_user_id > 0)
		{
		$published_properties=subscribers_getManagersPublishedProperties($cms_user_id);
		for ($i=0;$i<$numberOfPropertiesToUnpublish;$i++)
			{
			$query="UPDATE #__jomres_propertys SET `published`='0' WHERE propertys_uid = ".$published_properties[$i]."";
			$result=doInsertSql($query,"Unpublished by system");
			}
		return true;
		}
	else
		return false;
	}


function subscribers_getManagersPublishedProperties($cms_user_id)
	{
	$query="SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '".(int)$cms_user_id."'";
	$managersProperties=doSelectSql($query);
	$mp=array();
	$published_properties=array();
	foreach ($managersProperties as $p)
		{
		$mp[]=(int)$p->property_uid;
		}
	$clause = "WHERE ";
	$clause .= genericOr($mp,'propertys_uid')." AND published = 1";
	$query="SELECT propertys_uid FROM #__jomres_propertys ".$clause." LIMIT ".count($mp);
	$jomresPropertyList=doSelectSql($query);
	foreach($jomresPropertyList as $p)
		{
		$published_properties[]=(int)$p->propertys_uid;
		}
	return $published_properties;
	}
	
function subscribers_checkUserHasSubscriptionsToCreateNewProperty($id=0)
	{
	global $thisJRUser;
	if ($id == 0)
		$id=$thisJRUser->id;
	$allowedProperties = subscribers_getAvailablePropertySlots($id);
	$existingProperties = subscribers_getManagersPublishedProperties($id);

	if ($allowedProperties > count($existingProperties))
		return true;
	else
		return false;
	}
	
function subscribers_getAvailablePropertySlots($id=0)
	{
	global $thisJRUser;
	if ($id == 0)
		$id=$thisJRUser->id;
	$query="SELECT property_limit FROM #__jomresportal_subscriptions WHERE cms_user_id ='".(int)$id."' AND `status` = 1";
	
	$result=doSelectSql($query);

	$allowedProperties=0;
	if (count($result)>0)
		{
		foreach ($result as $r)
			{
			$c=$r->property_limit;
			$allowedProperties=$allowedProperties+$c;
			}
		}
	return $allowedProperties;
	}

function subscribers_getCurrentPropertiesNumbers($id=0)
	{
	global $thisJRUser;
	if ($id == 0)
		$id=$thisJRUser->id;
	$query="SELECT COUNT(`manager_id`)  FROM #__jomres_managers_propertys_xref WHERE manager_id ='".(int)$id."'";
	$existingProperties=doSelectSql($query,1);

	if ($existingProperties)
		return $existingProperties;
	else
		return 0;
	}
	
	
function subscribers_getSubscriberDetailsForJosId($id)
	{
	$user = array();
	if ($id > 0 )
		{
		$query = "SELECT
			`id`,`cms_user_id`,`firstname`,`surname`,`address`,`country`,`postcode`
			FROM #__jomresportal_subscribers WHERE `cms_user_id`=".(int)$id." LIMIT 1";
		$result=doSelectSql($query);
		if ($result && count($result)==1)
			{
			foreach ($result as $r)
				{
				$user['id']					= (int)$r->id;
				$user['cms_user_id']		= (int)$r->cms_user_id;
				$user['firstname']			= (string)$r->firstname;
				$user['surname']			= (string)$r->surname;
				$user['address']			= (string)$r->address;
				$user['country']			= (string)$r->country;
				$user['postcode']			= (string)$r->postcode;
				}
			return $user;
			}
		else
			return false;
		}
	else
		return false;
	}

?>