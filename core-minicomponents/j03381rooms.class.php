<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j03381rooms
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if (!$thisJRUser->userIsManager)
			{
			return;
			}
		$dropdown = '';
		$defaultProperty = getDefaultProperty();

		$query = "SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,max_people FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $defaultProperty . "' ORDER BY room_number,room_name";
		$roomsList = doSelectSql ($query);
		if (count ($roomsList) > 0 )
			{
			$resource_options = array();
			foreach ( $roomsList as $room )
				{
				$resource_options[ ] = jomresHTML::makeOption( $room->room_uid, $room->room_number." ".$room->room_name );
				}
			$use_bootstrap_radios = false;
			$dropdown = jomresHTML::selectList( $resource_options, 'resource_id', ' autocomplete="off" class="inputbox" size="1" ', 'value', 'text', '' , $use_bootstrap_radios );
			}
		
		$this->ret_vals = $dropdown;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}

?>