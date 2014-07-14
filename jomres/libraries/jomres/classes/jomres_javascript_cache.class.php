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


class jomres_javascript_cache
	{
	
	function __construct()
		{
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		
		$this->force_consolidation_and_compression = true;
		
		// If a found javascript file isn't in this array then this class will not attempt to consolidate it
		if ($jrConfig['development_production'] != 'development' || $this->force_consolidation_and_compression)
			{
			$this->consolidation_array = array ( );
			$this->consolidation_array ["misc"] = array(
				"jquery.cookee.js",
				"jquery.cookee.for_tabs.js",
				"heartbeat.js",
				"jquery.hoverIntent.js",
				"jquery.validate.js",
				"excanvas.js",
				"jquery.chainedSelects.js",
				"jquery.easing.compatibility.js",
				//"jquery.livequery.js", 
				//"jquery.tipsy.js",
				"jquery.jlabel-1.3.js",
				"jquery.rating.js",
				"jquery.validate.js",
				"jquery.ui.potato.menu.js",
				"list_properties.js",
				"jquery.jeditable.js",
				"bootstrap-editable.min.js",
				"jquery.jgrowl.js",
				"bootstrap-tour.js"
				);
/* 			if (! jomres_cmsspecific_areweinadminarea() )
				{
				 $this->consolidation_array ["table_tools"] = array (
					"jquery.dataTables.js",
					"TableTools.min.js",
					"datatables_pagination.js",
					"ColVis.min.js"
					);
				} */
/* 		 $this->consolidation_array ["media_centre"] = array (
				"load-image.min.js",
				"canvas-to-blob.min.js",
				"jquery.iframe-transport.js",
				"jquery.fileupload.js",
				"jquery.fileupload-process.js",
				"jquery.fileupload-image.js",
				"jquery.fileupload-validate.js",
				"tmpl.min.js"
				);  */
			
			}
		$this->temp_dir_abs	=  JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'javascript' . JRDS ;
		$this->cons_dir_abs	=  JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'javascript_consolidated' . JRDS ;
		$this->temp_dir_rel	=  JOMRES_ROOT_DIRECTORY . '/temp/javascript/';
		$this->cons_dir_rel	=  JOMRES_ROOT_DIRECTORY . '/temp/javascript_consolidated/';
		 
		if ( !is_dir( $this->temp_dir_abs ) )
			{
			if ( !@mkdir( $this->temp_dir_abs ) )
				{
				throw new Exception( "Error, unable to make directory " . $this->temp_dir_abs . " automatically therefore cannot minify javascript. Please create the directory manually and ensure that it's writable by the web server" );
				}
			}
		$subdir = $this->make_consolidation_dir('no_consolidation');
		}
	
	function remove_all_temp_files()
		{
		emptyDir ($this->temp_dir_abs);
		emptyDir ($this->this->cons_dir_abs);
		}
	
	function cache_javascript($javascript_files)
		{
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		
		$showtime = jomres_singleton_abstract::getInstance( 'showtime' );

		if ( !is_dir( $this->cons_dir_abs ) )
			{
			if ( !@mkdir( $this->cons_dir_abs ) )
				{
				throw new Exception( "Error, unable to make directory " . $this->cons_dir_abs . " automatically. Please create the directory manually and ensure that it's writable by the web server" );
				}
			}

		foreach ( $javascript_files as $file )
			{
			// So, to override, you would do something like set_showtime ( "jsfile_I_want_to_override" , array ( 0 => "pathtofile" , 1 = "jsfile_I_want_to_override"));
			$fn = $file[1];
			if (isset($showtime->$fn))
				{
				$file = $showtime->$fn;
				}
			
			$already_minified = false;
			if ( strpos ( $file[1] , ".min." ) )
				$already_minified = true;
			
			$hash = md5(date("YmdHis", filemtime( JOMRESCONFIG_ABSOLUTE_PATH . $file[0].$file[1] )));  // Get the md5 has of the last file modification time. We will check to see if tempdir/javascript/abcdefg_javascript.js exists, if it does then this file has already been minified. If it doesn't, we'll minify it
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
				$contents = file_get_contents( get_showtime("live_site")."/".$file[0].$file[1] );
				if (!$contents || $contents =="")
					throw new Exception( "Error, tried to read " . get_showtime("live_site")."/".$file[0].$file[1] . " but no data found in file." );

				if (!$already_minified)
					{
					if ($jrConfig['development_production'] != 'development' || $this->force_consolidation_and_compression )
						{
						require_once (  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'JShrink' . JRDS . 'Minifier.php') ;
						$minifiedCode = \JShrink\Minifier::minify($contents);
						}
					else
						{
						$minifiedCode = $contents;
						}

					if ( $minifiedCode== "")
						throw new Exception( "Tried to minify contents of  " .  get_showtime("live_site")."/".$file[0].$file[1] . " but nothing was returned by the script. Original content : ".$contents );
						
					if (!$this->create_file($this->temp_dir_abs. $subdir , $hash.$file[1] , $file[1] , $minifiedCode ))
						throw new Exception( "Error, Attempted to make " . $this->temp_dir_abs. $subdir.$hash.$file[1] . " but failed." );
					}
				else
					{
					$minifiedCode = $contents;
					if (!$this->create_file($this->temp_dir_abs. $subdir , $hash.$file[1] , $file[1] , $minifiedCode ))
						throw new Exception( "Error, Attempted to make " . $this->temp_dir_abs. $subdir.$hash.$file[1] . " but failed." );
					}
				}
			}
		
		foreach ($this->individual_files_to_serve as $js_file)
			{
			jomres_cmsspecific_addheaddata( "javascript", $this->temp_dir_rel.'no_consolidation/', $js_file );
			}

		foreach ($this->consolidation_array as $key=>$val)
			{
			
			if ($key != 'no_consolidation' && $key != '' )
				{
				$md5_of_dir = $this->md5_of_dir($key);

				if (!file_exists( $this->cons_dir_abs.$md5_of_dir."_".$key.".js" ))
					{
					
					$files = scandir_getfiles($this->temp_dir_abs.$key);
					if ( count ( $files ) > 0  )
						{
						$contents = '';
						foreach ( $files as $file)
							{
							$js = file_get_contents ( $this->temp_dir_abs.$key.JRDS.$file );

							if ($js == '')
								{
								throw new Exception( "Error, Attempted to make " .   $this->cons_dir_abs.$md5_of_dir."_".$key.".js"  . " consolidation script but source javascript file produced no results. The last file to be included was ".$this->temp_dir_abs.$key.$file );
								}
							else
								$contents .= $js;
							}
						if ($contents != "" )
							$this->create_file($this->cons_dir_abs , $md5_of_dir."_".$key.".js" ,$key , $contents );
						else
							throw new Exception( "Cannot create consolidation file  " .  $md5_of_dir."_".$key.".js"  . " because contents string is empty. Files from directory scan : ".serialize($files) );
						jomres_cmsspecific_addheaddata( "javascript",$this->cons_dir_rel, $md5_of_dir."_".$key.".js" );
						}
					}
				else
					jomres_cmsspecific_addheaddata( "javascript",$this->cons_dir_rel, $md5_of_dir."_".$key.".js" );
				}
			}
		}

	function create_file($path , $full_filename , $original_filename , $contents )
		{
		//echo "Creating ".$path.JRDS.$full_filename."<br>";
		// Going to tidy up files with similar names, as these will be out of date compared to this new file
		if ($contents != "")
			{
			$files = scandir_getfiles($path);
			if (count($files)>0)
				{
				foreach ( $files as $file )
					{
					if (strpos ( $file , $original_filename ) )
						unlink($file);
					}
				}
				
			// Now we can create the new .js file
			return file_put_contents ( $path.JRDS.$full_filename, $contents , LOCK_EX );
			}
		else
			{
			throw new Exception( "Error, Attempted to create file " .  $path.JRDS.$full_filename  . " but contents empty." );
			}
		}
		
	function md5_of_dir($dir) 
		{
		$dircontent = scandir_getfiles( $this->temp_dir_abs  . $dir. JRDS);
		$ret='';
		foreach($dircontent as $filename) 
			{
			if ($filename != '.' && $filename != '..') 
				{
				//echo  $this->temp_dir_abs  . $dir. JRDS.$filename."<br>";
				$ret.=date("YmdHis", filemtime( $this->temp_dir_abs  . $dir. JRDS.$filename)).$filename;
				}
			}
		return md5($ret);
		}

	function make_consolidation_dir($dir)
		{
		if ( !is_dir( $this->temp_dir_abs .  $dir ) )
			{
			if ( !mkdir( $this->temp_dir_abs . $dir ) )
				{
				throw new Exception( "Error, unable to make consolidation directory " .  $this->temp_dir_abs .  $dir  . ". Please create the directory manually and ensure that it's writable by the web server" );
				}
			}
		return $dir;
		}
	}

/* 
class javascript_cache_exception extends Exception 
	{
	public function logError($transaction_id , $property_uid ) 
		{
		//error message
		$errorMsg = 
		'<b>'.filter_var( $this->getMessage() , FILTER_SANITIZE_SPECIAL_CHARS ) .'</b> Error on line '.$this->getLine().' in '.$this->getFile();

		$query = "INSERT INTO #__jomres_beds24_transaction_log (`transaction_id` , `message` , `property_uid` ) VALUES ( ".(int)$transaction_id." , '".$errorMsg."' , ".(int)$property_uid." )";
		doInsertSql($query);
		//echo json_encode( array ("error"=>$this->getMessage()));
		}
	} */

?>