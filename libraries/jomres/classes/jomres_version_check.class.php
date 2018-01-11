<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.17
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_version_check
{
    private static $configInstance;

    public function __construct()
    {
		$this->latest_jomres_version = get_latest_jomres_version();
		$this->tmp_dir = JOMRES_TEMP_ABSPATH."version_checks";
		$this->secret = md5(get_showtime('secret')); // We will use the secret variable because we don't want temporary files with just the version number as this is a security risk. Bad people could just come and test for version numbers and if a version has a vulnerability then that could be zeroed in on. So, we'll md5 hash the site secret to help with creating the version file.
		
		if (!is_dir($this->tmp_dir)) {
			if (!mkdir($this->tmp_dir)) {
				 throw new Exception('Error, could not create version check temporary directory');
			}
		}
		
		$this->check_file = $this->tmp_dir.JRDS.$this->latest_jomres_version.'_'.$this->secret.'.txt';
		if (!file_exists($this->check_file)) {
			$this->check_version();
		}
		
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function check_version() // We'll get the current version, 
    {
		$current_version_is_uptodate = check_jomres_version(false);
		if (!$current_version_is_uptodate) {
			$subject = jr_gettext('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', false , false ).' '.$this->latest_jomres_version;
			$message = jr_gettext('_JOMRES_VERSIONCHECK_VERSIONWARNING', '_JOMRES_VERSIONCHECK_VERSIONWARNING', false , false )." \n\r <a href='".JOMRES_SITEPAGE_URL_ADMIN."'>".JOMRES_SITEPAGE_URL_ADMIN."</a>";
			sendAdminEmail($subject, $message );
		}
		$this->write_checkfile();
    }
	
	private function write_checkfile() 
	{
		touch($this->check_file);
		return;
	}
}
