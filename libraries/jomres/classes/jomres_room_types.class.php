<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_room_types
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->room_types = false;
		$this->property_specific_room_types = false;

		$this->property_room_types = false;
		$this->all_rtype_ptype_xrefs = false;
		$this->all_ptype_rtype_xrefs = false;
		$this->this_rtype_ptype_xrefs = array();

		$this->room_type = array();
		$this->room_type['room_classes_uid'] = 0;		// new resource type id default
		$this->room_type['room_class_abbv'] = '';		// resource type name; TODO: make it use jr_gettext
		$this->room_type['room_class_full_desc'] = '';		// resource type description - not used
		$this->room_type['image'] = '';		// resource type icon path
		$this->room_type['ptype_xref'] = array();	// property types that this room type is assigned to
		$this->room_type['property_uid'] = false;
	}
	
	/**
	 * 
	 *
	 *
	 */

	// Get all room types details
	public function get_all_room_types()
	{
		if (is_array($this->room_types)) { //already executed, but there are no room types created yet, so the array is empty, or the data is retreived from cache
			return true;
		} else {
			$this->room_types = array();
		}

		//get the room type property type xrefs
		$this->get_xrefs();

		$query = 'SELECT `room_classes_uid`, `room_class_abbv`, `room_class_full_desc`, `image` , `property_uid` FROM #__jomres_room_classes ORDER BY `room_class_abbv` ';

		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}


		foreach ($result as $r) {
			if ($r->property_uid  > 0 ) {
				$this->property_specific_room_types[$r->property_uid][$r->room_classes_uid]['room_classes_uid'] = (int) $r->room_classes_uid;
				$this->property_specific_room_types[$r->property_uid][$r->room_classes_uid]['room_class_abbv'] = $r->room_class_abbv;
				$this->property_specific_room_types[$r->property_uid][$r->room_classes_uid]['room_class_full_desc'] = $r->room_class_full_desc;
				$this->property_specific_room_types[$r->property_uid][$r->room_classes_uid]['image'] = $r->image;

				if (isset($this->all_rtype_ptype_xrefs[$r->room_classes_uid])) {
					$this->property_specific_room_types[$r->property_uid][$r->room_classes_uid]['ptype_xref'] = $this->all_rtype_ptype_xrefs[$r->room_classes_uid];
				} else {
					$this->property_specific_room_types[$r->property_uid][$r->room_classes_uid]['ptype_xref'] = array();
				}
				$this->property_specific_room_types[$r->property_uid][$r->room_classes_uid]['property_uid'] = (int) $r->property_uid;
			} else {
				$this->room_types[$r->room_classes_uid]['room_classes_uid'] = (int) $r->room_classes_uid;
				$this->room_types[$r->room_classes_uid]['room_class_abbv'] = $r->room_class_abbv;
				$this->room_types[$r->room_classes_uid]['room_class_full_desc'] = $r->room_class_full_desc;
				$this->room_types[$r->room_classes_uid]['image'] = $r->image;

				if (isset($this->all_rtype_ptype_xrefs[$r->room_classes_uid])) {
					$this->room_types[$r->room_classes_uid]['ptype_xref'] = $this->all_rtype_ptype_xrefs[$r->room_classes_uid];
				} else {
					$this->room_types[$r->room_classes_uid]['ptype_xref'] = array();
				}
				$this->room_types[$r->room_classes_uid]['property_uid'] = (int) $r->property_uid;
			}

		}

		return true;
	}

	
	/**
	 * 
	 *
	 *
	 */

	//Get room type details by room type id
	public function get_room_type($room_classes_uid = 0)
	{
		if ($room_classes_uid == 0) {
			return true;
		}

		if (is_array($this->room_types) && isset($this->room_types[$room_classes_uid])) {
			$this->room_type = $this->room_types[$room_classes_uid];

			return true;
		}

		if (isset($this->all_rtype_ptype_xrefs[$room_classes_uid])) {
			$this->this_rtype_ptype_xrefs[$room_classes_uid][] = $this->all_rtype_ptype_xrefs[$room_classes_uid];
		} else {
			//get the room type property type xrefs
			$this->get_xrefs($room_classes_uid);
		}

		$query = 'SELECT `room_classes_uid`, `room_class_abbv`, `room_class_full_desc`, `image` , `property_uid` FROM #__jomres_room_classes WHERE `room_classes_uid` = '.(int) $room_classes_uid;
		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			if ($r->property_uid == 0 ) {
				$this->room_type['room_classes_uid'] = (int) $r->room_classes_uid;
				$this->room_type['room_class_abbv'] = $r->room_class_abbv;
				$this->room_type['room_class_full_desc'] = $r->room_class_full_desc;
				$this->room_type['image'] = $r->image;

				if (isset($this->this_rtype_ptype_xrefs[$r->room_classes_uid])) {
					$this->room_type['ptype_xref'] = $this->this_rtype_ptype_xrefs[$r->room_classes_uid];
				} else {
					$this->room_type['ptype_xref'] = array();
				}
			} else {
				$this->property_specific_room_type[$r->property_uid][$r->room_classes_uid]['room_classes_uid'] = (int) $r->room_classes_uid;
				$this->property_specific_room_type[$r->property_uid][$r->room_classes_uid]['room_class_abbv'] = $r->room_class_abbv;
				$this->property_specific_room_type[$r->property_uid][$r->room_classes_uid]['room_class_full_desc'] = $r->room_class_full_desc;
				$this->property_specific_room_type[$r->property_uid][$r->room_classes_uid]['image'] = $r->image;

				if (isset($this->all_rtype_ptype_xrefs[$r->room_classes_uid])) {
					$this->property_specific_room_type[$r->property_uid][$r->room_classes_uid]['ptype_xref'] = $this->all_rtype_ptype_xrefs[$r->room_classes_uid];
				} else {
					$this->property_specific_room_type[$r->property_uid][$r->room_classes_uid]['ptype_xref'] = array();
				}
				$this->property_specific_room_type[$r->property_uid][$r->room_classes_uid]['property_uid'] = (int) $r->property_uid;
			}

		}

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Save new or existing resource type
	public function save_room_type()
	{
		if ($this->room_type['room_classes_uid'] > 0) {
			$query = "UPDATE #__jomres_room_classes
						SET
							`room_class_abbv` 		= '".$this->room_type['room_class_abbv']."',
							`room_class_full_desc` 	= '".$this->room_type['room_class_full_desc']."',
							`image` 				= '".$this->room_type['image']."'

						WHERE `room_classes_uid` = " .(int) $this->room_type['room_classes_uid'];

			if (doInsertSql($query, false)) {
				$roomtype_id = $this->room_type['room_classes_uid'];
			} else {
				throw new Exception('Error: Existing room type update failed.');
			}
		} else {
			$query = "INSERT INTO #__jomres_room_classes
								(
								`room_class_abbv` ,
								`room_class_full_desc`,
								`image`,
								`property_uid`
								)
							VALUES
								(
								'".$this->room_type['room_class_abbv']."',
								'".$this->room_type['room_class_full_desc']."',
								'".$this->room_type['image']."',
								".(int)$this->room_type['property_uid']."
								)
								";
			$roomtype_id = doInsertSql($query, false);
		}

		updateCustomText('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int) $roomtype_id, $this->room_type['room_class_abbv'], true, $this->room_type['property_uid'] );
		updateCustomText('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int) $roomtype_id, $this->room_type['room_class_full_desc'], true, $this->room_type['property_uid'] );
		
		if ((int) $roomtype_id > 0) {
			if ($this->update_roomtype_propertytype_xref_table($roomtype_id, array($this->room_type['ptype_xref']) )) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	//update room type property type xref
	public function update_roomtype_propertytype_xref_table($roomtype_id = 0, $ptype_xref = array())
	{
		if ($roomtype_id == 0) {
			throw new Exception('Error: Room type id not set.');
		}

		$query = 'DELETE FROM #__jomres_roomtypes_propertytypes_xref WHERE `roomtype_id` = '.(int) $roomtype_id;
		if (!doInsertSql($query, false)) {
			throw new Exception('Error: Room type ptype xref delete failed.');
		}

		if (!empty($ptype_xref)) {
			foreach ($ptype_xref[0] as $ptype) {
				$query = 'INSERT INTO #__jomres_roomtypes_propertytypes_xref (`roomtype_id`,`propertytype_id`) VALUES ('.(int) $roomtype_id.','.(int) $ptype.')';
				if (!doInsertSql($query, '')) {
					throw new Exception('Error: Room type ptype xref insert failed.');
				}
			}
		}
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Delete resource type
	public function delete_room_type($ids = array())
	{
		$success = true;

		foreach ($ids as $id) {
			$query = 'SELECT `room_classes_uid` FROM #__jomres_rooms WHERE room_classes_uid = '.(int) $id;
			$result = doSelectSql($query);
			if (!empty($result)) {
				$success = false;
			} else {
				$query = "DELETE FROM #__jomres_room_classes WHERE `room_classes_uid` = '".(int) $id."'";
				if (!doInsertSql($query, false)) {
					$success = false;
				}

				$query = "DELETE FROM #__jomres_roomtypes_propertytypes_xref WHERE `roomtype_id` = '".(int) $id."'";
				if (!doInsertSql($query, false)) {
					$success = false;
				}
			}
		}

		return $success;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//get room type property type xrefs, all or by room type id
	public function get_xrefs($id = 0)
	{
		if (is_array($this->all_rtype_ptype_xrefs)) {
			return true;
		}

		$clause = '';

		if ($id > 0) {
			$clause = 'WHERE `roomtype_id` = '.(int) $id;
		} else {
			$this->all_rtype_ptype_xrefs = array();
			$this->all_ptype_rtype_xrefs = array();
		}

		$query = "SELECT `roomtype_id`, `propertytype_id` FROM #__jomres_roomtypes_propertytypes_xref $clause ";
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $r) {
				if ($id > 0) {
					//this room type property type xrefs
					$this->this_rtype_ptype_xrefs[$r->roomtype_id][] = $r->propertytype_id;
					//this property type room type xrefs
					$this->this_ptype_rtype_xrefs[$r->propertytype_id][] = $r->roomtype_id;
				} else {
					//all room type property type xrefs
					$this->all_rtype_ptype_xrefs[$r->roomtype_id][] = $r->propertytype_id;
					//all property type room type xrefs
					$this->all_ptype_rtype_xrefs[$r->propertytype_id][] = $r->roomtype_id;
				}
			}
		}

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	function get_all_room_type_images()
	{
		$images = array();

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_site_images('rmtypes');

		foreach ($jomres_media_centre_images->site_images['rmtypes'] as $image)
			{
			$r = array();

			$r[ 'IMAGE_FILENAME' ] = substr($image['large'], strrpos($image['large'], '/') + 1);
			$r[ 'IMAGE_SRC' ]  = $image['large'];

			$images[] = $r;
			}

		return $images;
	}
	
	/**
	 * 
	 *
	 *
	 */

	// To be used by any backend calling script that edits room types. Not required by admin area scripts
	function validate_manager_access_to_room_type($room_class_uid = 0 )
	{
		$property_uid = getDefaultProperty();

		if ( $room_class_uid == 0 ) {
			return true;
		}

		if (empty($this->property_specific_room_types[$property_uid])) {
			return true;
		}

		if (is_array($this->property_specific_room_types[$property_uid])){
			if (isset($this->property_specific_room_types[$property_uid][$room_class_uid])){
				return true;
			}
			throw new Exception('Manager attempted to access a room type that does not belong to them');
		}
	}
}
