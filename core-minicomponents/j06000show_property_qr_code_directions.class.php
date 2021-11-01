<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
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

class j06000show_property_qr_code_directions
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
				'task' => 'show_property_qr_code_directions',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID',
						'arg_example' => '1',
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
			return;
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		if (isset($componentArgs['output_now'])) {
			$output_now = $componentArgs['output_now'];
		} else {
			$output_now = true;
		}

		$output = array();
		$url = make_gmap_url_for_property_uid($property_uid);
		$qr_code_map = jomres_make_qr_code(str_replace(' ', '+', $url));
		$output[ 'QR_CODE_MAP' ] = $qr_code_map[ 'relative_path' ];
		$output[ '_JOMRES_SCAN_FOR_DIRECTIONS' ] = jr_gettext('_JOMRES_SCAN_FOR_DIRECTIONS', '_JOMRES_SCAN_FOR_DIRECTIONS', false);

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('show_property_qr_code_directions.html');
		$template = $tmpl->getParsedTemplate();
		if ($output_now) {
			echo $template;
		} else {
			$this->retVals = $template;
		}
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
