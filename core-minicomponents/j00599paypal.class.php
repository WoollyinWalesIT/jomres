<?php
/**
#
 * 
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * 
 #
* @package Jomres
#
 */
class j00599paypal {
	/**
	#
	 * Constructor: Shows the confirmation form
	#
	 */
	function j00599paypal()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $property_uid,$thisJRUser,$MiniComponents,$Itemid;

		$bookingdata = gettempBookingdata();
		$paypal_settings = new jrportal_paypal_settings();
		$paypal_settings->get_paypal_settings();
		
		if (!$thisJRUser->userIsManager && $paypal_settings->paypalConfigOptions['override'] == "1")
			{
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=paypal") ,"" );
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
		return null;
		}
	}
?>