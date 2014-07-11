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

class j16000rebuildregistry
	{
	function j16000rebuildregistry()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		jr_import( 'minicomponent_registry' );
		$registry = new minicomponent_registry( true );
		$registry->regenerate_registry();

		jr_import('jomres_javascript_cache');
		$jomres_javascript_cache = new jomres_javascript_cache();
		$jomres_javascript_cache->remove_all_temp_files();
			
		jr_import('jomres_css_cache');
		$jomres_css_cache = new jomres_css_cache();
		$jomres_css_cache->remove_all_temp_files();
	
		if ( !using_bootstrap() )
			{
			if ( $registry->error_detected ) echo jr_gettext( '_JOMRES_REGISTRYREBUILD_FAILURE', _JOMRES_REGISTRYREBUILD_FAILURE,false );
			else
			echo jr_gettext( '_JOMRES_REGISTRYREBUILD_SUCCESS', _JOMRES_REGISTRYREBUILD_SUCCESS,false );
			echo '<br />';
			echo jr_gettext( '_JOMRES_REGISTRYREBUILD_NOTES', _JOMRES_REGISTRYREBUILD_NOTES,false );
			}
		else
			{
			if ( $registry->error_detected ) echo '
				<div class="alert alert-block alert-error">
					<h4 class="alert-heading">' . jr_gettext( '_JOMRES_REGISTRYREBUILD_FAILURE', _JOMRES_REGISTRYREBUILD_FAILURE,false ) . '</h4>
					<p>' . jr_gettext( '_JOMRES_REGISTRYREBUILD_NOTES', _JOMRES_REGISTRYREBUILD_NOTES,false ) . '</p>
				</div>
				';
			else
			echo '
				<div class="alert alert-block alert-success">
					<h4 class="alert-heading">' . jr_gettext( '_JOMRES_REGISTRYREBUILD_SUCCESS', _JOMRES_REGISTRYREBUILD_SUCCESS,false ) . '</h4>
					<p>' . jr_gettext( '_JOMRES_REGISTRYREBUILD_NOTES', _JOMRES_REGISTRYREBUILD_NOTES,false ) . '</p>
				</div>
				';
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

