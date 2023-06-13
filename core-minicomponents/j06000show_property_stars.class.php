<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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
	 * As Bootstrap evolves the font systems used change and names of icons can change too, so I am going to evolve how we show the property stars and going forward we will have a discreet pair of template files for showing stars. This makes it much easier for designers to change the star used without needing to dig into the code, which is an added benefit. Some designers may want to use updated versions of fontawesome, for example.
	 *
	 * Allowing alternate paths for star templates means that we can offer different colour stars without making significant changes to the code.
	 *
	 */

class j06000show_property_stars
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'show_property_stars',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS',
				'arguments' => array(
					0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
					1 => array(
						'argument' => 'alt_stars_number',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER',
						'arg_example' => '5',
					),
					2 => array(
						'argument' => 'alt_template_stars_path',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH',
						'arg_example' => '/xxx/yyy/',
					),
					3 => array(
						'argument' => 'alt_template_stars_name',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME',
						'arg_example' => 'show_property_star.html',
					)
				)
			);
			return;
		}

		$this->retVals = '';

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}

		if (isset($componentArgs[ 'alt_stars_number' ])) {
			$alt_stars_number = (int)$componentArgs[ 'alt_stars_number' ];
		} else {
			if (isset($_REQUEST['alt_stars_number'])) {
				$alt_stars_number = (int)jomresGetParam($_REQUEST, 'alt_stars_number', 0);
			} else {
				$alt_stars_number = 0;
			}
		}

		$template_path = JOMRES_TEMPLATEPATH_FRONTEND;
		if (isset($componentArgs[ 'alt_template_stars_path' ])) {
			$template_path = (int)$componentArgs[ 'alt_template_stars_path' ];
		}

		if (isset($componentArgs[ 'alt_template_stars_name' ])) {
			$template_name = (int)$componentArgs[ 'alt_template_stars_name' ];
		} else {
			if (isset($_REQUEST['alt_template_stars_name'])) {
				$template_name = (int)jomresGetParam($_REQUEST, 'alt_template_stars_name', 0);
			} else {
				$template_name = 'show_property_star.html';
			}
		}


		if (get_showtime('task') != 'ajax_search') {
			if ($alt_stars_number ==0) {
				if ($property_uid == 0) {
					return;
				} else {
					$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
					$current_property_details->gather_data_multi([$property_uid]);
					$number_of_stars = $current_property_details->multi_query_result[ $property_uid ]['stars'];
				}
			} else {
				$number_of_stars = $alt_stars_number;
			}
		} else {
			$number_of_stars = $componentArgs[ 'alt_stars_number' ];
		}

		$stars = [];
		for ($i=0; $i< $number_of_stars; $i++) {
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', [ ]);
			$tmpl->setRoot($template_path);
			$tmpl->readTemplatesFromInput($template_name);
			$stars[] = array("STAR" => $tmpl->getParsedTemplate()) ;
		}

		$result = '';
		if (!empty($stars)) {
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->addRows('pageoutput', $stars);
			$tmpl->readTemplatesFromInput('show_property_stars.html');
			$result = $tmpl->getParsedTemplate();
		}

		if ($output_now) {
			echo $result;
		} else {
			$this->retVals = $result;
		}
	}

	//this must be included in all mini-components
	public function getRetVals()
	{
		return $this->retVals;
	}
}
