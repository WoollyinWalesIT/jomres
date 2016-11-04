<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j03382slideshow
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if (!$thisJRUser->userIsManager)
			{
			return;
			}
		
		/* 
		For post-image upload processing. gifbuilder has been removed, however we'll leave this in place for now to give you an idea of what it can be used for.
		
		
		$defaultProperty = getDefaultProperty();
		if (is_dir(JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . JRDS . 'gif' . JRDS))
			{
			emptyDir( JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . JRDS . 'gif' . JRDS );
			rmdir ( JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . JRDS . 'gif' . JRDS );
			}
		$result = gif_builder( $componentArgs["property_id"] ); */
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>