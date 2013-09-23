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

class j06001handlereq_total
	{
	/**
	#
	 * Constructor: Let's gather the data we want.
	#
	 */
	function j06001handlereq_total()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !$thisJRUser->userIsManager ) return;
		$property_uid      = get_showtime( 'property_uid' );
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$inputName         = "overtotal";

		// A la handlereq, we'll create a new jomres booking object
		$bkg = $MiniComponents->triggerEvent( '05000' ); // Create the new booking object

		// Now we can do stuff to the booking parameters.
		$total = jomresGetParam( $_GET, $inputName, "", 'string' );
		if ( $total != "" )
			{
			$totalval = floatval( $total );
			if ( $totalval > 0 )
				{
				if ( !isset( $tmpBookingHandler->tmpbooking[ "override_contract_total" ] ) ) $tmpBookingHandler->addNewBookingField( "override_contract_total" );
				$tmpBookingHandler->updateBookingField( "override_contract_total", $total );
				$tmpBookingHandler->saveBookingData();
				}
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
		{
		return $this->returnValue;
		}
	}

?>