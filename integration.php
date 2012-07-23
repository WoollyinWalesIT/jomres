<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

define('_COMPONENT_JOMRES_INTEGRATIONCALLED','1');



global $jomresPath,$license_key,$jomresConfig_absolute_path,$MiniComponents;
global $mrConfig,$jrConfig,$jomres_systemLog_path;
global $ra1,$ra2,$convertedRAs,$lessThans; // globaled so that we don't need to initialise them every time

//global $R;

// Stuff we want to filter out of inputs.
	$ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', '<link', '<style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', '<title', 'base','mocha','livescript','@import','<html','<body');
	$ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload','fromcharcode',';alert',':alert','fscommand','onbegin','ondragdrop','onend','onmediacomplete','onmediaerror','onoutofsync','onpause','onprogress','onrepeat','onresume','onreverse','onrowsenter','onrowdelete','onrowinserted','onscrollby','onseek','onsyncrestored','ontimeerror','ontrackchange','onurlflip','seeksegmenttime','scriptlet');
$lessThans=array('%3C','&lt','&lt;','&LT','&LT;','&#60','&#060','&#0060','&#00060','&#000060','&#0000060','&#60;','&#060;','&#0060;','&#00060;','&#000060;','&#0000060;','&#x3c','&#x03c','&#x003c','&#x0003c','&#x00003c','&#x000003c','&#x3c;','&#x03c;','&#x003c;','&#x0003c;','&#x00003c;','&#x000003c;','&#X3c','&#X03c','&#X003c','&#X0003c','&#X00003c','&#X000003c','&#X3c;','&#X03c;','&#X003c;','&#X0003c;','&#X00003c;','&#X000003c;','&#x3C','&#x03C','&#x003C','&#x0003C','&#x00003C','&#x000003C','&#x3C;','&#x03C;','&#x003C;','&#x0003C;','&#x00003C;','&#x000003C;','&#X3C','&#X03C','&#X003C','&#X0003C','&#X00003C','&#X000003C','&#X3C;','&#X03C;','&#X003C;','&#X0003C;','&#X00003C;','&#X000003C;','\x3c','\x3C','\u003c','\u003C');
$convertedRAs=initRemoveXSS($ra1,$ra2);

// $R=array();
// $R[gettype(.0)]='float';
// $R[gettype(0)]='int';
// $R[gettype(true)]='boolean';
// $R[gettype('')]='string';
// $R[gettype(null)]='null';
// $R[gettype(array())]='array';
// $R[gettype(new stdClass())]='object';

if (!defined('JOMRESPATH_BASE'))
	{
	if (!defined('JRDS'))
		{
		$apacheSig =false;

		$detect_os = strtoupper($_SERVER["SERVER_SOFTWARE"]); // converted to uppercase
		$isWin32 = strpos($detect_os, "WIN32");
		$IIS = strpos($detect_os, "IIS");
		if (isset($_SERVER["SERVER_SIGNATURE"]))
			{
			$signature = strtoupper($_SERVER["SERVER_SIGNATURE"]);
			$apacheSig = strpos($signature, "APACHE");
			}
		$dir =  dirname(realpath(__FILE__));
		if ( strpos($dir,":\\" ) )
			define("JRDS" , "\\");
		else
			{
			if ( $isWin32 === false  || $apacheSig == true)
				define("JRDS" , "/");
			else
				define("JRDS" , "\\");
			}
		}
	if (isset($_SERVER['SCRIPT_FILENAME']))
		$dir_path = str_replace( $_SERVER['SCRIPT_FILENAME'], "", dirname(realpath(__FILE__)) ) ;
	else
		$dir_path = str_replace( $_SERVER['SCRIPT_NAME'], "", dirname(realpath(__FILE__)) ) ;
	define('JOMRESPATH_BASE', $dir_path );
	}

$jomresConfig_absolute_path = substr(JOMRESPATH_BASE, 0, strlen(JOMRESPATH_BASE)-7);
define('JOMRESCONFIG_ABSOLUTE_PATH',$jomresConfig_absolute_path);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'multibye_functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'jr_gettext.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomres_singleton_abstract.class.php');
$showtime = jomres_singleton_abstract::getInstance('showtime');
$performance_monitor =jomres_singleton_abstract::getInstance('jomres_performance_monitor');
$performance_monitor->set_point("pre-inclusions");
$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."site_config.php");

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."detect_cms.php");
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."init_config_vars.php");



define('JOMRES_SYSTEMLOG_PATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.'temp'.JRDS);

$jomresConfig_dbtype = 'mysql';


if (!function_exists ('adodb_date_test_date') )
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'adodb'.JRDS.'adodb-time.inc.php');

if (!class_exists('patTemplate') )
	require_once('libraries'.JRDS.'phptools'.JRDS.'patTemplate.php');
if (!class_exists('patErrorManager') )
	require_once('libraries'.JRDS.'phptools'.JRDS.'patErrorManager.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'PHPMailer_v5.1'.JRDS.'class.phpmailer.php');

//require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomSearch.class.php');

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php') )
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php');
else
	{
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.'countries.php') )
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.'countries.php');
	else
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'countries.php');
	}

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'imagehandling.php');
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_functions.php");

$performance_monitor->set_point("post-inclusions");

if (!strstr($scriptname,'install_jomres.php'))
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	
	if (_JOMRES_DETECTED_CMS == "joomla3")
		$jrConfig['use_bootstrap'] ="1";
	
	if (jomres_cmsspecific_areweinadminarea() && _JOMRES_DETECTED_CMS != "joomla3")
		$jrConfig['use_bootstrap'] ="0";
	}

if (isset($jrConfig['loggingBooking']))
	{
	define('LOGGINGBOOKING',$jrConfig['loggingBooking']);
	define('LOGGINGGATEWAY',$jrConfig['loggingGateway']);
	define('LOGGINGSYSTEM',$jrConfig['loggingSystem']);
	define('LOGGINGREQUEST',$jrConfig['loggingRequest']);
	define('LOGGINGPORTAL',$jrConfig['loggingPortal']);
	}

$jrajax				= (int)jomresGetParam( $_REQUEST, 'jrajax', 0 );
if ($jrajax == 1)
	define('AJAXCALL',true);
else
	define('AJAXCALL',false);

	
// loads en language file by default
if ($jomresConfig_lang=='')
	{
	set_showtime('lang','en-GB');
	$jomresConfig_lang = 'en-GB';
	}

$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
$MiniComponents->triggerEvent('00001'); // Start

$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

if (!defined('JOMRES_CSSRELPATH'))
	define('JOMRES_CSSRELPATH','jomres/css/');
	
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_urls.php");

set_error_handler('errorHandler');
jomres_parseRequest();

if (!defined('JOMRES_IMAGELOCATION_ABSPATH'))
	{
	define('JOMRES_IMAGELOCATION_ABSPATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS);
	define('JOMRES_IMAGELOCATION_RELPATH',get_showtime('live_site').'/jomres/uploadedimages/');
	}

// In case somebody removes the above lines, we still need to set this define otherwise folks will not be able to create new properties
if (!defined('JOMRES_SINGLEPROPERTY'))
	define('JOMRES_SINGLEPROPERTY',false);
	
$performance_monitor->set_point("end integration run");
// Stops here

function jomresURL($link, $ssl=2)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();

	if (!$jrConfig['isInIframe'] )
		{
		$link=jomres_cmsspecific_makeSEF_URL($link);
		
		// As we've dropped support for "ssl in the booking form" in 4.7, these lines are no longer applicable.
		// if ($ssl == 1)
			// $link	= str_replace("http://","https://",$link);
		// else
			// $link	= str_replace("https://","http://",$link);
		}
	// else
		// {
		// $link=str_replace("index.php","index.php",$link);
		// }
	// $link=str_replace("&amp;","&",$link);
	// $link=str_replace("&","&amp;",$link);
	return $link;
	}

// Called by, eg, $output['TOKEN']='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
function jomresSetToken()
	{
	/*
	$token = md5(uniqid(rand(), TRUE));
	if (!@session_start())
		{
		@ini_set('session.save_handler', 'files');
		session_start();
		}
	$_SESSION['jomresValidTokens'][] = $token;
	session_write_close();
	return $token;
	*/
	return "xxx";
	}

function jomresURLToken()
	{
	$t=jomresSetToken();
	return "&jomrestoken=".$t;
	}

// if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
function jomresCheckToken()
	{
	return true;
	/*
	if (!@session_start())
		{
		@ini_set('session.save_handler', 'files');
		session_start();
		}
	if (in_array($_REQUEST['jomrestoken'], $_SESSION['jomresValidTokens']))
		{
		$t=$_REQUEST['jomrestoken'];
		$idx=array_search($t,$_SESSION['jomresValidTokens']);
		// Caching can cause problems with tokens being reused, so we'll only trash the token if it's not in $_GET
		if (!isset($_REQUEST['jomrestoken']) )
			unset($_SESSION['jomresValidTokens'][$idx]);
		session_write_close();
		return true;
		}
	session_write_close();
	return false;
	*/
	}

function jomres_parseRequest()  // A simple request parser to check that mosConf.... isn't in the request string.
	{
	// %6D%6F%73%43%6F%6E%66 = mosConf : urlencode
	// %6D%72%43%6F%6E%66%69%67  mrConfig hex
	//%6A%72%43%6F%6E%66%69%67  jrConfig hex
	foreach ($_REQUEST as $key=>$val)
		{
		$ex_base64 = base64_decode($val);
		if (gettype($val)=="string")
			{
			if (strstr($key,"php://") || strstr($val,"php://") || strstr($ex_base64,"php://") )
				{
				trigger_error ("Hack attempt", E_USER_ERROR);
				}
			if (strstr($key,"mosConf") || strstr($val,"mosConf") || strstr($ex_base64,"mosConf") || stristr($val,"%6D%6F%73%43%6F%6E%66" ))
				{
				trigger_error ("Hack attempt", E_USER_ERROR);
				}
			if (strstr($key,"mrConfig") || strstr($val,"mrConfig") || strstr($ex_base64,"mrConfig") || stristr($val,"%6D%72%43%6F%6E%66%69%67" ))
				{
				trigger_error ("Hack attempt", E_USER_ERROR);
				}
			if (strstr($key,"jrConfig") || strstr($val,"jrConfig") || strstr($ex_base64,"jrConfig") || stristr($val,"%6A%72%43%6F%6E%66%69%67" ))
				{
				trigger_error ("Hack attempt", E_USER_ERROR);
				}
			}
		}
	}

function jomresGetParam($request,$element,$def=null,$mask='')	// variable type not used, we'll cast the variable type depending on the default ($def) that's passed to the function
	{

	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	
	// If the array element is set, we'll set $dirty to that, otherwise we'll simply return the default
	if (isset($request[$element]) )
		$dirty=$request[$element];
	else
		return $def;
		
	// This is probably redundant
	// $clean=null;
	// if (is_null($dirty))
		// $dirty=$def;
	
	// We'll discover the type of $dirty, so that we can cast the variable to a given type
	$type = jomres_get_var_type($dirty);
	if (!$type) // If the data passed isn't recognised, we'll just return out, passing a nice safe null the calling script can work with.
		return null;
	
	// Mostly we'll use type casting to clean the passed data. Array ALWAYS assumes that the array passed is an array of integers, 
	// if you want to use another type of array you'll need to clean that up youself.
	// The main reason for using casting is 1. it's very effective and 2. it stops us needing to use the html purifier, which is cpu intensive.
	
	switch ($type)
		{
		case ('float') :
			$clean = (float) $dirty;
			break;
		case ('int') :
			$clean = (int) $dirty;
			break;
		case ('boolean') :
			$clean = (bool) $dirty;
			break;
		case ('null') :
			$clean = null;
			break;
		case ('array') :
			$tmp = (array) $dirty;
			$clean=array();
			foreach($tmp as $key1=>$val1)
				{
				if(is_array($key1))
					{
					foreach($key1 as $key2=>$val2)	// if the field value is an array, step through it
						{
						$k=filter_var($key2,FILTER_SANITIZE_SPECIAL_CHARS); 
						$v=filter_var($val2,FILTER_SANITIZE_SPECIAL_CHARS); 
						$clean[$k]=$v;
						}
					}
				else
					{
					$k=filter_var($key1,FILTER_SANITIZE_SPECIAL_CHARS); 
					$v=filter_var($val1,FILTER_SANITIZE_SPECIAL_CHARS); 
					$clean[$k]=$v;
					}
				}
			break;
		default : // treat everything else as a string.
			$dirty = (string) $dirty;
			$dirty = jomres_purify_html($dirty,false);
			if($jrConfig['allowHTMLeditor']!="1")
				$dirty=jomres_remove_HTML($dirty); // Strip out any html
			// Final check to ensure that anything left over has been sanitised. 
			// Html purifier doesn't make the string safe from injection attacks, so we still need to filter and sanitize the string afterwards
			$clean=filter_var($dirty,FILTER_SANITIZE_SPECIAL_CHARS); 
			break;
		}
	return $clean;
	}

function jomres_get_var_type($variable)
	{
	if (is_array($variable))
		return 'array';
	elseif (is_bool($variable))
		return 'boolean';
	elseif (is_float($variable))
		return 'float';
	elseif (is_int($variable))
		return 'int';
	elseif (is_string($variable))
		return 'string';
	else
		return false;
	}

function jomres_purify_string($string)
	{
	$dirty = (string) $string;
	$dirty = jomres_purify_html($dirty,false);
	$dirty=jomres_remove_HTML($dirty); // Strip out any html
	$clean=filter_var($dirty,FILTER_SANITIZE_SPECIAL_CHARS); // Final check to ensure that anything left over has been sanitised.
	}

// function jomresGetParam($request,$element,$def=null,$mask='')	// variable type not used
	// {
	// global $R;
	// $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	// $jrConfig=$siteConfig->get();
	// if (isset($request[$element]) )
		// $dirty=$request[$element];
	// else
		// return $def;
	// $clean=null;
	// if (is_null($dirty))
		// $dirty=$def;
	// $type=$R[gettype($def)];
	// switch ($type)
		// {
		// case ('float') :
			// $clean = (float) $dirty;
			// break;
		// case ('int') :
			// $clean = (int) $dirty;
			// break;
		// case ('boolean') :
			// $clean = (bool) $dirty;
			// break;
		// case ('object') :
			// $clean = (object) $dirty;
			// break;
		// case ('null') :
			// $clean = null;
			// break;
		// case ('array') :
			// $tmp = (array) $dirty;
			// $clean=array();
			// foreach($tmp as $key1=>$val1)
				// {
				// if(is_array($key1))
					// {
					// foreach($key1 as $key2=>$val2)	// if the field value is an array, step through it
						// {
						// $k=(int)$key2;
						// $v=(int)$val2;
						// $clean[$k]=$v;
						// }
					// }
				// else
					// {
					// $k=(int)$key1;
					// $v=(int)$val1;
					// $clean[$k]=$v;
					// }
				// }
			// break;
		// default : // treat everything else as a string.
			// $dirty = (string) $dirty;
			// $jomres_db =jomres_singleton_abstract::getInstance('jomres_database');
			// $dirty=getEscaped(RemoveXSS($dirty)); // remove any XSS data
			// if($jrConfig['allowHTMLeditor']!="1")
				// $dirty=jomres_remove_HTML($dirty); // Strip out any html
			// $clean=filter_var($dirty,FILTER_SANITIZE_SPECIAL_CHARS); // Final check to ensure that anything left over has been sanitised.
			// break;
		// }
	// return $clean;
	// }

function getEscaped( $text ) {
	$text=str_replace("'","&#39;",$text);
	return filter_var($text,FILTER_SANITIZE_SPECIAL_CHARS);
	}

// http://www.php.net/manual/en/function.strip-tags.php#97386
// Like many other functions in Jomres, it has been renamed to jomres_ becomes it's not unusual for other software developers to use the same functions in their libraries. Renaming the function thus prevents php from throwing duplicate function name errors
function jomres_remove_HTML($s , $keep = 'p|br' , $expand = 'script|style|noframes|select|option')
	{
	/**///prep the string
	$s = ' ' . $s;
	
	/**///initialize keep tag logic
	if(strlen($keep) > 0)
		{
		$k = explode('|',$keep);
		for($i=0;$i<count($k);$i++)
			{
			$s = str_replace('<' . $k[$i],'[{(' . $k[$i],$s);
			$s = str_replace('</' . $k[$i],'[{(/' . $k[$i],$s);
			}
		}
	
	//begin removal
	/**///remove comment blocks
	while(stripos($s,'<!--') > 0)
		{
		$pos[1] = stripos($s,'<!--');
		$pos[2] = stripos($s,'-->', $pos[1]);
		$len[1] = $pos[2] - $pos[1] + 3;
		$x = substr($s,$pos[1],$len[1]);
		$s = str_replace($x,'',$s);
		}
	
	/**///remove tags with content between them
	if(strlen($expand) > 0)	
		{
		$e = explode('|',$expand);
		for($i=0;$i<count($e);$i++)
			{
			while(stripos($s,'<' . $e[$i]) > 0)
				{
				$len[1] = strlen('<' . $e[$i]);
				$pos[1] = stripos($s,'<' . $e[$i]);
				$pos[2] = stripos($s,$e[$i] . '>', $pos[1] + $len[1]);
				$len[2] = $pos[2] - $pos[1] + $len[1];
				$x = substr($s,$pos[1],$len[2]);
				$s = str_replace($x,'',$s);
				}
			}
		}
	
	/**///remove remaining tags
	while(stripos($s,'<') > 0)
		{
		$pos[1] = stripos($s,'<');
		$pos[2] = stripos($s,'>', $pos[1]);
		$len[1] = $pos[2] - $pos[1] + 1;
		$x = substr($s,$pos[1],$len[1]);
		$s = str_replace($x,'',$s);
		}
	
	/**///finalize keep tag
	for($i=0;$i<count($k);$i++)
		{
		$s = str_replace('[{(' . $k[$i],'<' . $k[$i],$s);
		$s = str_replace('[{(/' . $k[$i],'</' . $k[$i],$s);
		}

	return trim($s);
	}

/**
* @return
 * @param string
* @param array
* @param boolean
* @desc Function strip_tags_except() works similarly to strip_selected_tags() function but instead of allowing the user to specify the tags to strip, she can specify the tags to allow and strip all others. The third parameter, $strip, when TRUE removes "<" and ">" from the string and when FALSE converts them to "&lt;" and "&gt;" respectively.
*/
// http://uk2.php.net/manual/en/function.strip-tags.php#73435
function strip_tags_except($text,$strip=TRUE)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$all_tags=array();

	$allowedTags=explode("|",$jrConfig['allowedTags']);
	if (!is_array($allowedTags))
		return $text;

	if (!count($allowedTags))
		return $text;
	$open = $strip ? '' : '&lt;';
	$close = $strip ? '' : '&gt;';

	preg_match_all('!<\s*(/)?\s*([a-zA-Z]+)[^>]*>!',
		$text, $all_tags);

	//$complete_tags=$all_tags[0];
	array_shift($all_tags);
	$slashes = $all_tags[0];
	$all_tags = $all_tags[1];

	foreach ($all_tags as $i => $tag)
		{
		if (in_array("<".strtolower($tag).">", $allowedTags))
			{
			continue;
			}
		$text =
			preg_replace('!<(\s*' . $slashes[$i] . '\s*' .
				$tag . '[^>]*)>!', $open . '$1' . $close,
				$text);
		}
	return $text;
	}



class dummy_params_class
	{
	function get()
		{
		$a=0;
		}
	}

function mailJomresdotnet($message)
	{
	if (jomresGetDomain() != "localhost")
		{
		$to = "bugs@jomres.net ";
		$subject = "Error report from ".get_showtime('sitename');
		$from = get_showtime('mailfrom');

		$body = " on ".date('d/m/Y');
		$body .= " at ".date('g:i A')."\n\nDetails:\n";
		$body .= "Server details follow\n\n";
		$body .= "Livesite: ".get_showtime('live_site')."\n";
		$body .= "Site name: ".get_showtime('sitename')."\n";
		$body .= "Users email address: ".get_showtime('mailfrom')."\n";
		$body =	$message."\n";
		jomresMailer( $from, get_showtime('sitename'), $to, $subject, $body,0);
		}
	}

function stripUnwanted($text)
	{
	$theLen=strlen();
	if (!strncasecmp($result,$text,$theLen)) {
		$text="";
		}
	return $text;
	}

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
*/
function checkUserIsManager()
	{
	$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	$userIsManager=$thisJRUser->userIsManager;
	return $userIsManager;
	}

function doSelectSql($query,$mode=FALSE)
	{
	$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
	$jomres_db =jomres_singleton_abstract::getInstance('jomres_database');
	$jomres_db->setQuery($query);
	$result = $jomres_db->loadObjectList();
	$num=count($result);
	switch ($mode)
		{
		case 1:
			// Mode 1. The calling function expects 1 row with 1 element in it. Returns a string
			if ($num==1)
				{
				foreach ($result[0] as $r)
					$result =$r;
				/*
				$jomres_db->setQuery( $query );
				$result = $jomres_db->loadResult();
				*/
				}
			else
				return FALSE;
		break;
		case 2:
			// Mode 2. The calling function expects 1 row with elements in it. Returns an associative array
			if ($num>1)
				{
				echo "Error, more than one result returned. One expected. Stop.";
				exit;
				}
			$jomres_db->setQuery( $query );
			$result = $jomres_db->loadObjectList();
			$ob=$result[0];
			if (count($ob)==0)
				{
				return FALSE;
				}
			else
				{
				foreach ($ob as $k=>$v)
					{
					$arr[$k]=$v;
					}
				$result=$arr;
				unset($arr);
				}
		break;
		default:
		break;
		}
	$jomres_db->unsetResult();
	if ($num>0)
		return $result;
	else
		return array();
	}


function doInsertSql($query,$op,$ignoreErrors=false)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
	// Called doInsertSql, the title is not quite correct as this function also handles updates and deletes
	// We'll use the lack of text in $op as a way of indicating that we don't want this operation logged
	// This way we can call the audit directly from the insert internet booking function
	// rather than logging EVERYTHING that's done by the function.
	$jomres_db =jomres_singleton_abstract::getInstance('jomres_database');
	$jomres_db->setQuery($query);
	if (!$jomres_db->query())
		{
		if (!$ignoreErrors)
			error_logging("Do insert failed :: ".$jomres_db->error." ".$query);
		return FALSE;
		}
	else
		{
		$thisID=$jomres_db->last_id;
		if ($op!="")
			jomres_audit($query,$op);
		if ($thisID)
			return $thisID;
		else
			return TRUE;
		}
	}

function doSql($query)
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$jomres_db =jomres_singleton_abstract::getInstance('jomres_database');
	if ($jrConfig['errorChecking']) echo $query."<br>";
	$jomres_db->setQuery($query);
	if (!$jomres_db->query())
		return FALSE;
	else
		return TRUE;
	}


function jomres_audit($query,$op)
	{
	$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	if ($jrConfig['disableAudit']!="1")
		{
		$ipstuff=getEscaped($_SERVER['REMOTE_ADDR']);
		$id=$thisJRUser->userid;
		$defaultProperty=getDefaultProperty();
		$noquotesquery=str_replace("'"," ",$query." :IP: ".$ipstuff);
		$noquotesquery=str_replace("`"," ",$noquotesquery);
		$urldquery=htmlentities($noquotesquery);
		$query = "INSERT INTO #__jomres_audit (date,time,owner,op,args,property_uid) VALUES (NOW(),NOW(),'$id','$op','$urldquery','
".(int)$defaultProperty."')";
		doInsertSql($query,'');
		}
	}

function getDefaultProperty()
	{
	$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	$defaultProperty=$thisJRUser->currentproperty;
	return (int)$defaultProperty;
	}

function getPropertyNameNoTables($property_uid)
	{
	global $propertyNamesArray;
	$query = "SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property_uid."'";
	$propertysList =doSelectSql($query);
	foreach ($propertysList as $propertys)
		{
		$propertyName = $propertys->property_name;
		}
	$propertyNamesArray[]=$propertyName;
	return $propertyName;
	}

//----------------------------------------
//-T E X T	M O D I F I C A T I O N	 ----
//----------------------------------------

function editCustomTextAll()
	{
	$mrConfig=getPropertySpecificSettings();
	$mrConfig['editingOn']="1";
	$allDefinedContants=get_defined_constants();
	$jomresConstants=array();
	foreach ($allDefinedContants as $key=>$value)
		{
		if (substr($key,0,7)=="_JOMRES")
			$jomresConstants[$key]=$value;
		if (substr($key,0,7)=="_JOMCOMP")
			$jomresConstants[$key]=$value;
		}
	$mrConfig['editingOn']="1";
	foreach ($jomresConstants as $key=>$value)
		{
		if ( get_showtime('lang') == "en")
			echo jr_gettext($key,$value)."&nbsp;&nbsp;::&nbsp;&nbsp;".$key;
		else
			echo jr_gettext($key,$value,true,FALSE)."&nbsp;&nbsp;::&nbsp;&nbsp;".$key;
		echo "<br>";
		}
	}

function editCustomText()
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$theConstant = jomresGetParam( $_REQUEST, 'theConstant', '' );
	$defaultText = jomresGetParam( $_REQUEST, 'defaultText', '', _MOS_ALLOWHTML );
	$property_uid=(int)getDefaultProperty();
	$query="SELECT customtext FROM #__jomres_custom_text WHERE constant = '$theConstant' and property_uid = '0' AND language = '".get_showtime('lang')."'";
	$customTextList=doSelectSql($query);
	$theText = false;
	if (count($customTextList))
		{
		foreach ($customTextList as $text)
			{
			$theText=stripslashes($text->customtext);
			}
		}
	$query="SELECT customtext FROM #__jomres_custom_text WHERE constant = '$theConstant' and property_uid = '".(int)$property_uid."' AND language = '".get_showtime('lang')."'";
	$textList=doSelectSql($query);
	if (count($textList)==1)
		{
		foreach ($textList as $text)
			{
			$theText=stripslashes($text->customtext);
			}
		}
	if (!$theText)
		$theText=urldecode($defaultText);

	if (strlen($theText)==0)
		$theText=stripslashes(constant($theConstant));
	$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
	$jrtb	= $jrtbar->startTable();
	if ($jrConfig['allowHTMLeditor'] != "2" && $jrConfig['allowHTMLeditor'] != "3")
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveCustomText');
	$jrtb .= $jrtbar->toolbarItem('cancel','javascript:window.close();','');
	$jrtb .= $jrtbar->endTable();
	$output['JOMRESTOOLBAR']=$jrtb;
	$output['MOSCONFIGLIVESITE']=get_showtime('live_site');
	$output['HCURRENTTEXT']=_JOMRES_COM_A_EDITING_CURRENTTEXT;
	$output['HNEWTEXT']=_JOMRES_COM_A_EDITING_NEWTEXT;
	$output['PROPERTYUID']=$property_uid;
	$output['THECONSTANT']=$theConstant;
	$output['CURRENTTEXT']=$theText;
	if ($jrConfig['allowHTMLeditor']=="1" || $jrConfig['allowHTMLeditor']=="2" || $jrConfig['allowHTMLeditor'] == "3")
		{
		if ($jrConfig['allowHTMLeditor'] == "1")
			{
			$width="450";
			$height="250";
			$col="20";
			$row="10";
			$tmpTxt=editorAreaText( 'newtext', stripslashes($theText), 'newtext', $width, $height, $col, $row );
			}
		if ($jrConfig['allowHTMLeditor'] == "2" || $jrConfig['allowHTMLeditor'] == "3")
			{
			$tmpTxt= flashArea('newtext', stripslashes($theText));
			}
		}
	else
		{
		$tmpTxt='<textarea class="inputbox" cols="40" rows="6" name="newtext">'.$theText.'</textarea>';
		}

	$output['NEWTEXT']=$tmpTxt;
	$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';

	$pageoutput[]=$output;

	$tmpl	=	new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'edit_custom_text.html' );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->displayParsedTemplate();
	}

function saveCustomText()
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	$property_uid=(int)getDefaultProperty();
	if ($jrConfig['allowHTMLeditor'] == "1")
		{
		$customText = jomresGetParam( $_POST, 'newtext', "" , _MOS_ALLOWHTML );
		$theConstant = jomresGetParam( $_POST, 'theConstant', '' );
		}
	else
		{
		$customText = jomresGetParam( $_POST, 'newtext', '','string' );
		$theConstant = jomresGetParam( $_POST, 'theConstant', '' );
		}
	// Not currently used, but put into place if I decide that people are translating Yes to No in error too often
	//if ($theConstant == "_JOMRES_COM_MR_YES" || $theConstant == "_JOMRES_COM_MR_NO")
	//	return;
	$result=updateCustomText($theConstant,$customText,$property_uid);
	if ($result)
		{
		$tmpl	=	new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'save_custom_text.html' );
		$tmpl->displayParsedTemplate();
		}
	else
		echo "Error, no data to save";
	}

function updateCustomText($theConstant,$theValue,$audit=TRUE,$property_uid=null)
	{
	$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	
	$jrConfig=$siteConfig->get();
	$testStr= trim(strip_tags_except($theValue));
	$crsEtc=array("\t","\n","\r");
	$testStr=str_replace($crsEtc,"",$testStr);
	if (strlen($testStr)==0 
			&& $theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION" 
			&& $theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES" 
			&& $theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES" 
			&& $theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS" 
			&& $theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS" 
			&& $theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT" 
			&& $theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS" )
		return false;
	if (!isset($property_uid))
		{
		if ($jrConfig['editingModeAffectsAllProperties'] == "1" && $thisJRUser->superPropertyManager == true )
			$property_uid=0;
		else
			$property_uid=(int)getDefaultProperty();
		}
	//$theValue=htmlentities($theValue);
	$query="SELECT customtext FROM #__jomres_custom_text WHERE constant = '".$theConstant."' and property_uid = '".(int)$property_uid."' AND language = '".get_showtime('lang')."'";
	$textList=doSelectSql($query);
	if (strlen($theValue)==0)
		{
		$query="DELETE FROM	#__jomres_custom_text WHERE constant = '".$theConstant."' AND property_uid = '".(int)$property_uid."' AND language = '".get_showtime('lang')."'";
		}
	else
		{
		if (count($textList)<1)
			$query="INSERT INTO #__jomres_custom_text (`constant`,`customtext`,`property_uid`,`language`) VALUES ('".$theConstant."','".$theValue."','".(int)$property_uid."','".get_showtime('lang')."')";
		else
			$query="UPDATE #__jomres_custom_text SET `customtext`='".$theValue."' WHERE constant = '".$theConstant."' AND property_uid = '".(int)$property_uid."' AND language = '".get_showtime('lang')."'";
		}
	//echo $query;
	if ($audit)
		$audit=_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT;
		
	doInsertSql($query,$audit);
	//$query="SELECT customtext FROM #__jomres_custom_text WHERE constant = '".$theConstant."' and property_uid = '".(int)$property_uid."' AND language = '".get_showtime('lang')."'";
	//echo doSelectSql($query,1);
	return true;
	}

function jomres_html_entity_decode_utf8($string)
	{
	static $trans_tbl;
	// replace numeric entities
	$string = preg_replace('~&#x([0-9a-f]+);~ei', 'jomres_code2utf(hexdec("\\1"))', $string);
	$string = preg_replace('~&#([0-9]+);~e', 'jomres_code2utf(\\1)', $string);

	// replace literal entities
	if (!isset($trans_tbl))
		{
		$trans_tbl = array();
		foreach (get_html_translation_table(HTML_ENTITIES) as $val=>$key)
			$trans_tbl[$key] = utf8_encode($val);
		}
	return strtr($string, $trans_tbl);
	}

// Returns the utf string corresponding to the unicode value (from php.net, courtesy - romans@void.lv)
function jomres_code2utf($num)
	{
	if ($num < 128) return chr($num);
	if ($num < 2048) return chr(($num >> 6) + 192) . chr(($num & 63) + 128);
	if ($num < 65536) return chr(($num >> 12) + 224) . chr((($num >> 6) & 63) + 128) . chr(($num & 63) + 128);
	if ($num < 2097152) return chr(($num >> 18) + 240) . chr((($num >> 12) & 63) + 128) . chr((($num >> 6) & 63) + 128) . chr(($num & 63) + 128);
	return '';
	}

function jomresGetDomain()
	{
	$thisSvrName=$_SERVER['SERVER_NAME'];
	$dmn=str_replace("http://www.","",$thisSvrName);
	$domain=str_replace("www.","",$dmn);
	//echo "<H2>Found domain".$domain."</H2>";
	return strtolower($domain);
	}

function parseConfiguration()
	{
	ob_start();
	phpinfo(INFO_CONFIGURATION);
	$s = ob_get_contents();
	ob_end_clean();
	$s = strip_tags($s,'<h2><th><td>');
	$s = preg_replace('/<th[^>]*>([^<]+)<\/th>/',"<info>\\1</info>",$s);
	$s = preg_replace('/<td[^>]*>([^<]+)<\/td>/',"<info>\\1</info>",$s);
	$vTmp = preg_split('/(<h2>[^<]+<\/h2>)/',$s,-1,PREG_SPLIT_DELIM_CAPTURE);
	$vModules = array();
	for ($i=1;$i<count($vTmp);$i++)
		{
		if (preg_match('/<h2>([^<]+)<\/h2>/',$vTmp[$i],$vMat))
			{
			$vName = trim($vMat[1]);
			$vTmp2 = explode("\n",$vTmp[$i+1]);
			foreach ($vTmp2 AS $vOne)
				{
				$vPat = '<info>([^<]+)<\/info>';
				$vPat3 = "/$vPat\s*$vPat\s*$vPat/";
				$vPat2 = "/$vPat\s*$vPat/";
				if (preg_match($vPat3,$vOne,$vMat))
					{ // 3cols
					$vModules[$vName][trim($vMat[1])] = array(trim($vMat[2]),trim($vMat[3]));
					} elseif (preg_match($vPat2,$vOne,$vMat)) { // 2cols
						$vModules[$vName][trim($vMat[1])] = trim($vMat[2]);
					}
				}
			}
		}
	return $vModules;
	}


/**
* Utility class for all HTML drawing classes
* @package Joomla
*/
class jomresHTML
	{
	function makeOption( $val, $text='', $value_name='value', $text_name='text' )
		{
		if (!defined('SELECTLISTJAVASCRIPT') && using_bootstrap() && !AJAXCALL)
			{
			echo '
			<script>
			jQuery(function(jomresJquery) {
				jomresJquery(\'div.btn-group[data-toggle-name=*]\').each(function(){
					var group   = jomresJquery(this);
					var form    = group.parents(\'form\').eq(0);
					var name    = group.attr(\'data-toggle-name\');
					var hidden  = jomresJquery(\'input[name="\' + name + \'"]\', form);
					jomresJquery(\'button\', group).each(function(){
						var button = jomresJquery(this);
						button.live(\'click\', function(){
							hidden.val(jomresJquery(this).val());
					});
					if(button.val() == hidden.val()) {
						button.addClass(\'btn-primary\');
					  }
					});
				  });
				});
			</script>
			';
			define('SELECTLISTJAVASCRIPT',1);
			}
		
		$obj = new stdClass;
		$obj->$value_name = $val;
		$obj->$text_name = trim( $text ) ? $text : $value;
		return $obj;
		}

	function selectList( $arr, $name, $attribs, $key, $text, $default=NULL )
		{
		$not_for_these_dropdowns = array("jomreslang","jomres_editing_mode","user_timezone");
		if (!using_bootstrap() || count($arr) != 2 || in_array($name,$not_for_these_dropdowns) || get_showtime('task') == "handlereq")
			{
			$attribs = str_replace('class="inputbox"',"",$attribs);
			$attribs = str_replace('class="input-medium"',"",$attribs);
			
			$attribs .= ' class="input-medium" ';
			
			$output = '<select name="'.$name.'" id="'.$name.'" '.$attribs.'>';
			for ($i=0, $n= count( $arr ); $i < $n; $i++ )
				{
				$k = $arr[$i]->$key;
				$txt = $arr[$i]->$text;
				$selected ='';
				if ($k == $default)
					$selected .=' selected="selected" ';
				$output .= '<option value="'.$k.'" '.$selected.'>'.$txt.'</option>';
			}
			$output .= "</select>";
			}
		else
			{
			$output = '<div class="btn-group" data-toggle-name="'.$name.'" data-toggle="buttons-radio" >';
			for ($i=0, $n= count( $arr ); $i < $n; $i++ )
				{
				$k = $arr[$i]->$key;
				$txt = $arr[$i]->$text;
				$output .= '<button type="button" value="'.$k.'" class="btn" data-toggle="button">'.$txt.'</button>';
				}
			$output .='</div>
			<input type="hidden" name="'.$name.'" value="'.$default.'" />';
			
			}
		return $output;
		}

	function integerSelectList( $start, $end, $increment, $name, $attribs, $selected, $format="" )
		{
		$attribs = str_replace(' class="inputbox" ',"",$attribs);
		$attribs = str_replace(' class="input-medium" ',"",$attribs);
		$attribs .= ' class="input-small"';
		
		$arry 	= array();
		for ($i=(int)$start; $i <= (int)$end; $i+=(int)$increment)
			{
			if ($i<10)
				$no=sprintf("0%s",$i);
			else
				$no=$i;
			$arry[] = jomresHTML::makeOption( $i, $no );
			}
		return jomresHTML::selectList( $arry, $name, $attribs, 'value', 'text', $selected );
		}

}



function createNewAPIKey()
	{
	$apikey=generateJomresRandomString();
	$keeplooking=true;
	while ($keeplooking):
		$query="SELECT propertys_uid FROM #__jomres_propertys WHERE apikey = '".$apikey."' LIMIT 1";
		$plist=doSelectSql($query);
		$query="SELECT manager_uid FROM #__jomres_managers WHERE apikey = '".$apikey."' LIMIT 1";
		$clist=doSelectSql($query);
		if (count($plist)==0 && count($clist)==0)
			$keeplooking=false;
		if ($keeplooking)
			$apikey=generateJomresRandomString();
	endwhile;
	return $apikey;
	}

function generateJomresRandomString($length=50)
	{
	$str = "";
	// define possible characters
	//$possible = "0123456789bcdfghjkmnpqrstvwxyz";
	$possible = "abcdfghijklmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYZ";
	// set up a counter
	$i = 0;
	// add random characters to $str until $length is reached
	while ($i < $length)
		{
		// pick a random character from the possible ones
		$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		$str .= $char;
		$i++;
		}
	return $str;
	}



/**
#
 * Constructs the mrConfig data when passed a property uid. $mrConfig is read in first to set up mrConfig in the event that property settings haven't been configured previously (eg during an import)
#
*/
function getSiteSettings()
	{
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	return $jrConfig;
	}


/**
#
 * Alternative function for str_ireplace
#
 */

if(!function_exists('str_ireplace'))
	{
	function str_ireplace($search,$replace,$subject)
		{
		$token = chr(1);
		$haystack = strtolower($subject);
		//$needle = strtolower($search);
		if (is_array($search) )
			{
			$count=count($search);
			for ($i=0;$i<$count;$i++)
				{
				//echo $search[$i];echo "<br/>";
				$search[$i]= strtolower($search[$i]);
				}
			$needle=$search;
			}
		else
			$needle = strtolower($search);
		while (($pos=strpos($haystack,$needle))!==FALSE)
			{
			$subject = substr_replace($subject,$token,$pos,strlen($search));
			$haystack = substr_replace($haystack,$token,$pos,strlen($search));
			}
		$subject = str_replace($token,$replace,$subject);
		return $subject;
		}
	}
	

/**
#
 * Alternative function for gregoriantojd
#
 */
if ( !function_exists('gregoriantojd') )
	{
	function gregoriantojd( $m, $d, $y )
		{
		$y = $m == 1 || $m == 2 ? --$y : $y;
		$m = $m == 1 || $m == 2 ? $m + 12 : $m;
		$a = intval( $y / 100 );
		$b = intval( $a / 4 );
		$c = 2 - $a + $b;
		$e = intval( 365.25 * ( $y + 4716 ) );
		$f = intval( 30.6001 * ( $m + 1 ) );
		return $c + $d + $e + $f - 1524.5 + 0.5;
		}
	}
	

function initRemoveXSS($ra1,$ra2)
	{
	$merged=array_merge($ra1,$ra2);
	$base64=array();
	foreach ($merged as $m)
		{
		$base64[]=base64_encode($m);
		}
	return array($base64);
	}

function RemoveXSS($val)
	{
	global $ra1,$ra2,$convertedRAs,$lessThans;
	//$val=stripslashes($val);  // Disabled as it wouldn't save windows paths
	// First let's  replace all the possible less than symbols with the real thing <
	$val=str_ireplace($lessThans,"",$val);
	// remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed
	// this prevents some character re-spacing such as <java\0script>
	// note that you have to handle splits with \n, \r, and \t later since they *are* allowed in some inputs
	$val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);

	foreach ( $convertedRAs as $naughty)
		{
		$val=str_ireplace($naughty,"",$val);
		}

	// Vince's additions
	$vinces=array();
	$vinces[]="&#x0A;"; //  <IMG SRC="jav&#x0A;ascript:alert('XSS');">  Embeded newline to break up XSS.
	$vinces[]="&#x0D;"; // <IMG SRC="jav&#x0D;ascript:alert('XSS');">  Embedded carriage return to break up XSS
	$vinces[]="&#14;"; //  <IMG SRC=" &#14;  javascript:alert('XSS');"> Spaces and meta chars before the JavaScript in images for XSS
	$vinces[]="%53%43%52%49%50%54"; // URL:
	$vinces[]="&#x53;&#x43;&#x52;&#x49;&#x50;&#x54;"; // HTML (with semicolons):
	$vinces[]="&#83&#67&#82&#73&#80&#84"; // HTML (without semicolons):
	$vinces[]="&#x26;&#x23;&#x78;&#x36;&#x41;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x31;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x36;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x31;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x33;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x33;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x32;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x39;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x30;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x34;&#x3B;"; // Javascript hex * 2

	$vinces[]='SIZE="&{'; // <BR SIZE="&{alert('XSS')}">	& JavaScript includes (works in Netscape 4.x):
	$vinces[]='/*'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
	$vinces[]='*/'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
	$vinces[]='<!--'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
	$vinces[]='-->'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
	$vinces[]='<!-- -->'; // <XML ID="xss"><I><B>&lt;IMG SRC="javas<!-- -->cript:alert('XSS')"  data island with comment obfuscation
	//$vinces[]='â•?'; // US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	//borks apache
	//$vinces[]='Â¥'; //US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	//borks apache
	//$vinces[]='Ã³'; // US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	 //borks apache
	$vinces[]="?_url"; //  open redirector exploit


	//$val=str_ireplace($vinces,"<x>",$val);
	$val=str_replace(array("\r","\t","\n"),"" , $val);
	// end vinces

	// straight replacements, the user should never need these since they're normal characters
	// this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&#X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29>
	$search = 'abcdefghijklmnopqrstuvwxyz';
	$search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$search .= '1234567890!@#$%^&*()';
	$search .= '~`";:?+/={}[]-_|\'\\';
	$lensearch = strlen($search);
	for ($i = 0; $i < $lensearch; $i++)
		{
		// ;? matches the ;, which is optional
		// 0{0,7} matches any padded zeros, which are optional and go up to 8 chars

		// &#x0040 @ search for the hex values
		$val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); // with a ;
		// &#00064 @ 0{0,7} matches '0' zero to seven times
		$val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ;
		}

	// now the only remaining whitespace attacks are \t, \n, and \r

	$ra = array_merge($ra1, $ra2);
	$found = false; // keep replacing as long as the previous round replaced something // Currently disabled due to it replacing too many things of value. Joomla ignores things like <script>, probably for the same reasons, we're going to need to do the same thing too otherwise the system is unusable. Eg. you can't have a property in Basel because Basel gets replaced with Ba<x>se.
	while ($found == true)
		{
		$val_before = $val;
		for ($i = 0; $i < sizeof($ra); $i++)
			{
			$pattern = '/';
			for ($j = 0; $j < strlen($ra[$i]); $j++)
				{
				if ($j > 0)
					{
					$pattern .= '(';
					$pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?';
					$pattern .= '|(&#0{0,8}([9][10][13]);?)?';
					$pattern .= ')?';
					}
				$pattern .= $ra[$i][$j];
				}
			$pattern .= '/i';
			$replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); // add in <> to nerf the tag
			$val = preg_replace($pattern, $replacement, $val); // filter out the hex tags
			if ($val_before == $val)
				{
				// no replacements were made, so exit the loop
				$found = false;
				}
			}
		}
	
	return $val;
	}
