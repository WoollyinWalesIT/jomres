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

class j04040editroomtype
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
		$classUid        = jomresGetParam( $_REQUEST, 'classUid', "" );
		$clone           = intval( jomresGetParam( $_REQUEST, 'clone', 0 ) );
		$defaultProperty = getDefaultProperty();
		if ( $classUid != "" )
			{
			$query         = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc FROM #__jomres_room_classes WHERE room_classes_uid = '" . (int) $classUid . "' AND property_uid = '" . (int) $defaultProperty . "'";
			$roomClassList = doSelectSql( $query );
			foreach ( $roomClassList as $roomClass )
				{
				$output[ 'CLASSABBV' ] = stripslashes( $roomClass->room_class_abbv );
				$output[ 'CLASSDESC' ] = stripslashes( $roomClass->room_class_full_desc );
				}
			}
		if ( $clone ) $classUid = false;

		$output[ 'INDEX' ]        = "index.php";
		$output[ 'HABBV' ]        = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV' );
		$output[ 'HDESC' ]        = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC' );
		$output[ 'ROOMCLASSUID' ] = $classUid;
		$output[ 'PAGETITLE' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES' );

		$cancelText = jr_gettext( '_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL', false );
		$deleteText = jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE', false );
		$saveText   = jr_gettext( '_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "&task=propertyadmin" ), $cancelText );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', $saveText, true, 'saveRoomClass' );
		if ( !$clone ) $jrtb .= $jrtbar->toolbarItem( 'delete', jomresURL( JOMRES_SITEPAGE_URL . "&task=deleteRoomClass" . "&roomClassUid=" . $classUid . "" ), $deleteText );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'editroomtype.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
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

?>