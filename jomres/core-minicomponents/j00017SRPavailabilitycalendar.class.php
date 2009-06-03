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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00017SRPavailabilitycalendar {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00017SRPavailabilitycalendar($componentArgs=null)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$noshowroom,$jrConfig;
		$this->retVals="";
		$this->showlinks=true;
		$queryString=$_SERVER['QUERY_STRING'];
		$queryStringArray=explode('&',$queryString);
		foreach ($queryStringArray as $qs)
			{
			$queryelements[]=substr($qs,strpos($qs, "=")+1);
			}
		
		if (in_array("dobooking",$queryelements) )
			{
			$this->showlinks=false;
			}
		
		$task=jomresGetParam( $_REQUEST, 'task', '' );
		if ($task == "remoteavailability" )
			{
			$property_uid=(int)jomresGetParam( $_REQUEST, 'id', '' );
			$mrConfig=getPropertySpecificSettings($property_uid);
			$query="SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = ".$property_uid;
			$roomUid = doSelectSql($query,1);
			}
		else
			{
			$property_uid=(int)$componentArgs['property_uid'];
			$roomUid=$componentArgs['roomUid'];
			}
		$this->pop=jomresGetParam( $_REQUEST, 'popup', 0 );
		if ($this->pop==1)
			property_header($property_uid);
		
		$requestedDate=$componentArgs['requestedDate'];
		$room_avl_enquiry=$componentArgs['room_avl_enquiry'];   // This is passed so that an MRP can use the SRPs calendar if we're requesting information about just one room. If so, well echo the output now.
		
		$showFullYear=$componentArgs['showFullYear'];
		if (isset($mrConfig['CalendarMonthsToShow']))
			$showFullYear=$mrConfig['CalendarMonthsToShow'];
		if ($mrConfig['showAvailabilityCalendar']=="1")
			{
			$currentYear=date("Y");
			if ($mrConfig['calstartfrombeginningofyear']=="1")
				$currentMonth=1;
			else
				$currentMonth=date("m");
			$counter=1;
			$monthsToYearEnd=12-$currentMonth;
			$this->retVals.='
			<center>
			<table id="panelwrapper">
				<tr>
					<td>
						<table class="innerwrapper">
							<tr class="availability_calendar_header">
								<td>
									<table>
										';
										if ($mrConfig['visitorscanbookonline']=="1"	&& !$noshowroom && $this->showlinks)
											{
											$this->retVals.='<tr>';
											$this->retVals.='<td colspan="6">'.jr_gettext('_JOMRES_FRONT_CALENDAR_CLICKDATES',_JOMRES_FRONT_CALENDAR_CLICKDATES).'</td>';
											$this->retVals.='</tr>';
											}
										$this->retVals.='
										<tr>
											<td bgcolor="'.$mrConfig['avlcal_inbgcolour'].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY',_JOMRES_COM_AVLCAL_INMONTHFACE_KEY).'</td>
											<td bgcolor="'.$mrConfig['avlcal_occupiedcolour'].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY',_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY).'</td>
											<td bgcolor="'.$mrConfig['avlcal_provisionalcolour'].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY',_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY).'</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr class="availability_calendar_calendars">
								<td>
									<table>
										<tr>';
			if ($showFullYear)
				{
				//echo $currentMonth;
				for ($currentMonth;$counter<=$showFullYear;$currentMonth++)
					{
					$this->retVals.="\n<td style=\"vertical-align: top\">";
					$this->retVals.=$this->makecal($currentMonth,$currentYear,$roomUid,$property_uid);
					if ($currentMonth==12)
						{
						$currentYear=$currentYear+1;
						$currentMonth=0;
						}
					$this->retVals.="</td>\n";
					if ($counter%3==0 and $counter<72)
						$this->retVals.="</tr>\n<tr>";
					$counter++;
					}
				}
			else
				{
				$this->retVals.="<td>\n";
				$this->retVals.=$this->makecal($currentMonth,$currentYear,$roomUid);
				$this->retVals.="</td>\n";
				}
			$this->retVals.='
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</center>
			';
			}
			
		if ( $room_avl_enquiry || $jrConfig['composite_property_details']!="1" || (jomresGetParam( $_REQUEST, 'task', '' )=="dobooking"))
			{
			echo $this->retVals;
			unset($this->retVals);
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY',_JOMRES_COM_AVLCAL_INMONTHFACE_KEY);
		$output[]		=jr_gettext('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY',_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY);
		$output[]		=jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR);
		$output[]		=jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR);
			
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	#
	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function makecal($stmonth, $styear,$roomUid,$property_uid)
		{
		// Adapted from source
		// http://www.weberdev.com/get_example-1430.html
		// Submitted by: Whiddon James on Dec 01st 1999
		global $mrConfig,$jomresConfig_locale,$jrConfig;
		global $jomresConfig_live_site,$noshowroom, $jomresConfig_offset;
		$userIsManager=checkUserIsManager();
		setlocale(LC_ALL, $jomresConfig_locale);

		$showOutMonthDates=false;
		if ($this->pop==1 || jomresGetParam( $_REQUEST, 'task', '' ) == "remoteavailability" )		// If we are in a popup then it is not suitable to link directly to the booking form, so we'll set a target = "_BLANK" to go to the booking form.
			$target=' TARGET="_blank" ';
		else
			$target="";

		###################################
		## define variables-little cleaner
		## than mucking over the code to
		## change stuff

		$face			= "verdana";  ## font face for all text
		$size			= "1";		## font size for all text
		$height		 = "12";		## cell height
		$width		  = "12";		## cell width
		$todaycolor	 = $mrConfig['avlcal_todaycolor'];  ## font color for the current date
		$inmonthface	= $mrConfig['avlcal_inmonthface'];  ## font color for days in the display month
		$outmonthface	= $mrConfig['avlcal_outmonface'];  ## font color for days not in the display month
		$inbgcolor	  = $mrConfig['avlcal_inbgcolour'];  ## cell bgcolor for days in the display month
		$outbgcolor	 = $mrConfig['avlcal_outbgcolour'];  ## cell bgcolor for days not in display month
		$occupiedcolour = $mrConfig['avlcal_occupiedcolour'];  ## cell bgcolour for occupied days
		$provisionalcolour = $mrConfig['avlcal_provisionalcolour'];  ## cell bgcolour for occupied days
		$pastcolour 	= $mrConfig['avlcal_pastcolour'];  ## cell bgcolour for occupied days

		###################################
		## make workie code stuph
		##

		$todaysDate=date("Y/m/d");
		$stdate = mktime(0,0,0,$stmonth,1,$styear);
		$startdate = $currdate = mktime(0,0,0,$stmonth,1 - date("w", mktime(0,0,0,$stmonth,1,$styear)),$styear);
		$enddate = mktime(0,0,0,date("m",$stdate) + 1,7 - date("w", mktime(0,0,0,$stmonth + 1,0,$styear)),$styear);
		$dateElements=explode("/",$todaysDate);
		$unixTodaysDate=mktime(0, 0, 0,$dateElements[1],$dateElements[2],$dateElements[0]);

		//$thisMonthName=jr_gettext('_JOMRES_CUSTOMTEXT_'.date("M",$stdate),strftime( "%B",$stdate),true);
		$thisMonthName= getThisMonthName(date("n",$stdate));
		
		$this->retVals.="\n<table class=rescal cellspacing=0>\n";
		$this->retVals.="<tr class=\"availability_calendar_months\" >\n<th colspan=7 height=\"$height\"><font face=\"$face\" size=\"$size\">" . utf8_encode($thisMonthName) . " " . strftime( "%Y",$stdate) . "</font></th>\n</tr>\n";
		$this->retVals.="<tr class=\"availability_calendar_days\">\n<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
			size=\"$size\">". jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR)."</font></th>\n";
		$this->retVals.="<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
			size=\"$size\">". jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR)."</font></th>\n";
		$this->retVals.="<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
			size=\"$size\">". jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR)."</font></th>\n";
		$this->retVals.="<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
			size=\"$size\">". jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR)."</font></th>\n";
		$this->retVals.="<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
			size=\"$size\">". jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR)."</font></th>\n";
		$this->retVals.="<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
			size=\"$size\">". jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR)."</font></th>\n";
		$this->retVals.="<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
			size=\"$size\">". jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR',_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR)."</font></th>\n</tr>\n";
		if ($mrConfig['limitAdvanceBookingsYesNo']=="1")
			{
			$dateElements=explode("/",$todaysDate);
			$unixLatestDate=mktime(0, 0, 0,$dateElements[1],$dateElements[2]+$mrConfig['advanceBookingsLimit'],$dateElements[0]);
			}

		$i=0;
		$sqlDates=array();
		$datesArray=array();

		while ($currdate < $enddate)
			{
			$sqlDates[]=date("Y/m/d",$currdate);
			$i++;
			$currdate = mktime(0,0,0,date("m",$startdate),date("d",$startdate) + $i,date("Y",$startdate));
			}
		$gor=genericOr($sqlDates,'date',false);

		$query="SELECT contract_uid,black_booking,date FROM #__jomres_room_bookings WHERE room_uid = '".(int)$roomUid."' AND ".$gor;
		$roomList = doSelectSql($query);
		foreach ($roomList as $cont)
			{
			$date=$cont->date;
			$contract_uid=$cont->contract_uid;
			$black_booking=$cont->black_booking;
			$deposit_paid="";
			$bgcolor=$inbgcolor;
			if ($black_booking!="1")
				{
				$bgcolor=$occupiedcolour;
				$query="SELECT deposit_paid FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."'";
				$contractList = doSelectSql($query);
				foreach ($contractList as $contract)
					{
					$deposit_paid=$contract->deposit_paid;
					if (!$deposit_paid)
						$bgcolor=$provisionalcolour;
					}
				}
			else
				$bgcolor=$occupiedcolour;
			$datesArray[$date]=array('contract_uid'=>$contract_uid,'bgcolor'=>$bgcolor, );
			}

		$i=0;
		$currdate = mktime(0,0,0,date("m",$startdate),date("d",$startdate),date("Y",$startdate));
		$startingmonth = date("m",mktime(0,0,0,date("m",$startdate),date("d",$startdate),date("Y",$startdate)));
		$endingmonth = date("m",mktime(0,0,0,date("m",$stdate) + 1,7 - date("w", mktime(0,0,0,$stmonth + 1,0,$styear)),$styear) );
		//var_dump($currdate);var_dump($enddate);exit;
		while ($currdate < $enddate)
			{
			$this->retVals.="<tr>\n";
			for ($c = 0; $c < 7; $c++)
				{
				$contract_uid="";
				$link="";
				$deposit_paid=TRUE;
				$bgcolor=$inbgcolor;
				$sqlDate2=date("Y-m-d",$currdate);
				$sqlDate=date("Y/m/d",$currdate);
				//$currdow=date("w",$sqlDate);
				$currentMonth=date("m",$currdate);
				if (array_key_exists(date("Y/m/d",$currdate),$datesArray) )
					{
					$bgcolor=$datesArray[date("Y/m/d",$currdate)]['bgcolor'];
					$contract_uid=$datesArray[date("Y/m/d",$currdate)]['contract_uid'];
					}
				$jomresCurrDate=date("Y/m/d",$currdate);
				$dateElements=explode("/",$jomresCurrDate);
				$unixCurrDate=mktime(0, 0, 0,$dateElements[1],$dateElements[2],$dateElements[0]);

				if ($mrConfig['limitAdvanceBookingsYesNo']=="1" && ($unixCurrDate>=$unixLatestDate))
					$bgcolor = $pastcolour;
				if ($unixCurrDate<$unixTodaysDate)
					$bgcolor = $pastcolour;

				if ((date("m",$stdate) == date("m",$currdate)) && ($bgcolor != $occupiedcolour) && ($bgcolor != $provisionalcolour) && ($bgcolor != $pastcolour)) {
					$bgcolor = $inbgcolor;
				} else {
						if (($bgcolor != $occupiedcolour) && ($bgcolor != $provisionalcolour) && ($bgcolor != $pastcolour))
							$bgcolor = $outbgcolor;
				}
				if (date("d",$currdate) == date("d") && date("m",$currdate) == date("m") && date("Y",$currdate) == date("Y")) {
					$fcolor = $todaycolor;
				} elseif (date("m",$currdate) == date("m",$stdate) && date("Y",$currdate) == date("Y",$stdate)) {
					$fcolor = $inmonthface;
				} else {
					$fcolor = $outmonthface;
				}

				//echo $startingmonth.' '.$currentMonth.' '.$endingmonth.'<br>';
				if ( $currentMonth == $startingmonth && date("m",$stdate) > date("m",$startdate) )
					$bgcolor =$outbgcolor;
				if ( date("m",$currdate) == date("m",$enddate) )
					$bgcolor =$outbgcolor;
				if (!$showOutMonthDates && $bgcolor ==$outbgcolor)
					$this->retVals.="<td height=\"$height\" width=\"$width\" valign=\"middle\" ><font face=\"$face\" size=\"$size\" color=\"$fcolor\">";
				else
					$this->retVals.="<td height=\"$height\" width=\"$width\" valign=\"middle\" bgcolor=\"$bgcolor\"><font face=\"$face\" size=\"$size\" color=\"$fcolor\">";

				if (!$showOutMonthDates && $bgcolor ==$outbgcolor)
					$this->retVals.="&nbsp;";
				else
					{
					if ($bgcolor !=$occupiedcolour && $bgcolor != $outmonthface && $bgcolor != $provisionalcolour && ($bgcolor != $pastcolour))
						{
						if ($mrConfig['fixedArrivalDateYesNo'])
							{
							$currdow=date("w",$currdate);
							if (!$noshowroom && $bgcolor !=$outbgcolor)
								{
								if ($mrConfig['fixedArrivalDay']==date("w",$currdate) )
									if ($mrConfig['visitorscanbookonline'] && $this->showlinks)
										{
										$link=JOMRES_SITEPAGE_URL.'&task=dobooking&amp;selectedProperty='.$property_uid.'&arrivalDate='.$sqlDate2;
										if (!$mrConfig['singleRoomProperty'])
											$link.='&remus='.$roomUid;
										if ( $jrConfig['useSSLinBookingform'] == "1" )
											$link=jomresURL($link,1);
										else
											$link=jomresURL($link);
										$link = jomresValidateUrl($link);
										$thelink='<a '.$target.' href="'.$link.'" class=rescal rel="nofollow">'.date ("j",$currdate).'</a>';

										$this->retVals.=$thelink;
										}
									else
										$this->retVals.=date ("j",$currdate);
								else
									$this->retVals.=date ("j",$currdate);
								}
							else
								$this->retVals.=date ("j",$currdate);
							}
						else
							{
							if (!$noshowroom && $bgcolor !=$outbgcolor && $mrConfig['visitorscanbookonline'] && $this->showlinks)
								{
								$link=JOMRES_SITEPAGE_URL.'&task=dobooking&amp;selectedProperty='.$property_uid.'&arrivalDate='.$sqlDate2;
								if (!$mrConfig['singleRoomProperty'])
									$link.='&remus='.$roomUid;
								if ( $jrConfig['useSSLinBookingform'] == "1" )
									$link=jomresURL($link,1);
								else
									$link=jomresURL($link);
								$thelink='<a '.$target.' href="'.$link.'" class=rescal rel="nofollow">'.date ("j",$currdate).'</a>';

								$this->retVals.=$thelink;
								}
							else
								$this->retVals.=date ("j",$currdate);
							}
						}
					else
						{
						if ($userIsManager)
							{
							if ($contract_uid!="")
								{
								$link="<a $target href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&amp;contract_uid=$contract_uid")."\" class=rescal >".(date ("j",$currdate))."</a>";
								$this->retVals.=$link;
								}
							else
								$this->retVals.=date ("j",$currdate);
							}
						else
							$this->retVals.=date ("j",$currdate);
						}
					}
				$this->retVals.="</font></td>\n";
				$i++;
				$currdate = mktime(0,0,0,date("m",$startdate),date("d",$startdate) + $i,date("Y",$startdate));
				}
			$this->retVals.="</tr>\n";
			}
		$this->retVals.="</table>\n";
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
		return $this->retVals;
		}
	}
?>