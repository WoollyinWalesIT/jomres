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

	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "admin.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."admin.php" ) ) 
		{
		echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "admin.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."admin.php
			automatically, please do this manually through FTP</h1><br/>";
		}

	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "ajax.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."ajax.php" ) ) 
		{
		echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "ajax.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . "jomres" . JRDS ."ajax.php
			automatically, please do this manually through FTP</h1><br/>";
		}
	}
