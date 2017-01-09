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

class j16000pseudocron
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $jomresConfig_secret = base64_encode(get_showtime('secret'));
        $plugin = 'jomcompcronjobs';
        if (isset($_POST[ 'method' ])) {
            $this->savecronconfigPlugin($plugin);
        }

        $cronConfigOptions = $this->getcronconfig($plugin);

        $method = array();
        $method[ ] = jomresHTML::makeOption('Minicomponent', 'Minicomponent');
        $method[ ] = jomresHTML::makeOption('Cron', 'Cron job');
        $methodDropdown = jomresHTML::selectList($method, 'method', 'class="inputbox" size="1"', 'value', 'text', $cronConfigOptions[ 'method' ]);

        $displaylogging = array();
        $displaylogging[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
        $displaylogging[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
        $displayloggingDropdown = jomresHTML::selectList($displaylogging, 'displaylogging', 'class="inputbox" size="1"', 'value', 'text', $cronConfigOptions[ 'displaylogging' ]);

        $logging = array();
        $logging[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
        $logging[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
        $loggingDropdown = jomresHTML::selectList($logging, 'logging', 'class="inputbox" size="1"', 'value', 'text', $cronConfigOptions[ 'logging' ]);

        $verbose = array();
        $verbose[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
        $verbose[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
        $verboseDropdown = jomresHTML::selectList($verbose, 'verbose', 'class="inputbox" size="1"', 'value', 'text', $cronConfigOptions[ 'verbose' ]);

        $output = array();

        $output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;
        $output[ '_JOMRES_COM_A_CRON_TITLE' ] = jr_gettext('_JOMRES_COM_A_CRON_TITLE', '_JOMRES_COM_A_CRON_TITLE', false);
        $output[ '_JOMRES_COM_A_CRON_DESC' ] = jr_gettext('_JOMRES_COM_A_CRON_DESC', '_JOMRES_COM_A_CRON_DESC', false);
        $output[ '_JOMRES_COM_A_CURRENT_SETTINGS' ] = jr_gettext('_JOMRES_COM_A_CURRENT_SETTINGS', '_JOMRES_COM_A_CURRENT_SETTINGS', false);
        $output[ '_JOMRES_COM_A_EXPLANATION' ] = jr_gettext('_JOMRES_COM_A_EXPLANATION', '_JOMRES_COM_A_EXPLANATION', false);
        $output[ '_JOMRES_COM_A_CRON_METHOD' ] = jr_gettext('_JOMRES_COM_A_CRON_METHOD', '_JOMRES_COM_A_CRON_METHOD', false);
        $output[ 'METHODDROPDOWN' ] = $methodDropdown;
        $output[ '_JOMRES_COM_A_CRON_METHOD_DESC' ] = jr_gettext('_JOMRES_COM_A_CRON_METHOD_DESC', '_JOMRES_COM_A_CRON_METHOD_DESC', false);
        $output[ '_JOMRES_COM_A_CRON_LOGGING' ] = jr_gettext('_JOMRES_COM_A_CRON_LOGGING', '_JOMRES_COM_A_CRON_LOGGING', false);
        $output[ 'DISPLAYLOGGINGDROPDOWN' ] = $displayloggingDropdown;
        $output[ '_JOMRES_COM_A_CRON_LOGGING_DESC' ] = jr_gettext('_JOMRES_COM_A_CRON_LOGGING_DESC', '_JOMRES_COM_A_CRON_LOGGING_DESC', false);
        $output[ '_JOMRES_COM_A_CRON_LOGGINGENABLED' ] = jr_gettext('_JOMRES_COM_A_CRON_LOGGINGENABLED', '_JOMRES_COM_A_CRON_LOGGINGENABLED', false);
        $output[ 'LOGGINGDROPDOWN' ] = $loggingDropdown;
        $output[ '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC' ] = jr_gettext('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', false);
        $output[ '_JOMRES_COM_A_CRON_VERBOSELOGS' ] = jr_gettext('_JOMRES_COM_A_CRON_VERBOSELOGS', '_JOMRES_COM_A_CRON_VERBOSELOGS', false);
        $output[ 'VERBOSEDROPDOWN' ] = $verboseDropdown;
        $output[ '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC' ] = jr_gettext('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', false);
        $output[ '_JOMRES_COM_A_CRON_IMMEDIATERUN' ] = jr_gettext('_JOMRES_COM_A_CRON_IMMEDIATERUN', '_JOMRES_COM_A_CRON_IMMEDIATERUN', false);

        $rows = array();
        $logs = array();

        jr_import('jomres_cron');
        $cron = new jomres_cron($displayLog = false);
        foreach ($cron->allUnlockedJobs as $job) {
            $r = array();
            $r[ 'JOB' ] = '<a href="'.JOMRES_SITEPAGE_URL_AJAX.'&task=cron_'.$job[ 'job_name' ].'&secret='.$jomresConfig_secret.'" target="_blank" >'.$job[ 'job_name' ].'</a>';
            $rows[ ] = $r;
        }

        $query = 'SELECT log_details FROM #__jomcomp_cronlog ORDER BY id DESC LIMIT 100';
        $logDetails = doSelectSql($query);
        foreach ($logDetails as $log) {
            $l = array();
            $l[ 'LOG' ] = $log->log_details;
            $logs[ ] = $l;
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('cron.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->addRows('logs', $logs);
        $tmpl->displayParsedTemplate();
    }

    public function getcronconfig($plugin)
    {
        $defaultProperty = '0';
        $cronConfigOptions = array();

        $cronConfigOptions[ 'displaylogging' ] = '0';
        $cronConfigOptions[ 'logging' ] = '0';
        $cronConfigOptions[ 'verbose' ] = '0';
        $cronConfigOptions[ 'method' ] = 'Minicomponent';

        $query = "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int) $defaultProperty."' AND plugin = '$plugin'";
        $settingList = doSelectSql($query);

        foreach ($settingList as $s) {
            $cronConfigOptions[ $s->setting ] = $s->value;
        }

        return $cronConfigOptions;
    }

    public function savecronconfigPlugin($plugin)
    {
        $defaultProperty = '0';
        foreach ($_POST as $k => $v) {
            $dirty = (string) $k;
            $k = addslashes($dirty);
            if ($k != 'task' && $k != 'plugin' && $k != 'option') {
                $values[ $k ] = jomresGetParam($_POST, $k, '');
            }
        }
        foreach ($values as $k => $v) {
            $query = "SELECT id FROM #__jomres_pluginsettings WHERE prid = '".(int) $defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
            $settingList = doSelectSql($query);
            if (count($settingList) > 0) {
                foreach ($settingList as $set) {
                    $id = $set->id;
                }
                $query = "UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = '".(int) $defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
                doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', false));
            } else {
                $query = "INSERT INTO #__jomres_pluginsettings
					(`prid`,`plugin`,`setting`,`value`) VALUES
					('" .(int) $defaultProperty."','$plugin','$k','$v')";
                doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_INSERT', '_JOMRES_MR_AUDIT_PLUGINS_INSERT', false));
            }
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
