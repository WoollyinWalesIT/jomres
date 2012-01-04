<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$defaultProperty=getDefaultProperty();
		$tag=$componentArgs['tag'];
		$query="SELECT contract_uid FROM #__jomres_contracts WHERE tag = '$tag' AND property_uid = '".(int)$defaultProperty."'";
		$contractList =doSelectSql($query);
		foreach ($contractList as $c)
			{
			$contract_uid=$c->contract_uid;
			}
		if (count($contractList)==1)
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=".$contract_uid), "" );
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