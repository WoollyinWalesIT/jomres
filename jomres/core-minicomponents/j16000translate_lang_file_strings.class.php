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

class j16000translate_lang_file_strings
	{
	function j16000translate_lang_file_strings()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		if ( !translation_user_check() ) return;
		echo '<h2>' . jr_gettext( "_JOMRES_TOUCHTEMPLATES", _JOMRES_TOUCHTEMPLATES, false ) . '</h2>';
		echo "<br/><h3>" . get_showtime( 'lang' ) . "</h3><br/>";
		// $jomreslang = $jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
		// echo $jomreslang->get_languageselection_dropdown();
		// echo "<hr>";

		$output = array ();

		$siteConfig       = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig         = $siteConfig->get();
		$language_context = $jrConfig[ 'language_context' ];

		$jomres_language_definitions = jomres_singleton_abstract::getInstance( 'jomres_language_definitions' );

		$all_context_definitions = $jomres_language_definitions->definitions[ $language_context ];
		foreach ( $all_context_definitions as $const => $def )
			{
			$output[ ] = jr_gettext( $const, $def );
			}

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}

		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}