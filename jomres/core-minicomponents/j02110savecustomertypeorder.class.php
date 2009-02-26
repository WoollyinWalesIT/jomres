<?php
/**
#
 * Mini-component core file: Saves the customer type order
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
 * Saves the order that customer types should be shown in
 #
* @package Jomres
#
 */
class j02110savecustomertypeorder {
	/**
	#
	 * Constructor: Saves the order that customer types should be shown in
	#
	 */
	function j02110savecustomertypeorder()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$order      = jomresGetParam( $_POST, 'order', array() );
		foreach ($order as $key=>$val)
			{
			$query="UPDATE  #__jomres_customertypes SET `order`='".$val."' WHERE id = '".(int)$key."' AND property_uid = '".(int)$defaultProperty."'";
			echo $query."<br>";
			if (!doInsertSql($query,_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE))
				trigger_error ("Unable to customer type order, mysql db failure", E_USER_ERROR);
			}
		jomresRedirect( JOMRES_SITEPAGE_URL."&task=listCustomerTypes","" );
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