<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listPfeatures
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
		$editIcon             = '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" border="0" />';
		$query                = "SELECT  hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid,ptype_xref FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList = doSelectSql( $query );
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
		$output[ 'PAGETITLE' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK,false );
		$output[ 'HLINKTEXT' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV,false );
		$output[ 'HLINKTEXTCLONE' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC,false );
		//$output['PROPERTYFEATUREUID']=$propertyFeatureUid;
		$output[ 'HPFEATURETITLE' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV,false );
		$output[ 'HPFEATUREDESCRIPTION' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC,false );
		$output[ 'HJOMRES_A_ICON' ]       = jr_gettext( '_JOMRES_A_ICON', _JOMRES_A_ICON,false );
		$output[ 'HPROPERTY_TYPES' ] = jr_gettext( '_JOMRES_FRONT_PTYPE', _JOMRES_FRONT_PTYPE,false );
		$output[ 'BACKLINK' ]             = '<a href="javascript:submitbutton(\'cpanel\')">' . jr_gettext( '_JOMRES_COM_MR_BACK', _JOMRES_COM_MR_BACK,false ) . '</a>';

		foreach ( $propertyFeaturesList as $propertyFeature )
			{
			if (!is_numeric($propertyFeature->ptype_xref))
				{
				$ptype_xref=unserialize($propertyFeature->ptype_xref);
				$selected_ptype_rows = "";
				foreach ( $ptype_xref as $ptype )
					{
					$selected_ptype_rows .= $all_ptypes[ $ptype ] . ", ";
					}
				}
			else //for backward compatibility
				$selected_ptype_rows = $all_ptypes[$propertyFeature->ptype_xref];

			$r[ 'CHECKBOX' ]            = '<input type="checkbox" id="cb' . count( $rows ) . '" name="idarray[]" value="' . $propertyFeature->hotel_features_uid . '" onClick="jomres_isChecked(this.checked);">';
			$r[ 'LINKTEXT' ]            = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=editPfeature&propertyFeatureUid=' . $propertyFeature->hotel_features_uid . '">' . $editIcon . '</a>';
			$r[ 'LINKTEXTCLONE' ]       = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=editPfeature&propertyFeatureUid=' . $propertyFeature->hotel_features_uid . '&clone=1">' . $cloneIcon . '</a>';
			$r[ 'PFEATURETITLE' ]       = $propertyFeature->hotel_feature_abbv;
			$r[ 'PFEATUREDESCRIPTION' ] = $propertyFeature->hotel_feature_full_desc;

			$r[ 'PROPERTY_TYPES' ] = $selected_ptype_rows;

			$r[ 'IMAGE' ] = get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/'.$propertyFeature->image;
			$rows[ ]      = $r;
			}
		$output[ 'COUNTER' ]            = count( $rows );
		$output[ 'TOTALINLISTPLUSONE' ] = count( $rows ) + 1;

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, '' );
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/AddItem.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'editPfeature', $link, jr_gettext( '_JOMRES_COM_MR_NEWTARIFF', _JOMRES_COM_MR_NEWTARIFF,false ), $submitOnClick = true, $submitTask = "editPfeature", $image );
		$jrtb .= $jrtbar->spacer();
		$image = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/WasteBasket.png" );
		$link  = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'deletePfeature', $link, jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', _JOMRES_COM_MR_ROOM_DELETE,false), $submitOnClick = true, $submitTask = "deletePfeature", $image );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_pfeatures.html' );
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