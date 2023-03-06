<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06005edit_my_account
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
		jomres_cmsspecific_setmetadata('title', jomres_purify_html(jr_gettext('_JOMRES_MY_ACCOUNT_EDIT', '_JOMRES_MY_ACCOUNT_EDIT', false)));
		
		$jomres_gdpr_optin_consent = new jomres_gdpr_optin_consent();
		if (!$jomres_gdpr_optin_consent->user_consents_to_storage()&& !isset($_REQUEST['skip_consent_form'])) {
			echo $consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form', array ('output_now' => false));
			return;
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$output = array();
		$pageoutput = array();
		$vat_validation = array();


		jomres_cmsspecific_addheaddata('javascript', JOMRES_JS_RELPATH, 'intlTelInput.js' );
		jomres_cmsspecific_addheaddata('css', JOMRES_CSS_RELPATH, 'intlTelInput.css');

		$user_details = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($thisJRUser->id);

		$output[ 'FIRSTNAME' ] = '';
		$output[ 'SURNAME' ] = '';
		$output[ 'HOUSE' ] = '';
		$output[ 'STREET' ] = '';
		$output[ 'TOWN' ] = '';
		$output[ 'REGION' ] = setupRegions($jrConfig[ 'limit_property_country_country' ]);
		$output[ 'COUNTRY' ] = createSimpleCountriesDropdown($jrConfig[ 'limit_property_country_country' ]);
		$output[ 'COUNTRY_CODE' ] = $jrConfig[ 'limit_property_country_country' ];
		$output[ 'POSTCODE' ] = '';
		$output[ 'LANDLINE' ] = '';
		$output[ 'MOBILE' ] = '';
		//$output[ 'EMAIL' ] = restore_task_specific_email_address($user_details[ $thisJRUser->id ][ 'email' ]);
		$output[ 'IMAGE' ] = JOMRES_IMAGES_RELPATH.'noimage.svg';

		$output['JOMRES_JS_RELPATH'] = JOMRES_JS_RELPATH;

		if (isset($componentArgs['return_url']) && $componentArgs['return_url'] != '') {
			$output[ 'RETURN_URL' ] = $componentArgs['return_url'];
		} else {
			$output[ 'RETURN_URL' ] = '';
		}

		if ($thisJRUser->id > 0) {
			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_site_images('userimages');
			
			if (isset($jomres_media_centre_images->site_images['userimages'][$thisJRUser->id][0]['small'])) {
				$output[ 'IMAGE' ] = $jomres_media_centre_images->site_images['userimages'][$thisJRUser->id][0]['small'];
				$output[ 'DELETELINK' ] = '<a href="'.JOMRES_SITEPAGE_URL.'&task=save_my_account&delete=1&file='.basename($jomres_media_centre_images->site_images['userimages'][$thisJRUser->id][0]['large']).'">'.jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', '_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', false).'</a>';
				$output[ 'UPLOADINPUT' ] = '';
			} else {
				$output[ 'IMAGE' ] = $jomres_media_centre_images->multi_query_images[ 'noimage-small' ];
				$output[ 'DELETELINK' ] = '';
				$output[ 'UPLOADINPUT' ] = '<input type="file" name="files"/>';
			}

			if ($thisJRUser->profile_id > 0) {
				$output[ 'FIRSTNAME' ]			= $thisJRUser->firstname;
				$output[ 'SURNAME' ]			= $thisJRUser->surname;
				$output[ 'HOUSE' ]				= $thisJRUser->house;
				$output[ 'STREET' ]				= $thisJRUser->street;
				$output[ 'TOWN' ]				= $thisJRUser->town;
				$output[ 'REGION' ]				= setupRegions($thisJRUser->country, $thisJRUser->region);
				$output[ 'COUNTRY' ]			= createSimpleCountriesDropdown($thisJRUser->country);
				$output[ 'COUNTRY_CODE' ]		= $thisJRUser->country;
				$output[ 'POSTCODE' ]			= $thisJRUser->postcode;
				$output[ 'LANDLINE' ]			= $thisJRUser->tel_landline;
				$output[ 'MOBILE' ]				= $thisJRUser->tel_mobile;
				$output[ 'FAX' ]				= $thisJRUser->tel_fax;
				//$output[ 'EMAIL' ]				= restore_task_specific_email_address($thisJRUser->email);

				$output[ 'DRIVERS_LICENSE' ]	= $thisJRUser->drivers_license;
				$output[ 'PASSPORT_NUMBER' ]	= $thisJRUser->passport_number;
				$output[ 'IBAN' ]				= $thisJRUser->iban;
				$output[ 'PREFERENCES' ]		= $thisJRUser->preferences;
	
				
				jr_import('vat_number_validation');
				$validation = new vat_number_validation();
				$validation->get_subject('buyer_registered_byprofile_id', array('profile_id' => $thisJRUser->id));

				$output[ 'VAT_NUMBER' ] = $validation->vat_number;
				$output[ 'VAT_NUMBER_VALIDATED' ] = $validation->vat_number_validated;

				$validation_success = $validation->vat_number_validation_response;

				if (is_null($validation_success)) {
					$validation_success = '';
				}
				if (strlen($validation_success) > 0) {
					$vat_validation[0][ 'VAT_NUMBER_VALIDATION_STATUS'] = $validation_success;

					if ($validation->vat_number_validated) {
						if (using_bootstrap()) {
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-success';
						} else {
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-highlight';
						}
					} else {
						if (using_bootstrap()) {
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-error';
						} else {
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-error ';
						}
					}
				}
			}

			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', false);
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL' ] = jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', false);

			$output[ 'GUEST_PROFILE_INFORMATION' ] = jr_gettext('GUEST_PROFILE_INFORMATION', 'GUEST_PROFILE_INFORMATION', false);
			$output[ 'GUEST_PROFILE_OPTIONAL' ] = jr_gettext('GUEST_PROFILE_OPTIONAL', 'GUEST_PROFILE_OPTIONAL', false);
			$output[ 'GUEST_PROFILE_DRIVING_LICENSE' ] = jr_gettext('GUEST_PROFILE_DRIVING_LICENSE', 'GUEST_PROFILE_DRIVING_LICENSE', false);
			$output[ 'GUEST_PROFILE_PASSPORT_NUMBER' ] = jr_gettext('GUEST_PROFILE_PASSPORT_NUMBER', 'GUEST_PROFILE_PASSPORT_NUMBER', false);
			$output[ 'GUEST_PROFILE_IBAN' ] = jr_gettext('GUEST_PROFILE_IBAN', 'GUEST_PROFILE_IBAN', false);
			$output[ 'GUEST_PROFILE_ABOUT_ME' ] = jr_gettext('GUEST_PROFILE_ABOUT_ME', 'GUEST_PROFILE_ABOUT_ME', false);
			$output[ 'GUEST_PROFILE_ABOUT_ME_HINTS' ] = jr_gettext('GUEST_PROFILE_ABOUT_ME_HINTS', 'GUEST_PROFILE_ABOUT_ME_HINTS', false);
			
			$output[ 'HFIRSTNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', false);
			$output[ 'HSURNAME' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME', false);
			$output[ 'HHOUSE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE', false);
			$output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET', false);
			$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN', false);
			$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
			$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
			$output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE', false);
			$output[ 'HLANDLINE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE', false);
			$output[ 'HMOBILE' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE', false);
			$output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX', false);
			$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false);
			$output[ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO', false);
			
			$output[ 'GUEST_PROFILE_PREFERENCES' ] = jr_gettext('GUEST_PROFILE_PREFERENCES', 'GUEST_PROFILE_PREFERENCES', false);
			$output[ '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', false);

			$output[ '_JOMRES_REVIEWS_SUBMIT' ] = jr_gettext('_JOMRES_REVIEWS_SUBMIT', '_JOMRES_REVIEWS_SUBMIT', false);
			$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_MY_ACCOUNT_EDIT', '_JOMRES_MY_ACCOUNT_EDIT', false, false);

			jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.js');
			jomres_cmsspecific_addheaddata('css', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.css');
			
			$output['SIMPLEMDE_JAVASCRIPT'] = '
				<script type="text/javascript">
				jomresJquery(document).ready(function () {
					var buttons =  ["bold", "italic", "heading", "strikethrough" , "|" , "unordered-list" , "ordered-list" , "clean-block" , "image" , "table" , "horizontal-rule" , "|", "preview" ];
					var simplemde = new SimpleMDE({ element: document.getElementById("about_me") ,toolbar: buttons, });
				});
				</script>';
			
			
			$output[ 'MARKDOWN_BUTTON' ] = $MiniComponents->specificEvent('06000', 'show_markdown_modal', array('output_now' => false));
			
			$output[ 'ABOUT_ME' ] = '<textarea class="inputbox form-control" cols="70" rows="15" id="about_me" name="about_me">'.jomres_remove_HTML($thisJRUser->about_me, '').'</textarea>';

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('edit_my_account.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('validation', $vat_validation);
			$tmpl->displayParsedTemplate();
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
