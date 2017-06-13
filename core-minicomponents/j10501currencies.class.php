<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.4
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501currencies
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $configurationPanel = $componentArgs[ 'configurationPanel' ];
        $lists = $componentArgs[ 'lists' ];
        $currency_codes_dropdown = $componentArgs[ 'currency_codes_dropdown' ];

        $configurationPanel->startPanel(jr_gettext('_JOMRES_CURRENCYCONVERSION_TAB', '_JOMRES_CURRENCYCONVERSION_TAB', false));

        $configurationPanel->setleft(jr_gettext('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', false));
        $configurationPanel->setmiddle($lists['useGlobalCurrency']);
        $configurationPanel->setright(jr_gettext('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', false));
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_CURRENCYCODE', '_JOMRES_COM_A_CURRENCYCODE', false));
        $configurationPanel->setmiddle($currency_codes_dropdown);
        $configurationPanel->setright();
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_TARIFFS_SWAP', '_JOMRES_COM_A_TARIFFS_SWAP', false));
        $configurationPanel->setmiddle($lists[ 'currency_symbol_swap' ]);
        $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_TARIFFS_SWAP_DESC', '_JOMRES_COM_A_TARIFFS_SWAP_DESC', false));
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('_JOMRES_CONVERSION_TITLE', '_JOMRES_CONVERSION_TITLE', false));
        $configurationPanel->setmiddle($lists['use_conversion_feature']);
        $configurationPanel->setright(jr_gettext('_JOMRES_CONVERSION_TITLE_DESC', '_JOMRES_CONVERSION_TITLE_DESC', false));
        $configurationPanel->insertSetting();

        $configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
