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

/**
#
 * Cancels a booking
#
 * @package Jomres
#
 */
class j02160cancelbooking
    {
    /**
    #
     * Constructor: Cancels a booking
    #
     */
    function j02160cancelbooking()
        {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
        if ( $MiniComponents->template_touch )
            {
            $this->template_touchable = true;

            return;
            }
        $mrConfig     = getPropertySpecificSettings();
        $contract_uid = jomresGetParam( $_REQUEST, 'contract_uid', 0 );

        $jsLink          = jomresURL( JOMRES_SITEPAGE_URL . "&task=saveCancellation&contract_uid=$contract_uid" );
        $defaultProperty = getDefaultProperty();
        $today           = date( "Y/m/d" );
        $query           = "SELECT arrival,deposit_paid,contract_total,deposit_required,booked_in,property_uid FROM #__jomres_contracts WHERE contract_uid = '" . (int) $contract_uid . "' AND property_uid = '" . (int) $defaultProperty . "'";
        $arrivalList     = doSelectSql( $query );
        if ( count( $arrivalList ) > 0 )
            {
            foreach ( $arrivalList as $cancellationFigures )
                {
                $arrival          = $cancellationFigures->arrival;
                $deposit_paid     = $cancellationFigures->deposit_paid;
                $contract_total   = $cancellationFigures->contract_total;
                $deposit_required = $cancellationFigures->deposit_required;
                $booked_in        = $cancellationFigures->booked_in;
                $property_uid     = (int) $cancellationFigures->property_uid;
                }

            if ( $booked_in != "1" )
                {
                $output[ 'PAGETITLE' ]  = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', _JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING );
                $output[ 'SAVEBUTTON' ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', _JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON, false );
                $output[ 'HREASON' ]    = jr_gettext( '_JOMRES_JR_BLACKBOOKING_REASON', _JOMRES_JR_BLACKBOOKING_REASON );

                $output[ 'CONTRACT_UID' ]   = $contract_uid;
                $output[ 'HARRIVAL' ]       = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', _JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL );
                $output[ 'HCONTRACTTOTAL' ] = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', _JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL );
                $output[ 'HDAYSTOARRIVAL' ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', _JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL );

                $output[ 'ARRIVAL' ]       = outputDate( $arrival );
                $output[ 'CONTRACTTOTAL' ] = output_price( $contract_total );
                $output[ 'DAYSTOARRIVAL' ] = dateDiff( "d", $today, $arrival );

                if ( $deposit_paid == "1" )
                    {
                    $output[ 'HDEPOSITPAID' ]  = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', _JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID );
                    $output[ 'DEPOSITAMOUNT' ] = output_price( $deposit_required );
                    }
                else
                    {
                    $output[ 'HDEPOSITPAID' ]  = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', _JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT );
                    $output[ 'DEPOSITAMOUNT' ] = "";
                    }

                $jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
                $jrtb   = $jrtbar->startTable();
                $jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'saveCancellation' );
                $jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "&task=editBooking&contract_uid=" . $contract_uid ), '' );
                $jrtb .= $jrtbar->endTable();
                $output[ 'JOMRESTOOLBAR' ] = $jrtb;

                $output[ 'JOMRESTOKEN' ] = '<input type="hidden" name="jomrestoken" value="' . jomresSetToken() . '"><input type="hidden" name="no_html" value="1"/>';

                $output[ 'JOMRES_SITEPAGE_URL' ] = JOMRES_SITEPAGE_URL;

                $pageoutput[ ] = $output;

                $tmpl = new patTemplate();
                $tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
                $tmpl->readTemplatesFromInput( 'cancel_booking.html' );
                $tmpl->addRows( 'pageoutput', $pageoutput );
                $tmpl->displayParsedTemplate();
                $status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=yes,menubar=yes,resizable=yes,width=710,height=710,directories=no,location=no';
                $link   = JOMRES_SITEPAGE_URL . "&task=invoiceForm&contract_uid=" . $contract_uid;
                }
            else
            echo jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', _JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN );
            }
        else
        trigger_error( "Error when cancelling booking, incorrect contract uid used (hack attempt?)", E_USER_ERROR );
        }

    function touch_template_language()
        {
        $output = array ();

        $output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', _JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN );
        $output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', _JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT );
        $output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', _JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID );
        $output[ ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', _JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL );
        $output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', _JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL );
        $output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', _JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL );
        $output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', _JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON );

        foreach ( $output as $o )
            {
            echo $o;
            echo "<br/>";
            }
        }

    /**
    #
     * Must be included in every mini-component
    #
     * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
    #
     */
    // This must be included in every Event/Mini-component
    function getRetVals()
        {
        return null;
        }
    }

?>