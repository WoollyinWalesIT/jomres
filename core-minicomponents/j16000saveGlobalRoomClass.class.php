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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000saveGlobalRoomClass
	{
	function j16000saveGlobalRoomClass()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$roomClassUid				= jomresGetParam( $_POST, 'roomClassUid', 0 );
		$room_class_abbv			= jomresGetParam( $_POST, 'room_class_abbv', "" );
		$room_class_full_desc		= jomresGetParam( $_POST, 'room_class_full_desc', "" );
		$srp_only					= jomresGetParam( $_POST, 'srp_only', 0 );
		
		$image						= jomresGetParam( $_POST, 'image', "" );

		if (empty($roomClassUid) )
			{
			$query="INSERT INTO #__jomres_room_classes (`room_class_abbv`,`room_class_full_desc`,`image`,`property_uid`,`srp_only` )VALUES ('$room_class_abbv','$room_class_full_desc','$image','0','".(int)$srp_only."')";
			if (doInsertSql($query,''))
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listGlobalroomTypes",_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT);
			}
		else
			{
			$query="UPDATE #__jomres_room_classes SET `image`='$image',`room_class_abbv`='$room_class_abbv',`room_class_full_desc`='$room_class_full_desc',`srp_only`='".(int)$srp_only."' WHERE room_classes_uid='".(int)$roomClassUid."' AND property_uid = '0'";
			if (doInsertSql($query,''))
				jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listGlobalroomTypes",_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE);
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}