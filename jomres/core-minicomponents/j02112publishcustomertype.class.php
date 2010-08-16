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
 * Publishes a customer type
 #
* @package Jomres
#
 */
class j02112publishcustomertype {
	/**
	#
	 * Constructor: publishes a customer type
	#
	 */
	function j02112publishcustomertype()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$id       = jomresGetParam( $_REQUEST, 'id', 0 );
		$defaultProperty=getDefaultProperty();
		$query="SELECT published FROM #__jomres_customertypes WHERE id = '".(int)$id."'";
		$exList = doSelectSql($query);
		foreach ($exList as $ex)
			{
			$published = $ex->published;
			}
		if ($published)
			$query="UPDATE #__jomres_customertypes SET `published`='0' WHERE id = '".(int)$id."' AND property_uid = '".(int)$defaultProperty."'";
		else
			$query="UPDATE #__jomres_customertypes SET `published`='1' WHERE id = '".(int)$id."' AND property_uid = '".(int)$defaultProperty."'";
		if (doInsertSql($query,_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE))
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=listCustomerTypes","" );
		trigger_error ("Unable to publish customer type, mysql db failure", E_USER_ERROR);
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