<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "" );
// ################################################################
function admin_page_render()
	{
	$index_page = "index.html";
	if (defined('JOMRES_WRAPPED'))
		$index_page = "wrapped.html";
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', 0 );
	
	$jomresConfig 	= 	jomressa_getSingleton('jomressa_config');
	$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
	$tmpBookingHandler->initBookingSession($jomressession);
	
	$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
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
			if ($JSAuser->user_pw == "40be4e59b9a2a2b5dffb918c0e86b3d7" && !isset($_REQUEST['no_html']))
				echo "<h3>Warning, you're still using the default password 'welcome'. You are strongly advised to change your password as soon as possible</h3>";
			
			//$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', 0 );
			define('_JOMRES_INITCHECK', 1 );
			define('_JOMRES_INITCHECK_ADMIN', 1 );
			define('JOMRES_RETURNDATA', 1 );
			include("admin.php");
			$contentrows[] =array("content"=>JOMRES_RETURNDATA_CONTENT);
			}
		}

	$pageoutput[] =$output;
	
	$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', 0 );

	$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');
	
	$heads=$jomresSitefactory->renderHeads();
	
	$template_rows = array('pageoutput'=>$pageoutput,'menurows'=>$menurows,'content'=>$contentrows,'heads'=>$heads);
	if ($no_html != 1)
		{
		echo render_template($index_page,TEMPLATES_ADMIN,$template_rows);
		}
	else
		echo JOMRES_RETURNDATA_CONTENT;
	}
?>