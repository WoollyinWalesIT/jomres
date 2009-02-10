<?php
/**
#
 * Mini-component core file: Deletes an optional extra
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
class j02148deleteextra {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j02148deleteextra()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$uid=jomresGetParam( $_REQUEST, 'uid', 0 );
		$defaultProperty=getDefaultProperty();
		$saveMessage=jr_gettext('_JOMRES_COM_MR_EXTRA_DELETED',_JOMRES_COM_MR_EXTRA_DELETED,FALSE);
		$query="DELETE FROM #__jomres_extras WHERE uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
		if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_EXTRA',_JOMRES_MR_AUDIT_DELETE_EXTRA,FALSE)))
			trigger_error ("Unable to delete from extras table, mysql db failure", E_USER_ERROR);
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listExtras&Itemid=$Itemid"), $saveMessage );
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