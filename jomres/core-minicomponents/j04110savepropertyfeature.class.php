<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j04110savepropertyfeature
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
		$defaultProperty         = getDefaultProperty();
		$propertyFeatureUid      = intval( jomresGetParam( $_POST, 'propertyFeatureUid', "" ) );
		$hotel_feature_abbv      = getEscaped( jomresGetParam( $_POST, 'feature_abbv', "" ) );
		$hotel_feature_full_desc = getEscaped( jomresGetParam( $_POST, 'feature_description', "" ) );
		if ( $propertyFeatureUid == "" )
			{
			$saveMessage = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', false );
			$query       = "INSERT INTO #__jomres_hotel_features (`hotel_feature_abbv`,`hotel_feature_full_desc`,`property_uid` )VALUES ('$hotel_feature_abbv','$hotel_feature_full_desc','" . (int) $defaultProperty . "')";
			if ( doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', false ) ) ) returnToPropertyConfig( $saveMessage );
			trigger_error( "Unable to insert into hotel features table, mysql db failure", E_USER_ERROR );
			}
		else
			{
			$saveMessage = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', false );
			$query       = "UPDATE #__jomres_hotel_features SET `hotel_feature_abbv`='$hotel_feature_abbv',`hotel_feature_full_desc`='$hotel_feature_full_desc' WHERE hotel_features_uid='" . (int) $propertyFeatureUid . "' AND property_uid = '" . (int) $defaultProperty . "'";
			if ( doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', false ) ) ) returnToPropertyConfig( $saveMessage );
			trigger_error( "Unable to update hotel features table, mysql db failure", E_USER_ERROR );
			}
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