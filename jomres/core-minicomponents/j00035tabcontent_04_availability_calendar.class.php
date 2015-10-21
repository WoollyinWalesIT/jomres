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
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig     = getPropertySpecificSettings( $property_uid );
		
		return; //tab not used. remove this if you want to use this tab again

		// j00017 SRP avl cal
		// j00018 MRP avl cal
		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
			{
			if ( $mrConfig[ 'showOnlyAvailabilityCalendar' ] )
				{
				if ( $mrConfig[ 'singleRoomProperty' ] )
					{
					echo $MiniComponents->miniComponentData[ '00017' ][ 'SRPavailabilitycalendar' ];
					}
				else
					{
					echo $MiniComponents->miniComponentData[ '00018' ][ 'MRPavailabilitycalendar' ];
					}

				return;
				}
			else
				{
				$tab_title = jr_gettext( '_JOMRES_FRONT_AVAILABILITY', _JOMRES_FRONT_AVAILABILITY, false);
				
				if ( ( $mrConfig[ 'showAvailabilityCalendar' ] && $mrConfig[ 'singleRoomProperty' ] ) )
					{
					$MiniComponents->specificEvent( '00017', 'SRPavailabilitycalendar', $componentArgs );
					
					$anchor        = jomres_generate_tab_anchor( $tab_title );
					$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $tab_title, "TAB_CONTENT" => $MiniComponents->miniComponentData[ '00017' ][ 'SRPavailabilitycalendar' ]  , "TAB_ID" => 'tour_target_availability_calendar_srp');
					$this->retVals = $tab;
					}
				elseif ( $mrConfig[ 'showAvailabilityCalendar' ] )
					{
					$MiniComponents->specificEvent( '00018', 'MRPavailabilitycalendar', $componentArgs );
					
					$anchor        = jomres_generate_tab_anchor( $tab_title );
					$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $tab_title, "TAB_CONTENT" => $MiniComponents->miniComponentData[ '00018' ][ 'MRPavailabilitycalendar' ] , "TAB_ID" => 'tour_target_availability_calendar_mrp' );
					$this->retVals = $tab;
					}
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
