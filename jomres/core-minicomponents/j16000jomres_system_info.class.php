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

class j16000jomres_system_info
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;
		
		$output     = array ();
		$pageoutput = array ();
		
		//advanced site config set to no warning
		$output['ADVANCED_SITE_CONFIG_WARNING']='';
		$output['ADVANCED_SITE_CONFIG_WARNING_HIGHLIGHT']='';
		if ($jrConfig['advanced_site_config'] == "0")
			{
			$output['ADVANCED_SITE_CONFIG_WARNING']= jr_gettext( _JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING, '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', false );
			$output['ADVANCED_SITE_CONFIG_WARNING_HIGHLIGHT']="alert alert-warning";
			}
		
		//max input vars set to 1000 warning only if micromanage is enabled
		$output[ 'MAX_INPUT_VARS_CHECK' ] = max_input_vars_test();
		
		//max get vars set to 512 or less warning for datatables
		$output[ 'SUHOSIN_GET_MAX_VARS_CHECK' ] = suhosin_get_max_vars_test();
		
		//jomres version
		$configfile = JOMRESPATH_BASE . JRDS . "jomres_config.php"; // This is to pull in the Jomres version from mrConfig
		include( $configfile );
		
		$this_version = get_jomres_current_version();
		$latest_version = get_latest_jomres_version();
		
		if ( empty( $latest_version ) ) 
			{
			$output[ 'LATEST_JOMRES_VERSION' ] .= "Sorry, could not get latest version of Jomres, is there a firewall preventing communication with http://updates.jomres4.net ?<p>";
			}
		else
			{
			$current_version_is_uptodate   = check_jomres_version();
			
			$output[ 'HIGHLIGHT' ] = "";
			$output[ 'ALERT' ]     = "";
			$output[ 'EFFECT' ]    = "";
			
			if ( !$current_version_is_uptodate )
				{
				$output[ 'HIGHLIGHT' ] = ( using_bootstrap() ? "alert alert-error" : "ui-state-error" );
				$output[ 'ALERT' ]     = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN . '&task=updates" >'. jr_gettext( _JOMRES_VERSIONCHECK_VERSIONWARNING, '_JOMRES_VERSIONCHECK_VERSIONWARNING', false ).'</a>';
				$output[ 'EFFECT' ]    = "<script>jomresJquery(document).ready(function() { jomresJquery( \"#version_check_warning\" ).effect( 'highlight' ); });</script> ";
				}

			$output[ '_JOMRES_VERSIONCHECK_THISJOMRESVERSION' ]   = jr_gettext( _JOMRES_VERSIONCHECK_THISJOMRESVERSION, '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', false );
			$output[ '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION' ] = jr_gettext( _JOMRES_VERSIONCHECK_LATESTJOMRESVERSION, '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', false );


			$output[ 'LATEST_JOMRES_VERSION' ] = $latest_version;
			$output[ 'THIS_JOMRES_VERSION' ]   = $this_version;
			}

		//recommended plugins not installed warning
		$output[ 'PLUGIN_CHECK' ] = plugin_check();
		
		// Changes to Jomres 7.5.4 jquery functionality mean that Joomla's caching should no longer cause problems.
		$output[ 'CACHE_WARNING' ]   = "";
		$output[ 'CACHE_HIGHLIGHT' ] = "";
/* 		if ( this_cms_is_joomla() )
			{
			if ( _JOMRES_DETECTED_CMS == "joomla15" ) $query = "SELECT id FROM #__plugins WHERE `element`='cache' AND published = '1'";
			else
			$query = "SELECT extension_id FROM #__extensions WHERE `name`='plg_system_cache' AND `enabled`='1' ";
			$cache = doSelectSql( $query );

			if ( count( $cache ) > 0 )
				{
				$output[ 'CACHE_WARNING' ]   = jr_gettext( _JOMRES_WARNING_SYSTEM_CACHE, '_JOMRES_WARNING_SYSTEM_CACHE', false );
				$output[ 'CACHE_HIGHLIGHT' ] = ( using_bootstrap() ? "alert alert-error" : "ui-state-error" );
				}
			} */
		
		//license key not entered warning
		if ( trim( $jrConfig['licensekey'] ) == "" )
			{
			$output[ '_JOMRES_PRODUCT_INFORMATION' ]  = jr_gettext( _JOMRES_PRODUCT_INFORMATION, '_JOMRES_PRODUCT_INFORMATION', false );
			$output[ '_JOMRES_PRODUCT_INFORMATION2' ] = jr_gettext( _JOMRES_PRODUCT_INFORMATION2, '_JOMRES_PRODUCT_INFORMATION2', false );
			}

		//full access control enabled warning
		$output[ 'ACCESS_CONTROL_HIGHLIGHT' ] = '';
		$output[ 'ACCESS_CONTROL_ALERT' ]     = '';
		$access_control_check                 = jomresAccessControlSanityCheck();
		if ( !$access_control_check[ 'result' ] )
			{
			$output[ 'ACCESS_CONTROL_HIGHLIGHT' ] = ( using_bootstrap() ? "alert alert-error" : "ui-state-error" );
			$output[ 'ACCESS_CONTROL_ALERT' ]     = $access_control_check[ 'message' ];
			}
		
		//review text
		if (this_cms_is_wordpress() )
			{
			$output['REVIEW_SITE_URL'] = 'https://wordpress.org/support/view/plugin-reviews/jomres';
			$output['REVIEW_SITE_TEXT'] = 'Wordpress Plugins site';
			}
		else
			{
			$output['REVIEW_SITE_URL'] = 'http://extensions.joomla.org/extensions/extension/vertical-markets/booking-a-reservations/jomres';
			$output['REVIEW_SITE_TEXT'] = 'Joomla! Extensions Directory';
			}
		
		$output['CAPTERRA_REVIEW_SITE_URL'] = 'http://www.capterra.com/reservations-software/reviews/134469/Jomres/Woollyinwales%20IT/new';
		$output['CAPTERRA_REVIEW_SITE_TEXT'] = 'Capterra';
		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->readTemplatesFromInput( 'jomres_system_info.html' );
		
		if ( $output_now )
			$tmpl->displayParsedTemplate();
		else
			$this->retVals = $tmpl->getParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
