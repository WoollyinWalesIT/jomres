<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
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

class j06000property_widget
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
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$this->retVals = '';

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}

		if ($property_uid == 0) {
			return;
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		if ($property_uid > 0) {
			$alt_template_name = '';
			$alt_template_path = '';
			if ( isset($_REQUEST['alt_template_name']) && $_REQUEST['alt_template_name'] != '') {
				$temp_template = jomresGetParam($_REQUEST, 'alt_template_name', '');
				if (file_exists(get_override_directory().JRDS.$temp_template.'.html')) {
					$alt_template_name = $temp_template.'.html';
					$alt_template_path = get_override_directory();
				}
			}

			$result = get_property_module_data( [$property_uid], $alt_template_path , $alt_template_name);

			if ($output_now) {
				echo $result[$property_uid]['template'];
			}
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
