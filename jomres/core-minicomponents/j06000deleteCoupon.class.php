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

/**
#
 * Delete an optional extra
 #
* @package Jomres
#
 */
class j06000deleteCoupon {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j06000deleteCoupon()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$coupon_id=jomresGetParam( $_REQUEST, 'coupon_id', 0 );
		$defaultProperty=getDefaultProperty();
		if ($coupon_id>0)
			{
			$query="DELETE FROM #__jomres_coupons WHERE coupon_id = '".(int)$coupon_id."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,jr_gettext('_JRPORTAL_COUPONS_SQLERROR',_JRPORTAL_COUPONS_SQLERROR,FALSE)))
				trigger_error ("Unable to delete from coupons table, mysql db failure", E_USER_ERROR);
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listCoupons"), $saveMessage );
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