<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_media_centre_images
{
	protected $jrConfig;
	
	protected $optimizer;
	
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$this->jrConfig = $siteConfig->get();
		
		if ($this->jrConfig['images_imported_to_db'] == '0') {
			$this->use_db = false; //we`ll scandir for images
		} else {
			$this->use_db = true; //images are already imported to db
		}
		
		if ($this->jrConfig['optimize_images'] == '0') {
			$this->optimize_images = false; //no image optimization performed
		} else {
			$this->optimize_images = true; //uploaded images will be optimized for web
		}

		//if images details are stored in db, we may want to use Amazon S3
		if ($this->use_db &&
			$this->jrConfig['amazon_s3_active'] == '1' &&
			$this->jrConfig['amazon_s3_bucket'] != '' &&
			$this->jrConfig['amazon_s3_key'] != '' &&
			$this->jrConfig['amazon_s3_secret'] != ''
			) {
			$this->use_s3 = true;
		} else {
			$this->use_s3 = false;
		}
		
		//defaults
		$this->images = array();
		$this->site_images = array();
		$this->multi_query_images = array();
		$this->multi_query_images [ 'noimage-large' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/assets/images/noimage.gif';
		$this->multi_query_images [ 'noimage-medium' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/assets/images/noimage.gif';
		$this->multi_query_images [ 'noimage-small' ] = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/assets/images/noimage_small.gif';
	}
	
	/**
	 *
	 *
	 *
	 */

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
			if (!defined("JOMRES_API_CMS_ROOT")) {
				$this->images ['property'][0][] = array(
					'large' => $this->multi_query_images[ 'noimage-large' ],
					'medium' => $this->multi_query_images[ 'noimage-medium' ],
					'small' => $this->multi_query_images[ 'noimage-small' ],
					);
			}
		}

		//room images
		$this->images['rooms'] = array();

		//slideshow images
		$this->images['slideshow'] = array();

		if (!isset($this->multi_query_images[$property_id]['slideshow'])) {
			if (!defined("JOMRES_API_CMS_ROOT")) {
				$this->images ['slideshow'][0][] = array(
					'large' => $this->multi_query_images[ 'noimage-large' ],
					'medium' => $this->multi_query_images[ 'noimage-medium' ],
					'small' => $this->multi_query_images[ 'noimage-small' ],
					);
			}
		}

		//room features images
		$this->images['room_features'] = array();

		//extras images
		$this->images['extras'] = array();

		//property type images
		$this->images['property_type'] = array();

		//populate the images array
		foreach ($this->multi_query_images[$property_id] as $k => $v) {
			$this->images[ $k ] = $v;
		}

		//add default images for each room if no other images are set
		foreach ($current_property_details->rooms as $room_id) {
			if (!array_key_exists($room_id, $this->images[ 'rooms' ])) {
				if (!defined("JOMRES_API_CMS_ROOT")) {
					$this->images[ 'rooms' ] [ $room_id ] [0] = array(
						'large' => $this->multi_query_images[ 'noimage-large' ],
						'medium' => $this->multi_query_images[ 'noimage-medium' ],
						'small' => $this->multi_query_images[ 'noimage-small' ],
						);
				}
			}
		}

		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();

		if (isset($jomres_room_types->property_specific_room_type[$property_id])) {
			//add default images for each room if no other images are set
			foreach ($jomres_room_types->property_specific_room_type[$property_id] as $room_class_uid => $val) {
				if (isset($this->images[ 'room_types' ])) {
					if (!array_key_exists($room_class_uid, $this->images[ 'room_types' ])) {
						if (!defined("JOMRES_API_CMS_ROOT")) {
							$this->images[ 'rooms' ] [ $room_id ] [0] = array(
								'large' => $this->multi_query_images[ 'noimage-large' ],
								'medium' => $this->multi_query_images[ 'noimage-medium' ],
								'small' => $this->multi_query_images[ 'noimage-small' ],
							);
						}
					}
				}
			}
		}
			

		return $this->images;
	}
		
	/**
	 *
	 *
	 *
	 */

	//get images uploaded by admins (pfeatures, rmtypes, rmfeatures, markers, towns and other 3rd party resource types)
	public function get_site_images($type = '')
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
	
	/**
	 *
	 *
	 *
	 */

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
									if (!defined("JOMRES_API_CMS_ROOT")) {
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
		}

		return $this->multi_query_images;
	}
		
	/**
	 *
	 *
	 *
	 */

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
					WHERE `property_uid` IN (".jomres_implode($property_uids).") 
					ORDER BY `filename` ASC ";
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
		
	/**
	 *
	 *
	 *
	 */

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

			if (empty($resource_types)) {
				return false;
			}

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
						if (!defined("JOMRES_API_CMS_ROOT")) {
							$this->site_images [ $type ] [ $resouce_id ] [] = array(
								'large' => $this->multi_query_images[ 'noimage-large' ],
								'medium' => $this->multi_query_images[ 'noimage-medium' ],
								'small' => $this->multi_query_images[ 'noimage-small' ],
								);
						}
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
					if (!defined("JOMRES_API_CMS_ROOT")) {
						$this->site_images [ $type ] [] = array(
							'large' => $this->multi_query_images[ 'noimage-large' ],
							'medium' => $this->multi_query_images[ 'noimage-medium' ],
							'small' => $this->multi_query_images[ 'noimage-small' ],
							);
					}
				}
			}
		}

		return $this->site_images;
	}
		
	/**
	 *
	 *
	 *
	 */

	//get site images from db. not really a "multi"
	private function get_site_images_multi_from_db($type = '')
	{
		if ($type == '') {
			return false;
		}

		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('11010');
		$resource_types = $MiniComponents->miniComponentData['11010'];
		
		if (empty($resource_types)) {
			return false;
		}

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
						AND `resource_type` = '".$type."' 
					ORDER BY `filename` ASC ";
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
						$rel_path.$r->filename;
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
		
	/**
	 *
	 *
	 *
	 */

	//do jomres specific stuff for the newly uploaded image
	public function handle_uploaded_image($property_uid = 0, $resource_type = '', $resource_id = '', $file_name = '', $version = '', $resource_id_required = true)
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
		
		//save image details to db
		$this->save_image_details_to_db($property_uid, $resource_type, $resource_id, $file_name, $version, $resource_id_required);
		
		//generate image path from the available data
		$filepath = $this->build_image_path($property_uid, $resource_type, $resource_id, $file_name, $version, $resource_id_required);
		
		//optimize image, if enabled
		if ($this->optimize_images) {
			$jomres_media_centre_images_optimizer = jomres_singleton_abstract::getInstance('jomres_media_centre_images_optimizer');
			$jomres_media_centre_images_optimizer->optimize(JOMRES_IMAGELOCATION_ABSPATH.$filepath);
		}
		
		//copy image to amazon s3, if enabled
		if ($this->use_s3) {
			$this->copy_image_to_s3($filepath);
		}
	}
		
	/**
	 *
	 *
	 *
	 */

	//save image details to db
	private function save_image_details_to_db($property_uid = 0, $resource_type = '', $resource_id = '', $file_name = '', $version = '', $resource_id_required = true)
	{
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
		
		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Could not insert images in db');
		}
		
		return true;
	}
	
	/**
	 *
	 *
	 *
	 */

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

		if ($passed) {
			if ($this->use_db) {
				$query = "DELETE FROM #__jomres_images 
									WHERE `property_uid` = ".(int)$property_uid." 
									AND `resource_type` = '".$resource_type."' 
									AND `resource_id` = '".$resource_id."' 
									AND `filename` = '".$file_name."'";
				
				if (!doInsertSql($query, '')) {
					throw new Exception('Error: Delete image from db failed.');
				}
			}
			
			//delete image from amazon s3
			if ($this->use_s3) {
				//build image path from the available data
				$image_large = $this->build_image_path($property_uid, $resource_type, $resource_id, $file_name, '', $resource_id_required);
				$image_medium = $this->build_image_path($property_uid, $resource_type, $resource_id, $file_name, 'medium', $resource_id_required);
				$image_small = $this->build_image_path($property_uid, $resource_type, $resource_id, $file_name, 'thumbnail', $resource_id_required);
				
				//delete image from s3
				$this->delete_image_from_s3($image_large);
				$this->delete_image_from_s3($image_medium);
				$this->delete_image_from_s3($image_small);
			}
			
			return true;
		} else {
			return false;
		}
		
		return false;
	}
		
	/**
	 *
	 *
	 *
	 */

	//delete image from disk and db
	public function delete_all_images($property_uid = 0)
	{
		//first we`ll check if we have all args we need
		if ($property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}
		
		//delete image from db
		if ($this->use_db) {
			$query = "DELETE FROM #__jomres_images WHERE `property_uid` = ".(int)$property_uid;
			
			if (!doInsertSql($query, '')) {
				throw new Exception('Error: Deleting all property images from db failed.');
			}
		}
		
		//mount jomres filesystem
		$filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem')->getFilesystem();

		//delete images from disk
		$filesystem->deleteDir('local://uploadedimages/'.$property_uid);
		
		if ($this->use_s3) {
			$filesystem->deleteDir('s3://uploadedimages/'.$property_uid);
		}
		
		return true;
	}
		
	/**
	 *
	 *
	 *
	 */

	private function copy_image_to_s3($image = '')
	{
		if ($image == '') {
			return false;
		}

		//mount jomres filesystem
		$filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem')->getFilesystem();
		
		//check if image already exists
		if ($filesystem->has('s3://uploadedimages/'.$image)) {
			$filesystem->delete('s3://uploadedimages/'.$image);
		}
		
		//copy image
		$filesystem->copy('local://uploadedimages/'.$image, 's3://uploadedimages/'.$image);
		
		/* if ($this->jrConfig['amazon_s3_remove_local_copies'] == '1') {
			$filesystem->delete('local://uploadedimages/'.$image);
		} */
		
		return true;
	}
		
	/**
	 *
	 *
	 *
	 */

	private function delete_image_from_s3($image = '')
	{
		if ($image == '') {
			return false;
		}

		//mount jomres filesystem
		$filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem')->getFilesystem();
		
		//delete image
		$filesystem->delete('s3://uploadedimages/'.$image);
		
		return true;
	}
		
	/**
	 *
	 *
	 *
	 */

	private function build_image_path($property_uid = 0, $resource_type = '', $resource_id = '', $file_name = '', $version = '', $resource_id_required = true)
	{
		$image = '';
		
		if ($property_uid != 0) {
			$image .= $property_uid.'/';
		}
		
		if ($resource_type != '') {
			$image .= $resource_type.'/';
		}
		
		if ($resource_id != '' && $resource_id_required) {
			$image .= $resource_id.'/';
		}
		
		if ($version != '') {
			$image .= $version.'/';
		}
		
		if ($file_name != '') {
			$image .= $file_name;
		}
		
		return $image;
	}
}
