<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

function jomres_cmsspecific_areweinadminarea()
	{
	$administrator_area=false;
	if (strstr($_SERVER['SCRIPT_NAME'],"wp-admin"))
		$administrator_area=true;
	return $administrator_area;
	}


function jomres_cmsspecific_createNewUserOnBooking()
	{
/* 	global $jomresConfig_mailfrom,$jomresConfig_fromname;
	$thisJRUser=jomres_getSingleton('jr_user');
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
	if ($jrConfig['useNewusers']=="0")
		return -1;
	
	$id = $thisJRUser->id;
	
	if (!$thisJRUser->userIsRegistered )
		{
		require_once( JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'joomla'.JRDS.'user'.JRDS.'helper.php' );
		$guestDeets = $tmpBookingHandler->getGuestData();
		
		//If the email address already exists in the system, we'll not bother carrying on, just return this user's "mos_id"
		$query = "SELECT id FROM #__users WHERE email = '".$guestDeets['email']."' LIMIT 1";
		$existing=doSelectSql($query,1);
		if ($existing)
			return $existing;
		
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
			$text .= jr_gettext('_JRPORTAL_NEWUSER_LOG_IN',_JRPORTAL_NEWUSER_LOG_IN,false,false)." ".get_showtime('live_site')."\t\n\t\n";
			
			if (!jomresMailer($jomresConfig_mailfrom, $jomresConfig_fromname, $guestDeets['email'], $subject, $text,$mode=0))
				error_logging('Failure in sending registration email to guest. Target address: '.$hotelemail.' Subject'.$subject);
			}
		}
	return $id; */
	}
	
function jomres_cmsspecific_getRegistrationURL()
	{
	
	
	}
	
function jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row)
	{
/* 	global $mainframe, $_MAMBOTS;
	include( JOMRESCONFIG_ABSOLUTE_PATH."/editor/editor.php");
	$ret = "";
	$editor =& JFactory::getEditor();
	$ret =$editor->display($name, $content, $width, $height, $col, $row);
	return $ret; */
	return $content;
	}

// This is called by the jomres_language class. If the jomres language chooser dropdown is used, then this function is called so that we can set the current cms's language too.
function jomres_cmsspecific_setlanguage($lang)
	{
	// These need testing
	// SetCookie($_COOKIE['jfcookie']['lang'], $lang, time()+60*60);
	// $_COOKIE['jfcookie']['lang']= $lang;
	}

function jomres_cmsspecific_getcurrentusers_id()
	{
	$id=0;
	$user = wp_get_current_user();
	var_dump($user);exit;
	$id=$user->get('id');
	return $id;
	}

function jomres_cmsspecific_addheaddata($type,$path="",$filename="",$fullpathAndfilename="")
	{
	$use_js_cache=false;
	switch ($type) 
		{
		case "javascript":
				//JHTML::script($filename, $path, false);
				wp_register_script($filename, $path.$filename, array('jquery'), '1.0');
		break;
		case "css":
			echo '<link type="text/css" rel="stylesheet" href="' . $path.$filename. '" />' . "\n";
		break;
		default:
			
		break;
		}
	}
	
	
// set our meta data
function jomres_cmsspecific_setmetadata($meta,$data)
	{
/* 	global $mainframe;
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
		} */
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($id)
	{
/* 	$user=array();
	$query="SELECT id,name,username,email FROM #__users WHERE id=".(int)$id;
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$user[$id]=array("id"=>$u->id,"name"=>$u->name,"username"=>$u->username,"email"=>$u->email);
			}
		}
	return $user; */
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_username($username)
	{
/* 	$user=array();
	$query="SELECT id,username FROM #__users WHERE username='".(string)$username."'";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$user[$id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->username);
			}
		}
	return $user; */
	}
	
// As per the function name
function jomres_cmsspecific_getCMS_users_admin_userdetails_by_id($id)
	{
/* 	$user=array();
	$query="SELECT id,username,email FROM #__users WHERE id=".(int)$id;
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$user[$id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->email);
			}
		}
	return $user; */
	}
	
// As per the function name
function jomres_cmsspecific_getCMS_users_admin_getalladmins_ids($id)
	{
/* 	$users=array();
	$query = "SELECT id,username,email FROM #__users WHERE LOWER( usertype ) = 'superadministrator' OR LOWER( usertype ) = 'super administrator'";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$users[$u->id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->email);
			}
		}
	return $users; */
	}

	
	
	
function jomres_cmsspecific_getSearchModuleParameters($moduleName="")
	{
/* 	if (strlen($moduleName)>0 )
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
		} */
	}


// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers()
	{
/* 	$users=array();
	$query="SELECT id,name,username FROM #__users";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$users[$u->id]=array("id"=>$u->id,"username"=>$u->username);
			}
		}
	return $users; */
	}

function jomres_cmsspecific_makeSEF_URL($link)
	{
/* 	jimport('joomla.application.helper');
	if (class_exists('JRoute') )
		{
		$link =  JRoute::_( $link, $xhtml = true, $ssl );
		}
	return $link; */
	}

function jomres_cmsspecific_parseByBots($str)
	{
/* 	$limitstart = 0;
	$dispatcher	=& JDispatcher::getInstance();
	JPluginHelper::importPlugin('content');
	$obj = new stdClass;
	$obj->text=$str;
	$output = $dispatcher->trigger('onPrepareContent', array (&$obj, & $params, $limitstart));
	$output= $obj->text;
	return $output; */
	}
