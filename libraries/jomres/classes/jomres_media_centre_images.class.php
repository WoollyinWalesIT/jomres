<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.28
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
        self::$configInstance = false;
        $this->images = array();
		$this->site_images = array();
		
        $this->multi_query_images = array();
		$this->multi_query_site_images = array();

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
        if (!isset($this->multi_query_site_images[$type])) {
            $this->get_site_images_multi($type);
        }

        return $this->site_images;
    }

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

        if (!empty($property_uids)) {
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
					if (array_key_exists($dir, $resource_types)) {
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
	
	//this scans for site images like pfeatures, rmtypes and other 3rd party images
	public function get_site_images_multi($type = '')
    {
		if ($type == '') {
			return false;
		}
		
        // First we need to extract those uids that are not already in the $this->multi_query_images var, this (may) reduce the number of scandirs we need to execute
        if (isset($this->multi_query_site_images[$type])) {
            return true;
        }

		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('11010');
		$resource_types = $MiniComponents->miniComponentData['11010'];
		
		if (empty($resource_types))
			return false;

		//security check
		if (!array_key_exists($type, $resource_types)) {
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

        return $this->site_images;
    }
}
