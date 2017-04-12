<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_partners
{
    public function __construct()
    {
        $all_users = jomres_cmsspecific_getCMSUsers();
        $this->partners = array();
        $this->partner_guests = array();
        $query = 'SELECT id,cms_userid FROM #__jomres_partners';
        $existing = doSelectSql($query);
        if (!empty($existing)) {
            foreach ($existing as $partner) {
                $cms_userid = $partner->cms_userid;
                $this->partners[$cms_userid]['cms_userid'] = $cms_userid;
                $this->partners[$cms_userid]['username'] = $all_users[$cms_userid]['username'];
            }
        }
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function __clone()
    {
        trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
    }

    public function is_this_cms_user_a_partner($cms_userid)
    {
        if ((int) $cms_userid == 0) {
            return false;
        }
        if (empty($this->partners)) {
            return false;
        }

        if (array_key_exists($cms_userid, $this->partners)) {
            return true;
        }

        return false;
    }

    public function get_guest_uids_for_partner($cms_userid)
    {
        $cms_userid = (int) $cms_userid;
        if ($cms_userid == 0) {
            return array();
        }
        $query = 'SELECT guests_uid FROM #__jomres_guests WHERE partner_id = '.$cms_userid;
        $result = doSelectSql($query);
        if (empty($result)) {
            return array();
        } else {
            foreach ($result as $r) {
                $guest_id = (int) $r->guests_uid;
                $this->partner_guests[$cms_userid ][] = $guest_id;
            }

            return $this->partner_guests;
        }
    }

    public function check_partner_details_complete($cms_userid)
    {
        $cms_userid = (int) $cms_userid;
        if ($cms_userid == 0) {
            return false;
        }

        if (!array_key_exists($cms_userid, $this->partners)) {
            throw new Exception('System tried to check if partner details were complete for userid '.print_r($cms_userid).' however the user is not a partner ');
        }

        $query = 'SELECT
							`id`,
							`cms_user_id`,
							`firstname`,
							`surname`,
							`house`,
							`street`,
							`town`,
							`county`,
							`country`,
							`postcode`,
							`tel_landline`,
							`tel_mobile`,
							`email`
						FROM #__jomres_guest_profile 
						WHERE `cms_user_id` = ' .(int) $cms_userid.' 
						LIMIT 1 ';
        $userProfile = doSelectSql($query, 2);

        if (
            $userProfile['firstname'] == '' ||
            $userProfile['surname'] == '' ||
            $userProfile['house'] == '' ||
            $userProfile['street'] == '' ||
            $userProfile['town'] == '' ||
            $userProfile['county'] == '' ||
            $userProfile['postcode'] == '' ||
            $userProfile['country'] == '' ||
            $userProfile['email'] == '' ||
            $userProfile['tel_landline'] == '' ||
            $userProfile['tel_mobile'] == ''
            ) {
            return false;
        } else {
            return true;
        }
    }
}
