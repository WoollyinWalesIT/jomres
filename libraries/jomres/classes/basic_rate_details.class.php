<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
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

class basic_rate_details
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->multi_query_rates = array();
		$this->rates = array();
		$this->property_uid = 0;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//get rates for property uid
	//returns an array like $this->rates[roomclass_uid][tarifftype_id][rates_uid][]
	public function get_rates($property_uid = 0)
	{
		if ($property_uid == 0) {
			throw new Exception('Error: Property uids not set.');
		}
		
		if (!isset($this->multi_query_rates[$property_uid])) {
			$this->get_rates_multi(array($property_uid));
		}
		
		//check if we already have the rates loaded for this property uid
		if ($this->property_uid == $property_uid) {
			return true;
		} else {
			$this->property_uid = $property_uid;
		}
		
		$this->rates = $this->multi_query_rates[$property_uid];
		
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//get all rates details for multiple property uids array
	public function get_rates_multi($property_uids = array())
	{
		//if the property uids passed are not an array, we`ll make it one
		if (!is_array($property_uids)) {
			if ((int)$property_uids > 0) {
				$property_uids = array((int)$property_uids);
			} else {
				$property_uids = array();
			}
		}
		
		if (empty($property_uids)) {
			throw new Exception('Error: Property uids not set.');
		}
		
		$tmp_property_uids = array();
		
		//exclude the property uids for which we already have the data loaded
		foreach ($property_uids as $p_uid) {
			if (!isset($this->multi_query_rates[(int)$p_uid])) {
				$tmp_property_uids[] = (int)$p_uid;
				$this->multi_query_rates[(int)$p_uid] = array();
			}
		}
		
		if (empty($tmp_property_uids)) {
			return true; //we already have all the rates data we need
		}
		
		$property_uids = $tmp_property_uids;
		unset($tmp_property_uids);

		$query = "SELECT
					a.rates_uid,
					a.rate_title,
					a.rate_description,
					a.validfrom,
					a.validto,
					a.roomrateperday,
					a.mindays,
					a.maxdays, 
					a.minpeople, 
					a.maxpeople, 
					a.roomclass_uid,
					a.ignore_pppn,
					a.allow_ph,
					a.allow_we,
					a.weekendonly,
					a.validfrom_ts,
					a.validto_ts,
					a.dayofweek,
					a.minrooms_alreadyselected,
					a.maxrooms_alreadyselected,
					a.property_uid,
					b.tarifftype_id,
					c.name,
					c.description
				FROM #__jomres_rates a 
				LEFT JOIN #__jomcomp_tarifftype_rate_xref b ON a.rates_uid = b.tariff_id 
				LEFT JOIN #__jomcomp_tarifftypes c ON b.tarifftype_id = c.id 
				WHERE 
					a.property_uid IN (".jomres_implode($property_uids).") ";
		$result = doSelectSql($query);
		
		if (empty($result)) {
			return false;
		}
		
		foreach ($result as $r) {
			if (!is_null($r->tarifftype_id) ) {
				$tariff_title_string = jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID'.$r->tarifftype_id, stripslashes($r->name));
			}
			else {
				$tariff_title_string = jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE_ID'.$r->rates_uid, stripslashes($r->rate_title));
			}
			
			$this->multi_query_rates[(int)$r->property_uid][(int)$r->roomclass_uid][(int)$r->tarifftype_id][(int)$r->rates_uid] = array(
				'rates_uid' => (int)$r->rates_uid,
				'rate_title' => $tariff_title_string,
				'rate_description' => $r->description,
				'validfrom' => $r->validfrom,
				'validto' => $r->validto,
				'roomrateperday' => $r->roomrateperday,
				'mindays' => (int)$r->mindays,
				'maxdays' => (int)$r->maxdays,
				'minpeople' => (int)$r->minpeople,
				'maxpeople' => (int)$r->maxpeople,
				'roomclass_uid' => (int)$r->roomclass_uid,
				'ignore_pppn' => (int)$r->ignore_pppn,
				'allow_ph' => (int)$r->allow_ph,
				'allow_we' => (int)$r->allow_we,
				'weekendonly' => (int)$r->weekendonly,
				'validfrom_ts' => (int)$r->validfrom_ts,
				'validto_ts' => (int)$r->validto_ts,
				'dayofweek' => (int)$r->dayofweek,
				'minrooms_alreadyselected' => (int)$r->minrooms_alreadyselected,
				'maxrooms_alreadyselected' => (int)$r->maxrooms_alreadyselected,
				'property_uid' => (int)$r->property_uid,
				'tarifftype_id' => (int)$r->tarifftype_id
				);
		}

		return true;
	}
}
