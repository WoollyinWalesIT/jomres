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

class j11040features_images
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        // Let's the appropriate upload context details
        $MiniComponents->triggerEvent('07100');
        $upload_context = get_showtime('upload_context');
        //var_dump($upload_context);exit;
        $resource_type = jomresGetParam($_REQUEST, 'resource_type', '');

        $files = scandir_getfiles($upload_context['upload_root_abs_path'].$resource_type.JRDS);
        $this->ret_vals = array();
        if (count($files) > 0) {
            foreach ($files as $file) {
                $large = $upload_context['upload_root_rel_path'].$resource_type.'/'.$file;
                $medium = $upload_context['upload_root_rel_path'].$resource_type.'/'.$file;
                $thumbnail = $upload_context['upload_root_rel_path'].$resource_type.'/'.$file;
                if (file_exists($upload_context['upload_root_abs_path'].$resource_type.JRDS.'medium'.JRDS.$file)) {
                    $medium = $upload_context['upload_root_rel_path'].$resource_type.'/medium/'.$file;
                }
                if (file_exists($upload_context['upload_root_abs_path'].$resource_type.JRDS.'thumbnail'.JRDS.$file)) {
                    $thumbnail = $upload_context['upload_root_rel_path'].$resource_type.'/thumbnail/'.$file;
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
