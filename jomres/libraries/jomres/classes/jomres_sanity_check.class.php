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

class jomres_sanity_check
	{
	function jomres_sanity_check ($autorun=true)
		{
		if (get_showtime('no_html',$no_html) == 1 || get_showtime('popup',$popup) == 1)
			return;
		if ($autorun)
			{
			$this->warnings = "";
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$this->jrConfig=$siteConfig->get();
			$this->mrConfig=getPropertySpecificSettings();
			$this->property_uid=getDefaultProperty();
			}
		}

	function do_sanity_checks()
		{
		$this->warnings .=$this->check_suspended();
		$this->warnings .= $this->checks_guest_types_pppn();
		if ($this->mrConfig['is_real_estate_listing']==0)
			$this->warnings .= $this->checks_tariffs_exist();
		
		$this->warnings .=$this->check_editing_mode();
		$this->warnings .=$this->check_published();
		return $this->warnings;
		}
		
	function construct_warning($message)
		{
		$warning = "";
		$warning .=_JOMRES_WARNINGS_DANGERWILLROBINSON." ";
		$warning .=$message;
		return $warning;
		}
		
	function check_suspended()
		{
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$published = get_showtime('this_property_published');
		if ($thisJRUser->userIsSuspended)
			{
			$message = _JOMRES_SUSPENSIONS_MANAGER_SUSPENDED;
			return $this->construct_warning($message);
			}
		}
		
	function checks_guest_types_pppn()
		{
		$ignore_on_tasks = array ('listCustomerTypes','editCustomerType','saveCustomerType','deleteCustomerType','saveCustomerTypeOrder');
		if (!in_array(get_showtime('task'),$ignore_on_tasks) )
			{
			$query="SELECT `id` FROM `#__jomres_customertypes` where property_uid = ".(int)$this->property_uid." AND published = 1";
			$result = doSelectSql($query);
			if ( (int)$this->mrConfig['perPersonPerNight'] == 1 && count($result) ==0 )
				{
				$message = _JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES;
				return $this->construct_warning($message);
				}
			}
		return "";
		}
		
	function checks_tariffs_exist()
		{
		if (!get_showtime('include_room_booking_functionality'))
			return "";
		$ignore_on_tasks = array ('propertyadmin','editTariff','saveTariff');
		if (!in_array(get_showtime('task'),$ignore_on_tasks) )
			{
			$query="SELECT `rates_uid` FROM `#__jomres_rates` where property_uid = ".(int)$this->property_uid."";
			$result = doSelectSql($query);
			if (count($result) ==0 )
				{
				$message = _JOMRES_WARNINGS_TARIFFS_NOTARIFFS;
				return $this->construct_warning($message);
				}
			}
		return "";
		}
		
	function check_editing_mode()
		{
		$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		
		if ($this->jrConfig['editingModeAffectsAllProperties'] == "1" &&  $tmpBookingHandler->user_settings['editing_on'] == true && $thisJRUser->superPropertyManager)
			{
			$message = _JOMRES_WARNINGS_GLOBALEDITINGMODE;
			return $this->construct_warning($message);
			
			
			}
		}
		
	function check_published()
		{
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$published = get_showtime('this_property_published');
		if (isset($published) && $published != "1" && $thisJRUser->userIsManager)
			{
			$message = _JOMRES_SANITY_CHECK_NOT_PUBLISHED;
			return $this->construct_warning($message);
			}
		}
	}

?>