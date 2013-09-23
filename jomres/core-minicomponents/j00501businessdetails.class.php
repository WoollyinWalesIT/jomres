<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Configuration panel for miscelleneous options
#
 *
 * @package Jomres
#
 */
class j00501businessdetails
	{
	/**
	#
	 * Constructor: Constructs and outputs miscelleneous options
	#
	 */
	function j00501businessdetails( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$thisJRUser         = jomres_singleton_abstract::getInstance( 'jr_user' );
		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();
		$mrConfig           = getPropertySpecificSettings();
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 )
			return;

		$lists        = $componentArgs[ 'lists' ];
		$editIconSize = $componentArgs[ 'editIconSize' ];
		
		$configurationPanel->startPanel( jr_gettext( _JOMRES_COM_YOURBUSINESS, '_JOMRES_COM_YOURBUSINESS', false ) );
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_YOURBUSINESS_NAME, '_JOMRES_COM_YOURBUSINESS_NAME', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_name" value="'.$mrConfig['property_business_name'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		if ($mrConfig[ 'vat_number_validated' ] =="1")
			{
			$status = jr_gettext( _JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED, '_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', false );
			}
		else
			{
			$status = jr_gettext( _JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED, '_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', false );
			}
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_YOURBUSINESS_VATNO, '_JOMRES_COM_YOURBUSINESS_VATNO', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_vat_number" value="' . $mrConfig[ 'property_vat_number' ] . '" />'. $status);
		$configurationPanel->setright( jr_gettext( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", _JOMRES_VAT_PROPERTY_NUMBER_DESC, false ) );
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_YOURBUSINESSADDRESS, '_JOMRES_COM_YOURBUSINESSADDRESS', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_houseno" value="'.$mrConfig['property_business_houseno'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET, '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_street" value="'.$mrConfig['property_business_street'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN, '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_town" value="'.$mrConfig['property_business_town'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION, '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_region" value="'.$mrConfig['property_business_region'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY, '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_country" value="'.$mrConfig['property_business_country'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE, '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_postcode" value="'.$mrConfig['property_business_postcode'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE, '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_telephone" value="'.$mrConfig['property_business_telephone'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( _JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL, '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="50" name="cfg_property_business_email" value="'.$mrConfig['property_business_email'].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
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