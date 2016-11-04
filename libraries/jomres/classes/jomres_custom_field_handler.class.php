<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_custom_field_handler
	{
	private static $configInstance;
	
	function __construct()
		{
		$this->custom_fields = false;
		$this->custom_fields_by_ptype_id = false;
		
		//retrieve custom fields from cache, if available
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$custom_fields_data = $c->retrieve('custom_fields_data');
		
		if ( $custom_fields_data !== false )
			{
			$this->custom_fields = $custom_fields_data['custom_fields'];
			$this->custom_fields_by_ptype_id = $custom_fields_data['custom_fields_by_ptype_id'];
			}
		}
	
	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_custom_field_handler();
			}

		return self::$configInstance;
		}

	function get_all_custom_fields()
		{
		if ( !is_array( $this->custom_fields ) )
			{
			$this->custom_fields = array();
			$this->custom_fields_by_ptype_id = array();
			
			$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
			
			$query  = "SELECT `uid`, `fieldname`, `default_value`, `description`, `required`, `ptype_xref` FROM #__jomres_custom_fields";
			$fields = doSelectSql( $query );
			
			if ( count( $fields ) > 0 )
				{
				foreach ( $fields as $t )
					{
					$this->custom_fields[ $t->uid ] = array ( 'uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => $t->ptype_xref );

					if ( $t->ptype_xref != '' )
						{
						$ptype_xref = unserialize( $t->ptype_xref );
						
						if ( is_array($ptype_xref) && count( $ptype_xref ) > 0 )
							{
							foreach ( $ptype_xref as $xref )
								{
								$this->custom_fields_by_ptype_id[ $xref ][ $t->uid ] = array ( 'uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => $t->ptype_xref );
								}
							}
						}
					else 
						{
						//BC: no ptype xref, so we`ll assume the filed is assigned to all properties
						$this->custom_fields_by_ptype_id[ 0 ][ $t->uid ] = array ( 'uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => '' );
						}
					}
				}
			
			$c->store('custom_fields_data', array ('custom_fields'=>$this->custom_fields, 'custom_fields_by_ptype_id'=>$this->custom_fields_by_ptype_id ) );
			}

		return $this->custom_fields;
		}
	
	function getAllCustomFieldsByPtypeId( $ptype_id = 0 )
		{
		if ( !is_array($this->custom_fields) || !is_array($this->custom_fields_by_ptype_id) )
			{
			$this->get_all_custom_fields();
			}

		if ( isset($this->custom_fields_by_ptype_id[ $ptype_id ]) )
			{
			return $this->custom_fields_by_ptype_id[ $ptype_id ];
			}
		
		if ( isset($this->custom_fields_by_ptype_id[ 0 ]) )
			{
			return $this->custom_fields_by_ptype_id[ 0 ];
			}
		
		return $this->custom_fields;
		}
	}
