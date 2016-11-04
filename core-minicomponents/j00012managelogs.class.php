<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
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
		$maxFileSize           = 1024 * 1024;

		$log_files = scandir_getfiles(JOMRES_SYSTEMLOG_PATH);
		
		foreach ($log_files as $log_file)
			{
			$bang = explode(".",$log_file);
			if ( isset($bang[2]) && $bang[2] == "log" )
				{
				$size = filesize( ( JOMRES_SYSTEMLOG_PATH . $log_file ) );
				if ( $size > $maxFileSize )
					{
					$newFileName = date( "U" ) . '_' . $log_file.'.zip';
					$zip = new ZipArchive;
					$zip->open(JOMRES_SYSTEMLOG_PATH . $newFileName, ZipArchive::CREATE);
					$zip->addFile(JOMRES_SYSTEMLOG_PATH  . $log_file , $log_file);
					$zip->close();
					
					unlink( JOMRES_SYSTEMLOG_PATH . $log_file);
					}
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