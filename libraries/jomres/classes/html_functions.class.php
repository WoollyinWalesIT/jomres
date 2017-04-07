<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class html_functions
{
	private static $configInstance;
	
    public function __construct()
    {
		$this->buttons = array();
    }
	
	public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function cpanelButton($link, $image, $text, $path = 'JOMRES_ROOT_DIRECTORY/images/jomresimages/small/', $category = null, $external = false, $disabled = false)
    {
        if (!isset($category)) {
            $category = 'misc';
        }
        
		if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.$image)) {
            if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jomresimages'.JRDS.'small'.JRDS.$image)) {
                $path = get_showtime('eLiveSite').$image;
            } else {
                $path = get_showtime('live_site').$path.$image;
            }
        } else {
            $path = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/'.$image;
        }

        $this->buttons[] = array('link' => $link, 'image' => $image, 'menu_name' => $text, 'image_path' => $path, 'category' => $category, 'external' => $external, 'disabled' => $disabled);
    }

    public function cpanelInfoRow($text, $info)
    {
        return '<span>' .$text.' : '.$info.'</span>';
    }
}
