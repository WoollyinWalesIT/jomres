<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501google_maps
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
        $map_styles_dropdown = $componentArgs[ 'map_styles_dropdown' ];

        $configurationPanel->startPanel(jr_gettext('JOMRES_GOOGLE_MAPS', 'JOMRES_GOOGLE_MAPS', false));
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_MAP_MAPTYPE', '_JOMRES_MAP_MAPTYPE', false));
        $configurationPanel->setmiddle($lists['map_type']);
        $configurationPanel->setright();
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('JOMRES_GOOGLE_MAP_STYLE', 'JOMRES_GOOGLE_MAP_STYLE', false));
        $configurationPanel->setmiddle($map_styles_dropdown);
        $configurationPanel->setright();
        $configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_MAP_ZOOMLEVEL', '_JOMRES_MAP_ZOOMLEVEL', false));
        $configurationPanel->setmiddle($lists['map_zoom']);
        $configurationPanel->setright();
        $configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_DEFAULT_LAT_STARTPOINT', '_JOMRES_DEFAULT_LAT_STARTPOINT', false));
        $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_default_lat" value="'.$jrConfig[ 'default_lat' ].'" />');
        $configurationPanel->setright(jr_gettext('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', false));
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('_JOMRES_DEFAULT_LONG_STARTPOINT', '_JOMRES_DEFAULT_LONG_STARTPOINT', false));
        $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_default_long" value="'.$jrConfig[ 'default_long' ].'" />');
        $configurationPanel->setright();
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('JOMRES_GOOGLE_MAPS_POIS', 'JOMRES_GOOGLE_MAPS_POIS', false));
        $configurationPanel->setmiddle($lists[ 'gmap_pois' ]);
        $configurationPanel->setright();
        $configurationPanel->insertSetting();

        $configurationPanel->setleft(jr_gettext('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'JOMRES_GOOGLE_MAP_OPTION_TRANSIT', false));
        $configurationPanel->setmiddle($lists[ 'gmap_layer_transit' ]);
        $configurationPanel->setright();
        $configurationPanel->insertSetting();
		
		$configurationPanel->setleft(jr_gettext('_JOMRES_MAP_HEIGHT', '_JOMRES_MAP_HEIGHT', false));
        $configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_map_height" value="'.$jrConfig[ 'map_height' ].'" />');
        $configurationPanel->setright();
        $configurationPanel->insertSetting();
		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10525', $componentArgs);

        $configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
