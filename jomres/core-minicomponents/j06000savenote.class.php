<?php
/**
#
 * Mini-component core file:
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


class j06000savenote {
	function j06000savenote()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}

		$newtext				= jomresGetParam( $_POST, 'newtext', "" );
		$contract_uid			= jomresGetParam( $_POST, 'contract_uid', 0 );
		$note_id				= jomresGetParam( $_POST, 'note_id', 0 );
		$defaultProperty=getDefaultProperty();
		$datetime=date("Y-m-d H-i-s");

		global $ePointFilepath,$jomresConfig_lang;
		if (file_exists($ePointFilepath.'language/'.$jomresConfig_lang.'.php'))
			require_once($ePointFilepath.'language/'.$jomresConfig_lang.'.php');
		else if (file_exists($ePointFilepath.'language/en-GB.php'))
			require_once($ePointFilepath.'language/en-GB.php');
		$auditMessage=jr_gettext('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE',_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE,false,false);
		if ($note_id == 0 )
			$query="INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int)$contract_uid."','$newtext','$datetime','".(int)$defaultProperty."')";
		else
			{
			$auditMessage=jr_gettext('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT',_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT,false,false);
			$query="UPDATE #__jomcomp_notes SET `note`='$newtext',`timestamp`='$datetime' WHERE id = '".(int)$note_id."' AND property_uid = '".(int)$defaultProperty."'";
			}
		if (doInsertSql($query,$auditMessage))
			{
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'save_custom_text.html' );
			$tmpl->displayParsedTemplate();
			}
		else
			echo "Error saving note";
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>