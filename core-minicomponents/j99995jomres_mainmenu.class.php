<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j99995jomres_mainmenu
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

         $this->ret_vals = '';
         
        if (AJAXCALL == true) {
            return;
        }

        // Stops the main menu from being generated twice.
        if (get_showtime('mainmenu_alreadyrun')) {
            return;
        }
        if (get_showtime('menuoff')) {
            return;
        }

        $output = array();
        $publishedProperties = count(get_showtime('published_properties_in_system'));
        $output[ 'PUBLISHEDPROPERTIESTXT' ] = jr_gettext('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', $editable = false, $isLink = false);
        $output[ 'PUBLISHEDPROPERTIES' ] = $publishedProperties;
        $output[ 'TITLE' ] = jr_gettext('_JOMCOMP_MYUSER_MENUTITLE', '_JOMCOMP_MYUSER_MENUTITLE', $editable = false, $isLink = false);

        $rows = array();
        $MiniComponents->triggerEvent('00009', $componentArgs);
        $mcOutput = $MiniComponents->getAllEventPointsData('00009');
        foreach ($mcOutput as $key => $val) {
            $r = array();
            $r[ 'OPTIONS' ] = $val;
            $rows[ ] = $r;
        }
        set_showtime('jomres_mainmenu_user_options', $rows);

        if ($thisJRUser->userIsManager) {
            $rows = array();
            $MiniComponents->triggerEvent('00010');
            $mcOutput = $MiniComponents->getAllEventPointsData('00010');
            foreach ($mcOutput as $key => $val) {
                $r = array();
                $r[ 'OPTIONS' ] = $val;
                $rows[ ] = $r;
            }
            set_showtime('jomres_mainmenu_reception_options', $rows);

            if ($thisJRUser->accesslevel > 50) { //higher than receptionist
                $rows = array();
                $MiniComponents->triggerEvent('00011', $componentArgs);
                $mcOutput = $MiniComponents->getAllEventPointsData('00011');

                if (count($mcOutput) > 0) {
                    foreach ($mcOutput as $key => $val) {
                        if (isset($val['MULTIDIM'])) {
                            foreach ($val['MULTIDIM'] as $v) {
                                $r = array();
                                $r[ 'OPTIONS' ] = $v;
                                $rows[ ] = $r;
                            }
                        } else {
                            $r = array();
                            $r[ 'OPTIONS' ] = $val;
                            $rows[ ] = $r;
                        }
                    }
                }

                set_showtime('jomres_mainmenu_manager_options', $rows);
            }
        }
        $this->ret_vals = $MiniComponents->triggerEvent('99996'); // New Jomres Mainmenu
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
