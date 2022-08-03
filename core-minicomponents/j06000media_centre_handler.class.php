<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
 *
 * @copyright	2005-2022 Vince Wooll
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

/* 
admin trigger points
$arr [ 'resource_type_gathering_trigger'] = '11010';
$arr [ 'resource_id_gathering_trigger'] = '11020';
$arr [ 'post_upload_processing_trigger'] = '11030';
$arr [ 'get_existing_images_trigger'] = '11040';
$arr [ 'post_delete_processing_trigger'] = '11050';
$arr [ 'allowed_file_types'] = '(jpe?g|png)';	
frontend trigger points
$arr [ 'resource_type_gathering_trigger'] = '03379';
$arr [ 'resource_id_gathering_trigger'] = '03381';
$arr [ 'post_upload_processing_trigger'] = '03382';
$arr [ 'get_existing_images_trigger'] = '03383';
$arr [ 'post_delete_processing_trigger'] = '03384';
$arr [ 'allowed_file_types'] = '(jpe?g|png)'; 
*/

class j06000media_centre_handler
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

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager) {
			return;
		}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
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

		$resource_type = jomresGetParam($_REQUEST, 'resource_type', '');
		$resource_id = jomresGetParam($_REQUEST, 'resource_id', '0');
		
		if ($resource_id == 'undefined' ) {
			$resource_id = 0;
		}
		
		//if resource type is empty, return
		if ($resource_type == '')
			return;
		
		//if resource id is blank, make it 0
		if ($resource_id == '')
			$resource_id = '0';

		// A security check to ensure that the user's not trying to pass a resource type that we can't handle
		if (!array_key_exists($resource_type, $resource_types)) { // The resource type isn't recognised, let's get the hell outta Dodge.
			return;
		}
		
		//set property uid
		if (jomres_cmsspecific_areweinadminarea()) {
			$property_uid = 0;
		} else {
			$property_uid = getDefaultProperty();
		}
		
		$resource_id_required = $resource_types [$resource_type] [ 'resource_id_required' ];
		
		//set image upload paths
		if ($resource_id_required) {
			$abs_path = $resource_types [$resource_type] ['upload_root_abs_path'].$resource_type.JRDS.$resource_id.JRDS;
			$rel_path = $resource_types [$resource_type] ['upload_root_rel_path'].$resource_type.'/'.$resource_id.'/';
		} else {
			$abs_path = $resource_types [$resource_type] ['upload_root_abs_path'].$resource_type.JRDS;
			$rel_path = $resource_types [$resource_type] ['upload_root_rel_path'].$resource_type.'/';
		}
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');

		if (isset($_GET['delete']) && $_GET['delete'] == '1') {
			$file_name = (string) jomresGetParam($_REQUEST, 'file', '');
			if ($file_name == '') {
				return;
			}
			
			//delete image from disk and db
			if (!$jomres_media_centre_images->delete_image($property_uid, $resource_type, $resource_id, $file_name, $abs_path, $resource_id_required)) {
				$response = array('message' => "Boo, we couldn't delete it. I'm going to have a little cry in the corner now.", 'success' => '0');
			} else {
				$response = array('message' => "Yay, we'll deleted this sukka", 'success' => '1');
			}
			
			//post_delete_processing_trigger, optional for post deletion
			if (jomres_cmsspecific_areweinadminarea()) {
				$MiniComponents->triggerEvent('11050');
			} else {
				$MiniComponents->triggerEvent('03384');
			}
			
			if ($property_uid > 0 ) {
				$webhook_notification								= new stdClass();
				$webhook_notification->webhook_event				= 'image_deleted';
				$webhook_notification->webhook_event_description	= 'Logs when images are deleted.';
				$webhook_notification->webhook_event_plugin			= 'core';
				$webhook_notification->data							= new stdClass();
				$webhook_notification->data->property_uid			= $property_uid;
				$webhook_notification->data->deleted_image			= $file_name;
				$webhook_notification->data->resource_type			= $resource_type;

				add_webhook_notification($webhook_notification);
			}

			
			echo json_encode($response);
			return;
		} else {
			if (!empty($_FILES)) {
				jr_import('jomres_media_centre_uploader');

				if (!jomres_cmsspecific_areweinadminarea()) {
					$script_url = JOMRES_SITEPAGE_URL_AJAX.'&task=media_centre_handler&delete=1&resource_type='.$resource_type.'&resource_id='.$resource_id;
				} else {
					$script_url = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=media_centre_handler&delete=1&resource_type='.$resource_type.'&resource_id='.$resource_id;
				}

				$upload_handler = new UploadHandler(array(
					//class params
					'accept_file_types' => '/\.(jpe?g|png)$/i',
					'script_url' => $script_url,
					'upload_dir' => $abs_path,
					'upload_url' => $rel_path,
					'image_versions' => array(
						// The empty image version key defines options for the original/large image:
						'' => array(
							'max_width' => (int)$jrConfig[ 'maxwidth' ],
							'max_height' => (int)$jrConfig[ 'maxwidth' ]
						),
						'medium' => array(
							'max_width' => (int)$jrConfig[ 'thumbnail_property_header_max_width' ],
							'max_height' => (int)$jrConfig[ 'thumbnail_property_header_max_height' ]
						),
						'thumbnail' => array(
							'max_width' => (int)$jrConfig[ 'thumbnail_property_list_max_width' ],
							'max_height' => (int)$jrConfig[ 'thumbnail_property_list_max_height' ]
						)
					),
					//jomres specific params, required for post upload processing
					'property_uid' => $property_uid,
					'resource_type' => $resource_type,
					'resource_id' => $resource_id,
					'resource_id_required' => $resource_id_required
					));

				//post_upload_processing_trigger, optional for post processing
				if (jomres_cmsspecific_areweinadminarea()) {
					$MiniComponents->triggerEvent('11030');
				} else {
					$MiniComponents->triggerEvent('03382');
				}
				
				if ($property_uid > 0 ) {
					$webhook_notification								= new stdClass();
					$webhook_notification->webhook_event				= 'image_added';
					$webhook_notification->webhook_event_description	= 'Logs when images are added.';
					$webhook_notification->webhook_event_plugin			= 'core';
					$webhook_notification->data							= new stdClass();
					$webhook_notification->data->property_uid			= $property_uid;
					$webhook_notification->data->added_image			= $upload_handler->response['files'][0]->name;
					$webhook_notification->data->resource_type			= $resource_type;

					add_webhook_notification($webhook_notification);
				}
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
