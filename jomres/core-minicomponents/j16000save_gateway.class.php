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

class j16000save_gateway
	{
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{$this->template_touchable = false;return;}
		
		$gateway = (string) jomresGetParam( $_REQUEST, 'gateway', '' );
		$prefix = 'gateway_setting_'.$gateway;
		
		//
		$settings = array();
		foreach ( $_REQUEST as $key=>$val )
			{
			if ( substr($key , 0 , strlen ( $prefix )  ) == $prefix )
				{
				$k = filter_var( $key , FILTER_SANITIZE_SPECIAL_CHARS );
				$v = filter_var( $_REQUEST[$key], FILTER_SANITIZE_SPECIAL_CHARS );
				$settings [$k] = $v;
				}
			}
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		foreach ($settings as $key=>$val)
			{
			$jrConfig[$key] = $val;
			}
		$siteConfig->set($jrConfig);
		$siteConfig->save_config();
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=edit_gateway&plugin=".$gateway ), '' );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>