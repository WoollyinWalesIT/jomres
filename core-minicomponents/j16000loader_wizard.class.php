<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000loader_wizard
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		if (!$this->test_for_ioncube()) {
			echo "<p class='alert alert-danger'>Error, Ioncube loaders are not installed.</p><p>Please use the loader wizard found <a href='http://www.ioncube.com/loaders.php' target='_blank'>on Ioncube's website</a> for more information on how to install loaders on your server.</p>";
		} else {
			if (function_exists('ioncube_loader_version')) {
				$ioncubeVersion = ioncube_loader_version();
				$ioncubeMajorVersion = (int) substr($ioncubeVersion, 0, strpos($ioncubeVersion, '.'));
				$ioncubeMinorVersion = (int) substr($ioncubeVersion, strpos($ioncubeVersion, '.') + 1);
				if ($ioncubeMajorVersion < 5 || ($ioncubeMajorVersion == 0 && $ioncubeMinorVersion < 21)) {
					echo "<p class='alert alert-warning'>Uh oh, Ioncube loaders are installed, however they may be too old to run these scripts.</p><p>Please visit <a href='http://www.ioncube.com/loaders.php' target='_blank'>Ioncube's website</a> to download the most current versions of the loader wizard. This will walk you through installing the loaders. Alternatively, ask your hosts for help.</p>";
				} else {
					echo "<p class='alert alert-success'>Success, Ioncube loaders are installed.</p><p>If you run into any problems running the loaders on your server, please visit <a href='http://www.ioncube.com/loaders.php' target='_blank'>Ioncube's website</a> to download the most current versions of the loader wizard. This will walk you through installing the loaders. Alternatively, ask your hosts for help.</p>";
				}
			}
		}
	}

	public function test_for_ioncube()
	{
		if (extension_loaded('ionCube Loader')) {
			return true;
		}
		if (function_exists('ioncube_file_is_encoded')) {
			return true;
		}
		if (function_exists('phpinfo')) {
			ob_start();
			phpinfo(8);
			$phpinfo = ob_get_clean();
			if (false !== strpos($phpinfo, 'ionCube')) {
				return true;
			}
		}

		return false;
	}


	public function getRetVals()
	{
		return null;
	}
}
