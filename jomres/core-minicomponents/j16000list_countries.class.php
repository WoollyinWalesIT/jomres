<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_countries
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
		$editIcon   = '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" alt="editicon"/>';
		$rows       = array ();
		$output     = array ();
		$pageoutput = array ();


		$output[ '_JOMRES_EDIT_COUNTRY_TITLE' ]       = jr_gettext( "_JOMRES_EDIT_COUNTRY_TITLE", _JOMRES_EDIT_COUNTRY_TITLE, false );
		$output[ '_JOMRES_EDIT_COUNTRY_ID' ]          = jr_gettext( "_JOMRES_EDIT_COUNTRY_ID", _JOMRES_EDIT_COUNTRY_ID, false );
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYCODE' ] = jr_gettext( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", _JOMRES_EDIT_COUNTRY_COUNTRYCODE, false );
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYNAME' ] = jr_gettext( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", _JOMRES_EDIT_COUNTRY_COUNTRYNAME, false );

		$jomres_countries = jomres_singleton_abstract::getInstance( 'jomres_countries' );

		if ( count( $jomres_countries->countries ) == 0 ) $countryList = import_countries();
		else
		$countryList = $jomres_countries->get_countries();

		foreach ( $countryList as $countrycode => $country )
			{
			$r                  = array ();
			$r[ 'COUNTRYNAME' ] = $country[ 'countryname' ];
			$r[ 'COUNTRYCODE' ] = $country[ 'countrycode' ];
			$r[ 'EDITLINK' ]    = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_country&id=' . $country[ 'id' ] . '">' . $editIcon . '</a>';
			$r[ 'EDIT_URL' ]    = JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_country&id=' . $country[ 'id' ];
			$rows[ ]            = $r;
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL_ADMIN ), '' );
		$jrtb .= $jrtbar->toolbarItem( 'new', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=edit_country" ), '' );
		
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_countries.html' );
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