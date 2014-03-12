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

class jomres_language_definitions
	{

	function jomres_language_definitions()
		{
		$siteConfig             = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig               = $siteConfig->get();
		$this->language_context = $jrConfig[ 'language_context' ];
		$this->default_lang     = get_showtime( 'lang' );
		$this->definitions      = array ();
		$this->ptype            = $jrConfig[ 'language_context' ];
		$this->lang             = get_showtime( 'lang' );
		}

	function set_language( $lang = 'en-GB' )
		{
		$this->lang = $lang;
		}

	function set_property_type( $ptype )
		{
		if ( is_null( $ptype ) ) $ptype = $this->language_context;
		$this->ptype = $ptype;
		}

	function define( $constant, $string )
		{
		$this->definitions[ $this->ptype ][ $constant ] = $string;
		}

	function get_defined( $constant )
		{
		if ( !isset( $this->definitions[ $this->ptype ] ) )
			{
			if ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $this->ptype ) . JRDS . $this->lang . '.php' ) )
				{
				require( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $this->ptype ) . JRDS . $this->lang . '.php' );
				}
			else //in case there is no language_context set and the property type specific language dir was manually deleted
				{
				require( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $this->lang . '.php' );
				}
			}

		if ( isset( $this->definitions[ $this->ptype ][ $constant ] ) ) 
			return $this->definitions[ $this->ptype ][ $constant ];
		else
			return $this->definitions[ $this->language_context ][ $constant ];
		}

	function reset_lang_and_property_type()
		{
		$this->lang  = $this->default_lang;
		$this->ptype = $this->language_context;
		}
	}


?>