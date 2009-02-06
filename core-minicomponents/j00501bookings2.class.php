<?php
/**
#
 * Mini-component core file: Configuration panel plugin. Constructs various options for defining various booking form inputs and how the room's details are shown in the overlib popup
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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00501bookings2 {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00501bookings2($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $configurationPanel,$jrConfig,$thisJRUser;
		$mrConfig=$componentArgs['mrConfig'];
		$lists=$componentArgs['lists'];

		


		if ( $mrConfig['singleRoomProperty'] != "1" )
			{
			
			$configurationPanel->startPanel(_JOMRES_COM_A_BOOKING."2");
			
			$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE);
			$configurationPanel->setmiddle($lists['showRoomImageInBookingFormOverlib']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO);
			$configurationPanel->setmiddle($lists['bookingform_roomlist_showroomno']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME);
			$configurationPanel->setmiddle($lists['bookingform_roomlist_showroomname']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE);
			$configurationPanel->setmiddle($lists['bookingform_roomlist_showtarifftitle']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			if (($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager) )
				{
				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_number_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_name_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_type_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_smoking_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_disabledaccess_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_floor_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_maxpeople_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES);
				$configurationPanel->setmiddle($lists['bookingform_overlib_room_features_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_title_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_desc_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_rate_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_starts_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_ends_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_mindays_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_maxdays_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_minpeeps_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft(_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS);
				$configurationPanel->setmiddle($lists['bookingform_overlib_tariff_maxpeeps_show']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();
				}
			$configurationPanel->endPanel();
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