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

		$auditMessage=jr_gettext('_JOMRES_MR_AUDIT_UPDATE_COUPON',_JOMRES_MR_AUDIT_UPDATE_COUPON,FALSE);
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

		$jomres_messaging = new jomres_messages();
		$jomres_messaging->set_message($auditMessage);
			
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listCoupons"), '' );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>