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

class jomres_media_centre_images_dbimport
{
    // Store the single instance of Database
    private static $configInstance;
	
	protected $propertys_uids;
	
	protected $jomres_media_centre_images;

    public function __construct($propertys_uids = array(), $import_site_images = false)
    {
		$this->use_db = true; //set this to false to scandir for images, otherwise we`ll get them from db
		
		$this->propertys_uids = $propertys_uids;
		
		$this->import_site_images = $import_site_images; //import site images true/false
		
		$this->batch_size = 10; //10 properties at a time
		
		$this->jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
    }

	//run importer
    public function run()
	{
		if (!$this->use_db) {
			return true;
		}
		
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
	
	private function get_site_images()
	{
		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('11010');
		$resource_types = $MiniComponents->miniComponentData['11010'];
		
		if (empty($resource_types))
			return false;
		
		foreach ($resource_types as $k => $v) {
			$this->jomres_media_centre_images->get_site_images($k);
		}
		
		return true;
	}
	
	private function get_property_images($p_uids = array())
	{
		if (empty($p_uids)) {
			return false;
		}
		
		$this->jomres_media_centre_images->get_images_multi($p_uids);
			
		return true;
	}
	
	//import site images in batches, one query for each resource type
	private function import_site_images()
	{
		$MiniComponents = jomres_getSingleton('mcHandler');
		$MiniComponents->triggerEvent('11010');
		$resource_types = $MiniComponents->miniComponentData['11010'];
		
		if (empty($resource_types))
			return false;
		
		foreach ($resource_types as $k => $v) {
			if (isset($this->jomres_media_centre_images->site_images[$k])) {
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
						}
					}
				}
				
				$query = rtrim($query, ',');

				if (!doInsertSql($query,'')) {
					throw new Exception('Could not insert site images for resource type '.$k);
				}
				
				//clear memory
				unset($this->jomres_media_centre_images->site_images[$k]);
			}
		}
		
		return true;
	}
	
	private function import_property_images($property_uids = array())
	{
		if (empty($property_uids)) {
			return false;
		}

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
							}
						}
					}
				}
				
				//remove this property uid from array to free up memory
				unset($this->jomres_media_centre_images->multi_query_images[$property_uid]);
			}
		}
		
		$query = rtrim($query, ',');

		if (!doInsertSql($query,'')) {
			throw new Exception('Could not insert site images for resource type '.$k);
		}
		
		return true;
	}
}
