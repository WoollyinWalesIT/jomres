<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

define( '_JOMRES_INITCHECK', 1 );
define( '_JOMRES_INITCHECK_ADMIN', 1 );

define ( 'JOMRES_ROOT_DIRECTORY' , "jomres" );

require_once( dirname( __FILE__ ) . '/../../../'.JOMRES_ROOT_DIRECTORY.'/admin.php' );