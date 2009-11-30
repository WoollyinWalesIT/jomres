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

class jomres_sanity_check
	{
	function jomres_sanity_check ()
		{
		if (get_showtime('no_html',$no_html) == 1 || get_showtime('popup',$popup) == 1)
			return;
		$this->warnings = "";
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$this->jrConfig=$siteConfig->get();
		$this->mrConfig=getPropertySpecificSettings();
		$this->property_uid=getDefaultProperty();
		}

	function do_sanity_checks()
		{
		$this->warnings .= $this->checks_guest_types_pppn();
		if ($this->mrConfig['is_real_estate_listing']==0)
			$this->warnings .= $this->checks_tariffs_exist();
		return $this->warnings;
		}
		
	function construct_warning($message)
		{
		$warning = "";
		
		$warning .="<div class=\"warning\" >";
		$warning .=_JOMRES_WARNINGS_DANGERWILLROBINSON." ";
		$warning .=$message;
		$warning .="</div>";
		
		return $warning;
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
		$ignore_on_tasks = array ('propertyadmin','editTariff');
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
		
	}

?>