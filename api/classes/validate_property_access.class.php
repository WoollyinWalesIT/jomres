<?php
/**
  *
 *
 *  @package Jomres\Core\REST_API
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.3
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
*
 * Confirms that the key pair have rights to query a property
 *
 * OAuth2 keypairs are associated with CMS users. Whilst keypairs can belong to any registered user any API feature that directly changes or exposes a property should call this class to confirm that the key pair user has rights to perform the action on the specific property. Keypairs need both therefore to have been given access to the Scope in question and additionally it needs to pass this test.
*
*/
class validate_property_access
{
	/**
	*
	* Constructor
	*
	*/
    public function __construct()
    {
    }

	/**
	*
	* Tests keypair to confirm that they have rights to access the property. If the user is a super property manager or the system keypair then the answer is yes. If not, then the managers_propertys_xref table is queried to check that the property is one of the manager's properties
	*
	*/
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
