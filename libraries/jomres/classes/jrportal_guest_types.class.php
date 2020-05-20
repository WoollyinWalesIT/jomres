<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.4
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jrportal_guest_types
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->init_guest_type();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init_guest_type()
	{
		$this->id = 0;		// guest type id
		$this->type = '';		// guest type name
		$this->notes = '';		// guest type notes - internal notes, not visible in the frontend
		$this->maximum = '10';		// maximum number of this guest type
		$this->is_percentage = 0;		// 0/1 variance is percentage or not
		$this->posneg = 0;		// 0/1 variance is positive or negative
		$this->variance = 0;		// variance amount
		$this->published = 1;		// published
		$this->property_uid = 0;		// property uid - 0 for global guest types
		$this->order = 0;		// order of guest type dropdowns on the booking form
		$this->is_child = 0;		// this guest type is a child - used on channel managers
		//$this->xref 			= array();	// TODO: not used yet for global guest types - guest type property type xref
	}
		
	/**
	 * 
	 *
	 *
	 */

	//Get guest type details by guest type id
	public function get_guest_type()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest type id not set.');
		}
		
		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = "SELECT
					`id`,
					`type`,
					`notes`,
					`maximum`,
					`is_percentage`,
					`posneg`,
					`variance`,
					`published`,
					`property_uid`,
					`order`,
					`is_child` 
				FROM `#__jomres_customertypes` 
				WHERE `id` = ".(int) $this->id." AND `property_uid` = ".(int)$this->property_uid;
		$result = doSelectSql($query);

		if (empty($result)) {
			return false;
		}

		foreach ($result as $r) {
			$this->id = (int) $r->id;
			$this->type = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$r->id, stripslashes($r->type));
			$this->notes = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTNOTES'.$r->id, stripslashes($r->notes));
			$this->maximum = (int) $r->maximum;
			$this->is_percentage = (int) $r->is_percentage;
			$this->posneg = (int) $r->posneg;
			$this->variance = (float) $r->variance;
			$this->published = (int) $r->published;
			$this->property_uid = (int) $r->property_uid;
			$this->order = (int) $r->order;
			$this->is_child = (int) $r->is_child;
		}

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Save new guest type
	public function commit_new_guest_type()
	{
		if ($this->id > 0) {
			throw new Exception('Error: Guest type id already set. Are you sure you`re creating a new guest type?');
		}

		if ($this->property_uid == 0) { //TODO to be removed later for global guest types
			throw new Exception('Error: Property uid not set.');
		}

		$query = "INSERT INTO #__jomres_customertypes 
							(
							`id`,
							`type`,
							`notes`,
							`maximum`,
							`is_percentage`,
							`posneg`,
							`variance`,
							`published`, 
							`property_uid`, 
							`order`, 
							`is_child`
							)
						VALUES 
							(
							" .(int) $this->id.",
							'".$this->type."',
							'".$this->notes."',
							".(int) $this->maximum.",
							".(int) $this->is_percentage.",
							".(int) $this->posneg.",
							".(float) $this->variance.",
							".(int) $this->published.", 
							".(int) $this->property_uid.",
							".(int) $this->order.",
							".(int) $this->is_child." 
							)";
		$this->id = doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', false));
		
		if (!$this->id) {
			throw new Exception('Error: New guest type insert failed.');
		}
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_type_saved';
		$webhook_notification->webhook_event_description	= 'Logs when guest types added.';
		$webhook_notification->webhook_event_plugin		 = 'core';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		$webhook_notification->data->guest_type_uid		 = $this->id;
		add_webhook_notification($webhook_notification);

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Update existing guest type
	public function commit_update_guest_type()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest type id not set.');
		}

		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = "UPDATE #__jomres_customertypes 
					SET 
						`type` = '" .$this->type."',
						`notes` = '".$this->notes."',
						`maximum` = ".(int)$this->maximum.",
						`is_percentage` = ".(int)$this->is_percentage.",
						`posneg` = ".(int)$this->posneg.",
						`variance` = ".(float)$this->variance.",
						`is_child` = ".(int)$this->is_child." 
					WHERE `id` = ".(int)$this->id." 
						AND `property_uid` = ".(int)$this->property_uid;

		if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', false))) {
			throw new Exception('Error: Guest type update intert failed.');
		}
		
		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_type_saved';
		$webhook_notification->webhook_event_description	= 'Logs when guest types updated.';
		$webhook_notification->webhook_event_plugin		 = 'core';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		$webhook_notification->data->guest_type_uid		 = $this->id;
		add_webhook_notification($webhook_notification);
		
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Delete guest type
	public function delete_guest_type()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest type id not set.');
		}

		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = 'DELETE FROM #__jomres_customertypes WHERE `id` = '.(int) $this->id.' AND `property_uid` = '.(int) $this->property_uid;
		if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', false))) {
			throw new Exception('Error: Delete guest type failed.');
		}

		$webhook_notification							   = new stdClass();
		$webhook_notification->webhook_event				= 'guest_type_deleted';
		$webhook_notification->webhook_event_description	= 'Logs when guest type deleted.';
		$webhook_notification->webhook_event_plugin		 = 'core';
		$webhook_notification->data						 = new stdClass();
		$webhook_notification->data->property_uid		   = $this->property_uid;
		$webhook_notification->data->guest_type_uid		 = $this->id;
		add_webhook_notification($webhook_notification);
		
		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Publish/unpublish guest type
	public function publish_guest_type()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest type id not set.');
		}

		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = 'SELECT `published` FROM #__jomres_customertypes WHERE `id` = '.(int) $this->id.' LIMIT 1';
		$result = doSelectSql($query);

		if ($result) {
			$published = (int) $result[0]->published;

			
			if ($published == 0) {
				$published = 1;
			} else {
				$published = 0;
			}

			$query = 'UPDATE #__jomres_customertypes SET `published` = '.$published.' WHERE `id` = '.(int) $this->id.' AND `property_uid` = '.(int) $this->property_uid;
			if (!doInsertSql($query, '')) {
				throw new Exception('Error: Publish/unpublish guest type failed.');
			}
 
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Guest type order
	public function save_guest_type_order()
	{
		if ($this->id == 0) {
			throw new Exception('Error: Guest type id not set.');
		}

		if ($this->property_uid == 0) {
			throw new Exception('Error: Property uid not set.');
		}

		$query = 'UPDATE  #__jomres_customertypes SET `order` = '.$this->order.' WHERE `id` = '.(int) $this->id.' AND `property_uid` = '.(int) $this->property_uid;
		if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', false))) {
			throw new Exception('Error: Ordering guest type failed.');
		}

		return true;
	}
}
