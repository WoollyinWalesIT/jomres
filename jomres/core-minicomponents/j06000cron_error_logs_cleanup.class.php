<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000cron_error_logs_cleanup
	{
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$jomresConfig_secret = get_showtime( 'secret' );
		$secret = base64_decode(jomresGetParam( $_REQUEST, "secret", "" ));

		if ( $secret == $jomresConfig_secret )
			{
			$log_path = JOMRES_SYSTEMLOG_PATH;
			$files = scandir_getfiles( $log_path );
	
			if ( count( $files ) > 0 )
				{
				foreach ( $files as $f )
					{
					if ( $f != '.htaccess' && $f != 'web.config' && time() - filemtime($log_path . JRDS . $f) >= 30*24*60*60) // 30 days
						{
						unlink( $log_path . "/" . $f );
						}
					}
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
