<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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
