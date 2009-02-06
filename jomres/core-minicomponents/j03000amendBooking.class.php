<?php
/**
#
 * Mini-component core file:
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

class j03000amendBooking
	{
	/**
	#
	 * Constructor: Let's gather the data we want.
	#
	 */
	function j03000amendBooking()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $Itemid,$thisJRUser,$tmpBookingHandler;

		if (!$thisJRUser->userIsManager)
			return;
		if ((isset($tmpBookingHandler->tmpbooking["amend_contract"])) && ($tmpBookingHandler->tmpbooking["amend_contract"] == true))
			{
			if (isset($tmpBookingHandler->tmpbooking["override_contract_total"]) && ($tmpBookingHandler->tmpbooking["override_contract_total"] != "")  )
				$tmpBookingHandler->tmpbooking["contract_total"] = $tmpBookingHandler->tmpbooking["override_contract_total"] ;
			if (isset($tmpBookingHandler->tmpbooking["override_contract_deposit"]) && ($tmpBookingHandler->tmpbooking["override_contract_deposit"] != "") )
				$tmpBookingHandler->tmpbooking["deposit_required"] = $tmpBookingHandler->tmpbooking["override_contract_deposit"] ;
			$tmpBookingHandler->saveBookingData();
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
		{
		return $this->returnValue;
		}
	}
?>