<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000search
	{
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			$this->shortcode_data = array (
				"task" => "search",
				"info" => "_JOMRES_SHORTCODES_06000SEARCH",
				"arguments" => array (
					array (
						"argument" => "country",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY",
						"arg_example" => "GB"
						),
					array (
						"argument" => "region",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION",
						"arg_example" => "1111"
						),
					array (
						"argument" => "town",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN",
						"arg_example" => "Torquay"
						),
					array (
						"argument" => "feature_uids",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS",
						"arg_example" => "[32,3,5]"
						),
					array (
						"argument" => "room_type",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE",
						"arg_example" => "2"
						),
					array (
						"argument" => "ptype",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE",
						"arg_example" => "1"
						),
					array (
						"argument" => "priceranges",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES",
						"arg_example" => "100-200"
						),
					array (
						"argument" => "guestnumber",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER",
						"arg_example" => "1"
						),
					array (
						"argument" => "stars",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS",
						"arg_example" => "4"
						),
					array (
						"argument" => "arrivalDate",
						"arg_info" => "_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE",
						"arg_example" => date("Y/m/d", strtotime(date("Y/m/d")."+1 day"))
						)
					)
				);
			return;
			}
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		$MiniComponents->triggerEvent( '00030' ); //Search mini-comp
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
