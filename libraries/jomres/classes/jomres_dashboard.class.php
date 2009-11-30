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


//--------------------------------------------------
//- DASHBOARD CLASS UTILISATION
//--------------------------------------------------

/**
#
 * Basic dashboard functions
#
* @package Jomres
#
 */
class jomres_dashboard
	{
/*
	var $monthsToShow;
	var $stdate						= "";
	var $property_uid				= 0;
	var $cfg_todaycolor				= "";
	var $cfg_inmonthface			= "";
	var $cfg_outmonthface			= "";
	var $cfg_inbgcolor				= "";
	var $cfg_outbgcolor				= "";
	var $cfg_occupiedcolour			= "";
	var $cfg_provisionalcolour		= "";
	var $cfg_pastcolour				= "";
	var $cfg_booking				= "";
	var $cfg_black					= "";
	var $cfg_weekendborder 			= "";
	var $requestedMonth 			= 0;
	var $roomsArray 				= array();
	var $thisMonthsDatesArray 		= array();
	var $unixLatestDate				= 0;
	var $unixTodaysDate				= 0;
*/
	/**
	#
	* Pass a unix date, receive back the weekday
	#
	*/
	function getDayOfWeek($date)
		{
		$dateArray=getdate($date);
		return $dateArray['wday'];
		}

	/**
	#
	* pass a unix date, return true if is sat or sun, else return false
	#
	*/
	function isWeekend($date)
		{
		$weekendDays=array(0,6);
		$dateArray=getdate($date);
		if (in_array($dateArray['wday'],$weekendDays) )
			return true;
		else
			return false;
		}

	/**
	#
	* pass a unix date, return true if is sat or sun, else return false
	#
	*/
	function getMonthAndYearOutput()
		{
		$output='<table border=1 cellpadding=1 cellspacing=0>';
		$output.='<tr><th>' . strftime( "%B",$this->stdate) . ' ' . strftime( "%Y",$this->stdate) . '</th></tr>';
		$output.="</table>";
		return $output;
		}

	function setDates()
		{
		$mrConfig=getPropertySpecificSettings();
		if ($this->requestedMonth==0)
			{
			$stmonth=date("m");
			$styear=date("Y");
			}
		else
			{
			$stmonth=date("m",$this->requestedMonth);
			$styear=date("Y",$this->requestedMonth);
			}
		$this->stdate = mktime(0,0,0,$stmonth,1,$styear);
		$this->startdate = $currdate =$this->stdate;
		$this->lastDayOfMonth =date('t',mktime(0,0,0,date("m",$this->stdate),1,$styear));
		$this->enddate = mktime(0,0,0,date("m",$this->stdate),$this->lastDayOfMonth,$styear);
		$i=0;
		while ($currdate <= $this->enddate)
			{
			$this->thisMonthsDatesArray[]=$currdate;
			$i++;
			$currdate = mktime(0,0,0,date("m",$this->startdate),date("d",$this->startdate) + $i,date("Y",$this->startdate) );
			}
		if ($mrConfig['limitAdvanceBookingsYesNo']=="1")
			{
			$dateElements=explode("/",$this->todaysDate);
			$this->unixLatestDate=mktime(0, 0, 0,$dateElements[1],$dateElements[2]+$mrConfig['advanceBookingsLimit'],$dateElements[0]);
			}
		}

	function getRoomsForProperty()
		{
		$query="SELECT room_uid,room_name,room_number,propertys_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$this->property_uid."' ORDER BY room_number,room_name";
		$roomsList =doSelectSql($query);
		foreach ($roomsList as $room)
			{
			$this->roomsArray[]=array('id'=>(int)$room->room_uid,'room_number'=>$room->room_number, 'room_name'=>$room->room_name);
			}
		}
	}

?>