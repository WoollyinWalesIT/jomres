<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j05019dobooking_deposit
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$thisJRUser        = jomres_singleton_abstract::getInstance( 'jr_user' );
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$this->returnValue = array();
		
		if ( !$thisJRUser->userIsManager ) return;

		if ( !isset( $tmpBookingHandler->tmpbooking[ "amend_contract" ] ) ) return;

		if ( $tmpBookingHandler->tmpbooking[ "amend_contract" ] == 0 ) return;

		$newTask      = "handlereq_deposit";
		$inputName    = "overdeposit";
		$defaultValue = "";
		if ( isset( $tmpBookingHandler->tmpbooking[ "override_contract_deposit" ] ) && ( $tmpBookingHandler->tmpbooking[ "override_contract_deposit" ] != "" ) )
			{
			$currfmt      = jomres_singleton_abstract::getInstance( 'jomres_currency_format' );
			$defaultValue = $currfmt->get_formatted( $tmpBookingHandler->tmpbooking[ "override_contract_deposit" ] );
			}

		$bookingFormInsert[ 'DEPOSIT_HEADER' ]     = jr_gettext( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', false );
		$bookingFormInsert[ 'DEPOSIT_INPUT' ]      = '<input class="inputbox" size="12" type="text" id="' . $inputName . '" value="' . $defaultValue . '" onChange="jomresAjax_' . $newTask . '(this.value)">';
		$bookingFormInsert[ 'DEPOSIT_AJAXSTRING' ] = '<script>
			jomresJquery(document).ready(function() {
				/**
				 * We show a simple loading indicator
				 * using the jomresJquery ajax events
				 */
				});

			function jomresAjax_' . $newTask . '(value){
				var params = {
				option: "com_jomres",
				task: "' . $newTask . '",
				no_html: "1",
				' . $inputName . ': value
				};
				var tosend = value;
				jomresJquery.ajax({
				type: "GET",
				url: "index.php",
				async: false,
				data: params,
				dataType: "script"
				})
				};
			</script>';

		$this->returnValue = $bookingFormInsert;
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT' );

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
	function getRetVals()
		{
		return $this->returnValue;
		}
	}

?>