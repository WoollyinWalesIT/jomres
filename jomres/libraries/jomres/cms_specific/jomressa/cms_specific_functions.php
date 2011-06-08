<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

function jomres_cmsspecific_areweinadminarea()
	{
	$administrator_area=false;
	if (substr($_SERVER['SCRIPT_NAME'],"admin.php"))
		$administrator_area=true;
	return $administrator_area;
	}


	// TODO
function jomres_cmsspecific_createNewUserOnBooking()
	{
	/*
	global $thisJRUser,$tmpBookingHandler,$jomresConfig_mailfrom,$jomresConfig_fromname,$jomresConfig_live_site,$jrConfig;
	if ($jrConfig['useNewusers']=="0")
		return -1;
	$id = 0;
	
	$thisJRUser->id=$id;
	$tmpBookingHandler->updateGuestField('mos_userid',$id);
	$tmpBookingHandler->saveGuestData();
	
	if (!$thisJRUser->userIsRegistered )
		{
		require_once( JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'joomla'.JRDS.'user'.JRDS.'helper.php' );
		$guestDeets = $tmpBookingHandler->getGuestData();
		$valid=false;
		while (!$valid)
			{
			$username = $guestDeets['firstname']."_".$guestDeets['surname'].rand(0, 1000);
			$username=strtolower(ereg_replace("[^A-Za-z0-9]", "", $username));
			$query="SELECT FROM #__users WHERE username = '".$username."'";
			$users=doSelectSql($query);
			if (count($users)==0)
				$valid=true;
			}
		$name = $guestDeets['firstname']." ".$guestDeets['surname'];
		$usertype="Registered";
		$block = "0";
		
		$password = JUserHelper::genRandomPassword();
		$encryptedPassword=JUserHelper::getCryptedPassword($password);
		
		$query = "INSERT INTO #__users (
			`name`,
			`username`,
			`email`,
			`password`,
			`usertype`,
			`gid`,
			`registerDate`
			) VALUES (
			'".$name."',
			'".$username."',
			'".$guestDeets['email']."',
			'".$encryptedPassword."',
			'".$usertype."',
			18,
			'".date( 'Y-m-d H:i:s' )."'
			) ";
		$id=doInsertSql($query);
		if (!$id)
			{
			trigger_error ("Failed insert new user ".$query, E_USER_ERROR);
			$this->insertSuccessful =false;
			}
		else 
			{
			
			$query = "INSERT INTO #__core_acl_aro (
				`section_value`,
				`value`,
				`name`
				) VALUES (
				'users',
				'".$id."',
				'".$name."'
				) ";
			$aro=doInsertSql($query);
			$query = "INSERT INTO #__core_acl_groups_aro_map (
				`group_id`,
				`aro_id`
				) VALUES (
				18,
				".$aro."
				) ";
			$map=doInsertSql($query);
				
				
			//$thisJRUser->userIsRegistered=true; // Disabled as this setting would be incorrect during the booking phase. We want newly created users to have their details recorded by the insertGuestDeets function in insertbookings
			$thisJRUser->id=$id;
			$tmpBookingHandler->updateGuestField('mos_userid',$id);
			$tmpBookingHandler->saveGuestData();
			
			$subject = jr_gettext('_JRPORTAL_NEWUSER_SUBJECT',_JRPORTAL_NEWUSER_SUBJECT,false,false);
			
			$text = jr_gettext('_JRPORTAL_NEWUSER_DEAR',_JRPORTAL_NEWUSER_DEAR,false,false)." ".stripslashes($guestDeets['firstname'])." ".stripslashes($guestDeets['surname'])." \t\n";
			$text .= jr_gettext('_JRPORTAL_NEWUSER_THANKYOU',_JRPORTAL_NEWUSER_THANKYOU,false,false)." \t\n";
			$text .= jr_gettext('_JRPORTAL_NEWUSER_USERNAME',_JRPORTAL_NEWUSER_USERNAME,false,false)." ".$username." \t\n";
			$text .= jr_gettext('_JRPORTAL_NEWUSER_PASSWORD',_JRPORTAL_NEWUSER_PASSWORD,false,false)." ".$password." \t\n";
			$text .= jr_gettext('_JRPORTAL_NEWUSER_LOG_IN',_JRPORTAL_NEWUSER_LOG_IN,false,false)." ".$jomresConfig_live_site."\t\n\t\n";
			
			if (!jomresMailer($jomresConfig_mailfrom, $jomresConfig_fromname, $guestDeets['email'], $subject, $text,$mode=0))
				error_logging('Failure in sending registration email to guest. Target address: '.$hotelemail.' Subject'.$subject);
			}
		}
	else
		{
		$id = $thisJRUser->id;
		}
	return $id;
	*/
	}
	
function jomres_cmsspecific_getRegistrationURL()
	{
	
	
	}
	
function jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row)
	{
	//global $mainframe, $_MAMBOTS;
	//include( JOMRESCONFIG_ABSOLUTE_PATH."/editor/editor.php");
	//$ret = "";
	//$editor =& JFactory::getEditor();
	//$ret =$editor->display($name, $content, $width, $height, $col, $row);
	return '<textarea name="'.$name.'" rows="'.$row.'" cols="'.$col.'" >'.$content.'</textarea>';
	}

// This is called by the jomres_language class. If the jomres language chooser dropdown is used, then this function is called so that we can set the current cms's language too.
function jomres_cmsspecific_setlanguage($lang)
	{
	// These need testing
	SetCookie($_COOKIE['jfcookie']['lang'], $lang, time()+60*60);
	$_COOKIE['jfcookie']['lang']= $lang;
	}

function jomres_cmsspecific_getcurrentusers_id()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	return $JSAuser->id;
	}

function jomres_cmsspecific_addheaddata($type,$path="",$filename="",$fullpathAndfilename="")
	{
	$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');
	switch ($type) 
		{
		case "javascript":
			$jomresSitefactory->setHead($type,$content=array('path'=>get_showtime('live_site')."/".$path,'filename'=>$filename));
		break;
		case "css":
			$jomresSitefactory->setHead($type,$content=array('path'=>get_showtime('live_site')."/".$path,'filename'=>$filename));
		break;
		default:
			
		break;
		}
	}
	
	
// set our meta data
function jomres_cmsspecific_setmetadata($meta,$data)
	{
	$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');
	switch ($meta) 
		{
		case "title":
			$type = "title";$content=array('title'=>$data);
			$jomresSitefactory->setHead($type,$content);
		break;
		case "description":
			$type = "description";$content=array('description'=>$data);
			$jomresSitefactory->setHead($type,$content);
		break;
		case "keywords":
			$type = "keywords";$content=array('keywords'=>$data);
			$jomresSitefactory->setHead($type,$content);
		break;
		default:
			
		break;
		}
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($id)
	{
	$user=array();
	$query="SELECT id,name,username,email FROM #__users WHERE id=".(int)$id;
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$user[$id]=array("id"=>$u->id,"name"=>$u->name,"username"=>$u->username,"email"=>$u->email);
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
			$user[$id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->username);
			}
		}
	return $user;
	}
	
// As per the function name
function jomres_cmsspecific_getCMS_users_admin_getalladmins_ids($id)
	{
	$users=array();
	$query = "SELECT id,username,email FROM #__users WHERE access_level = '10'";
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
	return getIntegratedSearchModuleVals();
	// N/A in Jomres SA
	/*
	if (strlen($moduleName)>0 )
		{
		if ($moduleName == "mod_jomsearch_m0")
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
	*/
	}


// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers()
	{
	$users=array();
	$query="SELECT id,real_name,login FROM #__users";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$users[$u->id]=array("id"=>$u->id,"username"=>$u->login);
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
