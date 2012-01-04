<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
#
 * New for v3.2 of Jomres. Allows the system to create a registry file so that the minicomponent handler doesn't need to constantly search folders and record minicomponents on each run.
 #
* @package Jomres
 */ 
class minicomponent_registry
	{
	
	function minicomponent_registry($force_reload_allowed=false)
		{
		$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
		if (!strstr($scriptname,'install_jomres.php'))
			{
			$this->registeredClasses = array();
			$this->miniComponentDirectories=array();
			$this->eventPoints = array();
			$this->new_filesize = 0;
			$this->nonOverridableEventClasses=array();
			$this->error_detected=false;
			$this->unWantedFolderContents=array('.','..','cvs','.svn','registry.php');
			$this->remote_plugin_directory = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS;
			if (!is_dir($this->remote_plugin_directory))
				{
				mkdir($this->remote_plugin_directory);
				}
			$this->registry_file= JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."registry.php";
			$this->now = time();
			$this->force_reload_allowed=$force_reload_allowed;
			$this->original_filesize=@filesize($this->registry_file); // @to prevent notices when the file doesn't exist at all
			if (!file_exists($this->registry_file) )
				{
				$this->regenerate_registry();
				}
			require_once($this->registry_file);
			jr_import('jomres_mc_registry');
			$registry = new jomres_mc_registry();
			$lastGenerated = $registry->mcRegistry_now;
			$this->registeredClasses = unserialize($registry->mcRegistry_registry_serialized);
			$this->miniComponentDirectories = unserialize($registry->miniComponentDirectories);
			unset($registry);

			$this->new_filesize=filesize($this->registry_file);
			}
		}

	function get_registered_classes()
		{
		return $this->registeredClasses;
		unset ($this->registeredClasses);
		}
		
	function get_minicomponent_directories()
		{
		return $this->miniComponentDirectories;
		unset ($this->miniComponentDirectories);
		}
		
	function regenerate_registry()
		{
		$this->registeredClasses = array();
		$this->getMiniComponentCoreClasses();
		$this->getMiniComponentCMSSpecificClasses();
		$this->getMiniCorePluginsClasses();
		$this->getMiniComponentRemoteClasses();
		$this->getMiniComponentComponentClasses();
		asort($this->registeredClasses);
		$this->save_registry_file();
		if ($this->original_filesize != $this->new_filesize && $this->force_reload_allowed )
			{
			echo "<script>alert('Reloading current page as minicomponents registry has changed');</script>";
			echo "<script>window.location.reload()</script>";
			}
		}
		
	function save_registry_file()
		{
		$existed=false;
		if (file_exists($this->registry_file) )
			{
			if (!unlink($this->registry_file))
				{
				error_logging("Could not delete existing registry file  :: ".$this->registry_file);
				return false;
				}
			$existed=true;
			}
			
		
		$safety_string="<?php
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
		";
		$registered_classes = serialize($this->registeredClasses);
		$this->miniComponentDirectories=array_unique($this->miniComponentDirectories);
		$directories = serialize($this->miniComponentDirectories);
		$class_structure_start = "
class jomres_mc_registry
	{
	function jomres_mc_registry()
		{";
		$class_structure_end = "
		}
	}
?>";
		$nowVar='
		$this->mcRegistry_now='.$this->now.';';
		$registryVar='
		$this->mcRegistry_registry_serialized=\''.$registered_classes.'\';';
		$directoryVar='
		$this->miniComponentDirectories=\''.$directories.'\';';
		$fileText=$safety_string.$class_structure_start.$nowVar.$registryVar.$directoryVar.$class_structure_end;
		$scriptname=str_replace("/","",$_SERVER['PHP_SELF']);
		if (!strstr($scriptname,'install_jomres.php'))
			{
			$fp=fopen($this->registry_file,'w');
			fwrite($fp, $fileText);
			if (!fclose($fp))
				{
				$this->error_detected = true;
				error_logging("Could not save minicomponent registry file :: ".$this->registry_file);
				}
			}
		}
		
	function getMiniComponentComponentClasses()
		{
		$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS;
		$d = @dir($jrePath);
		$docs = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.' )
					{
						if (substr($entry,0,11) == 'com_jomcomp')
					$docs[] =$entry;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				sort($docs);
				foreach ($docs as $doc)
					{
					$listdir=$jrePath.$doc.JRDS;
					$dr = @dir($listdir);
					if($dr)
						{
						while (FALSE !== ($entry = $dr->read()))
							{
							$filename = $entry;
							$this->registerComponentFile($listdir,$filename,"component");
							}
						$dr->close();
						}
					}
				}
			}
		}


	// Reads in class files from the components table and inserts them into the registeredClasses array
	function getMiniComponentRemoteClasses()
		{
		$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
		$d = @dir($jrePath);
		$docs = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.' )
					{
					$docs[] =$entry;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				sort($docs);
				foreach ($docs as $doc)
					{
					$listdir=$jrePath.$doc.JRDS;
					$dr = @dir($listdir);
					if($dr)
						{
						while (FALSE !== ($entry = $dr->read()))
							{
							$filename = $entry;
							$this->registerComponentFile($listdir,$filename,"remotecomponent");
							}
						$dr->close();
						}
					}
				}
			}
		}


	function getMiniComponentCMSSpecificClasses()
		{
		$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS._JOMRES_DETECTED_CMS.JRDS;
		$d = @dir($jrePath);
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				$this->registerComponentFile($jrePath,$filename,"cms_specific_component");
				}
			$d->close();
			}
		}
		
	// Reads in class files from the events folder and inserts them into the registeredClasses array
	function getMiniComponentCoreClasses()
		{
		$listdir=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."core-minicomponents".JRDS;
		$d = @dir($listdir);
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				$this->registerComponentFile($listdir,$filename,"core");
				}
			$d->close();
			}
		}

	function getMiniCorePluginsClasses()
		{
		$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."core-plugins".JRDS;
		$d = @dir($jrePath);
		$docs = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.' )
					{
					$docs[] =$entry;
					}
				}
			$d->close();
			if (count($docs)>0)
				{
				sort($docs);
				foreach ($docs as $doc)
					{
					$listdir=$jrePath.$doc.JRDS;
					$dr = @dir($listdir);
					if($dr)
						{
						while (FALSE !== ($entry = $dr->read()))
							{
							$filename = $entry;
							$this->registerComponentFile($listdir,$filename,"core-plugin");
							}
						$dr->close();
						}
					}
				}
			}
		}

		
	function registerComponentFile($filePath,$filename,$eventType="component")
		{
		$strippedName = str_replace(".","",$filename);
		$strippedName = substr($strippedName, 0 , -8);

		$classfileEventPoint=substr($strippedName, 1, 5);
		$epi=$classfileEventPoint;
		settype($epi,"integer");
		$classfileEventName=substr($strippedName, 6);
		$path_parts = pathinfo($filePath.$filename);
		if (isset($path_parts['extension']) )
			$extension = $path_parts['extension'];
		if (is_array($this->unWantedFolderContents))
			{
			if(is_file($filePath.$filename) && !in_array( strtolower($filename),$this->unWantedFolderContents) && ($epi > 0 && $epi < 100000) && (strtolower($extension) == 'php')  )
				{
				if ($eventType!="core" && in_array( $classfileEventPoint.$classfileEventName,$this->nonOverridableEventClasses) )
					return;
				else
					{
					if (array_key_exists($classfileEventPoint.$classfileEventName,$this->registeredClasses) )
						{
							if (($this->registeredClasses[$classfileEventPoint.$classfileEventName]['eventtype']=='component' 
							|| $this->registeredClasses[$classfileEventPoint.$classfileEventName]['eventtype']=='remotecomponent')
							|| $this->registeredClasses[$classfileEventPoint.$classfileEventName]['eventtype']=='cms_specific_component')
							{
							$text="";
							$text .= '<font color="red" face="arial" size="1">Warning: Event override collision. You have two or more mini-components attempting to perform the same override function. System behaviour may be unpredictable'."</font><br>";
							$text .= '<b>'.$this->registeredClasses[$classfileEventPoint.$classfileEventName]['eventName']."</b><br>";
							$text .= '<b>'.$this->registeredClasses[$classfileEventPoint.$classfileEventName]['filepath']."</b><br>";
							$text .= 'Collides with this and possibly more mini-components: '."<br>";
							$text .= '<b>'.$classfileEventName."</b><br>";
							$text .= '<b>'.$filePath."</b><br>";
							echo $text;
							$this->error_detected = true;
							error_logging("Minicomponent collision :: ".$text);
						}
						}
					$this->miniComponentDirectories[] = $filePath;
					$this->registeredClasses[$classfileEventPoint.$classfileEventName]=array('eventPoint'=>$classfileEventPoint, 'eventName'=>$classfileEventName,'filepath'=>$filePath,'eventtype'=>$eventType);
					}
				}
			}
		}
	}
