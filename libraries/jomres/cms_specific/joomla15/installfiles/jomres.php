<?php
/**
#
 * This file controls the main switch functions for Jomres
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

if (!defined('JPATH_BASE'))
	{
	defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
	}
else
	{
	if (file_exists(JPATH_BASE .'/includes/defines.php') )
		{
		defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );
		//$mosConfig_absolute_path=JPATH_ROOT	;
		//$jomresConfig_absolute_path 	= JPATH_ROOT;
		}
	else
		{
		defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
		}
	}

define('_JOMRES_INITCHECK', 1 );

require_once(dirname(__FILE__).'/../../jomres/jomres.php');

?>