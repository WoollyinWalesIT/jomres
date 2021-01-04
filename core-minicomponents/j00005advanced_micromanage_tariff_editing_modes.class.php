<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j00005advanced_micromanage_tariff_editing_modes
	{
	function __construct()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		if (file_exists(get_showtime('ePointFilepath').'language'.JRDS.get_showtime('lang').'.php'))
			require_once(get_showtime('ePointFilepath').'language'.JRDS.get_showtime('lang').'.php');
		else
			{
			if (file_exists(get_showtime('ePointFilepath').'language'.JRDS.'en-GB.php'))
				require_once(get_showtime('ePointFilepath').'language'.JRDS.'en-GB.php');
			}
			
		$property_uid = getDefaultProperty();
		
		if ($property_uid > 0)
			{
			$mrConfig = getPropertySpecificSettings($property_uid);
			
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
			
			$jomres_menu = jomres_singleton_abstract::getInstance('jomres_menu');

			if ($mrConfig[ 'is_real_estate_listing' ] != '1' && $mrConfig['tariffmode'] != '0' && !get_showtime('is_jintour_property')) 
				{
				switch ($mrConfig['tariffmode'])
					{
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
						$task = 'edit_tariffs_normal';
						break;
					}

				if ($thisJRUser->accesslevel >= 70) 
					{
					$jomres_menu->add_item(80, jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false), $task, 'fa-usd');
					}
				}
			
			//remove the normal mode tariffs menu
			if (($mrConfig['tariffmode'] != '0' || get_showtime('is_jintour_property')) && isset($jomres_menu->items['edit_tariffs_normal'])) 
				{
				unset($jomres_menu->items['edit_tariffs_normal']);
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
