<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j11010markers
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
		
		$this->ret_vals = array ( 
								"resource_type" => "markers" , 
								"resource_id_required" => false , 
								"name" => jr_gettext( '_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', '_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', false ),
								"upload_root_abs_path" => JOMRES_IMAGELOCATION_ABSPATH,
								"upload_root_rel_path" => JOMRES_IMAGELOCATION_RELPATH,
								"notes" => '' 
								);
		
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
