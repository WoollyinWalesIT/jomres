<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Configuration panel for required fields in the booking form
 #
* @package Jomres
#
 */
class j00501required {
	/**
	#
	 * Constructor: Outputs dropdown configuration options that enable you to choose which fields are required in the booking form.
	#
	 */
	function j00501required($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings();
		if ($mrConfig['is_real_estate_listing']==1)
			return;
		$configurationPanel=$componentArgs['configurationPanel'];
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$lists=$componentArgs['lists'];
		$thisJRUser=jomres_getSingleton('jr_user');
		if (($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager) )
			{
			$configurationPanel->startPanel(_JOMRES_REQUIREDFIELDS);

			$configurationPanel->setleft(_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_name']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_MR_DISPGUEST_SURNAME);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_surname']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_houseno']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_street']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_town']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_postcode']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_region']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_country']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_tel']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_mobile']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);
			$configurationPanel->setmiddle($lists['bookingform_requiredfields_email']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->endPanel();
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