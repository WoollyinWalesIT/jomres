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

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
 * @package Jomres
#
 */
class j00009user_option_05_add_your_property
    {

    /**
    #
     * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    #
     */
    function j00009user_option_05_add_your_property( $componentArgs )
        {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
        if ( $MiniComponents->template_touch )
            {
            $this->template_touchable = true;

            return;
            }
        $thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
        if ( $thisJRUser->userIsManager ) // No point in putting the "add your property" link to the toolbar if the user's already a manager.
        return;
        $siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
        $jrConfig   = $siteConfig->get();
        if ( $jrConfig[ 'selfRegistrationAllowed' ] == "1" ) $this->cpanelButton = jomres_mainmenu_option( JOMRES_SITEPAGE_URL . "&task=registerProp_step1", '', jr_gettext( '_JOMRES_USER_LISTMYPROPERTY', _JOMRES_USER_LISTMYPROPERTY, false, false ), null, jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", _JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT, false, false ) );
        }

    function touch_template_language()
        {
        $output    = array ();
        $output[ ] = jr_gettext( '_JOMRES_USER_LISTMYPROPERTY', _JOMRES_USER_LISTMYPROPERTY );
        foreach ( $output as $o )
            {
            echo $o;
            echo "<br/>";
            }
        }

    // This must be included in every Event/Mini-component
    function getRetVals()
        {
        if ( isset( $this->cpanelButton ) ) return $this->cpanelButton;
        else
        return null;
        }
    }

?>