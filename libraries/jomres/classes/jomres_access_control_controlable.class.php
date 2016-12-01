<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_access_control_controlable
{
    public function __construct()
    {
        // Minicomponents that should never be forbidden from running
        $this->uncontrollable_patterns = array('00001', '00002', '00005', '01009', '01010', '00021', '16010', '16020', '99995', '99996', '99997', '99999', '10001', '10002', '10002', '10003', '10004', '16000');

        $this->uncontrollable_scripts = array('00001start', '00002usermanagement', '00006sanity_checks', '00012managelogs', '00012manager_first_run', '06000cron_exchangerates', '06000cron_invoice', '06000cron_optimise', '06000cron_subscriptions', '06000cronjobs', '00060toptemplate', '00061bottomtemplate', '05000bookingobject', '03020insertbooking');

        $this->menu_patterns = array('00009', '00010', '00011', '01004');
    }
}
