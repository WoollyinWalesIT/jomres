<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * Find the relative path to a QR code
 */
function get_qr_code_relPath($arg) 
{
	$result = jomres_make_qr_code ($arg);
	return $result['relative_path'];
}

/**
 * An easy way to quickly retrieve a singleton
 */
function jomres_getSingleton($class, $args = array())
{
    return jomres_singleton_abstract::getInstance($class, $args);
}

/*
A function that makes an async POST or GET request using sockets
*/

function jomres_async_request($type = "GET", $url = "", $port = '', $post_data = array())
{
	$post_string = "";
	
	//check if url is empty
	if ($url == "") {
		return false;
	}
	
	//if this is a POST, then we must have some post data in the array
	if ($type == "POST" && empty($post_data)) {
		return false;
	}
	
	//generate the post string
	if (!empty($post_data)) {
		$post_string = http_build_query($post_data);
	}
	
	//set the port depending on http/https if no specific value is passed
	if ((int)$port == 0) {
		if (strpos($url, 'https://') !== false) {
			$port = 443;
		} else {
			$port = 80;
		}
	} else {
		$port = (int)$port;
	}
	
	$parts = parse_url($url);
	
	//get the functions disabled in php.ini
	$disabled_functions = explode(',', @ini_get('disable_functions'));

	if (function_exists('fsockopen') && !in_array('fsockopen', $disabled_functions)) { //we`ll use an async socket
		logging::log_message('Starting socket to '.$url, 'Socket', 'DEBUG');
        $logging_time_start = microtime(true);
	
		$fp = fsockopen($parts['host'], $port, $errno, $errstr, 5);
		
		if (!$fp) {
			logging::log_message('Unable to open socket to '.$url, 'Socket', 'DEBUG');
			return false;
		}
		
		stream_set_timeout($fp, 1);
		stream_set_blocking($fp, false);
		
		$out = $type." ".$parts['path'].'?'.$parts['query']." HTTP/1.1\r\n";
		$out.= "Host: ".$parts['host']."\r\n";
		$out .= "User-Agent: Jomres\r\n";
		$out.= "Content-Type: application/x-www-form-urlencoded\r\n";
		$out.= "Content-Length: ".strlen($post_string)."\r\n";
		$out.= "Connection: Close\r\n\r\n";
		if ($type == "POST" && $post_string != "") {
			$out.= $post_string;
		}

		fwrite($fp, $out);
		fclose($fp);
		
		$logging_time_end = microtime(true);
		$logging_time = $logging_time_end - $logging_time_start;
		logging::log_message('Socket call took '.$logging_time.' seconds ', 'Socket', 'DEBUG');
		
		return true;
	} elseif (function_exists('curl_init')) { //we`ll use curl if enabled
		//we`ll use a custom GET here so that domains with non latin chars will be handled properly
		if ($type == "GET") {
			$type = "XGET";
		}
		
		logging::log_message('Starting curl call to '.$url, 'Curl', 'DEBUG');
        $logging_time_start = microtime(true);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Jomres');
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_PORT, $port);
		curl_setopt($ch, CURLOPT_TIMEOUT, 480);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=utf-8'));
		
		if ($type == "POST") {
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
		}
		$curl_output = curl_exec($ch);
		curl_close($ch);
		
		$logging_time_end = microtime(true);
		$logging_time = $logging_time_end - $logging_time_start;
		logging::log_message('Curl call took '.$logging_time.' seconds ', 'Curl', 'DEBUG');
		
		return true;
	} else {
		return false;
	}
	
	return false;
}

/*
A simple function to get the marker relative path
*/

function get_marker_src($marker_image = '') 
{
	if ($marker_image == '')
		return '';
	
	if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.$marker_image)) {
		$result = JOMRES_IMAGELOCATION_RELPATH.'markers/'.$marker_image;
	} elseif (file_exists(JOMRES_IMAGES_ABSPATH.'markers'.JRDS.'free-map-marker-icon-blue.png')) {
		$result = JOMRES_IMAGES_RELPATH.'markers/free-map-marker-icon-blue.png';
	} else {
		$result = '';
	}
	
	return $result;
}
	
/*
A simple function to pull the contract uid based on the booking number
*/

function get_contract_uid_for_tag($tag) 
{
    $tag = trim(filter_var($tag, FILTER_SANITIZE_SPECIAL_CHARS));
    $query="SELECT `contract_uid` FROM #__jomres_contracts WHERE `tag`= '".$tag."'";
	$contract_uid = doSelectSql($query , 1 );
    return $contract_uid;
}
    
/*
This function allows a script writer to add webhook notifications dynamically. 
If the collection script variable is set, then the none/basic/oauth authmethod processors will use a collection script that goes by the name of collector_$collection_script_name.php , e.g. collector_dashboard.php
Otherwise the processor will attempt to use the contents of the object's $data variable instead.
*/

function add_webhook_notification($contents)
{
    $webhook_messages = get_showtime('webhook_messages');
    $webhook_messages[] = $contents;
    set_showtime('webhook_messages', $webhook_messages);
    logging::log_message('Webhook notification set '.$contents->webhook_event, 'Core', 'DEBUG' , serialize($contents) );
}

 /**
 * Implodes arrays for use with queries where IN is used
 *
 * For performance reasons IN is used extensively, this function is used when building queries based off of arrays 
 *
 */
function jomres_implode($elements = array(), $integers = true)
{
    $txt = '';
    $i = 1;
    $count = count($elements);

    if ($count == 0) {
        return "''";
    }

    foreach ($elements as $element) {
        if ($integers) {
            $txt .= (int) $element;
        } else {
            $txt .= "'".$element."'";
        }

        if ($i < $count) {
            $txt .= ',';
        }

        ++$i;
    }

    return $txt;
}

/**
 * A quick function to trim path names
 */
function fix_path($path = '')
{
    $path = rtrim($path, '/');
    $path = rtrim($path, '\\');
    $path = $path.'/';

    return $path;
}


/**
 * A function to obsfucate email addresses in content to defend against spammers.
 *
 * http://www.maurits.vdschee.nl/php_hide_email/
 *
 */
function jomres_hide_email($email)
{
    $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
    $key = str_shuffle($character_set);
    $cipher_text = '';
    $id = 'e'.rand(1, 999999999);
    for ($i = 0; $i < strlen($email); $i += 1) {
        $cipher_text .= $key[strpos($character_set, $email[$i])];
    }
    $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';
    $script .= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
    $script .= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';
    $script = 'eval("'.str_replace(array('\\', '"'), array('\\\\', '\"'), $script).'")';
    $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';

    return '<span id="'.$id.'">[javascript protected email address]</span>'.$script;
}

 /**
 * Checks that the user can view the property
 *
 * Used extensively by j06000show_propertyxxxxx scripts. If the user is a super manager then they can view the property regardless of it's state. Otherwise, if it is not published and the user is not a manager, return false. If it is not published and the user does not have this property in their list of authorised properties ( i.e. a manager viewing another manager's property ) return false.
 *
 */
function user_can_view_this_property($property_uid = 0)
{
    if ($property_uid == 0) {
        return false;
    }

    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
    $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
    $current_property_details->gather_data($property_uid);

    if ($thisJRUser->superPropertyManager) {
        return true;
    } else {
        if ($current_property_details->published == 0 && (!$thisJRUser->userIsManager || ($thisJRUser->userIsManager && !in_array($property_uid, $thisJRUser->authorisedProperties)))) {
            return false;
        }
    }

    return true;
}

/**
 * Check that this user can modify a booking
 */
function can_modify_this_booking($contract_uid)
{
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

    if (!$thisJRUser->userIsManager) {
        throw new Exception('Non-manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid);
    }

    $query = 'SELECT `property_uid` FROM #__jomres_contracts WHERE `contract_uid` = '.(int) $contract_uid.' LIMIT 1';
    $contract_property_uid = doSelectSql($query, 1);

    if ((int) $contract_property_uid == 0) {
        throw new Exception('Manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid.'. This contract uid does not exist.');
    }

    if (in_array($contract_property_uid, $thisJRUser->authorisedProperties)) {
        return true;
    } else {
        throw new Exception('Manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid.'. Manager is not authorised to modify this contract.');
    }

    throw new Exception('Manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid.'. Could not confirm that the manager was authorised to modify the booking.');
}

/**
 * Newer function for finding dates - dates must be passed in Y/m/d format
 */
function get_periods($start, $end, $interval = null)
{
    $start = new DateTime($start);
    $end = new DateTime($end);
    if (is_null($interval)) {
        $interval = new DateInterval('P1D');
    }

    $period = new DatePeriod($start, $interval, $end);
    $dates = array();
    foreach ($period as $date) {
        $d = $date->format('Y/m/d');
        $dates[ ] = $d;
    }

    return $dates;
}

/**
 * Function to get the client IP address
 */
function jomres_get_client_ip()
{
    $ipaddress = '';

    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    if ($ipaddress == '::1') {
        $ipaddress = '127.0.0.1';
    }

    return filter_var($ipaddress, FILTER_SANITIZE_STRING);
}

 /**
 * Outputs that an error has been thrown
 *
 * Primarily a frontend function. Logs and outputs an error message. If the site is set to Development mode then the full error details are sent to the page, otherwise if site is set to Production a generic Oops message is output. If Site is configured to, the error can be emailed to site administrators. The error is logged to Application.log as an Error.
 *
 */
function output_fatal_error($e , $extra_info = '' )
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $cms_files_we_are_not_interested_in = jomres_cmsspecific_error_logging_cms_files_to_not_backtrace();
    $rows = array();
    $backtrace = debug_backtrace();

    foreach ($backtrace as $trace) {
		$r = array();
		
		if (isset($trace[ 'file' ]) && !isset($trace[ 'line' ])) {
			$file = $trace[ 'file' ];
			$bang = explode(JRDS, $file);
			$filename = $bang[ count($bang) - 1 ];
			if ($filename != 'patTemplate.php' && $filename != 'index.php' && !in_array($filename, $cms_files_we_are_not_interested_in)) {
				$r['FILES'] = ' '.$filename.' on line '.$trace['line'].'<br/>';
				$rows[] = $r;
			}
		}
    }

    $link = getCurrentUrl();
    //$link =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $cleaned_link = jomres_sanitise_string($link);

    if (is_object($e)) {
    $output = array(
        'URL' => $cleaned_link,
        'MESSAGE' => $e->getMessage(),
		'EXTRA_INFO' => $extra_info,
        'FILE' => $e->getFile(),
        'LINE' => $e->getLine(),
        'TRACE' => $e->getTraceAsString(),
        '_JOMRES_ERROR_DEBUGGING_MESSAGE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_MESSAGE', '_JOMRES_ERROR_DEBUGGING_MESSAGE', false),
        '_JOMRES_ERROR_DEBUGGING_FILE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_FILE', '_JOMRES_ERROR_DEBUGGING_FILE', false),
        '_JOMRES_ERROR_DEBUGGING_LINE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_LINE', '_JOMRES_ERROR_DEBUGGING_LINE', false),
        '_JOMRES_ERROR_DEBUGGING_TRACE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_TRACE', '_JOMRES_ERROR_DEBUGGING_TRACE', false),
         );
    }
    else {
        $output = array('MESSAGE' => $e);
    }

    $output['IP_NUMBER'] = jomres_get_client_ip();

    $output['DATETIME'] = date('Y-m-d H:i:s');

    $pageoutput[] = $output;
    $tmpl = new patTemplate();
    $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
    $tmpl->readTemplatesFromInput('error_developer.html');
    $tmpl->addRows('rows', $rows);
    $tmpl->addRows('pageoutput', $pageoutput);
    $error_html = $tmpl->getParsedTemplate();

    if (!is_dir(JOMRES_SYSTEMLOG_PATH)) {
        mkdir(JOMRES_SYSTEMLOG_PATH);
    }

    $filename = generateJomresRandomString(30).'.html';

    file_put_contents(JOMRES_SYSTEMLOG_PATH.$filename, $error_html);

    if ($jrConfig['development_production'] == 'development') {
        echo $error_html;
    } else {
        $pageoutput = array(array('_JOMRES_ERROR' => jr_gettext('_JOMRES_ERROR', '_JOMRES_ERROR', false), '_JOMRES_ERROR_MESSAGE' => jr_gettext('_JOMRES_ERROR_MESSAGE', '_JOMRES_ERROR_MESSAGE', false)));
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
        $tmpl->readTemplatesFromInput('error_production.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        echo $tmpl->getParsedTemplate();
    }

    $url = '<a href = "'.JOMRES_SITEPAGE_URL_NOSEF.'&task=show_logfile&logfile='.$filename.'"> Logfile </a>'.
    $error_html
    ;

    if ($jrConfig[ 'sendErrorEmails' ] == '1') {
        sendAdminEmail('Error logged '.$output['MESSAGE'], $url);
    }

    logging::log_message('Error logged '.$output['MESSAGE'].' '.$url, 'Core', 'ERROR');
}

/**
 * What is the current page url?
 */
function getCurrentUrl($full = true)
{
    if (isset($_SERVER['REQUEST_URI'])) {
        $parse = parse_url(
            (isset($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'off') ? 'https://' : 'http://').
            (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '')).(($full) ? $_SERVER['REQUEST_URI'] : null)
        );
        $parse['port'] = $_SERVER['SERVER_PORT']; // Setup protocol for sure (80 is default)
        return http_build_url('', $parse);
    }
}

/**
 * Return true if the host CMS is Wordpress
 */
function this_cms_is_wordpress()
{
    if (_JOMRES_DETECTED_CMS != 'wordpress') {
        return false;
    }

    return true;
}


// 
// 
// 
// 

 /**
 * A utility to create a modal button that links to a Jomres task.
 *
 * text of the button.
 * task. The task of the called page.
 * Extra. Any arguements to be added to the url.
 * Title. What the title of the modal will be set to.
 *
 */
function make_modal_button($text, $task, $extra, $title, $button_colour = 'btn-default')
{
    $pageoutput = array();

    $pageoutput[0][ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);
    $pageoutput[0][ 'TEXT' ] = $text;
    $pageoutput[0][ 'TASK' ] = $task;
    $pageoutput[0][ 'EXTRA' ] = $extra;
    $pageoutput[0][ 'MODAL_TITLE' ] = urlencode($title);
    $pageoutput[0][ 'BUTTON_COLOUR' ] = $button_colour;

    $tmpl = new patTemplate();
    $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
    $tmpl->readTemplatesFromInput('modal_button.html');
    $tmpl->addRows('pageoutput', $pageoutput);

    return $tmpl->getParsedTemplate();
}

// 


 /**
 * A quick way to ouput data that's stored in a Jomres template but doesn't require any conditions or rows.
 *
 * Due to the way Bootstrap 3 demands that returned data be wrapped in <div class="modal-content"> <div class="modal-header"> </div></div> we need to create new output that wraps the content we wish to return. As we may want to add modal popups to other pages in the future we needed to add a new request variable "modal_wrap" which then allows us to wrap the resulting output in these divs. As we don't want to change the code every time a new modal syntax appears it's preferable to add this modal wrap via a template file. The template file itself doesn't demand any special conditions, so we've created this quick template output function to allow us to quickly access a template file that contains some simple html.
 * One string allows us to pass just one variable to the template for inclusion in output (in case, for example, the modal needs a title)
 *
 */
function simple_template_output($path = '', $template = '', $one_string = '')
{
    $pageoutput = array(array('TITLE' => $one_string));
    $tmpl = new patTemplate();
    $tmpl->setRoot($path);
    $tmpl->readTemplatesFromInput($template);
    $tmpl->addRows('pageoutput', $pageoutput);

    return $tmpl->getParsedTemplate();
}

/**
 * Generates colours for the property review rating bars
 */
function calc_rating_progressbar_colour($percentage)
{
    if ($percentage >= 60) {
        $colour = 'progress-bar-success';
    }
    if ($percentage < 60 && $percentage >= 50) {
        $colour = 'progress-bar-info';
    }
    if ($percentage < 50 && $percentage >= 30) {
        $colour = 'progress-bar-warning';
    }
    if ($percentage < 30) {
        $colour = 'progress-bar-danger';
    }

    return $colour;
}

/**
 * Determine the version of Bootstrap framework that is being used
 */
function jomres_bootstrap_version()
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();
    if (!isset($jrConfig[ 'bootstrap_version' ])) {
        $jrConfig[ 'bootstrap_version' ] = '';
    }

    if ($jrConfig[ 'bootstrap_version' ] == '') {
        $bootstrap_version = '2';
    } else { // Leaves us room to manouver in the future when newer versions are created
        $bootstrap_version = $jrConfig[ 'bootstrap_version' ];
    }

    return $bootstrap_version;
}

 /**
 * For plugins to find the correct sub-directory for the template based on site settings
 *
 * todo Add support for Bootstrap 4 in administrator area
 */
 
function find_plugin_template_directory()
{
    $template_dir = 'jquery_ui';

    if (jomres_cmsspecific_areweinadminarea()) {
        $template_dir = 'bootstrap';
    } elseif (using_bootstrap()) {
        $template_dir = 'bootstrap';
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        if (!isset($jrConfig[ 'bootstrap_version' ])) {
            $jrConfig[ 'bootstrap_version' ] = '';
        }

        if ($jrConfig[ 'bootstrap_version' ] != '') {
            $template_dir = $template_dir.jomres_bootstrap_version();
        }
    }

    return $template_dir;
}

/**
 * Return an array of dates 
 *
 * Receives two dates Y/m/d and returns all dates between in Y/m/d formate
 *
 */
function findDateRangeForDates($d1, $d2)
{
    $days = (int) findDaysForDates($d1, $d2);
    $dateRangeArray = array();
    $currentDay = $d1;
    $date_elements = explode('/', $currentDay);
    $unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
    for ($i = 0, $n = $days; $i <= $n; ++$i) {
        $currentDay = date('Y/m/d', $unixCurrentDate);
        $dateRangeArray[ ] = $currentDay;
        $date_elements = explode('/', $currentDay);
        $unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ]);
    }

    return $dateRangeArray;
}

/**
 * Get the number of days between two dates (Y/m/d)
 */
function findDaysForDates($d1, $d2)
{
    $diff = dateDiff('d', $d1, $d2);

    return $diff;
}

/**
 * Import images from the uploadedimages directory into the database
 */
function import_images_to_media_centre_directories()
{
    // We are going to move any property images, slideshow images and room images into the new media centre's resource directories.
    $query = 'SELECT propertys_uid,published FROM #__jomres_propertys';
    $properties = doSelectSql($query);
    $all_propertys = array();
    foreach ($properties as $p) {
        $all_propertys[ ] = $p->propertys_uid;
    }

    $resource_types = array();
    $resource_types[] = array('resource_type' => 'rooms', 'resource_id_required' => true, 'name' => jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', false));
    $resource_types[] = array('resource_type' => 'slideshow', 'resource_id_required' => false, 'name' => jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', false));
    $resource_types[] = array('resource_type' => 'property', 'resource_id_required' => false, 'name' => jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', false), 'notes' => jr_gettext('_JOMRES_MEDIA_CENTRE_NOTES_CORE', '_JOMRES_MEDIA_CENTRE_NOTES_CORE', false));

    if (!empty($resource_types) && !empty($all_propertys)) {
        foreach ($all_propertys as $property_id) {
            $base_path = JOMRES_IMAGELOCATION_ABSPATH.$property_id.JRDS;

            if (!is_dir($base_path)) {
                mkdir($base_path);
            }

            if (is_dir($base_path.'joomla')) {
                emptyDir($base_path.'joomla');
                rmdir($base_path.'joomla');
            }

            $all_types = array();
            foreach ($resource_types as $type) {
                if (!is_dir($base_path.$type['resource_type'])) {
                    mkdir($base_path.$type['resource_type']);
                }
            }

            if (!is_dir($base_path.'property'.JRDS.'0')) {
                mkdir($base_path.'property'.JRDS.'0');
            }
            if (!is_dir($base_path.'property'.JRDS.'0'.JRDS.'thumbnail')) {
                mkdir($base_path.'property'.JRDS.'0'.JRDS.'thumbnail');
            }
            if (!is_dir($base_path.'property'.JRDS.'0'.JRDS.'medium')) {
                mkdir($base_path.'property'.JRDS.'0'.JRDS.'medium');
            }

            // Let's start with the property image
            if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'.jpg')) {
                rename(
                    JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'.jpg',
                    $base_path.'property'.JRDS.'0'.JRDS.$property_id.'_property_'.$property_id.'.jpg'
                    );
            }
            if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail.jpg')) {
                rename(
                    JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail.jpg',
                    $base_path.'property'.JRDS.'0'.JRDS.'thumbnail'.JRDS.$property_id.'_property_'.$property_id.'.jpg'
                    );
            }
            if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail_med.jpg')) {
                rename(
                    JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail_med.jpg',
                    $base_path.'property'.JRDS.JRDS.'0'.JRDS.'medium'.JRDS.$property_id.'_property_'.$property_id.'.jpg'
                    );
            }

            // Now any slideshow images
            $slideshow_images = scandir_getfiles($base_path);

            if (!empty($slideshow_images)) {
                if (!is_dir($base_path.'slideshow'.JRDS.'0')) {
                    mkdir($base_path.'slideshow'.JRDS.'0');
                }
                if (!is_dir($base_path.'slideshow'.JRDS.'0'.JRDS.'thumbnail')) {
                    mkdir($base_path.'slideshow'.JRDS.'0'.JRDS.'thumbnail');
                }
                if (!is_dir($base_path.'slideshow'.JRDS.'0'.JRDS.'medium')) {
                    mkdir($base_path.'slideshow'.JRDS.'0'.JRDS.'medium');
                }

                foreach ($slideshow_images as $image) {
                    // The slideshow image files directly under /N/ have the pattern filename/filename_thumbnail/filename_thumbnail_med, so we need to find the main file, then move it's medium/thumbnails over afterwards
                    if (!strstr('_thumbnail', $image)) {
                        $image_name_array = explode('.', $image);
                        unset($image_name_array[count($image_name_array) - 1]);
                        $image_name = implode($image_name_array);

                        rename(
                            $base_path.$image_name.'.jpg',
                            $base_path.'slideshow'.JRDS.'0'.JRDS.$image_name.'.jpg'
                            );
                        rename(
                            $base_path.$image_name.'_thumbnail.jpg',
                            $base_path.'slideshow'.JRDS.'0'.JRDS.'thumbnail'.JRDS.$image_name.'.jpg'
                            );
                        rename(
                            $base_path.$image_name.'_thumbnail_med.jpg',
                            $base_path.'slideshow'.JRDS.'0'.JRDS.'medium'.JRDS.$image_name.'.jpg'
                            );
                    }
                }
            }

            // Finally we'll look for room images
            $room_images = scandir_getfiles(JOMRES_IMAGELOCATION_ABSPATH);
            if (!empty($room_images)) {
                $pattern = $property_id.'_room';
                foreach ($room_images as $image) {
                    $pos1 = strpos($image, '_thumbnail');
                    if ($pos1 === false) {
                        $pos2 = strpos($image, $pattern);
                        if ($pos2 === 0) {
                            $image_name_array = explode('.', $image);
                            unset($image_name_array[count($image_name_array) - 1]);
                            $image_name = implode($image_name_array);
                            $bang = explode('_', $image_name);
                            $resource_id = $bang[2];

                            if (!is_dir($base_path.'rooms'.JRDS.$resource_id)) {
                                mkdir($base_path.'rooms'.JRDS.$resource_id);
                            }
                            if (!is_dir($base_path.'rooms'.JRDS.$resource_id.JRDS.'thumbnail')) {
                                mkdir($base_path.'rooms'.JRDS.$resource_id.JRDS.'thumbnail');
                            }
                            if (!is_dir($base_path.'rooms'.JRDS.$resource_id.JRDS.'medium')) {
                                mkdir($base_path.'rooms'.JRDS.$resource_id.JRDS.'medium');
                            }

                            rename(
                                JOMRES_IMAGELOCATION_ABSPATH.$image_name.'.jpg',
                                $base_path.'rooms'.JRDS.$resource_id.JRDS.$image_name.'.jpg'
                                );
                            rename(
                                JOMRES_IMAGELOCATION_ABSPATH.$image_name.'_thumbnail.jpg',
                                $base_path.'rooms'.JRDS.$resource_id.JRDS.'thumbnail'.JRDS.$image_name.'.jpg'
                                );
                            rename(
                                JOMRES_IMAGELOCATION_ABSPATH.$image_name.'_thumbnail_med.jpg',
                                $base_path.'rooms'.JRDS.$resource_id.JRDS.'medium'.JRDS.$image_name.'.jpg'
                                );
                        }
                    }
                }
            }
        }
    }
}

/**
 * Output size with B,KB,MB,GB,TB suffixes
 */
function jomres_formatBytes($bytes, $precision = 2)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    return round($bytes, $precision).' '.$units[$pow];
}

/**
 * Debugging tool to find scripts that were called when an error was triggered. 
 */
function echo_backtrace()
{
    $trace = debug_backtrace();
    foreach ($trace as $t) {
        $file_arr = explode(JRDS, $t[ 'file' ]);
        $file = $file_arr[ count($file_arr) - 1 ];
        if ($file == 'helper.php') {
            break;
        }
        $line = $t[ 'line' ];
        echo 'Line : '.$line.' for file '.$file.' </br>';
    }
}

/**
 * Create a url for a property's address that will be marked in google maps
 */
function make_gmap_url_for_property_uid($property_uid)
{
    if ($property_uid < 1) {
        return false;
    }
    $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
    $current_property_details->gather_data($property_uid);

    $dest_address = $current_property_details->property_name.','.$current_property_details->property_street.','.$current_property_details->property_town.','.$current_property_details->property_region.','.$current_property_details->property_country.','.$current_property_details->property_postcode;

    return 'https://maps.google.com/maps?daddr='.$dest_address;
}

/**
 * Uses the QR code library to create qr codes in the temp directory and returns relative, and absolute paths
 */
function jomres_make_qr_code($string = '', $format = 'text')
{
    $dir = JOMRES_TEMP_ABSPATH.'qr_codes';
    test_and_make_directory($dir);

    if ($string == '') {
        return false;
    }

    $filename = md5($string);
    if (!file_exists($dir.JRDS.'qr_code_'.$filename.'.png')) {
        \PHPQRCode\QRcode::png($string, $dir.JRDS.'qr_code_'.$filename.'.png', 'L', 4, 2);
    }

    return array('relative_path' => get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/temp/qr_codes/'.'qr_code_'.$filename.'.png', 'absolute_path' => $dir.JRDS.'qr_code_'.$filename.'.png');
}

/**
 * Used by ajax search for searching for town names
 */
function genericLike($idArray, $fieldToSearch, $idArrayisInteger = true)
{
    $newArr = array();
    foreach ($idArray as $id) {
        $newArr[ ] = $id;
    }
    $idArray = $newArr;
	$n = count($idArray);
    $txt = ' ( `'.$fieldToSearch.'` LIKE ';
    for ($i = 0; $i < $n; ++$i) {
        if ($idArrayisInteger) {
            $id = (int) $idArray[ $i ];
        } else {
            $id = $idArray[ $i ];
        }
        $txt .= " '%$id%' ";
        if ($i < $n - 1) {
            $txt .= ' OR `'.$fieldToSearch.'` LIKE ';
        }
    }
    $txt .= ' ) ';

    return $txt;
}

/**
 * Calculates number to be added to badges in the administrator menu
 */
function get_number_of_items_requiring_attention_for_menu_option($task = '')
{
	if ($task == '') {
		return array();
	}

    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    
	if (jomres_cmsspecific_areweinadminarea()) {
        if ($MiniComponents->eventSpecificlyExistsCheck('07020', $task)) {
            return $MiniComponents->specificEvent('07020', $task);
        } else {
            return array();
        }
    } elseif ($MiniComponents->eventSpecificlyExistsCheck('07030', $task)) {
        return $MiniComponents->specificEvent('07030', $task);
    } else {
        return array();
    }
}

/**
 * Given a region id, will return the name of the region, translated if applicable.
 */
function find_region_name($region_id)
{
    if (!is_numeric($region_id)) { // It's already NOT numeric
		return $region_id;
    }

    $jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
	
	return $jomres_regions->get_region_name($region_id);
}


/**
 * Given a region name, will return the region id. 
 */
function find_region_id($region_name)
{
    if (is_numeric($region_name)) { // It's already numeric
        return $region_name;
    }

    $jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
	
	return $jomres_regions->get_region_id($region_name);
}

/**
 * Returns an array of all properties with a manager id
 */
function build_property_manager_xref_array()
{
    $arr = array();

	$query = 'SELECT `property_uid`, `manager_id` FROM #__jomres_managers_propertys_xref';
	$managersToPropertyList = doSelectSql($query);
	if (!empty($managersToPropertyList)) {
		foreach ($managersToPropertyList as $x) {
			if (!array_key_exists($x->property_uid, $arr)) {
				$arr[ $x->property_uid ] = $x->manager_id;
			}
		}
	}

    set_showtime('property_manager_xref', $arr);

    return $arr;
}

/**
 * Utility to produce a url the view property manager page
 */
function make_agent_link($property_id = 0)
{
    $property_manager_xref = get_showtime('property_manager_xref');
    if (is_null($property_manager_xref)) {
        $property_manager_xref = build_property_manager_xref_array();
    }

    if (!array_key_exists($property_id, $property_manager_xref)) {
        return '';
    }

    if ($property_id == 0) {
        return '';
    }

    $output = array();
    $pageoutput = array();

    $manager_id = $property_manager_xref[ $property_id ];

    $output[ 'IMAGE' ] = JOMRES_IMAGES_RELPATH.'noimage.gif';
    if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.'userimage_'.(int) $manager_id.'_thumbnail.jpg')) {
        $output[ 'IMAGE' ] = JOMRES_IMAGELOCATION_RELPATH.'userimages/userimage_'.(int) $manager_id.'_thumbnail.jpg';
    }

    $output[ 'URL' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=view_agent&id='.$manager_id);

    $pageoutput[ ] = $output;
    $tmpl = new patTemplate();
    $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
    $tmpl->addRows('pageoutput', $pageoutput);
    $tmpl->readTemplatesFromInput('agent_link.html');

    return $tmpl->getParsedTemplate();
}

/**
 * Checks that a user can perform the translation
 */
function translation_user_check()
{
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
    if (!$thisJRUser->userIsManager || !$thisJRUser->superPropertyManager) {
        if (using_bootstrap()) {
            echo '<div class="alert alert-error">'.jr_gettext('_JOMRES_COM_NOTAMANAGER', '_JOMRES_COM_NOTAMANAGER', false).'</div>';
        } else {
            echo '<div class="ui-state-error">'.jr_gettext('_JOMRES_COM_NOTAMANAGER', '_JOMRES_COM_NOTAMANAGER', false).'</div>';
        }

        return false;
    }

    return true;
}

/**
 * Outputs the "no search results" message
 */
function no_search_results()
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

    return $MiniComponents->specificEvent('06000', 'no_search_results');
}

/**
 * Returns a tooltip image ( image with hover test ). jomres_tooltips class used to determine what to show based on the version of bootstrap 
 */
function jomres_makeTooltip($div, $hover_title = '', $hover_content = '', $div_content = '', $class = '', $type = '', $type_arguments = array(), $url = '#')
{
    // Uncomment the following line to tell Jomres to show the images and descriptions side by side, instead of using the jquery tooltip.
    //$type_arguments['use_javascript']=false;
    $jomres_tooltips = jomres_singleton_abstract::getInstance('jomres_tooltips');

    //$jomres_tooltips = new jomres_tooltips();
    return $jomres_tooltips->generate_tooltip($div, $hover_title, $hover_content, $div_content, $class, $type, $type_arguments, $url);
}

/**
 * Optional CMS Specific end run tasks
 */
function endrun()
{
    if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_endrun.php')) {
        require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_endrun.php';
    }
}

/**
 * Returns whether or not we are using Bootstrap
 */
function using_bootstrap()
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    if (!isset($jrConfig[ 'use_bootstrap_in_frontend' ])) {
        if (this_cms_is_joomla()) {
            $jrConfig[ 'use_bootstrap_in_frontend' ] = '1';
        } else {
            $jrConfig[ 'use_bootstrap_in_frontend' ] = '0';
        }
    }

    if (jomres_cmsspecific_areweinadminarea()) {
        return true;
    } else {
        if ($jrConfig[ 'use_bootstrap_in_frontend' ] == '1') {
            return true;
        } else {
            return false;
        }
    }

    return false;
}

/**
 * Adds Google maps javascript calls to the site's head where appropriate
 */
function add_gmaps_source()
{
    if (defined('JOMRES_NOHTML') && JOMRES_NOHTML == '1') {
        return true;
    }

    if (!defined('GMAPS_SOURCE_ADDED') && !AJAXCALL) {
        define('GMAPS_SOURCE_ADDED', 1);

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $shortcode = get_showtime('lang_shortcode');

        $apikey = '';
        if ($jrConfig[ 'google_maps_api_key' ] != '') {
            $apikey = '&key='.$jrConfig[ 'google_maps_api_key' ];
        }

        jomres_cmsspecific_addheaddata('javascript', 'https://maps.googleapis.com/maps/api/js?v=3&language='.$shortcode.$apikey, '&foo=bar', $includeVersion = false, $async = true);
    }
}

/**
 * Not currently used
 */
function admins_first_run($manual_trigger = false)
{
    $logfile = JOMRES_SYSTEMLOG_PATH.'admins_first_run.txt';
    $threshold = 25;

    if (!file_exists($logfile) || $manual_trigger) {
        if (!$manual_trigger) {
            touch($logfile);
            $count = 0;
        }

        if (!$manual_trigger) {
            echo '<div  class="modal" tabindex="-1" role="dialog" id="first_run" style="display:none" title="Welcome to Jomres, Joomla\'s favourite hotel booking system">';
            if (using_bootstrap()) {
                echo '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3>Getting Started with Jomres</h3></div>';
            } else {
                echo '<h3>Getting Started with Jomres</h3>';
            }
        } else {
            echo '<div id = "first_run" title="Welcome to Jomres, Joomla\'s favourite hotel booking system">';
        }

        if (!using_bootstrap()) {
            $class = 'ui-state-highlight';
        } else {
            $class = 'alert';
        }

        if (!$manual_trigger) {
            echo '<p class="'.$class.'">This appears to be the first time you\'ve used Jomres* so here is a little reading material you will probably want to look at.</p>';
        }

        if (!using_bootstrap()) {
            $class = 'ui-widget-content ui-corner-all';
            $style = 'margin-left:5px;margin-right:5px;';
        } else {
            $class = '';
            $style = '';
        }

        echo '
		<div class="modal-body">
		<div class="' .$class.'" style="width:100%;">
		<div style="' .$style.'">
		<h3 class="page-header">Introduction.</h3>
		<p>Firstly, a basic installation of Jomres, with absolutely no plugins, is a working booking extension for Joomla and Wordpress. Whilst this is sufficient for a small site with just one property you may quickly find that you want to add more functionality and features to the system, taking it from a simple booking system to a full online booking portal where you can gain revenue from listing properties on your site, earning commission, or taking booking deposits online.</p>
		<p>Unless you want to build the code yourself, the best source of additional functionality is usually the <a href="' .JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins" target="_blank">Jomres Plugin Manager.</a> We have over <a href="http://www.jomres.net/manual/site-managers-guide" target="_blank">100 plugins available</a> that extend the system and we\'ve worked hard to make the Plugin Manager extremely easy to use. If you have a <a href="https://www.jomres.net/pricing" target="_blank"> download and support key</a>, then you will be able to download any plugins listed in the Plugin Manager, once you have entered your license number in the Support Key field in <a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=site_settings" target="_blank">Site Configuration.</a></p>
		<h3 class="page-header">First steps.</h3>
		<p>Now that you\'ve seen some of the extra features on offer, you are ready to start setting up your site. To begin with, we\'d like you to ignore the "administrator" area of Jomres altogether for the time being, a new installation of Jomres includes sample data that you can play around with later, but for now you should experiment with configuring your default property.
		<ol>
			<li>When Jomres is installed, the first thing it does is configure your "admin" user to be a Super Property Manager. Super Managers are akin to a Root user in linux, with super powers unavailable to normal Property Managers. If your administrator user is a different user you might need to add them as a Super Property Manager via the <a href="' .JOMRES_SITEPAGE_URL_ADMIN.'&task=list_users" target="_blank">Property Managers</a> page. View it now just to check that your administrator user has a purple badge. If they haven\'t you will need to edit their record to ensure that they are super managers before you log into the frontend of your site. Note : Super property managers do not need to be associated with a specific property, they have access to all properties.</li>
			';
        if (this_cms_is_joomla()) {
            echo '<li>Next, add Jomres to your <a href="'.get_showtime('live_site').'/administrator/index.php?option=com_menus&view=items&menutype=mainmenu" target="_blank"> Main Menu</a>, as you would any other Joomla extension.</li>';
            echo '<li>Now go to the <a href="'.get_showtime('live_site').'/index.php" target="_blank">public pages</a> of your site and log in as your admin user. When you click on the <a href="'.get_showtime('live_site').'/index.php?option=com_jomres" target="_blank">Main Menu link to Jomres</a>, as you are logged in, you will see the <a href="http://www.jomres.net/manual/property-managers-guide/38-your-toolbar" target="_blank">Property Manager\'s toolbar</a>. Go to the button marked "Tariffs & Rooms" (under Settings) and click on it.</li>';
        } elseif (this_cms_is_wordpress()) {
            echo '<li>Now you want to make sure that Jomres pages are visible to site visitors, so you will need to add the <i>[jomres:en-US]</i> shortcode to a new page to display your Jomres pages in the frontend of Wordpress, if using English, for other languages add [jomres:xx-XX] where xx-XX is the shortcode for your chosen language.</li>';

            echo '<li>Now go to the <a href="'.get_showtime('live_site').'/index.php" target="_blank">public pages</a> of your site and log in as "admin". When you visit the post you added the shortcode to, as you are logged in, you will see the <a href="http://www.jomres.net/manual/property-managers-guide/38-your-toolbar" target="_blank">Property Manager\'s toolbar</a>. Go to the button marked "Tariffs & Rooms" (under Settings) and click on it.</li>';
        }

        echo '<li>Here you will see a number of rooms and their prices. For now, don\'t make any changes, just click the Save icon. Now you are ready to play around with the booking form and generally get used to using Jomres.</li>
		</ol>
		</p>
		<h3 class="page-header">Further reading.</h3>
		<p>Jomres is fully documented in the <a href="http://www.jomres.net/manual/" target="_blank">online manual</a>. There is a wealth of information here, including the <a href="http://www.jomres.net/manual/site-managers-guide/15-core-plugins"  target="_blank">plugin list</a>, but a good place to begin at is the <a href="http://www.jomres.net/manual/site-managers-guide/14-getting-started" target="_blank">Getting Started</a> page.</p>
		<p>To learn how to configure your property(s) you should take a look at the <a href="http://www.jomres.net/manual/property-managers-guide" target="_blank">Property Manager\'s guide.</a> This section of the manual is aimed at Property Managers themselves, and discusses among other things the <a href="http://www.jomres.net/manual/property-managers-guide/38-your-toolbar" target="_blank">Manager\'s Toolbar.</a> Note that the toolbar shows the manager\'s toolbar with all of the most commonly installed plugin\'s buttons, until you\'ve installed the relevant plugins your toolbar will not have as many icons.</p>
		</div></div></div>
		';

        if (!using_bootstrap()) {
            $class = 'ui-state-highlight';
        } else {
            $class = 'alert alert-info';
        }

        if (!$manual_trigger) {
            echo ' <div class="'.$class.'">If you\'ve used Jomres before or are happy exploring the manual on your own just click the big X at the top right of this popup and we won\'t bother you again.</div>';
        }

        echo '</div>
		';
        if (!$manual_trigger) {
            if (using_bootstrap()) {
                echo '<script>jomresJquery(document).ready(function() {jomresJquery(\'#first_run\').modal()});</script>';
            } else {
                echo '<script>jomresJquery( "#first_run" ).dialog({width:1024,modal:true});</script>';
            }
        }
    }
    // else
    // {
    // $count = (int)file_get_contents ($logfile);

    // if (!using_bootstrap())
    // $class = "ui-state-highlight";
    // else
    // $class = "alert alert-info";

    // if ($count == $threshold)
    // {
    // echo '<div id = "jed" style="display:none;" title="Review Jomres on the Joomla Extension Directory">';
    // echo '<p>Please remember to post a review about Jomres on the <a href="http://extensions.joomla.org/extensions/vertical-markets/booking-a-reservations/booking/335" target="_blank">Joomla Extension Directory.</a> The JED is our primary source of business and we need your review!</p>';
    // echo '<p class="'.$class.'">This is the one and only time you will see this feedback request (unless you delete <i>"'.$logfile.'"</i>).</p>';
    // echo '</div>';
    // echo '<script>jomresJquery( "#jed" ).dialog({width:500,modal:true});</script>';

    // }
    // }

    // if ($count <= $threshold && !$manual_trigger && !isset($_REQUEST['no_html']) )
    // {
    // $count++;
    // $fp=fopen($logfile,'r+');
    // fwrite($fp, $count );
    // fclose($fp);
    // }
}

/**
 * Asks whether the Jomres plugin shop is available or not. Not currently used.
 */
 function query_shop($request = '')
 {
     if ($request == '') {
         echo 'Request not set';
         exit;
     }

     if (!function_exists('curl_init')) {
         return 'Error, CURL not enabled on this server.';
     } else {
         $url = 'http://license-server.jomres.net/shop/index.php?'.$request;
         logging::log_message('Starting curl call to '.$url, 'Curl', 'DEBUG');
         $logging_time_start = microtime(true);

         $curl_handle = curl_init();
         curl_setopt($curl_handle, CURLOPT_URL, $url);
         curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
         curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Jomres');
         curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
         $response = curl_exec($curl_handle);
         curl_close($curl_handle);

         $logging_time_end = microtime(true);
         $logging_time = $logging_time_end - $logging_time_start;
         logging::log_message('Curl call took '.$logging_time.' seconds ', 'Curl', 'DEBUG');

         return json_decode($response);
     }
 }

// Adapted from http://uk.php.net/manual/en/function.time.php#89415
/**
 * Used by list properties script to format the "last booking" output message.
 */
function jomres_nicetime($date)
{
    if (empty($date)) {
        return '';
    }
    $periods = array(jr_gettext('_JOMRES_DATEPERIOD_SECOND', '_JOMRES_DATEPERIOD_SECOND', false, false), jr_gettext('_JOMRES_DATEPERIOD_MINUTE', '_JOMRES_DATEPERIOD_MINUTE', false, false), jr_gettext('_JOMRES_DATEPERIOD_HOUR', '_JOMRES_DATEPERIOD_HOUR', false, false), jr_gettext('_JOMRES_DATEPERIOD_DAY', '_JOMRES_DATEPERIOD_DAY', false, false), jr_gettext('_JOMRES_DATEPERIOD_WEEK', '_JOMRES_DATEPERIOD_WEEK', false, false), jr_gettext('_JOMRES_DATEPERIOD_MONTH', '_JOMRES_DATEPERIOD_MONTH', false, false), jr_gettext('_JOMRES_DATEPERIOD_YEAR', '_JOMRES_DATEPERIOD_YEAR', false, false), jr_gettext('_JOMRES_DATEPERIOD_DECADE', '_JOMRES_DATEPERIOD_DECADE', false, false));
    $lengths = array('60', '60', '24', '7', '4.35', '12', '10');

    $now = time();
    $unix_date = strtotime($date);
    // check validity of date
    if (empty($unix_date)) {
        return '';
    }

    // is it future date or past date
    if ($now > $unix_date) {
        $difference = $now - $unix_date;
        $tense = jr_gettext('_JOMRES_DATEPERIOD_AGO', '_JOMRES_DATEPERIOD_AGO', false, false);
    } else {
        $difference = $unix_date - $now;
        $tense = jr_gettext('_JOMRES_DATEPERIOD_FROMNOW', '_JOMRES_DATEPERIOD_FROMNOW', false, false);
    }

	$n = count($lengths) - 1;
    for ($j = 0; $difference >= $lengths[ $j ] && $j < $n; ++$j) {
        $difference /= $lengths[ $j ];
    }

    $difference = round($difference);

    if ($difference != 1) {
        $periods[ $j ] .= jr_gettext('_JOMRES_DATEPERIOD_S', '_JOMRES_DATEPERIOD_S');
    }

    return "$difference $periods[$j] {$tense}";
}

/**
 * Geolocation class uses function to get the user's IP number
 *
 * @todo Duplicated function
 *
 */
function get_remote_ip_number()
{
    $ip = jomres_get_client_ip();
    $bang = explode('.', $ip);
    if (count($bang) != 4) {
        return '0.0.0.0';
    }

    return (int) $bang[ 0 ].'.'.(int) $bang[ 1 ].'.'.(int) $bang[ 2 ].'.'.(int) $bang[ 3 ];
}

/**
 * Pulls the booking number from session data
 */
function get_booking_number()
{
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

    return $tmpBookingHandler->tmpbooking[ 'booking_number' ];
}

/**
 * Figure out what the current property uid should be
 */
function detect_property_uid()
{
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

    $property_uid = 0;

    $defaultProperty = getDefaultProperty();

    $property_uid = (int)jomresGetParam($_REQUEST, 'selectedProperty', 0);

    if ($property_uid == 0) {
        $property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
    }

    // Finding the property uid
    $numberOfPropertiesInSystem = (int) get_showtime('numberOfPropertiesInSystem');
    $all_properties_in_system = get_showtime('all_properties_in_system');

    if ($numberOfPropertiesInSystem == 1) {
        $property_uid = $all_properties_in_system[ 0 ];
    }

    //TODO remove this, but too much stuff depends on it at the moment..
    if ($thisJRUser->userIsManager && !jomres_cmsspecific_areweinadminarea()) {
        $property_uid = $defaultProperty;
    }

    if (get_showtime('task') == 'showRoomDetails') {
        $roomUid = (int) jomresGetParam($_REQUEST, 'roomUid', 0);

        $basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
        $property_uid = $basic_room_details->get_property_uid_for_room_uid($roomUid);
    }

    if ((get_showtime('task') == 'handlereq' || get_showtime('task') == 'completebk' || get_showtime('task') == 'processpayment') && !$thisJRUser->userIsManager) {
        $property_uid = (int) $tmpBookingHandler->getBookingFieldVal('property_uid');
    }

    // Payment specific stuff.
    if (get_showtime('task') == 'completebk' || get_showtime('task') == 'processpayment' || get_showtime('task') == 'confirmbooking') {
        if (isset($_POST[ 'specialReqs' ])) {
            $specialReqs = getEscaped(jomresGetParam($_POST, 'specialReqs', ''));
            $tmpBookingHandler->updateBookingField('error_log', $specialReqs);
        }
    }

    // For property uids that don't exist
    $all_property_uids = get_showtime('all_properties_in_system');
    if (!in_array($property_uid, $all_property_uids)) {
        $property_uid = 0;
    }

    // Finish finding the property uid
    return $property_uid;
}

// 
/**
 * Return "NA" if no gateway is configured for this property. The calling script will process payment without attempting to call a gateway (IE simply enter the booking)
 */
function jomres_validate_gateway_plugin()
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
    if ($thisJRUser->userIsManager) {
        return 'NA';
        }
    
    $installed_gateway_plugins = array();
    foreach ($MiniComponents->registeredClasses['00509'] as $eventName => $e ) {
        $installed_gateway_plugins[] = $eventName;
    }
   // No gateways are installed
    if ( empty($installed_gateway_plugins) ) {
        return 'NA';
    }
    
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $property_uid = get_showtime('property_uid');
	
	$mrConfig = getPropertySpecificSettings($property_uid);
	
	if ($mrConfig[ 'requireApproval' ] == '1' && !$tmpBookingHandler->tmpbooking[ 'secret_key_payment' ]) {
		return "NA";
	}
    
    if ( !isset($_REQUEST[ 'plugin' ]) && isset($tmpBookingHandler->tmpbooking[ 'gateway' ]) ) {
        $plugin = $tmpBookingHandler->tmpbooking[ 'gateway' ];
        } 
    else {
        $plugin = jomresGetParam($_REQUEST, 'plugin', '');
        $tmpBookingHandler->tmpbooking[ 'gateway' ] = $plugin;
        }
        
    jr_import("gateway_plugin_settings");
    $plugin_settings = new gateway_plugin_settings();
    $plugin_settings->get_settings_for_property_uid( $property_uid );
    
    if (!isset($plugin_settings->gateway_settings[$plugin]) ) { // Gateway has no settings
        return 'NA';
    }

    if (!$plugin_settings->gateway_settings[$plugin]['active']) {
        gateway_log("Error, gateway passed either doesn't exist, or is not active, probable hack attempt");
        trigger_error("Error, gateway passed either doesn't exist, or is not active, probable hack attempt", E_USER_ERROR);
        die();
        }

    return $plugin;
}

 /**
 * Generates anchors for javascript tabs
 *
 * Commented out code that tries to make the anchor of the tabs based on the name of the tab. Too many non-latin users were reporting problems with tabs.
 * Instead we'll just use the random string generator to create the anchor.
 *
 */
function jomres_generate_tab_anchor($string)
{
    // Commented out code that tries to make the anchor of the tabs based on the name of the tab. Too many non-latin users were reporting problems with tabs.
    // Instead we'll just use the random string generator to create the anchor.
    /* 	$unwanted = array("'","\"",',');
    $string = str_replace($unwanted,"-",$string);
    if (function_exists('filter_var'))
        $anchor = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS,FILTER_FLAG_STRIP_HIGH);
    else
        $anchor = getEscaped($string);

    $anchor = str_replace(" ","_",$anchor);
    if (strlen($anchor)==0) // Give up trying to filter out unwanted chars, instead we'll just replace any spaces and return the string
        $anchor = str_replace(" ","_",$string); */

    $anchor = generateJomresRandomString(15);

    return $anchor;
}

/**
 * Return the "showtime" singleton
 */
function get_showtime($setting)
{
    $showtime = jomres_singleton_abstract::getInstance('showtime');

    return $showtime->$setting;
}

/**
 * Set a showtime variable to X
 */
function set_showtime($setting, $value)
{
	$showtime = jomres_singleton_abstract::getInstance('showtime');

    if (!$showtime->$setting = $value) {
        return false;
    }

    return true;
}

/**
 * Find settings for a given plugin. Typically used by gateways
 */
function get_plugin_settings($plugin, $prop_id = 0)
{
    // This function is exclusively for gateway plugins
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    
	if (!isset($MiniComponents->registeredClasses['00509'][$plugin])) {
        return false; // Gateway isn´t installed
    }
    if (isset($MiniComponents->registeredClasses['00509'][$plugin]) && count($MiniComponents->registeredClasses['00509'][$plugin]) == 0) { // Let's check to see that the gateway hasn't been uninstalled. It's possible that the settings exist, but the gateway code itself doesn't.
        return false; // Can't "throw" an error here, any failure needs to be handled by the calling function/method
    }

    $settingArray = array();
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

    if (jomres_cmsspecific_areweinadminarea()) {
        $property_uid = 0;
    } else {
        if ($thisJRUser->userIsManager) {
            $property_uid = (int) getDefaultProperty();
        } else {
            if ($prop_id == 0) {
                $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
                $property_uid = (int) $tmpBookingHandler->getBookingPropertyId();
            } else {
                $property_uid = (int) $prop_id;
            }
        }
    }
    
    jr_import("gateway_plugin_settings");
    $plugin_settings = new gateway_plugin_settings();
    $plugin_settings->get_settings_for_property_uid( $property_uid );


    return $plugin_settings->gateway_settings[$plugin];
}

/**
 * Imports a class JIT as found in the classes registry. If not found will report a backtrace.
 */
function jr_import($class)
{
	if (class_exists($class)) {
		return true;
	}

	//first check custom code dir
	if (file_exists(JOMRES_REMOTEPLUGINS_ABSPATH.'custom_code'.JRDS.$class.'.class.php')) {
		require_once JOMRES_REMOTEPLUGINS_ABSPATH.'custom_code'.JRDS.$class.'.class.php';
		
		return true;
	}
	
	global $classes;

	//check core and remote plugins dirs
	if (isset($classes[$class])) {
		require_once $classes[$class].$class.'.class.php';
		return true;
	}
	
	//last place to check is jomres core classes dir
	if (file_exists(JOMRES_CLASSES_ABSPATH.$class.'.class.php')) {
		require_once JOMRES_CLASSES_ABSPATH.$class.'.class.php';
		return true;
	}
	
	//class doesn`t exist so we`ll echo a message and exit
	echo 'Error, class '.$class." doesn't exist.";
    $trace = '';
        $backtrace = debug_backtrace();
        $trace = "<br/> File ".$backtrace[1]['file']." Line ".$backtrace[1]['line']. " Function ".$backtrace[1]['function']."<br/> ";
        $trace .= " File ".$backtrace[2]['file']." Line ".$backtrace[2]['line']. " Function ".$backtrace[2]['function']."<br/> ";
        $trace .= " File ".$backtrace[3]['file']." Line ".$backtrace[3]['line']. " Function ".$backtrace[3]['function']."<br/> "; 
    echo $trace;
	exit;
}

/**
 * Integration script uses this to see if we need to build registry files
 */
function search_core_and_remote_dirs_for_classfiles()
{
	global $classes;

	if (defined('AUTO_UPGRADE')) {
		return;
	}
    $plugin_paths = array();

	$core_plugins_directory = JOMRES_COREPLUGINS_ABSPATH;
	$remote_plugin_directory = JOMRES_REMOTEPLUGINS_ABSPATH;
	$classes_tmp_file = JOMRES_TEMP_ABSPATH.'registry_classes.php';

	if (is_dir($core_plugins_directory)) {
		$d = @dir($core_plugins_directory);
		while (false !== ($entry = $d->read())) {
			if (substr($entry, 0, 1) != '.') {
				$plugin_paths[ ] = $core_plugins_directory.$entry.JRDS;
			}
		}
	}

	if (is_dir($remote_plugin_directory)) {
		$d = @dir($remote_plugin_directory);
		while (false !== ($entry = $d->read())) {
			if (substr($entry, 0, 1) != '.') {
				$plugin_paths[ ] = $remote_plugin_directory.$entry.JRDS;
			}
		}
	}
	
	foreach ($plugin_paths as $directory) {
		$d = @dir($directory);
		if ($d) {
			while (false !== ($entry = $d->read())) {
				$filename = $entry;
				if (substr($entry, 0, 1) != '.') {
					if (strstr($entry, '.class.php')) {
						if (strlen($filename) > 8) {
							$strippedName = str_replace('.', '', $filename);
							$strippedName = substr($strippedName, 0, -8);
						} else {
							$strippedName = $filename;
						}
						$classfileEventPoint = substr($strippedName, 1, 5);
						if (!is_numeric($classfileEventPoint)) {
							$classes[ $strippedName ] = $directory;
						}
					}
				}
			}
			$d->close();
		}
	}
	
	if (!file_put_contents($classes_tmp_file,
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$classes = ' .var_export($classes, true).';
')) {
		trigger_error('ERROR: '.$classes_tmp_file.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
		exit;
	}
	
	return $classes;
}

/**
 * utilit to clean up urls
 */
function jomresValidateUrl($url)
{
    $url = str_replace('&amp;', '&', $url);
    $url = str_replace('&', '&amp;', $url);

    return $url;
}

/**
 * CMS Specific functions use this to find settings for modules
 */
function getIntegratedSearchModuleVals()
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $vals = array();
    $vals[ 'useCols' ] = $jrConfig[ 'integratedSearch_useCols' ];
    $vals[ 'featurecols' ] = $jrConfig[ 'integratedSearch_featurecols' ];
    $vals[ 'geosearchtype' ] = $jrConfig[ 'integratedSearch_geosearchtype' ];
    $vals[ 'propertyname' ] = $jrConfig[ 'integratedSearch_propertyname' ];
    $vals[ 'ptype' ] = $jrConfig[ 'integratedSearch_ptype' ];
    $vals[ 'room_type' ] = $jrConfig[ 'integratedSearch_room_type' ];

    $vals[ 'description' ] = $jrConfig[ 'integratedSearch_description' ];
    $vals[ 'availability' ] = $jrConfig[ 'integratedSearch_availability' ];
    $vals[ 'geosearch_dropdown' ] = $jrConfig[ 'integratedSearch_geosearchtype_dropdown' ];
    $vals[ 'propertyname_dropdown' ] = $jrConfig[ 'integratedSearch_propertyname_dropdown' ];
    $vals[ 'ptype_dropdown' ] = $jrConfig[ 'integratedSearch_ptype_dropdown' ];
    $vals[ 'room_type_dropdown' ] = $jrConfig[ 'integratedSearch_room_type_dropdown' ];
    $vals[ 'features' ] = $jrConfig[ 'integratedSearch_features' ];
    $vals[ 'features_dropdown' ] = $jrConfig[ 'integratedSearch_features_dropdown' ];
    $vals[ 'priceranges' ] = $jrConfig[ 'integratedSearch_priceranges' ];
    $vals[ 'pricerange_increments' ] = $jrConfig[ 'integratedSearch_pricerange_increments' ];
    $vals[ 'selectcombo' ] = $jrConfig[ 'integratedSearch_selectcombo' ];

    $vals[ 'guestnumber' ] = $jrConfig[ 'integratedSearch_guestnumber' ];
    $vals[ 'stars' ] = $jrConfig[ 'integratedSearch_stars' ];

    return $vals;
}

/**
 * Get the month name, set editable to true to show the editing mode option
 */
function getThisMonthName($monthNumber, $editable = true)
{
    $monthNumber = intval($monthNumber - 1);
    $mName = jr_gettext('_JRPORTAL_MONTHS_LONG_'.$monthNumber, '_JRPORTAL_MONTHS_LONG_'.$monthNumber, $editable);
    $thisMonthName = jr_gettext('_JOMRES_CUSTOMTEXT_'.$monthNumber, $mName, $editable);

    return $thisMonthName;
}

/**
 * Module/Plugin/Widget installation functionality that is called when using the third party installer
 */
function install_external_plugin($plugin_name, $plugin_type, $mambot_type = '', $params = '', $remote_plugin_component_folder = 'c', $remote_plugin_administrator_folder = 'a', $remote_plugin_module_folder = 'm', $remote_plugin_mambot_folder = 'b')
{
    switch ($plugin_type) {
        case 'widget': // Wordpress widgets
            if (file_exists(JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php')) {
                $widget_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS;
            } else {
                $widget_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS;
            }

            $widget_target = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'wp-content'.JRDS.'plugins'.JRDS.$plugin_name;

            if (!test_and_make_directory($widget_target)) {
                error_logging('Error, unable to write to '.$widget_target.' Please ensure that the parent path is writable by the web server ');

                return false;
            }

            $plugin_info_file = $widget_source.'plugin_info.php';
            $plugin_info_file_temp = JOMRES_SYSTEMLOG_PATH.'plugin_info.php';
            copy($plugin_info_file, $plugin_info_file_temp);

            $widget_move_result = dirmv($widget_source, $widget_target, true, $funcloc = '/');

            if ($widget_move_result[ 'success' ]) {
                copy($plugin_info_file_temp, $plugin_info_file);
                unlink($plugin_info_file_temp);

                return true;
            } else {
                return false;
            }

        break;
        case 'module':
            $module_full_name = 'mod_'.$plugin_name;
            if (file_exists(JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php')) {
                $module_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.$remote_plugin_module_folder.JRDS;
                $module_xml_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'xml'.JRDS.'1.5';
            } else {
                $module_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS.$remote_plugin_module_folder.JRDS;
                $module_xml_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS.'xml'.JRDS.'1.5';
            }

            $module_target = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS.$module_full_name;
            if (!test_and_make_directory($module_target)) {
                error_logging('Error, unable to write to '.$module_target.' Please ensure that the parent path is writable by the web server ');

                return false;
            }

            //echo "Moving contents of ".$module_xml_source." to ".$module_target."<br/>";
            $module_xml_move_result = dirmv($module_xml_source, $module_target, true, $funcloc = JRDS);
            $module_move_result = dirmv($module_source, $module_target, true, $funcloc = JRDS);

            if ($module_move_result[ 'success' ] && $module_xml_move_result[ 'success' ]) {
                return true;
            } else {
                return false;
            }

            break;
        case 'mambot':
            //$mambot_full_name=$plugin_name;

            if (file_exists(JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php')) {
                $mambot_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS;
                $mambot_xml_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name;
            } else {
                $mambot_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS.$remote_plugin_mambot_folder.JRDS;
                $mambot_xml_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name;
            }

            $mambot_target = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'plugins'.JRDS.$mambot_type.JRDS.$plugin_name;

            if (!test_and_make_directory($mambot_target)) {
                error_logging('Error, unable to write to '.$mambot_target.' Please ensure that the parent path is writable by the web server ');

                return false;
            }

            $mambot_xml_move_result = dirmv($mambot_xml_source, $mambot_target, true, $funcloc = '/');
            $mambot_move_result = dirmv($mambot_source, $mambot_target, true, '/');

            if ($mambot_xml_move_result[ 'success' ] && $mambot_move_result[ 'success' ]) {
                copy($mambot_target.JRDS.'plugin_info.php', JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php');
                unlink($mambot_target.JRDS.'plugin_info.php');
                @unlink($mambot_target.JRDS.'plugin_install.php');

                return true;
            } else {
                return false;
            }

            break;
        }
}

/**
 * Make a directory
 */
function test_and_make_directory($dir)
{
    if (!is_dir($dir)) {
        if (!@mkdir($dir)) {
            echo 'Error, unable to make folder '.$dir." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";

            return false;
        } else {
            return true;
        }
    } else {
        if (!is_writable($dir)) {
            return false;
        } else {
            return true;
        }
    }
}

/**
 * An alternative file_get_contents function because IIRC one version of PHP had problems with this function not existing
 */
if (!function_exists('file_get_contents')) {
    function file_get_contents($filename, $incpath = false, $resource_context = null)
    {
        if (false === $fh = fopen($filename, 'rb', $incpath)) {
            trigger_error('file_get_contents() failed to open stream: No such file or directory', E_USER_WARNING);

            return false;
        }
        clearstatcache();
        if ($fsize == @filesize($filename)) {
            $data = fread($fh, $fsize);
        } else {
            $data = '';
            while (!feof($fh)) {
                $data .= fread($fh, 8192);
            }
        }
        fclose($fh);

        return $data;
    }
}

/**
 * Delete all files and subdirectories in a directory
 */
function emptyDir($dir, $root = null)
{
    if ($root == null) {
        $root = $dir;
    }
    if (!$dh = @opendir($dir)) {
        return false;
    }
    while (false !== ($obj = readdir($dh))) {
        if ($obj == '.' || $obj == '..') {
            continue;
        }
        if (!@unlink($dir.'/'.$obj)) {
            emptyDir($dir.'/'.$obj, $root);
        }
    }
    closedir($dh);
    if ($dir != $root) {
        @rmdir($dir);
    }
}

/*
Does what it says on the tin
*/
function dropPlugin($pluginName)
{
    $pluginPath = JOMRES_REMOTEPLUGINS_ABSPATH.$pluginName;
    if (file_exists($pluginPath.JRDS.'plugin_uninstall.php')) {
        define('JOMRES_INSTALLER', 1);
        include $pluginPath.JRDS.'plugin_uninstall.php';
    }
    emptyDir($pluginPath);
	if (is_dir($pluginPath)) {
		rmdir($pluginPath);
		return true;
    } else {
        $pluginPath = JOMRES_COREPLUGINS_ABSPATH.$pluginName;
        if (file_exists($pluginPath.JRDS.'plugin_uninstall.php')) {
            define('JOMRES_INSTALLER', 1);
            include $pluginPath.JRDS.'plugin_uninstall.php';
        }
        emptyDir($pluginPath);
        if (rmdir($pluginPath)) {
            return true;
        }
    }

    return false;
}

/*
Does what it says on the tin
*/
function queryUpdateServer($script, $queryString, $serverType = 'plugin')
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();

    if ($serverType == 'plugin') {
        $updateServer = 'http://plugins.jomres4.net';
    } else {
        $updateServer = 'http://updates.jomres4.net';
    }

    if (strlen($script) == 0) {
        $script = 'index.php';
    }
	
	$response = '';

	$query_string = $script.'?'.$queryString.'&jomresver='.$jrConfig[ 'version' ].'&hostname='.get_showtime('live_site');

	try {
		$client = new GuzzleHttp\Client([
			'base_uri' => $updateServer
		]);

		logging::log_message('Starting guzzle call to '.$updateServer.'/'.$query_string, 'Guzzle', 'DEBUG');
		
		$response = $client->request('GET', $query_string)->getBody()->getContents();
	}
	catch (Exception $e) {
		$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
		$jomres_user_feedback->construct_message(array('message'=>'Could not query the updates server', 'css_class'=>'alert-danger alert-error'));
	}

    return $response;
}

// http://www.php.net/manual/en/function.rename.php#61152
/**
 * Moves the contents of source dir to destination dir
 */
function dircopy($source, $dest, $overwrite = true, $funcloc = null)
{
    global $copiedFileLog;
    $debugging = true;
    $copiedFileLog = array();
    //$success=true;
    /*
        if(is_null($funcloc))
            {
            $dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
            $funcloc = '/';
            }
        */
    if (!is_dir($dest.$funcloc)) {
        mkdir($dest.$funcloc);
    } // make subdirectory before subdirectory is copied
    //echo "Opening " . $source . $funcloc."<br/>";
    if ($handle = opendir($source.$funcloc)) { // if the folder exploration is sucsessful, continue
        //echo "Opened ". $source . $funcloc."<br/>";
        while (false !== ($file = readdir($handle))) { // as long as storing the next file to $file is successful, continue
            if ($file != '.' && $file != '..') {
                $path = $source.$funcloc.$file;
                $path2 = $dest.$funcloc.$file;

                if (is_file($path)) {
                    if (!@copy($path, $path2)) {
                        $message = 'File '.$path.' could not be moved to '.$path2.', likely a permissions problem.';

                        return array('success' => false, 'errormsg' => $message);
                    }
                } elseif (is_dir($path)) {
                    dircopy($source, $dest, $overwrite, $funcloc.$file.JRDS); //recurse!
                    //rmdir( $path);
                }
            }
        }
        closedir($handle);
    }
    if ($debugging) {
        foreach ($copiedFileLog as $m) {
            echo $m.'<br/>';
        }
    }

    return array('success' => true, 'errormsg' => '');
    //echo "Finished upgrade <br/>";
} // end of dircopy()

// http://www.php.net/manual/en/function.rename.php#61152
/**
 * Moves the contents of source dir to destination dir
 */
function dirmv($source, $dest, $overwrite = true, $funcloc = JRDS)
{
    global $movedFileLog;
    $debugging = false;
    $movedFileLog = array();
    //$success=true;
    /*
        if(is_null($funcloc))
            {
            $dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
            $funcloc = '/';
            }
        */
    if (!is_dir($dest.$funcloc)) {
        mkdir($dest.$funcloc);
    } // make subdirectory before subdirectory is copied
    //echo "Opening " . $source . $funcloc."<br/>";
    if ($handle = opendir($source.$funcloc)) { // if the folder exploration is sucsessful, continue
        //echo "Opened ". $source . $funcloc."<br/>";
        while (false !== ($file = readdir($handle))) { // as long as storing the next file to $file is successful, continue
            if ($file != '.' && $file != '..') {
                $path = $source.$funcloc.$file;
                $path2 = $dest.$funcloc.$file;

                if (is_file($path)) {
                    if (!is_file($path2)) {
                        if (!@rename($path, $path2)) {
                            if (copy($oldfile, $newfile)) {
                                unlink($oldfile);
                            } else {
                                echo 'File ('.$path.') could not be moved to  '.$path2.', likely a permissions problem.';

                                return array('success' => false, 'errormsg' => 'File ('.$path.') could not be moved, likely a permissions problem.');
                            }
                        }
                    } elseif ($overwrite) {
                        if (!@unlink($path2)) {
                            echo 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>';

                            return array('success' => false, 'errormsg' => 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>');
                        } else {
                            if (!@rename($path, $path2)) {
                                echo '<font color="red">File ('.$path.') could not be moved while overwritting, likely a permissions problem.</font><br/>';

                                return array('success' => false, 'errormsg' => 'File ('.$path.') could not be moved while overwritting, likely a permissions problem.<br/>');
                            } else {
                                $movedFileLog[ ] = 'Moved '.$path.'<br/> to '.$path2.'<br/>';
                            }
                        }
                    } else {
                        echo 'Not allowed to overwrite'.$path2.'<br/>'; // Not technically an error message, just advisory
                    }
                } elseif (is_dir($path)) {
                    dirmv($source, $dest, $overwrite, $funcloc.$file.JRDS); //recurse!
                    rmdir($path);
                }
            }
        }
        closedir($handle);
    }
    if ($debugging) {
        foreach ($movedFileLog as $m) {
            echo $m.'<br/>';
        }
    }

    return array('success' => true, 'errormsg' => '');
    //echo "Finished upgrade <br/>";
} // end of dirmv()

/*
Allows us to work independantly of Joomla or Mambo's emailers
*/
function jomresMailer($from, $jomresConfig_sitename, $to, $subject, $body, $mode = 1, $attachments = array(), $debugging = true)
{
	if ($from == '') {
		$from = get_showtime('mailfrom');
	}

    logging::log_message('Sending email from '.$from.' to '.$to.' subject '.$subject, 'Mailer');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $emails = array();
    if (is_array($to)) {
		foreach ($to as $t) {
			if (strlen($t) > 0) {
				$emails[ ] = trim($t);
			}
		}
	} else {
		if (strpos($to, ',')) { // we've been passed a comma separated list of emails, explode them then parse them
			$addys = explode(',', $to);
			foreach ($addys as $t) {
				if (strlen($t) > 0) {
					$emails[ ] = trim($t);
				}
			}
		} else {
			if (strlen($to) > 0) {
				$emails[ ] = trim($to);
			}
		}
	}
    
	try {
        if (!isset($GLOBALS['debug'])) {
            $GLOBALS['debug'] = '';
        }
		
		$mail = new PHPMailer\PHPMailer\PHPMailer(true);
		
		$mail->CharSet = 'UTF-8';

        if ($jrConfig[ 'alternate_smtp_use_settings' ] == '1') {
            $mail->Mailer = 'smtp';
			$mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = trim($jrConfig[ 'alternate_smtp_host' ]);
            $mail->Port = trim($jrConfig[ 'alternate_smtp_port' ]);
            $mail->SMTPSecure = trim($jrConfig[ 'alternate_smtp_protocol' ]);
            $mail->SMTPAuth = trim($jrConfig[ 'alternate_smtp_authentication' ]);
            $mail->Username = trim($jrConfig[ 'alternate_smtp_username' ]);
            $mail->Password = trim($jrConfig[ 'alternate_smtp_password' ]);
        } else {
            $mail->Mailer = trim(get_showtime('mailer'));
			
			if ($mail->Mailer == 'smtp') {
				$mail->IsSMTP(); // telling the class to use SMTP
			}
			
            $mail->Host = trim(get_showtime('smtphost'));
            $mail->Port = trim(get_showtime('smtpport'));
            $mail->SMTPSecure = trim(get_showtime('smtpsecure'));
            $mail->SMTPAuth = trim(get_showtime('smtpauth'));
            $mail->Username = trim(get_showtime('smtpuser'));
            $mail->Password = trim(get_showtime('smtppass'));
        }
		
		$mail->SMTPDebug = 2;
        $mail->Debugoutput = function ($str, $level) {
            $GLOBALS['debug'] .= "$level: $str<br/>";
        };

        $mail->Timeout = 300;
		
		$mail->SMTPAutoTLS = false;
		
		//not recommended, but it`s here for cases when certificates are self signed. Some hosting providers still do this..
		$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);

        if ($jrConfig[ 'default_from_address' ] != '') {
            $mail->setFrom($jrConfig[ 'default_from_address' ], $jomresConfig_sitename);
        } else {
            $mail->setFrom($from, $jomresConfig_sitename);
        }
		
		if ($mode == 1) {
            $mail->IsHTML(true);
        }

        $body = preg_replace("[\\\]", '', $body);

        //if ($mode == 1 && !strstr($body, '<meta http-equiv="Content-Type" content="text/html; utf-8" />')) {
            //$body = preg_replace( '@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $body );
        //}

		$mail->Body = $body;
        $mail->Subject = str_replace('&#39;', "'", $subject);
        //$mail->AltBody = strip_tags($body); //content for non-HTML email clients

        if (!empty($attachments)) {
            foreach ($attachments as $attachment) {
                switch ($attachment[ 'type' ]) { // Use a switch as it allows us to expand this later if we wish
                    case 'image':
                        $image_arr = explode(JRDS, $attachment[ 'image_path' ]);
                        $image_name = $image_arr [ count($image_arr) - 1 ];
                        $image_path = $attachment[ 'image_path' ];
                        $cid = $attachment[ 'CID' ];
                        $mail->addEmbeddedImage($image_path, $cid, $image_name);
                        break;
                    case 'pdf':
                        $path = $attachment[ 'path' ];
                        $name = $attachment[ 'filename' ];
                        $mail->addAttachment($path, $name, 'base64', $type = 'application/pdf');
                        break;
                    default:
                        $path = $attachment[ 'path' ];
                        $name = $attachment[ 'filename' ];
                        $type = $attachment['type'];
                        $mail->addAttachment($path, $name, 'base64', $type);
                        break;
                    }
            }
        }

        foreach ($emails as $to) {
            if (strlen($to) > 0) {
                $mail->addAddress($to);
            }
        }
        $mail->Send();
        logging::log_message('Email sent successfully ', 'Mailer');
    } catch (PHPMailer\PHPMailer\Exception $e) {
        logging::log_message('Email failed '.$GLOBALS['debug'], 'Mailer');
        $GLOBALS['debug'] = '';

        return false;
    } catch (\Exception $e) {
        //echo $e->getMessage(); //Boring error messages from anything else!
        return false;
    }

    return true;
}

/**
 * Returns the guest details for a booking.
 */
function addBookingNote($contract_uid, $property_uid, $message)
{
    if ($contract_uid > 0 && $property_uid > 0 && strlen($message) > 0) {
        $dt = date('Y-m-d H-i-s');
        $query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','".RemoveXSS($message)."','$dt','".(int) $property_uid."')";
        $result = doInsertSql($query, '');

        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'booking_note_saved';
        $webhook_notification->webhook_event_description    = 'Logs when booking notes are added/edited.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->contract_uid           = $contract_uid;
        $webhook_notification->data->property_uid           = $property_uid;
        $webhook_notification->data->note_id                = $result;
        add_webhook_notification($webhook_notification);
        
        return $result;
    } else {
        return false;
    }
}

/**
 * Returns the guest details for a booking.
 */
function getGuestDetailsForContract($contract_uid)
{
    $query = 'SELECT rate_rules FROM #__jomres_contracts WHERE contract_uid = '.(int) $contract_uid.' LIMIT 1';
    $bookingData = doSelectSql($query);

    if (!empty($bookingData)) {
        foreach ($bookingData as $booking) {
            $guesttypeOutput = array();
            $varianceArray = explode(',', $booking->rate_rules);
            foreach ($varianceArray as $v) {
                $vDeets = explode('_', $v);
                if ($vDeets[ 0 ] == 'guesttype') {
                    $vu = $vDeets[ 1 ];
                    $vq = $vDeets[ 2 ];
                    $vv = $vDeets[ 3 ];

                    $query = "SELECT `type` FROM #__jomres_customertypes where id = '".(int) $vu."' LIMIT 1 ";
                    $vtitle = doSelectSql($query, 1);
                    $vtitle = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.(int) $vu, $vtitle, false, false);
                    $guesttypeOutput[ ] = array('title' => $vtitle, 'qty' => $vq, 'value' => $vv);
                }
            }
        }
        if (!empty($guesttypeOutput)) {
            sort($guesttypeOutput);
        }

        return $guesttypeOutput;
    } else {
        return array();
    }
}

/**
 * Cconstruct data from session variables.
 */
function getCurrentBookingData($jomressession = '')
{
    // Whilst this is a new function to construct data from session variables, we'll need to do a bunch of jiggery pokery with the nice simple data pulled from the sess vars so that the data is in a format that's understood by other functions that previously received data that had been pulled from the database

    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $obj = new stdClass();
    $tempBookingDataList = array();
    $userDeets = $tmpBookingHandler->getGuestData();
    $guestDetails = new stdClass();
    foreach ($userDeets as $key => $val) {
        $guestDetails->$key = $val;
    }
    $bobj = new stdClass();
    $bookingDeets = $tmpBookingHandler->getBookingData();
    foreach ($bookingDeets as $key => $val) {
        $bobj->$key = $val;
    }
    $tempBookingDataList[ 0 ] = $bobj;
    $obj->guestDetails = $guestDetails;
    $obj->tempBookingDataList = $tempBookingDataList;
    $arr = array();
    $ob = $tempBookingDataList;
    if (!empty($ob)) {
        foreach ($ob as $k => $v) {
            $arr[ $k ] = $v;
        }
    }
    $obj->tempBookingDataArray = $arr;

    return $obj;
}

/**
 * Returns the booking details from the tmpbooking session data.
 */
function gettempBookingdata()
{
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $bookingDeets = $tmpBookingHandler->getBookingData();

    return $bookingDeets;
}

/**
 * Inserts the property manager/property uid into the xref table. Receives a property uid array which is a list of the users current properties and updates the xref table to that effect
 * If the $property_uids is empty then the manager will loose all access to properties, so ensure that $property_uids contains all of the current properties that the manager has rights to before passing data to this function.
 */
function updateManagerIdToPropertyXrefTable($cms_user_id = 0, $property_uids = array())
{
    if ($cms_user_id == 0) {
        throw new Exception('Error: manager id not set');
    }

    $currentProperties = array();
    $propertiesToBeRemovedArray = array();
    $propertiesToBeAddedArray = array();

    $query = 'SELECT `property_uid` FROM #__jomres_managers_propertys_xref  WHERE `manager_id` = '.(int) $cms_user_id;
    $result = doSelectSql($query);

    if (!empty($result)) {
        foreach ($result as $r) {
            $currentProperties[] = $r->property_uid;
        }
    }

    foreach ($currentProperties as $c) {
        if (!in_array($c, $property_uids)) {
            $propertiesToBeRemovedArray[ ] = $c;
        }
    }

    foreach ($property_uids as $p) {
        if (!in_array($p, $currentProperties)) {
            $propertiesToBeAddedArray[] = $p;
        }
    }

    if (!empty($propertiesToBeRemovedArray)) {
        $query = 'DELETE FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '.(int) $cms_user_id.' AND `property_uid` IN ('.jomres_implode($propertiesToBeRemovedArray).') ';
        if (!doInsertSql($query, '')) {
            throw new Exception('Error: Deleting user`s unassigned properties failed');
        }
    }

    if (!empty($propertiesToBeAddedArray)) {
        $query = 'INSERT INTO #__jomres_managers_propertys_xref (`manager_id`,`property_uid`) VALUES ';

        foreach ($propertiesToBeAddedArray as $p) {
            $query .= '('.(int) $cms_user_id.','.(int) $p.'),';
        }

        $query = rtrim($query, ',');

        if (!doInsertSql($query, '')) {
            throw new Exception('Error: Inserting user`s assigned properties failed');
        }
    }

    return true;
}

/**
 * Handles errors generated by the system, redirects the user to an error page. Only used if system is set to Production.
 */
function errorHandler($errno, $errstr, $errfile, $errline, $errcontext)
{
    switch ($errno) {
        case E_USER_WARNING:
        case E_USER_NOTICE:
        case E_WARNING:
        case E_NOTICE:
        case E_CORE_WARNING:
        case E_COMPILE_WARNING:
            break;
        case E_USER_ERROR:
            recordError($errno, $errstr, $errfile, $errline, $errcontext);
        case E_ERROR:
        case E_PARSE:
        case E_CORE_ERROR:
        case E_COMPILE_ERROR:
            recordError($errno, $errstr, $errfile, $errline, $errcontext);
        default:
            break;
    } // switch
} // errorHandler

/**
 * Pretty sure this is depreciated now
 */
function recordError($errno, $errstr, $errfile, $errline, $errcontext)
{
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

    $errorstring = "Fatal Error: $errstr (# $errno).";
    //$errorstring .= "User id '$jrUser->username'&nbsp;&nbsp;.";
    $errorstring .= "Error in line $errline of file '$errfile'.";
    $errorstring .= "Script: '{$_SERVER['PHP_SELF']}'";
    if (isset($errcontext[ 'this' ])) {
        if (is_object($errcontext[ 'this' ])) {
            $classname = get_class($errcontext[ 'this' ]);
            $parentclass = get_parent_class($errcontext[ 'this' ]);
            $errorstring .= "Object/Class: '$classname', Parent Class: '$parentclass'.";
        }
    }
    error_logging($errorstring);
    if (!@session_start()) {
        @ini_set('session.save_handler', 'files');
        session_start();
    }
    session_unset();
    session_destroy();
    jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=error'), 'FATAL ERROR');
}

/**
 *  Legacy function, previously wrote to writexml, now uses the Logger class.
 */
function error_logging($message, $emailMessage = true)
{
    logging::log_message($message, 'Core', 'ERROR');
}

/**
 *  Legacy function, previously wrote to writexml, now uses the Logger class.
 */
function request_log()
{
    $log = '';
    if (!empty($_REQUEST)) {
        $log .= '';
        foreach ($_REQUEST as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            $log .= $key.' '.$value." --- \n";
        }
        $log .= '';
        logging::log_message($log, 'REQUEST', 'DEBUG');
    }
}

/**
 *  Legacy function, previously wrote to writexml, now uses the Logger class.
 */
function system_log($message)
{
    logging::log_message($message, 'Core', 'DEBUG');
}

/**
 * Legacy function, previously wrote to writexml, now uses the Logger class.
 */
function gateway_log($message)
{
    logging::log_message($message, 'Gateway', 'DEBUG');
}

/**
 *  Audit log.
 */
function jomres_audit($query, $op = '')
{
    logging::log_message($query, 'Audit', 'INFO');
}

// redirect urls must be base64 encoded before they can be used, otherwise PHP parses the redirect url's task as the current task. To get around this we need to base64 encode redirect urls. Unforunately, straightforward base64 will cause Joomla to throw an error because base64 encoding uses characters that do not work well in URLs, so we'll use these custom functions to encode/decode urls.
function jr_base64url_encode($data) {
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function jr_base64url_decode($data) {
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
} 

/**
 * Redirects to $url.
 */
function jomresRedirect($url, $msg = '', $class = 'alert-info', $code = 302)
{
    logging::log_message($msg, 'Core', 'INFO');
    
	if ($msg != '' ) {
		$jomres_messages = jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messages->set_message($msg, $class);
	}

	if (!defined('AUTO_UPGRADE')) {
		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('08000'); // Optional, post run items that *must* be run ( watchers ).

		//we have to save the session data every time we redirect
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$tmpBookingHandler->close_jomres_session();
	}
	
	$jr_redirect_url = jomresGetParam($_REQUEST, 'jr_redirect_url', '');
	if ( (string)$jr_redirect_url != '') {
		$url = jr_base64url_decode($jr_redirect_url);
	}

    if (strncmp('cli', PHP_SAPI, 3) !== 0) {
        if (headers_sent() !== true) {
            if (strncmp('cgi', PHP_SAPI, 3) === 0) {
                header(sprintf('Status: %03u', $code), true, $code);
            }

            header('Location: '.$url, true, (preg_match('~^30[1237]$~', $code) > 0) ? $code : 302);
        }
        doDBClose();
        exit();
    }
}

/**
 * Sanitises the overlib output.
 */
function sanitiseOverlibOutput($data)
{
    $data = str_replace('&#39;', "'", $data);
    $data = str_replace("'", '\\&#39;', $data);

    return $data;
}

//------------------------------------
//-C O N F I G	S E T T I N G S	 ----
//------------------------------------

/**
 * Constructs the standard configuration settings for display in the config panel, then triggers events to show same configuration panels.
 */
function propertyConfiguration()
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

    $property_uid = (int) getDefaultProperty();
    $mrConfig = getPropertySpecificSettings($property_uid);
    $option = 'com_jomres';

    $componentArgs = array();
    $componentArgs[ 'mrConfig' ] = $mrConfig;
    $MiniComponents->triggerEvent('00500', $componentArgs); // Generate configuration options. Optional

    // the default view
    $lists = array();

    // make a standard yes/no list
    $yesno = array();
    $yesno[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
    $yesno[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

    if ($mrConfig[ 'newTariffModels' ] != '1' && $mrConfig[ 'newTariffModels' ] != '2') { // backward compatablity for pre-2.5 users who haven't yet visited General Configuration and clicked Save
    $mrConfig[ 'newTariffModels' ] = '2';
    }
    $tariffModels = array();
    $tariffModels[ ] = jomresHTML::makeOption(1, jr_gettext('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', false));
    $tariffModels[ ] = jomresHTML::makeOption(2, jr_gettext('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', false));
    $tariffModelsDropdown = jomresHTML::selectList($tariffModels, 'cfg_newTariffModels', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'newTariffModels' ]);

    $weekDays = array();
    $weekDays[ ] = jomresHTML::makeOption(1, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY', '_JOMRES_COM_MR_WEEKDAYS_MONDAY', false));
    $weekDays[ ] = jomresHTML::makeOption(2, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', false));
    $weekDays[ ] = jomresHTML::makeOption(3, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', false));
    $weekDays[ ] = jomresHTML::makeOption(4, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false));
    $weekDays[ ] = jomresHTML::makeOption(5, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false));
    $weekDays[ ] = jomresHTML::makeOption(6, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
    $weekDays[ ] = jomresHTML::makeOption(0, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));

    $weekendDays = array();
    $weekendDays[ ] = jomresHTML::makeOption('5', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('6', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('4,5', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('4,5,6', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('4,5,6,0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('5,6', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('5,6,0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));
    $weekendDays[ ] = jomresHTML::makeOption('6,0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));

    $jsInputDateFormats = array();
    $jsInputDateFormats[ ] = jomresHTML::makeOption('%d/%m/%Y', '01/02/2006 - 1st February 2006');
    $jsInputDateFormats[ ] = jomresHTML::makeOption('%Y/%m/%d', '2006/02/01');
    $jsInputDateFormats[ ] = jomresHTML::makeOption('%m/%d/%Y', '02/01/2006');
    $jsInputDateFormats[ ] = jomresHTML::makeOption('%d-%m-%Y', '01-02-2006');
    $jsInputDateFormats[ ] = jomresHTML::makeOption('%Y-%m-%d', '2006-02-01');
    $jsInputDateFormats[ ] = jomresHTML::makeOption('%m-%d-%Y', '02-01-2006');
    //$jsInputDateFormats[] =	jomresHTML::makeOption("%d.%m.%Y", "01.02.2006");
    $jsInputFormatDropdownList = jomresHTML::selectList($jsInputDateFormats, 'cfg_cal_input', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'cal_input' ]);

    //$slideshowDropdownList= jomresHTML::selectList($slideshowNames, 'cfg_slideshow', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['slideshow']);
    $weekdayDropdown = jomresHTML::selectList($weekDays, 'cfg_fixedArrivalDay', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedArrivalDay' ]);
    $weekenddayDropdown = jomresHTML::selectList($weekendDays, 'cfg_weekenddays', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'weekenddays' ]);

    $depAmounts = array();
    $depAmounts[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_CHARGING_DEPOSIT', '_JOMRES_COM_CHARGING_DEPOSIT', false));
    $depAmounts[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_CHARGING_FULLAMT', '_JOMRES_COM_CHARGING_FULLAMT', false));
    $paymentAmounts = jomresHTML::selectList($depAmounts, 'cfg_depAmount', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depAmount' ]);

    if (!isset($mrConfig[ 'tariffmode' ])) {
        $mrConfig[ 'tariffmode' ] = 1;
    }
    $tariffMode = array();
    $tariffMode[ ] = jomresHTML::makeOption('0', jr_gettext('JOMRES_COM_A_TARIFFMODE_NORMAL', 'JOMRES_COM_A_TARIFFMODE_NORMAL', false));

    if (isset($MiniComponents->registeredClasses[ '06002']['edit_tariff_micromanage' ])) {
        $tariffMode[ ] = jomresHTML::makeOption('2', jr_gettext('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', false));
        $tariffMode[ ] = jomresHTML::makeOption('1', jr_gettext('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'JOMRES_COM_A_TARIFFMODE_ADVANCED', false));
    }
    $tariffModeDD = jomresHTML::selectList($tariffMode, 'cfg_tariffmode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'tariffmode' ]);

    $iconsizes = array();
    $iconsizes[ ] = jomresHTML::makeOption('small', 'small');
    $iconsizes[ ] = jomresHTML::makeOption('large', 'large');
    $editIconSize = jomresHTML::selectList($iconsizes, 'cfg_editiconsize', 'size="1" class="inputbox"', 'value', 'text', $mrConfig[ 'editiconsize' ]);

    if (!isset($mrConfig[ 'booking_form_rooms_list_style' ])) {
        $mrConfig[ 'booking_form_rooms_list_style' ] = '1';
    }
    $booking_form_rooms_list = array();
    $booking_form_rooms_list[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', false));
    $booking_form_rooms_list[ ] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', false));
    $booking_form_rooms_list_style = jomresHTML::selectList($booking_form_rooms_list, 'cfg_booking_form_rooms_list_style', 'size="1" class="inputbox"', 'value', 'text', $mrConfig[ 'booking_form_rooms_list_style' ]);

    $fixedArrivalDatesRecurring = jomresHTML::integerSelectList(01, 208, 1, 'cfg_fixedArrivalDatesRecurring', 'size="1" class="inputbox"', $mrConfig[ 'fixedArrivalDatesRecurring' ], '%02d');

    if (!isset($mrConfig[ 'booking_form_daily_weekly_monthly' ])) {
        $mrConfig[ 'booking_form_daily_weekly_monthly' ] = 'D';
    }
    $pricingOutput = array();
    if ($mrConfig[ 'wholeday_booking' ] == '1') {
        $pricingOutput[ ] = jomresHTML::makeOption('D', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', false));
    } else {
        $pricingOutput[ ] = jomresHTML::makeOption('D', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', false));
    }
    $pricingOutput[ ] = jomresHTML::makeOption('W', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', false));
    $pricingOutput[ ] = jomresHTML::makeOption('M', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', false));
    $booking_form_daily_weekly_monthly = jomresHTML::selectList($pricingOutput, 'cfg_booking_form_daily_weekly_monthly', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'booking_form_daily_weekly_monthly' ]);

    //$lists['tariffmodel']= jomresHTML::selectList( $tariffmodels, 'cfg_tariffmodel', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['tariffmodel'] );

    $lists[ 'showRoomImageInBookingFormOverlib' ] = jomresHTML::selectList($yesno, 'cfg_showRoomImageInBookingFormOverlib', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomImageInBookingFormOverlib' ]);
    $lists[ 'singlePersonSuppliment' ] = jomresHTML::selectList($yesno, 'cfg_singlePersonSuppliment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'singlePersonSuppliment' ]);
    $lists[ 'perPersonPerNight' ] = jomresHTML::selectList($yesno, 'cfg_perPersonPerNight', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'perPersonPerNight' ]);
    $lists[ 'depositIsPercentage' ] = jomresHTML::selectList($yesno, 'cfg_depositIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depositIsPercentage' ]);
    $lists[ 'errorChecking' ] = jomresHTML::selectList($yesno, 'cfg_errorChecking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'errorChecking' ]);
    $lists[ 'visitorscanbookonline' ] = jomresHTML::selectList($yesno, 'cfg_visitorscanbookonline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'visitorscanbookonline' ]);
    $lists[ 'fixedPeriodBookings' ] = jomresHTML::selectList($yesno, 'cfg_fixedPeriodBookings', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedPeriodBookings' ]);
    $lists[ 'singleRoomProperty' ] = jomresHTML::selectList($yesno, 'cfg_singleRoomProperty', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'singleRoomProperty' ]);
    $lists[ 'fixedArrivalDateYesNo' ] = jomresHTML::selectList($yesno, 'cfg_fixedArrivalDateYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedArrivalDateYesNo' ]);
    $lists[ 'showAvailabilityCalendar' ] = jomresHTML::selectList($yesno, 'cfg_showAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showAvailabilityCalendar' ]);
    $lists[ 'fixedPeriodBookingsShortYesNo' ] = jomresHTML::selectList($yesno, 'cfg_fixedPeriodBookingsShortYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedPeriodBookingsShortYesNo' ]);
    $lists[ 'showExtras' ] = jomresHTML::selectList($yesno, 'cfg_showExtras', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showExtras' ]);
    $lists[ 'limitAdvanceBookingsYesNo' ] = jomresHTML::selectList($yesno, 'cfg_limitAdvanceBookingsYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'limitAdvanceBookingsYesNo' ]);
    $lists[ 'roomTaxYesNo' ] = jomresHTML::selectList($yesno, 'cfg_roomTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roomTaxYesNo' ]);
    $lists[ 'euroTaxYesNo' ] = jomresHTML::selectList($yesno, 'cfg_euroTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'euroTaxYesNo' ]);
    $lists[ 'editingOn' ] = jomresHTML::selectList($yesno, 'cfg_editingOn', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'editingOn' ]);
    //$lists['popupsAllowed'] = jomresHTML::selectList( $yesno, 'cfg_popupsAllowed', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['popupsAllowed'] );
    $lists[ 'showSlideshowLink' ] = jomresHTML::selectList($yesno, 'cfg_showSlideshowLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showSlideshowLink' ]);
    $lists[ 'showSlideshowInline' ] = jomresHTML::selectList($yesno, 'cfg_showSlideshowInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showSlideshowInline' ]);
    $lists[ 'showTariffsInline' ] = jomresHTML::selectList($yesno, 'cfg_showTariffsInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showTariffsInline' ]);
    $lists[ 'showTariffsLink' ] = jomresHTML::selectList($yesno, 'cfg_showTariffsLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showTariffsLink' ]);
    $lists[ 'useOnlinepayment' ] = jomresHTML::selectList($yesno, 'cfg_useOnlinepayment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'useOnlinepayment' ]);
    $lists[ 'showdepartureinput' ] = jomresHTML::selectList($yesno, 'cfg_showdepartureinput', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showdepartureinput' ]);
    $lists[ 'dateFormatStyle' ] = jomresHTML::selectList($yesno, 'cfg_dateFormatStyle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dateFormatStyle' ]);
    $lists[ 'calstartfrombeginningofyear' ] = jomresHTML::selectList($yesno, 'cfg_calstartfrombeginningofyear', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'calstartfrombeginningofyear' ]);
    $lists[ 'showGoogleCurrencyLink' ] = jomresHTML::selectList($yesno, 'cfg_showGoogleCurrencyLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showGoogleCurrencyLink' ]);
    $lists[ 'showRoomsInPropertyDetails' ] = jomresHTML::selectList($yesno, 'cfg_showRoomsInPropertyDetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomsInPropertyDetails' ]);
    $lists[ 'showRoomsListingLink' ] = jomresHTML::selectList($yesno, 'cfg_showRoomsListingLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomsListingLink' ]);
    $lists[ 'showOnlyAvailabilityCalendar' ] = jomresHTML::selectList($yesno, 'cfg_showOnlyAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showOnlyAvailabilityCalendar' ]);
    $lists[ 'registeredUsersOnlyCanBook' ] = jomresHTML::selectList($yesno, 'cfg_registeredUsersOnlyCanBook', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'registeredUsersOnlyCanBook' ]);
    $lists[ 'roundupDepositYesNo' ] = jomresHTML::selectList($yesno, 'cfg_roundupDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roundupDepositYesNo' ]);
    $lists[ 'chargeDepositYesNo' ] = jomresHTML::selectList($yesno, 'cfg_chargeDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'chargeDepositYesNo' ]);
    $lists[ 'tariffChargesStoredWeeklyYesNo' ] = jomresHTML::selectList($yesno, 'cfg_tariffChargesStoredWeeklyYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ]);
    $lists[ 'roomslistinpropertydetails' ] = jomresHTML::selectList($yesno, 'cfg_roomslistinpropertydetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roomslistinpropertydetails' ]);
    $lists[ 'verbosetariffinfo' ] = jomresHTML::selectList($yesno, 'cfg_verbosetariffinfo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'verbosetariffinfo' ]);

    $lists[ 'bookingform_overlib_tariff_title_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_title_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_title_show' ]);
    $lists[ 'bookingform_overlib_tariff_desc_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_desc_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_desc_show' ]);
    $lists[ 'bookingform_overlib_tariff_rate_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_rate_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_rate_show' ]);
    $lists[ 'bookingform_overlib_tariff_starts_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_starts_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_starts_show' ]);
    $lists[ 'bookingform_overlib_tariff_ends_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_ends_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_ends_show' ]);
    $lists[ 'bookingform_overlib_tariff_mindays_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_mindays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_mindays_show' ]);
    $lists[ 'bookingform_overlib_tariff_maxdays_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_maxdays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_maxdays_show' ]);
    $lists[ 'bookingform_overlib_tariff_minpeeps_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_minpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_minpeeps_show' ]);
    $lists[ 'bookingform_overlib_tariff_maxpeeps_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_maxpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_maxpeeps_show' ]);

    $lists[ 'bookingform_overlib_room_number_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_number_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_number_show' ]);
    $lists[ 'bookingform_overlib_room_name_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_name_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_name_show' ]);
    $lists[ 'bookingform_overlib_room_type_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_type_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_type_show' ]);
    $lists[ 'bookingform_overlib_room_floor_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_floor_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_floor_show' ]);
    $lists[ 'bookingform_overlib_room_maxpeople_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_maxpeople_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_maxpeople_show' ]);
    $lists[ 'bookingform_overlib_room_features_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_features_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_features_show' ]);

    $lists[ 'bookingform_roomlist_showroomno' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showroomno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showroomno' ]);
    $lists[ 'bookingform_roomlist_showroomname' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showroomname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showroomname' ]);
    $lists[ 'bookingform_roomlist_showtarifftitle' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showtarifftitle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showtarifftitle' ]);
    $lists[ 'supplimentChargeIsPercentage' ] = jomresHTML::selectList($yesno, 'cfg_supplimentChargeIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'supplimentChargeIsPercentage' ]);

    $lists[ 'bookingform_requiredfields_name' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_name', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_name' ]);
    $lists[ 'bookingform_requiredfields_surname' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_surname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_surname' ]);
    $lists[ 'bookingform_requiredfields_houseno' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_houseno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_houseno' ]);
    $lists[ 'bookingform_requiredfields_street' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_street', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_street' ]);
    $lists[ 'bookingform_requiredfields_town' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_town', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_town' ]);
    $lists[ 'bookingform_requiredfields_postcode' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_postcode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_postcode' ]);
    $lists[ 'bookingform_requiredfields_region' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_region', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_region' ]);
    $lists[ 'bookingform_requiredfields_country' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_country', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_country' ]);
    $lists[ 'bookingform_requiredfields_tel' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_tel', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_tel' ]);
    $lists[ 'bookingform_requiredfields_mobile' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_mobile', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_mobile' ]);
    $lists[ 'bookingform_requiredfields_email' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_email', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_email' ]);

    $lists[ 'bookingform_roomlist_showdisabled' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showdisabled', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showdisabled' ]);
    $lists[ 'bookingform_roomlist_showmaxpeople' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showmaxpeople', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showmaxpeople' ]);

    $lists[ 'use_variable_deposits' ] = jomresHTML::selectList($yesno, 'cfg_use_variable_deposits', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'use_variable_deposits' ]);

    $lists[ 'prices_inclusive' ] = jomresHTML::selectList($yesno, 'cfg_prices_inclusive', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'prices_inclusive' ]);
    $lists[ 'wholeday_booking' ] = jomresHTML::selectList($yesno, 'cfg_wholeday_booking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'wholeday_booking' ]);
    $lists[ 'depositIsOneNight' ] = jomresHTML::selectList($yesno, 'cfg_depositIsOneNight', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depositIsOneNight' ]);

    $lists[ 'requireApproval' ] = jomresHTML::selectList($yesno, 'cfg_requireApproval', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'requireApproval' ]);
	$lists[ 'hide_local_address' ] = jomresHTML::selectList($yesno, 'cfg_hide_local_address', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'hide_local_address' ]);

    if (!isset($mrConfig[ 'auto_detect_country_for_booking_form' ])) {
        $mrConfig[ 'auto_detect_country_for_booking_form' ] = '1';
    }

    $lists[ 'auto_detect_country_for_booking_form' ] = jomresHTML::selectList($yesno, 'cfg_auto_detect_country_for_booking_form', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'auto_detect_country_for_booking_form' ]);

    $lists[ 'showPfeaturesCategories' ] = jomresHTML::selectList($yesno, 'cfg_showPfeaturesCategories', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'showPfeaturesCategories' ]);
    $lists[ 'currency_symbol_swap' ] = jomresHTML::selectList($yesno, 'cfg_currency_symbol_swap', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'currency_symbol_swap' ]);

    $componentArgs = array();
    $componentArgs[ 'mrConfig' ] = $mrConfig;
    $componentArgs[ 'lists' ] = $lists;
    $componentArgs[ 'weekdayDropdown' ] = $weekdayDropdown;
    $componentArgs[ 'jsInputFormatDropdownList' ] = $jsInputFormatDropdownList;
    $componentArgs[ 'weekenddayDropdown' ] = $weekenddayDropdown;
    //$componentArgs['templateNamesDropdownList']=$templateNamesDropdownList;
    $componentArgs[ 'paymentAmounts' ] = $paymentAmounts;
    $componentArgs[ 'editIconSize' ] = $editIconSize;
    $componentArgs[ 'fixedArrivalDatesRecurring' ] = $fixedArrivalDatesRecurring;
    $componentArgs[ 'tariffModelsDropdown' ] = $tariffModelsDropdown;
    $componentArgs[ 'jomresConfig_live_site' ] = get_showtime('live_site');
    $componentArgs[ 'tariffModeDD' ] = $tariffModeDD;
    $componentArgs[ 'booking_form_rooms_list_style' ] = $booking_form_rooms_list_style;
    $componentArgs[ 'booking_form_daily_weekly_monthly' ] = $booking_form_daily_weekly_monthly;

    ob_start();

    // The following javascript is for selecting currency codes
    ?>

		<form action="<?php echo JOMRES_SITEPAGE_URL_NOSEF ?>" method="post" name="adminForm">
			<h2 class="page-header"><?php echo jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC', '_JOMRES_COM_MR_GENERALCONFIGDESC'); ?></h2>
			<?php

            $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
    $jrtb = $jrtbar->startTable();

    $jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.''), '');
    $jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_business_settings');
    $jrtb .= $jrtbar->endTable();

    $output[ 'JOMRESTOOLBAR' ] = $jrtb;

    echo '<div class="well clearfix"><div class="pull-left">'.$output[ 'JOMRESTOOLBAR' ].'</div></div>';

    if (!using_bootstrap()) {
        $configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel');
    } else {
        $bs_version = jomres_bootstrap_version();
        if ($bs_version == '2') {
            $configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel');
        } elseif ($bs_version == '3') {
            $configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel_bootstrap3');
        }
    }

    $componentArgs[ 'configurationPanel' ] = $configurationPanel;

    $configurationPanel->startTabs();

    $MiniComponents->triggerEvent('00501', $componentArgs); // Generate configuration options tabs

            $configurationPanel->endTabs(); ?>
			<input type="hidden" name="no_html" value="1">
			<input type="hidden" name="task" value="save_business_settings"/>
			<input type="hidden" name="option" value="<?php echo $option; ?>"/>
			<input type="hidden" name="cfg_version" value="<?php echo $mrConfig[ 'version' ]; ?>"/>
			<input type="hidden" name="cfg_jomresdotnet" value="<?php echo $mrConfig[ 'jomresdotnet' ]; ?>"/>
			<input type="hidden" name="property_uid" value="<?php echo $property_uid; ?>"/>
			<?php
            foreach ($mrConfig as $k => $v) {
                echo '<input type="hidden" name="oldsetting_cfg_'.$k.'" value="'.$v.'" />';
                echo '';
            } ?>
		</form>

	<?php
    ob_end_flush();
}

/**
 * Takes settings from the configuration and saves (most of them) to the jomres_settings table.
 */
function savePropertyConfiguration()
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $MiniComponents->triggerEvent('00502', array()); // This trigger allows plugins to check saves, for example to prevent future changes to a setting once it's been made.

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $property_uid = (int)getDefaultProperty();
	
	if ($property_uid == 0) {
		return false;
	}

    $mrConfig = getPropertySpecificSettings($property_uid);

    $tariffmodeChange = false;
    if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '1' && $_POST[ 'cfg_tariffmode' ] == '2') { // Advanced  -> micromanage
        echo 'Deleting old tariffs';
        removeAllPropertyTariffs($property_uid);
        $tariffmodeChange = true;
    }
    if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '0' && $_POST[ 'cfg_tariffmode' ] == '2') { // Normal  -> micromanage
        echo 'Deleting old tariffs';
        removeAllPropertyTariffs($property_uid);
        $tariffmodeChange = true;
    }
    if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '2' && ($_POST[ 'cfg_tariffmode' ] == '0' || $_POST[ 'cfg_tariffmode' ] == '1')) { // Micromanage  -> normal/advanced
        echo 'Deleting old tariffs';
        removeAllPropertyEnhanceTariffsXref($property_uid);
        $tariffmodeChange = true;
    }
    if (($_POST[ 'oldsetting_cfg_tariffmode' ] == '1' || $_POST[ 'oldsetting_cfg_tariffmode' ] == '2') && $_POST[ 'cfg_tariffmode' ] == '0') { // Advanced/Micromanage  -> normal
        echo 'Deleting old tariffs';
        removeAllPropertyTariffs($property_uid);
        removeAllPropertyEnhanceTariffsXref($property_uid);
        $tariffmodeChange = true;
    }
    if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '0' && $_POST[ 'cfg_tariffmode' ] != '0') {
        $tariffmodeChange = true;
    }

    // If the minimum deposit percentage setting is set, then these options cannot be altered, instead we will force them so that Deposits are always charged, the "deposit is one night's value" setting cannot be used, and of course we'll force the Deposit is Percentage setting to true
    if (!isset($jrConfig[ 'minimum_deposit_percentage' ])) {
        $jrConfig[ 'minimum_deposit_percentage' ] = 0;
    }

    if ((int) $jrConfig[ 'minimum_deposit_percentage' ] > 0) {
        $_POST[ 'cfg_chargeDepositYesNo' ] = 1;
        $_POST[ 'cfg_depositIsOneNight' ] = 0;
        $_POST[ 'cfg_depositIsPercentage' ] = 1;

        if ((int) $_POST[ 'cfg_depositValue' ] < $jrConfig[ 'minimum_deposit_percentage' ]) {
            $_POST[ 'cfg_depositValue' ] = (int) $jrConfig[ 'minimum_deposit_percentage' ];
        }
    }

    $update_count = 0;
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'cfg_') === 0 && $k != 'cfg_jomres_licensekey') {
            $v = jomresGetParam($_POST, $k, '');
            $dirty = (string) $k;
            $k = addslashes($dirty);
            if (!get_magic_quotes_gpc()) {
                $v = filter_var($v, FILTER_SANITIZE_SPECIAL_CHARS);
            }

            if (substr($k, 4) == 'encKey') {
                //saveKey($v); // Commented out, the function is no longer available, however keeping the IF statement here allows to be absolutely sure that if encKey is set (by a very naughty person) then nothing is done.
            } else {
                $oldSettingKey = 'oldsetting_'.$k;
                $oldSettingVal = $_POST[ $oldSettingKey ];

                if ($oldSettingVal != $v) {
                    $query = "SELECT uid FROM #__jomres_settings WHERE property_uid = '".(int) $property_uid."' and akey = '".substr($k, 4)."'";
                    $result = doSelectSql($query);
                    if (empty($result)) {
                        $query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int) $property_uid."','".substr($k, 4)."','".$v."')";
                    } else {
                        $query = "UPDATE #__jomres_settings SET `value`='".$v."' WHERE property_uid = '".(int) $property_uid."' and akey = '".substr($k, 4)."'";
                    }
                    doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', false));
                    $update_count ++;
                }
            }
        }
    }

    if ( $update_count > 0 ) {
        $webhook_notification                               = new stdClass();
        $webhook_notification->webhook_event                = 'property_settings_updated';
        $webhook_notification->webhook_event_description    = 'Logs when property settings are updated.';
        $webhook_notification->webhook_event_plugin         = 'core';
        $webhook_notification->data                         = new stdClass();
        $webhook_notification->data->property_uid           = $property_uid;
        add_webhook_notification($webhook_notification);
    }

    if (trim($_POST['cfg_property_vat_number']) != '') {
        jr_import('vat_number_validation');
        $validation = new vat_number_validation($property_uid, false);
        $validation->vies_check(filter_var($_POST['cfg_property_vat_number'], FILTER_SANITIZE_SPECIAL_CHARS));
        $validation->save_subject($type = 'property', array('property_uid' => $property_uid));
    }
	
	return true;
}

/**
 * Remove old tables
 */
function removeAllPropertyEnhanceTariffsXref($property_uid)
{
    $query = 'DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE property_uid = '.(int) $property_uid;
    doInsertSql($query, '');
    $query = 'DELETE FROM #__jomcomp_tarifftypes WHERE property_uid = '.(int) $property_uid;
    doInsertSql($query, '');
}

/**
 * Remove old tables
 */
function removeAllPropertyTariffs($property_uid)
{
    $query = "DELETE FROM #__jomres_rates WHERE property_uid = '".(int) $property_uid."'";
    doInsertSql($query, '');
}

/**
 * Remove old tables
 */
function removeAllPropertyRooms($property_uid)
{
    $query = "DELETE FROM #__jomres_rooms WHERE propertys_uid = '".(int) $property_uid."'";
    doInsertSql($query, '');
}

/**
 * User has been logged out (or has attempted to access functionality illegally).
 */
function userHasBeenLoggedOut()
{
    echo '<center><img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" />';
    echo '<img src="'.JOMRES_IMAGES_RELPATH.'Secured.png" align="middle" border="0" />';
    echo '<img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" /></center><br />';
    echo '<h2>'.jr_gettext('_JOMRES_JR_NOTLOGGEDIN', '_JOMRES_JR_NOTLOGGEDIN').'</h2>';
    echo '<center><img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" />';
    echo '<img src="'.JOMRES_IMAGES_RELPATH.'Secured.png" align="middle" border="0" />';
    echo '<img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" /></center><br />';
}

/**
 * Triggers the insert booking mini-comp 03020.
 */
function insertInternetBooking($jomressession = '', $depositPaid = false, $confirmationPageRequired = true, $customTextForConfirmationForm = '', $usejomressessionasCartid = false)
{
    $jomressession = get_showtime('jomressession');
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
	$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

    gateway_log('insertInternetBooking: Attempting to insert booking jsid: '.get_showtime('jomressession'));
    if ($tmpBookingHandler->getBookingFieldVal('cart_payment')) { // I'm probably being lazy, creating this condition like this, but I'd rather keep things clear in my own mind atm, it can be tidied up later
        $insert_failed = false;

        foreach ($tmpBookingHandler->cart_data as $key => $cart_data) {
            $tmpBookingHandler->tmpbooking = $cart_data;
            $tmpBookingHandler->tmpguest = $cart_data[ 'tmpguest' ];
            $componentArgs = array('jomressession' => get_showtime('jomressession'), 'depositPaid' => $depositPaid, 'usejomressessionasCartid' => $usejomressessionasCartid);
            $result = $MiniComponents->triggerEvent('03020', $componentArgs); // Trigger the insert booking mini-comp
            gateway_log('insertInternetBooking: '.serialize($MiniComponents->miniComponentData[ '03020' ]));
            if (!$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ]) {
                $insert_failed = true;
            }
            $tmpBookingHandler->resetTempBookingData();
            $tmpBookingHandler->resetTempGuestData();
        }

        gateway_log('insertInternetBooking: Insert successful ');
        if ($confirmationPageRequired && !$insert_failed) {
            gateway_log('insertInternetBooking:Outputting confirmation page ');
            $property_uid = (int) $tmpBookingHandler->getBookingFieldVal('property_uid');
            $componentArgs = array('property_uid' => $property_uid);
            $componentArgs = array('customText' => $customTextForConfirmationForm);
            $MiniComponents->triggerEvent('03030', $componentArgs); // Booking completed message
            if ($thisJRUser->userIsManager) {
                echo jr_gettext('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE').'<br />';
                $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
                $jrtb = $jrtbar->startTable();
                $jrtb .= $jrtbar->toolbarItem('edit_booking', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_deposit&contractUid='.$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'contract_uid' ]), '');
                $jrtb .= $jrtbar->endTable();
                echo $jrtb;
            }
            gateway_log('<h2>Resetting temp booking data</h2>');
        }
        $tmpBookingHandler->resetCart();

        return $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ];
    } else {
        $componentArgs = array('jomressession' => get_showtime('jomressession'), 'depositPaid' => $depositPaid, 'usejomressessionasCartid' => $usejomressessionasCartid);
        $result = $MiniComponents->triggerEvent('03020', $componentArgs); // Trigger the insert booking mini-comp
        gateway_log('insertInternetBooking: '.serialize($MiniComponents->miniComponentData[ '03020' ]));
        if ($MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ]) {
            gateway_log('insertInternetBooking: Insert successful ');
            if ($confirmationPageRequired) {
                gateway_log('insertInternetBooking:Outputting confirmation page ');
                $property_uid = (int) $tmpBookingHandler->getBookingFieldVal('property_uid');
                $componentArgs = array('property_uid' => $property_uid);
                $componentArgs = array('customText' => $customTextForConfirmationForm);
                $MiniComponents->triggerEvent('03030', $componentArgs); // Booking completed message
                if ($thisJRUser->userIsManager) {
                    echo jr_gettext('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE').'<br />';
                    $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
                    $jrtb = $jrtbar->startTable();
                    $jrtb .= $jrtbar->toolbarItem('edit_booking', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_deposit&contractUid='.$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'contract_uid' ]), '');
                    $jrtb .= $jrtbar->endTable();
                    echo $jrtb;
                }
            }

            gateway_log('<h2>Resetting temp booking data</h2>');
            $tmpBookingHandler->resetTempBookingData();

            return $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ];
        } else { // If there's a failure at this point it shouldn't be because the guest cancelled at any stage. This is intended to trap errors that shouldn't be passed to the guest on the site
            $subject = "Insert of booking failed. Likely caused by a database insert function failure.\n\n";
            gateway_log($subject);
        }
    }

    return false;
}

/**
 * Used during the insert internet booking phase. Takes guest data from the tmpbookings table and inserts it into the guests table (or updates same, depending on the value of $existing_id).
 */
function insertGuestDeets($jomressession)
{

    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $xCustomers = $tmpBookingHandler->getGuestData();

    if (isset($xCustomers[ 'guests_uid' ])) {
        $guests_uid = (int) $xCustomers[ 'guests_uid' ];
    }

    $mos_userid = (int) $xCustomers[ 'mos_userid' ];
    $existing_id = (int) $xCustomers[ 'existing_id' ];
    $email = $xCustomers[ 'email' ];
    $firstname = $xCustomers[ 'firstname' ];
    $surname = $xCustomers[ 'surname' ];
    $house = $xCustomers[ 'house' ];
    $street = $xCustomers[ 'street' ];
    $town = $xCustomers[ 'town' ];
    $region = $xCustomers[ 'region' ];
    $country = $xCustomers[ 'country' ];
    $postcode = $xCustomers[ 'postcode' ];
    $landline = $xCustomers[ 'tel_landline' ];
    $mobile = $xCustomers[ 'tel_mobile' ];

    $property_uid = (int) $tmpBookingHandler->getBookingPropertyId($tmpBookingHandler);
    $defaultProperty = $property_uid;
    
    if ($mos_userid == 0) {
        if (!$thisJRUser->userIsManager && $thisJRUser->id > 0) {
            $mos_userid = $thisJRUser->id;
        } elseif (!$thisJRUser->userIsManager && $thisJRUser->id == 0) {
            $mos_userid = 0;
        }
    }

    if ($thisJRUser->is_partner) {
        $mos_userid = 0;
    }

    if ($mos_userid > 0) {
        $query = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int) $mos_userid."' AND `property_uid`= $property_uid LIMIT 1";
        $xistingGuests = doSelectSql($query);
        if (!empty($xistingGuests)) {
            foreach ($xistingGuests as $g) {
                $guests_uid = $g->guests_uid;
            }
        } else {
            $guests_uid = 0;
        }
    } elseif ($existing_id > 0) {
        $guests_uid = $existing_id;
    } else {
        $guests_uid = 0;
    }

    if ($guests_uid > 0) {
        $query = "UPDATE	#__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',
		`town`= '$town',`county`= '$region',`country`= '$country',`postcode`= '$postcode',`tel_landline`= '$landline',`tel_mobile`= '$mobile',
		`property_uid`='".(int) $property_uid."',`email`='$email'
		WHERE guests_uid = '".(int) $guests_uid."'";
        doInsertSql($query, false);
        $returnid = $guests_uid;
    } else {
        $query = 'INSERT INTO #__jomres_guests
		(`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`property_uid`,`email`';
        $query .= ',`mos_userid`';
        $query .= ") VALUES ('$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$property_uid','$email'";
        $query .= ",'".(int) $mos_userid."'";
        $query .= ')';
        $returnid = doInsertSql($query, false);
    }

    if (!$thisJRUser->is_partner) {
        // New for 4.5.9. We need now to look in the new guest profile table and see if this user already exists. If they do not, we'll take these details and add them to the profile table too, then in future the profile table's data will be used as the primary source of this guest's information, continuing to ensure that guest details are not shared between properties. No property should ever be able to access a guest's details unless that guest has already booked with that property.
        // First, we'll look at this user's id. If it's the same as mos_userid above, then the user making the booking is a guest.
        if (($thisJRUser->id == $mos_userid && $thisJRUser->id > 0) || ($mos_userid > 0 && isset($_REQUEST['jsid']))) { // Either it's the guest making the booking, or it's a gateway call and the user's a registered user. Either way, we can update the profile table.
            if ($thisJRUser->profile_id == 0) { // The guest doesn't have information in the profile table yet.
                $query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`,`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`email`) VALUES ('".(int) $mos_userid."','$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$email')";
                doInsertSql($query, '');
            }
        }
    }

    if (!$returnid) {
        echo 'Error saving users details';
        exit;
    }

    if ($thisJRUser->is_partner) {
        $query = 'UPDATE #__jomres_guests SET `partner_id`='.$thisJRUser->id." WHERE guests_uid = '".(int) $returnid."'";
        doInsertSql($query, '');
    }

    return $returnid;
}

/**
 * Receives a date yyyy/mm/dd from the system and converts it to the configured output format.
 */
function outputDate($thedate)
{
    // Assumes the date $theDate comes from the system in the format YYYY/mm/dd

    if (function_exists('jomres_cmsspecific_output_date')) {
        $thedate = str_replace('/', '-', $thedate);

        $formattedDate = jomres_cmsspecific_output_date($thedate);
    } else {
        $mrConfig = getPropertySpecificSettings();
        $date_elements = explode('/', $thedate);
        $unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
        if ($mrConfig[ 'dateFormatStyle' ] == '1') {
            $formattedDate = date($mrConfig[ 'cal_output' ], $unixDate);
        } else {
            $formattedDate = strftime($mrConfig[ 'cal_output' ], $unixDate);
        }
    }

    return $formattedDate;
}

/**
 * Makes the date for display in the javascript calendar. Will receive a yyyy/mm/dd formatted string and output it in the format desired by configuration settings.
 */
function JSCalmakeInputDates($inputDate, $siteCal = false)
{
    $mrConfig = getPropertySpecificSettings();
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    // Lets make the calendar dates for display in the js calendar. will receive a Y/m/d formatted string &	output it in the desired format
    // m d y. Probably unneccesary, but we'll do it anyway, to be on the safe side.
    $date_elements = explode('/', $inputDate);
    $unixDate = mktime(0, 0, 0, (int)$date_elements[ 1 ], (int)$date_elements[ 2 ], (int)$date_elements[ 0 ]);

    $dateFormat = $jrConfig[ 'cal_input' ];
    switch ($dateFormat) {
        case '%d/%m/%Y':
            $theDate = date('d/m/Y', $unixDate);
            break;
        case '%Y/%m/%d':
            $theDate = date('Y/m/d', $unixDate);
            break;
        case '%m/%d/%Y':
            $theDate = date('m/d/Y', $unixDate);
            break;
        case '%d-%m-%Y':
            $theDate = date('d-m-Y', $unixDate);
            break;
        case '%Y-%m-%d':
            $theDate = date('Y-m-d', $unixDate);
            break;
        case '%m-%d-%Y':
            $theDate = date('m-d-Y', $unixDate);
            break;
        case '%d.%m.%Y':
            $theDate = date('d.m.Y', $unixDate);
            break;
        default:
            echo 'Error in date format. Cannot continue. If you have just installed Jomres you should log into the frontend as a property manager. This will set up sufficient data so that you can proceed.';
            exit;
            break;
    }

    return $theDate;
}

/**
 * Converts a date that was supplied by the javascript calendar into yyyy/mm/dd for the system to use.
 */
function JSCalConvertInputDates($inputDate, $siteCal = false)
{
    if ($inputDate == '') {
        return '';
    }
    // Lets convert the input calendar dates to Y/m/d
    $mrConfig = getPropertySpecificSettings();
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $dateFormat = $jrConfig[ 'cal_input' ];
    switch ($dateFormat) {
        case '%d/%m/%Y':
            $date_elements = explode('/', $inputDate);
            $unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
            break;
        case '%Y/%m/%d':
            $date_elements = explode('/', $inputDate);
            $unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
            break;
        case '%m/%d/%Y':
            $date_elements = explode('/', $inputDate);
            $unixDate = mktime(0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ]);
            break;
        case '%d-%m-%Y':
            $date_elements = explode('-', $inputDate);
            $unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
            break;
        case '%Y-%m-%d':
            $date_elements = explode('-', $inputDate);
            $unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
            break;
        case '%m-%d-%Y':
            $date_elements = explode('-', $inputDate);
            $unixDate = mktime(0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ]);
            break;
        case '%d.%m.%Y':
            $date_elements = explode('.', $inputDate);
            $unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
            break;
        default:
            echo 'Error in date format. Cannot continue.';
            exit;
            break;
    }
    $theDate = date('Y/m/d', $unixDate);

    return $theDate;
}

//--------------------------------------
//-E D I T	G A T E W A Y
//--------------------------------------

/**
 * Imports settings from jomres_config.php for new properties, or import settings into the db during install.
 */
//--------------------------------------
//-I M P O R T	S E T T I N G S
//--------------------------------------

function importSettings($property_uid, $source_property_uid = 0)
{
    $mrConfig = getPropertySpecificSettings();
    if ($property_uid == 0) { // We're installing, so all settings will be inserted from jomres_config.php into the database. We'll use property_uid 0 to create baseline settings that all other properties will use as their default when they call getPropertySpecificSettings
        include JOMRESPATH_BASE.JRDS.'jomres_config.php';
        foreach ($mrConfig as $k => $v) {
            if (!insertSetting(0, $k, $v)) {
                error_logging("Error, couldn't import setting ".$k.' - '.$v.' for property uid 0 into the jomres_settings table ');
            }
        }
    } else { // We have created a new property and are inserting their default settings into the db by pulling the default settings from the 0 property uid list
        $query = 'SELECT akey,value FROM #__jomres_settings WHERE property_uid = '.$source_property_uid." AND akey = '".$k."'";
        $settingsList = doSelectSql($query);
        foreach ($settingsList as $set) {
            if (!insertSetting($property_uid, $set->akey, $set->value)) {
                error_logging("Error, couldn't import setting ".$set->akey.' - '.$set->value.' for property uid '.$property_uid.' into the jomres_settings table ');
            }
        }
    }

    return;
}


/**
 * Inserts or updates a plugin's settings
 */
function insertSetting($property_uid, $k, $v)
{
    $query = "SELECT value FROM #__jomres_settings WHERE property_uid = '".(int) $property_uid."' AND akey = '".$k."'";
    $settingsList = doSelectSql($query);
    if (empty($settingsList)) {
        $query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int) $property_uid."','".$k."','".$v."')";
    } else {
        $query = "UPDATE #__jomres_settings SET `value`='".$v."' WHERE property_uid = '".(int) $property_uid."' and akey = '".$k."'";
    }

    return doInsertSql($query, '');
}

//-------------------------------
// G A T E W A Y	C O N F I G ---
//-------------------------------

/**
 * Saves a plugin's settings.
 */
function savePlugin($plugin)
{
    $defaultProperty = getDefaultProperty();
    foreach ($_POST as $k => $v) {
        $dirty = (string) $k;
        $k = RemoveXSS($dirty);
        if ($k != 'task' && $k != 'plugin') {
            $values[ $k ] = jomresGetParam($_POST, $k, '');
        }
    }
    foreach ($values as $k => $v) {
        $query = "SELECT id FROM #__jomres_pluginsettings WHERE prid = '".(int) $defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
        $settingList = doSelectSql($query);
        if (!empty($settingList)) {
            /*
            foreach ($settingList as $set)
                {
                $id=$set->id;
                }
            */
            $query = "UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = '".(int) $defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
            doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', false));
        } else {
            $query = "INSERT INTO #__jomres_pluginsettings
				(`prid`,`plugin`,`setting`,`value`) VALUES
				('" .(int) $defaultProperty."','$plugin','$k','$v')";
            doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_INSERT', '_JOMRES_MR_AUDIT_PLUGINS_INSERT', false));
        }
    }
    $tmpl = new patTemplate();
    $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
    $tmpl->readTemplatesFromInput('plugin_save.html');
    $tmpl->displayParsedTemplate();
}

/**
 * Returns the property's name when passed a property uid.
 */
function getPropertyName($property_uid)
{
    $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
    if ((int) $property_uid == 0) {
        return '';
    }

    return $current_property_details->get_property_name($property_uid);
}

/**
 * Works out the difference between two dates in days.
 */
function dateDiff($interval, $first_date, $second_date)
{
    $a = explode('/', $first_date);
    $b = explode('/', $second_date);

    if (strlen($a[0]) < 4 || strlen($b[0]) < 4) {
        return 1;
    }

    if (checkdate($a[1], $a[2], $a[0]) && checkdate($b[1], $b[2], $b[0])) {
        $datetime1 = new DateTime($first_date);
        $datetime2 = new DateTime($second_date);
        $diff = $datetime1->diff($datetime2);

        switch ($interval) {
            case 'd':
                return $diff->days;
                break;
            case 'w':
                return $diff->weeks;
                break;
            default:
                return $diff->days;
                break;
            }
    }

    return 1;
}

/**
 * Used by edit resource script to show room image
 *
 * Update functionality in j06002edit_resource.class.php to use modern functionality and remove this function
 *
 */
function getImageForProperty($imageType, $property_uid, $itemUid)
{
    $fileLocation = false;
    switch ($imageType) {
        case 'property':
            $default_image = JOMRES_IMAGES_RELPATH.'jrlogo.png';
            if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.'_property_'.$itemUid.'.jpg')) {
                $fileLocation = JOMRES_IMAGELOCATION_RELPATH.$property_uid.'_property_'.$property_uid.'.jpg';
            } else {
                $fileLocation = $default_image;
            }
            break;
        case 'room':
            $default_image = JOMRES_IMAGES_RELPATH.'noimage.gif';
            if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.'_room_'.$itemUid.'.jpg')) {
                $fileLocation = JOMRES_IMAGELOCATION_RELPATH.$property_uid.'_room_'.$itemUid.'.jpg';
            } else {
                $fileLocation = $default_image;
            }
            break;
        default:
            return false;
    }

    return $fileLocation;
}

/**
 * Constructs the mrConfig data when passed a property uid.
 */
function getPropertySpecificSettings($property_uid = null)
{
    $mrConfig = array();

    $propertyConfig = jomres_singleton_abstract::getInstance('jomres_config_property_singleton');

    if ($propertyConfig->property_uid == 0) {
        $propertyConfig->init($property_uid);
    }

    if ($property_uid == null) {
        $mrConfig = $propertyConfig->get();
    } else {
        if ((int)$property_uid != (int)$propertyConfig->property_uid) {
            $propertyConfig->load_property_config($property_uid);
            $mrConfig = $propertyConfig->get();
        } else {
            $mrConfig = $propertyConfig->get();
        }
    }

    return $mrConfig;
}

/**
 * Generic or creation function. Pass a number of ids and the field you're searching on, will return ( `xyx`='1' OR `xyx`='2' OR`xyx`='3' ) etc.
 */
function genericOr($idArray, $fieldToSearch, $idArrayisInteger = true)
{
    $newArr = array();
    foreach ($idArray as $id) {
        $newArr[ ] = $id;
    }
    $idArray = $newArr;
    $txt = ' ( `'.$fieldToSearch.'`=';
    for ($i = 0, $n = count($idArray); $i < $n; ++$i) {
        if ($idArrayisInteger) {
            $id = (int) $idArray[ $i ];
        } else {
            $id = $idArray[ $i ];
        }
        $txt .= " '$id' ";
        if ($i < count($idArray) - 1) {
            $txt .= ' OR `'.$fieldToSearch.'`= ';
        }
    }
    $txt .= ' ) ';

    return $txt;
}

/**
 * Publish the user's property. Toggle action.
 */
function publishProperty()
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();
	
	$defaultProperty = jomresGetParam($_REQUEST, 'property_uid', 0);
	
	if ($defaultProperty == 0) {
		$defaultProperty = getDefaultProperty();
	}
	
	if ($defaultProperty == 0) {
		return false;
	}

    $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
    $current_property_details->gather_data($defaultProperty);
	
	$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
	$jomres_properties->propertys_uid = $defaultProperty;
    
	if (!$current_property_details->approved) {
        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=cannot_redirect'), '');
    } else {
        $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');

        if (in_array($defaultProperty, $thisJRUser->authorisedProperties)) {
            if ($current_property_details->published) {
				if ($jomres_properties->setPublished(0)) {                
					$MiniComponents->triggerEvent('02274'); // Optional trigger after property unpublished
				
					$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', false));
				} else {
					$jomres_messaging->set_message('There was a problem unpublishing the property.');
					
					return false;
				}
            } else {
				if ($jomres_properties->setPublished(1)) {
					$MiniComponents->triggerEvent('02273'); // Optional trigger after property published
                    
					$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', false));
				} else {
					$jomres_messaging->set_message('There was a problem publishing the property.');
					
					return false;
				}
            }
        } else {
            echo "You naughty little tinker, that's not your property";
			
			return false;
        }
		
		return true;
    }       
}

//-----------------------------------------------------------------
//-E D I T	R O O M S	A N D	P R O P E R T Y	D E T A I L S
//-----------------------------------------------------------------

/**
 * Returns the editor area as a text string for inclusion in a template
 */
function editorAreaText($name, $content, $hiddenField, $width, $height, $col, $row)
{
    return jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row);
}

/**
 * Increments the pcounter table when a property clicked and sets a cookie to say that this user has clicked this property.
 */
function propertyClicked($p_uid)
{
    //$sessionCookieName	= md5( 'site'.get_showtime('live_site'));
    $cookiename = "jomresp$p_uid";
    $alreadyClicked = jomresGetParam($_COOKIE, $cookiename, '0');
    if (!$alreadyClicked) {
        @setcookie($cookiename, '1', time() + 60 * 60 * 24 * 30);
        $query = "INSERT INTO #__jomres_pcounter (`count`, `p_uid`) VALUES (1, ".(int)$p_uid.") ON DUPLICATE KEY UPDATE `count` = `count` + 1";

        if (!doInsertSql($query, '')) {
            echo 'Mysql went byebyes';
            exit();
        }
    }
}

/**
 * Makes a popup link.
 */
function makePopupLink($link, $text, $isLocalPage = true, $width = 550, $height = 500)
{
    $status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width='.$width.',height='.$height.',directories=no,location=no';
    $format = '';
    if (defined('_JOMRES_NEWJOOMLA')) {
        $format = '&tmpl='.get_showtime('tmplcomponent');
    }

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $thelink = "<a href=\"javascript:void window.open('".$link.$format."', 'win2', '".$status."');\" rel=\"nofollow\" title=\"\">".$text.'</a>';

    $thelink = str_replace('&amp;', '&', $thelink);
    $thelink = str_replace('&', '&amp;', $thelink);

    return $thelink;
}

/**
 * Triggers the property header event/mini-component.
 */
function property_header($property_uid)
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $MiniComponents->specificEvent('06000', 'show_property_header', array('property_uid' => $property_uid));
}

/**
 * Sends emails to admins.
 */
function sendAdminEmail($subject, $message, $send_post = false)
{
    $jomresConfig_mailfrom = get_showtime('mailfrom');
    $jomresConfig_fromname = get_showtime('fromname');

    $m = '';
    if (is_array($message) && !empty($message)) {
        foreach ($message as $k => $v) {
            $m .= $k.' - '.$v.'\n';
        }
        $message = $m;
    }
    if (is_object($message)) {
        $m = print_r($message);
        $message = $m;
    }

    if ($send_post) {
        $message .= "\n\n\nPost details follow (may not be applicable to email) ";
        foreach ($_POST as $key => $value) {
            $message .= "\n$key: $value";
        }
    }

    $admins = jomres_cmsspecific_getCMS_users_admin_getalladmins_ids();
    foreach ($admins as $admin) {
        jomresMailer($jomresConfig_mailfrom, $jomresConfig_fromname, $admin[ 'email' ], $subject, $message);
    }
}

/**
 * It...er...gets the month name from what is stored in the language file.
 */
function getMonthName($monthNo)
{
    $monthNo = intval($monthNo);

    return jr_gettext('_JRPORTAL_MONTHS_LONG_'.$monthNo, '_JRPORTAL_MONTHS_LONG_'.$monthNo);
}

/**
 * Used by jomres toolbar functionality to show images
 *
 * @todo this ancient stuff
 * 
 */
function makeImageValid($imageName = '')
{
    $image = str_replace('+', '%20', $imageName);
    $image = str_replace('%2F', '/', $image);

    return $image;
}

/**
 * Formats a string as a float
 *
 * @todo remove and test, doesn't seem to be used any more
 *
 */
function parseFloat($ptString)
{
    if (strlen($ptString) == 0) {
        return false;
    }

    $pString = str_replace(' ', '', $ptString);

    if (substr_count($pString, ',') > 1) {
        $pString = str_replace(',', '', $pString);
    }

    if (substr_count($pString, '.') > 1) {
        $pString = str_replace('.', '', $pString);
    }

    $pregResult = array();

    $commaset = strpos($pString, ',');
    if ($commaset === false) {
        $commaset = -1;
    }

    $pointset = strpos($pString, '.');
    if ($pointset === false) {
        $pointset = -1;
    }

    $pregResultA = array();
    $pregResultB = array();

    if ($pointset < $commaset) {
        preg_match('#(([-]?[0-9]+(\.[0-9])?)+(,[0-9]+)?)#', $pString, $pregResultA);
    }
    preg_match('#(([-]?[0-9]+(,[0-9])?)+(\.[0-9]+)?)#', $pString, $pregResultB);
    if ((isset($pregResultA[ 0 ]) && (!isset($pregResultB[ 0 ]) || strstr($preResultA[ 0 ], $pregResultB[ 0 ]) == 0 || !$pointset))) {
        $numberString = $pregResultA[ 0 ];
        $numberString = str_replace('.', '', $numberString);
        $numberString = str_replace(',', '.', $numberString);
    } elseif (isset($pregResultB[ 0 ]) && (!isset($pregResultA[ 0 ]) || strstr($pregResultB[ 0 ], $preResultA[ 0 ]) == 0 || !$commaset)) {
        $numberString = $pregResultB[ 0 ];
        $numberString = str_replace(',', '', $numberString);
    } else {
        return false;
    }
    $result = (float) $numberString;

    return $result;
}

/**
 * Quicker replacement to scandir to find directory contents
 */
function get_directory_contents($dir)  // Replacement for scandir which seems to be causing system slowdowns
{
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            $files = array();
            while (false !== ($file = readdir($handle))) {
                $files[] = $file;
            }
            closedir($handle);
            if (is_array($files)) {
                sort($files);
            }

            return $files;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

/**
 * Quicker replacement for scandir to get sub directories
 */
function scandir_getdirectories($path)
{
    $data = array();
    if (is_dir($path)) {
        foreach (get_directory_contents($path) as $dir) {
            if (is_dir($path.$dir)) {
                if ($dir != '.' && $dir != '..') {
                    $data[ ] = $dir;
                }
            }
        }
    }
	//echo "scandir_getdirectories executed for ".$path.'<br>';
    return $data;
}

/**
 * Quicker replament for scandir
 */
function scandir_getfiles($path, $extension = false)
{
    $data = array();
    if (is_dir($path)) {
        foreach (get_directory_contents($path) as $file) {
            if (is_file($path.JRDS.$file)) {
                if (!$extension) {
                    $data[ ] = $file;
                } else {
                    $filename = strtolower($file);
                    $exts = explode('.', $filename);
                    $n = count($exts) - 1;
                    $exts = $exts[ $n ];
                    if ($exts == $extension) {
                        $data[ ] = $file;
                    }
                }
            }
        }
    }
	//echo "scandir_getfiles executed for ".$path.'<br>';
    return $data;
}

// Credit : http://www.php.net/manual/en/function.scandir.php#109140
/**
 * Often used to find obsolete files, so we'll pass back an empty array if the directory does not exist
 */
function scandir_getfiles_recursive($directory, $recursive = true, $listDirs = false, $listFiles = true, $exclude = '')
{
    $arrayItems = array();
    $skipByExclude = false;
    if (!is_dir($directory)) {
        throw new Exception("Tried to scan a directory that doesn't exist ".(string) $directory);
    }
    $handle = opendir($directory);
    if ($handle) {
        while (false !== ($file = readdir($handle))) {
            preg_match("/(^(([\.]){1,2})$|(\.(svn|git|md))|(Thumbs\.db|\.DS_STORE))$/iu", $file, $skip);
            if ($exclude) {
                preg_match($exclude, $file, $skipByExclude);
            }
            if (!$skip && !$skipByExclude) {
                if (is_dir($directory.$file)) {
                    if ($recursive) {
                        $arrayItems = array_merge($arrayItems, scandir_getfiles_recursive($directory.$file.DIRECTORY_SEPARATOR, $recursive, $listDirs, $listFiles, $exclude));
                    }
                    if ($listDirs) {
                        $file = $directory.$file;
                        $arrayItems[ ] = $file;
                    }
                } else {
                    if ($listFiles) {
                        $file = $directory.$file;
                        $arrayItems[ ] = $file;
                    }
                }
            }
        }
        closedir($handle);
    }

    return $arrayItems;
}

/**
 * Is the host CMS Joomla?
 */
function this_cms_is_joomla()
{
    if (_JOMRES_DETECTED_CMS != 'joomla3' && _JOMRES_DETECTED_CMS != 'joomla4') {
        return false;
    }

    return true;
}

//----------------------------------------
//-T E X T	M O D I F I C A T I O N	 ----
//----------------------------------------

/**
 * Used by editing mode and label translation functionality to update custom text tables
 */
function updateCustomText($theConstant, $theValue, $audit = true, $property_uid = null, $language_context = '0')
{
	$custom_text = jomres_singleton_abstract::getInstance('custom_text');

    return $custom_text->updateCustomText($theConstant, $theValue, $audit, $property_uid, $language_context);
}

/**
 * Get the current domain
 */
function jomresGetDomain()
{
    $thisSvrName = $_SERVER[ 'SERVER_NAME' ];
    $dmn = str_replace('http://', '', $thisSvrName);

    //$domain=str_replace("www.","",$dmn);
    //echo "<H2>Found domain".$domain."</H2>";
    return strtolower($dmn);
}

/**
 * Creates new API keys (not to be confused with REST API keypairs) for properties
 */
function createNewAPIKey()
{
    $apikey = generateJomresRandomString();
    $keeplooking = true;
    while ($keeplooking):
        $query = "SELECT propertys_uid FROM #__jomres_propertys WHERE apikey = '".$apikey."' LIMIT 1";
    $plist = doSelectSql($query);
    $query = "SELECT manager_uid FROM #__jomres_managers WHERE apikey = '".$apikey."' LIMIT 1";
    $clist = doSelectSql($query);
    if (empty($plist) && empty($clist)) {
        $keeplooking = false;
    }
    if ($keeplooking) {
        $apikey = generateJomresRandomString();
    }
    endwhile;

    return $apikey;
}

/**
 * Creates a random string, default length 50 chars
 */
function generateJomresRandomString($length = 50)
{
    $str = '';
    // define possible characters
    //$possible = "0123456789bcdfghjkmnpqrstvwxyz";
    $possible = 'abcdfghijklmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYZ';
    // set up a counter
    $i = 0;
    // add random characters to $str until $length is reached
    while ($i < $length) {
        // pick a random character from the possible ones
        $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
        $str .= $char;
        ++$i;
    }

    return $str;
}

/**
 * Find the property manager's currently active property
 */
function getDefaultProperty()
{
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

    return (int) $thisJRUser->currentproperty;
}

/**
 * Create SEF urls, hands off to CMS specific functions to do the heavy lifting
 */
function jomresURL($link)
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $link = jomres_cmsspecific_makeSEF_URL($link);

    $link = str_replace('&amp;', '&', $link);

    return $link;
}

/**
 * Returns the guest details from the tmpguests session data.
 */
function getbookingguestdata()
{
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $userDeets = $tmpBookingHandler->getGuestData();

    return $userDeets;
}

/**
 * Returns the current Jomres version
 */
function get_jomres_current_version()
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();

    return $jrConfig[ 'version' ];
}

/**
 * Gets the latest version of Jomres from the updates server
 */
function get_latest_jomres_version($outputText = true)
{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();
	
    if (file_exists(JOMRES_TEMP_ABSPATH.'latest_version.php')) {
        $last_modified = filemtime(JOMRES_TEMP_ABSPATH.'latest_version.php');
        $seconds_timediff = time() - $last_modified;
        if ($seconds_timediff > 3600) {
            unlink(JOMRES_TEMP_ABSPATH.'latest_version.php');
        } else {
            $buffer = file_get_contents(JOMRES_TEMP_ABSPATH.'latest_version.php');
        }
    }

    if (!file_exists(JOMRES_TEMP_ABSPATH.'latest_version.php')) {
		$base_uri = 'http://updates.jomres4.net/';
		 if ($jrConfig['development_production'] == 'development') {
			$query_string = 'versions_dev.php';
		} else {
			$query_string = 'versions.php';
		}
		
		$buffer = '';

		try {
			$client = new GuzzleHttp\Client([
				'base_uri' => $base_uri
			]);

			logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');
			
			$buffer = $client->request('GET', $query_string)->getBody()->getContents();
		}
		catch (Exception $e) {
			$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
			$jomres_user_feedback->construct_message(array('message'=>'Could not get latest Jomres version', 'css_class'=>'alert-danger alert-error'));
		}

        if ($buffer != '') {
            file_put_contents(JOMRES_TEMP_ABSPATH.'latest_version.php', $buffer);
        }
    }

    if (empty($buffer)) {
        if ( $outputText )
            echo '<div class="alert alert-error alert-danger">Sorry, could not get latest version of Jomres, is there a firewall preventing communication with http://updates.jomres4.net ? Alternatively, please check that CURL is enabled on this webserver</div>';
        else
            return false;
    } else {
        return $buffer;
    }
}

/**
 * Returns true if this version is latest, otherwise returns false. outputText flag is for use by deferred tasks that will email admin if the system has been updated.
 */
function check_jomres_version( $outputText = true )
{
    $this_version = get_jomres_current_version();
    $latest_version = get_latest_jomres_version($outputText);
    if ($latest_version == false ) { // Comms error talking to Jomres.net server, can't do anything else so we'll return NULL because we don't want the system doing anything else.
        return null;
    }
    $latest_jomres_version = explode('.', $latest_version);
    $this_jomres_version = explode('.', $this_version);

    if (!isset($latest_jomres_version[ 2 ])) {
        $latest_jomres_version[ 2 ] = 0;
    }
    if (!isset($this_jomres_version[ 2 ])) {
        $this_jomres_version[ 2 ] = 0;
    }

    $latest_major_version = $latest_jomres_version[ 0 ];
    $latest_minor_version = $latest_jomres_version[ 1 ];
    $latest_revis_version = $latest_jomres_version[ 2 ];

    $current_major_version = $this_jomres_version[ 0 ];
    $current_minor_version = $this_jomres_version[ 1 ];
    $current_revis_version = $this_jomres_version[ 2 ];

    $current_version_is_uptodate = true;

    if ($current_major_version < $latest_major_version
        ) {
        $current_version_is_uptodate = false;
    }

    if ($current_major_version <= $latest_major_version && $current_minor_version <= $latest_minor_version && $current_revis_version < $latest_revis_version
        ) {
        $current_version_is_uptodate = false;
    }

    if ($current_major_version <= $latest_major_version && $current_minor_version < $latest_minor_version
        ) {
        $current_version_is_uptodate = false;
    }

    return $current_version_is_uptodate;
}


function development_mode_test()
{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();

    if ($jrConfig[ 'development_production' ] != 'production') { // The default is 1000 on most installations
        $highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
        $response = "<div class='".$highlight."'>Be aware that you are using the site with Development mode enabled. Unless you are a developer we do not advise that you leave this setting enabled. To change it go to Site Settings > Debugging tab and set the mode to Production.</div>";
    }

    return $response;
}

/**
 * Try to determine php.ini's max input vars setting then show an alert if the setting is too low for micromanage tariff editing mode.
 */
function max_input_vars_test()
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $response = '';
    $max_vars = (int) ini_get('max_input_vars');
    if ($max_vars < 1001 && isset($MiniComponents->registeredClasses[ '00005']['advanced_micromanage_tariff_editing_modes' ])) { // The default is 1000 on most installations
        $highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
        $response = "<div class='".$highlight."'>Please note, your max_input_vars setting seems to be set to 1000, which is the default setting. If you're using the Micromanage tariff editing mode and wish to save prices for more than a year in advance, we recommend that you change this setting to 3000 or more. <a href=\"http://www.jomres.net/manual/developers-guide/56-other-discussions/364-max-input-vars-max-input-vars-in-php-ini\" target=\"_blank\">This page </a>has  more information.</div>";
    }

    return $response;
}

/**
 * Try to determine if suhosin has a max_value_length setting that can cause problems.
 */
function suhosin_get_max_vars_test()
{
    $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
    $response = '';
    $max_vars = (int) ini_get('suhosin.get.max_value_length');

    if ($max_vars != 0 && $max_vars <= 512) { // The default is 512 on most installations with the suhosin patch
        $highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
        $response = "<div class='".$highlight."'>Please note that PHP setups with the suhosin patch installed will have a default limit of 512 characters for get parameters. Although bad practice, most browsers (including IE) supports URLs up to around 2000 characters, while Apache has a default of 8000. To add support for long parameters with suhosin, add suhosin.get.max_value_length = <limit> in php.ini</div>";
    }

    return $response;
}

/**
 * Check that the google maps api key has been set
 */
function gmaps_apikey_check()
{
    $message = '';
    $highlight = (using_bootstrap() ? 'alert alert-warning' : 'ui-state-highlight');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    if (!isset($jrConfig['google_maps_api_key']) || $jrConfig['google_maps_api_key'] == '') {
        $message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_GMAP_KEY_WARNING', '_JOMRES_CONFIG_GMAP_KEY_WARNING', false).'</div>';
    }

    return $message;
}

/**
 * Check that the ip info db api key is set
 */
function ipinfodb_apikey_check()
{
    $message = '';
    $highlight = (using_bootstrap() ? 'alert alert-info' : 'ui-state-default');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    if ($jrConfig['use_conversion_feature'] && (!isset($jrConfig['geolocation_api_key']) || $jrConfig['geolocation_api_key'] == '')) {
        $message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', '_JOMRES_CONFIG_IPINFODB_KEY_WARNING', false).'</div>';
    }

    return $message;
}

/**
 * Chest that the OpenExchange rates service's API key has been set
 */
function openexchangerates_apikey_check()
{
    $message = '';
    $highlight = (using_bootstrap() ? 'alert alert-info' : 'ui-state-default');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    if ($jrConfig['use_conversion_feature'] && (!isset($jrConfig['openexchangerates_api_key']) || $jrConfig['openexchangerates_api_key'] == '')) {
        $message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', '_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', false).'</div>';
    }

    return $message;
}

/**
 * Check to see if the log paths setting has been set.
 */
function logs_path_check()
{
    $message = '';
    $highlight = (using_bootstrap() ? 'alert alert-warning' : 'ui-state-highlight');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
        $message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_LOG_LOCATION_WARNING', '_JOMRES_CONFIG_LOG_LOCATION_WARNING', false).'</div>';
    }

    return $message;
}

/**
 * Check to see if the image file paths need to be imported into the database.
 */
function db_images_import_check()
{
    $message = '';
    $highlight = (using_bootstrap() ? 'alert alert-warning' : 'ui-state-highlight');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    if ($jrConfig['images_imported_to_db'] == '0') {
        $message = '
<div class="'.$highlight.'">
	<p>'.jr_gettext('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING','_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', false).'</p>
	<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=media_centre_dbimport" class="btn btn-warning">'.jr_gettext('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION','_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', false).'</a>
</div>';
    } else {
		return '';
	}

    return $message;
}

/**
 * Check to see if it's possible to import s3 images
 */
function s3_images_import_check()
{
    $message = '';
    $highlight = (using_bootstrap() ? 'alert alert-danger alert-error' : 'ui-state-error');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    if (
		$jrConfig['images_imported_to_db'] == '1' && 
		$jrConfig['images_imported_to_s3'] == '0' && 
		$jrConfig['amazon_s3_active'] == '1' && 
		$jrConfig['amazon_s3_bucket'] != '' &&  
		$jrConfig['amazon_s3_key'] != '' && 
		$jrConfig['amazon_s3_secret'] != ''
		) {
        $message = '
<div class="'.$highlight.'">
	<p>'.jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', false).'</p>
	<p><strong>'.strtoupper(jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', false)).'</strong></p>
	<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=media_centre_s3import" class="btn btn-danger btn-error">'.jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', false).'</a>
</div>';
    } else {
		return '';
	}

    return $message;
}
