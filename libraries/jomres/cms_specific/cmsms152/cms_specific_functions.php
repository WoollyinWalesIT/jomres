<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

function jomres_cmsspecific_getcurrentusers_id()
	{
	$id=0;
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
			$users[$id]=array("id"=>$u->id,"username"=>$u->username);
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


























