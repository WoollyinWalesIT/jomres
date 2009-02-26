<?php
/**
#
 * Mini-component core file: Constructs and displays all bookings
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
 * Constructs and displays all bookings
 #
* @package Jomres
#
 */
class j02240listlivebookings {
	/**
	#
	 * Constructor: Constructs and displays all bookings
	#
	 */
	function j02240listlivebookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$arrivalDates=jomresGetParam( $_REQUEST, 'arrivalDates', '');
		if ($arrivalDates=='%') unset($arrivalDates);
		$defaultProperty=getDefaultProperty();
		if (isset($arrivalDates) && !empty($arrivalDates))
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,  g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE (c.guest_uid = g.guests_uid)  AND c.property_uid = '".(int)$defaultProperty."' AND c.arrival = '$arrivalDates' AND c.cancelled = 0
			ORDER BY c.arrival";
			}
		else
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,  g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE (c.guest_uid = g.guests_uid) AND c.property_uid = '".(int)$defaultProperty."' AND c.cancelled = 0
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
		$arrivaldateDropdown=filterForm('arrivalDates',$dates,"date","listLiveBookings");
		showLiveBookings( $contractsList,jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE',_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE,FALSE),$arrivaldateDropdown);
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE',_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE);

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