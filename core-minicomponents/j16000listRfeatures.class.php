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

class j16000listRfeatures
	{
	function j16000listRfeatures()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$editIcon             = '<img src="' . get_showtime( 'live_site' ) . '/jomres/images/jomresimages/small/EditItem.png" border="0" />';
		$query                = "SELECT  room_features_uid,feature_description,ptype_xref FROM #__jomres_room_features WHERE property_uid = '0' ORDER BY feature_description";
		$roomFeaturesList	= doSelectSql( $query );
		$rows                 = array ();

		$ptypes    = array ();
		$query      = "SELECT id,ptype FROM #__jomres_ptypes";
		$ptypeList  = doSelectSql( $query );
		$all_ptypes = array ();
		if ( count( $ptypeList ) > 0 )
			{
			foreach ( $ptypeList as $ptype )
				{
				$all_ptypes[ $ptype->id ] = $ptype->ptype;
				}
			}

		$output[ 'INDEX' ]          = "index.php";
		$output[ 'PAGETITLE' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', _JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES,false );
		$output[ 'HLINKTEXT' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV,false );
		$output[ 'HLINKTEXTCLONE' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC,false );
		$output[ 'HRFEATURETITLE' ]       = jr_gettext( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', _JOMRES_COM_MR_EB_HRESOURCE_FEATURE,false );
		$output[ 'HPROPERTY_TYPES' ] = jr_gettext( '_JOMRES_FRONT_PTYPE', _JOMRES_FRONT_PTYPE,false );
		$output[ 'BACKLINK' ]             = '<a href="javascript:submitbutton(\'cpanel\')">' . jr_gettext( '_JOMRES_COM_MR_BACK', _JOMRES_COM_MR_BACK,false ) . '</a>';

		$selected_ptype_rows='';
		foreach ( $roomFeaturesList as $roomFeature )
			{
			if ($roomFeature->ptype_xref)
				{
				$ptype_xref=unserialize($roomFeature->ptype_xref);
				$selected_ptype_rows = "";
				foreach ( $ptype_xref as $ptype )
					{
					$selected_ptype_rows .= $all_ptypes[ $ptype ] . ", ";
					}
				}

			$r[ 'CHECKBOX' ]            = '<input type="checkbox" id="cb' . count( $rows ) . '" name="idarray[]" value="' . $roomFeature->room_features_uid . '" onClick="jomres_isChecked(this.checked);">';
			$r[ 'LINKTEXT' ]            = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=editRfeature&roomFeatureUid=' . $roomFeature->room_features_uid . '">' . $editIcon . '</a>';
			$r[ 'LINKTEXTCLONE' ]       = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=editRfeature&roomFeatureUid=' . $roomFeature->hotel_features_uid . '&clone=1">' . $cloneIcon . '</a>';
			$r[ 'RFEATURETITLE' ]       = $roomFeature->feature_description;
			$r[ 'PROPERTY_TYPES' ] = $selected_ptype_rows;
			
			$rows[ ]      = $r;
			}
		$output[ 'COUNTER' ]            = count( $rows );
		$output[ 'TOTALINLISTPLUSONE' ] = count( $rows ) + 1;

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, '' );
		$image  = $jrtbar->makeImageValid( "/jomres/images/jomresimages/small/AddItem.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'editRfeature', $link, jr_gettext( '_JOMRES_COM_MR_NEWTARIFF', _JOMRES_COM_MR_NEWTARIFF,false ), $submitOnClick = true, $submitTask = "editRfeature", $image );
		
		$jrtb .= $jrtbar->spacer();
		$image = $jrtbar->makeImageValid( "/jomres/images/jomresimages/small/WasteBasket.png" );
		$link  = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'deleteRfeature', $link, jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', _JOMRES_COM_MR_ROOM_DELETE,false), $submitOnClick = true, $submitTask = "deleteRfeature", $image );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_rfeatures.html' );
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