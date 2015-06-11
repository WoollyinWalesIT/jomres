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

class j06000show_property_room_features
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		if (isset($componentArgs['property_uid']))
			{
			$property_uid = (int)$componentArgs['property_uid'];
			$roomFeatureUidsArray         = explode( ",", $room_features_uid );
			}
		elseif ( isset ( $_REQUEST ['p_uid'] ))
			{
			$property_uid = (int)$_REQUEST ['p_uid'];
			}
		else return;
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($property_uid);
		
		$jomres_property_room_features = jomres_singleton_abstract::getInstance( 'jomres_property_room_features' );
		
		

		}



	function getRetVals()
		{
		return $this->retVals;
		}
	}
