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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
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
		jomres_audit(jr_gettext('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT',_JOMRES_MR_AUDIT_ARCHIVED_AUDIT,FALSE),$counter.$saveMessage);
		$jomres_messaging =jomres_getSingleton('jomres_messages');
		$jomres_messaging->set_message($counter.$saveMessage);
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=showAuditTrail"), $saveMessage );
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
