<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.14.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_sanity_check
{
	public $warnings;
	public $warning_counter;
	
	public function __construct($autorun = true , $property_uid = 0 )
	{
		if (get_showtime('no_html') == 1 || get_showtime('popup') == 1 || AJAXCALL) {
			return;
		}
		
		$this->warnings = '';
		if ($property_uid > 0 )
			$this->property_uid = $property_uid;
		if ($autorun) {
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$this->jrConfig = $siteConfig->get();
			$this->mrConfig = getPropertySpecificSettings();
			$this->property_uid = getDefaultProperty();

			$this->warning_counter = 0;
		}
	}

	/*
	Blind flag is for automatically created properties that need to be checked
	*/
	
	public function do_sanity_checks( $blind = false )
	{
		if (get_showtime('no_html') == 1 || get_showtime('popup') == 1 || AJAXCALL) {
			return;
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if ($thisJRUser->userIsManager || $blind == true ) {
			$this->warnings .= $this->check_editing_mode();
			
			$this->warnings .= $this->check_suspended();
			if (get_showtime('include_room_booking_functionality')) {
				if ($this->mrConfig[ 'singleRoomProperty' ] == 1) {
					$this->warnings .= $this->check_srp_room_exists();
					$this->warnings .= $this->check_srp_room_type_set();
				} else {
					$this->warnings .= $this->check_mrp_rooms_exists();
				}
			}

			$this->warnings .= $this->checks_guest_types_pppn();
			if ($this->mrConfig[ 'is_real_estate_listing' ] == 0 && get_showtime('include_room_booking_functionality')) {
				$this->warnings .= $this->checks_tariffs_exist();
			}

			if (get_showtime('is_jintour_property')) {
				$this->warnings .= $this->check_tours_exist();
			}

			$this->warnings .= $this->check_address();
			$this->warnings .= $this->check_main_image();

			if (trim($this->warnings) == '') {
				
				$this->mark_as_complete(); // Add a flag that will show site managers when a property is ready to be reviewed after creation and when it is waiting approval
				
				$this->warnings .= $this->check_approved();
				
				if (trim($this->warnings) == '') {
					$this->warnings .= $this->check_published();
				}
			} else {
				$this->mark_as_incomplete();
			}

			
		} elseif ($thisJRUser->userIsRegistered) {
			 $this->warnings .= $this->check_for_unreviewed_bookings();
		}
		
		return $this->warnings;
	}

	public function construct_warning($message_array)
	{
		//$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		//if ($thisJRUser->userIsManager) {
			$button = '';
			++$this->warning_counter;

			if (isset($message_array['LINK'])) {
				$pageoutput = array();
				$output = array();
				$output['LINK'] = $message_array['LINK'];
				$output['BUTTON_TEXT'] = $message_array['BUTTON_TEXT'];
				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
				$tmpl->readTemplatesFromInput('sanity_checks_button.html');
				$button = $tmpl->getParsedTemplate();
			}

			$pageoutput = array();
			$output = array();

			if (!isset($message_array['LABEL'])) {
				$message_array['LABEL'] = 'warning';
			}

			$output['LABEL_CLASS'] = $message_array['LABEL'];

			$output['WARNING_WORD'] = jr_gettext('_JOMRES_WARNINGS_DANGERWILLROBINSON', '_JOMRES_WARNINGS_DANGERWILLROBINSON', false);
			$output['WARNING_MESSAGE'] = $message_array['MESSAGE'];
			$output['WARNING_COUNTER'] = $this->warning_counter;
			$output['ACTION_LINK'] = $button;

			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->readTemplatesFromInput('sanity_check_pane.html');

			return $tmpl->getParsedTemplate();
		//}
	}

	public function mark_as_complete() {
		// This is only triggered if a property doesn't have any warnings fired (address, images etc)
		
		// If property is marked as approved, we know it has been completed, so to save performance we'll trot right along to the next check.
		// If the property is already published, we will automatically mark it as completed. This prevents previously approved properties from needing to be checked
		
		// Check to see if the property has already been marked as completed. If yes, then move on. If no, set the Completed flag to yes.
		
		// If it is not, we will check to see if the Completed flag is set to 0. If it is, we'll set it to
		
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($this->property_uid);
		
		if ($current_property_details->completed) { 
			return true;
		}
		
		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
		$jomres_properties->propertys_uid = $this->property_uid;
		$jomres_properties->setCompleted(1);
		
		return true;
	}
	
	public function mark_as_incomplete() {
		// This is only triggered if a property has warnings fired (address, images etc)
		// sets the completed flag to 0, makes the property require a new approval and also unpublishes the property
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
	
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($this->property_uid);
		
		if (!$current_property_details->completed) { 
			return true;
		}
		
		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
		$jomres_properties->propertys_uid = $this->property_uid;
		$jomres_properties->setCompleted(0);
		
		if ($jrConfig['automatically_approve_new_properties'] == '0') {
			if ($current_property_details->approved == 1) {
				$jomres_properties->setApproved(0);
			}
			
			if ($current_property_details->published == 1) {
				$jomres_properties->setPublished(0);
			}
		}
		
		return true;
	}
	
	public function check_for_unreviewed_bookings()
	{
		if ($this->jrConfig['review_nag'] == "0")
			return;
	
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$query = "SELECT contract_uid FROM #__jomres_reviews_ratings WHERE user_id = ".(int)$thisJRUser->id;
		$reviews_data = doSelectSql($query);
		
		$reviews_contract_uids = array();
		if (!empty($reviews_data)) {
			foreach ($reviews_data as $review ) {
				$reviews_contract_uids[]=$review->contract_uid;
			}
		}
		
		$unreviewed_bookings = 0;
		
		$query = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int) $thisJRUser->id."' ";
		$guests_uids = doSelectSql($query);
		$allGuestUids = array();
		
		// Because a new record is made in the guests table for each new property the guest registers in, we need to find all the guest uids for this user
		if (!empty($guests_uids)) {
			foreach ($guests_uids as $g) {
				$allGuestUids[ ] = $g->guests_uid;
			}
		}
		
		$query = 'SELECT contract_uid FROM #__jomres_contracts WHERE guest_uid IN ('.jomres_implode($allGuestUids).') AND bookedout  = 1';
		$contracts = doSelectSql($query);
					
		if (!empty($contracts)) {
			foreach ($contracts as $contract ) {
				if (!in_array( $contract->contract_uid , $reviews_contract_uids ) ) {
					$unreviewed_bookings++;
				}
			}
		}

		if ( $unreviewed_bookings > 0 && ( get_showtime("task") != "dobooking" && get_showtime("task") != "confirmbooking" ) )  {
			$message = jr_gettext('REVIEW_REMINDER_PT1', 'REVIEW_REMINDER_PT1', false).$unreviewed_bookings.jr_gettext('REVIEW_REMINDER_PT2', 'REVIEW_REMINDER_PT2', false);
			$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=mulistbookings&unreviewed');
			$button_text = jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', false);

			return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
		}

	}
	
	public function check_tours_exist()
	{
		//if (get_showtime('task') != 'jintour') {
			$tours = jintour_get_all_tours($this->property_uid);
			$future_tours = array();
			$today = date('Y/m/d');
			foreach ($tours as $tour) {
				$tempArr = explode('-', $tour['tourdate']);
				$tourdate = date('Y/m/d', mktime(0, 0, 0, $tempArr[1], $tempArr[2], $tempArr[0]));
				if (strtotime($today) < strtotime($tourdate)) {
					$future_tours[] = $tour;
				}
			}

			if (empty($future_tours)) {
				$message = jr_gettext('_JOMRES_JINTOUR_SANITY_CHECK', '_JOMRES_JINTOUR_SANITY_CHECK', false);
				$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=jintour');
				$button_text = jr_gettext('_JOMRES_JINTOUR_SANITY_CHECK_LINK', '_JOMRES_JINTOUR_SANITY_CHECK_LINK', false);

				return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
			}
		//}
	}

	public function check_address()
	{
		//if (get_showtime('task') != 'edit_property') {
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data($this->property_uid);
			if (
				$current_property_details->property_street == '' || 
				$current_property_details->property_town == '' || 
				$current_property_details->property_region == '' || 
				$current_property_details->property_country_code == ''
				) {
				$message = jr_gettext('_JOMRES_ADDRESS_SANITY_CHECK', '_JOMRES_ADDRESS_SANITY_CHECK', false);
				$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_property');
				$button_text = jr_gettext('_JOMRES_ADDRESS_SANITY_CHECK_LINK', '_JOMRES_ADDRESS_SANITY_CHECK_LINK', false);

				return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
			}
		//}
	}

	public function check_main_image()
	{
		//if (get_showtime('task') != 'media_centre') {
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data($this->property_uid);
			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images($this->property_uid, array('property'));
			$noimage = JOMRES_IMAGES_RELPATH.'noimage.gif';
			if (!isset($jomres_media_centre_images->images['property'][0][0]['large']) || $jomres_media_centre_images->images['property'][0][0]['large'] == $noimage) {
				$message = jr_gettext('_JOMRES_IMAGES_EXIST_SANITY_CHECK', '_JOMRES_IMAGES_EXIST_SANITY_CHECK', false);
				$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=media_centre&upload_context=properties');
				$button_text = jr_gettext('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', '_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', false);

				return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
			}
		//}
	}

	public function check_approved()
	{
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($this->property_uid);
		if (!$current_property_details->approved) {
			$message = jr_gettext('_JOMRES_APPROVALS_NOT_APPROVED_YET', '_JOMRES_APPROVALS_NOT_APPROVED_YET', false);

			return $this->construct_warning(array('MESSAGE' => $message));
		}
	}

	public function check_suspended()
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if ($thisJRUser->userIsSuspended) {
			$message = jr_gettext('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', false);

			return $this->construct_warning(array('MESSAGE' => $message));
		}
	}

	public function checks_guest_types_pppn()
	{
		if ($this->mrConfig[ 'is_real_estate_listing' ] == '0') {
			$ignore_on_tasks = array('listCustomerTypes', 'editCustomerType', 'saveCustomerType', 'deleteCustomerType', 'saveCustomerTypeOrder');
			//if (!in_array(get_showtime('task'), $ignore_on_tasks)) {
				$query = 'SELECT `id` FROM `#__jomres_customertypes` where property_uid = '.(int) $this->property_uid.' AND published = 1';
				$result = doSelectSql($query);
				if ((int) $this->mrConfig[ 'perPersonPerNight' ] == 1 && empty($result)) {
					$message = jr_gettext('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', false);
					$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=listCustomerTypes');
					$button_text = jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', false);

					return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
				}
			//}
		}

		return '';
	}

	public function checks_tariffs_exist()
	{
		if ($this->mrConfig[ 'is_real_estate_listing' ] == '0') {
			if (!get_showtime('include_room_booking_functionality')) {
				return '';
			}
			$ignore_on_tasks = array('propertyadmin', 'editTariff', 'saveTariff', 'edit_tariff_micromanage', 'list_tariffs_micromanage', 'list_tariffs_advanced', 'edit_tariff_advanced', 'edit_tariffs_normal');
			//if (!in_array(get_showtime('task'), $ignore_on_tasks)) {
				$query = 'SELECT `rates_uid` FROM `#__jomres_rates` where property_uid = '.(int) $this->property_uid.'';
				$result = doSelectSql($query);
				if (empty($result)) {
					if ($this->mrConfig[ 'singleRoomProperty' ] == 0) {
						$message = jr_gettext('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', false);
					} else {
						$message = jr_gettext('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', false);
					}

					$mrConfig = getPropertySpecificSettings($this->property_uid);

					if ($mrConfig['tariffmode'] == '0') {
						$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_tariffs_normal');
						$button_text = jr_gettext('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', '_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', false, false);
					} elseif ($mrConfig['tariffmode'] == '1') {
						$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=list_tariffs_advanced');
						$button_text = jr_gettext('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', '_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', false);
					} else {
						$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=list_tariffs_micromanage');
						$button_text = jr_gettext('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', '_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', false);
					}

					return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
				}
			//}
		}

		return '';
	}

	public function check_editing_mode()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if ($this->jrConfig[ 'editingModeAffectsAllProperties' ] == '1' && $tmpBookingHandler->user_settings[ 'editing_on' ] == true && $thisJRUser->superPropertyManager) {
			$message = jr_gettext('_JOMRES_WARNINGS_GLOBALEDITINGMODE', '_JOMRES_WARNINGS_GLOBALEDITINGMODE', false);

			return $this->construct_warning(array('MESSAGE' => $message, 'LABEL' => 'danger'));
		}
	}

	public function check_published()
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($this->property_uid);

		if ($current_property_details->published != 1 && $thisJRUser->userIsManager) {
			$message = jr_gettext('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', false);
			$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=publish_property&property_uid='.$this->property_uid);
			$button_text = jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH', '_JOMRES_COM_MR_VRCT_PUBLISH', false);

			return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
		}
	}

	public function check_srp_room_exists()
	{
		if ($this->mrConfig[ 'is_real_estate_listing' ] == '0' && $this->mrConfig[ 'tariffmode' ] != '0') {
			//if (get_showtime('task') != 'edit_resource') {
				$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
				$current_property_details->gather_data($this->property_uid);
				if (!isset($current_property_details->rooms)) {
					$message = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', false);
					$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource');
					$button_text = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', false);

					return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
				}
			//}
		}
	}

	public function check_srp_room_type_set()
	{
		if ($this->mrConfig[ 'is_real_estate_listing' ] == '0' && $this->mrConfig[ 'tariffmode' ] != '0') {
			//if (get_showtime('task') != 'edit_resource') {
				$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
				$current_property_details->gather_data($this->property_uid);
				foreach ($current_property_details->room_types as $rt) {
					if (!isset($rt['abbv'])) {
						$message = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', false);
						$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource');
						$button_text = jr_gettext('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', '_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', false);

						return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
					}
				}
			//}
		}
	}

	public function check_mrp_rooms_exists()
	{
		if ($this->mrConfig[ 'is_real_estate_listing' ] == '0') {
			//if (get_showtime('task') != 'edit_resource') {
				$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
				$current_property_details->gather_data($this->property_uid);
				if (!isset($current_property_details->rooms) || empty($current_property_details->rooms)) {
					$message = jr_gettext('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', '_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', false);
					if ($this->mrConfig['tariffmode'] == 0) {
						$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_tariffs_normal');
					} else {
						$link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource');
					}
					$button_text = jr_gettext('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', '_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', false);

					return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
				}
			//}
		}
	}
}
