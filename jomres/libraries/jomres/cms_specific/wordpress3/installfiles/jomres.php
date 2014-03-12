<?php
/**
 * @package Jomres
 * @version 8
 */
/*
Plugin Name: Jomres
Plugin URI: http://www.jomres.net
Description: The best Joomla hotel booking system comes to Wordpress!
Author: Vince Wooll
Version: 8
Author URI: http://www.jomres.net/
*/

/* function jomres_wp_front()
	{
	
	}

function jomres_wp_admin()
	{
	
	}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'jomres_wp_front' ); */

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'Jomres admin', 'Jomres', 'manage_options', 'jomres/admin.php', '', '', 6 );
}

function jomres_wp_init_session()
{
  session_start();
}

add_action('init', 'jomres_wp_init_session', 1);


// Shortcode [jomres]
function frontend_trigger_jomres( $atts ){
	$path = plugin_dir_path( __FILE__ );
	require_once($path . "admin.php");
}
add_shortcode( 'jomres', 'frontend_trigger_jomres' );

/* 
function jr_wp_start($input) {
	$path = plugin_dir_path( __FILE__ );
	require_once($path . "admin.php");
	
}
 */
//add_filter('the_content', 'jr_wp_start');



function jomres_wp_ajax()
	{
	require_once(plugin_dir_path( __FILE__ ) . "admin.php");
	die();  // Required for a proper Wordpress AJAX result
	}

add_action( 'wp_ajax_nopriv_'.$_REQUEST['action'], 'jomres_wp_ajax' );
add_action( 'wp_ajax_'.$_REQUEST['action'], 'jomres_wp_ajax' );
add_action( 'wp_ajax_nopriv_'.$_REQUEST['page'], 'jomres_wp_ajax' );
add_action( 'wp_ajax_'.$_REQUEST['page'], 'jomres_wp_ajax' );