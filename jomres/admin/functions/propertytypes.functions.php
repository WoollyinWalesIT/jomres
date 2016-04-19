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


//---------------------------------------------
//-C R E A T E P R O P E R T Y  T Y P E S  ----
//---------------------------------------------

/**
#
 * Publishes a property type
#
 */
function publishPropertyType()
	{
	$id        = jomresGetParam( $_GET, 'id', 0 );
	$query     = "SELECT published FROM #__jomres_ptypes WHERE id = '" . (int) $id . "'";
	$ptypeList = doSelectSql( $query );
	$published = 0;
	
	$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
	$c->eraseAll();
	
	foreach ( $ptypeList as $ptype )
		{
		$published = $ptype->published;
		}
	if ( $published ) $query = "UPDATE #__jomres_ptypes SET `published`='0' WHERE id = '$id'";
	else
	$query = "UPDATE #__jomres_ptypes SET `published`='1' WHERE id = '$id'";
	if ( doInsertSql( $query, false ) ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes" ), jr_gettext( "_JOMRES_COM_PTYPES_SAVED", _JOMRES_COM_PTYPES_SAVED, false ) );
	}

/**
#
 * Edit a property type
#
 */
function editPropertyType()
	{
	$id                                    = jomresGetParam( $_GET, 'id', 0 );
	$output                                = array ();
	$output[ 'PAGETITLE' ]                 = jr_gettext( "_JOMRES_COM_PTYPES_LIST_TITLE_EDIT", _JOMRES_COM_PTYPES_LIST_TITLE_EDIT, false );
	$output[ 'HPTYPE' ]                    = jr_gettext( "_JOMRES_COM_PTYPES_PTYPE", _JOMRES_COM_PTYPES_PTYPE, false );
	$output[ 'HPTYPE_DESC' ]               = jr_gettext( "_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR", _JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR, false );
	$output[ 'HPUBLISHED' ]                = jr_gettext( "_JOMRES_COM_MR_VRCT_PUBLISHED", _JOMRES_COM_MR_VRCT_PUBLISHED, false );
	$output[ 'FURTHER' ]                   = jr_gettext( "_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER", _JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER, false );
	$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = jr_gettext( "JOMRES_SITEPAGE_URL_ADMIN", JOMRES_SITEPAGE_URL_ADMIN, false );

	$output[ '_JOMRES_PROPERTYTYPE_FLAG' ]			= jr_gettext( "_JOMRES_PROPERTYTYPE_FLAG", _JOMRES_PROPERTYTYPE_FLAG, false );
	$output[ '_JOMRES_PROPERTYTYPE_FLAG_DESC' ]		= jr_gettext( "_JOMRES_PROPERTYTYPE_FLAG_DESC", _JOMRES_PROPERTYTYPE_FLAG_DESC, false );


	
	
	$output[ 'PTYPE' ]      = "";
	$output[ 'PTYPE_DESC' ] = "";
	$output[ 'PUBLISHED' ]  = "";
	$mrp_srp_flag = "0";
	if ( isset( $id ) && !empty( $id ) )
		{
		$query     = "SELECT ptype,ptype_desc,published,mrp_srp_flag FROM #__jomres_ptypes WHERE id = '" . (int) $id . "' ";
		$ptypeList = doSelectSql( $query );
		foreach ( $ptypeList as $ptype )
			{
			$output[ 'PTYPE' ]		= stripslashes( $ptype->ptype );
			$output[ 'PTYPE_DESC' ]	= stripslashes( $ptype->ptype_desc );
			if ($ptype->mrp_srp_flag == "2")
				$ptype->mrp_srp_flag = "0";
			$mrp_srp_flag			= (int)$ptype->mrp_srp_flag;
			}
		}
	
	$mrp_srp_flag_options    = array ();
	$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '0', jr_gettext( _JOMRES_PROPERTYTYPE_FLAG_HOTEL, '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', false ) );
	$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '1', jr_gettext( _JOMRES_PROPERTYTYPE_FLAG_VILLA, '_JOMRES_PROPERTYTYPE_FLAG_VILLA', false ) );
	$mrp_srp_flag_options[ ] = jomresHTML::makeOption( '3', jr_gettext( _JOMRES_PROPERTYTYPE_FLAG_NEITHER, '_JOMRES_PROPERTYTYPE_FLAG_NEITHER', false ) );
	$output[ '_JOMRES_PROPERTYTYPE_FLAG_DROPDOWN' ]= jomresHTML::selectList( $mrp_srp_flag_options, 'mrp_srp_flag', 'class="inputbox" size="1"', 'value', 'text', $mrp_srp_flag );
	
	$output[ 'ID' ] = $id;

	$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
	$jrtb   = $jrtbar->startTable();
	$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/Save.png" );
	$link   = JOMRES_SITEPAGE_URL_ADMIN;
	
	$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes", '' );
	$jrtb .= $jrtbar->customToolbarItem( 'savePropertyType', $link, jr_gettext( "_JOMRES_COM_MR_SAVE", _JOMRES_COM_MR_SAVE, false ), $submitOnClick = true, $submitTask = "savePropertyType", $image );
	$jrtb .= $jrtbar->endTable();

	$output[ 'JOMRESTOOLBAR' ] = $jrtb;

	$pageoutput[ ] = $output;
	$tmpl          = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
	$tmpl->readTemplatesFromInput( 'edit_property_type.html' );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->displayParsedTemplate();
	}

/**
#
 * Save a property type
#
 */
function savePropertyType()
	{
	$id				= jomresGetParam( $_POST, 'id', 0 );
	$ptype			= jomresGetParam( $_POST, 'ptype', '' );
	$ptype_desc		= strtolower( jomresGetParam( $_POST, 'ptype_desc', '' ) );
	$ptype_desc		= preg_replace( '/[^A-Za-z0-9_-]+/', "", $ptype_desc );
	$mrp_srp_flag	= (int)jomresGetParam( $_POST, 'mrp_srp_flag', 2 );
	
	$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
	$c->eraseAll();

	if ( !is_dir( JOMRESPATH_BASE . '/language/' . $ptype_desc ) && is_writable( JOMRESPATH_BASE . '/language/' ) )
		{
		mkdir( JOMRESPATH_BASE . '/language/' . $ptype_desc );
		copy( JOMRESPATH_BASE . '/language/' . get_showtime( 'lang' ) . ".php", JOMRESPATH_BASE . '/language/' . $ptype_desc . "/" . get_showtime( 'lang' ) . ".php" );
		}
	if ( isset( $id ) && !empty( $id ) ) 
		$query = "UPDATE #__jomres_ptypes SET `ptype`='$ptype',`ptype_desc`='$ptype_desc' , `mrp_srp_flag`=".$mrp_srp_flag." WHERE id = '" . (int) $id . "'";
	else
		$query = "INSERT INTO #__jomres_ptypes (`ptype`,`ptype_desc` ,`mrp_srp_flag` ) VALUES ('$ptype','$ptype_desc' , ".$mrp_srp_flag.")";

	if ( !doInsertSql( $query, false ) ) echo "Nope";
	jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes" ), jr_gettext( "_JOMRES_COM_PTYPES_SAVED", _JOMRES_COM_PTYPES_SAVED, false ) );
	}

/**
#
 * Delete a property type
#
 */
function deletePropertyType()
	{
	$idArray = jomresGetParam( $_POST, 'idarray', array () );
	$success = true;
	if ( count( $idArray ) > 0 )
		{
		foreach ( $idArray as $id )
			{
			$query     = "SELECT ptype_id FROM #__jomres_propertys WHERE ptype_id = '" . (int) $id . "'";
			$ptypeList = doSelectSql( $query );
			if ( count( $ptypeList ) > 0 )
				{
				$success = false;
				echo jr_gettext( "_JOMRES_COM_PTYPES_UNABLETO_DELETE", _JOMRES_COM_PTYPES_UNABLETO_DELETE, false ) . "<br>";
				}
			else
				{
				$query = "DELETE FROM #__jomres_ptypes WHERE id = '" . (int) $id . "'";
				if ( !doInsertSql( $query, false ) ) echo "Nope";
				}
			}
		}
	
	$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
	$c->eraseAll();
	
	if ( $success ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes" ), jr_gettext( "_JOMRES_COM_PTYPES_DELETED", _JOMRES_COM_PTYPES_DELETED, false ) );
	}

