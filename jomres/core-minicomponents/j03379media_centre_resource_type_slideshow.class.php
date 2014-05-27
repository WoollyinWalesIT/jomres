<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j03379media_centre_resource_type_slideshow
	{
	function j03379media_centre_resource_type_slideshow( $componentArgs )
		{

		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		
		$this->ret_vals = array ( "resource_type" => "slideshow" , "resource_id_required" => false , "name" => jr_gettext( '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', _JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW, false ) );
		
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}

?>