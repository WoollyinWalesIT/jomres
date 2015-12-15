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

class j00035tabcontent_04_availability_calendar
	{
	function __construct( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}
		
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig     = getPropertySpecificSettings( $property_uid );

		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
			{
			if ($mrConfig[ 'showOnlyAvailabilityCalendar' ] == "1")
				return;
			
			if ( $mrConfig[ 'showAvailabilityCalendar' ] == "0" )
				return;

			$tab_title = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false);
			
			if ( $mrConfig[ 'singleRoomProperty' ] == 1 )
				{
				$MiniComponents->specificEvent( '06000', 'srp_calendar', array('output_now'=>false, 'property_uid'=>$property_uid , 'months_to_show' => 24 , 'show_just_month' => false) );

				$anchor        = jomres_generate_tab_anchor( $tab_title );
				$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $tab_title, "TAB_CONTENT" => $MiniComponents->miniComponentData[ '06000' ][ 'srp_calendar' ]  , "TAB_ID" => 'tour_target_availability_calendar_srp');
				$this->retVals = $tab;
				}
			else
				{
				$MiniComponents->specificEvent( '06000', 'mrp_calendar', array('output_now'=>false, 'property_uid'=>$property_uid , 'months_to_show' => 24 , 'show_just_month' => false) );
				
				$anchor        = jomres_generate_tab_anchor( $tab_title );
				$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $tab_title, "TAB_CONTENT" => $MiniComponents->miniComponentData[ '06000' ][ 'mrp_calendar' ] , "TAB_ID" => 'tour_target_availability_calendar_mrp' );
				$this->retVals = $tab;
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
