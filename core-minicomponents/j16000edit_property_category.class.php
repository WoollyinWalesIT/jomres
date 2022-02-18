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

class j16000edit_property_category
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
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		$jomres_property_categories = jomres_singleton_abstract::getInstance('jomres_property_categories');
		
		$id = (int)jomresGetParam($_REQUEST, 'id', 0);

		if ($id > 0) {
			$jomres_property_categories->get_property_category($id);
		}
		
		$output[ 'ID' ] = $jomres_property_categories->id;
		$output[ 'TITLE' ] = $jomres_property_categories->title;
		
		if ($jrConfig['allowHTMLeditor'] == "1")
			{
			$width="95%";
			$height="350";
			$col="20";
			$row="10";
			$output['DESCRIPTION']=editorAreaText( 'description', $jomres_property_categories->description, 'description', $width, $height, $col, $row );
			}
		else
			$output['DESCRIPTION']='<textarea class="inputbox" cols="60" rows="6" name="description">'.$jomres_property_categories->description.'</textarea>';

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', false);
		$output[ 'HTITLE' ] = jr_gettext('_JRPORTAL_CRATE_TITLE', '_JRPORTAL_CRATE_TITLE', false);
		$output[ 'HDESCRIPTION' ] = jr_gettext('_JOMRES_COM_MR_EXTRA_DESC', '_JOMRES_COM_MR_EXTRA_DESC', false);

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
		$link = JOMRES_SITEPAGE_URL_ADMIN;

		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_categories', '');
		$jrtb .= $jrtbar->customToolbarItem('save_property_category', $link, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'save_property_category', $image);
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_property_category.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
