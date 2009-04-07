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


class j06000saveCoupon {
	function j06000saveCoupon()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}

		$coupon_code			= jomresGetParam( $_POST, 'coupon_code', '' );
		$coupon_id				= (int)jomresGetParam( $_POST, 'coupon_id', 0 );
		$valid_from				= jomresGetParam( $_POST, 'valid_from', '' );
		$valid_to				= jomresGetParam( $_POST, 'valid_to', '' );
		$amount					= jomresGetParam( $_POST, 'amount', 0.00 );
		$is_percentage			= (bool)jomresGetParam( $_POST, 'is_percentage', '' );
		//$rooms_only				= (bool)jomresGetParam( $_POST, 'rooms_only', '' );

		$explodedvalid_from = explode ("/",$valid_from);
		$valid_from = $explodedvalid_from[2]."-".$explodedvalid_from[1]."-".$explodedvalid_from[0];
		$explodedvalid_to = explode ("/",$valid_to);
		$valid_to = $explodedvalid_to[2]."-".$explodedvalid_to[1]."-".$explodedvalid_to[0];
		
		$defaultProperty=getDefaultProperty();

		if ($coupon_id > 0)
			{
			$query="UPDATE #__jomres_coupons SET `coupon_code`='$coupon_code',`valid_from`='$valid_from',
			`valid_to`='$valid_to',`amount`='$amount',`is_percentage`='$is_percentage'
			WHERE coupon_id = $coupon_id AND property_uid = $defaultProperty";
			if (!doInsertSql($query)) trigger_error ("Unable to update coupon details, mysql db failure", E_USER_ERROR);
			}
		else
			{
			$query="INSERT INTO #__jomres_coupons (`property_uid`,`coupon_code`,`valid_from`,`valid_to`,`amount`,`is_percentage`)
			VALUES 
			($defaultProperty,'$coupon_code','$valid_from','$valid_to','$amount','$is_percentage')";
			if (!doInsertSql($query)) trigger_error ("Unable to insert coupon details, mysql db failure", E_USER_ERROR);

			}
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listCoupons"), '' );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>