<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

function jomres_cmsspecific_error_logging_cms_files_to_not_backtrace()
{
    return array('application.php', 'mcHandler.class.php', 'site.php', 'cms.php', 'helper.php');
}

function jomres_cmsspecific_getsessionid()
{
    $session = JFactory::getSession();

    return $session_id = $session->getId();
}

// Date is sent in format YYYY/mm/dd, e.g. 2013/
// https://docs.joomla.org/API16:JHtml/date
function jomres_cmsspecific_output_date($date, $format = false)
{
    if (!$format) {
        $format = JText::_('DATE_FORMAT_LC');
    }

    $result = JHtml::date($date, $format, $usertimezone = false);

    return $result;
}

function jomres_cmsspecific_getregistrationlink()
{
    return jomresURL(get_showtime('live_site').'/index.php?option=com_users&view=registration');
}

function jomres_cmsspecific_getlogout_task()
{
    return 'index.php?option=com_users&view=login';
}

function jomres_cmsspecific_getlogin_task()
{
    return 'index.php?option=com_users&view=login';
}

function jomres_cmsspecific_areweinadminarea()
{
    $administrator_area = false;
    if (strpos($_SERVER[ 'SCRIPT_NAME' ], 'administrator')) {
        $administrator_area = true;
    }

    return $administrator_area;
}

function jomres_cmsspecific_createNewUser()
{
    $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();
    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

    $id = $thisJRUser->id;

    if (!$thisJRUser->userIsRegistered) {
        require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'joomla'.JRDS.'user'.JRDS.'helper.php';
        $guestDeets = $tmpBookingHandler->getGuestData();

        //If the email address already exists in the system, we'll not bother carrying on, just return this user's "mos_id"
        $query = "SELECT `id` FROM #__users WHERE `email` = '".$guestDeets[ 'email' ]."' LIMIT 1";
        $existing = doSelectSql($query, 1);
        if ($existing) {
            return $existing;
        }

/* 		$valid = false;
        while ( !$valid )
            {
            $username = $guestDeets[ 'firstname' ] . "_" . $guestDeets[ 'surname' ] . rand( 0, 1000 );
            $username = strtolower( preg_replace( '/[^A-Za-z0-9_-]+/', "", $username ) );
            $query    = "SELECT `id` FROM #__users WHERE `username` = '" . $username . "'";
            $users    = doSelectSql( $query );
            if ( count( $users ) == 0 )
                $valid = true;
            } */
        $name = $guestDeets[ 'firstname' ].' '.$guestDeets[ 'surname' ];
        $usertype = 'Registered';
        $block = '0';

        $password = JUserHelper::genRandomPassword();
        $encryptedPassword = JUserHelper::getCryptedPassword($password);

        $query = "INSERT INTO #__users (
			`name`,
			`username`,
			`email`,
			`password`,
			`registerDate`,
			`lastvisitDate`,
			`lastResetTime`,
			`params`
			) VALUES (
			'" .$name."',
			'" .$guestDeets[ 'email' ]."',
			'" .$guestDeets[ 'email' ]."',
			'" .$encryptedPassword."',
			'" .date('Y-m-d H:i:s')."',
			'" .date('Y-m-d H:i:s')."',
			'" .date('Y-m-d H:i:s')."',
			'{}'
			) ";
        $id = doInsertSql($query);
        if (!$id) {
            trigger_error('Failed insert new user '.$query, E_USER_ERROR);
            $this->insertSuccessful = false;
        } else {
            $query = "INSERT INTO #__user_usergroup_map  (
				`user_id`,
				`group_id`
				) VALUES (
				'" .$id."',
				2
				) ";
            doInsertSql($query);

            //$thisJRUser->userIsRegistered=true; // Disabled as this setting would be incorrect during the booking phase. We want newly created users to have their details recorded by the insertGuestDeets function in insertbookings
            $thisJRUser->id = $id;
            $tmpBookingHandler->updateGuestField('mos_userid', $id);
            $tmpBookingHandler->saveGuestData();

            $subject = jr_gettext('_JRPORTAL_NEWUSER_SUBJECT', '_JRPORTAL_NEWUSER_SUBJECT', false, false);

            $text = jr_gettext('_JRPORTAL_NEWUSER_DEAR', '_JRPORTAL_NEWUSER_DEAR', false, false).' '.stripslashes($guestDeets[ 'firstname' ]).' '.stripslashes($guestDeets[ 'surname' ]).' <br />';
            $text .= jr_gettext('_JRPORTAL_NEWUSER_THANKYOU', '_JRPORTAL_NEWUSER_THANKYOU', false, false).' <br />';
            $text .= jr_gettext('_JRPORTAL_NEWUSER_USERNAME', '_JRPORTAL_NEWUSER_USERNAME', false, false).' '.$guestDeets[ 'email' ].' <br />';
            $text .= jr_gettext('_JRPORTAL_NEWUSER_PASSWORD', '_JRPORTAL_NEWUSER_PASSWORD', false, false).' '.$password.' <br />';
            $text .= jr_gettext('_JRPORTAL_NEWUSER_LOG_IN', '_JRPORTAL_NEWUSER_LOG_IN', false, false).' '.get_showtime('live_site').'<br />';

            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $jrConfig = $siteConfig->get();
            if ($jrConfig[ 'useNewusers_sendemail' ] == '1') {
                if (!jomresMailer(get_showtime('mailfrom'), get_showtime('fromname'), $guestDeets[ 'email' ], $subject, $text, $mode = 1)) {
                    error_logging('Failure in sending registration email to guest. Target address: '.$hotelemail.' Subject'.$subject);
                }
            }
        }
    }

    return $id;
}

function jomres_cmsspecific_getRegistrationURL()
{
}

function jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row)
{
    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    //  More trouble than it is worth atm, if somebody enters something that creates a javascript error the editor crashes and burns
    $jrConfig[ 'use_jomres_own_editor' ] = '0';

    if ($jrConfig[ 'use_jomres_own_editor' ] == '1') {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        $ret = $MiniComponents->specificEvent('06005', 'editor', array('name' => $name, 'content' => $content, 'height' => $height));
    } else {
        $editor = JFactory::getEditor();
        $ret = $editor->display($name, $content, $width, $height, $col, $row, false);
    }

    return $ret;
}

// This is called by the jomres_language class. If the jomres language chooser dropdown is used, then this function is called so that we can set the current cms's language too.
function jomres_cmsspecific_setlanguage($lang)
{
    // These need testing
    //SetCookie($_COOKIE['jfcookie']['lang'], $lang, time()+60*60);
    //$_COOKIE['jfcookie']['lang']= $lang;
}

function jomres_cmsspecific_getcurrentusers_id()
{
    $id = 0;
    $user = JFactory::getUser();
    $id = $user->get('id');

    return $id;
}

function jomres_cmsspecific_getcurrentusers_username()
{
    $username = '';
    $user = JFactory::getUser();
    $username = $user->get('username');

    return $username;
}

function jomres_cmsspecific_addheaddata($type, $path = '', $filename = '', $includeVersion = true)
{
    if ($filename == '') {
        return;
    }

    $doc = JFactory::getDocument();

    JHtml::_('bootstrap.framework');

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();

    $includeVersion ? $version = '?v='.$jrConfig['update_time'] : $version = '';

    if (strpos($path, 'http') === false) {
        $data = JURI::base(true).'/'.$path.$filename.$version;
        if (jomres_cmsspecific_areweinadminarea()) {
            $data = str_replace('/administrator/', '/', $data);
        }
    } else {
        $data = $path.$filename.$version;
    }

    switch ($type) {
        case 'javascript':
            //JHTML::script( $path . $filename, false ); // If we want to include version numbers in script filenames, we can't use this. Instead we need to directly access JFactory as below
            $doc->addScript($data);
            break;
        case 'css':
            //JHTML::stylesheet( $path . $filename, array (), false, false ); // If we want to include version numbers in script filenames, we can't use this. Instead we need to directly access JFactory as below
            $doc->addStyleSheet($data);
            break;
        default:

            break;
        }
}

// set our meta data
function jomres_cmsspecific_setmetadata($meta, $data)
{
    $data = jomres_decode($data);
    $document = JFactory::getDocument();
    switch ($meta) {
        case 'title':
            $data = str_replace('&#39;', "'", $data);
            $document->setTitle($data);
            break;
        case 'description':
            $document->setDescription($data);
            break;
        case 'keywords':
            $document->setMetaData('keywords', $data);
            break;
        default:
            $document->setMetaData($meta, $data);
            break;
    }
}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($id)
{
    $user = array();
    $query = 'SELECT id,name,username,email FROM #__users WHERE id='.(int) $id;
    $userList = doSelectSql($query);
    if (count($userList) > 0) {
        foreach ($userList as $u) {
            $user[ $id ] = array('id' => $u->id, 'name' => $u->name, 'username' => $u->username, 'email' => $u->email);
        }
    }

    return $user;
}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_username($username)
{
    $user = array();
    $query = "SELECT id,username FROM #__users WHERE username='".(string) $username."'";
    $userList = doSelectSql($query);
    if (count($userList) > 0) {
        foreach ($userList as $u) {
            $user[ $id ] = array('id' => $u->id, 'username' => $u->username, 'email' => $u->username);
        }
    }

    return $user;
}

// As per the function name
function jomres_cmsspecific_getCMS_users_admin_userdetails_by_id($id)
{
    $user = array();
    $query = 'SELECT id,username,email FROM #__users WHERE id='.(int) $id;
    $userList = doSelectSql($query);
    if (count($userList) > 0) {
        foreach ($userList as $u) {
            $user[ $id ] = array('id' => $u->id, 'username' => $u->username, 'email' => $u->email);
        }
    }

    return $user;
}

// As per the function name
function jomres_cmsspecific_getCMS_users_admin_getalladmins_ids()
{
    $db = JFactory::getDbo();
    $query = $db->getQuery(true);
    $query
        ->select($db->quoteName(array('a.id', 'a.username', 'a.email')))
        ->from($db->quoteName('#__users', 'a'))
        ->join('LEFT', $db->quoteName('#__user_usergroup_map', 'b').' ON ('.$db->quoteName('a.id').' = '.$db->quoteName('b.user_id').')')
        ->where($db->quoteName('b.group_id').'=8');
    // Number 8 represent ID of a "group_id" from "_user_usergroup_map" table
    $db->setQuery($query);
    // load results from query
    $ids = $db->loadObjectList();

    $users = array();
    if (count($ids) > 0) {
        foreach ($ids as $u) {
            $users[ $u->id ] = array('id' => $u->id, 'username' => $u->username, 'email' => $u->email);
        }
    }

    return $users;
}

function jomres_cmsspecific_getSearchModuleParameters($moduleName = '')
{
    if (strlen($moduleName) > 0) {
        if ($moduleName == 'mod_jomsearch_m0') {
            return getIntegratedSearchModuleVals();
        } else {
            $query = "SELECT params FROM #__modules WHERE module = '$moduleName'";
            $p = doSelectSql($query, 1);

            $vals = array();
            $arr = explode(',', $p);
            if (count($arr) > 0) {
                foreach ($arr as $str) {
                    $dat = explode(':', $str);

                    $key = $dat[ 0 ];
                    $val = $dat[ 1 ];
                    if (strlen($key) > 0) {
                        $k = str_replace('"', '', $key);
                        $k = str_replace('{', '', $k);
                        $k = str_replace('}', '', $k);
                        $v = str_replace('"', '', $val);
                        $v = str_replace('{', '', $v);
                        $v = str_replace('}', '', $v);

                        $vals[ $k ] = $v;
                    }
                }
            }

            return $vals;
        }
    }
}

// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers($cms_user_id = 0)
{
    $clause = '';
    $users = array();

    if ((int) $cms_user_id > 0) {
        $clause = 'WHERE `id` = '.(int) $cms_user_id;
    }

    $query = 'SELECT `id`,`name`,`username`,`email` FROM #__users '.$clause;
    $userList = doSelectSql($query);

    if (count($userList) > 0) {
        foreach ($userList as $u) {
            $users[ $u->id ] = array('id' => $u->id, 'username' => $u->username, 'email' => $u->email);
        }
    }

    return $users;
}

function jomres_cmsspecific_makeSEF_URL($link)
{
    jimport('joomla.application.helper');
    if (class_exists('JRoute')) {
        $link = JRoute::_($link, $xhtml = true);
    }
    $link = jomres_decode($link);

    return stripslashes($link);
}

function jomres_cmsspecific_parseByBots($str)
{
    $limitstart = 0;
    $params = '';
    $dispatcher = JEventDispatcher::getInstance();
    JPluginHelper::importPlugin('content');
    $obj = new stdClass();
    $obj->text = $str;
    $output = $dispatcher->trigger('onContentPrepare', array('jomres.default', &$obj, &$params, $limitstart));
    $output = $obj->text;

    return $output;
}

function jomres_cmsspecific_stringURLSafe($str)
{
    $scriptname = str_replace('/', '', $_SERVER[ 'PHP_SELF' ]);
    if (!strstr($scriptname, 'install_jomres.php')) {
        $config = JFactory::getConfig();
        if ($config->get('unicodeslugs') == '1') {
            $str = JFilterOutput::stringURLUnicodeSlug($str);
        } else {
            $str = JFilterOutput::stringURLSafe($str);
        }

        return $str;
    } else {
        return null;
    }
}

function jomres_cmsspecific_addcustomtag($data)
{
    $document = JFactory::getDocument();
    $document->addCustomTag($data);
}

function jomres_cmsspecific_currenturl()
{
    return JURI::current();
}

function jomres_cmsspecific_patchJoomlaTemplate($force = false)
{
    $app = JFactory::getApplication();
    $templateName = $app->getTemplate('template')->template;
    $tmplcomponent = get_showtime('tmplcomponent');
    $tmplcomponent_source = get_showtime('tmplcomponent_source');

    if (jomres_cmsspecific_areweinadminarea()) {
        if ($force || !file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
            if (!copy($tmplcomponent_source, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
                echo '<p class="alert alert-error">Error, unable to copy '.$tmplcomponent_source.' to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php automatically, please do this manually through FTP</p><br/>';
            }

            return true;
        } elseif (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
            if (filemtime($tmplcomponent_source) > filemtime(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
                if (!copy($tmplcomponent_source, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
                    echo '<p class="alert alert-error">Error, unable to copy '.$tmplcomponent_source.' to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php automatically, please do this manually through FTP</p><br/>';
                }

                return true;
            }
        }
    } else {
        if ($force || !file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
            if (!copy($tmplcomponent_source, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
                echo '<p class="alert alert-error">Error, unable to copy '.$tmplcomponent_source.' to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php automatically, please do this manually through FTP</p><br/>';
            }

            return true;
        } elseif (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
            if (filemtime($tmplcomponent_source) > filemtime(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
                if (!copy($tmplcomponent_source, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php')) {
                    echo '<p class="alert alert-error">Error, unable to copy '.$tmplcomponent_source.' to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'templates'.JRDS.$templateName.JRDS.$tmplcomponent.'.php automatically, please do this manually through FTP</p><br/>';
                }

                return true;
            }
        }
    }

    return false;
}

// Get the cms language
function jomres_cmsspecific_getcmslang()
{
    return JFactory::getLanguage()->getTag();
}

// Returns an indexed array of the CMS's users where username matches a searched string
function jomres_cmsspecific_find_cms_users($search_term = '')
{
    $clause = '';
    $users = array();

    if ($search_term != '') {
        $clause = "WHERE LOWER(`username`) LIKE '%".mb_strtolower($search_term)."%'";
    }

    $query = 'SELECT `id`, `name`, `username`, `email` FROM #__users '.$clause;
    $userList = doSelectSql($query);

    if (count($userList) > 0) {
        foreach ($userList as $u) {
            $users[ $u->id ] = array('id' => $u->id, 'username' => $u->username, 'email' => $u->email);
        }
    }

    return $users;
}

function jomres_cmsspecific_getUsername($user_id = 0) {
	if ($user_id == 0) {
		return;
	}
	
	$query = 'SELECT `username` FROM #__users WHERE `id` = '.(int)$user_id.' LIMIT 1';
    $result = doSelectSql($query,1);
	
	return $result;
}

function jomres_cmsspecific_getCmsUserProfileLink($cms_user_id = 0) {
	if ($cms_user_id == 0) {
		return '#';
	}
	
	$url = JURI::base().'index.php?option=com_users&view=user&layout=edit&id='.$cms_user_id;
	
	return $url;
}
