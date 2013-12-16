<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Delete an optional extra
 #
* @package Jomres
#
 */
class j06001dashboard_resources_ajax {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j06001dashboard_resources_ajax()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$property_uid = jomresGetParam($_GET, 'property_uid', 0);
		if ( $property_uid == 0 )
			$property_uid = getDefaultProperty();
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !in_array( $property_uid, $thisJRUser->authorisedProperties ) ) return;
		
		$mrConfig = getPropertySpecificSettings( $property_uid );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) return;
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($property_uid);
		
		$rooms=array();
		$result=array();
		
		$query = "SELECT room_uid, room_classes_uid, room_name, room_number FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $property_uid . "' ORDER BY room_classes_uid, room_number, room_name";
		$roomsList = doSelectSql( $query );
		foreach ( $roomsList as $r )
			{
			$name = '<span class="small">';
			$name .= $current_property_details->all_room_types[ $r->room_classes_uid ][ 'room_class_abbv' ];
			if ( $mrConfig[ 'singleRoomProperty' ] == 0 )
				 $name .= ' ' . $r->room_number;
			$name .= '</span>';
			
			$rooms[] = array ( 'id' => $r->room_uid, 'name' => $name );
			}
		
		echo json_encode($rooms);
		}
	
	function getRetVals()
		{
		return null;
		}
	}
?>