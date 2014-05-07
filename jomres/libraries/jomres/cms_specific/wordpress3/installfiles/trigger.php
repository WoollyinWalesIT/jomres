<?php

if (!defined('_JOMRES_INITCHECK'))
	define('_JOMRES_INITCHECK', 1 );

define( '_JOMRES_INITCHECK_ADMIN', 1 );

if (!jomres_check_if_jomres_installed())
	{
	output_jomres_not_installed_message();
	}

else
	{
	require_once (dirname(__FILE__).'/../../jomres_root.php');
	require_once(dirname(__FILE__).'/../../'.JOMRES_ROOT_DIRECTORY.'/jomres.php');
			
	if (isset($_REQUEST['jr_wp_source']))
		{
		if ($_GET['jr_wp_source'] == "admin")
			{
			jr_wp_trigger_admin();
			}
		else
			{
			jr_wp_trigger_frontend();
			}
		}
	else
		{
		if (strpos($_SERVER['HTTP_REFERER'] ,"wp-admin") > 0 )
			{
			jr_wp_trigger_admin();
			}
		else
			{
			jr_wp_trigger_frontend();
			}
		}
	}
	
function jr_wp_trigger_frontend()
	{
	require_once( ABSPATH . JOMRES_ROOT_DIRECTORY.'/jomres.php' );
	if ( (int)$_REQUEST['jrajax'] == 1 ) // If it's an ajax called, we need to die when Jomres has done it's stuff
		{
		die();
		}
	}

function jr_wp_trigger_admin()
	{
	global $current_user;
	$user_roles = $current_user->roles;
	$user_role = array_shift($user_roles);
	$role = trim($user_role);
	if ($role == "administrator")
		{
		require_once( ABSPATH . JOMRES_ROOT_DIRECTORY.'/admin.php' );
		}
	if ( (int)$_REQUEST['jrajax'] == 1 ) // If it's an ajax called, we need to die when Jomres has done it's stuff
		{
		die();
		}
	}

function jomres_check_if_jomres_installed()
	{
	$jomres_installed = false;
	if ( defined ( JOMRES_ROOT_DIRECTORY ) && file_exists( ABSPATH . JOMRES_ROOT_DIRECTORY.'/jomres.php' ) )
		{
		$jomres_installed = true;
		}

	return $jomres_installed;
	}

function output_jomres_not_installed_message()
	{
	echo '<br/><br/>Sorry, it doesn\'t look like Jomres Core is installed yet, currently only this bridging plugin is installed. Please visit the <a href="http://www.jomres.net/download" target="_blank">Jomres.net download page</a> to download the web installer that will download Jomres Core to your Wordpress installation.';
	}

