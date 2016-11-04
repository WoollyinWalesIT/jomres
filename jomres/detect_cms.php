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


if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'wp-config.php') ) 
	{ 
	define( "_JOMRES_DETECTED_CMS","wordpress" ); 
	define( "_JOMRES_DETECTED_CMS_SPECIFIC_FILES", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "libraries" . JRDS . "jomres" . JRDS . "cms_specific" . JRDS . _JOMRES_DETECTED_CMS . JRDS ); 
	} 
elseif ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'libraries' . JRDS . 'cms' . JRDS . 'version' . JRDS . 'version.php' ) )
	{
	if (!defined("JPATH_PLATFORM"))
		define("JPATH_PLATFORM",1); // Joomla 3.3.1 uses this instead of JEXEC.
	
	require_once( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'libraries' . JRDS . 'cms' . JRDS . 'version' . JRDS . 'version.php' );
	
	$jversion = new JVersion();
	$bang = explode("." , $jversion->getShortVersion());
	$vshort_version = $bang[0];
	
	if ( $vshort_version == '3' )
		{
		define( "_JOMRES_DETECTED_CMS", "joomla3" );
		define( "_JOMRES_DETECTED_CMS_SPECIFIC_FILES", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "libraries" . JRDS . "jomres" . JRDS . "cms_specific" . JRDS . _JOMRES_DETECTED_CMS . JRDS );
		}
	}

if ( !defined( '_JOMRES_DETECTED_CMS' ) )
	{
	$jrePath = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'remote_plugins' . JRDS;
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
						if ( $filename == "detect_cms.php" ) require_once( $jrePath . "detect_cms.php" );
						}
					$dr->close();
					}
				}
			}
		}
	}

if ( !defined( '_JOMRES_DETECTED_CMS' ) ) 
	define( "_JOMRES_DETECTED_CMS", "unknown" );

if ( _JOMRES_DETECTED_CMS == "unknown" )
	{
	$message = "Error, cannot detect the current CMS.<br/>  It is possible that you have upgraded your CMS's version and the version of Jomres you're running isn't aware of the new version of the CMS. If that's the case then you will need to upgrade Jomres too, however before you do please <a href='http://manual.jomres.net/upgrading.html'>see this page.</a>";
	
	throw new Exception($message);
	}
