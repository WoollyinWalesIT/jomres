<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

$folderChecksPassed = true;
if ( !is_dir( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS) )
	{
	if ( !@mkdir( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ) )
		{
		echo "<h1>Error, unable to make folder " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS . " automatically therefore cannot copy the Wordpress plugin files. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed = false;
		}
	}

if ( $folderChecksPassed )
	{

	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "jomres.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."jomres.php" ) ) 
		{
		echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "jomres.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."jomres.php
			automatically, please do this manually through FTP</h1><br/>";
		}

	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "trigger.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."trigger.php" ) ) 
		{
		echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "trigger.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."trigger.php
			automatically, please do this manually through FTP</h1><br/>";
		}
	}

// Don't need to run this again if the table's already populated
$query = "SELECT userid FROM #__jomres_managers LIMIT 2";
$existing_users = doSelectSql ( $query );
if ( count ( $existing_users ) > 0 )
	return;


$query  = "SELECT id,user_login FROM #__users";
$user_ids = doSelectSql( $query);

if (count($user_ids)>0)
	{
// 
	$super_admin_ids = array();
	foreach ($user_ids as $user)
		{
		echo $user->ID."<Br>";
		if ( is_super_admin( $user->id ) )
			{
			$super_admin_ids[] =  array("username" => $user->user_login, "id"=> $user->id );
			}
		}


	if ( count($super_admin_ids)>0)
		{
		foreach ($super_admin_ids as $admin_user)
			{
			echo "Making <i>" . $admin_user[ 'username' ] . "</i> a super property manager<br>";
			$query  = "INSERT INTO #__jomres_managers
			(`userid`,`username`,`property_uid`,`access_level`,`currentproperty`,`pu`)
			VALUES
			(".$admin_user[ 'id' ].",'" . $admin_user[ 'username' ] . "','0','2','1','1')";
			$result = doInsertSql( $query, "" );
			}
		}
		
	}