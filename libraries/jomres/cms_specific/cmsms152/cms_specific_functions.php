<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers()
	{
	$users=array();
	$query="SELECT user_id,username FROM #__users";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$users[$id]=array("id"=>$u->user_id,"username"=>$u->username);
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


























