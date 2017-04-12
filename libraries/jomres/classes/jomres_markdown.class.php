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

// A wrapper class for parsing data through a markdown class

class jomres_markdown {
    public function __construct() {
        require_once (JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'Parsedown'.JRDS.'Parsedown.php');
    }

    public function get_markdown($string) {
        $Parsedown = new Parsedown();
        $Parsedown->setBreaksEnabled(true);
        return $Parsedown->text($string);
    }

}
