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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Publish an optional extra
 #
* @package Jomres
#
 */
class j02140publishextra {
	/**
	#
	 * Constructor: Publish an optional extra
	#
	 */
	function j02140publishextra()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$uid		= intval(jomresGetParam( $_REQUEST, 'uid', "" ));
		$defaultProperty=getDefaultProperty();
		$query="SELECT published FROM #__jomres_extras WHERE uid = '".(int)$uid."'";
		$exList = doSelectSql($query);
		foreach ($exList as $ex)
			{
			$published = $ex->published;
			}
		if ($published)
			$query="UPDATE #__jomres_extras SET `published`='0' WHERE uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
		else
			$query="UPDATE #__jomres_extras SET `published`='1' WHERE uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message(_JOMRES_MR_AUDIT_PUBLISH_EXTRA);
		if (doInsertSql($query,_JOMRES_MR_AUDIT_PUBLISH_EXTRA))
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=listExtras","" );
		trigger_error ("Unable to publish extra, mysql db failure", E_USER_ERROR);
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