<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

$request = Flight::request();
$bang = explode("/" , $request->url);
	
if ( file_exists( __DIR__ .'../../'.'core-plugins'.DIRECTORY_SEPARATOR."api_feature_".$bang[1].DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $bang[1].".php" ) )
	require_once  (__DIR__ .'../../'.'core-plugins'.DIRECTORY_SEPARATOR."api_feature_".$bang[1].DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $bang[1].".php");
elseif ( file_exists( __DIR__ .'../../'.'remote_plugins'.DIRECTORY_SEPARATOR."api_feature_".$bang[1].DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $bang[1].".php" ) )
	require_once  (__DIR__ .'../../'.'remote_plugins.'.DIRECTORY_SEPARATOR."api_feature_".$bang[1].DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $bang[1].".php");
else
	Flight::halt(404, 'Request unknown');
