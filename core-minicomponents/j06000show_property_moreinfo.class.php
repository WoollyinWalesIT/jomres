<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.2
 *
 * @copyright	2005-2020 Vince Wooll
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

class j06000show_property_moreinfo
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
			$this->shortcode_data = array(
				'task' => 'show_property_moreinfo',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
					),
				);

			return;
		}
		$output = array();
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

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		$output[ 'HCHECKINTIMES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES');
		$output[ 'HAREAACTIVITIES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES');
		$output[ 'HDRIVINGDIRECTIONS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS');
		$output[ 'HAIRPORTS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS');
		$output[ 'HOTHERTRANSPORT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT');
		$output[ 'HPOLICIESDISCLAIMERS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS');

		jr_import('jomres_markdown');
		$jomres_markdown = new jomres_markdown();
		
		$output[ 'CHECKINTIMES' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_checkin_times));
		if (empty($output[ 'CHECKINTIMES' ])) {
			$output[ 'HCHECKINTIMES' ] = '';
		}

		$output[ 'AREAACTIVITIES' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_area_activities));
		if (empty($output[ 'AREAACTIVITIES' ])) {
			$output[ 'HAREAACTIVITIES' ] = '';
		}

		$output[ 'DRIVINGDIRECTIONS' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_driving_directions));
		if (empty($output[ 'DRIVINGDIRECTIONS' ])) {
			$output[ 'HDRIVINGDIRECTIONS' ] = '';
		}

		$output[ 'AIRPORTS' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_airports));
		if (empty($output[ 'AIRPORTS' ])) {
			$output[ 'HAIRPORTS' ] = '';
		}

		$output[ 'OTHERTRANSPORT' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_othertransport));
		if (empty($output[ 'OTHERTRANSPORT' ])) {
			$output[ 'HOTHERTRANSPORT' ] = '';
		}

		$output[ 'POLICIESDISCLAIMERS' ] = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($current_property_details->property_policies_disclaimers));
		if (empty($output[ 'POLICIESDISCLAIMERS' ])) {
			$output[ 'HPOLICIESDISCLAIMERS' ] = '';
		}

		$pageoutput = array();
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('tabcontent_01_more_info.html');
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
