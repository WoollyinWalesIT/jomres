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

class j06000show_hotel_details
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
		$output = array ();

		if ( isset( $_REQUEST[ 'property_uid' ] ) ) 
			$property_uid = jomresGetParam( $_REQUEST, 'property_uid', 0 );
		else
			$property_uid = (int) $componentArgs[ 'property_uid' ];

		if ( $property_uid == 0 )
			{
			$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
			if ( $thisJRUser->userIsManager )
				{
				$property_uid = getDefaultProperty();
				}
			else
				{
				trigger_error( "Unable to view property details, either property id not found, or property id tampered with.", E_USER_ERROR );
				return;
				}
			}

		$mrConfig = getPropertySpecificSettings($property_uid);
		
		if ($mrConfig['property_business_name']=='')
			{
			$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$basic_property_details->gather_data($property_uid);
	
			$output[ 'HPROPERTYNAME' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME' );
			$output[ 'HSTREET' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET' );
			$output[ 'HTOWN' ]         = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN' );
			$output[ 'HREGION' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
			$output[ 'HCOUNTRY' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
			$output[ 'HPOSTCODE' ]     = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE' );
			$output[ 'HTELEPHONE' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE' );
			$output[ 'HFAX' ]          = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX' );
			$output[ 'HEMAIL' ]        = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL' );
	
			$output[ 'PROPERTY_NAME' ] = $basic_property_details->property_name;
			$output[ 'STREET' ]        = $basic_property_details->property_street;
			$output[ 'TOWN' ]          = $basic_property_details->property_town;
			$output[ 'REGION' ]        = $basic_property_details->property_region;
			$output[ 'COUNTRY' ]       = $basic_property_details->property_country;
			$output[ 'POSTCODE' ]      = $basic_property_details->property_postcode;
			$output[ 'TELEPHONE' ]     = $basic_property_details->property_tel;
			$output[ 'FAX' ]           = $basic_property_details->property_fax;
			$output[ 'EMAIL' ]         = $basic_property_details->property_email;
	
			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'show_hotel_details.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$this->retVals = $tmpl->getParsedTemplate();
			}
		else
			{
			$output[ 'HBUSINESSNAME' ] = jr_gettext( '_JOMRES_COM_YOURBUSINESS_NAME', '_JOMRES_COM_YOURBUSINESS_NAME' );
			$output[ 'HHOUSENO' ]       = jr_gettext( '_JOMRES_COM_YOURBUSINESSADDRESS', '_JOMRES_COM_YOURBUSINESSADDRESS' );
			$output[ 'HSTREET' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET' );
			$output[ 'HTOWN' ]         = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN' );
			$output[ 'HREGION' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
			$output[ 'HCOUNTRY' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
			$output[ 'HPOSTCODE' ]     = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE' );
			$output[ 'HTELEPHONE' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE' );
			$output[ 'HEMAIL' ]        = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL' );
			$output[ '_JOMRES_COM_YOURBUSINESS_VATNO' ]        = jr_gettext( '_JOMRES_COM_YOURBUSINESS_VATNO', '_JOMRES_COM_YOURBUSINESS_VATNO' );
	
			$output[ 'BUSINESSNAME' ] = $mrConfig['property_business_name'];
			$output[ 'HOUSENO' ]        = $mrConfig['property_business_houseno'];
			$output[ 'STREET' ]        = $mrConfig['property_business_street'];
			$output[ 'TOWN' ]          = $mrConfig['property_business_town'];
			$output[ 'REGION' ]        = $mrConfig['property_business_region'];
			$output[ 'COUNTRY' ]       = $mrConfig['property_business_country'];
			$output[ 'POSTCODE' ]      = $mrConfig['property_business_postcode'];
			$output[ 'TELEPHONE' ]     = $mrConfig['property_business_telephone'];
			$output[ 'EMAIL' ]         = $mrConfig['property_business_email'];
			$output[ 'PROPERTY_VAT_NUMBER' ] = $mrConfig['property_vat_number'];
	
			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'show_property_business_details.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$this->retVals = $tmpl->getParsedTemplate();
			}

		if ( isset( $_REQUEST[ 'property_uid' ] ) ) echo $this->retVals;

		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}