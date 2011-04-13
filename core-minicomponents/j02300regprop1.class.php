<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 *
 #
* @package Jomres
#
 */
class j02300regprop1 {
	/**
	#
	 * Constructor:
	#
	 */
	function j02300regprop1()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager )
			return;

		if (isset($_REQUEST['selectedCountry']) && !empty($_REQUEST['selectedCountry']))
			$selectedCountry	= jomresGetParam( $_REQUEST, 'selectedCountry', "" );
		else
			{
			$selectedCountry=$jrConfig['limit_property_country_country'];
			$propertyRegion="";
			}
			
		if (!subscribers_checkUserHasSubscriptionsToCreateNewProperty() && !$thisJRUser->superPropertyManager && $jrConfig['useSubscriptions']=="1" )
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=list_subscription_packages","");

		$output['REGIONDROPDOWN']=setupRegions($selectedCountry,$propertyRegion);
		if ($jrConfig['limit_property_country'] == "0")
			{
			$output['REGIONDROPDOWN']=setupRegions($selectedCountry,$propertyRegion);
			$output['COUNTRIESDROPDOWN']=createCountriesDropdown($selectedCountry);
			}
		else
			{
			$output['REGIONDROPDOWN']=setupRegions($jrConfig['limit_property_country_country'],$propertyRegion);
			$output['COUNTRIESDROPDOWN']= getSimpleCountry($jrConfig['limit_property_country_country']);
			}

		$output['MOSCONFIGLIVESITE']	=get_showtime('live_site');
		$output['REGISTRATION_INSTRUCTIONS_STEP1']=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1);
		$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['HREGION']= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);

		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		$output['MANAGEMENTPROCESS']=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS',_JOMRES_PROPERTYMANAGEMENTPROCESS);
		$output['MANAGEMENTPROCESS_DESC']= jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC);
		
		$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE',_JOMRES_FRONT_PTYPE);
		$output['PROPERTY_TYPE_DROPDOWN']=getPropertyTypeDropdown($ptypeid);
 
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

		$output[]		=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output['HREALESTATE_YESNO']=jr_gettext('_JOMRES_REALESTATE_YESNO',_JOMRES_REALESTATE_YESNO);
		$output['HREALESTATE_YESNO_DESC']= jr_gettext('_JOMRES_REALESTATE_YESNO_DESC',_JOMRES_REALESTATE_YESNO_DESC);
		
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS',_JOMRES_PROPERTYMANAGEMENTPROCESS);
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC);
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL);
		$output[]		=jr_gettext('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE);

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