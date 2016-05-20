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

class jomres_property_types
	{
	private static $configInstance;

	public function __construct()
		{
		$this->property_types = false;
		
		$this->property_type 				 = array();
		$this->property_type['id']           = 0;					// new property type id default
		$this->property_type['ptype']        = '';					// property type name; TODO: make it use jr_gettext
		$this->property_type['ptype_desc']   = '';					// property type specific language file dir name
		$this->property_type['published']    = 1;					// published
		$this->property_type['order']        = 0;					// order
		$this->property_type['mrp_srp_flag'] = 0;					// what will guests book: rooms in the property or the property itself
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_property_types();
			}

		return self::$configInstance;
		}
	
	// Get all property types details
	// mrp_srp_flag:
	// 0 - hotel
	// 1 - villa/apartment
	// 2 - both - BC, resets to 0
	// 3 - tours
	// 4 - real estate
	function get_all_property_types()
		{
		if ( is_array( $this->property_types ) ) //already executed, but there are no property types created yet, so the array is empty
			{
			return true;
			}
		else
			$this->property_types = array();
		
		$query = "SELECT `id`, `ptype`, `ptype_desc`, `published`, `order`, `mrp_srp_flag` FROM #__jomres_ptypes ORDER BY `order` ASC";
		$result = doSelectSql( $query );
		
		if ( count($result) < 1 )
			{
			return false;
			}

		foreach ( $result as $r )
			{
			$this->property_types[$r->id]['id']           = (int)$r->id;			// property type id
			$this->property_types[$r->id]['ptype']        = $r->ptype;				// property type name; TODO: make it use jr_gettext
			$this->property_types[$r->id]['ptype_desc']   = $r->ptype_desc;			// property type specific language file dir name
			$this->property_types[$r->id]['published']    = (int)$r->published;		// published
			$this->property_types[$r->id]['order']        = (int)$r->order;			// order
			$this->property_types[$r->id]['mrp_srp_flag'] = (int)$r->mrp_srp_flag;	// what will guests book: rooms in the property or the property itself
			}
		
		return true;
		}
	
	//Get property type details by property type id
	function get_property_type( $id = 0 )
		{
		if ( $id == 0 )
			{
			return true;
			}
		
		if ( is_array($this->property_types) && array_key_exists( $id, $this->property_types ) )
			{
			$this->property_type = $this->property_types[$id];
			return true;
			}

		$query = "SELECT `id`, `ptype`, `ptype_desc`, `published`, `order`, `mrp_srp_flag` FROM #__jomres_ptypes WHERE `id` = " . (int)$id;
		$result = doSelectSql( $query );
		
		if ( count( $result ) < 1 )
			return false;
		
		foreach ( $result as $r )
			{
			$this->property_type['id']           = (int)$r->id;				// property type id
			$this->property_type['ptype']        = $r->ptype;				// property type name; TODO: make it use jr_gettext
			$this->property_type['ptype_desc']   = $r->ptype_desc;			// property type specific language file dir name
			$this->property_type['published']    = (int)$r->published;		// published
			$this->property_type['order']        = (int)$r->order;			// order
			$this->property_type['mrp_srp_flag'] = (int)$r->mrp_srp_flag;	// what will guests book: rooms in the property or the property itself
			}

		return true;
		}
	
	//Save new or existing property type
	function save_property_type()
		{
		if ( $this->property_type['ptype_desc'] != '' )
			{
			if ( !is_dir( JOMRESPATH_BASE . '/language/' . $this->property_type['ptype_desc'] ) && is_writable( JOMRESPATH_BASE . '/language/' ) )
				{
				mkdir( JOMRESPATH_BASE . '/language/' . $this->property_type['ptype_desc'] );
				copy( JOMRESPATH_BASE . '/language/' . get_showtime( 'lang' ) . ".php", JOMRESPATH_BASE . '/language/' . $this->property_type['ptype_desc'] . "/" . get_showtime( 'lang' ) . ".php" );
				}
			}
		
		if ( $this->property_type['id'] > 0 ) 
			$query = "UPDATE #__jomres_ptypes 
						SET 
							`ptype` 		= '".$this->property_type['ptype']."',
							`ptype_desc` 	= '".$this->property_type['ptype_desc']."', 
							`mrp_srp_flag` 	= ".$this->property_type['mrp_srp_flag']." 
						WHERE id = " . (int)$this->property_type['id'];
		else
			$query = "INSERT INTO #__jomres_ptypes 
								(
								`ptype`,
								`ptype_desc` ,
								`mrp_srp_flag`
								) 
							VALUES 
								(
								'".$this->property_type['ptype']."',
								'".$this->property_type['ptype_desc']."', 
								".$this->property_type['mrp_srp_flag']."
								)
								";
		
		if ( doInsertSql( $query, false ) )
			return true;
		else
			throw new Exception( "Error: Property type insert or update failed.");
		}
	
	//Delete property type
	function delete_property_type( $ids = array() )
		{
		$success = true;
		
		foreach ( $ids as $id )
			{
			$query  = "SELECT ptype_id FROM #__jomres_propertys WHERE ptype_id = " . (int)$id;
			$result = doSelectSql( $query );
			
			if ( count( $result ) > 0 )
				{
				$success = false;
				}
			else
				{
				$query = "DELETE FROM #__jomres_ptypes WHERE id = '" . (int) $id . "'";
				if ( !doInsertSql( $query, false ) )
					{
					$success = false;
					}
				}
			}
		
		return $success;
		}
	
	//Publish or unpublish property type
	function publish_property_type( $id = 0 )
		{
		if ( $id == 0 )
			{
			throw new Exception( "Error: Property type id not set.");
			}
			
		$this->get_property_type( $id );
		
		if ( $this->property_type['published'] == 0 )
			$published = 1;
		else
			$published = 0;
		
		if ( $this->property_type['id'] > 0 )
			{
			$query = "UPDATE #__jomres_ptypes SET `published` = ".$published." WHERE id = ".$this->property_type['id'];
		
			if ( doInsertSql( $query, false ) )
				return true;
			else
				throw new Exception( "Error: Publishing property type failed.");
			}
		else
			return false;
		}
	
	// We have a situation where a property type needs to be cross-referenced with room types, this check will ascertain if any property types are missing room types
	function get_property_types_with_no_room_types_assigned( $show_link_to_room_types = false )
		{
		$property_types_requiring_attention = array();

		//get all property types
		$this->get_all_property_types();
		
		//get all room types
		$jomres_room_types = jomres_singleton_abstract::getInstance( 'jomres_room_types' );
		$jomres_room_types->get_all_room_types();

		//find the properties requiring attention
		foreach( $this->property_types as $t )
			{
			if ($t['mrp_srp_flag'] == 0 || $t['mrp_srp_flag'] == 1)
				{
				if ( !array_key_exists( $t['id'], $jomres_room_types->all_ptype_rtype_xrefs ) )
					{
					$property_types_requiring_attention[] = array ("ptype_abbv"=>$t['ptype'] , "process" => $t['mrp_srp_flag']);
					}
				}
			}

		//build warning
		if ( count($property_types_requiring_attention) > 0 )
			{
			$o = array();
			$po = array();
			$rws = array();
			
			$o['_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES'] = jr_gettext('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES','_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES',false);
			$o['_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD'] = jr_gettext('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD','_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD',false);
			$o['_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES']	= jr_gettext('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES','_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES',false);
			$o['HPTYPE'] = jr_gettext( '_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false );
			
			$o['LINK'] = '';
			if ( $show_link_to_room_types )
				$o['LINK'] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN . '&task=listGlobalroomTypes'.'" class="btn btn-primary">'.jr_gettext('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT','_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT',false).'</a>';
			
			foreach ($property_types_requiring_attention as $property_type)
				{
				$r = array();
				$r['PROPERTY_TYPE'] = $property_type['ptype_abbv'];
				if ( $property_type['process'] == 0)
					$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '_JOMRES_PROPERTYTYPE_FLAG_HOTEL',false );
				else
					$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_VILLA', '_JOMRES_PROPERTYTYPE_FLAG_VILLA',false );
				$rws[] = $r;
				}
			
			$po[] = $o;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->addRows( 'pageoutput', $po );
			$tmpl->addRows( 'rows', $rws );
			$tmpl->readTemplatesFromInput( 'list_ptypes_without_room_types.html' );
			
			return $tmpl->getParsedTemplate();
			}
		else
			return '';
		}
	}
