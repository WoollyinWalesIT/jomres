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
 * Constructs and displays all bookings
 #
* @package Jomres
#
 */
class j06001listoldbookings {
	/**
	#
	 * Constructor: Constructs and displays all bookings
	#
	 */
	function j06001listoldbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager)
			return;
			
		$arrivalDates=jomresGetParam( $_REQUEST, 'arrivalDates', '');
		if ($arrivalDates=='%') unset($arrivalDates);
		$defaultProperty=getDefaultProperty();
		if (isset($arrivalDates) && !empty($arrivalDates))
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,c.cancelled,c.bookedout, g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE (c.guest_uid = g.guests_uid)  AND c.property_uid = '".(int)$defaultProperty."' AND c.arrival = '$arrivalDates' AND (c.cancelled = 1 OR c.bookedout = 1)
			ORDER BY c.arrival";
			}
		else
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,c.cancelled,c.bookedout, g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE (c.guest_uid = g.guests_uid) AND c.property_uid = '".(int)$defaultProperty."' AND (c.cancelled = 1 OR c.bookedout = 1)
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
		$arrivaldateDropdown=filterForm('arrivalDates',$dates,"date","listoldbookings");
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