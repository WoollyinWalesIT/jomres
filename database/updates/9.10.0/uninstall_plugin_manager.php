<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 *
 * @package Jomres\Core\Database
 *
 * Database modification during updates
 *
 **/
$jomres_check_support_key = jomres_singleton_abstract::getInstance('jomres_check_support_key');

//delete plugin manager (only if the user has a valid license) so users will be forced to install the latest version
if ( $jomres_check_support_key->key_status == "Active" ) {
	try {
		//delete plugin manager
		$this->filesystem->deleteDir( 'local://' . JOMRES_ROOT_DIRECTORY . '/core-plugins/plugin_manager' );
		
		//rebuild registry
		$this->minicomponent_registry->regenerate_registry();
	} 
	catch (Exception $e) {
		//do nothing
	}
}
