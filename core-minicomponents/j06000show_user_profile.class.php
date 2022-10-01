<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
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

class j06000show_user_profile
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
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();
		
		$this->retVals = '';
		
		$cms_user_id = (int)jomresGetParam($_REQUEST, 'cms_user_id', 0);
		if (!isset($_REQUEST['cms_user_id']) && isset($_REQUEST['id'])) {
			$cms_user_id = (int)jomresGetParam($_REQUEST, 'id', 0);
		}

		if (isset($componentArgs['cms_user_id']) && $cms_user_id == 0) {
			$cms_user_id = $componentArgs['cms_user_id'];
		}
		
		if ($thisJRUser->userIsRegistered && $thisJRUser->userIsManager && $cms_user_id == 0) {
			$cms_user_id = (int)$thisJRUser->id;
		}


		if ($cms_user_id == 0) {
			return;
		}
		
		if (isset($_REQUEST[ 'output_now' ])) {
			$output_now = (bool) jomresGetParam($_REQUEST, 'output_now', 1);
		} elseif (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool)$componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}
		
		jr_import('jomres_markdown');
		$jomres_markdown = new jomres_markdown();
		
		
		
		$can_view_private_details = false;	// All users can read public information, only property managers and the user themselves can see private information
		
		if (($thisJRUser->userIsManager && isset($componentArgs['cms_user_id'])) || $thisJRUser->superPropertyManager) { // This is a property manager attempting to view a guest's profile, probably for inclusion in the Booking details page, or a super property manager
			$property_uid = getDefaultProperty();
			$query = "SELECT mos_userid FROM #__jomres_guests WHERE mos_userid = ".(int) $cms_user_id." AND property_uid = ".(int)$property_uid;  // We'll check that the guest has been a guest of this property
			$result = doSelectSql($query);
			if (count($result) == 1) {
				$can_view_private_details = true;
			} elseif ((int)$thisJRUser->id == $cms_user_id) {
					$can_view_private_details = true;
			} else {
				return;
			}
		} elseif ((int)$thisJRUser->id == $cms_user_id) {
			$can_view_private_details = true;
		}
		
		jr_import('jrportal_guest_profile');
		$jrportal_guest_profile = new jrportal_guest_profile();
		$jrportal_guest_profile->cms_user_id = $cms_user_id;
		$result = $jrportal_guest_profile->get_guest_profile();

		if ($result == false) { // Can't find that user, have they been deleted?
			if ((int)$thisJRUser->id == $cms_user_id) {
				jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), '');
			} else {
				$output = array();
				$output['GUEST_PROFILE_UNKNOWN'] = jr_gettext('GUEST_PROFILE_UNKNOWN', 'GUEST_PROFILE_UNKNOWN', false);
				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('unknown_user.html');
				$tmpl->addRows('pageoutput', $pageoutput);
				$this->retVals = $tmpl->getParsedTemplate();
				if ($output_now) {
					echo $this->retVals;
				}
				return ;
			}
		}

		$output = array();
		$private_output = array();
		
		$guest_is_also_a_manager = false;
		
		$query = "SELECT access_level FROM #__jomres_managers WHERE userid = ".(int)$cms_user_id;
		$manager_state = doSelectSql($query, 2);
		
		$output[ 'MY_PROPERTIES' ]		= '';
		if (!empty($manager_state)) {
			$guest_is_also_a_manager = true;
			$is_super_manager = false;
			if ($manager_state['access_level'] == 90) {
				$is_super_manager = true;
			}
			
			if (!$is_super_manager) {
				$query = "SELECT property_uid FROM  FROM #__jomres_managers_propertys_xref WHERE manager_id = ".(int)$cms_user_id;
			}
			
			$output[ 'HOST_PROPERTIES' ]		= $MiniComponents->specificEvent('06000', 'show_host_properties', array ('output_now' => false , "manager_id" => (int)$cms_user_id ));
		}
		
		$output[ 'GUEST_REVIEWS' ]		= $MiniComponents->specificEvent('06000', 'show_my_reviews', array ('output_now' => false , "cms_user_id" => (int)$cms_user_id ));
		
		$output[ 'HOST_REVIEWS' ]		= $MiniComponents->specificEvent('06000', 'show_host_reviews', array ('output_now' => false , "cms_user_id" => (int)$cms_user_id ));
		
		$output[ 'GUEST_PROFILE_TITLE' ] = jr_gettext('GUEST_PROFILE_TITLE', 'GUEST_PROFILE_TITLE', false);
		
		$output[ 'FIRSTNAME' ]		= $jrportal_guest_profile->firstname;
		$output[ 'SURNAME' ]		= $jrportal_guest_profile->surname;

		jomres_set_page_title( 0 ,  jr_gettext('GUEST_PROFILE_MY_NAME', 'GUEST_PROFILE_MY_NAME', false).' '.$output[ 'FIRSTNAME' ].' '. $output[ 'SURNAME' ] );

		$output[ 'REGION' ]			= find_region_name($jrportal_guest_profile->region);
		$output[ 'COUNTRY' ]		= getSimpleCountry($jrportal_guest_profile->country);
		$output[ 'ABOUT_ME' ]		= $jomres_markdown->get_markdown($jrportal_guest_profile->about_me);

		$output[ 'IMAGE' ]			= $jrportal_guest_profile->image;

		$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
		$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
		$output[ 'GUEST_PROFILE_ABOUT_ME' ] = jr_gettext('GUEST_PROFILE_ABOUT_ME', 'GUEST_PROFILE_ABOUT_ME', false);
		
		$output[ 'GUEST_PROFILE_WELCOME' ] = jr_gettext('GUEST_PROFILE_WELCOME', 'GUEST_PROFILE_WELCOME', false);
		
		$output[ 'GUEST_PROFILE_MY_NAME' ] = jr_gettext('GUEST_PROFILE_MY_NAME', 'GUEST_PROFILE_MY_NAME', false);
		$output[ 'GUEST_PROFILE_I_COME_FROM' ] = jr_gettext('GUEST_PROFILE_I_COME_FROM', 'GUEST_PROFILE_I_COME_FROM', false);
		$output[ 'GUEST_PROFILE_IN' ] = jr_gettext('GUEST_PROFILE_IN', 'GUEST_PROFILE_IN', false);


		if ($can_view_private_details) {
			$private_output[0][ 'HOUSE' ] = $jrportal_guest_profile->house;
			$private_output[0][ 'STREET' ] = $jrportal_guest_profile->street;
			$private_output[0][ 'TOWN' ] = $jrportal_guest_profile->town;
			$private_output[0][ 'POSTCODE' ] = $jrportal_guest_profile->postcode;
			$private_output[0][ 'LANDLINE' ] = $jrportal_guest_profile->tel_landline;
			$private_output[0][ 'MOBILE' ] = $jrportal_guest_profile->tel_mobile;
			$private_output[0][ 'EMAIL' ] = restore_task_specific_email_address($jrportal_guest_profile->email);
			$private_output[0][ 'DRIVERS_LICENSE' ]	= $jrportal_guest_profile->drivers_license;
			$private_output[0][ 'PASSPORT_NUMBER' ]	= $jrportal_guest_profile->passport_number;
			$private_output[0][ 'IBAN' ]				= $jrportal_guest_profile->iban;

			$private_output[0][ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME', false);
			$private_output[0][ 'HHOUSE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE', false);
			$private_output[0][ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET', false);
			$private_output[0][ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN', false);
			$private_output[0][ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE', false);
			$private_output[0][ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE', false);
			$private_output[0][ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE', false);
			$private_output[0][ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false);
			$private_output[0][ 'GUEST_PROFILE_DRIVING_LICENSE' ] = jr_gettext('GUEST_PROFILE_DRIVING_LICENSE', 'GUEST_PROFILE_DRIVING_LICENSE', false);
			$private_output[0][ 'GUEST_PROFILE_PASSPORT_NUMBER' ] = jr_gettext('GUEST_PROFILE_PASSPORT_NUMBER', 'GUEST_PROFILE_PASSPORT_NUMBER', false);
			$private_output[0][ 'GUEST_PROFILE_IBAN' ] = jr_gettext('GUEST_PROFILE_IBAN', 'GUEST_PROFILE_IBAN', false);
			
			$private_output[0][ 'GUEST_PROFILE_PRIVATE_INFORMATION' ] = jr_gettext('GUEST_PROFILE_PRIVATE_INFORMATION', 'GUEST_PROFILE_PRIVATE_INFORMATION', false);
			$private_output[0][ 'GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER' ] = jr_gettext('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', false);
		}

		$pageoutput[ ] = $output;

		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('show_user_profile.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('private_output', $private_output);
		$this->retVals = $tmpl->getParsedTemplate();

		if ($output_now) {
			echo $this->retVals;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
