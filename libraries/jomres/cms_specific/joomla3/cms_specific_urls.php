<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 */

$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

if (defined('AUTO_UPGRADE')) {
	set_showtime('live_site', str_replace('/jomres', '', get_showtime('live_site')));
}

define('JOMRES_ADMINISTRATORDIRECTORY', 'administrator');

//find jomres itemId
$jomresItemid = 0;

if (!defined('AUTO_UPGRADE') && !isset($_REQUEST['itemId']) ) {
	$app = JFactory::getApplication(); 
	$menu = $app->getMenu();
	$menuItem = $menu->getItems( 'link', 'index.php?option=com_jomres&view=default', $firstonly = true );
	if ($menuItem) {
		$jomresItemid = (int)$menuItem->id;
	}
} elseif ( isset($_REQUEST['itemId']) ) {
	$jomresItemid = (int)$_REQUEST['itemId'];
}


//set jomres itemid
set_showtime('jomresItemid', $jomresItemid);

//tmpl
$tmpl = jomresGetParam($_GET, 'tmpl', '');

//component wrapped enabled, or &tmpl=jomres present in the url
if ($tmpl == get_showtime('tmplcomponent') && !isset($_REQUEST[ 'nofollowtmpl' ]) && !jomres_cmsspecific_areweinadminarea()) {
	$tmpl = '&tmpl='.get_showtime('tmplcomponent');
}

//is_wrapped
if (isset($_REQUEST[ 'is_wrapped' ])) {
	if ($_REQUEST[ 'is_wrapped' ] == '1') {
		$tmpl .= '&is_wrapped=1';
	}
}

//menuoff
if (isset($_REQUEST[ 'menuoff' ])) {
	if ($_REQUEST[ 'menuoff' ] == '1') {
		$tmpl .= '&menuoff=1';
		set_showtime('menuoff', true);
	} else {
		$tmpl .= '&menuoff=0';
		set_showtime('menuoff', false);
	}
}

//topoff
if (isset($_REQUEST[ 'topoff' ])) {
	if ($_REQUEST[ 'topoff' ] == '1') {
		$tmpl .= '&topoff=1';
		set_showtime('topoff', true);
	} else {
		$tmpl .= '&topoff=0';
		set_showtime('topoff', false);
	}
}

//cms lang
$lang = get_showtime('lang_shortcode');

//Jomres specific lang switching
$lang_param = '';
if (isset($_REQUEST[ 'jomreslang' ])) {
	$jomreslang = jomresGetParam($_REQUEST, 'jomreslang', '');
	$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
	if ($jomreslang != '' && isset($jomres_language->datepicker_crossref[$jomreslang])) {
		$lang_param = '&jomreslang='.$jomreslang;
	}
}

//jomres specific urls
define('JOMRES_SITEPAGE_URL_NOSEF', get_showtime('live_site').'/index.php?option=com_jomres&Itemid='.$jomresItemid.'&lang='.$lang.$tmpl.$lang_param);
define('JOMRES_SITEPAGE_URL_AJAX', get_showtime('live_site').'/'.'index.php?option=com_jomres&no_html=1&jrajax=1&Itemid='.$jomresItemid.'&lang='.$lang.$tmpl.$lang_param);
define('JOMRES_SITEPAGE_URL_ADMIN', get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY.'/index.php?option=com_jomres'.$tmpl.$lang_param);
define('JOMRES_SITEPAGE_URL_ADMIN_AJAX', get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY.'/index.php?option=com_jomres&no_html=1&jrajax=1'.$lang_param.$tmpl);

if (class_exists('JFactory')) {
	$config = JFactory::getConfig();
	if ($config->get('sef') == '1') {
		define('JOMRES_SITEPAGE_URL', 'index.php?option=com_jomres&Itemid='.$jomresItemid.$tmpl.'&lang='.$lang.$lang_param);
	} else {
		define('JOMRES_SITEPAGE_URL', get_showtime('live_site').'/index.php?option=com_jomres&Itemid='.$jomresItemid.$tmpl.'&lang='.$lang.$lang_param);
	}
} else {
	define('JOMRES_SITEPAGE_URL', get_showtime('live_site').'/index.php?option=com_jomres&Itemid='.$jomresItemid.$tmpl.'&lang='.$lang.$lang_param);
}
