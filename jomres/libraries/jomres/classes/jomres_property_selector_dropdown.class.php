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

class jomres_property_selector_dropdown
	{
	function get_dropdown()
		{
		$thisJRUser        	= jomres_singleton_abstract::getInstance( 'jr_user' );
		$output=array();
		$pageoutput=array();
		
		$curPageUrl = $this->curPageUrl();

		$pos = strpos( $curPageUrl, "?" );
		if ( $pos !== false ) 
			$connector = "&amp;";
		else
			$connector = "?";
		
		$properties = array();
		foreach ($thisJRUser->authorisedPropertyDetails as $property_uid=>$property)
			{
			$properties[$property_uid] = $property['property_name'];
			}
		
		natcasesort($properties);
		
		if ( !isset( $_REQUEST[ 'tmpl' ] ) )
			{
			$url = $this->remove_querystring_var( "tmpl" );
			}
		else
			{
			$url    = $curPageUrl . $connector . 'tmpl=' . get_showtime("tmplcomponent");
			}
		
		$rows = array();
		foreach ($properties as $key=>$val)
			{

			$r=array();
			$r['PROPERTY_UID']=$key;
			$r['PROPERTY_NAME']=$val;
			$r['URL']=$url."&thisProperty=".$key;
			$rows[]=$r;
			}
		

		
		
		$output[ '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY' ] = jr_gettext( "_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY", _JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY, false );
		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'property_selector_dropdown.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$response =$tmpl->getParsedTemplate();

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
		if ($_SERVER["HTTPS"] == "on")
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