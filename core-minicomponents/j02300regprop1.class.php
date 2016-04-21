<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j02300regprop1 {
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager )
			return;

		if (isset($_REQUEST['new_property_country']) && !empty($_REQUEST['new_property_country']))
			$selectedCountry	= jomresGetParam( $_REQUEST, 'new_property_country', "" );
		else
			{
			$selectedCountry=$jrConfig['limit_property_country_country'];
			$propertyRegion="";
			}

		$output['REGIONDROPDOWN']=setupRegions($selectedCountry,$propertyRegion);
		if ($jrConfig['limit_property_country'] == "0")
			{
			$output['REGIONDROPDOWN']=setupRegions($selectedCountry,$propertyRegion);
			$output['COUNTRIESDROPDOWN']=createCountriesDropdown($selectedCountry,"new_property_country",false);
			}
		else
			{
			$output['REGIONDROPDOWN']=setupRegions($jrConfig['limit_property_country_country'],$propertyRegion);
			$output['COUNTRIESDROPDOWN']= getSimpleCountry($jrConfig['limit_property_country_country']);
			}

		$output['MOSCONFIGLIVESITE']								=get_showtime('live_site');
		$output['REGISTRATION_INSTRUCTIONS_STEP1']					=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1',false);
		$output['HCOUNTRY']											=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',false);
		$output['HREGION']											=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',false);
		$output['HNAME']											=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',false);
		$output['HEMAIL']											=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',false);
		$output['_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED']			=jr_gettext('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED','_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED',false);
		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		$output['MANAGEMENTPROCESS']=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS','_JOMRES_PROPERTYMANAGEMENTPROCESS',false);
		$output['MANAGEMENTPROCESS_DESC']= jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC','_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',false);
		
		$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE','_JOMRES_FRONT_PTYPE',false);
		$output['PROPERTY_TYPE_DROPDOWN']=getPropertyTypeDropdown($ptypeid , true );
 
		$MiniComponents->triggerEvent('02299');
		$property_management_process = array();
		foreach ( $MiniComponents->miniComponentData['02299'] as $management_process)
			{
			$r = array();
			$property_management_process[]=jomresHTML::makeOption( $management_process['next_step'], $management_process['title'] );
			$r['description'] = $management_process['description'];
			$rows[]=$r;
			}

		$output['REALESTATEDROPDOWN']= jomresHTML::selectList($property_management_process, 'management_process', 'class="inputbox" size="1"', 'value', 'text', '0' );
		$output['_JOMRES_REVIEWS_SUBMIT']=jr_gettext('_PN_NEXT','_PN_NEXT',false);
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'register_property1.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1');
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
		$output[]		=jr_gettext('_JOMRES_REALESTATE_YESNO','_JOMRES_REALESTATE_YESNO');
		$output[]		= jr_gettext('_JOMRES_REALESTATE_YESNO_DESC','_JOMRES_REALESTATE_YESNO_DESC');
		
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS','_JOMRES_PROPERTYMANAGEMENTPROCESS');
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC','_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC');
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL','_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL');
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE','_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE');

		foreach ($output as $o)
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
?>