<?php
/**
*
 *  @package Jomres\Core\REST_API
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
*
 * Confirms that the key pair has been given rights to the scope
 *
 * Key pairs have to have been given rights to a scope (e.g. get_property, set_property etc). The scopes available to the keypair have already been determined by index.php, here we will check that the scope in question is allowed.
 *
*/
class validate_scope
{
	/**
	*
	* Constructor
	*
	*/
    public function __construct($user_scopes)
    {
    }

	/**
	*
	* Confirms or denys whether or not the key pair has rights to access the scope requested by the API feature
	*
	*/
    public static function validate($scope)
    {
        $scopes = Flight::get('scopes');
        $scope_valid = false;
        if (in_array($scope, $scopes) || $scopes[0] == '*') {
            $scope_valid = true;
        } else {
            Flight::halt(403, 'Client not allowed to access this feature : '.$scope);
        }
    }
}
