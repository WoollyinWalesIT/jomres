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

class j06000terms
	{
	function __construct()
		{
		$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
		$this->pop    = jomresGetParam( $_REQUEST, 'popup', 0 );
		//if ($this->pop==1)
		//property_header($property_uid);

		$mrConfig      = getPropertySpecificSettings( $property_uid );
		$userIsManager = checkUserIsManager();

		$query        = "SELECT property_name,property_policies_disclaimers
		FROM #__jomres_propertys WHERE propertys_uid = '" . $property_uid . "' LIMIT 1";
		$propertyList = doSelectSql( $query );

		foreach ( $propertyList as $pproperty ) $property_policiesdisclaimers = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS', htmlspecialchars( trim( stripslashes( $pproperty->property_policies_disclaimers ) ), ENT_QUOTES ) );

		if ( ( !$userIsManager ) || $userIsManager )
			{
			$property                           = array ();
			$property[ 'LIVESITE' ]             = get_showtime( 'live_site' );
			$property[ 'HPROPERTYNAME' ]        = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME );
			$property[ 'HPOLICIESDISCLAIMERS' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS );

			$property[ 'POLICIESDISCLAIMERS' ] = $property_policiesdisclaimers;
			if ( empty( $property[ 'POLICIESDISCLAIMERS' ] ) ) $property[ 'HPOLICIESDISCLAIMERS' ] = "";

			$property_deets[ ] = $property;

			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'property_deets', $property_deets );
			$tmpl->readTemplatesFromInput( 'terms.html' );
			$tmpl->displayParsedTemplate();
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
