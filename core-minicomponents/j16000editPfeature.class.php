<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
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

class j16000editPfeature
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$output = array();
		$rows = array();
		$pageoutput = array();
		$all_ptype_rows = array();
		
		$jomres_property_features = jomres_singleton_abstract::getInstance('jomres_property_features');
		
		$id = (int)jomresGetParam($_REQUEST, 'id', 0);
 
		if ($id > 0) {
			$jomres_property_features->get_property_feature($id);
		}
		
		$jomres_property_features_categories = jomres_singleton_abstract::getInstance('jomres_property_features_categories');
		$jomres_property_features_categories->get_all_property_features_categories();
		
		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
		$jomres_property_types->get_all_property_types();
		
		$output[ 'HPROPERTY_TYPE' ] = jr_gettext('_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false);
		
		$output[ 'PROPERTYFEATUREUID' ] = $id;
		$output[ 'FEATURE_ABBV' ] = $jomres_property_features->abbv;
		$output[ 'FEATURE_DESCRIPTION' ] = $jomres_property_features->desc;
		
		$image = $jomres_property_features->image;
		$cat_id = $jomres_property_features->cat_id;

		//property types list
		foreach ($jomres_property_types->property_types as $p) {
			$r = array();
			
			$r[ 'propertytype_id' ] = $p['id'];
			$r[ 'propertytype_desc' ] = $p['ptype'];
			$r[ 'checked' ] = '';
			
			if (in_array($p['id'], $jomres_property_features->ptype_xref)) {
				$r[ 'checked' ] = ' checked ';
			}
			
			$all_ptype_rows[] = $r;
		}

		//feature images
		$images = $jomres_property_features->get_all_property_features_images();

		foreach ($images as $i) {
			$i[ 'ISCHECKED' ] = '';
			
			if ($i[ 'IMAGE_FILENAME' ] == $image) {
				$i[ 'ISCHECKED' ] = 'checked';
			}
			
			$rows[] = $i;
		}
	
		$output[ 'HLINKTEXT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', false);
		$output[ 'HFEATUREABBV' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', false);
		$output[ 'HFEATUREDESCRIPTION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', false);
		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', false);
		$output[ '_JOMRES_PROPERTY_TYPE_ASSIGNMENT' ] = jr_gettext('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', false);
		$output[ 'HIMAGE' ] = jr_gettext('_JOMRES_A_ICON', '_JOMRES_A_ICON', false);

		$options = array();
		$options[] = jomresHTML::makeOption(0, '');
		foreach ($jomres_property_features_categories->property_features_categories as $c) {
			$options[] = jomresHTML::makeOption($c['id'], $c['title']);
		}
		$output[ 'CATEGORY' ] = jomresHTML::selectList($options, 'cat_id', 'class="inputbox" size="1"', 'value', 'text', $cat_id);
		$output[ 'HCATEGORY' ] = jr_gettext('_JOMRES_HCATEGORY', '_JOMRES_HCATEGORY');
		
		$output[ 'INCLUDEINFILTERS' ] = jr_gettext('INCLUDEINFILTERS', 'INCLUDEINFILTERS', false);
		$output[ 'INCLUDEINFILTERS_DESC' ] = jr_gettext('INCLUDEINFILTERS_DESC', 'INCLUDEINFILTERS_DESC', false);
		
		$yesno = array();
		$yesno[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
		$yesno[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

		$output[ 'FILTERS' ] = jomresHTML::selectList($yesno, 'include_in_filters', 'class="inputbox" size="1"', 'value', 'text', $jomres_property_features->include_in_filters);
		
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
		$link = JOMRES_SITEPAGE_URL_ADMIN;

		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=listPfeatures', '');
		$jrtb .= $jrtbar->customToolbarItem('savePfeature', $link, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'savePfeature', $image);
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput = array();
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_property_feature.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('all_ptype_rows', $all_ptype_rows);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
