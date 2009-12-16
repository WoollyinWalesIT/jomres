<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j00101amendBooking
	{
	/**
	#
	 * Constructor: Let's gather the data we want.
	#
	 */
	function j00101amendBooking()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');

		$amend					= intval(jomresGetParam( $_REQUEST, 'amend', 0 ) );

		if ($amend)
			{
			$contract_uid		= intval(jomresGetParam( $_REQUEST, 'contractuid', 0 ) );
			$selectedProperty	= intval(jomresGetParam( $_REQUEST, 'selectedProperty', 0 ) );

			if ( isset($tmpBookingHandler->tmpbooking["override_contract_deposit"]) )
				$tmpBookingHandler->updateBookingField("override_contract_deposit","");

			if ( isset($tmpBookingHandler->tmpbooking["override_contract_total"]) )
				$tmpBookingHandler->updateBookingField("override_contract_total","");

			if (isset($contract_uid) && !empty($contract_uid) )
				{
				$tmpBookingHandler->updateBookingField("amend_contract",true);
				$tmpBookingHandler->updateBookingField("amend_contractuid",$contract_uid);

				$query = "SELECT * FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."' LIMIT 1";
				$contract	= doSelectSql($query);
				foreach ($contract as $c)
					{
					$tmpBookingHandler->updateBookingField("amend_deposit_required",$c->deposit_required);
					$tmpBookingHandler->updateBookingField("amend_deposit_paid",$c->deposit_paid);
					$tmpBookingHandler->updateBookingField("amend_property_uid",$c->property_uid);
					$tmpBookingHandler->updateBookingField("amend_contract_total",$c->contract_total);
					$tmpBookingHandler->updateBookingField("amend_contract_extras",$c->extrasvalue);
					$tmpBookingHandler->updateBookingField("amend_contract_extrasquantities",$c->extrasquantities);
					$tmpBookingHandler->updateBookingField("amend_contract_tax",$c->tax);
					$tmpBookingHandler->updateBookingField("amend_contract_roomtotal",$c->room_total);
					$tmpBookingHandler->updateBookingField("amend_contract_arrival",$c->arrival);
					$tmpBookingHandler->updateBookingField("amend_contract_departure",$c->departure);
					$tmpBookingHandler->updateBookingField("confirmationSeen",true);

					$variances		= $c->rate_rules;
					$varianceArray	= explode(",",$variances);
					$totalinparty	= 0;
					$tmpBookingHandler->tmpbooking["variancetypes"]				= "";
					$tmpBookingHandler->tmpbooking["varianceuids"]				= "";
					$tmpBookingHandler->tmpbooking["varianceqty"]				= "";
					$tmpBookingHandler->tmpbooking["variancevals"]				= "";
					foreach ($varianceArray as $v)
						{
						$vDeets=explode("_",$v);
						if ($vDeets[0]=="guesttype")
							{
							$tmpBookingHandler->tmpbooking["variancetypes"]		.= ",".$vDeets[0];
							$tmpBookingHandler->tmpbooking["varianceuids"]		.= ",".$vDeets[1];
							$tmpBookingHandler->tmpbooking["varianceqty"]		.= ",".$vDeets[2];
							$tmpBookingHandler->tmpbooking["variancevals"]		.= ",".$vDeets[3];
							$totalinparty		= $total + $vDeets[2];
							}
						}

					$query = "SELECT * FROM #__jomres_guests WHERE guests_uid = '".(int)$c->guest_uid."' LIMIT 1";
					$guest	= doSelectSql($query);
					foreach ($guest as $g)
						{
						$tmpBookingHandler->tmpguest["guests_uid"]		= $g->guests_uid;
						$tmpBookingHandler->tmpguest["mos_userid"]		= $g->mos_userid;
						$tmpBookingHandler->tmpguest["existing_id"]		= $g->guests_uid;
						$tmpBookingHandler->tmpguest["firstname"]		= quote_smart($g->firstname);
						$tmpBookingHandler->tmpguest["surname"]			= quote_smart($g->surname);
						$tmpBookingHandler->tmpguest["house"]			= quote_smart($g->house);
						$tmpBookingHandler->tmpguest["street"]			= quote_smart($g->street);
						$tmpBookingHandler->tmpguest["town"]			= quote_smart($g->town);
						$tmpBookingHandler->tmpguest["region"]			= quote_smart($g->county);
						$tmpBookingHandler->tmpguest["country"]			= quote_smart($g->country);
						$tmpBookingHandler->tmpguest["postcode"]		= quote_smart($g->postcode);
						$tmpBookingHandler->tmpguest["tel_landline"]	= quote_smart($g->tel_landline);
						$tmpBookingHandler->tmpguest["tel_mobile"]		= quote_smart($g->tel_mobile);
						$tmpBookingHandler->tmpguest["email"]			= quote_smart($g->email);
						$tmpBookingHandler->saveGuestData();
						}

					if ($c->property_uid != $selectedProperty)
						{
						//Can only carry over certain fields if the property is changed
						$tmpBookingHandler->tmpbooking["rate_pernight"]				= "";
						$tmpBookingHandler->tmpbooking["variancetypes"]				= "";
						$tmpBookingHandler->tmpbooking["varianceuids"]				= "";
						$tmpBookingHandler->tmpbooking["varianceqty"]				= "";
						$tmpBookingHandler->tmpbooking["variancevals"]				= "";
						$tmpBookingHandler->tmpbooking["coupon_id"]					= "";
						$tmpBookingHandler->tmpbooking["coupon"] 					= "";
						$tmpBookingHandler->tmpbooking["lastminute_id"] 			= "";
						$tmpBookingHandler->tmpbooking["arrivalDate"] 				= (string)$c->arrival;
						$tmpBookingHandler->tmpbooking["departureDate"]				= (string)$c->departure;
						$tmpBookingHandler->tmpbooking["stayDays"]					= "";
						$tmpBookingHandler->tmpbooking["dateRangeString"] 			= (string)$c->dateRangeString;
						$tmpBookingHandler->tmpbooking["guests_uid"]				= (int)$c->guest_uid;
						$tmpBookingHandler->tmpbooking["property_uid"]				= (int)$selectedProperty;
						$tmpBookingHandler->tmpbooking["rates_uid"]					= "";
						$tmpBookingHandler->tmpbooking["resource"] 					= "";
						$tmpBookingHandler->tmpbooking["single_person_suppliment"]	= "";
						$tmpBookingHandler->tmpbooking["deposit_required"]			= (float)$c->deposit_required;
						$tmpBookingHandler->tmpbooking["contract_total"] 			= (float)$c->contract_total;
						$tmpBookingHandler->tmpbooking["smoking"]					= "";
						$tmpBookingHandler->tmpbooking["extrasvalue"]				= "";
						$tmpBookingHandler->tmpbooking["extras"]					= "";
						$tmpBookingHandler->tmpbooking["total_discount"] 			= "";
						$tmpBookingHandler->tmpbooking["depositpaidsuccessfully"] 	= (int)$c->deposit_paid;
						$tmpBookingHandler->tmpbooking["tax"]						= "";
						$tmpBookingHandler->tmpbooking["booker_class"]				= "100";
						$tmpBookingHandler->tmpbooking["ok_to_book"]				= false;
						$tmpBookingHandler->tmpbooking["beds_available"]			= "";
						$tmpBookingHandler->tmpbooking["referrer"] 					= "";
						$tmpBookingHandler->tmpbooking["error_log"]					= (string)$c->special_reqs;
						$tmpBookingHandler->tmpbooking["total_in_party"]			= (int)$totalinparty;
						$tmpBookingHandler->tmpbooking["room_total"] 				= (float)$c->room_total;
						$tmpBookingHandler->tmpbooking["lang"]						= (string)get_showtime('lang');
						$tmpBookingHandler->tmpbooking["timestamp"]					= "";
						$tmpBookingHandler->tmpbooking["mininterval"]				= "";
						$tmpBookingHandler->saveBookingData();
						}
					else
						{
						//Same property so carry over all possible fields
						$tmpBookingHandler->tmpbooking["requestedRoom"]				= "";
						$tmpBookingHandler->tmpbooking["rate_pernight"]				= "";
						$tmpBookingHandler->tmpbooking["coupon_id"]					= (int)$c->coupon_id;
						$tmpBookingHandler->tmpbooking["coupon"] 					= (string)$c->coupon;
						$tmpBookingHandler->tmpbooking["lastminute_id"] 			= "";
						$tmpBookingHandler->tmpbooking["arrivalDate"] 				= (string)$c->arrival;
						$tmpBookingHandler->tmpbooking["departureDate"]				= (string)$c->departure;
						$tmpBookingHandler->tmpbooking["stayDays"]					= ""; //hbw
						$tmpBookingHandler->tmpbooking["dateRangeString"] 			= (string)$c->dateRangeString;
						$tmpBookingHandler->tmpbooking["guests_uid"]				= (int)$c->guest_uid;
						$tmpBookingHandler->tmpbooking["property_uid"]				= (int)$selectedProperty;
						$tmpBookingHandler->tmpbooking["rates_uid"]					= $this->rates_uid;
						$tmpBookingHandler->tmpbooking["resource"] 					= "";
						$tmpBookingHandler->tmpbooking["single_person_suppliment"]	= (float)$c->single_person_suppliment;
						$tmpBookingHandler->tmpbooking["deposit_required"]			= (int)$c->deposit_required;
						$tmpBookingHandler->tmpbooking["contract_total"] 			= (float)$c->contract_total;
						$tmpBookingHandler->tmpbooking["smoking"]					= (int)$c->smoking;
						$tmpBookingHandler->tmpbooking["extrasvalue"]				= (float)$c->extrasvalue;
						$tmpBookingHandler->tmpbooking["extras"]					= (string)$c->extras;
						$tmpBookingHandler->tmpbooking["extrasquantities"]			= unserialize($c->extrasquantities);
						$tmpBookingHandler->tmpbooking["total_discount"] 			= $c->discount;
						$tmpBookingHandler->tmpbooking["depositpaidsuccessfully"] 	= (string)$c->deposit_paid;
						$tmpBookingHandler->tmpbooking["tax"]						= (float)$c->tax;
						$tmpBookingHandler->tmpbooking["booker_class"]				= "100";
						$tmpBookingHandler->tmpbooking["ok_to_book"]				= false;
						$tmpBookingHandler->tmpbooking["beds_available"]			= "";
						$tmpBookingHandler->tmpbooking["referrer"] 					= "";
						$tmpBookingHandler->tmpbooking["error_log"]					= (string)$c->special_reqs;
						$tmpBookingHandler->tmpbooking["total_in_party"]			= (int)$totalinparty;
						$tmpBookingHandler->tmpbooking["room_total"] 				= (string)$c->room_total;
						$tmpBookingHandler->tmpbooking["lang"]						= (string)get_showtime('lang');
						$tmpBookingHandler->tmpbooking["timestamp"]					= "";
						$tmpBookingHandler->tmpbooking["mininterval"]				= "";
						$tmpBookingHandler->saveBookingData();
						}
					}

					$currfmt = jomres_getSingleton('jomres_currency_format');
					$mrConfig	= getPropertySpecificSettings($tmpBookingHandler->tmpbooking["amend_property_uid"]);
					$output['HEADER']		= jr_gettext('_JOMCOMP_AMEND_HEADER',_JOMCOMP_AMEND_HEADER);
					$output['HTOTAL']		= jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL);
					$output['TOTAL']		= $mrConfig['currency'].$currfmt->get_formatted($c->contract_total);
					$output['HROOMTOTAL']	= jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL);
					$output['ROOMTOTAL']	= $mrConfig['currency'].$currfmt->get_formatted($c->room_total);
					$output['HARRIVAL']		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
					$output['ARRIVAL']		= outputDate($c->arrival);
					$output['HDEPARTURE']	= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
					$output['DEPARTURE']	= outputDate($c->departure);

					if ($totalinparty != 0)
						{
						$output['HTOTALINPARTY']= jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY);
						$output['TOTALINPARTY']	= $totalinparty;
						}

					if ($mrConfig['showExtras']=="1")
						{
						$output['HEXTRAS']	= jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS);
						$output['EXTRAS']	= $mrConfig['currency'].$currfmt->get_formatted($c->extrasvalue);
						}

					if ($mrConfig['roomTaxYesNo']=="1" || $mrConfig['euroTaxYesNo'] =="1" )
						{
						$output['HTAX']		= jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX',_JOMRES_AJAXFORM_BILLING_TAX);
						$output['TAX']		= $mrConfig['currency'].$currfmt->get_formatted($c->tax);
						}

					if ($c->discount != 0)
						{
						$output['HDISCOUNT']= jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT',_JOMRES_AJAXFORM_BILLING_DISCOUNT);
						$output['DISCOUNT']= $mrConfig['currency'].$currfmt->get_formatted($c->discount);
						}

					if ($mrConfig['chargeDepositYesNo']=="1")
						{
						if ($c->deposit_paid > 0)
							$output['HDEPOSIT']	= jr_gettext('_JOMCOMP_AMEND_DEPOSITPAID',_JOMCOMP_AMEND_DEPOSITPAID);
						else
							$output['HDEPOSIT']	= jr_gettext('_JOMCOMP_AMEND_DEPOSITDUE',_JOMCOMP_AMEND_DEPOSITDUE);

						$output['DEPOSIT']		= $mrConfig['currency'].$currfmt->get_formatted($tmpBookingHandler->tmpbooking["amend_deposit_required"]);
						}

					$pageoutput[]			= $output;
					$tmpl = new patTemplate();

					$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
					$tmpl->readTemplatesFromInput( 'original_details.html');
					$tmpl->addRows( 'pageoutput',$pageoutput);
					$tmpl->displayParsedTemplate();
				}
			}
		else
			{
			//Not amendment reset field
			if ( isset($tmpBookingHandler->tmpbooking["amend_contract"]) )
				$tmpBookingHandler->updateBookingField("amend_contract",false);

			if ( isset($tmpBookingHandler->tmpbooking["override_contract_deposit"]) )
				$tmpBookingHandler->updateBookingField("override_contract_deposit","");

			if ( isset($tmpBookingHandler->tmpbooking["override_contract_total"]) )
				$tmpBookingHandler->updateBookingField("override_contract_total","");

			$tmpBookingHandler->saveBookingData();
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMCOMP_AMEND_HEADER',_JOMCOMP_AMEND_HEADER);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY',_JOMRES_AJAXFORM_BILLING_TOTALINPARTY);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_TAX',_JOMRES_AJAXFORM_BILLING_TAX);
		$output[]		=jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT',_JOMRES_AJAXFORM_BILLING_DISCOUNT);
		$output[]		=jr_gettext('_JOMCOMP_AMEND_DEPOSITPAID',_JOMCOMP_AMEND_DEPOSITPAID);
		$output[]		=jr_gettext('_JOMCOMP_AMEND_DEPOSITDUE',_JOMCOMP_AMEND_DEPOSITDUE);

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
		return $this->returnValue;
		}
	}
?>