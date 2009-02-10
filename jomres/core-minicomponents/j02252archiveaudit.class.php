<?php
/**
#
 * Mini-component core file: Archives the audit data
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
 * Archives the audit data
 #
* @package Jomres
#
 */
class j02252archiveaudit {
	/**
	#
	 * Constructor: Archives the audit data
	#
	 */
	function j02252archiveaudit()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$jomresConfig_live_site,$Itemid;
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		$uidArray=array();
		$saveMessage=jr_gettext('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE,FALSE);
		$query="SELECT `uid`,`date` ,`time` ,`owner` ,`op` ,`args` ,`property_uid` FROM #__jomres_audit WHERE property_uid = ".(int)$defaultProperty;
		$auditList=doSelectSql($query);
		foreach ($auditList as $audit)
			{
			$uidArray[]=$audit->uid;
			$args=addslashes($audit->args);
			$query="INSERT INTO #__jomres_audit_archive (`date`,`time`,`owner`,`op`,`args`,`property_uid`) VALUES
			('".$audit->date."','".$audit->time."','".$audit->owner."','".$audit->op."','".$args."',".(int)$audit->property_uid.")";
			doInsertSql($query,$query);
			//if (!doInsertSql($query,$query))
				//trigger_error ("Archive audit, unable to move data to archive table", E_USER_ERROR);
			}
		$counter=0;
		foreach ($uidArray as $uid)
			{
			$query="DELETE FROM #__jomres_audit WHERE uid = ".(int)$uid."";
			if (!doInsertSql($query,""))
				trigger_error ("Archive audit, unable to delete archived logs", E_USER_ERROR);
			$counter++;
			}
		audit(jr_gettext('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT',_JOMRES_MR_AUDIT_ARCHIVED_AUDIT,FALSE),$counter.$saveMessage);
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=showAuditTrail&Itemid=$Itemid"), $saveMessage );
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
