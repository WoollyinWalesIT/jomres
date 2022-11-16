<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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

class j06001list_guests
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
			$this->template_touchable = true;

			return;
		}
		
		$this->retVals = '';

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$historic = (int) jomresGetParam($_POST, 'historic', '2');
		$guest_id = (int) jomresGetParam($_POST, 'guest_id', '0');
		$show_all = (int) jomresGetParam($_POST, 'show_all', '0');

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_HLIST_GUESTS', '_JOMRES_HLIST_GUESTS', false);
		$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN', false);
		$output[ 'HEDITLINK' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', false);
		$output[ 'HINVOICELINK' ] = jr_gettext('_JOMRES_MANAGER_SHOWINVOICES', '_JOMRES_MANAGER_SHOWINVOICES', false);
		$output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', false);
		$output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME', false);
		$output[ 'HHOUSE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE', false);
		$output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET', false);
		$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN', false);
		$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
		$output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', false);
		$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
		$output[ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE', false);
		$output[ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE', false);
		$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', false);
		$output[ 'HVAT' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO', false);
		$output[ 'HPERSONAL_DISCOUNT' ] = jr_gettext('_JOMRES_PERSONAL_DISCOUNT', '_JOMRES_PERSONAL_DISCOUNT', false);
		$output[ 'HPROPERTY_NAME' ] = jr_gettext('_JRPORTAL_PROPERTIES_PROPERTYNAME', '_JRPORTAL_PROPERTIES_PROPERTYNAME', false, false);

		if (!using_bootstrap()) {
			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();
			$text = jr_gettext('_JOMRES_COM_MR_NEWGUEST', '_JOMRES_COM_MR_NEWGUEST', false, true);
			$link = JOMRES_SITEPAGE_URL.'&task=edit_guest';
			$targetTask = 'editGuest';
			$image = JOMRES_IMAGES_RELPATH.'jomresimages/'.$jrtbar->imageSize.'/guestAdd.png';
			$jrtb .= $jrtbar->customToolbarItem($targetTask, $link, $text, $submitOnClick = false, $submitTask = '', $image);
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;
		} else {
			$output[ 'NEW_GUEST_URL' ] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=edit_guest');
			$output[ 'HNEW_GUEST' ] = jr_gettext('_JOMRES_COM_MR_NEWGUEST', '_JOMRES_COM_MR_NEWGUEST', false, true);
		}

		//filters
		$output['HFILTER'] = jr_gettext('_JOMRES_HFILTER', '_JOMRES_HFILTER', false);
		$output['HGUEST_STATUS'] = jr_gettext('_JOMRES_HSTATUS_GUEST', '_JOMRES_HSTATUS_GUEST', false);
		$output['HSHOW_ALL'] = jr_gettext('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', '_JOMRES_HSTATUS_SHOW_GUESTS_FOR', false);

		$options = array();
		$options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_ANY', '_JOMRES_STATUS_ANY', false));
		$options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', '_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', false));
		$options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', '_JOMRES_STATUS_GUEST_BOOKINGS_PAST', false));
		$output['GUEST_STATUS'] = jomresHTML::selectList($options, 'historic', 'class="inputbox" size="1"', 'value', 'text', $historic);

		$options = array();
		$options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_HSTATUS_CURRENT', '_JOMRES_HSTATUS_CURRENT', false));
		$options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_ALL_PROPERTIES', '_JOMRES_STATUS_ALL_PROPERTIES', false));
		$output['SHOW_ALL'] = jomresHTML::selectList($options, 'show_all', 'class="inputbox" size="1"', 'value', 'text', $show_all);

		$output['AJAX_URL'] = JOMRES_SITEPAGE_URL_AJAX.'&task=listguests_ajax&historic='.$historic.'&guest_id='.$guest_id.'&show_all='.$show_all;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('list_guests.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		if ($output_now) {
			$tmpl->displayParsedTemplate();
		} else {
			$this->retVals = $tmpl->getParsedTemplate();
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
