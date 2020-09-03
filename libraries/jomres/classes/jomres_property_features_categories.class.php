<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.23.2
 * @package Jomres
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_property_features_categories
	{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
		{
		$this->property_features_categories = false;				// array of all property features categories

		$this->id							= 0;					// property feature category id
		$this->title						= '';					// property feature category title
		}

	//get all property features categories	
	/**
	 * 
	 *
	 *
	 */

	function get_all_property_features_categories()
		{
		if ( is_array( $this->property_features_categories ) )
			{
			return true;
			}
		else
			$this->property_features_categories = array();

		$query = "SELECT `id`,`title` FROM #__jomres_hotel_features_categories ORDER BY `title` ";
		$result = doSelectSql( $query );
		
		if ( empty($result) )
			{
			return false;
			}

		foreach ( $result as $r )
			{
			$this->property_features_categories[(int)$r->id]['id'] 		= (int)$r->id;
			$this->property_features_categories[(int)$r->id]['title'] 	= jr_gettext('_JOMRES_PROPERTY_FEATURES_CATEGORY'.(int)$r->id, stripslashes($r->title),false);
			}

		return true;
		}
	
	//get property features category by id	
	/**
	 * 
	 *
	 *
	 */

	function get_property_features_category( $id = 0 )
		{
		if ( (int)$id == 0 )
			{
			return true;
			}
		
		if ( is_array($this->property_features_categories) && isset($this->property_features_categories[(int)$id]) )
			{
			$this->id		= $this->property_features_categories[ (int)$id ]['id'];					// property feature category id
			$this->title	= $this->property_features_categories[ (int)$id ]['title'];					// property feature category title
		
			return true;
			}

		$query = "SELECT `id`,`title` FROM #__jomres_hotel_features_categories WHERE `id` = " . (int)$id;
		$result = doSelectSql( $query );
		
		if ( empty( $result ) )
			{
			return false;
			}
		
		foreach ( $result as $r )
			{
			$this->id 		= (int)$r->id;
			$this->title 	= jr_gettext('_JOMRES_PROPERTY_FEATURES_CATEGORY'.(int)$r->id, stripslashes($r->title),false);
			}

		return true;
		}
	
	//Save new property feature category	
	/**
	 * 
	 *
	 *
	 */

	function commit_new_property_features_category()
		{
		if ( $this->id > 0 )
			{
			throw new Exception( "Error: Property feature category id already set. Are you sure you`re creating a new category?");
			}
		
		if ( $this->title == '' )
			{
			throw new Exception( "Error: Property feature category title not set.");
			}
		
		$query = "INSERT INTO #__jomres_hotel_features_categories (`title`) VALUES ('" . $this->title . "')";
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property feature category insert failed.");
			}
		}
	
	//Update existing property feature category	
	/**
	 * 
	 *
	 *
	 */

	function commit_update_property_features_category()
		{
		if ( $this->id == 0 )
			{
			throw new Exception( "Error: Property feature category id not set.");
			}
		
		if ( $this->title == '' )
			{
			throw new Exception( "Error: Property feature category title not set.");
			}
		
		$query = "UPDATE #__jomres_hotel_features_categories SET `title`= '" . $this->title . "' WHERE `id` = " . (int)$this->id;
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property feature category update failed.");
			}
		}
	
	//Delete property features category	
	/**
	 * 
	 *
	 *
	 */

	function delete_property_features_category()
		{
		if ( $this->id == 0 )
			{
			throw new Exception( "Error: Property feature category id not set.");
			}
		
		//first we check if the category is not used by existing property features
		$query = "SELECT `cat_id` FROM #__jomres_hotel_features WHERE `cat_id` = " . (int)$this->id;
		$result = doSelectSql( $query );
		
		if ( !empty($result) )
			{
			return false;
			}

		$query = "DELETE FROM #__jomres_hotel_features_categories WHERE `id` = " . (int)$this->id;
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property feature category delete failed.");
			}
		}
	}
