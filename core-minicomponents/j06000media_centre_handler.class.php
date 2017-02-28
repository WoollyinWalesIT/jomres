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

/* 
admin trigger points
$arr [ 'resource_type_gathering_trigger'] = '11010';
$arr [ 'resource_id_gathering_trigger'] = '11020';
$arr [ 'post_upload_processing_trigger'] = '11030';
$arr [ 'get_existing_images_trigger'] = '11040';
$arr [ 'allowed_file_types'] = '(jpe?g|png)';	
frontend trigger points
$arr [ 'resource_type_gathering_trigger'] = '03379';
$arr [ 'resource_id_gathering_trigger'] = '03381';
$arr [ 'post_upload_processing_trigger'] = '03382';
$arr [ 'get_existing_images_trigger'] = '03383';
$arr [ 'allowed_file_types'] = '(jpe?g|png)'; 
*/

class j06000media_centre_handler
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!$thisJRUser->userIsManager) {
            return;
        }
		
		//resource_type_gathering_trigger
		if (jomres_cmsspecific_areweinadminarea()) {
			$result = $MiniComponents->triggerEvent('11010');
			$resource_types = $MiniComponents->miniComponentData[ '11010' ];
		} else {
			$result = $MiniComponents->triggerEvent('03379');
			$resource_types = $MiniComponents->miniComponentData[ '03379' ];
		}

		//no resource types..exit
        if (empty($resource_types)) { // Do nowt.
            return;
        }
		
        $acceptable_resouce_types = array();
        $all_types = array();
        foreach ($resource_types as $type) {
            if (isset($type['resource_type'])) {
                $all_types[ $type['resource_type'] ] = $type;
                $acceptable_resouce_types[] = $type['resource_type'];
            }
        }

        $resource_type = jomresGetParam($_REQUEST, 'resource_type', '');
        $resource_id = jomresGetParam($_REQUEST, 'resource_id', '0');

		//if resource type is empty, return
		if ($resource_type == '')
			return;
		
		//if resource id is blank, make it 0
		if ($resource_id == '')
			$resource_id = '0';

		// A security check to ensure that the user's not trying to pass a resource type that we can't handle
        if (!in_array($resource_type, $acceptable_resouce_types)) { // The resource type isn't recognised, let's get the hell outta Dodge.
            return;
        }
		
		$id_required = $all_types [$resource_type] [ 'resource_id_required' ];
		
		//set image upload paths
		if ($id_required) {
			$this->abs_path = $all_types [$resource_type] ['upload_root_abs_path'].$resource_type.JRDS.$resource_id.JRDS;
			$this->rel_path = $all_types [$resource_type] ['upload_root_rel_path'].$resource_type.'/'.$resource_id.'/';
		} else {
			$this->abs_path = $all_types [$resource_type] ['upload_root_abs_path'].$resource_type.JRDS;
			$this->rel_path = $all_types [$resource_type] ['upload_root_rel_path'].$resource_type.'/';
		}

        if (isset($_GET['delete']) && $_GET['delete'] == '1') {
            $file_name = (string) jomresGetParam($_REQUEST, 'filename', '');
            if ($file_name == '') {
                return;
            }
            $response = $this->delete_images($file_name);

            echo json_encode($response);
			
			//post_upload_processing_trigger, optional for post processing
			if (jomres_cmsspecific_areweinadminarea()) {
				$MiniComponents->triggerEvent('11030');
			} else {
				$MiniComponents->triggerEvent('03382');
			}
        } else {
            if (count($_FILES) > 0) {
				jr_import('jomres_media_centre_uploader');
                $upload_handler = new UploadHandler(array(
                    'accept_file_types' => '/\.(jpe?g|png)$/i',
                    'upload_dir' => $this->abs_path,
                    'upload_url' => $this->rel_path,
                    ));
                
				//post_upload_processing_trigger, optional for post processing
				if (jomres_cmsspecific_areweinadminarea()) {
					$MiniComponents->triggerEvent('11030');
				} else {
					$MiniComponents->triggerEvent('03382');
				}
            }
        }
    }

    public function delete_images($file_name)
    {
        $passed = true;
        if (file_exists($this->abs_path.$file_name)) {
            if (!unlink($this->abs_path.$file_name)) {
                error_logging("Error, media centre couldn't delete ".$this->abs_path.$file_name);
                $passed = false;
            }
        }
        if (file_exists($this->abs_path.'medium'.JRDS.$file_name)) {
            if (!unlink($this->abs_path.'medium'.JRDS.$file_name)) {
                error_logging("Error, media centre couldn't delete ".$this->abs_path.'medium'.JRDS.$file_name);
                $passed = false;
            }
        }
        if (file_exists($this->abs_path.'thumbnail'.JRDS.$file_name)) {
            if (!unlink($this->abs_path.'thumbnail'.JRDS.$file_name)) {
                error_logging("Error, media centre couldn't delete ".$this->abs_path.'thumbnail'.JRDS.$file_name);
                $passed = false;
            }
        }

        if (file_exists($this->abs_path.'gif'.JRDS.'small_thumb.gif')) {
            if (!unlink($this->abs_path.'gif'.JRDS.'small_thumb.gif')) {
                error_logging("Error, media centre couldn't delete ".$this->abs_path.'gif'.JRDS.'small_thumb.gif');
                $passed = false;
            }
        }

        if (file_exists($this->abs_path.'gif'.JRDS.'medium_thumb.gif')) {
            if (!unlink($this->abs_path.'gif'.JRDS.'medium_thumb.gif')) {
                error_logging("Error, media centre couldn't delete ".$this->abs_path.'gif'.JRDS.'medium_thumb.gif');
                $passed = false;
            }
        }

        if (file_exists($this->abs_path.'gif'.JRDS.'slideshow_lib.php')) {
            if (!unlink($this->abs_path.'gif'.JRDS.'slideshow_lib.php')) {
                error_logging("Error, media centre couldn't delete ".$this->abs_path.'gif'.JRDS.'slideshow_lib.php');
                $passed = false;
            }
        }

        if ($passed) {
            $response = array('message' => "Yay, we'll deleted this sukka", 'success' => '1');
        } else {
            $response = array('message' => "Boo, we couldn't delete it. I'm going to have a little cry in the corner now.", 'success' => '0');
        }

        return $response;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
