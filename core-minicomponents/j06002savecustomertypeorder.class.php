<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 *  @version Jomres 10.6.0
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
class j06002savecustomertypeorder
{
	function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$defaultProperty = (int)getDefaultProperty();
		
		$order = jomresGetParam($_POST, 'order', array());
		
		jr_import('jrportal_guest_types');
		$jrportal_guest_types = new jrportal_guest_types();
		$jrportal_guest_types->property_uid	= $defaultProperty;

		foreach ($order as $k => $v) {
			$jrportal_guest_types->id = $k;
			$jrportal_guest_types->order = $v;
			
			$jrportal_guest_types->save_guest_type_order();
		}

		$webhook_notification						   	= new stdClass();
		$webhook_notification->webhook_event			= 'property_state_change';
		$webhook_notification->webhook_event_description= 'A catchall webhook notification which notes that the property state has changed. Primarily designed for caching features to remove/refresh cache elements';
		$webhook_notification->data					 	= new stdClass();
		$webhook_notification->data->property_uid	   	=  $defaultProperty;
		add_webhook_notification($webhook_notification);

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL . "&task=listcustomertypes"), jr_gettext('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', false));
	}

	// This must be included in every Event/Mini-component
	function getRetVals()
	{
		return null;
	}
}
