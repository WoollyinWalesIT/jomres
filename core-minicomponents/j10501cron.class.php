<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501cron
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
		
		$cron = jomres_singleton_abstract::getInstance('jomres_cron');

		$configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_CRON_TITLE', '_JOMRES_COM_A_CRON_TITLE', false));

		$configurationPanel->insertDescription(jr_gettext('_JOMRES_COM_A_CRON_DESC', '_JOMRES_COM_A_CRON_DESC', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_CRON_METHOD', '_JOMRES_COM_A_CRON_METHOD', false));
		$configurationPanel->setmiddle($lists[ 'cron_method' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_CRON_METHOD_DESC', '_JOMRES_COM_A_CRON_METHOD_DESC', false));
		$configurationPanel->insertSetting();
		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10530', $componentArgs);
		
		$configurationPanel->insertHeading("Current Cron Jobs");
		
		$configurationPanel->insertDescription(jr_gettext('_JOMRES_COM_A_CRON_IMMEDIATERUN', '_JOMRES_COM_A_CRON_IMMEDIATERUN', false));
		
		foreach ($cron->allUnlockedJobs as $job) {
			$configurationPanel->setleft('<a href="'.JOMRES_SITEPAGE_URL_AJAX.'&task=cron_'.$job[ 'job_name' ].'&secret='.base64_encode(get_showtime('secret')).'" target="_blank" >'.$job[ 'job_name' ].'</a>');
			$configurationPanel->setmiddle('');
			$configurationPanel->setright('');
			$configurationPanel->insertSetting();
		} 

		$configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
