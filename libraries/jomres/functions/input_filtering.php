<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.5.3
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	use Joomla\CMS\Factory;

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Input filtering tools
	 *
	 *  Back in the mid-to-late naughties Joomla in particular was getting hammered by script kiddies trying to compromise systems. Filter var at the time wasn't available, or users were running older PHP versions so instead I found a variety of techniques to stymie the naughtly little blighters. This input filtering pre-dated those features since brought in by Joomla and Wordpress. To the best of my knowledge Jomres has never been compromised, so it makes sense to me to keep this in-situ, even though it looks as ugly as sin. If it aint broke, don't fix it.
	 */

	global $ra1, $ra2, $convertedRAs, $lessThans; // globaled so that we don't need to initialise them every time

//global $R;

// Stuff we want to filter out of inputs.
	$ra1 = array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', '<link', '<style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', '<title', 'base', 'mocha', 'livescript', '@import', '<html', '<body');
	$ra2 = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload', 'fromcharcode', ';alert', ':alert', 'fscommand', 'onbegin', 'ondragdrop', 'onend', 'onmediacomplete', 'onmediaerror', 'onoutofsync', 'onpause', 'onprogress', 'onrepeat', 'onresume', 'onreverse', 'onrowsenter', 'onrowdelete', 'onrowinserted', 'onscrollby', 'onseek', 'onsyncrestored', 'ontimeerror', 'ontrackchange', 'onurlflip', 'seeksegmenttime', 'scriptlet');
	$lessThans = array('%3C', '&lt', '&lt;', '&LT', '&LT;', '&#60', '&#060', '&#0060', '&#00060', '&#000060', '&#0000060', '&#60;', '&#060;', '&#0060;', '&#00060;', '&#000060;', '&#0000060;', '&#x3c', '&#x03c', '&#x003c', '&#x0003c', '&#x00003c', '&#x000003c', '&#x3c;', '&#x03c;', '&#x003c;', '&#x0003c;', '&#x00003c;', '&#x000003c;', '&#X3c', '&#X03c', '&#X003c', '&#X0003c', '&#X00003c', '&#X000003c', '&#X3c;', '&#X03c;', '&#X003c;', '&#X0003c;', '&#X00003c;', '&#X000003c;', '&#x3C', '&#x03C', '&#x003C', '&#x0003C', '&#x00003C', '&#x000003C', '&#x3C;', '&#x03C;', '&#x003C;', '&#x0003C;', '&#x00003C;', '&#x000003C;', '&#X3C', '&#X03C', '&#X003C', '&#X0003C', '&#X00003C', '&#X000003C', '&#X3C;', '&#X03C;', '&#X003C;', '&#X0003C;', '&#X00003C;', '&#X000003C;', '\x3c', '\x3C', '\u003c', '\u003C');
	$convertedRAs = initRemoveXSS($ra1, $ra2);

	function initRemoveXSS($ra1, $ra2)
	{
		$merged = array_merge($ra1, $ra2);
		$base64 = array();
		foreach ($merged as $m) {
			$base64[ ] = base64_encode($m);
		}

		return array($base64);
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * Remove cross site scripting javascript
	 */
	function RemoveXSS($val)
	{
		global $ra1, $ra2, $convertedRAs, $lessThans;
		//$val=stripslashes($val);  // Disabled as it wouldn't save windows paths
		// First let's  replace all the possible less than symbols with the real thing <
		$val = str_ireplace($lessThans, '', $val);
		// remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed
		// this prevents some character re-spacing such as <java\0script>
		// note that you have to handle splits with \n, \r, and \t later since they *are* allowed in some inputs
		$val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);

		foreach ($convertedRAs as $naughty) {
			$val = str_ireplace($naughty, '', $val);
		}

		// Vince's additions
		$vinces = array();
		$vinces[ ] = '&#x0A;'; //  <IMG SRC="jav&#x0A;ascript:alert('XSS');">  Embeded newline to break up XSS.
		$vinces[ ] = '&#x0D;'; // <IMG SRC="jav&#x0D;ascript:alert('XSS');">  Embedded carriage return to break up XSS
		$vinces[ ] = '&#14;'; //  <IMG SRC=" &#14;  javascript:alert('XSS');"> Spaces and meta chars before the JavaScript in images for XSS
		$vinces[ ] = '%53%43%52%49%50%54'; // URL:
		$vinces[ ] = '&#x53;&#x43;&#x52;&#x49;&#x50;&#x54;'; // HTML (with semicolons):
		$vinces[ ] = '&#83&#67&#82&#73&#80&#84'; // HTML (without semicolons):
		$vinces[ ] = '&#x26;&#x23;&#x78;&#x36;&#x41;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x31;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x36;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x31;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x33;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x33;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x32;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x39;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x30;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x34;&#x3B;'; // Javascript hex * 2

		$vinces[ ] = 'SIZE="&{'; // <BR SIZE="&{alert('XSS')}">	& JavaScript includes (works in Netscape 4.x):
		$vinces[ ] = '/*'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
		$vinces[ ] = '*/'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
		$vinces[ ] = '<!--'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
		$vinces[ ] = '-->'; // <IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))"> STYLE attribute using a comment to break up expression
		$vinces[ ] = '<!-- -->'; // <XML ID="xss"><I><B>&lt;IMG SRC="javas<!-- -->cript:alert('XSS')"  data island with comment obfuscation
		//$vinces[]='�?'; // US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	//borks apache
		//$vinces[]='¥'; //US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	//borks apache
		//$vinces[]='ó'; // US-ASCII encoding (found by Kurt Huwig). This uses malformed ASCII encoding with 7 bits instead of 8.	 //borks apache
		$vinces[ ] = '?_url'; //  open redirector exploit

		//$val=str_ireplace($vinces,"<x>",$val);
		$val = str_replace(array("\r", "\t", "\n"), '', $val);
		// end vinces

		// straight replacements, the user should never need these since they're normal characters
		// this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&#X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29>
		$search = 'abcdefghijklmnopqrstuvwxyz';
		$search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$search .= '1234567890!@#$%^&*()';
		$search .= '~`";:?+/={}[]-_|\'\\';
		$lensearch = strlen($search);
		for ($i = 0; $i < $lensearch; ++$i) {
			// ;? matches the ;, which is optional
			// 0{0,7} matches any padded zeros, which are optional and go up to 8 chars

			// &#x0040 @ search for the hex values
			$val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[ $i ])).';?)/i', $search[ $i ], $val); // with a ;
			// &#00064 @ 0{0,7} matches '0' zero to seven times
			$val = preg_replace('/(&#0{0,8}'.ord($search[ $i ]).';?)/', $search[ $i ], $val); // with a ;
		}

		// now the only remaining whitespace attacks are \t, \n, and \r

		$ra = array_merge($ra1, $ra2);
		$found = false; // keep replacing as long as the previous round replaced something // Currently disabled due to it replacing too many things of value. Joomla ignores things like <script>, probably for the same reasons, we're going to need to do the same thing too otherwise the system is unusable. Eg. you can't have a property in Basel because Basel gets replaced with Ba<x>se.
		while ($found == true) {
			$val_before = $val;
			for ($i = 0; $i < sizeof($ra); ++$i) {
				$pattern = '/';
				for ($j = 0; $j < strlen($ra[ $i ]); ++$j) {
					if ($j > 0) {
						$pattern .= '(';
						$pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?';
						$pattern .= '|(&#0{0,8}([9][10][13]);?)?';
						$pattern .= ')?';
					}
					$pattern .= $ra[ $i ][ $j ];
				}
				$pattern .= '/i';
				$replacement = substr($ra[ $i ], 0, 2).'<x>'.substr($ra[ $i ], 2); // add in <> to nerf the tag
				$val = preg_replace($pattern, $replacement, $val); // filter out the hex tags
				if ($val_before == $val) {
					// no replacements were made, so exit the loop
					$found = false;
				}
			}
		}

		return $val;
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * Filters all inputs passed from Requests into Jomres
	 */
	function jomresGetParam($request, $element, $def = null) // variable type not used, we'll cast the variable type depending on the default ($def) that's passed to the function
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$enable_input_cache = true;

		if ($enable_input_cache) {
			$purified_inputs_cache = jomres_singleton_abstract::getInstance('purified_inputs_cache');
			if ($purified_inputs_cache->is_cached($request, $element)) {
				return $purified_inputs_cache->get_cache($request, $element);
			}
		}

		// If the array element is set, we'll set $dirty to that, otherwise we'll simply return the default
		// if SEF enabled in joomla, we need to get the vars from jinput

		//vars that we`ve made SEF in router.php and are not available in $_REQUEST anymore
		if (!isset($_REQUEST[ 'calledByModule' ])) {
			$sef_vars = array('task', 'property_uid', 'selectedProperty', 'town', 'region', 'country', 'calledByModule', 'send');
		} else {
			$sef_vars = array();
		}

		if (!jomres_cmsspecific_areweinadminarea() && this_cms_is_joomla() && get_showtime('sef') == '1' && !AJAXCALL && !defined('AUTO_UPGRADE') && in_array($element, $sef_vars) && !array_key_exists($element,$request) ) {
			$app = Factory::getApplication();
			$input = $app->input;
			$dirty = $input->get($element, $def, 'STRING');
		} elseif (isset($request[ $element ])) {
			$dirty = $request[ $element ];
		} else {
			return $def;
		}


		// We'll discover the type of $dirty, so that we can cast the variable to a given type
		$type = jomres_get_var_type($def);

		if (!$type) { // If the data passed isn't recognised, we'll just return out, passing a nice safe null the calling script can work with.
			return null;
		}

		// Mostly we'll use type casting to clean the passed data. Array ALWAYS assumes that the array passed is an array of integers,
		// if you want to use another type of array you'll need to clean that up youself.
		// The main reason for using casting is 1. it's very effective and 2. it stops us needing to use the html purifier, which is cpu intensive.

		switch ($type) {
			case  'float':
				$clean = (float) $dirty;
				break;
			case  'int':
				$clean = (int) $dirty;
				break;
			case  'boolean':
				$clean = (bool) $dirty;
				break;
			case  'null':
				$clean = null;
				break;
			case  'array':
				$tmp = (array) $dirty;
				$clean = array();
				foreach ($tmp as $key1 => $val1) {
					if (is_array($key1)) {
						foreach ($key1 as $key2 => $val2) { // if the field value is an array, step through it
							$k = filter_var($key2, FILTER_SANITIZE_SPECIAL_CHARS);
							$v = filter_var($val2, FILTER_SANITIZE_SPECIAL_CHARS);
							$clean[ $k ] = $v;
						}
					} else {
						$k = filter_var($key1, FILTER_SANITIZE_SPECIAL_CHARS);
						$v = filter_var($val1, FILTER_SANITIZE_SPECIAL_CHARS);
						$clean[ $k ] = $v;
					}
				}
				break;
			default: // treat everything else as a string.
				$allowed_inputs = get_showtime('inputs_allowing_html');

				if (!is_array($allowed_inputs)) {
					$allowed_inputs = array();
				}

				if (!isset($jrConfig[ 'input_filtering' ])) {
					$jrConfig[ 'input_filtering' ] = 'strong';
				}

				$dirty = (string) $dirty;

				if (in_array($element, $allowed_inputs)) {
					if ($jrConfig[ 'input_filtering' ] != 'weak') {
						$clean = jomres_purify_html($dirty );

						if (strstr($clean, '&#39;;') || strstr($clean, 'Jzs=') || strstr($clean, 'Ijs=') || strstr($clean, '&quot;;') || strstr($clean, 'EMBED SRC')) { // '; "; '; (base64) "; (base64)
							throw new Exception('Error, illegal use of Javascript');
						}
					} else {
						$cleaner = str_replace("'", '&#180;', $dirty);
						$clean = str_replace('"', '&#34;', $cleaner);
						if (strstr($clean, '&#39;;') || strstr($clean, 'Jzs=') || strstr($clean, 'Ijs=') || strstr($clean, '&quot;;') || strstr($clean, 'EMBED SRC')) { // '; "; '; (base64) "; (base64)
							throw new Exception('Error, illegal use of Javascript');
						}
					}
				} else {

					$clean = jomres_sanitise_string($dirty);

					if (strstr($clean, '&#39;;') || strstr($clean, '&#34;;') || strstr($clean, 'Jzs=') || strstr($clean, 'Ijs=') || strstr($clean, '&quot;;') || strstr($clean, 'EMBED SRC')) { // '; "; '; (base64) "; (base64)
						throw new Exception('Error, illegal use of Javascript');
					}
				}

				break;
		}

		// http://georgemauer.net/2017/10/07/csv-injection.html
		// The "tab" solution in that article doesn't work because it results in output like "your	@email.com" in inputs. Instead the mailer will need to str_replace &#64; back to @
		$csv_bad = array ( "=" , "+" );
		$csv_good = array( '&#61;' , "&#43;" );
		$clean = str_replace($csv_bad,$csv_good,$clean);

		if ( isset($clean[0]) &&  $clean[0] == "@" ) {
			$clean = str_replace("@","&#64;",$clean);
		}

		if ( isset($clean[0]) &&  $clean[0] == "-" ) {
			$clean = str_replace("-","&#45;",$clean);
		}

		// end http://georgemauer.net/2017/10/07/csv-injection.html


		if ($enable_input_cache) {
			$purified_inputs_cache->set_cache($request, $element, $clean);
		}

		return $clean;
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * Going nuclear on inputs.
	 *
	 *
	 */
	function jomres_sanitise_string($dirty)
	{
		if ($dirty == '') { // No need to call purifier if there's noting to purify
			return '';
		}

		//logging::log_message('HTML purifier called for string '.$dirty, 'Core', 'DEBUG');
		$html_purifier = jomres_singleton_abstract::getInstance('jomres_input_filter_singleton');
		$dirty = jomres_remove_HTML($dirty); // Strip out any html
		$dirty = $html_purifier->purify($dirty);
		$dirty = str_replace('&amp;', '&', $dirty); // Without this ampersands will be double encoded
		$clean = filter_var($dirty, FILTER_SANITIZE_SPECIAL_CHARS);
		$clean = str_replace("&#13;&#10;" , "\n" , $clean); // This allows us to safely restore linebreaks
		return $clean;
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 *          Allow html, but still sanitise inputs
	 *
	 */
	function jomres_purify_html($dirty)
	{
		//logging::log_message('HTML purifier called', 'Core', 'DEBUG');
		$html_purifier = jomres_singleton_abstract::getInstance('jomres_input_filter_singleton');
		$dirty = $html_purifier->purify($dirty, $allow_html = true);

		$dirty = str_replace('&amp;', '&', $dirty);  // Without this ampersands will be double encoded
		$clean = filter_var($dirty, FILTER_SANITIZE_SPECIAL_CHARS);
		$clean = str_replace("&#13;&#10;" , "\n" , $clean); // This allows us to safely restore linebreaks
		return $clean;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *          Replace single quotes with their html equivalent.
	 */
	function getEscaped($text)
	{
		$text = str_replace("'", '&#39;', $text);

		return filter_var($text, FILTER_SANITIZE_SPECIAL_CHARS);
	}

// http://www.php.net/manual/en/function.strip-tags.php#97386
// Like many other functions in Jomres, it has been renamed to jomres_ becomes it's not unusual for other software developers to use the same functions in their libraries. Renaming the function thus prevents php from throwing duplicate function name errors

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *          Nuke html in a string, but preserve some depending on settings passed.
	 *
	 *
	 */

	function jomres_remove_HTML($s, $keep = 'p|br', $expand = 'script|style|noframes|select|option')
	{
		//prep the string
		$s = ' '.$s;

		$s = str_replace ( array("<br />" , "<br/>") , "\n" , $s);

		//initialize keep tag logic
		if (strlen($keep) > 0) {
			$k = explode('|', $keep);
			$n = count($k);
			for ($i = 0; $i < $n; ++$i) {
				$s = str_replace('<'.$k[ $i ], '[{('.$k[ $i ], $s);
				$s = str_replace('</'.$k[ $i ], '[{(/'.$k[ $i ], $s);
			}
		}

		//begin removal
		//remove comment blocks
		while (stripos($s, '<!--') > 0) {
			$pos[ 1 ] = stripos($s, '<!--');
			$pos[ 2 ] = stripos($s, '-->', $pos[ 1 ]);
			$len[ 1 ] = $pos[ 2 ] - $pos[ 1 ] + 3;
			$x = substr($s, $pos[ 1 ], $len[ 1 ]);
			$s = str_replace($x, '', $s);
		}

		//remove tags with content between them
		if (strlen($expand) > 0) {
			$e = explode('|', $expand);
			$n = count($e);
			for ($i = 0; $i < $n; ++$i) {
				while (stripos($s, '<'.$e[ $i ]) > 0) {
					$len[ 1 ] = strlen('<'.$e[ $i ]);
					$pos[ 1 ] = stripos($s, '<'.$e[ $i ]);
					$pos[ 2 ] = stripos($s, $e[ $i ].'>', $pos[ 1 ] + $len[ 1 ]);
					$len[ 2 ] = $pos[ 2 ] - $pos[ 1 ] + $len[ 1 ];
					$x = substr($s, $pos[ 1 ], $len[ 2 ]);
					$s = str_replace($x, '', $s);
				}
			}
		}

		//remove remaining tags
		while (stripos($s, '<') > 0) {
			$pos[ 1 ] = stripos($s, '<');
			$pos[ 2 ] = stripos($s, '>', $pos[ 1 ]);
			$len[ 1 ] = $pos[ 2 ] - $pos[ 1 ] + 1;
			$x = substr($s, $pos[ 1 ], $len[ 1 ]);
			$s = str_replace($x, '', $s);
		}

		//finalize keep tag
		if (isset($k)) {
			$n = count($k);
			for ($i = 0; $i < $n; ++$i) {
				$s = str_replace('[{('.$k[ $i ], '<'.$k[ $i ], $s);
				$s = str_replace('[{(/'.$k[ $i ], '</'.$k[ $i ], $s);
			}
		}

		return trim($s);
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 *          TODO Check to see if this is used anywhere
	 * @return
	 *
	 * @param string
	 * @param array
	 * @param bool
	 * @desc Function strip_tags_except() works similarly to strip_selected_tags() function but instead of allowing the user to specify the tags to strip, she can specify the tags to allow and strip all others. The third parameter, $strip, when TRUE removes "<" and ">" from the string and when FALSE converts them to "&lt;" and "&gt;" respectively.
	 */
// http://uk2.php.net/manual/en/function.strip-tags.php#73435
	function strip_tags_except($text, $strip = true)
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$all_tags = array();

		$allowedTags = explode('|', $jrConfig[ 'allowedTags' ]);
		if (!is_array($allowedTags)) {
			return $text;
		}

		if (empty($allowedTags)) {
			return $text;
		}
		$open = $strip ? '' : '&lt;';
		$close = $strip ? '' : '&gt;';

		preg_match_all('!<\s*(/)?\s*([a-zA-Z]+)[^>]*>!', $text, $all_tags);

		//$complete_tags=$all_tags[0];
		array_shift($all_tags);
		$slashes = $all_tags[ 0 ];
		$all_tags = $all_tags[ 1 ];

		foreach ($all_tags as $i => $tag) {
			if (in_array('<'.strtolower($tag).'>', $allowedTags)) {
				continue;
			}
			$text = preg_replace('!<(\s*'.$slashes[ $i ].'\s*'.$tag.'[^>]*)>!', $open.'$1'.$close, $text);
		}

		return $text;
	}


	/**
	 * @package Jomres\Core\Functions
	 *
	 * Returns the utf string corresponding to the unicode value (from php.net, courtesy - romans@void.lv).
	 */
	function jomres_code2utf($num)
	{
		if ($num < 128) {
			return chr($num);
		}
		if ($num < 2048) {
			return chr(($num >> 6) + 192).chr(($num & 63) + 128);
		}
		if ($num < 65536) {
			return chr(($num >> 12) + 224).chr((($num >> 6) & 63) + 128).chr(($num & 63) + 128);
		}
		if ($num < 2097152) {
			return chr(($num >> 18) + 240).chr((($num >> 12) & 63) + 128).chr((($num >> 6) & 63) + 128).chr(($num & 63) + 128);
		}

		return '';
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Find the variable type.
	 *
	 *          TODO Check to see if this is still used anywhere
	 */
	function jomres_get_var_type($variable)
	{
		if (is_array($variable)) {
			return 'array';
		} elseif (is_bool($variable)) {
			return 'boolean';
		} elseif (is_float($variable)) {
			return 'float';
		} elseif (is_int($variable)) {
			return 'int';
		} elseif (is_string($variable)) {
			return 'string';
		} else {
			return false;
		}
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * A simple request parser to check that mosConf.... isn't in the request string.
	 *
	 *          If it is, a naughty person might be trying to hack Jomres
	 */
	function jomres_parseRequest() //
	{
		// %6D%6F%73%43%6F%6E%66 = mosConf : urlencode
		// %6D%72%43%6F%6E%66%69%67  mrConfig hex
		//%6A%72%43%6F%6E%66%69%67  jrConfig hex
		foreach ($_REQUEST as $key => $val) {
			if (gettype($val) == 'string') {
				$ex_base64 = base64_decode($val);
				if (strstr($key, 'php://') || strstr($val, 'php://') || strstr($ex_base64, 'php://')) {
					trigger_error('Hack attempt', E_USER_ERROR);
				}
				if (strstr($key, 'mosConf') || strstr($val, 'mosConf') || strstr($ex_base64, 'mosConf') || stristr($val, '%6D%6F%73%43%6F%6E%66')) {
					trigger_error('Hack attempt', E_USER_ERROR);
				}
				if (strstr($key, 'mrConfig') || strstr($val, 'mrConfig') || strstr($ex_base64, 'mrConfig') || stristr($val, '%6D%72%43%6F%6E%66%69%67')) {
					trigger_error('Hack attempt', E_USER_ERROR);
				}
				if (strstr($key, 'jrConfig') || strstr($val, 'jrConfig') || strstr($ex_base64, 'jrConfig') || stristr($val, '%6A%72%43%6F%6E%66%69%67')) {
					trigger_error('Hack attempt', E_USER_ERROR);
				}
			}
		}
	}

//
	/**
	 * @package Jomres\Core\Functions
	 *
	 *          Converts a price into a safe Float
	 *
	 *          Previously we just used floats, however Europeans commonly use commas as a decimal seperator so we'll use this function to convert entered prices to nnn.nn values
	 */
	function convert_entered_price_into_safe_float($value)
	{
		$result = 0.00;
		if (strstr($value, ',')) {
			$value = str_replace('.', '^', $value);
			$value = str_replace(',', '.', $value);
			$value = str_replace('^', '', $value);
			$result = (float) $value;
		} else {
			$result = (float) $value;
		}

		return $result;
	}
