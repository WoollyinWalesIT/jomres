<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
 *
 * On Jomres startup this will detect if the browser is a mobile device and if so, if the site config settings say that mobile devices should be redirected to a template-less output. Will set the "showtime" variable mobile_browser to True.
 *
 * This class is largely obsolete now. It was written during Joomla 2.5, and before Joomla 3 and the responsive bootstrap templates came into being. As a result, there are few people who're likely to need this however I know from long experience that if I take it out somebody, somewhere will be upset because they're using Jomres' frameless detection for some reason. 
 *
 */
class j00003mobile
	{
	function j00003mobile( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		if ( $jrConfig[ 'mobile_simulation' ] == "1" )
			{
			if ( $jrConfig[ 'mobile_simulation_ip_restriction' ] != "" )
				{
				$ip = $_SERVER[ 'REMOTE_ADDR' ];
				if ( trim( $jrConfig[ 'mobile_simulation_ip_restriction' ] ) == trim( $ip ) )
					{
					$is_mobile = true;
					}
				}
			else
				{
				$is_mobile = true;
				}
			}
		else
			{
			jr_import( 'browser_detect' );
			$b         = new browser_detect();
			$is_mobile = $b->isMobile();
			}

		define( _JOMRES_MOBILE, $is_mobile );

		if ( $jrConfig[ 'mobile_redirect' ] == "1" && _JOMRES_MOBILE )
			{
			set_showtime( 'mobile_browser', $is_mobile );

			if ( $is_mobile && !isset( $_REQUEST[ 'tmpl' ] ) )
				{
				$st = "?";
				foreach ( $_GET as $key => $val )
					{
					$st .= $key . "=" . $val . "&";
					}
				header( "Location: " . $_SERVER[ 'SCRIPT_URI' ] . $_SERVER[ 'SCRIPT_NAME' ] . $st . "tmpl=component&is_wrapped=1", true );
				die();
				}
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>