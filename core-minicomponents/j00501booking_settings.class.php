<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Property Configuration page tabs. Offers bookings related settings.
	 *
	 */


class j00501booking_settings
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		if ($componentArgs['is_channel_property']) {
			return;
		}
        $defaultProperty = getDefaultProperty();
		$configurationPanel = $componentArgs[ 'configurationPanel' ];

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$mrConfig = getPropertySpecificSettings($defaultProperty);
		if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
			return;
		}

		jr_import('jomres_calculate_accommodates_value');
		$jomres_calculate_accommodates_value = new jomres_calculate_accommodates_value(get_showtime('property_uid'));
		$jomres_calculate_accommodates_value->calculate_accommodates_value();

		$lists = $componentArgs[ 'lists' ];
		//$tabs=$componentArgs['tabs'];
		$weekenddayDropdown = $componentArgs[ 'weekenddayDropdown' ];
		$booking_form_rooms_list_style = $componentArgs[ 'booking_form_rooms_list_style' ];
		$booking_form_daily_weekly_monthly = $componentArgs[ 'booking_form_daily_weekly_monthly' ];
		$weekdayDropdown = $componentArgs[ 'weekdayDropdown' ];
		$fixedArrivalDatesRecurring = $componentArgs[ 'fixedArrivalDatesRecurring' ];
		$paymentAmounts = $componentArgs[ 'paymentAmounts' ];

		$configurationPanel->startPanel(jr_gettext('_JOMRES_STATUS_BOOKINGS', '_JOMRES_STATUS_BOOKINGS', false));

        if (!$mrConfig['item_hire_property']){
            if (!isset($jrConfig[ 'secret_setting_use_old_guest_types' ]) || $jrConfig[ 'secret_setting_use_old_guest_types' ] === "0" && $mrConfig[ 'is_real_estate_listing' ] == 0 && !get_showtime('is_jintour_property')) {
                $configurationPanel->setleft(jr_gettext('JOMRES_POLICY_ACCEPT_CHILDREN', 'JOMRES_POLICY_ACCEPT_CHILDREN', false));
                $configurationPanel->setmiddle($lists['allow_children']);
                $configurationPanel->setright(jr_gettext('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', 'JOMRES_POLICY_ACCEPT_CHILDREN_DESC', false));
                $configurationPanel->insertSetting();

                if ( $mrConfig[ 'singleRoomProperty' ] == 0) {
                    $configurationPanel->setleft(jr_gettext('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN', 'JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN', false));
                    $configurationPanel->setmiddle($lists[ 'occupancy_levels_include_children' ]);
                    $configurationPanel->setright(jr_gettext('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN_DESC_MRP', 'JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN_DESC_MRP', false));

                    $configurationPanel->insertSetting();
                }
            }
            
            if ($mrConfig[ 'wholeday_booking' ] == '1') {
                $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', false));
                $configurationPanel->setmiddle($lists[ 'perPersonPerNight' ]);
                $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', false));
                $configurationPanel->insertSetting();
            } else {
                $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_PER', '_JOMRES_COM_A_TARIFFS_PER', false));
                $configurationPanel->setmiddle($lists[ 'perPersonPerNight' ]);

                if ($mrConfig['singleRoomProperty'] == '1') {
                    $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_PER_DESC_SRP', '_JOMRES_COM_A_TARIFFS_PER_DESC_SRP', false));
                } else {
                    $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_PER_DESC', '_JOMRES_COM_A_TARIFFS_PER_DESC', false));
                }

                $configurationPanel->insertSetting();
            }
        }



        
		$configurationPanel->insertHeading(jr_gettext('JOMRES_CITY_TAX_HEADING', 'JOMRES_CITY_TAX_HEADING', false));

		if (!isset($mrConfig[ 'city_tax_value' ])) {
			$mrConfig[ 'city_tax_value' ] = 0;
		}

		$configurationPanel->setleft(jr_gettext('JOMRES_CITY_TAX_VALUE', 'JOMRES_CITY_TAX_VALUE', false));
		$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_city_tax_value" value="'.$mrConfig[ 'city_tax_value' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('JOMRES_CITY_TAX_METHOD', 'JOMRES_CITY_TAX_METHOD', false));
		$configurationPanel->setmiddle($componentArgs[ 'city_tax_models_dropdown' ]);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();


		$configurationPanel->insertHeading(jr_gettext('JOMRES_CLEANING_FEE_HEADING', 'JOMRES_CLEANING_FEE_HEADING', false));

		if (!isset($mrConfig[ 'cleaning_fee' ])) {
			$mrConfig[ 'cleaning_fee' ] = 0;
		}

		$configurationPanel->setleft(jr_gettext('JOMRES_CLEANING_FEE_VALUE', 'JOMRES_CLEANING_FEE_VALUE', false));
		$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_cleaning_fee" value="'.$mrConfig[ 'cleaning_fee' ].'" />');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();


		$configurationPanel->insertHeading('');

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_VISITORSCANBOOKONLINE', '_JOMRES_COM_A_VISITORSCANBOOKONLINE', false));
		$configurationPanel->setmiddle($lists['visitorscanbookonline']);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', false));
		$configurationPanel->setmiddle($lists['registeredUsersOnlyCanBook']);
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		if (!get_showtime('is_jintour_property') && isset($MiniComponents->registeredClasses['00005']['booking_enquiries'])) {
			$configurationPanel->setleft(jr_gettext('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', '_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', false));
			$configurationPanel->setmiddle($lists[ 'requireApproval' ]);
			$configurationPanel->setright(jr_gettext('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', '_JOMRES_BOOKING_INQUIRY_SETTING_DESC', false));
			$configurationPanel->insertSetting();
		}

		$configurationPanel->setleft(jr_gettext('_JOMRES_WHOLEDAY_TITLE', '_JOMRES_WHOLEDAY_TITLE', false));
		$configurationPanel->setmiddle($lists[ 'wholeday_booking' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_WHOLEDAY_DESC', '_JOMRES_WHOLEDAY_DESC', false));
		$configurationPanel->insertSetting();


		if ($mrConfig[ 'wholeday_booking' ] == '1') {
			$configurationPanel->setleft(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', false));
			$configurationPanel->setmiddle($booking_form_daily_weekly_monthly);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			// TRansitioning to Micromanage only tariff mode, this setting is no longer valid
			/*if ($mrConfig['tariffmode'] != '5') {
				if ($jrConfig[ 'compatability_property_configuration' ] != 1) {
					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', false));
					$configurationPanel->setmiddle('<input type="text" class="inputbox" name="cfg_minimuminterval" size="5" value="' . $mrConfig['minimuminterval'] . '" />');
					$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', false));
					$configurationPanel->insertSetting();
				}
			}*/


			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control" name="cfg_mindaysbeforearrival" size="5" value="'.$mrConfig[ 'mindaysbeforearrival' ].'" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', false));
			$configurationPanel->insertSetting();
		} else {
			$configurationPanel->setleft(jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', false));
			$configurationPanel->setmiddle($booking_form_daily_weekly_monthly);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			// Transitioning to Micromanage only tariff editing mode, this setting isn't required as it's handled in Micromanage
			/*$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_MINIMUMINTERVAL', '_JOMRES_COM_A_MINIMUMINTERVAL', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control" name="cfg_minimuminterval" size="5" value="' . $mrConfig['minimuminterval'] . '" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', false));
			$configurationPanel->insertSetting();*/

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control" name="cfg_mindaysbeforearrival" size="5" value="'.$mrConfig[ 'mindaysbeforearrival' ].'" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', false));
			$configurationPanel->insertSetting();
		}

		if (isset($jrConfig[ 'secret_setting_use_old_guest_types' ]) && $jrConfig[ 'secret_setting_use_old_guest_types' ] === "1") {
			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control" name="cfg_defaultNumberOfFirstGuesttype" size="5" value="' . $mrConfig['defaultNumberOfFirstGuesttype'] . '" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', false));
			$configurationPanel->insertSetting();
		}

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', false));
		$configurationPanel->setmiddle($lists[ 'limitAdvanceBookingsYesNo' ]);
		if ($mrConfig[ 'wholeday_booking' ] == '1') {
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', false));
		} else {
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', false));
		}
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', false));
		$configurationPanel->setmiddle('<input type="number" class="inputbox form-control" size="5" name="cfg_advanceBookingsLimit" value="'.$mrConfig[ 'advanceBookingsLimit' ].'">');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_WEEKENDDAYS', '_JOMRES_COM_WEEKENDDAYS', false));
		$configurationPanel->setmiddle($weekenddayDropdown);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_WEEKENDDAYS_DESC', '_JOMRES_COM_WEEKENDDAYS_DESC', false));
		$configurationPanel->insertSetting();

		$threashold_dropdown = jomresHTML::integerSelectList(0, 100, 1, 'cfg_cancellation_threashold', '', (int) $mrConfig[ 'cancellation_threashold' ]);

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', false));
		$configurationPanel->setmiddle($threashold_dropdown);
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', false));
		$configurationPanel->insertSetting();

		if (!get_showtime('is_jintour_property')) {
			$configurationPanel->insertHeading(jr_gettext('_JOMRES_HFIXED_PERIODS', '_JOMRES_HFIXED_PERIODS', false));

			if ($mrConfig[ 'wholeday_booking' ] == '1') {
				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', false));
				$configurationPanel->setmiddle($lists[ 'fixedPeriodBookings' ]);
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', false));
				$configurationPanel->insertSetting();
			} else {
				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', false));
				$configurationPanel->setmiddle($lists[ 'fixedPeriodBookings' ]);
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', false));
				$configurationPanel->insertSetting();
			}

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_FIXEDPERIOD', '_JOMRES_COM_A_FIXEDPERIOD', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_fixedPeriodBookingsNumberOfDays" value="'.$mrConfig[ 'fixedPeriodBookingsNumberOfDays' ].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_numberofFixedPeriods" value="'.$mrConfig[ 'numberofFixedPeriods' ].'" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', false));
			$configurationPanel->setmiddle($lists['fixedPeriodBookingsShortYesNo']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_fixedPeriodBookingsShortNumberOfDays" value="' . $mrConfig['fixedPeriodBookingsShortNumberOfDays'] . '" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

				if ($mrConfig[ 'wholeday_booking' ] == '1') {
					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', false));
					$configurationPanel->setmiddle($lists[ 'fixedArrivalDateYesNo' ]);
					$configurationPanel->setright(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', false));
					$configurationPanel->insertSetting();

					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', false));
					$configurationPanel->setmiddle($weekdayDropdown);
					$configurationPanel->setright();
					$configurationPanel->insertSetting();
				} else {
					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', false));
					$configurationPanel->setmiddle($lists[ 'fixedArrivalDateYesNo' ]);
					$configurationPanel->setright(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', false));
					$configurationPanel->insertSetting();

					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', false));
					$configurationPanel->setmiddle($weekdayDropdown);
					$configurationPanel->setright();
					$configurationPanel->insertSetting();
				}

				if ($mrConfig[ 'wholeday_booking' ] == '1') {
					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', false));
					$configurationPanel->setmiddle($fixedArrivalDatesRecurring);
					$configurationPanel->setright(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', false));
					$configurationPanel->insertSetting();
				} else {
					$configurationPanel->setleft(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', false));
					$configurationPanel->setmiddle($fixedArrivalDatesRecurring);
					$configurationPanel->setright(jr_gettext('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', false));
					$configurationPanel->insertSetting();
				}
			}

		if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
			if (!isset($jrConfig['minimum_deposit_percentage'])) {
				$jrConfig['minimum_deposit_percentage'] = 0;
			}

			$configurationPanel->insertHeading(jr_gettext('_JOMRES_HDEPOSITS', '_JOMRES_HDEPOSITS', false));

			if ((int)$jrConfig['minimum_deposit_percentage'] == 0) {
				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', false));
				$configurationPanel->setmiddle($lists['chargeDepositYesNo']);
				$configurationPanel->setright();
				$configurationPanel->insertSetting();
			}

			if (!get_showtime('is_jintour_property') && (int)$jrConfig['minimum_deposit_percentage'] == 0) {
				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', false));
				$configurationPanel->setmiddle($lists['depositIsOneNight']);
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', false));
				$configurationPanel->insertSetting();
			}

			if ((int)$jrConfig['minimum_deposit_percentage'] == 0) {
				$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', false));
				$configurationPanel->setmiddle($lists['depositIsPercentage']);
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', false));
				$configurationPanel->insertSetting();
			}

			$minimum_deposit_message = '';
			if ((int)$jrConfig['minimum_deposit_percentage'] > 0) {
				$minimum_deposit_message = jr_gettext('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', '_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', false) . (int)$jrConfig['minimum_deposit_percentage'] . '%';
			}
			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEPOSIT_VALUE', '_JOMRES_COM_A_DEPOSIT_VALUE', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_depositValue" value="' . $mrConfig['depositValue'] . '" />');
			$configurationPanel->setright($minimum_deposit_message);
			$configurationPanel->insertSetting();

			if (!isset($mrConfig['minimum_deposit_value'])) {
				$mrConfig['minimum_deposit_value'] = 0;
			}

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_minimum_deposit_value" value="' . (float)$mrConfig['minimum_deposit_value'] . '" />');
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', false));
			$configurationPanel->insertSetting();


			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', false));
			$configurationPanel->setmiddle($lists['use_variable_deposits']);
			if ($mrConfig['wholeday_booking'] == '1') {
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', false));
			} else {
				$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', false));
			}
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', false));
			$configurationPanel->setmiddle('<input type="number" class="inputbox form-control"  size="5" name="cfg_variable_deposit_threashold" value="' . $mrConfig['variable_deposit_threashold'] . '" />');
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_CHARGING_CONFIG', '_JOMRES_COM_CHARGING_CONFIG', false));
			$configurationPanel->setmiddle($paymentAmounts);
			$configurationPanel->setright(jr_gettext('_JOMRES_COM_CHARGING_CONFIG_DESC', '_JOMRES_COM_CHARGING_CONFIG_DESC', false));
			$configurationPanel->insertSetting();

			$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', false));
			$configurationPanel->setmiddle($lists['roundupDepositYesNo']);
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
		}
		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
