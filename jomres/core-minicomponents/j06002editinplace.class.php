<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j06002editinplace
	{
	function j06002editinplace()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !$thisJRUser->userIsManager ) return;
		$siteConfig   = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig     = $siteConfig->get();
		$property_uid = (int) getDefaultProperty();
		if ( $jrConfig[ 'allowHTMLeditor' ] == "1" )
			$customText = jomresGetParam( $_POST, 'value', "", _MOS_ALLOWHTML );
		else
			$customText = jomresGetParam( $_POST, 'value', '', 'string' );

		$theConstant = filter_var( $_POST[ 'pk' ], FILTER_SANITIZE_SPECIAL_CHARS );

		$result = updateCustomText( $theConstant, $customText, true, $property_uid );
		//$result = false;
		if ( $result )
			{
			header( "Status: 200" );
			echo jomres_decode( $customText );
			}
		else
			{
			header( "Status: 500" );
			echo "Something burped";
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>