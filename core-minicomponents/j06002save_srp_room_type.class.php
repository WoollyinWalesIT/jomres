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

class j06002save_srp_room_type
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

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( $thisJRUser->id == 0 ) 
			return false;
		
		$property_uid = (int) getDefaultProperty();
		
		$resource_type	= intval( jomresGetParam( $_REQUEST, 'resource_type', 0 ) );
		$maxpeople		= intval( jomresGetParam( $_REQUEST, 'maxpeople', 0 ) );
		
		// If it wasn't done before, we'll do it again. Save Property Config will do it once however if the user visits this page from a menu option, or sanity check...
		removeAllPropertyTariffs( $property_uid );
		removeAllPropertyEnhanceTariffsXref( $property_uid );
		removeAllPropertyRooms( $property_uid );

		$query = "INSERT INTO #__jomres_rooms (propertys_uid,room_classes_uid,max_people ) VALUES ( ".$property_uid." , ".$resource_type." , ".$maxpeople." )";
		doInsertSql($query,'');
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=dashboard" ), '' );
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
