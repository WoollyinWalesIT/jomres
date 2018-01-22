<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.18
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501debugging
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
        $production_development_dropdown = $componentArgs[ 'production_development_dropdown' ];

		$configurationPanel->startPanel(jr_gettext('_JOMRES_DEBUGGING_TAB', '_JOMRES_DEBUGGING_TAB', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', false));
		$configurationPanel->setmiddle($production_development_dropdown);
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_SEND_ERROR_EMAIL', '_JOMRES_SEND_ERROR_EMAIL', false));
		$configurationPanel->setmiddle($lists[ 'sendErrorEmails' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_SEND_ERROR_EMAIL_DESC', '_JOMRES_SEND_ERROR_EMAIL_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_LOG_LOCATION', '_JOMRES_CONFIG_LOG_LOCATION', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_log_path" value="'.$jrConfig[ 'log_path' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_LOG_LOCATION_DESC', '_JOMRES_CONFIG_LOG_LOCATION_DESC', false).' '.jr_gettext('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', '_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', false).dirname(dirname(dirname(dirname(__FILE__)))).JRDS.'monolog');
		$configurationPanel->insertSetting();

		$syslog_disabled = true;
		$disabled = explode(',', ini_get('disable_functions'));
		if (!in_array(' openlog', $disabled) && !in_array('openlog', $disabled) && !in_array(' syslog', $disabled) && !in_array('syslog', $disabled)) {
			$syslog_disabled = false;
		}

		if (!$syslog_disabled) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_LOG_SYSLOG_HOST', '_JOMRES_CONFIG_LOG_SYSLOG_HOST', false));
			$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_syslog_host" value="'.$jrConfig[ 'syslog_host' ].'" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', '_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_LOG_SYSLOG_PORT', '_JOMRES_CONFIG_LOG_SYSLOG_PORT', false));
			$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_syslog_port" value="'.$jrConfig[ 'syslog_port' ].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
		} else {
			$configurationPanel->setleft();
			$configurationPanel->setmiddle(jr_gettext('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', '_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', false));
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
		}

		$configurationPanel->setleft(jr_gettext('_JOMRES_SAFEMODE', '_JOMRES_SAFEMODE', false));
		$configurationPanel->setmiddle($lists[ 'safe_mode' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_SAFEMODE_DESC', '_JOMRES_SAFEMODE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_ERRORCHECKING', '_JOMRES_COM_A_ERRORCHECKING', false));
		$configurationPanel->setmiddle($lists[ 'errorChecking' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_ERRORCHECKING_DESC', '_JOMRES_COM_A_ERRORCHECKING_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_DUMPTEMPLATEDATA', '_JOMRES_COM_DUMPTEMPLATEDATA', false));
		$configurationPanel->setmiddle($lists[ 'dumpTemplate' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', false));
		$configurationPanel->insertSetting();
		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10532', $componentArgs);

		$configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
