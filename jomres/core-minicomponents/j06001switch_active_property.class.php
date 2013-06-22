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

class j06001switch_active_property
    {
    function j06001switch_active_property()
        {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
        if ( $MiniComponents->template_touch )
            {
            $this->template_touchable = false;

            return;
            }
        $thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
        $output     = array ();
        $pageoutput = array ();
        $rows       = array ();

        $nofollow = "&nofollowtmpl";
        if ( isset( $_REQUEST[ 'tmpl' ] ) ) $nofollow = '';

        $output[ 'NOFOLLOW' ]                                = JOMRES_SITEPAGE_URL_AJAX . $nofollow;
        $output[ '_JOMRES_PORTALUI_CLICKINITIAL' ]           = jr_gettext( "_JOMRES_ROBBED_PORTALUI_CLICKINITIAL", _JOMRES_ROBBED_PORTALUI_CLICKINITIAL, false );
        $output[ '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY' ] = jr_gettext( "_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY", _JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY, false );
        $output[ '_JOMRES_FOUNDPROPERTIES' ]                 = jr_gettext( "_JOMRES_FOUNDPROPERTIES", _JOMRES_FOUNDPROPERTIES, false );

        $initials = array ();
        foreach ( $thisJRUser->authorisedPropertyDetails as $pn )
            {
            if ( !array_key_exists( strtoupper( jr_substr( $pn[ 'property_name' ], 0, 1 ) ), $initials ) ) $initials[ strtoupper( jr_substr( $pn[ 'property_name' ], 0, 1 ) ) ] = 1;
            else
            $initials[ strtoupper( jr_substr( $pn[ 'property_name' ], 0, 1 ) ) ]++;
            }

        foreach ( $initials as $key => $val )
            {
            $r              = array ();
            $r[ 'INITIAL' ] = $key;
            $r[ 'COUNT' ]   = $val;
            $rows[ ]        = $r;
            }

        $pageoutput[ ] = $output;
        $tmpl          = new patTemplate();
        $tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
        $tmpl->readTemplatesFromInput( 'switch_property.html' );
        $tmpl->addRows( 'pageoutput', $pageoutput );
        $tmpl->addRows( 'rows', $rows );
        echo $tmpl->getParsedTemplate();
        }


    // This must be included in every Event/Mini-component
    function getRetVals()
        {
        return null;
        }
    }