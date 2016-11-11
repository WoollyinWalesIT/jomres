<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_regions
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
		$editIcon = '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" alt="editicon"/>';
		$rows     = array ();

		$output[ '_JOMRES_EDIT_REGION_TITLE' ]        = jr_gettext( "_JOMRES_EDIT_REGION_TITLE", '_JOMRES_EDIT_REGION_TITLE', false );
		$output[ '_JOMRES_EDIT_REGION_ID' ]           = jr_gettext( "_JOMRES_EDIT_REGION_ID", '_JOMRES_EDIT_REGION_ID', false );
		$output[ '_JOMRES_EDIT_REGION_COUNTRYCODE' ]  = jr_gettext( "_JOMRES_EDIT_REGION_COUNTRYCODE", '_JOMRES_EDIT_REGION_COUNTRYCODE', false );
		$output[ '_JOMRES_EDIT_REGION_REGIONNAME' ]   = jr_gettext( "_JOMRES_EDIT_REGION_REGIONNAME", '_JOMRES_EDIT_REGION_REGIONNAME', false );
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYNAME' ] = jr_gettext( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", '_JOMRES_EDIT_COUNTRY_COUNTRYNAME', false );

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

				if (!using_bootstrap())
				{
					$r[ 'EDITLINK' ]    = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_region&id=' . $region[ 'id' ] . '">' . $editIcon . '</a>';
					}
				else
					{
					$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
					$toolbar->newToolbar();
					$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_region&id=' . $region[ 'id' ] ), jr_gettext( 'COMMON_EDIT', 'COMMON_EDIT', false ) );
					$toolbar->addSecondaryItem( 'fa fa-trash-o', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=delete_region&id=' . $region[ 'id' ] ), jr_gettext( 'COMMON_DELETE', 'COMMON_DELETE', false ) );
					
					$r['EDITLINK'] = $toolbar->getToolbar();
					}
				
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