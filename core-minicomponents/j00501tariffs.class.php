<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.26
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00501tariffs
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $configurationPanel = $componentArgs[ 'configurationPanel' ];
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $mrConfig = getPropertySpecificSettings();

        $lists = $componentArgs[ 'lists' ];
        $tariffModelsDropdown = $componentArgs[ 'tariffModelsDropdown' ];

        $this->outputConversionJavascript();
        $currfmt = jomres_singleton_abstract::getInstance('jomres_currency_format');
        $cformatdropdown = $currfmt->get_currency_format_dropdowninput();

        $jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

        if (!isset($mrConfig[ 'margin' ]) || empty($mrConfig[ 'margin' ])) {
            $mrConfig[ 'margin' ] = '0.00';
        }

        $configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_TARIFFS', '_JOMRES_COM_A_TARIFFS', false));

        if ($mrConfig[ 'is_real_estate_listing' ] == 0 && !get_showtime('is_jintour_property')) {
            if ($mrConfig[ 'tariffmode' ] == '1') {
                $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', false));
                $configurationPanel->setmiddle($lists[ 'tariffChargesStoredWeeklyYesNo' ]);
                $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', false));
                $configurationPanel->insertSetting();
            }
        }

        if ($jrConfig[ 'useGlobalCurrency' ] != '1') {
            if (!isset($mrConfig[ 'property_currencycode' ])) { // for v4.5 converting the old currencyCode value to property_currencycode
            $mrConfig[ 'property_currencycode' ] = $mrConfig[ 'currencyCode' ];
            }
            jr_import('currency_codes');
            $c_codes = new currency_codes($mrConfig[ 'property_currencycode' ]);

            $dropdown = $c_codes->makeCodesDropdown();
            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_CURRENCYCODE', '_JOMRES_COM_A_CURRENCYCODE', false));
            $configurationPanel->setmiddle($dropdown);
            $configurationPanel->setright();
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_SWAP', '_JOMRES_COM_A_TARIFFS_SWAP', false));
            $configurationPanel->setmiddle($lists[ 'currency_symbol_swap' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_SWAP_DESC', '_JOMRES_COM_A_TARIFFS_SWAP_DESC', false));
            $configurationPanel->insertSetting();
        }

        if (!$thisJRUser->simple_configuration) {
            $configurationPanel->setleft(jr_gettext('_JOMRES_CURRENCYFORMAT', '_JOMRES_CURRENCYFORMAT', false));
            $configurationPanel->setmiddle($cformatdropdown);
            $configurationPanel->setright();
            $configurationPanel->insertSetting();
        }

        if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
            if (!$thisJRUser->simple_configuration) {
                if (!get_showtime('is_jintour_property')) {
                    $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_MODEL', '_JOMRES_COM_A_TARIFFS_MODEL', false));
                    $configurationPanel->setmiddle($tariffModelsDropdown);
                    $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_MODEL_DESC', '_JOMRES_COM_A_TARIFFS_MODEL_DESC', false));
                    $configurationPanel->insertSetting();
                }
            }

            $configurationPanel->setleft(jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', false));
            $configurationPanel->setmiddle($jrportal_taxrate->makeTaxratesDropdown($mrConfig[ 'accommodation_tax_code' ], 'cfg_accommodation_tax_code'));
            $configurationPanel->setright('');
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TAXINCLUSIVE', '_JOMRES_COM_A_TAXINCLUSIVE', false));
            $configurationPanel->setmiddle($lists[ 'prices_inclusive' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TAXINCLUSIVE_DESC', '_JOMRES_COM_A_TAXINCLUSIVE_DESC', false));
            $configurationPanel->insertSetting();
        }

        if ($mrConfig[ 'is_real_estate_listing' ] == 0) {
            if (isset($MiniComponents->registeredClasses[ '00011manager_option_04_guesttypeadmin' ])) {
                if ($mrConfig[ 'wholeday_booking' ] == '1') {
                    $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', false));
                    $configurationPanel->setmiddle($lists[ 'perPersonPerNight' ]);
                    $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', false));
                    $configurationPanel->insertSetting();
                } else {
                    $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_PER', '_JOMRES_COM_A_TARIFFS_PER', false));
                    $configurationPanel->setmiddle($lists[ 'perPersonPerNight' ]);
                    $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_PER_DESC', '_JOMRES_COM_A_TARIFFS_PER_DESC', false));
                    $configurationPanel->insertSetting();
                }
            }
        }

        $configurationPanel->endPanel();
    }

    public function outputConversionJavascript()
    {
        ?>
			<script type="text/javascript">
				var arrOldValues;

				function SelectAllList(CONTROL) {
					for (var i = 0; i < CONTROL.length; i++) {
						CONTROL.options[i].selected = true;
					}
				}

				function DeselectAllList(CONTROL) {
					for (var i = 0; i < CONTROL.length; i++) {
						CONTROL.options[i].selected = false;
					}
				}

				function FillListValues(CONTROL) {
					var arrNewValues;
					var intNewPos;
					var strTemp = GetSelectValues(CONTROL);
					arrNewValues = strTemp.split(",");
					for (var i = 0; i < arrNewValues.length - 1; i++) {
						if (arrNewValues[i] == 1) {
							intNewPos = i;
						}
					}

					for (var i = 0; i < arrOldValues.length - 1; i++) {
						if (arrOldValues[i] == 1 && i != intNewPos) {
							CONTROL.options[i].selected = true;
						}
						else if (arrOldValues[i] == 0 && i != intNewPos) {
							CONTROL.options[i].selected = false;
						}
						if (arrOldValues[intNewPos] == 1) {
							CONTROL.options[intNewPos].selected = false;
						}
						else {
							CONTROL.options[intNewPos].selected = true;
						}
					}
				}

				function GetSelectValues(CONTROL) {
					var strTemp = "";
					for (var i = 0; i < CONTROL.length; i++) {
						if (CONTROL.options[i].selected == true) {
							strTemp += "1,";
						}
						else {
							strTemp += "0,";
						}
					}
					return strTemp;
				}

				function GetCurrentListValues(CONTROL) {
					var strValues = "";
					strValues = GetSelectValues(CONTROL);
					arrOldValues = strValues.split(",")
				}
			</script>
		<?php

    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}

?>