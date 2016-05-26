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

class j06002delete_resource
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$roomUid         = intval( jomresGetParam( $_REQUEST, 'roomUid', 0 ) );
		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();
		
		if ( $mrConfig[ 'singleRoomProperty' ] == "1" )
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_resources" ), jr_gettext( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', '_JOMRES_COM_MR_ROOM_UNABLETODELETE', false ) );
		
		jr_import( 'jrportal_rooms' );
		$jrportal_rooms = new jrportal_rooms();
		$jrportal_rooms->room_uid = $roomUid;
		$jrportal_rooms->propertys_uid = $defaultProperty;
		
		$success = $jrportal_rooms->delete_room($roomUid);
		
		if ($success)
			$save_message = jr_gettext( '_JOMRES_COM_MR_ROOM_DELETED', '_JOMRES_COM_MR_ROOM_DELETED', false );
		else
			$save_message = jr_gettext( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', '_JOMRES_COM_MR_ROOM_UNABLETODELETE', false ) ;
		
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_resources" ), $save_message );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
