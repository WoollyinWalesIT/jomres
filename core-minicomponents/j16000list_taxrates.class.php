<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.17
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000list_taxrates
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $editIcon = '<img src="'.JOMRES_IMAGES_RELPATH.'jomresimages/small/EditItem.png" border="0" alt="editicon" />';

        $jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

        $output = array();
        $pageoutput = array();
        $rows = array();

        $output[ 'PAGETITLE' ] = jr_gettext('_JRPORTAL_TAXRATES_TITLE', '_JRPORTAL_TAXRATES_TITLE', false);
        $output[ 'HCODE' ] = jr_gettext('_JRPORTAL_TAXRATES_CODE', '_JRPORTAL_TAXRATES_CODE', false);
        $output[ 'HDESCRIPTION' ] = jr_gettext('_JRPORTAL_TAXRATES_DESCRIPTION', '_JRPORTAL_TAXRATES_DESCRIPTION', false);
        $output[ 'HRATE' ] = jr_gettext('_JRPORTAL_TAXRATES_RATE', '_JRPORTAL_TAXRATES_RATE', false);
        $output[ '_JOMRES_IS_EU_COUNTRY' ] = jr_gettext('_JOMRES_IS_EU_COUNTRY', '_JOMRES_IS_EU_COUNTRY', false);

        $output[ '_JOMRES_TAX_RATES_IMPORT' ] = jr_gettext('_JOMRES_TAX_RATES_IMPORT', '_JOMRES_TAX_RATES_IMPORT', false);
        $output[ '_JOMRES_TAX_RATES_IMPORT_INFO' ] = jr_gettext('_JOMRES_TAX_RATES_IMPORT_INFO', '_JOMRES_TAX_RATES_IMPORT_INFO', false);
        $output[ 'IMPORT_LINK'] = JOMRES_SITEPAGE_URL_ADMIN.'&task=import_eu_tax_rates';

        foreach ($jrportal_taxrate->taxrates as $rate) {
            $r = array();
            $r[ 'ID' ] = $rate[ 'id' ];
            $r[ 'CODE' ] = $rate[ 'code' ];
            $r[ 'DESCRIPTION' ] = $rate[ 'description' ];
            $r[ 'RATE' ] = $rate[ 'rate' ];

            $r['IS_EU_COUNTRY'] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false);
            if ($rate[ 'is_eu_country' ] == '1') {
                $r['IS_EU_COUNTRY'] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false);
            }

            if (!using_bootstrap()) {
                $r[ 'EDITLINK' ] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_taxrate&id='.$rate[ 'id' ].'">'.$editIcon.'</a>';
            } else {
                $toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
                $toolbar->newToolbar();
                $toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_taxrate&id='.$rate[ 'id' ]), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
                $toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_taxrate&id='.$rate[ 'id' ]), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));

                $r['EDITLINK'] = $toolbar->getToolbar();
            }

            $rows[ ] = $r;
        }

        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');
        $jrtb .= $jrtbar->toolbarItem('new', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_taxrate'), '');

        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('list_taxrates.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
