<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$ptype_ids					= jomresGetParam( $_POST, 'ptype_ids', array() );
		$image						= jomresGetParam( $_POST, 'image', "" );

		
		if (empty($roomClassUid) )
			{
			$query="INSERT INTO #__jomres_room_classes (`room_class_abbv`,`room_class_full_desc`,`image`,`property_uid`,`srp_only` )VALUES ('$room_class_abbv','$room_class_full_desc','$image','0','".(int)$srp_only."')";
			$roomClassUid = doInsertSql($query,'');
			$this->update_roomtype_propertytype_xref_table($roomClassUid,$ptype_ids);
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listGlobalroomTypes",_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT);
			}
		else
			{
			$query="UPDATE #__jomres_room_classes SET `image`='$image',`room_class_abbv`='$room_class_abbv',`room_class_full_desc`='$room_class_full_desc',`srp_only`='".(int)$srp_only."' WHERE room_classes_uid='".(int)$roomClassUid."' AND property_uid = '0'";
			doInsertSql($query,'');
			$this->update_roomtype_propertytype_xref_table($roomClassUid,$ptype_ids);
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=listGlobalroomTypes",_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE);
			}
		}
	
	function update_roomtype_propertytype_xref_table($room_type_id,$property_types_array)
		{
		$query = "DELETE FROM #__jomres_roomtypes_propertytypes_xref WHERE roomtype_id = ".(int)$room_type_id;
		doInsertSql($query,'');
		if (count ($property_types_array) > 0)
			{
			foreach ($property_types_array as $ptype)
				{
				$query = "INSERT INTO #__jomres_roomtypes_propertytypes_xref (`roomtype_id`,`propertytype_id`) VALUES (".(int)$room_type_id.",".(int)$ptype.")";
				doInsertSql($query,'');
				}
			}
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}