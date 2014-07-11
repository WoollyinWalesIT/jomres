<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class jomres_css_cache
	{
	
	function __construct()
		{
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		
		$this->force_consolidation_and_compression = true;
		
		// If a found css file isn't in this array then this class will not attempt to consolidate it
		if ($jrConfig['development_production'] != 'development' || $this->force_consolidation_and_compression )
			{
			$this->consolidation_array = array ( );
			$this->consolidation_array ["misc"] = array(
				"jquery.rating.css",
				"jquery.jgrowl.css",
				"tipsy.css",
				//"jqueryui-editable.css",
				"TableTools_JUI.css",
				"ColVis.css",
				"jquery-ui.css",
				"DT_bootstrap.css",
				//"bootstrap-editable.css"
				);
			}
		
		$this->temp_dir_abs =  JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'css' . JRDS ;
		$this->cons_dir_abs =  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'css_consolidated' . JRDS ;
		$this->temp_dir_rel =  JOMRES_ROOT_DIRECTORY . '/temp/css/';
		$this->cons_dir_rel =  JOMRES_ROOT_DIRECTORY . '/temp/css_consolidated/';
		
		if ( !is_dir( $this->temp_dir_abs ) )
			{
			if ( !@mkdir( $this->temp_dir_abs ) )
				{
				throw new Exception( "Error, unable to make directory " . $this->temp_dir_abs . " automatically therefore cannot minify css. Please create the directory manually and ensure that it's writable by the web server" );
				}
			}
		$subdir = $this->make_consolidation_dir('no_consolidation');
		}

	function remove_all_temp_files()
		{
		emptyDir ($this->temp_dir_abs);
		emptyDir ($this->this->this->cons_dir_abs);
		}
	
	function cache_css($css_files)
		{
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		

		if ( !is_dir( $this->cons_dir_abs ) )
			{
			if ( !@mkdir( $this->cons_dir_abs ) )
				{
				throw new Exception( "Error, unable to make directory " . $this->cons_dir_abs . " automatically. Please create the directory manually and ensure that it's writable by the web server" );
				}
			}

		foreach ( $css_files as $file )
			{
			$contents = file_get_contents( get_showtime("live_site")."/".$file[0].$file[1] );

			if (!$contents || $contents =="")
				throw new Exception( "Error, tried to read " . get_showtime("live_site")."/".$file[0].$file[1] . " but no data found in file." );
			$hash = date("YmdHis", filemtime($file[0].$file[1]));  // Get the md5 has of the last file modification time. We will check to see if tempdir/css/abcdefg_css.css exists, if it does then this file has already been minified. If it doesn't, we'll minify it
			
			$subdir = 'no_consolidation';
			foreach ($this->consolidation_array as $key=>$val)
				{
				if (in_array($file[1],$val))
					$subdir = $this->make_consolidation_dir($key);
				}
			
			$path_file = $this->temp_dir_abs. $subdir . JRDS . $hash.$file[1];
			if ( $subdir ==  'no_consolidation')
				$this->individual_files_to_serve[]= $hash.$file[1];
			
			if (!file_exists( $path_file ))
				{
				$contents = $this->replace_image_paths($contents);
				if ($jrConfig['development_production'] != 'development' || $this->force_consolidation_and_compression )
					{
					require_once (  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'CssMin' . JRDS . 'cssmin.php') ;
					$minifiedCode = CssMin::minify($contents);
					}
				else
					{
					$minifiedCode = $contents;
					}
				if (!$this->create_file($this->temp_dir_abs. $subdir , $hash.$file[1] , $file[1] , $minifiedCode ))
					throw new Exception( "Error, Attempted to make " . $this->temp_dir_abs. $subdir.$hash.$file[1] . " but failed." );
				}
			}
		
		foreach ($this->individual_files_to_serve as $js_file)
			{
			jomres_cmsspecific_addheaddata( "css", $this->temp_dir_rel.'no_consolidation/', $js_file );
			}

		foreach ($this->consolidation_array as $key=>$val)
			{
			if ($key != 'no_consolidation')
				{
				$md5_of_dir = $this->md5_of_dir($key);
				if (!file_exists( $this->cons_dir_abs.$md5_of_dir."_".$key.".css" ))
					{
					$files = scandir_getfiles_recursive($this->temp_dir_abs.$key);
					if ( count ( $files ) > 0  )
						{
						$contents = '';
						
						foreach ( $files as $file)
							{
							$contents .= file_get_contents ( $file );
							}
						if ($contents == '')
							{
							throw new Exception( "Error, Attempted to make " .  $this->cons_dir_abs.$md5_of_dir.".css"  . " but source css files produced no results." );
							}

						$this->create_file($this->cons_dir_abs , $md5_of_dir."_".$key.".css" ,$key , $contents );
						jomres_cmsspecific_addheaddata( "css",$this->cons_dir_rel, $md5_of_dir."_".$key.".css" );
						}
					}
				else
					jomres_cmsspecific_addheaddata( "css",$this->cons_dir_rel, $md5_of_dir."_".$key.".css" );
				}
			}
		}
	
	function replace_image_paths($contents)
		{
		$unwrapped_imgs = array();
		$re = '/url\(\s*[\'"]?(\S*\.(?:jpe?g|gif|png))[\'"]?\s*\)[^;}]*?no-repeat/i';
		if (preg_match_all($re, $contents, $matches)) 
			$unwrapped_imgs = $matches[1];
		
		$wrapped_imgs = array();
		$re = '/url\(\s*[\'"]?(\'\S*\.(?:jpe?g|gif|png\'))[\'"]?\s*\)[^;}]*?no-repeat/i';
		if (preg_match_all($re, $contents, $matches)) 
			$wrapped_imgs = $matches[1];

		if (count($unwrapped_imgs)>0)
			{
			foreach ($unwrapped_imgs as $image)
				$contents = str_replace( $image , get_showtime('live_site')."/".$file[0].$image , $contents);
			}
		if (count($wrapped_imgs)>0)
			{
			foreach ($wrapped_imgs as $image)
				$contents = str_replace( $image , get_showtime('live_site')."/".$file[0].$image , $contents);
			}
		return $contents;
		}
	
	
	function create_file($path , $full_filename , $original_filename , $contents )
		{
		// Going to tidy up files with similar names, as these will be out of date compared to this new file
		if ($contents != "")
			{
			$files = scandir_getfiles_recursive($path);
			if (count($files)>0)
				{
				foreach ( $files as $file )
					{
					if (strpos ( $file , $original_filename ) )
						unlink($file);
					}
				}
				
			// Now we can create the new .css file
			return file_put_contents ( $path.JRDS.$full_filename, $contents );
			}
		else
			throw new Exception( "Error, Attempted to create file " .  $path.JRDS.$full_filename  . " but contents empty." );
		}
		
	function md5_of_dir($dir) 
		{
		$dircontent = scandir( $this->temp_dir_abs . JRDS . $dir);
		$ret='';
		foreach($dircontent as $filename) 
			{
			if ($filename != '.' && $filename != '..') 
				{
				$ret.=date("YmdHis", filemtime( $this->temp_dir_abs . JRDS . $dir.$filename)).$filename;
				}
			}
		return md5($ret);
		}

	function make_consolidation_dir($dir)
		{
		if ( !is_dir( $this->temp_dir_abs . JRDS . $dir ) )
			{
			if ( !@mkdir( $this->temp_dir_abs . JRDS . $dir ) )
				{
				throw new Exception( "Error, unable to make consolidation directory " .  $this->temp_dir_abs . JRDS . $dir  . ". Please create the directory manually and ensure that it's writable by the web server" );
				}
			}
		return $dir;
		}
	}

?>