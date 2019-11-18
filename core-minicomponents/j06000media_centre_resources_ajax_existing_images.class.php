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

class j06000media_centre_resources_ajax_existing_images
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

		$resource_type = jomresGetParam($_REQUEST, 'resource_type', '');
		$resource_id = jomresGetParam($_REQUEST, 'resource_id', '0');
		
		//if resource type is empty, return
		if ($resource_type == '')
			return;
		
		//get_existing_images_trigger
		if (jomres_cmsspecific_areweinadminarea()) {
			$images = $MiniComponents->specificEvent('11040', $resource_type);
		} else {
			$images = $MiniComponents->specificEvent('03383', $resource_type);
		}

		if (!jomres_cmsspecific_areweinadminarea()) {
			$delete_url = JOMRES_SITEPAGE_URL_AJAX.'&task=media_centre_handler&delete=1&resource_type='.$resource_type.'&resource_id='.$resource_id.'&file=';
		} else {
			$delete_url = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=media_centre_handler&delete=1&resource_type='.$resource_type.'&resource_id='.$resource_id.'&file=';
		}

		$image_result = '';
		if (!empty($images)) {
			foreach ($images as $image) {
				if ( isset( $image['small'] ) ) {
					$image_name = basename($image['small']);

					$image_small_path = str_replace(JOMRES_IMAGELOCATION_RELPATH, '', $image['small']);
					$image_small_path = str_replace('/', JRDS , $image_small_path);

					$output = array();
					$pageoutput = array();

					$output['RANDOM_ID'] = generateJomresRandomString(10);
					$output['FILENAME'] = $image_name;
					$output['IMAGE_REL_LARGE'] = $image['large'];

					//check if the thumbnail exists
					if (file_exists(JOMRES_IMAGELOCATION_RELPATH.$image_small_path)) {
						$output['IMAGE_REL_SMALL'] = $image['small'];
					} else {
						$output['IMAGE_REL_SMALL'] = $image['large'];
					}
					
					$output['_JOMRES_MEDIA_CENTRE_BUTTON_DELETE'] = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', '_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', false);
					$output['_JOMRES_MEDIA_CENTRE_BUTTON_VIEW'] = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', '_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', false);
					
					$output['DELETE_URL'] = $delete_url.$image_name;

					$pageoutput[] = $output;
					$tmpl = new patTemplate();

					if (jomres_cmsspecific_areweinadminarea()) {
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
					} else {
						$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
					}
					$tmpl->readTemplatesFromInput('media_centre_image_list.html');
					$tmpl->addRows('pageoutput', $pageoutput);
					$image_result .= $tmpl->getParsedTemplate();					
				}
			}

			$pageoutput[] = array('IMAGES' => $image_result);
			$tmpl = new patTemplate();
			if (jomres_cmsspecific_areweinadminarea()) {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			} else {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			}
			$tmpl->readTemplatesFromInput('media_centre_image_list_wrapper.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->displayParsedTemplate();
		} else {
			echo ' <img src="'.JOMRES_IMAGES_RELPATH.'noimage.gif'.'" />';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
