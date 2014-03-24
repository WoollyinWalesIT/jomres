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



function asamodule_search_results($content) {

	$content = '<div id="asamodule_search_results">'.$content.'</div>';

    return $content;    
}
add_filter('the_content', 'asamodule_search_results');


add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'Jomres admin', 'Jomres', 'manage_options', 'jomres/admin.php', '', '', 6 );
}

function jomres_wp_init_session()
	{
	if ( isset( $_COOKIE['jomres_wp_session_cookie'] ) ) 
		{
		$session_id = $_COOKIE['jomres_wp_session_cookie'];
		} 
	else 
		{
		$session_id = jomres_wp_generate_random_string();
		setcookie ('jomres_wp_session_cookie', $session_id, time()+60*60);
		}
	}

function jomres_wp_generate_random_string($length = 50)
	{
	$str = "";
	// define possible characters
	$possible = "abcdfghijklmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYZ";
	// set up a counter
	$i = 0;
	// add random characters to $str until $length is reached
	while ( $i < $length )
		{
		// pick a random character from the possible ones
		$char = substr( $possible, mt_rand( 0, strlen( $possible ) - 1 ), 1 );
		$str .= $char;
		$i++;
		}

	return $str;
	}
	
function jomres_wp_end_session() 
	{
	setcookie ('jomres_wp_session_cookie', '', time()+60*60);
	}

add_action('init', 			'jomres_wp_init_session', 1);
add_action('wp_logout',		'jomres_wp_end_session');
add_action('wp_login',		'jomres_wp_end_session');


// Shortcode [jomres]
function frontend_trigger_jomres( $atts ){
	$path = plugin_dir_path( __FILE__ );
	require_once($path . "admin.php");
}
add_shortcode( 'jomres', 'frontend_trigger_jomres' );

// Disable the admin toolbar, if we are using jq ui then the menu at the top is the only position that works on a default WP installation.
add_filter( 'show_admin_bar', '__return_false' );



function jomres_wp_ajax()
	{
	require_once(plugin_dir_path( __FILE__ ) . "admin.php");
	die();  // Required for a proper Wordpress AJAX result
	}

add_action( 'wp_ajax_nopriv_'.$_REQUEST['action'], 'jomres_wp_ajax' );
add_action( 'wp_ajax_'.$_REQUEST['action'], 'jomres_wp_ajax' );
add_action( 'wp_ajax_nopriv_'.$_REQUEST['page'], 'jomres_wp_ajax' );
add_action( 'wp_ajax_'.$_REQUEST['page'], 'jomres_wp_ajax' );

// If popup is in $_REQUEST we'll disable all widgets, but leave the keys intact so that you don't get the "please activate a widget" message
add_filter( 'sidebars_widgets', 'disable_all_widgets' );

function disable_all_widgets( $sidebars_widgets ) 
	{

	if ( $_REQUEST['popup'] == "1" )
		{
		foreach (	$sidebars_widgets as $key=>$widget)
			{
			$sidebars_widgets[$key] =array( false );
			}
		}
	return $sidebars_widgets;
	}