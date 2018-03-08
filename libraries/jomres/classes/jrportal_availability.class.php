<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-alpha1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_availability
{
	protected $property_uid;
	
	protected $arrival;
	
	protected $departure;
	
	protected $room_uids;
	
    public function __construct($property_uid = 0, $arrival = '', $departure = '', $room_uids = array())
    {
		$this->property_uid = $property_uid;	//required

		$this->arrival = $arrival;				//date required
		$this->departure = $departure;			//date required
		$this->room_uids = $room_uids;			//array of room uids, required
		
		$this->validate();
    }
	
	public function check_availability()
	{
		$date_range = findDateRangeForDates($this->arrival, $this->departure);
		array_pop($date_range);
		
		$query="SELECT `room_bookings_uid` FROM #__jomres_room_bookings WHERE `room_uid` IN (".jomres_implode($this->room_uids).") AND `date` IN (".jomres_implode($date_range, false).") ";
		$result = doSelectSql($query);
		
		if (!empty($result)) {
			return false;
		}
		
		return true;
	}
	
	private function validate()
    {
        if ($this->arrival == '') {
            throw new Exception(' Arrival date is not valid');
        }
        
		if ($this->departure == '') {
            throw new Exception(' Departure date is not valid');
        }
        
		if (!is_array($this->room_uids) || empty($this->room_uids)) {
            throw new Exception(' Room uids array not set');
        }
        
		if ($this->property_uid == 0) {
            throw new Exception(' Error property_uid is not valid');
        }

        return true;
    }
}
