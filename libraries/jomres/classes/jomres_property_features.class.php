<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.9.1
 * @package Jomres
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_property_features
	{
	private static $configInstance;

	public function __construct()
		{
		$this->property_features 	= false;				// array of all property features

		$this->id 					= 0;					// property feature id
		$this->abbv					= '';					// property feature name
		$this->desc					= '';					// property feature description
		$this->image				= '';					// property feature icon/image
		$this->property_uid			= 0;					// property uid (not used for now)
		$this->ptype_xref			= array();				// property types xref array
		$this->cat_id				= 0;					// property feature category id
		$this->cat_title			= 0;					// property feature category id
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_property_features();
			}

		return self::$configInstance;
		}

	//get all property features
	function get_all_property_features()
		{
		if ( is_array( $this->property_features ) )
			{
			return true;
			}
		else
			$this->property_features = array();

		$query = "SELECT `hotel_features_uid`, `hotel_feature_abbv`, `hotel_feature_full_desc`, `image`, `property_uid`, `ptype_xref`, `cat_id` FROM #__jomres_hotel_features WHERE `property_uid` = 0 ORDER BY `hotel_feature_abbv`";
		$result = doSelectSql( $query );
		
		if ( empty($result) )
			{
			return false;
			}
		
		//get all property features categories
		$jomres_property_features_categories = jomres_singleton_abstract::getInstance( 'jomres_property_features_categories' );
		$jomres_property_features_categories->get_all_property_features_categories();

		foreach ( $result as $r )
			{
			$this->property_features[$r->hotel_features_uid]['id']				= (int)$r->hotel_features_uid;			// property feature id
			$this->property_features[$r->hotel_features_uid]['abbv']			= jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_ABBV' . (int) $r->hotel_features_uid, $r->hotel_feature_abbv, false ); // property feature name/abbv;
			$this->property_features[$r->hotel_features_uid]['desc']			= jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_DESC' . (int) $r->hotel_features_uid, $r->hotel_feature_full_desc, false ); // property feature description
			$this->property_features[$r->hotel_features_uid]['image']			= $r->image;							// property feature image/icon
			$this->property_features[$r->hotel_features_uid]['property_uid']	= (int)$r->property_uid;				// property uid
			
			if ( $r->ptype_xref != '' )
				{
				if ( !is_numeric($r->ptype_xref) )
					{
					$this->property_features[$r->hotel_features_uid]['ptype_xref']	= unserialize($r->ptype_xref);			// property types xref unserialized
					}
				else //backward compatibility for when only one ptype id could be assigned
					{
					$this->property_features[$r->hotel_features_uid]['ptype_xref']	= array( (int)$r->ptype_xref );			// property types xref
					}
				}
			else
				$this->property_features[$r->hotel_features_uid]['ptype_xref']	= array();
			
			$this->property_features[$r->hotel_features_uid]['cat_id']			= (int)$r->cat_id;						// property feature category id
			
			if ( array_key_exists( (int)$r->cat_id, $jomres_property_features_categories->property_features_categories ) )
				$this->property_features[$r->hotel_features_uid]['cat_title']	= $jomres_property_features_categories->property_features_categories[(int)$r->cat_id]['title'];	// property feature category title
			else
				$this->property_features[$r->hotel_features_uid]['cat_title']	= '';
			}
	
		return true;
		}
	
	//get property feature by id
	function get_property_feature( $id = 0 )
		{
		if ( (int)$id == 0 )
			{
			return true;
			}
		
		if ( is_array($this->property_features) && isset($this->property_features[(int)$id]) )
			{
			$this->property_feature = $this->property_features[ (int)$id ];
			
			$this->id 					= $this->property_features[ (int)$id ]['id'];					// property feature id
			$this->abbv					= $this->property_features[ (int)$id ]['abbv'];					// property feature name
			$this->desc					= $this->property_features[ (int)$id ]['desc'];					// property feature description
			$this->image				= $this->property_features[ (int)$id ]['image'];				// property feature icon/image
			$this->property_uid			= $this->property_features[ (int)$id ]['property_uid'];			// property uid
			$this->ptype_xref			= $this->property_features[ (int)$id ]['ptype_xref'];			// property types xref array
			$this->cat_id				= $this->property_features[ (int)$id ]['cat_id'];				// property feature category id
			$this->cat_title			= $this->property_features[ (int)$id ]['cat_title'];			// property feature category id
			
			return true;
			}

		$query = "SELECT `hotel_features_uid`, `hotel_feature_abbv`, `hotel_feature_full_desc`, `image`, `property_uid`, `ptype_xref`, `cat_id` FROM #__jomres_hotel_features WHERE `property_uid` = 0 AND `hotel_features_uid` = " . (int)$id;
		$result = doSelectSql( $query );
		
		if ( empty( $result ) )
			{
			return false;
			}
		
		foreach ( $result as $r )
			{
			$this->id				= (int)$r->hotel_features_uid;			// property feature id
			$this->abbv				= jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_ABBV' . (int) $r->hotel_features_uid, $r->hotel_feature_abbv, false ); // property feature name/abbv;
			$this->desc				= jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_DESC' . (int) $r->hotel_features_uid, $r->hotel_feature_full_desc, false ); // property feature description
			$this->image			= $r->image;							// property feature image/icon
			$this->property_uid		= (int)$r->property_uid;				// property uid
			
			if ( $r->ptype_xref != '' )
				{
				if ( !is_numeric($r->ptype_xref) )
					{
					$this->ptype_xref	= unserialize($r->ptype_xref);		// property types xref unserialized
					}
				else //backward compatibility for when only one ptype id could be assigned
					{
					$this->ptype_xref	= array( (int)$r->ptype_xref );		// property types xref array
					}
				}
			else
				$this->ptype_xref	= array();
			
			$this->cat_id			= (int)$r->cat_id;						// property feature category id
			
			//get all property features categories
			$jomres_property_features_categories = jomres_singleton_abstract::getInstance( 'jomres_property_features_categories' );
			$jomres_property_features_categories->get_property_features_category( (int)$r->cat_id );
		
			$this->cat_title = $jomres_property_features_categories->title;	// property feature category title
			}

		return true;
		}
	
	//create new property feature
	function commit_new_property_feature()
		{
		if ( $this->id > 0 )
			{
			throw new Exception( "Error: Property feature id already set. Are you sure you`re creating a new property feature?");
			}
		
		if ( $this->abbv == '' )
			{
			throw new Exception( "Error: Property feature abbv not set.");
			}
		
		$query = "INSERT INTO #__jomres_hotel_features 
										(
										 `hotel_feature_abbv`,
										 `hotel_feature_full_desc`,
										 `image`,
										 `property_uid`,
										 `ptype_xref`,
										 `cat_id` 
										 ) 
										VALUES 
										(
										 '" . $this->abbv . "',
										 '" . $this->desc . "',
										 '" . $this->image . "',
										 " . (int)$this->property_uid . ",
										 '" . serialize($this->ptype_xref) . "',
										 " . (int)$this->cat_id . "
										 )";
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property feature insert failed.");
			}
		}
	
	//update existing property feature
	function commit_update_property_feature()
		{
		if ( $this->id == 0 )
			{
			throw new Exception( "Error: Property feature id not set.");
			}
		
		if ( $this->abbv == '' )
			{
			throw new Exception( "Error: Property feature abbv not set.");
			}
		
		$query = "UPDATE #__jomres_hotel_features SET 
							`image` = '" . $this->image . "',
							`hotel_feature_abbv` = '" . $this->abbv . "',
							`hotel_feature_full_desc` = '" . $this->desc . "',
							`ptype_xref` = '" . serialize($this->ptype_xref) . "',
							`cat_id` = ".(int)$this->cat_id." 
						WHERE `hotel_features_uid` = " . (int)$this->id . " 
							AND `property_uid` = " . (int)$this->property_uid;
		
		if ( doInsertSql( $query, false ) )
			{
			return true;
			}
		else
			{
			throw new Exception( "Error: Property feature update failed.");
			}
		}
	
	//Delete property feature
	function delete_property_features( $ids = array() )
		{
		if ( !is_array($ids) || empty($ids) )
			{
			throw new Exception( "Error: Property feature ids for deletion not set.");
			}
		
		$used_property_features = array();
		$allDeleted = true;
		$messages = '';

		// First we need to check that the feature isn't recorded against any propertys. If it is, we can't move forward
		//TODO: do something better with this..too resource intensive on sites with lots of properties
		//get all used property feature ids
		$query = "SELECT `property_features` FROM #__jomres_propertys WHERE `property_features` != '' ";
		$propertyFeaturesList = doSelectSql( $query );
		
		foreach ( $propertyFeaturesList as $r )
			{
			$featuresArray = explode( ",", ( $r->property_features ) );
			
			foreach ($featuresArray as $f)
				{
				$used_property_features[] = $f; 
				}
			}
		
		array_unique( $used_property_features );
		
		foreach ( $ids as $id )
			{
			$safeToDelete = true;
			
			if ( in_array( $id, $used_property_features ) )
				{
				$safeToDelete = false;
				$allDeleted   = false;
				}

			if ( !$safeToDelete )
				{
				$messages .= jr_gettext( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', false ) . $propertyFeatureUid . ": <br>";
				}
			else
				{
				$query = "DELETE FROM #__jomres_hotel_features WHERE `hotel_features_uid` = " . (int)$id;
				if ( !doInsertSql( $query, '' ))
					{
					throw new Exception( "Error: Could not delete property feature with id ". (int)$id);
					}
				}
			}
		
		return $messages;
		}
	
	function get_all_property_features_images()
		{
		$images = array();
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_site_images('pfeatures');
		
		foreach ($jomres_media_centre_images->site_images['pfeatures'] as $image) 
			{
			$r = array();
			
			$r[ 'IMAGE_FILENAME' ] = substr($image['large'], strrpos($image['large'], '/') + 1);
			$r[ 'IMAGE_SRC' ]  = $image['large'];
			
			$images[] = $r;
			}

		return $images;
		}
	}
