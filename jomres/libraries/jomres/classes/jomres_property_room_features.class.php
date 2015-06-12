<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class jomres_property_room_features
	{
	private static $configInstance;
	
	public function __construct()
		{
		$property_uid = (int) get_showtime("property_uid");
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		$jomres_media_centre_images->get_images($property_uid, array('room_features'));

		$this->room_features = array ();
		$query               = "SELECT room_features_uid,feature_description FROM #__jomres_room_features WHERE property_uid = ".$property_uid;
		$roomFeatures        = doSelectSql( $query );
		
		if ( count( $roomFeatures ) > 0 )
			{
			foreach ( $roomFeatures as $f )
				{
				$feature_image_small		= $jomres_media_centre_images->multi_query_images['noimage-small'];
				$feature_image_medium		= $jomres_media_centre_images->multi_query_images['noimage-medium'];
				$feature_image_large		= $jomres_media_centre_images->multi_query_images['noimage-large'];
				
				if (isset($jomres_media_centre_images->images['room_features'][ $f->room_features_uid ][0]['small']))
					{
					$feature_image_small	= $jomres_media_centre_images->images['room_features'][ $f->room_features_uid ][0]['small'];
					$feature_image_medium	= $jomres_media_centre_images->images['room_features'][ $f->room_features_uid ][0]['medium'];
					$feature_image_large	= $jomres_media_centre_images->images['room_features'][ $f->room_features_uid ][0]['large'];
					}
				
				$this->room_features[ $f->room_features_uid ] = array ( 
					"room_features_uid" => $f->room_features_uid,
					"room_features_description" => jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION' . (int) $f->room_features_uid, stripslashes( $f->feature_description ) ),
					"feature_image_small" => $feature_image_small,
					"feature_image_medium" => $feature_image_medium,
					"feature_image_large" => $feature_image_large
					);

				}
			}
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_property_room_features();
			}

		return self::$configInstance;
		}

	public function __clone()
		{
		trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
		}
	
	public function get_room_feature_template($room_feature_uids = array() )
		{
		if ( count ( $room_feature_uids ) == 0 )
			return '';

		$rows=array();

		foreach ( $room_feature_uids as $feature_uid )
			{
			if ((int)$feature_uid>0)
				{
				$r = array();
				$r['IMAGE'] = $this->get_room_feature_image($feature_uid);
				$rows[]=$r;
				}
			}
		
		if ( count($rows)>0)
			{
			$tmpl = new patTemplate();
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'show_room_features.html' );
			return $tmpl->getParsedTemplate();
			}
		else
			return '';
		}
		
	public function get_room_feature_image($feature_uid)
		{
		if ( (int) $feature_uid == 0 )
			return '';

		$pageoutput=array();

		$r = array();
		$r['FEATURE_UID'] = $feature_uid;
		$r['ROOM_FEATURES_DESCRIPTION']	= $this->room_features[$feature_uid]['room_features_description'];
		$r['FEATURE_IMAGE_SMALL']		= $this->room_features[$feature_uid]['feature_image_small'];
		$r['FEATURE_IMAGE_MEDIUM']		= $this->room_features[$feature_uid]['feature_image_medium'];
		$r['FEATURE_IMAGE_LARGE']		= $this->room_features[$feature_uid]['feature_image_large'];
		$pageoutput[]=$r;

		if ( count($pageoutput)>0)
			{
			$tmpl = new patTemplate();
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'show_room_feature.html' );
			return $tmpl->getParsedTemplate();
			}
		else
			return '';
		}
	
	}
