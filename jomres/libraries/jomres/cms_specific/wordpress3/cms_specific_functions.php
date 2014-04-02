<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

function jomres_cmsspecific_error_logging_cms_files_to_not_backtrace()
	{
	return array ('application.php' , 'mcHandler.class.php' , 'site.php' , 'cms.php' , 'helper.php');
	}

	
function jomres_cmsspecific_getsessionid()
	{
	return $_COOKIE['jomres_wp_session_cookie'];
	}

// Date is sent in format YYYY/mm/dd, e.g. 2013/
function jomres_cmsspecific_output_date( $date, $format = false )
	{
	$result = date( get_option('date_format'),strtotime($date) );
	return $result;
	}

function jomres_cmsspecific_getregistrationlink()
	{
	return jomresURL( get_showtime( 'live_site' ) . "/wp-login.php?action=register" );
	}

function jomres_cmsspecific_getlogout_task()
	{
	
	return 'wp-login.php?action=logout';
	}

function jomres_cmsspecific_getlogin_task()
	{
	return 'wp-login.php?action=login';
	}

function jomres_cmsspecific_areweinadminarea()
	{
	if ( strpos($_SERVER['SCRIPT_NAME'],"ajax.php") )
		return false;
	else
		return is_admin();
	}


function jomres_cmsspecific_createNewUserOnBooking()
	{
	global $jomresConfig_mailfrom, $jomresConfig_fromname;
	$thisJRUser        = jomres_singleton_abstract::getInstance( 'jr_user' );
	$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig          = $siteConfig->get();
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	if ( $jrConfig[ 'useNewusers' ] == "0" ) return -1;

	$id = $thisJRUser->id;


	if ( !$thisJRUser->userIsRegistered )
		{
		$guestDeets = $tmpBookingHandler->getGuestData();

		//If the email address already exists in the system, we'll not bother carrying on, just return this user's "mos_id"
		$query    = "SELECT id FROM #__users WHERE user_email = '" . $guestDeets[ 'email' ] . "' LIMIT 1";
		$existing = doSelectSql( $query, 1 );
		if ( $existing ) 
			{
			return $existing;
			}

		$valid = false;
		while ( !$valid )
			{
			$username = $guestDeets[ 'firstname' ] . "_" . $guestDeets[ 'surname' ] . rand( 0, 1000 );
			$username = strtolower( preg_replace( '/[^A-Za-z0-9_-]+/', "", $username ) );
			$query    = "SELECT FROM #__users WHERE user_login = '" . $username . "'";
			$users    = doSelectSql( $query );
			if ( count( $users ) == 0 ) 
				{
				$valid = true;
				}
			}
		
		$name	= $guestDeets[ 'firstname' ] . " " . $guestDeets[ 'surname' ];

		$userdata = array(
			'user_login'		=>  $username,
			'user_pass'			=> generateJomresRandomString( 10 ),
			'user_email'		=> $guestDeets[ 'email' ],
			'user_nicename'		=> $name
			);

		$user_id = wp_insert_user( $userdata ) ;

		//On success
		if( !is_wp_error($user_id) ) 
			{
			//$thisJRUser->userIsRegistered=true; // Disabled as this setting would be incorrect during the booking phase. We want newly created users to have their details recorded by the insertGuestDeets function in insertbookings
			$thisJRUser->id = $id;
			$tmpBookingHandler->updateGuestField( 'mos_userid', $id );
			$tmpBookingHandler->saveGuestData();

			$subject = jr_gettext( '_JRPORTAL_NEWUSER_SUBJECT', _JRPORTAL_NEWUSER_SUBJECT, false, false );

			$text = jr_gettext( '_JRPORTAL_NEWUSER_DEAR', _JRPORTAL_NEWUSER_DEAR, false, false ) . " " . stripslashes( $guestDeets[ 'firstname' ] ) . " " . stripslashes( $guestDeets[ 'surname' ] ) . " \t\n";
			$text .= jr_gettext( '_JRPORTAL_NEWUSER_THANKYOU', _JRPORTAL_NEWUSER_THANKYOU, false, false ) . " \t\n";
			$text .= jr_gettext( '_JRPORTAL_NEWUSER_USERNAME', _JRPORTAL_NEWUSER_USERNAME, false, false ) . " " . $username . " \t\n";
			$text .= jr_gettext( '_JRPORTAL_NEWUSER_PASSWORD', _JRPORTAL_NEWUSER_PASSWORD, false, false ) . " " . $password . " \t\n";
			$text .= jr_gettext( '_JRPORTAL_NEWUSER_LOG_IN', _JRPORTAL_NEWUSER_LOG_IN, false, false ) . " " . get_showtime( 'live_site' ) . "\t\n\t\n";

			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();
			if ( $jrConfig[ 'useNewusers_sendemail' ] == "1" )
				{
				if ( !jomresMailer( $jomresConfig_mailfrom, $jomresConfig_fromname, $guestDeets[ 'email' ], $subject, $text, $mode = 0 ) ) error_logging( 'Failure in sending registration email to guest. Target address: ' . $hotelemail . ' Subject' . $subject );
				}
			}
		}

	return $id;
	}

function jomres_cmsspecific_getRegistrationURL()
	{


	}

function jomres_cmsspecific_getTextEditor( $name, $content, $hiddenField, $width, $height, $col, $row )
	{
	ob_start();  // The wp_editor function will output the editor immediately. We don't want that to happen so...we'll buffer the function's response and dump it into a variable for return.
	wp_editor( $content, $name );
	$contents = ob_get_contents();
	ob_end_clean();

	return $contents;
	}

// This is called by the jomres_language class. If the jomres language chooser dropdown is used, then this function is called so that we can set the current cms's language too.
function jomres_cmsspecific_setlanguage( $lang )
	{
	// These need testing
	//SetCookie($_COOKIE['jfcookie']['lang'], $lang, time()+60*60);
	//$_COOKIE['jfcookie']['lang']= $lang;
	}

function jomres_cmsspecific_getcurrentusers_id()
	{
	$id=0;
	$user = wp_get_current_user();
	$id=$user->get('id');
	return $id;
	}

function jomres_cmsspecific_addheaddata( $type, $path = "", $filename = "", $skip = false )
	{
	if ( $filename == "" ) return;

	switch ( $type )
		{
		case "javascript":
			if ( jomres_cmsspecific_areweinadminarea() )
				{
				echo '<script type="text/javascript" src="'.get_showtime( 'live_site' ).'/'.$path . $filename.'"></script>
				';
				}
			else
				{
				echo '<script type="text/javascript" src="'.$path . $filename.'"></script>
				';
				}
			
			break;
		case "css":
			if ( jomres_cmsspecific_areweinadminarea() )
				{
				echo '<link rel="stylesheet" type="text/css" href="'.get_showtime( 'live_site' ).'/'.$path . $filename.'">
				';
				}
			else
				{
				echo '<link rel="stylesheet" type="text/css" href="'.$path . $filename.'">
				';
				}
			
			break;
		default:

			break;
		}
	}


// set our meta data
function jomres_cmsspecific_setmetadata( $meta, $data )
	{
 	$data     = jomres_decode( $data );
	switch ( $meta )
		{
		case "title":
			// echo '<title>'.$data.'</title>';   // Doesn't work
			break;
		case "description":
			//$document->setDescription( $data );
			break;
		case "keywords":
			//$document->setMetaData( 'keywords', $data );
			break;
		default:
			//$document->setMetaData( $meta, $data );
			break;
		}
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id( $id )
	{
	$user     = array ();
	$query    = "SELECT id,user_nicename,user_login,user_email FROM #__users WHERE id=" . (int) $id;
	$userList = doSelectSql( $query );
	if ( count( $userList ) > 0 )
		{
		foreach ( $userList as $u )
			{
			$user[ $id ] = array ( "id" => $u->id, "name" => $u->user_nicename, "username" => $u->user_login, "email" => $u->user_email );
			}
		}

	return $user;
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_frontend_userdetails_by_username( $username )
	{
	$user     = array ();
	$query    = "SELECT id,user_login FROM #__users WHERE user_login='" . (string) $username . "'";
	$userList = doSelectSql( $query );
	if ( count( $userList ) > 0 )
		{
		foreach ( $userList as $u )
			{
			$user[ $id ] = array ( "id" => $u->id, "username" => $u->user_login, "email" => $u->user_email );
			}
		}

	return $user;
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_admin_userdetails_by_id( $id )
	{
	$user     = array ();
	$query    = "SELECT id,user_login,user_email FROM #__users WHERE id=" . (int) $id;
	$userList = doSelectSql( $query );
	if ( count( $userList ) > 0 )
		{
		foreach ( $userList as $u )
			{
			$user[ $id ] = array ( "id" => $u->id, "username" => $u->user_login, "email" => $u->user_email );
			}
		}

	return $user;
	}

// As per the function name
function jomres_cmsspecific_getCMS_users_admin_getalladmins_ids( $id )
	{
	$users    = array ();
	$query    = "SELECT id,user_login,user_email FROM #__users WHERE `sendEmail`=1";
	$userList = doSelectSql( $query );
	if ( count( $userList ) > 0 )
		{
		foreach ( $userList as $u )
			{
			$users[ $u->id ] = array ( "id" => $u->id, "username" => $u->user_login, "email" => $u->user_email );
			}
		}

	return $users;
	}


function jomres_cmsspecific_getSearchModuleParameters( $moduleName = "" )
	{
	if ( strlen( $moduleName ) > 0 )
		{
		if ( $moduleName == "mod_jomsearch_m0" )
			{
			return getIntegratedSearchModuleVals();
			}
		else
			{
			$query = "SELECT params FROM #__modules WHERE module = '$moduleName'";
			$p     = doSelectSql( $query, 1 );

			$vals = array ();
			$arr  = explode( ",", $p );
			if ( count( $arr ) > 0 )
				{
				foreach ( $arr as $str )
					{
					$dat = explode( ":", $str );

					$key = $dat[ 0 ];
					$val = $dat[ 1 ];
					if ( strlen( $key ) > 0 )
						{
						$k = str_replace( '"', '', $key );
						$k = str_replace( '{', '', $k );
						$k = str_replace( '}', '', $k );
						$v = str_replace( '"', '', $val );
						$v = str_replace( '{', '', $v );
						$v = str_replace( '}', '', $v );

						$vals[ $k ] = $v;
						}
					}
				}

			return $vals;
			}
		}
	}


// Returns an indexed array of the CMS's users
function jomres_cmsspecific_getCMSUsers()
	{
	$users    = array ();
	$query    = "SELECT id,user_nicename,user_login,user_email FROM #__users";
	$userList = doSelectSql( $query );
	if ( count( $userList ) > 0 )
		{
		foreach ( $userList as $u )
			{
			$users[ $u->id ] = array ( "id" => $u->id, "username" => $u->user_login, "email" => $u->user_email );
			}
		}

	return $users;
	
/* 	$users    = array ();
	$query    = "SELECT id,name,username,email FROM #__users";
	$userList = doSelectSql( $query );
	if ( count( $userList ) > 0 )
		{
		foreach ( $userList as $u )
			{
			$users[ $u->id ] = array ( "id" => $u->id, "username" => $u->username, "email" => $u->email );
			}
		}

	return $users; */
	}

function jomres_cmsspecific_makeSEF_URL( $link )
	{
	return $link;
	// jimport( 'joomla.application.helper' );
	// if ( class_exists( 'JRoute' ) )
		// {
		// $link = JRoute::_( $link, $xhtml = true );
		// }
	// $link = jomres_decode( $link );

	// return stripslashes( $link );
	}

function jomres_cmsspecific_parseByBots( $str )
	{
	return $str;
/* 	$limitstart = 0;
	$params     = '';
	$dispatcher =& JDispatcher::getInstance();
	JPluginHelper::importPlugin( 'content' );
	$obj       = new stdClass;
	$obj->text = $str;
	$output    = $dispatcher->trigger( 'onContentPrepare', array ( 'onContentPrepare', &$obj, & $params, $limitstart ) );
	$output    = $obj->text;

	return $output; */
	}

function jomres_cmsspecific_stringURLSafe( $str ) // Used for making SEF urls for Joomla's router. Don't yet have equivallent code for WP
	{
	return $str;
/* 	$scriptname = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
	if ( !strstr( $scriptname, 'install_jomres.php' ) )
		{
		$config = JFactory::getConfig();
		if ( $config->get( 'unicodeslugs' ) == '1' ) $str = JFilterOutput::stringURLUnicodeSlug( $str );
		else
		$str = JFilterOutput::stringURLSafe( $str );

		return $str;
		}
	else
	return null; */
	}

function jomres_cmsspecific_addcustomtag( $data )
	{
/* 	$data     = jomres_decode( $data );
	$document =& JFactory::getDocument();
	$document->addCustomTag( $data ); */
	}

function jomres_cmsspecific_currenturl()
	{
	return $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	}

function jomres_cmsspecific_patchJoomlaTemplate($force = false)
	{
	// Don't need this in WP
/* 	$app = JFactory::getApplication();
	$templateName = $app->getTemplate('template')->template;
	$tmplcomponent = get_showtime("tmplcomponent");
	$tmplcomponent_source = get_showtime("tmplcomponent_source");
	
	if (jomres_cmsspecific_areweinadminarea())
		{
		if ($force || !file_exists(JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "administrator" . JRDS . "templates" . JRDS . $templateName . JRDS . $tmplcomponent . '.php'))
			{
			if ( !copy( $tmplcomponent_source, JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "administrator" . JRDS . "templates" . JRDS . $templateName . JRDS . $tmplcomponent . '.php' ) ) 
				echo '<p class="alert alert-error">Error, unable to copy ' . $tmplcomponent_source .' to ' . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "administrator" . JRDS . 'templates' . JRDS . $templateName . JRDS . $tmplcomponent . '.php automatically, please do this manually through FTP</p><br/>';
			return true;
			}
		}
	else
		{
		if ($force || !file_exists(JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "templates" . JRDS . $templateName . JRDS . $tmplcomponent . '.php'))
			{
			if ( !copy( $tmplcomponent_source, JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "templates" . JRDS . $templateName . JRDS . $tmplcomponent . '.php' ) ) 
				echo '<p class="alert alert-error">Error, unable to copy ' . $tmplcomponent_source .' to ' . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'templates' . JRDS . $templateName . JRDS . $tmplcomponent . '.php automatically, please do this manually through FTP</p><br/>';
			return true;
			}
		}
	return false; */
	}