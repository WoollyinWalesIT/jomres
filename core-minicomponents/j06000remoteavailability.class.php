<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.10
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000remoteavailability
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        if (isset($componentArgs['property_uid'])) {
            $property_uid = intval($componentArgs['property_uid']);
        } else {
            $property_uid = intval(jomresGetParam($_GET, 'id', 0));
        }

        $return_calendar = false;
        if (isset($componentArgs['return_calendar'])) {
            $return_calendar = (bool) $componentArgs['return_calendar'];
        }

        $_REQUEST[ 'popup' ] = 0;
        
        if ($property_uid > 0) {
            $mrConfig = getPropertySpecificSettings($property_uid);
            if ($mrConfig[ 'singleRoomProperty' ] == '1') {
                $MiniComponents->specificEvent('06000', 'srpavailabilitycalendar' , array('property_uid' => $property_uid) );
            } else {
                $MiniComponents->specificEvent('06000', 'mrpavailabilitycalendar' , array('property_uid' => $property_uid) );
            }
            if (!$return_calendar) {
                echo $result;
            } else {
                $this->retVals = $result;
            }
        } else {
            echo 'Property id not passed';
        }
    }

    /**
     * Must be included in every mini-component.
     */
    public function getRetVals()
    {
        return $this->retVals;
    }
}
