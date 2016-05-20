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

class j16000editGlobalroomTypes
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
		
		$room_classes_uid	= intval( jomresGetParam( $_REQUEST, 'rmTypeUid', 0 ) );
		$mrp_srp_flag		= intval( jomresGetParam( $_REQUEST, 'mrp_srp_flag', 0 ) );
		
		$output = array();
		$all_ptype_rows = array ();
		
		$jomres_property_types = jomres_singleton_abstract::getInstance( 'jomres_property_types' );
		$jomres_property_types->get_all_property_types();
		
		$jomres_room_types = jomres_singleton_abstract::getInstance( 'jomres_room_types' );
		$jomres_room_types->get_room_type($room_classes_uid);
		
		$output[ 'ROOMCLASSUID' ] 	= $room_classes_uid;
		$output[ 'CLASSABBV' ] 		= stripslashes( $jomres_room_types->room_type['room_class_abbv'] );
		$output[ 'CLASSDESC' ] 		= stripslashes( $jomres_room_types->room_type['room_class_full_desc'] );

		if ( count( $jomres_property_types->property_types ) > 0 )
			{
			foreach ( $jomres_property_types->property_types as $ptype )
				{
				$r = array ();
				$r[ 'propertytype_id' ] = $ptype['id'];
				$r[ 'propertytype_desc' ] = $ptype['ptype'];
				$r[ 'checked' ] = "";
				
				if ( in_array( $ptype['id'], $jomres_room_types->room_type['ptype_xref'] ) ) 
					$r[ 'checked' ] = " checked ";
				
				$all_ptype_rows[] = $r;
				}
			}

		$image = $jomres_room_types->room_type['image'];
		
		$d = @dir( JOMRES_IMAGELOCATION_ABSPATH . 'rmtypes' . JRDS );

		$docs = array ();
		$rows = array ();
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( is_file( JOMRES_IMAGELOCATION_ABSPATH . 'rmtypes' . JRDS . $filename ) && substr( $entry, 0, 1 ) != '.' && strtolower( $entry ) !== 'cvs' )
					{
					$docs = array ();
					$docs[ 'ISCHECKED' ] = "";
					$docs[ 'IMAGEPATH' ] = $filename;
					$docs[ 'IMAGE' ]     = JOMRES_IMAGELOCATION_RELPATH . 'rmtypes/' . $filename;
					if ( isset( $image ) && $docs[ 'IMAGEPATH' ] == $image ) $docs[ 'ISCHECKED' ] = "checked";
					$rows[ ] = $docs;
					}
				}
			$d->close();
			}

		$output[ 'PROPERTYFEATUREINFO' ] 			  = jr_gettext( '_JOMRES_A_GLOBALROOMTYPES_INFO', '_JOMRES_A_GLOBALROOMTYPES_INFO',false );
		$output[ 'HLINKTEXT' ]                        = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT',false );
		$output[ 'HLINKTEXTCLONE' ]                   = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE',false );
		$output[ 'HABBV' ]                            = jr_gettext( '_JOMRES_SEARCH_RTYPES', '_JOMRES_SEARCH_RTYPES',false );
		$output[ 'HDESC' ]                            = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC',false );
		$output[ 'PAGETITLE' ]                        = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK',false );
		$output[ '_JOMRES_PROPERTY_TYPE_ASSIGNMENT' ] = jr_gettext( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', '_JOMRES_PROPERTY_TYPE_ASSIGNMENT',false );
		$output[ '_JOMRES_IMAGE' ]                    = jr_gettext( '_JOMRES_IMAGE', '_JOMRES_IMAGE',false );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/Save.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listGlobalroomTypes", '' );
		$jrtb .= $jrtbar->customToolbarItem( 'saveGlobalRoomClass', $link, jr_gettext( '_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE',false ), $submitOnClick = true, $submitTask = "saveGlobalRoomClass", $image );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_room_type.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->addRows( 'all_ptype_rows', $all_ptype_rows );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}