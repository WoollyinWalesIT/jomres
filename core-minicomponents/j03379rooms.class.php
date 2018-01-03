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

class j03379rooms
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $property_uid = getDefaultProperty();
        $mrConfig = getPropertySpecificSettings($property_uid);
        
		$this->ret_vals = array();
        
		if (!isset($mrConfig[ 'singleRoomProperty' ])) {
            $mrConfig[ 'singleRoomProperty' ] = '0';
        }
        if (!isset($mrConfig[ 'is_real_estate_listing' ])) {
            $mrConfig[ 'is_real_estate_listing' ] = '0';
        }

        $preview_link = JOMRES_SITEPAGE_URL_AJAX.'&task=show_property_rooms&property_uid='.$property_uid;
            
        if ($mrConfig[ 'singleRoomProperty' ] != '1' && $mrConfig['is_real_estate_listing'] != '1') {
            $this->ret_vals = array(
									'resource_type' => 'rooms', 
									'resource_id_required' => true, 
									'name' => jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', false),
									'upload_root_abs_path' => JOMRES_IMAGELOCATION_ABSPATH.$property_uid.JRDS,
									'upload_root_rel_path' => JOMRES_IMAGELOCATION_RELPATH.$property_uid.'/',
									'notes' => '', 
									'preview_link'=>$preview_link 
									);

            if (!AJAXCALL && !defined('MEDIACENTRE_ROOMJS')) {
                define('MEDIACENTRE_ROOMJS', 1);
                echo '
				<script>
				jomresJquery(function () {
					jomresJquery("#resource_id_dropdown").change(function () {
						get_existing_images(); 
						});
					});
				</script>
				';
            }
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
