<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000editRfeature
	{
	function j16000editRfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$roomFeatureUid = jomresGetParam( $_REQUEST, 'roomFeatureUid', 0 );
		$clone              = intval( jomresGetParam( $_REQUEST, 'clone', false ) );

		if ( $roomFeatureUid > 0 )
			{
			$query        = "SELECT feature_description,ptype_xref FROM #__jomres_room_features WHERE room_features_uid  = '" . (int) $roomFeatureUid . "' AND property_uid = '0'";
			$rFeatureList = doSelectSql( $query );
			foreach ( $rFeatureList as $rFeature )
				{
				$output[ 'FEATURE_DESCRIPTION' ] = stripslashes( $rFeature->feature_description );
				if ($rFeature->ptype_xref)
					$ptype_xref                      = unserialize($rFeature->ptype_xref);
				}
			}
		if ( $clone ) $roomFeatureUid = 0;

		$output[ 'HPROPERTY_TYPE' ] = jr_gettext( '_JOMRES_FRONT_PTYPE', _JOMRES_FRONT_PTYPE,false );
		
		$query     = "SELECT id, ptype FROM #__jomres_ptypes";
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
				if (!is_numeric($ptype_xref))
					{
					if ( in_array( $ptype->id, $ptype_xref ) ) 
						$row[ 'checked' ] = " checked ";
					}
				else
					{
					if ( $ptype->id == $ptype_xref ) 
						$row[ 'checked' ] = " checked ";
					}
				$all_ptype_rows[ ] = $row;
				}
			}

		$output[ 'ROOMFEATUREUID' ]  = $roomFeatureUid;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$output[ 'HLINKTEXT' ]                                = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', _JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK,false );
		$output[ 'HLINKTEXTCLONE' ]                           = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', _JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE,false );
		$output[ 'HFEATUREDESCRIPTION' ]                      = jr_gettext( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', _JOMRES_COM_MR_EB_HRESOURCE_FEATURE,false );
		$output[ 'PAGETITLE' ]                                = jr_gettext( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', _JOMRES_COM_MR_EB_HRESOURCE_FEATURE,false );
		$output[ 'BACKLINK' ]                                 = '<a href="javascript:submitbutton(\'cpanel\')">' . jr_gettext( '_JOMRES_COM_MR_BACK', _JOMRES_COM_MR_BACK,false ) . '</a>';
		$output[ '_JOMRES_PROPERTY_TYPE_ASSIGNMENT' ] = jr_gettext( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', _JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT,false );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$image  = $jrtbar->makeImageValid( "/jomres/images/jomresimages/small/Save.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'saveRfeature', $link, jr_gettext( '_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE,false ), $submitOnClick = true, $submitTask = "saveRfeature", $image );
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listRfeatures", '' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;


		$pageoutput    = array ();
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_rfeature.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'all_ptype_rows', $all_ptype_rows );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}