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

class j07110media_centre_upload_context_features_images
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
		$this->ret_vals = array();
		// We will check to see if this user can upload feature images. If we're not in the administrator area, this script shouldn't be being run
		
		if (this_cms_is_joomla()) // Can't be specific about the cms area when in WP because WP's sessions are the same, for both frontend and backend.
			{
			if (!jomres_cmsspecific_areweinadminarea())
				{
				return null;
				}
			}
		
		
		$upload_context = jomresGetParam( $_REQUEST, 'upload_context', 'features_images' );
		
		$arr = array();
		$arr [ 'resource_type_gathering_trigger'] = '11010';
		$arr [ 'resource_id_gathering_trigger']   = '11020';
		$arr [ 'post_upload_processing_trigger']  = '11030';
		$arr [ 'get_existing_images_trigger']     = '11040';
		$arr [ 'allowed_file_types']              = '(jpe?g|png)';
		$arr [ 'upload_root_abs_path']            = JOMRES_IMAGELOCATION_ABSPATH ;
		$arr [ 'upload_root_rel_path']            = JOMRES_IMAGELOCATION_RELPATH ;
		$arr [ 'resource_subdirectories_used']    = false ;
		$arr [ 'url_context']                     = '&upload_context='.$upload_context ;
		$arr [ 'context']                         = $upload_context ;
		$arr [ 'upload_context_title']            = jr_gettext( '_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES', '_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES' );
		
		
		$this->ret_vals [$upload_context]  = $arr;
		
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}

?>