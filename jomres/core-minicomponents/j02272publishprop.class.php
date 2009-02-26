<?php
/**
#
 * Mini-component core file: Constructs and displays  error message to user
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
 * Constructs and displays  error message to user
 #
* @package Jomres
#
 */
class j02272publishprop {
	/**
	#
	 * Constructor: Displays error message to user
	#
	 */
	function j02272publishprop()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$query="SELECT published FROM #__jomres_propertys WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
		$published = doSelectSql($query,1);
		if ($published)
			$query="UPDATE #__jomres_propertys SET `published`='0' WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
		else
			$query="UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
		if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY',_JOMRES_MR_AUDIT_PUBLISH_PROPERTY,FALSE))) returnToPropertyConfig("");
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