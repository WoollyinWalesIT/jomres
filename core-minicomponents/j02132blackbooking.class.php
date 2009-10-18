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
 * Displays a black booking
 #
* @package Jomres
#
 */
class j02132blackbooking {
	/**
	#
	 * Constructor: Displays a black booking
	#
	 */
	function j02132blackbooking()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$defaultProperty=getDefaultProperty();
		$contract_uid=jomresGetParam( $_REQUEST, 'contract_uid', 0 );
		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$deleteText=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,FALSE);
		$newText= jr_gettext('_JOMRES_COM_MR_NEWTARIFF',_JOMRES_COM_MR_NEWTARIFF,FALSE);

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL."&task=newBlackBooking"),$newText );
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=listBlackBookings"),$cancelText);
		$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteBlackBooking".jomresURLToken()."&contract_uid=$contract_uid"),$deleteText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_BLACKBOOKING',_JOMRES_FRONT_BLACKBOOKING);
		$output['CONTRACTID']=$contract_uid;

		if ($contract_uid != 0)
			{
			$query="SELECT arrival,departure,special_reqs FROM #__jomres_contracts WHERE contract_uid = '".(int)$contract_uid."'";
			$bbList=doSelectSql($query);
			foreach ($bbList as $bb)
				{
				$output['BBSTART']=outputDate($bb->arrival);
				$output['BBENDS']=outputDate($bb->departure);
				$output['REASON']=$bb->special_reqs;
				}
			$output['BBDATE']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS);
			$output['BBDATEENDS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES);
			$output['INFO']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT);
			$query="SELECT DISTINCT room_uid FROM #__jomres_room_bookings WHERE contract_uid = '".(int)$contract_uid."'";
			$bbBookingData  = doSelectSql($query);
			foreach($bbBookingData as $bbBooking)
				{
				$query="SELECT room_number,room_name FROM #__jomres_rooms WHERE room_uid = '".(int)$bbBooking->room_uid."'";
				$bbRoomData  = doSelectSql($query);
				if (count($bbRoomData)>0)
					{
					$roomNumberArray=array();
					foreach ($bbRoomData as $roomnumber)
						{
						$bkngs['ROOMNO']=($roomnumber->room_number);
						$bkngs['ROOMNAME']=($roomnumber->room_name);
						$bookingsrows[]=$bkngs;
						}
					}
				}
			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'view_black_booking.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'bookingsrows', $bookingsrows );
			$tmpl->displayParsedTemplate();
			}
		else
			{
			echo "Error: Uid for black booking not found";
			}
		}


	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_FRONT_BLACKBOOKING',_JOMRES_FRONT_BLACKBOOKING);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT);

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