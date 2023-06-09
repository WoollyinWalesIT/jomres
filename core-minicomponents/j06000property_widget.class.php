<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
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
			$this->shortcode_data = array(
				'task' => 'property_widget',
				'info' => '_JOMRES_SHORTCODES_06000PROPERTY_WIDGET',
				'arguments' => array(
					array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_PROPERTY_UID',
						'arg_example' => '1',
					),
					array(
						'argument' => 'alt_template_name',
						'arg_info' => '_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_ALT_TEMPLATE_NAME',
						'arg_example' => 'basic_module_output_verbose',
					),
				),
			);
			return;
		}

		$this->retVals = '';

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}

		if ($property_uid == 0) {
			$all_published_properties = get_showtime('published_properties_in_system');
			$property_uid = array_rand( array_flip($all_published_properties) );
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
