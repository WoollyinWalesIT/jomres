<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
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

class j06002edit_occupancy_level
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

		$mrConfig = getPropertySpecificSettings($property_uid);

		$id = (int)$_REQUEST['id'];


		$output[ 'JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS' ]		= jr_gettext('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', false);
		$output[ 'JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN' ]	= jr_gettext('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', false);
		$output[ 'JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY' ]	= jr_gettext('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', false);

		$output[ 'ID' ] = $id ;

		jr_import('jomres_occupancy_levels');
		$jomres_occupancy_levels = new jomres_occupancy_levels($property_uid);



		if ($mrConfig['accommodates'] ==0) { // The occupancy levels haven't been properly set yet, let's do that now
			$first_key=array_key_first($jomres_occupancy_levels->occupancy_levels);
			$mrConfig['accommodates'] = $jomres_occupancy_levels->occupancy_levels[$first_key]['max_adults'];
		}

		$output[ 'PAGE_TITLE' ] = jr_gettext('JOMRES_OCCUPANCY_LEVELS_EDIT', 'JOMRES_OCCUPANCY_LEVELS_EDIT', false);

		$output['ROOM_TYPE_NAME'] = $jomres_occupancy_levels->occupancy_levels[$id]['room_type_name'];

		$output['MAX_ADULTS'] = jomresHTML::integerSelectList(0, 100, 1, 'max_adults', 'class="inputbox" size="1"', (int)  $jomres_occupancy_levels->occupancy_levels[$id]['max_adults'] );
		$output['MAX_CHILDREN'] = jomresHTML::integerSelectList(0, 100, 1, 'max_children', 'class="inputbox" size="1"', (int) $jomres_occupancy_levels->occupancy_levels[$id]['max_children'] );


		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
		$link = JOMRES_SITEPAGE_URL;
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL.'&task=occupancy_levels', '');
		$jrtb .= $jrtbar->customToolbarItem('save_occupancy_level', $link, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'save_occupancy_level', $image);
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_occupancy_level.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
		
	}


	public function getRetVals()
	{
		return null;
	}
}
