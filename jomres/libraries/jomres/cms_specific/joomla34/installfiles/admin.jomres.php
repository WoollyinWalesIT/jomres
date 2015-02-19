<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

if (!defined('_JOMRES_INITCHECK'))
	define('_JOMRES_INITCHECK', 1 );

define( '_JOMRES_INITCHECK_ADMIN', 1 );


JToolBarHelper::title( 'Jomres', 'home.png' );

require_once (dirname(__FILE__).'/../../../jomres_root.php');
require_once( dirname( __FILE__ ) . '/../../../'.JOMRES_ROOT_DIRECTORY.'/admin.php' );