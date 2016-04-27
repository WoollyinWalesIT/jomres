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

/**
#
 * Creates the Jomres currency format object
#
 *
 * @package Jomres
 * @since 2.6
#
 */
class jomres_custom_field_handler
	{
	/**
	#
	 * Constructor. Sets the required curency format
	#
	 */
	function __construct( $specific_path = false )
		{
		$this->custom_fields = array ();
		$this->custom_fields_by_ptype_id = array();
		$this->getAllCustomFields();
		}

	function getAllCustomFields()
		{
		$this->custom_fields = get_showtime( 'custom_field_handler_fields' );
		if ( is_null( $this->custom_fields ) )
			{
			$query  = "SELECT uid,fieldname,default_value,description,required,ptype_xref FROM #__jomres_custom_fields";
			$fields = doSelectSql( $query );
			if ( count( $fields ) > 0 )
				{
				foreach ( $fields as $t )
					{
					$this->custom_fields[ $t->uid ] = array ( 'uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => $t->ptype_xref );
					}
				}
			if (count($this->custom_fields)>0)
				set_showtime( 'custom_field_handler_fields', $this->custom_fields );
			else
				set_showtime( 'custom_field_handler_fields', array() );
			}

		return $this->custom_fields;
		}
	
	function getAllCustomFieldsByPtypeId( $ptype_id = 0 )
		{
		if ( ($ptype_id > 0) && (count($this->custom_fields)>0) )
			{
			$this->custom_fields_by_ptype_id[ $ptype_id ] = get_showtime( 'custom_field_handler_fields'.$ptype_id );
			if ( !isset( $this->custom_fields_by_ptype_id[ $ptype_id ] ) )
				{
				$query  = "SELECT uid,fieldname,default_value,description,required,ptype_xref FROM #__jomres_custom_fields";
				$fields = doSelectSql( $query );
				if ( count( $fields ) > 0 )
					{
					foreach ( $fields as $t )
						{
						$ptype_xref=unserialize($t->ptype_xref);
						if ($t->ptype_xref!='' && count($ptype_xref)>0)
							{
							if (in_array ($ptype_id, $ptype_xref))
								$this->custom_fields_by_ptype_id[ $ptype_id ][ $t->uid ] = array ( 'uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => $t->ptype_xref );
							}
						else
							$this->custom_fields_by_ptype_id[ $ptype_id ][ $t->uid ] = array ( 'uid' => $t->uid, 'fieldname' => $t->fieldname, 'default_value' => $t->default_value, 'description' => $t->description, 'required' => $t->required, 'ptype_xref' => '' );
						}
					}
				set_showtime( 'custom_field_handler_fields'.$ptype_id, $this->custom_fields_by_ptype_id[ $ptype_id ] );
				}
			return $this->custom_fields_by_ptype_id[ $ptype_id ];
			}
		else
			return $this->custom_fields;
		}
	}

?>