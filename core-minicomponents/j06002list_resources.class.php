<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002list_resources
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }

        $defaultProperty = getDefaultProperty();
        $mrConfig = getPropertySpecificSettings($defaultProperty);
        $output = array();

        $jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
        $jomres_media_centre_images->get_images($defaultProperty, array('rooms'));

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($defaultProperty);

        $basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
        $basic_room_details->get_all_rooms($defaultProperty);

        $toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');

        $number_of_rooms = count($basic_room_details->rooms);

        $output['JOMRESTOOLBAR'] = '';
        if ($mrConfig[ 'singleRoomProperty' ] == '1' && $number_of_rooms < 1) {
            $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
            $jrtb = $jrtbar->startTable();
            $jrtb .= $jrtbar->toolbarItem('new', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource'), '');
            $jrtb .= $jrtbar->endTable();
            $output['JOMRESTOOLBAR'] = $jrtb;
        }
        if ($mrConfig[ 'singleRoomProperty' ] == '0') {
            $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
            $jrtb = $jrtbar->startTable();
            $jrtb .= $jrtbar->toolbarItem('new', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource'), '');
            $jrtb .= $jrtbar->toolbarItem('new', jomresURL(JOMRES_SITEPAGE_URL.'&task=create_multiple_resources'), jr_gettext('_JOMRES_MULTIPLE_RESOURCES_TITLE', '_JOMRES_MULTIPLE_RESOURCES_TITLE', false));
            $jrtb .= $jrtbar->endTable();
            $output['JOMRESTOOLBAR'] = $jrtb;
        }

        $roomRowInfo = array();

        foreach ($basic_room_details->rooms as $room) {
            $r = array();

            $r[ 'ROOM_UID' ] = $room['room_uid'];

            if (!using_bootstrap()) {
                $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
                $jrtb = $jrtbar->startTable();
                $jrtb .= $jrtbar->toolbarItem('edit', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource&roomUid='.$room['room_uid']), '');
                if ($mrConfig[ 'singleRoomProperty' ] == '1' && $number_of_rooms < 1) {
                    $jrtb .= $jrtbar->toolbarItem('copy', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource&roomUid='.$room['room_uid'].'&clone=1'), '');
                    $jrtb .= $jrtbar->toolbarItem('delete', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_resource&roomUid='.$room['room_uid']), '');
                } elseif ($mrConfig[ 'singleRoomProperty' ] == '0') {
                    $jrtb .= $jrtbar->toolbarItem('copy', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource&roomUid='.$room['room_uid'].'&clone=1'), '');
                    $jrtb .= $jrtbar->toolbarItem('delete', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_resource&roomUid='.$room['room_uid']), '');
                }
                $jrtb .= $jrtbar->endTable();
                $r[ 'BUTTONS' ] = $jrtb;
            } else {
                $toolbar->newToolbar();
                $toolbar->addItem('icon-edit', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource'.'&roomUid='.$room['room_uid']), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
                if (($mrConfig[ 'singleRoomProperty' ] == '1' && $number_of_rooms < 1) || $mrConfig[ 'singleRoomProperty' ] == '0') {
                    $toolbar->addSecondaryItem('icon-copy', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_resource'.'&roomUid='.$room['room_uid'].'&clone=1'), jr_gettext('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', false));
                }
                if ($mrConfig[ 'singleRoomProperty' ] == '0') {
                    $toolbar->addSecondaryItem('icon-trash', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_resource'.'&roomUid='.$room['room_uid']), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));
                }
                $r['BUTTONS'] = $toolbar->getToolbar();
            }

            if ((int) $room['room_classes_uid'] > 0 && isset($current_property_details->room_types[ $room['room_classes_uid'] ]['abbv'])) {
                $r[ 'ROOM_TYPE' ] = $current_property_details->room_types[ $room['room_classes_uid'] ]['abbv'];
            } else {
                $r[ 'ROOM_TYPE' ] = '';
            }

            $r[ 'ROOM_NAME' ] = $room['room_name'];
            $r[ 'ROOM_NUMBER' ] = $room['room_number'];
            $r[ 'ROOM_FLOOR' ] = $room['room_floor'];
            $r[ 'MAX_PEOPLE' ] = $room['max_people'];

            $r[ 'ROOM_IMAGE' ] = $jomres_media_centre_images->images['rooms'][ $room['room_uid'] ][0]['small'];

            //room features TODO: build a class for room features
            $roomFeaturesArray = explode(',', $room['room_features_uid']);
			
			$n = count($roomFeaturesArray);
			
            $r[ 'ROOM_FEATURES' ] = '<ul>';
            foreach ($basic_room_details->all_room_features as $feature) {
                for ($i = 0; $i < $n; ++$i) {
                    if (isset($roomFeaturesArray[ $i ]) && $roomFeaturesArray[ $i ] != '' && $roomFeaturesArray[ $i ] == $feature['room_features_uid']) {
                        $r[ 'ROOM_FEATURES' ] .= '<li>'.$feature['feature_description'].'</li>
						';
                    }
                }
            }
            $r[ 'ROOM_FEATURES' ] .= '</ul>';

            $roomRowInfo[] = $r;
        }

        $output[ 'HROOM_TYPE' ] = jr_gettext('_JOMRES_HRESOURCE_TYPE', '_JOMRES_HRESOURCE_TYPE', false);
        $output[ 'HROOM_NAME' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', false);
        $output[ 'HROOM_NUMBER' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', false);
        $output[ 'HROOM_FLOOR' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', false);
        $output[ 'HROOM_MAXPEOPLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', false);
        $output[ 'HROOM_IMAGE' ] = jr_gettext('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', false);
        $output[ 'HROOM_FEATURES' ] = jr_gettext('_JOMRES_HRESOURCE_FEATURES', '_JOMRES_HRESOURCE_FEATURES', false);

        $pageoutput = array();

        if ($mrConfig[ 'singleRoomProperty' ] == '0') {
            $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false);

            $pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
            $tmpl->readTemplatesFromInput('list_resources.html');
            $tmpl->addRows('rows', $roomRowInfo);
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->displayParsedTemplate();
        } else {
            $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', false);

            $pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
            $tmpl->readTemplatesFromInput('list_resources_srp.html');
            $tmpl->addRows('rows', $roomRowInfo);
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->displayParsedTemplate();
        }
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
