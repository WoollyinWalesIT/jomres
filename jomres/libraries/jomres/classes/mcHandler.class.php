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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * The true heart of Jomres. Finds all core and plugin minicomponents for Jomres, enables calling of specific minicomponents and can return minicomponent stored variables
#
 */
class mcHandler {

	function mcHandler()
		{
		$this->registeredClasses = array();
		$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
		if (strstr($scriptname,'install_jomres.php'))
			return;
		// Following commented out functionality superceeded by Jomres minicomponent registry introduced in 3.2beta2
		//$this->eventPoints = array();
		//$this->nonOverridableEventClasses=array();
		//$this->unWantedFolderContents=array('.','..','cvs','.svn');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		$this->miniComponentData=array();
		$this->miniComponentDirectories=array();
		$this->template_touch=false;
		$this->log = array();
		$this->logging_enbled = false;
		if ($jrConfig['errorChecking'] =="1")
			$this->logging_enbled = true;
			
		$this->currentEvent = "";

		$this->remote_plugin_directory = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."remote_plugins".JRDS;
		if (!is_dir($this->remote_plugin_directory) )
			{
			if (!@mkdir($this->remote_plugin_directory))
				{
				echo "Error, unable to make folder ".$this->remote_plugin_directory." automatically therefore cannot store minicomponent path data. Please create the folder manually and ensure that it's writable by the web server";
				exit;
				}
			}

		jr_import('minicomponent_registry');
		$registry = new minicomponent_registry();
		$this->registeredClasses=$registry->get_registered_classes();
		$this->miniComponentDirectories=$registry->get_minicomponent_directories();
		$startPath = $registry->registeredClasses["00001start"]["filepath"];
		if (!file_exists($startPath."j00001start.class.php") )
			{
			$registry->regenerate_registry();
			$this->registeredClasses=$registry->get_registered_classes();
			$this->miniComponentDirectories=$registry->get_minicomponent_directories();
			}
		}

	function touch_templates()
		{
		global $ePointFilepath;
		$thisJRUser=jomres_getSingleton('jr_user');
		$mrConfig=getPropertySpecificSettings($property_uid);
		$eventArgs=null;
		$mrConfig['editingOn']="1";
		//var_dump($thisJRUser);exit;
		//if ($thisJRUser->superPropertyManager)
		//	{
			$eventClasses=$this->registeredClasses;
			$this->template_touch=true;
			echo jr_gettext('_JOMRES_CUSTOMTEXT_TOUCHTEMPLATES',"This feature allows you to edit language text for any template configured to allow you to edit text. You will be editing the default text for every property and saving that text to the database. HTML code is not allowed. To change the language that the text is saved for, change the default language in the Site Settings -> Misc tab. Click on a line to edit the text.");
			echo "<br/>";
			foreach ( $eventClasses as $eClass)
				{
				$ePointFilepath=$eClass['filepath'];
				set_showtime('ePointFilepath',$eClass['filepath']);
				$classFileSuffix='.class.php';
				$filename='j'.$eClass['eventPoint'].$eClass['eventName'].$classFileSuffix;
				//echo $filename;exit;
				if (file_exists($eClass['filepath'].$filename) )
					{
					include_once($eClass['filepath'].$filename);
					if ($this->logging_enbled)
						$this->log[]=$eClass['filepath'].$filename;
					$event=new stdClass;
					$ePoint=$eClass['eventPoint'];
					$eName=$eClass['eventName'];
					$eLiveSite=str_replace(JOMRESCONFIG_ABSOLUTE_PATH,get_showtime('live_site'),$eClass['filepath']);
					$eLiveSite=str_replace(JRDS,"/",$eLiveSite);
					set_showtime('eLiveSite',$eLiveSite);
					$event='j'.$ePoint.$eName;
					$e = new $event($eventArgs);
					if (isset($e->template_touchable) && $e->template_touchable)
						{
						echo "<br/>".$event."<br/>";
						echo $e->touch_template_language();
						}
					unset($e);
					}
				}
		//	}


		}

	// Acutally calls the triggered event.
	function triggerEvent($eventPoint,$eventArgs=null)
		{
		global $ePointFilepath,$eLiveSite;
		$retVal=null;
		$eventClasses=$this->registeredClasses;
		if (count($this->registeredClasses) > 0 )
			{
			foreach ( $eventClasses as $eClass)
				{
				if ($eClass['eventPoint']==$eventPoint)
					{
					$ePointFilepath=$eClass['filepath'];
					set_showtime('ePointFilepath',$eClass['filepath']);
					$classFileSuffix='.class.php';
					$filename='j'.$eClass['eventPoint'].$eClass['eventName'].$classFileSuffix;
					if (file_exists($eClass['filepath'].$filename) )
						{
						include_once($eClass['filepath'].$filename);
						if ($this->logging_enbled)
							$this->log[]=$eClass['filepath'].$filename;
						$this->currentEvent =$eClass['filepath'].$filename;
						$event=new stdClass;
						$ePoint=$eClass['eventPoint'];
						$eName=$eClass['eventName'];
						$eLiveSite=str_replace(JOMRESCONFIG_ABSOLUTE_PATH,get_showtime('live_site'),$ePointFilepath);
						$eLiveSite=str_replace(JRDS,"/",$eLiveSite);
						set_showtime('eLiveSite',$eLiveSite);
						$event='j'.$ePoint.$eName;
						if (!class_exists($event))
							{
							echo "Error, class ".$event." does not exist. Most likely you've renamed a minicomponent file, but not the class in that file";
							return;
							}
						set_showtime('current_minicomp',$event);
						$e = new $event($eventArgs);
						$retVal=$e->getRetVals();
						$this->miniComponentData[$ePoint][$eName]=$retVal;
						set_showtime('current_minicomp','');
						unset($e);
						}
					}
				}
			}
		$this->currentEvent = "";
		return $retVal;
		}

	// Calls a specific event.
	function specificEvent($eventPoint,$eventName,$eventArgs=null)
		{
		global $ePointFilepath,$eLiveSite;
		$retVal=null;
		$eventClasses=$this->registeredClasses;
		if (count($this->registeredClasses) > 0 )
			{
			foreach ( $eventClasses as $eClass)
				{
				if ($eClass['eventPoint']==$eventPoint && $eClass['eventName']==$eventName)
					{
					$ePointFilepath=$eClass['filepath'];
					set_showtime('ePointFilepath',$eClass['filepath']);
					$classFileSuffix='.class.php';
					$filename='j'.$eClass['eventPoint'].$eClass['eventName'].$classFileSuffix;
					if (file_exists($eClass['filepath'].$filename) )
						{
						include_once($eClass['filepath'].$filename);
						if ($this->logging_enbled)
							$this->log[]=$eClass['filepath'].$filename;
						$this->currentEvent =$eClass['filepath'].$filename;
						$event=new stdClass;
						$ePoint=$eClass['eventPoint'];
						$eName=$eClass['eventName'];
						$eLiveSite=str_replace(JOMRESCONFIG_ABSOLUTE_PATH,get_showtime('live_site'),$ePointFilepath);
						$eLiveSite=str_replace(JRDS,"/",$eLiveSite);
						set_showtime('eLiveSite',$eLiveSite);
						$event='j'.$ePoint.$eName;
						set_showtime('current_minicomp',$event);
						$e = new $event($eventArgs);
						$retVal=$e->getRetVals();
						$this->miniComponentData[$ePoint][$eName]=$retVal;
						set_showtime('current_minicomp','');
						unset($e);
						}
					}
				}
			}
		$this->currentEvent = "";
		return $retVal;
		}

	//  This function is used to see if a mini-component exists for a given event point
	function eventFileExistsCheck($eventPoint)
		{
		$eventClasses=$this->registeredClasses;
		if (count($this->registeredClasses) > 0 )
			{
			foreach ( $eventClasses as $eClass)
				{
				if ($eClass['eventPoint']==$eventPoint)
					{
					return true;
					}
				}
			}
		return false;
		}

	//  This function is used to see if a mini-component exists.
	function eventSpecificlyExistsCheck($eventPoint,$eventName)
		{
		$eventClasses=$this->registeredClasses;
		if (count($this->registeredClasses) > 0 )
			{
			foreach ( $eventClasses as $eClass)
				{
				//echo $eClass['eventPoint'].$eClass['eventName']." || " .$eventPoint.$eventName."<br>";
				if ($eClass['eventPoint']==$eventPoint && $eClass['eventName']==$eventName)
					{
					return true;
					}
				}
			}
		return false;
		}

	//  This function is used to see if a mini-component file exists.
	function eventFileLocate($eventPoint,$eventName)
		{
		$eventClasses=$this->registeredClasses;
		if (count($this->registeredClasses) > 0 )
			{
			foreach ( $eventClasses as $eClass)
				{
				if ($eClass['eventPoint']==$eventPoint && $eClass['eventName']==$eventName)
					{
					return true;
					}
				}
			}
		return false;
		}

	function getAllEventPointsData($ePoint)
		{
		$retVal =array();
		if (count($this->miniComponentData[$ePoint]) >0)
			{
			foreach ($this->miniComponentData[$ePoint] as $key=>$val)
				{
				$retVal[$key]=$this->getEventPointData($ePoint,$key);
				}
			}
		return $retVal;
		}

	function getEventPointData($ePoint,$eName)
		{
		return $this->miniComponentData[$ePoint][$eName];
		}
	}

?>