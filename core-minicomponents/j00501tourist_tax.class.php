<?php
/**
* Jomres CMS Agnostic Plugin.
*
* @author Woollyinwales IT <sales@jomres.net>
*
 * @version Jomres 9.8.25
 *
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project
**/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

class j00501tourist_tax
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $configurationPanel = $componentArgs['configurationPanel'];
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $mrConfig = getPropertySpecificSettings();
        if ($mrConfig['is_real_estate_listing'] == 1) {
            return;
        }
        $lists = $componentArgs['lists'];
        $editIconSize = $componentArgs['editIconSize'];
        $configurationPanel->startPanel(jr_gettext('_JOMRES_TOURIST_TAX_TITLE', '_JOMRES_TOURIST_TAX_TITLE', false));

        if (!isset($mrConfig['tourist_tax'])) {
            $mrConfig['tourist_tax'] = '0';
        }
        if (!isset($mrConfig['tourist_tax_ispercentage'])) {
            $mrConfig['tourist_tax_ispercentage'] = '1';
        }
        if (!isset($mrConfig['tourist_tax_wholebooking'])) {
            $mrConfig['tourist_tax_wholebooking'] = '0';
        }

        $yesno = array();
        $yesno[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
        $yesno[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

        $configurationPanel->setleft(jr_gettext('_JOMRES_TOURIST_TAX_TAXRATE', '_JOMRES_TOURIST_TAX_TAXRATE', false));
        $configurationPanel->setmiddle('<input type="text" class="inputbox"  size="10" name="cfg_tourist_tax" value="'.$mrConfig['tourist_tax'].'" />');
        $configurationPanel->setright(jr_gettext('_JOMRES_TOURIST_TAX_TAXRATE_DESC', '_JOMRES_TOURIST_TAX_TAXRATE_DESC', false));
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', '_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', false));
        $configurationPanel->setmiddle(jomresHTML::selectList($yesno, 'cfg_tourist_tax_ispercentage', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig['tourist_tax_ispercentage']));
        $configurationPanel->setright(jr_gettext('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', '_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', false));
        $configurationPanel->insertSetting();

        // Commented out for now.
        // $configurationPanel->setleft(_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO);
        // $configurationPanel->setmiddle(jomresHTML::selectList( $yesno, 'cfg_tourist_tax_wholebooking','class="inputbox" size="1"', 'value', 'text', (int)$mrConfig['tourist_tax_wholebooking']));
        // $configurationPanel->setright(_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC);
        // $configurationPanel->insertSetting();

        $configurationPanel->endPanel();
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
