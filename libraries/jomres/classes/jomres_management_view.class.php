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

class jomres_management_view
	{
	function jomres_management_view()
		{
		$this->management_view = $this->get_view();
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager) // If they're not a manager, nothing else needs to be done.
			{
			$this->management_view = false;
			return;
			}

		if (isset($_POST['management_view']))
			{
			$this->set_view($_POST['management_view']);
			}
		}

	function get_view()
		{
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		return (bool)$tmpBookingHandler->user_settings['property_management_view'];
		}

	function set_view($state)
		{
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsManager) // Naughty naughty
			{
			$this->management_view = false;
			return;
			}
		$this->management_view = (bool)$state;
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$tmpBookingHandler->user_settings['property_management_view'] = $this->management_view;
		}
		
	function get_dropdown()
		{
		$tempOptions = array();
		$tempOptions[1] = _JOMRES_COM_MANAGEMENTVIEW_MANAGMENT ;
		$tempOptions[0] = _JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW;
		
		foreach ($tempOptions as $key=>$val)
			{
			$management_options[] = jomresHTML::makeOption( $key , $val );
			}
		
		$javascript = "onchange=\"this.form.submit();\"";
		$dropdown = jomresHTML::selectList( $management_options, 'management_view','class="inputbox" size="1" '.$javascript.'', 'value', 'text', $this->management_view);

		$selecthtml = '<form action="" method="post" name="management_view">';
		$selecthtml.= $dropdown;
		$selecthtml.= '</form>';
		return $selecthtml;
		}
	}

?>