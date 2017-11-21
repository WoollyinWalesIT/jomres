<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jrportal_rooms
{
    public function __construct()
    {
        $this->init_room();
    }

    public function init_room()
    {
        $this->room_uid = 0;
        $this->room_classes_uid = 0;            // new room id default
        $this->propertys_uid = 0;               // resource type id
        $this->room_features_uid = array();     // room features array
        $this->room_name = '';                  // room name
        $this->room_number = '';                // room number
        $this->room_floor = '';                 // room floor
        $this->max_people = 1;                  // room`s max guests
        $this->singleperson_suppliment = '';    // single person suppliment
        $this->tagline = '';          // 1000 chars maximum
        $this->description = '';                // 3000 chars maximum
        
        //multiple rooms creation
        $this->rooms_generator = array();                           // array of data used to mass create rooms
        $this->rooms_generator['propertys_uid'] = 0;                // property uid
        $this->rooms_generator['number_of_rooms'] = 0;              // how many rooms to be created
        $this->rooms_generator['room_classes_uid'] = 0;             // what room type to be used for the mass created rooms
        $this->rooms_generator['max_people'] = 0;                   // max guests per room
        $this->rooms_generator['delete_existing_rooms'] = false;    // delete existing rooms before mass creating new ones
    }

    //Save new room
    public function commit_new_room()
    {
        if ($this->room_uid > 0) {
            throw new Exception('Error: Room uid already set. Are you sure you`re creating a new room?');
        }

        if ($this->room_classes_uid == 0) {
            throw new Exception('Error: Room type id not set.');
        }

        if ($this->propertys_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }

        $mrConfig = getPropertySpecificSettings($this->propertys_uid);
		
		if (!empty($this->room_features_uid)) {
			$room_features = jomres_implode($this->room_features_uid);
		} else {
			$room_features = '';
		}

        $query = 'INSERT INTO #__jomres_rooms 
							(
							`room_classes_uid`,
							`propertys_uid`,
							`room_features_uid`,
							`room_name`,
							`room_number`,
							`room_floor`,
							`max_people`,
							`singleperson_suppliment`,
                            `tagline`,
                            `description`
							)
						VALUES 
							(
							' .(int) $this->room_classes_uid.',
							' .(int) $this->propertys_uid.",
							'".jomres_implode($this->room_features_uid)."',
							'".$this->room_name."',
							'".$this->room_number."',
							'".$this->room_floor."',
							" .(int) $this->max_people.',
							' .(float) $this->singleperson_suppliment.',
                            "' .(string) $this->tagline.'",
                            "' .(string) $this->description.'"
							)';
        $this->room_uid = doInsertSql($query, '');
        
        if (!$this->room_uid) {
            throw new Exception('Error: New room insert failed.');
        }
		
		updateCustomText('_JOMRES_CUSTOMTEXT_ROOM_TAGLINE'.$this->room_uid, $this->tagline, true);
        updateCustomText('_JOMRES_CUSTOMTEXT_ROOM_DESCRIPTION_'.$this->room_uid, $this->description, true);

        if ($mrConfig[ 'singleRoomProperty' ] == '1') {
            $this->update_tariffs($this->propertys_uid);
        }

        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'room_added';
        $webhook_notification->webhook_event_description    = 'Logs when a room is added.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $this->propertys_uid;
        $webhook_notification->data->room_uid               = $this->room_uid;
        add_webhook_notification($webhook_notification);
        
        return true;
    }

    //Update existing room
    public function commit_update_room()
    {
        if ($this->room_uid == 0) {
            throw new Exception('Error: Room uid not set.');
        }

        if ($this->room_classes_uid == 0) {
            throw new Exception('Error: Room type id not set.');
        }

        if ($this->propertys_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }

        $mrConfig = getPropertySpecificSettings($this->propertys_uid);
		
		if (!empty($this->room_features_uid)) {
			$room_features = jomres_implode($this->room_features_uid);
		} else {
			$room_features = '';
		}

        $query = 'UPDATE #__jomres_rooms 
					SET 
						`room_classes_uid`          = '.(int) $this->room_classes_uid.",
						`room_features_uid`         = '".$room_features."',
						`room_name`                 = '".$this->room_name."',
						`room_number`               = '".$this->room_number."',
						`room_floor`                = '".$this->room_floor."',
						`max_people`                = " .(int) $this->max_people.',
						`singleperson_suppliment`   = ' .(float) $this->singleperson_suppliment.' ,
                        `tagline`         			= "' .(string) $this->tagline.'",
                        `description`               = "' .(string) $this->description.'" 
					WHERE `room_uid` = ' .(int) $this->room_uid.' 
						AND `propertys_uid` = ' .(int) $this->propertys_uid;

        if (!doInsertSql($query, jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE', '_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE', false))) {
            throw new Exception('Error: Room update failed.');
        }
		
		updateCustomText('_JOMRES_CUSTOMTEXT_ROOM_TAGLINE'.$this->room_uid, $this->tagline, true);
        updateCustomText('_JOMRES_CUSTOMTEXT_ROOM_DESCRIPTION_'.$this->room_uid, $this->description, true);

        if ($mrConfig[ 'singleRoomProperty' ] == '1') {
            $this->update_tariffs($this->propertys_uid);
        }

        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'room_updated';
        $webhook_notification->webhook_event_description    = 'Logs when a room is updated.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $this->propertys_uid;
        $webhook_notification->data->room_uid               = $this->room_uid;
        add_webhook_notification($webhook_notification);
        
        return true;
    }

    private function update_tariffs()
    {
        if ($this->propertys_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }

        $query = 'UPDATE #__jomres_rates SET `roomclass_uid` = '.(int) $this->room_classes_uid.' WHERE `property_uid` = '.(int) $this->propertys_uid;
        if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UPDATE_TARIFF', '_JOMRES_MR_AUDIT_UPDATE_TARIFF', false))) {
            throw new Exception('Error: Tariff room type update failed.');
        }

        $query = 'UPDATE #__jomcomp_tarifftype_rate_xref SET `roomclass_uid` = '.(int) $this->room_classes_uid.' WHERE `property_uid` = '.(int) $this->propertys_uid;
        if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UPDATE_TARIFF', '_JOMRES_MR_AUDIT_UPDATE_TARIFF', false))) {
            throw new Exception('Error: Tariff type xref update failed.');
        }

        return true;
    }

    //Delete room
    public function delete_room()
    {
        if ($this->room_uid == 0) {
            throw new Exception('Error: Room uid not set.');
        }

        if ($this->propertys_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }

        if ($this->room_can_be_deleted()) {
            $query = 'DELETE FROM #__jomres_rooms WHERE `room_uid` = '.(int) $this->room_uid.' AND `propertys_uid` = '.(int) $this->propertys_uid;
            if (!doInsertSql($query, jr_gettext('_JOMRES_COM_MR_ROOM_DELETED', '_JOMRES_COM_MR_ROOM_DELETED', false))) {
                throw new Exception('Error: Delete room failed.');
            }
            
            $webhook_notification                               = new stdClass();
            $webhook_notification->webhook_event                = 'room_updated';
            $webhook_notification->webhook_event_description    = 'Logs when a room is deleted.';
            $webhook_notification->webhook_event_plugin         = 'core';
            $webhook_notification->data                         = new stdClass();
            $webhook_notification->data->property_uid           = $this->propertys_uid;
            $webhook_notification->data->room_uid               = $this->room_uid;
            add_webhook_notification($webhook_notification);
            
            return true;
        } else {
            return false;
        }
    }

    //check if the room can be deleted
    private function room_can_be_deleted()
    {
        if ($this->room_uid == 0) {
            throw new Exception('Error: Room uid not set.');
        }

        if ($this->propertys_uid == 0) {
            throw new Exception('Error: Property uid not set.');
        }

        $mrConfig = getPropertySpecificSettings($this->propertys_uid);

        //if this property is a SRP, this room can`t be deleted
        if ($mrConfig[ 'singleRoomProperty' ] == '1') {
            return false;
        }

        $query = 'SELECT `room_bookings_uid` FROM #__jomres_room_bookings WHERE `room_uid` = '.(int)$this->room_uid.' AND property_uid = '.(int)$this->propertys_uid." AND DATE_FORMAT(`date`, '%Y/%m/%d') >= DATE_FORMAT('".date('Y/m/d')."', '%Y/%m/%d') LIMIT 1";
        $result = doSelectSql($query);

        if (!empty($result)) {
            return false;
        }

        return true;
    }

    //Create multiple rooms
    public function commit_new_rooms()
    {
        if ($this->rooms_generator['propertys_uid'] == 0) {
            throw new Exception('Error: Property uid not set.');
        }

        if ($this->rooms_generator['number_of_rooms'] == 0) {
            throw new Exception('Error: Number of rooms not set.');
        }

        if ($this->rooms_generator['room_classes_uid'] == 0) {
            throw new Exception('Error: Room type not set.');
        }

        if ($this->rooms_generator['max_people'] == 0) {
            throw new Exception('Error: Max people per room not set.');
        }

        //delete existing rooms
        if ($this->rooms_generator['delete_existing_rooms']) {
            $query = 'DELETE FROM #__jomres_rooms WHERE `propertys_uid` = '.(int) $this->rooms_generator['propertys_uid'];
            if (!doInsertSql($query, '')) {
                throw new Exception('Error: Could not delete all rooms.');
            }
        }

        // We need to find the next room number available to us
        $query = 'SELECT MAX(`room_number`) FROM #__jomres_rooms WHERE `propertys_uid` = '.(int) $this->rooms_generator['propertys_uid'].' LIMIT 1';
        $nextRoomNumber = (int) doSelectSql($query, 1);

        if ($nextRoomNumber == 0) {
            $nextRoomNumber = 1;
        }

        $query = 'INSERT INTO #__jomres_rooms 
							(
							`room_classes_uid`,
							`propertys_uid`,
							`room_features_uid`,
							`room_name`,
							`room_number`,
							`room_floor`,
							`max_people`,
							`singleperson_suppliment`
							)
						VALUES ';

        for ($i = 1; $i <= $this->rooms_generator['number_of_rooms']; ++$i) {
            if ($nextRoomNumber < 10) {
                $nextRoomNumberStr = '0'.(string) $nextRoomNumber;
            } else {
                $nextRoomNumberStr = (string) $nextRoomNumber;
            }

            $query .= '
						(
						' .(int) $this->rooms_generator['room_classes_uid'].',
						' .(int) $this->rooms_generator['propertys_uid'].",
						'',
						'',
						'".$nextRoomNumberStr."',
						'',
						" .(int) $this->rooms_generator['max_people'].',
						0
						),';
            ++$nextRoomNumber;
        }

        $query = rtrim($query, ',');

        if (!doInsertSql($query, '')) {
            throw new Exception('Error: Could not mass generate rooms.');
        }
        
        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'rooms_multiple_added';
        $webhook_notification->webhook_event_description    = 'Logs when mulitiple rooms are added.  Because multiple rooms have been added, the remote service is advised to completely refresh their rooms list.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $this->rooms_generator['propertys_uid'];
        add_webhook_notification($webhook_notification);
        
        return true;
    }
}
