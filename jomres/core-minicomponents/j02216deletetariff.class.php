<?php
/**
#
 * Mini-component core file: Deletes a tariff
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
 * Deletes a tariff
 #
* @package Jomres
#
 */
class j02216deletetariff {
	/**
	#
	 * Constructor: Deletes a tariff
	#
	 */
	function j02216deletetariff()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $tariffUid,$mrConfig;
		
		if ( $mrConfig['tariffmode']=="2")
			$MiniComponents->triggerEvent('02217'); //
		else
			{
			if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
			$tariffUid	= intval(jomresGetParam( $_REQUEST, 'tariffUid', 0 ) );
			$defaultProperty=getDefaultProperty();
			$saveMessage=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_DELETED',_JOMRES_COM_MR_LISTTARIFF_DELETED,FALSE);
			if ($tariffUid != 0)
				{
				$query="DELETE FROM #__jomres_rates WHERE rates_uid='".(int)$tariffUid."' AND property_uid = '".(int)$defaultProperty."'";
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_TARIFF',_JOMRES_MR_AUDIT_DELETE_TARIFF,FALSE)))
					returnToPropertyConfig($saveMessage);
				trigger_error ("Unable to delete tariff, mysql db failure", E_USER_ERROR);
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
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>