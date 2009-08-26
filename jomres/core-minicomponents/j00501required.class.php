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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $configurationPanel;
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$lists=$componentArgs['lists'];
		
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