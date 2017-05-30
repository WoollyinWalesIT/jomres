<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
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
        try {
            $this->validate();
            $amendSuccessful = $this->do_amend_booking();

            return $amendSuccessful;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    private function validate()
    {
        if ($this->contract_uid == 0) {
            throw new Exception('Error contract_uid is not valid');
        }

        if ($this->room_uid == 0) {
            throw new Exception('Error room_uid is not valid');
        }

        if ($this->new_room_uid == 0) {
            throw new Exception('Error new_room_uid is not valid');
        }

        if (!is_array($this->this_contract_room_uids)) {
            throw new Exception('Error this_contract_room_uids is not valid');
        }

        if (is_array($this->this_contract_room_uids) && empty($this->this_contract_room_uids)) {
            throw new Exception('Error this_contract_room_uids is not valid');
        }

        //let`s set the date range array for the new contract dates
        $this->date_range_array = findDateRangeForDates($this->arrival, $this->last_booked_date);

        $query = 'SELECT `room_bookings_uid`,`date` FROM #__jomres_room_bookings WHERE `room_uid` = '.(int) $this->room_uid.' AND `contract_uid` = '.(int) $this->contract_uid.' ORDER BY `date` ASC ';
        $result = doSelectSql($query);

        if (!empty($result)) {
            foreach ($result as $r) {
                $this->contract_booked_dates[] = $r->date;
            }

            asort($this->contract_booked_dates);

            if (count($this->date_range_array) != count($this->contract_booked_dates)) {
                $this->event_resized = true;
            }

            $first_day = reset($this->contract_booked_dates);
            $last_day = end($this->contract_booked_dates);

            if ($this->arrival == $first_day && $this->last_booked_date == $last_day) {
                //dates not changed, so this is just a room switch
                return true;
            } else {
                //dates changed, so we need to go further and check availability for all rooms in this contract_uid. We can`t amend just one room and change it`s dates, since there maybe be more rooms in this contract, so all have to be moved to the new dates. This doesn`t also update the price. Maybe with the new booking engine we will update prices too.
                $this->dates_changed = true;

                if ($this->check_availability()) {
                    return true;
                } else {
                    throw new Exception('Not all rooms included in this booking are available for the new selected dates');
                }
            }
        } else {
            throw new Exception('Cound not get room booking details');
        }

        return true;
    }

    private function init()
    {
        $this->property_uid = 0; // 1 ***** Required *****
        $this->contract_uid = 0; // (int) ***** Required *****
        $this->room_uid = 0; // (int) ***** Required *****
        $this->new_room_uid = 0; // (int) ***** Required *****
        $this->arrival = ''; // (date) ***** Required *****
        $this->departure = ''; // (date) ***** Required *****
        $this->last_booked_date = ''; // (date) last date to be marked as booked for this contract
        $this->date_range_array = array(); //(array) booked dates array
        $this->contract_booked_dates = array(); //(array) originally booked dates in db for this contract
        $this->note = ''; // (string) optional booking note
        $this->this_contract_room_uids = array(); // (array) array of this contract room uids
        $this->dates_changed = false; //(bool) dates also changed for this booking, or it`s just a room switch. By default it`s just a room switch
        $this->event_resized = false; //(bool) event was resized or not. If it was resized, we check availability by excluding the booked rooms uids

        return true;
    }

    private function do_amend_booking()
    {
        if ($this->do_amend_contract() && $this->do_insert_booking_note()) {
            return true;
        } else {
            return false;
        }
    }

    private function do_amend_contract()
    {
        $clause = '';

        if ($this->dates_changed) {
            $clause .= " `arrival` = '".$this->arrival."' , `departure` = '".$this->departure."' , `date_range_string` = '".implode(',', $this->date_range_array)."' ";
        }

        //get the contract room^tariff pairs
        $query = 'SELECT `rooms_tariffs` FROM #__jomres_contracts WHERE `contract_uid` = '.(int) $this->contract_uid;
        $result = doSelectSql($query, 1);

        if (!empty($result)) {
            $room_and_tariff_info = explode(',', $result);
            foreach ($room_and_tariff_info as $e) {
                $rt = explode('^', $e);
                if (isset($rt[ 1 ])) {
                    $pairs[$rt[ 0 ]] = $rt[ 1 ];
                }
            }

            $new_room_and_tariff_info = array();
            if (!empty($pairs)) {
                foreach ($pairs as $k => $v) {
                    if ($k == $this->room_uid) {
                        unset($pairs[$k]);
                        $new_pairs[$this->new_room_uid] = $v;
                    } else {
                        $new_pairs[$k] = $v;
                    }
                }

                foreach ($new_pairs as $k => $v) {
                    $new_room_and_tariff_info[] = $k.'^'.$v;
                }
            }
            $rooms_tariffs = implode(',',$new_room_and_tariff_info);

            if ($clause != '') {
                $clause .= ', ';
            }

            $clause .= " `rooms_tariffs`= '".$rooms_tariffs."' ";
        }

        //update the contract table: arrival, departure and room^tariff pairs
        if ($clause != '') {
            $query = "UPDATE #__jomres_contracts SET $clause WHERE `contract_uid` = ".(int) $this->contract_uid;
            if (!doInsertSql($query, '')) {
                throw new Exception('Unable to update the contracts table for contract '.(int) $this->contract_uid.', mysql db failure.');
            }
        }

        if ($this->dates_changed) {
            //get the old room booking data
            $query = 'SELECT 
							`black_booking`, 
							`reception_booking`, 
							`internet_booking`, 
							`property_uid` 
						FROM #__jomres_room_bookings 
						WHERE `contract_uid` = '.(int) $this->contract_uid.' 
							AND `room_uid` = '.(int) $this->room_uid.' 
						LIMIT 1 ';
            $old_room_booking_data = doSelectSql($query, 2);

            //delete all room bookings data for this contract
            $query = 'DELETE FROM #__jomres_room_bookings WHERE `contract_uid` = '.(int) $this->contract_uid;
            if (!doInsertSql($query, '')) {
                throw new Exception('Unable to delete old room booking data for '.(int) $this->contract_uid.', mysql db failure.');
            }

            //insert new room booking data
            $query = 'INSERT INTO #__jomres_room_bookings 
										(
										`room_uid`,
										`date`,
										`contract_uid`,
										`black_booking`,
										`reception_booking`,
										`internet_booking`,
										`property_uid`
										)
							VALUES ';

            foreach ($this->this_contract_room_uids as $room_uid) {
                foreach ($this->date_range_array as $date) {
                    $query .= '( 
								'.(int) $room_uid.", 
								'".$date."', 
								".(int) $this->contract_uid.', 
								'.(int) $old_room_booking_data['black_booking'].',
								'.(int) $old_room_booking_data['reception_booking'].', 
								'.(int) $old_room_booking_data['internet_booking'].', 
								'.(int) $old_room_booking_data['property_uid'].'
								),';
                }
            }

            $query = rtrim($query, ',');
            if (!doInsertSql($query, '')) {
                throw new Exception('Unable to update room booking data for contract uid '.(int) $this->contract_uid.', mysql db failure.');
            }
        } else {
            //update room bookings table
            $query = 'UPDATE #__jomres_room_bookings SET `room_uid`= '.(int) $this->new_room_uid.' WHERE `contract_uid` = '.(int) $this->contract_uid.' AND `room_uid` = '.(int) $this->room_uid.' ';
            if (!doInsertSql($query, '')) {
                throw new Exception('Unable to update room uid contract '.(int) $this->contract_uid.', mysql db failure.');
            }
        }

        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'booking_modified';
        $webhook_notification->webhook_event_description    = 'Logs when a booking is modified.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $this->property_uid;
        $webhook_notification->data->contract_uid           = $this->contract_uid;
        add_webhook_notification($webhook_notification);
        
        return true;
    }

    private function do_insert_booking_note()
    {
        //insert booking note (if set)
        if ($this->note != '') {
            $query = "INSERT INTO #__jomcomp_notes 
									(`contract_uid`,
									`note`,
									`timestamp`,
									`property_uid`
									) 
							VALUES ('" .(int) $this->contract_uid."',
									'" .$this->note."',
									'" .date('Y-m-d H:i:s')."',
									'" .(int) $this->property_uid."'
									)
							";
            if (!doInsertSql($query, '')) {
                throw new Exception('Unable to insert booking note for contract '.(int) $this->contract_uid.', mysql db failure.');
            }
        }

        return true;
    }

    private function check_availability()
    {
        //if the dragged room has been changed, let`s remove the old room from this_contract_room_uids too. The rest of the rooms of this contract will remain the same.
        $this->this_contract_room_uids = array_diff($this->this_contract_room_uids, array('0' => $this->room_uid));

        //now let`s add the new room uid to this_contract_room_uids
        $this->this_contract_room_uids[] = $this->new_room_uid;

        //let`s set the date range array for the new contract dates
        $this->date_range_array = findDateRangeForDates($this->arrival, $this->last_booked_date);

        //let`s check availability for the room uids in this_contract_room_uids
        if (!$this->event_resized) {
            $clause = ' `date` IN ('.jomres_implode($this->date_range_array, false).')';
        } else {
            if (count($this->date_range_array) > count($this->contract_booked_dates)) {
                $booked_dates_diff = array_diff($this->date_range_array, $this->contract_booked_dates);
            } else {
                //resized the event to a shorter period, so the rooms are already booked in this contract
                return true;
            }

            if (!empty($booked_dates_diff)) {
                $clause = ' `date` IN ('.jomres_implode($booked_dates_diff, false).')';
            } else {
                throw new Exception('Something went wrong.');
            }
        }

        $query = 'SELECT `room_bookings_uid` FROM #__jomres_room_bookings 
						WHERE `room_uid` IN ('.jomres_implode($this->this_contract_room_uids).")  
						AND $clause 
						AND `contract_uid` != ".(int) $this->contract_uid.' ';

        $result = doSelectSql($query);

        if (!empty($result)) {
            return false;
        }

        return true;
    }
}
