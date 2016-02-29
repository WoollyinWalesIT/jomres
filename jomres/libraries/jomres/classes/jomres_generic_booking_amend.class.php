<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_generic_booking_amend
	{
	public function __construct()
		{
		$this->init();
		return true;
		}
	
	public function amend_booking()
		{
		$amendSuccessful = false;
		try
			{
			$this->validate();
			$amendSuccessful = $this->do_amend_booking();
			return $amendSuccessful;
			}
		catch(Exception $e)
			{
			return $e->getMessage();
			}
		}
	
	private function validate()
		{
		if ( $this->contract_uid == 0 )
			{
			throw new Exception("Error contract_uid is not valid");
			}
		
		if ( $this->room_uid == 0 )
			{
			throw new Exception("Error room_uid is not valid");
			}
		
		$query = "SELECT `room_bookings_uid`,`date` FROM #__jomres_room_bookings WHERE `room_uid` = ".(int)$this->room_uid." AND `contract_uid` = ".(int)$this->contract_uid." ORDER BY `date` ASC ";
		$result = doSelectSql( $query );

		if ( count($result) > 0 )
			{
			$booked_dates = array();
			
			foreach ( $result as $r )
				{
				$booked_dates[] = $r->date;
				}
			
			asort($booked_dates);

			// We'll look for any bookings with a different contract uid in these dates for the target room. If there are, then the room can't be booked as there's already another booking occupying that room on one or more dates.
			$query = "SELECT `contract_uid` FROM #__jomres_room_bookings WHERE `room_uid` = ".(int)$this->new_room_uid." AND `date` IN ('" . implode('\',\'',$booked_dates) ."') ";;
			$new_room_existing_bookings = doSelectSql( $query );
			$room_already_occupied = false;
			if (count($new_room_existing_bookings)>0)
				{
				foreach ($new_room_existing_bookings as $existing_booking)
					{
					if ( $existing_booking->contract_uid != $this->contract_uid)
						{
						$room_already_occupied = true;
						}
					}
				}
			
			if ($room_already_occupied)
				throw new Exception("The target room is already booked on those dates."); 

			}
		else
			throw new Exception("Cound not get room booking details");

		return true;
		}
	
	private function init()
		{
		$this->property_uid = 0;		// 1 ***** Required *****
		$this->contract_uid = 0;		// (int) ***** Required *****
		$this->room_uid = 0;			// (int) ***** Required *****
		$this->new_room_uid = 0;		// (int) ***** Required *****
		$this->arrival = '';			// (date) ***** Required *****
		$this->departure = '';			// (date) ***** Required *****
		$this->note = '';				// (string) optional booking note
		
		return true;
		}
	
	private function do_amend_booking() 
		{
		//get the contract room^tariff pairs
		$query = "SELECT `rooms_tariffs` FROM #__jomres_contracts WHERE `contract_uid` = ".(int)$this->contract_uid." ";
		$result = doSelectSql( $query,1 );
		
		if ( $result )
			{
			$room_and_tariff_info = explode( ",", $result );
			foreach ( $room_and_tariff_info as $e )
				{
				$rt = explode( "^", $e );
				$pairs[$rt[ 0 ]] = $rt[ 1 ];
				}
			
			foreach ($pairs as $k=>$v)
				{
				if ($k == $this->room_uid)
					{
					unset($pairs[$k]);
					$new_pairs[$this->new_room_uid] = $v;
					}
				else
					$new_pairs[$k] = $v;
				}
			
			foreach ($new_pairs as $k=>$v)
				{
				$new_room_and_tariff_info[] = $k.'^'.$v;
				}
			
			$rooms_tariffs = implode(',', $new_room_and_tariff_info);
			
			//update the room^tariff pairs in db
			
			$true_departure = date("Y/m/d" ,strtotime ($this->departure.' +1 day') );
			$date_range = get_periods($this->arrival , $true_departure ); // The get periods function assumes that the departure date is the second date provided, so we need to manually add one day to it here 
			$query = "UPDATE #__jomres_contracts SET `rooms_tariffs`= '".$rooms_tariffs."' , `arrival` = '".$this->arrival."' , `departure` = '".$true_departure."' ,`date_range_string` = '".implode(",",$date_range)."'  WHERE `contract_uid` = ".(int)$this->contract_uid." ";

			if ( !doInsertSql( $query, "" ) )
				{
				throw new Exception("Unable to update rooms_tariffs in contracts table for contract " . (int) $this->contract_uid . ", mysql db failure.");
				}
			}
		
		$query = "SELECT `black_booking` , `reception_booking` , `internet_booking` , `property_uid` FROM #__jomres_room_bookings WHERE `contract_uid` = ".(int)$this->contract_uid." AND `room_uid` = ".(int)$this->room_uid." LIMIT 1";
		$old_booking_room_data = doSelectSql( $query,2 );

		$query = "DELETE FROM #__jomres_room_bookings WHERE `contract_uid` = ".(int)$this->contract_uid." AND `room_uid` = ".(int)$this->room_uid." ";
		if ( !doInsertSql( $query, "" ) )
			{
			throw new Exception("Unable to delete old room booking data for " . (int) $this->contract_uid . ", mysql db failure.");
			}
		
		$count = count($date_range);

		$query = "INSERT INTO #__jomres_room_bookings (
				`room_uid`,
				`date`,
				`contract_uid`,
				`black_booking`,
				`reception_booking`,
				`internet_booking`,
				`property_uid`
				)
			VALUES ";
			
		for ( $i = 0; $i < $count; $i++ )
			{
			$query .="(
				" .$this->new_room_uid . ",
				'" . $date_range[$i] . "',
				" .$this->contract_uid . ",
				'" .$old_booking_room_data['black_booking'] . "',
				'" .$old_booking_room_data['reception_booking'] . "',
				'" .$old_booking_room_data['internet_booking'] . "',
				'" .$old_booking_room_data['property_uid'] . "'
				),";
			}
		$query = rtrim($query, ",");

		if ( !doInsertSql( $query, "" ) )
			{
			throw new Exception("Unable to update room booking data for contract uid " . (int) $this->contract_uid . ", mysql db failure.");
			} 

		//insert booking note (if set)
		if ( $this->note != "" )
			{
			$query = "INSERT INTO #__jomcomp_notes 
									(`contract_uid`,
									`note`,
									`timestamp`,
									`property_uid`
									) 
							VALUES ('" . (int) $this->contract_uid . "',
									'" . $this->note . "',
									'" . date( 'Y-m-d H:i:s' ) . "',
									'" . (int) $this->property_uid . "'
									)
							";
			if ( !doInsertSql( $query, "" ) )
				{
				throw new Exception("Unable to insert booking note for contract " . (int) $this->contract_uid . ", mysql db failure.");
				}
			}

		return true;
		}

	}
