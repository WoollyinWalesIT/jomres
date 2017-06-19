<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.5
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_editing_mode
{
	private static $configInstance;

    public function __construct()
    {
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        
        $this->editing_allowed = true;
        
		if (!isset($tmpBookingHandler->user_settings[ 'editing_on' ])) {
            $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
        }
        
		if (!$thisJRUser->userIsManager) {
            $this->editing_allowed = false;
            $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
        }
        
		if ($thisJRUser->userIsManager && $thisJRUser->accesslevel <= 50) { //receptionist or lower
            $this->editing_allowed = false;
            $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
        }
        
		if ($jrConfig[ 'minimalconfiguration' ] == '1' && !$thisJRUser->superPropertyManager) {
            $this->editing_allowed = false;
            $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
        }
        
		if ($jrConfig[ 'editingModeAffectsAllProperties' ] == '1' && $thisJRUser->superPropertyManager) {
            $this->editing_allowed = true;
            $tmpBookingHandler->user_settings[ 'editing_on' ] = true;
        }
        
		$this->editing = $tmpBookingHandler->user_settings[ 'editing_on' ];
    }
	
	public static function getInstance()
    {
        if (!self::$configInstance) {
            self::$configInstance = new self();
        }

        return self::$configInstance;
    }

    public function switch_mode_on()
    {
        if (!$this->editing_allowed) {
            return false;
        }
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        $tmpBookingHandler->user_settings[ 'editing_on' ] = true;
		
		$this->editing = true;
    }

    public function switch_mode_off()
    {
        if (!$this->editing_allowed) {
            return false;
        }
        $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
        $tmpBookingHandler->user_settings[ 'editing_on' ] = false;
		
		$this->editing = false;
    }

    public function make_editing_mode_dropdown()
    {
        if (!$this->editing_allowed) {
            return false;
        }
        $on_text = jr_gettext('_JOMRES_EDITINGMODE_ON', '_JOMRES_EDITINGMODE_ON', false);
        $off_text = jr_gettext('_JOMRES_EDITINGMODE_OFF', '_JOMRES_EDITINGMODE_OFF', false);

        $mode_options = array();
        $mode_options[ ] = jomresHTML::makeOption('0', $off_text);
        $mode_options[ ] = jomresHTML::makeOption('1', $on_text);
        $javascript = 'onchange="switch_editing_mode(\''.JOMRES_SITEPAGE_URL_AJAX.'\',this.value);"';

        return jomresHTML::selectList($mode_options, 'jomres_editing_mode', ' autocomplete="off" class="inputbox" size="1" '.$javascript.'', 'value', 'text', $this->editing);
    }
}
