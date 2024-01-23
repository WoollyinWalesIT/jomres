<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
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
class jomres_media_centre_images_s3import
{
	protected $filesystem;
		
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$this->filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem')->getFilesystem();
	}
	
	/**
	 *
	 *
	 *
	 */

	//run importer
	public function run()
	{
		$contents = $this->filesystem->listContents('local://uploadedimages/', true);
		
		foreach ($contents as $fileNode) {
			if ($fileNode['type'] == 'dir') {
				$this->filesystem->createDir('s3://'.$fileNode['path']);
				continue;
			}

			$this->filesystem->put(
				's3://'.$fileNode['path'],
				$this->filesystem->read('local://'.$fileNode['path'])
			);
		}
		
		return true;
	}
}
