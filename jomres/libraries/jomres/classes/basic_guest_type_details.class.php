<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class basic_guest_type_details
	{
	private static $configInstance;

	public function __construct()
		{
		$this->guest_types = false;
		$this->guest_type = false;
		$this->property_uid = 0;
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new basic_guest_type_details();
			}

		return self::$configInstance;
		}
	
	//Get all guest type details
	function get_all_guest_types( $property_uid = 0 )
		{
		if ($property_uid == 0 )
			{
			throw new Exception( "Error: Property uid not set.");
			}
		
		if ( is_array( $this->guest_types ) ) //already executed but the property doesn`t have any guest types created yet, so the array is empty
			{
			return true;
			}
		else
			$this->guest_types = array();
		
		$this->property_uid = $property_uid;

		$query="SELECT
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
				WHERE `property_uid` = ".(int)$this->property_uid." 
				ORDER BY `order`, `type` ";
		$result = doSelectSql( $query );
		
		if ( count($result) < 1 )
			{
			return false;
			}

		foreach ( $result as $r )
			{
			$this->guest_types[$r->id]['id']            = (int)$r->id;
			$this->guest_types[$r->id]['type']      	= jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$r->id, stripslashes($r->type));
			$this->guest_types[$r->id]['notes']         = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTNOTES'.$r->id, stripslashes($r->notes));
			$this->guest_types[$r->id]['maximum']     	= (int)$r->maximum;
			$this->guest_types[$r->id]['is_percentage'] = (int)$r->is_percentage;
			$this->guest_types[$r->id]['posneg']	    = (int)$r->posneg;
			$this->guest_types[$r->id]['variance']     	= (float)$r->variance;
			$this->guest_types[$r->id]['published']		= (int)$r->published;
			$this->guest_types[$r->id]['property_uid']	= (int)$r->property_uid;
			$this->guest_types[$r->id]['order']			= (int)$r->order;
			$this->guest_types[$r->id]['is_child'] 		= (int)$r->is_child;
			}
		
		return true;
		}
	
	//Get guest type details by guest type id
	function get_guest_type( $id = 0 )
		{
		if ($id == 0 )
			{
			throw new Exception( "Error: Guest type id not set.");
			}
		
		if ( is_array($this->guest_types) && array_key_exists( $id, $this->guest_types ) )
			{
			$this->guest_type = $this->guest_types[$id];
			return true;
			}
		
		if (is_array($this->guest_type))
			return true;
		
		$this->guest_type = array();

		$query="SELECT
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
				WHERE `id` = ".(int)$id;
		$result = doSelectSql( $query );
		
		if ( count( $result ) < 1 )
			return false;
		
		foreach ( $result as $r )
			{
			$this->guest_type['id']            	= (int)$r->id;
			$this->guest_type['type']      		= jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.$r->id, stripslashes($r->type));
			$this->guest_type['notes']         	= jr_gettext('_JOMRES_CUSTOMTEXT_GUESTNOTES'.$r->id, stripslashes($r->notes));
			$this->guest_type['maximum']     	= (int)$r->maximum;
			$this->guest_type['is_percentage'] 	= (int)$r->is_percentage;
			$this->guest_type['posneg']	    	= (int)$r->posneg;
			$this->guest_type['variance']     	= (float)$r->variance;
			$this->guest_type['published']		= (int)$r->published;
			$this->guest_type['property_uid']	= (int)$r->property_uid;
			$this->guest_type['order']			= (int)$r->order;
			$this->guest_type['is_child'] 		= (int)$r->is_child;
			
			$this->property_uid = $this->guest_type['property_uid'];
			}

		return true;
		}
	}
