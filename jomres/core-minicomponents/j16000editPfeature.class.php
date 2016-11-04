<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000editPfeature
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
		$propertyFeatureUid = jomresGetParam( $_REQUEST, 'propertyFeatureUid', 0 );
		$clone              = intval( jomresGetParam( $_REQUEST, 'clone', false ) );
		//$ptypeid            = 0;
		
		$all_categories = array();
		$query      = "SELECT id,title FROM #__jomres_hotel_features_categories";
		$catList  = doSelectSql( $query );
		if ( count( $catList ) > 0 )
			{
			foreach ( $catList as $cat )
				{
				$all_categories[ $cat->id ] = $cat->title;
				}
			}

		if ( $propertyFeatureUid > 0 )
			{
			$query        = "SELECT hotel_feature_abbv,hotel_feature_full_desc,image,property_uid,ptype_xref,cat_id FROM #__jomres_hotel_features WHERE hotel_features_uid  = '" . (int) $propertyFeatureUid . "' AND property_uid = '0'";
			$pFeatureList = doSelectSql( $query );
			foreach ( $pFeatureList as $pFeature )
				{
				$output[ 'FEATURE_ABBV' ]        = stripslashes( $pFeature->hotel_feature_abbv );
				$output[ 'FEATURE_DESCRIPTION' ] = stripslashes( $pFeature->hotel_feature_full_desc );
				if (!is_numeric($pFeature->ptype_xref))
					$ptype_xref                      = unserialize($pFeature->ptype_xref);
				else
					$ptype_xref                      = $pFeature->ptype_xref;
				$image                           = $pFeature->image;
				
				$cat_id = $pFeature->cat_id;
				}
			}
		else
			{
			$ptype_xref = 0;
			$cat_id = key($all_categories);
			}
		if ( $clone ) $propertyFeatureUid = 0;

		$output[ 'HPROPERTY_TYPE' ] = jr_gettext( '_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE',false );
		
		$query     = "SELECT * FROM #__jomres_ptypes";
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
		


		$map  = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'uploadedimages' . JRDS . 'pfeatures' . JRDS;
		$mrp  = get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/';
		$d    = @dir( $map );
		$docs = array ();
		$rows = array ();
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( is_file( $map . $filename ) && substr( $entry, 0, 1 ) != '.' && strtolower( $entry ) !== 'cvs' )
					{
					$docs                = array ();
					$docs[ 'ISCHECKED' ] = "";
					$docs[ 'IMAGEPATH' ] = $filename;
					$docs[ 'IMAGE' ]     = $mrp . $filename;

					if ( isset( $image ) && $filename == $image ) 
						$docs[ 'ISCHECKED' ] = "checked";
					$rows[ ] = $docs;
					}
				}
			$d->close();
			}
		$output[ 'PROPERTYFEATUREINFO' ] = jr_gettext( '_JOMRES_A_GLOBALPFEATURES_INFO', '_JOMRES_A_GLOBALPFEATURES_INFO',false );
		$output[ 'PROPERTYFEATUREUID' ]  = $propertyFeatureUid;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$output[ 'HLINKTEXT' ]                                = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK',false );
		$output[ 'HLINKTEXTCLONE' ]                           = jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE',false );
		$output[ 'HFEATUREABBV' ]                             = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV',false );
		$output[ 'HFEATUREDESCRIPTION' ]                      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC',false );
		$output[ 'MOSCONFIGLIVESITE' ]                        = get_showtime( 'live_site' );
		$output[ 'PAGETITLE' ]                                = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK',false );
		$output[ 'BACKLINK' ]                                 = '<a href="javascript:submitbutton(\'cpanel\')">' . jr_gettext( '_JOMRES_COM_MR_BACK', '_JOMRES_COM_MR_BACK',false ) . '</a>';
		$output[ '_JOMRES_PROPERTY_TYPE_ASSIGNMENT' ] = jr_gettext( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', '_JOMRES_PROPERTY_TYPE_ASSIGNMENT',false );
		$output[ 'HIMAGE' ] = jr_gettext( '_JOMRES_A_ICON', '_JOMRES_A_ICON',false );

		$options = array ();
		$options[] = jomresHTML::makeOption( 0, '' );
		foreach ($all_categories as $k=>$v)
			{
			$options[] = jomresHTML::makeOption( $k, $v );
			}
		$output[ 'CATEGORY' ] = jomresHTML::selectList( $options, 'cat_id', 'class="inputbox" size="1"', 'value', 'text', $cat_id );
		$output[ 'HCATEGORY' ] = jr_gettext( '_JOMRES_HCATEGORY', '_JOMRES_HCATEGORY' );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/Save.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeatures", '' );
		$jrtb .= $jrtbar->customToolbarItem( 'savePfeature', $link, jr_gettext( '_JOMRES_COM_MR_SAVE','_JOMRES_COM_MR_SAVE',false ), $submitOnClick = true, $submitTask = "savePfeature", $image );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;


		$pageoutput    = array ();
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_property_feature.html' );
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