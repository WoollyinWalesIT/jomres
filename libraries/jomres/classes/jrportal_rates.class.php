<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jrportal_rates
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->init_rate();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init_rate()
	{
		$this->property_uid = 0;
		
		$this->tarifftype_id = 0;
		
		$this->rates = array();
		
		//default values for new tariffs
		$this->rates_defaults = array();
		$this->rates_defaults['rate_title'] 				= 'Tariff';
		$this->rates_defaults['rate_description'] 			= '';
		$this->rates_defaults['validfrom'] 					= date("Y/m/d");
		$this->rates_defaults['validto'] 					= date("Y/m/d");
		$this->rates_defaults['roomrateperday'] 			= 100;
		$this->rates_defaults['extra_guests_price'] 		= 0.00;
		$this->rates_defaults['modifiers']			 		= array();
		$this->rates_defaults['mindays'] 					= 1;
		$this->rates_defaults['maxdays'] 					= 365;
		$this->rates_defaults['minpeople'] 					= 1;
		$this->rates_defaults['maxpeople']					= 100;
		$this->rates_defaults['roomclass_uid'] 				= 0;
		$this->rates_defaults['ignore_pppn'] 				= 0;
		$this->rates_defaults['allow_ph'] 					= 1;
		$this->rates_defaults['allow_we'] 					= 1;
		$this->rates_defaults['weekendonly'] 				= 0;
		$this->rates_defaults['validfrom_ts'] 				= date("Y-m-d");
		$this->rates_defaults['validto_ts'] 				= date("Y-m-d");
		$this->rates_defaults['dayofweek'] 					= 7;
		$this->rates_defaults['minrooms_alreadyselected'] 	= 0;
		$this->rates_defaults['maxrooms_alreadyselected'] 	= 100;
		$this->rates_defaults['years_to_show'] 				= 2;
		
		//used for new tariffs or when updating tariffs
		$this->rates_uid 				= 0;
		$this->rate_title 				= $this->rates_defaults['rate_title'];
		$this->rate_description 		= $this->rates_defaults['rate_description'];
		$this->validfrom 				= $this->rates_defaults['validfrom'];
		$this->validto					= $this->rates_defaults['validto'];
		$this->roomrateperday 			= $this->rates_defaults['roomrateperday'];
		$this->extra_guests_price		= $this->rates_defaults['extra_guests_price'];
		$this->modifiers				= $this->rates_defaults['modifiers'];
		$this->mindays 					= $this->rates_defaults['mindays'];
		$this->maxdays 					= $this->rates_defaults['maxdays'];
		$this->minpeople 				= $this->rates_defaults['minpeople'];
		$this->maxpeople				= $this->rates_defaults['maxpeople'];
		$this->roomclass_uid 			= $this->rates_defaults['roomclass_uid'];
		$this->ignore_pppn 				= $this->rates_defaults['ignore_pppn'];
		$this->allow_ph 				= $this->rates_defaults['allow_ph'];
		$this->allow_we 				= $this->rates_defaults['allow_we'];
		$this->weekendonly 				= $this->rates_defaults['weekendonly'];
		$this->validfrom_ts 			= $this->rates_defaults['validfrom_ts'];
		$this->validto_ts 				= $this->rates_defaults['validto_ts'];
		$this->dayofweek 				= $this->rates_defaults['dayofweek'];
		$this->minrooms_alreadyselected = $this->rates_defaults['minrooms_alreadyselected'];
		$this->maxrooms_alreadyselected = $this->rates_defaults['maxrooms_alreadyselected'];
		$this->dates_rates				= array(); //example: array(unixtime => rate) TODO make it use date(Ymd)
		$this->dates_mindays			= array(); //example: array(unixtime => mindays) TODO make it use date(Ymd)
		$this->new_rates 				= array();
		$this->new_rates_uids 			= array();
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Get all tariff details by tariff type id
	public function get_rate()
	{
		if ($this->tarifftype_id == 0) {
			throw new Exception('Error: tarifftype_id not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		//check if we already have the details of this tarifftype id
		if (isset($this->rates[$this->tarifftype_id])) {
			return true;
		} else {
			$this->rates[$this->tarifftype_id] = array();
		}
		
		//get tarifftype name and description TODO: remove this, we already have this data in _jomres_rates table..
		$query = "SELECT `name`, `description` FROM #__jomcomp_tarifftypes WHERE `id` = ".(int)$this->tarifftype_id." AND `property_uid` = ".(int)$this->property_uid;
		$result = doSelectSql($query);
		
		if (empty($result)) {
			throw new Exception('Error: tarifftype name and description don`t exist, so tariffs are not configured properly. Please create the tariffs again.');
		} else {
			foreach ($result as $r) {
				$rate_title = $r->name;
				$rate_description = $r->description;
			}
		}
		
		//get the rates uids for this tarifftype_id TODO: remove this and move xref to _jomres_rates table in tarifftype_id column..
		$query = "SELECT `tariff_id` FROM #__jomcomp_tarifftype_rate_xref WHERE `tarifftype_id` = ".(int)$this->tarifftype_id;
		$result = doSelectSql($query);
		
		if (empty($result)) {
			throw new Exception('Error: this tarifftype doesn`t have any tariff_id, so tariffs are not configured properly. Please create the tariffs again.');
		} else {
			foreach ($result as $r) {
				$this->rates[$this->tarifftype_id][(int)$r->tariff_id]['rates_uid'] = (int)$r->tariff_id;
			}
		}

		//get the tariff details for all rates uids
		$query = "SELECT
					`rates_uid`,
					`rate_title`,
					`rate_description`,
					`validfrom`,
					`validto`,
					`roomrateperday`,
					`extra_guests_price`,
					`modifiers`,
					`mindays`,
					`maxdays`, 
					`minpeople`, 
					`maxpeople`, 
					`roomclass_uid`,
					`ignore_pppn`,
					`allow_ph`,
					`allow_we`,
					`weekendonly`,
					`validfrom_ts`,
					`validto_ts`,
					`dayofweek`,
					`minrooms_alreadyselected`,
					`maxrooms_alreadyselected`,
					`property_uid` 
				FROM `#__jomres_rates` 
				WHERE `rates_uid` IN (".jomres_implode(array_keys($this->rates[$this->tarifftype_id])).") 
					AND `property_uid` = ".(int)$this->property_uid;
		$result = doSelectSql($query);

		if (empty($result)
			&& ( get_showtime("task") != 'delete_tariff_micromanage' &&
				get_showtime("task") != 'delete_tariff_advanced' &&
				 get_showtime("task") != 'delete_tariff_micromanage' )
			) {
			throw new Exception('Tariffs are not setup properly. Please go back, delete any existing tariffs and create new ones.');
		} else {
			if (!empty($result)) {
				foreach ($result as $r) {
					if (!isset($r->modifiers) ) {
						$r->modifiers = base64_encode(json_encode( [] ));
					}

					$this->rates[$this->tarifftype_id][$r->rates_uid]['rates_uid'] 					= (int)$r->rates_uid;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['rate_title'] 				= $rate_title; //TODO
					$this->rates[$this->tarifftype_id][$r->rates_uid]['rate_description'] 			= $rate_description; //TODO
					$this->rates[$this->tarifftype_id][$r->rates_uid]['validfrom'] 					= $r->validfrom;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['validto'] 					= $r->validto;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['roomrateperday'] 			= $r->roomrateperday;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['extra_guests_price'] 		= $r->extra_guests_price;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['modifiers']			 		= json_decode(base64_decode($r->modifiers));
					$this->rates[$this->tarifftype_id][$r->rates_uid]['mindays'] 					= (int)$r->mindays;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['maxdays'] 					= (int)$r->maxdays;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['minpeople'] 					= (int)$r->minpeople;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['maxpeople']					= (int)$r->maxpeople;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['roomclass_uid'] 				= (int)$r->roomclass_uid;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['ignore_pppn'] 				= (int)$r->ignore_pppn;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['allow_ph'] 					= (int)$r->allow_ph;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['allow_we'] 					= (int)$r->allow_we;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['weekendonly'] 				= (int)$r->weekendonly;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['validfrom_ts'] 				= $r->validfrom_ts;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['validto_ts'] 				= $r->validto_ts;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['dayofweek'] 					= (int)$r->dayofweek;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['minrooms_alreadyselected'] 	= (int)$r->minrooms_alreadyselected;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['maxrooms_alreadyselected'] 	= (int)$r->maxrooms_alreadyselected;
					$this->rates[$this->tarifftype_id][$r->rates_uid]['property_uid'] 				= (int)$r->property_uid;
				}
			}
		return true;
		}
	
	return false;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Save tariff
	public function save_rate()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		//first cleanup the tarifftype details if the tarifftype id already exists
		$this->cleanup_existing_rate();
		
		//insert or update the tarifftype details
		$this->update_tarifftype_details();
		
		//build rates and min days array for insertion
		if ($this->build_new_rates()) {
			$this->insert_new_rates();

			//webhook notification
			$webhook_notification							   = new stdClass();
			$webhook_notification->webhook_event				= 'tariffs_updated';
			$webhook_notification->webhook_event_description	= 'Logs when tariffs updated.';
			$webhook_notification->webhook_event_plugin		 = 'advanced_micromanage_tariff_editing_modes';
			$webhook_notification->data						 = new stdClass();
			$webhook_notification->data->property_uid		   = $this->property_uid;
			add_webhook_notification($webhook_notification);
		
			return true;
		}
		
		return false;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//insert new tariffftype or update existing tarifftype details by tarifftype id
	private function update_tarifftype_details()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		if ($this->tarifftype_id == 0) {
			$query = "INSERT INTO #__jomcomp_tarifftypes 
								(
								`name`,
								`description`,
								`property_uid`
								) 
							VALUES 
								(
								'".$this->rate_title."',
								'".$this->rate_description."',
								".(int)$this->property_uid."
								)";
			$this->tarifftype_id = doInsertSql($query,'');
			
			if (!$this->tarifftype_id) {
				throw new Exception('Error: Unable to insert new tarifftype details.');
			}
		} else {
			$query = "UPDATE #__jomcomp_tarifftypes 
						SET 
							`name` = '".$this->rate_title."', 
							`description` = '".$this->rate_description."' 
						WHERE 
							`id` = ".(int)$this->tarifftype_id." 
						AND 
							`property_uid` = ".(int)$this->property_uid;
			
			if (!doInsertSql($query,'')) {
				throw new Exception('Error: Unable to update tarifftype details.');
			}
		}
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//build the new rates and mindays array to be inserted
	private function build_new_rates()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($this->tarifftype_id == 0) {
			throw new Exception('Error: Tarifftype id not set.');
		}
		
		if (empty($this->dates_rates)) {
			throw new Exception('Error: Dates-rates array not set.');
		}
		
		if (empty($this->dates_mindays)) {
			throw new Exception('Error: Dates-midays array not set.');
		}
		
		//sort the dates_rates array by unix time ascending
		ksort($this->dates_rates);
		
		//Setting the pointer to the first element in the dates_rates array to find the key, and thereby the first date in the tariffs
		reset($this->dates_rates);
		
		$lastdate = date("Y/m/d", key($this->dates_rates));
		$v = key($this->dates_rates);
		$lastvalue = convert_entered_price_into_safe_float($this->dates_rates[$v]);
		$lastmindays = (int)$this->dates_mindays[$v];
		$counter = 1;

		$dates_rates_count = count($this->dates_rates);
		
		// Let's construct an array that'll contain the important parts of our new tariffs
		foreach ($this->dates_rates as $epoch => $value) {
			$value = convert_entered_price_into_safe_float($value);

			$epoch = (int)$epoch;
			
			$date = date("Y/m/d",$epoch);
			
			$daybefore = date("Y/m/d",strtotime("-1 day", $epoch));

			// Jomres core will ensure that this index is set, but a remote system might not
			if (!isset($this->dates_mindays[$epoch])) {
                $this->dates_mindays[$epoch] = $lastmindays;
            }

			$mindays_value = (int)$this->dates_mindays[$epoch];

			if ($value != $lastvalue || $mindays_value != $lastmindays) {
				$this->new_rates[] = array('start'=>$lastdate, 'end'=>$daybefore, 'value'=>$lastvalue, 'mindays'=>$lastmindays);
				
				$lastdate = $date;
				$lastvalue = $value;
				$lastmindays = (int)$this->dates_mindays[$epoch];
				
				if ($counter == $dates_rates_count) {
					$this->new_rates[] = array('start'=>$lastdate, 'end'=>$date, 'value'=>$lastvalue, 'mindays'=>$lastmindays);
				}
			} elseif ($counter == $dates_rates_count) {
				$this->new_rates[] = array('start'=>$lastdate, 'end'=>$date, 'value'=>$lastvalue, 'mindays'=>$lastmindays);
				$lastdate = $date;
				$lastvalue = $value;
				$lastmindays = (int)$this->dates_mindays[$epoch];
			}

			$counter++;
		}

	if (empty($this->new_rates))
		return false;
	
	return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//insert new rates/tariffs
	private function insert_new_rates()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($this->tarifftype_id == 0) {
			throw new Exception('Error: Tarifftype id not set.');
		}
		
		if (empty($this->new_rates)) {
			throw new Exception('Error: New rates array is empty.');
		}
		
		//we`ll do one query for each rate, because we`ll need the rate uids for each to update the tariftype rate xref table
		foreach ($this->new_rates as $r) {
			$this->validfrom_ts = str_replace("/","-",$r['start']);
			$this->validto_ts = str_replace("/","-",$r['end']);

			if (!isset($this->modifiers) || $this->modifiers == '' ) {
				$this->modifiers = array();
			}

			$query = "INSERT INTO #__jomres_rates 
							(
							`rate_title`,
							`rate_description`,
							`validfrom`,
							`validto`,
							`roomrateperday`,
							`extra_guests_price`,
							`modifiers`,
							`mindays`,
							`maxdays`,
							`minpeople`,
							`maxpeople`,
							`roomclass_uid`,
							`ignore_pppn`,
							`allow_ph`,
							`allow_we`,
							`weekendonly`,
							`dayofweek`,
							`minrooms_alreadyselected`,
							`maxrooms_alreadyselected`,
							`validfrom_ts`,
							`validto_ts`,
							`property_uid`
							)
						VALUES 
						(
						'".$this->rate_title."',
						'".$this->rate_description."',
						'".$r['start']."',
						'".$r['end']."',
						".$r['value'].",
						".$this->extra_guests_price.",
						'".base64_encode(json_encode($this->modifiers))."',
						".(int)$r['mindays'].",
						".(int)$this->maxdays.",
						".(int)$this->minpeople.",
						".(int)$this->maxpeople.",
						".(int)$this->roomclass_uid.",
						".(int)$this->ignore_pppn.",
						".(int)$this->allow_ph.",
						".(int)$this->allow_we.",
						".(int)$this->weekendonly.",
						".(int)$this->dayofweek.",
						".(int)$this->minrooms_alreadyselected.",
						".(int)$this->maxrooms_alreadyselected.",
						'".$this->validfrom_ts."',
						'".$this->validto_ts."',
						".(int)$this->property_uid."
						)";

			$new_rate_uid = doInsertSql($query,'');
			
			if (!$new_rate_uid) {
				throw new Exception('Error: Inserting new tariff failed.');
			} else {
				$this->new_rates_uids[] = (int)$new_rate_uid;
			}
		}

		//update the tarifftype rates xref
		if ($this->update_tarifftype_rate_xref()) {

			return true;
		}

		return false;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//update the tarifftype rates xref
	private function update_tarifftype_rate_xref()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($this->tarifftype_id == 0) {
			throw new Exception('Error: Tarifftype id not set.');
		}
		
		if (empty($this->new_rates_uids)) {
			throw new Exception('Error: New rates uids array is empty.');
		}
		
		$values = '';
		
		foreach ($this->new_rates_uids as $r)
			{
			$values .= "(
						".(int)$this->tarifftype_id.",
						".(int)$r.",
						".(int)$this->roomclass_uid.",
						".(int)$this->property_uid."
						),";
			}
		
		$values = rtrim($values, ',');
		
		$query="INSERT INTO #__jomcomp_tarifftype_rate_xref 
						(
						`tarifftype_id`,
						`tariff_id`,
						`roomclass_uid`,
						`property_uid`
						) 
					VALUES ".
						$values;
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Unable to update tarifftype rates xref.');
		}
		
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Cleanup rate by tarifftype id to prepare for new tariffs insertion
	public function cleanup_existing_rate()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		if ($this->tarifftype_id == 0) {
			return true; //looks like we`re creating a new tarff so no tarifftype id exists yet
		}
		
		//check if we have the details of this tarifftype id
		if (!isset($this->rates[$this->tarifftype_id])) {
			$this->get_rate();
		} else {
			$this->rates[$this->tarifftype_id] = array();
		}

		//delete all rates for this tarifftype id
		$query = "DELETE FROM #__jomres_rates WHERE `rates_uid` IN (".jomres_implode(array_keys($this->rates[$this->tarifftype_id])).") ";

		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Delete rates failed.');
		}
		
		//delete tarifftype id rates xref
		$query = "DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE tariff_id IN (".jomres_implode(array_keys($this->rates[$this->tarifftype_id])).") ";
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Delete tarifftype rates xref failed.');
		}
		
		//reset this tarifftype rates array
		$this->rates[$this->tarifftype_id] = array();
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//delete rate by tarifftype id
	public function delete_rate()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		if ($this->tarifftype_id == 0) {
			throw new Exception('Error: Tarifftype id not set.');
		}
		
		//check if we have the details of this tarifftype id
		if (!isset($this->rates[$this->tarifftype_id])) {
			$this->get_rate();
		} else {
			$this->rates[$this->tarifftype_id] = array();
		}
		
		//delete all rates for this tarifftype id
		$query = "DELETE FROM #__jomres_rates WHERE `rates_uid` IN (".jomres_implode(array_keys($this->rates[$this->tarifftype_id])).") ";
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Delete rates failed.');
		}
		
		//delete tarifftype id rates xref
		$query = "DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE `tariff_id` IN (".jomres_implode(array_keys($this->rates[$this->tarifftype_id])).") ";
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Delete tarifftype rates xref failed.');
		}
		
		//delete tarifftype
		$query = "DELETE FROM #__jomcomp_tarifftypes WHERE `id` = ".(int)$this->tarifftype_id;
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Delete tarifftype failed.');
		}
		
		//delete custom text for this tarifftype for all languages
		$query = "DELETE FROM #__jomres_custom_text WHERE `constant` = '_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID".(int)$this->tarifftype_id."' AND `property_uid` = ".(int)$this->property_uid;
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Delete custom text for this tarifftype failed.');
		}
		
		//reset this tarifftype rates array
		$this->rates[$this->tarifftype_id] = array();
		
		//webhook notification
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'tariffs_updated';
		$webhook_notification->webhook_event_description	= 'Logs when tariffs updated.';
		$webhook_notification->webhook_event_plugin		 = 'advanced_micromanage_tariff_editing_modes';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		add_webhook_notification($webhook_notification);
		
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//this function is used only for Advanced and Normal tariff editing modes and it`s assumed that each rate uid will have it`s own tarifftype id
	//only Micromanage has more rate uids for the same tarifftype id
	public function get_tarifftype_id($rates_uid = 0)
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($rates_uid == 0) {
			throw new Exception('Error: Rate uid not set.');
		}

		//get tarifftype id TODO: remove this, we already have this data in _jomres_rates table..
		$query = "SELECT `tarifftype_id` FROM #__jomcomp_tarifftype_rate_xref WHERE `tariff_id` = ".(int)$rates_uid." AND `property_uid` = ".(int)$this->property_uid;
		$tarifftype_id = (int)doSelectSql($query,1);

		if ($tarifftype_id == 0) {
			$tarifftype_id = $this->create_tarifftype($rates_uid);
		}
		
		return $tarifftype_id;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//create tarifftype for existing rate uid (used for Advanced and Normal mode tariff saved a long time ago..)
	private function create_tarifftype($rates_uid = 0)
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($rates_uid == 0) {
			throw new Exception('Error: Rate uid not set.');
		}
		
		$id = 0;
		
		//get tariff name and description
		$query = "SELECT `rate_title`, `rate_description`, `roomclass_uid` FROM #__jomres_rates WHERE `rates_uid` = ".(int)$rates_uid." AND `property_uid` = ".(int)$this->property_uid;
		$result = doSelectSql($query,2);
		
		if (empty($result)) {
			throw new Exception('Error: Could not get tariff details for rate uid.');
		}

		//create new tarifftype
		$query = "INSERT INTO #__jomcomp_tarifftypes 
							(
							`name`,
							`description`,
							`property_uid`
							) 
						VALUES 
							(
							'".$result['rate_title']."',
							'".$result['rate_description']."',
							".(int)$this->property_uid."
							)";
		$id = doInsertSql($query,'');
		
		if (!$id) {
			throw new Exception('Error: Could not insert automatically generated tarifftype.');
		}
		
		//create new tarifftype rate xref
		$query = "INSERT INTO #__jomcomp_tarifftype_rate_xref 
						(
						`tarifftype_id`,
						`tariff_id`,
						`roomclass_uid`,
						`property_uid`
						) 
					VALUES 
						(
						".(int)$id.",
						".(int)$rates_uid.",
						".(int)$result['roomclass_uid'].",
						".(int)$this->property_uid."
						)";
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Could not insert automatically generated tarifftype rate xref.');
		}
		
		return (int)$id;
	}
	
	/*
	* Legacy functions
	*/
	//Save legacy tariff (advanced and normal modes)
	public function save_rate_legacy()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		//insert or update the tarifftype details
		$this->update_tarifftype_details();
		
		if ($this->rates_uid > 0) {
			$this->update_rate_legacy();
		} else {
			$this->insert_new_rate_legacy();
		}
	
		//webhook notification
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'tariffs_updated';
		$webhook_notification->webhook_event_description	= 'Logs when tariffs updated.';
		$webhook_notification->webhook_event_plugin		 = 'advanced_micromanage_tariff_editing_modes';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		add_webhook_notification($webhook_notification);
	
		return true;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//insert new rates/tariffs legacy mode
	private function insert_new_rate_legacy()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($this->tarifftype_id == 0) {
			throw new Exception('Error: Tarifftype id not set.');
		}
		
		if ($this->rates_uid > 0) {
			throw new Exception('Error: Are you sure you`re creating a new tariff?');
		}
		
		$this->validfrom_ts = str_replace("/","-",$this->validfrom);
		$this->validto_ts = str_replace("/","-",$this->validto);
		
		$query = "INSERT INTO #__jomres_rates 
						(
						`rate_title`,
						`rate_description`,
						`validfrom`,
						`validto`,
						`roomrateperday`,
						`extra_guests_price`,
						`modifiers`,
						`mindays`,
						`maxdays`,
						`minpeople`,
						`maxpeople`,
						`roomclass_uid`,
						`ignore_pppn`,
						`allow_ph`,
						`allow_we`,
						`weekendonly`,
						`dayofweek`,
						`minrooms_alreadyselected`,
						`maxrooms_alreadyselected`,
						`validfrom_ts`,
						`validto_ts`,
						`property_uid`
						)
					VALUES 
						(
						'".$this->rate_title."',
						'".$this->rate_description."',
						'".$this->validfrom."',
						'".$this->validto."',
						".$this->roomrateperday.",
						".$this->extra_guests_price.",
						'".base64_encode(json_encode($this->modifiers))."',
						
						".(int)$this->mindays.",
						".(int)$this->maxdays.",
						".(int)$this->minpeople.",
						".(int)$this->maxpeople.",
						".(int)$this->roomclass_uid.",
						".(int)$this->ignore_pppn.",
						".(int)$this->allow_ph.",
						".(int)$this->allow_we.",
						".(int)$this->weekendonly.",
						".(int)$this->dayofweek.",
						".(int)$this->minrooms_alreadyselected.",
						".(int)$this->maxrooms_alreadyselected.",
						'".$this->validfrom_ts."',
						'".$this->validto_ts."',
						".(int)$this->property_uid."
						)";
		
		$new_rate_uid = doInsertSql($query,'');
		
		if (!$new_rate_uid) {
			throw new Exception('Error: Inserting new tariff failed.');
		} else {
			$this->new_rates_uids[] = (int)$new_rate_uid;
		}
		
		//update the tarifftype rates xref
		if ($this->update_tarifftype_rate_xref()) {
			return true;
		}
		
		return false;
	}
		
	/**
	 * 
	 *
	 *
	 */

	//update rates/tariffs legacy mode
	private function update_rate_legacy()
	{
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		if ($this->tarifftype_id == 0) {
			throw new Exception('Error: Tarifftype id not set.');
		}
		
		if ($this->rates_uid == 0) {
			throw new Exception('Error: Are you sure you`re updatring an existing tariff?');
		}
		
		$this->validfrom_ts = str_replace("/","-",$this->validfrom);
		$this->validto_ts = str_replace("/","-",$this->validto);
		
		$query = "UPDATE #__jomres_rates SET
						`rate_title` = '".$this->rate_title."',
						`rate_description` = '".$this->rate_description."',
						`validfrom` = '".$this->validfrom."',
						`validto` = '".$this->validto."',
						`roomrateperday` = ".$this->roomrateperday.",
						`extra_guests_price` = ".$this->extra_guests_price.",
						`modifiers` = '".base64_encode(json_encode($this->modifiers))."',
						`mindays` = ".(int)$this->mindays.",
						`maxdays` = ".(int)$this->maxdays.",
						`minpeople` = ".(int)$this->minpeople.",
						`maxpeople` = ".(int)$this->maxpeople.",
						`roomclass_uid` = ".(int)$this->roomclass_uid.",
						`ignore_pppn` = ".(int)$this->ignore_pppn.",
						`allow_ph` = ".(int)$this->allow_ph.",
						`allow_we` = ".(int)$this->allow_we.",
						`weekendonly` = ".(int)$this->weekendonly.",
						`dayofweek` = ".(int)$this->dayofweek.",
						`minrooms_alreadyselected` = ".(int)$this->minrooms_alreadyselected.",
						`maxrooms_alreadyselected` = ".(int)$this->maxrooms_alreadyselected.",
						`validfrom_ts` = '".$this->validfrom_ts."',
						`validto_ts` = '".$this->validto_ts."'
					WHERE
						`rates_uid` = ".(int)$this->rates_uid."
					AND
						`property_uid` = ".(int)$this->property_uid;
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Unable to update tariff details in legacy mode.');
		}

		return true;
	}

	/*
	 *
	 * Find the rooms for this property uid, find tariffs for this property uid, return room type ids that do not yet have a tariff
	 *
	 *
	 */
	public function get_unpopulated_room_type_ids( $property_uid = 0 )
	{
		if ( $property_uid == 0 ) {
			throw new Exception('Property uid not set ');
		}

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		$property_room_types =  $current_property_details->multi_query_result[$property_uid]['room_types'];
		$property_room_type_ids = array_keys($property_room_types);

		if (empty($property_room_type_ids)) {
			return array();
		}

		$query = "SELECT DISTINCT `roomclass_uid` FROM #__jomres_rates WHERE property_uid = ".(int)$property_uid;
		$tariffs = doSelectSql($query);

		if (empty($tariffs)) {
			return $property_room_type_ids;
		}



		foreach ($property_room_type_ids as $key=>$room_type_id) {
			foreach ( $tariffs as $tariff ) {
				if ( $tariff->roomclass_uid == $room_type_id ) {
					unset($property_room_type_ids[$key]);
				}
			}
		}

		return $property_room_type_ids;
	}
}
