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

class j06002create_multiple_resources
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

        $defaultProperty = getDefaultProperty();

        $mrConfig = getPropertySpecificSettings();

        $output = array();
        $pageoutput = array();

        if ($mrConfig[ 'singleRoomProperty' ] == '1' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property')) {
            return;
        }

        $basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $basic_property_details->gather_data($defaultProperty);

        $output['RESOURCES_OF_TYPE'] = '';
        if (!empty($basic_property_details->this_property_room_classes)) {
            $classOptions = array();
            foreach ($basic_property_details->this_property_room_classes as $key => $roomClass) {
                if (!is_null($roomClass)) {
                    $classOptions[] = jomresHTML::makeOption($key, $roomClass[ 'abbv' ]);
                }
            }
            $output['RESOURCES_OF_TYPE'] = jomresHTML::selectList($classOptions, 'resourcesType', 'class="inputbox" size="1"', 'value', 'text', false);
        } else {
            echo 'This property type doesn`t have any room types assigned yet. Please assign some room types to this property type.';

            return;
        }

        $output[ 'NUMBER_OF_RESOURCES' ] = jomresHTML::integerSelectList(1, 100, 1, 'numberOfResources', 'class="input-mini form-control"', '1', '');
        $output[ 'RESOURCES_MAXGUESTS' ] = jomresHTML::integerSelectList(1, 10, 1, 'maxGuests', 'class="input-mini form-control"', '1', '');

        $options = array();
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
        $output['DELETE_EXISTING_RESOURCES'] = jomresHTML::selectList($options, 'deleteExistingResources', 'class="inputbox form-control" size="1"', 'value', 'text', '0');

        $output[ 'HNUMBER_OF_RESOURCES' ] = jr_gettext('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', '_JOMRES_MULTIPLE_RESOURCES_HOWMANY', false);
        $output[ 'HRESOURCES_OF_TYPE' ] = jr_gettext('_JOMRES_MULTIPLE_RESOURCES_TYPE', '_JOMRES_MULTIPLE_RESOURCES_TYPE', false);
        $output[ 'HRESOURCES_MAXGUESTS' ] = jr_gettext('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', '_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', false);
        $output[ 'HDELETE_EXISTING_RESOURCES' ] = jr_gettext('_JOMRES_MULTIPLE_RESOURCES_DELETE', '_JOMRES_MULTIPLE_RESOURCES_DELETE', false);
        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_MULTIPLE_RESOURCES_TITLE', '_JOMRES_MULTIPLE_RESOURCES_TITLE', false);

        $cancelText = jr_gettext('_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL', false);
        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('save', '', jr_gettext('_JOMRES_MULTIPLE_RESOURCES_GENERATE', '_JOMRES_MULTIPLE_RESOURCES_GENERATE', false), true, 'save_multiple_resources');
        $jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), $cancelText);
        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->readTemplatesFromInput('create_multiple_resources.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
