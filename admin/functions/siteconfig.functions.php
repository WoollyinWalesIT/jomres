<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

//===============================
// Site Config Functions
//===============================

/**
#
 * Compiles data in preperation for showing the site configuration panel
#
 */
function showSiteConfig(  )
	{
	global $jomresConfig_lang;
	global $jomresConfig_absolute_path, $jomresConfig_admin_template, $jomresConfig_live_site,$version;

	$jrConfig=getSiteSettings();

	$jrtbar = new jomres_toolbar();
	$jrtb  = $jrtbar->startTable();
	$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
	$link = JOMRES_SITEPAGE_URL_ADMIN;
	$jrtb .= $jrtbar->customToolbarItem('saveSiteConfig',$link,_JOMRES_COM_MR_SAVE,$submitOnClick=true,$submitTask="saveSiteConfig",$image);
	
	$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
	$jrtb .= $jrtbar->endTable();

	$lists = array();
	$list = array();
	// make a standard yes/no list
	$yesno = array();
	$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
	$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );

	$langDropdown=getJomresLanguagesDropdown();

	/*
	$slideshowLocation = array();
	$slideshowLocation[] = jomresHTML::makeOption( '1', _JOMRES_SLIDESHOW_LOCATION_TOP );
	$slideshowLocation[] = jomresHTML::makeOption( '2', _JOMRES_SLIDESHOW_LOCATION_BOTTOM );
	$slideshowLocation[] = jomresHTML::makeOption( '3', _JOMRES_SLIDESHOW_LOCATION_BOTH );
	$slideshowLocationDropdown = jomresHTML::selectList($slideshowLocation, 'cfg_slideshowLocation', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['slideshowLocation']);
	*/
	
	$editoryesno = array();
	$editoryesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
	$editoryesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
	//$editoryesno[] = jomresHTML::makeOption( '2', "Flash editor (all fields)" );
	//$editoryesno[] = jomresHTML::makeOption( '3', "Flash editor (property description only, faster)" );

	$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
	$licensekey=doSelectSql($query,1);

	$jsInputDateFormats[] =  jomresHTML::makeOption("%d/%m/%Y", "01/02/2006 - 1st February 2006");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%Y/%m/%d", "2006/02/01");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%m/%d/%Y", "02/01/2006");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%d-%m-%Y", "01-02-2006");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%Y-%m-%d", "2006-02-01");
	$jsInputDateFormats[] =  jomresHTML::makeOption("%m-%d-%Y", "02-01-2006");
	$jsInputFormatDropdownList= jomresHTML::selectList($jsInputDateFormats, 'cfg_cal_input', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['cal_input']);

	if (!isset($jrConfig['cssColourScheme']) )
		$jrConfig['cssColourScheme']="blue";

	$crateFunctions=new jrportal_crate_functions();
	$crateList=$crateFunctions->getAllUnarchivedCrates();
	$crateOptions=array();
	foreach ($crateList as $c)
		{
		$crateOptions[] = jomresHTML::makeOption( $c['id'], $c['title'] );
		}
	$lists['defaultCrate']	= jomresHTML::selectList( $crateOptions, 'cfg_defaultCrate','class="inputbox" size="1"', 'value', 'text', $jrConfig['defaultCrate']);
	$lists['menusAsImages']				= jomresHTML::selectList( $yesno, 'cfg_menusAsImages','class="inputbox" size="1"', 'value', 'text', $jrConfig['menusAsImages']);
	$lists['errorChecking']				= jomresHTML::selectList( $yesno, 'cfg_errorChecking','class="inputbox" size="1"', 'value', 'text', $jrConfig['errorChecking']);
	$lists['useGlobalCurrency']			= jomresHTML::selectList( $yesno, 'cfg_useGlobalCurrency','class="inputbox" size="1"', 'value', 'text', $jrConfig['useGlobalCurrency']);
	$lists['editingModeAffectsAllProperties'] = jomresHTML::selectList( $yesno, 'cfg_editingModeAffectsAllProperties','class="inputbox" size="1"', 'value', 'text', $jrConfig['editingModeAffectsAllProperties'] 	);
	$lists['useGlobalPFeatures'] 		= jomresHTML::selectList( $yesno, 'cfg_useGlobalPFeatures','class="inputbox" size="1"', 'value', 'text', $jrConfig['useGlobalPFeatures'] 	);
	$lists['useGlobalRoomTypes'] 		= jomresHTML::selectList( $yesno, 'cfg_useGlobalRoomTypes','class="inputbox" size="1"', 'value', 'text', $jrConfig['useGlobalRoomTypes'] 	);
	$lists['selfRegistrationAllowed']	= jomresHTML::selectList( $yesno, 'cfg_selfRegistrationAllowed','class="inputbox" size="1"', 'value', 'text', $jrConfig['selfRegistrationAllowed']);
	$lists['isInIframe']				= jomresHTML::selectList( $yesno, 'cfg_isInIframe','class="inputbox" size="1"', 'value', 'text', $jrConfig['isInIframe']);
	$lists['allowHTMLeditor']			= jomresHTML::selectList( $editoryesno, 'cfg_allowHTMLeditor','class="inputbox" size="1"', 'value', 'text', $jrConfig['allowHTMLeditor']);
	$lists['dumpTemplate'] 				= jomresHTML::selectList( $yesno, 'cfg_dumpTemplate', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['dumpTemplate'] );
	if (substr($version,"Mambo") )
		$lists['useSSLinBookingform']	= jomresHTML::selectList( $yesno, 'cfg_useSSLinBookingform', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useSSLinBookingform'] );
	$lists['emailErrors'] 				= jomresHTML::selectList( $yesno, 'cfg_emailErrors', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['emailErrors'] );
	$lists['minimalconfiguration'] 		= jomresHTML::selectList( $yesno, 'cfg_minimalconfiguration', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['minimalconfiguration'] );
	$lists['useJomresEmailCheck'] 		= jomresHTML::selectList( $yesno, 'cfg_useJomresEmailCheck', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useJomresEmailCheck'] );
	$lists['autoDetectJSCalendarLang']	= jomresHTML::selectList( $yesno, 'cfg_autoDetectJSCalendarLang', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['autoDetectJSCalendarLang'] );
	$lists['composite_property_details']	= jomresHTML::selectList( $yesno, 'cfg_composite_property_details', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['composite_property_details'] );

	$lists['sef_property_url_country'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_country'] );
	$lists['sef_property_url_region'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_region', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_region'] );
	$lists['sef_property_url_town'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_town'] );
	$lists['sef_property_url_ptype'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_ptype'] );
	$lists['sef_property_url_propertyname']	= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_propertyname', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_propertyname'] );
	$lists['sef_property_url_property_id']	= jomresHTML::selectList( $yesno, 'cfg_sef_property_url_property_id', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_property_url_property_id'] );
	$lists['sef_search_url_country'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_country', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_country'] );
	$lists['sef_search_url_region'] 		= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_region', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_region'] );
	$lists['sef_search_url_town']			= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_town'] );
	$lists['sef_search_url_ptype']			= jomresHTML::selectList( $yesno, 'cfg_sef_search_url_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['sef_search_url_ptype'] );

	$lists['loggingBooking']		= jomresHTML::selectList( $yesno, 'cfg_loggingBooking', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingBooking'] );
	$lists['loggingGateway']		= jomresHTML::selectList( $yesno, 'cfg_loggingGateway', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingGateway'] );
	$lists['loggingSystem']			= jomresHTML::selectList( $yesno, 'cfg_loggingSystem', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingSystem'] );
	$lists['loggingRequest']		= jomresHTML::selectList( $yesno, 'cfg_loggingRequest', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingRequest'] );
	$lists['loggingPortal']			= jomresHTML::selectList( $yesno, 'cfg_loggingPortal', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['loggingPortal'] );

	$geosearchList = array();
	$geosearchList[] = jomresHTML::makeOption( '', '' );
	$geosearchList[] = jomresHTML::makeOption( 'town', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN );
	$geosearchList[] = jomresHTML::makeOption( 'region', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION );
	$geosearchDropdownList = jomresHTML::selectList($geosearchList, 'cfg_integratedSearch_geosearchtype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_geosearchtype']);

	$lists['integratedSearch_enable']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_enable', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_enable'] );
	$lists['integratedSearch_useCols']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_useCols', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_useCols'] );
	$lists['integratedSearch_selectcombo']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_selectcombo', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_selectcombo'] );
	$lists['integratedSearch_propertyname']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_propertyname', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_propertyname'] );
	$lists['integratedSearch_propertyname_dropdown']= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_propertyname_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_propertyname_dropdown'] );
	$lists['integratedSearch_ptype']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_ptype', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_ptype'] );
	$lists['integratedSearch_ptype_dropdown']		= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_ptype_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_ptype_dropdown'] );
	$lists['integratedSearch_geosearchtype_dropdown']= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_geosearchtype_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_geosearchtype_dropdown'] );
	$lists['integratedSearch_town']					= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_town', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_town'] );
	$lists['integratedSearch_town_dropdown']		= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_town_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_town_dropdown'] );
	
	$lists['integratedSearch_room_type']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_room_type', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_room_type'] );
	$lists['integratedSearch_room_type_dropdown']	= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_room_type_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_room_type_dropdown'] );
	$lists['integratedSearch_features']				= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_features', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_features'] );
	$lists['integratedSearch_features_dropdown']	= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_features_dropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_features_dropdown'] );
	$lists['integratedSearch_description']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_description', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_description'] );
	$lists['integratedSearch_availability']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_availability', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_availability'] );
	$lists['integratedSearch_priceranges']			= jomresHTML::selectList( $yesno, 'cfg_integratedSearch_priceranges', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['integratedSearch_priceranges'] );
		
	$lists['useCaching']							= jomresHTML::selectList( $yesno, 'cfg_useCaching', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useCaching'] );
	$lists['showLangDropdown']						= jomresHTML::selectList( $yesno, 'cfg_showLangDropdown', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['showLangDropdown'] );
	$lists['useJomresMessaging']					= jomresHTML::selectList( $yesno, 'cfg_useJomresMessaging', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useJomresMessaging'] );
	$lists['useSubscriptions']						= jomresHTML::selectList( $yesno, 'cfg_useSubscriptions', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['useSubscriptions'] );
		
	HTML_jomres::showSiteConfig( $jrConfig, $lists,$jsInputFormatDropdownList,$licensekey,$jrtb,$langDropdown,$geosearchDropdownList);
	}

/**
#
 * Saves the site configuration data
#
 */
function saveSiteConfig (  )
	{
	//Add code to check if config file is writeable.
	global $jomresConfig_absolute_path;
	if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
	foreach ($_POST as $k=>$v)
		{
		if (strpos( $k, 'cfg_' ) === 0)
			{
			//if (!get_magic_quotes_gpc())
			//	{
			//	$v = AddSlashes( $v );
			//	}
			if ($k=="cfg_licensekey")
				{
				$lkey = trim($v);
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
				$settingsList=doSelectSql($query);
				if (count($settingsList)==0)
					$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('0','jomres_licensekey','$lkey')";
				else
					$query="UPDATE #__jomres_settings SET `value`='".$lkey."' WHERE property_uid = '0' and akey = 'jomres_licensekey'";
				$result=doInsertSql($query,'');
				$result=unlink($jomresConfig_absolute_path.'/jomres/temp/key.php');
				}
			else
				{
				//echo "K: ".$k." & V: ".$v."<br>";
				$v=jomresGetParam( $_POST, $k, "" );
				if ($k=="cfg_globalCurrency" && $_POST[$k]=='&#8364;') // We'll add this here because the input filter doesn't like euro currency entities.
					{
					$v='&#8364;';
					}
				else
					{
					$dirty = (string) $k;
					$k=addslashes($dirty);
					if (!get_magic_quotes_gpc())
						{
						$v = getEscaped( $v );
						}
					}

				$query="SELECT id FROM #__jomres_site_settings WHERE akey = '".substr( $k, 4 )."'";
				$result=doSelectSql($query);
				if (count($result)==0)
					$query="INSERT INTO #__jomres_site_settings (akey,value) VALUES ('".substr( $k, 4 )."','".$v."')";
				else
					$query="UPDATE #__jomres_site_settings SET `value`='".$v."' WHERE akey = '".substr( $k, 4 )."'";
				//echo $query."<br>";
				doInsertSql($query,"");
				}
			}
		}
	jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN."&task=showSiteConfig", "Configuration saved" );
	}

function getJomresLanguagesDropdown()
	{
	global $jrConfig;
	$langs=array();

	$d = @dir(JOMRESPATH_BASE."/language");
	$docs = array();
	if($d)
		{
		while (FALSE !== ($entry = $d->read()))
			{
			$filename = $entry;
			if( substr($entry,0,1) != '.' && !is_dir(JOMRESPATH_BASE."/language/".$entry) )
				{
				$docs[] =$entry;
				}
			}
		$d->close();
		if (count($docs)>0)
			{
			sort($docs);
			foreach ($docs as $f)
				{
				$langs[]=jomresHTML::makeOption( $f, $f );
				}
			$langDropdown = jomresHTML::selectList( $langs, 'cfg_siteLang','class="inputbox" size="1"', 'value', 'text', $jrConfig['siteLang']);
			return $langDropdown;
			}
		}
	}

?>