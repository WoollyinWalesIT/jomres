<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000ajax_send_test_email
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
			
		if ( trim($_REQUEST['test_email_address']) != "" )
			{
			$siteConfig   = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );

			$siteConfig->set_setting ( "alternate_smtp_use_settings" , "1" ) ;
			
			$siteConfig->set_setting ( "default_from_address" , jomresGetParam( $_REQUEST, 'default_from_address', "" ) ) ;
			$siteConfig->set_setting ( "alternate_smtp_host" , jomresGetParam( $_REQUEST, 'alternate_smtp_host', "" ) ) ;
			$siteConfig->set_setting ( "alternate_smtp_port" , jomresGetParam( $_REQUEST, 'alternate_smtp_port', "" ) ) ;
			$siteConfig->set_setting ( "alternate_smtp_protocol" , jomresGetParam( $_REQUEST, 'alternate_smtp_protocol', "" ) ) ;
			$siteConfig->set_setting ( "alternate_smtp_username" , jomresGetParam( $_REQUEST, 'alternate_smtp_username', "" ) ) ;
			$siteConfig->set_setting ( "alternate_smtp_password" , jomresGetParam( $_REQUEST, 'alternate_smtp_password', "" ) ) ;

			$alternate_smtp_authentication				= jomresGetParam( $_REQUEST, 'alternate_smtp_authentication', "" );

			if ( $alternate_smtp_authentication == "true" )
				$siteConfig->set_setting ( "alternate_smtp_authentication" , "1" ) ;
			else
				$siteConfig->set_setting ( "alternate_smtp_authentication" , "0" ) ;
			
			ob_start();
			
			$success = jomresMailer( 
				$siteConfig->get_setting ( "default_from_address" ), 
				"TEST EMAIL",
				jomresGetParam( $_REQUEST, 'test_email_address', "" ),
				 jr_gettext( '_JOMRES_TEST_EMAIL_SUBJECT', '_JOMRES_TEST_EMAIL_SUBJECT', false ),
				 jr_gettext( '_JOMRES_TEST_EMAIL_CONTENT', '_JOMRES_TEST_EMAIL_CONTENT', false ),
				$mode = 1,
				array()
				);
			$contents = ob_get_contents();
			ob_end_clean();
			if($success)
				{
				$response_array['status'] = true;  
				}
			else 
				{
				$response_array['status'] = false ;
				$response_array['failure_message'] = $contents; 
				}
			}
		else
			{
			$response_array['status'] = false ;
			$response_array['failure_message'] = " The Email address to send the email to wasn't set."; 
			}
			
		header('Content-type: application/json');
		echo json_encode($response_array);
		
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}