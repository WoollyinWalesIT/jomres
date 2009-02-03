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

class j16000deleteGlobalroomTypes
	{
	function j16000deleteGlobalroomTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$Itemid;
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
				jomresRedirect( "index2.php?option=com_jomres&task=listGlobalroomTypes",$saveMessage);
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}