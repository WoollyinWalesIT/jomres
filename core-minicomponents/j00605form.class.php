<?php
/**
#
 * Mini-component core file: Posts credit card details back to Jomres site
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
 * Form/creditcard outgoing phase
 #
* @package Jomres
#
 */
class j00605form {
	/**
	#
	 * Constructor: Collects the data entered in the creditcard/form field and posts is back to this server
	#
	 */
	function j00605form($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site,$tmpBookingHandler;
		$validCCtypes=array('AMEX','Discover','MasterCard','Visa');
		$bookingdata=$componentArgs['bookingdata'];
		$plugin="form";
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$bookingdata['requestedProperty']."' AND plugin = '$plugin' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}

		$outgoingURL=JOMRES_SITEPAGE_URL.'&task=completebk';

		$iss_mon            = intval( jomresGetParam( $_POST, 'iss_mon', 0 ) );
		$iss_year           = intval( jomresGetParam( $_POST, 'iss_year', 0 ) );
		$expiry_mon         = intval( jomresGetParam( $_POST, 'expiry_mon', 0 ) );
		$expiry_year        = intval( jomresGetParam( $_POST, 'expiry_year', 0 ) );
		$issueno            = intval( jomresGetParam( $_POST, 'issueno', 0 ) );
		$ccv	            = intval( jomresGetParam( $_POST, 'ccv', 0 ) );

		$ccard_no	        = jomresGetParam( $_POST, 'ccard_no', '' );
		$ccard_name         = jomresGetParam( $_POST, 'ccard_name', '' );
		$type				= jomresGetParam( $_POST, 'type', '' );

		if ( !in_array($type,$validCCtypes) )
			trigger_error ("Error. Invalid creditcard type", E_USER_ERROR);

		$issued=$iss_mon.'/'.$iss_year;
		$expires=$expiry_mon.'/'.$expiry_year;

		$tmpBookingHandler->updateGuestField('ccard_no',$ccard_no);
		$tmpBookingHandler->updateGuestField('ccard_issued',$issued);
		$tmpBookingHandler->updateGuestField('ccard_expiry',$expires);
		$tmpBookingHandler->updateGuestField('ccard_iss_no',$issueno);
		$tmpBookingHandler->updateGuestField('ccard_name',$ccard_name);
		$tmpBookingHandler->updateGuestField('ccv',$ccv);
		$tmpBookingHandler->updateGuestField('type',$type);
		$tmpBookingHandler->saveGuestData();
		
		insertInternetBooking($jomressession,FALSE,true);
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