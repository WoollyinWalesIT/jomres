<?php 
/*
This file licensed DILLYGAF. I care so much that I haven't even bothered to write a license.

The Jomres package is proprietary licensed, which means you can't be naughty and give it away, otherwise I'd never be able to make any money to keep developing it.

That said, the files in the /jomres/libraries/jomres/cms_specific/*** directories are licensed under a dillygaf license (just google "dillygaf"), which means I don't care what you do with them, if you want to copy my files and adapt them to make your own and license them solely for your use you can. Even better, you could re-write them to work with X CMS and release them for other people to use.  The only thing you can't do is claim copyright of the original files otherwise you could stop me from using and distributing my own files, and that would be silly. 

I'm hard working, I'm not a genius there are lots of CMSs out there I'm not familiar with and if you can modify this code to make Jomres work on the CMS of your choice then more power to your elbow.

*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

function jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row)
	{
	global $mainframe, $_MAMBOTS;
	include( JOMRESCONFIG_ABSOLUTE_PATH."/editor/editor.php");
	$ret = "";
	$editor =& JFactory::getEditor();
	$ret =$editor->display($name, $content, $width, $height, $col, $row);
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


























