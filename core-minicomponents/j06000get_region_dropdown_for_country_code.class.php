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

class j06000get_region_dropdown_for_country_code
	{
	function j06000get_region_dropdown_for_country_code()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		$countryCode = jomresGetParam( $_REQUEST, 'country', "" );
		$currentRegion = jomresGetParam( $_REQUEST, 'region', "" );
		$input_name = jomresGetParam( $_REQUEST, 'input_name', "" );
		
		$dropdown = setupRegions( $countryCode, $currentRegion , false , $input_name);
		echo $dropdown;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>