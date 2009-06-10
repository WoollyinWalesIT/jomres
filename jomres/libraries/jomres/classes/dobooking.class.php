<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

////////////////////////////////
//  bookerClasses. Largely unused, but classes have been set asside for future development
// 000 Unregistered visitor
// 001 Registered visitor
// 100 Unclassified manager
// 200 Receptionist, this property
// 300 Property manager, this property
// 400 Receptionist, any property
// 500 Property manager, any property
// 600 Agent this property
// 700 Agent any property
// 800 Agent selected propertys
// 900
////////////////////////////////

/**
#
 * This file is the main code block that manages the booking engine.
#
 *
#
 * It is not designed to be implemented or called directly. Instead it is called by the j05000bookingobject.class.php file which inherits from this file.
 #
* @package Jomres
#
 */
class jomres_booking
	{
	/**
	#
	 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table
	#
	 */
	function jomres_booking()
		{
		global $jrConfig;
		$this->jrConfig					= $jrConfig; // Importing the site config settings
		$this->requestedRoom 			= array();
		$this->rate_pernight			= 0.00;
		$this->total_in_party			= 0;
		$this->variancetypes			= array();
		$this->varianceuids				= array();
		$this->varianceqty				= array();
		$this->variancevals				= array();
		//$this->coupon_id				= "";
		//$this->coupon					= "";
		$this->lastminute_id			= "";
		$this->arrivalDate 				= "";
		$this->departureDate 			= "";
		$this->stayDays 				= 1;
		$this->dateRangeString 			= "";
		$this->guests_uid 				= "";
		$this->property_uid 			= "";
		$this->rates_uid 				= "";
		$this->tag 						= "";
		$this->resource 				= "";
		$this->rate_rules 				= 0.00;
		$this->single_person_suppliment = 0.00;
		$this->deposit_required 		= 0.00;
		$this->contract_total 			= 0.00;

		$this->extrasvalue 				= 0.00;
		$this->tax 						= 0.00;
		$this->extras 					= "";
		$this->total_discount			= 0.00;
		$this->depositpaidsuccessfully	= false;
		$this->booker_class				= '000';
		$this->ok_to_book				= false;
		$this->referrer					= "";
		$this->error_log				= "";
		$this->total_in_party			= 0;
		$this->mininterval				= 1;
		$this->unixArrivalDate			= null;
		$this->unixDepartureDate		= null;
		$this->beds_available = 0;
		$this->monitoringMessages		= array();
		$this->vt						= "";
		$this->vu						= "";
		$this->vq						= "";
		$this->vv						= "";
		$this->rr						= "";

		$this->existing_id		= "";
		$this->mos_userid		= 0;
		$this->firstname		= "";
		$this->surname			= "";
		$this->house			= "";
		$this->street			= "";
		$this->town				= "";
		$this->region			= "";
		$this->postcode			= "";
		$this->tel_landline		= "";
		$this->tel_mobile		= "";
		$this->email			= "";

		//$this->today					= date("Y/m/d");
		// Should be better at detecting today's date subject DST
		$this->today					= date("Y/m/d", mktime(0, 0, 0, date("m"), date("d"),   date("Y")));
		
		$this->error					= "";
		$this->error_code				= "";
		$this->billing_roomtotal		= 0.00;
		$this->customTextArray			= array();
		$this->resetPricingOutput		= false;
		$this->roomImageHTML			="";
		$this->allPropertyRooms			= array();
		$this->allPropertyRoomUids		= array();
		$this->allPropertyTariffs		= array();
		$this->allFeatureDetails		= array();
		$this->allFeatureIds			= array();
		$this->allRoomClasses			= array();
		$this->allRoomClassIds			= array();
		$this->allBookings				= array();
		$this->rebuildIgnoreList		= array();
		$this->currentField				="";
		$this->singlePersonSupplimentCalculated = false;

		$bookingDeets=$this->getTmpBookingData();

		$this->setErrorLog( "Queried db for existing booking" );
		if (count($bookingDeets) >0 )
			{
			$this->rr			 			= $bookingDeets['requestedRoom'];
			$this->rate_pernight 			= $bookingDeets['rate_pernight'];
			$this->vt						= $bookingDeets['variancetypes'];
			$this->vu						= $bookingDeets['varianceuids'];
			$this->vq						= $bookingDeets['varianceqty'];
			$this->vv						= $bookingDeets['variancevals'];
			//$this->coupon_id				= $bookingDeets['coupon_id'];
			//$this->coupon					= $bookingDeets['coupon'];
			$this->lastminute_id			= $bookingDeets['lastminute_id'];
			$this->arrivalDate 				= $bookingDeets['arrivalDate'];
			$this->departureDate 			= $bookingDeets['departureDate'];
			$this->stayDays 				= $bookingDeets['stayDays'];
			$this->dateRangeString 			= $bookingDeets['dateRangeString'];
			$this->guests_uid 				= $bookingDeets['guests_uid'];
			$this->property_uid 			= (int)$bookingDeets['property_uid'];
			$this->rates_uid 				= $bookingDeets['rates_uid'];
			$this->resource 				= $bookingDeets['resource'];
			$this->single_person_suppliment = $bookingDeets['single_person_suppliment'];
			$this->deposit_required 		= $bookingDeets['deposit_required'];
			$this->contract_total 			= $bookingDeets['contract_total'];
			$this->smoking 					= $bookingDeets['smoking'];
			$this->extrasvalue 				= $bookingDeets['extrasvalue'];
			$this->tax 						= $bookingDeets['tax'];
			$this->extras 					= $bookingDeets['extras'];
			$this->extrasquantities			= $bookingDeets['extrasquantities'];
			$this->total_discount			= $bookingDeets['total_discount'];
			$this->depositpaidsuccessfully 	= $bookingDeets['depositpaidsuccessfully'];
			$this->booker_class				= $bookingDeets['booker_class'];
			$this->ok_to_book				= $bookingDeets['ok_to_book'];
			$this->beds_available			= $bookingDeets['beds_available'];
			$this->referrer				 	= $bookingDeets['referrer'];
			$this->error					= $bookingDeets['error_log'];
			$this->room_total				= $bookingDeets['room_total'];
			$this->total_in_party			= $bookingDeets['total_in_party'];
			//if ($this->booker_class == "100")
			//	$this->mininterval				= 1;
			//else
				$this->mininterval				= $bookingDeets['mininterval'];
			if ($this->mininterval == 0)
				$this->mininterval = 1;
			$this->amend_contract			= $bookingDeets['amend_contract'];
			$this->coupon_id				= $bookingDeets['coupon_id'];
			$this->coupon_code				= $bookingDeets['coupon_code'];
			$this->coupon_details			= $bookingDeets['coupon_details'];
			$this->coupon_discount_value	= $bookingDeets['coupon_discount_value'];
			$this->booking_notes			= $bookingDeets['booking_notes'];
			}

		$dbdata=serialize($bookingDeets);
		$dbdata=str_replace(";"," ",$dbdata);
		$this->setErrorLog("<font color='grey'>Constructor::Data pulled from Session variables  ".$dbdata."</font>" );

		if (!empty($this->rr) )
			$this->requestedRoom=explode(",",$this->rr);
		$this->variancetypes=explode(",",$this->vt);
		$this->varianceuids=explode(",",$this->vu);
		$this->varianceqty=explode(",",$this->vq);
		$this->variancevals=explode(",",$this->vv);

		$userDeets=$this->getTmpGuestData();

		//$this->errorLog( "Set booking variables " );
		$this->mos_userid 			= $userDeets['mos_userid'];
		$this->existing_id 			= $userDeets['existing_id'];
		$this->firstname 			= $userDeets['firstname'];
		$this->surname 				= $userDeets['surname'];
		$this->house				= $userDeets['house'];
		$this->street 				= $userDeets['street'];
		$this->town					= $userDeets['town'];
		$this->region				= $userDeets['region'];
		$this->country				= $userDeets['country'];
		$this->postcode 			= $userDeets['postcode'];
		$this->tel_landline		 	= $userDeets['tel_landline'];
		$this->tel_mobile 			= $userDeets['tel_mobile'];
		$this->email			 	= $userDeets['email'];

		$mrConfig=getPropertySpecificSettings($this->property_uid);

		if (isset($mrConfig['margin']) && !empty($mrConfig['margin']) )
			$this->margin			 						= $mrConfig['margin'];
		else
			$this->margin="0.00";
		$this->tariffModel		 							= $mrConfig['newTariffModels'];
		if ($this->tariffModel != "1" && $this->tariffModel != "2")
			$this->tariffModel = "1";
		if (!isset($mrConfig['cal_input']) )
			{
			echo "Error: Configuration settings don't appear to be set. There are ".count($mrConfig)." elements in the mrConfig var and ".count($jrConfig)." in the jrConfig var";
			exit;
			}
		$this->cfg_errorChecking 							= $mrConfig['errorChecking'];
		$this->cfg_singlePersonSuppliment 					= $mrConfig['singlePersonSuppliment'];
		$this->cfg_supplimentChargeIsPercentage				= $mrConfig['supplimentChargeIsPercentage'];
		$this->cfg_singlePersonSupplimentCost 				= $mrConfig['singlePersonSupplimentCost'];
		$this->cfg_perPersonPerNight 						= $mrConfig['perPersonPerNight'];
		$this->cfg_depositIsPercentage 						= $mrConfig['depositIsPercentage'];
		$this->cfg_depositValue 							= $mrConfig['depositValue'];
		$this->cfg_visitorscanbookonline 					= $mrConfig['visitorscanbookonline'];
		$this->cfg_fixedPeriodBookings 						= $mrConfig['fixedPeriodBookings'];
		$this->cfg_fixedPeriodBookingsNumberOfDays 			= $mrConfig['fixedPeriodBookingsNumberOfDays'];
		$this->cfg_numberofFixedPeriods 					= $mrConfig['numberofFixedPeriods'];
		$this->cfg_fixedArrivalDateYesNo 					= $mrConfig['fixedArrivalDateYesNo'];
		$this->cfg_fixedArrivalDay 							= $mrConfig['fixedArrivalDay'];
		$this->cfg_fixedPeriodBookingsShortYesNo 			= $mrConfig['fixedPeriodBookingsShortYesNo'];
		$this->cfg_fixedPeriodBookingsShortNumberOfDays 	= $mrConfig['fixedPeriodBookingsShortNumberOfDays'];
		$this->cfg_singleRoomProperty						= $mrConfig['singleRoomProperty'];
		$this->cfg_cal_output 								= $mrConfig['cal_output'];
		// Part of frontend jscal configuration switch off for v3.2
		//$this->cfg_cal_input 								= $mrConfig['cal_input'];
		$this->cfg_cal_input 								= $jrConfig['cal_input'];
		$this->cfg_showExtras 								= $mrConfig['showExtras'];
		$this->cfg_defaultSmokingOption 					= $mrConfig['defaultSmokingOption'];
		$this->cfg_currency 								= $mrConfig['currency'];
		$this->cfg_currencyCode 							= $mrConfig['currencyCode'];
		$this->cfg_templatePack 							= "basic";
		$this->cfg_showSmoking 								= $mrConfig['showSmoking'];
		$this->cfg_limitAdvanceBookingsYesNo 				= $mrConfig['limitAdvanceBookingsYesNo'];
		$this->cfg_advanceBookingsLimit 					= $mrConfig['advanceBookingsLimit'];
		$this->cfg_roomTaxYesNo 							= $mrConfig['roomTaxYesNo'];
		$this->cfg_roomTaxFixed 							= $mrConfig['roomTaxFixed'];
		$this->cfg_roomTaxPercentage 						= $mrConfig['roomTaxPercentage'];
		$this->cfg_euroTaxYesNo 							= $mrConfig['euroTaxYesNo'];
		$this->cfg_euroTaxPercentage 						= $mrConfig['euroTaxPercentage'];
		$this->cfg_depAmount 								= $mrConfig['depAmount'];
		$this->cfg_useOnlinepayment 						= $mrConfig['useOnlinepayment'];
		$this->cfg_popupsAllowed 							= $mrConfig['popupsAllowed'];
		$this->cfg_showdepartureinput 						= $mrConfig['showdepartureinput'];
		$this->cfg_ratemultiplier 							= $mrConfig['ratemultiplier'];
		$this->cfg_dateFormatStyle 							= $mrConfig['dateFormatStyle'];
		//$this->cfg_inputBoxErrorBorder 						= $mrConfig['inputBoxErrorBorder'];
		$this->cfg_inputBoxErrorBackground 					= $mrConfig['inputBoxErrorBackground'];
		$this->cfg_defaultcountry 							= $mrConfig['defaultcountry'];
		//if ($this->booker_class == "100")
		//	$this->cfg_minimuminterval						= 1;
		//else
			$this->cfg_minimuminterval						= $mrConfig['minimuminterval'];
		$this->cfg_showDeposit								= $mrConfig['chargeDepositYesNo'];
		$this->cfg_showRoomImageInBookingFormOverlib		= $mrConfig['showRoomImageInBookingFormOverlib'];
		$this->cfg_showRoomTypeImageInBookingForm			= $mrConfig['showRoomTypeImageInBookingForm'];

		if ($this->booker_class == "100")
			$this->cfg_mindaysbeforearrival					= 0;
		else
			$this->cfg_mindaysbeforearrival					= $mrConfig['mindaysbeforearrival'];

		$this->cfg_defaultNumberOfFirstGuesttype			= $mrConfig['defaultNumberOfFirstGuesttype'];
		$this->cfg_roundupDepositYesNo						= $mrConfig['roundupDepositYesNo'];
		$this->cfg_chargeDepositYesNo						= $mrConfig['chargeDepositYesNo'];
		$this->cfg_tariffChargesStoredWeeklyYesNo			= $mrConfig['tariffChargesStoredWeeklyYesNo'];
		$this->cfg_fixedArrivalDatesRecurring				= $mrConfig['fixedArrivalDatesRecurring'];
		$this->cfg_returnRoomsLimit							= $mrConfig['returnRoomsLimit'];
		if (!isset($mrConfig['cfg_weekenddays']))
			$mrConfig['cfg_weekenddays']					= "5,6";
		$this->cfg_weekenddays								= explode(",",$mrConfig['weekenddays']);
		$this->cfg_bookingform_roomlist_showroomno 			= $mrConfig['bookingform_roomlist_showroomno'];
		$this->cfg_bookingform_roomlist_showroomname 		= $mrConfig['bookingform_roomlist_showroomname'];
		
		$this->cfg_bookingform_roomlist_showdisabled 		= $mrConfig['bookingform_roomlist_showdisabled'];
		$this->cfg_bookingform_roomlist_showmaxpeople 		= $mrConfig['bookingform_roomlist_showmaxpeople'];
		
		//$this->cfg_bookingform_roomlist_showtarifftitle 	= $mrConfig['bookingform_roomlist_showtarifftitle'];

		// $this->cfg_bookingform_overlib_tariff_title_show 	= $mrConfig['bookingform_overlib_tariff_title_show'];
		// $this->cfg_bookingform_overlib_tariff_desc_show 	= $mrConfig['bookingform_overlib_tariff_desc_show'];
		// $this->cfg_bookingform_overlib_tariff_rate_show 	= $mrConfig['bookingform_overlib_tariff_rate_show'];
		// $this->cfg_bookingform_overlib_tariff_starts_show	= $mrConfig['bookingform_overlib_tariff_starts_show'];
		// $this->cfg_bookingform_overlib_tariff_ends_show 	= $mrConfig['bookingform_overlib_tariff_ends_show'];
		// $this->cfg_bookingform_overlib_tariff_mindays_show	= $mrConfig['bookingform_overlib_tariff_mindays_show'];
		// $this->cfg_bookingform_overlib_tariff_maxdays_show	= $mrConfig['bookingform_overlib_tariff_maxdays_show'];
		// $this->cfg_bookingform_overlib_tariff_minpeeps_show	= $mrConfig['bookingform_overlib_tariff_minpeeps_show'];
		// $this->cfg_bookingform_overlib_tariff_maxpeeps_show	= $mrConfig['bookingform_overlib_tariff_maxpeeps_show'];
		// $this->cfg_bookingform_overlib_room_number_show 	= $mrConfig['bookingform_overlib_room_number_show'];
		// $this->cfg_bookingform_overlib_room_name_show 		= $mrConfig['bookingform_overlib_room_name_show'];
		// $this->cfg_bookingform_overlib_room_type_show 		= $mrConfig['bookingform_overlib_room_type_show'];
		// $this->cfg_bookingform_overlib_room_smoking_show 	= $mrConfig['bookingform_overlib_room_smoking_show'];
		// $this->cfg_bookingform_overlib_room_disabledaccess_show = $mrConfig['bookingform_overlib_room_disabledaccess_show'];
		// $this->cfg_bookingform_overlib_room_floor_show 		= $mrConfig['bookingform_overlib_room_floor_show'];
		// $this->cfg_bookingform_overlib_room_maxpeople_show 	= $mrConfig['bookingform_overlib_room_maxpeople_show'];
		// $this->cfg_bookingform_overlib_room_features_show 	= $mrConfig['bookingform_overlib_room_features_show'];

		$this->cfg_bookingform_requiredfields_name			= $mrConfig['bookingform_requiredfields_name'];
		$this->cfg_bookingform_requiredfields_surname		= $mrConfig['bookingform_requiredfields_surname'];
		$this->cfg_bookingform_requiredfields_houseno		= $mrConfig['bookingform_requiredfields_houseno'];
		$this->cfg_bookingform_requiredfields_street		= $mrConfig['bookingform_requiredfields_street'];
		$this->cfg_bookingform_requiredfields_town 			= $mrConfig['bookingform_requiredfields_town'];
		$this->cfg_bookingform_requiredfields_postcode 		= $mrConfig['bookingform_requiredfields_postcode'];
		$this->cfg_bookingform_requiredfields_region 		= $mrConfig['bookingform_requiredfields_region'];
		$this->cfg_bookingform_requiredfields_country 		= $mrConfig['bookingform_requiredfields_country'];
		$this->cfg_bookingform_requiredfields_tel 			= $mrConfig['bookingform_requiredfields_tel'];
		$this->cfg_bookingform_requiredfields_mobile 		= $mrConfig['bookingform_requiredfields_mobile'];
		$this->cfg_bookingform_requiredfields_email 		= $mrConfig['bookingform_requiredfields_email'];

		if (is_null($this->smoking) || strlen($this->smoking) == 0)
			$this->smoking 					= $this->cfg_defaultSmokingOption;

		// Let's get the room, tariff, room type (class) and room feature information for this property

		$this->getAllRoomsData();
		$this->getAllTariffsData();
		$this->getAllRoomFeatureDetails();
		$this->getAllRoomClasses();
		$this->getAllBookings();

		return true;
		}


	/**
	#
	 *Queries the database for the temporary booking data
	#
	 */
	function getTmpBookingData()
		{
		global $tmpBookingHandler;
		$bookingDeets=$tmpBookingHandler->getBookingData();
		return $bookingDeets;
		}


	/**
	#
	 *Queries the database for the temporary booking data
	#
	 */
	function getTmpGuestData()
		{
		global $tmpBookingHandler;
		$userDeets=$tmpBookingHandler->getGuestData();
		return $userDeets;
		}



	/**
	#
	 * Save the details of the booking object
	#
	 */
	function storeBookingDetails()
		{
		global $tmpBookingHandler;
		$this->writeToLogfile("<font color='grey'>".serialize($tmpBookingHandler->tmpguest)."</font>");

		$tmpBookingHandler->tmpguest["mos_userid"]		=$this->mos_userid;
		$tmpBookingHandler->tmpguest["existing_id"]		=quote_smart($this->existing_id);
		$tmpBookingHandler->tmpguest["firstname"]		=quote_smart($this->firstname);
		$tmpBookingHandler->tmpguest["surname"]			=quote_smart($this->surname);
		$tmpBookingHandler->tmpguest["house"]			=quote_smart($this->house);
		$tmpBookingHandler->tmpguest["street"]			=quote_smart($this->street);
		$tmpBookingHandler->tmpguest["town"]			=quote_smart($this->town);
		$tmpBookingHandler->tmpguest["region"]			=quote_smart($this->region);
		$tmpBookingHandler->tmpguest["country"]			=quote_smart($this->country);
		$tmpBookingHandler->tmpguest["postcode"]		=quote_smart($this->postcode);
		$tmpBookingHandler->tmpguest["tel_landline"]	=quote_smart($this->tel_landline);
		$tmpBookingHandler->tmpguest["tel_mobile"]		=quote_smart($this->tel_mobile);
		$tmpBookingHandler->tmpguest["email"]			=quote_smart($this->email);
		$tmpBookingHandler->saveGuestData();

		$rr=implode(",",$this->requestedRoom);
		$this->implodeVariances();

		$this->writeToLogfile($this->error);
		$this->error ="";

		$tmpBookingHandler->tmpbooking["requestedRoom"]					= $rr;
		$tmpBookingHandler->tmpbooking["rate_pernight"]					= $this->rate_pernight;
		$tmpBookingHandler->tmpbooking["variancetypes"]					= $this->vt;
		$tmpBookingHandler->tmpbooking["varianceuids"]					= $this->vu;
		$tmpBookingHandler->tmpbooking["varianceqty"]					= $this->vq;
		$tmpBookingHandler->tmpbooking["variancevals"]					= $this->vv;
		//$tmpBookingHandler->tmpbooking["coupon_id"]						= $this->coupon_id;
		//$tmpBookingHandler->tmpbooking["coupon"] 						= $this->coupon;
		$tmpBookingHandler->tmpbooking["lastminute_id"] 				= $this->lastminute_id;
		$tmpBookingHandler->tmpbooking["arrivalDate"] 					= $this->arrivalDate;
		$tmpBookingHandler->tmpbooking["departureDate"]					= $this->departureDate;
		$tmpBookingHandler->tmpbooking["stayDays"]						= $this->stayDays;
		$tmpBookingHandler->tmpbooking["dateRangeString"] 				= $this->dateRangeString;
		$tmpBookingHandler->tmpbooking["guests_uid"]					= $this->guests_uid;
		$tmpBookingHandler->tmpbooking["property_uid"]					= $this->property_uid;
		$tmpBookingHandler->tmpbooking["rates_uid"]						= $this->rates_uid;
		$tmpBookingHandler->tmpbooking["resource"] 						= $this->resource;
		$tmpBookingHandler->tmpbooking["single_person_suppliment"]		= $this->single_person_suppliment;
		$tmpBookingHandler->tmpbooking["deposit_required"]				= $this->deposit_required;
		$tmpBookingHandler->tmpbooking["contract_total"] 				= $this->contract_total;
		$tmpBookingHandler->tmpbooking["smoking"]						= $this->smoking;
		$tmpBookingHandler->tmpbooking["extrasvalue"]					= $this->extrasvalue;
		$tmpBookingHandler->tmpbooking["extras"]						= $this->extras;
		$tmpBookingHandler->tmpbooking["extrasquantities"]				= $this->extrasquantities;
		$tmpBookingHandler->tmpbooking["total_discount"] 				= $this->total_discount;
		$tmpBookingHandler->tmpbooking["depositpaidsuccessfully"] 		= $this->depositpaidsuccessfully;
		$tmpBookingHandler->tmpbooking["tax"]							= $this->tax;
		$tmpBookingHandler->tmpbooking["booker_class"]					= $this->booker_class;
		$tmpBookingHandler->tmpbooking["ok_to_book"]					= $this->ok_to_book;
		$tmpBookingHandler->tmpbooking["beds_available"]				= $this->beds_available;
		$tmpBookingHandler->tmpbooking["referrer"] 						= $this->referrer;
		$tmpBookingHandler->tmpbooking["error_log"]						= $this->error;
		$tmpBookingHandler->tmpbooking["total_in_party"]				= $this->total_in_party;
		$tmpBookingHandler->tmpbooking["room_total"] 					= $this->room_total;
		$tmpBookingHandler->tmpbooking["timestamp"]						= date("Y-m-d H:i:s");
		$tmpBookingHandler->tmpbooking["mininterval"]					= $this->mininterval;
		$tmpBookingHandler->tmpbooking["coupon_id"]						= $this->coupon_id;
		$tmpBookingHandler->tmpbooking["coupon_code"]					= $this->coupon_code;
		$tmpBookingHandler->tmpbooking["coupon_details"]				= $this->coupon_details;
		$tmpBookingHandler->tmpbooking["coupon_discount_value"]			= $this->coupon_discount_value;
		$tmpBookingHandler->tmpbooking["booking_notes"]					= $this->booking_notes;

		$tmpBookingHandler->saveBookingData();
		}

	function getAllRoomsData()
		{
		$tmpFeatures="";
		$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking,singleperson_suppliment  FROM #__jomres_rooms WHERE  propertys_uid = '$this->property_uid'";
		$rooms=doSelectSql($query);
		foreach ($rooms as $r)
			{
			$this->allPropertyRooms[$r->room_uid]= array('room_uid'=>$r->room_uid,'room_classes_uid'=>$r->room_classes_uid,'propertys_uid'=>$r->propertys_uid,'room_features_uid'=>$r->room_features_uid,'room_name'=>$r->room_name,'room_number'=>$r->room_number,'room_floor'=>$r->room_floor,'room_disabled_access'=>$r->room_disabled_access,'max_people'=>$r->max_people,'smoking'=>$r->smoking,'singleperson_suppliment'=>$r->singleperson_suppliment);
			$this->allPropertyRoomUids[]=$r->room_uid;
			if (strlen($r->room_features_uid)>0)
				{
				if (strlen($tmpFeatures)==0)
					$tmpFeatures=$r->room_features_uid;
				else
					$tmpFeatures=$tmpFeatures.",".$r->room_features_uid;
				}
			if (!in_array($r->room_classes_uid,$this->allRoomClassIds) )
				$this->allRoomClassIds[]=$r->room_classes_uid;
			}
		$featuresArray=explode(",",$tmpFeatures);
		/*
		if (count($featuresArray)>1)
			$this->allFeatureIds=array_unique($featuresArray);
		else
			$this->allFeatureIds=$featuresArray;
		*/

		//if (count($featuresArray)>0)
		//	{
			foreach ($featuresArray as $f)
				$this->allFeatureIds[] = (int)$f;
		//	}
		}

	function getAllTariffsData()
		{
		//$arrival_ts=str_replace("/","-",$this->arrivalDate);
		$arrivalDate_ts  = str_replace("/","-",$this->arrivalDate);
		$departureDate_ts = str_replace("/","-",$this->departureDate);
		
		// Commented this out as initialising the arrival dates doesn't work and validfrom_ts and validto_ts aren't initially set. Means the booking form opens to an invalid date message, even if it's valid, and consequentially the rooms list isn't populated right off the bat.
		/*
		$query="SELECT `rates_uid`,`rate_title`,`rate_description`,`validfrom`,`validto`,
			`roomrateperday`,`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
			`ignore_pppn`,`allow_ph`,`allow_we`,`weekendonly`,`dayofweek`,`minrooms_alreadyselected`,`maxrooms_alreadyselected`
			FROM #__jomres_rates WHERE property_uid = '$this->property_uid'
			AND `validfrom_ts`<='$departureDate_ts' 
			AND `validto_ts`>='$arrivalDate_ts'";
		*/
		$query="SELECT `rates_uid`,`rate_title`,`rate_description`,`validfrom`,`validto`,
			`roomrateperday`,`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
			`ignore_pppn`,`allow_ph`,`allow_we`,`weekendonly`,`dayofweek`,`minrooms_alreadyselected`,`maxrooms_alreadyselected`
			FROM #__jomres_rates WHERE property_uid = '$this->property_uid'
			";
		//$this->setErrorLog("getAllTariffsData:: ".$query );
		$tariffs =doSelectSql($query);
		//$this->setErrorLog("Finding tariffs");
		//$this->setErrorLog($query);
		//$this->setErrorLog(serialize($tariffs) );
		foreach ($tariffs as $t)
			{
			$this->allPropertyTariffs[$t->rates_uid] = array('rates_uid'=>$t->rates_uid,'rate_title'=>$t->rate_title,'rate_description'=>$t->rate_description,'validfrom'=>$t->validfrom,'validto'=>$t->validto,
			'roomrateperday'=>$t->roomrateperday,'mindays'=>$t->mindays,'maxdays'=>$t->maxdays,'minpeople'=>$t->minpeople,'maxpeople'=>$t->maxpeople,'roomclass_uid'=>$t->roomclass_uid,
			'ignore_pppn'=>$t->ignore_pppn,'allow_ph'=>$t->allow_ph,'allow_we'=>$t->allow_we,'weekendonly'=>$t->weekendonly,'dayofweek'=>$t->dayofweek,'minrooms_alreadyselected'=>$t->minrooms_alreadyselected,'maxrooms_alreadyselected'=>$t->maxrooms_alreadyselected);
			}
		}

	function getAllRoomFeatureDetails()
		{
		$gor=genericOr($this->allFeatureIds,'room_features_uid');
		$query = "SELECT room_features_uid,feature_description FROM #__jomres_room_features  WHERE $gor";
		$roomFeats =doSelectSql($query);
		foreach ($roomFeats as $c)
			{
			$fd=jr_gettext(_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION.$c->room_features_uid,$c->feature_description,false,false);
			$this->allFeatureDetails[$c->room_features_uid]=array('room_features_uid'=>$c->room_features_uid,'feature_description'=>$fd);
			}
		}

	function getAllRoomClasses()
		{
		$gor=genericOr($this->allRoomClassIds,'room_classes_uid');
		$query = "SELECT room_classes_uid,room_class_abbv,image FROM #__jomres_room_classes WHERE $gor";
		$roomClasses =doSelectSql($query);
		foreach ($roomClasses as $c)
			{
			$roomtype_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$c->room_classes_uid,		stripslashes($c->room_class_abbv),false,false);
			$roomtype_desc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$c->room_classes_uid,		stripslashes($c->room_class_full_desc),false,false);

			$this->allRoomClasses[$c->room_classes_uid]=array('room_class_abbv'=>$roomtype_abbv,'room_class_full_desc'=>$roomtype_desc,'image'=>$c->image);
			}
		}

	/*
	function getAllBookings()
		{
		$gor=genericOr($this->allPropertyRoomUids,'room_uid');
		$query = "SELECT room_uid,date FROM #__jomres_room_bookings WHERE property_uid = '$this->property_uid' AND $gor ";
		$bookings =doSelectSql($query);
		foreach ($bookings as $c)
			{
			//$date=str_replace("/","",$c->date);
			$this->allBookings[$c->date][$c->room_uid]=array('room_uid'=>$c->room_uid);
			}
		if (count($this->allBookings) >0)
			ksort($this->allBookings);
		}
	*/

	function getAllBookings()
		{
		global $tmpBookingHandler;
		$amend_contract  = $tmpBookingHandler->getBookingFieldVal("amend_contract");
		$amend_contractuid  = $tmpBookingHandler->getBookingFieldVal("amend_contractuid");
		$gor=genericOr($this->allPropertyRoomUids,'room_uid');
		if (!$amend_contract)
			$query = "SELECT room_uid,date FROM #__jomres_room_bookings WHERE property_uid = '$this->property_uid' AND $gor ";
		else
			$query = "SELECT room_uid,date FROM #__jomres_room_bookings WHERE property_uid = '$this->property_uid' AND contract_uid != '$amend_contractuid' AND $gor ";
		$bookings =doSelectSql($query);
		foreach ($bookings as $c)
			{
			//$date=str_replace("/","",$c->date);
			$this->allBookings[$c->date][$c->room_uid]=array('room_uid'=>$c->room_uid);
			}
		if (count($this->allBookings) >0)
			ksort($this->allBookings);
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Generic variant handling
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/**
	#
	 *Sanitises the input from the ajax query
	#
	 */
	function sanitiseInput($type,$value)
		{
		switch ($type)
			{
			case "int":
				$value=(int)$value;
			break;
			case "string":
				$value=$this->makeStringSafe($value);
			break;
			case "date":
				$tmpDate=explode("/",$value);
				if (count($tmpDate) != 3)
					$value=null;
			break;
			default:
				$value=null;
			break;
			}
		return $value;
		}

	/**
	#
	 * Sanitises the output before it's sent to the form. As the third phase of the form is generated from evaluated javascript queries any ' characters etc have to be stripped out before they're returned to the booking form
	#
	 */
	function sanitiseOutput($data)
		{
		//$this->error($data);
		$data=str_replace("&#39;","\&#39;",$data);
		$data=str_replace("'","",$data);
		//$data=htmlentities($data);
		return $data;
		}

	/**
	#
	 * Make the string escaped
	#
	 */
	function makeStringSafe($data)
		{
		//global $database;
		if (defined('_JOMRES_NEWJOOMLA') )
			jimport('phpinputfilter.inputfilter');
		//$noHtmlFilter = new InputFilter( /* $tags, $attr, $tag_method, $attr_method, $xss_auto */ );
		//$data = $noHtmlFilter->process( $data );
		$data=getEscaped( $data );
		return $data;
		}

	/**
	#
	 * Resets the requested room array to nuthin. When the currently available rooms list is re-generated the available rooms list is completely re-calculated
	#
	 */
	function resetRequestedRoom()
		{
		$this->requestedRoom=array();
		}

	/**
	#
	 * Returns whether or not error checking flag is on or off
	#
	 */
	function errorChecking()
		{
		if ($this->cfg_errorChecking == "1")
			return true;
		else
			return false;
		}

	/**
	#
	 * Receives debugging messages and stores them in an array $this->error
	#
	 */
	function setErrorLog($errorText)
		{
		$this->error.=$errorText." <br/> ";
		//$this->writeToLogfile($errorText);
		}

	function setErrorLogFirst($title)
		{
		$this->error="<b>".$title."</b><br/>".$this->error;
		//$this->writeToLogfile($errorText);
		}

	/**
	#
	 * Returns the contents of $this->error
	#
	 */
	function getErrorLog()
		{
		$errorString="";
		$errorString.=htmlentities($this->error);
		return $this->error;
		}

	/**
	#
	 * Updates the debug log with a message
	#
	 */
	function errorLogDb($error)
		{
		global $database;
		$error= $database->getEscaped($error);
		$query = "INSERT INTO #__jomres_errorlog (`error`) VALUES ('$error')";
		$database->setQuery($query);
		$database->query();
		}

	function writeToLogfile($text)
		{
		if (LOGGINGBOOKING)
			{
			$logfile=JOMRES_SYSTEMLOG_PATH.'jomres_booking_log.xml';
			$log = "<![CDATA[".$text. "]]>";
			writexml($logfile,"bookinglog","bookinglogentry",$log);
			}
		}

	/**
	#
	 * Returns true if this property is an SRP
	#
	 */
	function getSingleRoomPropertyStatus()
		{
		if ($this->cfg_singleRoomProperty == "1")
			return true;
		else
			return false;
		}

	/**
	#
	 * Make the Optional Extras
	#
	 */
	function makeExtras($selectedProperty)
		{
		global $mrConfig,$jomresConfig_live_site;
		$extra_details=array();
		$currfmt = new jomres_currency_format();
		if ($mrConfig['showExtras']=="1")
			{
		 	$query="SELECT `uid`,`name`,`desc`,`maxquantity`,`price`,`chargabledaily`,`property_uid`,`published` FROM `#__jomres_extras` where property_uid = '$selectedProperty' AND published = '1' ORDER BY name";
			$exList =doSelectSql($query);
			foreach($exList as $ex)
				{
				$extra_deets['UID']=$ex->uid;
				$query="SELECT `force`,`model` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '$ex->uid'";
				$model=doSelectSql($query,2);
				switch ($model['model'])
					{
					case '1': // Per week
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK));
					break;
					case '2': // per days
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS));
					break;
					case '3': // per booking
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING));
					break;
					case '4': // per person per booking
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING));
					break;
					case '5': // per person per day
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY));
					break;
					case '6': // per person per week
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK));
					break;
					case '7': // per person per days min days
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS));
					break;
					case '8': // per days per room
						$model_text=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM));
					break;
					}
				$extra_deets['NAME']=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$ex->uid, htmlspecialchars(trim(stripslashes($ex->name)), ENT_QUOTES) ));
				$extra_deets['PRICE']=$mrConfig['currency'].$currfmt->get_formatted($ex->price);
				if ($ex->chargabledaily=="1")
					$extra_deets['PERNIGHT']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_PERDAY',_JOMRES_COM_PERDAY,false,true));
				else
					$extra_deets['PERNIGHT']="";
				$extra_deets['DESCRIPTION']=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid, htmlspecialchars(trim(stripslashes($ex->desc)), ENT_QUOTES) ));
				$descriptionForOverlib=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid, htmlspecialchars(trim(stripslashes($ex->desc)), ENT_QUOTES),false,true);
				//$extra_deets['OVERLIB_DESCRIPTION']='<a href="javascript:void(0);" onmouseover="return overlib(\''.$extra_deets['PERNIGHT'].' '.$descriptionForOverlib.'\', WIDTH, 300, BELOW, CENTER );" onmouseout="return nd(0);"><img alt="" border="0" src="'.$jomresConfig_live_site.'/jomres/images/info.png" />';
				$extra_deets['OVERLIB_DESCRIPTION']=jomres_makeTooltip('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid,$extra_deets['PERNIGHT'],$descriptionForOverlib,$model_text." ".$descriptionForOverlib,$class="",$type="infoimage",array("width"=>20,"height"=>20) );
		
				$checked="";
				if ($this->extraAlreadySelected($ex->uid))
					{
					$checked=" checked ";
					$this->setExtras($ex->uid);
					$extraDefaultQuantity = $this->extrasquantities[$ex->uid];
					}
				else
					$extraDefaultQuantity = 1;
				$inputId=ereg_replace("[^A-Za-z0-9]", "", $ex->name);
				if (strlen($inputId)==0)
					$inputId=generateJomresRandomString(10);
				$firstChar=$inputId[0]; // We'll add a simple test here to change the first char to X if the first character's actually a number, otherwise the getResponse_extras will not work.
				if ( $firstChar == "0" || $firstChar == "1" ||$firstChar == "2" ||$firstChar == "3" ||$firstChar == "4" ||$firstChar == "5" ||$firstChar == "6" ||$firstChar == "7" ||$firstChar == "8" ||$firstChar == "9" )
					$inputId = "X".$inputId;

				$clickUnlock="";
				//  Doesn't  work.
				//if ($ex->maxquantity > 1)
				//	$clickUnlock='jQuery(\'#'."quantity".$ex->uid.'\').removeAttr(\'disabled\'); ';
				if ($model['force']!="1")
					$extra_deets['INPUTBOX']='<input id="'.$inputId.'" type="checkbox" name="extras['.$ex->uid.']" value="'.$ex->uid.'" '.$checked.' AUTOCOMPLETE="OFF"  onClick="'.$clickUnlock.'getResponse_extras(\'extras\',this.value,'.$ex->uid.');"; >';
		   		else
					{
					$this->forcedExtras[] =$ex->uid;
					$this->setExtras($ex->uid);
					$extra_deets['INPUTBOX']='<input id="'.stripslashes($ex->name).'" type="checkbox" checked disabled=" "; name="extras['.$ex->uid.']" value="'.$ex->uid.'" >';
					}
				if ($ex->maxquantity > 1)
					$extra_deets['INPUTBOX']=$extra_deets['INPUTBOX']."&nbsp;&nbsp;".jomresHTML::integerSelectList( 01, $ex->maxquantity, 1, "quantity".$ex->uid, 'size="1" class="inputbox"  AUTOCOMPLETE="OFF" onChange="getResponse_extrasquantity(\'extrasquantity\',this.value,'.$ex->uid.')";', $extraDefaultQuantity, "%02d" );

				$extra_deets['AJAXFORM_EXTRAS']		=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS',_JOMRES_AJAXFORM_EXTRAS));
				$extra_deets['AJAXFORM_EXTRAS_DESC']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS_DESC',_JOMRES_AJAXFORM_EXTRAS_DESC,false));
				$extra_deets['EXTRAS_TOTAL']=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_EXTRAS_TOTAL',_JOMRES_AJAXFORM_EXTRAS_TOTAL));

				$extra_details[]=$extra_deets;
				}
			}
		return $extra_details;
		}
		/**
		#
		 * Make the Output text, put them into an array for patTemplate and return the array
		#
		 */
		function makeOutputText()
			{
			global $mrConfig;
			$output=array();
			$output['HARRIVALDATE']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL) );
			if ($mrConfig['showdepartureinput']=="1")
				{
				if ($mrConfig['fixedPeriodBookings']=='1')
					$output['HDEPARTUREDATE']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_FIXEDPRIOD1',_JOMRES_FRONT_MR_FIXEDPRIOD1));
				else
					$output['HDEPARTUREDATE']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE));
				}
			else
				$output['HDEPARTUREDATE']="&nbsp;";
			if ($mrConfig['showSmoking']=="1")
				$output['HSMOKINGTITLE']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING));
			else
				$output['HSMOKINGTITLE']="";
			$output['BOOKINGHEADER']		=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRESDESC',_JOMRES_COM_MR_QUICKRESDESC));
			$output['ADDRESSHEADER']		=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS',_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS));
			$output['HEXTITLE']				=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP',_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP));

			$output['REQUIREDTEXT']			=$this->sanitiseOutput(jr_gettext('_JOMRES_JAVASCRIPT_',_JOMRES_JAVASCRIPT_));
			if ($mrConfig['tariffChargesStoredWeeklyYesNo']=="0")
				$output['BILLING_ROOM']			=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM',_JOMRES_AJAXFORM_BILLING_ROOM));
			$output['BILLING_ROOMTOTAL']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL));
			if ($mrConfig['showExtras']=="1")
				$output['BILLING_EXTRAS']		=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS));
			if ($mrConfig['roomTaxYesNo']=="1" || $mrConfig['euroTaxYesNo'] =="1" )
				$output['BILLING_TAX']			=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX',_JOMRES_AJAXFORM_BILLING_TAX));
			$output['BILLING_DISCOUNT']		=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT',_JOMRES_AJAXFORM_BILLING_DISCOUNT));
			$output['BILLING_TOTAL']		=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL));
			if ($mrConfig['chargeDepositYesNo']=="1")
				$output['DEPOSIT']				=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED));
			$output['CURRENCY_SYMBOL']		=$mrConfig['currency'];

			$output['BILLING_TOTALINPARTY']		=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY));
			$output['AJAXFORM_PARTICULARS']		=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_PARTICULARS',_JOMRES_AJAXFORM_PARTICULARS));
			$output['AJAXFORM_PARTICULARS_DESC']=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_PARTICULARS_DESC',_JOMRES_AJAXFORM_PARTICULARS_DESC,false));

			$output['AJAXFORM_AVAILABLE']		=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLE',_JOMRES_AJAXFORM_AVAILABLE));

			$output['AJAXFORM_ADDRESS']			=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ADDRESS',_JOMRES_AJAXFORM_ADDRESS));
			$output['AJAXFORM_ADDRESS_DESC']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ADDRESS_DESC',_JOMRES_AJAXFORM_ADDRESS_DESC,false));

			$output['AJAXFORM_AVAILABLEROOMS']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS',_JOMRES_AJAXFORM_AVAILABLEROOMS));
			$output['AJAXFORM_SELECTEDROOMS']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS',_JOMRES_AJAXFORM_SELECTEDROOMS,false));

			if ($mrConfig['singleRoomProperty'] == "0" )
				{
				$output['AJAXFORM_AVAILABLEROOMS']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLEROOMS',_JOMRES_AJAXFORM_AVAILABLEROOMS));
				$output['AJAXFORM_SELECTEDROOMS']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_SELECTEDROOMS',_JOMRES_AJAXFORM_SELECTEDROOMS,false));
				$output['AJAXFORM_AVAILABLE_DESC']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLE_DESC',_JOMRES_AJAXFORM_AVAILABLE_DESC,false));
				$output['AJAXFORM_INSTRUCTIONS']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_INSTRUCTIONS',_JOMRES_AJAXFORM_INSTRUCTIONS));
				}
			else
				{
				$output['AJAXFORM_AVAILABLEROOMS']	="";
				$output['AJAXFORM_SELECTEDROOMS']	="";
				$output['AJAXFORM_AVAILABLE_DESC']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP',_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP,false));
				$output['AJAXFORM_INSTRUCTIONS']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP',_JOMRES_AJAXFORM_INSTRUCTIONS_SRP));
				}

			//V3.1 booking form changes
			$output['ACCOMMODATION_TOTAL']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL));
			$output['ACCOMMODATION_NIGHTS']	=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS));
			if ($mrConfig['perPersonPerNight'] == "0" )
				$output['ACCOMMODATION_PERROOM']=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM));
			else
				$output['ACCOMMODATION_PERROOM']=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON));
			$output['PRICE_SUMMARY']=$this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_PRICE_SUMMARY',_JOMRES_AJAXFORM_PRICE_SUMMARY));

			$output['ERRORBACKGROUNDCOLOUR']	=$mrConfig['inputBoxErrorBackground'];
			$output['INPUTOKTOBOOK_BACKGROUND']	=$mrConfig['inputBoxOktobookBackground'];

			$output['STAYDAYS']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS));
			$output['SUBMIT']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_MR_REVIEWBOOKING',_JOMRES_FRONT_MR_REVIEWBOOKING,false,false));
			$output['LOOKRIGHT']=$this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_LOOKRIGHT',_JOMRES_BOOKINGFORM_LOOKRIGHT,false,false));
			$output['SINGLE_PERSON_SUPPLIMENT']			=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST));
			

			$output['ESTIMATEWARNING']=$this->sanitiseOutput(jr_gettext('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING));

			return $output;
			}
	/**
	#
	 * Returns the currency symbol for the property
	#
	 */
	function getCurrencySymbol()
		{
		return $this->cfg_currency;
		}

	/**
	#
	 * Implodes the variances ready for storing in the database
	#
	 */
	function implodeVariances()
		{
		/*
		if (
			count($this->variancetypes) != count($this->varianceuids) ||
			count($this->variancetypes) != count($this->varianceqty) ||
			count($this->variancetypes) != count($this->variancevals)
			)
			return false;
		*/
		$this->vt	= implode(",", $this->variancetypes);
		$this->vu	= implode(",", $this->varianceuids);
		$this->vq	= implode(",", $this->varianceqty);
		$this->vv	= implode(",", $this->variancevals);
		return true;
		}

	/**
	#
	 * Generic variant handling. Sets the variant to the specified values.
	#
	 */
	function setVariant($type="",$id="",$qty=0,$val=0.00)
		{
		if ( empty($type) || empty($id) )
			return false;
		$found=false;
		for ($i=0;$i<count($this->variancetypes);$i++)
			{
			if ($this->variancetypes[$i]==$type && $this->varianceuids[$i]== $id )
				{
				//$this->setErrorLog("Setting variant with qty ".$qty." and value ".$val );
				$found=true;
				$this->varianceqty[$i]=$qty;
				$this->variancevals[$i]=$val;
				}
			}
		if (!$found)
			{
			$this->variancetypes[]=$type;
			$this->varianceuids[]=$id;
			$this->varianceqty[]=$qty;
			$this->variancevals[]=$val;
			}
		return true;
		}

	/**
	#
	 * Generic variant handling. Returns the variant quantity and value given the variant type and it's id
	#
	 */
	function getVariant($type="",$id="")
		{
		if ( empty($type) || empty($id) )
			return false;
		for ($i=0;$i<count($this->variancetypes);$i++)
			{
			if ($this->variancetypes[$i]==$type && $this->varianceuids[$i]== $id )
				{
				$qty=$this->varianceqty[$i];
				$val=$this->variancevals[$i];
				return array('quantity'=>$qty,'value'=>$val);
				}
			}
		return false;
		}

	/**
	#
	 * Generic variant handling. Return all variants of a given type
	#
	 */
	function getVariantsOfType($type="")
		{
		$tmpArray=array();
		if ( !isset($type) || empty($type) )
			return false;
		//$this->setErrorLog("There are : ".count($this->variancetypes)." examples of variant type ".$type." in the object." );
		//$this->setErrorLog("Variable variancetypes is : ".gettype($this->variancetypes) );
		for ($i=0;$i<count($this->variancetypes);$i++)
			{
			if ($this->variancetypes[$i]==$type )
				{
				$id=$this->varianceuids[$i];
				$qty=$this->varianceqty[$i];
				$val=$this->variancevals[$i];
				$tmpArray[]= array('id'=>$id,'qty'=>$qty,'val'=>$val);
				}
			}
		return $tmpArray;
		}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Coupons
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	/**
	#
	* Coupons initialise the coupon variables
	#
	*/
	function initCoupons()
		{
		$this->use_coupons = false;
		$query="SELECT `coupon_id` FROM #__jomres_coupons WHERE property_uid = $this->property_uid";
		$result = doSelectSql($query);
		if (count($result)>0)
			{
			$this->setErrorLog("initCoupons:: Found ".count($result)." coupons for property uid ".$this->property_uid.". Enabling coupon output");
			$this->use_coupons = true;
			}
		else
			$this->setErrorLog("initCoupons:: No coupons found for ".$this->property_uid." property ");
		$this->coupon_id = "";
		$this->coupon_code = "";
		$this->coupon_details = array();
		$this->coupon_discount_value = "";
		$this->addBookingNote("Coupon","");
		}
	/**
	#
	* Coupons saveCoupon and return a success/failure message
	#
	*/
	function saveCoupon($coupon_code)
		{
		$today = date("Y-m-d");
		$query="SELECT `coupon_id`,`amount`,`is_percentage`,`rooms_only` FROM #__jomres_coupons WHERE coupon_code = '$coupon_code' AND property_uid = $this->property_uid AND `valid_from` <= '$today' AND `valid_to` >= '$today'";
		$response = doSelectSql($query,2);
		if ($response)
			{
			$this->coupon_id = $response['coupon_id'];
			$this->coupon_code = $coupon_code;
			$this->coupon_details = array('amount'=>$response['amount'],'is_percentage'=>$response['is_percentage'],'coupon_id'=>$response['coupon_id']);
			return $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', _JOMRES_AJAXFORM_COUPON_COUPONSAVED));
			}
		else
			{
			$this->coupon_id = 0;
			$this->coupon_code = "";
			$this->coupon_details = array();
			$this->coupon_discount_value = "";
			return $this->sanitiseOutput(jr_gettext('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', _JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND));
			}
		}
	
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Guest type variants
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Guest type variants:  return the total number of guest type variants
	#
	 */
	function getGuestVariantCount()
		{
		$result=$this->getVariantsOfType('guesttype');
		return count($result);
		}

	/**
	#
	 * Guest type variants:  return the details of a given guest type when passed it's id
	#
	 */
	function getGuestVariantDetails($id)
		{
		$result=$this->getVariant('guesttype',$id);
		if ($result)
			return $result;
		else
			return false;
		}

	/**
	#
	 * Guest type variants: Sets a guest type variant based on the id and quantity passed
	#
	 */
	function setGuestVariantDetails($id,$qty)
		{
		$result=$this->setVariant('guesttype',$id,$qty,0.00);
		if ( $result )
			return true;
		else
			return false;
		}

	/**
	#
	 * Guest type variants: Initialises a guest type variant based on the id and quantity passed
	#
	 */
	function initGuestVariant($id,$qty)
		{
		$result=$this->setVariant('guesttype',$id,$qty,0.00);
		if ( $result )
			return true;
		else
			return false;
		}

	/**
	#
	 * Guest type variants: Checks a guest type variant
	 * Will fail if id is not set
	 * Will fail if the id doesn't tally with the ids for this property
	 * Will fail if the quantity is greater than the maximum quantity allowed for that variant
	#
	 */
	function checkGuestVariantIdAndQty($id,$qty)
		{
		if (!isset($id) || empty($id)  )
			{
			$this->setErrorLog("Variant id not valid.");
			return false;
			}
		$query="SELECT maximum FROM #__jomres_customertypes WHERE property_uid = '$this->property_uid' AND id = '$id' ";
		$result=doSelectSql($query,1);
		//$this->setErrorLog("Variant maximum found =".$result);
		if (!$result)
			{
			$this->setErrorLog("checkGuestVariantIdAndQty::Variant id could not be reconciled with property uid");
			return false;
			}
		if ($qty>$result)
			{
			$this->setErrorLog("checkGuestVariantIdAndQty::Variant quantity sent greater than quantity allowed");
			return false;
			}
		return true;
		}

	/**
	#
	 * Make the customer type dropdowns
	#
	 */
	function makeCustomerTypes($selectedProperty)
		{
		global $mrConfig;
		$cust=array();
		$query="SELECT `id`,`type`,`maximum` FROM `#__jomres_customertypes` where property_uid = '$selectedProperty' AND published = '1' ORDER BY `order`";
		$exList =doSelectSql($query);
		foreach ($exList as $ct)
			{
			$customerTypes=array();
			$customerTypes['ID']=$ct->id;
			$customerTypes['TEXT']=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$ct->id, htmlspecialchars(trim(stripslashes($ct->type)), ENT_QUOTES) ));
			$current=$this->getGuestVariantDetails($ct->id);
			if ($current!=false)
				{
				$defNo=$current['quantity'];
				$this->setGuestVariantDetails($ct->id,$current['quantity']);
				$this->total_in_party=$this->total_in_party+$current['quantity'];
				}
			else
				{
				if (count($cust) == 0 )
					$defNo=$mrConfig['defaultNumberOfFirstGuesttype'];
				else
					$defNo=0;
				}
			$customerTypes['DROPDOWN']= jomresHTML::integerSelectList( 0, $ct->maximum, 1, 'guesttype', 'size="1" class="inputbox" onChange="getResponse_guesttype(\''.$ct->id.'\',this.value)";' , $defNo, "0" );
			$cust[]=$customerTypes;
			}
		return $cust;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Extras
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Initialises the Extras selected to empty
	#
	 */
	function initExtras()
		{
		$this->extras="";
		return $this->extras;
		}

	/**
	#
	 * Returns the extras currently selected (string)
	#
	 */
	function getExtras()
		{
		return $this->extras;
		}

	/**
	#
	 * Receives an extra's uid and appends it to the existing selected extras list
	#
	 */
	function setExtras($extra)
		{
		$this->setErrorLog("setExtras::Starting");
		$currentExtras=explode(",",$this->extras);
		if (in_array($extra,$currentExtras) )
			return false;
		if ( !empty($this->extras) )
			{
			$this->extras.=$extra.",";
			}
		else
			$this->extras=$extra.",";
		$this->extrasquantities[$extra]=1;
		}

	/**
	#
	 * Removes the selected extra from the list of currently selected extras
	#
	 */
	function removeExtra($extra)
		{
		$this->setErrorLog("removeExtra::Starting");
		$tmpArray=array();
		$currentExtras=explode(",",$this->extras);
		foreach ($currentExtras as $ex)
			{
			if (!in_array($ex,$this->forcedExtras) )
				{
				if ($ex != $extra)
					$tmpArray[]=$ex;
				}
			}
		$this->extras=implode(",",$tmpArray);
		}

	/**
	#
	 * Check the id of the extra passed from the Ajax query
	 * Will fail if the extra id not set
	 * Will fail if the extra cannot be tallied with the property uid
	#
	 */
	function checkExtra($extra)
		{
		if (!isset($extra) || empty($extra)  )
			{
			$this->setErrorLog("checkExtra::Extra sent in incorrect format");
			return false;
			}
		$query="SELECT name FROM #__jomres_extras WHERE property_uid = '$this->property_uid' AND uid = '$extra' ";
		$result=doSelectSql($query);
		if (count($result) == 1 )
			return true;
		$this->setErrorLog("checkExtra::Extra could not be reconciled with property uid");
		return false;
		}

	/**
	#
	 * Returns true if the extra has already been selected
	#
	 */
	function extraAlreadySelected($extra)
		{
		$currentExtras=explode(",",$this->extras);
		if (in_array($extra,$currentExtras) )
			return true;
		return false;
		}
		
		
	/**
	#
	 * Receives an extra's uid and an integer and modifys the extra's quantity
	#
	 */
	function modifyExtraQuantity($value,$extraID)
		{
		$this->setErrorLog("modifyExtraQuantity::Starting");
		$currentExtras=explode(",",$this->extras);
		if (!in_array($extra,$currentExtras) )
			return false;
		$this->extrasquantities[$extraID]=$value;
		$this->setErrorLog("modifyExtraQuantity::Extras quantities = ".serialize($this->extrasquantities) );
		}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Smoking
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Initialise the default smoking option depending on property configuration
	#
	 */
	function initSmoking()
		{
		//$this->smoking=$this->cfg_defaultSmokingOption;
		return $this->smoking;
		}

	/**
	#
	 * Return the currently selected smoking option
	#
	 */
	function getSmoking()
		{
		return $this->smoking;
		}

	/**
	#
	 * Sets the smoking option to n
	#
	 */
	function setSmoking($smoking)
		{
		$this->smoking=$smoking;
		}

	/**
	#
	 * Check that the smoking option selected = 0/1/2
	#
	 */
	function checkSmoking($smoking)
		{
		if ($smoking != "0" && $smoking != "1" && $smoking != "2" )
			return false;
		return true;
		}

	/**
	#
	 * Make the smoking dropdown
	#
	 */
	function  makeSmokingOutput($smoking)
		{
		$smokingOpts = array();
		$smokingOpts[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES);
		$smokingOpts[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO);
		$smokingOpts[] = jomresHTML::makeOption( '2', _JOMRES_FRONT_ROOMSMOKING_EITHER);
		$smokingDropdown = jomresHTML::selectList( $smokingOpts, 'smoking', 'size="1" class="inputbox" onChange="getResponse_particulars(\'smoking\',this.value);" ', 'value', 'text', $smoking );
		return $smokingDropdown;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Arrival Date
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	/**
	#
	 * Initialise the arrival date
	#
	 */
	function initArrivalDate()	// Set a basic arrival date
		{
		if (empty($this->cfg_mindaysbeforearrival) )
			$this->cfg_mindaysbeforearrival=0;
		$arrivalDate=$this->today;
		//$ad=str_replace("/","-",$arrivalDate);
		//$arrivalDate=mosFormatDate($ad);
		$arrivalDate=str_replace("-","/",$arrivalDate);
		$date_elements  = explode("/",$arrivalDate);
		$this->unixArrivalDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$this->cfg_mindaysbeforearrival,$date_elements[0]);
		$arrivalDate=date( "Y/m/d",$this->unixArrivalDate);
		$arrivalDate=$this->nextDatePropertyHasRoomFree($arrivalDate);
		
		$this->setArrivalDate($arrivalDate);
		$this->setErrorLog("initArrivalDate::Initialising Arrival date to ".$arrivalDate);
		return $this->arrivalDate;
		}

	/**
	#
	 * Find the next date that the property has a room available
	#
	 */
	function nextDatePropertyHasRoomFree($arrivalDate)
		{
		// Lets check that at least one room is available on this date. If it's not, we'll offer the next date that a room is available
		if (empty($arrivalDate) )
			$arrivalDate=$this->today;
		// How far into the future should we look? 5 years is 1825 days, so we'll set a counter. If the counter is reached, then arrival date is set to today.
		$maxNumDays=1824;

		$date_elements  = explode("/",$arrivalDate);
		if (!checkdate($date_elements[1], $date_elements[2], $date_elements[0]) )
			$date_elements  = explode("/",$this->today);
		$freeDate=FALSE;
		$inc=0;
		$totalNumberOfRooms=count($this->allPropertyRoomUids);
		if (count($totalNumberOfRooms)>0)
			{
			while (!$freeDate)
				{
				$cycleDate= date("Y/m/d",mktime(0,0,0,$date_elements[1],$date_elements[2]+$inc,$date_elements[0]));
				foreach ($this->allBookings as $key=>$val)
					{
					 if (($key==$cycleDate && count($val)<$totalNumberOfRooms) || $key > $cycleDate)
						{
						$arrivalDate=$cycleDate;
						$freeDate=TRUE;
						}
					}
				$inc++;
				if ($inc == $maxNumDays)
					break;
				}
			}
		return $arrivalDate;
		}

	/**
	#
	 * Checks that the given date isn't earlier than today, or later than the latest possible date (according to limit advance bookings flag)
	#
	 */
	function checkArrivalDate($arrivalDate)
		{
		global $tmpBookingHandler;
		$amend_contract =  $tmpBookingHandler->getBookingFieldVal("amend_contract");
		if ( empty($this->cfg_mindaysbeforearrival) )
			$this->cfg_mindaysbeforearrival=0;
		$date_elements  = explode("/",$this->today);
		if (count($date_elements)!=3)
			{
			$this->setErrorLog("checkArrivalDate:: Arrival date check failed, date elements is not = 3. ");
			return false;
			}
		if ($this->cfg_limitAdvanceBookingsYesNo=='1') {
	   		$unixLatestArrivalDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$this->cfg_advanceBookingsLimit,$date_elements[0]);
			}
		$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$date_elements  = explode("/",$arrivalDate);
		$unixArrivalDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$date_elements  = explode("/",$this->today);
		$unixEarliestArrivalDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$this->cfg_mindaysbeforearrival,$date_elements[0]);
		if ( !isset($arrivalDate) )
			{
			$this->setErrorLog("checkArrivalDate:: Arrival date check failed, arrivalDate isn't set. ");
			return false;
			}
		if ( empty($arrivalDate) )
			{
			$this->setErrorLog("checkArrivalDate:: Arrival date check failed, arrivalDate is empty. ");
			return false;
			}
		if (!$amend_contract)
			{
			if ($unixTodaysDate > $unixArrivalDate)
				{
				$this->setErrorLog("checkArrivalDate:: Arrival date check failed, unix unix todays date > unix arrivalDate. ");
				return false;
				}
			if ($this->cfg_limitAdvanceBookingsYesNo==1 && ( $unixArrivalDate > $unixLatestArrivalDate) )
				{
				$this->setErrorLog("checkArrivalDate:: Arrival date check failed, limitAdvanceBooking option failing arrival date. ");
				return false;
				}
			$this->setErrorLog("Earliest arrival date: ".$unixEarliestArrivalDate);
			$this->setErrorLog("Arrival date ".$unixArrivalDate);
			if ($unixEarliestArrivalDate > $unixArrivalDate )
				{
				$this->setErrorLog("checkArrivalDate:: Arrival date check failed, unix earliest arrival > unixarrivaldate. ");
				return false;
				}
			}
		return true;
		}

	/**
	#
	 * Set the arrival date to YYYY/MM/DD
	#
	 */
	function setArrivalDate($arrivalDate)
		{
		$this->setErrorLog("setArrivalDate::Setting Arrival date to ".$arrivalDate);
		$this->arrivalDate=$arrivalDate;
		$date_elements  = explode("/",$arrivalDate);
		$this->unixArrivalDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		if ( $this->cfg_fixedPeriodBookings == "1")
			{
			$departureDate=$this->getFixedPeriodDepartureDate($this->stayDays);
			$this->setErrorLog("setArrivalDate::Property uses fixed periods, so setting departure date to: ".$departureDate);
			$this->setDepartureDate($departureDate);
			}
		}

	/**
	#
	 * Returns the current arrival date
	#
	 */
	function getArrivalDate()
		{
		return $this->arrivalDate;
		}

	/**
	#
	 * Makes the arrival date output. Depending on configuration options this can be either a javascript popup or a dropdown
	#
	 */
	function makeArrivalDateOutput($arrivalDate)
		{
		if ($this->cfg_fixedArrivalDateYesNo=='1' && $this->cfg_fixedPeriodBookings=='1')
			$selectionMethod=$this->fixedDaysArrivaldateDropdown($arrivalDate);
		else
			$selectionMethod=$this->generateDateInput("arrivalDate",$arrivalDate,"ad");
		return $selectionMethod;
		}

	/**
	#
	 * Make the arrival date dropdown for properties that have a fixed arrival day (eg Saturday). Finds only those dates that match AND have a slot available after them.
	#
	 */
	function fixedDaysArrivaldateDropdown($arrivalDate)
		{
		global $tmpBookingHandler;

		$date_elements	= explode("/",$arrivalDate);
		$day=$date_elements[2];
		$month=$date_elements[1];
		$year=$date_elements[0];
		//$day=$day-14;
		$requiredDay=$this->cfg_fixedArrivalDay;
		if (!$requiredDay)
		 $requiredDay="0";
		for ($i=0, $n=7; $i < $n; $i++)
			{
			$unixArrivalDate= mktime(0,0,0,$month,$day,$year);
			$currentDoW=date("w",$unixArrivalDate);
			if ($currentDoW==$requiredDay)
				{
				$arrivalDate=date("Y/m/d",mktime(0,0,0,$month,$day,$year));
				break;
				}
			else
			$day++;
			}
		$datesListArray=$this->calcPeriods($arrivalDate);
		$fixedPeriodDropdown='<select class="inputbox" name="arrivalDate" onchange="getResponse_particulars(\'arrival_period\',this.value)";>';
		$counter=0;
		//$selectedDateisNthDate=1;
		$selectedDate = $arrivalDate;
		$amend_contract =  $tmpBookingHandler->getBookingFieldVal("amend_contract");

		foreach ($datesListArray as $thisDate)
			{
			$selected="";
			$okToAddDate=TRUE;
			// If fixed period bookings are used, we need to ensure that all dates within a period are free
			if ($this->cfg_fixedPeriodBookings=="1" && $this->cfg_singleRoomProperty=="1")
			{
			$stayDays=$this->cfg_fixedPeriodBookingsNumberOfDays;
			$dateRangeArray=array();
			$arrivalDate=$thisDate;
			$date_elements	= explode("/",$arrivalDate);
			$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			$secondsInDay = 86400;
			//$currentUnixDay=$unixCurrentDate;
			$currentDay=$arrivalDate;
			for ($i=0, $n=$stayDays; $i < $n; $i++)
				{
				$currentDay=date("Y/m/d",$unixCurrentDate);
				$dateRangeArray[]=$currentDay;
				$unixCurrentDate=$unixCurrentDate+$secondsInDay;
				}

			foreach ($dateRangeArray as $eachDate)
				{
				if (!$amend_contract)
				{
				$query="SELECT room_bookings_uid FROM #__jomres_room_bookings WHERE date = '$eachDate' AND property_uid = '$this->property_uid'";
				$datelist=doSelectSql($query);
				if (count($datelist)>0)
					{
					$okToAddDate=FALSE;
					}
				}
				else
					{
					if (isset($this->allBookings[$eachDate][$this->allPropertyRoomUids[0]]))
						{
						$okToAddDate=FALSE;
						}
					}
				}
			}
			if ($okToAddDate)
			{
			$counter++;
			//if ($counter==$selectedDateisNthDate)
			if ($thisDate == $selectedDate)
				$selected = "selected";
			$fixedPeriodDropdown.= "<option value=\"".$this->JSCalmakeInputDates($thisDate)."\" ".$selected." >".$this->JSCalmakeInputDates($thisDate)."</option>";
			}
			}
		$fixedPeriodDropdown.="</select>";
		return $fixedPeriodDropdown;
		}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Departure Date
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Initialise the departure date, which can vary based on if configuration options define that there's a minimum number of days between the arrival date and the departure date
	#
	 */
	function initDepartureDate()
		{
		$arrivalDate=$this->getArrivalDate();
		$interval=(int)$this->cfg_minimuminterval;
		if ($this->cfg_fixedPeriodBookings =="1" )
			{
			if ($this->cfg_fixedPeriodBookingsShortYesNo == "1" )
				$interval=$this->cfg_fixedPeriodBookingsShortNumberOfDays;
			else
				$interval=$this->cfg_fixedPeriodBookingsNumberOfDays;
			}
		$departureDate=date('Y/m/d',strtotime($arrivalDate. ' +'.$interval.' days'));

		$this->setDepartureDate($departureDate);
		$this->setErrorLog("initDepartureDate::Initialising Departure date to ".$departureDate);
		return $departureDate;
		}
		
	/**
	#
	 * Set the departure date
	#
	 */
	function setDepartureDate($departureDate)
		{
		$this->setErrorLog("setDepartureDate::Setting Departure date to ".$departureDate);
		$this->departureDate=$departureDate;
		$date_elements  = explode("/",$departureDate);
		$this->unixDepartureDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		}
		
	/**
	#
	 * Sets the departure date to the day after the passed arrival date
	#
	 */
	function setDepartureDateToNextDay($arrivalDate)
		{
		$interval=(int)$this->cfg_minimuminterval;
		$departureDate=date('Y/m/d',strtotime($arrivalDate. ' +'.$interval.' day'));
		$this->setDepartureDate($departureDate);
		return $departureDate;
		}

	/**
	#
	 * Ensure that the departure date is not < tomorrows date, or less than arrival date
	#
	 */
	//
	function checkDepartureDate($departureDate)
		{
		global $tmpBookingHandler;
		$this->setErrorLog("checkDepartureDate::Checking Departure date ".$departureDate);
		$this->setErrorLog("checkDepartureDate::Booker class ".$this->booker_class);
		$amend_contract =  $tmpBookingHandler->getBookingFieldVal("amend_contract");
		/*
		if ($this->booker_class == "100")
			{
			$date_elements  = explode("/",$departureDate);
			$this->unixDepartureDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			if ($this->unixDepartureDate > $this->unixArrivalDate) 
				return true;
			}
		*/
		$fixedPeriodMin=$this->cfg_fixedPeriodBookingsNumberOfDays;
		$fixedPeriodMax=$this->cfg_fixedPeriodBookingsNumberOfDays*$this->cfg_numberofFixedPeriods;
		$shortDays=$this->cfg_fixedPeriodBookingsShortNumberOfDays;
		$departurePeriod=$this->stayDays;

		if ($this->cfg_fixedPeriodBookingsShortYesNo == "1" && $this->cfg_fixedPeriodBookings =="1" )
			{
			if ( $departurePeriod <$shortDays )
				{
				$this->setErrorLog("checkDepartureDate:: Departure date check failed, departure period shorter than shortdays. ");
				return false;
				}
			if ( $departurePeriod > $shortDays && $departurePeriod < $fixedPeriodMin )
				{
				$this->setErrorLog("checkDepartureDate:: Departure date check failed, departure period shorter than shortdays and departure date less than fixed period minimum. ");
				return false;
				}
			}
		else if ($this->cfg_fixedPeriodBookings =="1" )
			{
			if ( $departurePeriod < $fixedPeriodMin )
				{
				$this->setErrorLog("checkDepartureDate:: Departure period < fixed period minimum");
				return false;
				}
			if ( $departurePeriod > $fixedPeriodMax )
				{
				$this->setErrorLog("checkDepartureDate:: Departure date check failed, departure period > fixed period maximum. ");
				return false;
				}
			//if (  $departurePeriod/$fixedPeriodMin != 0 )
			//	return false;
			}
			
		$date_elements  = explode("/",$departureDate);
		$unixDepartureDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			
		if (!$amend_contract)
			{
			$date_elements  = explode("/",$this->today);
			$interval=(int)$this->mininterval;
			$unixTomorrowsDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$interval,$date_elements[0]);

			if ($unixDepartureDate < $unixTomorrowsDate)
				{
				$this->setErrorLog("checkDepartureDate:: Departure date check failed, unix departure date < unix tomorrows date. ");
				return false;
				}
			}
		if ($unixDepartureDate <= $this->unixArrivalDate)
			{
			$this->setErrorLog("checkDepartureDate:: Departure date check failed, unix departure <= unix arrival date. ");
			return false;
			}
		return true;
		}

	/**
	#
	 * Gets a fix period's departure date. Passed the departure period, will return the appropriate date.
	#
	 */
	function getFixedPeriodDepartureDate($departurePeriod)
		{
		$departurePeriod=(int)$departurePeriod;
		//$departurePeriod=$departurePeriod++;
		$this->setErrorLog("getFixedPeriodDepartureDate::Setting fixed period departure to ".$departurePeriod );
		$arrivalDate=$this->arrivalDate;
		$date_elements  = explode("/",$arrivalDate);
		//$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$unixDepartureDate=mktime(0,0,0,$date_elements[1],$date_elements[2]+$departurePeriod,$date_elements[0]);
		$departureDate=date("Y/m/d",$unixDepartureDate);
		return $departureDate;
		}



	/**
	#
	 * Return the departure date
	#
	 */
	function getDepartureDate()
		{
		return $this->departureDate;
		}

	/**
	#
	 * Make the departure date output
	 * This varies depending on configuration options, can be either a javascript calendar or dropdown
	#
	 */
	function makeDepartureDateOutput($departureDate)
		{
		if ($this->cfg_fixedPeriodBookings=='0')
			{
			if ($this->cfg_showdepartureinput=="1")
				return $this->generateDateInput("departureDate",$departureDate,"dd");
			else
				return 	"<input type=\"hidden\" name=\"departureDate\" value=\"".$departureDate."\">";
			}
		else
			{
			$defaultPeriod=$this->cfg_fixedPeriodBookingsNumberOfDays;
			$periods = array();
			if ($this->cfg_fixedPeriodBookingsShortYesNo=="1")
				{
				$defaultPeriod=$this->cfg_fixedPeriodBookingsShortNumberOfDays;
				$periods[] = jomresHTML::makeOption( $this->cfg_fixedPeriodBookingsShortNumberOfDays, $this->cfg_fixedPeriodBookingsShortNumberOfDays);
				}
			for ($i=1, $n=$this->cfg_numberofFixedPeriods; $i <= $n; $i++)
				{
				//$selected="";
				$step=$i*$this->cfg_fixedPeriodBookingsNumberOfDays;
				$periods[] = jomresHTML::makeOption( $step, $step );
				}
			$fixedPeriodDropdown = jomresHTML::selectList( $periods, 'fixedPeriod_periodsRequested', 'size="1" class="inputbox" onchange="getResponse_particulars(\'departure_period\',this.value)";', 'value', 'text', $defaultPeriod );
			return $fixedPeriodDropdown;
			}
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Other date functions
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Returns true if any of the dates between arrival and departure fall on a weekend day.
	#
	 */
	function dateRangeIncludesWeekends()
		{
		$weekendDays=$this->cfg_weekenddays;
		if (!empty($this->dateRangeString) )
			$dateRangeArray=explode(",",$this->dateRangeString);
		else
			return false;
		for ($i=0, $n=count($dateRangeArray); $i < $n; $i++)
			{
			$thisDow=$this->getDayOfWeek($dateRangeArray[$i]);
			if ( in_array($thisDow,$weekendDays) )  // In other words, one of the days falls on a weekend
				 return true;
			}
		return false;
		}

	/**
	#
	 * Returns true all of the dates between arrival and departure fall on a weekend day.
	#
	 */
	function dateRangeIsAllWeekends()
		{
		$rangeDaysOfWeek=array();
		$weekendDays=$this->cfg_weekenddays;
		$tmpWEarray=array();
		foreach ($weekendDays as $val)
			{
			$tmpWEarray[]=intval($val);
			}
		$weekendDays=$tmpWEarray;
		if (!empty($this->dateRangeString) )
			$dateRangeArray=explode(",",$this->dateRangeString);
		else
			return false;
		for ($i=0, $n=count($dateRangeArray); $i < $n; $i++)
			{
			$rangeDaysOfWeek[]=$this->getDayOfWeek($dateRangeArray[$i]);
			}
		sort($weekendDays);
		sort($rangeDaysOfWeek);
		if ($rangeDaysOfWeek==$weekendDays)
			return true;
		else
			return false;
		}

	/**
	#
	 * Return the day of the week for a given date. Expects a day in yyyy/mm/dd format
	#
	 */
	function getDayOfWeek($date)
		{
		$date_elements  = explode("/",$date);
		$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$dateArray=getdate($unixCurrentDate);
		return $dateArray['wday'];
		}

	/**
	#
	 * Construct a string of dates based on the arrival and departure date. Populates the dateRangeString with the result and returns it
	#
	 */
	function setDateRangeString()
		{
		$stayDays=(int)$this->getStayDays();
		$dateRangeArray=array();
		$currentDay=$this->getArrivalDate();
		$date_elements  = explode("/",$currentDay);
		$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		for ($i=0, $n=$stayDays; $i < $n; $i++)
			{
			$currentDay=date("Y/m/d",$unixCurrentDate);
			//$currentDay=date("Y-m-d", strtotime($arrivalDate.'+'.$i.'days UTC') );
			$dateRangeArray[]=$currentDay;
			$date_elements  = explode("/",$currentDay);
			$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+1,$date_elements[0]);
			}
		$this->dateRangeString=implode(",",$dateRangeArray);
		return $this->dateRangeString;
		}

	/**
	#
	 * Construct a string of dates based on the arrival and departure date. Populates the dateRangeString with the result and returns it
	#
	 */
	function findDateRangeForDates($d1,$d2)
		{
		$days=(int)$this->findDaysForDates($d1,$d2);
		$dateRangeArray=array();
		$currentDay=$d1;
		$date_elements  = explode("/",$currentDay);
		$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		for ($i=0, $n=$days; $i <= $n; $i++)
			{
			$currentDay=date("Y/m/d",$unixCurrentDate);
			//$currentDay=date("Y-m-d", strtotime($arrivalDate.'+'.$i.'days UTC') );
			$dateRangeArray[]=$currentDay;
			$date_elements  = explode("/",$currentDay);
			$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+1,$date_elements[0]);
			}
		return $dateRangeArray;
		}

	/**
	#
	 * Set the stay days, the number of days the booking covers, based on arrival date and departure date
	#
	 */
	function findDaysForDates($d1,$d2)
		{
		$diff=$this->dateDiff($d1,$d2);
		return $diff;
		}
	/**
	#
	 * Returns the unix timestamp for the arrival date
	#
	 */
	function getUnixArrivalDate()
		{
		return $this->unixArrivalDate;
		}

	/**
	#
	 * Returns the unix timestamp for the departure date
	#
	 */
	function getUnixDepartureDate()
		{
		return $this->unixDepartureDate;
		}

	/**
	#
	 * Set the stay days, the number of days the booking covers, based on arrival date and departure date
	#
	 */
	function setStayDays()
		{
		$this->stayDays=$this->dateDiff($this->arrivalDate,$this->departureDate);
		$this->setErrorLog("setStayDays::".$this->stayDays);
		}

	/**
	#
	 * Returns the number of days that the stay covers
	#
	 */
	function getStayDays()
		{
		return $this->stayDays;
		}

	/**
	#
	 * Find the number of days between date 1 & date 2, used by the setStayDays method
	#
	 */
	function dateDiff($first_date,$second_date)
		{
		$this->setErrorLog("dateDiff:: First date ".$first_date." Second date ".$second_date);
		$first_date_ex = explode("/",$first_date);
		$second_date_ex = explode("/",$second_date);
		$fd=gregoriantojd($first_date_ex[1], $first_date_ex[2], $first_date_ex[0]);
		$sd=gregoriantojd($second_date_ex[1], $second_date_ex[2], $second_date_ex[0]);

		$days=$sd-$fd;
		$this->setErrorLog("dateDiff::Date difference: ".$days);
		return $days;
		}

	/**
	#
	 * Creates the javascript date input and returns it as a value
	#
	 */
	function generateDateInput($fieldName,$dateValue,$myID=FALSE)
		{
		global $jomresConfig_live_site;
		$dateFormat=$this->cfg_cal_input;
		$output="";
		if ($dateValue=="")
		   	$dateValue = date("Y/m/d");
		$dateValue=$this->JSCalmakeInputDates($dateValue);
		$randomID=rand(1, 100); // Purely for the id tag
		$randomID2=rand(1, 100); // Purely for the id tag
		if (strstr($_SERVER["HTTP_USER_AGENT"],"MSIE") )
			$dateStatus="";
		else
			$dateStatus="";
		//$dateStatus="dateStatusFunc : dateStatus,";
		while ($randomID==$randomID2){$randomID2=rand(1, 100);};
		$output.="
			<input class=\"inputbox\" size=\"10\" type=\"text\" readonly=\"readonly\" name=\"".$fieldName."\"";
			if ($fieldName=="arrivalDate")
				{
				if ($this->cfg_fixedPeriodBookings =="1" )
					$output.=' onchange="getResponse_particulars(\'arrivalDate\',this.value);" ';
				else
					$output.=' onchange="ajaxADate(this.value,\''.$dateFormat.'\'); getResponse_particulars(\'arrivalDate\',this.value);" ';
				}
			else
				$output.=' onchange="getResponse_particulars(\'departureDate\',this.value);" ';
			$output.=' onchange="getResponse(\'departureDate\',this.value);" ';
			
			// Popup on both input and image click
			$output.=" value=\"".$dateValue."\" id=\"x".$randomID."\"/>
				<a class=\"dateinput_button\" href=\"#\"  id=\"x".$randomID2."\"  ><img src=\"".$jomresConfig_live_site."/jomres/images/calendar.png\" width=\"20\" height=\"20\" border=\"0\" alt=\"dateinput\" align=\"top\" /></a>
				<script type=\"text/javascript\">
					Calendar.setup({
					inputField    :   \"x".$randomID."\",
					ifFormat      :   \"".$dateFormat."\",
					//   showsTime      :   TRUE,
					button		:   \"x".$randomID2."\",
					step		   :   1
					});
				</script>
				";
				$output.="
				<script type=\"text/javascript\">
					Calendar.setup({
					   inputField    :   \"x".$randomID."\",
					ifFormat		:   \"".$dateFormat."\",
					//   showsTime		:   TRUE,
					button		:   \"x".$randomID."\",
					step		   :   1
					});
				</script>
				";
			return $output;

		return $output;
		}

	/**
	#
	 * Receives a date in yyyy/mm/dd format and reformats it according to configuration options requested output
	#
	 */
	function outputDate($thedate)
		{
		// Assumes the date $theDate comes from the system in the format yyyy/mm/dd
		global $jomresConfig_locale;
		setlocale(LC_ALL, $jomresConfig_locale);
		$date_elements  = explode("/",$thedate);
		$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		if ($this->cfg_dateFormatStyle=="1")
			$formattedDate=date($this->cfg_cal_output,$unixDate);
		else
			$formattedDate=strftime($this->cfg_cal_output, $unixDate);
		return $formattedDate;
		}

	/**
	#
	 * Converts a date passed to it to the required format which is then displayed as part of the javascript calendar input
	#
	 */
	function JSCalmakeInputDates($inputDate)
		{
		$date_elements  = explode("/",$inputDate);
		$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		switch ($this->cfg_cal_input)
			{
			case "%d/%m/%Y":
				$theDate=adodb_date("d/m/Y",$unixDate);break;
			case "%Y/%m/%d":
				$theDate=adodb_date("Y/m/d",$unixDate);break;
			case "%m/%d/%Y":
				$theDate=adodb_date("m/d/Y",$unixDate);break;
			case "%d-%m-%Y":
				$theDate=adodb_date("d-m-Y",$unixDate);break;
			case "%Y-%m-%d":
				$theDate=adodb_date("Y-m-d",$unixDate);break;
			case "%m-%d-%Y":
				$theDate=adodb_date("m-d-Y",$unixDate);break;
			case "%d.%m.%Y":
				$theDate=adodb_date("d.m.Y",$unixDate);break;
	   		default:
	   			echo "Error in date format. Cannot continue.";
	   			exit;
	   		break;
	   		}
		return $theDate;
		}

	/**
	#
	 * Converts a date passed from the javascript calendar into the yyyy/mm/dd format that Jomres expects to deal with
	#
	 */
	function JSCalConvertInputDates($inputDate)
		{
		$inputFormat=$this->cfg_cal_input;
		switch ($inputFormat)
			{
			case "%d/%m/%Y":
				$date_elements  = explode("/",$inputDate);
				$unixDate= @adodb_mktime(0,0,0,$date_elements[1],$date_elements[0],$date_elements[2]);
			break;
			case "%Y/%m/%d":
				$date_elements  = explode("/",$inputDate);
				$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			break;
			case "%m/%d/%Y":
				$date_elements  = explode("/",$inputDate);
				$unixDate= adodb_mktime(0,0,0,$date_elements[0],$date_elements[1],$date_elements[2]);
			break;
			case "%d-%m-%Y":
				$date_elements  = explode("-",$inputDate);
				$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[0],$date_elements[2]);
			break;
			case "%Y-%m-%d":
				$date_elements  = explode("-",$inputDate);
				$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			break;
			case "%m-%d-%Y":
				$date_elements  = explode("-",$inputDate);
				$unixDate= adodb_mktime(0,0,0,$date_elements[0],$date_elements[1],$date_elements[2]);
			break;
			case "%d.%m.%Y":
				$date_elements  = explode(".",$inputDate);
				$unixDate= adodb_mktime(0,0,0,$date_elements[1],$date_elements[0],$date_elements[2]);
			break;
	   		default:
	   			echo "Error in date format. Cannot continue.";
				exit;
	   		break;
	   		}
		$theDate=adodb_date("Y/m/d",$unixDate);
		return $theDate;
		}

	/**
	#
	 * Returns an array of fixed period dates from arrival date for the number of times fixedArrivalDatesRecurring configuration option is set
	#
	 */
	 /*
	function calcPeriods($arrivalDate)
		{
		global $mrConfig;
		$increment = 7;
		$stmt = 'days';
		$t=0;
		$date_elements  = explode("/",$arrivalDate);
		$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2]-($this->cfg_fixedArrivalDatesRecurring*$increment),$date_elements[0]); //
		$arrivalDate = date("Y/m/d",$unixCurrentDate);
		$number_times_recurring=$this->cfg_fixedArrivalDatesRecurring+$this->cfg_fixedArrivalDatesRecurring;
		$datesArray=array();
		//will continue to loop as many times as the recurrence ($number_times_recurring)
		while ($t<($number_times_recurring*$increment))
			{
			//$calendar_startdate and $calendar_enddate are pre-determined and match the Y-m-d format
			$startdate = date("Y/m/d", strtotime($arrivalDate." +".$t." ".$stmt));
			//$enddate = date("Y/m/d", strtotime($calendar_enddate." +".$t." ".$stmt));
			$t = ($t+$increment);
			$datesArray[]=$startdate;
			}
		return $datesArray;
		}
	*/

	function calcPeriods($arrivalDate)
		{
		//global $mrConfig;
		$increment = 7;
		$stmt = 'days';
		$t=0;
		$date_elements	= explode("/",$arrivalDate);
		$recurring = 0;
		$thisDate = $arrivalDate;
		while ($recurring <= $this->cfg_fixedArrivalDatesRecurring)
			{
			$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2]-($recurring*$increment),$date_elements[0]); //
			$tempDate = date("Y/m/d",$unixCurrentDate);
			if ($tempDate < $this->today)
				break;
			else
				$thisDate = $tempDate;
			$recurring++;
			}

		$number_times_recurring=$this->cfg_fixedArrivalDatesRecurring+$this->cfg_fixedArrivalDatesRecurring;
		$datesArray=array();
		//will continue to loop as many times as the recurrence ($number_times_recurring)
			while ($t<($number_times_recurring*$increment))
			{
			//$calendar_startdate and $calendar_enddate are pre-determined and match the Y-m-d format
			$startdate = date("Y/m/d", strtotime($thisDate." +".$t." ".$stmt));
			//$enddate = date("Y/m/d", strtotime($calendar_enddate." +".$t." ".$stmt));
			$t = ($t+$increment);
			$datesArray[]=$startdate;
			}
		return $datesArray;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Guest details
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * An existing guest is a user who already exists on the system. This method sets it.
	#
	 */
	function setGuest_existing_id($value)
		{
		$this->existing_id=$value;
		}

	/**
	#
	 * Set the object's firstname variable
	#
	 */
	function setGuest_firstname($value)
		{
		$this->firstname=$value;
		}

	/**
	#
	 * Set the object's surname variable
	#
	 */
	function setGuest_surname($value)
		{
		$this->surname=$value;
		}

	/**
	#
	 * Set the object's house variable (typically house number)
	#
	 */
	function setGuest_house($value)
		{
		$this->house=$value;
		}

	/**
	#
	 * Set the object's street variable
	#
	 */
	function setGuest_street($value)
		{
		$this->street=$value;
		}

	/**
	#
	 * Set the object's town variable
	#
	 */
	function setGuest_town($value)
		{
		$this->town=$value;
		}

	/**
	#
	 * Set the object's region variable
	#
	 */
	function setGuest_region($value)
		{
		$this->region=$value;
		}

	/**
	#
	 * Set the object's postcode variable
	#
	 */
	function setGuest_postcode($value)
		{
		$this->postcode=$value;
		}

	/**
	#
	 * Set the object's country variable. If not set then the country is reset to the default country set in configuration options
	#
	 */
	function setGuest_country($value)
		{
		if (!isset($value) || empty($value) )
			$value=$this->cfg_defaultcountry;
		$this->country=$value;
		}

	/**
	#
	 * Set the object's landline variable
	#
	 */
	function setGuest_tel_landline($value)
		{
		$this->tel_landline=$value;
		}

	/**
	#
	 * Set the object's mobile variable
	#
	 */
	function setGuest_tel_mobile($value)
		{
		$this->tel_mobile=$value;
		}

	/**
	#
	 * Set the object's email variable
	#
	 */
	function setGuest_email($value)
		{
		$this->email=$value;
		}

	/**
	#
	 * A simple email structure check
	#
	 */
	function checkEmail($value)
		{
		if(preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $value)){
			return true;
			}
		return false;
		}

	/**
	#
	 * Passed an existing guest's uid.
	 * If the booker is known to be a manager then the object's guest details are retrieved from the guest's table and stored temporarily in the tmpguest by the store method.
	 * Will populate the object's guest data and return and array of same data
	#
	 */
	function getExistingCustomerData($id)
		{
		$bookerClass=$this->getBookerClass();
		$this->setErrorLog("getExistingCustomerData::Booker class: ".$bookerClass);
		if ( $bookerClass=="100")
			{
			$query = "SELECT guests_uid,mos_userid,firstname,surname,house,street,town,county ,country,postcode,tel_landline,tel_mobile,email FROM #__jomres_guests WHERE guests_uid = '$id' AND property_uid = '$this->property_uid' limit 1";
			$result=doSelectSql($query,2);
			if (count($result)>0 )
				{
				if (empty($result['country']) )
					$result['country']=$this->cfg_defaultcountry;
				$this->setGuest_existing_id($id);

				$this->mos_userid =$result['mos_userid'];
				$this->setGuest_firstname($result['firstname']);
				$this->setGuest_surname($result['surname']);
				$this->setGuest_house($result['house']);
				$this->setGuest_street($result['street']);
				$this->setGuest_town($result['town']);
				$this->setGuest_region($result['county']);
				$this->setGuest_country($result['country']);
				$this->setGuest_postcode($result['postcode']);
				$this->setGuest_tel_landline($result['tel_landline']);
				$this->setGuest_tel_mobile($result['tel_mobile']);
				if ($this->checkEmail($result['email']) )
					$this->setGuest_email($result['email']);
				return $result;
				}
			else
				return false;
			}
		else
			return false;
		}

	/**
	#
	 * Clear the guests data to empty values. Triggered by the guest dropdown being reset to empty.
	#
	 */
	function resetExistingCustomer()
		{
		$this->setGuest_existing_id("");
		$this->setGuest_firstname("");
		$this->setGuest_surname("");
		$this->setGuest_house("");
		$this->setGuest_street("");
		$this->setGuest_town("");
		$this->setGuest_region("");
		$this->setGuest_country("");
		$this->setGuest_postcode("");
		$this->setGuest_tel_landline("");
		$this->setGuest_tel_mobile("");
		$this->setGuest_email("");
		}

	/**
	#
	 * Fill the variables of the Required fields
	#
	 */
	function makeRequiredIcons()
		{
		global $mrConfig;
		$output=array();
		$icon="*";
		$output['VALIDATION_FIRSTNAME']="false";
		$output['VALIDATION_SURNAME']="false";
		$output['VALIDATION_HOUSENO']="false";
		$output['VALIDATION_STREET']="false";
		$output['VALIDATION_TOWN']="false";
		$output['VALIDATION_POSTCODE']="false";
		$output['VALIDATION_REGION']="false";
		$output['VALIDATION_COUNTRY']="false";
		$output['VALIDATION_LANDLINE']="false";
		$output['VALIDATION_CELLMOBILE']="false";
		$output['VALIDATION_EMAIL']="false";

		if ($mrConfig['bookingform_requiredfields_name'] =="1")
			{
			$output['REQUIRED_FIRSTNAME']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_FIRSTNAME']="true";
			}
		if ($mrConfig['bookingform_requiredfields_surname'] =="1")
			{
			$output['REQUIRED_SURNAME']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_SURNAME']="true";
			}
		if ($mrConfig['bookingform_requiredfields_houseno'] =="1")
			{
			$output['REQUIRED_HOUSENO']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_HOUSENO']="true";
			}
		if ($mrConfig['bookingform_requiredfields_street'] =="1")
			{
			$output['REQUIRED_STREET']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_STREET']="true";
			}
		if ($mrConfig['bookingform_requiredfields_town'] =="1")
			{
			$output['REQUIRED_TOWN']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_TOWN']="true";
			}
		if ($mrConfig['bookingform_requiredfields_postcode'] =="1")
			{
			$output['REQUIRED_POSTCODE']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_POSTCODE']="true";
			}
		if ($mrConfig['bookingform_requiredfields_region'] =="1")
			{
			$output['REQUIRED_REGION']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_REGION']="true";
			}
		if ($mrConfig['bookingform_requiredfields_country'] =="1")
			{
			$output['REQUIRED_COUNTRY']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_COUNTRY']="true";
			}
		if ($mrConfig['bookingform_requiredfields_tel'] =="1")
			{
			$output['REQUIRED_LANDLINE']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_LANDLINE']="true";
			}
		if ($mrConfig['bookingform_requiredfields_mobile'] =="1")
			{
			$output['REQUIRED_CELLMOBILE']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_CELLMOBILE']="true";
			}
		if ($mrConfig['bookingform_requiredfields_email'] =="1")
			{
			$output['REQUIRED_EMAIL']='<font color="red">'.$icon.'</font>';
			$output['VALIDATION_EMAIL']="true";
			}
		return $output;
		}

	/**
	#
	 * Initialise the guests details. If the user is a registered user any existing data will be found for them and the appropriate fields prefilled.
	 * This function sets the booking object's details
	#
	 */
	function initGuestDetails(&$bkg,$guest_deets)
		{
		global $tmpBookingHandler;
		$amend_contract  = $tmpBookingHandler->getBookingFieldVal("amend_contract");
		if ($amend_contract)
			$this->existing_id=$this->guests_uid;
		else
			$bkg->setGuest_existing_id($guest_deets['EXISTINGID']);
		$bkg->setGuest_firstname($guest_deets['FIRSTNAME']);
		$bkg->setGuest_surname($guest_deets['SURNAME']);
		$bkg->setGuest_house($guest_deets['HOUSENO']);
		$bkg->setGuest_street($guest_deets['STREET']);
		$bkg->setGuest_town($guest_deets['TOWN']);
		$bkg->setGuest_region($guest_deets['REGION']);
		$bkg->setGuest_country($guest_deets['HIDDENCOUNTRY']);
		$bkg->setGuest_postcode($guest_deets['POSTCODE']);
		$bkg->setGuest_tel_landline($guest_deets['TEL']);
		$bkg->setGuest_tel_mobile($guest_deets['MOBILE']);
		$bkg->setGuest_email($guest_deets['EMAIL']);
		}

	/**
	#
	 * Make the Guest, put them into an array for patTemplate and return the array
	#
	 */
	function makeGuestData()
		{
		global $thisJRUser;
		$userIsManager=$thisJRUser->userIsManager;
		$guests_uid			=	0;
		/*
		$guest_firstname	=	"";
		$guest_surname		=	"";
		$guest_house		=	"";
		$guest_street		=	"";
		$guest_town			=	"";
		$guest_region		=	"";
		$guest_country		=	$mrConfig['defaultcountry'];
		$guest_postcode 	=	"";
		$guest_tel_landline	=	"";
		$guest_tel_mobile	=	"";
		$guest_email		=	"";
		*/
		$guest_firstname	=$this->firstname;
		$guest_surname		=$this->surname;
		$guest_house		=$this->house;
		$guest_street		=$this->street;
		$guest_town			=$this->town;
		$guest_region		=$this->region;
		$guest_country		=$this->country;
		$guest_postcode		=$this->postcode;
		$guest_tel_landline	=$this->tel_landline;
		$guest_tel_mobile	=$this->tel_mobile;
		$guest_email		=$this->email;

		//$this->mos_userid=$thisJRUser->id;
		$id=$thisJRUser->id;
		 if ($userIsManager)
			$guest_deets['GUESTDROPDOWN']=$this->AJgetGuestDropdown();

	   	if ($id!=0 && !$userIsManager)
	   		{
	   		$query="SELECT guests_uid,mos_userid,firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,tel_fax,email FROM #__jomres_guests WHERE mos_userid = '$id'";
	   		$guestList =doSelectSql($query);
			//echo $query;exit;
			//var_dump($guestList);exit;
			if (count($guestList)>0)
				{
		   		foreach ($guestList as $data)
					{
					$guests_uid			=   $data->guests_uid;
					$guest_firstname	=	$data->firstname;
					$guest_surname		=	$data->surname;
		   			$guest_house		=	$data->house;
		   			$guest_street		=	$data->street;
		   			$guest_town			=	$data->town;
		   			$guest_region		=	$data->county;
		   			$guest_country		=	$data->country;
			   		$guest_postcode 	=	$data->postcode;
			   		$guest_tel_landline	=	$data->tel_landline;
				   	$guest_tel_mobile	=	$data->tel_mobile;
				   	$guest_email		=	$data->email;
				   	}
				}
	   		}

		$guest_deets['COUNTRY']=createSimpleCountriesDropdown($guest_country);
		$guest_deets['HFIRSTNAME']=jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME',_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME);
		$guest_deets['HSURNAME']= jr_gettext('_JOMRES_FRONT_MR_DISPGUEST_SURNAME',_JOMRES_FRONT_MR_DISPGUEST_SURNAME);
		$guest_deets['HHOUSENO']= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL) ;
		$guest_deets['HSTREET']=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL) ;
		$guest_deets['HTOWN']= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL);
		$guest_deets['HPOSTCODE']=jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL) ;
		$guest_deets['HREGION']= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$guest_deets['HCOUNTRY']= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$guest_deets['HTEL']= jr_gettext('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL);
		$guest_deets['HMOBILE']= jr_gettext('_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL',_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL);
		$guest_deets['HEMAIL']= jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);


		$guest_deets['EXISTINGID']=$guests_uid;
		$guest_deets['FIRSTNAME']=$guest_firstname;
		$guest_deets['SURNAME']= $guest_surname;
		$guest_deets['HOUSENO']= $guest_house;
		$guest_deets['STREET']=$guest_street;
		$guest_deets['TOWN']=$guest_town;
		$guest_deets['POSTCODE']=$guest_postcode;
		if (strlen($guest_country)==0 || is_null($guest_country) ||$guest_country == "null" )
			$guest_country=$this->cfg_defaultcountry;
		$guest_deets['HIDDENCOUNTRY']=$guest_country;
		$guest_deets['COUNTRY']=$this->bookingCountriesDropdown($guest_country);
		$guest_deets['REGION']=$guest_region;

		$guest_deets['TEL']=$guest_tel_landline;
		$guest_deets['MOBILE']=$guest_tel_mobile;
		$guest_deets['EMAIL']=$guest_email;
		return $guest_deets;
		}

	/**
	#
	 * Makes the guest dropdown that managers/receptions see so that they can autmatically fill the booking form with the guest's details.
	#
	 */
	function AJgetGuestDropdown()
		{
		global $property_uid;
		$dropDownList="";
		$query = "SELECT guests_uid,surname, firstname, house, street,town,county FROM #__jomres_guests WHERE property_uid = '$property_uid' ORDER BY surname";
		$existingCustomers=doSelectSql($query);
		$ec=array();
		if (count($existingCustomers)>0 )
			{
			$ec[] = jomresHTML::makeOption( '0', '&nbsp;');
			foreach ($existingCustomers as $customer)
				{
				//$ec[] = jomresHTML::makeOption( $customer->guests_uid, stripslashes($customer->surname).", ".stripslashes($customer->firstname).", ".stripslashes($customer->street).". ".stripslashes($customer->town));
				$ec[] = jomresHTML::makeOption( $customer->guests_uid, stripslashes($customer->surname).", ".stripslashes($customer->firstname) );
				}
			$dropDownList = jomresHTML::selectList( $ec, 'existingCustomers', ' onChange="getResponse_existing(\'existingCustomers\',this.value);" size="1" class="inputbox"', 'value', 'text', 0 );
			}
		return  $dropDownList;
		}

	/**
	#
	 * Makes the countries dropdown
	#
	 */
	function bookingCountriesDropdown($selectedCountry)
		{
		//global $mrConfig;
		if (!isset($selectedCountry) || empty($selectedCountry) )
			$selectedCountry=$this->cfg_defaultcountry;

		$selectedCountry=strtoupper($selectedCountry);
		//$countryNames=countryNameArray();
		$countryCodes=countryCodesArray();
		asort($countryCodes);
		foreach ($countryCodes as $k=>$v)
			{
			$thecountryCodes[]=jomresHTML::makeOption( $k, $v);
			}
		$countryDropdown= jomresHTML::selectList($thecountryCodes, 'country', ' class="inputbox"', 'value', 'text', $selectedCountry);
		return $countryDropdown;
		}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	BookerClass management
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Set the booker's class
	#
	 */
	function setBookerClass($value)
		{
		$this->booker_class=$value;
		}

	/**
	#
	 * Return the booker's class
	#
	 */
	function getBookerClass()
		{
		return $this->booker_class;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Room update functions
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Updates the selected room with the room^tariff string
	 * If room^tariff are already in the requestedRoom array then it will be removed
	 * otherwise it is added
	#
	 */
	function updateSelectedRoom($roomAndTariff)
		{
		if (count($this->requestedRoom)>0) // The requestedRooms list is not empty, let's see of we're adding or removing this selection
			{
			// See if we're actually removing a room from the list of those selected
			if (in_array($roomAndTariff,$this->requestedRoom) )
				{
				if ( $this->removeFromSelectedRooms($roomAndTariff) )
					return true;
				else
					return false;
				}
			else // We are adding the room to the list
				{
				// Let's check that this tariff tallies with this room type
				if ($this->addToSelectedRooms($roomAndTariff) )
					return true;
				else
					return false;
				}
			}
		else // We've got to be adding the room to the currently empty list of requested rooms
			{
			if ($this->addToSelectedRooms($roomAndTariff) )
				return true;
			else
				return false;
			}
		}

	/**
	#
	 * Rebuild the requestedRoom array excluding the one we don't want
	#
	 */
	function removeFromSelectedRooms($roomAndTariff)
		{
		$tmpArray=array();
		foreach ($this->requestedRoom as $rt)
			{
			$this->setErrorLog("removeFromSelectedRooms::Checking to see if $rt is to be removed.");
			if ($rt !=  $roomAndTariff )
				$tmpArray[]=$rt;
			}
		$this->requestedRoom=$tmpArray;
		}

	/**
	#
	 * Add room^tariff to requestedRoom
	#
	 */
	function addToSelectedRooms($roomAndTariff)
		{
		$rtArray=explode("^",$roomAndTariff);
		if ( $this->checkTariffTalliesWithRoom( $rtArray ) )
			{
			if ($this->checkRoomNotAlreadySelected($rtArray) )
				{
				$this->requestedRoom[]=$roomAndTariff;
				return true;
				}
			else
				return false;
			}
		else
			return false;
		}

	/**
	#
	 * Returns the number of currently selected rooms
	#
	 */
	function numberOfCurrentlySelectedRooms()
		{
		return count($this->requestedRoom);
		}

	/**
	#
	 * Checks that a room^tariff hasn't already been selected
	#
	 */
	function checkRoomNotAlreadySelected($rtArray)
		{
		if (count($this->requestedRoom) > 0 )
			{
			$rmidsArray=array();
			$room=$rtArray[0];
			foreach ($this->requestedRoom as $rt)
				{
				$rm=explode("^",$rt);
				$rmid=$rm[0];
				$rmidsArray[]=$rmid;
				}
			if (count($rmidsArray) >0 )
				$rmidsArray=array_unique($rmidsArray);
			if (in_array($room,$rmidsArray) )
				return false;
			else
				return true;
			}
		return true;
		}

	/**
	#
	 * Checks that it is logical to select a room with a given tariff. Finds the room type then checks that the tariff has the same room type
	#
	 */
	function checkTariffTalliesWithRoom($rtArray)
		{
		$room=$rtArray[0];
		/*
		$query="SELECT room_classes_uid FROM #__jomres_rooms WHERE room_uid = '".$room."'";
		$roomsList=doSelectSql($query);
		foreach ($roomsList as $roomClass)
			{
			$room_class=$roomClass->room_classes_uid;
			}
		$query="SELECT rates_uid FROM #__jomres_rates WHERE rates_uid = '".$rtArray[1]."' AND roomclass_uid = '".$room_class."' AND property_uid = '$this->property_uid' ";
		$ratesList=doSelectSql($query);
		*/
		$ratesList=array();
		$room_class=$this->allPropertyRooms[$room]['room_classes_uid'];
		foreach ($this->allPropertyTariffs as $tariff)
			{
			if ($tariff['rates_uid']== $rtArray[1] && $tariff['roomclass_uid'] == $room_class)
				$ratesList[]=$tariff['rates_uid'];
			}
		if (count($ratesList)==0)
			return false;
		else
			return true;
		}

	/**
	#
	 * String output of the currently selected rooms. Returns overlib'd output as a string
	#
	 */
	function listCurrentlySelectedRooms()
		{
		$return_output="";
		$this->setErrorLog("listCurrentlySelectedRooms::Requested rooms: ".gettype($this->requestedRoom)  );
		
		if (!empty($this->requestedRoom) )
			{
			$return_output='<div id="roombuttoncontainer_selected2"><div id="roombutton_selected"><table class="bformleftcol" valign="top" width="100%">';
			$return_output .= $this->makeTariffHeaders();
			foreach ($this->requestedRoom as $rr)
				{
				$currentUids=explode("^",$rr);
				$result=$this->makeRoomTariffDetails($currentUids[0],$currentUids[1]);
				$roomTariffOutputId=$result['requestedRoom'];
				$roomTariffOutputText=$result['roomandtariffinfo'];
				$roomDeets[] = $this->makeRoomOverlibdata( $currentUids[0],$currentUids[1],$roomTariffOutputId,$roomTariffOutputText,true);
				}
			foreach ($roomDeets as $rm)
				{
				$return_output .= $rm;
				}
			$return_output .='</table></div></div>';
			}
		return $return_output;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Room listing functions
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Get all of the rooms for this property
	#
	 */
	function getAllRoomUidsForProperty()
		{
		$room_uidsArray=array();
		$query="SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '$this->property_uid'";
		$roomsList=doSelectSql($query);
		foreach ($roomsList as $rooms)
			{
			$room_uidsArray[]=$rooms->room_uid;
			}
		//$this->setErrorLog("This property has these rooms: ".serialize($room_uidsArray) );
		return $room_uidsArray;
		}

	/**
	#
	 * From the free rooms array, strips out any rooms that have already been selected
	#
	 */
	function removeRoomuidsAlreadyInThisBooking($freeRoomsArray)
		{
		$ret_uids=array();
		$tmpArray=array();
		if (count($this->requestedRoom)>0 && count($freeRoomsArray)>0 )
			{

			foreach ($this->requestedRoom as $rr)
				{
				$currentUids=explode("^",$rr);
				$tmpArray[]=$currentUids[0];
				}
			$this->setErrorLog("removeRoomuidsAlreadyInThisBooking::Serialized tmpArray ".serialize($tmpArray) );
			foreach ($freeRoomsArray as $id)
				{
				$this->setErrorLog("removeRoomuidsAlreadyInThisBooking:: id ".$id );
				if (!in_array($id,$tmpArray) )
					$ret_uids[]=$id;
				}
			}
		else
			$ret_uids=$freeRoomsArray;
		if (empty($ret_uids) && !empty($tmpArray)  )
			$this->setErrorLog("removeRoomuidsAlreadyInThisBooking::Rooms removed as already in booking");
		return $ret_uids;
		}

	/**
	#
	 * Find rooms that are free within the arrival and departure dates
	#
	 */
	function findFreeRoomsInDateRange($freeRoomsArray)
		{
		//$this->setErrorLog("Contents of the freeRoomsArray when looking for free rooms: ".serialize($freeRoomsArray) );
		$tmpArray=array();
		if (!empty($this->dateRangeString) )
			$dateRangeArray=explode(",",$this->dateRangeString);
		else
			{
			$this->setErrorLog("findFreeRoomsInDateRange::Date range array empty");
			return false;
			}
		//var_dump($this->allBookings);exit;
		//$this->setErrorLog("Looking for free rooms in date range: ".serialize($dateRangeArray) );
		if (count($freeRoomsArray)>0 )
			{
			foreach ($freeRoomsArray as $roomUid)
				{
				//var_dump($roomUid);
				$roomIsFree=TRUE;
				foreach ($dateRangeArray as $eachdate)
					{
					if (isset($this->allBookings[$eachdate][$roomUid]))
						{
						//var_dump($this->allBookings[$eachdate][$roomUid]);
						//$arrivalDate=$cycleDate;
						$roomIsFree=FALSE;

						break;
						}

					}

				if ($roomIsFree)
					$tmpArray[]=$roomUid;
				}
				//var_dump($tmpArray);exit;
			if (empty($tmpArray) )
				$this->setErrorLog("findFreeRoomsInDateRange::No free rooms found in date range");
			}
		else
			$this->setErrorLog("findFreeRoomsInDateRange::Room uids array empty");
		//$this->setErrorLog("Contents of the freeRoomsArray after looking for free rooms: ".serialize($tmpArray) );
		return $tmpArray;
		}

	/**
	#
	 * Filters the free rooms array based on the smoking requirements
	#
	 */
	// Returns rooms that match the required smoking option
	function checkSmokingOption($freeRoomsArray)
		{
		$smoking=$this->getSmoking();
		$newRoomArray=array();
		if ($this->cfg_showSmoking =="1")
			{
			$uidList="";
			if (count($freeRoomsArray) > 0 )
				{
				if ($smoking!="2")
					{
					$query="SELECT room_uid FROM #__jomres_rooms WHERE (";
					foreach ($freeRoomsArray as $roomUid)
						{
						$uidList.="room_uid = '$roomUid' OR ";
						}
					$query.= substr( $uidList, 0, -3);
					$query.=") AND smoking = '";
					if ($smoking=="0")
						$query.="0'";
					if ($smoking=="1")
						$query.="1'";
					$roomList=doSelectSql($query);
					if (count($roomList)>0)
						{
						foreach ($roomList as $ruid)
							{
							$newRoomArray[]=$ruid->room_uid;
							}
						}
					}
				else
					$newRoomArray=$freeRoomsArray;
				}
			else
				$this->setErrorLog("checkSmokingOption::Free rooms array empty when checking smoking option");
			}
		else
			{
			$this->setErrorLog("checkSmokingOption::Check smoking option is switched off " );
			$newRoomArray=$freeRoomsArray;
			}

		return $newRoomArray;
		} // end function checkSmoking

	/**
	#
	 * Finds the total number of beds that are unbooked in this property at this time
	#
	 */
	function checkPeopleNumbers($freeRoomsArray)
		{
		//global $mrConfig;
		$totalFreeBeds=0;
		if (count($freeRoomsArray) > 0 )
			{
			$query="SELECT room_uid,max_people FROM #__jomres_rooms WHERE ";
			if ($this->smoking!="2" && $this->cfg_showSmoking =="1" )
				$query .= " smoking = '$this->smoking' AND";
			$query .= " (room_uid = ";
			for ($i=0, $n=count($freeRoomsArray); $i < $n; $i++)
				{
				$query .= "'".$freeRoomsArray[$i]."'";
				if ($i < (count($freeRoomsArray)-1))
					$query .= " OR room_uid = ";
				}
			$query .=") ";

			$freeRoomsCapacityList  =doSelectSql($query);

			foreach ($freeRoomsCapacityList as $room)
				{
				$totalFreeBeds=$totalFreeBeds+(int)$room->max_people;
				}
			}

		$this->beds_available=$totalFreeBeds;
		$this->setErrorLog("checkPeopleNumbers::The number of beds available on this date ".$totalFreeBeds );
		return $freeRoomsArray;
		} // end function checkPeopleNumbers

	/**
	#
	 * Adds the total selected guesttypes to find the total in the party. Returns the integer.
	#
	 */
	function getTotalInParty()
		{
		$subtotal=0;
		for ($i=0;$i<count($this->variancetypes);$i++)
			{
			if ($this->variancetypes[$i]=='guesttype')
				{
				$subtotal=$subtotal+$this->varianceqty[$i];
				}
			}
		$this->total_in_party=$subtotal;
		return $this->total_in_party;
		}

	/**
	#
	 * Passed an array, it'll create an object and pass it back. v2.6.0.3 dobooking_functions was changed to reduce the number of queries by collecting much of the required data in a few quick queries when the booking object is created. This information is then stored in memory as an array because it's easy to access directly, however some of the code in dobooking_functions expects to be passed the array(obj) that was pulled from db queries so instead of rewriting bunches of code so that they now see basic arrays, we'll reconvert (in memory) the array found to an an object. The method calling this method will actually create the array(obj) to be passed back to it's parent method.
	#
	 */
	function convertArrayToObject($tmpArray)
		{
		$obj = new stdClass();
		foreach ($tmpArray as $key=>$val)
			{
			$obj->$key=$val;
			}
		return $obj;
		}

	/**
	#
	 * Pass a room uid, this method will return all tariffs for that room uid's class
	#
	 */
	function getTariffsForRoomUidByClass($room_uid)
		{
		$result=array();
		$roomType=$this->allPropertyRooms[$room_uid]['room_classes_uid'];
		//$this->setErrorLog("getTariffsForRoomUidByClass::allPropertyRooms ".serialize($this->allPropertyRooms[$room_uid]));
		foreach ($this->allPropertyTariffs as $t)
			{
			if ($t['roomclass_uid']==$roomType)
				{
				$result[]=$this->convertArrayToObject($t);
				}
			}
		return $result;
		}

	/**
	#
	 * Pass a roomClass uid, this method will return all tariffs for that class
	#
	 */
	function getTariffsForRoomClass($roomClass)
		{
		$result=array();
		foreach ($this->allPropertyTariffs as $t)
			{
			if ($t['roomclass_uid']==$roomClass)
				{
				$result[]=$this->convertArrayToObject($t);
				}
			}
		return $result;
		}

	/**
	#
	 * Find any tariffs that are valid for the available rooms
	 * Finds all tariffs for a given room type
	 * Checks that arrival and departure dates fall between the valid from -> to dates
	 * Checks that min & max days of the booking (stayDays) are applicable
	 * Checks that the min & max people in the party do are applicable to the tariff
	 * Checks to see if the tariff allows bookings that include weekends if the date range includes a weekend day
	 * Returns an array $roomAndTariffArray which is a multi-dimensional array of rooms and tariffs that can be applied to the room
	#
	 */
	function getTariffsForRoomUids($freeRoomsArray)
		{
		$roomAndTariffArray=array();
		$this->setErrorLog("getTariffsForRoomUids::Number of elements in the freeRoomsArray at tariff checking: ".count($freeRoomsArray)."&nbsp;&nbsp;If this is empty then there are no free rooms on this date" );
		//$this->setErrorLog("getTariffsForRoomUids::The variable freeRoomsArray is type ".gettype($freeRoomsArray) );
		//$this->setErrorLog("getTariffsForRoomUids::It contains this many elements:  ".count($freeRoomsArray) );
		$numberOfRoomsAlreadySelected = count($this->requestedRoom);
		$collectedTariffs=array();
		if (count($freeRoomsArray)>0 && is_array($freeRoomsArray)  )
			{
			$dateRangeIncludesWeekend=$this->dateRangeIncludesWeekends();
			$dateRangeIsAllWeekends=$this->dateRangeIsAllWeekends();
			//$counter=0;
			foreach ($freeRoomsArray as $room_uid)
				{
				$rateDeets=$this->getTariffsForRoomUidByClass($room_uid);
				//$this->setErrorLog("getTariffsForRoomUids::rateDeets:  ".serialize($room_uid) );
				foreach ($rateDeets as $tariff)
					{
					if ($this->jrConfig['dynamicMinIntervalRecalculation']=="1")
						$collectedTariffs[]=$tariff;
					$rates_uid = $tariff->rates_uid;
					$this->setErrorLog("getTariffsForRoomUids::Checking current tariff uid:  ".$rates_uid);
					$rate_title = stripslashes($tariff->rate_title);
					//$rate_description = stripslashes($tariff->rate_description);
					//$roomrateperday = stripslashes($tariff->roomrateperday);
					$mindays = $tariff->mindays;
					$maxdays = $tariff->maxdays;
					$minpeople = $tariff->minpeople;
					$maxpeople = $tariff->maxpeople;
					//$ignore_pppn = $tariff->ignore_pppn;
					$allow_we = $tariff->allow_we;
					$weekendonly = $tariff->weekendonly;
					$tariff_dayofweek = $tariff->dayofweek;

					$validFrom = $tariff->validfrom;
					$validTo = $tariff->validto;
					$stayDays=$this->getStayDays();
					$totalInParty=$this->getTotalInParty();
					
					if (!isset($tariff->minrooms_alreadyselected) || $tariff->minrooms_alreadyselected =="" )
						$minrooms_alreadyselected = 0;
					else
						$minrooms_alreadyselected = $tariff->minrooms_alreadyselected;
					if (!isset($tariff->maxrooms_alreadyselected) || $tariff->maxrooms_alreadyselected =="" )
						$maxrooms_alreadyselected = 100;
					else
						$maxrooms_alreadyselected = $tariff->maxrooms_alreadyselected;
					//$minrooms_alreadyselected = $tariff->minrooms_alreadyselected;
					//$maxrooms_alreadyselected = $tariff->maxrooms_alreadyselected;
$this->setErrorLog("Tariff mxrooms : ".serialize($tariff));
					
					

					$date_elements  = explode("/",$this->arrivalDate);
					$unixArrivalDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					//$date_elements  = explode("/",$this->departureDate);
					//$unixDepartureDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					$date_elements  = explode("/",$validFrom);
					$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					$date_elements  = explode("/",$validTo);
					$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

					$datesValid=FALSE;
					$stayDaysValid=FALSE;
					$numberPeopleValid=FALSE;
					$roomsAlreadySelectedTests=FALSE;

					//$weekendOnlyCheck=false;
					$this->setErrorLog(" " );
					$this->setErrorLog("Tariff title : ".$rate_title);
					$this->setErrorLog("getTariffsForRoomUids::Number of rooms already selected:".$numberOfRoomsAlreadySelected." Min rooms setting ".$minrooms_alreadyselected." max rooms setting ".$maxrooms_alreadyselected );
					if ($numberOfRoomsAlreadySelected+1 >= $minrooms_alreadyselected && $numberOfRoomsAlreadySelected < $maxrooms_alreadyselected)
						{
						$this->setErrorLog("getTariffsForRoomUids:: Passed test 1" );
						$roomsAlreadySelectedTests=TRUE;
						}
					else
						{
						if ($numberOfRoomsAlreadySelected >= $minrooms_alreadyselected && $numberOfRoomsAlreadySelected < $maxrooms_alreadyselected)
							{
							$this->setErrorLog("getTariffsForRoomUids:: Passed test 2" );
							$roomsAlreadySelectedTests=TRUE;
							}
						}

					$this->setErrorLog(" " );
					$this->setErrorLog("getTariffsForRoomUids::Unix arrival date".$unixArrivalDate." Unix valid from".$unixValidFromDate." Unix valid to".$unixValidToDate."");
					$this->setErrorLog("getTariffsForRoomUids::Arrival date ".date("Y/m/d",$unixArrivalDate )."  -- Valid from".date("Y/m/d",$unixValidFromDate )." Valid to".date("Y/m/d",$unixValidToDate )."");

					if ($unixArrivalDate >= $unixValidFromDate && $unixArrivalDate <= $unixValidToDate )
						$datesValid=TRUE;

					if ( $stayDays >= $mindays && $stayDays <= $maxdays )
						$stayDaysValid=TRUE;

					if ( $totalInParty > 0 )
						{
						if ($totalInParty >= $minpeople && $totalInParty <= $maxpeople)
							$numberPeopleValid=TRUE;
						}
					else
						$numberPeopleValid=TRUE;

					$dowCheck =TRUE;
					if ($allow_we == "0" && $dateRangeIncludesWeekend)
				  		$dowCheck =FALSE;

					if ($weekendonly == "1" && $dateRangeIsAllWeekends)
						$dowCheck =TRUE;
					else
						{
						if ($weekendonly == "1" && !$dateRangeIsAllWeekends)
							$dowCheck =FALSE;
						}

					$this->setErrorLog("getTariffsForRoomUids::Day of week check, tariff dow = ".$tariff_dayofweek );
					//$this->setErrorLog("getTariffsForRoomUids::Day of week check, arrival date dow =".$this->getDayOfWeek($unixArrivalDate));
					if ($tariff_dayofweek < 7 )
						{
						if ( $this->getDayOfWeek($this->arrivalDate) == $tariff_dayofweek)
							{
							$dowCheck =TRUE;
							$this->setErrorLog("getTariffsForRoomUids::Day of week check, <b> TRUE </b>");
							}
						else
							{
							$dowCheck =FALSE;
							$this->setErrorLog("getTariffsForRoomUids::Day of week check, <b> FALSE </b>");
							}
						}

					if ($roomsAlreadySelectedTests)
						$this->setErrorLog("getTariffsForRoomUids::roomsAlreadySelectedTests = true");
					else
						$this->setErrorLog("getTariffsForRoomUids::roomsAlreadySelectedTests <b>not</b> passed");

					if ($datesValid)
						$this->setErrorLog("getTariffsForRoomUids::Dates valid");
					else
						$this->setErrorLog("getTariffsForRoomUids::Dates <b>not</b> valid");
					if ($stayDaysValid)
						$this->setErrorLog("getTariffsForRoomUids::Staydays valid");
					else
						$this->setErrorLog("getTariffsForRoomUids::Staydays <b>not</b> valid");
					$this->setErrorLog("getTariffsForRoomUids::People numbers: Maxdays".$maxdays." Min days ".$minpeople." Total in party: ".$totalInParty);
					if ($numberPeopleValid)
						$this->setErrorLog("getTariffsForRoomUids::People numbers valid");
					else
						$this->setErrorLog("getTariffsForRoomUids::People numbers <b>not</b> valid");
					if ($dowCheck)
						$this->setErrorLog("getTariffsForRoomUids::Day of week valid");
					else
						$this->setErrorLog("getTariffsForRoomUids::Day of week <b>not</b> valid");


					if ($datesValid && $stayDaysValid && $numberPeopleValid && $dowCheck && $roomsAlreadySelectedTests)
						{
						$this->setErrorLog("<b>getTariffsForRoomUids::Tariff is valid</b>");
						$roomAndTariffArray[]=array($room_uid,$rates_uid);
						}
					else
						$this->setErrorLog("getTariffsForRoomUids::Tariff is NOT valid");
					$this->setErrorLog("--------------------------------------------");
					}
				}
			}
		if (empty($roomAndTariffArray) )
			$this->setErrorLog("getTariffsForRoomUids::No valid tariffs found for rooms otherwise found to be free");

		//$this->setErrorLog("Contents of the roomAndTariffArray AFTER tariff checking: ".serialize($roomAndTariffArray));
		if ($this->jrConfig['dynamicMinIntervalRecalculation']=="1")
			$this->setMinInterval($collectedTariffs);
		else
			$this->mininterval=$this->cfg_minimuminterval;
		return $roomAndTariffArray;
		}

	/**
	#
	 * Allows us to adjust the mininterval for the booking based on the min days found in tariffs
	#
	 */
	function setMinInterval($collectedTariffs)
		{
		if (count($collectedTariffs)>0)
			{
			$cumulativeMindays=array();  //Eventually all of the min interval dates pulled from tariffs that are valid for this booking period will be put in here, then depending on the tariff model used either the highest or the lowest minday will be used to set the mininterval
			$allTariffsValidfromtoDates=array(); // a collection of all the validfrom and to dates from the found tariffs
			$dateRangeArray=explode(",",$this->dateRangeString);
			$date_elements  = explode("/",$this->arrivalDate);
			$unixArrivalDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			$date_elements  = explode("/",$this->departureDate);
			$unixDepartureDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

			foreach ($collectedTariffs as $tariff)
				{
				$validFrom = $tariff->validfrom;
				$validTo = $tariff->validto;
				$mindays = $tariff->mindays;
				$date_elements  = explode("/",$validFrom);
				$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
				$date_elements  = explode("/",$validTo);
				$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
				$allTariffsValidfromtoDates[]=array('uvFrom'=>$unixValidFromDate,'uvTo'=>$unixValidToDate,'mindays'=>$mindays);
				}
			////////
			$validTariffFound=false;
			foreach ($allTariffsValidfromtoDates as $datesDays)
				{
				$this->setErrorLog("setMinInterval::Arrival date ".date("Y/m/d",$unixArrivalDate )." Departure date ".date("Y/m/d",$unixDepartureDate )." -- Tariff valid from ".date("Y/m/d",$datesDays['uvFrom'] )." Valid to ".date("Y/m/d",$datesDays['uvTo'] )."");

				if ($this->tariffModel == "1") // Flat rate model
					{
					if ($unixArrivalDate>= $datesDays['uvFrom'] && $unixArrivalDate <= $datesDays['uvTo'])
						{
						$this->setErrorLog("<b>setMinInterval::Flat rate model, added to cumulative Min days: ".$datesDays['mindays']."</b>");
						$cumulativeMindays[]=$datesDays['mindays'];
						$validTariffFound=true;
						}
					}
				else // We are using the averaging model
					{
					if ($unixArrivalDate >= $datesDays['uvFrom'] && $unixDepartureDate <= $datesDays['uvTo'] ) // A valid date, no crossover between tariffs
						{
						$this->setErrorLog("<b>setMinInterval::Strict check, added to cumulative Min days: ".$datesDays['mindays']."</b>");
						$cumulativeMindays[]=$datesDays['mindays'];
						$validTariffFound=true;
						}
					}
				}

			if (!$validTariffFound && $this->tariffModel == "2") // One last attempt to find a valid tariff.  This should be triggered if we haven't yet found an exact match for a tariff
				{
				foreach ($allTariffsValidfromtoDates as $datesDays)
					{
					$tariffDateRange=$this->findDateRangeForDates(date("Y/m/d",$datesDays['uvFrom'] ) , date("Y/m/d",$datesDays['uvTo'] ) );
					foreach ($tariffDateRange as $d)
						{
						//$this->setErrorLog("<b>setMinInterval::Loose check, d = : ".$d."</b>");
						if (in_array($d,$dateRangeArray) )
							{
							$this->setErrorLog("<b>setMinInterval::Loose check, added to cumulative Min days: ".$datesDays['mindays']."</b>");
							$cumulativeMindays[]=$datesDays['mindays'];
							}
						}
					}
				}
			//////////
			if (count($cumulativeMindays) >0)
				{
				$result = array_unique($cumulativeMindays);
				sort($result);
				$r1=$result;
				$r2=$result;
				$lowest=array_shift($r1);
				$highest=array_pop($r2);
				if ($this->tariffModel == "1")
					{
					if ($this->cfg_minimuminterval <= $lowest)
						$this->mininterval=$lowest;
					else
						$this->mininterval=$this->cfg_minimuminterval;
					}
				else
					{
					if ($this->cfg_minimuminterval <= $highest)
						$this->mininterval=$highest;
					else
						$this->mininterval=$this->cfg_minimuminterval;
					}
				}
			else
				$this->mininterval=$this->cfg_minimuminterval;
			}
		else
			$this->mininterval=$this->cfg_minimuminterval;
		$this->setErrorLog("setMinInterval::Minimum interval is set to ".$this->mininterval);
		}

	/**
	#
	 * Limits the number of rooms that can be displayed if the config option returnRoomsLimit is set to greater than 0
	#
	 */
	function limitRoomsList($roomAndTariffArray)
		{
		if ($this->booker_class == "100")
			return $roomAndTariffArray;
		$returnRoomsLimit=(int)$this->cfg_returnRoomsLimit;
		$tmpArray=array();
		$tariffsArray=array();
		foreach ($roomAndTariffArray as $rt)
			{
			$roomuid=$rt[0];
			$tariffuid=$rt[1];
			$tariffsArray[$tariffuid][]=$roomuid;
			}

		foreach ($tariffsArray as $key=>$val)
			{
			$tariffuid=$key;
			
			for ($i=0;$i<$returnRoomsLimit;$i++)
				{
				$roomuid=@$val[$i];
				if (isset($val[$i]) )
					$tmpArray[]=array($roomuid,$tariffuid);
				}
			}
		return $tmpArray;
		}

	/**
	#
	 * Generates the overlib rooms list and returns a string for display in the booking form
	#
	 */
	function generateRoomsList($roomAndTariffArray)
		{
		$return_output='<div id="roombuttoncontainer2"><div id="roombutton"><table class="bformleftcol" valign="top" width="100%">';
		if ((int)$this->cfg_returnRoomsLimit > 0 )
			{
			$this->setErrorLog("generateRoomsList:: Limiting rooms list ");
			$roomAndTariffArray=$this->limitRoomsList($roomAndTariffArray);
			}
		$this->setErrorLog("generateRoomsList::Generating rooms list");
		$return_output .= $this->makeTariffHeaders();
		
		if ($this->checkArrivalDate($this->arrivalDate) )
			{
			if (count($roomAndTariffArray)>0 )
				{
				$roomDeets=array();
				$roomUidArray=array();
				$tariffUidArray=array();
				$counter=0;
				for ($i=0;$i<count($roomAndTariffArray);$i++)
					{
					$roomuid=$roomAndTariffArray[$i][0];
					$this->setErrorLog("generateRoomsList::Room uid".$roomuid);
					$tariffuid=$roomAndTariffArray[$i][1];
					$result=$this->makeRoomTariffDetails($roomuid,$tariffuid);
					if ($this->cfg_singleRoomProperty == "0" )
						{
						$roomDeets=array();
						$roomTariffOutputId=$result['requestedRoom'];
						$roomTariffOutputText=$result['roomandtariffinfo'];
						$roomUidArray[]=$roomuid;
						$tariffUidArray[]=$tariffuid;
						$roomDeets[] = $this->makeRoomOverlibdata( $roomuid,$tariffuid ,$roomTariffOutputId,$roomTariffOutputText);
						foreach ($roomDeets as $rm)
							{
							$return_output .= jr_gettext('_JOMRES_BOOKITNOW',_JOMRES_BOOKITNOW,false,false).$rm;
							}
						}
					else
						{
						$return_output=jr_gettext('_JOMRES_SRP_WEHAVEVACANCIES',_JOMRES_SRP_WEHAVEVACANCIES,false,false).'<font color="white">~</font><div id="availRooms" class="roomslist"></div>';
						$this->addToSelectedRooms($result['requestedRoom']);
						}
					$counter++;
					}
				if ($this->cfg_singleRoomProperty == "0" )
					$return_output .='</table></div></div>';
				}
			else
				{
				$this->setErrorLog("<b>generateRoomsList:: roomAndTariffArray is empty: </b>");
				if ($this->cfg_singleRoomProperty == "0" )
					{
					if (count($roomAndTariffArray)==0 && count($this->requestedRoom)==0 )
						$return_output='<div class="roomslist_noroomsselected">'.jr_gettext('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE',_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE."</div>");
					else
						$return_output="";
					}
				else
					$return_output='<div>'.jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES',_JOMRES_SRP_WEHAVENOVACANCIES,false,false).'<font color="white">~</font><div></div id="availRooms" class="roomslist"></div>';
				}
			}
		$this->setErrorLog("generateRoomsList::Returning rooms list");
		return $return_output;
		}


	/**
	#
	 * Find out if this tariff has already been selected
	#
	 */
	function isAlreadyASelectedOption($roomTariffOutputId)
		{
		if (!empty($this->requestedRoom) )
			{
			$currentUidsArray=explode(",",$this->requestedRoom );
			foreach ($currentUidsArray as $room_tariff)
				{
				if ($roomTariffOutputId==$room_tariff)
					return true;
				}
			return false;
			}
		else
			return false;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Making the room and tariff output
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Receives the room and tariff uid. Constructs the room and tariff output depending on configuration settings.
	 @see generateRoomsList
	#
	 */
	function makeRoomTariffDetails($roomuid,$tariffuid)
		{
		global $jomresConfig_live_site;
		if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$this->property_uid.'_room_'.$roomuid.'.jpg' ) )
			$this->roomImagePath=JOMRES_IMAGELOCATION_RELPATH.$this->property_uid.'_room_'.$roomuid.'.jpg';
		else
			$this->roomImagePath=$jomresConfig_live_site."/jomres/images/noimage.gif";
		$room_number=$this->allPropertyRooms[$roomuid]['room_number'];
		$room_name=$this->allPropertyRooms[$roomuid]['room_name'];
		$tariffTitle=$this->allPropertyTariffs[$tariffuid]['rate_title'];
		$roomTariffOutputId=$roomuid."^".$tariffuid;
		$roomTariffOutputText="";

		$classId=$this->allPropertyRooms[$roomuid]['room_classes_uid'];

		$this->typeImage =$this->allRoomClasses[$classId]['image'];

		//if ($this->cfg_bookingform_roomlist_showroomno ==  "1")
		//	$roomTariffOutputText.="<img src=\"".$typeImage."\" />";

		return array('requestedRoom'=>$roomTariffOutputId, 'roomandtariffinfo'=>$roomTariffOutputText);
		}

	/**
	#
	 * Make the overlib data for the room & tariff. Returns a string.
	#
	 */
	function makeRoomOverlibdata($roomUid,$tariffUid,$roomTariffOutputId,$roomTariffOutputText,$removing=false)
		{
		
		$tariffStuff=$this->GetTariffDetails($tariffUid);
		$roomStuff=$this->GetRoomDetails($roomUid);
		if (!$removing)
			$caption=sanitiseOverlibOutput(jr_gettext('_JOMRES_AJAXFORM_CLICKHERECAPTION',_JOMRES_AJAXFORM_CLICKHERECAPTION,false,false));
		else
			$caption=sanitiseOverlibOutput(jr_gettext('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE',_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE,false,false));

		/*
		$tariffText="";
		
		$roomheader="";
		$roomheader.="<b>".$roomStuff['HEADER_ROOMTYPE']."&nbsp;".$roomStuff['ROOMTYPE']."</b>";

		if ($this->cfg_bookingform_overlib_tariff_title_show  =="1")
			$tariffText.="<b>".$tariffStuff['HTITLE']."</b><br/>".$tariffStuff['TITLE']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_desc_show =="1")
			$tariffText.="<b>".$tariffStuff['HDESC']."</b><br/>".$tariffStuff['DESC']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_rate_show =="1" && $this->tariffModel == "1" )
			$tariffText.="<b>".$tariffStuff['HRATEPERNIGHT']."</b><br/>".$this->cfg_currency.$tariffStuff['RATEPERNIGHT']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_starts_show =="1")
			$tariffText.="<b>".$tariffStuff['HSTARTS']."</b><br/>".$tariffStuff['VALIDFROM']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_ends_show =="1")
			$tariffText.="<b>".$tariffStuff['HENDS']."</b><br/>".$tariffStuff['VALIDTO']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_mindays_show =="1")
			$tariffText.="<b>".$tariffStuff['HMINDAYS']."</b><br/>".$tariffStuff['MINDAYS']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_maxdays_show =="1")
			$tariffText.="<b>".$tariffStuff['HMAXDAYS']."</b><br/>".$tariffStuff['MAXDAYS']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_minpeeps_show =="1")
			$tariffText.="<b>".$tariffStuff['HMINPEEPS']."</b><br/>".$tariffStuff['MINPEOPLE']."<br/>";
		if ($this->cfg_bookingform_overlib_tariff_maxpeeps_show =="1")
			$tariffText.="<b>".$tariffStuff['HMAXPEEPS']."</b><br/>".$tariffStuff['MAXPEOPLE']."<br/>";
		$tariffText=str_replace("'","&acute;",$tariffText);
		$roomText="";
		if ($this->cfg_bookingform_overlib_room_number_show =="1")
			$roomText.="<b>".$roomStuff['HEADER_ROOMNUMBER']."</b><br/>".$roomStuff['ROOMNUMBER']."<br/>";
		if ($this->cfg_bookingform_overlib_room_name_show  =="1")
			$roomText.="<b>".$roomStuff['HEADER_ROOMNAME']."</b><br/>".$roomStuff['ROOMNAME']."<br/>";
		if ($this->cfg_bookingform_overlib_room_type_show =="1")
			$roomText.="<b>".$roomStuff['HEADER_ROOMTYPE']."</b><br/>".$roomStuff['ROOMTYPE']."<br/>";
		if ($this->cfg_bookingform_overlib_room_smoking_show =="1")
			$roomText.="<b>".$roomStuff['HEADER_SMOKING']."</b><br/>".$roomStuff['SMOKING']."<br/>";
		if ($this->cfg_bookingform_overlib_room_disabledaccess_show =="1")
			$roomText.="<b>".$roomStuff['HEADER_DISABLEDACCESS']."</b><br/>".$roomStuff['DISABLEDACCESS']."<br/>";
		if ($this->cfg_bookingform_overlib_room_floor_show =="1")
			$roomText.="<b>".$roomStuff['HEADER_ROOMFLOOR']."</b><br/>".$roomStuff['ROOMFLOOR']."<br/>";
		if ($this->cfg_bookingform_overlib_room_maxpeople_show =="1")
			$roomText.="<b>".$roomStuff['HEADER_MAXPEOPLE']."</b><br/>".$roomStuff['MAXPEOPLE']."<br/>";
		if ($this->cfg_bookingform_overlib_room_features_show =="1")
			$roomText.="<b>".$roomStuff['HEADER_FEATURES']."</b><br/>".$roomStuff['FEATURES']."<br/>";
		$roomText=str_replace("'","&acute;",$roomText);
		if (!isset($this->cfg_showRoomImageInBookingFormOverlib))
			$this->cfg_showRoomImageInBookingFormOverlib = "1";

		if ($this->cfg_showRoomImageInBookingFormOverlib == "1" )
			$data="<table><tr><td colspan=2><center><img src=".$this->roomImagePath." width=100 height=100 border=1 ></center></td></tr><tr><td colspan=2><center>$roomheader</center></td></tr><tr><td>$roomText</td><td>$tariffText</td></tr></table>";
		else
			$data="<table><tr><td>$roomText</td><td>$tariffText</td></tr></table>";
		*/

		//$overlib='<a href="javascript:void(0);" onmouseover="return overlib(\'&nbsp\', CAPTION, \''.$caption.'\', WIDTH, 300, ABOVE, RIGHT );" onmouseout="return nd(0);"  onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );return nd(0);">'.$roomTariffOutputText.'</a>'.$data.'<br/>';

		$currfmt = new jomres_currency_format();
		
		if ($this->tariffModel == "2")
			$tariffStuff['RATEPERNIGHT']=$this->estimate_AverageRate($roomUid,$tariffUid);

		if ($roomStuff['DISABLEDACCESS'] == 1)
			$disabledAccess= jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES);
		else
			$disabledAccess=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO) ;
			
		
		$room_imagetd="";
		if ($this->cfg_showRoomImageInBookingFormOverlib)
			$room_imagetd='<td><img src="'.$this->roomImagePath.'" height="30" width="30" /></td>';

		$room_imagetypetd="";
		if ($this->cfg_showRoomTypeImageInBookingForm)
			$room_imagetypetd='<td><img src="'.$this->typeImage.'" height="30" width="30" /></td>';
		
		//$overlib='<tr onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );">   // Disabled because it causes the rooms list to load twice (thereby making the room deselect itself)
		$overlib='<tr>';

		
		$overlib.='<td><a href="javascript:void(0);" onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );	">'.$caption.'</a></td>';
		if ($this->cfg_bookingform_roomlist_showroomno == "1")
			$overlib.='<td><a href="javascript:void(0);" onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );	">'.$roomStuff['ROOMNUMBER'].'</a></td>';
		$overlib.=$room_imagetd;
		$overlib.=$room_imagetypetd;
		if ($this->cfg_bookingform_roomlist_showroomname == "1")
			$overlib.='<td><a href="javascript:void(0);" onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );	">'.$roomStuff['ROOMNAME'].'</a></td>';
		$overlib.='<td><a href="javascript:void(0);" onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );	">'.$roomStuff['ROOMTYPE'].'</a></td>';
		$overlib.='<td><a href="javascript:void(0);" onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );	">'.$tariffStuff['TITLE'].'</a></td>';
		$overlib.='<td>'.$this->cfg_currency.$currfmt->get_formatted($tariffStuff['RATEPERNIGHT']).'</td>';
		if ($this->cfg_bookingform_roomlist_showdisabled == "1")
			$overlib.='<td><a href="javascript:void(0);" onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );	">'.$roomStuff['DISABLEDACCESS'].'</a></td>';
		if ($this->cfg_bookingform_roomlist_showmaxpeople == "1")
			$overlib.='<td><a href="javascript:void(0);" onClick="getResponse_rooms(\'requestedRoom\',\''.$roomTariffOutputId.'\' );	">'.$roomStuff['MAXPEOPLE'].'</a></td>';
		$overlib.='</tr>';

		return $overlib;
		}

	/**
	#
	 * Returns details of a given room according to the passed room id
	#
	 */
	function GetRoomDetails($roomUid)
		{
		//$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,room_disabled_access,max_people,smoking  FROM #__jomres_rooms WHERE  room_uid  = '$roomUid'";
		//$room=doSelectSql($query,2);
		$room=$this->allPropertyRooms[$roomUid];

		$room_classes_uid=$room['room_classes_uid'];
		$room_features_uid=$room['room_features_uid'];
		$room_disabled_access=$room['room_disabled_access'];
		$smoking=$room['smoking'];
		$classAbbv =$this->sanitiseOutput(jr_gettext(_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION.$room_classes_uid,$this->allRoomClasses[$room_classes_uid]['room_class_abbv'],false,false));

		if ($room_disabled_access == 1)
			$disabledAccess=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,false,false) );
		else
			$disabledAccess=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,false,false) ) ;
		if ($smoking == 1)
			$smoking=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,false,false) );
		else
			$smoking=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,false,false) );
		$roomFeatureUidsArray=explode(",",$room_features_uid);
		if ($roomFeatureUidsArray)
			{
			$roomFeatureDescriptions="";
			foreach ($roomFeatureUidsArray as $featureUid)
				{
				//$requestedFeature=$featureUid;
				//$query="SELECT feature_description FROM #__jomres_room_features WHERE room_features_uid = '$featureUid'";
				//$desc =doSelectSql($query,1);
				$desc=$this->allFeatureDetails[$featureUid]['feature_description'];
				$roomFeatureDescriptions.=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATUREDESC'.$featureUid, $desc,false,false ) )."<br/>";
				}
			}

		$roomRow['HEADER_ROOMNUMBER']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER,false,false) );
		$roomRow['HEADER_ROOMTYPE']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE,false,false) );
		$roomRow['HEADER_SMOKING']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING,false,false) );
		$roomRow['HEADER_ROOMNAME']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME,false,false) );
		$roomRow['HEADER_ROOMFLOOR']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR,false,false) );
		$roomRow['HEADER_DISABLEDACCESS']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS,false,false) );
		$roomRow['HEADER_MAXPEOPLE']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE,false,false) );
		$roomRow['HEADER_FEATURES']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST',_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST,false,false) );

		$roomRow['ROOMNUMBER']= $this->sanitiseOutput(stripslashes($room['room_number']) );
		$roomRow['ROOMTYPE']= $classAbbv;
		//$roomRow['ROOMTYPEIMAGE']= $typeImage;
		$roomRow['SMOKING']= $smoking;
		$roomRow['ROOMNAME']= $this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME'.$roomUid,stripslashes($room['room_name']),false,false ) );
		$roomRow['ROOMFLOOR']= $this->sanitiseOutput(stripslashes($room['room_floor']) );
		$roomRow['DISABLEDACCESS']= $disabledAccess;
		$roomRow['MAXPEOPLE']= $this->sanitiseOutput($room['max_people']);
		$roomRow['FEATURES']= $roomFeatureDescriptions;

		return $roomRow;
		}

	/**
	#
	 * Returns details of a given tariff according to the passed tariff id
	#
	 */
	function GetTariffDetails($tariffUid)
		{
		/*
		$query="SELECT `rate_title`,`rate_description`,`validfrom`,`validto`,
			`roomrateperday`,`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
			`ignore_pppn`,`allow_ph`,`allow_we`
			FROM #__jomres_rates WHERE rates_uid = '$tariffUid'";
		$tariff =doSelectSql($query,2);
		*/
		$tariff =$this->allPropertyTariffs[$tariffUid];

		//$validfrom=$tariff['validfrom'];
		//$validto=$tariff['validto'];

		$output['HTITLE']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE,false,false));
	 	$output['HDESC']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_DESC',_JOMRES_FRONT_TARIFFS_DESC,false,false));
	 	$output['HSTARTS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS',_JOMRES_FRONT_TARIFFS_STARTS,false,false));
	 	$output['HENDS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS',_JOMRES_FRONT_TARIFFS_ENDS,false,false));
	 	$output['HMINDAYS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS',_JOMRES_FRONT_TARIFFS_MINDAYS,false,false));
	 	$output['HMAXDAYS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS',_JOMRES_FRONT_TARIFFS_MAXDAYS,false,false));
	 	$output['HMINPEEPS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS',_JOMRES_FRONT_TARIFFS_MINPEEPS,false,false));
	 	$output['HMAXPEEPS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS',_JOMRES_FRONT_TARIFFS_MAXPEEPS,false,false));
		if ($this->cfg_tariffChargesStoredWeeklyYesNo!="1")
			$output['HRATEPERNIGHT']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY,false,false) );
		else
			$output['HRATEPERNIGHT']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK,false,false) );
		$output['TITLE']=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFTITLE'.$tariffUid,stripslashes($tariff['rate_title']),false,false ) );
		$output['DESC']=$this->sanitiseOutput(jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFDESC'.$tariffUid,stripslashes($tariff['rate_description']),false,false ) );
   		$output['VALIDFROM']=$this->outputDate($tariff['validfrom']);
   		$output['VALIDTO']=$this->outputDate($tariff['validto']);
	   	$output['MINDAYS']=$this->sanitiseOutput($tariff['mindays']);
	   	$output['MAXDAYS']=$this->sanitiseOutput($tariff['maxdays']);
	   	$output['MINPEOPLE']=$this->sanitiseOutput($tariff['minpeople']);
	   	$output['MAXPEOPLE']=$this->sanitiseOutput($tariff['maxpeople']);
		$output['RATEPERNIGHT']=$this->sanitiseOutput($tariff['roomrateperday']);

	   	if (empty($this->cfg_ratemultiplier) )
			$this->cfg_ratemultiplier=1;
		else
			$this->cfg_ratemultiplier+=0;
		$currfmt = new jomres_currency_format();
		if ($tariff['ignore_pppn'] || $this->cfg_perPersonPerNight=="0" )
			$output['ROOMRATEPERDAY']=$this->cfg_currency.$currfmt->get_formatted(($this->cfg_ratemultiplier*$tariff['roomrateperday']))." ".$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PN',_JOMRES_FRONT_TARIFFS_PN,false,false) );
		else
			$output['ROOMRATEPERDAY']=$this->cfg_currency.$currfmt->get_formatted(($this->cfg_ratemultiplier*$tariff['roomrateperday']))." ".$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN',_JOMRES_FRONT_TARIFFS_PPPN,false,false) );

		if ($tariff['allow_we']=="0")
			$output['NOTWEEKENDS']=jr_gettext('_JOMRES_FRONT_TARIFFS_NOTWEEKEND',_JOMRES_FRONT_TARIFFS_NOTWEEKEND,false,false);
		return $output;
		}

		
	/**
	#
	 * We will estimate the averate rate over the booking period using this modified and cut down version of the average calculation function
	#
	 */
	function estimate_AverageRate($roomUid,$tariffUid)
		{
		global $mrConfig,$tmpBookingHandler;
		$this->setErrorLog("estimate_AverageRate:: Started");
		$dateRangeArray=explode(",",$this->dateRangeString);
		$numberOfGuestTypes=$this->getVariantsOfType("guesttype");
		$total=0.00;
		$stayDays=$this->stayDays;

		$datesTilBooking=$this->findDateRangeForDates($this->today,$this->arrivalDate);
		$roomsOfType=array();
		$roomsOfType[$room_type]=1;
		$tariffsArray = array($tariffUid);
		$gor=genericOr($tariffsArray,'tariff_id');
		$query = "SELECT tarifftype_id FROM #__jomcomp_tarifftype_rate_xref WHERE ".$gor;
		$tarifftypeids = doSelectSql($query);

		if (count($tarifftypeids)>0)
			{
			foreach ($tarifftypeids as $t)
				{
				$query="SELECT tariff_id FROM #__jomcomp_tarifftype_rate_xref WHERE tarifftype_id ='".$t->tarifftype_id."'";
				$allTariffIds = doSelectSql($query);
				$xreffed=array();
				foreach ($allTariffIds as $xref)
					{
					$xreffed[]=$xref->tariff_id;
					}
				$gor=genericOr($xreffed,'rates_uid');
				$query="SELECT `rates_uid`,`validfrom` ,`validto`,`mindays`,`maxdays`,minpeople,maxpeople,`roomrateperday`,roomclass_uid FROM #__jomres_rates WHERE ".$gor;
				$rateList = doSelectSql($query);
				
				foreach ($rateList as $rate)
					{
					$date_elements  = explode("/",$rate->validfrom);
					$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					$date_elements  = explode("/",$rate->validto);
					$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					foreach ($dateRangeArray as $date )
						{
						$pass=false;
						$date_elements  = explode("/",$date);
						$unixDay = mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

						if (count($numberOfGuestTypes) >0)
							{
							if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) && ($this->total_in_party >= $rate->minpeople &&  $this->total_in_party <= $rate->maxpeople ) )
								$pass=true;
							}
						else
							{
							if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) )
								$pass=true;
							}
						
						if($pass)
							{
							$tmp_rate=$rate->roomrateperday;
							$total+=$tmp_rate ;
							}
						else
							$this->setErrorLog("estimate_AverageRate::Tariff id failed to pass checks ".$total);
						}
					}
				}
			}
		else
			{
			$dateRangeArray=explode(",",$this->dateRangeString);
			$rclass=$this->allPropertyRooms[$roomUid]['room_classes_uid'];
			$rateList = $this->getTariffsForRoomClass($rclass);
			
			foreach ($rateList as $rate)
				{
				$date_elements  = explode("/",$rate->validfrom);
				$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
				$date_elements  = explode("/",$rate->validto);
				$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
				foreach ($dateRangeArray as $date )
					{
					$pass=false;
					$this->setErrorLog("estimate_AverageRate::Searching date ".$date.' on current tariff uid: '.$rate->rates_uid);
					$date_elements  = explode("/",$date);
					$unixDay = mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					if (count($numberOfGuestTypes) >0)
						{
						if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) && ($this->total_in_party >= $rate->minpeople &&  $this->total_in_party <= $rate->maxpeople ) )
							$pass=true;
						}
					else
						{
						if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) )
							$pass=true;
						}
					if($pass)
						{
						$total+=$rate->roomrateperday ;
						}
					}
				}
			}
			
		$rpn=($total)/$stayDays;
		if ($this->cfg_tariffChargesStoredWeeklyYesNo=="1")
			{
			$rpn=$rpn/7;
			}
		return $rpn;
		}
		
	function makeTariffHeaders()
		{
		$return_output="";
		if ($this->cfg_singleRoomProperty == "1" )
			return $return_output;
			
		$tariffStuff['HTITLE']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE,false,false));
	 	$tariffStuff['HDESC']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_DESC',_JOMRES_FRONT_TARIFFS_DESC,false,false));
	 	$tariffStuff['HSTARTS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS',_JOMRES_FRONT_TARIFFS_STARTS,false,false));
	 	$tariffStuff['HENDS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS',_JOMRES_FRONT_TARIFFS_ENDS,false,false));
	 	$tariffStuff['HMINDAYS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS',_JOMRES_FRONT_TARIFFS_MINDAYS,false,false));
	 	$tariffStuff['HMAXDAYS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS',_JOMRES_FRONT_TARIFFS_MAXDAYS,false,false));
	 	$tariffStuff['HMINPEEPS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS',_JOMRES_FRONT_TARIFFS_MINPEEPS,false,false));
	 	$tariffStuff['HMAXPEEPS']=$this->sanitiseOutput(jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS',_JOMRES_FRONT_TARIFFS_MAXPEEPS,false,false));
		if ($this->cfg_tariffChargesStoredWeeklyYesNo!="1")
			$tariffStuff['HRATEPERNIGHT']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY,false,false) );
		else
			$tariffStuff['HRATEPERNIGHT']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK,false,false) );
		
		$roomRow['HEADER_ROOMNUMBER']=$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER,false,false) );
		$roomRow['HEADER_ROOMTYPE']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE,false,false) );
		$roomRow['HEADER_SMOKING']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING',_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING,false,false) );
		$roomRow['HEADER_ROOMNAME']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME',_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME,false,false) );
		$roomRow['HEADER_ROOMFLOOR']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR,false,false) );
		$roomRow['HEADER_DISABLEDACCESS']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS',_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS,false,false) );
		$roomRow['HEADER_MAXPEOPLE']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE',_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE,false,false) );
		$roomRow['HEADER_FEATURES']= $this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST',_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST,false,false) );

		$room_imageTH="";
		if ($this->cfg_showRoomImageInBookingFormOverlib)
			$room_imageTH="<th>".$this->sanitiseOutput(jr_gettext('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE',_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE,false,false) )."</th>";
		$room_imagetypeTH="";
		if ($this->cfg_showRoomTypeImageInBookingForm)
			$room_imagetypeTH="<th>".$this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK',_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK,false,false) )."</th>";
			
		$return_output='<tr>';
			$return_output.='<th>&nbsp;</th>';
			if ($this->cfg_bookingform_roomlist_showroomno == "1")
				$return_output.='<th>'.$roomRow['HEADER_ROOMNUMBER'].'</th>';
			$return_output.=''.$room_imageTH.'';
			$return_output.=''.$room_imagetypeTH.'';
			if ($this->cfg_bookingform_roomlist_showroomname == "1")
				$return_output.='<th>'.$roomRow['HEADER_ROOMNAME'].'</th>';
			$return_output.='<th>'.$roomRow['HEADER_ROOMTYPE'].'</th>';
			$return_output.='<th>'.$tariffStuff['HTITLE'].'</th>';
			$return_output.='<th>'.$tariffStuff['HRATEPERNIGHT'].'</th>';
			if ($this->cfg_bookingform_roomlist_showdisabled == "1")
				$return_output.='<th>'.$roomRow['HEADER_DISABLEDACCESS'].'</th>';
			if ($this->cfg_bookingform_roomlist_showmaxpeople == "1")
				$return_output.='<th>'.$roomRow['HEADER_MAXPEOPLE'].'</th>';
			$return_output.='</tr>';
		
		return $return_output;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Booking status monitoring
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Called in phase 3 of the ajax queries.
	 * Checks the state of the booking. If any of the checks fail the method setMonitoring is passed a message.
	 * If, at the end, the monitoringMessages array is empty then we know that it has passed all the tests and the booking is ready for confirmation. At that stage the ok_to_book flag is set to true
	#
	 */
	function monitorBookingStatus()
		{
		global $tmpBookingHandler;
		$amend_contract =  $tmpBookingHandler->getBookingFieldVal("amend_contract");

		// Let's see if the form is ready to be booked.
		
		if ($this->stayDays < $this->mininterval && !$amend_contract && $this->booker_class != "100")
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1',_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1,false,false)).' '.$this->mininterval.' '.$this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2',_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2).' '.$this->stayDays));
			}
		if (count($this->requestedRoom)==0 && $this->getSingleRoomPropertyStatus())
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES',_JOMRES_SRP_WEHAVENOVACANCIES,false,false)));
			}
		if (!$this->checkSmoking($this->smoking) )
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID',_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID,false,false)));
			}
		if (!$this->checkArrivalDate($this->arrivalDate) )
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID',_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID,false,false)));
			}
		if (!$this->checkDepartureDate($this->departureDate) )
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID',_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID,false,false)));
			}

		$numberOfGuestTypes=$this->getVariantsOfType("guesttype");
		foreach ($numberOfGuestTypes as $r)
			{
			if (!$this->checkGuestVariantIdAndQty($r['id'],$r['qty']) )
				{
				$this->resetPricingOutput=true;
				$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT',_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT,false,false)));
				}
			}
		if ($this->total_in_party <1 && count($numberOfGuestTypes)>0 )
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS',_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS,false,false)));
			}
		if ( count($numberOfGuestTypes) > 0 && !$this->tariffsCanHostTotalInParty() )
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS',_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS,false,false)));
			}
		if ( $this->total_in_party < count($this->requestedRoom ) && count($numberOfGuestTypes)>0  )
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS',_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS,false,false)));
			}
		//if ($this->total_in_party > $this->beds_available && count($result)>0 && count($this->requestedRoom ) > 0)
		if ($this->total_in_party > $this->beds_available && count($numberOfGuestTypes)>0 )
			{
			$this->resetPricingOutput=true;
			if ($this->cfg_singleRoomProperty != "1")
				$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS',_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS,false,false)));
			else
				$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_SRP_WEHAVENOVACANCIES',_JOMRES_SRP_WEHAVENOVACANCIES,false,false)));
			}
		if ( count($numberOfGuestTypes) > 0 && count($this->requestedRoom ) > 0 && !$this->selectedRoomsCanHostTotalInParty() )
			{
			$this->resetPricingOutput=true;
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS',_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS,false,false)));
			}
		if (count($this->requestedRoom ) <1 )
			{
			$this->resetPricingOutput=true;
			if ($this->cfg_singleRoomProperty != "1")
				$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM',_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM,false,false)));
			else
				$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE',_JOMRES_COM_MR_QUICKRES_STEP4_TITLE,false,false)));
			}

		/*
		if (empty($this->firstname) && $this->cfg_bookingform_requiredfields_name=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME,false,false)));
		if (empty($this->surname) && $this->cfg_bookingform_requiredfields_surname=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME,false,false)));
		if (empty($this->house) && $this->cfg_bookingform_requiredfields_houseno=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO,false,false)));
		if (empty($this->street) && $this->cfg_bookingform_requiredfields_street=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET,false,false)));
		if (empty($this->town) && $this->cfg_bookingform_requiredfields_town=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN,false,false)));
		if (empty($this->region) && $this->cfg_bookingform_requiredfields_region=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION,false,false)));
		if (empty($this->postcode) && $this->cfg_bookingform_requiredfields_postcode=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE,false,false)));
		if (empty($this->country) && $this->cfg_bookingform_requiredfields_country=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY,false,false)));
		if (empty($this->tel_landline) && $this->cfg_bookingform_requiredfields_tel =="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE,false,false)));
		if (empty($this->tel_mobile) && $this->cfg_bookingform_requiredfields_mobile=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE,false,false)));
		if (empty($this->email) && $this->cfg_bookingform_requiredfields_email=="1" )
			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL,false,false)));
		else
			{
			if (!$this->checkEmail($this->email)&& $this->cfg_bookingform_requiredfields_email=="1" )
				$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID',_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID,false,false)));
			// Code disabled as many emai servers will not respond with positive, but left in place in the event that you may wish to re-enable it.
			//else
			//	{
			//	if (function_exists('getmxrr' )&& $this->cfg_bookingform_requiredfields_email=="1" )
			//		{
			//		list($username,$domain) = split("@",$this->email);
			//		if (!getmxrr($domain,$mxrecords) && $this->cfg_bookingform_requiredfields_email=="1")
			//			{
			//			$this->setMonitoring($this->sanitiseOutput(jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL',_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL,false,false)));
			//			}
			//		}
			//	}
			}
		*/

		if ( $this->getMonitoringNumberOfMessages() == 0)
			$this->ok_to_book				= true;
		}


	function outputZeroPrices()
		{
		$currfmt = new jomres_currency_format();
		if ($this->getGuestVariantCount() > 0)
			echo '; document.getElementById("totalinparty").innerHTML = "'.$this->getTotalInParty().'" ; fadeIn("totalinparty",1000); ';
		echo '; document.getElementById("staydays").innerHTML = "'.$this->getStayDays().'" ; fadeIn("staydays",1000); ';
		if ($this->cfg_tariffChargesStoredWeeklyYesNo=="0")
			echo '; document.getElementById("roompernight").innerHTML = "'.$this->getCurrencySymbol().$currfmt->get_formatted("0.00").'" ; fadeIn("roompernight",1000);';
		echo '; document.getElementById("roomtotal").innerHTML = "'.$this->getCurrencySymbol().$currfmt->get_formatted("0.00").'" ; fadeIn("roomtotal",1000);';
		if ($this->cfg_showExtras=="1")
			echo '; document.getElementById("extrastotal").innerHTML = "'.$this->getCurrencySymbol().$currfmt->get_formatted("0.00").'" ; fadeIn("extrastotal",1000);';
		if ($this->cfg_euroTaxYesNo =="1" || $this->cfg_roomTaxYesNo =="1" )
			echo '; document.getElementById("taxtotal").innerHTML = "'.$this->getCurrencySymbol().$currfmt->get_formatted("0.00").'" ; fadeIn("taxtotal",1000);';
		echo '; document.getElementById("grandtotal").innerHTML = "'.$this->getCurrencySymbol().$currfmt->get_formatted("0.00").'" ; fadeIn("grandtotal",1000);';
		if ($this->cfg_showDeposit=="1")
			echo '; document.getElementById("deposit").innerHTML = "'.$this->getCurrencySymbol().$currfmt->get_formatted("0.00").'" ; fadeIn("deposit",1000);';
		echo '; document.getElementById("discount").innerHTML = "" ; fadeIn("discount",1000);';
		echo '; document.getElementById("coupon_discount_value").innerHTML = "" ; fadeIn("coupon_discount_value",1000);';
		}
	/**
	#
	 * Sets the ok_to_book flag. Default is false.
	#
	 */
	function setOkToBook($val=false)
		{
		$this->ok_to_book=$val;
		}

	/**
	#
	 * Returns the value of the ok_to_book flag. Used by the handlereq script
	#
	 */
	function getOkToBook()
		{
		return $this->ok_to_book;
		}

	/**
	#
	 * Inserts the message into the monitoringMessages array
	#
	 */
	function setMonitoring($message)
		{
		if (!isset($message) || empty($message) )
			$message="Empty message!";
		$this->setErrorLog("setMonitoring::Monitoring message ".$message );
		$this->monitoringMessages[]=$message;
		}

	/**
	#
	 * Returns the number of messages in the monitoringMessages array
	#
	 */
	function getMonitoringNumberOfMessages()
		{
		return count($this->monitoringMessages);
		}

	/**
	#
	 * Get the first message in the monitoringMessages array. This is the first test that the monitoring method failed the booking on.
	#
	 */
	function monitorGetFirstMessage()
		{
		return $this->monitoringMessages[0];
		}

	/**
	#
	 * Return all the messages as a string.
	#
	 */
	function monitorGetAllMessages()
		{
		if (count($this->monitoringMessages) > 0 )
			{
			$messageString="";
			foreach ($this->monitoringMessages as $message)
				{
				$messageString.=htmlentities($message)."<br/>";
				}
			return $this->error;
			}
		}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Other monitoring functions
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Check that the selected rooms can accomodate the total in the party
	#
	 */
	function selectedRoomsCanHostTotalInParty()
		{
		$roomTotalBeds=0;
		foreach ($this->requestedRoom as $rm)
			{
			$room=explode("^",$rm);
			$rmuid=$room[0];
			$query="SELECT  max_people FROM #__jomres_rooms WHERE room_uid = '$rmuid'";
			$max =doSelectSql($query,1);
			$roomTotalBeds+=$max;
			}
		if ($roomTotalBeds < $this->total_in_party )
			return false;
		else
			return true;
		}

	/**
	#
	 * Check that the selected tariff can accomodate the total in the party
	#
	 */
	function tariffsCanHostTotalInParty()
		{
		$query="SELECT maxpeople FROM #__jomres_rates WHERE property_uid = '$this->property_uid' ORDER by maxpeople desc LIMIT 1";
		$max = doSelectSql($query,1);
		if ($max < $this->total_in_party )
			return false;
		else
			return true;
		}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	//	Billing
	//
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/**
	#
	 * Set the variant values, Returns true or false
	#
	 */
	function setVariantValues()
		{
		if ($this->setGuestTypeVariantValues() )
			return true;
		else
			return false;
		}

	/**
	#
	* Calculate how much to charge per person
	 * Find the value of the selected guest types, as a variation of the basic room per night of all the selected rooms
	 * Eg. you have two rooms, one and $20 and one at $40, the basic value of the rooms is $30 per night.
	 * The guest values are calculated as a 'variation' from the basic room value.
	 * Whilst this calculation is done every time, the decision as to whether or not to apply this variation is made elsewhere.
	#
	 */
	function setGuestTypeVariantValues()
		{
		$result=$this->getVariantsOfType("guesttype");
		$this->setErrorLog("setGuestTypeVariantValues::Found variants of guesttype: ".count($result) );
		if (count($result) > 0 )
			{
			$ratePerNight=$this->rate_pernight;
			$this->setErrorLog("setGuestTypeVariantValues::Setting variant values");
			foreach ($result as $r)
				{
				$id=$r['id'];
				$qty=$r['qty'];
				$query="SELECT `is_percentage`,`posneg`,`variance` FROM `#__jomres_customertypes` where id = '$id' ";
				$gt=doSelectSql($query,2);
				if ($gt)
					{
					$variance=$gt['variance'];
					settype($variance,"float");
					if ($gt['is_percentage']=="0")
						{
						if ($gt['posneg'] =="1")
							$val=$ratePerNight+$variance;
						else
							$val=$ratePerNight-$variance;
						}
					else
						{
						if ($gt['posneg'] =="1")
							$val=( ($ratePerNight/100)*$variance ) + $ratePerNight;
						else
							$val=$ratePerNight-( ($ratePerNight/100)*$variance );
						}
					$this->setErrorLog("setGuestTypeVariantValues::Setting variant value ".$id. " to ".$val );
					$this->setVariant("guesttype",$id,$qty,$val);
					}
				else
					return false;
				}
			}
		else
			return true;
		return true;
		}

	/**
	#
	 * Calculates the value of the room charges per night
	 * If property is NOT set to charge Per Person Per Night then variances calculated in setGuestTypeVariantValues are ignored
	 * If property is set to charge Per Person Per Night and all tariffs in selection are set to Ignore PPPN then PPPN is ignored
	 * If property is set to charge Per Person Per Night and some tariffs in selection are set to Ignore PPPN then PPPN is calculated across the board because it's not possible to figure out how many people are in each room
	 * Sets $this->room_total to the total value of the rooms per night
	 * @see setGuestTypeVariantValues
	#
	 */
	function makeNightlyRoomCharges()
		{
		global $mrConfig;
		$this->setErrorLog("makeNightlyRoomCharges:: Started");
		$total=0.00;
		$result=$this->getVariantsOfType("guesttype");
		$this->allRoomsAreIgnorePPPN=true;
		foreach ($this->requestedRoom as $r)
			{
			$rm_idArr=explode("^",$r);
			//$rm_id=$rm_idArr[0];
			$tariff_id=$rm_idArr[1];
			//$query="SELECT ignore_pppn FROM #__jomres_rates WHERE rates_uid = '$tariff_id'";
			//$ignore_pppn=doSelectSql($query,1);
			$ignore_pppn=$this->allPropertyTariffs[$tariff_id]['ignore_pppn'];
			if ($ignore_pppn == "0" )
				$this->allRoomsAreIgnorePPPN=false;
			}
		if ($this->cfg_perPersonPerNight == "1" && $this->allRoomsAreIgnorePPPN)
			$this->setErrorLog("makeNightlyRoomCharges::Property is configured to charge Per Person Per Night, however all rooms have IGNORE PPPN set to yes, so rooms will be calculated per room, not per person. ");
		else
			{
			if ($this->cfg_perPersonPerNight == "1")
				$this->setErrorLog("makeNightlyRoomCharges::Property is configured to charge Per Person Per Night. One or more rooms are not set to Ignore PPN. All rooms will be calculated as per person per night as it is impossible for Jomres to ascertain how many people will be in each room.");
			}
		if (count($result) > 0 )
			{
			foreach ($result as $r)
				{
				if ($this->cfg_perPersonPerNight == "1" )
					{
					if ($this->allRoomsAreIgnorePPPN )
						$val=$this->rate_pernight;
					else
						$val=$r['qty']*$r['val'];
					}
				else
					{
					if ($r['qty'] != 0 )
						$val=$r['val'];
					else
						$val =0;
					}
				if ($this->cfg_perPersonPerNight == "1" && $this->allRoomsAreIgnorePPPN )
					$total=$val*count ($this->requestedRoom);
				else
					{
					if ($this->cfg_perPersonPerNight == "1")
						$total+=$val;
					else
						{
						$total=$this->rate_pernight;
						}
					}
				$this->setErrorLog("makeNightlyRoomCharges::Total: ".$total );
				}
			if ($this->cfg_perPersonPerNight == "1" )
				$this->room_total=($total*$this->stayDays) ;
			else
				$this->room_total=($total*$this->stayDays)*count ($this->requestedRoom);
			}
		else
			{
			if ( $mrConfig['tariffmode']=="2")
				$this->room_total=($this->rate_pernight*$this->stayDays);
			else
				$this->room_total=($this->rate_pernight*$this->stayDays)*count ($this->requestedRoom);
			}
			
			
			
		if ($this->coupon_code != "")
			{
			//$this->billing_grandtotal=($this->room_total+$this->extrasvalue+$this->tax+$this->single_person_suppliment);
			if ($this->coupon_details['is_percentage']=="1")
				{
				$this->coupon_discount_value = ($this->room_total/100)*(float)$this->coupon_details['amount'];
				$this->room_total=$this->room_total-$this->coupon_discount_value;
				}
			else
				{
				$this->coupon_discount_value = (float)$this->coupon_details['amount'];
				$this->room_total=$this->room_total-$this->coupon_discount_value;
				}
			$note = _JOMRES_AJAXFORM_COUPON_BOOKINGNOTE." ".$this->coupon_id." / ".$this->coupon_code." / "._JRPORTAL_COUPONS_AMOUNT." ".$this->coupon_discount_value." / ";
			foreach ($this->coupon_details as $k=>$v)
				{
				$note .= $k." - ".$v." :: ";
				}
			$this->addBookingNote("Coupon",$note);
			}
		else
			{
			$note =_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE." N/A ";
			$this->addBookingNote($note);
			}
		$this->setErrorLog("makeNightlyRoomCharges::Room total calculated as ".$this->room_total);
		$this->setErrorLog("makeNightlyRoomCharges:: Ended");
		return true;
		}

	/**
	#
	 * Calculates the total value of the booking.
	 * $this->room_total+$this->extrasvalue+$this->tax+$this->single_person_suppliment
	#
	 */
	 // $this->coupon_details = array('amount'=>$response['amount'],'is_percentage'=>$response['is_percentage'],'rooms_only'=>$response['rooms_only']);
			
	function calcTotals()
		{
		$this->setErrorLog("calcTotals:: Started");
		$this->billing_grandtotal=($this->room_total+$this->extrasvalue+$this->tax+$this->single_person_suppliment);
		$this->setErrorLog("calcTotals::Total: ".$this->billing_grandtotal );
		$this->contract_total=$this->billing_grandtotal;
		$this->setErrorLog("calcTotals:: Ended");
		}

	function calcExtras()
		{
		$extrasTotal=0.00;
		//$this->setErrorLog("calcExtras: Current extras: ".$this->extras);
		if (!empty($this->extras) )
			{
			$extrasArray=explode(",",$this->extras);
			foreach ($extrasArray as $extra)
				{
				if (!empty($extra) )
					{
					$this->setErrorLog("calcExtras: Getting data for extra: ".$extra);
					$query="SELECT price FROM #__jomres_extras WHERE uid = '$extra'";
					$thisPrice =doSelectSql($query,1);
					$query="SELECT `model`,`params` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '$extra'";
					$model=doSelectSql($query,2);
					$this->setErrorLog("calcExtras: Using model: ".$model['model']);
					$this->setErrorLog("calcExtras: Parameters: ".$model['params']);
					switch ($model['model'])
						{
						case '1': // Per week
							$numberOfWeeks=ceil($this->stayDays/7);
							$calc=$numberOfWeeks*$thisPrice;
						break;
						case '2': // per days
							$calc=$this->stayDays*$thisPrice;
						break;
						case '3': // per booking
							$calc=$thisPrice;
						break;
						case '4': // per person per booking
							$calc=$this->total_in_party*$thisPrice;
						break;
						case '5': // per person per day
							$calc=$this->total_in_party*$this->stayDays*$thisPrice;
						break;
						case '6': // per person per week
							$numberOfWeeks=ceil($this->stayDays/7);
							$calc=$this->total_in_party*$numberOfWeeks*$thisPrice;
						break;
						case '7': // per person per days min days
							$mindays=$model['params'];
							if ($this->stayDays < $mindays)
								$days=$mindays;
							else
								$days=$this->stayDays;
							$calc=$days*$thisPrice;
						break;
						case '8': // per days per room
							$calc=($this->stayDays*$thisPrice)*$this->numberOfCurrentlySelectedRooms();
						break;
						}
					$quantity=$this->extrasquantities[$extra];
					$extrasTotal=$extrasTotal+($quantity*$calc);
					$this->setErrorLog("calcExtras: Extras totals: ".$extrasTotal );
					}
				}
			}
		$this->extrasvalue=$extrasTotal;
		}

	/**
	#
	 * Calculates room &/or VAT
	#
	 */
	function calcTax()
		{
		$this->setErrorLog("calcTax:: Started");
		$totalTax=0.00;
		$totalBooking=$this->getRoomtotal();
		$extrasTotal=$this->getExtrasTotal();
		if ($this->cfg_roomTaxYesNo=="1")
			{
			$fixedRateAllDays=0;
			$percentageToAdd=0;
			$roomTaxFixedRate =$this->cfg_roomTaxFixed;
			$roomTaxPercentageRate =$this->cfg_roomTaxPercentage;
			if ($roomTaxPercentageRate!=0)
				{
				$percentageToAdd=($totalBooking/100)*$roomTaxPercentageRate;
				}
			if ($roomTaxFixedRate!=0)
				$fixedRateAllDays=$roomTaxFixedRate*$this->stayDays;
			$totalTax=$fixedRateAllDays+$percentageToAdd;
			}

		if ($this->cfg_euroTaxYesNo=="1")
			{
			$percentageToAdd=0;
			if ($this->cfg_euroTaxPercentage!=0)
				{
				$percentageToAdd=($totalBooking+$extrasTotal) *($this->cfg_euroTaxPercentage/100);
				}
			$totalTax=$percentageToAdd;
			}
		$this->tax=$totalTax;
		$this->setErrorLog("calcTax:: Ended");
		}

	/**
	#
	 * Discerns if single person suppliement applies, and if it does, how much should be charged
	#
	 */
	function calcSinglePersonSuppliment()
		{
		$totalBooking=$this->getRoomtotal();
		$result=$this->getVariantsOfType("guesttype");
		if ($this->cfg_singlePersonSuppliment=="1" && count($result) > 0 )
			{
			$this->singlePersonSupplimentCalculated = true;
			$this->single_person_suppliment=0.00;
			$totalBedsInBooking=0;					// The total beds in the booking
			$timesSPStoBeApplied=0;					// Times we need to multiple the SPS charge against the people numbers in the booking
			if ($this->cfg_supplimentChargeIsPercentage=="1" )// Per person, the single person charge across the whole stay period
				$SPSChargePerPerson=(($totalBooking/100)*$this->cfg_singlePersonSupplimentCost)*$this->stayDays;
			else
				$SPSChargePerPerson=$this->cfg_singlePersonSupplimentCost*$this->stayDays;
			foreach ($this->requestedRoom as $r)
				{
				$rm_idArr=explode("^",$r);
				$rm_id=$rm_idArr[0];
				$result=$this->allPropertyRooms[$rm_id]['max_people'];
				//$this->setErrorLog("calcSinglePersonSuppliment::Max people for room ".$rm_id." = ".$result );
				if ($result > 2)
					$result=2;
				$totalBedsInBooking=$totalBedsInBooking+$result;
				//$this->setErrorLog("calcSinglePersonSuppliment::totalBedsInBooking ".$totalBedsInBooking );
				}
			$divResult=	$totalBedsInBooking/$this->total_in_party;
			$this->setErrorLog("calcSinglePersonSuppliment::Division result ".$divResult );
			if ($divResult>1)
				{
				$timesSPStoBeApplied=$totalBedsInBooking-$this->total_in_party;
				$this->setErrorLog("calcSinglePersonSuppliment::Single person suppliment will be applied ".$timesSPStoBeApplied." times." );
				}
			$this->single_person_suppliment=$SPSChargePerPerson*$timesSPStoBeApplied;
			$this->setErrorLog("calcSinglePersonSuppliment::Single person suppliment charge: ".$this->single_person_suppliment );
			}
		else
			{
			$specificRoomsSuppliment = 0.00;
			foreach ($this->requestedRoom as $r)
				{
				$rm_idArr=explode("^",$r);
				$rm_id=$rm_idArr[0];
				$result=$this->allPropertyRooms[$rm_id]['max_people'];
				if ($result > 2)
					$result=2;
				if ( (float)$this->allPropertyRooms[$rm_id]['singleperson_suppliment'] > 0.00)
					$this->singlePersonSupplimentCalculated = true;
				$specificRoomsSuppliment =$specificRoomsSuppliment+((float)$this->allPropertyRooms[$rm_id]['singleperson_suppliment']*$this->stayDays);
				$totalBedsInBooking=$totalBedsInBooking+$result;
				}
			$divResult=	$totalBedsInBooking/$this->total_in_party;
			$this->setErrorLog("calcSinglePersonSuppliment::Division result ".$divResult );
			if ($divResult>1)
				{
				$this->single_person_suppliment=$specificRoomsSuppliment;
				$this->setErrorLog("calcSinglePersonSuppliment::Single person suppliment charge: ".$this->single_person_suppliment );
				}
			}

		return true;
		}

	/**
	#
	 * Calculates how much deposit should be charged
	#
	 */
	function calcDeposit()
		{
		// Calculate deposit
		$depositValue=0;
		// Depreciating this next if, but leaving the stuff inside on. This is because a few folks are setting the show deposit to No, but still sending the deposit value to
		// paypal/gateway. Commenting out this if will mean that the deposit is still calculated.
		//if ($this->cfg_chargeDepositYesNo=="1")
		//	{
			$depositValue=$this->cfg_depositValue;
			$totalBooking=$this->contract_total;
			if ($this->cfg_depAmount=="1")
				 $depositValue=$this->contract_total;
			else
				{
				if ($this->cfg_depositIsPercentage=="1")
					{
					if ($this->cfg_roundupDepositYesNo=="1")
						$depositValue=ceil(($totalBooking/100)*$depositValue);
					else
						$depositValue=($totalBooking/100)*$depositValue;
					}
				else
					{
					if ($this->cfg_roundupDepositYesNo=="1")
						$depositValue=ceil($depositValue);
					else
						$depositValue=$depositValue;
					}
				}
			//}
		$this->deposit_required = $depositValue;
		}

	/**
	#
	 * Returns the value of the deposit required to make the booking
	#
	 */
	function getDeposit()
		{
		return $this->deposit_required;
		}

	/**
	#
	 * Returns the total value of the extras selected
	#
	 */
	function getExtrasTotal()
		{
		return $this->extrasvalue;
		}

	/**
	#
	 * Returns the total value of the Tax calculated
	#
	 */
	function getTax()
		{
		return $this->tax;
		}

	/**
	#
	 * Returns the total value of the single person suppliment caluclated
	#
	 */
	function getSinglePersonSuppliment()
		{
		return $this->single_person_suppliment;
		}

	/**
	#
	 * Returns the grand total calculated
	#
	 */
	function getGrandTotal()
		{
		return $this->contract_total;
		}

	/**
	#
	 * Returns the room per night calculated
	#
	 */
	function getRoompernight()
		{
		return $this->rate_pernight;
		}

	/**
	#
	 * Returns the room total for the booking
	#
	 */
	function getRoomtotal()
		{
		return $this->room_total;
		}

	/**
	#
	 * Resets all totals to 0.00
	#
	 */
	function resetTotals()
		{
		$this->rate_pernight = 0.00;
		$this->contract_total = 0.00;
		$this->room_total = 0.00;
		$this->extrasvalue = 0.00;
		$this->tax = 0.00;
		$this->single_person_suppliment = 0.00;
		$this->deposit_required = 0.00;
		}

	/**
	#
	 *
	#
	 */
	function makeRatePerNight()
		{
		$result=false;
		$this->setErrorLog("Currently selected rooms: ".count($this->requestedRoom) );
		if (count($this->requestedRoom) > 0 )
			{
			if ($this->tariffModel == "1")
				{
				$this->setErrorLog("Getting flat rate. ");
				$result=$this->setFlatRate();
				}
			else
				{
				$this->setErrorLog("Getting average rate. ");
				$result=$this->setAverageRate();
				}
			}
		

		return $result;
		}

	/**
	#
	 * The default method of handling price calculations. When a booking is made the price for the entire period reflects the price of the booking
	#
	 */
	function setFlatRate()
		{
		global $mrConfig;
		global $tmpBookingHandler;
		$disc=array();
		$tmpBookingHandler->updateBookingField("wiseprice_discount",$disc );
		$tmpBookingHandler->saveBookingData();
		$rpn=0.00;
		$total=0.00;
		$tariffs=array();
		$rates=array();
		if (!isset($mrConfig['wisepriceactive']) || empty($mrConfig['wisepriceactive']) )
			$mrConfig['wisepriceactive']='0';
		if (!isset($mrConfig['wisepricethreshold']) || empty($mrConfig['wisepricethreshold']) )
			$mrConfig['wisepricethreshold']='60';
		$wisepricethreshold = (int)$mrConfig['wisepricethreshold'];
		foreach ($this->requestedRoom as $rt)
			{
			$currentTariffsArray=explode("^",$rt);
			$tariffs[]=$currentTariffsArray[1];
			}
		if (count($tariffs) ==0 )
			return false;
		$datesTilBooking=$this->findDateRangeForDates($this->today,$this->arrivalDate);

		foreach ( $tariffs as $t )
			{
			if ( count($datesTilBooking) <= $wisepricethreshold && $mrConfig['wisepriceactive'] == "1")
				{
				$tmpRate=$this->allPropertyTariffs[$t]['roomrateperday'];
				$roomType=$this->allPropertyTariffs[$t]['roomclass_uid'];
				$percentageBooked=$this->getPercentageOfRoomsBookedForRoomtype($roomType);
				$rate = $this->getDiscountedRoomrate ($tmpRate,$percentageBooked,$roomType);
				$isDiscounted=false;
				if ($rate < $tmpRate)
					{
					$isDiscounted=true;
					$tmpBookingHandler->updateBookingField("booking_discounted",true );
					}
				$disc[$roomType]=array(
					"roomrate"=>$tmpRate,
					"discountedRate"=>$rate,
					"roomType"=>$roomType,
					"isDiscounted"=>$isDiscounted,
					);
				}
			else
				{
				$rate =$this->allPropertyTariffs[$t]['roomrateperday'];
				}
			$tmpBookingHandler->updateBookingField("wiseprice_discount",$disc );
			$tmpBookingHandler->saveBookingData();
			$rates[]=$rate;
			}
		foreach ($rates as $r)
			{
			$total+=$r;
			}
		$this->setErrorLog("Total calculated ".$total );
		$rpn=$total/(count($rates) );
		$this->setErrorLog("Setting flat rate ".$rpn );
		if ($this->cfg_tariffChargesStoredWeeklyYesNo=="1")
			$rpn=$rpn/7;
		$this->rate_pernight=$rpn;
		return true;
		}

	function outputDiscounts()
		{
		global $tmpBookingHandler;
		$discountData=$tmpBookingHandler->getBookingFieldVal("wiseprice_discount");
		$discountOutput="";
		$currfmt = new jomres_currency_format();
		if ( count($discountData)> 0)
			{
			$discountsForTmpdata=array();
			$tmpBookingHandler->updateBookingField(array());
			foreach ($discountData as $d)
				{
				if ($d['isDiscounted'])
					{
					if ( !isset($tmpBookingHandler->tmpbooking["wisepricediscount"]) )
						$tmpBookingHandler->addNewBookingField("wisepricediscount");
					$roomtype=$d['roomType'];
					$roomtype_abbr=$this->sanitiseOutput(jr_gettext(_JOMRES_CUSTOMTEXT_ROOMCLASS_DESCRIPTION.$roomtype,$this->allRoomClasses[$roomtype]['room_class_abbv'],false,false));
					$roomrate=$d['roomrate'];
					//$discountedRate=$d['discountedRate'];
					$discountOutput.= ' '.$roomtype_abbr._JOMCOMP_WISEPRICE_HASBEENDISCOUNTED.$this->getCurrencySymbol().$currfmt->get_formatted($roomrate)._JOMCOMP_WISEPRICE_TO.$this->getCurrencySymbol().$currfmt->get_formatted($d['discountedRate']).' <br/>';
					$tmpBookingHandler->updateBookingField("wisepricediscount",$discountOutput);
					$discountsForTmpdata[]=array("type"=>"MRP","roomtypeabbr"=>$roomtype_abbr,"discountfrom"=>$currfmt->get_formatted($roomrate),"discountto"=>$currfmt->get_formatted($d['discountedRate']));
					$tmpBookingHandler->saveBookingData();
					}
				else
					$tmpBookingHandler->updateBookingField("wisepricediscount",_JOMCOMP_WISEPRICE_NOTDISCOUNTED);
				}
			$tmpBookingHandler->updateBookingField("discounts",$discountsForTmpdata);
			}
		else
			{
			$tmpBookingHandler->updateBookingField("wisepricediscount",_JOMCOMP_WISEPRICE_NOTDISCOUNTED);
			echo '; document.getElementById("discount").innerHTML = "" ; fadeIn("discount",0);';
			}
		echo '; document.getElementById("discount").innerHTML = "'.$discountOutput.'" ; fadeIn("discount",0);';
		}

	function getPercentageOfRoomsBookedForRoomtype($roomtypeid)
		{
		$this->setErrorLog("getPercentageOfRoomsBookedForRoomtype:: Started");
		$this->setErrorLog("getPercentageOfRoomsBookedForRoomtype:: Room type id ".$roomtypeid );
		$roomsOfThisType=array();
		$roomsOfThisTypeBooked=array();
		foreach ($this->allPropertyRooms as $key=>$val)
			{
			if ($val['room_classes_uid']==$roomtypeid)
				{
				$roomsOfThisType[]=$key;
				}
			}
		$this->setErrorLog("getPercentageOfRoomsBookedForRoomtype:: this->allBookings : ". serialize($this->allBookings));
		foreach ($this->allBookings as $key=>$val)
			{
			foreach ($val as $k=>$v)
				{
				$roomid=$k;
				if ($key == $this->arrivalDate && $this->allPropertyRooms[$roomid]['room_classes_uid'] == $roomtypeid)
					{
					$roomsOfThisTypeBooked[]=$roomid;
					}
				}
			}
		$totalRoomsOfType=count($roomsOfThisType);
		$totalRoomsOfTypeBooked=count($roomsOfThisTypeBooked);
		$percentageBooked=($totalRoomsOfTypeBooked/$totalRoomsOfType)*100;
		$this->setErrorLog("<b>getPercentageOfRoomsBookedForRoomtype:: totalRoomsOfType: $totalRoomsOfType totalRoomsOfTypeBooked: $totalRoomsOfTypeBooked percentageBooked: $percentageBooked</b>");
		return $percentageBooked;
		}

	function getDiscountedRoomrate ($roomrate,$percentagebooked,$roomType)
		{
		$this->setErrorLog("getDiscountedRoomrate:: Started");
		global $mrConfig;
		if (!isset($mrConfig['wiseprice10discount']) || empty($mrConfig['wiseprice10discount']) )
			$mrConfig['wiseprice10discount']='30';
		if (!isset($mrConfig['wiseprice25discount']) || empty($mrConfig['wiseprice25discount']) )
			$mrConfig['wiseprice25discount']='20';
		if (!isset($mrConfig['wiseprice50discount']) || empty($mrConfig['wiseprice50discount']) )
			$mrConfig['wiseprice50discount']='10';
		if (!isset($mrConfig['wiseprice75discount']) || empty($mrConfig['wiseprice75discount']) )
			$mrConfig['wiseprice75discount']='5';
		$this->setErrorLog("getDiscountedRoomrate:: room rate: $roomrate percentagebooked: $percentagebooked room type: $roomType");
		if ( $percentagebooked <=75)
			{
			if ( $percentagebooked <= 75 && $percentagebooked > 50)
				$discountPercentage= (float)$mrConfig['wiseprice75discount'];
			if ( $percentagebooked <= 50 && $percentagebooked > 25)
				$discountPercentage= (float)$mrConfig['wiseprice50discount'];
			if ( $percentagebooked <= 25 && $percentagebooked > 10)
				$discountPercentage= (float)$mrConfig['wiseprice25discount'];
			if ( $percentagebooked <= 10 )
				$discountPercentage= (float)$mrConfig['wiseprice10discount'];
			$discount=($roomrate/100)*$discountPercentage;
			$discountedRate=$roomrate-$discount;
			$this->setErrorLog("<b>getDiscountedRoomrate:: discounted rate ".$discountedRate."</b>" );
			}
		else
			$discountedRate=$roomrate;

		return $discountedRate;
		}

	/**
	#
	 * The alterntive method of handling price calculations. When a booking is made the price for rooms is calculated as the sum of the value of the rooms for each night/number of rooms
	#
	 */
	function setAverageRate()
		{
		global $mrConfig;
		global $tmpBookingHandler;
		if ( $mrConfig['tariffmode']=="2")
			{
			$this->setErrorLog("setAverageRate : going to te_setAverageRate");
			$this->te_setAverageRate(); // Tariffs enhanced averages instead of the bog standard method.
			}
		else
			{
			$disc=array();
			if (!isset($mrConfig['wisepriceactive']) || empty($mrConfig['wisepriceactive']) )
				$mrConfig['wisepriceactive']='0';
			if (!isset($mrConfig['wisepricethreshold']) || empty($mrConfig['wisepricethreshold']) )
				$mrConfig['wisepricethreshold']='60';
			$wisepricethreshold = (int)$mrConfig['wisepricethreshold'];
			$tmpBookingHandler->updateBookingField("wiseprice_discount",$disc );
			$tmpBookingHandler->saveBookingData();
			$this->setErrorLog("setAverageRate:: Started");
			//$datesToRateArray=array();
			//$rates=array();
			//$rmClassArray=array();
			$datesTilBooking=$this->findDateRangeForDates($this->today,$this->arrivalDate);
			foreach ($this->requestedRoom as $rt)
				{
				$rm=explode("^",$rt);
				$rmidsArray[]=$rm[0];
				}

			$roomAndClassArray=array();
			foreach ($rmidsArray as $rmid)
				{
				$roomClassUid =$this->allPropertyRooms[$rmid]['room_classes_uid'];
				$roomAndClassArray[$rmid]=array('room_uid'=>$rmid,'room_class_uid'=>$roomClassUid);
				}

			$this->setErrorLog("setAverageRate:: Room & Class array contains: ".serialize($roomAndClassArray));
			$numberOfGuestTypes=$this->getVariantsOfType("guesttype");
			$total=0.00;
			$stayDays=$this->stayDays;
			$dateRangeArray=explode(",",$this->dateRangeString);
			foreach ( $roomAndClassArray as $rc )
				{
				$rclass=$rc['room_class_uid'];
				//$rid=$rc['room_uid'];
				$rateList = $this->getTariffsForRoomClass($rclass);

				foreach ($rateList as $rate)
					{
					$date_elements  = explode("/",$rate->validfrom);
					$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					$date_elements  = explode("/",$rate->validto);
					$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					foreach ($dateRangeArray as $date )
						{
						$pass=false;
						$this->setErrorLog("setAverageRate::Searching date ".$date.' on current tariff uid: '.$rate->rates_uid);
						$date_elements  = explode("/",$date);
						$unixDay = mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
						if (count($numberOfGuestTypes) >0)
							{
							if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) && ($this->total_in_party >= $rate->minpeople &&  $this->total_in_party <= $rate->maxpeople ) )
								$pass=true;
							}
						else
							{
							if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) )
								$pass=true;
							}
						if($pass)
							{
							if ( count($datesTilBooking) <= $wisepricethreshold && $mrConfig['wisepriceactive'] == "1")
								{
								$tmpRate=$rate->roomrateperday;
								$roomType=$rclass;
								$percentageBooked=$this->getPercentageOfRoomsBookedForRoomtype($rclass);
								$r= $this->getDiscountedRoomrate ($tmpRate,$percentageBooked);
								$total=$total+$r;
								$isDiscounted=false;
								if ($r < $tmpRate)
									{
									$isDiscounted=true;
									$tmpBookingHandler->updateBookingField("booking_discounted",true );
									}
								$disc[$roomType]=array(
									"roomrate"=>$tmpRate,
									"discountedRate"=>$r,
									"roomType"=>$roomType,
									"isDiscounted"=>$isDiscounted,
									);
								$tmpBookingHandler->updateBookingField("wiseprice_discount",$disc );
								$tmpBookingHandler->saveBookingData();
								}
							else
								{
								$total+=$rate->roomrateperday ;
								}
							}
						}
					}
				}
			$this->setErrorLog( "setAverageRate::Total = ".$total. " Number of days = ".$this->stayDays.' Number of rooms '.count($this->requestedRoom) );
			$rpn=($total/count($this->requestedRoom))/$stayDays;

			if ($this->cfg_tariffChargesStoredWeeklyYesNo=="1")
				{
				$this->setErrorLog("setAverageRate::Tariffs are stored weekly ");
				$rpn=$rpn/7;
				}
			$this->rate_pernight=$rpn;
			$this->setErrorLog("setAverageRate::Setting average rate ".$rpn );
			$this->setErrorLog("setAverageRate:: Ended");

			}
		return true;
		}

	/**
	#
	 * The alterntive method of handling price calculations. When a booking is made the price for rooms is calculated as the sum of the value of the rooms for each night/number of rooms
	#
	 */
	function te_setAverageRate()
		{
		global $mrConfig,$tmpBookingHandler;
		$this->setErrorLog("te_setAverageRate:: Started");
		$dateRangeArray=explode(",",$this->dateRangeString);
		$tariffsArray=array();
		$numberOfGuestTypes=$this->getVariantsOfType("guesttype");
		$total=0.00;
		$stayDays=$this->stayDays;
		//$datesToRateArray=array();
		//$rates=array();
		//$rmClassArray=array();
		$disc=array();
		if (!isset($mrConfig['wisepriceactive']) || empty($mrConfig['wisepriceactive']) )
			$mrConfig['wisepriceactive']='0';
		if (!isset($mrConfig['wisepricethreshold']) || empty($mrConfig['wisepricethreshold']) )
			$mrConfig['wisepricethreshold']='60';
		$wisepricethreshold = (int)$mrConfig['wisepricethreshold'];
		$tmpBookingHandler->updateBookingField("wiseprice_discount",$disc );
		$datesTilBooking=$this->findDateRangeForDates($this->today,$this->arrivalDate);
		$roomsOfType=array();
		foreach ($this->requestedRoom as $rt)
			{
			$rm=explode("^",$rt);
			$tariffsArray[]=$rm[1];
			$room_uid = $rm[0];
			$room_type=$this->allPropertyRooms[$room_uid]['room_classes_uid'];
			$this->setErrorLog("te_setAverageRate::room class id found: ".$room_type );
			if (array_key_exists($room_type,$roomsOfType) )
				{
				$counter=$roomsOfType[$room_type];
				$counter++;
				$roomsOfType[$room_type]=$counter;
				$this->setErrorLog("te_setAverageRate::counter: ".$counter );
				}
			else
				$roomsOfType[$room_type]=1;
			}
		$this->setErrorLog("te_setAverageRate::Rooms of this type found: ".serialize($roomsOfType) );
		$gor=genericOr($tariffsArray,'tariff_id');
		$query = "SELECT tarifftype_id FROM #__jomcomp_tarifftype_rate_xref WHERE ".$gor;
		$this->setErrorLog("te_setAverageRate::Querying __jomcomp_tarifftype_rate_xref table ".$query);
		$tarifftypeids = doSelectSql($query);

		if (count($tarifftypeids)>0)
			{
			foreach ($tarifftypeids as $t)
				{
				$query="SELECT tariff_id FROM #__jomcomp_tarifftype_rate_xref WHERE tarifftype_id ='".$t->tarifftype_id."'";
				$this->setErrorLog("setAverageRate::Querying __jomcomp_tarifftype_rate_xref table ".$query);
				$allTariffIds = doSelectSql($query);
				$this->setErrorLog("setAverageRate::Querying __jomcomp_tarifftype_rate_xref table ".serialize($allTariffIds));
				$xreffed=array();
				foreach ($allTariffIds as $xref)
					{
					$xreffed[]=$xref->tariff_id;
					}
				$gor=genericOr($xreffed,'rates_uid');
				$query="SELECT `rates_uid`,`validfrom` ,`validto`,`mindays`,`maxdays`,minpeople,maxpeople,`roomrateperday`,roomclass_uid FROM #__jomres_rates WHERE ".$gor;
				$this->setErrorLog("te_setAverageRate::Querying rates table ".$query);
				$rateList = doSelectSql($query);
				foreach ($rateList as $rate)
					{
					$date_elements  = explode("/",$rate->validfrom);
					$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					$date_elements  = explode("/",$rate->validto);
					$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					//$rates[]=array('validfrom'=>$unixValidFromDate,'validto'=>$unixValidToDate,'roomrateperday'=>$rate->roomrateperday,'rates_uid'=>$rate->rates_uid);
					foreach ($dateRangeArray as $date )
						{
						$pass=false;
						$this->setErrorLog("te_setAverageRate::Searching date ".$date.' on current tariff uid: '.$rate->rates_uid);
						$date_elements  = explode("/",$date);
						$unixDay = mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

								// Useful for testing tariffs.
								//$this->setErrorLog("setAverageRate::Unix day ".$unixDay.' unix valid from day: '.$unixValidFromDate. ' Test: >=');
								//$this->setErrorLog("setAverageRate::Unix day ".$unixDay.' unix valid to day: '.$unixValidToDate. ' Test: <=');
								if ($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate)
									$this->setErrorLog("te_setAverageRate::<b>Dates pass</b> ");
								else
									$this->setErrorLog("te_setAverageRate::<b>Dates FAIL</b> ");
								//$this->setErrorLog("setAverageRate::stay days ".$date.' rate min days: '.$rate->rates_uid. ' Test: >=');
								//$this->setErrorLog("setAverageRate::stay days ".$date.' rate max days: '.$rate->rates_uid. ' Test: <=');
								//$this->setErrorLog("setAverageRate::min days ".$rate->mindays.' max days: '.$rate->maxdays. ' stay days'.$stayDays);
								if ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays)
									$this->setErrorLog("te_setAverageRate::<b>Stay days pass</b> ");
								else
									$this->setErrorLog("te_setAverageRate::<b>Stay days FAIL</b> ");
								//$this->setErrorLog("setAverageRate::Total in party ".$this->total_in_party.' rate min people: '.$rate->minpeople. ' Test: >=');
								//$this->setErrorLog("setAverageRate::Total in party ".$this->total_in_party.' rate max people: '.$rate->maxpeople . ' Test: <=');
								if ($this->total_in_party >= $rate->minpeople &&  $this->total_in_party <= $rate->maxpeople)
									$this->setErrorLog("te_setAverageRate::<b>People numbers pass</b> ");
								else
									$this->setErrorLog("te_setAverageRate::<b>People numbers FAIL</b> ");

						if (count($numberOfGuestTypes) >0)
							{
							if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) && ($this->total_in_party >= $rate->minpeople &&  $this->total_in_party <= $rate->maxpeople ) )
								$pass=true;
							}
						else
							{
							if($unixDay <= $unixValidToDate && $unixDay >= $unixValidFromDate && ($stayDays >= $rate->mindays &&  $stayDays <= $rate->maxdays ) )
								$pass=true;
							}
						if($pass)
							{
							$this->setErrorLog("te_setAverageRate::Number of rooms of this type : ".$roomsOfType[$rate->roomclass_uid]);


							if ( count($datesTilBooking) <= $wisepricethreshold && $mrConfig['wisepriceactive'] == "1")
								{
								$tmpRate=$rate->roomrateperday;
								$roomType=$rate->roomclass_uid;
								$percentageBooked=$this->getPercentageOfRoomsBookedForRoomtype($rate->roomclass_uid);
								$r= $this->getDiscountedRoomrate ($tmpRate,$percentageBooked);
								$total=$total+($r*$roomsOfType[$rate->roomclass_uid]);
								$isDiscounted=false;
								if ($r < $tmpRate)
									{
									$isDiscounted=true;
									$tmpBookingHandler->updateBookingField("booking_discounted",true );
									}
								$disc[$roomType]=array(
									"roomrate"=>$tmpRate,
									"discountedRate"=>$r,
									"roomType"=>$rate->roomclass_uid,
									"isDiscounted"=>$isDiscounted,
									);
								$tmpBookingHandler->updateBookingField("wiseprice_discount",$disc );
								$tmpBookingHandler->saveBookingData();
								}
							else
								{
								$this->setErrorLog("te_setAverageRate::Rejigging room rate from ".$rate->roomrateperday." to  ".$rate->roomrateperday*$roomsOfType[$rate->roomclass_uid]);
								$tmp_rate=$rate->roomrateperday;
								$tmp_rate=$tmp_rate*$roomsOfType[$rate->roomclass_uid];
								$total+=$tmp_rate;
								}
							$this->setErrorLog("te_setAverageRate::Setting  ".$rid.'_'.$date.' to '.$total);
							//$total+=$rate->roomrateperday ;
							$this->setErrorLog("te_setAverageRate::Cumulative total  ".$total);
							}
						else
							$this->setErrorLog("te_setAverageRate::Tariff id failed to pass checks ".$total);
						}
					}
				}
			}
		$this->setErrorLog( "te_setAverageRate::Total = ".$total. " Number of days = ".$this->stayDays.' Number of rooms '.count($this->requestedRoom) );
		$rpn=($total/$stayDays)/count($this->requestedRoom);
		//$rpn=($total/count($this->requestedRoom))/$stayDays;
		if ($this->cfg_tariffChargesStoredWeeklyYesNo=="1")
			{
			$this->setErrorLog("te_setAverageRate::Tariffs are stored weekly ");
			$rpn=$rpn/7;
			}
		$this->rate_pernight=$rpn;
		$this->setErrorLog("te_setAverageRate::Setting average rate ".$rpn );
		$this->setErrorLog("te_setAverageRate:: Ended");
		return true;
		}

	function calcLastMinuteDiscount()
		{
		global $mrConfig,$tmpBookingHandler;
		if ($mrConfig['lastminuteactive'] == '1')
			{
			$discountsForTmpdata=array();
			$tmpBookingHandler->updateBookingField(array());
			$currfmt = new jomres_currency_format();
			$datesTilBooking=$this->findDateRangeForDates($this->today,$this->arrivalDate);
			$lastminutediscount=(int)$mrConfig['lastminutediscount'];
			if ( count($datesTilBooking) <= (int)$mrConfig['lastminutethreshold'])
				{
				$original_total=$this->room_total;
				$discount=($this->room_total/100)*$lastminutediscount;
				$this->setErrorLog("<b>calcLastMinuteDiscount:: Discount calculated: ".$discount."</b>");
				$this->room_total=$this->room_total-$discount;
				$this->total_discount=$discount;
				$this->setErrorLog("<b>calcLastMinuteDiscount:: Room total modified to: ".$this->room_total."</b>");
				$disc_txt=_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1.' '._JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2.': '.$this->getCurrencySymbol().$currfmt->get_formatted($discount);
				echo '; document.getElementById("discount").innerHTML = "'.$disc_txt.'" ; fadeIn("discount",0);';
				$tmpBookingHandler->updateBookingField("lastminutediscount",$disc_txt );
				$tmpBookingHandler->updateBookingField("booking_discounted",true );
				$discountsForTmpdata[]=array("type"=>"SRP","roomtypeabbr"=>"N/A","discountfrom"=>$currfmt->get_formatted($original_total),"discountto"=>$currfmt->get_formatted($this->room_total) );
				}
			else
				{
				echo '; document.getElementById("discount").innerHTML = "&nbsp;" ; fadeIn("discount",0);';
				$tmpBookingHandler->updateBookingField("lastminutediscount",_JOMCOMP_WISEPRICE_NOTDISCOUNTED);
				}
			$tmpBookingHandler->updateBookingField("discounts",$discountsForTmpdata);
			}
		else
			{
			echo '; document.getElementById("discount").innerHTML = "&nbsp;" ; fadeIn("discount",0);';
			$tmpBookingHandler->updateBookingField("lastminutediscount",_JOMCOMP_WISEPRICE_NOTDISCOUNTED);
			}
		$tmpBookingHandler->saveBookingData();
		}

	function generateBilling()
		{
		$this->setErrorLog("generateBilling:: Starting");
		$this->forcedExtras = array();
		$this->calcExtras();
		$this->setErrorLog("generateBilling:: Checking requested room count ");
		if (count($this->requestedRoom)>0)
			{
			$this->setErrorLog("generateBilling:: Starting makeRatePerNight");
			if ( $this->makeRatePerNight() )
				{
				$this->setErrorLog("generateBilling:: Starting setVariantValues");
				if ( $this->setVariantValues() )
					{
					$this->setErrorLog(":: Starting makeNightlyRoomCharges");
					if ( $this->makeNightlyRoomCharges() )
						{
						$this->setErrorLog("generateBilling:: Starting calcSinglePersonSuppliment");
						$this->calcSinglePersonSuppliment();
						$this->setErrorLog("generateBilling:: Starting calcTax");
						$this->calcTax();
						$this->setErrorLog("generateBilling:: Starting calcLastMinuteDiscount");
						if ($this->cfg_singleRoomProperty ==1)
							$this->calcLastMinuteDiscount();
						$this->setErrorLog("generateBilling:: Starting calcTotals");
						$this->calcTotals();
						$this->setErrorLog("generateBilling:: Starting calcDeposit");
						$this->calcDeposit();
						if ($this->cfg_singleRoomProperty ==0)
							$this->outputDiscounts();
						}
					else
						$this->setErrorLog("<b>generateBilling:: Unable to make nightly room charges</b>");
					}
				else
					$this->setErrorLog("<b>generateBilling:: Unable to set Variant Values</b>");
				}
			else
				$this->setErrorLog("<b>generateBilling:: Unable to make rateper night</b>");
			}
		else
			$this->setErrorLog("<b>generateBilling:: Requested room count = 0</b>");
		$this->setErrorLog("generateBilling:: Ending");
		}

	function addBookingNote($context,$note)
		{
		$this->booking_notes[$context]=$note;
		}

	}
?>