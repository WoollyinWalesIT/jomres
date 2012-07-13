<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j01004property_list_list
	{
	function j01004property_list_list($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$this_plugin = "list";
		$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$layout = $tmpBookingHandler->tmpsearch_data['current_property_list_layout'];
		if ($layout == $this_plugin)
			set_showtime("number_of_ajax_results_required",3); // This is for the list scrolling feature, we need to know the number of properties that should be returned
		
		$property_list_layouts = get_showtime('property_list_layouts');
		if (is_null($property_list_layouts))
			$property_list_layouts = array();
		$property_list_layouts[$this_plugin] = array ("layout"=>"list_properties.html","title"=>jr_gettext("_JOMRES_PROPERTYLIST_LAYOUT_LIST",_JOMRES_PROPERTYLIST_LAYOUT_LIST,false,false),"path"=>null);
		set_showtime('property_list_layouts',$property_list_layouts);
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_PROPERTYLIST_LAYOUT_LIST', _JOMRES_PROPERTYLIST_LAYOUT_LIST);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->propertys_uids;
		}
	}
?>