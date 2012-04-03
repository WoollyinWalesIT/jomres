<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000deleteGlobalroomTypes
	{
	function j16000deleteGlobalroomTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$success=true;
		$idarray = jomresGetParam( $_POST, 'idarray', array() );
		if (count($idarray)>0)
			{
			foreach ($idarray as $id)
				{
				$saveMessage=_JOMRES_COM_MR_ROOMCLASS_DELETED;
				// First we need to check that the feature isn't recorded against any tariffs. If it is, we can't move forward
				$query="SELECT  roomclass_uid FROM #__jomres_rates WHERE roomclass_uid='".(int)$id."'";
				$rtList =doSelectSql($query);
				if (count($rtList)>0)
					{
					$success=false;
			 		echo _JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS." Room type id: ".$id."<br>";
					}
			 	else
			 		{
					$query="DELETE FROM #__jomres_room_classes  WHERE room_classes_uid='".(int)$id."'";
					doInsertSql($query,'');
					}
				}
			if ($success)
				{
				$query = "DELETE FROM #__jomres_roomtypes_propertytypes_xref WHERE roomtype_id = ".(int)$id;
				doInsertSql($query,'');
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listGlobalroomTypes",$saveMessage);
				}
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}