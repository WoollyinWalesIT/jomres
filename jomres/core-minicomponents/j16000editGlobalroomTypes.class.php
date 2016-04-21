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
		$rmTypeUid		= intval( jomresGetParam( $_REQUEST, 'rmTypeUid', 0 ) );
		$mrp_srp_flag	= intval( jomresGetParam( $_REQUEST, 'mrp_srp_flag', 0 ) );
		
		$selected_ptype_rows = array ();
		if ( $rmTypeUid > 0 )
			{
			$query      = "SELECT propertytype_id FROM #__jomres_roomtypes_propertytypes_xref WHERE roomtype_id =" . (int) $rmTypeUid;
			$rtxrefList = doSelectSql( $query );
			if ( count( $rtxrefList ) > 0 )
				{
				foreach ( $rtxrefList as $ptype )
					{
					$selected_ptype_rows[ ] = $ptype->propertytype_id;
					}
				}

			$query  = "SELECT room_class_abbv, room_class_full_desc,image,srp_only FROM #__jomres_room_classes WHERE room_classes_uid = '" . (int) $rmTypeUid . "' AND property_uid = '0'";
			$rtList = doSelectSql( $query );
			foreach ( $rtList as $rt )
				{
				$output[ 'CLASSABBV' ] = stripslashes( $rt->room_class_abbv );
				$output[ 'CLASSDESC' ] = stripslashes( $rt->room_class_full_desc );
				$output[ 'SRP_ONLY' ]  = $rt->srp_only;
				$image                 = $rt->image;
				}
			}
		else
			{
			$output[ 'CLASSABBV' ] = "";
			$output[ 'CLASSDESC' ] = "";
			$output[ 'SRP_ONLY' ]  = $mrp_srp_flag;
			}
		
		
		$query     = "SELECT * FROM #__jomres_ptypes WHERE mrp_srp_flag = ".(int)$output[ 'SRP_ONLY' ];
		$ptypeList = doSelectSql( $query );
		
		$all_ptype_rows = array ();
		if ( count( $ptypeList ) > 0 )
			{
			foreach ( $ptypeList as $ptype )
				{
				$row                        = array ();
				$row[ 'propertytype_id' ]   = $ptype->id;
				$row[ 'propertytype_desc' ] = $ptype->ptype;
				$row[ 'checked' ]           = "";
				if ( in_array( $ptype->id, $selected_ptype_rows ) ) $row[ 'checked' ] = " checked ";
				$all_ptype_rows[ ] = $row;
				}
			}

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
					$docs                = array ();
					$docs[ 'ISCHECKED' ] = "";
					$docs[ 'IMAGEPATH' ] = $filename;
					$docs[ 'IMAGE' ]     = JOMRES_IMAGELOCATION_RELPATH . 'rmtypes/' . $filename;
					if ( isset( $image ) && $docs[ 'IMAGEPATH' ] == $image ) $docs[ 'ISCHECKED' ] = "checked";
					$rows[ ] = $docs;
					}
				}
			$d->close();
			}
		//var_dump($rows);exit;

		$output[ 'PROPERTYFEATUREINFO' ] = jr_gettext( '_JOMRES_A_GLOBALROOMTYPES_INFO', '_JOMRES_A_GLOBALROOMTYPES_INFO',false );
		$output[ 'ROOMCLASSUID' ]        = $rmTypeUid;

		$output[ 'INDEX' ]                            = jr_gettext( 'JOMRES_SITEPAGE_URL_ADMIN', 'JOMRES_SITEPAGE_URL_ADMIN',false );
		$output[ 'TASK' ]                             = 'saveGlobalRoomClass';
		$output[ 'HLINKTEXT' ]                        = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT',false );
		$output[ 'HLINKTEXTCLONE' ]                   = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE',false );
		$output[ 'HABBV' ]                            = jr_gettext( '_JOMRES_SEARCH_RTYPES', '_JOMRES_SEARCH_RTYPES',false );
		$output[ 'HDESC' ]                            = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC',false );
		$output[ 'HSRP_ONLY' ]                        = jr_gettext( 'JOMRES_COM_A_SRPONLY', 'JOMRES_COM_A_SRPONLY',false );
		$output[ 'MOSCONFIGLIVESITE' ]                = get_showtime( 'live_site' );
		$output[ 'PAGETITLE' ]                        = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK',false );
		$output[ '_JOMRES_PROPERTY_TYPE_ASSIGNMENT' ] = jr_gettext( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', '_JOMRES_PROPERTY_TYPE_ASSIGNMENT',false );
		$output[ '_JOMRES_IMAGE' ]                    = jr_gettext( '_JOMRES_IMAGE', '_JOMRES_IMAGE',false );
		
		$output[ '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD' ] = nl2br(jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD',false ));
		if ($output[ 'SRP_ONLY' ] == "0")
			$output['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '_JOMRES_PROPERTYTYPE_FLAG_HOTEL',false );
		elseif ($output[ 'SRP_ONLY' ] == "1")
			$output['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_VILLA', '_JOMRES_PROPERTYTYPE_FLAG_VILLA',false );
		else
			$output['MANAGEMENT_PROCESS'] = jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_NEITHER', '_JOMRES_PROPERTYTYPE_FLAG_NEITHER',false );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/Save.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listGlobalroomTypes", '' );
		$jrtb .= $jrtbar->customToolbarItem( 'saveGlobalRoomClass', $link, jr_gettext( '_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE',false ), $submitOnClick = true, $submitTask = "saveGlobalRoomClass", $image );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
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