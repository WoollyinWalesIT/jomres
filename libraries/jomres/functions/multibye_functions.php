<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * 
 *
 *
 */
function jr_substr($str, $arg1, $arg2)
{
	if (!function_exists('mb_substr')) {
		$result = substr($str, $arg1, $arg2);
	} else {
		$result = mb_substr($str, $arg1, $arg2, 'UTF-8');
	}

	return $result;
}

/**
 * 
 *
 *
 */
function jr_strtolower($str)
{
	if (!function_exists('mb_strtolower')) {
		$result = strtolower($str);
	} else {
		$result = mb_strtolower($str);
	}

	return $result;
}

/**
 * 
 *
 *
 */
function jr_ucwords($str)
{
	return mb_ucwords($str);
}

/**
 * 
 *
 *
 */
if (!function_exists('mb_ucwords')) {
	function mb_ucwords($str)
	{
		return mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');
	}
}
