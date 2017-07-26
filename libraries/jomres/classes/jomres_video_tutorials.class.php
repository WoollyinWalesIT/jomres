<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.7
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_video_tutorials
{
    private static $configInstance;

    public function __construct()
    {
        $this->task = '';
		$this->property_uid = 0;
		
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    

    //Get room details
    public function get_video_url()
    {
        if ($this->property_uid == 0 ) {
			return null;
		}
		$mrConfig = getPropertySpecificSettings($this->property_uid);
		
		
		
		
    }

    private function get_current_task() 
	{
		return get_showtime('task');
	}
	
	
	private function get_videos_array() 
	{
		$videos_array = array( 
			"SRP" => array(),
			"MRP" => array(),
			"TOUR" => array(),
			"REALESTATE" => array()
			)
		
		
		
		return $videos_array();
	}
}
