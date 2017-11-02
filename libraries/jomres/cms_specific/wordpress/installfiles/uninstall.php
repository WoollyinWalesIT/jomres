<?php

if (!defined('ABSPATH') || !defined('WP_UNINSTALL_PLUGIN')) {
	 exit();  // silence is golden
}

define( '_JOMRES_INITCHECK', 1 );

if (file_exists(get_home_path().'jomres_root.php')) {
	require_once get_home_path().'jomres_root.php';
} else {
	return;
}

if (file_exists(get_home_path().JOMRES_ROOT_DIRECTORY.'/integration.php')) {
	require_once get_home_path().JOMRES_ROOT_DIRECTORY.'/integration.php';
} else {
	return;
}

$jomres_uninstall = jomres_singleton_abstract::getInstance('jomres_uninstall');
$jomres_uninstall->uninstall();
