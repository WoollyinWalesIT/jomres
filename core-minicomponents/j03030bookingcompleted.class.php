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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$property_uid=$tmpBookingHandler->getBookingPropertyId();

		$save_deets=array();
		$save_details=array();

		//$save_deets['LIVESITE']=JOMRES_SITEPAGE_URL;
		

		if ( $jrConfig['useSSLinBookingform'] == 1 )
			$save_deets['LIVESITE'] = str_replace("https://","http://",JOMRES_SITEPAGE_URL);
		else
			$save_deets['LIVESITE'] = JOMRES_SITEPAGE_URL;

		if (defined('_JR_GATEWAY_AFTERWORD') )
			$save_deets['JR_GATEWAY_AFTERWORD']=jr_gettext('_JR_GATEWAY_AFTERWORD',_JR_GATEWAY_AFTERWORD);
		$save_deets['SAVEDMESSAGE']=jr_gettext('_JOMRES_FRONT_MR_BOOKINGMADE',_JOMRES_FRONT_MR_BOOKINGMADE);
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

		$output[]		=jr_gettext('_JR_GATEWAY_AFTERWORD',_JR_GATEWAY_AFTERWORD);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_BOOKINGMADE',_JOMRES_FRONT_MR_BOOKINGMADE);
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