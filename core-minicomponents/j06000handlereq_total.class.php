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
	
class j06000handlereq_total
	{
	/**
	#
	 * Constructor: Let's gather the data we want.
	#
	 */	
	function j06000handlereq_total()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomressession,$property_uid,$tmpBookingHandler;
		
		$inputName						= "overtotal";

		// A la handlereq, we'll create a new jomres booking object
		$MiniComponents 				= new mcHandler();
		$bkg 							= $MiniComponents->triggerEvent('05000'); // Create the new booking object
		
		// Now we can do stuff to the booking parameters. 
		$total 		= jomresGetParam( $_GET, $inputName, "",'string' );
		if ($total != "")
			{
			$totalval = floatval($total);
			if ($totalval > 0)
				{
				if ( !isset($tmpBookingHandler->tmpbooking["override_contract_total"]) )
					$tmpBookingHandler->addNewBookingField("override_contract_total");
				$tmpBookingHandler->updateBookingField("override_contract_total",$total);
				$tmpBookingHandler->saveBookingData();
				}	
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