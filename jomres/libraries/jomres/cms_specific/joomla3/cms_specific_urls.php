<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
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
define( 'JOMRES_ADMINISTRATORDIRECTORY', "administrator" );

$scriptname = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
if ( !strstr( $scriptname, 'install_jomres.php' ) )
	{
	$query = "SELECT id,language FROM #__menu WHERE published = 1 AND link LIKE 'index.php?option=com_jomres&view=default' ";
	$itemQueryRes = doSelectSql( $query );

	$itemIdFound=false;
	foreach ($itemQueryRes as $item)
		{
		if ($item->language==get_showtime('lang'))
			{
			$itemIdFound=true;
			$jomresItemid=$item->id;
			}
		elseif (!$itemIdFound && $item->language=='*')
			{
			$itemIdFound=true;
			$jomresItemid=$item->id;
			}
		}
	if ( !$itemIdFound )
		{
		if ( isset( $jrConfig[ 'jomresItemid' ] ) ) 
			$jomresItemid = $jrConfig[ 'jomresItemid' ];
		else
			$jomresItemid = 0;
		}
	}
else
	{
	$jomresItemid = 0; //should only kick in on install
	}

$siteConfig->set_setting( "jomresItemid", $jomresItemid );

$index = "index.php";
$tmpl  = "";
if ( !isset( $_GET[ 'tmpl' ] ) ) $_GET[ 'tmpl' ] = false;

if ( !isset($jrConfig[ 'isInIframe' ]))
	$jrConfig[ 'isInIframe' ] = "0";

if ( ( $jrConfig[ 'isInIframe' ] == "1" || $_GET[ 'tmpl' ] == get_showtime("tmplcomponent") ) && !isset( $_REQUEST[ 'nofollowtmpl' ] ) && !jomres_cmsspecific_areweinadminarea() )
	{
	$tmpl = '&tmpl='.get_showtime("tmplcomponent");
	define( "JOMRES_WRAPPED", 1 );
	if (!isset($_REQUEST['tmpl']))
		{
		$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."&tmpl=jomres";
		jomresRedirect($url);
		}
	}
else
	define( "JOMRES_WRAPPED", 0 );


if ( isset( $_REQUEST[ 'is_wrapped' ] ) )
	{
	if ( $_REQUEST[ 'is_wrapped' ] == "1" ) 
		$tmpl .= "&is_wrapped=1";
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

$lang = substr( get_showtime( 'lang' ), 0, 2 );
// For administrator area Jomres lang switching
$lang_param = '';
if ( isset( $_REQUEST[ 'jomreslang' ] ) )
	{
	$jomreslang = jomres_singleton_abstract::getInstance( 'jomres_language' );
	if ( array_key_exists( $_REQUEST[ 'jomreslang' ], $jomreslang->datepicker_crossref ) ) 
		{
		$lang_param .= "&jomreslang=" .  jomresGetParam( $_REQUEST , 'jomreslang' , '' );
		}
	}

define( "JOMRES_SITEPAGE_URL_NOSEF", get_showtime( 'live_site' ) . "/index.php?option=com_jomres&Itemid=" . $jomresItemid . "&lang=" . $lang . $tmpl );
define( "JOMRES_SITEPAGE_URL_AJAX", get_showtime( 'live_site' ) . '/' . "index.php?option=com_jomres&no_html=1&jrajax=1&Itemid=" . $jomresItemid . "&lang=" . $lang . $tmpl);
define( "JOMRES_SITEPAGE_URL_ADMIN", get_showtime( 'live_site' ) . '/' . JOMRES_ADMINISTRATORDIRECTORY . "/index.php?option=com_jomres" . $tmpl . $lang_param );
define( "JOMRES_SITEPAGE_URL_ADMIN_AJAX", get_showtime( 'live_site' ) . '/' . JOMRES_ADMINISTRATORDIRECTORY . "/index.php?option=com_jomres&no_html=1&jrajax=1" . $lang_param . $tmpl);

if ( class_exists( 'JFactory' ) )
	{
	$config = JFactory::getConfig();
	if ( $config->get( 'sef' ) == '1' )
		define( "JOMRES_SITEPAGE_URL", $index . "?option=com_jomres&Itemid=" . $jomresItemid . $tmpl . "&lang=" . $lang );
	else
		define( "JOMRES_SITEPAGE_URL", get_showtime( 'live_site' ) . "/" . $index . "?option=com_jomres&Itemid=" . $jomresItemid . $tmpl . "&lang=" . $lang );
	}
else
	define( "JOMRES_SITEPAGE_URL", get_showtime( 'live_site' ) . "/" . $index . "?option=com_jomres&Itemid=" . $jomresItemid . $tmpl . "&lang=" . $lang );

