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

/**
#
 * Saves a cancellation
#
 *
 * @package Jomres
#
 */
class j02162savecancellation
	{
	/**
	#
	 * Constructor: Saves a cancellation
	#
	 */
	function j02162savecancellation()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false; return;
			}
		
		$defaultProperty = getDefaultProperty();
		$mrConfig = getPropertySpecificSettings();
		$contract_uid = jomresGetParam( $_POST, 'contract_uid', 0 );
		$reason = jomresGetParam( $_POST, 'reason', "" );
		$cancellationSuccessful = false;
		$saveMessage = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', _JOMRES_COM_MR_EB_GUEST_CANCELLED, false );
		
		if ( $contract_uid != 0 )
			{
			jr_import( 'jomres_generic_booking_cancel' );
			$bkg = new jomres_generic_booking_cancel();
			
			$bkg->property_uid 		= $defaultProperty;
			$bkg->contract_uid 		= $contract_uid;
			$bkg->reason	 		= $reason;
			$bkg->note				= $saveMessage;
			
			$cancellationSuccessful = $bkg->cancel_booking();
			
			if ($cancellationSuccessful === true)
				{
				$query = "SELECT guest_uid,tag FROM #__jomres_contracts WHERE contract_uid = '" . (int) $contract_uid . "' AND property_uid = '" . (int) $defaultProperty . "'";
				$contractData = doSelectSql( $query );
				foreach ( $contractData as $cancellation )
					{
					$guest_uid = $cancellation->guest_uid;
					$tag       = $cancellation->tag;
					}
	
				$query     = "SELECT email,firstname,surname FROM #__jomres_guests WHERE guests_uid = " . $guest_uid . " LIMIT 1";
				$guestData = doSelectSql( $query, 2 );
				$text      = $tag . ' - ' . $saveMessage;
	
				$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
				$current_property_details->gather_data( $defaultProperty );
	
				if ( $guestData[ 'email' ] != '' )
					{
					if ( !jomresMailer( $guestData[ 'email' ], $current_property_details->property_name . ' - ' . $current_property_details->property_town, $current_property_details->property_email, $saveMessage, $text, $mode = 1 ) ) error_logging( 'Failure in sending cancellation email to hotel. Target address: ' . $hotelemail . ' Subject' . $subject );
					}
				if ( !jomresMailer( $current_property_details->property_email, $current_property_details->property_name . ' - ' . $current_property_details->property_town, $guestData[ 'email' ], $saveMessage, $text, $mode = 1 ) ) error_logging( 'Failure in sending cancellation email to guest. Target address: ' . $hotelemail . ' Subject' . $subject );
	
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_bookings" ), $saveMessage );
				}
			else
				trigger_error( "Unable to save cancellation. " . $cancellationSuccessful, E_USER_ERROR );
			}
		else
			{
			trigger_error( "Unable to save cancellation. (Hack attempt?)", E_USER_ERROR );
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