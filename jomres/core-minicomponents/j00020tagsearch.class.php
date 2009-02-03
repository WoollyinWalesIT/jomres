<?php
/**
#
 * Mini-component core file: Searches for cart numbers
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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00020tagsearch {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00020tagsearch($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $Itemid;
		$defaultProperty=getDefaultProperty();
		$tag=$componentArgs['tag'];
		$query="SELECT contract_uid FROM #__jomres_contracts WHERE tag = '$tag' AND property_uid = '".(int)$defaultProperty."'";
		$contractList =doSelectSql($query);
		foreach ($contractList as $c)
			{
			$contract_uid=$c->contract_uid;
			}
		if (count($contractList)==1)
			jomresRedirect( jomresURL("index.php?option=com_jomres&task=editBooking&Itemid=$Itemid&contract_uid=".$contract_uid), "" );
		else
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,  g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE  tag LIKE '$tag%' AND ((c.guest_uid = g.guests_uid) OR (c.guest_uid = g.mos_userid)) AND c.property_uid = '".(int)$defaultProperty."'
			ORDER BY c.arrival";
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
			$arrivaldateDropdown=filterForm('arrivalDates',$dates,"date");
			showLiveBookings( $contractsList,jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE',_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE,FALSE),$arrivaldateDropdown);
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