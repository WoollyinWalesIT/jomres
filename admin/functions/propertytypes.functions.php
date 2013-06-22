<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
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
    foreach ( $ptypeList as $ptype )
        {
        $published = $ptype->published;
        }
    if ( $published ) $query = "UPDATE #__jomres_ptypes SET `published`='0' WHERE id = '$id'";
    else
    $query = "UPDATE #__jomres_ptypes SET `published`='1' WHERE id = '$id'";
    if ( doInsertSql( $query, false ) ) jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes", jr_gettext( "_JOMRES_COM_PTYPES_SAVED", _JOMRES_COM_PTYPES_SAVED, false ) );
    }

/**
#
 * Edit a property type
#
 */
function editPropertyType()
    {
    $id                                    = jomresGetParam( $_GET, 'id', 0 );
    $ptypeData                             = array ();
    $output                                = array ();
    $output[ 'PAGETITLE' ]                 = jr_gettext( "_JOMRES_COM_PTYPES_LIST_TITLE_EDIT", _JOMRES_COM_PTYPES_LIST_TITLE_EDIT, false );
    $output[ 'HPTYPE' ]                    = jr_gettext( "_JOMRES_COM_PTYPES_PTYPE", _JOMRES_COM_PTYPES_PTYPE, false );
    $output[ 'HPTYPE_DESC' ]               = jr_gettext( "_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR", _JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR, false );
    $output[ 'HPUBLISHED' ]                = jr_gettext( "_JOMRES_COM_MR_VRCT_PUBLISHED", _JOMRES_COM_MR_VRCT_PUBLISHED, false );
    $output[ 'FURTHER' ]                   = jr_gettext( "_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER", _JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER, false );
    $output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = jr_gettext( "JOMRES_SITEPAGE_URL_ADMIN", JOMRES_SITEPAGE_URL_ADMIN, false );


    $output[ 'PTYPE' ]      = "";
    $output[ 'PTYPE_DESC' ] = "";
    $output[ 'PUBLISHED' ]  = "";
    if ( isset( $id ) && !empty( $id ) )
        {
        $query     = "SELECT ptype,ptype_desc,published FROM #__jomres_ptypes WHERE id = '" . (int) $id . "' ";
        $ptypeList = doSelectSql( $query );
        foreach ( $ptypeList as $ptype )
            {
            $output[ 'PTYPE' ]      = stripslashes( $ptype->ptype );
            $output[ 'PTYPE_DESC' ] = stripslashes( $ptype->ptype_desc );
            }
        }


    $output[ 'ID' ] = $id;

    $jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
    $jrtb   = $jrtbar->startTable();
    $image  = $jrtbar->makeImageValid( "/jomres/images/jomresimages/small/Save.png" );
    $link   = JOMRES_SITEPAGE_URL_ADMIN;
    $jrtb .= $jrtbar->customToolbarItem( 'savePropertyType', $link, jr_gettext( "_JOMRES_COM_MR_SAVE", _JOMRES_COM_MR_SAVE, false ), $submitOnClick = true, $submitTask = "savePropertyType", $image );
    $jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes", '' );
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
    if ( !jomresCheckToken() )
        {
        trigger_error( "Invalid token", E_USER_ERROR );
        }
    $id         = jomresGetParam( $_POST, 'id', 0 );
    $ptype      = jomresGetParam( $_POST, 'ptype', '' );
    $ptype_desc = strtolower( jomresGetParam( $_POST, 'ptype_desc', '' ) );
    $ptype_desc = preg_replace( '/[^A-Za-z0-9_-]+/', "", $ptype_desc );

    if ( !is_dir( JOMRESPATH_BASE . '/language/' . $ptype_desc ) && is_writable( JOMRESPATH_BASE . '/language/' ) )
        {
        mkdir( JOMRESPATH_BASE . '/language/' . $ptype_desc );
        copy( JOMRESPATH_BASE . '/language/' . get_showtime( 'lang' ) . ".php", JOMRESPATH_BASE . '/language/' . $ptype_desc . "/" . get_showtime( 'lang' ) . ".php" );
        }
    if ( isset( $id ) && !empty( $id ) ) $query = "UPDATE #__jomres_ptypes SET `ptype`='$ptype',`ptype_desc`='$ptype_desc' WHERE id = '" . (int) $id . "'";
    else
    $query = "INSERT INTO #__jomres_ptypes (`ptype`,`ptype_desc`) VALUES ('$ptype','$ptype_desc')";

    if ( !doInsertSql( $query, false ) ) echo "Nope";
    jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes", jr_gettext( "_JOMRES_COM_PTYPES_SAVED", _JOMRES_COM_PTYPES_SAVED, false ) );
    }

/**
#
 * Delete a property type
#
 */
function deletePropertyType()
    {
    if ( !jomresCheckToken() )
        {
        trigger_error( "Invalid token", E_USER_ERROR );
        }
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
    if ( $success ) jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPropertyTypes", jr_gettext( "_JOMRES_COM_PTYPES_DELETED", _JOMRES_COM_PTYPES_DELETED, false ) );
    }

?>