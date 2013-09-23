<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000deleteRfeature
	{
	function j16000deleteRfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

		$idarray = jomresGetParam( $_POST, 'idarray', array () );
		if ( count( $idarray ) > 0 )
			{
			$allDeleted = true;
			foreach ( $idarray as $id )
				{
				$roomFeatureUid = $id;
				// First we need to check that the feature isn't recorded against any propertys. If it is, we can't move forward
				$query = "SELECT room_features_uid FROM #__jomres_rooms WHERE `room_features_uid` != '' ";
				$roomFeaturesList = doSelectSql( $query );
				$safeToDelete         = true;
				foreach ( $roomFeaturesList as $feature )
					{
					$featuresArray = explode( ",", ( $feature->room_features_uid ) );
					if ( in_array( $roomFeatureUid, $featuresArray ) )
						{
						$safeToDelete = false;
						$allDeleted   = false;
						}
					}
				if ( !$safeToDelete )
					{
					echo jr_gettext( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', _JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE, false ) . $roomFeatureUid . ": <br>";
					}
				else
					{
					$query = "DELETE FROM #__jomres_room_features  WHERE room_features_uid='" . (int) $roomFeatureUid . "'";
					doInsertSql( $query, '' );
					}
				}
			}
		if ( $allDeleted ) jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN . "&task=listRfeatures", "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}