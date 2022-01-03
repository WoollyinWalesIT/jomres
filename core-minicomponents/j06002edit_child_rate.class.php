<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
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

class j06002edit_child_rate
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


		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC' ]		= jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM' ]	= jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO' ]		= jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL' ]		= jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE' ]		= jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC' ]	= jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', false);


		$output[ 'ID' ] = $id ;

		jr_import('jomres_child_rates');
		$jomres_child_rates = new jomres_child_rates($property_uid);

		if ( $id > 0 ) {
			$age_from_selected = $jomres_child_rates->child_rates[$id]['age_from'];
			$age_to_selected = $jomres_child_rates->child_rates[$id]['age_to'];
		} else {
			$age_from_selected = 0;
			$age_to_selected = 0;
		}

		$output['PRICE'] = '';
		if ( isset($jomres_child_rates->child_rates[$id])) {
			$output['PRICE'] = $jomres_child_rates->child_rates[$id]['price'];
		}

		$output[ 'PAGE_TITLE' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'JOMRES_POLICIES_CHILDREN_CHILD_RATES', false);

		$output['AGE_FROM'] = jomresHTML::integerSelectList(0, 17, 1, 'age_from', 'class="inputbox" size="1"', (int)  $age_from_selected );
		$output['AGE_TO'] = jomresHTML::integerSelectList(0, 17, 1, 'age_to', 'class="inputbox" size="1"', (int) $age_to_selected );

		$output['model'] = $jomres_child_rates->build_rate_model_dropdown( $id );

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
		$link = JOMRES_SITEPAGE_URL;
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL.'&task=child_policies', '');
		$jrtb .= $jrtbar->customToolbarItem('save_child_rate', $link, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'save_child_rate', $image);
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_child_rate.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
		
	}


	public function getRetVals()
	{
		return null;
	}
}
