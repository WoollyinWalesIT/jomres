<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
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
class j06000contactowner {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06000contactowner($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$jomresConfig_secret = get_showtime('secret');
		$mrConfig=getPropertySpecificSettings();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$this->_remove_old_captcha_files();
		require_once(JOMRESPATH_BASE.'/libraries/hn_captcha/hn_captcha.class.php');

		$property_uid = intval( jomresGetParam( $_REQUEST, 'selectedProperty', 0 ) );
		if (isset($_POST['property_uid']) )
			$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
		if ($property_uid == 0 )
			return;

		$thisJRUser=jomres_getSingleton('jr_user');
		$all_properties_in_system =get_showtime('all_properties_in_system');
		$published_properties_in_system =get_showtime('published_properties_in_system');
		if (!in_array($property_uid,$all_properties_in_system) )
			{
			echo "Cannot message this property as it doesn't exist";
			return;
			}
		if (!$thisJRUser->userIsManager && !in_array($property_uid,$published_properties_in_system) )
			{
			echo "Cannot message an unpublished property";
			return;
			}
		
		$current_property_details =jomres_getSingleton('basic_property_details');
		$current_property_details->gather_data($property_uid);
		
		$this->QUERY_STRING = strlen(trim($_SERVER['QUERY_STRING'])) > 0 ? '?'.strip_tags($_SERVER['QUERY_STRING']) : '';
		$output=array();
		$output['FORMSTART']='<form name="regForm" action="'.JOMRES_SITEPAGE_URL_NOSEF.'&task=contactowner" method="POST">'."\n";
		// ConfigArray
		$captchaDebugging = false;

		$CAPTCHA_INIT = array(
			// string: absolute path (with trailing slash!) to a php-writeable tempfolder which is also accessible via HTTP!
			'tempfolder'		=> JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS,
			// string: absolute path (in filesystem, with trailing slash!) to folder which contain your TrueType-Fontfiles.
			'TTF_folder'		=> JOMRESPATH_BASE.JRDS.'libraries'.JRDS.'hn_captcha'.JRDS.'fonts'.JRDS,
			// mixed (array or string): basename(s) of TrueType-Fontfiles, OR the string 'AUTO'. AUTO scanns the TTF_folder for files ending with '.ttf' and include them in an Array.
			// Attention, the names have to be written casesensitive!
			//'TTF_RANGE'			=> 'NewRoman.ttf',
			//'TTF_RANGE'			=> 'AUTO',
			//'TTF_RANGE'			=> array('actionj.ttf','bboron.ttf','epilog.ttf','fresnel.ttf','lexo.ttf','tetanus.ttf','thisprty.ttf','tomnr.ttf'),
			'TTF_RANGE'		=> 'AUTO',
			'chars'				=> 5,	   // integer: number of chars to use for ID
			'minsize'			=> 20,	  // integer: minimal size of chars
			'maxsize'			=> 30,	  // integer: maximal size of chars
			'maxrotation'		=> 25,	  // integer: define the maximal angle for char-rotation, good results are between 0 and 30
			'use_only_md5'		=> FALSE,   // boolean: use chars from 0-9 and A-F, or 0-9 and A-Z
			'noise'				=> TRUE,	// boolean: TRUE = noisy chars | FALSE = grid
			'websafecolors'		=> FALSE,   // boolean
			'refreshlink'		=> TRUE,	// boolean
			'lang'				=> 'en',	// string:  ['en'|'de'|'fr'|'it'|'fi']
			'maxtry'			=> 9,	   // integer: [1-9]
			'badguys_url'		=> 'http://www.google.com',	 // string: URL
			'secretstring'		=> $jomresConfig_secret,
			'secretposition'	=> 9		// integer: [1-32]
			);
		$captcha = new hn_captcha($CAPTCHA_INIT, $captchaDebugging);

		$output['INPUTBOXERRORBORDER']				=$mrConfig['inputBoxErrorBorder'];
		$output['INPUTBOXERRORBACKGROUND']			=$mrConfig['inputBoxErrorBackground'];

		$output['SUBJECT'] = stripslashes(ucfirst(_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE.$current_property_details->property_name));
		$output['ENQUIRY'] = stripslashes(jomresGetParam( $_REQUEST, 'enquiry', jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY)));

		$output['GUEST_NAME'] = stripslashes(jomresGetParam( $_REQUEST, 'guest_name', '' ));
		$output['PROPERTY_UID'] = $property_uid;

		if (isset($_REQUEST['guest_email']) )
			$output['GUEST_EMAIL'] = stripslashes(jomresGetParam( $_REQUEST, 'guest_email', '' ));
		else if (isset($tmpBookingHandler->tmpguest['email']) )
			$output['GUEST_EMAIL'] = $tmpBookingHandler->tmpguest['email'];
			else
				$output['GUEST_EMAIL'] = "";

		$output['HEMAIL'] =jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);
		$output['HNAME'] =jr_gettext('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME',_JOMRES_FRONT_MR_EMAIL_TEXT_NAME);
		$output['HENQUIRY'] =jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY);

		$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2,false,false);
		$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2_BUTTON']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2,false,false);
		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		switch($captcha->validate_submit())
			{
			// was submitted and has valid keys
			case 1:
				$oktosend=true;
				$MiniComponents->triggerEvent('03500'); // Optional, eg for affiliate schemes offering pay-per-lead
				$subject = _JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT.$output['GUEST_NAME']._JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING.$current_property_details->property_name;
				$output['THANKS'] =jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS);
				$target_email = $current_property_details->property_email;
				if ($jrConfig['contact_owner_emails_to_alternative'] == "1")
					$target_email = $jrConfig['contact_owner_emails_to_alternative_email'] ;
					
				if(!jomresMailer( $output['GUEST_EMAIL'], $current_property_details->property_name, $target_email, $subject, $output['ENQUIRY'] ,$mode=1))
					error_logging('Failure in sending enquiry email to hotel. Target address: '.$target_email.' Subject'.$subject);

				if(!jomresMailer( $current_property_details->property_email, $current_property_details->property_name, $output['GUEST_EMAIL'], $subject, $output['ENQUIRY'] ,$mode=1))
					error_logging('Failure in sending enquiry email to guest. Target address: '.$output['GUEST_EMAIL'].' Subject'.$subject);

				$output['BACKTOPROPERTY']=jr_gettext('_JOMRES_BACKTOPROPERTYDETAILSLINK',_JOMRES_BACKTOPROPERTYDETAILSLINK);
				$output['PROPERTYUID']=$property_uid;

				$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
				break;

			// was submitted with no matching keys, but has not reached the maximum try's
			case 2:
				$oktosend=false;
				$output['CAPTCHA'] = $captcha->display_form();
				break;

			// was submitted, has bad keys and also reached the maximum try's
			case 3:
				$oktosend=false;
				if(!headers_sent() && isset($captcha->badguys_url)) header('location: '.$captcha->badguys_url);
				//echo "<p><br>Reached the maximum try's of ".$captcha->maxtry." without success!";
				//echo "<br><br><a href=\"".$_SERVER['PHP_SELF']."?download=yes&id=1234\">New DEMO</a></p>";
				break;

			// was not submitted, first entry
			default:
				$oktosend=false;
				$output['CAPTCHA'] = $captcha->display_form(true);
				break;
			}

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'" />';

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			if ($oktosend)
				$tmpl->readTemplatesFromInput( 'contact_owner_sent.html');
			else
				$tmpl->readTemplatesFromInput( 'contact_owner.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();

		}

	function touch_template_language()
		{
		$output=array();

		$output[]=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);


		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
		
	// We'll remove old capcha images if they're older than X
	function _remove_old_captcha_files()
		{
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$this->timeout = $jrConfig['lifetime'];
		// $this->timeout = 60; // For testing
		$d = @dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS);
		$docs = array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if(is_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS.$filename) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
					{
					$docs[] =$filename;
					}
				}
				
			$d->close();
			if (count($docs)>0)
				{
				foreach ($docs as $f)
					{
					if (substr($f,5,9) == '.jpg')
						{
						$last_modified = filemtime  ( JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."/".$f);
						$seconds_timediff = time() - $last_modified;
						//echo $seconds_timediff;
						if ($seconds_timediff>$this->timeout)
							unlink  (JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."/".$f);
						}
					}
				}
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
		return null;
		}
	}
	
	

?>