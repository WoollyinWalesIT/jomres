<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06002delete_tariff_standard
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable = false; return;
			}

		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();
		
		if ($mrConfig['tariffmode'] != '5' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property'))
			return;
		
		jr_import('jrportal_rates');
		$jrportal_rates = new jrportal_rates();
		$jrportal_rates->property_uid = $defaultProperty;
		$jrportal_rates->tarifftype_id = (int)jomresGetParam( $_REQUEST, 'tarifftypeid', 0 );
		
		//delete rate
		$jrportal_rates->delete_rate();
		
		$saveMessage = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_DELETED','_JOMRES_COM_MR_LISTTARIFF_DELETED',false);
		
		$jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messaging->set_message($saveMessage);
		
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_tariffs_standard" ) , $saveMessage );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
