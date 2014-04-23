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

class j16000list_regions
	{
	function j16000list_regions()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$editIcon = '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" alt="editicon"/>';
		$rows     = array ();

		$output[ '_JOMRES_EDIT_REGION_TITLE' ]        = jr_gettext( "_JOMRES_EDIT_REGION_TITLE", _JOMRES_EDIT_REGION_TITLE, false );
		$output[ '_JOMRES_EDIT_REGION_ID' ]           = jr_gettext( "_JOMRES_EDIT_REGION_ID", _JOMRES_EDIT_REGION_ID, false );
		$output[ '_JOMRES_EDIT_REGION_COUNTRYCODE' ]  = jr_gettext( "_JOMRES_EDIT_REGION_COUNTRYCODE", _JOMRES_EDIT_REGION_COUNTRYCODE, false );
		$output[ '_JOMRES_EDIT_REGION_REGIONNAME' ]   = jr_gettext( "_JOMRES_EDIT_REGION_REGIONNAME", _JOMRES_EDIT_REGION_REGIONNAME, false );
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYNAME' ] = jr_gettext( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", _JOMRES_EDIT_COUNTRY_COUNTRYNAME, false );

		$jomres_regions = jomres_singleton_abstract::getInstance( 'jomres_regions' );

		if ( count( $jomres_regions->regions ) == 0 ) $regionList = import_regions();
		else
		$regionList = $jomres_regions->get_regions();

		foreach ( $regionList as $region )
			{

			if ( getSimpleCountry( $region[ 'countrycode' ] ) != "" )
				{
				$r                  = array ();
				$r[ 'REGIONNAME' ]  = $region[ 'regionname' ];
				$r[ 'COUNTRYCODE' ] = $region[ 'countrycode' ];
				$r[ 'COUNTRYNAME' ] = getSimpleCountry( $region[ 'countrycode' ] );

				$r[ 'EDITLINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_region&id=' . $region[ 'id' ] . '">' . $editIcon . '</a>';
				$r[ 'EDIT_URL' ] = JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_region&id=' . $region[ 'id' ];
				$rows[ ]         = $r;
				}
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL_ADMIN ), '' );
		$jrtb .= $jrtbar->toolbarItem( 'new', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=edit_region" ), '' );
		
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_regions.html' );
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