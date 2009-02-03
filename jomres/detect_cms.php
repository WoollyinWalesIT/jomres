<?php
/**
#
 * Attempts to detect the current CMS
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'defines.php') )
	define("_JOMRES_DETECTED_CMS","joomla15");

if (!defined('_JOMRES_DETECTED_CMS') )
	define("_JOMRES_DETECTED_CMS","unknown");
