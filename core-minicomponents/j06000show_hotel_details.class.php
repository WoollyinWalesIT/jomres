<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06000show_hotel_details
	{
	function j06000show_hotel_details($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
				
		$property_uid= (int)$componentArgs['property_uid'];
		if ($property_uid ==0)
			{
			$thisJRUser=jomres_getSingleton('jr_user');
			if ($thisJRUser->userIsManager)
				{
				$property_uid=getDefaultProperty();
				}
			else
				{
				trigger_error ("Unable to view property details, either property id not found, or property id tampered with.", E_USER_ERROR);
				return;
				}
			}

		$basic_property_details =jomres_getSingleton('basic_property_details');
		$basic_property_details->gather_data($property_uid);

		$output['HPROPERTYNAME']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
		$output['HSTREET']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output['HTOWN']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output['HREGION']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['HPOSTCODE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
		$output['HTELEPHONE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
		$output['HFAX']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
		$output['HEMAIL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);

		$output['PROPERTY_NAME'] = $basic_property_details->property_name;
		$output['STREET']=$basic_property_details->property_street;
		$output['TOWN']=$basic_property_details->property_town;
		$output['REGION']=$basic_property_details->property_region;
		$output['COUNTRY']=$basic_property_details->property_country;
		$output['POSTCODE']=$basic_property_details->property_postcode;
		$output['TELEPHONE']=$basic_property_details->property_tel;
		$output['FAX']=$basic_property_details->property_fax;
		$output['EMAIL']=$basic_property_details->property_email;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'show_hotel_details.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$this->retVals=$tmpl->getParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}	
	}