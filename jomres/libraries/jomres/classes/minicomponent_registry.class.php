<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
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
	private static $configInstance;
	
	function __construct()
		{
		$this->registeredClasses          	= array ();
		$this->miniComponentDirectories   	= array ();
		$this->eventPoints                	= array ();
		$this->new_filesize               	= 0;
		$this->nonOverridableEventClasses 	= array ();
		$this->error_detected            	= false;
		$this->unWantedFolderContents     	= array ( '.', '..', 'cvs', '.svn', 'registry.php' );
		$this->temp_directory    			= JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS;
		$this->registry_file        		= JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "registry.php";
		
		if (file_exists($this->registry_file))
			$this->original_filesize    		= @filesize( $this->registry_file ); // @to prevent notices when the file doesn't exist at all
		else
			$this->original_filesize			= 0;
			
		if ( !defined('AUTO_UPGRADE') )
			{
			if ( !is_dir( $this->temp_directory ) )
				{
				mkdir( $this->temp_directory );
				}
			
			if ( !file_exists( $this->registry_file ) )
				{
				$this->regenerate_registry();
				$this->new_filesize = filesize( $this->registry_file );
				}
			
			//this loads the registry items in $this->registeredClasses and $this->miniComponentDirectories
			include_once( $this->registry_file );
			}
		}
	
	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new minicomponent_registry();
			}

		return self::$configInstance;
		}

	function get_registered_classes()
		{
		return $this->registeredClasses;
		}

	function get_minicomponent_directories()
		{
		return $this->miniComponentDirectories;
		}

	function regenerate_registry( $force_reload_allowed = false )
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		if ( !isset( $jrConfig[ 'safe_mode' ] ) ) 
			$jrConfig[ 'safe_mode' ] = "0";

		$this->registeredClasses 		= array();
		$this->miniComponentDirectories = array();
		
		$this->getMiniComponentCoreClasses();
		$this->getMiniComponentCMSSpecificClasses();
		
		if ( $jrConfig[ 'safe_mode' ] == "0" )
			{
			$this->getMiniCorePluginsClasses();
			$this->getMiniComponentRemoteClasses();
		
			if ( !defined('AUTO_UPGRADE') )
				$this->getMiniComponentCmsTemplateClasses();
			}

		asort( $this->registeredClasses );
		
		$this->save_registry_file();
		
		$this->new_filesize = filesize( $this->registry_file );
		
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
		
		//rebuild the shortcodes list
		if ( !defined('AUTO_UPGRADE') )
			{
			$shortcode_parser = jomres_singleton_abstract::getInstance( 'shortcode_parser' );
			$shortcode_parser->build_shortcodes( $force = true );
			}
		
		//reload page if registry changed
		if ( $this->original_filesize != $this->new_filesize && $force_reload_allowed )
			{
			echo "<script>alert('Reloading current page as minicomponents registry has changed');</script>";
			echo "<script>window.location.reload();</script>";
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
		
		$this->miniComponentDirectories = array_unique( $this->miniComponentDirectories );
		
		if (!file_put_contents($this->registry_file, 
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$this->registeredClasses = ' . var_export($this->registeredClasses, true) . ';
$this->miniComponentDirectories = ' . var_export($this->miniComponentDirectories, true) . ';
'))
			{
			trigger_error('ERROR: '. $this->registry_file .' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
			exit;
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
			$query = "SELECT `template` FROM #__template_styles WHERE `client_id` = 0 AND `home` = 1";
			$db->setQuery($query);
			$templateName = $db->loadResult();
	
			$jrePath = JOMRESCONFIG_ABSOLUTE_PATH . 'templates' . JRDS . $templateName . JRDS . 'html' . JRDS . 'com_jomres' . JRDS ;
			}
		elseif ( this_cms_is_wordpress() )
			{
			$jrePath = get_stylesheet_directory() . JRDS . 'html' . JRDS . 'com_jomres' . JRDS ;
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
