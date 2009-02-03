<?php
/**
#
 * Mini-component core file: Constructs and displays booking in data
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * Constructs and displays booking in data
 #
* @package Jomres
#
 */
class j02170bookguestin {
	/**
	#
	 * Constructor: Constructs and displays booking in data
	#
	 */
	function j02170bookguestin()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $database,$mrConfig,$Itemid;
		$defaultProperty=getDefaultProperty();
		
		if (!isset($_REQUEST['dueContract']))
			{
			global $database,$mrConfig,$jomresConfig_live_site,$Itemid;
			$defaultProperty=getDefaultProperty();
			
			
			$today = date("Y/m/d");
			$query="SELECT contract_uid,guest_uid,arrival FROM #__jomres_contracts WHERE booked_in NOT LIKE '1' AND guest_uid NOT LIKE '0' AND property_uid = '".(int)$defaultProperty."' ORDER BY arrival";
			$dueContracts =doSelectSql($query);
			if (count($dueContracts)>0)
				{
				$dropDownList ="<select name=\"dueContract\">";
				foreach ($dueContracts as $dueContract)
					{
					$contractUid=$dueContract->contract_uid;
					$selected="";
					$passed_contract_uid = jomresGetParam( $_REQUEST, 'contract_uid', 0 );
					if ($passed_contract_uid == $contractUid )
						$selected="selected";
					$guest_uid=$dueContract->guest_uid;
					//echo $guest_uid."<br>";
					$arrivalDate=$dueContract->arrival;
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

					$query = "SELECT guests_uid,surname, firstname, house,street FROM #__jomres_guests WHERE guests_uid = '".(int)$guest_uid."' ORDER BY surname";
					$customerDetails =doSelectSql($query);
					foreach ($customerDetails as $customer)
						{
						$dropDownList .= "<option value=\"".$contractUid."\" ".$selected.">".$customer->surname.", ".$customer->firstname.", ".$customer->house.", ".$customer->street.", "._JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK.": ".$room_number.", "._JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL.": ".outputDate($arrivalDate)."</option>";
						}
					}
				$dropDownList.="</select>";
				$output['ITEMID']=$Itemid;
				$output['VALIDATELINK']=jomresURL("index.php?option=com_jomres&task=bookGuestIn&Itemid=$Itemid");
				$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_MR_BOOKIN_TITLE',_JOMRES_FRONT_MR_BOOKIN_TITLE);
				$output['SAVEBUTTON']=jr_gettext('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON',_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON,false);
				$output['DROPDOWNLIST']=$dropDownList;

				$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

				$jrtbar = new jomres_toolbar();
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('save','','',true,'bookGuestIn');
				$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL("index.php?option=com_jomres&Itemid=$Itemid"),'');
				$jrtb .= $jrtbar->endTable();
				$output['JOMRESTOOLBAR']=$jrtb;

				$pageoutput[]=$output;

				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
				$tmpl->readTemplatesFromInput( 'bookguestin.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				}
			else
				echo jr_gettext('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN',_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN);
			}
		else
			{
			if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
			$contractUid = jomresGetParam( $_REQUEST, 'dueContract', 0 );
			if ($contractUid != 0 )
				{
				$today = date("Y/m/d");
				$query="UPDATE #__jomres_contracts SET `booked_in`='1',`true_arrival`='$today' WHERE contract_uid = '".(int)$contractUid."' AND property_uid = '".(int)$defaultProperty."'";
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_BOOKEDGUESTIN',_JOMRES_MR_AUDIT_BOOKEDGUESTIN,FALSE)) )
					trigger_error ("Unable to update contracts table when booking guest in, mysql db failure", E_USER_ERROR);
				else
					{
					addBookingNote($contractUid,$defaultProperty,_JOMRES_MR_AUDIT_BOOKEDGUESTIN);
					jomresRedirect( jomresURL("index.php?option=com_jomres&task=editBooking&contract_uid=$contractUid&Itemid=$Itemid"),  jr_gettext('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN',_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN,false ) );
					}
				}
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN',_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_BOOKIN_TITLE',_JOMRES_FRONT_MR_BOOKIN_TITLE);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON',_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON);
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