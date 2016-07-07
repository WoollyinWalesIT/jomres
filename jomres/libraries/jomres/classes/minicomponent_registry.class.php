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
/**
#
 * New for v3.2 of Jomres. Allows the system to create a registry file so that the minicomponent handler doesn't need to constantly search folders and record minicomponents on each run.
#
 *
 * @package Jomres
 */
class minicomponent_registry
	{

	function __construct( $force_reload_allowed = false )
		{
		$this->registeredClasses          	= array ();
		$this->miniComponentDirectories   	= array ();
		$this->eventPoints                	= array ();
		$this->new_filesize               	= 0;
		$this->nonOverridableEventClasses 	= array ();
		$this->error_detected            	= false;
		$this->unWantedFolderContents     	= array ( '.', '..', 'cvs', '.svn', 'registry.php' );
		$this->remote_plugin_directory    	= JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS;
		$this->registry_file        		= JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "registry.php";
		$this->now                  		= time();
		
		if (file_exists($this->registry_file))
			$this->original_filesize    		= @filesize( $this->registry_file ); // @to prevent notices when the file doesn't exist at all
		else
			$this->original_filesize			= 0;
			
		$scriptname = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
		if ( !strstr( $scriptname, 'install_jomres.php' ) )
			{
			if ( !is_dir( $this->remote_plugin_directory ) )
				{
				mkdir( $this->remote_plugin_directory );
				}
			
			$this->force_reload_allowed = $force_reload_allowed;
			
			if ( !file_exists( $this->registry_file ) )
				{
				$this->regenerate_registry();
				}
			
			require_once( $this->registry_file );
			jr_import( 'jomres_mc_registry' );
			$registry                       = new jomres_mc_registry();
			$lastGenerated                  = $registry->mcRegistry_now;
			$this->registeredClasses        = unserialize( $registry->mcRegistry_registry_serialized );
			$this->miniComponentDirectories = unserialize( $registry->miniComponentDirectories );
			unset( $registry );

			$this->new_filesize = filesize( $this->registry_file );
			}
		}

	function get_registered_classes()
		{
		return $this->registeredClasses;
		unset ( $this->registeredClasses );
		}

	function get_minicomponent_directories()
		{
		return $this->miniComponentDirectories;
		unset ( $this->miniComponentDirectories );
		}

	function regenerate_registry()
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if ( !isset( $jrConfig[ 'safe_mode' ] ) ) 
			$jrConfig[ 'safe_mode' ] = "0";

		$this->registeredClasses = array ();
		$this->getMiniComponentCoreClasses();
		$this->getMiniComponentCMSSpecificClasses();
		if ( $jrConfig[ 'safe_mode' ] == "0" )
			{
			$this->getMiniCorePluginsClasses();
			$this->getMiniComponentRemoteClasses();
		
			$scriptname = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
			if ( !strstr( $scriptname, 'install_jomres.php' ) )
				$this->getMiniComponentCmsTemplateClasses();
			}

		asort( $this->registeredClasses );
		$this->save_registry_file();
		if ( $this->original_filesize != $this->new_filesize && $this->force_reload_allowed )
			{
			echo "<script>alert('Reloading current page as minicomponents registry has changed');</script>";
			echo "<script>window.location.reload()</script>";
			}
		
		//clear cache
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$c->eraseAll();
		
		//delete js files in /jomres/temp dir
		
		if (isset($_REQUEST['task']) && $_REQUEST['task'] == "rebuildregistry")
			{
			$javascript_files_in_temp_dir = scandir_getfiles( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS, $extension = "js" );
			foreach ( $javascript_files_in_temp_dir as $file )
				{
				unlink( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . $file );
				}
			}
		}
		
	function save_registry_file()
		{
		$existed = false;
		if ( file_exists( $this->registry_file ) )
			{
			if ( !unlink( $this->registry_file ) )
				{
				error_logging( "Could not delete existing registry file  :: " . $this->registry_file );

				return false;
				}
			$existed = true;
			}


		$safety_string                  = "<?php
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
		";
		$registered_classes             = serialize( $this->registeredClasses );
		$this->miniComponentDirectories = array_unique( $this->miniComponentDirectories );
		$directories                    = serialize( $this->miniComponentDirectories );
		$class_structure_start          = "
class jomres_mc_registry
	{
	function __construct()
		{";
		$class_structure_end            = "
		}
	}
";
		$nowVar                         = '
		$this->mcRegistry_now=' . $this->now . ';';
		$registryVar                    = '
		$this->mcRegistry_registry_serialized=\'' . $registered_classes . '\';';
		$directoryVar                   = '
		$this->miniComponentDirectories=\'' . $directories . '\';';
		$fileText                       = $safety_string . $class_structure_start . $nowVar . $registryVar . $directoryVar . $class_structure_end;
		$scriptname                     = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
		if ( !strstr( $scriptname, 'install_jomres.php' ) )
			{
			$fp = fopen( $this->registry_file, 'w' );
			fwrite( $fp, $fileText );
			if ( !fclose( $fp ) )
				{
				$this->error_detected = true;
				error_logging( "Could not save minicomponent registry file :: " . $this->registry_file );
				}
			}
		}

	// If this is Joomla we'll also scan the Joomla template's html/com_jomres dir for minicomponents. 
	function getMiniComponentCmsTemplateClasses()
		{
		if ( !this_cms_is_joomla() && !this_cms_is_wordpress() )
			return;
		
		if ( this_cms_is_joomla() )
			{
			$db = JFactory::getDBO();
			$query = "SELECT template FROM #__template_styles WHERE client_id = 0 AND home = 1";
			$db->setQuery($query);
			$templateName = $db->loadResult();
	
			$jrePath = JOMRESCONFIG_ABSOLUTE_PATH . 'templates' . JRDS . $templateName . JRDS . 'html' . JRDS . 'com_jomres' . JRDS ;
			}
		elseif ( this_cms_is_wordpress() )
			{
			$jrePath = get_template_directory() . JRDS . 'html' . JRDS . 'com_jomres' . JRDS ;
			}
		else
			return;

		$d       = @dir( $jrePath );
		$docs    = array ();
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( substr( $entry, 0, 1 ) != '.' )
					{
					$docs[ ] = $entry;
					}
				}

			$d->close();
			if ( count( $docs ) > 0 )
				{
				sort( $docs );
				foreach ( $docs as $doc )
					{
					$listdir = $jrePath . $doc . JRDS;
					$dr      = @dir( $listdir );
					if ( $dr )
						{
						while ( false !== ( $entry = $dr->read() ) )
							{
							$filename = $entry;
							$this->registerComponentFile( $listdir, $filename, 'cmstemplate' );
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
		$jrePath = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'remote_plugins' . JRDS;
		$d       = @dir( $jrePath );
		$docs    = array ();
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( substr( $entry, 0, 1 ) != '.' )
					{
					$docs[ ] = $entry;
					}
				}
			$d->close();
			if ( count( $docs ) > 0 )
				{
				sort( $docs );
				foreach ( $docs as $doc )
					{
					$listdir = $jrePath . $doc . JRDS;
					$dr      = @dir( $listdir );
					if ( $dr )
						{
						while ( false !== ( $entry = $dr->read() ) )
							{
							$filename = $entry;
							$this->registerComponentFile( $listdir, $filename, 'remotecomponent' );
							}
						$dr->close();
						}
					}
				}
			}
		}


	function getMiniComponentCMSSpecificClasses()
		{
		$jrePath = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'cms_specific' . JRDS . _JOMRES_DETECTED_CMS . JRDS;
		$d       = @dir( $jrePath );
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				$this->registerComponentFile( $jrePath, $filename, 'cms_specific_component' );
				}
			$d->close();
			}
		}

	// Reads in class files from the events folder and inserts them into the registeredClasses array
	function getMiniComponentCoreClasses()
		{
		$listdir = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'core-minicomponents' . JRDS;
		$d       = @dir( $listdir );
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				$this->registerComponentFile( $listdir, $filename, 'core' );
				}
			$d->close();
			}
		}

	function getMiniCorePluginsClasses()
		{
		$jrePath = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'core-plugins' . JRDS;
		$d       = @dir( $jrePath );
		$docs    = array ();
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( substr( $entry, 0, 1 ) != '.' )
					{
					$docs[ ] = $entry;
					}
				}
			$d->close();
			if ( count( $docs ) > 0 )
				{
				sort( $docs );
				foreach ( $docs as $doc )
					{
					$listdir = $jrePath . $doc . JRDS;
					$dr      = @dir( $listdir );
					if ( $dr )
						{
						while ( false !== ( $entry = $dr->read() ) )
							{
							$filename = $entry;
							$this->registerComponentFile( $listdir, $filename, 'core-plugin' );
							}
						$dr->close();
						}
					}
				}
			}
		}


	function registerComponentFile( $filePath, $filename, $eventType = 'component' )
		{
		$strippedName = str_replace( '.', '', $filename );
		$strippedName = substr( $strippedName, 0, -8 );

		$classfileEventPoint = substr( $strippedName, 1, 5 );
		$epi                 = $classfileEventPoint;
		settype( $epi, "integer" );
		$classfileEventName = substr( $strippedName, 6 );
		$path_parts         = pathinfo( $filePath . $filename );
		if ( isset( $path_parts[ 'extension' ] ) ) $extension = $path_parts[ 'extension' ];
		if ( is_array( $this->unWantedFolderContents ) )
			{
			if ( is_file( $filePath . $filename ) && !in_array( strtolower( $filename ), $this->unWantedFolderContents ) && ( $epi > 0 && $epi < 100000 ) && ( strtolower( $extension ) == 'php' ) )
				{
				if ( $eventType != "core" && in_array( $classfileEventPoint . $classfileEventName, $this->nonOverridableEventClasses ) ) 
					return;
				else
					{
					if ( array_key_exists( $classfileEventPoint . $classfileEventName, $this->registeredClasses ) )
						{
						if ( ( 
							$this->registeredClasses[ $classfileEventPoint . $classfileEventName ][ 'eventtype' ] == 'component' || 
							$this->registeredClasses[ $classfileEventPoint . $classfileEventName ][ 'eventtype' ] == 'remotecomponent' ) || 
							$this->registeredClasses[ $classfileEventPoint . $classfileEventName ][ 'eventtype' ] == 'cms_specific_component' )
							{
							$text = "";
							$text .= '<font color="red" face="arial" size="1">Warning: Event override collision. You have two or more mini-components attempting to perform the same override function. System behaviour may be unpredictable' . "</font><br>";
							$text .= '<b>' . $this->registeredClasses[ $classfileEventPoint . $classfileEventName ][ 'eventName' ] . "</b><br>";
							$text .= '<b>' . $this->registeredClasses[ $classfileEventPoint . $classfileEventName ][ 'filepath' ] . "</b><br>";
							$text .= 'Collides with this and possibly more mini-components: ' . "<br>";
							$text .= '<b>' . $classfileEventName . "</b><br>";
							$text .= '<b>' . $filePath . "</b><br>";
							echo $text;
							$this->error_detected = true;
							error_logging( "Minicomponent collision :: " . $text );
							}
						}
					$this->miniComponentDirectories[ ]                                     = $filePath;
					$this->registeredClasses[ $classfileEventPoint . $classfileEventName ] = array ( 'eventPoint' => $classfileEventPoint, 'eventName' => $classfileEventName, 'filepath' => $filePath, 'eventtype' => $eventType );
					}
				}
			}
		}
	}
