<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
 *
 * @copyright	2005-2020 Vince Wooll
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

class jomres_shortcode_parser
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->shortcodes = false;
		$this->shortcodes_file = JOMRES_TEMP_ABSPATH.'shortcodes.php';
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function get_shortcodes()
	{
		$this->build_shortcodes();

		if (file_exists($this->shortcodes_file)) {
			include_once $this->shortcodes_file;
		} else {
			throw new Exception('Error, the shortcodes file couldn`t be created.');
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function build_shortcodes($force = false)
	{
		if (!file_exists($this->shortcodes_file) || $force) {
			$this->shortcodes = array();

			$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
			$MiniComponents->template_touch = true;

			$eventArgs = null;

			foreach ($MiniComponents->registeredClasses as $eventPoint => $ev) {
				foreach ($ev as $eventName => $eventDetails) {
					$classFileSuffix = '.class.php';
					$filename = 'j'.$eventPoint.$eventName.$classFileSuffix;

					if (file_exists($eventDetails[ 'filepath' ].$filename)) {
						if ($eventPoint == '06000' || $eventPoint == '06001' || $eventPoint == '06002' || $eventPoint == '06005') {
							$event = 'j'.$eventPoint.$eventName;

							if (!class_exists($event)) {
								include_once $eventDetails[ 'filepath' ].$filename;
							}

							$e = new $event($eventArgs);

							if (isset($e->shortcode_data)) {
								$this->shortcodes[$eventPoint][] = $e->shortcode_data;
							}

							unset($e);
						}
					}
				}
			}

			if (!file_put_contents($this->shortcodes_file,
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$this->shortcodes = ' .var_export($this->shortcodes, true).';
')) {
				trigger_error('ERROR: '.$this->shortcodes_file.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
				exit;
			}

			$MiniComponents->template_touch = false;
		}

		return true;
	}
}
