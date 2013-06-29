<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_qr_code
	{
	function jomres_qr_code()
		{
		require_once( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'libraries' . JRDS . 'qr_code_lib' . JRDS . 'qrlib.php' );
		}
	}

?>