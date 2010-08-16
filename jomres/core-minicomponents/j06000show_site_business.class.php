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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000show_site_business
	{
	function j06000show_site_business($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		$output['HBUSINESSNAME']=jr_gettext('_JOMRES_COM_YOURBUSINESS_NAME',_JOMRES_COM_YOURBUSINESS_NAME);
		$output['HVATNO']=jr_gettext('_JOMRES_COM_YOURBUSINESS_VATNO',_JOMRES_COM_YOURBUSINESS_VATNO);
		$output['HADDRESS']=jr_gettext('_JOMRES_COM_YOURBUSINESSADDRESS',_JOMRES_COM_YOURBUSINESSADDRESS);
		$output['HSTREET']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output['HTOWN']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output['HREGION']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['HPOSTCODE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
		$output['HTELEPHONE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
		$output['HFAX']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
		$output['HEMAIL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);

		$output['BUSINESS_NAME'] =$jrConfig['business_name'];
		$output['VATNO'] =$jrConfig['business_vat_number'];
		$output['STREET']=$jrConfig['business_address'];
		$output['STREET']=$jrConfig['business_address'];
		$output['TOWN']=$jrConfig['business_town'];
		$output['REGION']=$jrConfig['business_region'];
		$output['COUNTRY']=$jrConfig['business_country'];
		$output['POSTCODE']=$jrConfig['business_postcode'];
		$output['TELEPHONE']=$jrConfig['business_telephone'];
		$output['EMAIL']=$jrConfig['business_email'];

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'show_business_details.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$this->retVals=$tmpl->getParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}	
	}