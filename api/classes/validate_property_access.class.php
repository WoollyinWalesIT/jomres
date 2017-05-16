<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class validate_property_access
{
    public function __construct()
    {
    }

    public static function validate($property_uid)
    {
        $scopes = Flight::get('scopes');
        $conn = Flight::db();

        $stmt = $conn->prepare('SELECT access_level FROM '.Flight::get('dbprefix').'jomres_managers WHERE userid = :id');
        $stmt->execute(['id' => Flight::get('user_id')]);
        $user = $stmt->fetch();
        if ($user['access_level'] >= 90 || $scopes[0] == '*') { // User is a super property manager or the system user
            $stmt = $conn->query('SELECT propertys_uid FROM '.Flight::get('dbprefix').'jomres_propertys ORDER BY propertys_uid');
            $property_uids = array();
            while ($row = $stmt->fetch()) {
                $property_uids[] = $row['propertys_uid'];
            }
        } else {
            $query = 'SELECT property_uid FROM '.Flight::get('dbprefix').'jomres_managers_propertys_xref WHERE  manager_id = :id ORDER BY property_uid';
            $stmt = $conn->prepare($query);
            $stmt->execute(['id' => Flight::get('user_id')]);
            $property_uids = array();
            while ($row = $stmt->fetch()) {
                $property_uids[] = $row['property_uid'];
            }
        }

        if (!in_array($property_uid, $property_uids)) {
            Flight::halt(403, "User attempted to access a property that they don't have rights to access");
        } else {
            return true;
        }
    }
}
