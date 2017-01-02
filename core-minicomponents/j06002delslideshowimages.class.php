<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002delslideshowimages
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!$thisJRUser->userIsManager) {
            return;
        }

        $success = true;
        $defaultProperty = getDefaultProperty();
        $imageNameArray = $_POST[ 'idarray' ];
        $mrp = JOMRES_IMAGELOCATION_ABSPATH.$defaultProperty.JRDS;
        foreach ($imageNameArray as $imageName) {
            $filename = explode('.', $imageName);
            $numExtensions = count($filename) - 1;
            $fileExt = strtoupper($filename[ $numExtensions ]);
            if (!$fileExt == 'JPG' || !$fileExt == 'JPEG') {
                trigger_error('Error, User tried to delete image '.$imageName, E_USER_ERROR);
            }

            $full_filename = '';
            for ($i = 0; $i < count($filename) - 1; ++$i) {
                $full_filename .= filter_var($filename[ $i ], FILTER_SANITIZE_SPECIAL_CHARS);
            }

            if (file_exists($mrp.$imageName)) {
                if (is_writable($mrp.$imageName)) {
                    if (!unlink($mrp.$imageName)) {
                        $success = false;
                        error_logging('Error, unable to delete '.$mrp.$imageName);
                    } else {
                        // Now we'll delete the various other thumbnails/gallery files. We'll not put a ton of writability checks here, it'd be unreadable, slower and we've already confirmed that the file above is writable, so these SHOULD also be writable.

                        $filename_large = $full_filename.'.'.$filename[ $numExtensions ];
                        $filename_small = $full_filename.'_thumbnail.'.$filename[ $numExtensions ];
                        $filename_med = $full_filename.'_thumbnail_med.'.$filename[ $numExtensions ];

                        if (file_exists($mrp.$filename_med)) {
                            unlink($mrp.$filename_med);
                        }
                        if (file_exists($mrp.$filename_small)) {
                            unlink($mrp.$filename_small);
                        }

                        $joomla_dir = $mrp.'joomla'.JRDS;
                        if (file_exists($joomla_dir.'large'.JRDS.$filename_large)) {
                            unlink($joomla_dir.'large'.JRDS.$filename_large);
                        }
                        if (file_exists($joomla_dir.'medium'.JRDS.$filename_med)) {
                            unlink($joomla_dir.'medium'.JRDS.$filename_med);
                        }
                        if (file_exists($joomla_dir.'small'.JRDS.$filename_small)) {
                            unlink($joomla_dir.'small'.JRDS.$filename_small);
                        }

                        $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
                        $jomres_messaging = new jomres_messages();
                        $jomres_messaging->set_message($imageName.' '.jr_gettext('_JOMRES_FILE_DELETED', '_JOMRES_FILE_DELETED', false));
                    }
                }
            } else {
                error_logging('Error, file does not exist '.$mrp.$imageName);

                return false;
            }
        }

        if ($success) {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=bUploadForm'));
        }
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_FILE_DELETED', '_JOMRES_FILE_DELETED');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
