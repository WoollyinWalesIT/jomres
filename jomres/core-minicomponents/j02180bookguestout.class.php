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

/**
#
 * Constructs and displays booking out data
 #
* @package Jomres
#
 */
class j02180bookguestout {
	/**
	#
	 * Constructor: Constructs and displays booking out data
	#
	 */
	function j02180bookguestout()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$defaultProperty=getDefaultProperty();
		if (!isset($_REQUEST['dueDepart'])  )
			{
			$defaultProperty=getDefaultProperty();
			$today = date("Y/m/d");
			$dropDownList ="<select name=\"dueDepart\">";
			$query="SELECT contract_uid,guest_uid FROM #__jomres_contracts WHERE  booked_in = '1' AND cancelled = 0 AND bookedout = 0 AND property_uid = '".(int)$defaultProperty."'";
			$dueContracts =doSelectSql($query);
			$numberOfContractsDue=count($dueContracts);
			if ($numberOfContractsDue>0)
				{
				foreach ($dueContracts as $dueContract)
					{
					$contractUid=$dueContract->contract_uid;
					$guest_uid=$dueContract->guest_uid;
					$query="SELECT room_uid FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$contractUid."' LIMIT 1";
					$roomUidList= doSelectSql($query);
					foreach($roomUidList as $roomUid)
						{
						$room_uid=$roomUid->room_uid;
						}
					$query="SELECT room_number FROM #__jomres_rooms WHERE room_uid = '".(int)$room_uid."'";
					$roomDataList= doSelectSql($query);
					foreach($roomDataList as $roomData)
						{
						$room_number=$roomData->room_number;
						}

					$query = "SELECT guests_uid,surname, firstname, house,street FROM #__jomres_guests WHERE guests_uid = '".(int)$guest_uid."' OR mos_userid = '".(int)$guest_uid."' ORDER BY surname";
					$customerDetails =doSelectSql($query);
					foreach ($customerDetails as $customer)
						{
						$dropDownList .= "<option value=\"".$contractUid."\">".$customer->surname.", ".$customer->firstname.", ".$customer->house.", ".$customer->street.", "._JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK.": ".$room_number."</option>";
						}
					}
				$dropDownList.="</select>";

				$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_TITLE',_JOMRES_FRONT_MR_BOOKOUT_TITLE);
				$output['DROPDOWNLIST']=$dropDownList;

				$jrtbar =jomres_getSingleton('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('save','','',true,'bookGuestOut');
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL),'');
				$jrtb .= $jrtbar->endTable();
				$output['JOMRESTOOLBAR']=$jrtb;

				$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
				$tmpl->readTemplatesFromInput( 'get_guests_depart_today.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->displayParsedTemplate();
				}
			else
				echo jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT',_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT);
			}
		else
			{
			if ( isset($_REQUEST['dueDepart']) )
				$contractUid         = jomresGetParam( $_REQUEST, 'dueDepart', 0 );
				$popup         = jomresGetParam( $_REQUEST, 'popup', 0 );

			if ($contractUid != 0 )
				{
				if (isset($contract_uid) && !empty($contract_uid))
					$contractUid=$contract_uid;
				$today = date("Y/m/d");
				$saveMessage=jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT',_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT,FALSE);
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				//$jomres_messaging = new jomres_messages();
				$jomres_messaging->set_message($saveMessage);
				$currfmt = jomres_getSingleton('jomres_currency_format');

				// It's time to generate our invoice
				$query="SELECT deposit_required,contract_total,arrival,true_arrival,deposit_paid,rate_rules,property_uid,single_person_suppliment,room_total,date_range_string,guest_uid FROM #__jomres_contracts WHERE contract_uid = '".(int)$contractUid."' AND property_uid = '".(int)$defaultProperty."'";
				$contractList =doSelectSql($query);
				$query="SELECT service_description,service_value FROM #__jomres_extraServices WHERE contract_uid = '".(int)$contractUid."'";
				$servicesList =doSelectSql($query);
				foreach($contractList as $contractData)
					{
					$depositRequired= $contractData->deposit_required;
					$contractTotal= $contractData->contract_total;
					$true_arrival= $contractData->true_arrival;
					$deposit_paid= $contractData->deposit_paid;
					$rate_rules= $contractData->rate_rules;
					$arrival= $contractData->arrival;
					$room_total= $contractData->room_total;
					$property_uid=(int)$contractData->property_uid;
					$single_person_suppliment=$contractData->single_person_suppliment;
					$date_range_string= $contractData->date_range_string;
					$guest_uid= $contractData->guest_uid;
					}

				$dateRangeArray=explode(",",$date_range_string);
				$originalStayDays=count($dateRangeArray);
				$actualstayDays=dateDiff("d",$true_arrival,$today);

				$agreedratepernight=$room_total/$originalStayDays;
				$totalCosts=$single_person_suppliment+($agreedratepernight*$actualstayDays);

				$output['LIVESITE']=get_showtime('live_site');
				$output['HSTAYNIGHTS']=jr_gettext('_JOMRES_COM_INVOICE_STAYNIGHTS',_JOMRES_COM_INVOICE_STAYNIGHTS);
				$output['HCONTRACTAGREED']=jr_gettext('_JOMRES_COM_INVOICE_CONTRACTAGREED',_JOMRES_COM_INVOICE_CONTRACTAGREED);
				$output['HCOSTPERNIGHT']=jr_gettext('_JOMRES_COM_INVOICE_COSTPERNIGHT',_JOMRES_COM_INVOICE_COSTPERNIGHT);
				//$output['HROOMCOST']=jr_gettext('_JOMRES_COM_INVOICE_ACTUALROOMCOST',_JOMRES_COM_INVOICE_ACTUALROOMCOST);
				$output['HEXTRASERVICE']=jr_gettext('_JOMRES_COM_ADDSERVICE_BOOKINGDESC',_JOMRES_COM_ADDSERVICE_BOOKINGDESC);

				$output['HSINGLEPERSON_COST']=jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST);
				$output['SINGLEPERSON_COST']=output_price($single_person_suppliment);

				$output['CONTRACTUID']=$contractUid;
				$output['SAVEBUTTON']=jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_TITLE',_JOMRES_FRONT_MR_BOOKOUT_TITLE,false);

				$output['STAYNIGHTS']=$actualstayDays;
				$output['CONTRACTAGREED']=output_price($contractTotal);
				$output['COSTPERNIGHT']=output_price($agreedratepernight);

				$extraServicesTotal=0;
				$output_extras=array();
				if (count($servicesList)>0)
					{
					foreach ($servicesList as $service)
						{
						$serviceValue=$service->service_value;
						$ex['DESC']=$service->service_description;
						$ex['VAL']=output_price($serviceValue);

						$extraServicesTotal=$extraServicesTotal+$serviceValue;
						$output_extras[]=$ex;
						}
					$output['HEXTRASERVICE_TOTAL']=jr_gettext('_JOMRES_COM_ADDSERVICE_TOTALVALUE',_JOMRES_COM_ADDSERVICE_TOTALVALUE);
					$output['EXTRASERVICE_TOTAL']=output_price($extraServicesTotal);
					}
				else
					$output['HEXTRASERVICE']=jr_gettext('_JOMRES_EXTRAS_NOEXTRAS',_JOMRES_EXTRAS_NOEXTRAS);

				// Time to generate the data to be displayed on the invoice
				$grandTotal=$totalCosts+$extraServicesTotal;
				$output['HGRANDTOTAL']=jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL',_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL);
				$output['GRANDTOTAL']=output_price($grandTotal);

				$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=yes,menubar=yes,resizable=yes,width=710,height=500,directories=no,location=no';
				$link = JOMRES_SITEPAGE_URL."&task=bookGuestOut&contract_uid=".$contractUid."&popup=1&dueDepart=".$contractUid;
				$output['INVOICEFORMLINK']="<a href=\"javascript:void window.open('".jomresURL($link)."', 'win2', '$status');\" title=\""._JOMRES_COM_CONFIRMATION_TITLE."\">".jr_gettext('_JOMRES_COM_INVOICE_PRINT',_JOMRES_COM_INVOICE_PRINT)."</a>";

				if ($popup ==0)
					{
					$jrtbar =jomres_getSingleton('jomres_toolbar');
					$jrtb  = $jrtbar->startTable();
					$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveBookout');
					$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contractUid"),'');
					$jrtb .= $jrtbar->toolbarItem('printer','javascript:void window.open(\''.$link.'\', \'win2\', \''.$status.'\');',jr_gettext('_JOMRES_COM_INVOICE_PRINT',_JOMRES_COM_INVOICE_PRINT,$editable=false,$isLink=false));
					$jrtb .= $jrtbar->endTable();
					$output['JOMRESTOOLBAR']=$jrtb;
					$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

					$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
					
					$pageoutput[]=$output;

					$tmpl = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
					$tmpl->readTemplatesFromInput( 'bookguestout.html');
					$tmpl->addRows( 'pageoutput',$pageoutput);
					$tmpl->addRows( 'output_extras',$output_extras);
					$tmpl->displayParsedTemplate();
					}
				else
					{
					$output['IMAGE']=getImageForProperty("property",$property_uid,$property_uid);

					$output['LIVESITE']		=get_showtime('live_site');
					$output['BL_DEAR']=jr_gettext('_JOMRES_COM_CONFIRMATION_DEAR',_JOMRES_COM_CONFIRMATION_DEAR);
					$output['BL_INTRO1']=jr_gettext('_JOMRES_COM_INVOICE_LETTER_INTRO1',_JOMRES_COM_INVOICE_LETTER_INTRO1);
					$output['HOPEYOUENJOYEDSTAY']=jr_gettext('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY',_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY);
					$output['SIGNEDONBEHALF']=jr_gettext('_JOMRES_INVOICE_SIGNEDONBEHALFOF',_JOMRES_INVOICE_SIGNEDONBEHALFOF);

					$output['HTELEPHONE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
					$output['HFAX']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
					$output['HEMAIL']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL);
					$output['HWEBSITE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE);
					$output['RESV_DETAILS']=jr_gettext('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS',_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS);

					$propertyAddressArray=getPropertyAddressForPrint($property_uid);
					$propertyContactArray=$propertyAddressArray[1];
					$propertyAddyArray=$propertyAddressArray[2];

					$output['PROP_NAME']=ucfirst(strtolower($propertyContactArray[0]));
					$output['PROP_STREET']=ucfirst(strtolower($propertyContactArray[1]));
					$output['PROP_TOWN']=ucfirst(strtolower($propertyContactArray[2]));
					$output['PROP_POSTCODE']=$propertyContactArray[3];
					$output['PROP_REGION']=ucfirst(strtolower($propertyContactArray[4]));

					$countryname=getSimpleCountry($propertyContactArray[5]);

					$output['PROP_COUNTRY']=ucfirst($countryname);
					$output['PROP_TEL']=$propertyAddyArray[0];
					$output['PROP_FAX']=$propertyAddyArray[1];
					$output['PROP_EMAIL']=$propertyAddyArray[2];
					$output['PROP_URL']=$propertyAddyArray[3];

					$guestDetailsArray=getGuestForPrint($guest_uid);

					$output['GUEST_FIRSTNAME']=ucfirst($guestDetailsArray[0]);
					$output['GUEST_SURNAME']=ucfirst($guestDetailsArray[1]);
					$output['GUEST_HOUSE']=ucfirst($guestDetailsArray[2]);
					$output['GUEST_STREET']=ucfirst($guestDetailsArray[3]);
					$output['GUEST_TOWN']=ucfirst($guestDetailsArray[4]);
					$output['GUEST_POSTCODE']=$guestDetailsArray[5];
					$output['GUEST_REGION']=ucfirst($guestDetailsArray[6]);
					$output['GUEST_COUNTRY']=ucfirst($guestDetailsArray[7]);
					
					$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
					
					$pageoutput[]=$output;

					$tmpl = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
					$tmpl->readTemplatesFromInput( 'invoice_form.html');
					$tmpl->addRows( 'output_extras',$output_extras);
					$tmpl->addRows( 'pageoutput',$pageoutput);
					$tmpl->displayParsedTemplate();
					}


				}
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_TITLE',_JOMRES_FRONT_MR_BOOKOUT_TITLE);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT',_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT);
		$output[]		=jr_gettext('_JOMRES_COM_INVOICE_STAYNIGHTS',_JOMRES_COM_INVOICE_STAYNIGHTS);
		$output[]		=jr_gettext('_JOMRES_COM_INVOICE_CONTRACTAGREED',_JOMRES_COM_INVOICE_CONTRACTAGREED);
		$output[]		=jr_gettext('_JOMRES_COM_INVOICE_COSTPERNIGHT',_JOMRES_COM_INVOICE_COSTPERNIGHT);
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_BOOKINGDESC',_JOMRES_COM_ADDSERVICE_BOOKINGDESC);
		$output[]		=jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_TITLE',_JOMRES_FRONT_MR_BOOKOUT_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_TOTALVALUE',_JOMRES_COM_ADDSERVICE_TOTALVALUE);
		$output[]		=jr_gettext('_JOMRES_EXTRAS_NOEXTRAS',_JOMRES_EXTRAS_NOEXTRAS);
		$output[]		=jr_gettext('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL',_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL);
		$output[]		=jr_gettext('_JOMRES_COM_CONFIRMATION_DEAR',_JOMRES_COM_CONFIRMATION_DEAR);
		$output[]		=jr_gettext('_JOMRES_COM_INVOICE_LETTER_INTRO1',_JOMRES_COM_INVOICE_LETTER_INTRO1);
		$output[]		=jr_gettext('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY',_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY);
		$output[]		=jr_gettext('_JOMRES_INVOICE_SIGNEDONBEHALFOF',_JOMRES_INVOICE_SIGNEDONBEHALFOF);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE);
		$output[]		=jr_gettext('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS',_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
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