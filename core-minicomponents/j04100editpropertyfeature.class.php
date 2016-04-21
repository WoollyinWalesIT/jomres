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

class j04100editpropertyfeature
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
		$defaultProperty    = getDefaultProperty();
		$propertyFeatureUid = intval( jomresGetParam( $_REQUEST, 'propertyFeatureUid', 0 ) );
		$clone              = intval( jomresGetParam( $_REQUEST, 'clone', 0 ) );
		if ( $propertyFeatureUid )
			{
			$query        = "SELECT hotel_feature_abbv,hotel_feature_full_desc,property_uid FROM #__jomres_hotel_features WHERE hotel_features_uid  = '" . (int) $propertyFeatureUid . "' AND property_uid = '" . (int) $defaultProperty . "'";
			$pFeatureList = doSelectSql( $query );
			foreach ( $pFeatureList as $pFeature )
				{
				$output[ 'FEATURE_ABBV' ]        = stripslashes( $pFeature->hotel_feature_abbv );
				$output[ 'FEATURE_DESCRIPTION' ] = stripslashes( $pFeature->hotel_feature_full_desc );
				}
			}
		if ( $clone ) $propertyFeatureUid = false;

		$output[ 'INDEX' ]               = "index.php";
		$output[ 'PROPERTYFEATUREUID' ]  = $propertyFeatureUid;
		$output[ 'HFEATUREABBV' ]        = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV' );
		$output[ 'HFEATUREDESCRIPTION' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC' );
		$output[ 'MOSCONFIGLIVESITE' ]   = get_showtime( 'live_site' );
		$output[ 'PAGETITLE' ]           = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES' );

		$cancelText = jr_gettext( '_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL', false );
		$deleteText = jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE', false );
		$saveText   = jr_gettext( '_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "&task=propertyadmin" ), $cancelText );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', $saveText, true, 'savePropertyFeature' );
		if ( !$clone ) $jrtb .= $jrtbar->toolbarItem( 'delete', jomresURL( JOMRES_SITEPAGE_URL . "&task=deletePropertyFeature" . "&propertyFeatureUid=" . $propertyFeatureUid . "" ), $deleteText );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'editpropertyfeature.html' );
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