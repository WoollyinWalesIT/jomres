<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * @package Jomres\Core\Functions
 *
 * Where possible us mb_string functionality for substr.
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
 * @package Jomres\Core\Functions
 *
 *          Where possible use mb_string functionalty for strtolower
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
 * @package Jomres\Core\Functions
 *
 *          Where possible use mb_string functionality to return uppercase words
 *
 */
function jr_ucwords($str)
{
	return mb_ucwords($str);
}

/**
 * 
 * @package Jomres\Core\Functions
 *
 *          A roll-your-own implementation of mb_ucwords
 *
 */
if (!function_exists('mb_ucwords')) {
	function mb_ucwords($str)
	{
		return mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');
	}
}
