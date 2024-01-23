<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
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
	#[AllowDynamicProperties]
class jomres_custom_field_handler
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$this->custom_fields = false;
		$this->custom_fields_by_ptype_id = false;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function get_all_custom_fields()
	{
		if (!is_array($this->custom_fields)) {
			$this->custom_fields = array();
			$this->custom_fields_by_ptype_id = array();

			$query = 'SELECT `uid`, `fieldname`, `default_value`, `description`, `required`, `ptype_xref` FROM #__jomres_custom_fields';
			$fields = doSelectSql($query);

			if (!empty($fields)) {
				foreach ($fields as $t) {
					$this->custom_fields[ $t->uid ] = array('uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => $t->ptype_xref);

					if ($t->ptype_xref != '') {
						$ptype_xref = unserialize($t->ptype_xref);

						if (is_array($ptype_xref) && !empty($ptype_xref)) {
							foreach ($ptype_xref as $xref) {
								$this->custom_fields_by_ptype_id[ $xref ][ $t->uid ] = array('uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => $t->ptype_xref);
							}
						}
					} else {
						//BC: no ptype xref, so we`ll assume the filed is assigned to all properties
						$this->custom_fields_by_ptype_id[ 0 ][ $t->uid ] = array('uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => '');
					}
				}
			}
		}

		return $this->custom_fields;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function getAllCustomFieldsByPtypeId($ptype_id = 0)
	{
		if (!is_array($this->custom_fields) || !is_array($this->custom_fields_by_ptype_id)) {
			$this->get_all_custom_fields();
		}

		if (isset($this->custom_fields_by_ptype_id[ $ptype_id ])) {
			return $this->custom_fields_by_ptype_id[ $ptype_id ];
		}

		if (isset($this->custom_fields_by_ptype_id[ 0 ])) {
			return $this->custom_fields_by_ptype_id[ 0 ];
		}

		return array();
	}
}
