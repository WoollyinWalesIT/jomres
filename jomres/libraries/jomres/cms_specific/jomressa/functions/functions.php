<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "" );
// ################################################################
function jrsa_import($class)
	{
	if (!class_exists($class)) 
		{
		if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.".class.php") )
			{
			$result = require(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.".class.php");
			}
		else
			{
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'classes'.JRDS.$class.".class.php") )
				{
				$result = require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'classes'.JRDS.$class.".class.php");
				}
			else
				{
				trigger_error("Error, class file ".JRDS.'classes'.JRDS.$class.".class.php"." doesn't exist");
				}
			}
		}
	}


function jomressa_sendmail($frommail,$fromname,$target,$subject,$body)
	{
	
	if(!jomresMailer( $frommail, $fromname, $target, $subject, $body,$mode=1))
		return false;
	return true;
	}

function render_template($template_file,$path,$rows)
	{
	if (!file_exists($path.$template_file))
		{
		echo "Error, ".$path.$template_file." does not exist<br/>";
		}
	//echo "Calling ".$template_file." <br>";
	$tmpl = new patTemplate();
	$tmpl->setRoot( $path );
	$tmpl->readTemplatesFromInput( $template_file );
	foreach ($rows as $key=>$val)
		{
		$tmpl->addRows( $key,$val );
		}
	$tpl=$tmpl->getParsedTemplate();
	return $tpl;
	}

function jomressa_getSingleton($class)
	{
	$result =singleton::getInstance($class);
	return $result;
	}

function jomressa_startTask($task,$args=null)
	{
	
	$jomresSitefactory	= 	jomressa_getSingleton('jomressa_site_factory');
	$task_dir = "tasks_frontend";
	if ($jomresSitefactory->currpage =="admin" )
		$task_dir = "tasks_admin";
	if (!function_exists($task)) 
		{
		if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.$task_dir.JRDS.$task.'.function.php'))
			{
			require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.$task_dir.JRDS.$task.'.function.php');
			$result = $task($args);
			}
		else
			{
			$result = "Error, task ".$task_dir.JRDS.$task.".function.php"." not found";
			echo $result;
			}
		}
		
	return $result;
	}

?>