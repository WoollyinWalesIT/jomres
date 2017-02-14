<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.26
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_singleton_abstract
{
    protected static $_instances;

    public function __construct()
    {
    }

    public static function getInstance($class, $arg1 = null)
    {
        if (!isset(self::$_instances[ $class ])) {
            if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.'.class.php')) {
                $result = require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS.'custom_code'.JRDS.$class.'.class.php';
                self::$_instances[ $class ] = new $class($arg1);
            } else {
                $classfilefound = false;

                $jrePath = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS;
                $d = @dir($jrePath);
                $docs = array();
                if ($d) {
                    while (false !== ($entry = $d->read())) {
                        $filename = $entry;
                        if (substr($entry, 0, 1) != '.') {
                            $docs[ ] = $entry;
                        }
                    }
                    $d->close();
                    if (count($docs) > 0) {
                        sort($docs);
                        foreach ($docs as $doc) {
                            $listdir = $jrePath.$doc.JRDS;
                            if (file_exists($listdir.$class.'.class.php')) {
                                $result = require_once $listdir.$class.'.class.php';
                                self::$_instances[ $class ] = new $class($arg1);
                                $classfilefound = true;
                            }
                        }
                    }
                }

                if (!$classfilefound) {
                    $jrePath = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'core-plugins'.JRDS;
                    $d = @dir($jrePath);
                    $docs = array();
                    if ($d) {
                        while (false !== ($entry = $d->read())) {
                            $filename = $entry;
                            if (substr($entry, 0, 1) != '.') {
                                $docs[ ] = $entry;
                            }
                        }
                        $d->close();
                        if (count($docs) > 0) {
                            sort($docs);
                            foreach ($docs as $doc) {
                                $listdir = $jrePath.$doc.JRDS;
                                if (file_exists($listdir.$class.'.class.php')) {
                                    $result = require_once $listdir.$class.'.class.php';
                                    self::$_instances[ $class ] = new $class($arg1);
                                    $classfilefound = true;
                                }
                            }
                        }
                    }
                }

                if (!$classfilefound && file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.'.class.php')) {
                    $result = require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.'.class.php';
                    self::$_instances[ $class ] = new $class($arg1);
                    $classfilefound = true;
                }

                if (!$classfilefound) {
                    echo 'Class file '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.$class.'.class.php'." doesn't exist";
                    exit;
                }
            }
        }

        //var_dump(self::$_instances);
        return self::$_instances[ $class ];
    }
}

function jomres_getSingleton($class, $args = array())
{
    return jomres_singleton_abstract::getInstance($class, $args);
}
