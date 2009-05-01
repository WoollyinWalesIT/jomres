<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Saves a black booking
 #
* @package Jomres
#
 */
class j02136saveblackbooking {
	/**
	#
	 * Constructor: Saves a black booking
	#
	 */
	function j02136saveblackbooking()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$start=JSCalConvertInputDates($_POST['start']);
		$end=JSCalConvertInputDates($_POST['end']);
		$bbReason	= getEscaped( jomresGetParam( $_POST, 'bbReason', "" ) );
		$row = jomresGetParam( $_POST, 'idarray', array() );
		if (count($row)>0)
			{
			$dateRangeArray= $this->bb_getDateRange($start,$end);
			$okToContinue=TRUE;
			// Now let's double check the chosen rooms
			foreach ($dateRangeArray as $theDate)
				{
				foreach ($row as $room_uid)
					{
					$query="SELECT room_bookings_uid,contract_uid FROM #__jomres_room_bookings WHERE room_uid = '".(int)$room_uid."' AND date = '$theDate'";
					$bookingsList = doSelectSql($query);
					if (count($bookingsList)!=0)
						$okToContinue=FALSE;
					}
				}
			if (!$okToContinue)
				{
				echo jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR);
				}
			else
				{
				$numberOfAdults="0";
				$numberOfChildren="0";
				$arrivalDate=$start;
				$departureDate=$end;
				$dateRangeString=implode(",",$dateRangeArray);
				$guests_uid="0";
				$rates_uid="0";
				$cotRequired="0";
				$rate_rules="0";
				$single_person_suppliment="0";
				$deposit_required="0";
				$contract_total="0";
				$specialReqs=$bbReason;
				$cot_suppliment="0";
				$extras="0";
				$extrasValue="0";

				$query="INSERT INTO #__jomres_contracts (
						`arrival`,`departure`,`rates_uid`,
						`guest_uid`,`contract_total`,`special_reqs`,
						`adults`,`children`,`deposit_paid`,`deposit_required`,
						`date_range_string`,`booked_in`,`booked_out`,`rate_rules`,
						`property_uid`,`single_person_suppliment`,`extras`,`extrasvalue`)
						VALUES (
						'$arrivalDate','$departureDate','".(int)$rates_uid."',
						'".(int)$guests_uid."','".(float)$contract_total."','$specialReqs',
						'$numberOfAdults','$numberOfChildren','0','".(float)$deposit_required."',
						'$dateRangeString','0','0','$rate_rules',
						'".(int)$defaultProperty."','".(float)$single_person_suppliment."','$extras','".(float)$extrasValue."')";
				if ( !doInsertSql($query,'') )
					trigger_error ("Unable to insert into contracts table, mysql db failure", E_USER_ERROR);
				else
					{
					$contract_uid=mysql_insert_id();
					jomres_audit($query,jr_gettext('_JOMRES_MR_AUDIT_BLACKBOOKING',_JOMRES_MR_AUDIT_BLACKBOOKING,FALSE));
					if ($contract_uid)
						{
						foreach ($row as $room_uid)
							{
							$dateRangeArray=explode(",",$dateRangeString);
							 $query="INSERT INTO #__jomres_room_bookings
								(`room_uid`,
								`date`,
								`contract_uid`,
								`black_booking`,
								`internet_booking`,
								`reception_booking`,
								`property_uid`)
								VALUES ";
							for ($i=0, $n=count($dateRangeArray); $i < $n; $i++)
								{
								$internetBooking=0;
								$receptionBooking=0;
								$blackBooking=1;
								$roomBookedDate=$dateRangeArray[$i];
								// Thanks Netized
								 $query.= ($i>0) ? ', ':'';
								//$query="INSERT INTO #__jomres_room_bookings (`room_uid`,`date`,`contract_uid`,`black_booking`,`internet_booking`,`reception_booking`,`property_uid`) VALUES ('".(int)$room_uid."','$roomBookedDate','".(int)$contract_uid."','".(int)$blackBooking."','".(int)$internetBooking."','".(int)$receptionBooking."','".(int)$defaultProperty."')";
								$query.="('".(int)$room_uid."','$roomBookedDate','".(int)$contract_uid."','".(int)$blackBooking."','".(int)$internetBooking."','".(int)$receptionBooking."','".(int)$defaultProperty."')";
								//if (!doInsertSql($query,''))
								//	trigger_error ("Unable to insert into room bookings table, mysql db failure", E_USER_ERROR);
								}
							if (!doInsertSql($query,''))
								trigger_error ("Unable to insert into room bookings table, mysql db failure", E_USER_ERROR);
							}
						jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listBlackBookings") ,"" );
						}
					else
						trigger_error ("Error after inserting to contracts table, no contract uid returned.", E_USER_ERROR);
					}
				}
			}
			
		else
			echo "Error, no rooms were selected";
		}


	#
	/**
	#
	 * Returns the date range array for the black booking
	#
	 */
	function bb_getDateRange($start,$end)
		{
		$interval=dateDiff("d",$start,$end);
		$dateRangeArray=array();
		$date_elements  = explode("/",$start);
		$unixCurrentDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$secondsInDay = 86400;
		$currentUnixDay=$unixCurrentDate;
		$currentDay=$start;
		for ($i=0, $n=$interval; $i < $n; $i++)
			{
			$currentDay=date("Y/m/d",$unixCurrentDate);
			$dateRangeArray[]=$currentDay;
			//echo $currentDay;
			$unixCurrentDate=$unixCurrentDate+$secondsInDay;
			}
		$dateRangeString=implode(",",$dateRangeArray);
		return $dateRangeArray;
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