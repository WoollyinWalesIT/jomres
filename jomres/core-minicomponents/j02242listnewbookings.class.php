<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Constructs and displays new bookings (bookings whose deposits have not been confirmed)
 #
* @package Jomres
#
 */
class j02242listnewbookings {
	/**
	#
	 * Constructor: Constructs and displays new bookings (bookings whose deposits have not been confirmed)
	#
	 */
	function j02242listnewbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$arrivalDates=jomresGetParam( $_REQUEST, 'arrivalDates', '');
		if ($arrivalDates=='%') unset($arrivalDates);
		$defaultProperty=getDefaultProperty();
		if (isset($arrivalDates) && !empty($arrivalDates))
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,  g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, c.deposit_paid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE c.guest_uid = g.guests_uid  and c.deposit_paid = '0' and c.property_uid = '".(int)$defaultProperty."' AND c.arrival = '$arrivalDates' AND c.cancelled = 0 AND c.bookedout = 0
			ORDER BY c.arrival";
			}
		else
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,  g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, c.deposit_paid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE c.guest_uid = g.guests_uid and c.deposit_paid = '0' AND c.property_uid = '".(int)$defaultProperty."' AND c.cancelled = 0 AND c.bookedout = 0
			ORDER BY c.arrival";
			}
		$contractsList =doSelectSql($query);
		$dates=array();
		if (count($contractsList)>0)
			{
			foreach($contractsList as $contract)
				{
				$arrivalDateArray[]=$contract->arrival;
				}
			if (!empty($arrivalDateArray))
				{
				$dates=array_unique($arrivalDateArray);
				asort($dates);
				}
			}

		$arrivaldateDropdown=filterForm('arrivalDates',$dates,"date","listNewBookings");
		showLiveBookings( $contractsList,jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS',_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS,FALSE),$arrivaldateDropdown);
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS',_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS);

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