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

class j03383properties
	{
	function j03383properties( $componentArgs )
		{

		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		$defaultProperty = getDefaultProperty();
		$resource_type   = jomresGetParam( $_REQUEST, 'resource_type', '' );
		$resource_id     = jomresGetParam( $_REQUEST, 'resource_id', 0 );
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		$jomres_media_centre_images->get_images($defaultProperty);
		$this->ret_vals = $jomres_media_centre_images->images [$resource_type] [$resource_id];
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}

?>