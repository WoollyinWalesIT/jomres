<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.1.0
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

class j09990widgets
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
		
		$property_uid = getDefaultProperty();
		
		if ($property_uid == 0) {
			return;
		}
		
		$mrConfig = getPropertySpecificSettings($property_uid);

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		$jomres_widgets = jomres_singleton_abstract::getInstance('jomres_widgets');

		//register core widgets
		if ($thisJRUser->accesslevel >= 50) {
			if ($mrConfig[ 'is_real_estate_listing' ] != '1' && !get_showtime('is_jintour_property')) {
				$jomres_widgets->register_widget('06001', 'dashboard', jr_gettext('_JOMRES_TIMELINE', '_JOMRES_TIMELINE', false), true);
				$jomres_widgets->register_widget('06001', 'weekly_occupancy_percentages', jr_gettext('_JOMRES_OVERALL_ROOMS_BOOKED', '_JOMRES_OVERALL_ROOMS_BOOKED', false), true);
			}

			$jomres_widgets->register_widget('06001', 'listyourproperties', jr_gettext('_JRPORTAL_CPANEL_LISTPROPERTIES', '_JRPORTAL_CPANEL_LISTPROPERTIES', false));
			
			if ($mrConfig[ 'is_real_estate_listing' ] != '1') {
				$jomres_widgets->register_widget('06001', 'list_bookings', jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', false));
				$jomres_widgets->register_widget('06001', 'list_guests', jr_gettext('_JOMRES_HLIST_GUESTS_MENU', '_JOMRES_HLIST_GUESTS_MENU', false));
				$jomres_widgets->register_widget('06005', 'list_invoices', jr_gettext('_JOMRES_HLIST_INVOICES_MENU', '_JOMRES_HLIST_INVOICES_MENU', false));
			}
		}
		
		if ($thisJRUser->accesslevel >= 70) {
			if ($mrConfig[ 'is_real_estate_listing' ] != '1') {
				$jomres_widgets->register_widget('06002', 'chart_bookings', jr_gettext('_JOMRES_CHART_BOOKINGS_DESC', '_JOMRES_CHART_BOOKINGS_DESC', false));
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
