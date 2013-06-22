<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000ajax_change_access_level
    {
    function j16000ajax_change_access_level()
        {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
        if ( $MiniComponents->template_touch )
            {
            $this->template_touchable = false;

            return;
            }
        $jomres_access_control = jomres_singleton_abstract::getInstance( 'jomres_access_control' );

        $minicomp  = jomresGetParam( $_GET, 'minicomp', "" );
        $new_level = jomresGetParam( $_GET, 'new_level', "" );

        if ( array_key_exists( $minicomp, $jomres_access_control->controlled ) ) $query = "UPDATE #__jomres_access_control SET `access_level` = '" . (string) $new_level . "' WHERE scriptname = '" . $minicomp . "'";
        else
        $query = "INSERT INTO #__jomres_access_control (`scriptname`,`access_level`) VALUES ('" . $minicomp . "','" . $new_level . "');";
        if ( !doInsertSql( $query, "" ) ) trigger_error( "Error saving new access control level $new_level for $minicomp", "mysql db failure", E_USER_ERROR );

        }

    // This must be included in every Event/Mini-component
    function getRetVals()
        {
        return null;
        }
    }