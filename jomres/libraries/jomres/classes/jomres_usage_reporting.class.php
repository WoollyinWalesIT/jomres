<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_usage_reporting
	{
	function __construct( $displayLog = false )
		{
		if ( !AJAXCALL )
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();
			if ( $jrConfig[ 'send_tracking_data' ] =="1")
				{
				$task = get_showtime("task");
				$anonymised_site=md5(get_showtime("live_site"));
				echo '
				<!-- Piwik Image Tracker -->
				<img src="http://analytics.jomres.net/piwik.php?idsite=4&rec=1&task='.$task.'&_id='.$anonymised_site.'" style="border:0" alt="" />
				<!-- End Piwik -->
				';
				}
			}
		}
	}
