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

class j16000list_taxrates
	{
	function j16000list_taxrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$editIcon   = '<IMG SRC="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';
		$rates      = taxrates_getalltaxrates();
		$output     = array ();
		$pageoutput = array ();
		$rows       = array ();

		$output[ 'PAGETITLE' ]    = jr_gettext( '_JRPORTAL_TAXRATES_TITLE', _JRPORTAL_TAXRATES_TITLE,false );
		$output[ 'HCODE' ]        = jr_gettext( '_JRPORTAL_TAXRATES_CODE', _JRPORTAL_TAXRATES_CODE,false );
		$output[ 'HDESCRIPTION' ] = jr_gettext( '_JRPORTAL_TAXRATES_DESCRIPTION', _JRPORTAL_TAXRATES_DESCRIPTION,false );
		$output[ 'HRATE' ]        = jr_gettext( '_JRPORTAL_TAXRATES_RATE', _JRPORTAL_TAXRATES_RATE,false );
		
		$output[ '_JOMRES_TAX_RATES_IMPORT' ]        = jr_gettext( '_JOMRES_TAX_RATES_IMPORT', _JOMRES_TAX_RATES_IMPORT,false );
		$output[ '_JOMRES_TAX_RATES_IMPORT_INFO' ]   = jr_gettext( '_JOMRES_TAX_RATES_IMPORT_INFO', _JOMRES_TAX_RATES_IMPORT_INFO,false );
		$output[ 'IMPORT_LINK'] = JOMRES_SITEPAGE_URL_ADMIN . "&task=import_eu_tax_rates";
		
		foreach ( $rates as $rate )
			{
			$r                  = array ();
			$r[ 'ID' ]          = $rate[ 'id' ];
			$r[ 'CODE' ]        = $rate[ 'code' ];
			$r[ 'DESCRIPTION' ] = $rate[ 'description' ];
			$r[ 'RATE' ]        = $rate[ 'rate' ];
			$r[ 'EDITLINK' ]    = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_taxrate&id=' . $rate[ 'id' ] . '">' . $editIcon . '</a>';
			$rows[ ]            = $r;
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL_ADMIN ), '' );
		$jrtb .= $jrtbar->toolbarItem( 'new', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=edit_taxrate" ), '' );
		
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_taxrates.html' );
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