<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000contactowner
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$use_recaptcha = false;
		if ( $jrConfig[ 'recaptcha_public_key' ] != "" && $jrConfig[ 'recaptcha_private_key' ] != "" ) 
			$use_recaptcha = true;

		$mrConfig          = getPropertySpecificSettings();
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );

		$version = "V2";
		
		if ( $use_recaptcha ) 
			{
			if ($version == "V1")
				require_once( JOMRESPATH_BASE . '/libraries/recaptcha/recaptchalib.php' );
			elseif ($version == "V2")
				{
				// We're not going to use the autoloader here, let's load this stuff manually
				require_once( JOMRESPATH_BASE . '/libraries/recaptcha/ReCaptcha.php' );
				require_once( JOMRESPATH_BASE . '/libraries/recaptcha/RequestMethod.php' );
				require_once( JOMRESPATH_BASE . '/libraries/recaptcha/RequestParameters.php' );
				require_once( JOMRESPATH_BASE . '/libraries/recaptcha/Response.php' );
				require_once( JOMRESPATH_BASE . '/libraries/recaptcha/RequestMethod/Post.php' );
				$recaptcha = new \ReCaptcha\ReCaptcha( $jrConfig[ 'recaptcha_private_key' ] );
				}
			}

		if (isset ( $_REQUEST['property_uid'] ) )
			{
			$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
			}
		elseif ( isset( $componentArgs[ 'property_uid' ] ) )
			{
			$property_uid = intval( $componentArgs[ 'property_uid' ] );
			}
		else
			{
			$property_uid = intval( jomresGetParam( $_REQUEST, 'selectedProperty', 0 ) );
			jomres_cmsspecific_setmetadata( "robots", "noindex,nofollow" );
			}

		if ( isset( $_POST[ 'property_uid' ] ) ) 
			$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );

		if ( $property_uid > 0)
			{
			if (!user_can_view_this_property($property_uid))
				return;
			else
				{
				if ( !isset( $componentArgs[ 'noshownow' ] ) )
					property_header($property_uid);
				}
			}

		$output                = array ();
		
		if ( $property_uid > 0)
			{
			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$current_property_details->gather_data( $property_uid );
		
			$target = $current_property_details->property_name;
			$output[ 'PAGETITLE' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL );
			}
		else
			{
			$target = $jrConfig['business_name'];
			$output[ 'PAGETITLE' ] = jr_gettext( '_JOMRES_CONTANT_US', _JOMRES_CONTANT_US );
			}
		
		$output[ 'SUBJECT' ]   = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE ) . " " . $target;
		$output[ 'ENQUIRY' ]   = jomresGetParam( $_REQUEST, 'enquiry', jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY, false ) );

		$output[ 'GUEST_NAME' ]   = jomresGetParam( $_REQUEST, 'guest_name', '' );
		$output[ 'PROPERTY_UID' ] = $property_uid;

		if ( isset( $_REQUEST[ 'guest_email' ] ) ) 
			$output[ 'GUEST_EMAIL' ] = jomresGetParam( $_REQUEST, 'guest_email', '' );
		else if ( isset( $tmpBookingHandler->tmpguest[ 'email' ] ) ) 
			$output[ 'GUEST_EMAIL' ] = $tmpBookingHandler->tmpguest[ 'email' ];
		else
			$output[ 'GUEST_EMAIL' ] = "";

		$output[ 'HEMAIL' ]   = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', _JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL );
		$output[ 'HNAME' ]    = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', _JOMRES_FRONT_MR_EMAIL_TEXT_NAME );
		$output[ 'HENQUIRY' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY );

		$output[ 'JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2' ]        = jr_gettext( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', _JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2, false, false );
		$output[ 'JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2_BUTTON' ] = jr_gettext( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', _JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2, false, false );
		$output[ 'JOMRES_SITEPAGE_URL' ]                             = JOMRES_SITEPAGE_URL;

		$output[ 'JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL' ] = jr_gettext( 'JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL, false, false );
		$output[ 'JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO' ]  = jr_gettext( 'JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO, false, false );
		$output[ 'JOMRES_RECAPTCHA_PLAY_AGAIN' ]          = jr_gettext( 'JOMRES_RECAPTCHA_PLAY_AGAIN', JOMRES_RECAPTCHA_PLAY_AGAIN, false, false );
		$output[ 'JOMRES_RECAPTCHA_CANT_HEAR_THIS' ]      = jr_gettext( 'JOMRES_RECAPTCHA_CANT_HEAR_THIS', JOMRES_RECAPTCHA_CANT_HEAR_THIS, false, false );
		$output[ 'JOMRES_RECAPTCHA_VISUAL_CHALLENGE' ]    = jr_gettext( 'JOMRES_RECAPTCHA_VISUAL_CHALLENGE', JOMRES_RECAPTCHA_VISUAL_CHALLENGE, false, false );
		$output[ 'JOMRES_RECAPTCHA_AUDIO_CHALLENGE' ]     = jr_gettext( 'JOMRES_RECAPTCHA_AUDIO_CHALLENGE', JOMRES_RECAPTCHA_AUDIO_CHALLENGE, false, false );
		$output[ 'JOMRES_RECAPTCHA_REFRESH_BTN' ]         = jr_gettext( 'JOMRES_RECAPTCHA_REFRESH_BTN', JOMRES_RECAPTCHA_REFRESH_BTN, false, false );
		$output[ 'JOMRES_RECAPTCHA_HELP_BTN' ]            = jr_gettext( 'JOMRES_RECAPTCHA_HELP_BTN', JOMRES_RECAPTCHA_HELP_BTN, false, false );
		$output[ 'JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN' ] = jr_gettext( 'JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN, false, false );

		if ( $use_recaptcha )
			{
			if ($version == "V1")
				$challenge = trim($_POST[ "recaptcha_challenge_field" ]);
			elseif ($version == "V2")
				$challenge = trim($_POST[ "g-recaptcha-response" ]);

			if ( $challenge != "" )
				{
				if ($version == "V1")
					$resp = recaptcha_check_answer( $jrConfig[ 'recaptcha_private_key' ], $_SERVER[ "REMOTE_ADDR" ], jomresGetParam( $_POST, 'recaptcha_challenge_field', '' ), jomresGetParam( $_POST, 'recaptcha_response_field', '' ) );
				elseif ($version == "V2")
					{
					$resp = $recaptcha->verify( $_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
					$resp->is_valid = $resp->isSuccess();
					}
				}
			else
				{
				$resp           = new stdClass;
				$resp->is_valid = false;
				}
			}
		else
			{
			$resp = new stdClass;
			if ( $output[ 'SUBJECT' ] != "" && $output[ 'ENQUIRY' ] != "" && $output[ 'GUEST_NAME' ] != "" )
				$resp->is_valid = true;
			else
				$resp->is_valid = false;
			}

		$oktosend = false;

		if ( $resp->is_valid )
			{
			$oktosend = true;
			$MiniComponents->triggerEvent( '03500' ); // Optional, eg for affiliate schemes offering pay-per-lead
			$subject            = jr_gettext( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT", _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT, false ) . " " . $output[ 'GUEST_NAME' ] . " " . jr_gettext( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING", _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING, false ) . " " . $current_property_details->property_name;
			$output[ 'THANKS' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS );
			$output[ 'ENQUIRY' ] .= '<br />Email: ' . $output[ 'GUEST_EMAIL' ];
			
			if ( $property_uid > 0 )
				$target_email = $current_property_details->property_email;
			else
				$target_email = $jrConfig['business_email'];

			if ((int)$jrConfig['override_property_contact_details'] == 1)
				{
				if ($jrConfig['override_property_contact_email'] != '')
					$target_email = $jrConfig['override_property_contact_email'];
				}

			if ( !jomresMailer( $output[ 'GUEST_EMAIL' ], $current_property_details->property_name, $target_email, $subject, $output[ 'ENQUIRY' ], $mode = 1 ) ) 
				error_logging( 'Failure in sending enquiry email to hotel. Target address: ' . $target_email . ' Subject' . $subject );

			if ( !jomresMailer( $target_email, $current_property_details->property_name, $output[ 'GUEST_EMAIL' ], $subject, $output[ 'ENQUIRY' ], $mode = 1 ) ) 
				error_logging( 'Failure in sending enquiry email to guest. Target address: ' . $output[ 'GUEST_EMAIL' ] . ' Subject' . $subject );

			
			$output[ 'PROPERTYUID' ]    = $property_uid;
			
			$output[ 'TASK' ]= "viewproperty&property_uid=".$property_uid;
			$output[ 'BACKTOPROPERTY' ] = jr_gettext( '_JOMRES_BACKTOPROPERTYDETAILSLINK', _JOMRES_BACKTOPROPERTYDETAILSLINK );
			
			if ($property_uid == 0)
				{
				$output[ 'TASK' ]= "search";
				$output[ 'BACKTOPROPERTY' ] = jr_gettext( '_JOMRES_SEARCH_BUTTON', _JOMRES_SEARCH_BUTTON );
				}
			
			$output[ 'JOMRES_SITEPAGE_URL' ] = JOMRES_SITEPAGE_URL;
			}
		else
			{
			$use_ssl = false;
			if (isset($_SERVER['HTTPS']) )
				$use_ssl = true;
			
			if ( $use_recaptcha ) 
				{
				if ($version == "V1")
					$output[ 'CAPTCHA' ] = recaptcha_get_html( $jrConfig[ 'recaptcha_public_key' ] , null , $use_ssl );
				elseif ($version == "V2")
					{
					$output[ 'CAPTCHA' ] = '
							<div class="g-recaptcha" data-sitekey="'.$jrConfig[ 'recaptcha_public_key' ].'"></div>
							<script type="text/javascript"
								src="https://www.google.com/recaptcha/api.js?hl='.get_showtime('lang_shortcode').'">
							</script>
						';
					}
				}
			}

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		if ( isset( $componentArgs[ 'custom_path_to_template' ] ) )
			{
			if ( file_exists( $componentArgs[ 'custom_path_to_template' ] . 'contact_owner.html' ) ) 
				$tmpl->setRoot( $componentArgs[ 'custom_path_to_template' ] );
			else
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			}
		else
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		if ( $oktosend ) 
			$tmpl->readTemplatesFromInput( 'contact_owner_sent.html' );
		else
			{
			$tmpl->readTemplatesFromInput( 'contact_owner.html' );
			}
		$tmpl->addRows( 'pageoutput', $pageoutput );

		if ( isset( $componentArgs[ 'noshownow' ] ) ) 
			$this->ret_vals = $tmpl->getParsedTemplate();
		else
			$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', _JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', _JOMRES_FRONT_MR_EMAIL_TEXT_NAME );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY );
		$output[ ] = jr_gettext( '_JOMRES_BACKTOPROPERTYDETAILSLINK', _JOMRES_BACKTOPROPERTYDETAILSLINK );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}


?>