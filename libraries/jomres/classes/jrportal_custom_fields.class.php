<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2022 Vince Wooll
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

class jrportal_custom_fields
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->init_custom_field();
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function init_custom_field()
	{
		$this->uid = 0;		// custom field uid
		$this->fieldname = '';		// custom field name (no spaces)
		$this->default_value = '';		// custom field default value
		$this->description = '';		// custom field description
		$this->required = 0;		// required yes/no 1/0
		$this->ptype_ids = array();	// property types xref
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Save new custom field
	public function commit_new_custom_field()
	{
		if ($this->uid > 0) {
			throw new Exception('Error: Custom field uid already set. Are you sure you`re creating a new custom field?');
		}

		if ($this->fieldname == '') {
			throw new Exception('Error: Custom field name not set.');
		}

		if ($this->description == '') {
			throw new Exception('Error: Custom field description not set.');
		}

		$query = "INSERT INTO #__jomres_custom_fields 
							(
							`fieldname`,
							`default_value`,
							`description`,
							`required`,
							`ptype_xref`
							) 
						VALUES 
							( 
							'" .$this->fieldname."',
							'" .$this->default_value."',
							'" .$this->description."',
							" .(int) $this->required.",
							'" .serialize($this->ptype_ids)."'
							)";

		$this->uid = doInsertSql($query, '');

		if (!$this->uid) {
			throw new Exception('Error: New custom field insert failed.');
		}

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Update existing custom field
	public function commit_update_custom_field()
	{
		if ($this->uid == 0) {
			throw new Exception('Error: Custom field uid not set.');
		}

		if ($this->fieldname == '') {
			throw new Exception('Error: Custom field name not set.');
		}

		if ($this->description == '') {
			throw new Exception('Error: Custom field description not set.');
		}

		$query = "UPDATE #__jomres_custom_fields SET 
						`fieldname` = '" .$this->fieldname."',
						`default_value` = '" .$this->default_value."',
						`description` = '" .$this->description."',
						`required` = " .(int) $this->required.", 
						`ptype_xref` = '" .serialize($this->ptype_ids)."' 
					WHERE `uid` = " .$this->uid;

		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Custom field update intert failed.');
		}

		return true;
	}
	
	/**
	 * 
	 *
	 *
	 */

	//Delete custom field
	public function delete_custom_field()
	{
		if ($this->uid == 0) {
			throw new Exception('Error: Custom field uid not set.');
		}

		$query = 'DELETE FROM #__jomres_custom_fields WHERE `uid`= '.(int) $this->uid;

		if (!doInsertSql($query, '')) {
			throw new Exception('Error: Delete custom field failed.');
		}

		return true;
	}
}
