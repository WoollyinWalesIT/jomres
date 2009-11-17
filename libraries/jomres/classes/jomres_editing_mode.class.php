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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jomres_editing_mode
	{
	/**
	#
	 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table
	#
	 */
	function jomres_editing_mode()
		{
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		// We'll specifically set the post and get routines here so that we don't end up saving the cookie/cms specific code every time if the cookie's the container for the lang.
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$this->editing_allowed = true;
		if (!isset($tmpBookingHandler->user_settings['editing_on']))
			{
			$tmpBookingHandler->user_settings['editing_on']= false;
			}
		if (!$thisJRUser->userIsManager)
			{
			$this->editing_allowed = false;
			$tmpBookingHandler->user_settings['editing_on']= false;
			}
		if ($thisJRUser->userIsManager && $thisJRUser->accesslevel < 2)
			{
			$this->editing_allowed = false;
			$tmpBookingHandler->user_settings['editing_on']= false;
			}
		if ($jrConfig['minimalconfiguration'] == '1' && !$thisJRUser->superPropertyManager)
			{
			$this->editing_allowed = false;
			$tmpBookingHandler->user_settings['editing_on']= false;
			}
		$this->editing = $tmpBookingHandler->user_settings['editing_on'];
		$tmpBookingHandler->close_jomres_session();
		}
		
	function switch_mode_on()
		{
		if (!$this->editing_allowed)
			return false;
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$tmpBookingHandler->user_settings['editing_on']= true;
		$tmpBookingHandler->close_jomres_session();
		}
		
	function switch_mode_off()
		{
		if (!$this->editing_allowed)
			return false;
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$tmpBookingHandler->user_settings['editing_on']= false;
		$tmpBookingHandler->close_jomres_session();
		}
		
	function make_editing_mode_dropdown()
		{
		if (!$this->editing_allowed)
			return false;
		$on_text = jr_gettext('_JOMRES_EDITINGMODE_ON',_JOMRES_EDITINGMODE_ON,false);
		$off_text = jr_gettext('_JOMRES_EDITINGMODE_OFF',_JOMRES_EDITINGMODE_OFF,false);
		
		$mode_options = array();
		$mode_options[] = jomresHTML::makeOption( '0' ,  $off_text);
		$mode_options[] = jomresHTML::makeOption( '1' , $on_text );
		$javascript = 'onChange="switch_editing_mode(\''.JOMRES_SITEPAGE_URL_RAW.'\',this.value)";';
		return jomresHTML::selectList( $mode_options, 'jomres_editing_mode',' AUTOCOMPLETE="OFF" class="inputbox" size="1" '.$javascript.'', 'value', 'text', $this->editing);
		}
	
	}


?>