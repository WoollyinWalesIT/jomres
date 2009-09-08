<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
	}

?>