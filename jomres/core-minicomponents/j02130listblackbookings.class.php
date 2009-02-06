<?php
/**
#
 * Mini-component core file: Constructs and displays black bookings
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$jomresConfig_live_site,$Itemid;
		$defaultProperty=getDefaultProperty();
		$bookingsrows=array();
		$txt="";

		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL("index.php?option=com_jomres&task=newBlackBooking&Itemid=$Itemid"),jr_gettext('_JOMRES_FRONT_BLACKBOOKING_NEW',_JOMRES_FRONT_BLACKBOOKING_NEW,FALSE));
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL("index.php?option=com_jomres&Itemid=$Itemid"),$cancelText);
		//if (!$clone && $tariffUid)
		//	$jrtb .= $jrtbar->toolbarItem('delete',jomresURL("index.php?option=com_jomres&task=deleteTariff&tariffUid=".$tariffUid."Itemid=$Itemid"),$deleteText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$query="SELECT contract_uid FROM #__jomres_room_bookings WHERE black_booking = '1' AND property_uid = '".(int)$defaultProperty."' GROUP BY contract_uid";
		$bookingsList = doSelectSql($query);
		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_BLACKBOOKING',_JOMRES_FRONT_BLACKBOOKING);
		$output['ITEMID']=$Itemid;
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
				$bbrow['editlink']='<a href="'.jomresURL("index.php?option=com_jomres&task=viewBlackBooking&Itemid=$Itemid&contract_uid=".($bb->contract_uid) ).'">'.jr_gettext('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING',_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING,true,true).'  '.outputDate($bb->arrival).' - '.outputDate($bb->departure).' '.$bb->special_reqs.'</a>';
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