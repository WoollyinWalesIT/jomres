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

class jomres_management_view
	{
	function get_dropdown()
		{
		jr_import( 'browser_detect' );
		$b         = new browser_detect();
		$is_mobile = $b->isMobile();
		set_showtime( 'mobile_browser', $is_mobile );

		$response = '';
		$curPageUrl = $this->curPageUrl();

		$pos = strpos( $curPageUrl, "?" );
		if ( $pos !== false ) 
			$connector = "&amp;";
		else
			$connector = "?";


		
		if ( !$is_mobile )
			{
			if ( isset( $_REQUEST[ 'tmpl' ] ) ) 
				$response = ' <a href="' . $this->remove_querystring_var( "tmpl" ) . '">' . jr_gettext( "_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW", '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', false ) . '</a>';
			else
				{
				$response    = '<a href="' . $curPageUrl . $connector . 'tmpl=' . get_showtime("tmplcomponent").'" class="btn btn-default">' . jr_gettext( "_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT", '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', false ) . '</a>';
				}
			}

		return $response;
		}

	function remove_querystring_var( $key )
		{
		$url = parse_url($this->curPageURL());
		$query = $url["query"];
		
		parse_str($query, $parsed_query);
		unset($parsed_query[$key]);
		
		$url["query"] = http_build_query($parsed_query);
		
		$new_url = $this->unparse_url($url);

		return $new_url;
		}
	
	function curPageURL()
		{
		$pageURL = 'http';
		if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
			{
			$pageURL .= "s";
			}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80")
			{
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} 
		else 
			{
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			}
		
		// We will replace completebk with dashboard here because otherwise clicking the Management view button when on the completebk task will result in duplicate bookings being created.
		if ( get_showtime ("task") == "completebk")
			{
			str_replace( "task=completebk" ,"task=dashboard" , $pageURL );
			}

		return $pageURL;
		}
	
	function unparse_url($parsed_url) 
		{
		$scheme   = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '';
		$host     = isset($parsed_url['host']) ? $parsed_url['host'] : '';
		$port     = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : '';
		$user     = isset($parsed_url['user']) ? $parsed_url['user'] : '';
		$pass     = isset($parsed_url['pass']) ? ':' . $parsed_url['pass']  : '';
		$pass     = ($user || $pass) ? "$pass@" : '';
		$path     = isset($parsed_url['path']) ? $parsed_url['path'] : '';
		$query    = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
		$fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : '';
		
		return "$scheme$user$pass$host$port$path$query$fragment";
		}

	}

?>