<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Saves credit card data saved by the receptionist/manager when editing a customer's details
 #
* @package Jomres
#
 */
class j02232savecreditcard {
	/**
	#
	 * Constructor: Saves credit card data saved by the receptionist/manager when editing a customer's details
	#
	 */
	function j02232savecreditcard()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$jomresConfig_secret = get_showtime('secret');
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$guestUid			= intval(jomresGetParam( $_POST, 'guestUid', 0 ) );
		if ($guestUid)
			{
			$iss_mon            = intval( jomresGetParam( $_POST, 'iss_mon', 0 ) );
			$iss_year           = intval( jomresGetParam( $_POST, 'iss_year', 0 ) );
			$expiry_mon         = intval( jomresGetParam( $_POST, 'expiry_mon', 0 ) );
			$expiry_year        = intval( jomresGetParam( $_POST, 'expiry_year', 0 ) );
			$issueno            = intval( jomresGetParam( $_POST, 'issueno', 0 ) );
			$ccv	            = intval( jomresGetParam( $_POST, 'ccv', 0 ) );
			$ccard_no	        = getEscaped( jomresGetParam( $_POST, 'ccard_no', "" ) );
			$ccard_name         = getEscaped( jomresGetParam( $_POST, 'ccard_name', "" ) );
			$issued=$iss_mon.'/'.$iss_year;
			$expires=$expiry_mon.'/'.$expiry_year;
			$query="UPDATE #__jomres_guests SET
			`ccard_no`=ENCODE('$ccard_no', '$jomresConfig_secret'),
			`ccard_issued`=ENCODE('$issued', '$jomresConfig_secret'),
			`ccard_expiry`=ENCODE('$expires', '$jomresConfig_secret'),
			`ccard_iss_no`=ENCODE('$issueno', '$jomresConfig_secret'),
			`ccard_name`=ENCODE('$ccard_name', '$jomresConfig_secret'),
			`ccv`=ENCODE('$ccv', '$jomresConfig_secret')
			WHERE guests_uid = '".(int)$guestUid."' AND property_uid = '".(int)$defaultProperty."' ";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED',_JOMRES_MR_AUDIT_CREDITCARD_UPDATED,FALSE))) trigger_error ("Unable to save creditcard data to table", E_USER_ERROR);
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'save_creditcard.html' );
			$tmpl->displayParsedTemplate();
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