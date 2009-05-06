<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

function jomres_cmsspecific_createNewUserOnBooking()
	{
	global $thisJRUser,$tmpBookingHandler,$jomresConfig_mailfrom,$jomresConfig_fromname,$jomresConfig_live_site;
	if (!$thisJRUser->userIsRegistered && defined('_JOMRES_NEWJOOMLA') )
		{
		// Do stuff
		}
	return 0; // You'd need to return a valid id for the cms's user, 0 means that it's not valid
	}
	
function jomres_cmsspecific_getRegistrationURL()
	{
	
	
	}

function jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row)
	{
	$ret = "";
	return $ret;
	}

// This is called by the jomres_language class. If the jomres language chooser dropdown is used, then this function is called so that we can set the current cms's language too.
function jomres_cmsspecific_setlanguage($lang)
	{
	}


function jomres_cmsspecific_getcurrentusers_id()
	{
	$id=0;
	$sessionid = session_id();
	$query="SELECT userid FROM #__module_feusers_loggedin WHERE sessionid='".$sessionid."'";
	$id=(int)doSelectSql($query,1);
	if (!$id)
		return 0;

	// if (!isset($_SESSION['cms_admin_user_id']))
		// $id = 0;
	// else
		// $id = (int)$_SESSION['cms_admin_user_id'];
	return $id;
	}

function jomres_cmsspecific_addheaddata($type,$path="",$filename="",$fullpathAndfilename="")
	{
	switch ($type) 
		{
		case "javascript":
			echo '<script type="text/javascript" src="'.$fullpathAndfilename.'"></script>';
		break;
		case "css":
			echo '<link rel="stylesheet" type="text/css" href="'.$jfullpathAndfilename.'" />';
		break;
		default:
			
		break;
		}
	}
	
// set our meta data
function jomres_cmsspecific_setmetadata($meta,$data)
	{
	
	}

	
// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($id)
	{
	$user=array();
	$query="SELECT id,username FROM #__module_feusers_users WHERE id=".(int)$id. " LIMIT 1";
	$userList = doSelectSql($query);
	
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$user[$id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->username);
			}
		}
	return $user;
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_username($username)
	{
	$query="SELECT id,username FROM #__module_feusers_users WHERE username='".(string)$username."' LIMIT 1";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$user=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->username);
			}
		}
	return $user;
	}
	
// As per the function name
function jomres_cmsspecific_getCMS_users_admin_userdetails_by_id($id)
	{
	$user=array();
	$query="SELECT id,username,email FROM #__users WHERE id=".(int)$id. " LIMIT 1";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$user[$id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->email);
			}
		}
	return $user;
	}
	
// As per the function name
function jomres_cmsspecific_getCMS_users_admin_getalladmins_ids($id)
	{
	$users=array();
	$query="SELECT id,username,email FROM #__users WHERE admin_access=1";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$users[$id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->email);
			}
		}
	return $users;
	}



// Todo, this currently has the Joomla module search 
function jomres_cmsspecific_getSearchModuleParameters($moduleName)
	{
	return getIntegratedSearchModuleVals();
	return $vals;
	}


// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers()
	{
	$users=array();
	$query="SELECT id,username FROM #__module_feusers_users";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$users[$u->id]=array("id"=>$u->id,"username"=>$u->username);
			}
		}
	return $users;
	}

function jomres_cmsspecific_makeSEF_URL($link)
	{
	return $link;
	}

function jomres_cmsspecific_parseByBots($str)
	{
	return $str;
	}

function jomres_cmsspecific_setPageTitle($title)
	{
	// Need to figure out how to do this
	}
	
function jomres_cmsspecific_setPageMetatags($metaTag)
	{
	// Need to figure out how to do this
	}
	
	
?>


























