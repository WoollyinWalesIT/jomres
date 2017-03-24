<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.28
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class basic_room_details
{
    private static $configInstance;

    public function __construct()
    {
        $this->rooms = false;
        $this->room = false;
        $this->all_room_features = array();
        $this->property_uid = 0;
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    //Get all rooms details
    public function get_all_rooms($property_uid = 0)
    {
        if ($property_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }

        if (is_array($this->rooms)) { //already executed but the property doesn`t have any rooms created yet, so the array is empty
            return true;
        } else {
            $this->rooms = array();
        }

        $this->property_uid = $property_uid;

        $room_feature_uids = ''; //here we`ll store all room feature uids so we can later get the details only for the used features, not all.

        $query = 'SELECT 
						`room_uid`,
						`room_classes_uid`,
						`propertys_uid`,
						`room_features_uid`,
						`room_name`,
						`room_number`,
						`room_floor`,
						`max_people`,
						`singleperson_suppliment`
					FROM #__jomres_rooms 
					WHERE `propertys_uid` = ' .(int) $property_uid.' 
					ORDER BY LENGTH(room_number), room_number, room_name
					';
        $result = doSelectSql($query);

        if (count($result) < 1) {
            return false;
        }

        foreach ($result as $r) {
            $this->rooms[$r->room_uid]['room_uid'] = (int) $r->room_uid;
            $this->rooms[$r->room_uid]['room_classes_uid'] = (int) $r->room_classes_uid;
            $this->rooms[$r->room_uid]['propertys_uid'] = (int) $r->propertys_uid;
            $this->rooms[$r->room_uid]['room_features_uid'] = stripslashes($r->room_features_uid);
            $this->rooms[$r->room_uid]['room_name'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE'.$r->room_uid, stripslashes($r->room_name), false);
            $this->rooms[$r->room_uid]['room_number'] = stripslashes($r->room_number);
            $this->rooms[$r->room_uid]['room_floor'] = stripslashes($r->room_floor);
            $this->rooms[$r->room_uid]['max_people'] = (int) $r->max_people;
            $this->rooms[$r->room_uid]['singleperson_suppliment'] = (float) $r->singleperson_suppliment;

            if ($this->rooms[$r->room_uid]['room_features_uid'] != '') {
                $room_feature_uids .= $this->rooms[$r->room_uid]['room_features_uid'].',';
            }
        }

        if ($room_feature_uids != '') {
            $room_feature_uids = substr($room_feature_uids, 0, -1);
            $room_feature_uids = array_unique(explode(',', $room_feature_uids));
            $this->get_rooms_features($room_feature_uids);
        }

        return true;
    }

    //Get room details
    public function get_room($room_uid = 0)
    {
        if ($room_uid == 0) {
            throw new Exception('Error: Room uid not set.');
        }

        if (is_array($this->rooms) && array_key_exists($room_uid, $this->rooms)) {
            $this->room = $this->rooms[$room_uid];

            return true;
        }

        if (is_array($this->room)) {
            return true;
        }

        $this->room = array();

        $query = 'SELECT 
						`room_uid`,
						`room_classes_uid`,
						`propertys_uid`,
						`room_features_uid`,
						`room_name`,
						`room_number`,
						`room_floor`,
						`max_people`,
						`singleperson_suppliment`
					FROM #__jomres_rooms 
					WHERE `room_uid` = ' .(int) $room_uid.' 
					LIMIT 1
					';
        $result = doSelectSql($query);

        if (count($result) < 1) {
            return false;
        }

        foreach ($result as $r) {
            $this->room['room_uid'] = (int) $r->room_uid;
            $this->room['room_classes_uid'] = (int) $r->room_classes_uid;
            $this->room['propertys_uid'] = (int) $r->propertys_uid;
            $this->room['room_features_uid'] = stripslashes($r->room_features_uid);
            $this->room['room_name'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMNAME_TITLE'.$r->room_uid, stripslashes($r->room_name), false);
            $this->room['room_number'] = stripslashes($r->room_number);
            $this->room['room_floor'] = stripslashes($r->room_floor);
            $this->room['max_people'] = (int) $r->max_people;
            $this->room['singleperson_suppliment'] = (float) $r->singleperson_suppliment;

            $this->property_uid = $this->room['propertys_uid'];
        }

        if ($this->room['room_features_uid'] != '') {
            $room_feature_uids = array_unique(explode(',', $this->room['room_features_uid']));
            $this->get_rooms_features($room_feature_uids);
        }

        return true;
    }

    public function get_rooms_features($room_feature_uids = array())
    {
        if (count($room_feature_uids) < 1) {
            throw new Exception('Error: Room feature uids not set.');
        }

        $query = 'SELECT 
						`room_features_uid`, 
						`feature_description`, 
						`property_uid`, 
						`ptype_xref`, 
						`image` 
					FROM #__jomres_room_features 
					WHERE `room_features_uid` IN ('.jomres_implode($room_feature_uids).') 
					';
        $result = doSelectSql($query);

        if (count($result) > 0) {
            //get the room feature images for tooltips
            $jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
            $jomres_media_centre_images->get_images($this->property_uid, array('room_features'));

            foreach ($result as $r) {
                $this->all_room_features[ $r->room_features_uid ][ 'room_features_uid' ] = (int) $r->room_features_uid;
                $this->all_room_features[ $r->room_features_uid ][ 'feature_description' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $r->room_features_uid, stripslashes($r->feature_description), false, false);

                if ($r->ptype_xref != '') {
                    $this->all_room_features[ $r->room_features_uid ][ 'ptype_xref' ] = unserialize($r->ptype_xref);
                } else {
                    $this->all_room_features[ $r->room_features_uid ][ 'ptype_xref' ] = array();
                }

                //feature images
                $feature_image = $jomres_media_centre_images->multi_query_images['noimage-small'];

                if ($r->image != '') {
                    $feature_image = JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmfeatures/'.stripslashes($r->image);
                } elseif (isset($jomres_media_centre_images->images['room_features'][ $r->room_features_uid ][0]['small'])) {
					$feature_image = $jomres_media_centre_images->images['room_features'][ $r->room_features_uid ][0]['small'];
				}
                
				$this->all_room_features[ $r->room_features_uid ][ 'image' ] = $feature_image;

                $feature_image = str_replace(get_showtime('live_site').'/', '', $feature_image);
                $this->all_room_features[ $r->room_features_uid ][ 'tooltip' ] = jomres_makeTooltip(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $r->room_features_uid, stripslashes($r->feature_description), false, false), jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $r->room_features_uid, stripslashes($r->feature_description), false, false), '', $feature_image, '', 'property_feature', array());
            }
        }

        return true;
    }

    //Get property uid for room uid
    public function get_property_uid_for_room_uid($room_uid = 0)
    {
        if ($room_uid == 0) {
            throw new Exception('Error: Room uid not set.');
        }

        if (is_array($this->rooms) && array_key_exists($room_uid, $this->rooms)) {
            $this->property_uid = $this->rooms[$room_uid]['propertys_uid'];

            return $this->property_uid;
        }

        $query = 'SELECT 
						`propertys_uid` 
					FROM #__jomres_rooms 
					WHERE `room_uid` = ' .(int) $room_uid;
        $result = doSelectSql($query, 1);

        if ((int) $result < 1) {
            return false;
        }

        $this->property_uid = (int) $result;

        return $this->property_uid;
    }
}
