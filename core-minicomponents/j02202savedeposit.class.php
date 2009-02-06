<?php
/**
#
 * Mini-component core file: Saves deposit data
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
 * Saves deposit data
 #
* @package Jomres
#
 */
class j02202savedeposit {
	/**
	#
	 * Constructor: Saves deposit data
	#
	 */
	function j02202savedeposit()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		global $jomresConfig_live_site,$Itemid;
		$defaultProperty=getDefaultProperty();
		$contractUid        = intval(jomresGetParam( $_POST, 'contractUid', 0 ) );
		$depositRef         = getEscaped(  jomresGetParam( $_POST, 'depositRef', "" ) );
		if ($contractUid>0)
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE',_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE,FALSE);
			$query="UPDATE #__jomres_contracts SET `deposit_paid`='1',`deposit_ref`='$depositRef' WHERE contract_uid='".(int)$contractUid."' AND property_uid = '".(int)$defaultProperty."'";
			if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT',_JOMRES_MR_AUDIT_ENTEREDDEPOSIT,FALSE))) trigger_error ("Unable to update deposit entry, mysql db failure", E_USER_ERROR);
			jomresRedirect( jomresURL("index.php?option=com_jomres&task=listNewBookings&Itemid=$Itemid"), $saveMessage );
			}
		else
			trigger_error ("Incorrect contract uid when saving deposit", E_USER_ERROR);
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
