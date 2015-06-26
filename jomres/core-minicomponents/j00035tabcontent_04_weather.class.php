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

class j00035tabcontent_04_weather
	{
	function __construct( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		$output = $componentArgs[ 'currrent_output' ];
		$componentArgs[ 'output_now' ] = false ;

		$anchor        = jomres_generate_tab_anchor( $output[ 'TITLE_WEATHER' ] );
		$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $output[ 'TITLE_WEATHER' ], "TAB_CONTENT" => $MiniComponents->specificEvent( '06000', 'show_property_weather',$componentArgs) , "TAB_ID" => 'current_weather' );
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