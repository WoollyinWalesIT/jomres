<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.25.1
 * @package Jomres
 * @copyright	2005-2021 Vince Wooll
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

class jomres_property_categories
	{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
		{
		$this->property_categories = false;				// array of all property  categories

		$this->id							= 0;		// property category id
		$this->title						= '';		// property category title
		$this->description					= '';		// property category description
		}

	//get all property categories
		
	/**
	 * 
	 *
	 *
	 */

	public function get_all_property_categories()
		{
		if ( is_array( $this->property_categories ) )
			{
			return true;
			}
		else
			$this->property_categories = array();

		$query = "SELECT `id`,`title`, `description` FROM #__jomres_property_categories ORDER BY `title` ";
		$result = doSelectSql( $query );
		
		if ( empty($result) )
			{
			return false;
			}

		foreach ( $result as $r )
			{
			$this->property_categories[(int)$r->id]['id'] 			= (int)$r->id;
			$this->property_categories[(int)$r->id]['title'] 		= jr_gettext('_JOMRES_PROPERTY_CATEGORY'.(int)$r->id, stripslashes($r->title),false);
			$this->property_categories[(int)$r->id]['description'] 	= jr_gettext('_JOMRES_PROPERTY_CATEGORY_DESC'.(int)$r->id, stripslashes($r->description),false);
			}

		return true;
		}
	
	//get property category by id
		
	/**
	 * 
	 *
	 *
	 */

	public function get_property_category( $id = 0 )
		{
		if ( (int)$id == 0 )
			{
			return true;
			}
		
		if ( is_array($this->property_categories) && isset($this->property_categories[(int)$id]) )
			{
			$this->id			= $this->property_categories[ (int)$id ]['id'];				// property category id
			$this->title		= $this->property_categories[ (int)$id ]['title'];			// property category title
			$this->description	= $this->property_categories[ (int)$id ]['description'];	// property category description
		
			return true;
			}

		$query = "SELECT `id`,`title`,`description` FROM #__jomres_property_categories WHERE `id` = " . (int)$id;
		$result = doSelectSql( $query );
		
		if ( empty( $result ) )
			{
			return false;
			}
		
		foreach ( $result as $r )
			{
			$this->id 			= (int)$r->id;
			$this->title 		= jr_gettext('_JOMRES_PROPERTY_CATEGORY'.(int)$r->id, stripslashes($r->title),false);
			$this->description 	= jr_gettext('_JOMRES_PROPERTY_CATEGORY_DESC'.(int)$r->id, stripslashes($r->description),false);
			}

		return true;
		}
	
	//Save new property category
		
	/**
	 * 
	 *
	 *
	 */

	public function commit_new_property_category()
		{
		if ( $this->id > 0 )
			{
			throw new Exception( "Error: Property category id already set. Are you sure you`re creating a new category?");
			}
		
		if ( $this->title == '' )
			{
			throw new Exception( "Error: Property category title not set.");
			}
		
		$query = "INSERT INTO #__jomres_property_categories (`title`,`description`) VALUES ('" . $this->title . "','" . $this->description . "')";
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property category insert failed.");
			}
		}
	
	//Update existing property category
		
	/**
	 * 
	 *
	 *
	 */

	public function commit_update_property_category()
		{
		if ( $this->id == 0 )
			{
			throw new Exception( "Error: Property category id not set.");
			}
		
		if ( $this->title == '' )
			{
			throw new Exception( "Error: Property category title not set.");
			}
		
		$query = "UPDATE #__jomres_property_categories SET `title` = '" . $this->title . "', `description` = '" . $this->description . "' WHERE `id` = " . (int)$this->id;
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property category update failed.");
			}
		}
	
	//Delete property category
		
	/**
	 * 
	 *
	 *
	 */

	public function delete_property_category()
		{
		if ( $this->id == 0 )
			{
			throw new Exception( "Error: Property category id not set.");
			}
		
		//first we check if the category is not used by existing property features
		$query = "SELECT `propertys_uid` FROM #__jomres_propertys WHERE `cat_id` = " . (int)$this->id;
		$result = doSelectSql( $query );
		
		if ( !empty($result) )
			{
			return false;
			}

		$query = "DELETE FROM #__jomres_property_categories WHERE `id` = " . (int)$this->id;
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property category delete failed.");
			}
		}
		
		
	/**
	 * 
	 *
	 *
	 */

	public function getPropertyCategoriesDropdown($selected = 0)
		{
		$this->get_all_property_categories();
		
		if (empty($this->property_categories))
			{
			return '';
			}
		
		$category_options = array();
		$category_options[] = jomresHTML::makeOption(0, 'Uncategorized');

		foreach ($this->property_categories as $c)
			{
			$category_options[] = jomresHTML::makeOption($c['id'], $c['title']);
			}
		
		return jomresHTML::selectList($category_options, 'cat_id', 'class="inputbox" size="1"', 'value', 'text', $selected , false );
		}
	}
	
	
