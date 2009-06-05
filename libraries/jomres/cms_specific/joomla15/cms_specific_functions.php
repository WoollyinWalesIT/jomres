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
	$id = 0;
	if (!$thisJRUser->userIsRegistered )
		{
		require_once( JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'joomla'.JRDS.'user'.JRDS.'helper.php' );
		$guestDeets = $tmpBookingHandler->getGuestData();
		$valid=false;
		while (!$valid)
			{
			$username = $guestDeets['firstname']."_".$guestDeets['surname'].rand(0, 1000);
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
	}
	
function jomres_cmsspecific_getRegistrationURL()
	{
	
	
	}
	
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

function jomres_cmsspecific_addheaddata($type,$path="",$filename="",$fullpathAndfilename="")
	{
	switch ($type) 
		{
		case "javascript":
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
			$users[$id]=array("id"=>$u->id,"username"=>$u->username,"email"=>$u->email);
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
	$limitstart = 0;
	$dispatcher	=& JDispatcher::getInstance();
	JPluginHelper::importPlugin('content');
	$obj = new stdClass;
	$obj->text=$str;
	$output = $dispatcher->trigger('onPrepareContent', array (&$obj, & $params, $limitstart));
	$output= $obj->text;
	return $output;
	}

?>


























