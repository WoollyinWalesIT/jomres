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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################


class j06000deletenote {
	function j06000deletenote()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $Itemid;
		$note_id				= jomresGetParam( $_REQUEST, 'note_id', 0 );
		$contract_uid			= jomresGetParam( $_REQUEST, 'contract_uid', 0 );
		global $ePointFilepath,$jomresConfig_lang;
		if (file_exists($ePointFilepath.'language/'.$jomresConfig_lang.'.php'))
			require_once($ePointFilepath.'language/'.$jomresConfig_lang.'.php');
		else if (file_exists($ePointFilepath.'language/en-GB.php'))
			require_once($ePointFilepath.'language/en-GB.php');
		if ($note_id==0 || $contract_uid ==0)
			{
			echo "Error with note id or contract id";
			return;
			}
		$defaultProperty=getDefaultProperty();
		$auditMessage=jr_gettext('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE',_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE,false,false);
		$query="DELETE FROM #__jomcomp_notes WHERE `id`='".(int)$note_id."' AND `property_uid`='".(int)$defaultProperty."' LIMIT 1";
		if (doInsertSql($query,$auditMessage))
			{
			jomresRedirect( jomresURL("index.php?option=com_jomres&task=editBooking&Itemid=$Itemid&contract_uid=$contract_uid"), '' );
			}
		else
			echo "Error deleting note";
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>