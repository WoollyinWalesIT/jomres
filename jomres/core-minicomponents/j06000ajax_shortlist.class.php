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

class j06000ajax_shortlist
	{
	function j06000ajax_shortlist()
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$property_uid = (int)$_REQUEST['property_uid'];
		$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$shortlist_items = $tmpBookingHandler->tmpsearch_data['shortlist_items'];
		if ((get_showtime('this_property_published') && !in_array($property_uid,$shortlist_items)) )
			{
			$shortlist_items[]=$property_uid;
			$tmpBookingHandler->tmpsearch_data['shortlist_items'] = $shortlist_items;
			echo jr_gettext('_JOMRES_REMOVEFROMSHORTLIST',_JOMRES_REMOVEFROMSHORTLIST,false,false);
			}
		else
			{
			$count = count($shortlist_items);
			if ($count > 0)
				{
				for ($i=0;$i<$count;$i++)
					{
					if ($shortlist_items[$i] == $property_uid)
						array_splice($shortlist_items, $i, 1);
					}
				}
			$tmpBookingHandler->tmpsearch_data['shortlist_items'] = $shortlist_items;
			echo jr_gettext('_JOMRES_ADDTOSHORTLIST',_JOMRES_ADDTOSHORTLIST,false,false);
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>