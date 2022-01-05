<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.0.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
defined('_JEXEC') or die('');

/**
 *
 * @package Jomres\Core\CMS_Specific
 *
 */

if (!defined('_JOMRES_INITCHECK')) {
    define('_JOMRES_INITCHECK', 1);
}

if (!defined('JOMRES_ROOT_DIRECTORY')) {
    if (file_exists(dirname(__FILE__).'/../../jomres_root.php')) {
        require_once dirname(__FILE__).'/../../jomres_root.php';
    } else {
        define('JOMRES_ROOT_DIRECTORY', 'jomres');
    }
}


include_once __DIR__.DIRECTORY_SEPARATOR.'router'.DIRECTORY_SEPARATOR.'base.php';
include_once __DIR__.DIRECTORY_SEPARATOR.'router'.DIRECTORY_SEPARATOR.'router.php';

function JomresBuildRoute(&$query)
{
    $router = new JomresRouter();

    return $router->build($query);
}

function JomresParseRoute($segments)
{
    $router = new JomresRouter();

    return $router->parse($segments);
}

