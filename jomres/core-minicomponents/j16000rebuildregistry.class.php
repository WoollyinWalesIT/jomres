<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
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

        if ( !using_bootstrap() )
            {
            if ( $registry->error_detected ) echo jr_gettext( '_JOMRES_REGISTRYREBUILD_FAILURE', _JOMRES_REGISTRYREBUILD_FAILURE );
            else
            echo jr_gettext( '_JOMRES_REGISTRYREBUILD_SUCCESS', _JOMRES_REGISTRYREBUILD_SUCCESS );
            echo '<br />';
            echo jr_gettext( '_JOMRES_REGISTRYREBUILD_NOTES', _JOMRES_REGISTRYREBUILD_NOTES );
            }
        else
            {
            if ( $registry->error_detected ) echo '
				<div class="alert alert-block alert-error">
					<h4 class="alert-heading">' . jr_gettext( '_JOMRES_REGISTRYREBUILD_FAILURE', _JOMRES_REGISTRYREBUILD_FAILURE ) . '</h4>
					<p>' . jr_gettext( '_JOMRES_REGISTRYREBUILD_NOTES', _JOMRES_REGISTRYREBUILD_NOTES ) . '</p>
				</div>
				';
            else
            echo '
				<div class="alert alert-block alert-success">
					<h4 class="alert-heading">' . jr_gettext( '_JOMRES_REGISTRYREBUILD_SUCCESS', _JOMRES_REGISTRYREBUILD_SUCCESS ) . '</h4>
					<p>' . jr_gettext( '_JOMRES_REGISTRYREBUILD_NOTES', _JOMRES_REGISTRYREBUILD_NOTES ) . '</p>
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

