<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

function jr_substr($str,$arg1,$arg2)
	{
	if (!function_exists('mb_substr'))
		$result = substr($str,$arg1,$arg2);
	else
		$result = mb_substr($str,$arg1,$arg2);
	return $result;
	}

?>