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
			$slideshowcontent[]=array('SLIDESHOW_TITLE'=>$output['TITLE_SLIDESHOW'],'SLIDESHOW'=>$MiniComponents->miniComponentData['01060']['slideshow']['slideshow']);
			}
		// j01050 geocoder (google maps)
		
		if (strlen($MiniComponents->miniComponentData['01050']['x_geocoder'])>0)
			{
			$mapcontent[]=array('MAP_TITLE'=>$output['TITLE_MAP'],'GOOGLE_MAPS'=>$MiniComponents->miniComponentData['01050']['x_geocoder']);
			$output['GOOGLE_MAPS']=$MiniComponents->miniComponentData['01050']['x_geocoder'];
			}
		// j01020 tariffs (either the verbose or the compact view, depending on General Config)
		if ($mrConfig['showTariffsInline']=="1")
			{
			$tariffslist[] = array('tariffs_list_title'=>$output['TITLE_TARIFF'],'INLINE_TARIFFS'=>$MiniComponents->miniComponentData['01020']['showtariffs']);
			$output['INLINE_TARIFFS']=$MiniComponents->miniComponentData['01020']['showtariffs'];
			}
		
		// j00017 SRP avl cal
		// j00018 MRP avl cal
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
			
		if (($mrConfig['showAvailabilityCalendar'] && $mrConfig['singleRoomProperty']) )
			{
			$availabilitycalendarcontent[] = array('AVLCALENDAR_TITLE'=>$output['TITLE_AVAILABILITYCALENDAR'],'AVAILABILITY_CALENDAR'=>$MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar']);
			$output['AVAILABILITY_CALENDAR']=$MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar'];
			}
		elseif ($mrConfig['showAvailabilityCalendar'])
			{
			$availabilitycalendarcontent[] = array('AVLCALENDAR_TITLE'=>$output['TITLE_AVAILABILITYCALENDAR'],'AVAILABILITY_CALENDAR'=>$MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar']);
			$output['AVAILABILITY_CALENDAR']=$MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar'];
			}

		// j01055 Rooms list
		if ($mrConfig['roomslistinpropertydetails']=="1")
			$roomslist[]=array('ROOMS_LIST_TITLE'=>$output['TITLE_ROOMSLIST'],'ROOMS_LIST'=>$MiniComponents->miniComponentData['01055']['showroomdetails']);
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
		$tmpl->addRows( 'tariffslist', $tariffslist );
		$tmpl->addRows( 'availabilitycalendarcontent', $availabilitycalendarcontent );
		$tmpl->addRows( 'slideshowcontent', $slideshowcontent );
		if ($mrConfig['singleRoomProperty']=="0")
			$tmpl->addRows( 'roomslist', $roomslist );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'feature_icons', $featureList);
		$tmpl->addRows( 'roomtype_icons', $rtRows);
		$tmpl->addRows( 'bookinglink', $bookinglink);
		$tmpl->addRows( 'slideshowlink', $slideshowlink);
		$tmpl->addRows( 'tariffslink', $tariffslink);
		$tmpl->addRows( 'gallerylink', $gallerylink);
		if ($mrConfig['singleRoomProperty']=="0")
			$tmpl->addRows( 'roomslistlink', $roomslistlink);
		$tmpl->addRows( 'mappinglink', $mappinglink);

		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'composite_property_details.html');

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