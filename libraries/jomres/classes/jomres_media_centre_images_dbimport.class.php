<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
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
	#[AllowDynamicProperties]
class jomres_media_centre_images_dbimport
{

	protected $propertys_uids;
	
	protected $jomres_media_centre_images;
	
	/**
	 *
	 *
	 *
	 */

	public function __construct($propertys_uids = array(), $import_site_images = false)
	{
		$this->propertys_uids = $propertys_uids;
		
		$this->import_site_images = $import_site_images; //import site images true/false
		
		$this->batch_size = 25; //50 properties at a time. You can increase/decrease this depending on what you server can handle
		
		$this->jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
	}
	
	/**
	 *
	 *
	 *
	 */

	//run importer
	public function run()
	{
		//import site images
		if ($this->import_site_images) {
			$this->get_site_images();
			
			$this->import_site_images();

			//empty the array to free up memory
			$this->jomres_media_centre_images->site_images = array();
		}
		
		//import property images in batches of $this->batch_size
		if (!empty($this->propertys_uids)) {
			$i = 0;
			$p_uids = array();
		
			while ($p_uids = array_slice($this->propertys_uids, $i, $this->batch_size)) {
				if (empty($p_uids)) {
					break;
				}
				
				$this->get_property_images($p_uids);
				
				$this->import_property_images($p_uids);
				
				$i = $i + $this->batch_size;
			}
		}
		
		return true;
	}
		
	/**
	 *
	 *
	 *
	 */

	private function get_site_images()
	{
		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('11010');
		$resource_types = $MiniComponents->miniComponentData['11010'];
		
		if (empty($resource_types)) {
			return false;
		}
		
		foreach ($resource_types as $k => $v) {
			$this->jomres_media_centre_images->get_site_images($k);
		}
		
		return true;
	}
		
	/**
	 *
	 *
	 *
	 */

	private function get_property_images($p_uids = array())
	{
		if (empty($p_uids)) {
			return false;
		}
		
		$this->jomres_media_centre_images->get_images_multi($p_uids);
			
		return true;
	}
		
	/**
	 *
	 *
	 *
	 */

	//import site images in batches, one query for each resource type
	private function import_site_images()
	{
		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('11010');
		$resource_types = $MiniComponents->miniComponentData['11010'];
		
		if (empty($resource_types)) {
			return false;
		}
		
		$at_least_one_image_exists = false;
		
		foreach ($resource_types as $k => $v) {
			if (isset($this->jomres_media_centre_images->site_images[$k]) && !empty($this->jomres_media_centre_images->site_images[$k])) {
				$query = "INSERT INTO #__jomres_images (
												`property_uid`, 
												`resource_type`, 
												`resource_id`, 
												`filename`, 
												`version`
												) 
										VALUES ";
				
				if ($resource_types[$k]['resource_id_required']) {
					foreach ($this->jomres_media_centre_images->site_images[$k] as $resource_id => $resource) {
						foreach ($resource as $r => $versions) {
							foreach ($versions as $version => $path) {
								$query .= "(
											0,
											'".$k."',
											'".$resource_id."',
											'".basename($path)."',
											'".$version."'
											),";
								
								//we`ll use a flag to know if we can run the query or not, to make sure we don`t run emopty queries when dirs exist but they`re empty
								if (!$at_least_one_image_exists) {
									$at_least_one_image_exists = true;
								}
							}
						}
					}
				} else {
					foreach ($this->jomres_media_centre_images->site_images[$k] as $filenames => $f) {
						foreach ($f as $version => $path) {
							$query .= "(
										0,
										'".$k."',
										'0',
										'".basename($path)."',
										'".$version."'
										),";
							
							//we`ll use a flag to know if we can run the query or not, to make sure we don`t run emopty queries when dirs exist but they`re empty
							if (!$at_least_one_image_exists) {
								$at_least_one_image_exists = true;
							}
						}
					}
				}
				
				$query = rtrim($query, ',');

				if ($at_least_one_image_exists) {
					if (!doInsertSql($query, '')) {
						throw new Exception('Could not insert site images for resource type '.$k);
					}
				}
				
				//clear memory
				unset($this->jomres_media_centre_images->site_images[$k]);
			}
		}
		
		return true;
	}
		
	/**
	 *
	 *
	 *
	 */

	private function import_property_images($property_uids = array())
	{
		if (empty($property_uids)) {
			return false;
		}
		
		$at_least_one_image_exists = false;

		$query = "INSERT INTO #__jomres_images (
												`property_uid`, 
												`resource_type`, 
												`resource_id`, 
												`filename`, 
												`version`
												) 
										VALUES ";

		foreach ($property_uids as $property_uid) {
			if (isset($this->jomres_media_centre_images->multi_query_images[$property_uid])) {
				foreach ($this->jomres_media_centre_images->multi_query_images[$property_uid] as $resource_type => $resource_ids) {
					foreach ($resource_ids as $resource_id => $files) {
						foreach ($files as $f => $versions) {
							foreach ($versions as $version => $path) {
								$query .= "(
											".(int)$property_uid.",
											'".$resource_type."',
											'".$resource_id."',
											'".basename($path)."',
											'".$version."'
											),";
								
								//we`ll use a flag to know if we can run the query or not, to make sure we don`t run emopty queries when dirs exist but they`re empty
								if (!$at_least_one_image_exists) {
									$at_least_one_image_exists = true;
								}
							}
						}
					}
				}
				
				//remove this property uid from array to free up memory
				unset($this->jomres_media_centre_images->multi_query_images[$property_uid]);
			}
		}
		
		$query = rtrim($query, ',');

		if ($at_least_one_image_exists) {
			if (!doInsertSql($query, '')) {
				throw new Exception('Could not insert site images for resource type '.$k);
			}
		}
		
		return true;
	}
}
