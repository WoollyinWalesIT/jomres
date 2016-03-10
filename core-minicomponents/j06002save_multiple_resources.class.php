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

class j06002save_multiple_resources
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false; return;
			}
		$mrConfig = getPropertySpecificSettings();
		$defaultProperty = getDefaultProperty();

		$numberOfResources = intval(jomresGetParam( $_POST, 'numberOfResources', '1' ));
		$resourcesType = intval(jomresGetParam( $_POST, 'resourcesType', '' ));
		$maxGuests = intval(jomresGetParam( $_POST, 'maxGuests', '1' ));
		$deleteExistingResources = intval(jomresGetParam( $_POST, 'deleteExistingResources', '0' ));
		
		
		if ( $resourcesType > 0 )
			{
			if ($deleteExistingResources == 1 )
				{
				$query = "DELETE FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $defaultProperty . "' ";
				doInsertSql( $query, "" );
				}
			
			// We need to find the next room number available to us
			$query = "SELECT room_number FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $defaultProperty . "' ORDER BY room_number ";
			$roomnumberList = doSelectSql( $query );
			if ( count( $roomnumberList ) > 0 )
				{
				$roomNumbers = array ();
				foreach ( $roomnumberList as $n )
					{
					$roomNumbers[ ] = (int) $n->room_number;
					}
				sort( $roomNumbers );
				$nextRoomNumber = end( $roomNumbers ) + 1;
				}
			else
				$nextRoomNumber = 1;
					
			$query = "INSERT INTO #__jomres_rooms (
										`room_classes_uid`,
										`propertys_uid`,
										`room_features_uid`,
										`room_name`,
										`room_number`,
										`room_floor`,
										`max_people`
										)
									VALUES ";
			
			for ( $i = 1; $i <= $numberOfResources; $i++ )
				{
				if ( $nextRoomNumber < 10 ) 
					$nextRoomNumberStr = "0" . (string) $nextRoomNumber;
				else
					$nextRoomNumberStr = (string) $nextRoomNumber;

				$query .="(
						'" . $resourcesType . "',
						 " . (int) $defaultProperty . ",
						'',
						'',
						'" . $nextRoomNumberStr . "',
						'',
						'" . $maxGuests . "'
						),";
				$nextRoomNumber++;
				}
			
			$query = rtrim($query, ",");
			
			if ( !doInsertSql( $query, "" ) ) trigger_error( "Sql error when generating multiple resources ", E_USER_ERROR );

			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_resources" ), "" );
			}
		else
			trigger_error( "Room class uid not set", E_USER_ERROR );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
