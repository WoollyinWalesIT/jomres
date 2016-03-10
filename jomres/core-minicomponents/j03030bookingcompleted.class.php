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

class j03030bookingcompleted
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$mrConfig          = getPropertySpecificSettings();
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$property_uid      = $tmpBookingHandler->getBookingPropertyId();

		$save_deets   = array ();
		$save_details = array ();

		//$save_deets['LIVESITE']=JOMRES_SITEPAGE_URL;


		$save_deets[ 'RETURN_URL' ] = JOMRES_SITEPAGE_URL;

		if ( defined( '_JR_GATEWAY_AFTERWORD' ) ) $save_deets[ 'JR_GATEWAY_AFTERWORD' ] = jr_gettext( '_JR_GATEWAY_AFTERWORD', _JR_GATEWAY_AFTERWORD );
		$save_deets[ 'SAVEDMESSAGE' ] = jr_gettext( '_JOMRES_FRONT_MR_BOOKINGMADE', _JOMRES_FRONT_MR_BOOKINGMADE );
		$save_deets[ 'PROPERTYUID' ]  = $property_uid;
		if ( $jrConfig[ 'is_single_property_installation' ] != "1" ) $save_deets[ 'BACKTOPROPERTY' ] = jr_gettext( '_JOMRES_BACKTOPROPERTYDETAILSLINK', _JOMRES_BACKTOPROPERTYDETAILSLINK );
		$save_details[ ] = $save_deets;
		property_header( $property_uid );
		$tmpl = new patTemplate();
		$tmpl->addRows( 'completed', $save_details );
		$componentArgs = array ( 'tmpl' => $tmpl );
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'bookings_completed.html' );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output = array ();

		//$output[]		=jr_gettext('_JR_GATEWAY_AFTERWORD',_JR_GATEWAY_AFTERWORD);
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_BOOKINGMADE', _JOMRES_FRONT_MR_BOOKINGMADE );
		$output[ ] = jr_gettext( '_JOMRES_BACKTOPROPERTYDETAILSLINK', _JOMRES_BACKTOPROPERTYDETAILSLINK );

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