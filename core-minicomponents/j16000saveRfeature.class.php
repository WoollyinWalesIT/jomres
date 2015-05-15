<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000saveRfeature
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

		$roomFeatureUid      	 = jomresGetParam( $_POST, 'roomFeatureUid', 0 );
		$feature_description     = jomresGetParam( $_POST, 'feature_description', "" );
		$property_uid			 = jomresGetParam( $_POST, 'property_uid', 0 );
		$ptype_ids		         = jomresGetParam( $_POST, 'ptype_ids', array() );

		if ( empty( $roomFeatureUid ) )
			{
			$query = "INSERT INTO #__jomres_room_features (`feature_description`,`property_uid`,`ptype_xref` )VALUES ('$feature_description','0','" . serialize($ptype_ids) . "')";
			if ( doInsertSql( $query, '' ) ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listRfeatures" ), "" );
			}
		else
			{
			$query = "UPDATE #__jomres_room_features SET `feature_description`='$feature_description',`ptype_xref`='" . serialize($ptype_ids) . "' WHERE room_features_uid='" . (int) $roomFeatureUid . "' AND property_uid = '0'";
			if ( doInsertSql( $query, '' ) ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listRfeatures" ), "" );
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}