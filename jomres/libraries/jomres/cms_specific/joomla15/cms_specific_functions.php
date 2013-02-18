<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

function jomres_cmsspecific_getregistrationlink()
	{
	return jomresURL(get_showtime('live_site')."/index.php?option=com_user&view=register");
	}

function jomres_cmsspecific_getlogout_task()
	{
	return 'index.php?option=com_user&view=login';
	}

function jomres_cmsspecific_getlogin_task()
	{
	return 'index.php?option=com_user&view=login';
	}

function jomres_cmsspecific_areweinadminarea()
	{
	$administrator_area=false;
	if (strstr($_SERVER['SCRIPT_NAME'],"/administrator/"))
		$administrator_area=true;
	return $administrator_area;
	}


function jomres_cmsspecific_createNewUserOnBooking()
	{
	global $jomresConfig_mailfrom,$jomresConfig_fromname;
	$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
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
			$username=strtolower(preg_replace('/[^A-Za-z0-9_-]+/', "", $username));
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
			
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig=$siteConfig->get();
			if ($jrConfig['useNewusers_sendemail'] == "1")
				{
				if (!jomresMailer($jomresConfig_mailfrom, $jomresConfig_fromname, $guestDeets['email'], $subject, $text,$mode=0))
					error_logging('Failure in sending registration email to guest. Target address: '.$hotelemail.' Subject'.$subject);
				}
			}
		}
	return $id;
	}
	
function jomres_cmsspecific_getRegistrationURL()
	{
	
	
	}
	
function jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row)
	{
	$ret = "";
	$editor =& JFactory::getEditor();
	$ret =$editor->display($name, $content, $width, $height, $col, $row);
	return $ret;
	}

// This is called by the jomres_language class. If the jomres language chooser dropdown is used, then this function is called so that we can set the current cms's language too.
function jomres_cmsspecific_setlanguage($lang)
	{
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

function jomres_cmsspecific_addheaddata($type,$path="",$filename="",$fullpathAndfilename="",$disable_compression=false)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$use_js_cache = false;
	if ($jrConfig['javascript_caching_enabled'] == "1")
		$use_js_cache = true;
	set_showtime('javascript_caching_enabled',$use_js_cache);
	switch ($type) 
		{
		case "javascript":
			if ($use_js_cache && $filename != "jquery-1.5.2.min.js" && !jomres_cmsspecific_areweinadminarea() && !$disable_compression )
				{
				$jomres_js_cache = get_showtime('js_cache');

				$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
				if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_cache"))
					mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_cache");

				$cached_js_filename = "javascript_cache.js";
				$cached_js_file_livesite = get_showtime('live_site').'/jomres/temp/javascript_cache/';
				$cached_js_file_abs = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_cache".JRDS;

				$original_javascript = file_get_contents($path.$filename);
				//$original_javascript = removeBOM($original_javascript);
				$jomres_js_cache .= "
				".$original_javascript;
				
				$fp=fopen($cached_js_file_abs.$cached_js_filename,'w');
				flock($fp, LOCK_EX);
				fwrite($fp,$jomres_js_cache);
				flock($fp, LOCK_UN);
				fclose($fp);
				
				set_showtime('js_cache',$jomres_js_cache);
				set_showtime('js_cache_path',$cached_js_file_abs);
				set_showtime('js_cache_filename',$cached_js_filename);
				set_showtime('js_cache_livesite',$cached_js_file_livesite);
				

				//JHTML::script($cached_js_filename, $cached_js_file_livesite, false);
				}
			else
				JHTML::script($filename, $path, false);
		break;
		case "css":
			JHTML::stylesheet($filename, $path);
		break;
		default:
			
		break;
		}
	}
	

// set our meta data
function jomres_cmsspecific_setmetadata($meta,$data)
	{
	global $mainframe;
	$data=jomres_decode($data);
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
			$users[$u->id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->email);
			}
		}
	return $users;
	}

	
	
	
function jomres_cmsspecific_getSearchModuleParameters($moduleName="")
	{
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
	}


// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers()
	{
	$users=array();
	$query="SELECT id,name,username,email FROM #__users";
	$userList = doSelectSql($query);
	if (count($userList)>0)
		{
		foreach ($userList as $u)
			{
			$users[$u->id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->email);
			}
		}
	return $users;
	}

function jomres_cmsspecific_makeSEF_URL($link)
	{
	jimport('joomla.application.helper');
	if (class_exists('JRoute') )
		{
		$link =  JRoute::_( $link, $xhtml = true );
		}
	$link=jomres_decode($link);
	return stripslashes($link);
	}

function jomres_cmsspecific_parseByBots($str)
	{
	$limitstart = 0;
	$dispatcher	=& JDispatcher::getInstance();
	JPluginHelper::importPlugin('content');
	$obj = new stdClass;
	$obj->text=$str;
	$output = $dispatcher->trigger('onPrepareContent', array (&$obj, & $params, $limitstart));
	$output= $obj->text;
	return $output;
	}

// Effectively a dummy function. The J2.5 and J3 versions of this script use some Joomla code to filter urls, which installations of Jomres will utilise. We'll not be including that code in J1.5 installations as it's no longer formally supported, however we don't want existing installations to crash with a fatal error, so we have this dummy function here.
function jomres_cmsspecific_stringURLSafe($str)
	{
	return $str;
	}