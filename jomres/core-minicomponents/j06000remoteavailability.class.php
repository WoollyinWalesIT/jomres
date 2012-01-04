<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * remote availability
 #
* @package Jomres
#
 */
class j06000remoteavailability {
	/**
	#
	 * remote availability
	#
	 */
	function j06000remoteavailability($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$property_uid = get_showtime('property_uid');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$property_uid = intval( jomresGetParam( $_GET, 'id', 0 ) );
		$_REQUEST['popup']=0; // Normally, if a popup is set to true (1) then the j00017availabilitycalendar.class.php minicomp will show the property header. We don't want this to happen in this instance so we will reset popup to 0, now that we're not using it again.
		if ($property_uid > 0)
			{
			$mrConfig=getPropertySpecificSettings($property_uid);
			if ($mrConfig['singleRoomProperty']=="1")
				$result=$MiniComponents->triggerEvent('00017',array('property_uid'=>$property_uid) );
			else
				$result=$MiniComponents->triggerEvent('00018',array('property_uid'=>$property_uid) );
			if ($jrConfig['composite_property_details']=="1")
				echo $result;
			}
		else
			echo "Property id not passed";
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