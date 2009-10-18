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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * List black bookings
 #
* @package Jomres
#
 */
class j02130listblackbookings {
	/**
	#
	 * Constructor: List black bookings
	#
	 */
	function j02130listblackbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$defaultProperty=getDefaultProperty();
		$bookingsrows=array();
		$txt="";

		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=newBlackBooking"),jr_gettext('_JOMRES_FRONT_BLACKBOOKING_NEW',_JOMRES_FRONT_BLACKBOOKING_NEW,FALSE));
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL.""),$cancelText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$query="SELECT contract_uid FROM #__jomres_room_bookings WHERE black_booking = '1' AND property_uid = '".(int)$defaultProperty."' GROUP BY contract_uid";
		$bookingsList = doSelectSql($query);
		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_BLACKBOOKING',_JOMRES_FRONT_BLACKBOOKING);
		if (count($bookingsList)>0)
			{
			foreach ($bookingsList as $booking)
				{
				$contractUidArray[]=$booking->contract_uid;
				}
			$contractUidArray=array_unique($contractUidArray);
			foreach ($contractUidArray as $uid)
				{
				$txt.=" contract_uid ='".$uid."' OR ";
				}
			$rest = substr($txt, 0, -4);

			$query="SELECT contract_uid,arrival,departure,special_reqs FROM #__jomres_contracts WHERE ".$rest." AND property_uid = '".(int)$defaultProperty."' ORDER BY arrival";
			$bbList=doSelectSql($query);
			$counter=0;
			foreach ($bbList as $bb)
				{
				$bbrow['editlink']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL."&task=viewBlackBooking&contract_uid=".($bb->contract_uid) ).'">'.jr_gettext('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING',_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING,true,true).'  '.outputDate($bb->arrival).' - '.outputDate($bb->departure).' '.$bb->special_reqs.'</a>';
				$bookingsrows[]=$bbrow;
				}
			}
		else
			{
			$output['noblackbookings']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS);
			}
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'list_black_bookings.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'bookingsrows', $bookingsrows );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS);
		$output[]		=jr_gettext('_JOMRES_FRONT_BLACKBOOKING',_JOMRES_FRONT_BLACKBOOKING);

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