<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
$jrConfig   = $siteConfig->get();
$scriptname = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
if ( strstr( $scriptname, 'install_jomres.php' ) ) set_showtime( 'live_site', str_replace( "/jomres", "", get_showtime( 'live_site' ) ) );

$ssllink = str_replace( "https://", "http://", get_showtime( 'live_site' ) );
define( 'JOMRES_ADMINISTRATORDIRECTORY', "wp-admin" );

$jomresItemid = 0; //should only kick in on install

$jrConfig = $siteConfig->set_setting( "jomresItemid", $jomresItemid );

$disable_cache = false;

if ( isset( $_REQUEST[ "task" ] ) )
	{
	if ( $_REQUEST[ "task" ] == "handlereq" ) $disable_cache = true;
	}

$index = "index.php";
$tmpl  = "";
if ( !isset( $_GET[ 'tmpl' ] ) ) $_GET[ 'tmpl' ] = false;

if ( ( $jrConfig[ 'isInIframe' ] == (bool) "1" || $_GET[ 'tmpl' ] == get_showtime("tmplcomponent") ) && !isset( $_REQUEST[ 'nofollowtmpl' ] ) )
	{
	$index = "index.php";
	$tmpl = '&tmpl='.get_showtime("tmplcomponent");
	define( "JOMRES_WRAPPED", 1 );
	}
else
	define( "JOMRES_WRAPPED", 0 );


if ( isset( $_REQUEST[ 'is_wrapped' ] ) )
	{
	if ( $_REQUEST[ 'is_wrapped' ] == "1" ) $tmpl .= "&is_wrapped=1";
	}

if ( isset( $_REQUEST[ 'menuoff' ] ) )
	{
	if ( $_REQUEST[ 'menuoff' ] == "1" )
		{
		$tmpl .= "&menuoff=1";
		set_showtime( 'menuoff', true );
		}
	else
		{
		$tmpl .= "&menuoff=0";
		set_showtime( 'menuoff', false );
		}
	}

if ( isset( $_REQUEST[ 'topoff' ] ) )
	{
	if ( $_REQUEST[ 'topoff' ] == "1" )
		{
		$tmpl .= "&topoff=1";
		set_showtime( 'topoff', true );
		}
	else
		{
		$tmpl .= "&topoff=0";
		set_showtime( 'topoff', false );
		}
	}

if ($_GET['lang'] != "" )
	{
	$jomreslang = jomres_singleton_abstract::getInstance( 'jomres_language' );
	$lang_param = "&lang=" .  $jomreslang->datepicker_crossref[ get_showtime("lang")];
	}

if (!AJAXCALL)
	$page_id = get_query_var('page_id');
else
	$page_id = jomresGetParam($_GET, 'page_id', '0');	


define( "JOMRES_SITEPAGE_URL", get_showtime( 'live_site' ) . "/?option=com_jomres&page_id=" . $page_id . $tmpl . $lang_param);
define( "JOMRES_SITEPAGE_URL_NOSEF", get_showtime( 'live_site' ) . "/index.php?option=com_jomres&page_id=" . $page_id . $tmpl . $lang_param );
define( "JOMRES_SITEPAGE_URL_AJAX",get_showtime( 'live_site' ) . '/' . "/wp-content/plugins/jomres/ajax.php?action=jomres/trigger.php&no_html=1&jrajax=1&jr_wp_source=frontend&option=com_jomres&page_id=" . $page_id . $tmpl . $lang_param);

define( "JOMRES_SITEPAGE_URL_ADMIN", get_showtime( 'live_site' ) . "/wp-admin/admin.php?page=jomres/trigger.php&jr_wp_source=admin&option=com_jomres" . $tmpl . $lang_param );
define( "JOMRES_SITEPAGE_URL_ADMIN_AJAX", get_showtime( 'live_site' ) . "/wp-admin/admin-ajax.php?action=jomres/trigger.php&no_html=1&jrajax=1&jr_wp_source=admin&option=com_jomres" . $tmpl . $lang_param);

