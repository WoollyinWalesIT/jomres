<?php
/**
#
 * Mini-component core file: Inserts the booking
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$jrConfig,$jomresConfig_live_site,$jomresProccessingBookingObject,$tmpBookingHandler;
		$jomressession=$componentArgs['jomressession'];
		$depositPaid=$componentArgs['depositPaid'];
		if (isset($componentArgs['usejomressessionasCartid']) )
			$usejomressessionasCartid=$componentArgs['usejomressessionasCartid'];
		else
			$usejomressessionasCartid=false;
		$usejomressessionasCartid=false;
		$userIsManager=checkUserIsManager();
		$jomresProccessingBookingObject=getCurrentBookingData($jomressession);
		$guestDetails 			=$jomresProccessingBookingObject->guestDetails;
		$tempBookingDataList 	=$jomresProccessingBookingObject->tempBookingDataList;
		system_log("Attempting to insert booking jsid: ".$jomressession);

		if (count($guestDetails)==0)
			{
			trigger_error ("Failed to insert booking: No guest details ", E_USER_ERROR);
			$this->insertSuccessful = false;
			}
		if (count($tempBookingDataList)==0)
			{
			system_log("Failed to insert booking: Booking data not found. Probably already booking inserted. ".$jomressession);
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
				system_log("Amending contract. ".$amend_contractuid ." for ".$jomressession);

				$guests_uid		= insertGuestDeets($jomressession);

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
					$extrasValue				= $tempBookingData->extrasvalue;
					$specialReqs				= addslashes($tempBookingData->error_log);
					$discount					= $tempBookingData->discount;
					$room_total					= $tempBookingData->room_total;
					$tax						= $tempBookingData->tax;

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
					`deposit_paid`				= '$depositPaid',
					`deposit_required`			= '$deposit_required',
					`date_range_string`			= '$dateRangeString',
					`property_uid`				= '$property_uid',
					`single_person_suppliment`	= '$single_person_suppliment',
					`extras`					= '$extras',
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

				audit($jomressession,"Amend booking - contract updated ".$amend_contractuid);
				$dt=date("Y-m-d H-i-s");
				$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','".RemoveXSS("Amend booking - contract updated ".$amend_contractuid)."','$dt','".(int)$property_uid."')";
				doInsertSql($query,"");

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

				audit($jomressession,"Amend booking - updated room booking ".$amend_contractuid);

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
				if ($this->insertSuccessful)
					system_log("Booking amendment successful ");
				else
					system_log("Booking amendment failed ");
				}
			else
				{
				// We will try to use the first 10 chars of the jomressession as our booking number. If we can't use it then we'll find a random number and append it to the end.
				$session10Chars= substr($jomressession, 0, 10);
				$cartnumber=$session10Chars;
				// First let's generate a random number for our shopping cart.
				if (!$usejomressessionasCartid)
					{
					$keeplooking=true;
					while ($keeplooking):
						$query="SELECT contract_uid FROM #__jomres_contracts WHERE tag like '".$cartnumber."' LIMIT 1";
						$bklist=doSelectSql($query);
						if (count($bklist)==0)
							$keeplooking=false;
						$cartnumber=mt_rand ( 10000000,99999999 );
					endwhile;
					}
				else
					$cartnumber=$jomressession;
				system_log("Setting cart number. ".$cartnumber ." for ".$jomressession);

				$guests_uid=insertGuestDeets($jomressession);
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
					$extrasValue=$tempBookingData->extrasvalue;
					$specialReqs=addslashes($tempBookingData->error_log);
					$discount=$tempBookingData->discounts;
					$room_total=$tempBookingData->room_total;
					$tax=$tempBookingData->tax;
					$bookersUsername=$tempBookingData->bookersUsername;
					if (strlen($bookersUsername) == 0)
						$bookersUsername="ANONYMOUS";
					
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
					`property_uid`,`single_person_suppliment`,`extras`,`extrasvalue`,`tax`,`tag`,`timestamp`,`room_total`,`discount`,`currency_code`,`discount_details`,`username`)
					VALUES (
					'$arrivalDate','$departureDate','".(int)$rates_uid."',
					'".(int)$guests_uid."','$rateRules','".(string)$requestedRoom."', '".(float)$contract_total."','$specialReqs',
					'".(int)$depositPaid."','".(float)$deposit_required."',
					'$dateRangeString','0','0',
					'".(int)$property_uid."','".(float)$single_person_suppliment."','$extras','".(float)$extrasValue."','".(float)$tax."','$cartnumber','$datetime','".(float)$room_total."','".(float)$discount."','$ccode','".$discount_details."','".$bookersUsername."')";
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
						audit($jomressession,"Booked room ".$cartnumber);
						}
					}

				if (count($rates_uids)>1)
					$rates_uids=array_unique($rates_uids);
				audit($cartnumber,_JOMRES_MR_AUDIT_BOOKED_ROOM);
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
					$MiniComponents->triggerEvent('03100',$componentArgs); // Generate hotel confirmation email
					$MiniComponents->triggerEvent('03110',$componentArgs); // Generate guest confirmation email
					$MiniComponents->triggerEvent('03200',$componentArgs); // post insert booking functionality
					}
				audit("Cart number ".$cartnumber,_JOMRES_MR_AUDIT_BOOKED_ROOM);
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
				if ($this->insertSuccessful)
					system_log("Booking insert Successful ");
				else
					system_log("Booking insert failed ");
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