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

class j16000edit_region
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
		$id = intval( jomresGetParam( $_REQUEST, 'id', 0 ) );

		$jomres_regions = jomres_singleton_abstract::getInstance( 'jomres_regions' );
		$region         = $jomres_regions->get_region_by_id( $id );

		$output[ '_JOMRES_EDIT_REGION_TITLE' ]        = jr_gettext( '_JOMRES_EDIT_REGION_TITLE', _JOMRES_EDIT_REGION_TITLE,false );
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYNAME' ] = jr_gettext( '_JOMRES_EDIT_COUNTRY_COUNTRYNAME', _JOMRES_EDIT_COUNTRY_COUNTRYNAME,false );
		$output[ '_JOMRES_EDIT_REGION_REGIONNAME' ]   = jr_gettext( '_JOMRES_EDIT_REGION_REGIONNAME', _JOMRES_EDIT_REGION_REGIONNAME,false );

		$output[ 'ID' ]              = $id;
		$output[ 'COUNTRYDROPDOWN' ] = createCountriesDropdown( $region[ 'countrycode' ], "countrycode", false );
		$output[ 'REGIONNAME' ]      = $region[ 'regionname' ];

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=list_regions", '' );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_region' );
		if ( $id > 0 ) $jrtb .= $jrtbar->toolbarItem( 'delete', JOMRES_SITEPAGE_URL_ADMIN . "&task=delete_region" . "&no_html=1&id=" . $id, '' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_region.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>