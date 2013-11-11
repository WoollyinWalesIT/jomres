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

if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "jomres.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "jomres.php" ) ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "jomres.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "jomres.php
			automatically, please do this manually through FTP</h1><br/>";

if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "router.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "router.php" ) ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "router.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "router.php
			automatically, please do this manually through FTP</h1><br/>";

if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "admin.jomres.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "administrator" . JRDS . "components" . JRDS . "com_jomres" . JRDS . "jomres.php" ) ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "admin.jomres.php to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "administrator" . JRDS . "components" . JRDS . "com_jomres" . JRDS . "jomres.php
			automatically, please do this manually through FTP</h1><br/>";
			
 	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "jomres.xml", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "default.xml" ) ) 
	echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "jomres.xml to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "default.xml automatically, please do this manually through FTP</h1><br/>";

	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "countries.xml", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS .  "countries.xml") ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "countries.xml to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "countries.xml
			automatically, please do this manually through FTP</h1><br/>";
	
	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "regions.xml", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "regions.xml" ) ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "regions.xml
			automatically, please do this manually through FTP</h1><br/>";

	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "towns.xml", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "towns.xml" ) ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "towns.xml to " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "towns.xml automatically, please do this manually through FTP</h1><br/>";
	
	if ( !copy( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . "installfiles" . JRDS . "propertytypes.xml", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "propertytypes.xml" ) ) echo "<h1>Error, unable to copy " . _JOMRES_DETECTED_CMS_SPECIFIC_FILES . JRDS . "components" . JRDS . "com_jomres" . JRDS . "views" . JRDS . "default" . JRDS . "tmpl" . JRDS . "propertytypes.xml automatically, please do this manually through FTP</h1><br/>";
	