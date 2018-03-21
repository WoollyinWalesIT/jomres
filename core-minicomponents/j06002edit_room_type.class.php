<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002edit_room_type
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
        $property_uid = getDefaultProperty();

        $room_classes_uid = intval(jomresGetParam($_REQUEST, 'room_classes_uid', 0));

        $output = array();

        $jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();
		
		if ($room_classes_uid > 0 ) {
			$jomres_room_types->validate_manager_access_to_room_type($room_classes_uid);
		}

		$room_class_ids = array();

        $jomres_room_types->get_room_type($room_classes_uid);

        $output[ 'ROOMCLASSUID' ] = $room_classes_uid;
		if (isset($jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid])) {
			$output[ 'CLASSABBV' ] = stripslashes($jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid]['room_class_abbv']);
			if ($jrConfig[ 'allowHTMLeditor' ] == '1') {
				$width = '95%';
				$height = '250';
				$col = '20';
				$row = '3';
				
				$output[ 'SIMPLEMDE_JAVASCRIPT' ] = '';
				$output[ 'MARKDOWN_BUTTON' ] = '';
				$output[ 'CLASSDESC' ] = editorAreaText('room_class_desc', $jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid]['room_class_full_desc'], 'room_class_desc', $width, $height, $col, $row);
			} else {
                jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.js');
                jomres_cmsspecific_addheaddata('css', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.css');
                
                $output[ 'SIMPLEMDE_JAVASCRIPT' ] = '
                    <script type="text/javascript">
                    jomresJquery(document).ready(function () {
                        var buttons =  ["bold", "italic", "heading", "strikethrough" , "|" , "unordered-list" , "ordered-list" , "clean-block" , "image" , "table" , "horizontal-rule" , "|", "preview" ];
                        var simplemde = new SimpleMDE({ element: document.getElementById("room_description") ,toolbar: buttons, });
                    });
                    </script>';

                $output[ 'MARKDOWN_BUTTON' ] = $MiniComponents->specificEvent('06000', 'show_markdown_modal', array('output_now' => false));
                
                $output[ 'CLASSDESC' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="room_class_desc" name="room_class_desc">'.jomres_remove_HTML( $jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid]['room_class_full_desc'] , '').'</textarea>';
			}
			
			$image = $jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid]['image'];
		} else {
			$output[ 'CLASSABBV' ] = '';
			$output[ 'CLASSDESC' ] = '';
			$image = '';
		}
			


        //room type icons
		$images = $jomres_room_types->get_all_room_type_images();
		
		$rows = array();
		
		foreach ($images as $i) {
			$i[ 'ISCHECKED' ] = '';
			
			if ( $i[ 'IMAGE_FILENAME' ] == $image ) {
				$i[ 'ISCHECKED' ] = 'checked';
			}
			
			$rows[] = $i;
		}

        $output[ 'PROPERTYFEATUREINFO' ] = jr_gettext('_JOMRES_A_GLOBALROOMTYPES_INFO', '_JOMRES_A_GLOBALROOMTYPES_INFO', false);
        $output[ 'HLINKTEXT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', false);
        $output[ 'HLINKTEXTCLONE' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', false);
        $output[ 'HABBV' ] = jr_gettext('_JOMRES_SEARCH_RTYPES', '_JOMRES_SEARCH_RTYPES', false);
        $output[ 'HDESC' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', false);
        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', false);
        $output[ '_JOMRES_PROPERTY_TYPE_ASSIGNMENT' ] = jr_gettext('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', false);
        $output[ '_JOMRES_IMAGE' ] = jr_gettext('_JOMRES_IMAGE', '_JOMRES_IMAGE', false);

        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png');
        $link = JOMRES_SITEPAGE_URL;
        $jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL.'&task=list_room_types', '');
        $jrtb .= $jrtbar->customToolbarItem('save_room_type', $link, jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false), $submitOnClick = true, $submitTask = 'save_room_type', $image);
        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->readTemplatesFromInput('edit_room_type.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->displayParsedTemplate();
        
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN');
        $output[ ] = jr_gettext('_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE');
        $output[ ] = jr_gettext('_JOMRES_UPLOAD_IMAGE', '_JOMRES_UPLOAD_IMAGE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO');
        $output[ ] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES');

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
