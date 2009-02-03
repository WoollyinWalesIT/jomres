<?php
/**
#
 * Mini-component core file: Publishes an extra
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$uid,$database,$jomresConfig_live_site,$Itemid;
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
		if (doInsertSql($query,_JOMRES_MR_AUDIT_PUBLISH_EXTRA))
			jomresRedirect( $jomresConfig_live_site."/index.php?option=com_jomres&task=listExtras&Itemid=".$Itemid,"" );
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