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

class j16000deleteGlobalroomTypes
	{
	function j16000deleteGlobalroomTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
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
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listGlobalroomTypes",$saveMessage);
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}