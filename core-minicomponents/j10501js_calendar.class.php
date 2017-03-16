<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.28
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501js_calendar
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

        $configurationPanel = $componentArgs[ 'configurationPanel' ];
        $lists = $componentArgs[ 'lists' ];
        $jsInputFormatDropdownList = $componentArgs[ 'jsInputFormatDropdownList' ];
        $calendarStartDaysDropdownList = $componentArgs[ 'calendarStartDaysDropdownList' ];

        $configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_JSCALENDAR', '_JOMRES_COM_A_JSCALENDAR', false));

        $configurationPanel->setleft(jr_gettext('_JOMRES_COM_CALENDARINPUT', '_JOMRES_COM_CALENDARINPUT', false));
        $configurationPanel->setmiddle($jsInputFormatDropdownList);
        $configurationPanel->setright(jr_gettext('_JOMRES_COM_CALENDARINPUT_DESC', '_JOMRES_COM_CALENDARINPUT_DESC', false));
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('_JOMRES_COM_CALENDAR_STARTDAY', '_JOMRES_COM_CALENDAR_STARTDAY', false));
        $configurationPanel->setmiddle($calendarStartDaysDropdownList);
        $configurationPanel->setright();
        $configurationPanel->insertSetting();

        $configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
