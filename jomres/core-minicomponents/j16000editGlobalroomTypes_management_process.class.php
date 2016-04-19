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

class j16000editGlobalroomTypes_management_process
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

		$mrp_srp_flag_options    = array ();
		$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '0', jr_gettext( _JOMRES_PROPERTYTYPE_FLAG_HOTEL, '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', false ) );
		$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '1', jr_gettext( _JOMRES_PROPERTYTYPE_FLAG_VILLA, '_JOMRES_PROPERTYTYPE_FLAG_VILLA', false ) );
		$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '3', jr_gettext( _JOMRES_PROPERTYTYPE_FLAG_NEITHER, '_JOMRES_PROPERTYTYPE_FLAG_NEITHER', false ) );
		$output[ '_JOMRES_PROPERTYTYPE_FLAG_DROPDOWN' ]= jomresHTML::selectList( $mrp_srp_flag_options, 'mrp_srp_flag', 'class="inputbox" size="1"', 'value', 'text', 0 );
	
		
		$output[ '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES' ]=nl2br(jr_gettext( _JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES, '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', false ));
		$output[ '_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES' ]=jr_gettext( _JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES, '_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES', false );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listGlobalroomTypes", '' );
		$jrtb .= $jrtbar->customToolbarItem( 'editGlobalroomTypes', '', jr_gettext( '_PN_NEXT', _PN_NEXT,false ), $submitOnClick = true, $submitTask = "editGlobalroomTypes", '' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'management_process.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}