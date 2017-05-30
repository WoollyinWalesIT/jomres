<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.1
 *
 * @copyright	2005-2017 Vince Wooll
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

//find jomres root path
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

    define('JOMRESPATH_BASE', $dir_path.JRDS);
}

//define jomres paths
define('JOMRESCONFIG_ABSOLUTE_PATH', substr(JOMRESPATH_BASE, 0, strlen(JOMRESPATH_BASE) - strlen(JOMRES_ROOT_DIRECTORY.JRDS)));
define('JOMRES_CSS_RELPATH', JOMRES_ROOT_DIRECTORY.'/css/');
define('JOMRES_CSS_ABSPATH', JOMRESPATH_BASE.'css'.JRDS);
define('JOMRES_JS_ABSPATH', JOMRESPATH_BASE.'javascript'.JRDS);
define('JOMRES_SESSIONS_ABSPATH', JOMRESPATH_BASE.'sessions'.JRDS);
define('JOMRES_TEMP_ABSPATH', JOMRESPATH_BASE.'temp'.JRDS);
define('JOMRES_CACHE_ABSPATH', JOMRESPATH_BASE.'cache'.JRDS);
define('JOMRES_COREPLUGINS_ABSPATH', JOMRESPATH_BASE.'core-plugins'.JRDS);
define('JOMRES_REMOTEPLUGINS_ABSPATH', JOMRESPATH_BASE.'remote_plugins'.JRDS);
define('JOMRES_LIBRARIES_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS);
define('JOMRES_CLASSES_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS);
define('JOMRES_FUNCTIONS_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS);
define('JOMRES_CMSSPECIFIC_ABSPATH', JOMRESPATH_BASE.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS);
define('JOMRES_API_ABSPATH', JOMRESPATH_BASE.'api'.JRDS);

//includes
require_once JOMRESPATH_BASE.'detect_cms.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'database.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'input_filtering.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'functions.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'multibye_functions.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'jr_gettext.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'countries.php';
require_once JOMRES_FUNCTIONS_ABSPATH.'imagehandling.php';
require_once JOMRES_CLASSES_ABSPATH.'jomres_singleton_abstract.class.php';

//include the classes registry file and make $classes a global variable to be easily accessible, so we`ll avoid calling include() more times
global $classes;

if (file_exists(JOMRES_TEMP_ABSPATH.'registry_classes.php')) {
	include_once JOMRES_TEMP_ABSPATH.'registry_classes.php';
} else {
	$classes = search_core_and_remote_dirs_for_classfiles();
}

//includes
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'init_config_vars.php';
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_functions.php';

//json TODO: this can be removed most probably, since all servers should have this by default
if (!function_exists('json_encode')) {
    require_once JOMRES_LIBRARIES_ABSPATH.'json'.JRDS.'JSON.php';

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

//adodb time TODO: most probably can be removed
if (!function_exists('adodb_date_test_date')) {
    require_once JOMRES_LIBRARIES_ABSPATH.'adodb'.JRDS.'adodb-time.inc.php';
}

//patTemplate
if (!class_exists('patTemplate')) {
    require_once JOMRES_LIBRARIES_ABSPATH.'phptools'.JRDS.'patTemplate.php';
}

if (!class_exists('patErrorManager')) {
    require_once JOMRES_LIBRARIES_ABSPATH.'phptools'.JRDS.'patErrorManager.php';
}

//PHPMailer
require_once JOMRES_LIBRARIES_ABSPATH.JRDS.'PHPMailer-5.2.21'.JRDS.'PHPMailerAutoload.php';
PHPMailerAutoload('phpmailer');
PHPMailerAutoload('smtp');

//site config
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

//define jomres logs path
if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
    $jrConfig['log_path'] = JOMRESPATH_BASE.'logs'.JRDS;
}

define('JOMRES_SYSTEMLOG_PATH', fix_path($jrConfig['log_path']));

// We can't use the api's vendor autoloader, it breaks Joomla's autoloader. We have to manually include the files we need instead.
if (!defined('JOMRES_API_CMS_ROOT')) { // The API includes the logger class. As the API doesn't always include the framework ( for performance ) to use the logger within Jomres itself, we'll need to make the distinction here
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'psr'.JRDS.'log'.JRDS.'Psr'.JRDS.'Log'.JRDS.'LoggerInterface.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Logger.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Processor'.JRDS.'WebProcessor.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Formatter'.JRDS.'FormatterInterface.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Formatter'.JRDS.'NormalizerFormatter.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Formatter'.JRDS.'LineFormatter.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'HandlerInterface.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractHandler.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractProcessingHandler.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractSyslogHandler.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'SyslogUdpHandler.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'SyslogHandler.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'SyslogUdp'.JRDS.'UdpSocket.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'AbstractProcessingHandler.php';
    require_once JOMRES_API_ABSPATH.'vendor'.JRDS.'monolog'.JRDS.'monolog'.JRDS.'src'.JRDS.'Monolog'.JRDS.'Handler'.JRDS.'StreamHandler.php';

    require_once JOMRES_API_ABSPATH.'classes'.JRDS.'logging.class.php';
}

//check if this is an ajax call or not
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

//define uploaded images paths
if (!defined('JOMRES_IMAGELOCATION_ABSPATH')) {
    define('JOMRES_IMAGELOCATION_ABSPATH', JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS);
    define('JOMRES_IMAGELOCATION_RELPATH', get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/');
}

//fullscreen view setup
set_showtime('tmplcomponent', 'jomres');
set_showtime('tmplcomponent_source', JOMRES_LIBRARIES_ABSPATH.'fullscreen_view'.JRDS.'jomres.php');

if (!defined('AUTO_UPGRADE')) {
	//copy fullscreen_view/jomres.php to the joomla template dir to help with fullscreen mode
    jomres_cmsspecific_patchJoomlaTemplate();
}

//cms specific urls
require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_urls.php';

//jomres parse request
jomres_parseRequest();

//error reporting
if ($jrConfig[ 'development_production' ] == 'production') {
    set_error_handler('errorHandler');
} else {
    error_reporting(-1);
    ini_set('display_errors', 'On');
}

//modal
if (!isset($_REQUEST['modal_wrap'])) {
    $_REQUEST['modal_wrap'] = 0;
} elseif ($_REQUEST['modal_wrap'] == '1') {
    echo simple_template_output(JOMRES_TEMPLATEPATH_FRONTEND, 'modal_wrap_start.html', urldecode(jomresGetParam($_REQUEST, 'modal_title', '')));
}

//TODO may not be needed
if (!isset($_REQUEST[ 'no_html' ])) {
    $_REQUEST[ 'no_html' ] = 0;
}

//TODO find a better place, maybe jomres.php and framework.php
$jomresHTML = jomres_singleton_abstract::getInstance('jomresHTML');

// Stops here
