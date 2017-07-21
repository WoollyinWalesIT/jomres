<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.7
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_qr_code
{
    private static $configInstance;

    public function __construct()
    {
        require_once JOMRES_LIBRARIES_ABSPATH.'qr_code_lib'.JRDS.'qrlib.php';
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }
}
