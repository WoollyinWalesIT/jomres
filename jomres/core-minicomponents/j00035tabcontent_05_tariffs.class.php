<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00035tabcontent_05_tariffs
	{
	function j00035tabcontent_05_tariffs( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig     = getPropertySpecificSettings( $property_uid );

		$output = $componentArgs[ 'currrent_output' ];

		// j01020 tariffs (either the verbose or the compact view, depending on General Config)
		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
			{
			if ( $mrConfig[ 'showTariffsInline' ] == "1" )
				{
				$anchor        = jomres_generate_tab_anchor( $output[ 'TITLE_TARIFF' ] );
				$tab           = array ( "TAB_ANCHOR" => $anchor, "TAB_TITLE" => $output[ 'TITLE_TARIFF' ], "TAB_CONTENT" => $MiniComponents->miniComponentData[ '01020' ][ 'showtariffs' ] );
				$this->retVals = $tab;
				}
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
		return $this->retVals;
		}

	}

?>