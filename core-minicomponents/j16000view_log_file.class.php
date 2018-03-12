<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-bob
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000view_log_file
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $filename = (string) jomresGetParam($_REQUEST, 'filename', '');
        $session = (string) jomresGetParam($_REQUEST, 'session', '');

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
            $jrConfig['log_path'] = dirname(__FILE__).'/../logs/';
        }

        $jrConfig['log_path'] = fix_path($jrConfig['log_path']);

        if (is_file($jrConfig['log_path'].$filename)) {
            $bang = explode('.', $filename);
            if (isset($bang[1]) && $bang[1] == 'html') {
                echo nl2br(file_get_contents($jrConfig['log_path'].$filename));
            } else {
                $output = array();
                $pageoutput = array();
                $rows = array();

                $output['PAGETITLE'] = 'Log channel';

                $raw_contents = file_get_contents($jrConfig['log_path'].$filename);

                $records = explode(':::::', $raw_contents);
                foreach ($records as $record) {
                    $content_array = explode('~~', $record);
                    if (isset($content_array[7])) {
                        $r = array();

                        $bang = explode('.', $content_array[1]);
                        if (!isset($bang[1])) {
                            $bang[1] = '';
                        }

                        switch ($bang[1]) {
                            case 'WARNING: ':
                                $r['ROWCLASS'] = 'warning';
                                break;
                            case 'ERROR: ':
                            case 'CRITICAL: ':
                            case 'ALERT: ':
                            case 'EMERGENCY: ':
                                $r['ROWCLASS'] = 'error';
                                break;
                            case 'INFO: ':
                            case 'NOTICE: ':
                                $r['ROWCLASS'] = 'info';
                                break;
                            default:
                                $r['ROWCLASS'] = '';
                                break;
                            }

                        $r['DATETIME'] = $content_array[0];
                        $r['CHANNEL'] = $content_array[1];
                        $r['USERNAME'] = $content_array[2];
                        $r['SESSION'] = $content_array[4];
                        $r['URL'] = $content_array[5];
                        $r['MESSAGE'] = jomres_purify_html($content_array[3]);
                        $r['CONTEXT'] = $content_array[6];
                        $r['EXTRA'] = $content_array[7];
                        if ($session != '' && $r['SESSION'] == $session) {
                            $rows[] = $r;
                        } elseif ($session == '') {
                            $rows[] = $r;
                        }
                    }
                }

                $pageoutput[ ] = $output;
                $tmpl = new patTemplate();
                $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
                $tmpl->readTemplatesFromInput('view_log_channel.html');
                $tmpl->addRows('pageoutput', $pageoutput);
                $tmpl->addRows('rows', $rows);
                $tmpl->displayParsedTemplate();
            }
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
