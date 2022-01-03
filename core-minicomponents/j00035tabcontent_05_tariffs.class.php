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
	 * Used by j06000viewproperty.class.php to build tabs in the property details page. Builds tariffs template output.
	 * 
	 */

class j00035tabcontent_05_tariffs
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

			return;
		}
		$this->retVals = '';

		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig = getPropertySpecificSettings($property_uid);

		$tariffs_list = $MiniComponents->specificEvent('06000', 'show_property_tariffs', array('output_now' => false, 'property_uid' => $property_uid));
		$tariffs_list_title = jr_gettext('_JOMRES_FRONT_TARIFFS', '_JOMRES_FRONT_TARIFFS', false);

		if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
			if ($mrConfig[ 'showTariffsInline' ] == '1') {
				$anchor = jomres_generate_tab_anchor($tariffs_list_title);
				$tab = array('TAB_ANCHOR' => $anchor, 'TAB_TITLE' => $tariffs_list_title, 'TAB_CONTENT' => $tariffs_list, 'TAB_ID' => 'tour_target_property_details_tariffs');
				$this->retVals = $tab;
			}
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
