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

class j03381room_types
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!$thisJRUser->userIsManager) {
            return;
        }
        
		$dropdown = '';
        
		$property_uid = getDefaultProperty();
		
		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();

        if (isset($jomres_room_types->property_specific_room_types[$property_uid])) {
            $room_types = array();
			
            foreach ($jomres_room_types->property_specific_room_types[$property_uid] as $key=>$rt) {

				$room_type = $rt['room_class_abbv'];
	
                $room_types[ ] = jomresHTML::makeOption($key, $room_type);
            }

            $dropdown = jomresHTML::selectList($room_types, 'resource_id', ' autocomplete="off" class="btn btn-success btn-lg" size="1" ', 'value', 'text', '', false);
        }

        $this->ret_vals = $dropdown;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->ret_vals;
    }
}
