<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
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

class j06002list_occupancy_levels
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
		
		$property_uid = getDefaultProperty();

		jr_import('jomres_occupancy_levels');
		$jomres_occupancy_levels = new jomres_occupancy_levels($property_uid);

		$output[ 'JOMRES_OCCUPANCY_LEVELS_TITLE' ] = jr_gettext('JOMRES_OCCUPANCY_LEVELS_TITLE', 'JOMRES_OCCUPANCY_LEVELS_TITLE', false);

		$output[ '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', false);
		$output[ 'JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS' ] = jr_gettext('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', false);
		$output[ 'JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN' ] = jr_gettext('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', false);
		$output[ 'JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY' ] = jr_gettext('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', false);
		$output[ 'JOMRES_OCCUPANCY_LEVELS_INFO' ] = jr_gettext('JOMRES_OCCUPANCY_LEVELS_INFO', 'JOMRES_OCCUPANCY_LEVELS_INFO', false);

		$rows = array();
		if (!empty($jomres_occupancy_levels->occupancy_levels)) {
			foreach ($jomres_occupancy_levels->occupancy_levels as $id => $occupancy_level) {
				$r = array();

				$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
				$toolbar->newToolbar();
				$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=edit_occupancy_level&id='.(int) $occupancy_level['room_type_id']), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
				//$toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=delete_child_rate&id='.(int) $id ), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));

				$r['EDITLINK'] = $toolbar->getToolbar();

				$r['ROOM_TYPE_NAME']	= $occupancy_level['room_type_name'];
				$r['MAX_ADULTS'] = $occupancy_level['max_adults'];
				$r['MAX_CHILDREN'] = $occupancy_level['max_children'];
				$r['MAX_OCCUPANCY'] = $occupancy_level['max_occupancy'];

				$rows[] = $r;
			}
		}

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('occupancy_levels.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
