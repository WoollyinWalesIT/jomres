<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000miscdefinesfortouchtemplating
	{
	function j16000miscdefinesfortouchtemplating()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		
		// On it's own, this minicomponent doesn't do anything. It's a place holder for definitions that don't have a home in any other minicomponent.
		
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		= jr_gettext('_JOMRES_CLICKTOREGISTER',_JOMRES_CLICKTOREGISTER);
		$output[]		= jr_gettext('_JOMRES_SEARCH_PRICERANGES',_JOMRES_SEARCH_PRICERANGES);
		$output[]		= jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE',_JOMRES_PAYPAL_REDIRECTMESSAGE);
		$output[]		= jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED',_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED);
		$output[]		= jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE',_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE);
		
		$output[]		= jr_gettext('_JOMRES_WHOLEDAY_TITLE',_JOMRES_WHOLEDAY_TITLE);
		$output[]		= jr_gettext('_JOMRES_WHOLEDAY_DESC',_JOMRES_WHOLEDAY_DESC);
		$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY',_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY',_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY',_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY',_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY',_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY',_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY',_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY',_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY',_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY',_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY',_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY',_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY',_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY',_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY',_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY',_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY',_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY',_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY',_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY);
		$output[]		= jr_gettext('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY',_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY);
		$output[]		= jr_gettext('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY',_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY',_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY',_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY',_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY',_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY',_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY);
		$output[]		= jr_gettext('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY',_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY);
		
		$output[]		= jr_gettext('_JOMRES_COOKIEPOLICY_1',_JOMRES_COOKIEPOLICY_1);
		$output[]		= jr_gettext('_JOMRES_COOKIEPOLICY_2',_JOMRES_COOKIEPOLICY_2);
		$output[]		= jr_gettext('_JOMRES_COOKIEPOLICY_3',_JOMRES_COOKIEPOLICY_3);
		$output[]		= jr_gettext('_JOMRES_COOKIEPOLICY_4',_JOMRES_COOKIEPOLICY_4);
		$output[]		= jr_gettext('_JOMRES_COOKIEPOLICY_5',_JOMRES_COOKIEPOLICY_5);
		$output[]		= jr_gettext('_JOMRES_COOKIEPOLICY_6',_JOMRES_COOKIEPOLICY_6);
		
		$countryCodes=countryCodesArray();
		foreach ($countryCodes as $k=>$v)
			{
			$output[]		= jr_gettext('_JOMRES_CUSTOMTEXT_COUNTRYNAMES_'.$k,$v);
			}
		
		$FIPS=regionNamesArray();
		foreach ($FIPS as $countryCode=>$v)
			{
			//echo getSimpleCountry($countryCode)."<br/>";
			sort($v);
			foreach ($v as $key=>$val)
				{
				$output[]		= jr_gettext('_JOMRES_CUSTOMTEXT_REGIONNAMES_'.$countryCode."_".$key,$val) ;
				}
			}
		
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
			
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}