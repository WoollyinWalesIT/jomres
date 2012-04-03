<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$property_uid=(int)$componentArgs['property_uid'];  
		$mrConfig=getPropertySpecificSettings($property_uid);
		if (!isset($jrConfig['show_booking_form_in_property_details']))
			$jrConfig['show_booking_form_in_property_details']="1";
		$componentArgs['property_uid']=$property_uid;

		$MiniComponents->triggerEvent('00015',$componentArgs);
		$output				=$MiniComponents->miniComponentData['00015']['viewproperty']['property_deets'][0];
		if ($jrConfig['show_booking_form_in_property_details'] =="0" && $mrConfig['is_real_estate_listing']==0)
			$bookinglink		=$MiniComponents->miniComponentData['00015']['viewproperty']['bookinglink'];
		$slideshowlink		=$MiniComponents->miniComponentData['00015']['viewproperty']['slideshowlink'];
		if (get_showtime('include_room_booking_functionality'))
			$tariffslink		=$MiniComponents->miniComponentData['00015']['viewproperty']['tariffslink'];
		$gallerylink		=$MiniComponents->miniComponentData['00015']['viewproperty']['gallerylink'];
		$roomslistlink		=$MiniComponents->miniComponentData['00015']['viewproperty']['roomslistlink'];
		$mappinglink		=$MiniComponents->miniComponentData['00015']['viewproperty']['mappinglink'];
		$contactuslink		=$MiniComponents->miniComponentData['00015']['viewproperty']['contactuslink'];

		$componentArgs['viewproperty_data']=$MiniComponents->miniComponentData['00015']['viewproperty'];
		$componentArgs['currrent_output']=$output;
		$MiniComponents->triggerEvent('00035',$componentArgs);

		if ($mrConfig['showOnlyAvailabilityCalendar'])
				return;
		
		$output['SLIDESHOW']=$MiniComponents->miniComponentData['01060']['slideshow']['slideshow'];
		
		
		if ($mrConfig['is_real_estate_listing']==0 && $mrConfig['visitorscanbookonline']=='1' && !isset($_REQUEST['jr_printable']) && $mrConfig['showAvailabilityCalendar'] )
			{
			$random_identifier = generateJomresRandomString(10);
			$output['ARROW'] = '<div id="sd" class="select-dates"></div>';

			$inline_calendar = $MiniComponents->specificEvent('06000','ui_availability_calendar',array('property_uid'=>$property_uid,'return_calendar'=>"1") );

			$output['INLINE_CALENDAR_ARROW_OPENINGDIV'] = '<div class="arrival-select" >';
			$output['INLINE_CALENDAR'] = $inline_calendar;
			$output['INLINE_CALENDAR_ARROW_CLOSINGDIV'] = '</div>';
			}
		else
			{
			$output['ARROW'] ='';
			$output['INLINE_CALENDAR_SCRIPT'] = '';
			$output['INLINE_CALENDAR_ARROW_OPENINGDIV'] = '';
			$output['INLINE_CALENDAR'] = '';
			$output['INLINE_CALENDAR_ARROW_CLOSINGDIV'] = '';
			}
		
		$output['MAP'] = $MiniComponents->miniComponentData['01050']['x_geocoder'];
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->addRows( 'pageoutput', $pageoutput );

		if (count($MiniComponents->miniComponentData['00035']) > 0)
			{
			$tab_titles = array();
			$tab_contents = array();
			foreach ($MiniComponents->miniComponentData['00035'] as $key=>$tabs)
				{
				if ($tabs['TAB_ANCHOR'] != "" && $tabs['TAB_TITLE'] != "" && $tabs['TAB_CONTENT'] != "")
					{
					$content = $tabs['TAB_CONTENT'];
					$title = $tabs['TAB_TITLE'];
					$tab_titles[] = array("TAB_ANCHOR"=>$tabs['TAB_ANCHOR'],"TAB_TITLE"=>$title);
					$tab_contents[] = array("TAB_CONTENT"=>$content,"TAB_TITLE"=>$title,"TAB_ANCHOR"=>$tabs['TAB_ANCHOR']);
					$output[strtoupper($key."_tabtitle")] = $title;
					$output[strtoupper($key."_tab_content")] =$content;
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
		$tmpl->addRows( 'contactuslink', $contactuslink);

		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		
		if (isset($_REQUEST['jr_printable']))
			$tmpl->readTemplatesFromInput( 'composite_property_details_printable.html');
		else
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
	*/
	function getRetVals()
		{
		return null;
		}
	}
?>