<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005edit_my_account
	{
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$output     = array ();
		$pageoutput = array ();

		$user_details = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id( $thisJRUser->id );

		$output[ 'FIRSTNAME' ] = '';
		$output[ 'SURNAME' ]   = '';
		$output[ 'HOUSE' ]     = '';
		$output[ 'STREET' ]    = '';
		$output[ 'TOWN' ]      = '';
		$output[ 'REGION' ]    = setupRegions($jrConfig[ 'limit_property_country_country' ]);
		$output[ 'COUNTRY' ]   = createSimpleCountriesDropdown( $jrConfig[ 'limit_property_country_country' ] );
		$output[ 'POSTCODE' ]  = '';
		$output[ 'LANDLINE' ]  = '';
		$output[ 'MOBILE' ]    = '';
		$output[ 'EMAIL' ]     = $user_details[ $thisJRUser->id ][ 'email' ];
		$output[ 'IMAGE' ]	   = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/noimage.gif";
		
		if (isset($componentArgs['return_url']) && $componentArgs['return_url'] != '')
			$output[ 'RETURN_URL' ] = $componentArgs['return_url'];
		else
			$output[ 'RETURN_URL' ] = '';

		if ( $thisJRUser->id > 0 )
			{
			if ( file_exists( JOMRES_IMAGELOCATION_ABSPATH . 'userimages' . JRDS . "userimage_" . (int) $thisJRUser->id . ".jpg" ) ) 
				$output[ 'IMAGE' ] = JOMRES_IMAGELOCATION_RELPATH . 'userimages/userimage_' . (int) $thisJRUser->id . '_thumbnail.jpg';

			if ( $thisJRUser->profile_id > 0 )
				{
				$output[ 'FIRSTNAME' ]            = $thisJRUser->firstname;
				$output[ 'SURNAME' ]              = $thisJRUser->surname;
				$output[ 'HOUSE' ]                = $thisJRUser->house;
				$output[ 'STREET' ]               = $thisJRUser->street;
				$output[ 'TOWN' ]                 = $thisJRUser->town;
				$output[ 'REGION' ]               = setupRegions( $thisJRUser->country, $thisJRUser->region );
				$output[ 'COUNTRY' ]              = createSimpleCountriesDropdown( $thisJRUser->country );
				$output[ 'POSTCODE' ]             = $thisJRUser->postcode;
				$output[ 'LANDLINE' ]             = $thisJRUser->tel_landline;
				$output[ 'MOBILE' ]               = $thisJRUser->tel_mobile;
				$output[ 'FAX' ]                  = $thisJRUser->tel_fax;
				$output[ 'EMAIL' ]                = $thisJRUser->email;
					
				jr_import( 'vat_number_validation' );
				$validation = new vat_number_validation();
				$validation->get_subject("buyer_registered_byprofile_id",array("profile_id"=>$thisJRUser->id));

				$output[ 'VAT_NUMBER' ]           = $validation->vat_number;
				$output[ 'VAT_NUMBER_VALIDATED' ] = $validation->vat_number_validated;
				
				$validation_success = $validation->vat_number_validation_response;
				
				if ( strlen($validation_success) > 0 )
					{
					$vat_validation = array();
					$vat_validation[0][ 'VAT_NUMBER_VALIDATION_STATUS'] =$validation_success;
					
					if ($validation->vat_number_validated)
						{
						if (using_bootstrap())
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-success';
						else
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-highlight';
						}
					else
						{
						if (using_bootstrap())
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'alert-error';
						else
							$vat_validation[0][ 'VALIDATION_CLASS'] = 'ui-state-error ';
						}
					}
				}

			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME' ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME' ]   = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO' ]   = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET' ]    = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN' ]      = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION' ]    = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE' ]  = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY' ]   = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY, false );
			$output[ '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL' ]     = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL, false );


			$output[ 'HFIRSTNAME' ]                     = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', _JOMRES_COM_MR_DISPGUEST_FIRSTNAME, false );
			$output[ 'HSURNAME' ]                       = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_SURNAME', _JOMRES_COM_MR_DISPGUEST_SURNAME, false );
			$output[ 'HHOUSE' ]                         = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_HOUSE', _JOMRES_COM_MR_DISPGUEST_HOUSE, false );
			$output[ 'HSTREET' ]                        = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_STREET', _JOMRES_COM_MR_DISPGUEST_STREET, false );
			$output[ 'HTOWN' ]                          = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_TOWN', _JOMRES_COM_MR_DISPGUEST_TOWN, false );
			$output[ 'HREGION' ]                        = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION, false );
			$output[ 'HCOUNTRY' ]                       = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY, false );
			$output[ 'HPOSTCODE' ]                      = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', _JOMRES_COM_MR_DISPGUEST_POSTCODE, false );
			$output[ 'HLANDLINE' ]                      = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', _JOMRES_COM_MR_DISPGUEST_LANDLINE, false );
			$output[ 'HMOBILE' ]                        = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_MOBILE', _JOMRES_COM_MR_DISPGUEST_MOBILE, false );
			$output[ 'HFAX' ]                           = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_FAX', _JOMRES_COM_MR_DISPGUEST_FAX, false );
			$output[ 'HEMAIL' ]                         = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', _JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL, false );
			$output[ '_JOMRES_COM_YOURBUSINESS_VATNO' ] = jr_gettext( '_JOMRES_COM_YOURBUSINESS_VATNO', _JOMRES_COM_YOURBUSINESS_VATNO, false );

			$output[ '_JOMRES_REVIEWS_SUBMIT' ] = jr_gettext( '_JOMRES_REVIEWS_SUBMIT', _JOMRES_REVIEWS_SUBMIT, false );
			$output[ 'PAGETITLE' ]              = jr_gettext( '_JOMRES_MY_ACCOUNT_EDIT', _JOMRES_MY_ACCOUNT_EDIT, false, false );

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'edit_my_account.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'validation', $vat_validation );
			$tmpl->displayParsedTemplate();
			}
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_MR_CREDITCARD_EDIT', _JOMRES_MR_CREDITCARD_EDIT );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', _JOMRES_COM_MR_DISPGUEST_FIRSTNAME );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_SURNAME', _JOMRES_COM_MR_DISPGUEST_SURNAME );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_HOUSE', _JOMRES_COM_MR_DISPGUEST_HOUSE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_STREET', _JOMRES_COM_MR_DISPGUEST_STREET );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_TOWN', _JOMRES_COM_MR_DISPGUEST_TOWN );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', _JOMRES_COM_MR_DISPGUEST_POSTCODE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', _JOMRES_COM_MR_DISPGUEST_LANDLINE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_MOBILE', _JOMRES_COM_MR_DISPGUEST_MOBILE );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_FAX', _JOMRES_COM_MR_DISPGUEST_FAX );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', _JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', _JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN );

		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY );
		$output[ ] = jr_gettext( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', _JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL );


		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
