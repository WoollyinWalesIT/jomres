<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501search_options
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
        $layouts = $componentArgs[ 'layouts' ];
        $guestnumbersearchDropdownList = $componentArgs[ 'guestnumbersearchDropdownList' ];
        $sortArrayDropdown = $componentArgs[ 'sortArrayDropdown' ];
		$geosearchDropdownList = $componentArgs[ 'geosearchDropdownList' ];

        if ($jrConfig[ 'advanced_site_config' ] == 1) {
            $configurationPanel->startPanel(jr_gettext('JOMRES_COM_A_SEARCHOPTIONSTAB', 'JOMRES_COM_A_SEARCHOPTIONSTAB', false));

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_LAYOUTS_DEFAULT', '_JOMRES_COM_LAYOUTS_DEFAULT', false));
            $configurationPanel->setmiddle($layouts);
            $configurationPanel->setright();
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', false));
            $configurationPanel->setmiddle($guestnumbersearchDropdownList);
            $configurationPanel->setright(jr_gettext('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_PROPERTYLIST_FILTERS_SHOW', '_JOMRES_PROPERTYLIST_FILTERS_SHOW', false));
            $configurationPanel->setmiddle($lists[ 'show_search_order' ]);
            $configurationPanel->setright();
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', false));
            $configurationPanel->setmiddle($sortArrayDropdown);
            $configurationPanel->setright(jr_gettext('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_LIVE_SCROLLING', '_JOMRES_LIVE_SCROLLING', false));
            $configurationPanel->setmiddle($lists[ 'live_scrolling_enabled' ]);
            $configurationPanel->setright();
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_PROPERTYLISTDESC', '_JOMRES_COM_PROPERTYLISTDESC', false));
            $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_propertyListDescriptionLimit" value="'.$jrConfig[ 'propertyListDescriptionLimit' ].'" />');
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_PROPERTYLISTDESC_DESC', '_JOMRES_COM_PROPERTYLISTDESC_DESC', false));
            $configurationPanel->insertSetting();

            /* $configurationPanel->setleft( jr_gettext( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', _JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT, false ) );
            $configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_randomsearchlimit" value="' . $jrConfig[ 'randomsearchlimit' ] . '" />' );
            $configurationPanel->setright( jr_gettext( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', _JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC, false ) );
            $configurationPanel->insertSetting(); */

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_LISTLIMIT', '_JOMRES_COM_A_LISTLIMIT', false));
            $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_property_list_limit" value="'.$jrConfig[ 'property_list_limit' ].'" />');
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_LISTLIMIT_DESC', '_JOMRES_COM_A_LISTLIMIT_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('GUEST_BUDGET_FEATURE_SWITCH', 'GUEST_BUDGET_FEATURE_SWITCH', false));
            $configurationPanel->setmiddle($lists[ 'use_budget_feature' ]);
            $configurationPanel->setright(jr_gettext('GUEST_BUDGET_FEATURE_SWITCH_DESC', 'GUEST_BUDGET_FEATURE_SWITCH_DESC', false));
            $configurationPanel->insertSetting();
			
			$configurationPanel->setleft(jr_gettext('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'PROPERTYLIST_IMAGES_AS_SLIDESHOW', false));
            $configurationPanel->setmiddle($lists[ 'plist_images_as_slideshow' ]);
            $configurationPanel->setright(jr_gettext('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', false));
            $configurationPanel->insertSetting();
			
			//integrated search section
			$configurationPanel->insertHeading(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', false));

            $configurationPanel->insertDescription(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', false));

            /* $configurationPanel->setleft( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', _JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE, false ) );
            $configurationPanel->setmiddle( $lists[ 'integratedSearch_enable' ] );
            $configurationPanel->setright( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', _JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC, false ) );
            $configurationPanel->insertSetting();

            $configurationPanel->setleft( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', _JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS, false ) );
            $configurationPanel->setmiddle( $lists[ 'integratedSearch_useCols' ] );
            $configurationPanel->setright( jr_gettext( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', _JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC, false ) );
            $configurationPanel->insertSetting(); */

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_selectcombo' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_propertyname' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_propertyname_dropdown' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', false));
            $configurationPanel->setmiddle($geosearchDropdownList);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_geosearchtype_dropdown' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_ptype' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_ptype_dropdown' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_room_type' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_room_type_dropdown' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_features' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_features_dropdown' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_description' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_availability' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_priceranges' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', false));
            $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_integratedSearch_pricerange_increments" value="'.$jrConfig[ 'integratedSearch_pricerange_increments' ].'">');
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_guestnumber' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', false));
            $configurationPanel->insertSetting();

            $configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', false));
            $configurationPanel->setmiddle($lists[ 'integratedSearch_stars' ]);
            $configurationPanel->setright(jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', false));
            $configurationPanel->insertSetting();
			
			//plugins can add options to this tab
			$MiniComponents->triggerEvent('10529', $componentArgs);

            $configurationPanel->endPanel();
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
