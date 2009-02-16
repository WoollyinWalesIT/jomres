<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000addproperty
	{
	function j16000addproperty()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		global $indexphp,$jomresConfig_live_site,$jrportalConfig;
		$crateFunctions=new jrportal_crate_functions();
		$crateFunctions->getAllUnarchivedCrates();
		$output['DEFAULTCREATE'] = _JRPORTAL_CONFIG_DEFAULT_CRATE;
		$output['CRATE_DROPDOWN']=$crateFunctions->makeCrateDropdown($jrportalConfig['defaultCrate'],$idx=$p['id']);
		$userFunctions=new jrportal_user_functions();
		$output['HMANAGER'] = _JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN;
		$output['MANAGER_DROPDOWN']=$userFunctions->makeManagersDropdown();

		//$propertyRegion[]=array("AF","");
		if (isset($_REQUEST['selectedCountry']) && !empty($_REQUEST['selectedCountry']))
			$selectedCountry	= jomresGetParam( $_REQUEST, 'selectedCountry', "" );
		else
			{
			$selectedCountry="GB";
			$propertyRegion="Pembrokeshire";
			}
		$rgns=setupRegions($selectedCountry,$propertyRegion);
		if (!isset($rgns) || empty($rgns) )
			$output['REGIONDROPDOWN']="N/A";
		else
			$output['REGIONDROPDOWN']=setupRegions($selectedCountry,$propertyRegion);

		$output['COUNTRIESDROPDOWN']=createCountriesDropdown($selectedCountry);
		$output['MOSCONFIGLIVESITE']	=$jomresConfig_live_site;
		$output['REGISTRATION_INSTRUCTIONS_STEP1']=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1);
		$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['HREGION']= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output['ITEMID']	=$Itemid;

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/next.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('saveCrate',$link,$text="Next",$submitOnClick=true,$submitTask="addproperty2",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;


		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'register_property1.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}