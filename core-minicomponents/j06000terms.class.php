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

class j06000terms
	{
	function __construct($componentArgs)
		{
		$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );

		$userIsManager = checkUserIsManager();

		$query        = "SELECT property_policies_disclaimers FROM #__jomres_propertys WHERE propertys_uid = '" . $property_uid . "' LIMIT 1";
		$property_policiesdisclaimers = doSelectSql( $query , 1 );

		$property_policiesdisclaimers = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',  $property_policiesdisclaimers , false , false );

		$property                           = array ();
		$property[ 'LIVESITE' ]             = get_showtime( 'live_site' );
		$property[ 'HPROPERTYNAME' ]        = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME' );
		$property[ 'HPOLICIESDISCLAIMERS' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS' );

		$property[ 'POLICIESDISCLAIMERS' ] = $property_policiesdisclaimers;
		if ( empty( $property[ 'POLICIESDISCLAIMERS' ] ) ) 
			$property[ 'HPOLICIESDISCLAIMERS' ] = "";

		$property_deets[ ] = $property;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->addRows( 'property_deets', $property_deets );
		$tmpl->readTemplatesFromInput( 'terms.html' );
		if ( !isset($componentArgs['return_template']))
			$tmpl->displayParsedTemplate();
		else
			$this->retVals = $tmpl->getParsedTemplate();
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
		return $this->retVals;
		}
	}
