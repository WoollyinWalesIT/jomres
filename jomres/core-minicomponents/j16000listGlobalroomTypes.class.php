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

class j16000listGlobalroomTypes
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
		$editIcon     = '<IMG SRC="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" border="0">';
		$query        = "SELECT room_classes_uid, room_class_abbv, room_class_full_desc,image,srp_only FROM #__jomres_room_classes  WHERE property_uid = '0' ORDER BY room_class_abbv";
		$roomtypeList = doSelectSql( $query );

		$query      = "SELECT * FROM #__jomres_ptypes";
		$ptypeList  = doSelectSql( $query );
		$all_ptypes = array ();
		if ( count( $ptypeList ) > 0 )
			{
			foreach ( $ptypeList as $ptype )
				{
				$all_ptypes[ $ptype->id ] = $ptype->ptype;
				}
			}
		
		$rtxrefList=array();
		$query               = "SELECT roomtype_id,propertytype_id FROM #__jomres_roomtypes_propertytypes_xref ";
		$rtxref          = doSelectSql( $query );

		foreach ($rtxref as $xref)
			{
			$rtxrefList[$xref->roomtype_id][]=$xref->propertytype_id;
			}

		$rows                       = array ();
		$output[ 'INDEX' ]          = "index.php";
		$output[ 'PAGETITLE' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK',false );
		$output[ 'BACKLINK' ]       = '<a href="javascript:submitbutton(\'cpanel\')">' . jr_gettext( '_JOMRES_COM_MR_BACK', '_JOMRES_COM_MR_BACK',false ) . '</a>';
		$output[ 'HLINKTEXT' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV',false );
		$output[ 'HLINKTEXTCLONE' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC',false );
		$output[ 'HRTTITLE' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV',false );
		$output[ 'HRTDESCRIPTION' ] = jr_gettext( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC',false );
		$output[ 'HJOMRES_A_ICON' ] = jr_gettext( '_JOMRES_A_ICON', '_JOMRES_A_ICON',false );
		$output[ 'HPTYPE_ASSIGNMENT' ] = jr_gettext( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', '_JOMRES_PROPERTY_TYPE_ASSIGNMENT',false );
		
		$output[ '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD' ]				= jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD',false );
		$output[ '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES' ]		= nl2br(jr_gettext( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES',false ));
		
		
		foreach ( $roomtypeList as $roomtype )
			{
			$selected_ptype_rows = "";
			if ( count( $rtxrefList ) > 0 )
				{
				if (isset($rtxrefList[$roomtype->room_classes_uid]))
					{
					foreach ( $rtxrefList[$roomtype->room_classes_uid] as $ptype )
						{
						$selected_ptype_rows .= $all_ptypes[ $ptype ] . " ";
						}
					}
				}
			
			if ($roomtype->srp_only == "0")
				$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '_JOMRES_PROPERTYTYPE_FLAG_HOTEL',false );
			elseif ($roomtype->srp_only == "1")
				$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_VILLA', '_JOMRES_PROPERTYTYPE_FLAG_VILLA',false );
			else
				$r['MANAGEMENT_PROCESS'] = jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_NEITHER', '_JOMRES_PROPERTYTYPE_FLAG_NEITHER',false );
			
			$r[ 'CHECKBOX' ]       = '<input type="checkbox" id="cb' . count( $rows ) . '" name="idarray[]" value="' . $roomtype->room_classes_uid . '" onClick="jomres_isChecked(this.checked);">';
			$r[ 'RTTITLE' ]        = $roomtype->room_class_abbv;
			$r[ 'RTDESCRIPTION' ]  = $roomtype->room_class_full_desc;
			$r[ 'IMAGE' ]          = get_showtime( 'live_site' ) . "/" . JOMRES_ROOT_DIRECTORY . "/uploadedimages/rmtypes/" . $roomtype->image;
			$r[ 'PROPERTY_TYPES' ] = $selected_ptype_rows;
			
			if (!using_bootstrap())
				{
				$r[ 'EDITLINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=editGlobalroomTypes&rmTypeUid=' . $roomtype->room_classes_uid . '">' . $editIcon . '</a>';
				}
			else
				{
				$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
				$toolbar->newToolbar();
				$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=editGlobalroomTypes&rmTypeUid=' . $roomtype->room_classes_uid ), jr_gettext( 'COMMON_EDIT', 'COMMON_EDIT', false ) );
				
				$r[ 'EDITLINK' ] = $toolbar->getToolbar();
				}
				
			$rows[ ]               = $r;
			}
		$output[ 'COUNTER' ]            = count( $rows );
		$output[ 'TOTALINLISTPLUSONE' ] = count( $rows ) + 1;

		// Property type checks //
		// We have a situation where a property type needs to be cross-referenced with room types, this check will ascertain if any property types are missing room types
		
		$output['PROPERTY_TYPE_WARNING'] = '';
		$property_types_requiring_attention = array();
		
 		$roomtype_propertytype_xref = array();
		$query = "SELECT roomtype_id , propertytype_id FROM #__jomres_roomtypes_propertytypes_xref ";
		$result = doSelectSql( $query );
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$all_property_types_that_have_room_types[] = $r->propertytype_id;
				}
			}

		if (count($roomtypeList)>0)
			{
			$query = "SELECT `id`,`ptype`,`mrp_srp_flag` FROM #__jomres_ptypes ORDER BY `order` ASC";
			$ptypeList = doSelectSql( $query );
			if (count($ptypeList) > 0)
				{
				foreach ( $ptypeList as $ptype)
					{
					if ($ptype->mrp_srp_flag == "0" || $ptype->mrp_srp_flag == "1")
						{
						if (!in_array($ptype->id,$all_property_types_that_have_room_types))
							{
							$property_types_requiring_attention[] = array ("ptype_abbv"=>$ptype->ptype , "process" => $ptype->mrp_srp_flag);
							}
						}
					}
				}
			
			if (count($property_types_requiring_attention)>0)
				{
				$o=array();
				$po=array();
				$rws=array();
				$o['_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES']					= jr_gettext('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES','_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES',false);
				$o['_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES']	= jr_gettext('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES','_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES',false);
				$o[ '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD' ]=$output[ '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD' ];
				$o['HPTYPE']= jr_gettext( '_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false );
				$o['LINK'] = '';
				foreach ($property_types_requiring_attention as $property_type)
					{
					$r=array();
					$r['PROPERTY_TYPE'] = $property_type['ptype_abbv'];
					if ( $property_type['process'] == "0")
						$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '_JOMRES_PROPERTYTYPE_FLAG_HOTEL',false );
					else
						$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_VILLA', '_JOMRES_PROPERTYTYPE_FLAG_VILLA',false );
					$rws[]=$r;
					}
				
				$po[ ] = $o;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->addRows( 'pageoutput', $po );
				$tmpl->addRows( 'rows', $rws );
				$tmpl->readTemplatesFromInput( 'list_ptypes_without_room_types.html' );
				$output['PROPERTY_TYPE_WARNING'] = $tmpl->getParsedTemplate();
				}
			}
		
		// End property type checks //
		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, '' );
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/AddItem.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'editGlobalroomTypes_management_process', $link, jr_gettext( '_JOMRES_COM_MR_NEWTARIFF', '_JOMRES_COM_MR_NEWTARIFF',false ), $submitOnClick = true, $submitTask = "editGlobalroomTypes_management_process", $image );
		$image = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/WasteBasket.png" );
		$link  = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'deleteGlobalroomTypes', $link, jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE',false ), $submitOnClick = true, $submitTask = "deleteGlobalroomTypes", $image );
		$jrtb .= $jrtbar->endTable();

		$output[ 'JOMRESTOOLBAR' ]             = $jrtb;

		$pageoutput[ ] = $output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_room_types.html' );
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