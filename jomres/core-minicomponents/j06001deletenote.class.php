<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j06001deletenote {
	function j06001deletenote()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager)
			return;
		$note_id				= jomresGetParam( $_REQUEST, 'note_id', 0 );
		$contract_uid			= jomresGetParam( $_REQUEST, 'contract_uid', 0 );
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
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contract_uid"), '' );
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