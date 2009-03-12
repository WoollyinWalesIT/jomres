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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$jrConfig;
		
		$property_uid=(int)$componentArgs['property_uid'];  
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
			$output['SLIDESHOW']=$MiniComponents->miniComponentData['01060']['slideshow']['slideshow'];

		// j01050 geocoder (google maps)
		$output['GOOGLE_MAPS']=$MiniComponents->miniComponentData['01050']['x_geocoder'];

		// j01020 tariffs (either the verbose or the compact view, depending on General Config)
		if ($mrConfig['showTariffsInline']=="1")
			$output['INLINE_TARIFFS']=$MiniComponents->miniComponentData['01020']['showtariffs'];
		
		// j00017 SRP avl cal
		// j00018 MRP avl cal
		if (($mrConfig['showAvailabilityCalendar'] && $mrConfig['singleRoomProperty']) )
			$output['AVAILABILITY_CALENDAR']=$MiniComponents->miniComponentData['00017']['SRPavailabilitycalendar'];
		elseif ($mrConfig['showRoomsInPropertyDetails'])
			$output['AVAILABILITY_CALENDAR']=$MiniComponents->miniComponentData['00018']['MRPavailabilitycalendar'];

		// j01055 Rooms list
		if ($mrConfig['roomslistinpropertydetails']=="1")
			$output['ROOMS_LIST']=$MiniComponents->miniComponentData['01055']['showroomdetails'];
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
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'feature_icons', $featureList);
		$tmpl->addRows( 'roomtype_icons', $rtRows);
		$tmpl->addRows( 'bookinglink', $bookinglink);
		$tmpl->addRows( 'slideshowlink', $slideshowlink);
		$tmpl->addRows( 'tariffslink', $tariffslink);
		$tmpl->addRows( 'gallerylink', $gallerylink);
		$tmpl->addRows( 'roomslistlink', $roomslistlink);
		$tmpl->addRows( 'mappinglink', $mappinglink);

		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'composite_property_details.html');

		$tmpl->displayParsedTemplate();
		
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