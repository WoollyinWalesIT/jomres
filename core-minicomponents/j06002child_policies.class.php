<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
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

class j06002child_policies
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

		jr_import('jomres_child_policies');
		$jomres_child_policies = new jomres_child_policies($property_uid);

		$output[ 'JOMRES_POLICIES_CHILDREN' ] = jr_gettext('JOMRES_POLICIES_CHILDREN', 'JOMRES_POLICIES_CHILDREN', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_AGES_ALLOWED' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', false);
		$output[ 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE' ] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', false);

		$output[ 'CHILD_MIN_AGE' ] = jomresHTML::integerSelectList(0, 17, 1, 'child_min_age', 'class="input-mini form-control"', $jomres_child_policies->child_policies['child_min_age'], '');
		$output[ 'NEW_RATE_URL' ] = JOMRES_SITEPAGE_URL_NOSEF.'&task=edit_child_rate&id=0';

		jr_import('jomres_child_rates');
		$jomres_child_rates = new jomres_child_rates($property_uid);

		$rows = array();
		if (!empty($jomres_child_rates->child_rates)) {
			foreach ($jomres_child_rates->child_rates as $id => $child_rate ) {
				$r = array();

				$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
				$toolbar->newToolbar();
				$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=edit_child_rate&id='.(int) $id ), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
				$toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=delete_child_rate&id='.(int) $id ), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));

				$r['EDITLINK'] = $toolbar->getToolbar();

				$r['AGE_FROM'] = $child_rate['age_from'];
				$r['AGE_TO'] = $child_rate['age_to'];
				$r['PRICE'] = $child_rate['price'];

				if ( $child_rate['model'] == 'per_night' ) {
					$r['MODEL'] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', false);
				} else {
					$r['MODEL'] = jr_gettext('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', false);
				}

				$rows[] = $r;
			}
		}

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
		$link = JOMRES_SITEPAGE_URL;
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL, '');
		$jrtb .= $jrtbar->customToolbarItem('save_child_policies', $link, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'save_child_policies', $image);
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('child_policies.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
		
	}


	public function getRetVals()
	{
		return null;
	}
}
