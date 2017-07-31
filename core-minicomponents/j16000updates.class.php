<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000updates
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        if (!this_cms_is_wordpress()) {
            jomresRedirect(jomresURL(get_showtime('live_site').'/administrator/index.php?option=com_installer&view=update'), '');

            return;
        }

        $jomresConfig_offline = true;

        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'defines.php')) {
            $CONFIG = new JConfig();
            $jomresConfig_offline = $CONFIG->offline;
        }

        if (!class_exists('ZipArchive')) {
            $error_messsage[ 'ERROR' ] = 'Error, ZipArchive not available on this server. Please ask your hosts to rebuild PHP with --enable-zip';
            echo $error_messsage[ 'ERROR' ];

            return;
        }
        // This is just to improve the user's experience. Users can remove this and attempt to upgrade, but then their Quickstart Only installation's plugins may not work with the newer version of Jomres.
        jr_import('jomres_check_support_key');
        $key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
        $this->key_valid = $key_validation->key_valid;

        $current_version_is_uptodate = check_jomres_version();

        // Currently disabling the review request popup.
        $_REQUEST['reviewseen'] = 1;

        if (!$current_version_is_uptodate && !isset($_REQUEST['reviewseen']) && !isset($_REQUEST['version'])) {
            jomres_cmsspecific_addheaddata('javascript', JOMRES_ROOT_DIRECTORY.'/javascript/', 'jquery.blockUI.js');

            $output = array();

            if ($key_validation->allows_plugins == '0' && $this->key_valid) {

                //JOMRES_SITEPAGE_URL_ADMIN.'&task=updates&reviewseen=1';

                $output['WARNING'] = "Your license doesn\'t allow you to download plugins!";
                $output['UPGRADING'] = 'If you upgrade Jomres your currently installed plugins may not work with the new version of Jomres.';
                $output['PURCHASE'] = 'If you want to upgrade, we recommend you purchase a Starter, Business or Enterprise license, which allows you to install and upgrade any plugin.';
                $output['BUYNOW'] = 'Buy now!';

                $output['REDIRECT1'] = 'You will be able to continue the upgrade process in ';
                $output['REDIRECT2'] = ' seconds.';
                $output['CONTINUE_URL'] = JOMRES_SITEPAGE_URL_ADMIN.'&task=updates&reviewseen=1';

                $pageoutput[] = $output;

                $tmpl = new patTemplate();
                $tmpl->addRows('pageoutput', $pageoutput);
                $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
                $tmpl->readTemplatesFromInput('upgrade_warning.html');
                $tmpl->displayParsedTemplate();
            } else {
                if ($this->key_valid) {
                    $output['THANKS'] = 'Thank you for being a loyal client.';
                    $output['UPGRADING'] = 'It has been a pleasure to serve you with your Jomres system.';
                } else {
                    $output['THANKS'] = 'Thank you for upgrading Jomres.';
                    $output['UPGRADING'] = "You appear to be happy using the software that we\'ve worked long and hard on, that\'s great to see.";
                }

                if (this_cms_is_wordpress()) {
                    $output['REVIEW_URL'] = "You can leave a review on the <br/><a href=\'https://wordpress.org/support/view/plugin-reviews/jomres\' target=\'_blank\'>Wordpress Plugins site</a><br>";
                } else {
                    $output['REVIEW_URL'] = "You can leave a review on the <br/><a href=\'http://extensions.joomla.org/extensions/extension/vertical-markets/booking-a-reservations/jomres\' target=\'_blank\'>Joomla extension directory</a><br>";
                }

                $output['REVIEW_URL'] .= "Alternatively, you can leave a review with <br/><a href=\'http://www.capterra.com/reservations-software/reviews/134469/Jomres/Woollyinwales%20IT/new\' target=\'_blank\'>Capterra.</a><br>";

                $output['RATIONAL'] = "Good reviews are crucial in helping users to decide whether or not to invest time in researching a product such as Jomres. We\'d appreciate it if you could take a few minutes out of your day to share your thoughts of the system for the benefit of others. Without reviews helping to drive business to our site we can\'t pay the bills. If you\'ve already left a review then we thank you and hope you\'ll wait a few moments for the page to reload.";
                $output['REDIRECT1'] = 'You will be able to continue the upgrade process in ';
                $output['REDIRECT2'] = ' seconds.';

                $output['CONTINUE_URL'] = JOMRES_SITEPAGE_URL_ADMIN.'&task=updates&reviewseen=1';

                $pageoutput[] = $output;

                $tmpl = new patTemplate();
                $tmpl->addRows('pageoutput', $pageoutput);
                $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
                $tmpl->readTemplatesFromInput('review_request.html');
                $tmpl->displayParsedTemplate();
            }
        } else {
            $this->updateServer = 'http://updates.jomres4.net';
            $this->updateFolder = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'updates';
            $this->overwriteAllowed = true;
            $this->movedFileLog = array();
            $this->debugging = false;
            $this->test_download = false;

            $configfile = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'jomres_config.php'; // This is just to pull in the Jomres version from mrConfig
            include $configfile;
            $thisVersion = $mrConfig[ 'version' ];
            echo "<br /><br /><br /><center><h2>This Jomres version: $thisVersion</h2></center><br />";

            $this->ftp_user_name = 'userid';
            $this->ftp_user_pass = 'password';
            $this->ftp_server = 'localhost';
            $this->ftp_root = JOMRESCONFIG_ABSOLUTE_PATH;
            if (!$this->checkUpdateDirectory()) {
                echo "Can't create update folder $this->updateFolder";

                return;
            }
            if (!isset($_REQUEST[ 'ftp_user_name' ])) {
                if (!$this->checkJomresDirectories()) {
                    $detect_os = strtoupper($_SERVER[ 'SERVER_SOFTWARE' ]); // converted to uppercase
                    $pos = strpos($detect_os, 'WIN32');
                    $IIS = strpos($detect_os, 'IIS');
                    if ($pos === false && $IIS === false) {
                        echo "Error, it's not possible to upgrade Jomres on this server as one or more files is not writable by php. It's likely that files were uploaded via ftp and are owned by the ftp user, not the web server's user. You are advised to change ownership of the files to the web server's user then try again.<br/>";
                    } else {
                        // We're on a win box
                        echo "Error, it's not possible to upgrade Jomres on this server as one or more files is not writable by php. <br/>";
                    }

                    foreach ($this->directoryScanResults as $f) {
                        echo $f.'<br />';
                    }

                    return;
                }
            } else {
                $this->ftp_user_name = jomresGetParam($_REQUEST, 'ftp_user_name', '');
                $this->ftp_user_pass = jomresGetParam($_REQUEST, 'ftp_user_pass', '');
                $this->ftp_server = jomresGetParam($_REQUEST, 'ftp_server', '');
                $this->checkJomresDirectories();
                if (!$this->checkJomresDirectories()) {
                    echo "Error, it's not possible to upgrade Jomres on this server as one or more files is not writable by php. It's likely that files were uploaded via ftp and are owned by the ftp user, not the web server's user. You are advised to change ownership of the files to the web server's user then try again.<br/>";
                }
            }
            if (!isset($_REQUEST[ 'encoding' ]) && !isset($_REQUEST[ 'ftp_user_name' ])) {
                $this->getUpdateInfo();
            } elseif (!isset($_REQUEST[ 'ftp_user_name' ])) {
                $liveSite = '&live_site='.urlencode(get_showtime('live_site'));

                $requiredEncoding = jomresGetParam($_REQUEST, 'encoding', '');
                $requiredVersion = jomresGetParam($_REQUEST, 'version', '');

                $updateFile = $this->updateServer.'/index.php?encoding='.$requiredEncoding.'&version='.$requiredVersion.$liveSite;
                $newfilename = $this->updateFolder.'/jomres.zip';

                $out = fopen($newfilename, 'wb');
                if ($out == false) {
                    echo "Couldn't create new file $newfilename. Possible file permission problem?<br/>";
                    exit;
                }

                logging::log_message('Starting curl call to '.$updateFile, 'Curl', 'DEBUG');
                $logging_time_start = microtime(true);

                $curl_handle = curl_init($updateFile);
                curl_setopt($curl_handle, CURLOPT_FILE, $out);
                curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Jomres');
                curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                curl_setopt($curl_handle, CURLOPT_URL, $updateFile);
                curl_exec($curl_handle);
                curl_close($curl_handle);

                $logging_time_end = microtime(true);
                $logging_time = $logging_time_end - $logging_time_start;
                logging::log_message('Curl call took '.$logging_time.' seconds ', 'Curl', 'DEBUG');

                fclose($out);

                if (file_exists($newfilename) && filesize($newfilename) > 0) {
                    echo 'Got it<br />';
                } else {
                    echo 'Something went wrong downloading the update files. Quitting';

                    return;
                }

                $zip = new ZipArchive();
                $res = $zip->open($newfilename);

                // Unzip all the contents of the zipped file to this folder
                if (mkdir($this->updateFolder.JRDS.'unpacked') && $res === true) {
                    $zip->extractTo($this->updateFolder.JRDS.'unpacked');
                    $zip->close();

                    if (!$this->test_download) {
                        $this->dirmv($this->updateFolder.JRDS.'unpacked'.JRDS, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS, $this->overwriteAllowed, $funcloc = '/');
                    }

                    echo 'Completed upgrade. Please ensure that you visit <a href="'.get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/install_jomres.php">install_jomres.php</a> to complete any database changes that may be required';

                    if ($this->debugging) {
                        echo '<br/><br/><br/><br/><br/><br/>';
                        echo 'UPGRADE LOG<br/>';
                        foreach ($this->movedFileLog as $record) {
                            echo $record;
                        }
                    }
                    unlink($newfilename);
                    jomresRedirect(jomresURL(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/install_jomres.php?autoupgrade'), '');
                } else {
                    echo 'Error creating unpack folder';
                }
            }
        }
    }

    public function getUpdateInfo()
    {
        echo queryUpdateServer('updates_available.php', '', 'updates');
    }

    public function checkJomresDirectories()
    {
        $this->directoryScanResults = array();
        $jomresFrontDir = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY;
        $files_array = $this->recur_dir($jomresFrontDir);
        if (!empty($this->directoryScanResults)) {
            return false;
        }

        return true;
    }

    public function is_removeable($dir)
    {
        $folder = opendir($dir);
        while ($file = readdir($folder)) {
            if ($file != '.' && $file != '..' && (!is_writable($dir.JRDS.$file) || (is_dir($dir.JRDS.$file) && !$this->is_removeable($dir.JRDS.$file)))) {
                closedir($dir);

                return false;
            }
        }
        closedir($dir);

        return true;
    }

    public function recur_dir($dir, $getWritablesFiles = false)
    {
        $mod_array = array();
        $dirlist = opendir($dir);
        while ($file = readdir($dirlist)) {
            if ($file != '.' && $file != '..' && $file != '.git') {
                $newpath = $dir.'/'.$file;
                if ($getWritablesFiles) {
                    if (is_file($newpath) && is_writable($newpath)) {
                        $this->directoryScanResults[ ] = $dir.JRDS.$file;
                    }
                } else {
                    if (is_file($newpath) && !is_writable($newpath)) {
                        $this->directoryScanResults[ ] = $dir.JRDS.$file;
                    }
                }
                $level = explode(JRDS, $newpath);
                if (!strstr($newpath, '.svn')) {
                    if (is_dir($newpath)) {
                        $mod_array[ ] = array('level' => count($level) - 1, 'path' => $newpath, 'name' => end($level), 'kind' => 'dir', 'mod_time' => filemtime($newpath), 'content' => $this->recur_dir($newpath));
                    } else {
                        $mod_array[ ] = array('level' => count($level) - 1, 'path' => $newpath, 'name' => end($level), 'kind' => 'file', 'mod_time' => filemtime($newpath), 'size' => filesize($newpath));
                    }
                }
            }
        }
        closedir($dirlist);

        return $mod_array;
    }

    public function checkUpdateDirectory()
    {
        if (!is_dir($this->updateFolder)) {
            if (!mkdir($this->updateFolder)) {
                echo 'Error, unable to make folder '.$this->updateFolder." automatically therefore cannot store updates downloaded from the update server. Please create the folder manually and ensure that it's writable by the web server";

                return false;
            }
        } else {
            if (!is_writable($this->updateFolder)) {
                return false;
            }
        }
        $this->emptyDir($this->updateFolder);

        return true;
    }

    // http://www.php.net/manual/en/function.unlink.php#79940
    public function emptyDir($dir)
    {
        if (!$dh = @opendir($dir)) {
            return;
        }
        while (false !== ($obj = readdir($dh))) {
            if ($obj == '.' || $obj == '..') {
                continue;
            }
            if (!@unlink($dir.JRDS.$obj)) {
                $this->emptyDir($dir.JRDS.$obj, true);
            }
        }
        closedir($dh);
        if ($dir != $this->updateFolder) {
            @rmdir($dir);
        }
    }

    public function chmod_open()
    {
        $conn_id = ftp_connect($this->ftp_server);
        $login_result = ftp_login($conn_id, $this->ftp_user_name, $this->ftp_user_pass);
        if (!$login_result) {
            echo 'Could not log in using the supplied details '.$this->ftp_user_name.' '.$this->ftp_user_pass;
        }

        return $conn_id;
    }

    public function chmod_file($conn_id, $permissions, $path)
    {
        if (ftp_site($conn_id, 'CHMOD '.$permissions.' '.$this->ftp_root.$path) !== false) {
            return true;
        } else {
            return false;
        }
    }

    // http://www.php.net/manual/en/function.rename.php#61152
    public function dirmv($source, $dest, $overwrite = false, $funcloc = null)
    {
        /*
        if(is_null($funcloc))
            {
            $dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
            $funcloc = '/';
            }
        */
        if (!is_dir($dest.$funcloc)) {
            mkdir($dest.$funcloc);
        } // make subdirectory before subdirectory is copied
        //echo "Opening " . $source . $funcloc."<br/>";
        if ($handle = opendir($source.$funcloc)) { // if the folder exploration is sucsessful, continue
            //echo "Opened ". $source . $funcloc."<br/>";
            while (false !== ($file = readdir($handle))) { // as long as storing the next file to $file is successful, continue
                if ($file != '.' && $file != '..') {
                    $path = $source.$funcloc.$file;
                    $path2 = $dest.$funcloc.$file;

                    if (is_file($path)) {
                        if (!is_file($path2)) {
                            if (!@rename($path, $path2)) {
                                echo '<font color="red">File ('.$path.') could not be moved, likely a permissions problem.</font><br/>';
                            }
                        } elseif ($overwrite) {
                            if (!@unlink($path2)) {
                                echo 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>';
                            } else {
                                if (!@rename($path, $path2)) {
                                    echo '<font color="red">File ('.$path.') could not be moved while overwritting, likely a permissions problem.</font><br/>';
                                } else {
                                    $this->movedFileLog[ ] = 'Moved '.$path.'<br/> to '.$path2.'<br/>';
                                }
                            }
                        } else {
                            echo 'Not allowed to overwrite'.$path2.'<br/>';
                        }
                    } elseif (is_dir($path)) {
                        $this->dirmv($source, $dest, $overwrite, $funcloc.$file.JRDS); //recurse!
                        rmdir($path);
                    }
                }
            }
            closedir($handle);
        }
        //echo "Finished upgrade <br/>";
    } // end of dirmv()

    public function chmod_close($conn_id)
    {
        ftp_close($conn_id);
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
