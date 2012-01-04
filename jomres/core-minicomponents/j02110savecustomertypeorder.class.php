<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$order      = jomresGetParam( $_POST, 'order', array() );
		foreach ($order as $key=>$val)
			{
			$query="UPDATE  #__jomres_customertypes SET `order`='".$val."' WHERE id = '".(int)$key."' AND property_uid = '".(int)$defaultProperty."'";
			//echo $query."<br>";
			if (!doInsertSql($query,_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE))
				trigger_error ("Unable to customer type order, mysql db failure", E_USER_ERROR);
			}
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		//$jomres_messaging = new jomres_messages();
		$jomres_messaging->set_message(_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE);
			
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