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

class jomres_usage_reporting
	{
	function __construct( $displayLog = false )
		{
		// return; // This feature isn't currently in use, for now we'll just return back out and do nothing.
		if ( !AJAXCALL )
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();
			if (!isset($jrConfig[ 'send_tracking_data' ]))
				$jrConfig[ 'send_tracking_data' ] = "0";
			
			if ( $jrConfig[ 'send_tracking_data' ] =="1" && get_showtime("task") != "" )
				{
				jr_import( 'jomres_check_support_key' );
				$key_validation  = new jomres_check_support_key( JOMRES_SITEPAGE_URL_ADMIN . "&task=showplugins" );
				if ($key_validation->key_valid)
					$key_valid = "Yes";
				else
					$key_valid = "No";
				
				$task = get_showtime("task");
				
				require_once(JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'piwik' . JRDS . 'PiwikTracker.php');
				$tracker = new PiwikTracker( $idSite = 6 );
				
				$tracker->setUserAgent( "Jomres Core" );
				 $tracker->setUrl( "http://jomres.app.tracking" ); // Anonymises your call to the Jomres API. We don't want your personal details, or to track you individually. This tracking is purely to help us to understand how Jomres is used, popular features and how many users are using free v full licenses. The tracking software anonymises calls to unique ids, including IP numbers so we can't even see those.
				$tracker->setCustomVariable( 1, "task", $task , "page" );
				$tracker->setCustomVariable( 2, "key_valid", $key_valid , "page" ); 
				$tracker->doTrackPageView($task);
				}
			}
		}
	}
