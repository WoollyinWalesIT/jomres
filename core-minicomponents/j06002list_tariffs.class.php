<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	#[AllowDynamicProperties]

/**
#
 * Constructs and displays tariff list
 #
* @package Jomres
#
 */
class j06002list_tariffs
{
	/**
	#
	 * Constructor: Constructs and displays tariff list - admin side
	#
	 */
	function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable=false;
			return;
		}
		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();
		

		if ($mrConfig[ 'is_real_estate_listing' ] != '1' && !get_showtime('is_jintour_property')) {
			switch ($mrConfig['tariffmode']) {
				case '1':
					$task = 'list_tariffs_advanced';
					break;
				case '2':
					$task = 'list_tariffs_micromanage';
					break;
				case '5':
					$task = 'list_tariffs_standard';
					break;
				default:
					$task = 'list_tariffs_micromanage';
					break;
			}
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL . "&task=".$task), '' );
		} else {
			if ($mrConfig[ 'is_real_estate_listing' ] == '1') {
				echo "This is a real estate listing, it cannot have tariffs";
			}
			if (get_showtime('is_jintour_property')) {
				echo "This is a tour type property that does not have rooms, therefore it does not have tariffs";
			}
		}

	}


	// This must be included in every Event/Mini-component
	function getRetVals()
	{
		return null;
	}
}
