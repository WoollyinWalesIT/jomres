<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

define('_COMPONENT_JOMRES_INTEGRATIONCALLED','1');

global $jomresPath,$license_key,$jomresConfig_absolute_path,$MiniComponents;
global $mrConfig,$jrConfig,$jomres_systemLog_path;
global $ra1,$ra2,$convertedRAs,$lessThans; // globaled so that we don't need to initialise them every time
global $R;

// Stuff we want to filter out of inputs.
	$ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', '<link', '<style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', '<title', 'base','mocha','livescript','@import','<html','<body');
	$ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload','fromcharcode',';alert',':alert','fscommand','onbegin','ondragdrop','onend','onmediacomplete','onmediaerror','onoutofsync','onpause','onprogress','onrepeat','onresume','onreverse','onrowsenter','onrowdelete','onrowinserted','onscrollby','onseek','onsyncrestored','ontimeerror','ontrackchange','onurlflip','seeksegmenttime','scriptlet');
$lessThans=array('%3C','&lt','&lt;','&LT','&LT;','&#60','&#060','&#0060','&#00060','&#000060','&#0000060','&#60;','&#060;','&#0060;','&#00060;','&#000060;','&#0000060;','&#x3c','&#x03c','&#x003c','&#x0003c','&#x00003c','&#x000003c','&#x3c;','&#x03c;','&#x003c;','&#x0003c;','&#x00003c;','&#x000003c;','&#X3c','&#X03c','&#X003c','&#X0003c','&#X00003c','&#X000003c','&#X3c;','&#X03c;','&#X003c;','&#X0003c;','&#X00003c;','&#X000003c;','&#x3C','&#x03C','&#x003C','&#x0003C','&#x00003C','&#x000003C','&#x3C;','&#x03C;','&#x003C;','&#x0003C;','&#x00003C;','&#x000003C;','&#X3C','&#X03C','&#X003C','&#X0003C','&#X00003C','&#X000003C','&#X3C;','&#X03C;','&#X003C;','&#X0003C;','&#X00003C;','&#X000003C;','\x3c','\x3C','\u003c','\u003C');
$convertedRAs=initRemoveXSS($ra1,$ra2);

$R=array();
$R[gettype(.0)]='float';
$R[gettype(0)]='int';
$R[gettype(true)]='boolean';
$R[gettype('')]='string';
$R[gettype(null)]='null';
$R[gettype(array())]='array';
$R[gettype(new stdClass())]='object';

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
	$dir_path = str_replace( $_SERVER['SCRIPT_NAME'], "", dirname(realpath(__FILE__)) ) ;
	define('JOMRESPATH_BASE', $dir_path );
	}

$jomresConfig_absolute_path = substr(JOMRESPATH_BASE, 0, strlen(JOMRESPATH_BASE)-7);
define('JOMRESCONFIG_ABSOLUTE_PATH',$jomresConfig_absolute_path);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomres_singleton_abstract.class.php');
$showtime = jomres_getSingleton('showtime');
$performance_monitor =jomres_getSingleton('jomres_performance_monitor');
$performance_monitor->set_point("pre-inclusions");
$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."site_config.php");

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."detect_cms.php");
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."init_config_vars.php");

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'jr_gettext.php');

define('JOMRES_SYSTEMLOG_PATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.'temp'.JRDS);

$jomresConfig_dbtype = 'mysql';


if (!function_exists ('adodb_date_test_date') )
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'adodb'.JRDS.'adodb-time.inc.php');

if (!class_exists('patTemplate') )
	require_once('libraries'.JRDS.'phptools'.JRDS.'patTemplate.php');
if (!class_exists('patErrorManager') )
	require_once('libraries'.JRDS.'phptools'.JRDS.'patErrorManager.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'PHPMailer_v2.0.0'.JRDS.'class.phpmailer.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomSearch.class.php');
if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php') )
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'code_changes'.JRDS.'countries.php');
else
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'countries.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS.'imagehandling.php');
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_functions.php");

$performance_monitor->set_point("post-inclusions");

if (!strstr($scriptname,'install_jomres.php'))
	{
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	}

define('LOGGINGBOOKING',$jrConfig['loggingBooking']);
define('LOGGINGGATEWAY',$jrConfig['loggingGateway']);
define('LOGGINGSYSTEM',$jrConfig['loggingSystem']);
define('LOGGINGREQUEST',$jrConfig['loggingRequest']);
define('LOGGINGPORTAL',$jrConfig['loggingPortal']);

// loads en language file by default
if ($jomresConfig_lang=='')
	{
	set_showtime('lang','en-GB');
	$jomresConfig_lang = 'en-GB';
	}

$MiniComponents =jomres_getSingleton('mcHandler');
$MiniComponents->triggerEvent('00001'); // Start

//require_once('libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'remote.class.php');

if (!defined('JOMRES_TEMPLATEPATH_FRONTEND'))
	define('JOMRES_TEMPLATEPATH_FRONTEND',"templates".JRDS."jomres".JRDS."frontend");
if (!defined('JOMRES_TEMPLATEPATH_BACKEND'))
	define('JOMRES_TEMPLATEPATH_BACKEND',"templates".JRDS."jomres".JRDS."backend");
if (!defined('JOMRES_TEMPLATEPATH_ADMINISTRATOR'))
	define('JOMRES_TEMPLATEPATH_ADMINISTRATOR',"templates".JRDS."jomres".JRDS."administrator");
if (!defined('JOMRES_CSSRELPATH'))
	define('JOMRES_CSSRELPATH',get_showtime('live_site').'/jomres/css/');
	
require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_urls.php");

set_error_handler('errorHandler');
jomres_parseRequest();

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (!strstr($scriptname,'install_jomres.php'))
	{
	$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey' LIMIT 1";
	$license_key=doSelectSql($query,1);
	}
else  // We're running install_jomres.php
	{
	$license_key=$_POST['lkey'];
	set_showtime('task',"showSiteConfig");
	}

$bang=explode("-",$license_key);
if (isset($bang[2]) )
	$product_id=$bang[2];

if ($product_id != "20")
	checkLicense($license_key,$scriptname);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($product_id != "20" )
	checkPropertyNumbers($license_key);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// In case somebody removes the above lines, we still need to set this define otherwise folks will not be able to create new properties
if (!defined('JOMRES_SINGLEPROPERTY'))
	define('JOMRES_SINGLEPROPERTY',false);
	
$performance_monitor->set_point("end integration run");
// Stops here

function jomresURL($link, $ssl=2)
	{
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();

	if (!$jrConfig['isInIframe'] )
		{
		$link=jomres_cmsspecific_makeSEF_URL($link);
		if ($ssl == 1)
			$link	= str_replace("http://","https://",$link);
		else
			$link	= str_replace("https://","http://",$link);
		}
	else
		{
		$link=str_replace("index.php","index2.php",$link);
		}
	//$link=str_replace("&amp;","&",$link);
	//$link=str_replace("&","&amp;",$link);
	return $link;
	}

// Called by, eg, $output['TOKEN']='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
function jomresSetToken()
	{
	$token = md5(uniqid(rand(), TRUE));
	if (!@session_start())
		{
		@ini_set('session.save_handler', 'files');
		session_start();
		}
	$_SESSION['jomresValidTokens'][] = $token;
	session_write_close();
	return $token;
	}

function jomresURLToken()
	{
	$t=jomresSetToken();
	return "&jomrestoken=".$t;
	}

// if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
function jomresCheckToken()
	{
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
	//$vinces[]='�?'; // US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	//borks apache
	//$vinces[]='¥'; //US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	//borks apache
	//$vinces[]='ó'; // US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	 //borks apache
	$vinces[]="?_url"; //  open redirector exploit


	$val=str_ireplace($vinces,"",$val);
	$val=str_replace(array("\r","\t","\n"),"" , $val);
	// end vinces

	// straight replacements, the user should never need these since they're normal characters
	// this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&#X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29>
	$search = 'abcdefghijklmnopqrstuvwxyz';
	$search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$search .= '1234567890!@#$%^&*()';
	$search .= '~`";:?+/={}[]-_|\'\\';
	for ($i = 0; $i < strlen($search); $i++)
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
	$found = true; // keep replacing as long as the previous round replaced something
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
	//$val=addslashes($val);  // Disabled as it wouldn't save windows paths
	return $val;
	}


function jomresGetParam($request,$element,$def=null,$mask='')	// variable type not used
	{

	global $R;
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	//echo $element .' - ';
	if (isset($request[$element]) )
		$dirty=$request[$element];
	else
		return $def;
	//var_dump($dirty);
	$clean=null;
	if (is_null($dirty))
		$dirty=$def;
	$type=$R[gettype($def)];
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
		case ('object') :
			$clean = (object) $dirty;
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
						$k=(int)$key2;
						$v=(int)$val2;
						$clean[$k]=$v;
						}
					}
				else
					{
					$k=(int)$key1;
					$v=(int)$val1;
					$clean[$k]=$v;
					}
				}
			break;
		default :	// treat everything else as a string.
			$dirty = (string) $dirty;
			$jomres_db =jomres_getSingleton('jomres_database');
			if (function_exists('filter_var'))
				{
				if ($mask != _MOS_ALLOWHTML )
					{
					$clean=filter_var($dirty,FILTER_SANITIZE_SPECIAL_CHARS);
					$clean = jomres_reconvertString($clean);
					}
				else
					$clean=getEscaped(RemoveXSS($dirty));
				}
			else
				{
				$clean=getEscaped(RemoveXSS($dirty));
				if ($jrConfig['allowHTMLeditor']=="0" || $mask != _MOS_ALLOWHTML )
					$clean =strip_tags ($clean);
				}
			break;
		}
	return $clean;
	}


function getEscaped( $text ) {
	$text=str_replace("'","&#39;",$text);
	if (!get_magic_quotes_gpc())
		return mysql_real_escape_string( $text );
	else
		return $text;
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
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
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
	$thisJRUser=jomres_getSingleton('jr_user');
	$userIsManager=$thisJRUser->userIsManager;
	return $userIsManager;
	}

function doSelectSql($query,$mode=FALSE)
	{
	$MiniComponents =jomres_getSingleton('mcHandler');
	$jomres_db =jomres_getSingleton('jomres_database');
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
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$MiniComponents =jomres_getSingleton('mcHandler');
	// Called doInsertSql, the title is not quite correct as this function also handles updates and deletes
	// We'll use the lack of text in $op as a way of indicating that we don't want this operation logged
	// This way we can call the audit directly from the insert internet booking function
	// rather than logging EVERYTHING that's done by the function.
	$jomres_db =jomres_getSingleton('jomres_database');
	$jomres_db->setQuery($query);
	if (!$jomres_db->query())
		{
		if (!$ignoreErrors)
			error_logging("Do insert failed :: ".$jomres_db->error." ".$query);
		return FALSE;
		}
	else
		{
		$thisID=mysql_insert_id();
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
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	$jomres_db =jomres_getSingleton('jomres_database');
	if ($jrConfig['errorChecking']) echo $query."<br>";
	$jomres_db->setQuery($query);
	if (!$jomres_db->query())
		return FALSE;
	else
		return TRUE;
	}


function jomres_audit($query,$op)
	{
	$thisJRUser=jomres_getSingleton('jr_user');
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
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
	$thisJRUser=jomres_getSingleton('jr_user');
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
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
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
	$jrtbar =jomres_getSingleton('jomres_toolbar');
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
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
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
	$thisJRUser=jomres_getSingleton('jr_user');
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	
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
		$obj = new stdClass;
		$obj->$value_name = $val;
		$obj->$text_name = trim( $text ) ? $text : $value;
		return $obj;
		}

	function selectList( $arr, $name, $attribs, $key, $text, $default=NULL )
		{
		$attribs = str_replace('class="inputbox"',"",$attribs);
		$output = '<span><select class="inputbox" name="'.$name.'" '.$attribs.'>';
		for ($i=0, $n= count( $arr ); $i < $n; $i++ )
			{
			$k = $arr[$i]->$key;
			$txt = $arr[$i]->$text;
			$selected ='';
			if ($k == $default)
				$selected .=' selected="selected"';
			$output .= '<option value="'.$k.'" '.$selected.'>'.$txt.'</option>';
		}
		$output .= "</select></span>";
		return $output;
		}

	function integerSelectList( $start, $end, $increment, $name, $attribs, $selected, $format="" )
		{
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
	$possible = "0123456789bcdfghjkmnpqrstvwxyz";
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
	$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();
	return $jrConfig;
	}

// ################################################################################################################################

function checkLicense($license_key,$scriptname)
	{
	if (strlen($license_key)==0 && get_showtime('task')!="showSiteConfig" && get_showtime('task')!="saveSiteConfig" && !strstr($scriptname,'install_jomres.php'))
		{
		echo "<font color='red'><h1>Your license key is not set, therefore you will not be able to use Jomres yet. Please ensure that you have entered the license key number in the Site Configuration -> Misc -> License Key field before continuing.</h1></font>";
		set_showtime('task',showSiteConfig);
		}

	if (defined('JOMRES_LICVALID'))
		{
		echo "Error, JOMRES_LICVALID already defined. Exiting";
		exit;
		}

	if (!strstr($scriptname,'install_jomres.php'))
		validateLicensekeyFile($license_key);

	if (defined('JOMRES_ISADMINCALLED'))
		{
		echo "Error, JOMRES_ISADMINCALLED already defined. Exiting";
		exit;
		}

	$request_uri=$_SERVER['REQUEST_URI'];
	$testUri='/administrator/';
	if (strstr($request_uri,$testUri) )
		define('JOMRES_ISADMINCALLED',true);
	else
		define('JOMRES_ISADMINCALLED',false);

	if (!JOMRES_LICVALID && JOMRES_ISADMINCALLED && ( $_REQUEST['task']!="showSiteConfig" && $_REQUEST['task']!="saveSiteConfig" &&$_REQUEST['task']!="saveLicenseKey" && $_REQUEST['task']!="getLicenseKey"))
		{
		$message="ERROR: Your license is not valid. Backend functionality is severely limited until this is resolved.<br>";
		$str='<SCRIPT LANGUAGE="JavaScript">document.location.href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=showSiteConfig&mosmsg='.$message.'";</script>';
		echo $str;
		}

	if (!JOMRES_LICVALID && JOMRES_ISADMINCALLED)
		{
		echo outputLicenseFailureReasonMessage();
		echo "<br/>If you have changed your license binding (IE, the domain and/or IP number the license is registered against, please click Save in Site Configuration as Jomres needs to rebuild the license key before your change will take affect.";
		}
	if ( (JOMRES_LICRESULT == 2 ||JOMRES_LICRESULT == 3 ||JOMRES_LICRESULT == 5 || JOMRES_LICRESULT == 7 || JOMRES_LICRESULT == 8 || JOMRES_LICRESULT == 9) && !JOMRES_ISADMINCALLED ) // License disabled/suspended
		{
		echo outputLicenseFailureReasonMessage();
		exit;
		}
	}

function checkPropertyNumbers($license_key)
	{
	$bang=explode("-",$license_key);
	if (isset($bang[2]) )
		$product_id=$bang[2];
	else
		$product_id=$bang[0];

	if (defined('JOMRES_SINGLEPROPERTY'))
		{
		echo "Error, JOMRES_SINGLEPROPERTY already defined. Exiting";
		exit;
		}
	if ($product_id == 18)
		define('JOMRES_SINGLEPROPERTY',true);
	else
		define('JOMRES_SINGLEPROPERTY',false);
	if (JOMRES_SINGLEPROPERTY)
		{
		$query="SELECT propertys_uid FROM #__jomres_propertys";
		$propertyList = doSelectSql($query);
		if (count($propertyList) > 1)
			{
			echo "Error, This system is only licensed to service one property. Exiting";
			exit;
			}
		}
	}


function outputLicenseFailureReasonMessage()
	{
	switch (JOMRES_LICRESULT)
		{
		case 0:
			$message="<b>Unable to read key (it's possible that /jomres/temp/key.php isn't readable by the web server)</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 1:
		break;
		case 2:
			$message="<b>SHA1 hash incorrect (key may have been tampered with)</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 3:
			$message="<b>MD5 hash incorrect (key may have been tampered with)</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 4:
			$message="<br><b>Hostname or IP doesn't match hostname/IP that the license is bound to.<br>, please  Check that this host is the same as that bound to the license.<br>Also check that you are not on load balanced servers/a proxy bank. If you are then make a list of the IPs that show in the connectivity test and pass them onto jomres.net so that they can adjust your license bindings accordingly.<br> Log onto <a href=\"http://license-server.jomres.net\" target=\"_blank\">the license server</a> and view your domain details by clicking on View in the Manage column next to your license.</b> <br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue<br></center>';
		break;
		case 5:
			$message="<b>License has expired</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 6:
			$message="<b><br>The hostname in the key file and the hostname you are using to access this server are not the same.</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.' You may experience this if you normally use "localhost" and are now using "127.0.0.1" or you moved your Jomres/Joomla installation from a sub-domain to the root, or vice versa. <br>'.'Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 7:
			$message="<b>IP does not match key file</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 8:
			$message="<b>License disabled</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 9:
			$message="<b>License suspended</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 10:
			$message="<b>Unable to open file for writing</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 11:
			$message="<b>Unable to write to file key file</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 12:
			$message="<b>Communication error</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue<br>Check that the server has access to the internet and that a firewall isn\'t preventing it from communicating with the license server at http://license-server.jomres.net.</center>';
		break;
		case 13:
			$message="<b>Fopen error</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		case 14:
			$message="<b>PHP not compiled with sha1 encryption</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		default:
			$message="<b>Unknown error</b><br>";
			$result='<center>Keyfile failed validation. Error message: '.$message.'. Please contact <a href="http://www.jomres.net">Jomres.net</a> for help in resolving this issue</center>';
		break;
		}
	return $result;
	}

function validateLicensekeyFile($license_key)
	{
	/*
	* Possible Responses:
	* - 0: Unable to read key
	* - 1: Everything is OK
	* - 2: SHA1 hash incorrect (key may have been tampered with)
	* - 3: MD5 hash incorrect (key may have been tampered with)
	* - 4: License key does not match key string in key file
	* - 5: License has expired
	* - 6: Host name does not match key file
	* - 7: IP does not match key file
	*/
	// Home call details
	$user_defined_string = '230a25e276da';
	$key_age = 1296000;
	$kerboom = explode ("-",$license_key);
	if ($kerboom[2] == "17") // It's a demo license, we need to check more often
		$key_age = 60;
	
	$key = new jomres_iono_keys($license_key, $user_defined_string, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS.'key.php',$key_age);

	if (!defined('JOMRES_LICRESULT') );
		define('JOMRES_LICRESULT',$key->result);

	switch ($key->result)
		{
		case 0:
			define('JOMRES_LICVALID',false);
		break;
		case 1:
		break;
		case 2:
			define('JOMRES_LICVALID',false);
		break;
		case 3:
			define('JOMRES_LICVALID',false);
		break;
		case 4:
			define('JOMRES_LICVALID',false);
		break;
		case 5:
			define('JOMRES_LICVALID',false);
		break;
		case 6:
			define('JOMRES_LICVALID',false);
		break;
		case 7:
			define('JOMRES_LICVALID',false);
		break;
		case 8:
			define('JOMRES_LICVALID',false);
		break;
		case 9:
			define('JOMRES_LICVALID',false);
		break;
		case 10:
			define('JOMRES_LICVALID',false);
		break;
		case 11:
			define('JOMRES_LICVALID',false);
		break;
		case 12:
			@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS.'key.php');
			define('JOMRES_LICVALID',false);
		break;
		case 13:
			define('JOMRES_LICVALID',false);
		break;
		case 14:
			define('JOMRES_LICVALID',false);
		break;
		default:
			define('JOMRES_LICVALID',false);
		break;
		}
	if (!defined('JOMRES_LICVALID'))
		define('JOMRES_LICVALID',true);
	}


function testConnectivity()
	{
	$home_url_site 	= "license-server.jomres.net";		// The license server that we are testing conectivity to.
	$home_url_port 	= 80;								// The port we will be attempting to connect via.
	$home_pathtoremote = "/";							// Path to remote.php. If your license server is in a sub-folder you can define the folder here.
														// NOTE not tested. Feedback on the iono forum welcome.
	$outPutSteps	= true;								// Echo the connection steps? We will leave this as an option so that the class can be used within another application if required.

	echo "<h2><center>Testing connectivity to the license server</h2></center><br>";
	$cTest = new ionoServerConnectivityTest($outPutSteps);
	$result= $cTest->testConnectivity($home_url_site,$home_url_port,$home_pathtoremote);
	//$result = false;
	echo "";

	echo "Connection attempted using method: ".$cTest->connectionMethodAttempted."<br>";
	if (!$result)
		{
		echo "Tried to connect to the license server on $home_url_site but failed<br>";
		echo "<br>This may be because of a firewall or iptables preventing outgoing communications, or because this server is not connected to the internet";
		}
	else
		{
		echo "Connected to license server on $home_url_site succssfully<br>";
		}
	echo "</center>";
	}


class ionoServerConnectivityTest
	{
	function ionoServerConnectivityTest($outPutSteps = true)
		{
		$this->outPutSteps = $outPutSteps;
		$this->connectionMethodAttempted = 'NONEYET';
		}
	function testConnectivity($home_url_site,$home_url_port = 80,$home_pathtoremote = "/")
		{
		$success = false;
		if ($this->outPutSteps)
			echo "<center>";
		// Let's get some server information
		if (!isset($_SERVER['SERVER_NAME']) )
			echo "SERVER_NAME not found. Are we on an IIS server?<br>";
		$domain=strtolower(str_replace("http://","",$_SERVER['SERVER_NAME']));
		if ($this->outPutSteps)
			{
			echo "<H3>Found domain: ".$domain."</H3>";
			echo "The domain found is the domain which your server is trying to authenticate against the license server.";
			echo "<h3>on IP ".$_SERVER['SERVER_ADDR']."</h3><br>";
			}
		// Build request
		$request = '';
		$request = $home_url_site.'?'.$request;
		// Build HTTP header
		$header	= "GET $request HTTP/1.0\r\nHost: $home_url_site$home_pathtoremote\r\nConnection: Close\r\nUser-Agent: Iono connectivity tester\r\n";
		$header .= "\r\n\r\n";
		// Some servers are configured to return very little information. We will parse phpinfo to try to find the value of the master Fopen settings (and hope that at least phpino is available).
		// If master Fopen is Off then Fopen is also disabled, we'll try to switch to CURL. Local fopen is not used here but we'll keep it in case we need it sometime in the future.
		$configSets=$this->parseConfiguration();
		//$localFopen=$configSets["PHP Core"]['allow_url_fopen'][0];
		$masterFopen=$configSets["PHP Core"]['allow_url_fopen'][1];
		// Output the value of the master Fopen
		if ($this->outPutSteps)
			{
			echo "Master fopen = ";
			print_r($masterFopen);
			echo "<br>";
			}
		if (function_exists('curl_init')) // use CURL
			{
			$this->connectionMethodAttempted = 'CURL';
			if ($this->outPutSteps)
				echo "Trying to use CURL to connect to license server<br>";
			$return=$this->get_content_curl($home_url_site,$request,$headers);
			if ($return)
				{
				if ($this->outPutSteps)
					echo "Connected successfully with license server using CURL";
				$success = true;
				}
			else
				{
				if ($this->outPutSteps)
					echo "Failed to connect to license server using CURL";
				$success = false;
				}
			}
		else // use fsock
			{
			$this->connectionMethodAttempted = 'FSOCK';
			if ($this->outPutSteps)
				echo "Trying to use fsock to connect to license server<br>";
			$fpointer = @fsockopen($home_url_site, $home_url_port, $errno, $errstr, 5);
			if ($fpointer)
				{
				if ($this->outPutSteps)
					echo "Connected successfully with license server using fsock<br>";
				$success = true;
				}
			else
				{
				if ($this->outPutSteps)
					{
					echo "Failed to connect to license server using fsock<br>";
					echo $errstr."<br>";
					}
				$success = false;
				}
			}
		if ($this->outPutSteps)
			echo "</center>";
		return $success;
		}


	function get_content_curl($url,$request,$headers)
		{
		if (function_exists('curl_init'))
			{
			$ch = curl_init();
			$timeout = 5; // set to zero for no timeout
			curl_setopt ($ch, CURLOPT_URL, 'http://license-server.jomres.net/');
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$file_contents = curl_exec($ch);
			curl_close($ch);
			return $file_contents;
			}
		else
			{
			if ($this->outPutSteps)
				echo "Error, tried to use CURL but function doesn't exist. Please ensure that PHP is compiled with CURL enabled.";
			return false;
			}
		}

	function parseConfiguration()
		{
		ob_start();
		if (function_exists('phpinfo'))
			phpinfo(INFO_CONFIGURATION);
		else
			{
			return false;
			$this->phpInfoAvailable = false;
			}
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
	}


# $Date: 2005-11-26 00:01:05 +0000 (Sat, 26 Nov 2005) $
# 4
# **************************************************************************
# User details must be added in here. This would usually be done in another
# file. See documentation for help and examples.

//$license_key = 'USER LICENSE KEY'; // License's key
# *************************************************************************

# You do not need to edit any of the following code........Vince: Wanna bet?
/**
* iono License Key File Handling
*
* @author David Mytton
* @copyright Olate Ltd 2005
* @link http://www.olate.co.uk
* @version 1.2.0
* @package iono
*/
class jomres_iono_keys
{

	/**
	* Sets the class vars and then checks the key file.
	* @param string $license_key The user's license key
	* @param string $remote_auth The remote authorisation string from iono settings
	* @param string $key_location The location of the key file to use
	* @param int $key_age The maximum age of the key file before it is regenerated (seconds) default 15 days (1296000)
	*/
	function jomres_iono_keys($license_key, $remote_auth, $key_location = 'key.php', $key_age = 1296000)
		{
		/**
		* @var string The user's license key
		* @access private
		*/
		$this->license_key="";
		/**
		* @var string The iono root site location
		* @access private
		*/
		$this->home_url_site = 'license-server.jomres.net';
		/**
		* @var int The iono root site location port for access
		* @access private
		*/
		$this->home_url_port = 80;
		/**
		* @var string The iono location
		* @access private
		*/
		$this->home_url_iono = '/remote.php';
		/**
		* @var string The location of the key file to use
		* @access private
		*/
		$this->key_location = $key_location;
		/**
		* @var string Remote Authentication String from your iono installation
		* @access private
		*/
		$this->remote_auth = $remote_auth;
		/**
		* @var int The maximum age of the key file before it is regenerated (seconds)
		* @access private
		*/
		$this->key_age =$key_age;
		/**
		* @var array The data stored in the key
		* @access private
		*/
		$this->key_data = "";
		/**
		* @var int Current timestamp. Needs to be constant throughout class so is set here
		* @access private
		*/
		$this->now = time();
		/**
		* @var int The result of the key actions
		* @access public
		*/
		$this->result = null;
		// Set the class vars
		$this->license_key = $license_key;
		$this->remote_auth = $remote_auth;
		$this->key_location =	$key_location;
		$this->key_age =	$key_age;
		$this->now = time();
		$thisServer = jomresGetDomain();

		if ($thisServer == 'localhost' && strstr(get_showtime('live_site'),'localhost') )
			{
			$this->result = 1;
			return;
			}

		// Does the key exist? If not, then we need to create it. Else read it.
		if (file_exists($this->key_location))
		{
			$this->result = $this->read_key();
		}
		else
		{
			$this->result = $this->generate_key();

			if (empty($this->result))
			{
				$this->result = $this->read_key();
			}
		}

		unset($this->remote_auth);
		}


	/**
	* Gets the license details form the iono server and writes to the key file
	*
	* Responses:
	* - 8: License disabled
	* - 9: License suspended
	* - 5: License expired
	* - 10: Unable to open file for writing
	* - 11: Unable to write to file
	* - 12: Unable to communicate with iono
	* - 13: Vince's new: master fopen is off
	* - 14: Vince's new: PHP not compiled with sha1 encryption
	* @return int Response code
	* @access private
	*/
	function generate_key()
	{
		// Build request
		$domain=jomresGetDomain();
		$request = 'remote=licenses&type=5&license_key='.urlencode(base64_encode($this->license_key));
		$request .= '&host_ip='.urlencode(base64_encode($_SERVER['SERVER_ADDR'])).'&host_name='.urlencode(base64_encode($domain));
		$request .= '&hash='.urlencode(base64_encode(md5($request)));

		$request = $this->home_url_iono.'?'.$request;
		// Build HTTP header
		$header	= "GET $request HTTP/1.0\r\nHost: $this->home_url_site\r\nConnection: Close\r\nUser-Agent: iono (www.olate.co.uk/iono)\r\n";
		$header .= "\r\n\r\n";

		$configSets=parseConfiguration();
		$localFopen=$configSets["PHP Core"]['allow_url_fopen'][0];
		$masterFopen=$configSets["PHP Core"]['allow_url_fopen'][1];

		if (!function_exists('sha1') )
			return 14;

		if ($masterFopen == "Off")
			{

			$return=get_content_curl($this->home_url_site,$request,$header,$this->license_key);
			//return 13;
			$string=$return;
			}
		else
			{

			// Contact license server
			$fpointer = @fsockopen($this->home_url_site, $this->home_url_port, $errno, $errstr, 5);
			$return = '';
			if ($fpointer)
			{
				@fwrite($fpointer, $header);
				while(!@feof($fpointer))
				{
					$return .= @fread($fpointer, 1024);
				}
				@fclose($fpointer);
			}
			else
				{
				return 12;
				}
			// Get rid of HTTP headers
			$content = explode("\r\n\r\n", $return);

			$content = explode($content[0], $return);
			// Split up the content
			$string = urldecode($content[1]);
			}


		//$string = '1|key|' .(time()+2000) .'|localhost|127.0.0.1';
		$exploded = explode('|', $string);
		switch (trim($exploded[0])) // If we have an inactive license, return the status code
		{
			case 0: // Disabled
				return 8;
				break;
			case 2: // Suspended
				return 9;
				break;
			case 3: // Expired
				return 5;
				break;
		}

		$data['license_key'] = @$exploded[1];
		$data['expiry']	= @$exploded[2];
		$data['hostname'] = @$exploded[3];
		$data['ip']	= @$exploded[4];
		$data['timestamp'] = $this->now;

		$data_encoded = serialize($data);
		$data_encoded = base64_encode($data_encoded);
		$data_encoded = md5($this->now.$this->remote_auth).$data_encoded;
		$data_encoded = strrev($data_encoded);
		$data_encoded_hash = sha1($data_encoded.$this->remote_auth);
		$fp = fopen($this->key_location, 'w');
		if ($fp)
		{
			$fp_write = fwrite($fp, wordwrap($data_encoded.$data_encoded_hash, 40, "\n", true));

			if (!$fp_write)
			{
				return 11; // Unable to write to file
			}
			fclose($fp);
		}
		else
		{
			return 10; // Unable to open file for writing
		}
	}



/**
	* Read the key file and then return a response code
	*
	* Responses:
	* - 0: Unable to read key
	* - 1: Everything is OK
	* - 2: SHA1 hash incorrect (key may have been tampered with)
	* - 3: MD5 hash incorrect (key may have been tampered with)
	* - 4: License key does not match key string in key file
	* - 5: License has expired
	* - 6: Host name does not match key file
	* - 7: IP does not match key file
	* @return int Response code
	* @access private
	*/
	function read_key()
	{
		$key = file_get_contents($this->key_location);

		if ($key)
			{
			$key = str_replace("\n", '', $key); // Remove the line breaks from the key string

			// Split out SHA1 hash from the key data
			$key_string = substr($key, 0, strlen($key)-40);
			$key_sha_hash = substr($key, strlen($key)-40, (strlen($key)));

			if (sha1($key_string.$this->remote_auth) == $key_sha_hash) // Compare SHA1 hash to the key data
			{
				$key = strrev($key_string); // Back the right way around

				$key_hash = substr($key, 0, 32); // Get the MD5 hash of the data from the string
				$key_data = substr($key, 32); // Get the data from the string
				$key_data = base64_decode($key_data);

				$key_data = unserialize($key_data);
				if (md5($key_data['timestamp'].$this->remote_auth) == $key_hash) // Check the MD5 hash
				{
					// Is it more than $this->key_age seconds old?
					if (($this->now - $key_data['timestamp']) >= $this->key_age)
						{
						unlink($this->key_location);
						$this->result = $this->generate_key();
						if (empty($this->result))
						{
							$this->result = $this->read_key();
						}
					return 1; // Have to return here because there is a 1 second delay due to the nature of time()
					}
					else
						{
						$this->key_data = $key_data;
						if ($key_data['license_key'] != $this->license_key)
							{
							return 4; // License key does not match key string in key file
							}
						if ($key_data['expiry'] <= $this->now && $key_data['expiry'] != 1)
							{
							return 5; // License key expired
							}
						//Are we on IIS? Doesn't have the $_SERVER['SERVER_NAME'] variable.
						if (isset($_SERVER['SERVER_NAME']) && !empty($_SERVER['SERVER_NAME'])	)
							{
							// Do we have multiple hostnames?
							$domain=jomresGetDomain();
							if (substr_count($key_data['hostname'], ',') == 0)
								{ // No
								if ($key_data['hostname'] != $domain && !empty($key_data['hostname']))
									{
									return 6; // Host name does not match key file
									}
								}
							else
								{ // Yes
								$hostnames = explode(',', $key_data['hostname']);
								if (!in_array($domain, $hostnames))
									{
									return 6; // Host name is not in key file
									}
								}
							}
						// Do we have multiple IPs?
						//var_dump($_SERVER);
						if (substr_count($key_data['ip'], ',') == 0)
							{ // No
							if (!isset($_SERVER['SERVER_ADDR']) ) // Disables this check as we're on IIS so just passes back the OK return
								return 1;
							if ($key_data['ip'] != $_SERVER['SERVER_ADDR'] && !empty($key_data['ip']))
								{
								echo "Server attempted to validate ".$_SERVER['SERVER_ADDR']." IP number, but failed<br>";
								return 7; // IP does not match key file
								}
							}
						else
							{ // yes
							$xyz=0;
							// Disabled due to server farms being a pain in the arse.
							/*
							$ips = explode(',', $key_data['ip']);
							//var_dump($ips);
							if (!in_array($_SERVER['SERVER_ADDR'], $ips))
								{
								echo "Server attempted to validate ".$_SERVER['SERVER_ADDR']." IP number, but failed<br>";
								return 7; // IP is not in key file
								}
							*/
							}
						return 1;
					}
				}
				else
				{
					return 3; // MD5 hash incorrect (key may have been tampered with)
				}
			}
			else
			{
				return 2; // SHA1 hash incorrect (key may have been tampered with)
			}
		}
		else
		{
			return 0;
		}
	}

	/**
	* Returns array of key data
	*
	* @return array Array of data in the key file
	*/
	function get_data()
	{
		return $this->key_data;
	}
}


function get_content_curl($url,$request,$header,$license_key="",$versionRequest=false)
	{
	$domain=jomresGetDomain();
	//$home_url_site = 'license-server.jomres.net';
	if (!$versionRequest)
		{
		$home_url_iono = '/remote.php';
		$request = 'remote=licenses&type=5&license_key='.urlencode(base64_encode($license_key));
		$request .= '&host_ip='.urlencode(base64_encode($_SERVER['SERVER_ADDR'])).'&host_name='.urlencode(base64_encode($domain));
		$request .= '&hash='.urlencode(base64_encode(md5($request)));
		$request = $url.$home_url_iono.'?'.$request."\r\n\r\n";
		}
	else
		$request=$url.$request;
		//var_dump($request);exit;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request);
	curl_setopt($ch, CURLOPT_PORT, 80);
	//curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
	//curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, 'iono (www.olate.co.uk/iono)');
	$file_contents = curl_exec($ch);
	return $file_contents;
	}

class jomres_getkeydata
	{
	function jomres_getkeydata()
		{
		$this->hostname = null;
		$this->expires = null;
		$this->expiry = null;
		$key_location =	JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS.'key.php';
		if (file_exists($key_location ) )
			{
			$key = file_get_contents($key_location);
			if ($key)
				{
				$key = str_replace("\n", '', $key); // Remove the line breaks from the key string
				// Split out SHA1 hash from the key data
				$key_string = substr($key, 0, strlen($key)-40);
				$key_sha_hash = substr($key, strlen($key)-40, (strlen($key)));
				$key = strrev($key_string); // Back the right way around
				$key_hash = substr($key, 0, 32); // Get the MD5 hash of the data from the string
				$key_data = substr($key, 32); // Get the data from the string
				$key_data = base64_decode($key_data);
				$key_data = unserialize($key_data);
				$this->hostname	= $key_data['hostname'];
				$this->expiry	= $key_data['expiry'];
				}
			}
		}
	}
// ################################################################


/**************************************************************************\
  * eGroupWare API - Browser detect functions                                *
  * This file written by Miles Lott <milosch@groupwhere.org>                 *
  * Majority of code borrowed from Sourceforge 2.5                           *
  * Copyright 1999-2000 (c) The SourceForge Crew - http://sourceforge.net    *
  * Browser detection functions for eGroupWare developers                    *
  * -------------------------------------------------------------------------*
  * This library is part of the eGroupWare API                               *
  * http://www.egroupware.org/api                                            *
  * ------------------------------------------------------------------------ *
  * This library is free software; you can redistribute it and/or modify it  *
  * under the terms of the GNU Lesser General Public License as published by *
  * the Free Software Foundation; either version 2.1 of the License,         *
  * or any later version.                                                    *
  * This library is distributed in the hope that it will be useful, but      *
  * WITHOUT ANY WARRANTY; without even the implied warranty of               *
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                     *
  * See the GNU Lesser General Public License for more details.              *
  * You should have received a copy of the GNU Lesser General Public License *
  * along with this library; if not, write to the Free Software Foundation,  *
  * Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA            *
  \**************************************************************************/

  /* $Id: class.browser.inc.php,v 1.23 2004/05/05 12:03:18 reinerj Exp $ */

	class browser
	{
		var $BROWSER_AGENT;
		var $BROWSER_VER;
		var $BROWSER_PLATFORM;
		var $br;
		var $p;
		var $data;

		function browser()
		{
			$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
			/*
				Determine browser and version
			*/
			if(ereg('MSIE ([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER = $log_version[1];
				$this->BROWSER_AGENT = 'IE';
			}
			elseif(ereg('Opera ([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version) ||
				ereg('Opera/([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER   = $log_version[1];
				$this->BROWSER_AGENT = 'OPERA';
			}
			elseif(eregi('iCab ([0-9].[0-9a-zA-Z]{1,4})',$HTTP_USER_AGENT,$log_version) ||
				eregi('iCab/([0-9].[0-9a-zA-Z]{1,4})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER   = $log_version[1];
				$this->BROWSER_AGENT = 'iCab';
			}
			elseif(ereg('Gecko',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER   = $log_version[1];
				$this->BROWSER_AGENT = 'MOZILLA';
			}
			elseif(ereg('Konqueror/([0-9].[0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version) ||
				ereg('Konqueror/([0-9].[0-9]{1,2})',$HTTP_USER_AGENT,$log_version))
			{
				$this->BROWSER_VER=$log_version[1];
				$this->BROWSER_AGENT='Konqueror';
			}
			else
			{
				$this->BROWSER_VER=0;
				$this->BROWSER_AGENT='OTHER';
			}

			/*
				Determine platform
			*/
			if(strstr($HTTP_USER_AGENT,'Win'))
			{
				$this->BROWSER_PLATFORM='Win';
			}
			elseif(strstr($HTTP_USER_AGENT,'Mac'))
			{
				$this->BROWSER_PLATFORM='Mac';
			}
			elseif(strstr($HTTP_USER_AGENT,'Linux'))
			{
				$this->BROWSER_PLATFORM='Linux';
			}
			elseif(strstr($HTTP_USER_AGENT,'Unix'))
			{
				$this->BROWSER_PLATFORM='Unix';
			}
			elseif(strstr($HTTP_USER_AGENT,'Beos'))
			{
				$this->BROWSER_PLATFORM='Beos';
			}
			else
			{
				$this->BROWSER_PLATFORM='Other';
			}

			/*
			echo "\n\nAgent: $HTTP_USER_AGENT";
			echo "\nIE: ".browser_is_ie();
			echo "\nMac: ".browser_is_mac();
			echo "\nWindows: ".browser_is_windows();
			echo "\nPlatform: ".browser_get_platform();
			echo "\nVersion: ".browser_get_version();
			echo "\nAgent: ".browser_get_agent();
			*/

			// The br and p functions are supposed to return the correct
			// value for tags that do not need to be closed.  This is
			// per the xhmtl spec, so we need to fix this to include
			// all compliant browsers we know of.
			if($this->BROWSER_AGENT == 'IE')
			{
				$this->br = '<br/>';
				$this->p = '<p/>';
			}
			else
			{
				$this->br = '<br>';
				$this->p = '<p>';
			}
		}

		function return_array()
		{
			$this->data = array(
				'agent'    => $this->get_agent(),
				'version'  => $this->get_version(),
				'platform' => $this->get_platform()
			);

			return $this->data;
		}

		function get_agent()
		{
			return $this->BROWSER_AGENT;
		}

		function get_version()
		{
			return $this->BROWSER_VER;
		}

		function get_platform()
		{
			return $this->BROWSER_PLATFORM;
		}

		function is_linux()
		{
			if($this->get_platform()=='Linux')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_unix()
		{
			if($this->get_platform()=='Unix')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_beos()
		{
			if($this->get_platform()=='Beos')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_mac()
		{
			if($this->get_platform()=='Mac')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_windows()
		{
			if($this->get_platform()=='Win')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_ie()
		{
			if($this->get_agent()=='IE')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_netscape()
		{
			if($this->get_agent()=='MOZILLA')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function is_opera()
		{
			if($this->get_agent()=='OPERA')
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		// Echo content headers for file downloads
		function content_header($fn='',$mime='',$length='',$nocache=True)
		{
			// if no mime-type is given or it's the default binary-type, guess it from the extension
			if(empty($mime) || $mime == 'application/octet-stream')
			{
				$mime_magic = createObject('phpgwapi.mime_magic');
				$mime = $mime_magic->filename2mime($fn);
			}
			if($fn)
			{
				if($this->get_agent() == 'IE') // && browser_get_version() == "5.5")
				{
					$attachment = '';
				}
				else
				{
					$attachment = ' attachment;';
				}

				// Show this for all
				header('Content-disposition:'.$attachment.' filename="'.$fn.'"');
				header('Content-type: '.$mime);

				if($length)
				{
					header('Content-length: '.$length);
				}

				if($nocache)
				{
					header('Pragma: no-cache');
					header('Pragma: public');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				}
			}
		}
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
?>