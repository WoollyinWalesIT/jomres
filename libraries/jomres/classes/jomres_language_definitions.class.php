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

class jomres_language_definitions
	{

	function __construct()
		{
		$siteConfig             = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig               = $siteConfig->get();
		
		if ($jrConfig[ 'language_context' ] != '')
			$this->ptype = $jrConfig[ 'language_context' ];
		else
			$this->ptype = 0;
		
		$this->default_lang     = get_showtime( 'lang' );
		$this->default_ptype	= $this->ptype;
		$this->definitions      = array ();
		$this->lang             = get_showtime( 'lang' );
		}

	function set_language( $lang = 'en-GB' )
		{
		$this->lang = $lang;
		}

	function set_property_type( $ptype = '' )
		{
		if ( is_null($ptype) || $ptype == '' ) 
			$ptype = $this->default_ptype;

		$this->ptype = $ptype;
		}

	function define( $constant, $string )
		{
		$this->definitions[ $this->ptype ][ $constant ] = $string;
		}

	function get_defined( $constant )
		{
		if ( !array_key_exists( $this->ptype, $this->definitions ) )
			{
			if ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $this->ptype ) . JRDS . $this->lang . '.php' ) )
				{
				require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $this->ptype ) . JRDS . $this->lang . '.php' );
				}
			elseif ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $this->lang . '.php' ) ) //in case there is no language_context set and the property type specific language dir was manually deleted
				{
				require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $this->lang . '.php' );
				}
			else
				require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . 'en-GB.php' );
			}

		if ( isset( $this->definitions[ $this->ptype ][ $constant ] ) ) 
			return $this->definitions[ $this->ptype ][ $constant ];
		elseif (isset($this->definitions[ $this->default_ptype ][ $constant ]))
			return $this->definitions[ $this->default_ptype ][ $constant ];
		else
			return false;
		}

	function reset_lang_and_property_type()
		{
		$this->lang  = $this->default_lang;
		$this->ptype = $this->default_ptype;
		}
	}
