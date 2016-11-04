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

class j16000savePfeature
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$propertyFeatureUid      = jomresGetParam( $_POST, 'propertyFeatureUid', 0 );
		$hotel_feature_abbv      = jomresGetParam( $_POST, 'feature_abbv', "" );
		$hotel_feature_full_desc = jomresGetParam( $_POST, 'feature_description', "" );
		$ptype_ids		         = jomresGetParam( $_POST, 'ptype_ids', array() );
		$image                   = jomresGetParam( $_POST, 'image', "" );
		$cat_id                  = (int)jomresGetParam( $_POST, 'cat_id', 0 );

		
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$c->eraseAll();
		
		if ( empty( $propertyFeatureUid ) )
			{
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
										 '$hotel_feature_abbv',
										 '$hotel_feature_full_desc',
										 '$image',
										 '0',
										 '" . serialize($ptype_ids) . "',
										 ".$cat_id."
										 )";
			if ( doInsertSql( $query, '' ) ) 
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeatures" ), jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', false ) );
			}
		else
			{
			$query = "UPDATE #__jomres_hotel_features SET 
							`image` = '$image',
							`hotel_feature_abbv` = '$hotel_feature_abbv',
							`hotel_feature_full_desc` = '$hotel_feature_full_desc',
							`ptype_xref` = '" . serialize($ptype_ids) . "',
							`cat_id` = ".(int)$cat_id." 
						WHERE hotel_features_uid = " . (int) $propertyFeatureUid . " 
							AND property_uid = 0 ";
			if ( doInsertSql( $query, '' ) ) 
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeatures"), jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', false ) );
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}