<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

function jomres_cmsspecific_getregistrationlink()
	{
	return jomresURL(get_showtime('live_site')."/index.php?option=com_users&view=registration");
	}

function jomres_cmsspecific_getlogout_task()
	{
	return 'index.php?option=com_users&view=login';
	}

function jomres_cmsspecific_getlogin_task()
	{
	return 'index.php?option=com_users&view=login';
	}

function jomres_cmsspecific_areweinadminarea()
	{
	$administrator_area=false;
	if (strpos($_SERVER['SCRIPT_NAME'],"administrator"))
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
			`registerDate`
			) VALUES (
			'".$name."',
			'".$username."',
			'".$guestDeets['email']."',
			'".$encryptedPassword."',
			'".$usertype."',
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
			
			$query = "INSERT INTO #__user_usergroup_map  (
				`user_id`,
				`group_id`
				) VALUES (
				'".$id."',
				2
				) ";
			doInsertSql($query);
			
				
				
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
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();

	if ($jrConfig['use_jomres_own_editor'] == "1")
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		$ret = $MiniComponents->specificEvent('06005','editor',array("name"=>$name,"content"=>$content,"height"=>$height));
		}
	else
		{
		$editor =& JFactory::getEditor(); 
		$ret =$editor->display($name, $content, $width, $height, $col, $row);
		}
	return $ret;
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
	$id=0;
	$user =& JFactory::getUser();
	$id=$user->get('id');
	return $id;
	}

function jomres_cmsspecific_addheaddata($type,$path="",$filename="",$skip=false)
	{
	if ($filename =="")
		return;
	
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$use_js_cache = false;
	if ($jrConfig['javascript_caching_enabled'] == "1")
		$use_js_cache = true;
		
	// Feature is currently disabled
	$use_js_cache = false;
		
	set_showtime('javascript_caching_enabled',$use_js_cache);
	
	$use_css_cache = false;
	if ($jrConfig['css_caching_enabled'] == "1")
		$use_css_cache = true;
		
	// Feature is currently disabled
	$use_css_cache = false;
	
	set_showtime('css_caching_enabled',$use_css_cache);

	switch ($type) 
		{
		case "javascript":
			if ($use_js_cache && !jomres_cmsspecific_areweinadminarea() && !$skip )
				{
				$rarely_changing_scripts = array();
				$rarely_changing_scripts[] = 'jquery-1.7.1.min.js';
				$rarely_changing_scripts[] = "jquery-ui-1.8.16.custom.min.js";
				$rarely_changing_scripts[] = "jomres.js";
				$rarely_changing_scripts[] = "jquery.cookee.js";
				$rarely_changing_scripts[] = "jquery.cookee.for_tabs.js";
				$rarely_changing_scripts[] = "heartbeat.js";
				$rarely_changing_scripts[] = "jquery.bt.js";
				$rarely_changing_scripts[] = "jquery.hoverIntent.js";
				$rarely_changing_scripts[] = "jquery.rating.js";
				$rarely_changing_scripts[] = "jquery.validate.js";
				$rarely_changing_scripts[] = "jquery.jeditable.js";
				$rarely_changing_scripts[] = "jquery.jgrowl.css";
				$rarely_changing_scripts[] = "jquery.jgrowl.js";
				$rarely_changing_scripts[] = "excanvas.js";
				$rarely_changing_scripts[] = "jquery.chainedSelects.js";
				$rarely_changing_scripts[] = "jquery.ui.potato.menu.js";
				$rarely_changing_scripts[] = "TableTools_JUI.css";
				$rarely_changing_scripts[] = "jquery.dataTables.min.js";
				$rarely_changing_scripts[] = "TableTools.min.js";
				
				$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
				$identifier = md5(get_showtime("secret").$tmpBookingHandler->jomressession);
				set_showtime('js_cache_identifier',$identifier);

				$showtime_cache = 'js_cache_1';
				$cached_js_filename = $identifier."_javascript_cache_1.js";
				$cached_js_file_abs = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_css_cache".JRDS;
				set_showtime('js_cache_path',$cached_js_file_abs);
				
				if (!in_array($filename,$rarely_changing_scripts))
					{
					$showtime_cache = 'js_cache_2';
					$cached_js_filename = $identifier."_javascript_cache_2.js";
					}

				$jomres_js_cache = get_showtime($showtime_cache);
				if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_css_cache"))
					mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_css_cache");
				$original_javascript = file_get_contents($path.$filename);
				$jomres_js_cache .= "
				".$original_javascript;
				set_showtime($showtime_cache,$jomres_js_cache);

				if (!file_exists($cached_js_file_abs.$cached_js_filename) )
					{
					$fp=fopen($cached_js_file_abs.$cached_js_filename,'w');
					fwrite($fp,'');
					fclose($fp);
					}
				}
			else
				{
				JHTML::script($filename, $path, false);  // If we want to include version numbers in script filenames, we can't use this. Instead we need to directly access JFactory as below
				// $doc = JFactory::getDocument();
				// $doc->addScript(get_showtime('live_site')."/".$path.$filename);
				}
		break;
		case "css":
			if ($use_css_cache && !jomres_cmsspecific_areweinadminarea() && !$skip )
				{
				$jomres_css_cache = get_showtime('css_cache');
				$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
				if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_css_cache"))
					mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_css_cache");
				$original_css = file_get_contents($path.$filename);
				$jomres_css_cache .= "
				".$original_css;
				set_showtime('css_cache',$jomres_css_cache);
				if (!defined('CSS_CACHE_FILE_INSERTED'))
					{
					$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
					$identifier = md5(get_showtime("secret").$tmpBookingHandler->jomressession);
					set_showtime('css_cache_identifier',$identifier);
					$cached_css_filename = $identifier."_css_cache.css";
					
					$cached_css_file_abs = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."javascript_css_cache".JRDS;
					set_showtime('css_cache_path',$cached_css_file_abs);
					set_showtime('css_cache_filename',$cached_css_filename);
					$fp=fopen($cached_css_file_abs.$cached_css_filename,'w');
					fwrite($fp,'');
					fclose($fp);
					define('CSS_CACHE_FILE_INSERTED',1);
					}
				}
			else
				{
				JHTML::stylesheet($path.$filename,array(),false,false );// If we want to include version numbers in script filenames, we can't use this. Instead we need to directly access JFactory as below
				// $doc = JFactory::getDocument();
				// $doc->addStyleSheet(get_showtime('live_site')."/".$path.$filename);
				}
			
		break;
		default:
			
		break;
		}
	}
	
	
// set our meta data
function jomres_cmsspecific_setmetadata($meta,$data)
	{
	$data=jomres_decode($data);
 	$document =& JFactory::getDocument();
	switch ($meta) 
		{
		case "title":
			$document->setTitle($data);
		break;
		case "description":
			$document->setDescription($data);
		break;
		case "keywords":
			$document->setMetaData('keywords',$data);
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
	$query = "SELECT id,username,email FROM #__users WHERE `sendEmail`=1";
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
			$arr=explode(",",$p);
			if (count($arr)>0)
				{
				foreach ($arr as $str)
					{
					$dat=explode(":",$str);
					
					$key = $dat[0];
					$val = $dat[1];
					if (strlen($key)>0)
						{
						$k=str_replace('"','',$key);
						$k=str_replace('{','',$k);
						$k=str_replace('}','',$k);
						$v=str_replace('"','',$val);
						$v=str_replace('{','',$v);
						$v=str_replace('}','',$v);
						
						$vals[$k]=$v;
						}
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
	$link=jomres_decode($link);
	return stripslashes($link);
	}

function jomres_cmsspecific_parseByBots($str)
	{
	$limitstart = 0;
	$params = '';
	$dispatcher	=& JDispatcher::getInstance();
	JPluginHelper::importPlugin('content');
	$obj = new stdClass;
	$obj->text=$str;
	$output = $dispatcher->trigger('onContentPrepare', array ('onContentPrepare',&$obj, & $params, $limitstart));
	$output= $obj->text;
	return $output;
	}
