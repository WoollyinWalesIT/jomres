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

class j16000ajax_list_properties_approve
    {
    function j16000ajax_list_properties_approve()
        {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
        if ( $MiniComponents->template_touch )
            {
            $this->template_touchable = false;

            return;
            }

        $property_uid = jomresGetParam( $_REQUEST, 'property_uid', 0 );

        $query  = "UPDATE #__jomres_propertys SET `approved`=1 WHERE propertys_uid = " . (int) $property_uid;
        $result = doSelectSql( $query );

        $current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
        $current_property_details->gather_data( $property_uid );

        $jomresConfig_mailfrom = get_showtime( 'mailfrom' );
        $jomresConfig_fromname = get_showtime( 'fromname' );

        $link = jomresURL( JOMRES_SITEPAGE_URL_NOSEF . "&task=viewproperty&property_uid=" . $property_uid );

        if ( !jomresMailer( $jomresConfig_mailfrom, $jomresConfig_fromname, $current_property_details->property_email, jr_gettext( _JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT ), jr_gettext( _JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT ) . $link ) ) error_logging( 'Failure in sending confirmation email to hotel. Target address: ' . $current_property_details->property_email . ' Subject' . jr_gettext( _JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT ) );
        }


    // This must be included in every Event/Mini-component
    function getRetVals()
        {
        return null;
        }
    }