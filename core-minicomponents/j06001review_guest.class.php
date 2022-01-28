<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.3
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

class j06001review_guest
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
			$this->template_touchable = true;

			return;
		}
		
		$id = (int)jomresGetParam($_REQUEST, 'guest_id', 0);
		$defaultProperty = getDefaultProperty();

		$vat_validation = array();
		$output = array();
		
		jr_import( 'jrportal_guests' );
		$jrportal_guests = new jrportal_guests();
		$jrportal_guests->id = $id;
		$jrportal_guests->property_uid = $defaultProperty;
		$jrportal_guests->get_guest();

		$output[ 'FIRSTNAME' ] = $jrportal_guests->firstname;
		$output[ 'SURNAME' ] = $jrportal_guests->surname;


		$output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME' , false );
		$output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME' , false );
		
		$output[ 'GUEST_PROFILE_REVIEW_GUEST_CONTENT' ] = jr_gettext('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'GUEST_PROFILE_REVIEW_GUEST_CONTENT' , false );
		$output[ 'GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES' ] = jr_gettext('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES' , false );
		
 		jr_import( 'jrportal_guest_profile' );
		$jrportal_guest_profile = new jrportal_guest_profile();
		$jrportal_guest_profile->cms_user_id =  $jrportal_guests->id;
		$jrportal_guest_profile->get_guest_profile();
		$jrportal_guest_profile->get_guest_reviews();
		
		$output[ 'REVIEW_CONTENT' ] = '';
		if ( isset($jrportal_guest_profile->guest_reviews[$defaultProperty]['review']) && $jrportal_guest_profile->guest_reviews[$defaultProperty]['review'] != '')
			$output[ 'REVIEW_CONTENT' ] = $jrportal_guest_profile->guest_reviews[$defaultProperty]['review'];
		
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();

		$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_guests'), '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_guest_review');
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'PAGETITLE' ] = jr_gettext('GUEST_PROFILE_REVIEW_GUEST', 'GUEST_PROFILE_REVIEW_GUEST' , false );
		$output[ 'GUESTUID' ] = $id;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('review_guest.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_MR_CREDITCARD_EDIT', '_JOMRES_MR_CREDITCARD_EDIT');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL');
		$output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
