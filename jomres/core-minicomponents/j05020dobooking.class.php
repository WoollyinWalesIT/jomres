<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
@see jomres_booking
#
* @package Jomres
#
 */
class j05020dobooking {
	/**
	#
	 * Constructor: Includes the handlereq.php file
	#
	 */
	function j05020dobooking($componentArgs=array())
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'dobooking.php');
		
		$property_uid = get_showtime('property_uid');
		$mrConfig=getPropertySpecificSettings();
		if ( $mrConfig['singleRoomProperty'] || $mrConfig['fixedPeriodBookings'] == "1" )
			{
			showSingleRoomPropAvl($property_uid);
			}
		elseif ($mrConfig['showRoomsInPropertyDetails'])
			{
			$componentArgs=array('all'=>"all",'property_uid'=>$property_uid,"showlinks"=>false);
			$MiniComponents->triggerEvent('00018',$componentArgs);
			//showRoomDetails("all",$property_uid);
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		= jr_gettext('_JOMRES_COM_PERDAY',_JOMRES_COM_PERDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_FIXEDPRIOD1',_JOMRES_FRONT_MR_FIXEDPRIOD1);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING);
		$output[]		= jr_gettext('_JOMRES_COM_MR_QUICKRESDESC',_JOMRES_COM_MR_QUICKRESDESC);
		$output[]		= jr_gettext('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS',_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP',_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP);
		$output[]		= jr_gettext('_JOMRES_JAVASCRIPT_',_JOMRES_JAVASCRIPT_);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM',_JOMRES_AJAXFORM_BILLING_ROOM);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX',_JOMRES_AJAXFORM_BILLING_TAX);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT',_JOMRES_AJAXFORM_BILLING_DISCOUNT);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL);
		$output[]		= jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_PARTICULARS',_JOMRES_AJAXFORM_PARTICULARS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_PARTICULARS_DESC',_JOMRES_AJAXFORM_PARTICULARS_DESC);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_AVAILABLE',_JOMRES_AJAXFORM_AVAILABLE);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_EXTRAS',_JOMRES_AJAXFORM_EXTRAS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_EXTRAS_DESC',_JOMRES_AJAXFORM_EXTRAS_DESC);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_ADDRESS',_JOMRES_AJAXFORM_ADDRESS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_ADDRESS_DESC',_JOMRES_AJAXFORM_ADDRESS_DESC);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS',_JOMRES_AJAXFORM_AVAILABLEROOMS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS',_JOMRES_AJAXFORM_SELECTEDROOMS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS',_JOMRES_AJAXFORM_AVAILABLEROOMS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS',_JOMRES_AJAXFORM_SELECTEDROOMS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_AVAILABLE_DESC',_JOMRES_AJAXFORM_AVAILABLE_DESC);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_INSTRUCTIONS',_JOMRES_AJAXFORM_INSTRUCTIONS);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP',_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP',_JOMRES_AJAXFORM_INSTRUCTIONS_SRP);
		$output[]		= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_REVIEWBOOKING',_JOMRES_FRONT_MR_REVIEWBOOKING);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME',_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME',_JOMRES_FRONT_MR_DISPGUEST_SURNAME);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL) ;
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL) ;
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL) ;
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL);
		$output[]		= jr_gettext('_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL);
		$output[]		= jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);
		$output[]		= jr_gettext('_JOMRES_BOOKITNOW',_JOMRES_BOOKITNOW);
		$output[]		= jr_gettext('_JOMRES_SRP_WEHAVEVACANCIES',_JOMRES_SRP_WEHAVEVACANCIES);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE',_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE);
		$output[]		= jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES',_JOMRES_SRP_WEHAVENOVACANCIES);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_CLICKHERECAPTION',_JOMRES_AJAXFORM_CLICKHERECAPTION);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE',_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE);
		$output[]		= jr_gettext('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST',_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST);
		$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE);
	 	$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_DESC',_JOMRES_FRONT_TARIFFS_DESC);
	 	$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS',_JOMRES_FRONT_TARIFFS_STARTS);
	 	$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS',_JOMRES_FRONT_TARIFFS_ENDS);
	 	$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS',_JOMRES_FRONT_TARIFFS_MINDAYS);
	 	$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS',_JOMRES_FRONT_TARIFFS_MAXDAYS);
	 	$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS',_JOMRES_FRONT_TARIFFS_MINPEEPS);
	 	$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS',_JOMRES_FRONT_TARIFFS_MAXPEEPS);
		$output[]		= jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK);
		$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_PN',_JOMRES_FRONT_TARIFFS_PN);
		$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN',_JOMRES_FRONT_TARIFFS_PPPN) ;
		$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_NOTWEEKEND',_JOMRES_FRONT_TARIFFS_NOTWEEKEND);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1',_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1);
		$output[]		= jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES',_JOMRES_SRP_WEHAVENOVACANCIES);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID',_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID',_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID',_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT',_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS',_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS',_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS',_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS',_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS);
		$output[]		= jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES',_JOMRES_SRP_WEHAVENOVACANCIES);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS',_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM',_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM);
		$output[]		= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE',_JOMRES_COM_MR_QUICKRES_STEP4_TITLE);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON',_JOMRES_AJAXFORM_COUPON_APPLYBUTTON);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS',_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS);
		
		$output[]		= jr_gettext('_JRPORTAL_COUPONS_CODE',_JRPORTAL_COUPONS_CODE);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_COUPON_COUPONSAVED',_JOMRES_AJAXFORM_COUPON_COUPONSAVED);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND',_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND);

		$output[]		=jr_gettext('_JRPORTAL_NEWUSER_SUBJECT',_JRPORTAL_NEWUSER_SUBJECT);
		$output[]		=jr_gettext('_JRPORTAL_NEWUSER_DEAR',_JRPORTAL_NEWUSER_DEAR);
		$output[]		=jr_gettext('_JRPORTAL_NEWUSER_THANKYOU',_JRPORTAL_NEWUSER_THANKYOU);
		$output[]		=jr_gettext('_JRPORTAL_NEWUSER_USERNAME',_JRPORTAL_NEWUSER_USERNAME);
		$output[]		=jr_gettext('_JRPORTAL_NEWUSER_PASSWORD',_JRPORTAL_NEWUSER_PASSWORD);
		$output[]		=jr_gettext('_JRPORTAL_NEWUSER_LOG_IN',_JRPORTAL_NEWUSER_LOG_IN);
		
		$output[]		=jr_gettext('_JOMRES_ROOMALLOCATIONS_ROOM',_JOMRES_ROOMALLOCATIONS_ROOM);
		$output[]		=jr_gettext('_JOMRES_ROOMALLOCATIONS_GUESTS',_JOMRES_ROOMALLOCATIONS_GUESTS);
		$output[]		=jr_gettext('_JOMRES_ROOMALLOCATIONS_INFORMATION',_JOMRES_ROOMALLOCATIONS_INFORMATION);

		$output[]		=jr_gettext('_JOMRES_MAX_GUESTS_PER_ROOM',_JOMRES_MAX_GUESTS_PER_ROOM);
		$output[]		=jr_gettext('_JOMRES_MAX_GUESTS_PER_BOOKING',_JOMRES_MAX_GUESTS_PER_BOOKING);
		$output[]		=jr_gettext('_JOMRES_NUMBER_OF_ROOMS',_JOMRES_NUMBER_OF_ROOMS);
		
		
		
		foreach ($output as $o)
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
		return $this->bookingObject;
		}
	}
?>