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

class j16000list_error_logs
	{
	public function __construct() 
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
		
		if ( !isset($jrConfig['log_path']) || $jrConfig['log_path'] == '' )
			$jrConfig['log_path'] = dirname(dirname(dirname(__FILE__)) ).'/logs/';
		
		$jrConfig['log_path'] = rtrim($jrConfig['log_path'], '/');
		$jrConfig['log_path'] = rtrim($jrConfig['log_path'], '\\');
		$jrConfig['log_path'] .= JRDS;
		
		$this->log_files = array();
		$this->error_log_files = array();
		if (is_dir($jrConfig['log_path'])) 
			{
			$files = scandir($jrConfig['log_path']);
			foreach ($files as $file)
				{
				if ($file != '.' && $file != '..')
					{
					$bang = explode(".",$file);
					if ( isset($bang[2]) && $bang[2] == "log" &&  !isset($bang[3]))
						{
						$this->log_files[] = $file;
						}
					elseif( isset($bang[1]) && $bang[1] == "html" )
						{
						$interval = strtotime('-2 weeks');
						$mtime = filemtime($jrConfig['log_path'].$file);
						if ($mtime <= $interval )
							{
							// echo "pretending to delete ".$file."<br>";
							// unlink($jrConfig['log_path'].$file);
							}
						else
							{
							$contents = file_get_contents($jrConfig['log_path'].$file);
							$this->error_log_files[$mtime] = array ("filename" => $file , "mtime" => $mtime , "contents" => $contents );
							}
						}
					}
				}
			}
		
		ksort($this->error_log_files);
		
		$output     = array ();
		$pageoutput = array ();
		$rows       = array ();

		$output[ 'PAGETITLE' ]						= jr_gettext( 'JOMRES_COM_A_AVAILABLELOGS', 'JOMRES_COM_A_AVAILABLELOGS',false );
		$output[ '_JOMRES_ERROR_DEBUGGING_FILE' ]	= jr_gettext( '_JOMRES_ERROR_DEBUGGING_FILE', '_JOMRES_ERROR_DEBUGGING_FILE',false );
		$output[ '_JOMRES_MR_AUDIT_LISTING_DATE' ]	= jr_gettext( '_JOMRES_MR_AUDIT_LISTING_DATE', '_JOMRES_MR_AUDIT_LISTING_DATE',false );
		
		foreach ( $this->error_log_files as $file )
			{
			$r				= array ();
			$r[ 'FILENAME' ]		= $file['filename'];
			$r[ 'CREATED' ]			= date("Y/m/d H:i:s" , $file['mtime']);
			$r[ 'CONTENTS' ]		= $file['contents'];
			
			$rows[ ] = $r;
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL_ADMIN ), '' );

		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_error_logs.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		
		}

		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
