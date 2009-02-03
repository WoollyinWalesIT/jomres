<?php
/**
#
 * Mini-component core file: Constructs the booking completed page
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * Mini-component core file: Constructs the booking completed page
 #
* @package Jomres
#
 */
class j03030bookingcompleted {
	/**
	#
	 * Constructor: Constructs the booking completed page
	#
	 */
	function j03030bookingcompleted($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $jomresConfig_live_site,$Itemid,$mrConfig,$tmpBookingHandler,$jrConfig;
		$property_uid=$tmpBookingHandler->getBookingPropertyId();

		$save_deets=array();
		$save_details=array();

		$save_deets['LIVESITE']=$jomresConfig_live_site;
		
		if (!defined('_JOMRES_NEWJOOMLA') )
			{
			if (!isset($jrConfig['useSSLinBookingform']) )
				$jrConfig['useSSLinBookingform']=0;
			if ( $jrConfig['useSSLinBookingform'] == 1 )
				$save_deets['LIVESITE'] = str_replace("https://","http://",$jomresConfig_live_site);
			}
		else
			$save_deets['LIVESITE'] = $jomresConfig_live_site;
			
		if (defined('_JR_GATEWAY_AFTERWORD') )
			$save_deets['JR_GATEWAY_AFTERWORD']=jr_gettext('_JR_GATEWAY_AFTERWORD',_JR_GATEWAY_AFTERWORD);
		$save_deets['SAVEDMESSAGE']=jr_gettext('_JOMRES_FRONT_MR_BOOKINGMADE',_JOMRES_FRONT_MR_BOOKINGMADE);
		$save_deets['ITEMID']=$Itemid;
		$save_deets['PROPERTYUID']=$property_uid;
		$save_deets['BACKTOPROPERTY']=jr_gettext('_JOMRES_BACKTOPROPERTYDETAILSLINK',_JOMRES_BACKTOPROPERTYDETAILSLINK);
		$save_details[]=$save_deets;
		property_header($property_uid);
		$tmpl = new patTemplate();
		$tmpl->addRows( 'completed', $save_details );
		$componentArgs=array('tmpl'=>$tmpl);
		if ($mrConfig['singleRoomProperty'] == "0" && $MiniComponents->eventFileExistsCheck('00208') )
			{
			$MiniComponents->triggerEvent('00208',$componentArgs); //
			}
		elseif ($MiniComponents->eventFileExistsCheck('00210'))
			{
			$MiniComponents->triggerEvent('00210',$componentArgs); //
			}
		else
			{
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'bookings_completed.html');
			$tmpl->displayParsedTemplate();
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_BACKTOPROPERTYDETAILSLINK',_JOMRES_BACKTOPROPERTYDETAILSLINK);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>