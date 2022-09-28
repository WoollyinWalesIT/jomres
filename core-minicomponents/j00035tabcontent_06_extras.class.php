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
	 * Used by j06000viewproperty.class.php to build tabs in the property details page. Builds Optional extras template output.
	 *
	 */

class j00035tabcontent_06_extras
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

		if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
			if ($mrConfig[ 'showExtras' ] == '1') {
				$componentArgs[ 'output_now' ] = false;

				$tabTitle = jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE', '_JOMRES_COM_MR_EXTRA_TITLE', false);

				$anchor = jomres_generate_tab_anchor($tabTitle);

				$tab = array('TAB_ANCHOR' => $anchor, 'TAB_TITLE' => $tabTitle, 'TAB_CONTENT' => $MiniComponents->specificEvent('06000', 'show_property_extras', $componentArgs), 'TAB_ID' => 'tour_target_rooms_list');
				$this->retVals = $tab;
			}
		}
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return $this->retVals;
	}
}
