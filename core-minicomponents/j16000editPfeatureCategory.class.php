<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
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

class j16000editPfeatureCategory
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
		$pageoutput = array();
		
		$jomres_property_features_categories = jomres_singleton_abstract::getInstance('jomres_property_features_categories');
		
		$id = (int)jomresGetParam($_REQUEST, 'id', 0);

		if ($id > 0) {
			$jomres_property_features_categories->get_property_features_category($id);
		}
		
		$output[ 'ID' ] = $jomres_property_features_categories->id;
		$output[ 'TITLE' ] = $jomres_property_features_categories->title;

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', false);
		$output[ 'HTITLE' ] = jr_gettext('_JRPORTAL_CRATE_TITLE', '_JRPORTAL_CRATE_TITLE', false);

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
		$link = JOMRES_SITEPAGE_URL_ADMIN;

		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=listPfeaturesCategories', '');
		$jrtb .= $jrtbar->customToolbarItem('savePfeatureCategory', $link, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'savePfeatureCategory', $image);
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_property_feature_category.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
