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

class j06005show_guest_details
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !$thisJRUser->userIsRegistered ) return;

		$guestUid = $componentArgs[ 'guest_uid' ];

		if ( $thisJRUser->userIsManager )
			{
			$property_uid = getDefaultProperty();
			$query        = "SELECT guests_uid FROM #__jomres_guests WHERE guests_uid = '" . (int) $guestUid . "' AND property_uid IN (" . implode(',',$thisJRUser->authorisedProperties) . ") ";
			$result       = doSelectSql( $query );
			if ( count( $result ) < 1 || count( $result ) > 1 )
				{
				throw new Exception("Unable to view guest details, either guest id not found, or guest id tampered with.");
				}
			}
		elseif ( !$thisJRUser->is_partner)
			{
			$userid = $thisJRUser->id;
			$query  = "SELECT guests_uid FROM #__jomres_guests WHERE `mos_userid`= " . (int) $userid . "";
			$result = doSelectSql( $query );
			if ( count( $result ) < 1 )
				{
				throw new Exception("Unable to view guest details, either guest id not found, or guest id tampered with.");
				}
			}
		elseif ( $thisJRUser->is_partner)
			{
			$partners = jomres_singleton_abstract::getInstance( 'jomres_partners' );
			$partner_guests = $partners->get_guest_uids_for_partner($thisJRUser->id);
			if ( count( $partner_guests ) < 1 )
				{
				throw new Exception("Unable to view guest details, this partner doesn't have sufficient rights to view this guest's details.");
				}
			}
		
		$query           = "SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,email,vat_number FROM #__jomres_guests WHERE guests_uid = " . (int) $guestUid . "";
		$guestData       = doSelectSql( $query );
		$numberOfReturns = count( $guestData );
		$vat_output=array();
		if ( $numberOfReturns > 0 )
			{
			foreach ( $guestData as $data )
				{
				$output[ 'FIRSTNAME' ] = $data->firstname;
				$output[ 'SURNAME' ]   = $data->surname;
				$output[ 'HOUSE' ]     = $data->house;
				$output[ 'STREET' ]    = $data->street;
				$output[ 'TOWN' ]      = $data->town;
				$output[ 'REGION' ]    = find_region_name($data->county);
				$output[ 'COUNTRY' ]   = getSimpleCountry( $data->country );
				$output[ 'POSTCODE' ]  = $data->postcode;
				$output[ 'LANDLINE' ]  = $data->tel_landline;
				$output[ 'MOBILE' ]    = $data->tel_mobile;
				$output[ 'FAX' ]       = $data->tel_fax;
				$output[ 'EMAIL' ]     = $data->email;
				$vat_output[0][ 'VAT_NUMBER' ]     = $data->vat_number;
				}
			}
		else
			return;
		
		$output[ 'TITLE' ]      = jr_gettext( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST' );
		$output[ 'HFIRSTNAME' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME' );
		$output[ 'HSURNAME' ]   = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME' );
		$output[ 'HHOUSE' ]     = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE' );
		$output[ 'HSTREET' ]    = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET' );
		$output[ 'HTOWN' ]      = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN' );
		$output[ 'HREGION' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
		$output[ 'HCOUNTRY' ]   = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
		$output[ 'HPOSTCODE' ]  = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE' );
		$output[ 'HLANDLINE' ]  = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE' );
		$output[ 'HMOBILE' ]    = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE' );
		$output[ 'HFAX' ]       = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX' );
		$output[ 'HEMAIL' ]     = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL' );
		$vat_output[0][ '_JOMRES_COM_YOURBUSINESS_VATNO' ]     = jr_gettext( '_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO' );

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'show_guest_details.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		if (trim($vat_output[0][ 'VAT_NUMBER' ]) != "")
			{
			$tmpl->addRows( 'vat_output', $vat_output );
			}
		$this->retVals = $tmpl->getParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}