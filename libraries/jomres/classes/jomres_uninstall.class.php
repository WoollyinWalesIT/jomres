<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_uninstall
{
    protected $jrConfig;
	
	protected $filesystem;

    public function __construct()
    {
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $this->jrConfig = $siteConfig->get();
		
		$this->filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem', JOMRESCONFIG_ABSOLUTE_PATH)->getFilesystem();
    }
	
	public function uninstall()
	{
		if ($this->jrConfig['delete_all_data_on_uninstall'] == '0') {
			return true;
		}
		
		//drop all jomres tables
		$this->drop_jomres_tables();
		
		//delete the jomres dir
		$this->delete_jomres_dir();
		
		return true;
	}
	
	//drop jomres tables
	private function drop_jomres_tables()
	{
		$query = 'SHOW TABLES';
		$result = doSelectSql($query);
		
		$string = 'Tables_in_'.get_showtime('db');
		
		foreach ($result as $r) {
			if (strstr($r->$string, 'jomres_') || strstr($r->$string, 'jomcomp_') || strstr($r->$string, 'jomresportal_')) {
				$query = 'DROP TABLE IF EXISTS '.$r->$string;
				if (!doInsertSql($query, '')) {
					throw new Exception( 'Error, unable to drop table '.$r->$string);
				}
			}
		}

		return true;
	}
	
	//delete jomres files
	private function delete_jomres_dir()
	{
		//delete jomres dir
		$this->filesystem->deleteDir('local://jomres');
		
		//delete jomres_root file
		$this->filesystem->delete('local://jomres_root.php');
		
		return true;
	}
}
