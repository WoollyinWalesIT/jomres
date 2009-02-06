<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $property_uid,$mrConfig,$jrConfig;
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