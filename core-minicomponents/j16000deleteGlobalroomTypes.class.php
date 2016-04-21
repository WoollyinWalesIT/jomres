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

class j16000deleteGlobalroomTypes
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

		$success = true;
		$idarray = jomresGetParam( $_POST, 'idarray', array () );
		if ( count( $idarray ) > 0 )
			{
			foreach ( $idarray as $id )
				{
				$saveMessage = jr_gettext( '_JOMRES_COM_MR_ROOMCLASS_DELETED', '_JOMRES_COM_MR_ROOMCLASS_DELETED', false );
				// First we need to check that the feature isn't recorded against any tariffs. If it is, we can't move forward
				$query  = "SELECT  roomclass_uid FROM #__jomres_rates WHERE roomclass_uid='" . (int) $id . "'";
				$rtList = doSelectSql( $query );
				if ( count( $rtList ) > 0 )
					{
					$success = false;
					echo jr_gettext( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', false ) . " Room type id: " . $id . "<br>";
					}
				else
					{
					$query = "DELETE FROM #__jomres_room_classes  WHERE room_classes_uid='" . (int) $id . "'";
					doInsertSql( $query, '' );
					}
				}
			if ( $success )
				{
				$query = "DELETE FROM #__jomres_roomtypes_propertytypes_xref WHERE roomtype_id = " . (int) $id;
				doInsertSql( $query, '' );
				$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
				$c->eraseAll();
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listGlobalroomTypes" ), $saveMessage );
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}