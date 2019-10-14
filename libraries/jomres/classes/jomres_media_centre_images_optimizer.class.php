<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_media_centre_images_optimizer
{
	protected $optimizer;

	public function __construct()
	{
		$factory = new \ImageOptimizer\OptimizerFactory();
		$this->optimizer = $factory->get();
	}
	
	public static function getInstance()
	{
		if (!self::$configInstance) {
			self::$configInstance = new self();
		}

		return self::$configInstance;
	}
	
	public function optimize($filepath = '')
	{
		if ($filepath == '') {
			return true;
		}
		
		return $this->optimizer->optimize($filepath);
	}
}
