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
 *
#
 * @package Jomres
#
 */
class j00102wiseprice
    {
    /**
    #
     * Constructor:
    #
     */
    function j00102wiseprice( $componentArgs )
        {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
        if ( $MiniComponents->template_touch )
            {
            $this->template_touchable = false;

            return;
            }
        $tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
        $tmpBookingHandler->addNewBookingField( "wiseprice_discount" );
        $tmpBookingHandler->updateBookingField( "wiseprice_discount", array () );
        $tmpBookingHandler->saveBookingData();
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