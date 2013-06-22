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


class custom_text
    {
    private static $configInstance;
    private static $internal_debugging;

    public function __construct()
        {
        self::$internal_debugging = false;
        $this->lang               = get_showtime( 'lang' );
        $this->xcustom_text();
        $this->get_custom_text_for_all_properties();
        }

    public function reset_current_lang( $lang )
        {
        $this->lang = $lang;
        $this->xcustom_text();
        }

    public static function getInstance()
        {
        if ( !self::$configInstance )
            {
            self::$configInstance = new custom_text();
            }

        return self::$configInstance;
        }

    public function __clone()
        {
        trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
        }

    function xcustom_text()
        {
        $this->global_custom_text        = array ();
        $this->property_uids_custom_text = array ();
        if ( $this->lang != '' ) $clause = "AND language = '" . $this->lang . "'";
        $query          = "SELECT constant,customtext,language FROM #__jomres_custom_text WHERE property_uid = 0 $clause ";
        $customTextList = doSelectSql( $query );
        if ( count( $customTextList ) )
            {
            $customTextArray = array ();
            foreach ( $customTextList as $text )
                {
                $theConstant                              = str_replace( "sc<x>ript", "script", $text->constant );
                $this->global_custom_text[ $theConstant ] = stripslashes( $text->customtext );
                }
            }
        }

    function get_custom_text_for_all_properties()
        {
        if ( count( $this->all_properties_custom_text ) == 0 )
            {
            if ( $this->lang != '' ) $clause = "WHERE language = '" . $this->lang . "'";
            $this->all_properties_custom_text = array ();
            $query                            = "SELECT constant,customtext,language,property_uid FROM #__jomres_custom_text $clause ";
            $customTextList                   = doSelectSql( $query );

            if ( count( $customTextList ) )
                {
                $customTextArray = array ();

                foreach ( $customTextList as $text )
                    {
                    $theConstant                                                             = str_replace( "sc<x>ript", "script", $text->constant );
                    $this->all_properties_custom_text[ $text->property_uid ][ $theConstant ] = stripslashes( $text->customtext );
                    }
                }
            }
        }

    function get_custom_text_for_property( $property_uid )
        {
        if ( $property_uid > 0 ) $this->property_uid = $property_uid;

        if ( !isset( $this->global_custom_text ) ) // Need to set up some dummy data here, otherwise the array merge later will trigger an error (long story)
            {
            $this->global_custom_text[ 'DUMMY_DATA' ] = 'DUMMY_DATA';
            }

        if ( isset( $this->global_custom_text ) )
            {
            $current_custom_text = $this->global_custom_text;

            if ( (int) $this->property_uid > 0 && isset( $this->global_custom_text ) && isset( $this->all_properties_custom_text[ $this->property_uid ] ) ) $current_custom_text = array_merge( $this->global_custom_text, $this->all_properties_custom_text[ $this->property_uid ] );
            elseif ( isset( $this->all_properties_custom_text[ $this->property_uid ] ) ) $current_custom_text = $this->all_properties_custom_text[ $this->property_uid ];

            return $current_custom_text;
            }
        }


    function get_custom_text()
        {
        $this->property_uid = get_showtime( 'property_uid' );
        $result             = $this->get_custom_text_for_property( $this->property_uid );

        return $result;
        }
    }

?>