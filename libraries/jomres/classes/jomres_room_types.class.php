<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_room_types
{
    private static $configInstance;

    public function __construct()
    {
        $this->room_types = false;

        $this->all_rtype_ptype_xrefs = false;
        $this->all_ptype_rtype_xrefs = false;
        $this->this_rtype_ptype_xrefs = array();

        $this->room_type = array();
        $this->room_type['room_classes_uid'] = 0;        // new resource type id default
        $this->room_type['room_class_abbv'] = '';        // resource type name; TODO: make it use jr_gettext
        $this->room_type['room_class_full_desc'] = '';        // resource type description - not used
        $this->room_type['image'] = '';        // resource type icon path
        $this->room_type['ptype_xref'] = array();    // property types that this room type is assigned to

        //retrieve room types data from cache, if available
        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');
        $room_types_data = $c->retrieve('room_types_data');

        if ($room_types_data !== false) {
            $this->room_types = $room_types_data['room_types'];
            $this->all_rtype_ptype_xrefs = $room_types_data['all_rtype_ptype_xrefs'];
            $this->all_ptype_rtype_xrefs = $room_types_data['all_ptype_rtype_xrefs'];
        }
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    // Get all room types details
    public function get_all_room_types()
    {
        if (is_array($this->room_types)) { //already executed, but there are no room types created yet, so the array is empty, or the data is retreived from cache
            return true;
        } else {
            $this->room_types = array();
        }

        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');

        //get the room type property type xrefs
        $this->get_xrefs();

        $query = 'SELECT `room_classes_uid`, `room_class_abbv`, `room_class_full_desc`, `image` FROM #__jomres_room_classes WHERE `property_uid` = 0 ORDER BY `room_class_abbv` ';
        $result = doSelectSql($query);

        if (count($result) < 1) {
            return false;
        }

        foreach ($result as $r) {
            $this->room_types[$r->room_classes_uid]['room_classes_uid'] = (int) $r->room_classes_uid;
            $this->room_types[$r->room_classes_uid]['room_class_abbv'] = $r->room_class_abbv;
            $this->room_types[$r->room_classes_uid]['room_class_full_desc'] = $r->room_class_full_desc;
            $this->room_types[$r->room_classes_uid]['image'] = $r->image;

            if (isset($this->all_rtype_ptype_xrefs[$r->room_classes_uid])) {
                $this->room_types[$r->room_classes_uid]['ptype_xref'] = $this->all_rtype_ptype_xrefs[$r->room_classes_uid];
            } else {
                $this->room_types[$r->room_classes_uid]['ptype_xref'] = array();
            }
        }

        $c->store('room_types_data', array(
                                            'room_types' => $this->room_types,
                                            'all_rtype_ptype_xrefs' => $this->all_rtype_ptype_xrefs,
                                            'all_ptype_rtype_xrefs' => $this->all_ptype_rtype_xrefs,
                                            )
                );

        return true;
    }

    //Get room type details by room type id
    public function get_room_type($room_classes_uid = 0)
    {
        if ($room_classes_uid == 0) {
            return true;
        }

        if (is_array($this->room_types) && array_key_exists($room_classes_uid, $this->room_types)) {
            $this->room_type = $this->room_types[$room_classes_uid];

            return true;
        }

        if (isset($this->all_rtype_ptype_xrefs[$room_classes_uid])) {
            $this->this_rtype_ptype_xrefs[$room_classes_uid][] = $this->all_rtype_ptype_xrefs[$room_classes_uid];
        } else {
            //get the room type property type xrefs
            $this->get_xrefs($room_classes_uid);
        }

        $query = 'SELECT `room_classes_uid`, `room_class_abbv`, `room_class_full_desc`, `image` FROM #__jomres_room_classes WHERE `property_uid` = 0 AND `room_classes_uid` = '.(int) $room_classes_uid;
        $result = doSelectSql($query);

        if (count($result) < 1) {
            return false;
        }

        foreach ($result as $r) {
            $this->room_type['room_classes_uid'] = (int) $r->room_classes_uid;
            $this->room_type['room_class_abbv'] = $r->room_class_abbv;
            $this->room_type['room_class_full_desc'] = $r->room_class_full_desc;
            $this->room_type['image'] = $r->image;

            if (isset($this->this_rtype_ptype_xrefs[$r->room_classes_uid])) {
                $this->room_type['ptype_xref'] = $this->this_rtype_ptype_xrefs[$r->room_classes_uid];
            } else {
                $this->room_type['ptype_xref'] = array();
            }
        }

        return true;
    }

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
								0
								)
								";
            $roomtype_id = doInsertSql($query, false);
        }

        if ((int) $roomtype_id > 0) {
            if ($this->update_roomtype_propertytype_xref_table($roomtype_id, $this->room_type['ptype_xref'])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

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

        if (count($ptype_xref) > 0) {
            foreach ($ptype_xref as $ptype) {
                $query = 'INSERT INTO #__jomres_roomtypes_propertytypes_xref (`roomtype_id`,`propertytype_id`) VALUES ('.(int) $roomtype_id.','.(int) $ptype.')';
                if (!doInsertSql($query, '')) {
                    throw new Exception('Error: Room type ptype xref insert failed.');
                }
            }
        }

        return true;
    }

    //Delete resource type
    public function delete_room_type($ids = array())
    {
        $success = true;

        foreach ($ids as $id) {
            $query = 'SELECT `room_classes_uid` FROM #__jomres_rooms WHERE room_classes_uid = '.(int) $id;
            $result = doSelectSql($query);
            if (count($result) > 0) {
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

        if (count($result) > 0) {
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
}
