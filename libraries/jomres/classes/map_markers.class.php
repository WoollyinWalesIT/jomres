<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.20
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class map_markers
{
    private static $configInstance;

    public function __construct()
    {
        $this->markers = array();
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function gatherData()
    {
        if (count($this->markers) == 0) {
            $unwanted = array('attribution.txt', 'PSD.psd');
            $default_markers = scandir_getfiles(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'markers');

            foreach ($default_markers as $key => $val) {
                if (in_array($val, $unwanted)) {
                    unset($default_markers[$key]);
                } else {
                    $default_markers[$key] = array('FULLPATH' => get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/markers/'.$val, 'IMAGE' => $default_markers[$key]);
                }
            }

            if (count($default_markers) == 0) {
                throw new Exception('Error: Default Google map markers are missing.');
            }

            $jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
            if (isset($jomres_media_centre_images->images['markers']) && count($jomres_media_centre_images->images['markers']) > 0) {
                $this->markers = array_merge($jomres_media_centre_images->images['markers'], $default_markers);
            } else {
                $this->markers = $default_markers;
            }

            return $this->markers;
        } else {
            return $this->markers;
        }
    }

    public function get_map_marker_full_path($marker = '')
    {
        if ($marker == '') {
            throw new Exception('Error: Marker name not sent');
        }

        if (
            is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'markers') &&
            is_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'markers'.JRDS.$marker)
            ) {
            return get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/markers/'.$marker;
        } elseif (JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'markers'.JRDS.$marker) {
            return get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/markers/'.$marker;
        }
    }
}
