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


class javascript_cache
	{
	
	function __construct()
		{
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		$this->feature_enabled = false;
		$this->javascript_files = array();
		
		$this->temp_dir_abs	=  JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'javascript' . JRDS ;
		$this->temp_dir_rel	=  JOMRES_ROOT_DIRECTORY . '/temp/javascript/';

		if ( !is_dir( $this->temp_dir_abs ) )
			{
			if ( !@mkdir( $this->temp_dir_abs ) )
				{
				throw new Exception( "Error, unable to make directory " . $this->temp_dir_abs . " automatically therefore cannot consolidate javascript. Please create the directory manually and ensure that it's writable by the web server" );
				}
			}
		
		$this->clean_tmp_dir();
		}
	
	function cache_javascript($javascript_files)
		{
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		
		$showtime = jomres_singleton_abstract::getInstance( 'showtime' );

		$contents = '';
		foreach ( $javascript_files as $file )
			{
			$contents .= file_get_contents(JOMRESCONFIG_ABSOLUTE_PATH .  $file[0].$file[1] );
			}

		$hash = md5($contents);

		$file_creation_success = false;
		if ( $jrConfig['development_production'] != 'development' && $this->feature_enabled )
			$file_creation_success = $this->create_file($this->temp_dir_abs , $hash.".js" , $contents );
		
		if ( $file_creation_success )
			{
			$new_file = array (
				0 => $this->temp_dir_rel,
				1 =>  $hash.".js"
				);
			$this->add_file($new_file);
			}
		else
			{
			foreach ( $javascript_files as $file )
				{
				$this->add_file($file);
				}
			}
		}

	function clean_tmp_dir()
		{
		$files = scandir_getfiles( $this->temp_dir_abs );
		if ( count( $files ) > 0 )
			{
			foreach ( $files as $f )
				{
				if ( $f != '.htaccess' && $f != 'web.config' && time() - filemtime($this->temp_dir_abs . JRDS . $f) >= 24*60*60) // 1 day
					{
					unlink( $this->temp_dir_abs . "/" . $f );
					}
				}
			}
		}
	
	function remove_all_temp_files()
		{
		emptyDir ($this->temp_dir_abs);
		}
	
	function get_files()
		{
		return $this->javascript_files;
		}
	
	function add_file($file)
		{
		$this->javascript_files[]=$file;
		}
	
	function create_file($path , $full_filename , $contents )
		{
		if ($contents != "" && !file_exists($path.$full_filename) )
			{
			return file_put_contents ( $path.$full_filename, $contents , LOCK_EX );
			}
		elseif (file_exists($path.$full_filename))
			{
			return true;
			}
		else
			{
			throw new Exception( "Error, Attempted to create file " .  $path.JRDS.$full_filename  . " but contents empty." );
			}
		}

	}

