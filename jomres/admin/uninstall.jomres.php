<?php
/**
#
 * Uninstall function
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
