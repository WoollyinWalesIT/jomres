<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00035tabcontent_01_main_details
	{
	function __construct( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig     = getPropertySpecificSettings( $property_uid );
		$output       = $componentArgs[ 'currrent_output' ];

		$discount_text   = "";
		$discount_output = array ();
		$featureList     = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'featurelist' ];
		$rtRows          = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'roomtypes' ];
		$MiniComponents->triggerEvent( '01011', array ( 'property_uids' => array('0'=>$property_uid) ) );
		$discount=get_showtime( 'propertylist_discounts');
		if(count($discount)>0)
			{
			if ($discount[$property_uid]['discount_type']=='lastminuteactive') // Using last minute calculations
				{
				$lastminutethreshold = $discount[$property_uid]['lastminutethreshold'];
				$lastminutediscount  = $discount[$property_uid]['lastminutediscount'];

				$todaysDate     = date( "Y/m/d" );
				$date_elements  = explode( "/", $todaysDate );
				$unixTodaysDate = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $lastminutethreshold, $date_elements[ 0 ] );
				$latestDate     = JSCalmakeInputDates( date( "Y/m/d", $unixTodaysDate ) );

				$discount_text = jr_gettext( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', _JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE, false, true );
				$discount_text .= $lastminutediscount;
				$discount_text .= jr_gettext( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', _JOMCOMP_LASTMINUTE_PROPERTYLIST_MID, false, true );
				$discount_text .= $latestDate;
				$discount_text .= jr_gettext( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', _JOMCOMP_LASTMINUTE_PROPERTYLIST_POST, false, true );
				}
			else // Using wiseprice calculations
				{
				$wisepricethreshold = $discount[$property_uid]['wisepricethreshold'];
				$wisepricediscount  = $discount[$property_uid]['wiseprice75discount'];

				$todaysDate     = date( "Y/m/d" );
				$date_elements  = explode( "/", $todaysDate );
				$unixTodaysDate = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $wisepricethreshold, $date_elements[ 0 ] );
				$latestDate     = JSCalmakeInputDates( date( "Y/m/d", $unixTodaysDate ) );

				$discount_text = jr_gettext( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', _JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE, false, true );
				$discount_text .= (float) $wisepricediscount . jr_gettext( '_JOMCOMP_LASTMINUTE_ORMORE', _JOMCOMP_LASTMINUTE_ORMORE, false, true );
				$discount_text .= $latestDate;
				$discount_text .= jr_gettext( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', _JOMCOMP_LASTMINUTE_PROPERTYLIST_POST, false, true );
				}
			}
		if ( $discount_text != "" )
			$discount_output[ ] = array ( "DISCOUNT_OUTPUT" => $discount_text );

		$output[ 'MAP' ] = $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'feature_icons', $featureList );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 ) $tmpl->addRows( 'roomtype_icons', $rtRows );

		if ( $discount_text != "" ) $tmpl->addRows( 'discount_output', $discount_output );
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'tabcontent_01_main_details.html' );
		$parsedTemplate = $tmpl->getParsedTemplate();

		$anchor        = jomres_generate_tab_anchor( $output[ 'HDESCRIPTION' ] );
		$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $output[ 'HDESCRIPTION' ], "TAB_CONTENT" => $parsedTemplate , "TAB_ID" => 'tour_target_property_details_main_details');
		$this->retVals = $tab;
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

?>