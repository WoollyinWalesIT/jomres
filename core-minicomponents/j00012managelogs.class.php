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

class j00012managelogs
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		// Log file rotation
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if (!isset($jrConfig['log_path']))
			$jrConfig['log_path'] = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS .'logs' ;
		$log_file = "application.log";
		
		$maxFileSize           = 1024 * 1024;

		if ( file_exists( $jrConfig['log_path'] . JRDS . $log_file ) )
			{
			$size = filesize( ( $jrConfig['log_path'] . JRDS . $log_file ) );
			if ( $size > $maxFileSize )
				{
				$newFileName = date( "U" ) . '_' . $log_file.'.zip';
				$zip = new ZipArchive;
				$zip->open($jrConfig['log_path'].JRDS.$newFileName, ZipArchive::CREATE);
				$zip->addFile($jrConfig['log_path'] . JRDS . $log_file , $log_file);
				$zip->close();
				
				unlink( $jrConfig['log_path'] . JRDS . $log_file);
				}
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 */
	function getRetVals()
		{
		return null;
		}
	}

?>