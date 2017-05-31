<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j11040pfeatures
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		$this->ret_vals = array();
		
        $resource_type = jomresGetParam($_REQUEST, 'resource_type', '');

        $files = scandir_getfiles(JOMRES_IMAGELOCATION_ABSPATH.$resource_type.JRDS);

		if (!empty($files)) {
            foreach ($files as $file) {
                $large = JOMRES_IMAGELOCATION_RELPATH.$resource_type.'/'.$file;
                $medium = JOMRES_IMAGELOCATION_RELPATH.$resource_type.'/'.$file;
                $thumbnail = JOMRES_IMAGELOCATION_RELPATH.$resource_type.'/'.$file;
                if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$resource_type.JRDS.'medium'.JRDS.$file)) {
                    $medium = JOMRES_IMAGELOCATION_RELPATH.$resource_type.'/medium/'.$file;
                }
                if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$resource_type.JRDS.'thumbnail'.JRDS.$file)) {
                    $thumbnail = JOMRES_IMAGELOCATION_RELPATH.$resource_type.'/thumbnail/'.$file;
                }

                $this->ret_vals[] = array(
                    'large' => $large,
                    'medium' => $medium,
                    'small' => $thumbnail,
                    );
            }
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
