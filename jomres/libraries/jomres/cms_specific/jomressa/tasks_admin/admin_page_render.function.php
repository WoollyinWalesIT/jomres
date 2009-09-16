<?php
function admin_page_render()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	$jomresConfig 	= 	jomressa_getSingleton('jomressa_config');
ini_set('error_reporting', E_ALL|E_STRICT);
	$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
	$tmpBookingHandler->initBookingSession($jomressession);
	
	$jomreslang =jomres_getSingleton('jomres_language');
	$jomreslang->get_language('xx');

	$output			=	array();
	$menus			=	array();
	$contents		=	array();

	$pageoutput		=	array();
	$menurows		=	array();
	$contentrows	=	array();
	$heads 		=	array();
	
	$output['LIVESITE']=$jomresConfig->live_site;
	$output['SITENAME']=$jomresConfig->sitename;

	jomressa_startTask("admin_generate_heads");

	if ( $JSAuser->user != "administrator" || isset($_POST['action']))
		{
		$contentrows[] =array("content"=>jomressa_startTask("task_login_form"));
		}
	else
		{
		$menurows[]= array("content"=>jomressa_startTask("admin_menus_render"));
		if ( isset($_GET['jsat']) && $_GET['jsat'] != "k" )
			{
			$jsat				= jomresGetParam( $_REQUEST, 'jsat', "" );
			$contentrows[] =array("content"=>jomressa_startTask("task_".$jsat));
			}
		else
			{
			//$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', 0 );
			define('_JOMRES_INITCHECK', 1 );
			define('_JOMRES_INITCHECK_ADMIN', 1 );
			define('JOMRES_RETURNDATA', 1 );
			include("jomres/admin.php");
			$contentrows[] =array("content"=>JOMRES_RETURNDATA_CONTENT);
			}
		}

	$pageoutput[] =$output;
	
	$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', 0 );

	$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');
	
	$heads=$jomresSitefactory->renderHeads();
	
	$template_rows = array('pageoutput'=>$pageoutput,'menurows'=>$menurows,'content'=>$contentrows,'heads'=>$heads);
	echo render_template("main.html",TEMPLATES_ADMIN,$template_rows);
	}
?>