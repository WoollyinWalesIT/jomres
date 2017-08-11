<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_media_centre_images
{
    // Store the single instance of Database
    private static $configInstance;

    public function __construct()
    {
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
		if ($jrConfig['images_imported_to_db'] == '0') {
			$this->use_db = false; //we`ll scandir for images
		} else {
			$this->use_db = true; //images are already imported to db
		}
		
		$this->images = array();
		$this->site_images = array();
		
        $this->multi_query_images = array();

        $this->multi_query_images [ 'noimage-large' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/noimage.gif';
        $this->multi_query_images [ 'noimage-medium' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/noimage.gif';
        $this->multi_query_images [ 'noimage-small' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/noimage_small.gif';
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function __clone()
    {
        trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
    }

    public function __set($setting, $value)
    {
        $this->$setting = $value;

        return true;
    }

    public function __get($setting)
    {
        return $this->$setting;
    }

	//get all property images
    public function get_images($property_id = null)
    {
        $this->images = array();

        if ($property_id == null) {
            $property_id = get_showtime('property_uid');
        }

        if ($property_id == 0) {
            return;
        }

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($property_id);

        //get all images for this property id
        if (!isset($this->multi_query_images[$property_id])) {
            $this->get_images_multi($property_id);
        }

        //property images
        $this->images['property'] = array();

        if (!isset($this->multi_query_images[$property_id]['property'])) {
            $this->images ['property'][0][] = array(
                                                    'large' => $this->multi_query_images[ 'noimage-large' ],
                                                    'medium' => $this->multi_query_images[ 'noimage-medium' ],
                                                    'small' => $this->multi_query_images[ 'noimage-small' ],
                                                    );
        }

        //room images
        $this->images['rooms'] = array();

        //slideshow images
        $this->images['slideshow'] = array();

        if (!isset($this->multi_query_images[$property_id]['slideshow'])) {
            $this->images ['slideshow'][0][] = array(
                                                    'large' => $this->multi_query_images[ 'noimage-large' ],
                                                    'medium' => $this->multi_query_images[ 'noimage-medium' ],
                                                    'small' => $this->multi_query_images[ 'noimage-small' ],
                                                    );
        }

        //room features images
        $this->images['room_features'] = array();

        //extras images
        $this->images['extras'] = array();

        //populate the images array
        foreach ($this->multi_query_images[$property_id] as $k => $v) {
            $this->images[ $k ] = $v;
        }

        //add default images for each room if no other images are set
        foreach ($current_property_details->rooms as $room_id) {
            if (!array_key_exists($room_id, $this->images[ 'rooms' ])) {
                $this->images[ 'rooms' ] [ $room_id ] [0] = array(
                    'large' => $this->multi_query_images[ 'noimage-large' ],
                    'medium' => $this->multi_query_images[ 'noimage-medium' ],
                    'small' => $this->multi_query_images[ 'noimage-small' ],
                    );
            }
        }

        return $this->images;
    }
	
	//get images uploaded by admins (pfeatures, rmtypes, rmfeatures, markers, towns and other 3rd party resource types)
	public function get_site_images( $type = '' )
    {
        if ($type == '') {
            return;
        }

        //get all images of this type
        if (!isset($this->site_images[$type])) {
            $this->get_site_images_multi($type);
        }

        return $this->site_images;
    }

	//get images for property uid/s
    public function get_images_multi($property_uids)
    {
        // As we're going to let this function work on both single and multiple lists of property uids, we'll cast property_ids to an array if it isn't one already
        if (!is_array($property_uids)) {
            $property_uids = array($property_uids);
        }

        // First we need to extract those uids that are not already in the $this->multi_query_images var, this (may) reduce the number of scandirs we need to execute
        $temp_array = array();
        foreach ($property_uids as $id) {
            if (!isset($this->multi_query_images[$id])) {
                $temp_array[] = $id;
            }
        }
        $property_uids = $temp_array;
        unset($temp_array);
		
		if (empty($property_uids)) {
			return false;
		}

		if ($this->use_db) { //get images from db
			$this->get_images_multi_from_db($property_uids);
		} else {
			$MiniComponents = jomres_getSingleton('mcHandler');
			$MiniComponents->triggerEvent('03379');
			$resource_types = $MiniComponents->miniComponentData['03379'];

			// This section will find all images uploaded by the new media centre's functionality
			if (empty($resource_types)) {
			   return false;
			}

			foreach ($property_uids as $property_id) {
				$this->multi_query_images[$property_id] = array();

				$base_path = JOMRES_IMAGELOCATION_ABSPATH.$property_id.JRDS;
				$rel_path = JOMRES_IMAGELOCATION_RELPATH.$property_id.'/';

				$dir_contents = scandir_getdirectories($base_path);

				foreach ($dir_contents as $dir) {
					if (isset($resource_types[$dir])) {
						$sub_directories = scandir_getdirectories($base_path.$dir.JRDS);
						if (!empty($sub_directories)) {
							foreach ($sub_directories as $resouce_id) {
								$resource_images = scandir_getfiles($base_path.$dir.JRDS.$resouce_id.JRDS);

								if (!empty($resource_images)) {
									foreach ($resource_images as $image) {
										$this->multi_query_images [ $property_id ] [ $dir ] [ $resouce_id ] [] = array(
											'large' => $rel_path.$dir.'/'.$resouce_id.'/'.$image,
											'medium' => $rel_path.$dir.'/'.$resouce_id.'/medium/'.$image,
											'small' => $rel_path.$dir.'/'.$resouce_id.'/thumbnail/'.$image,
											);
									}
								} else { //the dir is empty
									$this->multi_query_images [ $property_id ][ $dir ] [ $resouce_id ] [] = array(
											'large' => $this->multi_query_images[ 'noimage-large' ],
											'medium' => $this->multi_query_images[ 'noimage-medium' ],
											'small' => $this->multi_query_images[ 'noimage-small' ],
											);
								}
							}
						}
					}
				}
			}
        }

        return $this->multi_query_images;
    }
	
	//get images from db for property uids array
	private function get_images_multi_from_db($property_uids = array())
	{
		if (empty($property_uids)) {
			return false;
		}

		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('03379');
		$resource_types = $MiniComponents->miniComponentData['03379'];

		// This section will find all images uploaded by the new media centre's functionality
		if (empty($resource_types)) {
		   return false;
		}

		$query = "SELECT 
						`id`, 
						`property_uid`, 
						`resource_type`, 
						`resource_id`, 
						`filename`, 
						`version` 
					FROM #__jomres_images 
					WHERE `property_uid` IN (".jomres_implode($property_uids).")";
		$result = doSelectSql($query);

		foreach ($result as $r) {
			if (isset($resource_types[$r->resource_type])) {
				if ($r->version == 'large') {
					$this->multi_query_images [ $r->property_uid ] [ $r->resource_type ] [ $r->resource_id ] [$r->filename] ['large'] = 
						JOMRES_IMAGELOCATION_RELPATH.$r->property_uid.'/'.$r->resource_type.'/'.$r->resource_id.'/'.$r->filename;
				} elseif ($r->version == 'small') {
					$this->multi_query_images [ $r->property_uid ] [ $r->resource_type ] [ $r->resource_id ] [$r->filename] ['small'] = 
						JOMRES_IMAGELOCATION_RELPATH.$r->property_uid.'/'.$r->resource_type.'/'.$r->resource_id.'/thumbnail/'.$r->filename;
				} else {
					$this->multi_query_images [ $r->property_uid ] [ $r->resource_type ] [ $r->resource_id ] [$r->filename] ['medium'] = 
						JOMRES_IMAGELOCATION_RELPATH.$r->property_uid.'/'.$r->resource_type.'/'.$r->resource_id.'/'.$r->version.'/'.$r->filename;
				}
			}
		}
		
		//we have to reset the key file names in the array, because other code uses 0 as key for first image
		//ugly solution, but has to be done to avoid changing the code in lots of places
		//also, set $this->multi_query_images[$property_id] to make sure we won`t execute this again if the property has no images 
		foreach ($property_uids as $property_id) {
			if (!isset($this->multi_query_images[$property_id])) {
				$this->multi_query_images[$property_id] = array();
			} else {
				foreach ($this->multi_query_images[$property_id] as $resource_type => $resource_id) {
					foreach ($resource_id as $k => $v) {
						$this->multi_query_images[$property_id][$resource_type][$k] = array_values($v);
					}
				}
			}
		}

		return true;
	}
	
	//this scans for site images like pfeatures, rmtypes and other 3rd party images
	public function get_site_images_multi($type = '')
    {
		if ($type == '') {
			return false;
		}
		
        // check if we already have images for this $type
        if (isset($this->site_images[$type])) {
            return true;
        }

		if ($this->use_db) {
			$this->get_site_images_multi_from_db($type);
		} else {
			$MiniComponents = jomres_getSingleton('mcHandler');
			$MiniComponents->triggerEvent('11010');
			$resource_types = $MiniComponents->miniComponentData['11010'];
			
			if (empty($resource_types))
				return false;

			//security check
			if (!isset($resource_types[$type])) {
				return false;
			}

			$this->site_images[$type] = array();

			$base_path = $resource_types[$type]['upload_root_abs_path'].$type.JRDS;
			$rel_path = $resource_types[$type]['upload_root_rel_path'].$type.'/';

			if ($resource_types[$type]['resource_id_required']) {
				$dir_contents = scandir_getdirectories($base_path);

				foreach ($dir_contents as $resouce_id) {
					$resource_images = scandir_getfiles($base_path.$resouce_id.JRDS);

					if (!empty($resource_images)) {
						foreach ($resource_images as $image) {
							$this->site_images [ $type ] [ $resouce_id ] [] = array(
								'large' => $rel_path.$resouce_id.'/'.$image,
								'medium' => $rel_path.$resouce_id.'/medium/'.$image,
								'small' => $rel_path.$resouce_id.'/thumbnail/'.$image,
								);
						}
					} else { //the dir is empty
						$this->site_images [ $type ] [ $resouce_id ] [] = array(
								'large' => $this->multi_query_images[ 'noimage-large' ],
								'medium' => $this->multi_query_images[ 'noimage-medium' ],
								'small' => $this->multi_query_images[ 'noimage-small' ],
								);
					}
				}
			} else {
				$resource_images = scandir_getfiles($base_path);

				if (!empty($resource_images)) {
					foreach ($resource_images as $image) {
						$this->site_images [ $type ] [] = array(
							'large' => $rel_path.$image,
							'medium' => $rel_path.'medium/'.$image,
							'small' => $rel_path.'thumbnail/'.$image,
							);
					}
				} else { //the dir is empty
					$this->site_images [ $type ] [] = array(
							'large' => $this->multi_query_images[ 'noimage-large' ],
							'medium' => $this->multi_query_images[ 'noimage-medium' ],
							'small' => $this->multi_query_images[ 'noimage-small' ],
							);
				}
			}
		}

        return $this->site_images;
    }
	
	//get site images from db. not really a "multi"
	private function get_site_images_multi_from_db($type = '')
	{
		if ($type == '') {
			return false;
		}

		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('11010');
		$resource_types = $MiniComponents->miniComponentData['11010'];
		
		if (empty($resource_types))
			return false;

		//security check
		if (!isset($resource_types[$type])) {
			return false;
		}

		$this->site_images[$type] = array();
		
		$rel_path = $resource_types[$type]['upload_root_rel_path'].$type.'/';

		$query = "SELECT 
						`id`, 
						`property_uid`, 
						`resource_type`, 
						`resource_id`, 
						`filename`, 
						`version` 
					FROM #__jomres_images 
					WHERE `property_uid` = 0 
						AND `resource_type` = '".$type."'";
		$result = doSelectSql($query);

		foreach ($result as $r) {
			if ($resource_types[$type]['resource_id_required']) {
				if ($r->version == 'large') {
					$this->site_images [ $type ] [ $r->resource_id ] [$r->filename] ['large'] = 
						$rel_path.$r->resource_id.'/'.$r->filename;
				} elseif ($r->version == 'small') {
					$this->site_images [ $type ] [ $r->resource_id ] [$r->filename] ['small'] = 
						$rel_path.$r->resource_id.'/thumbnail/'.$r->filename;
				} else {
					$this->site_images [ $type ] [ $r->resource_id ] [$r->filename] ['medium'] = 
						$rel_path.$r->resource_id.'/'.$r->version.'/'.$r->filename;
				}
			} else {
				if ($r->version == 'large') {
					$this->site_images [ $type ] [$r->filename] ['large'] = 
						$rel_path.'/'.$r->filename;
				} elseif ($r->version == 'small') {
					$this->site_images [ $type ] [$r->filename] ['small'] = 
						$rel_path.'thumbnail/'.$r->filename;
				} else {
					$this->site_images [ $type ] [$r->filename] ['medium'] = 
						$rel_path.$r->version.'/'.$r->filename;
				}
			}
		}

		//we have to reset the key file names in the array, because other code uses 0 as key for first image
		//ugly solution, but has to be done to avoid changing the code in lots of places
		if ($resource_types[$type]['resource_id_required']) {
			foreach ($this->site_images[$type] as $k => $v) {
				$this->site_images[$type][$k] = array_values($v);
			}
		} else {
			$this->site_images[$type] = array_values($this->site_images[$type]);
		}

		return true;
	}
	
	//save image details to db
	public function save_image_details_to_db($property_uid = 0, $resource_type = '', $resource_id = '', $file_name = '', $version = '', $resource_id_required = true)
	{
		if (!$this->use_db) {
			return true;
		}

		if ($resource_type == '') {
			throw new Exception('Error: Resource type empty.');
		}
		
		if ($resource_id_required && $resource_id == '') {
			throw new Exception('Error: Resource id required is empty.');
		}
		
		if ($file_name == '') {
			throw new Exception('Error: File name empty.');
		}
		
		if ($version == '') {
			$version = 'large';
		}
		
		if ($version == 'thumbnail') {
			$version = 'small';
		}

		$query = "INSERT INTO #__jomres_images (
												`property_uid`, 
												`resource_type`, 
												`resource_id`, 
												`filename`, 
												`version`
												) 
										VALUES (
												".(int)$property_uid.",
												'".$resource_type."',
												'".$resource_id."',
												'".$file_name."',
												'".$version."'
												)";
		
		if (!doInsertSql($query,'')) {
			throw new Exception('Error: Could not insert images in db');
		}
		
		return true;
	}

	//delete image from disk and db
	public function delete_image($property_uid = 0, $resource_type = '', $resource_id = '', $file_name = '', $abs_path = '', $resource_id_required = true)
	{
		//first we`ll check if we have all args we need
		if ($resource_type == '') {
			throw new Exception('Error: Resource type empty.');
		}
		
		if ($resource_id_required && $resource_id == '') {
			throw new Exception('Error: Resource id required is empty.');
		}
		
		if ($file_name == '') {
			throw new Exception('Error: File name empty.');
		}
		
		if ($abs_path == '') {
			throw new Exception('Error: Abs path empty.');
		}
		
		//delete files from disk
		$passed = true;
        
		if (file_exists($abs_path.$file_name)) {
            if (!unlink($abs_path.$file_name)) {
                error_logging("Error, media centre couldn't delete ".$abs_path.$file_name);
                $passed = false;
            }
        }
        if (file_exists($abs_path.'medium'.JRDS.$file_name)) {
            if (!unlink($abs_path.'medium'.JRDS.$file_name)) {
                error_logging("Error, media centre couldn't delete ".$abs_path.'medium'.JRDS.$file_name);
                $passed = false;
            }
        }
        if (file_exists($abs_path.'thumbnail'.JRDS.$file_name)) {
            if (!unlink($abs_path.'thumbnail'.JRDS.$file_name)) {
                error_logging("Error, media centre couldn't delete ".$abs_path.'thumbnail'.JRDS.$file_name);
                $passed = false;
            }
        }

		//BC gifs TODO: can probably be removed
        if (file_exists($abs_path.'gif'.JRDS.'small_thumb.gif')) {
            if (!unlink($abs_path.'gif'.JRDS.'small_thumb.gif')) {
                error_logging("Error, media centre couldn't delete ".$abs_path.'gif'.JRDS.'small_thumb.gif');
                $passed = false;
            }
        }

        if (file_exists($abs_path.'gif'.JRDS.'medium_thumb.gif')) {
            if (!unlink($abs_path.'gif'.JRDS.'medium_thumb.gif')) {
                error_logging("Error, media centre couldn't delete ".$abs_path.'gif'.JRDS.'medium_thumb.gif');
                $passed = false;
            }
        }

        if (file_exists($abs_path.'gif'.JRDS.'slideshow_lib.php')) {
            if (!unlink($abs_path.'gif'.JRDS.'slideshow_lib.php')) {
                error_logging("Error, media centre couldn't delete ".$abs_path.'gif'.JRDS.'slideshow_lib.php');
                $passed = false;
            }
        }

        if ($passed) {
			if ($this->use_db) {
				$query = "DELETE FROM #__jomres_images 
									WHERE `property_uid` = ".(int)$property_uid." 
									AND `resource_type` = '".$resource_type."' 
									AND `resource_id` = '".$resource_id."' 
									AND `filename` = '".$file_name."'";
				
				if (!doInsertSql($query,'')) {
					throw new Exception('Error: Delete image from db failed.');
				}
			}
			
			return true;
        } else {
            return false;
        }
		
		return false;
	}
}
