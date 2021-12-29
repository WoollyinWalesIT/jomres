<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
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

class j06000show_host_properties
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
				'task' => 'show_host_properties',
				'info' => '_JOMRES_SHORTCODES_06000VIEW_AGENT',
				'arguments' => array(
					array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
					array(
						'argument' => 'id',
						'arg_info' => '_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID',
						'arg_example' => '1',
						),
					),
				);

			return;
		}

		$output = array();
		$this->retVals = '';


		if (isset($componentArgs[ 'manager_id' ])) {
			$manager_id = (int)$componentArgs[ 'manager_id' ];
		} else {
			$manager_id = (int)jomresGetParam($_REQUEST, 'manager_id', 0);
		}

		if ($manager_id == 0 ) {
			return ;
		}
		
		$query = 'SELECT manager_uid , access_level  FROM #__jomres_managers WHERE userid  = '.(int) $manager_id;
		$result = doSelectSql($query, 2);
		if (empty($result)) { // this id doesn't correspond to a manager in the system, progress no further
			return;
		}

		if ($result['access_level'] == 90 ) { // We don't show super manager properties because there can be thousands of them, progress no further
			return;
		}

		if (isset($_REQUEST[ 'output_now' ])) {
			$output_now = (bool) jomresGetParam($_REQUEST, 'output_now', 1);
		} elseif (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool)$componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}
		
		$property_manager_xref = get_showtime('property_manager_xref');
		if (is_null($property_manager_xref)) {
			$property_manager_xref = build_property_manager_xref_array();
		}
		
		
		$property_uids = array();
		foreach ($property_manager_xref as $property_id => $m_id) {
			if ($m_id == $manager_id) {
				$property_uids[ ] = $property_id;
			}
		}

		if (empty($property_uids)) {
			return;
		}
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$images = $jomres_media_centre_images->get_images_multi($property_uids, array('property'));
		
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data_multi($property_uids);

		$rows = array();
		foreach ( $property_uids as $property_uid ) {

			if (array_key_exists ($property_uid , $current_property_details->multi_query_result)  ) {
				$property = $current_property_details->multi_query_result[$property_uid];
				if (  $property['published'] == 1 ) {
					$r = array();
					if (isset($images[$property_uid]["property"][0][0]["small"])) {
						$r['IMAGE'] =$images[$property_uid]["property"][0][0]["small"];
					} else {
						$r['IMAGE'] = $images["noimage-small"];
					}
					
					$r['PROPERTY_NAME'] = $property['property_name'];
					$r['META_DESCRIPTION'] = $property['metadescription'];
					$r['VIEW_PROPERTY_LINK'] = get_property_details_url($property_uid);
					$rows[] = $r;
				}
			}
		}
		
		
		$output[ 'GUEST_PROFILE_MY_PROPERTIES' ] = jr_gettext('GUEST_PROFILE_MY_PROPERTIES', 'GUEST_PROFILE_MY_PROPERTIES', false, false);
		if (!empty($rows)) {
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('simple_property_list.html');
			$this->retVals = $tmpl->getParsedTemplate();
		}

			
		if ($output_now) {
			echo $this->retVals;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
