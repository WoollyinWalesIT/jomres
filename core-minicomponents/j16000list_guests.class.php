<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000list_guests
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
	 
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
		
		jr_import("jomres_properties");
		$properties = new jomres_properties();
		$properties->get_all_properties();
		$property_uids = $properties->all_property_uids;
		
		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->get_property_name_multi($property_uids['all_propertys']);

		$output	 = array ();
		$rows	   = array ();
		$pageoutput = array ();

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_HLIST_GUESTS', '_JOMRES_HLIST_GUESTS', false);
		$output[ '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO' ] = jr_gettext('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', false);
		
		$output[ 'HPROPERTYNAME' ] = jr_gettext('_JOMRES_SORTORDER_PROPERTYNAME', '_JOMRES_SORTORDER_PROPERTYNAME', false);
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

		$query = "SELECT
			guests_uid,
			enc_firstname,
			enc_surname,
			enc_house,
			enc_street,
			enc_town,
			enc_county,
			enc_country,
			enc_postcode,
			enc_tel_landline,
			enc_tel_mobile,
			enc_email,
			enc_vat_number,
			property_uid
			FROM
			#__jomres_guests";
			
		$result = doSelectSql($query);

		foreach ( $result as $g ) {
			$r = array ();

			$r['FIRSTNAME'] = $this->jomres_encryption->decrypt($g->enc_firstname);
			$r['SURNAME'] = $this->jomres_encryption->decrypt($g->enc_surname);
			$r['HOUSE'] = $this->jomres_encryption->decrypt($g->enc_house);
			$r['STREET'] = $this->jomres_encryption->decrypt($g->enc_street);
			$r['TOWN'] = $this->jomres_encryption->decrypt($g->enc_town);
			$r['COUNTY'] = jomres_decode(find_region_name($this->jomres_encryption->decrypt($g->enc_county)));
			$r['POSTCODE'] = $this->jomres_encryption->decrypt($g->enc_postcode);
			$r['COUNTRY'] = $this->jomres_encryption->decrypt($g->enc_country);
			$r['TEL_LANDLINE'] = $this->jomres_encryption->decrypt($g->enc_tel_landline);
			$r['TEL_MOBILE'] = $this->jomres_encryption->decrypt($g->enc_tel_mobile);
			$r['EMAIL'] = $this->jomres_encryption->decrypt($g->enc_email);
			$r['VAT_NUMBER'] = $this->jomres_encryption->decrypt($g->enc_vat_number);

			if (isset($basic_property_details->property_names[$g->property_uid])) {
				$r['PROPERTY_NAME'] = $basic_property_details->property_names[$g->property_uid];
			} else {
				$r['PROPERTY_NAME'] = jr_gettext('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', false);
			}
			
			if ($g->property_uid > 0 ) {
				$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
				$toolbar->newToolbar();
				$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=anonymise_guest&guest_id=' . $g->guests_uid.'&property_uid='.$g->property_uid ), jr_gettext( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', false ) );
				$r['LINKTEXT'] = $toolbar->getToolbar();
			} else {
				$r['LINKTEXT'] = jr_gettext('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', false);
			}

			$rows[] = $r;
		}

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext("COMMON_CANCEL",'COMMON_CANCEL',false) );
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_guests.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}


	function getRetVals()
		{
		return null;
		}
	}
