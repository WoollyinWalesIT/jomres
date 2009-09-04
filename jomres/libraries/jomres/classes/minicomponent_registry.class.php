<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
			$this->eventPoints = array();
			$this->new_filesize = 0;
			$this->nonOverridableEventClasses=array();
			$this->error_detected=false;
			$this->unWantedFolderContents=array('.','..','cvs','.svn','registry.php');
			$this->remote_plugin_directory = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS;
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
			unset($registry);

			$this->new_filesize=filesize($this->registry_file);
			}
		}

	function get_registered_classes()
		{
		return $this->registeredClasses;
		unset ($this->registeredClasses);
		}
		
	function regenerate_registry()
		{
		$this->registeredClasses = array();
		$this->getMiniComponentCoreClasses();
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################
		";
		$registered_classes = serialize($this->registeredClasses);
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
		
		$fileText=$safety_string.$class_structure_start.$nowVar.$registryVar.$class_structure_end;
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
					if (array_key_exists($classfileEventPoint.$classfileEventName,$this->registeredClasses) && ($this->registeredClasses[$classfileEventPoint.$classfileEventName]['eventtype']=='component' || $this->registeredClasses[$classfileEventPoint.$classfileEventName]['eventtype']=='remotecomponent') )
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
					$this->registeredClasses[$classfileEventPoint.$classfileEventName]=array('eventPoint'=>$classfileEventPoint, 'eventName'=>$classfileEventName,'filepath'=>$filePath,'eventtype'=>$eventType);
					}
				}
			}
		}
	}

?>
