<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.21
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// This script is mainly used for bootstrapping Jomres. It's old code, but it checks out.

define('_COMPONENT_JOMRES_INTEGRATIONCALLED', '1');

if (!defined('TRANSACTION_ID')) { // TRANSACTION_ID is used by the logger class to allow us to track single calls through the system
    define('TRANSACTION_ID', time());
}

if (!defined('JOMRES_ROOT_DIRECTORY')) {
    if (file_exists(dirname(__FILE__).'/../jomres_root.php')) {
        require_once dirname(__FILE__).'/../jomres_root.php';
    } else {
        define('JOMRES_ROOT_DIRECTORY', 'jomres');
    }
}

if (!defined('JOMRESPATH_BASE')) {
    if (!defined('JRDS')) {
        $apacheSig = false;

        $detect_os = strtoupper($_SERVER[ 'SERVER_SOFTWARE' ]); // converted to uppercase
        $isWin32 = strpos($detect_os, 'WIN32');
        $IIS = strpos($detect_os, 'IIS');

        if (isset($_SERVER[ 'SERVER_SIGNATURE' ])) {
            $signature = strtoupper($_SERVER[ 'SERVER_SIGNATURE' ]);
            $apacheSig = strpos($signature, 'APACHE');
        }

        $dir = dirname(realpath(__FILE__));

        if (strpos($dir, ':\\')) {
            define('JRDS', '\\');
        } else {
            if ($isWin32 === false || $apacheSig == true) {
                define('JRDS', '/');
            } else {
                define('JRDS', '\\');
            }
        }
    }

    if (isset($_SERVER[ 'SCRIPT_FILENAME' ])) {
        $dir_path = str_replace($_SERVER[ 'SCRIPT_FILENAME' ], '', dirname(realpath(__FILE__)));
    } else {
        $dir_path = str_replace($_SERVER[ 'SCRIPT_NAME' ], '', dirname(realpath(__FILE__)));
    }

    define('JOMRESPATH_BASE', $dir_path);
}

define('JOMRESCONFIG_ABSOLUTE_PATH', substr(JOMRESPATH_BASE, 0, strlen(JOMRESPATH_BASE) - strlen(JOMRES_ROOT_DIRECTORY)));
define('JOMRES_CSSRELPATH', JOMRES_ROOT_DIRECTORY.'/css/');
define('JOMRES_SESSION_ABSPATH', JOMRESPATH_BASE.JRDS.'sessions'.JRDS);

require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'database.php';
require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'input_filtering.php';
require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'functions.php';
require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'multibye_functions.php';
require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'jr_gettext.php';
require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomres_singleton_abstract.class.php';

if (!class_exists('Mobile_Detect')) {
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'MobileDetect'.JRDS.'Mobile_Detect.php';
}

$detect = new Mobile_Detect();
set_showtime('device_type', ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'desktop'));

//this can be removed most probably, since all servers should have this by default
if (!function_exists('json_encode')) {
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'json'.JRDS.'JSON.php';

    function json_encode($arg)
    {
        global $services_json;
        if (!isset($services_json)) {
            $services_json = new Services_JSON();
        }

        return $services_json->encode($arg);
    }

    function json_decode($arg)
    {
        global $services_json;
        if (!isset($services_json)) {
            $services_json = new Services_JSON();
        }

        return $services_json->decode($arg);
    }
}

jr_import('jomresHTML');

$showtime = jomres_singleton_abstract::getInstance('showtime');

$performance_monitor = jomres_singleton_abstract::getInstance('jomres_performance_monitor');
$performance_monitor->set_point('pre-inclusions');

require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'site_config.php';
require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'detect_cms.php';
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'init_config_vars.php';
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_functions.php';

if (!function_exists('adodb_date_test_date')) {
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'adodb'.JRDS.'adodb-time.inc.php';
}

if (!class_exists('patTemplate')) {
    require_once 'libraries'.JRDS.'phptools'.JRDS.'patTemplate.php';
}

if (!class_exists('patErrorManager')) {
    require_once 'libraries'.JRDS.'phptools'.JRDS.'patErrorManager.php';
}

require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'PHPMailer-v5.2.19'.JRDS.'PHPMailerAutoload.php';
PHPMailerAutoload('phpmailer');
PHPMailerAutoload('smtp');

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php')) {
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php';
} else {
    if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.'countries.php')) {
        require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.'countries.php';
    } else {
        require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'countries.php';
    }
}

require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'imagehandling.php';

$performance_monitor->set_point('post-inclusions');

$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
    $jrConfig['log_path'] = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'logs'.JRDS;
}

define('JOMRES_SYSTEMLOG_PATH', fix_path($jrConfig['log_path']));

// We can't use the api's vendor autoloader, it breaks Joomla's autoloader. We have to manually include the files we need instead.
if (!defined('JOMRES_API_CMS_ROOT')) { // The API includes the logger class. As the API doesn't always include the framework ( for performance ) to use the logger within Jomres itself, we'll need to make the distinction here
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'psr'.JRDS.'log'.JRDS.'Psr'.JRDS.'Log'.JRDS.'LoggerInterface.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Logger.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Processor'.JRDS.'WebProcessor.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Formatter'.JRDS.'FormatterInterface.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Formatter'.JRDS.'NormalizerFormatter.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Formatter'.JRDS.'LineFormatter.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'HandlerInterface.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractHandler.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractProcessingHandler.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractSyslogHandler.php';

    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'SyslogUdpHandler.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'SyslogHandler.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'SyslogUdp'.JRDS.'UdpSocket.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractProcessingHandler.php';
    require_once JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'StreamHandler.php';

    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'api'.JRDS.'classes'.JRDS.'logging.class.php';
}

if (!defined('AJAXCALL')) {
    if (isset($_REQUEST[ 'jrajax' ])) {
        if ((int) $_REQUEST[ 'jrajax' ] == 1) {
            define('AJAXCALL', true);
        } else {
            define('AJAXCALL', false);
        }
    } else {
        define('AJAXCALL', false);
    }
}

// set language to en-GB by default
if (get_showtime('lang') && get_showtime('lang') == '') {
    set_showtime('lang', 'en-GB');
}

if (!defined('JOMRES_IMAGELOCATION_ABSPATH')) {
    define('JOMRES_IMAGELOCATION_ABSPATH', JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS);
    define('JOMRES_IMAGELOCATION_RELPATH', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/');
}

//fullscreen view setup
set_showtime('tmplcomponent', 'jomres');
set_showtime('tmplcomponent_source', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'fullscreen_view'.JRDS.'jomres.php');

if (!defined('AUTO_UPGRADE')) {
    jomres_cmsspecific_patchJoomlaTemplate();
} //copy the management_view.php renamed to jomres.php to the joomla template dir to help with fullscreen mode

require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_urls.php';

//minicomponents triggering starts here
if (!defined('AUTO_UPGRADE')) {
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $MiniComponents->triggerEvent('00001'); // Start
}

$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

jomres_parseRequest();

if ($jrConfig[ 'development_production' ] == 'production') {
    set_error_handler('errorHandler');
} else {
    error_reporting(-1);
    ini_set('display_errors', 'On');
}

if (!defined('AUTO_UPGRADE')) {
    $jomres_geolocation = jomres_singleton_abstract::getInstance('jomres_geolocation');
    $jomres_geolocation->auto_set_user_currency_code();
}

$performance_monitor->set_point('end integration run');

if (!isset($_REQUEST['modal_wrap'])) {
    $_REQUEST['modal_wrap'] = 0;
} elseif ($_REQUEST['modal_wrap'] == '1') {
    echo simple_template_output(JOMRES_TEMPLATEPATH_FRONTEND, 'modal_wrap_start.html', urldecode(jomresGetParam($_REQUEST, 'modal_title', '')));
}

//TODO may not be needed
if (!isset($_REQUEST[ 'no_html' ])) {
    $_REQUEST[ 'no_html' ] = 0;
}

//TODO may not be needed
if (!isset($_REQUEST['task'])) {
    $_REQUEST['task'] = '';
}

// Stops here
