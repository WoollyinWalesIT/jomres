<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


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