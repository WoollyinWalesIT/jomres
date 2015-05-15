<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_sticky_messages
	{
	function __construct()
		{
		$jomres_sticky_messages = array ();
		if ( isset( $_COOKIE[ 'jomres_sticky_messages' ] ) ) $this->jomres_sticky_messages = $_COOKIE[ 'jomres_sticky_messages' ];
		}

	function get_messages()
		{
		foreach ( $this->jomres_sticky_messages as $key => $val )
			{
			$index = "jomres_sticky_messages[" . $key . "]";
			setcookie( $index, "", time() - 3600 );
			}

		return $this->jomres_sticky_messages;
		}

	function set_message( $message )
		{
		$counter = count( $this->jomres_sticky_messages );
		$index   = "jomres_sticky_messages[" . $counter . "]";
		setcookie( $index, htmlspecialchars( $message ), "/" );
		}
	}

?>