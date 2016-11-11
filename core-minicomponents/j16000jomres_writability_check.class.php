<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000jomres_writability_check
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;
		
		$output     = array ();
		$pageoutput = array ();
		
		$this->all_writable = true;
	
		//jomres dirs writability check
		$output[ 'WRITABILITY_TESTS' ] = $this->control_panel_writability_tests();
		
		//depending on the result, we`ll output this description or not
		if (!$this->all_writable)
			$output[ 'WRITABILITY_TESTS_DESC' ] = "<p>If any of the above folders is not writable you may experience problems with running Jomres. It is recommended that you resolve any problems before attempting to use Jomres further. Whilst it is preferable that Jomres can write to the /jomres folders it is not vital (but it's better if it can because you can then use the updates feature) but folders such as the sessions and temp folders <i> have </i> to be writable for the system to work.</p>";
		else
			$output[ 'WRITABILITY_TESTS_DESC' ] = '';
		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->readTemplatesFromInput( 'jomres_writability_check.html' );
		
		if ( $output_now )
			$tmpl->displayParsedTemplate();
		else
			$this->retVals = $tmpl->getParsedTemplate();
		}
	
	function control_panel_writability_tests()
		{
		$test_output                 = '';
		$foldersToTestForWritability = array ();
		
		if ( this_cms_is_joomla() )
			{
			$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH . 'modules' . JRDS;
			$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH . 'plugins' . JRDS;
			}
		
		if ( this_cms_is_wordpress() )
			$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH . 'wp-content' . JRDS . 'plugins' . JRDS;
		
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'sessions' . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'updates' . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'remote_plugins' . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'core-plugins' . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'admin' . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'uploadedimages' . JRDS;
		$foldersToTestForWritability[ ] = JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'cache' . JRDS;
	
		$writabilityCheckPassImage = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/writability_check_passed.png";
		$writabilityCheckFailImage = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/writability_check_failed.png";

		foreach ( $foldersToTestForWritability as $folder )
			{
			$result  = $this->jomresStatusTestFolderIsWritable( $folder );
			$message = $result[ 'message' ];
			
			if ( $result[ 'result' ] ) 
				$image = '<label class="label label-green"><i class="fa fa-check"></i></label>';
			else
				{
				$this->all_writable = false;
				$image = '<label class="label label-red"><i class="fa fa-times"></i></label>';
				}
	
			$test_output .= '<div>' . $image . ' ' . $folder . '</div>';
			
			if ( $result[ 'message' ] != "Pass" ) 
				$test_output .= '<div class="alert alert-error">' . $result[ 'message' ] . '</div>';
			}
	
		if ($this->all_writable)
			return '<label class="label label-green"><i class="fa fa-check"></i></label> No problems detected';
		else
			return $test_output;
		}
	
	function jomresStatusTestFolderIsWritable( $path )
		{
		$tmpFile = "temp.txt";
		$tmpDir  = "jomres_test_dir";
		
		if ( !is_dir( $path ) ) 
			{
			if ( @!mkdir( $path ) )
				return array ( "result" => false, "message" => "Directory " . $path . " doesn't exist and we don't have permission to create it." );
			}
		
		if ( !is_writable( $path ) ) 
			return array ( "result" => false, "message" => "Directory " . $path . " isn't writable" );
		
		if ( !touch( $path . $tmpFile ) ) 
			return array ( "result" => false, "message" => "Could not write " . $path . $tmpFile );
		
		if ( !file_exists( $path . $tmpFile ) ) 
			return array ( "result" => false, "message" => "Could not find " . $path . $tmpFile . " after seeming to be able to create it." );
		
		if ( !unlink( $path . $tmpFile ) ) 
			return array ( "result" => false, "message" => "Could not delete " . $path . $tmpFile );
	
		if ( !mkdir( $path . $tmpDir ) ) 
			return array ( "result" => false, "message" => "Could not make temporary folder " . $path . $tmpDir );
		
		if ( !rmdir( $path . $tmpDir ) ) 
			return array ( "result" => false, "message" => "Could not remove temporary folder " . $path . $tmpDir );
	
		return array ( "result" => true, "message" => "Pass" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
