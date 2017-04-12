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

class j06002save_resource
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $defaultProperty = getDefaultProperty();

        $mrConfig = getPropertySpecificSettings();
        
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        
        jr_import('jrportal_rooms');
        $jrportal_rooms = new jrportal_rooms();

        $jrportal_rooms->propertys_uid              = $defaultProperty;
        $jrportal_rooms->room_uid                   = (int) jomresGetParam($_POST, 'roomUid', 0);
        $jrportal_rooms->room_classes_uid           = (int) jomresGetParam($_POST, 'roomClasses', 0);
        $jrportal_rooms->max_people                 = (int) jomresGetParam($_POST, 'max_people', 0);
        $jrportal_rooms->room_name                  = getEscaped(jomresGetParam($_POST, 'room_name', ''));
        $jrportal_rooms->room_number                = getEscaped(jomresGetParam($_POST, 'room_number', ''));
        $jrportal_rooms->room_floor                 = getEscaped(jomresGetParam($_POST, 'room_floor', ''));
        $jrportal_rooms->singleperson_suppliment    = (float) jomresGetParam($_POST, 'singleperson_suppliment', 0.0);
        $jrportal_rooms->room_features_uid          = jomresGetParam($_POST, 'features_list', array());

        //html editor fields
        if ($jrConfig[ 'allowHTMLeditor' ] == '0') {
            $jrportal_rooms->description_intro      = $this->convert_greaterthans(jomresGetParam($_POST, 'room_description_intro', '')); // The input here is called room_description_intro and not just description_intro because the input filtering settings in site config need a nice to identify value
            $jrportal_rooms->description            = $this->convert_greaterthans(jomresGetParam($_POST, 'room_description', ''));

            $jrportal_rooms->description_intro      = strip_tags($jrportal_rooms->description_intro, '<p><br>');
            $jrportal_rooms->description            = strip_tags($jrportal_rooms->description, '<p><br>');
        } else {
            $jrportal_rooms->description_intro      = jomresGetParam($_POST, 'room_description_intro', '');
            $jrportal_rooms->description            = jomresGetParam($_POST, 'room_description', '');
        }
        
        if ($jrportal_rooms->room_uid > 0) {
            $jrportal_rooms->commit_update_room();
        } else {
            $jrportal_rooms->commit_new_room();
        }

        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), '');
    }

    public function convert_greaterthans($string)
    {
        $string = str_replace('&#38;gt;', '>', $string);

        return $string;
    }
    
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
