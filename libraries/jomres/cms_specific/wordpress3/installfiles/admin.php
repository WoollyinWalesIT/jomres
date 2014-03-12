<?php



define( '_JOMRES_INITCHECK', 1 );
define( '_JOMRES_INITCHECK_ADMIN', 1 );


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
	
	
function jr_wp_trigger_frontend()
	{
	require_once( dirname( __FILE__ ) . '/../../../jomres/jomres.php' );
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
		require_once( dirname( __FILE__ ) . '/../../../jomres/admin.php' );
		}
	if ( (int)$_REQUEST['jrajax'] == 1 ) // If it's an ajax called, we need to die when Jomres has done it's stuff
		{
		die();
		}
	}



