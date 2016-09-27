<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class shortcode_parser
	{
	function __construct( )
		{
		if ( file_exists ( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "shortcodes.serialized" ) )
			{
			$shortcode_data = file_get_contents (  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "shortcodes.serialized" );
			$this->shortcodes = unserialize($shortcode_data);
			}
		else
			{
			throw new Exception("Error, the shortcodes file does not exist. Try rebuilding the registry before requesting this data.");
			}

		return $this->shortcodes;
		}


	}

?>