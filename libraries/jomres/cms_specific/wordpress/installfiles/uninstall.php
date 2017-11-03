<?php

if (!defined('ABSPATH') || !defined('WP_UNINSTALL_PLUGIN')) {
	die;
}

define( '_JOMRES_INITCHECK', 1 );

if (file_exists(ABSPATH.'jomres_root.php')) {
	require_once ABSPATH.'jomres_root.php';
} else {
	return;
}

if (file_exists(ABSPATH.JOMRES_ROOT_DIRECTORY.'/integration.php')) {
	require_once ABSPATH.JOMRES_ROOT_DIRECTORY.'/integration.php';
} else {
	return;
}

$jomres_uninstall = jomres_singleton_abstract::getInstance('jomres_uninstall');
$jomres_uninstall->uninstall();
