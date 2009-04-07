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

// This is called by the jomres_language class. If the jomres language chooser dropdown is used, then this function is called so that we can set the current cms's language too.
function jomres_cmsspecific_setlanguage($lang)
	{
	// These need testing
	SetCookie($_COOKIE['jfcookie']['lang'], $lang, time()+60*60);
	$_COOKIE['jfcookie']['lang']= $lang;
	}

function jomres_cmsspecific_getcurrentusers_id()
	{
	$id=0;
	$user =& JFactory::getUser();
	$id=$user->get('id');
	return $id;
	}

// set our meta data
function jomres_cmsspecific_setmetadata($meta,$data)
	{
	global $mainframe;
	switch ($meta) 
		{
		case "title":
			$mainframe->setPageTitle(stripslashes($data));
		break;
		case "description":
			$mainframe->appendMetaTag( "description",stripslashes($data));
		break;
		case "keywords":
			$mainframe->appendMetaTag( "keywords", stripslashes($data));
		break;
		default:
			
		break;
		}
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($id)
	{
	$user=array();
	$query="SELECT id,username FROM #__users WHERE id=".(int)$id;
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
	$user=array();
	$query="SELECT id,username FROM #__users WHERE username='".(string)$username."'";
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
function jomres_cmsspecific_getCMS_users_admin_userdetails_by_id($id)
	{
	$user=array();
	$query="SELECT id,username,email FROM #__users WHERE id=".(int)$id;
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
	$query = "SELECT id,username,email FROM #__users WHERE LOWER( usertype ) = 'superadministrator' OR LOWER( usertype ) = 'super administrator'";
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

	
	
	
function jomres_cmsspecific_getSearchModuleParameters($moduleName="")
	{
	if (strlen($moduleName)>0 )
		{
		if ($moduleName == "mos_jomsearch_m0")
			{
			return getIntegratedSearchModuleVals();
			}
		else
			{
			$query="SELECT params FROM #__modules WHERE module = '$moduleName'";
			$p=doSelectSql($query,1);

			$vals=array();
			$arr=explode("\n",$p);
			if (count($arr)>0)
				{
				foreach ($arr as $str)
					{
					$dat=explode("=",$str);
					$key = $dat[0];
					$val = $dat[1];
					if (strlen($key)>0)
						$vals[$key]=$val;
					}
				}
			return $vals;
			}
		}
	}


// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers()
	{
	$users=array();
	$query="SELECT id,name,username FROM #__users";
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
	jimport('joomla.application.helper');
	if (class_exists('JRoute') )
		{
		$link =  JRoute::_( $link, $xhtml = true, $ssl );
		}
	return $link;
	}

function jomres_cmsspecific_parseByBots($str)
	{
	return $str;
	}

?>


























