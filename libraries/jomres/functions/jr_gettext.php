<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

function jr_define( $constant, $string )
	{
	$jomres_language_definitions = jomres_singleton_abstract::getInstance( 'jomres_language_definitions' );
	$jomres_language_definitions->set_language( get_showtime( 'lang' ) );
	$jomres_language_definitions->set_property_type( get_showtime( 'property_type' ) );
	$jomres_language_definitions->define( $constant, $string );
	}

function jr_get_defined( $constant, $default = '' )
	{
	if ( !defined( $constant ) )
		{
		$jomres_language_definitions = jomres_singleton_abstract::getInstance( 'jomres_language_definitions' );
		$jomres_language_definitions->set_language( get_showtime( 'lang' ) );
		$jomres_language_definitions->set_property_type( get_showtime( 'property_type' ) );
		$result = $jomres_language_definitions->get_defined( $constant );
		
		if ( !$result && $default != '' ) 
			$result = $default;

		return $result;
		}
	else
		return constant($constant);
	}

function jr_gettext( $theConstant, $theValue, $okToEdit = true, $isLink = false )
	{
	if (!jomres_cmsspecific_areweinadminarea())
		$property_uid = (int) get_showtime( 'property_uid' );
	else
		$property_uid = 0;

	$customTextObj   = jomres_singleton_abstract::getInstance( 'custom_text' );
	$customTextArray = $customTextObj->get_custom_text();

	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	if ( get_showtime( "jr_user_ready" ) ) // If jr_user isn't ready yet, calling jomres_singleton_abstract::getInstance('jr_user') will cause php to stop due to recursion, so we'll check that jr_user's been set up before we do anything else
		{
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

		if ( !isset( $tmpBookingHandler->user_settings[ 'editing_on' ] ) ) 
			$tmpBookingHandler->user_settings[ 'editing_on' ] = false;

		if ( !$thisJRUser->userIsManager ) 
			$tmpBookingHandler->user_settings[ 'editing_on' ] = false;

		if ( $thisJRUser->userIsManager && $thisJRUser->accesslevel < 2 ) 
			$tmpBookingHandler->user_settings[ 'editing_on' ] = false;

		$editing = $tmpBookingHandler->user_settings[ 'editing_on' ];
		}
	else
		$tmpBookingHandler->user_settings[ 'editing_on' ] = false;
	
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	
	if ( isset( $thisJRUser->accesslevel ) ) 
		$accessLevel = $thisJRUser->accesslevel;
	else
		$accessLevel = 0;

	$br = "";
	if ( get_showtime( 'task' ) == "editCustomTextAll" ) 
		$br = "<br />";
	
	if ( count( $customTextArray ) > 0 )
		{
		if ( array_key_exists( $theConstant, $customTextArray ) )
			{
			$theText = stripslashes( $customTextArray[ $theConstant ] );
			}
		else
			{
			$theText = jr_get_defined( $theConstant, $theValue );
			}
		}
	else
		$theText = jr_get_defined( $theConstant, $theValue );

	if ( isset($thisJRUser->userIsManager) && $thisJRUser->userIsManager )
		{
		if ( isset($_REQUEST[ 'task' ]) && jomres_cmsspecific_areweinadminarea())
			{
			if ( ( $_REQUEST[ 'task' ] == "touch_templates" || $_REQUEST[ 'task' ] == "translate_locales" || $_REQUEST[ 'task' ] == "translate_lang_file_strings" ) && $thisJRUser->userIsManager )
				{
				$property_uid                                  = 0;
				$jrConfig[ 'editinplace' ]                     = 1;
				$jrConfig[ 'editingModeAffectsAllProperties' ] = "1";
				$editing                                       = true;
				}
			}
		
		if ( $jrConfig[ 'allowHTMLeditor' ] != "1" ) 
			$theText = jomres_remove_HTML( $theText );

		$theText = jomres_decode( $theText );

		if ( $thisJRUser->userIsManager && ( $editing || ( $jrConfig[ 'editingModeAffectsAllProperties' ] == "1" && $thisJRUser->superPropertyManager == true ) ) && $okToEdit && ( $accessLevel == 2 ) )
			{
			if ( strlen( trim( $theText ) ) == 0 || strtolower( trim( $theText ) ) == "<span></span>" || strtolower( trim( $theText ) ) == "<span> </span>" || strtolower( trim( $theText ) ) == "<span>  </span>" ) 
				$theText = "";
			
			$indexphp = "index.php";
			$title    = ' title="' . jr_get_defined( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Edit item' ) . '" ';

			if ( $isLink )
				{
				//do nothing
				}
			else
				{
				if (!isset( $_REQUEST[ 'no_html' ]))
					 $_REQUEST[ 'no_html' ] = 0;
				 
				if ( $jrConfig[ 'editinplace' ] == 1 && $_REQUEST[ 'no_html' ] != '1' )
					{
					if ( jomres_cmsspecific_areweinadminarea() ) 
						$url = JOMRES_SITEPAGE_URL_ADMIN_AJAX . '&task=editinplace&lang=' . get_showtime( "lang" );
					else
						$url = JOMRES_SITEPAGE_URL_AJAX . '&task=editinplace';

					$theText = '<a href="#" id="' . $theConstant . '" data-type="text" data-pk="' . $theConstant . '" data-url="' . $url . '" data-original-title="' . htmlspecialchars( $theText ) . '">' . htmlspecialchars( $theText ) . '</a>
					<script>jQuery(document).ready(function () {jomresJquery(\'#' . $theConstant . '\').editable();});</script>';
					}
				else
					{
					//do nothing
					}
				}
			}
		}

	return $theText;
	}
