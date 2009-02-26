<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($id)
	{
	$user=array();
	$query="SELECT id,username FROM #__module_feusers_users WHERE id=".(int)$id;
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
	$query="SELECT id,username FROM #__module_feusers_users WHERE username='".(string)$username."'";
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
	if (strlen($moduleName)>0 )
		{
		$query="SELECT params FROM #__modules WHERE module = '$moduleName'";
		$p=doSelectSql($query,1);
		}
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


























