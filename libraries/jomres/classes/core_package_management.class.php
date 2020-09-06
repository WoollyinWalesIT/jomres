<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * @package Jomres\Core\Classes
 *
 * Manages version checking, download and extraction of node modules and the vendor directory. 
 */

class core_package_management
{
	private static $internal_debugging;

	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		self::$internal_debugging = false;

		$this->set_repos();

		if (!isset($this->repos) || empty ($this->repos) ) {
			throw new Exception('Repos array is empty');
		}
		
		$this->check_basics();
		

	}
	
	/**
	 * 
	 *
	 *
	 */
	public function check_basics()
	{
		if (!isset($_REQUEST['package_manager_install']) || $_REQUEST['package_manager_install'] == '0' ) {
			foreach ($this->repos as $library => $repo) {
				$this->check_repo_local_dirs_exist( $repo );
			}
		} else {

			if  (!in_array  ('curl', get_loaded_extensions())) {
				throw new Exception('Curl PHP extension is not available on this server, please install this PHP library before attempting to continue.');
				}
			
			if  (!in_array  ('zip', get_loaded_extensions())) {
				throw new Exception('zipArchive PHP extension is not available on this server, please install this PHP extension before attempting to continue.');
				}
				
			$this->install_packages();
		}
	}

	/**
	 * 
	 *
	 *
	 */
	public function force_packages_reinstall()
	{
		$this->install_packages();
	}
	
	// Install all packages from github
	/**
	 * 
	 *
	 *
	 */
	private function install_packages()
	{
		foreach ($this->repos as $library => $repo) {
			$this->install_package( $library , $repo);
		}
		
	}
	
	// Install an individual package
	/**
	 * 
	 *
	 *
	 */
	private function install_package( $library , $repo )
	{
		$this->download_location = JOMRES_TEMP_ABSPATH . 'package_libs' . JRDS ;
		$local_archive = $this->download_location.'master_'.$library.'.zip';
		
		$remote_file_size = 0;
		$local_file_size = -1;
		if (is_file($local_archive)) {
			$remote_file_size = $this->curl_get_file_size($repo['download_url']);
			$local_file_size = filesize ($local_archive);
		}
		
		if (!file_exists($local_archive) || $local_file_size != $remote_file_size) {
			$this->download_package( $library , $repo['download_url'] , $local_archive );
		}
		
		
		if (!is_file($local_archive)) {
			throw new Exception("File not downloaded ".$local_archive . ' for the '.$library . ' repo :: Download error reported ' . $this->download_error );
		}
		$this->unzip_downloaded_package($library , $local_archive , $repo['local_abs_path'] );
		
		//unlink($local_archive); // Do not uncomment!
	}
	
	
	
	
	// Download the file from the repo
	/**
	 * 
	 *
	 *
	 */
	private function unzip_downloaded_package($library , $local_archive , $destination )
	{
		$this->remove_directory($destination);
		
		$zip = new ZipArchive;
		if (true === $zip->open($local_archive)) {
			$zip->extractTo($this->download_location);
			$zip->close();
		} else {
			throw new Exception("Could not unzip ".$local_archive );
		}

		rename( $this->download_location.$library , $destination );
/* 		 if ( $this->dirmv( $this->download_location.JRDS.$library , $destination ) ) {
			// unlink($local_archive); // Do not uncomment!
		 } */
		
		
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function retrieve_remote_file_time($library){
		$url = 'http://updates.jomres4.net/library_packages/jomres_'.$library.'_last_modified.txt';
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, "Jomres");
		curl_setopt($ch, CURLOPT_URL, $url);

		$data = curl_exec($ch);
		curl_close($ch);
		
		if ($data == '') {
			return 0;
		} else {
			return $data;
		}

	}

	/**
	 * 
	 *
	 *
	 */

	private function download_package( $library , $remote_archive , $local_archive )
	{
		$this->file_modification_flag_file = str_replace ( ".zip" , ".txt" , $local_archive );

		if (file_exists($local_archive)) {
			$last_remote_file_mtime = (int)$this->retrieve_remote_file_time($library);
		} else {
			$last_remote_file_mtime = 0;
		}

		$last_local_file_mtime = -1;
		if (file_exists($this->file_modification_flag_file)) {
			$last_local_file_mtime = (int)file_get_contents($this->file_modification_flag_file);
		}

		if ($last_local_file_mtime < $last_remote_file_mtime || is_null($last_remote_file_mtime) ) { // The remote file modification time is less than the remote file modification time. This means that the remote file was more recently updated, so we need to download it. This prevents us from needing to constantly download the same file time and again, if it has already been downloaded once, as it's possible that the server timed out previously due to it being slow to download or unzip the file locally. 
			if (!is_dir(JOMRES_TEMP_ABSPATH)) {
				mkdir(JOMRES_TEMP_ABSPATH);
				if (!is_dir(JOMRES_TEMP_ABSPATH)) {
					throw new Exception("Can't make temporary dir ".JOMRES_TEMP_ABSPATH );
				}
			}
			
			if (!is_dir($this->download_location)) {
				mkdir($this->download_location);
				if (!is_dir($this->download_location)) {
					throw new Exception("Can't make temporary dir ".$this->download_location );
				}
			}

			
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $remote_archive);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($ch, CURLOPT_TIMEOUT, 50);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
			
			$data = curl_exec ($ch);
			$download_error = curl_error($ch); 
			
			curl_close ($ch);

			$file = fopen( $local_archive , "w+" );

			fputs($file, $data);
			fclose($file);
			
			file_put_contents( $this->file_modification_flag_file , $last_remote_file_mtime) ;
		}
	}
	
	
	function curl_get_file_size( $url ) {
	  // Assume failure.
	  $result = -1;

	  $curl = curl_init( $url );

	  // Issue a HEAD request and follow any redirects.
	  curl_setopt( $curl, CURLOPT_NOBODY, true );
	  curl_setopt( $curl, CURLOPT_HEADER, true );
	  curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
	  curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, true );
	  curl_setopt( $curl, CURLOPT_USERAGENT, "Jomres package manager" );

	  $data = curl_exec( $curl );
	  curl_close( $curl );

	  if( $data ) {
		$content_length = "unknown";
		$status = "unknown";

		if( preg_match( "/^HTTP\/1\.[01] (\d\d\d)/", $data, $matches ) ) {
		  $status = (int)$matches[1];
		}

		if( preg_match( "/Content-Length: (\d+)/", $data, $matches ) ) {
		  $content_length = (int)$matches[1];
		}

		// http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
		if( $status == 200 || ($status > 300 && $status <= 308) ) {
		  $result = $content_length;
		}
	  }

	  return $result;
	}

	/**
	 * 
	 *
	 *
	 */

	private function remove_directory($dirPath) {
		if ( is_dir($dirPath)) {
			foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $path) {
				$path->isDir() && !$path->isLink() ? rmdir($path->getPathname()) : unlink($path->getPathname());
			}
			@rmdir($dirPath);
		}
		return;
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function check_repo_local_dirs_exist( $repo )
	{
		
		if (!is_dir(JOMRES_PACKAGES_ABSPATH)) {
			mkdir(JOMRES_PACKAGES_ABSPATH);
		}
		
		
		if (!is_dir($repo['local_abs_path'])) {
			$this->install_packages();
		}
		
		/*if (!is_dir($repo['local_abs_path'])) {
			$this->install_packages();
		}*/
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function set_repos()
	{
		$this->repos = array();
		
		$this->repos['node_modules'] =  array(
			'download_url'	=> 'http://updates.jomres4.net/library_packages/index.php?repo=jomres_node_modules',
			'local_abs_path'	=> JOMRES_NODE_MODULES_ABSPATH
			);
		
		$this->repos['vendor'] =  array(
			'download_url' => 'http://updates.jomres4.net/library_packages/index.php?repo=jomres_vendor',
			'local_abs_path'	=> JOMRES_VENDOR_ABSPATH
			);
	}


	/**
	 * Not using patTemplate here because it's not loaded yet and we need to ensure that this class relies on other libraries as little as possible. Also, not using a basic html file because we don't want bad bots finding the file and calling it and possibly running javascript on the page, bogging the system down, ergo plain old fashioned html here
	 *This installer will download and install the library repos automatically through ajax (eventually)
	 *
	 */

	public function show_installer_html()
	{
		
		$parse = parse_url(
			(isset($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'off') ? 'https://' : 'http://').
			(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '')).((true) ? $_SERVER['REQUEST_URI'] : null)
		);

		$current_url = str_replace("option=com_installer" , "option=com_jomres" , http_build_url('', $parse));
		$dashboard_url = str_replace("&no_html=1&jrajax=1" , "" , $current_url."&task=dashboard");
		?>
		
		<!doctype html>
		<html lang="en">
			<head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
				
				<style>
				/*
				* Globals
				*/

				/* Links */
				a,
				a:focus,
				a:hover {
				  color: #fff;
				}

				/* Custom default button */
				.btn-secondary,
				.btn-secondary:hover,
				.btn-secondary:focus {
				  color: #333;
				  text-shadow: none; /* Prevent inheritance from `body` */
				  background-color: #fff;
				  border: .05rem solid #fff;
				}


				/*
				 * Base structure
				 */

				html,
				body {
				  height: 100%;
				  background-color: #333;
				}

				body {
				  display: -ms-flexbox;
				  display: flex;
				  color: #fff;
				  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
				  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
				}

				.cover-container {
				  max-width: 42em;
				}

				/*
				 * Cover
				 */
				.cover {
				  padding: 0 1.5rem;
				}
				.cover .btn-lg {
				  padding: .75rem 1.25rem;
				  font-weight: 700;
				}


				.bd-placeholder-img {
					font-size: 1.125rem;
					text-anchor: middle;
					-webkit-user-select: none;
					-moz-user-select: none;
					-ms-user-select: none;
					user-select: none;
				}

				@media (min-width: 768px) {
					.bd-placeholder-img-lg {
					font-size: 3.5rem;
					}
				}
			</style>
				<title>Jomres Local Package Installer</title>
			</head>

			<body class="text-center">
				<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
					<main role="main" class="inner cover">
						<h1 class="cover-heading">Jomres Local Package Installer</h1>
						<p class="lead">Before you can continue to use to Jomres we need to download and install the latest versions of the Vendor and Node Module repo packages</p>
						<p>Please be patient, this might take a minute or two.</p>
						<p class="lead">
						  <a href="<?php echo $current_url; ?>&package_manager_install=1" class="btn btn-lg btn-secondary">Let's do it!</a>
						</p>
					</main>
				</div>
				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			</body>
		</html>
		<?php
		die();
	}
	

	// http://www.php.net/manual/en/function.rename.php#61152
	/**
	 * Moves the contents of source dir to destination dir
	 */
	function dirmv($source, $dest, $overwrite = true, $funcloc = JRDS)
	{
		global $movedFileLog;
		$debugging = false;
		$movedFileLog = array();
		//$success=true;
		/*
			if(is_null($funcloc))
				{
				$dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
				$funcloc = '/';
				}
			*/
		if (!is_dir($dest.$funcloc)) {
			mkdir($dest.$funcloc);
		} // make subdirectory before subdirectory is copied
		//echo "Opening " . $source . $funcloc."<br/>";
		if ($handle = opendir($source.$funcloc)) { // if the folder exploration is sucsessful, continue
			//echo "Opened ". $source . $funcloc."<br/>";
			while (false !== ($file = readdir($handle))) { // as long as storing the next file to $file is successful, continue
				if ($file != '.' && $file != '..') {
					$path = $source.$funcloc.$file;
					$path2 = $dest.$funcloc.$file;

					if (is_file($path)) {
						if (!is_file($path2)) {
							if (!@rename($path, $path2)) {
								if (copy($oldfile, $newfile)) {
									unlink($oldfile);
								} else {
									echo 'File ('.$path.') could not be moved to  '.$path2.', likely a permissions problem.';

									return array('success' => false, 'errormsg' => 'File ('.$path.') could not be moved, likely a permissions problem.');
								}
							}
						} elseif ($overwrite) {
							if (!@unlink($path2)) {
								echo 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>';

								return array('success' => false, 'errormsg' => 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>');
							} else {
								if (!@rename($path, $path2)) {
									echo '<font color="red">File ('.$path.') could not be moved while overwritting, likely a permissions problem.</font><br/>';

									return array('success' => false, 'errormsg' => 'File ('.$path.') could not be moved while overwritting, likely a permissions problem.<br/>');
								} else {
									$movedFileLog[ ] = 'Moved '.$path.'<br/> to '.$path2.'<br/>';
								}
							}
						} else {
							echo 'Not allowed to overwrite'.$path2.'<br/>'; // Not technically an error message, just advisory
						}
					} elseif (is_dir($path)) {
						$this->dirmv($source, $dest, $overwrite, $funcloc.$file.JRDS); //recurse!
						rmdir($path);
					}
				}
			}
			closedir($handle);
		}
		if ($debugging) {
			foreach ($movedFileLog as $m) {
				echo $m.'<br/>';
			}
		}

		return array('success' => true, 'errormsg' => '');
		//echo "Finished upgrade <br/>";
	} // end of dirmv()
}

// Credit https://stackoverflow.com/questions/14056977/function-http-build-url
	/**
	 * 
	 *
	 *
	 */

 if(!function_exists('http_build_url'))
        {
            // Define constants
			if (!defined('HTTP_URL_REPLACE') ) {
				define('HTTP_URL_REPLACE',          0x0001);    // Replace every part of the first URL when there's one of the second URL
			}

			if (!defined('HTTP_URL_JOIN_PATH') ) {
				define('HTTP_URL_JOIN_PATH',          0x0002);    // Join relative paths
			}
			
			if (!defined('HTTP_URL_JOIN_QUERY') ) {
				define('HTTP_URL_JOIN_QUERY',       0x0004);    // Join query strings
			}
			
			if (!defined('HTTP_URL_STRIP_USER') ) {
				define('HTTP_URL_STRIP_USER',       0x0008);    // Strip any user authentication information
			}
			
			if (!defined('HTTP_URL_STRIP_PASS') ) {
				define('HTTP_URL_STRIP_PASS',       0x0010);    // Strip any password authentication information
			}
			
			if (!defined('HTTP_URL_STRIP_PORT') ) {
				define('HTTP_URL_STRIP_PORT',       0x0020);    // Strip explicit port numbers
			}
			
			if (!defined('HTTP_URL_STRIP_PATH') ) {
				define('HTTP_URL_STRIP_PATH',       0x0040);    // Strip complete path
			}
			
			if (!defined('HTTP_URL_STRIP_QUERY') ) {
				define('HTTP_URL_STRIP_QUERY',      0x0080);    // Strip query string
			}

			if (!defined('HTTP_URL_STRIP_FRAGMENT') ) {
				define('HTTP_URL_STRIP_FRAGMENT',   0x0100);    // Strip any fragments (#identifier)
			}

            // Combination constants
			if ( !defined('HTTP_URL_STRIP_AUTH')) {
				define('HTTP_URL_STRIP_AUTH',       HTTP_URL_STRIP_USER | HTTP_URL_STRIP_PASS);
			}
			
			if ( !defined('HTTP_URL_STRIP_ALL')) {
				define('HTTP_URL_STRIP_ALL',        HTTP_URL_STRIP_AUTH | HTTP_URL_STRIP_PORT | HTTP_URL_STRIP_QUERY | HTTP_URL_STRIP_FRAGMENT);
			}

            /**
             * HTTP Build URL
             * Combines arrays in the form of parse_url() into a new string based on specific options
             * @name http_build_url
             * @param string|array $url     The existing URL as a string or result from parse_url
             * @param string|array $parts   Same as $url
             * @param int $flags            URLs are combined based on these
             * @param array &$new_url       If set, filled with array version of new url
             * @return string
             */
            function http_build_url(/*string|array*/ $url, /*string|array*/ $parts = array(), /*int*/ $flags = HTTP_URL_REPLACE, /*array*/ &$new_url = false)
            {
                // If the $url is a string
                if(is_string($url))
                {
                    $url = parse_url($url);
                }

                // If the $parts is a string
                if(is_string($parts))
                {
                    $parts  = parse_url($parts);
                }

                // Scheme and Host are always replaced
                if(isset($parts['scheme'])) $url['scheme']  = $parts['scheme'];
                if(isset($parts['host']))   $url['host']    = $parts['host'];

                // (If applicable) Replace the original URL with it's new parts
                if(HTTP_URL_REPLACE & $flags)
                {
                    // Go through each possible key
                    foreach(array('user','pass','port','path','query','fragment') as $key)
                    {
                        // If it's set in $parts, replace it in $url
                        if(isset($parts[$key])) $url[$key]  = $parts[$key];
                    }
                }
                else
                {
                    // Join the original URL path with the new path
                    if(isset($parts['path']) && (HTTP_URL_JOIN_PATH & $flags))
                    {
                        if(isset($url['path']) && $url['path'] != '')
                        {
                            // If the URL doesn't start with a slash, we need to merge
                            if($url['path'][0] != '/')
                            {
                                // If the path ends with a slash, store as is
                                if('/' == $parts['path'][strlen($parts['path'])-1])
                                {
                                    $sBasePath  = $parts['path'];
                                }
                                // Else trim off the file
                                else
                                {
                                    // Get just the base directory
                                    $sBasePath  = dirname($parts['path']);
                                }

                                // If it's empty
                                if('' == $sBasePath)    $sBasePath  = '/';

                                // Add the two together
                                $url['path']    = $sBasePath . $url['path'];

                                // Free memory
                                unset($sBasePath);
                            }

                            if(false !== strpos($url['path'], './'))
                            {
                                // Remove any '../' and their directories
                                while(preg_match('/\w+\/\.\.\//', $url['path'])){
                                    $url['path']    = preg_replace('/\w+\/\.\.\//', '', $url['path']);
                                }

                                // Remove any './'
                                $url['path']    = str_replace('./', '', $url['path']);
                            }
                        }
                        else
                        {
                            $url['path']    = $parts['path'];
                        }
                    }

                    // Join the original query string with the new query string
                    if(isset($parts['query']) && (HTTP_URL_JOIN_QUERY & $flags))
                    {
                        if (isset($url['query']))   $url['query']   .= '&' . $parts['query'];
                        else                        $url['query']   = $parts['query'];
                    }
                }

                // Strips all the applicable sections of the URL
                if(HTTP_URL_STRIP_USER & $flags)        unset($url['user']);
                if(HTTP_URL_STRIP_PASS & $flags)        unset($url['pass']);
                if(HTTP_URL_STRIP_PORT & $flags)        unset($url['port']);
                if(HTTP_URL_STRIP_PATH & $flags)        unset($url['path']);
                if(HTTP_URL_STRIP_QUERY & $flags)       unset($url['query']);
                if(HTTP_URL_STRIP_FRAGMENT & $flags)    unset($url['fragment']);

                // Store the new associative array in $new_url
                $new_url    = $url;

                // Combine the new elements into a string and return it
                return
                     ((isset($url['scheme'])) ? $url['scheme'] . '://' : '')
                    .((isset($url['user'])) ? $url['user'] . ((isset($url['pass'])) ? ':' . $url['pass'] : '') .'@' : '')
                    .((isset($url['host'])) ? $url['host'] : '')
                    .((isset($url['port'])) ? ':' . $url['port'] : '')
                    .((isset($url['path'])) ? $url['path'] : '')
                    .((isset($url['query'])) ? '?' . $url['query'] : '')
                    .((isset($url['fragment'])) ? '#' . $url['fragment'] : '')
                ;
            }
        }
		