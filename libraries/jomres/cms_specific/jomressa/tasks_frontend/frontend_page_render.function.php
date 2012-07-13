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
function frontend_page_render()
	{
	$index_page = "index.html";
	if (defined('JOMRES_WRAPPED'))
		$index_page = "wrapped.html";
		
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	$jomresConfig 	= 	jomressa_getSingleton('jomressa_config');
	$no_html			= (int)jomresGetParam( $_REQUEST, 'no_html', 0 );

	$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
	$tmpBookingHandler->initBookingSession($jomressession);
	
	$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
	$jomreslang->get_language('xx');

	$output			=	array();
	$menus			=	array();
	$contents		=	array();

	$page		=	array();
	$menurows		=	array();
	$contentrows	=	array();
	$heads 		=	array();

	if ( isset($_GET['jsat']) && $_GET['jsat'] != "k" )
		{
		$jsat				= jomresGetParam( $_REQUEST, 'jsat', "" );
		$contentrows[] =array("content"=>jomressa_startTask("task_".$jsat));
		}
	else
		{
		define('_JOMRES_INITCHECK', 1 );
		define('JOMRES_RETURNDATA', 1 );
		
		include_once("jomres.php");
		
		$contentrows[] =array("content"=>JOMRES_RETURNDATA_CONTENT);
		}
	$showpage = true;

	if (get_showtime("offline") == "1" && $JSAuser->user != "administrator")
		$showpage = false;
	
	if ($showpage)
		{
		if ($no_html != 1)
			{
			//$output['LIVESITE']=get_showtime('live_site');
			$output['SITENAME']=get_showtime('sitename');
			$page[] =$output;
			jomressa_startTask("frontend_generate_heads");
			$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');
			$menus[]= array("content"=>jomressa_startTask("frontend_menus_render"));
			$heads=$jomresSitefactory->renderHeads();
			$template_rows = array('page'=>$page,'menurows'=>$menus,'content'=>$contentrows,'heads'=>$heads);
			echo render_template($index_page,TEMPLATES_FRONTEND,$template_rows);
			}
		else
			{
			echo JOMRES_RETURNDATA_CONTENT;
			}
		}
	}
?>