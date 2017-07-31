<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

if (!using_bootstrap()) {
    jr_import('jomres_content_tabs_normal');

    class jomres_content_tabs extends jomres_content_tabs_normal
    {
    }
} else {
    jr_import('jomres_content_tabs_bootstrap');

    class jomres_content_tabs extends jomres_content_tabs_bootstrap
    {
    }
}
