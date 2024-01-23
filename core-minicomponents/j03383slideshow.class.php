<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Media centre uses this to find images that already exist for the slideshow image resource
	 *
	 */

class j03383slideshow
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

		$defaultProperty = getDefaultProperty();
		$resource_type = jomresGetParam($_REQUEST, 'resource_type', '');
		$resource_id = jomresGetParam($_REQUEST, 'resource_id', '0');

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_images($defaultProperty);
		if (isset($jomres_media_centre_images->images [$resource_type] [$resource_id])) {
			$this->ret_vals = $jomres_media_centre_images->images [$resource_type] [$resource_id];
		} else {
			$this->ret_vals = array();
		}
	}


	/**
	 * @return array
	 */
	public function getRetVals()
	{
		return $this->ret_vals;
	}
}
