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

class jomres_messages
	{
	function jomres_messages()
		{
		$jomres_messages = array ();
		if ( isset( $_COOKIE[ 'jomres_messages' ] ) ) $this->jomres_messages = $_COOKIE[ 'jomres_messages' ];
		
		//add the growl js and css
		if (!defined('GROWL_JS_CSS_ADDED'))
			{
			define('GROWL_JS_CSS_ADDED',1);
			jomres_cmsspecific_addheaddata( "javascript", 'jomres/javascript/', "jquery.jgrowl.js" );
			jomres_cmsspecific_addheaddata( "css", 'jomres/css/', 'jquery.jgrowl.css' );
			}
		}

	function get_messages()
		{

		foreach ( $this->jomres_messages as $key => $val )
			{
			$index = "jomres_messages[" . $key . "]";
			setcookie( $index, "", time() - 3600 );
			}

		return $this->jomres_messages;
		}

	function set_message( $message )
		{
		$counter = count( $this->jomres_messages ) + 1;
		$index   = "jomres_messages[" . $counter . "]";
		setcookie( $index, htmlspecialchars( $message ), time() + 5, "/" );
		}
	}

?>