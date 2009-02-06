<?php
/**
#
 * Mini-component core file: Constructs and displays a new black booking
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
 * Constructs the create new black booking page
 #
* @package Jomres
#
 */
class j02134newblackbooking {
	/**
	#
	 * Constructor: Constructs the create new black booking page
	#
	 */
	function j02134newblackbooking()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site,$Itemid;
		$defaultProperty=getDefaultProperty();

		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_BLACKBOOKING',_JOMRES_FRONT_BLACKBOOKING);
		$output['ITEMID']=$Itemid;
		$output['INSTRUCTIONS']=jr_gettext('_JOMRES_FRONT_BLACKBOOKING_DESC',_JOMRES_FRONT_BLACKBOOKING_DESC);
		$rmcounter=0;

		if (!isset($_POST['saveBBooking']) )
			{
			$today = date("Y/m/d");
			$date_elements  = explode("/",$today);
			$unixOneWeek= mktime(0,0,0,$date_elements[1],$date_elements[2]+7,$date_elements[0]);
			$end = date("Y/m/d",$unixOneWeek);
			$start=$today;
			$firstTimeAround=1;
			if (isset($_POST['start']))
				{
				$start=JSCalConvertInputDates($_POST['start']);
				$firstTimeAround=0;
				}
			if (isset($_POST['end']))
				{
				$end=JSCalConvertInputDates($_POST['end']);
				$firstTimeAround=0;
				}
			$date_elements  = explode("/",$start);
			$unixStart= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			$date_elements  = explode("/",$end);
			$unixEnd= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			if ($unixEnd<=$unixStart)
				{
				$date_elements  = explode("/",$start);
				$unixEnd= mktime(0,0,0,$date_elements[1],$date_elements[2]+7,$date_elements[0]);
				$end = date("Y/m/d",$unixEnd);
				}

			$okToContinue=TRUE;
			$output['BBDATESTARTS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS);
			$output['BBSTARTJSBOX']=generateDateInput("start",$start);
			
			$output['BBDATEENDS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES);
			$output['BBENDSJSBOX']=generateDateInput("end",$end);
			$query="SELECT room_uid,room_number,room_name FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."'";
			$roomsList = doSelectSql($query);
			$counter=0;
			$totalRooms=count($roomsList);
			$link=jomresURL("index2.php?option=com_jomres&task=editBooking&Itemid=$Itemid&popup=1&contract_uid=");
			foreach ($roomsList as $room)
				{
				$links="";
				$row=array();
				$checked="";
				$dateRangeArray= $this->bb_getDateRange($start,$end);
				$contractUidArray=array();
				foreach ($dateRangeArray as $theDate)
					{
					$query="SELECT room_bookings_uid,contract_uid FROM #__jomres_room_bookings WHERE room_uid = '".(int)$room->room_uid."' AND date = '$theDate'";
					$bookingsList = doSelectSql($query);
					if (count($bookingsList)>0)
						{
						foreach ($bookingsList as $booking)
							{
							$contractUidArray[]=$booking->contract_uid;
							}
						}
					}
				$contractUidArray=array_unique($contractUidArray);
				$text=jr_gettext('_JOMRES_COM_MR_EB_ROOM_NUMBER',_JOMRES_COM_MR_EB_ROOM_NUMBER).' '.$room->room_number." ".$room->room_name;

				if (count($contractUidArray)>0)
					{
					foreach ($contractUidArray as $contract)
						{
						$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width=500,height=500,directories=no,location=no';
						$link =$jomresConfig_live_site."/index2.php?option=com_jomres&task=editBooking&popup=1&contract_uid=".$contract;
						$links.='<a href="javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');" title=""> '.jr_gettext('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER',_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER).' '.$contract.' </a>';
						}
					$rmcounter++;
					$row['TEXT']=$text.$links;
					$row['CHECKBOX']="&nbsp;";
					}
				else
					{
					$row['CHECKBOX']='<input type="checkbox" id="cb'.$counter.'" name="idarray[]" value="'.$room->room_uid.'" onClick="isChecked(this.checked);">';
					//$row['TEXT']='<input type=checkbox name=row['.$counter.'] value="'.$room->room_uid.'" '.$checked.'>'.$text;
					$row['TEXT']=$text;
					}
				$counter++;
				$bookingsrow[]=$row;
				}
			//echo "Number of rooms $totalRooms Number in roomcounter ".$rmcounter;
			}
		$output['TOTALINLISTPLUSONE']=$counter+1;
		$output['REASON']=jr_gettext('_JOMRES_JR_BLACKBOOKING_REASON',_JOMRES_JR_BLACKBOOKING_REASON);
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';

		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('apply',jomresURL("index.php?option=com_jomres&task=newBlackBooking&Itemid=$Itemid"),'Apply',true,'newBlackBooking');
		$jrtb .= $jrtbar->toolbarItem('save',jomresURL("index.php?option=com_jomres&task=saveBBooking&Itemid=$Itemid"),jr_gettext('_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE,FALSE),true,'saveBBooking');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL("index.php?option=com_jomres&task=listBlackBookings&Itemid=$Itemid"),$cancelText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;


		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'new_black_booking.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'bookingsrows', $bookingsrow );
		$tmpl->displayParsedTemplate();
		}


	#
	/**
	#
	 * Sets the date range array
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