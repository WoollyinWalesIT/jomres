<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jrportal_booking_functions // Functions supplied as a class so that they can be extended easily without rewriting  the functions
	{
	function getAllUnarchivedBookings()
		{
		return $this->getBookings("WHERE `archived` = '0' ");
		}

	function getAllArchivedBookings()
		{
		return $this->getBookings("WHERE `archived` = '1' ");
		}

	function getAllBookings()
		{
		return $this->getBookings("");
		}

	function getBookingsByBookingIdArray($idArray)
		{
		$clause = genericOr($idArray,'id');
		return $this->getBookings("WHERE ".$clause);
		}

	function getBookingsBetweenDates($startDate,$endDate,$reqarchived=true)
		{
		// We want to reuse the Jomres calendar input functionality because it can be configured to the user's taste, however because of this fact we need to re-jig the dates once they've been received so that we can do a date based search in mysql
		// First convert the incoming date to YYYY/mm/dd
		$startDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'startDate', "" ),true);
		$endDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'endDate', "" ),true);
		// Now make that a time stamp
		$date_elements  = explode("/",$startDate);
		$unixstartDate  = mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		$date_elements  = explode("/",$endDate);
		$unixendDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
		// Now we can turn the unix timestamp into a Y-m-d H:i:s format
		$startYMDHis=date("Y-m-d H:i:s" , $unixstartDate);
		$endYMDHis=date("Y-m-d H:i:s" , $unixendDate);
		// Create the main part of the clause
		$clause = "WHERE `created` > '$startYMDHis' AND `created` < '$endYMDHis'";
		// and if $archived not null, we complete the WHERE search
		if ($reqarchived == true)
			$clause .= "AND `archived` = '1' ";
		else
			{
			if ($reqarchived === false)
			$clause .= "AND `archived` = '0' ";
			}
		return $this->getBookings($clause);

		}

	function getBookings($clause)
		{
		$retResult=array();
		$query = "SELECT id,property_uid,guest_id,affiliate_id,invoice_id,
				booking_total,contract_id,tag,currency_code,created,archived,archived_date
				FROM #__jomresportal_bookings ".$clause;
		//		echo $query;
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$retResult[$r->id]['id']=$r->id ;
				$retResult[$r->id]['property_uid']=$r->property_uid ;
				$retResult[$r->id]['guest_id']=$r->guest_id ;
				$retResult[$r->id]['affiliate_id']=$r->affiliate_id ;
				$retResult[$r->id]['invoice_id']=$r->invoice_id ;
				$retResult[$r->id]['booking_total']=$r->booking_total ;
				$retResult[$r->id]['contract_id']=$r->contract_id ;
				$retResult[$r->id]['tag']=$r->tag ;
				$retResult[$r->id]['currency_code']=$r->currency_code ;
				$retResult[$r->id]['created']=$r->created ;
				$retResult[$r->id]['archived']=$r->archived ;
				$retResult[$r->id]['archived_date']=$r->archived_date ;
				}
			}
		return $retResult;
		}

	// expects to be passed an array of
	function batchArchive($idArray,&$tr)
		{
		$g_ids = genericOr($idArray,'id');
		$d=date("Y-m-d H-i-s");
		$query="UPDATE #__jomresportal_bookings SET `archived`='1',`archived_date`='$d' WHERE ".$g_ids;
		return doInsertSql($query,'');
		}

	function getContractsForMonth($month=0,$year=0,$property_uid=0) // Month is an integer, from 0-11. Year should be in nnnn format.
		{
		if ($year==0)
			return false;
		$query="SELECT * FROM #__jomres_contracts WHERE arrival LIKE '".$year."/".$month."%' ";
		if ($property_uid>0)
			$query.=" AND property_uid = $property_uid AND `cancelled` = 0 ";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$retResult[$r->contract_uid]['contract_uid']=$r->contract_uid;
				$retResult[$r->contract_uid]['arrival']=$r->arrival;
				$retResult[$r->contract_uid]['departure']=$r->departure;
				$retResult[$r->contract_uid]['rates_uid']=$r->rates_uid;
				$retResult[$r->contract_uid]['guest_uid']=$r->guest_uid;
				$retResult[$r->contract_uid]['rate_rules']=$r->rate_rules;
				$retResult[$r->contract_uid]['deposit_paid']=$r->deposit_paid;
				$retResult[$r->contract_uid]['contract_total']=$r->contract_total;
				$retResult[$r->contract_uid]['deposit_ref']=$r->deposit_ref;
				$retResult[$r->contract_uid]['payment_ref']=$r->payment_ref;
				$retResult[$r->contract_uid]['special_reqs']=$r->special_reqs;
				$retResult[$r->contract_uid]['deposit_required']=$r->deposit_required;
				$retResult[$r->contract_uid]['currency']=$r->currency;
				$retResult[$r->contract_uid]['date_range_string']=$r->date_range_string;
				$retResult[$r->contract_uid]['property_uid']=$r->property_uid;
				$retResult[$r->contract_uid]['single_person_suppliment']=$r->single_person_suppliment;
				$retResult[$r->contract_uid]['smoking']=$r->smoking;
				$retResult[$r->contract_uid]['extras']=$r->extras;
				$retResult[$r->contract_uid]['extrasvalue']=$r->extrasvalue;
				$retResult[$r->contract_uid]['tax']=$r->tax;
				$retResult[$r->contract_uid]['tag']=$r->tag;
				$retResult[$r->contract_uid]['timestamp']=$r->timestamp;
				$retResult[$r->contract_uid]['room_total']=$r->room_total;
				$retResult[$r->contract_uid]['discount']=$r->discount;
				$retResult[$r->contract_uid]['currency_code']=$r->currency_code;
				}
			return $retResult;
			}
		return array();
		}
	function getRoomUsageForMonth($month=0,$year=0,$property_uid=0) // Month is an integer, from 0-11. Year should be in nnnn format.
		{
		if ($year==0)
			return false;
		$query="SELECT * FROM #__jomres_room_bookings WHERE date LIKE '".$year."/".$month."%' ";
		if ($property_uid>0)
			$query.=" AND property_uid = $property_uid ";
		$result=doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$retResult[$r->room_bookings_uid]['room_bookings_uid']=$r->room_bookings_uid;
				$retResult[$r->room_bookings_uid]['room_uid']=$r->room_uid;
				$retResult[$r->room_bookings_uid]['date']=$r->date;
				$retResult[$r->room_bookings_uid]['contract_uid']=$r->contract_uid;
				$retResult[$r->room_bookings_uid]['property_uid']=$r->property_uid;
				}
			return $retResult;
			}
		}


	}
?>