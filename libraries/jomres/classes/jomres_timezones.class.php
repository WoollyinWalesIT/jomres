<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.18
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_timezones
{
    public function __construct()
    {
        $this->check_timezone_change();
        $this->default_timezone = 'UTC';
        if (this_cms_is_joomla()) {
            $CONFIG = new JConfig();
            $this->default_timezone = $CONFIG->offset;
        }
        $this->users_timezone = $this->get_users_timezone();
        //date_default_timezone_set( $this->users_timezone );
    }

    public function check_timezone_change()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (isset($_POST[ 'user_timezone' ]) && $thisJRUser->userIsManager) {
            $selected_timezone = jomresGetParam($_REQUEST, 'user_timezone', '');
            $zones = $this->get_supported_timezones();
            if (array_key_exists($selected_timezone, $zones)) {
                $query = "UPDATE #__jomres_managers SET `users_timezone` = '".$selected_timezone."' WHERE `manager_uid`=".(int) $thisJRUser->jomres_manager_id;
                $result = doInsertSql($query, '');
                $thisJRUser->users_timezone = $selected_timezone;
            }
        }
    }

    public function get_dropdown()
    {
        $zones = $this->get_supported_timezones();
        $zone_options = array();
        foreach ($zones as $zone) {
            $zone_options[ ] = jomresHTML::makeOption($zone[ 'zone' ], $zone[ 'text' ]);
        }
        $javascript = 'onchange="this.form.submit();"';
        $dropdown = jomresHTML::selectList($zone_options, 'user_timezone', 'class="inputbox" size="1" '.$javascript.'', 'value', 'text', $this->users_timezone);

        $selecthtml = '<form action="" method="post" name="user_timezone">';
        $selecthtml .= $dropdown;
        $selecthtml .= '</form>';

        return $selecthtml;
    }

    public function get_users_timezone()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (isset($thisJRUser->users_timezone)) {
            return $thisJRUser->users_timezone;
        } else {
            return $this->default_timezone;
        }
    }

    public function get_supported_timezones()
    {
        $locations = array();
        $zones = timezone_identifiers_list();
        foreach ($zones as $zone) {
            $zoneExploded = explode('/', $zone); // 0 => Continent, 1 => City
            //Only use "friendly" continent names
            if ($zoneExploded[ 0 ] == 'Africa' || $zoneExploded[ 0 ] == 'America' || $zoneExploded[ 0 ] == 'Antarctica' || $zoneExploded[ 0 ] == 'Arctic' || $zoneExploded[ 0 ] == 'Asia' || $zoneExploded[ 0 ] == 'Atlantic' || $zoneExploded[ 0 ] == 'Australia' || $zoneExploded[ 0 ] == 'Europe' || $zoneExploded[ 0 ] == 'Indian' || $zoneExploded[ 0 ] == 'Pacific') {
                if (isset($zoneExploded[ 1 ]) != '') {
                    $area = $zone;
                    $locations[ $zone ] = array('zone' => $zone, 'text' => jr_gettext('_JOMRES_CUSTOMTEXT_TIMEZONES_'.$zone, $zone, false, false));
                }
            }
        }

        return $locations;
    }
}
