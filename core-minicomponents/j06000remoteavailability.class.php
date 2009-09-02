<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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