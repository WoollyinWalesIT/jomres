<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000chooseLanguages
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$output                                = array ();
		$output[ 'PAGETITLE' ]                 = jr_gettext( "_JOMRES_COM_CHOOSELANGUAGES", '_JOMRES_COM_CHOOSELANGUAGES',false );
		$output[ 'INFO' ]                      = jr_gettext( "_JOMRES_COM_CHOOSELANGUAGES_INFO", '_JOMRES_COM_CHOOSELANGUAGES_INFO',false );
		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;
		$langDropdownFile                      = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "langDropdown.php";
		if ( file_exists( $langDropdownFile ) )
			{
			require_once( $langDropdownFile );
			$langfiles = getLangDropdownString();
			}
		else
		$langfiles = array ();

		$jomreslang     = jomres_singleton_abstract::getInstance( 'jomres_language' );
		$languagesArray = $jomreslang->define_langfile_to_languages_array();

		$rows = array ();
		foreach ( $languagesArray as $key => $val )
			{
			$r        = array ();
			$selected = "";
			if ( in_array( $key, $langfiles ) ) $selected = ' checked="yes" ';
			$r[ 'SHORTCODE' ] = $key;
			$r[ 'LONGCODE' ]  = $val;
			$r[ 'CHECKBOX' ]  = '<input type="checkbox" id="cb' . $key . '" name="idarray[]" value="' . $key . '" ' . $selected . '>';
			$rows[ ]          = $r;
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, '' );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_languageChoiceSelection' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_languagechoices.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}