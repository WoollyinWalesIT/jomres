<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		if (!isset($jrConfig['show_booking_form_in_property_details']))
			$jrConfig['show_booking_form_in_property_details']="1";
		$componentArgs['property_uid']=$property_uid;
		
		
		
		$MiniComponents->triggerEvent('00015',$componentArgs);
		$output				=$MiniComponents->miniComponentData['00015']['viewproperty']['property_deets'][0];
		$featureList		=$MiniComponents->miniComponentData['00015']['viewproperty']['featurelist'];
		$rtRows				=$MiniComponents->miniComponentData['00015']['viewproperty']['roomtypes'];
		if ($jrConfig['show_booking_form_in_property_details'] =="0")
			$bookinglink		=$MiniComponents->miniComponentData['00015']['viewproperty']['bookinglink'];
		$slideshowlink		=$MiniComponents->miniComponentData['00015']['viewproperty']['slideshowlink'];
		if (get_showtime('include_room_booking_functionality'))
			$tariffslink		=$MiniComponents->miniComponentData['00015']['viewproperty']['tariffslink'];
		$gallerylink		=$MiniComponents->miniComponentData['00015']['viewproperty']['gallerylink'];
		$roomslistlink		=$MiniComponents->miniComponentData['00015']['viewproperty']['roomslistlink'];
		$mappinklink		=$MiniComponents->miniComponentData['00015']['viewproperty']['mappinklink'];

		$componentArgs['viewproperty_data']=$MiniComponents->miniComponentData['00015']['viewproperty'];
		$componentArgs['currrent_output']=$output;
		$MiniComponents->triggerEvent('00035',$componentArgs);

		if ($mrConfig['showOnlyAvailabilityCalendar'])
				return;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->addRows( 'pageoutput', $pageoutput );

		if (count($MiniComponents->miniComponentData['00035']) > 0)
			{
			$tab_titles = array();
			$tab_contents = array();
			foreach ($MiniComponents->miniComponentData['00035'] as $tabs)
				{
				if ($tabs['TAB_ANCHOR'] != "" && $tabs['TAB_TITLE'] != "" && $tabs['TAB_CONTENT'] != "")
					{
					$tab_titles[] = array("TAB_ANCHOR"=>$tabs['TAB_ANCHOR'],"TAB_TITLE"=>$tabs['TAB_TITLE']);
					$tab_contents[] = array("TAB_CONTENT"=>$tabs['TAB_CONTENT'],"TAB_TITLE"=>$tabs['TAB_TITLE'],"TAB_ANCHOR"=>$tabs['TAB_ANCHOR']);
					}
				}
			$tmpl->addRows( 'tabs_titles', $tab_titles );
			$tmpl->addRows( 'tabs_content', $tab_contents );
			}

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
	*/
	function getRetVals()
		{
		return null;
		}
	}
?>