<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Inserts the booking. Receives the jomressession and a flag to indicated if the deposit has been paid
 #
* @package Jomres
#
 */
class j03020insertbooking {
	/**
	#
	 * Inserts the booking. Receives the jomressession and a flag to indicated if the deposit has been paid
	#
	 */
	var $insertSuccessful = true;
	var $insertBookingEventValues = array();
	function j03020insertbooking($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//global $jomresProccessingBookingObject;
		$mrConfig=getPropertySpecificSettings();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$depositPaid=$componentArgs['depositPaid'];
		if (isset($componentArgs['usejomressessionasCartid']) )
			$usejomressessionasCartid=$componentArgs['usejomressessionasCartid'];
		else
			$usejomressessionasCartid=false;
		$usejomressessionasCartid=false;
		$userIsManager=checkUserIsManager();
		$jomresProccessingBookingObject=getCurrentBookingData(get_showtime('jomressession'));
		$guestDetails 			=$jomresProccessingBookingObject->guestDetails;
		$tempBookingDataList 	=$jomresProccessingBookingObject->tempBookingDataList;
		gateway_log("j03020insertbooking :: Attempting to insert booking jsid: ".get_showtime('jomressession'));

		if (count($guestDetails)==0)
			{
			trigger_error ("Failed to insert booking: No guest details ", E_USER_ERROR);
			$this->insertSuccessful = false;
			}
		if (count($tempBookingDataList)==0)
			{
			gateway_log("j03020insertbooking :: Failed to insert booking: Booking data not found. Probably already booking inserted. ".get_showtime('jomressession'));
			$this->insertSuccessful = false;
			echo "Booking already made";
			}

		if ($this->insertSuccessful)
			{
			if ( isset($tmpBookingHandler->tmpbooking["amend_contract"]) )
				{
				$amend_contract  = $tmpBookingHandler->getBookingFieldVal("amend_contract");
				$amend_contractuid  = $tmpBookingHandler->getBookingFieldVal("amend_contractuid");
				}
			else
				$amend_contract  = 0;

			if ($amend_contract && $amend_contractuid != 0 && $userIsManager)
				{

				//Booking amendment code
				gateway_log("j03020insertbooking :: Amending contract. ".$amend_contractuid ." for ".get_showtime('jomressession'));

				$guests_uid		= insertGuestDeets(get_showtime('jomressession'));

				foreach ($tempBookingDataList as $tempBookingData)
					{
					$requestedRoom				= $tempBookingData->requestedRoom;
					$arrivalDate				= $tempBookingData->arrivalDate;
					$departureDate				= $tempBookingData->departureDate;
					$dateRangeString			= $tempBookingData->dateRangeString;
					$property_uid				= $tempBookingData->property_uid;
					$rates_uid					= $tempBookingData->rates_uid;
					$single_person_suppliment	= $tempBookingData->single_person_suppliment;
					$deposit_required			= $tempBookingData->deposit_required;
					$contract_total				= $tempBookingData->contract_total;
					$extras						= $tempBookingData->extras;
					$extrasquantities			= $tempBookingData->extrasquantities;
					$extrasValue				= $tempBookingData->extrasvalue;
					$specialReqs				= addslashes($tempBookingData->error_log);
					$discount					= $tempBookingData->discount;
					$room_total					= $tempBookingData->room_total;
					$tax						= $tempBookingData->tax;

					// The extras quantites is passed with ALL extra uids and default quanties. At this point we will strip out the extra uid that weren't actually selected before adding the serialized extras quantities to the db
					$tmpextrasquantities = array();
					$currentExtras=explode(",",$extras);
					if (count($currentExtras) > 0)
						{
						foreach ($extrasquantities as $id=>$quan)
							{
							if (in_array($id,$currentExtras) )
								{
								$tmpextrasquantities[$id]=$quan;
								}
							}
						$extrasquantities=serialize($tmpextrasquantities);
						}
					else
						$extrasquantities="";
					
					
					$discount=$tempBookingData->discounts;
					if (count($discount)>0)
						{
						$discount_details="";
						foreach ($discount as $d)
							{
							$discount_details .= serialize($d);
							}
						}

					// Let's get our guest type data
					$tmpArray					= array();
					$variancetypes				= explode(",",$tempBookingData->variancetypes);
					$varianceuids				= explode(",",$tempBookingData->varianceuids);
					$varianceqty				= explode(",",$tempBookingData->varianceqty);
					$variancevals				= explode(",",$tempBookingData->variancevals);
					for ($i=0;$i<count($variancetypes);$i++)
						{
						if ($variancetypes[$i]=='guesttype' && $varianceqty[$i]>0 )
							{
							$id					= $varianceuids[$i];
							$qty				= $varianceqty[$i];
							$val				= $variancevals[$i];
							$tmpArray[]			= array('id'=>$id,'qty'=>$qty,'val'=>$val);
							}
						}

					$rateRules					= "";
					if (count($tmpArray)>0)
						{
						foreach ($tmpArray as $guestTypes)
							$rateRules.="guesttype".'_'.$guestTypes['id'].'_'.$guestTypes['qty'].'_'.$guestTypes['val'].',';
						}

					$mrConfig=getPropertySpecificSettings($property_uid);
					}

				$datetime	= date("Y-m-d H-i-s");
				$ccode		= $mrConfig['currencyCode'];
				$query="UPDATE #__jomres_contracts SET
					`arrival` 					= '$arrivalDate',
					`departure`					= '$departureDate',
					`rates_uid`					= '$rates_uid',
					`guest_uid`					= '$guests_uid',
					`rate_rules`				= '$rateRules',
					`rooms_tariffs`				= '$requestedRoom',
					`contract_total`			= '$contract_total',
					`special_reqs`				= '$specialReqs',
					`deposit_required`			= '$deposit_required',
					`date_range_string`			= '$dateRangeString',
					`property_uid`				= '$property_uid',
					`single_person_suppliment`	= '$single_person_suppliment',
					`extras`					= '$extras',
					`extrasquantities`			= '$extrasquantities',
					`extrasvalue`				= '$extrasValue',
					`tax`						= '$tax',
					`room_total`				= '$room_total',
					`discount`					= '$discount',
					`currency_code` 			= '$ccode',
					`discount_details` 			= '$discount_details'
					WHERE contract_uid = '$amend_contractuid'";

				if (!doInsertSql($query,"",false))
					{
					trigger_error ("Failed to update contract details for booking amendment", E_USER_ERROR);
					$this->insertSuccessful =false;
					}

				jomres_audit(get_showtime('jomressession'),"Amend booking - contract updated ".$amend_contractuid);
				$dt=date("Y-m-d H-i-s");
				$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".RemoveXSS("Amend booking - contract updated ".$amend_contractuid)."','$dt','".(int)$property_uid."')";
				doInsertSql($query,"");
				
				if (get_showtime('include_room_booking_functionality'))
					{
					// Delete exisiting room booking - may be the same but easier to delete and insert
					$query="DELETE FROM #__jomres_room_bookings WHERE contract_uid = '$amend_contractuid'";
					if (!doInsertSql($query,""))
						trigger_error ("Unable to delete from room bookings table, mysql db failure", E_USER_ERROR);

					$rates_uids		= array();
					$dateRangeArray	= explode(",",$dateRangeString);
					for ($i=0, $n=count($dateRangeArray); $i < $n; $i++)
						{
						$roomBookedDate		= $dateRangeArray[$i];
						$internetBooking	= 0;
						$receptionBooking	= 1;
						$selected			= explode(",",$requestedRoom);
						foreach ($selected as $roomsRequested)
							{
							$rm				= explode("^",$roomsRequested);
							$rmuid			= $rm[0];
							$rates_uids[]	= $rm[1];

							$query="INSERT INTO #__jomres_room_bookings (`room_uid`,`date`,`contract_uid`,`internet_booking`,`reception_booking`,`property_uid`) VALUES ('$rmuid','$roomBookedDate','$amend_contractuid','$internetBooking','$receptionBooking','$property_uid')";
							if (!doInsertSql($query,"") )
								{
								trigger_error ("Failed to insert booking when inserting to contracts table ", E_USER_ERROR);
								$this->insertSuccessful =false;
								}
							}
						}
					}
					
				jomres_audit(get_showtime('jomressession'),"Amend booking - updated room booking ".$amend_contractuid);
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message("Amend booking - updated room booking ".$amend_contractuid);
				if (count($rates_uids)>1)
					$rates_uids			= array_unique($rates_uids);

				$this->insertBookingEventValues['cartnumber']			= $amend_contractuid;
				$this->insertBookingEventValues['tempBookingDataList']	= $tempBookingDataList;
				$this->insertBookingEventValues['guestDetails']			= $guestDetails;
				$this->insertBookingEventValues['guests_uid']			= $guests_uid;
				$this->insertBookingEventValues['property_uid']			= $property_uid;
				$this->insertBookingEventValues['arrivalDate']			= $arrivalDate;
				$this->insertBookingEventValues['departureDate']		= $departureDate;
				$this->insertBookingEventValues['contract_total']		= $contract_total;
				$this->insertBookingEventValues['rates_uids']			= $rates_uids;
				$this->insertBookingEventValues['requestedRoom']		= $roomsRequested;
				$this->insertBookingEventValues['contract_uid']			= $amend_contractuid;
				$this->insertBookingEventValues['insertSuccessful']		= $this->insertSuccessful;
				
				$MiniComponents->triggerEvent('03025',$componentArgs); // Generate invoice
				
				if ($this->insertSuccessful)
					gateway_log("j03020insertbooking :: Booking amendment successful ");
				else
					gateway_log("j03020insertbooking :: Booking amendment failed ");
				}
			else
				{
				$result = jomres_cmsspecific_createNewUserOnBooking();

				$guests_uid=insertGuestDeets(get_showtime('jomressession'));

				//var_dump($guests_uid);exit;
					
				// Disabled for v4.7.6
				// We will try to use the first 10 chars of the jomressession as our booking number. If we can't use it then we'll find a random number and append it to the end.
				// $session10Chars= substr(get_showtime('jomressession'), 0, 10);
				// $cartnumber=$session10Chars;
				// First let's generate a random number for our shopping cart.
				// if (!$usejomressessionasCartid)
					// {
					// $keeplooking=true;
					// while ($keeplooking):
						// $query="SELECT contract_uid FROM #__jomres_contracts WHERE tag like '".$cartnumber."' LIMIT 1";
						// $bklist=doSelectSql($query);
						// if (count($bklist)==0)
							// $keeplooking=false;
						// $cartnumber=mt_rand ( 10000000,99999999 );
					// endwhile;
					// }
				// else
					// $cartnumber=get_showtime('jomressession');
					
				$cartnumber=get_booking_number();
				
				gateway_log("j03020insertbooking :: Setting cart number. ".$cartnumber ." for ".get_showtime('jomressession'));

				
				foreach ($tempBookingDataList as $tempBookingData)
					{
					$requestedRoom=$tempBookingData->requestedRoom;

					$arrivalDate=$tempBookingData->arrivalDate;
					$departureDate=$tempBookingData->departureDate;
					$dateRangeString=$tempBookingData->dateRangeString;
					$property_uid=(int)$tempBookingData->property_uid;
					$rates_uid=$tempBookingData->rates_uid;
					$single_person_suppliment=$tempBookingData->single_person_suppliment;
					$deposit_required=$tempBookingData->deposit_required;
					$contract_total=$tempBookingData->contract_total;
					$extras=$tempBookingData->extras;
					$extrasquantities=$tempBookingData->extrasquantities;
					$extrasValue=$tempBookingData->extrasvalue;
					$specialReqs=addslashes($tempBookingData->error_log);
					$discount=$tempBookingData->discounts;
					$room_total=$tempBookingData->room_total;
					$tax=$tempBookingData->tax;
					$bookersUsername=$tempBookingData->bookersUsername;
					$coupon_id=$tempBookingData->coupon_id;
					if (strlen($bookersUsername) == 0)
						$bookersUsername="ANONYMOUS";
					
					// The extras quantites is passed with ALL extra uids and default quanties. At this point we will strip out the extra uid that weren't actually selected before adding the serialized extras quantities to the db
					$tmpextrasquantities = array();
					$currentExtras=explode(",",$extras);
					if (count($currentExtras) > 0)
						{
						foreach ($extrasquantities as $id=>$quan)
							{
							if (in_array($id,$currentExtras) )
								{
								$tmpextrasquantities[$id]=$quan;
								}
							}
						$extrasquantities=serialize($tmpextrasquantities);
						}
					else
						$extrasquantities="";
						
					$resource=$tempBookingData->resource;
					if ($resource=="1")
						$depositPaid=1;

					if (count($discount)>0)
						{
						$discount_details="";
						foreach ($discount as $d)
							{
							$discount_details .= serialize($d);
							}
						}
					// Now to double check that the rooms haven't been booked while this person was paying
					$dateRangeArray=explode(",",$dateRangeString);
					if (get_showtime('include_room_booking_functionality'))
						{
						for ($i=0, $n=count($dateRangeArray); $i < $n; $i++)
							{
							$roomBookedDate=$dateRangeArray[$i];
							$selected=explode(",",$requestedRoom);
							foreach ($selected as $roomsRequested)
								{
								$rm=explode("^",$roomsRequested);
								$rmuid=$rm[0];
								$rates_uids[]=$rm[1];
								$query="SELECT room_bookings_uid FROM #__jomres_room_bookings WHERE `room_uid` = '".(int)$rmuid."' AND `date` = '".$roomBookedDate."'";
								$result = doSelectSql($query);
								if (count($result)>0)
									{
									trigger_error ("Failed to insert booking looks like the room has been double booked ", E_USER_ERROR);
									$this->insertSuccessful =false;
									return false;
									}
								}
							}
						}
						
					// Let's get our guest type data
					$tmpArray=array();
					$variancetypes=explode(",",$tempBookingData->variancetypes);
					$varianceuids=explode(",",$tempBookingData->varianceuids);
					$varianceqty=explode(",",$tempBookingData->varianceqty);
					$variancevals=explode(",",$tempBookingData->variancevals);
					for ($i=0;$i<count($variancetypes);$i++)
						{
						if ($variancetypes[$i]=='guesttype' && $varianceqty[$i]>0 )
							{
							$id=$varianceuids[$i];
							$qty=$varianceqty[$i];
							$val=$variancevals[$i];
							$tmpArray[]= array('id'=>$id,'qty'=>$qty,'val'=>$val);
							}
						}
					$rateRules="";
					if (count($tmpArray)>0)
						{
						foreach ($tmpArray as $guestTypes)
							{
							$rateRules.="guesttype".'_'.$guestTypes['id'].'_'.$guestTypes['qty'].'_'.$guestTypes['val'].',';
							}
						}
					$mrConfig=getPropertySpecificSettings($property_uid);
					}
				$datetime=date("Y-m-d H-i-s");
				$ccode=$mrConfig['currencyCode'];
				$query="INSERT INTO #__jomres_contracts (
					`arrival`,`departure`,`rates_uid`,
					`guest_uid`,`rate_rules`,`rooms_tariffs`,`contract_total`,`special_reqs`,
					`deposit_paid`,`deposit_required`,
					`date_range_string`,`booked_in`,`booked_out`,
					`property_uid`,`single_person_suppliment`,`extras`,`extrasquantities`,`extrasvalue`,`tax`,`tag`,`timestamp`,`room_total`,`discount`,`currency_code`,`discount_details`,`username`,`coupon_id`)
					VALUES (
					'$arrivalDate','$departureDate','".(int)$rates_uid."',
					'".(int)$guests_uid."','$rateRules','".(string)$requestedRoom."', '".(float)$contract_total."','$specialReqs',
					'".(int)$depositPaid."','".(float)$deposit_required."',
					'$dateRangeString','0','0',
					'".(int)$property_uid."','".(float)$single_person_suppliment."','$extras','".(string)$extrasquantities."','".(float)$extrasValue."','".(float)$tax."','$cartnumber','$datetime','".(float)$room_total."','".(float)$discount."','$ccode','".$discount_details."','".$bookersUsername."',".(int)$coupon_id.")";
				$contract_uid=doInsertSql($query,"");

				if ($mrConfig['singleRoomProperty']==1)
					$newtext=$tmpBookingHandler->getBookingFieldVal("lastminutediscount");
				else
					$newtext=$tmpBookingHandler->getBookingFieldVal("wisepricediscount");
				$dt=date("Y-m-d H-i-s");
				$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".RemoveXSS($newtext)."','$dt','".(int)$property_uid."')";
				doInsertSql($query,"");

				if (empty($contract_uid) )
					{
					trigger_error ("Failed to insert booking when inserting to contracts table ", E_USER_ERROR);
					$this->insertSuccessful =false;
					}
					
				if (get_showtime('include_room_booking_functionality'))
					{
					$rates_uids=array();
					$dateRangeArray=explode(",",$dateRangeString);
					for ($i=0, $n=count($dateRangeArray); $i < $n; $i++)
						{
						$roomBookedDate=$dateRangeArray[$i];
						if ($userIsManager)
							{
							$internetBooking=0;
							$receptionBooking=1;
							}
						else
							{
							$internetBooking=1;
							$receptionBooking=0;
							}
						$selected=explode(",",$requestedRoom);
						foreach ($selected as $roomsRequested)
							{
							$rm=explode("^",$roomsRequested);
							$rmuid=$rm[0];
							$rates_uids[]=$rm[1];
							$query="INSERT INTO #__jomres_room_bookings (`room_uid`,`date`,`contract_uid`,`internet_booking`,`reception_booking`,`property_uid`) VALUES ('".(int)$rmuid."','$roomBookedDate','".(int)$contract_uid."','".(int)$internetBooking."','".(int)$receptionBooking."','".(int)$property_uid."')";
							if (!doInsertSql($query,"") )
								{
								trigger_error ("Failed to insert booking when inserting to contracts table ", E_USER_ERROR);
								$this->insertSuccessful =false;
								}
							jomres_audit(get_showtime('jomressession'),"Booked room ".$cartnumber);
							}
						}

					if (count($rates_uids)>1)
						$rates_uids=array_unique($rates_uids);
					jomres_audit($cartnumber,_JOMRES_MR_AUDIT_BOOKED_ROOM);
					}
				
				$componentArgs=array();
				$componentArgs['cartnumber']=$cartnumber;
				$componentArgs['tempBookingDataList']=$tempBookingDataList;
				$componentArgs['guestDetails']=$guestDetails;
				$componentArgs['guests_uid']=$guests_uid;
				$componentArgs['property_uid']=$property_uid;
				$componentArgs['arrivalDate']=$arrivalDate;
				$componentArgs['departureDate']=$departureDate;
				$componentArgs['contract_total']=$contract_total;
				$componentArgs['extrasValue']=$extrasValue;
				$componentArgs['room_total']=$room_total;
				$componentArgs['rates_uids']=$rates_uids;
				$componentArgs['requestedRoom']=$roomsRequested;
				$componentArgs['contract_uid']=$contract_uid;
				$componentArgs['specialReqs']=$specialReqs;
				$componentArgs['extras']=$extras;
				$componentArgs['deposit_required']=$deposit_required;
				
				if ($this->insertSuccessful)
					{
					$MiniComponents->triggerEvent('03025',$componentArgs); // Generate invoice
					$MiniComponents->triggerEvent('03100',$componentArgs); // Generate hotel confirmation email
					$MiniComponents->triggerEvent('03110',$componentArgs); // Generate guest confirmation email
					$MiniComponents->triggerEvent('03200',$componentArgs); // post insert booking functionality
					}
				
				jomres_audit("Cart number ".$cartnumber,_JOMRES_MR_AUDIT_BOOKED_ROOM);
				$this->insertBookingEventValues['cartnumber']=$cartnumber;
				$this->insertBookingEventValues['tempBookingDataList']=$tempBookingDataList;
				$this->insertBookingEventValues['guestDetails']=$guestDetails;
				$this->insertBookingEventValues['guests_uid']=$guests_uid;
				$this->insertBookingEventValues['property_uid']=$property_uid;
				$this->insertBookingEventValues['arrivalDate']=$arrivalDate;
				$this->insertBookingEventValues['departureDate']=$departureDate;
				$this->insertBookingEventValues['contract_total']=$contract_total;
				$this->insertBookingEventValues['rates_uids']=$rates_uids;
				$this->insertBookingEventValues['requestedRoom']=$roomsRequested;
				$this->insertBookingEventValues['contract_uid']=$contract_uid;
				
				$this->insertBookingEventValues['insertSuccessful']=$this->insertSuccessful;
				gateway_log("j03020insertbooking insertBookingEventValues :: ".serialize($this->insertBookingEventValues) );
				
				if ($this->insertSuccessful)
					gateway_log("j03020insertbooking :: Booking insert Successful ");
				else
					gateway_log("j03020insertbooking :: Booking insert failed ");
				}
				
			$bookingNotes = $tempBookingData->booking_notes;
			foreach ($bookingNotes as $k=>$v)
				{
				$note = " ".$k." ".$v."<br/>";
				$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".$note."','$dt','".(int)$property_uid."')";
				doInsertSql($query,"");
				}

			jr_import('jomres_custom_field_handler');
			$custom_fields = new jomres_custom_field_handler();
			$allCustomFields = $custom_fields->getAllCustomFields();
			if (count($allCustomFields)>0)
				{
				$note="";
				foreach ($allCustomFields as $f)
					{
					$formfieldname = $f['fieldname']."_".$f['uid'];
					$note .= $f['description']." ".$tmpBookingHandler->tmpbooking[$formfieldname]."<br/>";
					}
				$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".$note."','$dt','".(int)$property_uid."')";
				doInsertSql($query,"");
				}
			}
		jr_import('jomres_cache');
		$cache = new jomres_cache("",$property_uid);
		$cache->trashCacheForProperty($property_uid);
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
		if ($this->insertSuccessful)
			return $this->insertBookingEventValues;
		else
			return false;
		}
	}
?>