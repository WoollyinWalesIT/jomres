<?php
// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
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
				trigger_error("Error, class file "._JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'classes'.JRDS.$class.".class.php"." doesn't exist");
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
			$result = "Error, task "._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'tasks'.$task_dir.JRDS.$task.".function.php"." not found";
			echo $result;
			}
		}
		
	return $result;
	}

?>