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

class j16000addproperty
	{
	function j16000addproperty()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		global $jrportalConfig;
		jr_import('jrportal_crate_functions');
		$crateFunctions=new jrportal_crate_functions();
		$crateFunctions->getAllUnarchivedCrates();
		$output['DEFAULTCREATE'] = _JRPORTAL_CONFIG_DEFAULT_CRATE;
		$output['CRATE_DROPDOWN']=$crateFunctions->makeCrateDropdown($jrportalConfig['defaultCrate'],$idx=$p['id']);
		jr_import('jrportal_user_functions');
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
		$output['MOSCONFIGLIVESITE']	=get_showtime('live_site');
		$output['REGISTRATION_INSTRUCTIONS_STEP1']=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1);
		$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['HREGION']= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);

		
		$jrtbar =jomres_getSingleton('jomres_toolbar');
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