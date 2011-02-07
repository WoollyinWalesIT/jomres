<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
if (!defined('JPATH_BASE'))
	defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
else
	{
	if (file_exists(JPATH_BASE .'/includes/defines.php') )
		defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );
	else
		defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
	}
// ################################################################

/**
#
 * Simply reports that the component has been uninstalled. Doesn't remove database data because uninstall/re-install is the best way to upgrade
#
 */
function com_uninstall()
	{
	echo "uninstalled the component. Please note that the tables were not removed, as uninstallation & re-installation are the simplest ways of updating Jomres. <br>If you wish to remove the tables, please navigate via your favourite mysql client and remove any tables using this naming patter: prefix(eg jos)_jomres_xxxxxxxxx";
	}

?>
