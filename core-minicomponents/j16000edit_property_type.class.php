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

class j16000edit_property_type
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

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$output = array ();
		
		$output[ 'PAGETITLE' ]                 			= jr_gettext( "_JOMRES_COM_PTYPES_LIST_TITLE_EDIT", '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', false );
		$output[ 'HPTYPE' ]                    			= jr_gettext( "_JOMRES_COM_PTYPES_PTYPE", '_JOMRES_COM_PTYPES_PTYPE', false );
		$output[ 'HPTYPE_DESC' ]               			= jr_gettext( "_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR", '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', false );
		$output[ 'HPUBLISHED' ]                			= jr_gettext( "_JOMRES_COM_MR_VRCT_PUBLISHED", '_JOMRES_COM_MR_VRCT_PUBLISHED', false );
		$output[ 'FURTHER' ]                   			= jr_gettext( "_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER", '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', false );
		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] 			= jr_gettext( "JOMRES_SITEPAGE_URL_ADMIN", 'JOMRES_SITEPAGE_URL_ADMIN', false );
		$output[ '_JOMRES_PROPERTYTYPE_FLAG' ]			= jr_gettext( "_JOMRES_PROPERTYTYPE_FLAG", '_JOMRES_PROPERTYTYPE_FLAG', false );
		$output[ '_JOMRES_PROPERTYTYPE_FLAG_DESC' ]		= jr_gettext( "_JOMRES_PROPERTYTYPE_FLAG_DESC", '_JOMRES_PROPERTYTYPE_FLAG_DESC', false );
		
		//get property type details by id
		$jomres_property_types = jomres_singleton_abstract::getInstance( 'jomres_property_types' );
		$jomres_property_types->get_property_type($id);

		if ( !is_array($jomres_property_types->property_type) )
			return;
		
		$output[ 'PTYPE' ]		= $jomres_property_types->property_type['ptype'];
		$output[ 'PTYPE_DESC' ]	= $jomres_property_types->property_type['ptype_desc'];
		
		// mrp_srp_flag:
		// 0 - hotel
		// 1 - villa/apartment
		// 2 - both - BC, resets to 0
		// 3 - tours
		// 4 - real estate
		if ( $jomres_property_types->property_type['mrp_srp_flag'] == 2 )
			$mrp_srp_flag = 0;
		else
			$mrp_srp_flag = $jomres_property_types->property_type['mrp_srp_flag'];

		$mrp_srp_flag_options    = array ();
		$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', false ) );
		$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_VILLA', '_JOMRES_PROPERTYTYPE_FLAG_VILLA', false ) );
		$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '3', jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_TOURS', '_JOMRES_PROPERTYTYPE_FLAG_TOURS', false ) );
		$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '4', jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', '_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', false ) );
		$output[ '_JOMRES_PROPERTYTYPE_FLAG_DROPDOWN' ]= jomresHTML::selectList( $mrp_srp_flag_options, 'mrp_srp_flag', 'class="inputbox" size="1"', 'value', 'text', $mrp_srp_flag );
	
		$output[ 'ID' ] = $id;

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/Save.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=list_property_types", '' );
		$jrtb .= $jrtbar->customToolbarItem( 'save_property_type', $link, jr_gettext( "_JOMRES_COM_MR_SAVE", '_JOMRES_COM_MR_SAVE', false ), $submitOnClick = true, $submitTask = "save_property_type", $image );
		$jrtb .= $jrtbar->endTable();

		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_property_type.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
