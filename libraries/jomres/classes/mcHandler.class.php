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
 * The true heart of Jomres. Finds all core and plugin minicomponents for Jomres, enables calling of specific minicomponents and can return minicomponent stored variables
#
 */
class mcHandler
	{

	function __construct()
		{
		$this->registeredClasses = array ();
		$scriptname              = str_replace( "/", "", $_SERVER[ 'PHP_SELF' ] );
		if ( strstr( $scriptname, 'install_jomres.php' ) ) 
			return;
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$this->miniComponentData        = array ();
		$this->miniComponentDirectories = array ();
		$this->template_touch           = false;
		$this->log                      = array ();
		$this->logging_enbled           = false;
		if ( isset( $jrConfig[ 'errorChecking' ] ) )
			{
			if ( $jrConfig[ 'errorChecking' ] == "1" ) $this->logging_enbled = true;
			}

		$this->currentEvent = "";

		$this->remote_plugin_directory = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "remote_plugins" . JRDS;
		if ( !is_dir( $this->remote_plugin_directory ) )
			{
			if ( !@mkdir( $this->remote_plugin_directory ) )
				{
				echo "Error, unable to make folder " . $this->remote_plugin_directory . " automatically therefore cannot store minicomponent path data. Please create the folder manually and ensure that it's writable by the web server";
				exit;
				}
			}

		jr_import( 'minicomponent_registry' );
		$registry                       = new minicomponent_registry();
		$this->registeredClasses        = $registry->get_registered_classes();
		$this->miniComponentDirectories = $registry->get_minicomponent_directories();
		$startPath                      = $registry->registeredClasses[ "00001start" ][ "filepath" ];
		if ( !file_exists( $startPath . "j00001start.class.php" ) )
			{
			$registry->regenerate_registry();
			$this->registeredClasses        = $registry->get_registered_classes();
			$this->miniComponentDirectories = $registry->get_minicomponent_directories();
			}
		}

	function asamodule_report()
		{
		$output     = array ();
		$pageoutput = array ();

		$thisJRUser              = jomres_singleton_abstract::getInstance( 'jr_user' );
		$mrConfig                = getPropertySpecificSettings( 0 );
		$eventArgs               = null;
		$mrConfig[ 'editingOn' ] = "1";

		$eventClasses         = $this->registeredClasses;
		$this->template_touch = true;
		$output[ 'INFO' ]     = jr_gettext( '_JOMRES_ASAMODULE_REPORT_INFO', "This feature lists some minicomponents that could be called by the Jomres ASAModule Joomla module, or indeed directly through a menu option that was manually added. Additionally, you could call them via an iframe on a remote site. To include the output in an iframe you'd use the URL as provided here (manually modifying the property ids etc to suit your own requirements), but then if you click any links all subsequent pages will also be shown without headers, modules etc, so you'd be advised to add 'nofollowtmpl' to the url so that any subsequent links in that output do not also include '&tmpl=".get_showtime("tmplcomponent")."'. To show all headers, simply use the link without '&tmpl=".get_showtime("tmplcomponent")."' in the url.<br/>",false );

		$rows = array ();

		$asamodule_plugin_information = get_showtime( 'asamodule_plugin_information' );

		foreach ( $eventClasses as $eClass )
			{
			$ePointFilepath = $eClass[ 'filepath' ];
			set_showtime( 'ePointFilepath', $eClass[ 'filepath' ] );
			$classFileSuffix = '.class.php';
			$filename        = 'j' . $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] . $classFileSuffix;
			if ( file_exists( $eClass[ 'filepath' ] . $filename ) )
				{
				include_once( $eClass[ 'filepath' ] . $filename );
				if ( $this->logging_enbled ) $this->log[ ] = $eClass[ 'filepath' ] . $filename;
				$event     = new stdClass;
				$ePoint    = $eClass[ 'eventPoint' ];
				$eName     = $eClass[ 'eventName' ];
				$eLiveSite = str_replace( JOMRESCONFIG_ABSOLUTE_PATH, get_showtime( 'live_site' )."/", $eClass[ 'filepath' ] );
				$eLiveSite = str_replace( JRDS, "/", $eLiveSite );
				set_showtime( 'eLiveSite', $eLiveSite );
				$event = 'j' . $ePoint . $eName;
				$e     = new $event( $eventArgs );
				if ( array_key_exists( $event, $asamodule_plugin_information ) )
					{
					$r            = array ();
					$r[ 'EVENT' ] = $event;
					$r[ 'TASK' ]  = $asamodule_plugin_information[ $event ][ 'asamodule_task' ];
					$r[ 'INFO' ]  = $asamodule_plugin_information[ $event ][ 'asamodule_info' ];
					$example_link = $asamodule_plugin_information[ $event ][ 'asamodule_example_link' ];
					$manual_link  = $asamodule_plugin_information[ $event ][ 'asamodule_manual_link' ];
					if ( using_bootstrap() )
						{
						if ( $asamodule_plugin_information[ $event ][ 'asamodule_example_link' ] != "" ) $r[ 'EXAMPLE_LINK' ] = '<a href="' . $example_link . '" class="btn" target="_blank">Example link</a>';
						if ( $asamodule_plugin_information[ $event ][ 'asamodule_manual_link' ] != "" ) $r[ 'MANUAL_LINK' ] = '<a href="' . $manual_link . '" class="btn" target="_blank">Manual link</a>';
						}
					else
						{
						if ( $asamodule_plugin_information[ $event ][ 'asamodule_example_link' ] != "" ) $r[ 'EXAMPLE_LINK' ] = '<a href="' . $example_link . '" target="_blank">Example link</a>';
						if ( $asamodule_plugin_information[ $event ][ 'asamodule_manual_link' ] != "" ) $r[ 'MANUAL_LINK' ] = '<a href="' . $manual_link . '" target="_blank">Manual link</a>';
						}
					$rows[ ] = $r;
					}

				unset( $e );
				}

			}

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->readTemplatesFromInput( 'asamodule_report.html' );
		$tmpl->displayParsedTemplate();
		}

	function touch_templates()
		{
		$thisJRUser              = jomres_singleton_abstract::getInstance( 'jr_user' );
		$mrConfig                = getPropertySpecificSettings( 0 );
		$eventArgs               = null;
		$mrConfig[ 'editingOn' ] = "1";
		$eventClasses         = $this->registeredClasses;
		$this->template_touch = true;
		echo jr_gettext( '_JOMRES_CUSTOMTEXT_TOUCHTEMPLATES', "This feature allows you to edit language text for any template configured to allow you to edit text. You will be editing the default text for every property and saving that text to the database. HTML code is not allowed. To change the language that the text is saved for, change the default language in the Site Settings -> Misc tab. Click on a line to edit the text." );
		echo "<br/>";
		foreach ( $eventClasses as $eClass )
			{
			$ePointFilepath = $eClass[ 'filepath' ];
			set_showtime( 'ePointFilepath', $eClass[ 'filepath' ] );
			$classFileSuffix = '.class.php';
			$filename        = 'j' . $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] . $classFileSuffix;
			//echo $filename;exit;
			if ( file_exists( $eClass[ 'filepath' ] . $filename ) )
				{
				include_once( $eClass[ 'filepath' ] . $filename );
				if ( $this->logging_enbled ) $this->log[ ] = $eClass[ 'filepath' ] . $filename;
				$event     = new stdClass;
				$ePoint    = $eClass[ 'eventPoint' ];
				$eName     = $eClass[ 'eventName' ];
				$eLiveSite = str_replace( JOMRESCONFIG_ABSOLUTE_PATH, get_showtime( 'live_site' )."/", $eClass[ 'filepath' ] );
				$eLiveSite = str_replace( JRDS, "/", $eLiveSite );
				set_showtime( 'eLiveSite', $eLiveSite );
				$event = 'j' . $ePoint . $eName;
				$e     = new $event( $eventArgs );
				if ( isset( $e->template_touchable ) && $e->template_touchable )
					{
					echo "<br/>" . $event . "<br/>";
					if ( method_exists( $e, "touch_template_language" ) )
						{
						echo $e->touch_template_language();
						}
					else
						{
						echo "Ooops, you tried to run 'touch_template_language' in the minicomponent " . $event . " but that method does not exist";
						}
					}
				unset( $e );
				}
			}
		}

	function build_shortcodes()
		{
		$eventClasses			= $this->registeredClasses;
		$this->template_touch	= true;
		$eventArgs				= null;
		$shortcode_data			= array();
		foreach ( $eventClasses as $eClass )
			{
			$ePointFilepath = $eClass[ 'filepath' ];
			set_showtime( 'ePointFilepath', $eClass[ 'filepath' ] );
			$classFileSuffix = '.class.php';
			$filename        = 'j' . $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] . $classFileSuffix;
			if ( file_exists( $eClass[ 'filepath' ] . $filename ) )
				{
				include_once( $eClass[ 'filepath' ] . $filename );
				$event     = new stdClass;
				$ePoint    = $eClass[ 'eventPoint' ];
				if ( $ePoint == "06000" ||  $ePoint == "06001" ||  $ePoint == "06002" ||  $ePoint == "06005" )
					{
					$eName     = $eClass[ 'eventName' ];
					$eLiveSite = str_replace( JOMRESCONFIG_ABSOLUTE_PATH, get_showtime( 'live_site' )."/", $eClass[ 'filepath' ] );
					$eLiveSite = str_replace( JRDS, "/", $eLiveSite );
					set_showtime( 'eLiveSite', $eLiveSite );
					$event = 'j' . $ePoint . $eName;
					$e     = new $event( $eventArgs );
					if ( isset( $e->shortcode_data ) )
						{
						$shortcode_data[$ePoint][] = $e->shortcode_data;
						}
					}
				unset( $e );
				}
			}

		file_put_contents ( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "shortcodes.serialized" , serialize($shortcode_data) );
		}
	
	
	// Acutally calls the triggered event.
	function triggerEvent( $eventPoint, $eventArgs = null )
		{
		$jomres_access_control = jomres_singleton_abstract::getInstance( 'jomres_access_control' );

		$retVal       = null;
		$eventClasses = $this->registeredClasses;
		if ( count( $this->registeredClasses ) > 0 )
			{
			foreach ( $eventClasses as $eClass )
				{
				if ( $eClass[ 'eventPoint' ] == $eventPoint )
					{
					$ePointFilepath = $eClass[ 'filepath' ];
					set_showtime( 'ePointFilepath', $eClass[ 'filepath' ] );
					$classFileSuffix = '.class.php';
					$filename        = 'j' . $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] . $classFileSuffix;
					if ( $jomres_access_control->can_user_access_this_script( $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] ) )
						{
						if ( file_exists( $eClass[ 'filepath' ] . $filename ) )
							{
							include_once( $eClass[ 'filepath' ] . $filename );
							
							if ( $this->logging_enbled ) 
								$this->log[ ] = $eClass[ 'filepath' ] . $filename;
							$this->currentEvent = $eClass[ 'filepath' ] . $filename;
							$ePoint             = $eClass[ 'eventPoint' ];
							$eName              = $eClass[ 'eventName' ];
							$eLiveSite          = str_replace( JOMRESCONFIG_ABSOLUTE_PATH, get_showtime( 'live_site' )."/", $ePointFilepath );
							$eLiveSite          = str_replace( JRDS, "/", $eLiveSite );
							set_showtime( 'eLiveSite', $eLiveSite );
							$event = 'j' . $ePoint . $eName;

							if ( !class_exists( $event ) )
								{
								echo "Error, class " . $event . " does not exist. Most likely you've renamed a minicomponent file, but not the class in that file";
								return;
								}
							set_showtime( 'current_minicomp', $event );
							$e                                            = new $event( $eventArgs );
							$retVal                                       = $e->getRetVals();
							$this->miniComponentData[ $ePoint ][ $eName ] = $retVal;
							set_showtime( 'current_minicomp', '' );
							unset( $e );
							}
						}
					else
						{
						system_log( "Access control prevented system from running " . $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] );
						}
					}
				}
			}
		$this->currentEvent = "";

		return $retVal;
		}

	// Calls a specific event.
	function specificEvent( $eventPoint, $eventName, $eventArgs = null )
		{
		$jomres_access_control = jomres_singleton_abstract::getInstance( 'jomres_access_control' );
		$retVal                = null;
		$eventClasses          = $this->registeredClasses;
		if ( count( $this->registeredClasses ) > 0 )
			{
			foreach ( $eventClasses as $eClass )
				{
				if ( $eClass[ 'eventPoint' ] == $eventPoint && $eClass[ 'eventName' ] == $eventName )
					{
					$ePointFilepath = $eClass[ 'filepath' ];
					set_showtime( 'ePointFilepath', $eClass[ 'filepath' ] );
					$classFileSuffix = '.class.php';
					$filename        = 'j' . $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] . $classFileSuffix;
					if ( $jomres_access_control->can_user_access_this_script( $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] ) )
						{
						if ( file_exists( $eClass[ 'filepath' ] . $filename ) )
							{
							include_once( $eClass[ 'filepath' ] . $filename );
							if ( $this->logging_enbled ) $this->log[ ] = $eClass[ 'filepath' ] . $filename;
							$this->currentEvent = $eClass[ 'filepath' ] . $filename;
							$ePoint             = $eClass[ 'eventPoint' ];
							$eName              = $eClass[ 'eventName' ];
							$eLiveSite          = str_replace( JOMRESCONFIG_ABSOLUTE_PATH, get_showtime( 'live_site' )."/", $ePointFilepath );
							$eLiveSite          = str_replace( JRDS, "/", $eLiveSite );
							set_showtime( 'eLiveSite', $eLiveSite );
							$event = 'j' . $ePoint . $eName;
							set_showtime( 'current_minicomp', $event );
							$e                                            = new $event( $eventArgs );
							$retVal                                       = $e->getRetVals();
							$this->miniComponentData[ $ePoint ][ $eName ] = $retVal;
							set_showtime( 'current_minicomp', '' );
							unset( $e );
							}
						}
					else
						{
						system_log( "Access control prevented system from running " . $eClass[ 'eventPoint' ] . $eClass[ 'eventName' ] );
						}
					}
				}
			}
		$this->currentEvent = "";

		return $retVal;
		}

	//  This function is used to see if a mini-component exists for a given event point
	function eventFileExistsCheck( $eventPoint )
		{
		$eventClasses = $this->registeredClasses;
		if ( count( $this->registeredClasses ) > 0 )
			{
			foreach ( $eventClasses as $eClass )
				{
				if ( $eClass[ 'eventPoint' ] == $eventPoint )
					{
					return true;
					}
				}
			}

		return false;
		}

	//  This function is used to see if a mini-component exists.
	function eventSpecificlyExistsCheck( $eventPoint, $eventName )
		{
		$eventClasses = $this->registeredClasses;
		if ( count( $this->registeredClasses ) > 0 )
			{
			foreach ( $eventClasses as $eClass )
				{
				//echo $eClass['eventPoint'].$eClass['eventName']." || " .$eventPoint.$eventName."<br>";
				if ( $eClass[ 'eventPoint' ] == $eventPoint && $eClass[ 'eventName' ] == $eventName )
					{
					return true;
					}
				}
			}

		return false;
		}

	//  This function is used to see if a mini-component file exists.
	function eventFileLocate( $eventPoint, $eventName )
		{
		$eventClasses = $this->registeredClasses;
		if ( count( $this->registeredClasses ) > 0 )
			{
			foreach ( $eventClasses as $eClass )
				{
				if ( $eClass[ 'eventPoint' ] == $eventPoint && $eClass[ 'eventName' ] == $eventName )
					{
					return true;
					}
				}
			}

		return false;
		}

	function getAllEventPointsData( $ePoint )
		{
		$retVal = array ();
		if (isset($this->miniComponentData[ $ePoint ]))
			{
			if ( count( $this->miniComponentData[ $ePoint ] ) > 0 )
				{
				foreach ( $this->miniComponentData[ $ePoint ] as $key => $val )
					{
					$retVal[ $key ] = $this->getEventPointData( $ePoint, $key );
					}
				}
			}
		return $retVal;
		}

	function getEventPointData( $ePoint, $eName )
		{
		return $this->miniComponentData[ $ePoint ][ $eName ];
		}
	}

?>