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

class j00035tabcontent_04_roomslist
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

		$rooms_list = $MiniComponents->specificEvent( '06000', 'show_property_rooms',array('output_now'=>false, 'property_uid'=>$property_uid));
		$rooms_list_title = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', _JOMRES_COM_MR_QUICKRES_STEP2_TITLE, false );

		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
			{
			if ( $mrConfig[ 'roomslistinpropertydetails' ] == "1" && $mrConfig[ 'singleRoomProperty' ] != "1" )
				{
				$anchor        = jomres_generate_tab_anchor( $rooms_list_title );
				$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $rooms_list_title, "TAB_CONTENT" => $rooms_list , "TAB_ID" => 'tour_target_rooms_list' );
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
