<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j00005asamodule_report_tasks {
	function j00005asamodule_report_tasks($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (get_showtime('task') != "asamodule_report")
			return;
		
		$property_uids = array();
		// We need an example property uid to use, so we'll grab the first published property uid from the propertys table
		$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE published = 1";
		$ids = doSelectSql($query);
		foreach ($ids as $p)
			{
			$property_uids[]=(int)$p->propertys_uid;
			}
		
		$property_uid = $property_uids[0];
		$csv_property_uids = implode(",",$property_uids);
		$csv_three_ids = implode(",",array($property_uids[0],$property_uids[1],$property_uids[2]));

		$showtime = jomres_singleton_abstract::getInstance('showtime');

		$asamodule_plugin_information = get_showtime('asamodule_plugin_information');
		
		$asamodule_plugin_information['j06000terms'] = 
			array(
				"asamodule_task"=>"terms",
				"asamodule_info"=>"Links to the terms and conditions of a specific property. You need to manually add the property uid to the url.",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=terms&property_uid='.$property_uid,
				"asamodule_manual_link"=>''
				);
				
		$asamodule_plugin_information['j06000compare'] = 
			array(
				"asamodule_task"=>"compare",
				"asamodule_info"=>"A direct link to the compare properties page. By default this list is limited to 3 properties, as that's how the template is designed to display properties. If you want more you will need to customise the compare properties template. ",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=compare&property_uids='.$csv_three_ids,
				"asamodule_manual_link"=>''
				);
		
		$asamodule_plugin_information['j06000contactowner'] = 
			array(
				"asamodule_task"=>"contactowner",
				"asamodule_info"=>"A direct link to the Contact owner form.",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=contactowner&selectedProperty='.$property_uid,
				"asamodule_manual_link"=>''
				);
		
		$asamodule_plugin_information['j06000module_popup'] = 
			array(
				"asamodule_task"=>"module_popup",
				"asamodule_info"=>"A direct link to the module popup, possibly useful if you want to direct link to a property's simple details from a remote site.",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=module_popup&id='.$property_uid,
				"asamodule_manual_link"=>''
				);
				
		$asamodule_plugin_information['j06000remoteavailability'] = 
			array(
				"asamodule_task"=>"remoteavailability",
				"asamodule_info"=>"A direct link to the module popup, possibly useful if you want to direct link to a property's simple details from a remote site.",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=remoteavailability&id='.$property_uid,
				"asamodule_manual_link"=>''
				);
		
		$asamodule_plugin_information['j06000show_hotel_details'] = 
			array(
				"asamodule_task"=>"show_hotel_details",
				"asamodule_info"=>"A direct link to the hotel contact details page.",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=show_hotel_details&property_uid='.$property_uid,
				"asamodule_manual_link"=>''
				);
				
		$asamodule_plugin_information['j06000show_property_map'] = 
			array(
				"asamodule_task"=>"show_property_map",
				"asamodule_info"=>"A direct link to the hotel map page. Map width/height can be set using the mw/mh variables as in the example link here.",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=show_property_map&mw=250&mh=100&property_uid='.$property_uid,
				"asamodule_manual_link"=>''
				);
		
		$asamodule_plugin_information['j06000show_property_reviews'] = 
			array(
				"asamodule_task"=>"show_property_reviews",
				"asamodule_info"=>"A direct link to the hotel reviews list.",
				"asamodule_example_link"=>JOMRES_SITEPAGE_URL_NOSEF.'&tmpl=component&topoff=1&task=show_property_reviews&property_uid='.$property_uid,
				"asamodule_manual_link"=>''
				);
		
		
		
		set_showtime('asamodule_plugin_information',$asamodule_plugin_information);
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