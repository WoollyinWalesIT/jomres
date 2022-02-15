<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

/**
*
* Prevents scripts from trying to run files directly from the Jomres directory.
*
* Recent changes to WP 5.x mean that WP was trying to call index.php in the Jomres dir. Previously this script did nothing except to say "don't use me" however now it will require the index.php in the directory above, essentially ensuring that Jomres is correctly triggered through the WP framework instead.
* 
*/

require_once( __DIR__.DIRECTORY_SEPARATOR.'../index.php');
