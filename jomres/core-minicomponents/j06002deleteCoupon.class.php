<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Delete an optional extra
 #
* @package Jomres
#
 */
class j06002deleteCoupon {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j06002deleteCoupon()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager)
			return;

		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$coupon_id=jomresGetParam( $_REQUEST, 'coupon_id', 0 );
		$defaultProperty=getDefaultProperty();
		if ($coupon_id>0)
			{
			$query="DELETE FROM #__jomres_coupons WHERE coupon_id = '".(int)$coupon_id."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,jr_gettext('_JRPORTAL_COUPONS_SQLERROR',_JRPORTAL_COUPONS_SQLERROR,FALSE),_JOMRES_MR_AUDIT_DELETE_COUPON))
				trigger_error ("Unable to delete from coupons table, mysql db failure", E_USER_ERROR);
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message(_JOMRES_MR_AUDIT_DELETE_COUPON);
			
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