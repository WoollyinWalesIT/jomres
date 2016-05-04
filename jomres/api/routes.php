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
$filename = filter_var($bang[1], FILTER_SANITIZE_STRING);

$features_files = Flight::get("features_files");
if (!in_array($filename.".php" , $features_files ))
	Flight::halt(404, 'Request not allowed');

if ( file_exists( __DIR__ .'../../'.'core-plugins'.DIRECTORY_SEPARATOR."api_feature_".$filename.DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $filename.".php" ) )
	require_once  (__DIR__ .'../../'.'core-plugins'.DIRECTORY_SEPARATOR."api_feature_".$filename.DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $filename.".php");
elseif ( file_exists( __DIR__ .'../../'.'remote_plugins'.DIRECTORY_SEPARATOR."api_feature_".$filename.DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $filename.".php" ) )
	require_once  (__DIR__ .'../../'.'remote_plugins.'.DIRECTORY_SEPARATOR."api_feature_".$filename.DIRECTORY_SEPARATOR.$request->method .DIRECTORY_SEPARATOR. $filename.".php");
else
	Flight::halt(404, 'Request unknown');
