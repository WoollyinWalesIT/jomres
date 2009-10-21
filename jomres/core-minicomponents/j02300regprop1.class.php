<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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
			$selectedCountry="GB";
			$propertyRegion="Pembrokeshire";
			}
			
		if (!subscribers_checkUserHasSubscriptionsToCreateNewProperty() && !$thisJRUser->superPropertyManager && $jrConfig['useSubscriptions']=="1" )
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=list_subscription_packages","");

		$output['REGIONDROPDOWN']=setupRegions($selectedCountry,$propertyRegion);
		$output['COUNTRIESDROPDOWN']=createCountriesDropdown($selectedCountry);
		$output['MOSCONFIGLIVESITE']	=get_showtime('live_site');
		$output['REGISTRATION_INSTRUCTIONS_STEP1']=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1);
		$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['HREGION']= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);

		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		$output['HREALESTATE_YESNO']=jr_gettext('_JOMRES_REALESTATE_YESNO',_JOMRES_REALESTATE_YESNO);
		$output['HREALESTATE_YESNO_DESC']= jr_gettext('_JOMRES_REALESTATE_YESNO_DESC',_JOMRES_REALESTATE_YESNO_DESC);
		
		$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE',_JOMRES_FRONT_PTYPE);
		$output['PROPERTY_TYPE_DROPDOWN']=getPropertyTypeDropdown($ptypeid);
		
		$realestateOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
		$realestateOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
		$output['REALESTATEDROPDOWN']= jomresHTML::selectList($realestateOptions, 'realestate', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['is_real_estate_listing']);
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'register_property1.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
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