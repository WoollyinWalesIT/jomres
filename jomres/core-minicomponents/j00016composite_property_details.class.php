<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00016composite_property_details {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00016composite_property_details($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$property_uid=(int)$componentArgs['property_uid'];  
		$mrConfig=getPropertySpecificSettings($property_uid);
		$componentArgs['property_uid']=$property_uid;
		
		// We will pass some of the old templates back as generated templates, whereas some of the data will be passed back as arrays to be processed into the new template.
		// Items passed back as arrays : j00015, everything else is passed back as an already compiled template
		// We're going to run 00015 because this is the controlling script that compiles all the property data. There's no reason to regenerate all of the same 
		// information again as we've already written to code to do it, instead we'll just rejig how we're going to use it.
		// The view property script will return an indexed array of all the property information so we'll need to extract that from the MiniComponents handler and re-enter that into our composite template
		// Other scripts will hand back the entire templates, such as tariff lists, slideshows etc and we'll just drop them straight into variables that are passed to our composite template
		
		// The following scripts are called
		// j01060 slideshows
		// j01020 tariffs (either the verbose or the compact view, depending on General Config)
		// j01055 Rooms list
		// j01050 geocoder (google maps)
		// j00017 SRP avl cal
		// j00018 MRP avl cal
		
		$MiniComponents->triggerEvent('00015',$componentArgs);
		$output				=$MiniComponents->miniComponentData['00015']['viewproperty']['property_deets'][0];
		$featureList		=$MiniComponents->miniComponentData['00015']['viewproperty']['featurelist'];
		$rtRows				=$MiniComponents->miniComponentData['00015']['viewproperty']['roomtypes'];
		$bookinglink		=$MiniComponents->miniComponentData['00015']['viewproperty']['bookinglink'];
		$slideshowlink		=$MiniComponents->miniComponentData['00015']['viewproperty']['slideshowlink'];
		$tariffslink		=$MiniComponents->miniComponentData['00015']['viewproperty']['tariffslink'];
		$gallerylink		=$MiniComponents->miniComponentData['00015']['viewproperty']['gallerylink'];
		$roomslistlink		=$MiniComponents->miniComponentData['00015']['viewproperty']['roomslistlink'];
		$mappinklink		=$MiniComponents->miniComponentData['00015']['viewproperty']['mappinklink'];

		// j01060 slideshows
		if ($mrConfig['showSlideshowInline']=="1")
			{
			$anchor = ereg_replace("[^A-Za-z0-9]", "", $output['TITLE_SLIDESHOW']);
			$slideshowcontent[]=array('SLIDESHOW_TITLE'=>$output['TITLE_SLIDESHOW'],'SLIDESHOW'=>$MiniComponents->miniComponentData['01060']['slideshow']['slideshow'],'SLIDESHOW_TITLE_ANCHOR'=>$anchor);
			$slideshowcontent_anchor[0]['SLIDESHOW_TITLE']=$slideshowcontent[0]['SLIDESHOW_TITLE'];
			$slideshowcontent_anchor[0]['SLIDESHOW_TITLE_ANCHOR']=$anchor;
			}

		// j01050 geocoder (google maps)
		
		if (strlen($MiniComponents->miniComponentData['01050']['x_geocoder'])>0)
			{
			$anchor = ereg_replace("[^A-Za-z0-9]", "", $output['TITLE_MAP']);
			$mapcontent[]=array('MAP_TITLE'=>$output['TITLE_MAP'],'GOOGLE_MAPS'=>$MiniComponents->miniComponentData['01050']['x_geocoder'],'MAP_TITLE_ANCHOR'=>$anchor);
			$output['GOOGLE_MAPS']=$MiniComponents->miniComponentData['01050']['x_geocoder'];
			$output['MAP_TITLE_ANCHOR']=$anchor;
			}
		// j01020 tariffs (either the verbose or the compact view, depending on General Config)
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($mrConfig['showTariffsInline']=="1")
				{
				$anchor = ereg_replace("[^A-Za-z0-9]", "", $output['TITLE_TARIFF']);
				$tariffslist[] = array('TARIFFS_LIST_TITLE'=>$output['TITLE_TARIFF'],'INLINE_TARIFFS'=>$MiniComponents->miniComponentData['01020']['showtariffs'],'TITLE_TARIFF_ANCHOR'=>$anchor);
				$tariffslist_anchor[0]['TITLE_TARIFF']=$tariffslist[0]['TARIFFS_LIST_TITLE'];
				$tariffslist_anchor[0]['TITLE_TARIFF_ANCHOR']=$anchor;
				}
			}
		
		
		// j00017 SRP avl cal
		// j00018 MRP avl cal
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($mrConfig['showOnlyAvailabilityCalendar'])
				{
				if ($mrConfig['singleRoomProperty'])
					{
					echo $MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar'];
					}
				else
					{
					echo $MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar'];
					}
				return;
				}
			}
		if ($mrConfig['is_real_estate_listing']==0)
			{
			$anchor = ereg_replace("[^A-Za-z0-9]", "", $output['TITLE_AVAILABILITYCALENDAR']);
			if (($mrConfig['showAvailabilityCalendar'] && $mrConfig['singleRoomProperty']) )
				{
				$availabilitycalendarcontent[] = array('AVLCALENDAR_TITLE'=>$output['TITLE_AVAILABILITYCALENDAR'],'AVAILABILITY_CALENDAR'=>$MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar'],'AVLCALENDAR_TITLE_ANCHOR'=>$anchor);
				$output['AVAILABILITY_CALENDAR']=$MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar'];
				$availabilitycalendarcontent_anchor[0]['AVLCALENDAR_TITLE']=$availabilitycalendarcontent[0]['AVLCALENDAR_TITLE'];
				$availabilitycalendarcontent_anchor[0]['AVLCALENDAR_TITLE_ANCHOR']=$anchor;
				}
			elseif ($mrConfig['showAvailabilityCalendar'])
				{
				$availabilitycalendarcontent[] = array('AVLCALENDAR_TITLE'=>$output['TITLE_AVAILABILITYCALENDAR'],'AVAILABILITY_CALENDAR'=>$MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar'],'AVLCALENDAR_TITLE_ANCHOR'=>$anchor);
				$output['AVAILABILITY_CALENDAR']=$MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar'];
				$availabilitycalendarcontent_anchor[0]['AVLCALENDAR_TITLE']=$availabilitycalendarcontent[0]['AVLCALENDAR_TITLE'];
				$availabilitycalendarcontent_anchor[0]['AVLCALENDAR_TITLE_ANCHOR']=$anchor;
				}
			
			}
			

		// j01055 Rooms list
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($mrConfig['roomslistinpropertydetails']=="1")
				{
				$anchor = ereg_replace("[^A-Za-z0-9]", "", $output['TITLE_ROOMSLIST']);
				$roomslist[]=array('ROOMS_LIST_TITLE'=>$output['TITLE_ROOMSLIST'],'ROOMS_LIST'=>$MiniComponents->miniComponentData['01055']['showroomdetails'],'TITLE_ROOMSLIST_ANCHOR'=>$anchor);
				$roomslist_anchor[0]['TITLE_ROOMSLIST']=$roomslist[0]['ROOMS_LIST_TITLE'];
				$roomslist_anchor[0]['TITLE_ROOMSLIST_ANCHOR']=$anchor;
				}
			}

		$discount_text	= "";
		$discount_output = array();
		if ($mrConfig['singleRoomProperty'] == 1)  // Using last minute calculations
			{
			$this->returnValue=array();
			$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = '".(int)$property_uid."' AND `akey`='lastminuteactive' AND `value`='1' LIMIT 1";
			$lastminSettings = doSelectSql($query);
			if (count($lastminSettings)>0)
				{
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '".(int)$property_uid."' AND `akey`='lastminutethreshold' LIMIT 1";
				$lastminutethreshold = doSelectSql($query,1);
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '".(int)$property_uid."' AND `akey`='lastminutediscount' LIMIT 1";
				$lastminutediscount = doSelectSql($query,1);
				
				$todaysDate=date("Y/m/d");
				$date_elements	 = explode("/",$todaysDate);
				$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$lastminutethreshold,$date_elements[0]);
				$latestDate=JSCalmakeInputDates(date("Y/m/d",$unixTodaysDate));
				
				$discount_text	=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE,false,true);
				$discount_text	.=	$lastminutediscount;
				$discount_text	.=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID,false,true);
				$discount_text	.=	$latestDate;
				$discount_text	.=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST',_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST,false,true);
				}
			}
		else // Using wiseprice calculations
			{
			$this->returnValue=array();
			$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = '".(int)$property_uid."' AND `akey`='wisepriceactive' AND `value`='1' LIMIT 1";
			$wisepriceSettings = doSelectSql($query);
			if (count($wisepriceSettings)>0)
				{
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '".(int)$property_uid."' AND `akey`='wisepricethreshold' LIMIT 1";
				$wisepricethreshold = doSelectSql($query,1);
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '".(int)$property_uid."' AND `akey`='wiseprice75discount' LIMIT 1";
				$wisepricediscount = doSelectSql($query,1);
				
				$todaysDate=date("Y/m/d");
				$date_elements	 = explode("/",$todaysDate);
				$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$wisepricethreshold,$date_elements[0]);
				$latestDate=JSCalmakeInputDates(date("Y/m/d",$unixTodaysDate));

				$discount_text	=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE,false,true);
				$discount_text	.=	(float)$wisepricediscount.jr_gettext('_JOMCOMP_LASTMINUTE_ORMORE',_JOMCOMP_LASTMINUTE_ORMORE,false,true);
				$discount_text	.=	$latestDate;
				$discount_text	.=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST',_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST,false,true);
				}
			}
		if ($discount_text != "")
			$discount_output[] = array("DISCOUNT_OUTPUT"=>$discount_text);
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$mcOutput=$MiniComponents->getAllEventPointsData('00015');
		if (count($mcOutput)>0)
			{
			foreach ($mcOutput as $key=>$val)
				{
				$tmpl->addRows( 'customOutput_'.$key, array($val) );
				}
			}
			
		$tmpl->addRows( 'mapcontent', $mapcontent );
		if ($mrConfig['is_real_estate_listing']==0)
			{
			$tmpl->addRows( 'tariffslist', $tariffslist );
			$tmpl->addRows( 'tariffslist_anchor', $tariffslist_anchor );
			}
		if ($mrConfig['is_real_estate_listing']==0)
			{
			$tmpl->addRows( 'availabilitycalendarcontent_anchor', $availabilitycalendarcontent_anchor );
			$tmpl->addRows( 'availabilitycalendarcontent', $availabilitycalendarcontent );
			}
		if ($discount_text != "")
			$tmpl->addRows( 'discount_output', $discount_output );
			
		$tmpl->addRows( 'slideshowcontent_anchor', $slideshowcontent_anchor );
		$tmpl->addRows( 'slideshowcontent', $slideshowcontent );
		
		if ($mrConfig['is_real_estate_listing']==0)
			{
			if ($mrConfig['singleRoomProperty']=="0")
				{
				$tmpl->addRows( 'roomslist', $roomslist );
				$tmpl->addRows( 'roomslist_anchor', $roomslist_anchor );
				}
			}
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'feature_icons', $featureList);
		if ($mrConfig['is_real_estate_listing']==0)
			$tmpl->addRows( 'roomtype_icons', $rtRows);
		$tmpl->addRows( 'bookinglink', $bookinglink);
		$tmpl->addRows( 'slideshowlink', $slideshowlink);
		if ($mrConfig['is_real_estate_listing']==0)
			$tmpl->addRows( 'tariffslink', $tariffslink);
		$tmpl->addRows( 'gallerylink', $gallerylink);
		if ($mrConfig['singleRoomProperty']=="0")
			$tmpl->addRows( 'roomslistlink', $roomslistlink);
		$tmpl->addRows( 'mappinglink', $mappinglink);

		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		if ($mrConfig['is_real_estate_listing']==0)
			$tmpl->readTemplatesFromInput( 'composite_property_details.html');
		else
			$tmpl->readTemplatesFromInput( 'realestate_property_details.html');
			
		$cachableContent = $tmpl->getParsedTemplate();
		$task 				= get_showtime('task');
		jr_import('jomres_cache');
		$cache = new jomres_cache($task,$property_uid,false);
		$cache->setCache($cachableContent);
		unset($cache);
		echo $cachableContent;
		
		if ($jrConfig['dumpTemplate']=="1" && isset($tmpl) )
			$tmpl->dump();
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