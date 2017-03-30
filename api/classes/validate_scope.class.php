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

class validate_scope
{
    public function __construct($user_scopes)
    {
    }

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
