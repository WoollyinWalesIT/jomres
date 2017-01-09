<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class shortcode_parser
{
    private static $configInstance;

    public function __construct()
    {
        $this->shortcodes = false;
        $this->shortcodes_file = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'shortcodes.php';
    }

    public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function get_shortcodes()
    {
        $this->build_shortcodes();

        if (file_exists($this->shortcodes_file)) {
            include_once $this->shortcodes_file;
        } else {
            throw new Exception('Error, the shortcodes file couldn`t be created.');
        }
    }

    public function build_shortcodes($force = false)
    {
        if (!file_exists($this->shortcodes_file) || $force) {
            $this->shortcodes = array();

            $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
            $MiniComponents->template_touch = true;

            $eventArgs = null;

            foreach ($MiniComponents->registeredClasses as $eClass) {
                $classFileSuffix = '.class.php';
                $filename = 'j'.$eClass[ 'eventPoint' ].$eClass[ 'eventName' ].$classFileSuffix;

                if (file_exists($eClass[ 'filepath' ].$filename)) {
                    $ePoint = $eClass[ 'eventPoint' ];

                    if ($ePoint == '06000' || $ePoint == '06001' || $ePoint == '06002' || $ePoint == '06005') {
                        $eName = $eClass[ 'eventName' ];
                        $event = 'j'.$ePoint.$eName;

                        include_once $eClass[ 'filepath' ].$filename;

                        $e = new $event($eventArgs);

                        if (isset($e->shortcode_data)) {
                            $this->shortcodes[$ePoint][] = $e->shortcode_data;
                        }

                        unset($e);
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
