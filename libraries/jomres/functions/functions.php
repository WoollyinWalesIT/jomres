<?php
	/**
	 *
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.5.4
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################


use Joomla\CMS\Helper\ModuleHelper;

	/*
	 * This allows us to call a module in a Jomres template file using the pattern {module id=N} where N is the module id, and return a rendered Joomla module
	 *
	 */

	function jomres_parse_modules($contents)
	{
		if (!this_cms_is_joomla()) {
			return;
		}

		$regex = '/{module\s(.*?)}/i';

		preg_match_all($regex, $contents, $matches, PREG_SET_ORDER);

		// No matches, skip this
		if ($matches)
		{
			$app = JFactory::getApplication();
			$document = $app->getDocument();
			foreach ($matches as $match)
			{
				$matcheslist = explode(',', $match[1]);
				$replace_pattern = "{module ".$match[1]."}";
				$bang = explode( "=" , $matcheslist[0]) ;
				if ($bang[0] == 'id') {
					$renderer = $document->loadRenderer('module');
					$mod  = ModuleHelper::getModuleById( $bang[1] );
					$module_contents = $renderer->render($mod, [] );
					$contents = str_replace($replace_pattern , $module_contents, $contents );
				}
			}
		}
		return $contents;
	}

/*
 * Return the path to the template override directory
 *
 *
 */

	function get_override_directory()
	{
		if (this_cms_is_joomla()) {
			$app = JFactory::getApplication();
			$joomla_templateName = $app->getTemplate('template')->template;
			if ( jomres_cmsspecific_areweinadminarea() ) {
				$path_to_template = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ADMINISTRATORDIRECTORY . JRDS . "templates" .JRDS. $joomla_templateName ; // I don't think I've ever used this, don't know if it works
			}
			else {
				$path_to_template = JOMRESCONFIG_ABSOLUTE_PATH . "templates" .JRDS. $joomla_templateName ;
			}
			$override_path = $path_to_template .JRDS . 'html' . JRDS . 'com_jomres';
		} else {
			$path_to_template =  get_theme_file_path();
			$override_path = $path_to_template . JRDS . 'html' . JRDS . 'com_jomres';
		}

		return $override_path;
	}

	 /*
	 *
	 * The goal here is to provide a function that will take a shortcode and produce output. It's effectively the same as the do_shortcode function in WP so that I can include Jomres shortcodes in Joomla template files. There are other ways it can be done, but by allowing shortcodes exactly as they're entered in content/shortcode documentation we can save the designer/integrator from needing to learn another syntax. It also means I can modify the jomres shortcodes plugin to use this function, at a later time, so that we don't have duplication of effort
	 *
	 */

	function run_jomres_shortcode( $shortcode_string = '' )
	{
		if ( $shortcode_string == '' ) {
			return '';
		}

		$regex = '/{jomres\s*.*?}/i';

		// find all instances of mambot and put in $matches
		preg_match_all( $regex, $shortcode_string, $matches );

		if (count($matches)>0)
		{
			foreach ($matches[0] as $m)
			{
				$old_REQUEST = $_REQUEST;
				$old_GET = $_GET;

				ob_start();

				$match = str_replace(array("{","}"),"",$m);

				$match = str_replace("&amp;","&",$match);
				$bang = explode (" ",$match);

				$our_task = $bang[1];

				$arguments = '';
				if (isset($bang[2]))
					$arguments = $bang[2];

				if ($arguments!='')
				{
					$args_array = explode("&",$arguments);
					foreach ($args_array as $arg)
					{
						$vals = explode ("=",$arg);
						if(array_key_exists(1,$vals))
						{
							$vals[1] = str_replace("+","-",$vals[1]);
							$_REQUEST[$vals[0]]=$vals[1];
							$_GET[$vals[0]]=$vals[1];
						}
					}
				}

				if (!defined('_JOMRES_INITCHECK'))
					define('_JOMRES_INITCHECK', 1 );

				if (!defined('JOMRES_ROOT_DIRECTORY'))
				{
					if (file_exists(JPATH_ROOT.'jomres_root.php'))
						require_once (JPATH_ROOT.'jomres_root.php');
					else
						define ( 'JOMRES_ROOT_DIRECTORY' , "jomres" ) ;
				}

				if (file_exists(JPATH_ROOT. DIRECTORY_SEPARATOR .JOMRES_ROOT_DIRECTORY. DIRECTORY_SEPARATOR .'core-plugins'. DIRECTORY_SEPARATOR .'alternative_init'. DIRECTORY_SEPARATOR .'alt_init.php'))
				{
					require_once(JPATH_ROOT. DIRECTORY_SEPARATOR .JOMRES_ROOT_DIRECTORY. DIRECTORY_SEPARATOR .'core-plugins'. DIRECTORY_SEPARATOR .'alternative_init'. DIRECTORY_SEPARATOR .'alt_init.php');
				}
				else {
					return;
				}

				$MiniComponents = jomres_getSingleton('mcHandler');
				set_showtime('task',$our_task);

				$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

				if ($MiniComponents->eventSpecificlyExistsCheck('06000', get_showtime('task'))) {
					$MiniComponents->specificEvent('06000', get_showtime('task'));
				} elseif ($MiniComponents->eventSpecificlyExistsCheck('06001', get_showtime('task')) && $thisJRUser->userIsManager) { // Receptionist and manager tasks
					if (get_showtime('task') == 'cpanel') {
						$MiniComponents->specificEvent('06001', get_showtime('task'));
					} else {
						$MiniComponents->specificEvent('06001', get_showtime('task'));
					}
				} elseif ($MiniComponents->eventSpecificlyExistsCheck('06002', get_showtime('task')) && $thisJRUser->userIsManager && $thisJRUser->accesslevel >= 70) { // Manager only tasks (higher than receptionist)
					$MiniComponents->specificEvent('06002', get_showtime('task'));
				} elseif ($MiniComponents->eventSpecificlyExistsCheck('06005', get_showtime('task')) && $thisJRUser->userIsRegistered) { // Registered only user tasks
					$MiniComponents->specificEvent('06005', get_showtime('task'));
				} else {
					return;
				}

				$contents = ob_get_contents();

				$text = str_replace($m,$contents, $shortcode_string);
				unset($contents);

				ob_end_clean();

				$_REQUEST = $old_REQUEST;
				$_GET = $old_GET;

				return $text;
			}
		}
	}


	/*
     *
     * Pass the property uid and room type id, we'll hand back an array that can be used to output prices of a specific room.
     *
     * Because there can be more than one tariff for a property we will use index 0 of the queries results. This means that the resultant price _might not_ be perfectly right, but it's good enough for our purposes.
     *
     */
	function get_room_price_by_room_type_id( $room_type_id = 0 , $property_uid = 0 ) {

		if ( $room_type_id == 0) {
			throw new Exception('Room type id not set');
		}

		if ( $property_uid == 0 ) {
			throw new Exception('Property uid not set');
		}

		$output = array();

		$output[ 'PRICE_PRE_TEXT' ]  = '';
		$output[ 'PRICE_PRICE' ]	 = '';
		$output[ 'PRICE_POST_TEXT' ] = '';

		$searchDate = date('Y/m/d');
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		if (isset($_REQUEST[ 'arrivalDate' ]) && $_REQUEST[ 'arrivalDate' ] != '') {
			$arrivalDate = jomresGetParam($_REQUEST, 'arrivalDate', '');
			if (isset($_REQUEST[ 'pdetails_cal' ])) {
				$arrivalDate = JSCalmakeInputDates($arrivalDate);
			}
			$searchDate = JSCalConvertInputDates($arrivalDate);
		} elseif (isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) && trim($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ]) != '') {
			$searchDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ];
		}

		$query = 'SELECT property_uid, roomrateperday FROM #__jomres_rates WHERE property_uid = '.(int) $property_uid." AND DATE_FORMAT('".$searchDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d') AND roomrateperday > '0' AND roomclass_uid = ".$room_type_id."";
		$tariffList = doSelectSql($query);
		if (!empty($tariffList)) {
			// We just need the pre and post price output strings
			$price_output				= get_property_price_for_display_in_lists( $property_uid );

			$pricesFromArray = [];
			foreach ($tariffList as $t) {
				if (!isset($pricesFromArray[ $t->property_uid ])) {
					$pricesFromArray[ ] = $t->roomrateperday;
				} elseif (isset($pricesFromArray[ $t->property_uid ]) && $pricesFromArray[ $t->property_uid ] > $t->roomrateperday) {
					$pricesFromArray[  ] = $t->roomrateperday;
				}
			}

			$output[ 'PRICE_PRE_TEXT' ]  = $price_output[ 'PRE_TEXT' ];
			$output[ 'PRICE_PRICE' ]	 = output_price($pricesFromArray[0]);
			$output[ 'PRICE_POST_TEXT' ] = $price_output[ 'POST_TEXT' ];
		}
		return $output;
	}


	function output_ribbon_styling()
	{
		if ( jomres_bootstrap_version() == 5 && !defined('RIBBON_STYLING_DONE')) {
			define('RIBBON_STYLING_DONE',1);
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('ribbon_styling.html');
			echo $tmpl->getParsedTemplate();
		}
	}


	/**
	 *
	 * A quick function for outputting BS5 badges. If the file doesn't exist we'll just return the text
	 *
	 */

	function jomres_badge($text = '' , $badge_style = 'secondary')
	{
		$badge_file = JOMRES_TEMPLATEPATH_FRONTEND.JRDS.'badge_'.$badge_style.'.html';
		if (!file_exists( $badge_file)) {
			return $text;
		}

		$pageoutput = array(array('TEXT' => $text ));
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('badge_'.$badge_style.'.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		return $tmpl->getParsedTemplate();

	}

	/**
	 *
	 * Restores an encoded email address that might have the + symbol in
	 *
	 *
	 */

	function restore_task_specific_email_address($address) {
		$cleaned_address = str_replace ("&#38;#38;#43;" , "+" ,$address);
		$cleaned_address2 = str_replace ("&#38;#43;" , "+" , $cleaned_address);
		return str_replace ("&#43;" , "+" , $cleaned_address2);
	}

	/**
	 *
	 * Return an array of social media platforms with relevant data
	 *
	 */
	function get_sm_platforms() {
		$social_meeja_platforms = array(
			'social_media_facebook'     => ['name' => 'Facebook' , 'url' => 'https://www.facebook.com/' , 'notes' => ''],
			'social_media_instagram'    => ['name' => 'Instagram' , 'url' => 'https://www.instagram.com/' , 'notes' => ''],
			'social_media_pintrest'     => ['name' =>'Pintrest' , 'url' => 'https://www.pinterest.com/' , 'notes' => ''],
			'social_media_linkedin'     => ['name' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/' , 'notes' => ''],
			'social_media_twitter'      => ['name' => 'Twitter' , 'url' => 'https://twitter.com/' , 'notes' => ''],
			'social_media_tiktok'       => ['name' =>'Tiktok' , 'url' => 'https://www.tiktok.com/@' , 'notes' => ''],
			'social_media_whatsapp'     => ['name' => 'Whatsapp' , 'url' => 'https://wa.me/' , 'notes' => ' Correct : 4412345678 Wrong +4412345678'],
			'social_media_youtube'      => ['name' => 'Youtube' , 'url' => 'https://www.youtube.com/c/' , 'notes' => '']
		);
		return  $social_meeja_platforms;
	}

	/**
	 *
	 * Is this a channel managed property?
	 *
	 */

	function is_channel_property( $property_uid = 0 )
	{
		if ($property_uid == 0 ) {
			return false;
		}

		$is_channel_property = false;
		$property_ids = array();
		if ( class_exists('channelmanagement_framework_properties' ) ) {  // The channel management framework is installed

			$channel_properties = get_showtime("channel_properties");

			if (!isset($channel_properties) || is_null($channel_properties)) {
				$channel_properties = array();
			}

			if (empty($channel_properties) &&  (bool)get_showtime("channel_properties_queried") == false ) {

				$query = 'SELECT `property_uid` FROM `#__jomres_channelmanagement_framework_property_uid_xref` ';
				$data = doSelectSql($query);
				if ( !empty($data) ) {
					foreach ($data as $d) {
						$property_ids[] = $d->property_uid;
					}
					set_showtime ("channel_properties_queried" , true );
				}
			} else {
				$property_ids = $channel_properties;
			}

			set_showtime ("channel_properties" , $property_ids );
		}

		if (in_array( $property_uid , $property_ids ) ) {
			$is_channel_property = true;
		}

		return $is_channel_property;
	}

	/**
	 *
	 * Function determines whether or not this task is allowed on a channel managed property
	 *
	 */

	function is_channel_safe_task ($task)
	{
		$is_channel_property = is_channel_property ( get_showtime("property_uid") );

		if ( $is_channel_property == false ) {
			return true;
		}

		// We know it's a channel property, let's find out if the manager is allowed to administer locally or if they're forced to toddle off to the parent
		$mrConfig = getPropertySpecificSettings( get_showtime("property_uid"));

		if ( !isset($mrConfig['allow_channel_property_local_admin']) ) {
			return true;
		}

		if ( (bool)$mrConfig['allow_channel_property_local_admin'] == true ) {
			return true;
		}

		if ( $task == JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.get_showtime("property_uid") ) {
			return true;
		}

		if ( $task == JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.get_showtime("property_uid") ) {
			return true;
		}

		$safe_tasks = array ( '' , 'dashboard' , 'business_settings' , 'dashboard_resources_ajax' , 'dashboard_events_ajax' , 'listyourproperties_ajax', 'cpanel' , 'publish_property' , 'listyourproperties' , 'preview' , 'webhooks_core', 'webhooks_core_documentation' , 'edit_integration' , 'save_integration' , 'edit_my_account', 'show_user_profile',  'muviewfavourites',  'logout',  'oauth',  'api_documentation',  'search',  'show_consent_form',  'gdpr_my_data' ,'toggle_jomres_widget_ajax' , 'delete_property' , 'viewproperty'); // We will not redirect on these tasks. Need to keep this list under review.

		if ( in_array( $task , $safe_tasks ) || substr ( $task , 0, 17 ) == "channelmanagement" || strstr (  $task ,"ajax" ) ) {
			return true;
		}

		return false;
	}


	/**
	 *
	 * Channel managed properties cannot be administered on non-origin installations, there are simply too many variables that can cause the two properties to go out of sync, therefore if a manager attempts to administer a clild property, they will be redirected to the parent site and property. Any changes on that site will then trickle back to the slave property.
	 *
	 * We wont use the api because it's quicker to make one query here. Two channels cannot create two properties with the same property uid, so we'll always be getting the correct management url, regardless of which channel created the property
	 *
	 */
	function redirect_on_administration_if_channel_property ( $property_uid , $task )
	{
		if ( is_channel_safe_task ($task)) {
			return;
		}
		if (class_exists('channelmanagement_framework_properties')) {  // The channel management framework is installed, we will call the find_management_url method, which will do a jomresRedirct to that url, if it exists, and the user can administer the property from there. If it doesn't then we will continue as normal.
			$query = 'SELECT `remote_data` FROM `#__jomres_channelmanagement_framework_property_uid_xref` WHERE property_uid = '.$property_uid.' LIMIT 1';
			$data = doSelectSql($query,1);
			if ( $data != '' && $data != false ) {
				$decoded = @unserialize($data);
				if ($decoded != false ) {
					if (isset($decoded->origin_management_url) && $decoded->origin_management_url != '' ) {
						jomresRedirect($decoded->origin_management_url);
					}
				}
			}
		}
	}



	/*

Get the remote plugins data.

Previously just a feature of the add plugin script, it's usage has been moved to here to allow the API to use the same functionality as we want to automatically install plugins when the API is called, and if the plugin is available. API Feature are still subject to scope limitations and other validation checks.

*/

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 */

	function get_remote_plugin_data()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (file_exists(JOMRES_TEMP_ABSPATH.'remote_plugins_data.php')) {
			$last_modified = filemtime(JOMRES_TEMP_ABSPATH.'remote_plugins_data.php');
			$seconds_timediff = time() - $last_modified;
			if ($seconds_timediff > 3600) {
				unlink(JOMRES_TEMP_ABSPATH.'remote_plugins_data.php');
			} else {
				$remote_plugins_data = file_get_contents(JOMRES_TEMP_ABSPATH.'remote_plugins_data.php');
			}
		}

		if (!file_exists(JOMRES_TEMP_ABSPATH.'remote_plugins_data.php')) {
			$remote_plugins_data = '';

			$base_uri = 'http://plugins.jomres4.net/';
			$query_string = 'index.php?r=dp&format=json&cms='._JOMRES_DETECTED_CMS.'&jomresver='.$jrConfig['version'];

			try {
				$client = new GuzzleHttp\Client([
					'base_uri' => $base_uri
				]);
				logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');

				$remote_plugins_data = $client->request('GET', $query_string)->getBody()->getContents();
			}
			catch (Exception $e) {
				$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
				$jomres_user_feedback->construct_message(array('message'=>'Could not get plugins data', 'css_class'=>'alert-danger alert-error'));
			}
			// Uncomment this to show all updates, including beta plugins.
			//$remote_plugins_data = queryUpdateServer( "", "r=dp&format=json&cms=" . _JOMRES_DETECTED_CMS  );
			if ($remote_plugins_data != '') {
				file_put_contents(JOMRES_TEMP_ABSPATH.'remote_plugins_data.php', $remote_plugins_data);
			}
		}

		$remote_plugins = json_decode($remote_plugins_data);

		return $remote_plugins;

	}


	/**
	 * @package Jomres\Core\Functions
	 *
	 *Search properties for guests with details LIKE the string.
	 *
	 *Return an array of guest ids that match string.
	 *
	 *Encryption functionality has broken the datatables functionality that allowed us to search by guest details (name, email etc). We need to search guest details, find those that match "string" and return those ids to the list bookings and list invoices ajax tasks (and maybe others too).
	 *
	 *$string : The string we are searching on. If '' (blank) then return an empty array.
	 *$property_uid : The specific property we are searching on. If set to 0 then that's all properties that this manager is a manager for.
	 *$manager_id : show_all is 1 and manager id is > 0 then we'll search all properties that the manager is a manager of. If the manager is a super manager, then we'll search all properties in the system. If manager_id is 0, then we will search all guests
	 *
	 *
	 *The function has been kept self-contained (doesn't use thisJRUser object, which is set during a run, is to allow other features, such as the REST API to potentially use it)
	 *We will return two arrays, first array will be an array of guest uids only. Second array is the same guest details plus the unencrypted data. We're unencrypting here anyway to search for the string, so we might as well hand that data back so that calling function/methods don't need to recreate that data
	 *
	 **/

	function search_property_guests_by_string($string = '' , $property_uid = 0 , $manager_id = 0 , $show_all = 0)
	{
		if (trim($string) == '' ) {
			return array();
		}

		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();

		$show_all = (int)$show_all;

		if ($manager_id > 0 ) {
			$query = 'SELECT `access_level` FROM #__jomres_managers WHERE `userid` = ' .(int) $manager_id.' LIMIT 1 ';
			$manager_access_level = doSelectSql($query , 1 );

			if ($manager_access_level >= 90 ) {
				$authorisedProperties = get_showtime('all_properties_in_system');
			} else {
				$authorisedProperties = array();

				$query = 'SELECT `property_uid` FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '.(int) $manager_id;
				$managersToPropertyList = doSelectSql($query);

				if (!empty($managersToPropertyList)) {
					foreach ($managersToPropertyList as $x) {
						$authorisedProperties[] = $x->property_uid;
					}
				}
			}

			if ( ! in_array($property_uid,$authorisedProperties) || empty($authorisedProperties) ) {
				return array();
			}

			if ( (int)$show_all == 1 && (int)$manager_id > 0 ) {
				$sWhere = ' WHERE property_uid IN ('.jomres_implode($authorisedProperties).') ';
			} else {
				$sWhere = " WHERE property_uid = '".(int) $property_uid."' ";
			}

		} else {
			$authorisedProperties = get_showtime('all_properties_in_system');
			$sWhere = ' WHERE property_uid IN ('.jomres_implode($authorisedProperties).') ';
		}

		$query = 'SELECT 
				guests_uid,
				enc_firstname, 
				enc_surname, 
				enc_house,
				enc_street,
				enc_town,
				enc_county,
				enc_country,
				enc_postcode,
				enc_tel_landline, 
				enc_tel_mobile, 
				enc_email
				FROM #__jomres_guests'
			.$sWhere;
		$jomresGuestList = doSelectSql($query);

		if (empty($jomresGuestList)) {
			return array();
		}

		// Now we'll decrypt the guest information and put the results into an array, then search them afterwards
		$all_guests = array();
		$count = count($jomresGuestList);
		for ($i=0;$i<$count;$i++) {
			$guest_data = $jomresGuestList[$i];
			$guests_uid = $jomresGuestList[$i]->guests_uid;
			$all_guests[]= array (
				'guests_uid' => $jomresGuestList[$i]->guests_uid,
				'firstname' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_firstname)),
				'surname' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_surname)),
				'house' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_house)),
				'street' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_street)),
				'town' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_town)),
				'county' => find_region_name(jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_county))),
				'country' => getSimpleCountry(jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_country))),
				'postcode' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_postcode)),
				'tel_landline' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_tel_landline)),
				'tel_mobile' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_tel_mobile)),
				'email' => jomres_decode($jomres_encryption->decrypt($jomresGuestList[$i]->enc_email))
			);
		}

		$matches = array ();
		$guest_uids = array ();
		$count = count($all_guests);
		for ($i=0;$i<$count;$i++) {
			$guest = $all_guests[$i];
			foreach ($guest as $column_name => $content ) {
				if ($column_name != 'guests_uid') {
					if( preg_match( "/$string/" , $content) ){
						$matches[$guest['guests_uid']] = $all_guests[$i];
						$guest_uids[] = $guest['guests_uid'];
						break;
					}
				}
			}
		}

		return array ( "matches" => $matches , "guest_uids" => $guest_uids);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Outputs the pdf after having been handed the outputted template data, or returns said PDF. Doesn't handle clean up of pdfs
	 */
	function output_pdf($tmpl , $title = '' , $return_pdf = false )
	{
		if ($title == '' ) {
			$title = get_showtime('sitename');
		}

		// mPDF doesn't work with Bootstrap :(

		$stylesheet = '';

		$mpdf = new \Mpdf\Mpdf(['tempDir' =>JOMRES_MPDF_ABSPATH]);

		$mpdf->SetTitle($title);
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->WriteHTML($stylesheet,1);
		$mpdf->WriteHTML($tmpl);

		ob_clean();
		if (!$return_pdf) {

			$mpdf->Output(str_replace(" ", "", $title.".pdf"), 'D');
			exit;
		} else {
			return $mpdf->Output('', \Mpdf\Output\Destination::STRING_RETURN );
		}


	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Adds as_pdf to url.
	 *
	 */
	function get_pdf_url()
	{
		$url = getCurrentUrl(true).'&tmpl='.get_showtime('tmplcomponent').'&popup=1&as_pdf=1';
		return $url;
	}

	/**
	 *
	 * @package Jomres\Core\Functions.
	 *
	 * When passed a username and password, return a response that confirms or denies that the login was successful. TFA not currently supported
	 */
	function jomres_login_user($username = null , $password = null , $tfa = '' )
	{
		$result = false;
		if (isset($username)) {

			if ( this_cms_is_joomla() ) {
				$app = JFactory::getApplication();
				$result = $app->login(array('username' => $username, 'password' => $password));
			}
			else {
				$credentials = array();
				$credentials['user_login'] = $username;
				$credentials['user_password'] = $password;
				$user = wp_signon($credentials);

				if ( is_wp_error($user) ) {
					$result = false;
				}
				else {
					$result = true;
				}
			}
		}

		$response = new stdClass();
		$response->success = $result;
		return $response;
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Easily find the manager id for a property. If there isn't a specific manager assigned to a property, then find the first super property manager and return that instead,
	 */
	function find_manager_id_for_property_uid($property_uid)
	{
		$managers_array = get_showtime("property_uids_to_property_managers");
		if (empty($managers_array)) {
			$managers_array = array();
			$property_manager_xref = get_showtime('property_manager_xref');
			if (is_null($property_manager_xref)) {
				$property_manager_xref = build_property_manager_xref_array();
			}

			$all_super_property_manager_ids = find_all_super_property_manager_ids();

			$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
			$all_property_ids = $jomres_properties->get_all_properties();

			if (!in_array( $property_uid ,$jomres_properties->all_property_uids['all_propertys'] ) ) {
				throw new Exception('Tried to find a manager id for a property, but the property does not exist');
			}

			foreach ($jomres_properties->all_property_uids['all_propertys'] as $p_id ) {
				if (isset( $property_manager_xref[$p_id] )) {
					$managers_array[$p_id] = $property_manager_xref[$p_id];
				} else {
					if ( !isset($all_super_property_manager_ids[0]) ) {
						throw new Exception('Tried to find a manager id for a property, but the property does not have a manager assigned to it, and the site does not have any super property managers');
					}
					$managers_array[$p_id] = $all_super_property_manager_ids[0];
				}
			}
		}

		return (int)$managers_array[$property_uid];
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Get all super property manager ids.
	 */
	function find_all_super_property_manager_ids()
	{
		$managers = array();
		$query = "SELECT userid FROM #__jomres_managers WHERE access_level >= 90 ";
		$all_super_managers = doSelectSql($query);
		if (!empty($all_super_managers)){
			foreach ($all_super_managers as $super_manager ) {
				$managers[] = $super_manager->userid;
			}
		}
		return $managers;
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Find the relative path to a QR code.
	 */
	function get_qr_code_relPath($arg)
	{
		$result = jomres_make_qr_code ($arg);
		return $result['relative_path'];
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * An easy way to quickly retrieve a singleton.
	 */
	function jomres_getSingleton($class, $args = array())
	{
		return jomres_singleton_abstract::getInstance($class, $args);
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * A function that makes an async POST or GET request using sockets.
	 */
	function jomres_async_request($type = "GET", $url = "", $port = '', $post_data = array())
	{
		$post_string = "";

		//check if url is empty
		if ($url == "") {
			return false;
		}

		//if this is a POST, then we must have some post data in the array
		if ($type == "POST" && empty($post_data)) {
			return false;
		}

		//generate the post string
		if (!empty($post_data)) {
			$post_string = http_build_query($post_data);
		}

		//set the port depending on http/https if no specific value is passed
		if ((int)$port == 0) {
			if (strpos($url, 'https://') !== false) {
				$port = 443;
			} else {
				$port = 80;
			}
		} else {
			$port = (int)$port;
		}

		$parts = parse_url($url);

		//get the functions disabled in php.ini
		$disabled_functions = explode(',', @ini_get('disable_functions'));

		if (function_exists('fsockopen') && !in_array('fsockopen', $disabled_functions)) { //we`ll use an async socket
			logging::log_message('Starting socket to '.$url, 'Socket', 'DEBUG');
			$logging_time_start = microtime(true);

			$fp = fsockopen($parts['host'], $port, $errno, $errstr, 5);

			if (!$fp) {
				logging::log_message('Unable to open socket to '.$url, 'Socket', 'DEBUG');
				return false;
			}

			stream_set_timeout($fp, 1);
			stream_set_blocking($fp, false);

			$out = $type." ".$parts['path'].'?'.$parts['query']." HTTP/1.1\r\n";
			$out.= "Host: ".$parts['host']."\r\n";
			$out .= "User-Agent: Jomres Asynchronous task trigger\r\n";
			$out.= "Content-Type: application/x-www-form-urlencoded\r\n";
			$out.= "Content-Length: ".strlen($post_string)."\r\n";
			$out.= "Connection: Close\r\n\r\n";
			if ($type == "POST" && $post_string != "") {
				$out.= $post_string;
			}

			fwrite($fp, $out);
			fclose($fp);

			$logging_time_end = microtime(true);
			$logging_time = $logging_time_end - $logging_time_start;
			logging::log_message('Socket call took '.$logging_time.' seconds ', 'Socket', 'DEBUG');

			return true;
		} elseif (function_exists('curl_init')) { //we`ll use curl if enabled
			//we`ll use a custom GET here so that domains with non latin chars will be handled properly
			if ($type == "GET") {
				$type = "XGET";
			}

			logging::log_message('Starting curl call to '.$url, 'Curl', 'DEBUG');
			$logging_time_start = microtime(true);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Jomres Asynchronous task trigger');
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_PORT, $port);
			curl_setopt($ch, CURLOPT_TIMEOUT, 480);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=utf-8'));

			if ($type == "POST") {
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
			}
			$curl_output = curl_exec($ch);
			curl_close($ch);

			$logging_time_end = microtime(true);
			$logging_time = $logging_time_end - $logging_time_start;
			logging::log_message('Curl call took '.$logging_time.' seconds ', 'Curl', 'DEBUG');

			return true;
		} else {
			return false;
		}

		return false;
	}

	/*

*/

	/**
	 * @package Jomres\Core\Functions
	 *
	 *A simple function to get the marker relative path.
	 *
	 * Markers, in this context, are map markers for google maps. They are uploaded through the Admin > Settings > Media centre
	 *
	 */
	function get_marker_src($marker_image = '')
	{
		if ($marker_image == '')
			return '';

		if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.$marker_image)) {
			$result = JOMRES_IMAGELOCATION_RELPATH.'markers/'.$marker_image;
		} elseif (file_exists(JOMRES_IMAGES_ABSPATH.'markers'.JRDS.'free-map-marker-icon-blue.png')) {
			$result = JOMRES_IMAGES_RELPATH.'markers/free-map-marker-icon-blue.png';
		} else {
			$result = '';
		}

		return $result;
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * A simple function to pull the contract uid based on the booking number.
	 */
	function get_contract_uid_for_tag($tag)
	{
		$tag = trim(filter_var($tag, FILTER_SANITIZE_SPECIAL_CHARS));
		$query="SELECT `contract_uid` FROM #__jomres_contracts WHERE `tag`= '".$tag."'";
		$contract_uid = doSelectSql($query , 1 );
		return $contract_uid;
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * This function allows a script writer to add webhook notifications dynamically.
	If the collection script variable is set, then the none/basic/oauth authmethod processors will use a collection script that goes by the name of collector_$collection_script_name.php , e.g. collector_dashboard.php
	Otherwise the processor will attempt to use the contents of the object's $data variable instead.
	 */
	function add_webhook_notification($contents)
	{
		$webhook_messages = get_showtime('webhook_messages');
		$webhook_messages[] = $contents;
		set_showtime('webhook_messages', $webhook_messages);
		logging::log_message('Webhook notification set '.$contents->webhook_event, 'Core', 'DEBUG' , serialize($contents) );
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Implodes arrays for use with queries where IN is used.
	 *
	 * For performance reasons IN is used extensively, this function is used when building queries based off of arrays
	 *
	 */
	function jomres_implode($elements = array(), $integers = true)
	{
		$txt = '';
		$i = 1;
		$count = count($elements);

		if ($count == 0) {
			return "''";
		}

		foreach ($elements as $element) {
			if ($integers) {
				$txt .= (int) $element;
			} else {
				$txt .= "'".$element."'";
			}

			if ($i < $count) {
				$txt .= ',';
			}

			++$i;
		}

		return $txt;
	}

	/**
	 * @package Jomres\Core\Functions
	 *
	 * A quick function to trim path names.
	 */
	function fix_path($path = '')
	{
		$path = rtrim($path, '/');
		$path = rtrim($path, '\\');
		$path = $path.'/';

		return $path;
	}


	/**
	 * @package Jomres\Core\Functions
	 *
	 * A function to obsfucate email addresses in content to defend against spammers.
	 *
	 * http://www.maurits.vdschee.nl/php_hide_email/
	 *
	 */
	function jomres_hide_email($email)
	{
		$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
		$key = str_shuffle($character_set);
		$cipher_text = '';
		$id = 'e'.rand(1, 999999999);
		for ($i = 0; $i < strlen($email); $i += 1) {
			$cipher_text .= $key[strpos($character_set, $email[$i])];
		}
		$script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';
		$script .= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
		$script .= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';
		$script = 'eval("'.str_replace(array('\\', '"'), array('\\\\', '\"'), $script).'")';
		$script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';

		return '<span id="'.$id.'">[javascript protected email address]</span>'.$script;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Checks that the user can view the property.
	 *
	 * Used extensively by j06000show_propertyxxxxx scripts. If the user is a super manager then they can view the property regardless of it's state. Otherwise, if it is not published and the user is not a manager, return false. If it is not published and the user does not have this property in their list of authorised properties ( i.e. a manager viewing another manager's property ) return false.
	 *
	 */
	function user_can_view_this_property($property_uid = 0)
	{
		if ($property_uid == 0) {
			return false;
		}

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		if ($thisJRUser->superPropertyManager) {
			return true;
		} else {
			if ($current_property_details->published == 0 && (!$thisJRUser->userIsManager || ($thisJRUser->userIsManager && !in_array($property_uid, $thisJRUser->authorisedProperties)))) {
				return false;
			}
		}

		return true;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check that this user can modify a booking.
	 */
	function can_modify_this_booking($contract_uid)
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if (!$thisJRUser->userIsManager) {
			throw new Exception('Non-manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid);
		}

		$query = 'SELECT `property_uid` FROM #__jomres_contracts WHERE `contract_uid` = '.(int) $contract_uid.' LIMIT 1';
		$contract_property_uid = doSelectSql($query, 1);

		if ((int) $contract_property_uid == 0) {
			throw new Exception('Manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid.'. This contract uid does not exist.');
		}

		if (in_array($contract_property_uid, $thisJRUser->authorisedProperties)) {
			return true;
		} else {
			throw new Exception('Manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid.'. Manager is not authorised to modify this contract.');
		}

		throw new Exception('Manager user '.serialize($thisJRUser).' attempted to modify a booking with the contract uid of '.(int) $contract_property_uid.'. Could not confirm that the manager was authorised to modify the booking.');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Newer function for finding dates - dates must be passed in Y/m/d format.
	 */
	function get_periods($start, $end, $interval = null)
	{
		$start = new DateTime($start);
		$end = new DateTime($end);
		if (is_null($interval)) {
			$interval = new DateInterval('P1D');
		}

		$period = new DatePeriod($start, $interval, $end);
		$dates = array();
		foreach ($period as $date) {
			$d = $date->format('Y/m/d');
			$dates[ ] = $d;
		}

		return $dates;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Function to get the client IP address.
	 */
	function jomres_get_client_ip()
	{
		$ipaddress = '';

		if (isset($_SERVER['HTTP_CLIENT_IP'])) {
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (isset($_SERVER['REMOTE_ADDR'])) {
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		} elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_FORWARDED'])) {
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		} else {
			$ipaddress = 'UNKNOWN';
		}

		if ($ipaddress == '::1') {
			$ipaddress = '127.0.0.1';
		}

		return filter_var($ipaddress, FILTER_SANITIZE_STRING);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Outputs that an error has been thrown.
	 *
	 * Primarily a frontend function. Logs and outputs an error message. If the site is set to Development mode then the full error details are sent to the page, otherwise if site is set to Production a generic Oops message is output. If Site is configured to, the error can be emailed to site administrators. The error is logged to Application.log as an Error.
	 *
	 */
	function output_fatal_error($e , $extra_info = '' )
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$cms_files_we_are_not_interested_in = jomres_cmsspecific_error_logging_cms_files_to_not_backtrace();
		$rows = array();
		$backtrace = debug_backtrace();

		foreach ($backtrace as $trace) {
			$r = array();

			if (isset($trace[ 'file' ]) && !isset($trace[ 'line' ])) {
				$file = $trace[ 'file' ];
				$bang = explode(JRDS, $file);
				$filename = $bang[ count($bang) - 1 ];
				if ($filename != 'patTemplate.php' && $filename != 'index.php' && !in_array($filename, $cms_files_we_are_not_interested_in)) {
					$r['FILES'] = ' '.$filename.' on line '.$trace['line'].'<br/>';
					$rows[] = $r;
				}
			}
		}

		$link = getCurrentUrl();
		//$link =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$cleaned_link = jomres_sanitise_string($link);

		if (is_object($e)) {
			$output = array(
				'URL' => $cleaned_link,
				'MESSAGE' => $e->getMessage(),
				'EXTRA_INFO' => $extra_info,
				'FILE' => $e->getFile(),
				'LINE' => $e->getLine(),
				'TRACE' => nl2br($e->getTraceAsString()),
				'_JOMRES_ERROR_DEBUGGING_MESSAGE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_MESSAGE', '_JOMRES_ERROR_DEBUGGING_MESSAGE', false),
				'_JOMRES_ERROR_DEBUGGING_FILE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_FILE', '_JOMRES_ERROR_DEBUGGING_FILE', false),
				'_JOMRES_ERROR_DEBUGGING_LINE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_LINE', '_JOMRES_ERROR_DEBUGGING_LINE', false),
				'_JOMRES_ERROR_DEBUGGING_TRACE' => jr_gettext('_JOMRES_ERROR_DEBUGGING_TRACE', '_JOMRES_ERROR_DEBUGGING_TRACE', false),
			);
		}
		else {
			$output = array('MESSAGE' => $e);
		}

		$output['IP_NUMBER'] = jomres_get_client_ip();

		$output['DATETIME'] = date('Y-m-d H:i:s');

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);

		$tmpl->readTemplatesFromInput('error_developer.html');
		$tmpl->addRows('rows', $rows);
		$tmpl->addRows('pageoutput', $pageoutput);
		$error_html = $tmpl->getParsedTemplate();

		if (!is_dir(JOMRES_SYSTEMLOG_PATH)) {
			mkdir(JOMRES_SYSTEMLOG_PATH);
		}

		$filename = generateJomresRandomString(30).'.html';

		file_put_contents(JOMRES_SYSTEMLOG_PATH.$filename, $error_html);

		if ($jrConfig['development_production'] == 'development') {
			echo $error_html;
		} else {
			$pageoutput = array(array('_JOMRES_ERROR' => jr_gettext('_JOMRES_ERROR', '_JOMRES_ERROR', false), '_JOMRES_ERROR_MESSAGE' =>  $e->getMessage() ));
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('error_production.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			echo $tmpl->getParsedTemplate();
		}

		$url = '<a href = "'.JOMRES_SITEPAGE_URL_NOSEF.'&task=show_logfile&logfile='.$filename.'"> Logfile </a>'.
			$error_html
		;

		if ($jrConfig[ 'sendErrorEmails' ] == '1') {
			sendAdminEmail('Error logged '.$output['MESSAGE'], $url);
		}

		logging::log_message('Error logged '.$output['MESSAGE'].' '.$url, 'Core', 'ERROR');
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$MiniComponents->triggerEvent('00061');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * What is the current page url?.
	 */
	function getCurrentUrl($full = true)
	{
		if (isset($_SERVER['REQUEST_URI'])) {
			$parse = parse_url(
				(isset($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'off') ? 'https://' : 'http://').
				(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '')).(($full) ? $_SERVER['REQUEST_URI'] : null)
			);
			//$parse['port'] = $_SERVER['SERVER_PORT']; // Setup protocol for sure (80 is default)
			return http_build_url('', $parse);
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Return true if the host CMS is Wordpress.
	 */
	function this_cms_is_wordpress()
	{
		if (_JOMRES_DETECTED_CMS != 'wordpress') {
			return false;
		}

		return true;
	}



	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * A utility to create a modal button that links to a Jomres task.
	 *
	 * text of the button.
	 * task. The task of the called page.
	 * Extra. Any arguements to be added to the url.
	 * Title. What the title of the modal will be set to.
	 *
	 */
	function make_modal_button($text, $task, $extra, $title, $button_colour = 'btn-default')
	{
		$pageoutput = array();

		$pageoutput[0][ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);
		$pageoutput[0][ 'TEXT' ] = $text;
		$pageoutput[0][ 'TASK' ] = $task;
		$pageoutput[0][ 'EXTRA' ] = $extra;
		$pageoutput[0][ 'MODAL_TITLE' ] = urlencode($title);
		$pageoutput[0][ 'BUTTON_COLOUR' ] = $button_colour;

		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->readTemplatesFromInput('modal_button.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

//


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * A quick way to ouput data that's stored in a Jomres template but doesn't require any conditions or rows.
	 *
	 * Due to the way Bootstrap 3 demands that returned data be wrapped in <div class="modal-content"> <div class="modal-header"> </div></div> we need to create new output that wraps the content we wish to return. As we may want to add modal popups to other pages in the future we needed to add a new request variable "modal_wrap" which then allows us to wrap the resulting output in these divs. As we don't want to change the code every time a new modal syntax appears it's preferable to add this modal wrap via a template file. The template file itself doesn't demand any special conditions, so we've created this quick template output function to allow us to quickly access a template file that contains some simple html.
	 * One string allows us to pass just one variable to the template for inclusion in output (in case, for example, the modal needs a title)
	 *
	 */
	function simple_template_output($path = '', $template = '', $one_string = '')
	{
		if (!file_exists($path.JRDS.$template)) { // This allows for backward compatibility
			return '';
		}
		$pageoutput = array(array('TITLE' => $one_string));
		$tmpl = new patTemplate();
		$tmpl->setRoot($path);
		$tmpl->readTemplatesFromInput($template);
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Generates colours for the property review rating bars.
	 */
	function calc_rating_progressbar_colour($percentage)
	{
		if (jomres_bootstrap_version() == '5' ) {
			$success    = 'bg-success';
			$info       = 'bg-info';
			$warning    = 'bg-warning';
			$danger     = 'bg-danger';
		} else {
			$success    = 'progress-bar-success';
			$info       = 'progress-bar-info';
			$warning    = 'progress-bar-warning';
			$danger     = 'progress-bar-danger';
		}

		if ($percentage >= 60) {
			$colour = $success;
		}
		if ($percentage < 60 && $percentage >= 50) {
			$colour = $info;
		}
		if ($percentage < 50 && $percentage >= 30) {
			$colour = $warning;
		}
		if ($percentage < 30) {
			$colour = $danger;
		}

		return $colour;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Determine the version of Bootstrap framework that is being used.
	 */

	function jomres_bootstrap_version()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if (!isset($jrConfig[ 'bootstrap_version' ])) {
			$jrConfig[ 'bootstrap_version' ] = '';
		}

		if  ( jomres_cmsspecific_areweinadminarea() && _JOMRES_DETECTED_CMS == 'joomla4' ) {
			// check to see if we are in admin area & bs version is not set. If so, it's a new installation so we'll auto configure our bs version templates to run bs4
			if ($jrConfig[ 'bootstrap_version' ] == '' ) {
				$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
				$siteConfig->update_setting('bootstrap_version', 5  );
				$siteConfig->save_config();
			}

			// It's a site updated from BS3
			if ($jrConfig[ 'bootstrap_version' ] == '3' ) {
				$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
				$siteConfig->update_setting('bootstrap_version', 5  );
				$siteConfig->save_config();
			}

			$bootstrap_version = '5';

		} elseif  ( jomres_cmsspecific_areweinadminarea() && _JOMRES_DETECTED_CMS == 'joomla3' ) {
			$bootstrap_version = '2';
		} elseif ( this_cms_is_wordpress() ) { // We are in Wordpress, so we'll automatically set the BS version to 2 if in admin, or BS3 in frontend as the init config vars functionality will autoload the BS3 scripts in the frontend
			if ( jomres_cmsspecific_areweinadminarea()) {
				$bootstrap_version = '2';
			} elseif ($jrConfig[ 'bootstrap_version' ] != '') {
				$bootstrap_version = (int)$jrConfig[ 'bootstrap_version' ];
			} else {
				$bootstrap_version = '3';
			}
		}  else {
			$bootstrap_version = $jrConfig[ 'bootstrap_version' ];
		}

		return $bootstrap_version;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * For plugins to find the correct sub-directory for the template based on site settings.
	 *
	 * todo Add support for Bootstrap 4 in administrator area
	 */

	function find_plugin_template_directory()
	{
		$template_dir = 'bootstrap';

		if (jomres_cmsspecific_areweinadminarea()  && _JOMRES_DETECTED_CMS != 'joomla4' ) {
			$template_dir = 'bootstrap';
		} elseif (using_bootstrap()) {
			$template_dir = 'bootstrap';
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			if (!isset($jrConfig[ 'bootstrap_version' ])) {
				$jrConfig[ 'bootstrap_version' ] = '';
			}

			if ($jrConfig[ 'bootstrap_version' ] != '') {
				$template_dir = $template_dir.jomres_bootstrap_version();
			}
		}

		return $template_dir;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Return an array of dates.
	 *
	 * Receives two dates Y/m/d and returns all dates between in Y/m/d formate
	 *
	 */
	function findDateRangeForDates($d1, $d2)
	{
		$days = (int) findDaysForDates($d1, $d2);
		$dateRangeArray = array();
		$currentDay = $d1;
		$date_elements = explode('/', $currentDay);
		$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
		for ($i = 0, $n = $days; $i <= $n; ++$i) {
			$currentDay = date('Y/m/d', $unixCurrentDate);
			$dateRangeArray[ ] = $currentDay;
			$date_elements = explode('/', $currentDay);
			$unixCurrentDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ]);
		}

		return $dateRangeArray;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Get the number of days between two dates (Y/m/d).
	 */
	function findDaysForDates($d1, $d2)
	{
		$diff = dateDiff('d', $d1, $d2);

		return $diff;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Import images from the uploadedimages directory into the database.
	 */
	function import_images_to_media_centre_directories()
	{
		// We are going to move any property images, slideshow images and room images into the new media centre's resource directories.
		$query = 'SELECT propertys_uid,published FROM #__jomres_propertys';
		$properties = doSelectSql($query);
		$all_propertys = array();
		foreach ($properties as $p) {
			$all_propertys[ ] = $p->propertys_uid;
		}

		$resource_types = array();
		$resource_types[] = array('resource_type' => 'rooms', 'resource_id_required' => true, 'name' => jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', false));
		$resource_types[] = array('resource_type' => 'slideshow', 'resource_id_required' => false, 'name' => jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', false));
		$resource_types[] = array('resource_type' => 'property', 'resource_id_required' => false, 'name' => jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', false), 'notes' => jr_gettext('_JOMRES_MEDIA_CENTRE_NOTES_CORE', '_JOMRES_MEDIA_CENTRE_NOTES_CORE', false));

		if (!empty($resource_types) && !empty($all_propertys)) {
			foreach ($all_propertys as $property_id) {
				$base_path = JOMRES_IMAGELOCATION_ABSPATH.$property_id.JRDS;

				if (!is_dir($base_path)) {
					mkdir($base_path);
				}

				if (is_dir($base_path.'joomla')) {
					emptyDir($base_path.'joomla');
					rmdir($base_path.'joomla');
				}

				$all_types = array();
				foreach ($resource_types as $type) {
					if (!is_dir($base_path.$type['resource_type'])) {
						mkdir($base_path.$type['resource_type']);
					}
				}

				if (!is_dir($base_path.'property'.JRDS.'0')) {
					mkdir($base_path.'property'.JRDS.'0');
				}
				if (!is_dir($base_path.'property'.JRDS.'0'.JRDS.'thumbnail')) {
					mkdir($base_path.'property'.JRDS.'0'.JRDS.'thumbnail');
				}
				if (!is_dir($base_path.'property'.JRDS.'0'.JRDS.'medium')) {
					mkdir($base_path.'property'.JRDS.'0'.JRDS.'medium');
				}

				// Let's start with the property image
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'.jpg')) {
					rename(
						JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'.jpg',
						$base_path.'property'.JRDS.'0'.JRDS.$property_id.'_property_'.$property_id.'.jpg'
					);
				}
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail.jpg')) {
					rename(
						JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail.jpg',
						$base_path.'property'.JRDS.'0'.JRDS.'thumbnail'.JRDS.$property_id.'_property_'.$property_id.'.jpg'
					);
				}
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail_med.jpg')) {
					rename(
						JOMRES_IMAGELOCATION_ABSPATH.$property_id.'_property_'.$property_id.'_thumbnail_med.jpg',
						$base_path.'property'.JRDS.JRDS.'0'.JRDS.'medium'.JRDS.$property_id.'_property_'.$property_id.'.jpg'
					);
				}

				// Now any slideshow images
				$slideshow_images = scandir_getfiles($base_path);

				if (!empty($slideshow_images)) {
					if (!is_dir($base_path.'slideshow'.JRDS.'0')) {
						mkdir($base_path.'slideshow'.JRDS.'0');
					}
					if (!is_dir($base_path.'slideshow'.JRDS.'0'.JRDS.'thumbnail')) {
						mkdir($base_path.'slideshow'.JRDS.'0'.JRDS.'thumbnail');
					}
					if (!is_dir($base_path.'slideshow'.JRDS.'0'.JRDS.'medium')) {
						mkdir($base_path.'slideshow'.JRDS.'0'.JRDS.'medium');
					}

					foreach ($slideshow_images as $image) {
						// The slideshow image files directly under /N/ have the pattern filename/filename_thumbnail/filename_thumbnail_med, so we need to find the main file, then move it's medium/thumbnails over afterwards
						if (!strstr('_thumbnail', $image)) {
							$image_name_array = explode('.', $image);
							unset($image_name_array[count($image_name_array) - 1]);
							$image_name = implode($image_name_array);

							rename(
								$base_path.$image_name.'.jpg',
								$base_path.'slideshow'.JRDS.'0'.JRDS.$image_name.'.jpg'
							);
							rename(
								$base_path.$image_name.'_thumbnail.jpg',
								$base_path.'slideshow'.JRDS.'0'.JRDS.'thumbnail'.JRDS.$image_name.'.jpg'
							);
							rename(
								$base_path.$image_name.'_thumbnail_med.jpg',
								$base_path.'slideshow'.JRDS.'0'.JRDS.'medium'.JRDS.$image_name.'.jpg'
							);
						}
					}
				}

				// Finally we'll look for room images
				$room_images = scandir_getfiles(JOMRES_IMAGELOCATION_ABSPATH);
				if (!empty($room_images)) {
					$pattern = $property_id.'_room';
					foreach ($room_images as $image) {
						$pos1 = strpos($image, '_thumbnail');
						if ($pos1 === false) {
							$pos2 = strpos($image, $pattern);
							if ($pos2 === 0) {
								$image_name_array = explode('.', $image);
								unset($image_name_array[count($image_name_array) - 1]);
								$image_name = implode($image_name_array);
								$bang = explode('_', $image_name);
								$resource_id = $bang[2];

								if (!is_dir($base_path.'rooms'.JRDS.$resource_id)) {
									mkdir($base_path.'rooms'.JRDS.$resource_id);
								}
								if (!is_dir($base_path.'rooms'.JRDS.$resource_id.JRDS.'thumbnail')) {
									mkdir($base_path.'rooms'.JRDS.$resource_id.JRDS.'thumbnail');
								}
								if (!is_dir($base_path.'rooms'.JRDS.$resource_id.JRDS.'medium')) {
									mkdir($base_path.'rooms'.JRDS.$resource_id.JRDS.'medium');
								}

								rename(
									JOMRES_IMAGELOCATION_ABSPATH.$image_name.'.jpg',
									$base_path.'rooms'.JRDS.$resource_id.JRDS.$image_name.'.jpg'
								);
								rename(
									JOMRES_IMAGELOCATION_ABSPATH.$image_name.'_thumbnail.jpg',
									$base_path.'rooms'.JRDS.$resource_id.JRDS.'thumbnail'.JRDS.$image_name.'.jpg'
								);
								rename(
									JOMRES_IMAGELOCATION_ABSPATH.$image_name.'_thumbnail_med.jpg',
									$base_path.'rooms'.JRDS.$resource_id.JRDS.'medium'.JRDS.$image_name.'.jpg'
								);
							}
						}
					}
				}
			}
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Output size with B,KB,MB,GB,TB suffixes.
	 */
	function jomres_formatBytes($bytes, $precision = 2)
	{
		$units = array('B', 'KB', 'MB', 'GB', 'TB');

		$bytes = max($bytes, 0);
		$pow = floor(($bytes ? log($bytes) : 0) / log(1024));
		$pow = min($pow, count($units) - 1);

		return round($bytes, $precision).' '.$units[$pow];
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Debugging tool to find scripts that were called when an error was triggered.
	 */
	function echo_backtrace()
	{
		$trace = debug_backtrace();
		foreach ($trace as $t) {
			$file_arr = explode(JRDS, $t[ 'file' ]);
			$file = $file_arr[ count($file_arr) - 1 ];
			if ($file == 'helper.php') {
				break;
			}
			$line = $t[ 'line' ];
			echo 'Line : '.$line.' for file '.$file.' </br>';
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Create a url for a property's address that will be marked in google maps.
	 */
	function make_gmap_url_for_property_uid($property_uid)
	{
		if ($property_uid < 1) {
			return false;
		}
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);

		$dest_address = $current_property_details->property_name.','.$current_property_details->property_street.','.$current_property_details->property_town.','.$current_property_details->property_region.','.$current_property_details->property_country.','.$current_property_details->property_postcode;

		return 'https://maps.google.com/maps?daddr='.$dest_address;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Uses the QR code library to create qr codes in the temp directory and returns relative, and absolute paths.
	 */
	function jomres_make_qr_code($string = '', $format = 'text')
	{
		$dir = JOMRES_TEMP_ABSPATH.'qr_codes';
		test_and_make_directory($dir);

		if ($string == '') {
			return false;
		}

		$filename = md5($string);
		if (!file_exists($dir.JRDS.'qr_code_'.$filename.'.png')) {
			\PHPQRCode\QRcode::png($string, $dir.JRDS.'qr_code_'.$filename.'.png', 'L', 4, 2);
		}

		return array('relative_path' => get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/temp/qr_codes/'.'qr_code_'.$filename.'.png', 'absolute_path' => $dir.JRDS.'qr_code_'.$filename.'.png');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Used by ajax search for searching for town names.
	 */
	function genericLike($idArray, $fieldToSearch, $idArrayisInteger = true)
	{
		$newArr = array();
		foreach ($idArray as $id) {
			$newArr[ ] = $id;
		}
		$idArray = $newArr;
		$n = count($idArray);
		$txt = ' ( `'.$fieldToSearch.'` LIKE ';
		for ($i = 0; $i < $n; ++$i) {
			if ($idArrayisInteger) {
				$id = (int) $idArray[ $i ];
			} else {
				$id = $idArray[ $i ];
			}
			$txt .= " '%$id%' ";
			if ($i < $n - 1) {
				$txt .= ' OR `'.$fieldToSearch.'` LIKE ';
			}
		}
		$txt .= ' ) ';

		return $txt;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Calculates number to be added to badges in the administrator menu.
	 */
	function get_number_of_items_requiring_attention_for_menu_option($task = '')
	{
		if ($task == '') {
			return array();
		}

		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if (jomres_cmsspecific_areweinadminarea()) {
			if ($MiniComponents->eventSpecificlyExistsCheck('07020', $task)) {
				return $MiniComponents->specificEvent('07020', $task);
			} else {
				return array();
			}
		} elseif ($MiniComponents->eventSpecificlyExistsCheck('07030', $task)) {
			return $MiniComponents->specificEvent('07030', $task);
		} else {
			return array();
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Given a region id, will return the name of the region, translated if applicable.
	 */
	function find_region_name($region_id)
	{
		if (!is_numeric($region_id)) { // It's already NOT numeric
			return $region_id;
		}

		$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');

		return $jomres_regions->get_region_name($region_id);
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Given a region name, will return the region id.
	 */
	function find_region_id($region_name)
	{
		if (is_numeric($region_name)) { // It's already numeric
			return $region_name;
		}

		$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');

		return $jomres_regions->get_region_id($region_name);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns an array of all properties with a manager id.
	 */
	function build_property_manager_xref_array()
	{
		$arr = array();

		$query = 'SELECT `property_uid`, `manager_id` FROM #__jomres_managers_propertys_xref';
		$managersToPropertyList = doSelectSql($query);
		if (!empty($managersToPropertyList)) {
			foreach ($managersToPropertyList as $x) {
				if (!array_key_exists($x->property_uid, $arr)) {
					$arr[ $x->property_uid ] = $x->manager_id;
				}
			}
		}

		set_showtime('property_manager_xref', $arr);

		return $arr;
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Utility to produce a url the view property manager page.
	 */
	function make_host_link($property_id = 0)
	{
		$property_manager_xref = get_showtime('property_manager_xref');
		if (is_null($property_manager_xref)) {
			$property_manager_xref = build_property_manager_xref_array();
		}

		if (!array_key_exists($property_id, $property_manager_xref)) {
			return '';
		}

		if ($property_id == 0) {
			return '';
		}

		$output = array();
		$pageoutput = array();

		$manager_id = $property_manager_xref[ $property_id ];

		$output[ 'URL' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_user_profile&id='.$manager_id);
		$output[ 'VIEW_HOST_PROFILE' ] = jr_gettext('VIEW_HOST_PROFILE', 'VIEW_HOST_PROFILE', false);

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('host_link.html');

		return $tmpl->getParsedTemplate();
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Utility to produce a url to the view property manager page.
	 *
	 * Superceeded by the make host link function
	 */
	function make_agent_link($property_id = 0)
	{
		$property_manager_xref = get_showtime('property_manager_xref');
		if (is_null($property_manager_xref)) {
			$property_manager_xref = build_property_manager_xref_array();
		}

		if (!array_key_exists($property_id, $property_manager_xref)) {
			return '';
		}

		if ($property_id == 0) {
			return '';
		}

		$output = array();
		$pageoutput = array();

		$manager_id = $property_manager_xref[ $property_id ];

		$output[ 'IMAGE' ] = JOMRES_IMAGES_RELPATH.'noimage.gif';

		$image_filename = '';
		$contents = get_directory_contents(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.(int) $manager_id);
		if ($contents !== false ) {
			foreach ($contents as $file ) {
				if ($file != '.' && $file != '..' && $file != 'medium' && $file != 'thumbnail' ) {
					$image_filename = $file;
				}
			}
		}

		if ( $image_filename != '' && file_exists(JOMRES_IMAGELOCATION_ABSPATH.'userimages'.JRDS.(int) $manager_id.JRDS.'thumbnail'.JRDS.$image_filename)) {
			$output[ 'IMAGE' ] = JOMRES_IMAGELOCATION_RELPATH.'userimages/'.(int) $manager_id.'/thumbnail/'.$image_filename;
		}

		$output[ 'URL' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=view_agent&id='.$manager_id);

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('agent_link.html');

		return $tmpl->getParsedTemplate();
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Checks that a user can perform the translation.
	 */
	function translation_user_check()
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager || !$thisJRUser->superPropertyManager) {
			if (using_bootstrap()) {
				echo '<div class="alert alert-error">'.jr_gettext('_JOMRES_COM_NOTAMANAGER', '_JOMRES_COM_NOTAMANAGER', false).'</div>';
			} else {
				echo '<div class="ui-state-error">'.jr_gettext('_JOMRES_COM_NOTAMANAGER', '_JOMRES_COM_NOTAMANAGER', false).'</div>';
			}

			return false;
		}

		return true;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Outputs the "no search results" message.
	 */
	function no_search_results()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		return $MiniComponents->specificEvent('06000', 'no_search_results');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns a tooltip image ( image with hover test ). jomres_tooltips class used to determine what to show based on the version of bootstrap.
	 */
	function jomres_makeTooltip($div, $hover_title = '', $hover_content = '', $div_content = '', $class = '', $type = '', $type_arguments = array(), $url = '#')
	{
		// Uncomment the following line to tell Jomres to show the images and descriptions side by side, instead of using the jquery tooltip.
		//$type_arguments['use_javascript']=false;
		$jomres_tooltips = jomres_singleton_abstract::getInstance('jomres_tooltips');

		//$jomres_tooltips = new jomres_tooltips();
		return $jomres_tooltips->generate_tooltip($div, $hover_title, $hover_content, $div_content, $class, $type, $type_arguments, $url);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Optional CMS Specific end run tasks.
	 */
	function endrun()
	{
		if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_endrun.php')) {
			require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_endrun.php';
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns whether or not we are using Bootstrap.
	 */
	function using_bootstrap()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig[ 'use_bootstrap_in_frontend' ])) {
			if (this_cms_is_joomla()) {
				$jrConfig[ 'use_bootstrap_in_frontend' ] = '1';
			} else {
				$jrConfig[ 'use_bootstrap_in_frontend' ] = '0';
			}
		}

		if (jomres_cmsspecific_areweinadminarea()) {
			return true;
		} else {
			if ($jrConfig[ 'use_bootstrap_in_frontend' ] == '1') {
				return true;
			} else {
				return false;
			}
		}

		return false;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Adds Google maps javascript calls to the site's head where appropriate.
	 */
	function add_gmaps_source()
	{
		if (defined('JOMRES_NOHTML') && JOMRES_NOHTML == '1') {
			return true;
		}

		if (!defined('GMAPS_SOURCE_ADDED') && !AJAXCALL) {
			define('GMAPS_SOURCE_ADDED', 1);

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$shortcode = get_showtime('lang_shortcode');

			$apikey = '';
			if ($jrConfig[ 'google_maps_api_key' ] != '') {
				$apikey = '&key='.$jrConfig[ 'google_maps_api_key' ];
			}

			if ($apikey == '' ) {
				return;
			}


			jomres_cmsspecific_addheaddata('javascript', 'https://maps.googleapis.com/maps/api/js?v=3.20&language='.$shortcode.$apikey, '&v=weekly&channel=2', $includeVersion = false, $async = true);
		}
	}


	function admins_first_run($manual_trigger = false)
	{
		$logfile = JOMRES_TEMP_ABSPATH.'admins_first_run.txt';

		if (!file_exists($logfile) || $manual_trigger) {
			if (!$manual_trigger) {
				touch($logfile);
			}

			if (!$manual_trigger) {
				echo '<div  class="modal" tabindex="-1" role="dialog" id="first_run" style="display:none" title="'.jr_gettext('_JOMRES_STOP_READTHISFIRST2', '_JOMRES_STOP_READTHISFIRST2', false, false).'">';
				if (using_bootstrap()) {
					echo '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3>'.jr_gettext('_JOMRES_STOP_READTHISFIRST2', '_JOMRES_STOP_READTHISFIRST2', false, false).'</h3></div>';
				} else {
					echo '<h3>'.jr_gettext('_JOMRES_STOP_READTHISFIRST2', '_JOMRES_STOP_READTHISFIRST2', false, false).'</h3>';
				}
			} else {
				echo '<div id = "first_run" title="'.jr_gettext('_JOMRES_STOP_READTHISFIRST2', '_JOMRES_STOP_READTHISFIRST2', false, false).'">';
			}

			if (!using_bootstrap()) {
				$class = 'ui-state-highlight';
			} else {
				$class = 'alert';
			}

			echo '
        <div style="text-align: center">
		    <div class="modal-body">
		        <div class="alert">
		            <h1><i class="fa fa-hand-paper-o" aria-hidden="true" style="font-size: 300%;"></i><h1/>
	            	<h1 class="page-header">'.jr_gettext('_JOMRES_STOP_READTHISFIRST1', '_JOMRES_STOP_READTHISFIRST1', false, false).'</h1>
	            	<h3>'.jr_gettext('_JOMRES_STOP_READTHISFIRST3', '_JOMRES_STOP_READTHISFIRST3', false, false).'</h3>
	            	<p>'.jr_gettext('_JOMRES_STOP_READTHISFIRST4', '_JOMRES_STOP_READTHISFIRST4', false, false).'</p>
	            </div>
	        </div>
       </div>
		';
			if (!$manual_trigger) {
				if (using_bootstrap()) {
					echo '<script>jomresJquery(document).ready(function() {jomresJquery(\'#first_run\').modal()});</script>';
				} else {
					echo '<script>jomresJquery( "#first_run" ).dialog({width:1024,modal:true});</script>';
				}
			}

			return true;
		} else {
			return false;
		}

	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *
	 */
	function getting_started()
	{

		echo '<div id = "first_run" title="Welcome to Jomres, Joomla\'s favourite hotel booking system">';

		if (!using_bootstrap()) {
			$class = 'ui-widget-content ui-corner-all';
			$style = 'margin-left:5px;margin-right:5px;';
		} else {
			$class = '';
			$style = '';
		}

		echo '

		<div class="' .$class.'" style="width:100%;">
		<div style="' .$style.'">
		<h3 class="page-header">Introduction.</h3>
		<p>Firstly, a basic installation of Jomres, with absolutely no plugins, is a working booking extension for Joomla and Wordpress. Whilst this is sufficient for a small site with just one property you may quickly find that you want to add more functionality and features to the system, taking it from a simple booking system to a full online booking portal where you can gain revenue from listing properties on your site, earning commission, or taking booking deposits online.</p>
		<p>Unless you want to build the code yourself, the best source of additional functionality is usually the <a href="' .JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins" target="_blank">Jomres Plugin Manager.</a> There are over <a href="https://www.jomres.net/jomres-plugins" target="_blank">160 plugins available</a> that extend the system and I\'ve worked hard to make the Plugin Manager extremely easy to use.</p>
		<h3 class="page-header">First steps.</h3>
		<p>Now that you\'ve seen some of the extra features on offer, you are ready to start setting up your site. To begin with, I\'d like you to ignore the "administrator" area of Jomres altogether for the time being, a new installation of Jomres includes sample data and for now you should experiment with setting up your default property.
		<ol>
			<li>When Jomres is installed, the first thing it does is configure your "admin" user to be a Super Property Manager. Super Managers have super powers unavailable to normal Property Managers. If your administrator user is a different user you might need to add them as a Super Property Manager via the <a href="' .JOMRES_SITEPAGE_URL_ADMIN.'&task=list_users" target="_blank">Property Managers</a> page. View it now just to check that your administrator user has a purple badge. If they haven\'t you will need to edit their record to ensure that they are super managers before you log into the frontend of your site. Note : Super property managers do not need to be associated with a specific property, they have access to all properties.</li>
			';
		if (this_cms_is_joomla()) {
			echo '<li>Next, add Jomres to your <a href="'.get_showtime('live_site').'/administrator/index.php?option=com_menus&view=items&menutype=mainmenu" target="_blank"> Main Menu</a>, as you would any other Joomla extension.</li>';
			echo '<li>Now go to the <a href="'.get_showtime('live_site').'/index.php" target="_blank">public pages</a> of your site and log in as your admin user. When you click on the <a href="'.get_showtime('live_site').'/index.php?option=com_jomres" target="_blank">Main Menu link to Jomres</a>, as you are logged in, you will see the <a href="http://www.jomres.net/manual/property-managers-guide/38-your-toolbar" target="_blank">Property Manager\'s toolbar</a>.</li>';
		} elseif (this_cms_is_wordpress()) {
			echo '<li>Next you want to make sure that Jomres pages are visible to site visitors, so <strong>you will need to add the <i>[jomres:en-US]</i> shortcode to <a href="'.get_showtime('live_site').'/wp-admin/post-new.php?post_type=page"  target="_blank">a new page</strong></a> to display your Jomres pages in the public area of Wordpress. Call it something like "Bookings".</li>';

			echo '<li>In the next step, you will need to add the newly created page to your main menu. In the WordPress sidebar click Appearance > Menus, in the <i>"Add menu items"</i> panel you should see the most recently added pages, including the new Bookings page. Click the checkbox next to it, and then click "Add to menu". Save the menu. </li>';

			echo '<li>Now go to the <a href="'.get_showtime('live_site').'/index.php" target="_blank">public pages</a> of your site whhile you are logged in as "admin". When you visit the post you added the shortcode to, as you are logged in, you will see the <a href="http://www.jomres.net/manual/property-managers-guide/38-your-toolbar" target="_blank">Property Manager\'s toolbar</a>. </li>';
		}

		echo '<li>You are now ready to start configuring your property, and adding new properties, if you need more than one. If you only need one property I advise you to visit <a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=site_settings" target="_blank">Site Configuration</a> and in the "Portal functionality" tab set the option <i>"Is this a single property installation?"</i> to Yes. </li>
		</ol>
		</p>
		<h3 class="page-header">Further reading.</h3>
		<p>Jomres is fully documented in the <a href="http://www.jomres.net/manual/" target="_blank">online manual</a>. There is a wealth of information here, including the <a href="http://www.jomres.net/manual/site-managers-guide/15-core-plugins"  target="_blank">plugin list</a>, but a good place to begin at is the <a href="http://www.jomres.net/manual/site-managers-guide/14-getting-started" target="_blank">Getting Started</a> page.</p>
		<p>To learn how to configure your property(s) you should take a look at the <a href="http://www.jomres.net/manual/property-managers-guide" target="_blank">Property Manager\'s guide.</a> This section of the manual is aimed at Property Managers themselves, and discusses among other things the <a href="http://www.jomres.net/manual/property-managers-guide/38-your-toolbar" target="_blank">Manager\'s Toolbar.</a> Note that the toolbar shows the manager\'s toolbar with all of the most commonly installed plugin\'s buttons, until you\'ve installed the relevant plugins your toolbar will not have as many icons.</p>
		</div></div></div>
		';



	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Asks whether the Jomres plugin shop is available or not. Not currently used.
	 */
	function query_shop($request = '')
	{
		if ($request == '') {
			echo 'Request not set';
			exit;
		}

		if (!function_exists('curl_init')) {
			return 'Error, CURL not enabled on this server.';
		} else {
			$url = 'http://license-server.jomres.net/shop/index.php?'.$request;
			logging::log_message('Starting curl call to '.$url, 'Curl', 'DEBUG');
			$logging_time_start = microtime(true);

			$curl_handle = curl_init();
			curl_setopt($curl_handle, CURLOPT_URL, $url);
			curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
			curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Jomres');
			curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec($curl_handle);
			curl_close($curl_handle);

			$logging_time_end = microtime(true);
			$logging_time = $logging_time_end - $logging_time_start;
			logging::log_message('Curl call took '.$logging_time.' seconds ', 'Curl', 'DEBUG');

			return json_decode($response);
		}
	}

// Adapted from http://uk.php.net/manual/en/function.time.php#89415
	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Used by list properties script to format the "last booking" output message.
	 */
	function jomres_nicetime($date)
	{
		if (empty($date)) {
			return '';
		}
		$periods = array(jr_gettext('_JOMRES_DATEPERIOD_SECOND', '_JOMRES_DATEPERIOD_SECOND', false, false), jr_gettext('_JOMRES_DATEPERIOD_MINUTE', '_JOMRES_DATEPERIOD_MINUTE', false, false), jr_gettext('_JOMRES_DATEPERIOD_HOUR', '_JOMRES_DATEPERIOD_HOUR', false, false), jr_gettext('_JOMRES_DATEPERIOD_DAY', '_JOMRES_DATEPERIOD_DAY', false, false), jr_gettext('_JOMRES_DATEPERIOD_WEEK', '_JOMRES_DATEPERIOD_WEEK', false, false), jr_gettext('_JOMRES_DATEPERIOD_MONTH', '_JOMRES_DATEPERIOD_MONTH', false, false), jr_gettext('_JOMRES_DATEPERIOD_YEAR', '_JOMRES_DATEPERIOD_YEAR', false, false), jr_gettext('_JOMRES_DATEPERIOD_DECADE', '_JOMRES_DATEPERIOD_DECADE', false, false));
		$lengths = array('60', '60', '24', '7', '4.35', '12', '10');

		$now = time();
		$unix_date = strtotime($date);
		// check validity of date
		if (empty($unix_date)) {
			return '';
		}

		// is it future date or past date
		if ($now > $unix_date) {
			$difference = $now - $unix_date;
			$tense = jr_gettext('_JOMRES_DATEPERIOD_AGO', '_JOMRES_DATEPERIOD_AGO', false, false);
		} else {
			$difference = $unix_date - $now;
			$tense = jr_gettext('_JOMRES_DATEPERIOD_FROMNOW', '_JOMRES_DATEPERIOD_FROMNOW', false, false);
		}

		$n = count($lengths) - 1;
		for ($j = 0; $difference >= $lengths[ $j ] && $j < $n; ++$j) {
			$difference /= $lengths[ $j ];
		}

		$difference = round($difference);

		if ($difference != 1) {
			$periods[ $j ] .= jr_gettext('_JOMRES_DATEPERIOD_S', '_JOMRES_DATEPERIOD_S');
		}

		return "$difference $periods[$j] {$tense}";
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Geolocation class uses function to get the user's IP number.
	 *
	 * @todo Duplicated function
	 *
	 */
	function get_remote_ip_number()
	{
		$ip = jomres_get_client_ip();
		$bang = explode('.', $ip);
		if (count($bang) != 4) {
			return '0.0.0.0';
		}

		return (int) $bang[ 0 ].'.'.(int) $bang[ 1 ].'.'.(int) $bang[ 2 ].'.'.(int) $bang[ 3 ];
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Pulls the booking number from session data.
	 */
	function get_booking_number()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		return $tmpBookingHandler->tmpbooking[ 'booking_number' ];
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Figure out what the current property uid should be.
	 */
	function detect_property_uid()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$property_uid = 0;

		$defaultProperty = getDefaultProperty();

		$property_uid = (int)jomresGetParam($_REQUEST, 'selectedProperty', 0);

		if ($property_uid == 0) {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}

		// Finding the property uid
		$numberOfPropertiesInSystem = (int) get_showtime('numberOfPropertiesInSystem');
		$all_properties_in_system = get_showtime('all_properties_in_system');

		if ($numberOfPropertiesInSystem == 1) {
			$property_uid = $all_properties_in_system[ 0 ];
		}

		//TODO remove this, but too much stuff depends on it at the moment..
		if ($thisJRUser->userIsManager && !jomres_cmsspecific_areweinadminarea()) {
			$property_uid = $defaultProperty;
		}

		if (get_showtime('task') == 'showRoomDetails') {
			$roomUid = (int) jomresGetParam($_REQUEST, 'roomUid', 0);

			$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
			$property_uid = $basic_room_details->get_property_uid_for_room_uid($roomUid);
		}

		if ((get_showtime('task') == 'handlereq' || get_showtime('task') == 'completebk' || get_showtime('task') == 'processpayment') && !$thisJRUser->userIsManager) {
			$property_uid = (int) $tmpBookingHandler->getBookingFieldVal('property_uid');
		}

		// Payment specific stuff.
		if (get_showtime('task') == 'completebk' || get_showtime('task') == 'processpayment' || get_showtime('task') == 'confirmbooking') {
			if (isset($_POST[ 'specialReqs' ])) {
				$specialReqs = getEscaped(jomresGetParam($_POST, 'specialReqs', ''));
				$tmpBookingHandler->updateBookingField('error_log', $specialReqs);
			}
		}

		// For property uids that don't exist
		$all_property_uids = get_showtime('all_properties_in_system');
		if (!in_array($property_uid, $all_property_uids)) {
			$property_uid = 0;
		}

		// Finish finding the property uid
		return $property_uid;
	}

//
	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Return "NA" if no gateway is configured for this property.
	 *
	 * The calling script will process payment without attempting to call a gateway (IE simply enter the booking)
	 */
	function jomres_validate_gateway_plugin()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($thisJRUser->userIsManager  && $jrConfig[ 'development_production' ] == 'production' ) {
			return 'NA';
		}

		$installed_gateway_plugins = array();
		foreach ($MiniComponents->registeredClasses['00509'] as $eventName => $e ) {
			$installed_gateway_plugins[] = $eventName;
		}
		// No gateways are installed
		if ( empty($installed_gateway_plugins) ) {
			return 'NA';
		}

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$property_uid = get_showtime('property_uid');

		$mrConfig = getPropertySpecificSettings($property_uid);

		if ($mrConfig[ 'requireApproval' ] == '1' && !$tmpBookingHandler->tmpbooking[ 'secret_key_payment' ]) {
			return "NA";
		}

		if ( !isset($_REQUEST[ 'plugin' ]) && isset($tmpBookingHandler->tmpbooking[ 'gateway' ]) ) {
			$plugin = $tmpBookingHandler->tmpbooking[ 'gateway' ];
		}
		else {
			$plugin = jomresGetParam($_REQUEST, 'plugin', '');
			$tmpBookingHandler->tmpbooking[ 'gateway' ] = $plugin;
		}

		jr_import("gateway_plugin_settings");
		$plugin_settings = new gateway_plugin_settings();
		$plugin_settings->get_settings_for_property_uid( $property_uid );

		if (!isset($plugin_settings->gateway_settings[$plugin]) ) { // Gateway has no settings
			return 'NA';
		}

		if (!$plugin_settings->gateway_settings[$plugin]['active']) {
			gateway_log("Error, gateway passed either doesn't exist, or is not active, probable hack attempt");
			trigger_error("Error, gateway passed either doesn't exist, or is not active, probable hack attempt", E_USER_ERROR);
			die();
		}

		return $plugin;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Generates anchors for javascript tabs.
	 *
	 * Commented out code that tries to make the anchor of the tabs based on the name of the tab. Too many non-latin users were reporting problems with tabs.
	 * Instead we'll just use the random string generator to create the anchor.
	 *
	 */
	function jomres_generate_tab_anchor($string)
	{
		// Commented out code that tries to make the anchor of the tabs based on the name of the tab. Too many non-latin users were reporting problems with tabs.
		// Instead we'll just use the random string generator to create the anchor.
		/* 	$unwanted = array("'","\"",',');
	$string = str_replace($unwanted,"-",$string);
	if (function_exists('filter_var'))
		$anchor = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS,FILTER_FLAG_STRIP_HIGH);
	else
		$anchor = getEscaped($string);

	$anchor = str_replace(" ","_",$anchor);
	if (strlen($anchor)==0) // Give up trying to filter out unwanted chars, instead we'll just replace any spaces and return the string
		$anchor = str_replace(" ","_",$string); */

		$anchor = generateJomresRandomString(15);

		return $anchor;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Return the "showtime" singleton.
	 */
	function get_showtime($setting)
	{
		$showtime = jomres_singleton_abstract::getInstance('showtime');

		return $showtime->$setting;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Set a showtime variable to X.
	 */
	function set_showtime($setting, $value)
	{
		$showtime = jomres_singleton_abstract::getInstance('showtime');

		if (!$showtime->$setting = $value) {
			return false;
		}

		return true;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Find settings for a given plugin.
	 *
	 * Typically used by gateways.
	 */
	function get_plugin_settings($plugin, $prop_id = 0)
	{
		// This function is exclusively for gateway plugins
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if (!isset($MiniComponents->registeredClasses['00509'][$plugin])) {
			return false; // Gateway isn´t installed
		}
		if (isset($MiniComponents->registeredClasses['00509'][$plugin]) && count($MiniComponents->registeredClasses['00509'][$plugin]) == 0) { // Let's check to see that the gateway hasn't been uninstalled. It's possible that the settings exist, but the gateway code itself doesn't.
			return false; // Can't "throw" an error here, any failure needs to be handled by the calling function/method
		}

		$settingArray = array();
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if (jomres_cmsspecific_areweinadminarea()) {
			$property_uid = 0;
		} else {
			if ($thisJRUser->userIsManager) {
				$property_uid = (int) getDefaultProperty();
			} else {
				if ($prop_id == 0) {
					$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
					$property_uid = (int) $tmpBookingHandler->getBookingPropertyId();
				} else {
					$property_uid = (int) $prop_id;
				}
			}
		}

		jr_import("gateway_plugin_settings");
		$plugin_settings = new gateway_plugin_settings();
		$plugin_settings->get_settings_for_property_uid( $property_uid );


		return $plugin_settings->gateway_settings[$plugin];
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Imports a class JIT as found in the classes registry.
	 *
	 * If not found will report a backtrace.
	 */
	function jr_import($class)
	{
		if (class_exists($class)) {
			return true;
		}

		//first check custom code dir
		if (file_exists(JOMRES_REMOTEPLUGINS_ABSPATH.'custom_code'.JRDS.$class.'.class.php')) {
			require_once JOMRES_REMOTEPLUGINS_ABSPATH.'custom_code'.JRDS.$class.'.class.php';

			return true;
		}

		global $classes;

		//check core and remote plugins dirs
		if (isset($classes[$class])) {
			require_once $classes[$class].$class.'.class.php';
			return true;
		}

		//last place to check is jomres core classes dir
		if (file_exists(JOMRES_CLASSES_ABSPATH.$class.'.class.php')) {
			require_once JOMRES_CLASSES_ABSPATH.$class.'.class.php';
			return true;
		}

		//class doesn`t exist so we`ll echo a message and exit
		echo 'Error, class '.$class." doesn't exist.";
		$trace = '';
		$backtrace = debug_backtrace();
		$trace = "<br/> File ".$backtrace[1]['file']." Line ".$backtrace[1]['line']. " Function ".$backtrace[1]['function']."<br/> ";
		$trace .= " File ".$backtrace[2]['file']." Line ".$backtrace[2]['line']. " Function ".$backtrace[2]['function']."<br/> ";
		$trace .= " File ".$backtrace[3]['file']." Line ".$backtrace[3]['line']. " Function ".$backtrace[3]['function']."<br/> ";
		echo $trace;
		exit;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Integration script uses this to see if we need to build registry files.
	 */
	function search_core_and_remote_dirs_for_classfiles()
	{
		global $classes;

		if (defined('AUTO_UPGRADE')) {
			return;
		}
		$plugin_paths = array();

		$core_plugins_directory = JOMRES_COREPLUGINS_ABSPATH;
		$remote_plugin_directory = JOMRES_REMOTEPLUGINS_ABSPATH;
		$classes_tmp_file = JOMRES_TEMP_ABSPATH.'registry_classes.php';

		if (is_dir($core_plugins_directory)) {
			$d = @dir($core_plugins_directory);
			while (false !== ($entry = $d->read())) {
				if (substr($entry, 0, 1) != '.') {
					$plugin_paths[ ] = $core_plugins_directory.$entry.JRDS;
				}
			}
		}

		if (is_dir($remote_plugin_directory)) {
			$d = @dir($remote_plugin_directory);
			while (false !== ($entry = $d->read())) {
				if (substr($entry, 0, 1) != '.') {
					$plugin_paths[ ] = $remote_plugin_directory.$entry.JRDS;
				}
			}
		}

		foreach ($plugin_paths as $directory) {
			$d = @dir($directory);
			if ($d) {
				while (false !== ($entry = $d->read())) {
					$filename = $entry;
					if (substr($entry, 0, 1) != '.') {
						if (strstr($entry, '.class.php')) {
							if (strlen($filename) > 8) {
								$strippedName = str_replace('.', '', $filename);
								$strippedName = substr($strippedName, 0, -8);
							} else {
								$strippedName = $filename;
							}
							$classfileEventPoint = substr($strippedName, 1, 5);
							if (!is_numeric($classfileEventPoint)) {
								$classes[ $strippedName ] = $directory;
							}
						}
					}
				}
				$d->close();
			}
		}

		if (!file_put_contents($classes_tmp_file,
			'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$classes = ' .var_export($classes, true).';
')) {
			trigger_error('ERROR: '.$classes_tmp_file.' can`t be saved. Please solve the permission problem and try again.', E_USER_ERROR);
			exit;
		}

		return $classes;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * utility to clean up urls
	 */
	function jomresValidateUrl($url)
	{
		$url = str_replace('&amp;', '&', $url);
		$url = str_replace('&', '&amp;', $url);

		return $url;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * CMS Specific functions use this to find settings for modules.
	 */
	function getIntegratedSearchModuleVals()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$vals = array();
		$vals[ 'useCols' ] = $jrConfig[ 'integratedSearch_useCols' ];
		$vals[ 'featurecols' ] = $jrConfig[ 'integratedSearch_featurecols' ];
		$vals[ 'geosearchtype' ] = $jrConfig[ 'integratedSearch_geosearchtype' ];
		$vals[ 'propertyname' ] = $jrConfig[ 'integratedSearch_propertyname' ];
		$vals[ 'ptype' ] = $jrConfig[ 'integratedSearch_ptype' ];
		$vals[ 'room_type' ] = $jrConfig[ 'integratedSearch_room_type' ];

		$vals[ 'description' ] = $jrConfig[ 'integratedSearch_description' ];
		$vals[ 'availability' ] = $jrConfig[ 'integratedSearch_availability' ];
		$vals[ 'geosearch_dropdown' ] = $jrConfig[ 'integratedSearch_geosearchtype_dropdown' ];
		$vals[ 'propertyname_dropdown' ] = $jrConfig[ 'integratedSearch_propertyname_dropdown' ];
		$vals[ 'ptype_dropdown' ] = $jrConfig[ 'integratedSearch_ptype_dropdown' ];
		$vals[ 'room_type_dropdown' ] = $jrConfig[ 'integratedSearch_room_type_dropdown' ];
		$vals[ 'features' ] = $jrConfig[ 'integratedSearch_features' ];
		$vals[ 'features_dropdown' ] = $jrConfig[ 'integratedSearch_features_dropdown' ];
		$vals[ 'priceranges' ] = $jrConfig[ 'integratedSearch_priceranges' ];
		$vals[ 'pricerange_increments' ] = $jrConfig[ 'integratedSearch_pricerange_increments' ];
		$vals[ 'selectcombo' ] = $jrConfig[ 'integratedSearch_selectcombo' ];

		$vals[ 'guestnumber' ] = $jrConfig[ 'integratedSearch_guestnumber' ];
		$vals[ 'stars' ] = $jrConfig[ 'integratedSearch_stars' ];

		return $vals;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Get the month name, set editable to true to show the editing mode option.
	 */
	function getThisMonthName($monthNumber, $editable = true)
	{
		$monthNumber = intval($monthNumber - 1);
		$mName = jr_gettext('_JRPORTAL_MONTHS_LONG_'.$monthNumber, '_JRPORTAL_MONTHS_LONG_'.$monthNumber, $editable);
		$thisMonthName = jr_gettext('_JOMRES_CUSTOMTEXT_'.$monthNumber, $mName, $editable);

		return $thisMonthName;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Module/Plugin/Widget installation functionality that is called when using the third party installer.
	 */
	function install_external_plugin($plugin_name, $plugin_type, $mambot_type = '', $params = '', $remote_plugin_component_folder = 'c', $remote_plugin_administrator_folder = 'a', $remote_plugin_module_folder = 'm', $remote_plugin_mambot_folder = 'b')
	{
		switch ($plugin_type) {
			case 'widget': // Wordpress widgets
				if (file_exists(JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php')) {
					$widget_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS;
				} else {
					$widget_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS;
				}

				$widget_target = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'wp-content'.JRDS.'plugins'.JRDS.$plugin_name;

				if (!test_and_make_directory($widget_target)) {
					error_logging('Error, unable to write to '.$widget_target.' Please ensure that the parent path is writable by the web server ');

					return false;
				}

				emptyDir($widget_target);

				$plugin_info_file = $widget_source.'plugin_info.php';
				$plugin_info_file_temp = JOMRES_SYSTEMLOG_PATH.'plugin_info.php';
				copy($plugin_info_file, $plugin_info_file_temp);

				$widget_move_result = dirmv($widget_source, $widget_target, true, $funcloc = '/');

				if ($widget_move_result[ 'success' ]) {
					copy($plugin_info_file_temp, $plugin_info_file);
					unlink($plugin_info_file_temp);

					return true;
				} else {
					return false;
				}

				break;
			case 'module':
				$module_full_name = 'mod_'.$plugin_name;
				if (file_exists(JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php')) {
					$module_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.$remote_plugin_module_folder.JRDS;
					$module_xml_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'xml'.JRDS.'1.5';
				} else {
					$module_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS.$remote_plugin_module_folder.JRDS;
					$module_xml_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS.'xml'.JRDS.'1.5';
				}

				$module_target = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS.$module_full_name;
				if (!test_and_make_directory($module_target)) {
					error_logging('Error, unable to write to '.$module_target.' Please ensure that the parent path is writable by the web server ');

					return false;
				}

				emptyDir($module_target);

				//echo "Moving contents of ".$module_xml_source." to ".$module_target."<br/>";
				$module_xml_move_result = dirmv($module_xml_source, $module_target, true, $funcloc = JRDS);
				$module_move_result = dirmv($module_source, $module_target, true, $funcloc = JRDS);

				if ($module_move_result[ 'success' ] && $module_xml_move_result[ 'success' ]) {
					return true;
				} else {
					return false;
				}

				break;
			case 'mambot':
				//$mambot_full_name=$plugin_name;

				if (file_exists(JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php')) {
					$mambot_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS;
					$mambot_xml_source = JOMRES_COREPLUGINS_ABSPATH.$plugin_name;
				} else {
					$mambot_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name.JRDS.$remote_plugin_mambot_folder.JRDS;
					$mambot_xml_source = JOMRES_REMOTEPLUGINS_ABSPATH.$plugin_name;
				}

				$mambot_target = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'plugins'.JRDS.$mambot_type.JRDS.$plugin_name;

				if (!test_and_make_directory($mambot_target)) {
					error_logging('Error, unable to write to '.$mambot_target.' Please ensure that the parent path is writable by the web server ');

					return false;
				}

				emptyDir($mambot_target);

				$mambot_xml_move_result = dirmv($mambot_xml_source, $mambot_target, true, $funcloc = '/');
				$mambot_move_result = dirmv($mambot_source, $mambot_target, true, '/');

				if ($mambot_xml_move_result[ 'success' ] && $mambot_move_result[ 'success' ]) {
					copy($mambot_target.JRDS.'plugin_info.php', JOMRES_COREPLUGINS_ABSPATH.$plugin_name.JRDS.'plugin_info.php');
					unlink($mambot_target.JRDS.'plugin_info.php');
					@unlink($mambot_target.JRDS.'plugin_install.php');

					return true;
				} else {
					return false;
				}

				break;
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Make a directory.
	 */
	function test_and_make_directory($dir)
	{
		if (!is_dir($dir)) {
			if (!@mkdir($dir)) {
				echo 'Error, unable to make folder '.$dir." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";

				return false;
			} else {
				return true;
			}
		} else {
			if (!is_writable($dir)) {
				return false;
			} else {
				return true;
			}
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * An alternative file_get_contents function because IIRC one version of PHP had problems with this function not existing.
	 */
	if (!function_exists('file_get_contents')) {
		function file_get_contents($filename, $incpath = false, $resource_context = null)
		{
			if (false === $fh = fopen($filename, 'rb', $incpath)) {
				trigger_error('file_get_contents() failed to open stream: No such file or directory', E_USER_WARNING);

				return false;
			}
			clearstatcache();
			if ($fsize == @filesize($filename)) {
				$data = fread($fh, $fsize);
			} else {
				$data = '';
				while (!feof($fh)) {
					$data .= fread($fh, 8192);
				}
			}
			fclose($fh);

			return $data;
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Delete all files and subdirectories in a directory.
	 */
	function emptyDir($dir, $root = null)
	{
		if ($root == null) {
			$root = $dir;
		}
		if (!$dh = @opendir($dir)) {
			return false;
		}
		while (false !== ($obj = readdir($dh))) {
			if ($obj == '.' || $obj == '..') {
				continue;
			}
			if (!@unlink($dir.'/'.$obj)) {
				emptyDir($dir.'/'.$obj, $root);
			}
		}
		closedir($dh);
		if ($dir != $root) {
			@rmdir($dir);
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Uninstall a Jomres plugin
	 */
	function dropPlugin($pluginName)
	{
		$pluginPath = JOMRES_REMOTEPLUGINS_ABSPATH.$pluginName;
		if (file_exists($pluginPath.JRDS.'plugin_uninstall.php')) {
			define('JOMRES_INSTALLER', 1);
			include $pluginPath.JRDS.'plugin_uninstall.php';
		}
		emptyDir($pluginPath);
		if (is_dir($pluginPath)) {
			rmdir($pluginPath);
			return true;
		} else {
			$pluginPath = JOMRES_COREPLUGINS_ABSPATH.$pluginName;
			if (file_exists($pluginPath.JRDS.'plugin_uninstall.php')) {
				define('JOMRES_INSTALLER', 1);
				include $pluginPath.JRDS.'plugin_uninstall.php';
			}
			if (is_dir($pluginPath)) {
				emptyDir($pluginPath);
				if (rmdir($pluginPath)) {
					return true;
				}
			}

		}

		return false;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Send a query to one of two Jomres servers, either the plugin server or the updates server.
	 *
	 *  Returns the response, un-furtled with (i.e. not json_decoded/unserialized). This functionality was originally devised back in 2009, so significantly pre-dates REST APIs etc.
	 */
	function queryUpdateServer($script, $queryString, $serverType = 'plugin')
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($serverType == 'plugin') {
			$updateServer = 'http://plugins.jomres4.net';
		} else {
			$updateServer = 'http://updates.jomres4.net';
		}

		if (strlen($script) == 0) {
			$script = 'index.php';
		}

		$response = '';

		$query_string = $script.'?'.$queryString.'&jomresver='.$jrConfig[ 'version' ].'&hostname='.get_showtime('live_site');

		try {
			$client = new GuzzleHttp\Client([
				'base_uri' => $updateServer
			]);

			logging::log_message('Starting guzzle call to '.$updateServer.'/'.$query_string, 'Guzzle', 'DEBUG');

			$response = $client->request('GET', $query_string)->getBody()->getContents();
		}
		catch (Exception $e) {
			$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
			$jomres_user_feedback->construct_message(array('message'=>'Could not query the updates server', 'css_class'=>'alert-danger alert-error'));
		}

		return $response;
	}

// http://www.php.net/manual/en/function.rename.php#61152
	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Moves the contents of source dir to destination dir
	 */
	function dircopy($source, $dest, $overwrite = true, $funcloc = null)
	{
		global $copiedFileLog;
		$debugging = true;
		$copiedFileLog = array();
		//$success=true;
		/*
		if(is_null($funcloc))
			{
			$dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
			$funcloc = '/';
			}
		*/
		if (!is_dir($dest.$funcloc)) {
			mkdir($dest.$funcloc);
		} // make subdirectory before subdirectory is copied
		//echo "Opening " . $source . $funcloc."<br/>";
		if ($handle = opendir($source.$funcloc)) { // if the folder exploration is sucsessful, continue
			//echo "Opened ". $source . $funcloc."<br/>";
			while (false !== ($file = readdir($handle))) { // as long as storing the next file to $file is successful, continue
				if ($file != '.' && $file != '..') {
					$path = $source.$funcloc.$file;
					$path2 = $dest.$funcloc.$file;

					if (is_file($path)) {
						if (!@copy($path, $path2)) {
							$message = 'File '.$path.' could not be moved to '.$path2.', likely a permissions problem.';

							return array('success' => false, 'errormsg' => $message);
						}
					} elseif (is_dir($path)) {
						dircopy($source, $dest, $overwrite, $funcloc.$file.JRDS); //recurse!
						//rmdir( $path);
					}
				}
			}
			closedir($handle);
		}
		if ($debugging) {
			foreach ($copiedFileLog as $m) {
				echo $m.'<br/>';
			}
		}

		return array('success' => true, 'errormsg' => '');
		//echo "Finished upgrade <br/>";
	} // end of dircopy()

// http://www.php.net/manual/en/function.rename.php#61152
	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Moves the contents of source dir to destination dir
	 */
	function dirmv($source, $dest, $overwrite = true, $funcloc = JRDS)
	{
		global $movedFileLog;
		$debugging = false;
		$movedFileLog = array();
		//$success=true;
		/*
		if(is_null($funcloc))
			{
			$dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
			$funcloc = '/';
			}
		*/
		if (!is_dir($dest.$funcloc)) {
			mkdir($dest.$funcloc);
		} // make subdirectory before subdirectory is copied
		//echo "Opening " . $source . $funcloc."<br/>";
		if ($handle = opendir($source.$funcloc)) { // if the folder exploration is sucsessful, continue
			//echo "Opened ". $source . $funcloc."<br/>";
			while (false !== ($file = readdir($handle))) { // as long as storing the next file to $file is successful, continue
				if ($file != '.' && $file != '..') {
					$path = $source.$funcloc.$file;
					$path2 = $dest.$funcloc.$file;

					if (is_file($path)) {
						if (!is_file($path2)) {
							if (!@rename($path, $path2)) {
								if (copy($oldfile, $newfile)) {
									unlink($oldfile);
								} else {
									echo 'File ('.$path.') could not be moved to  '.$path2.', likely a permissions problem.';

									return array('success' => false, 'errormsg' => 'File ('.$path.') could not be moved, likely a permissions problem.');
								}
							}
						} elseif ($overwrite) {
							if (!@unlink($path2)) {
								echo 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>';

								return array('success' => false, 'errormsg' => 'Unable to overwrite file ("'.$path2.'"), likely to be a permissions problem.<br/>');
							} else {
								if (!@rename($path, $path2)) {
									echo '<font color="red">File ('.$path.') could not be moved while overwritting, likely a permissions problem.</font><br/>';

									return array('success' => false, 'errormsg' => 'File ('.$path.') could not be moved while overwritting, likely a permissions problem.<br/>');
								} else {
									$movedFileLog[ ] = 'Moved '.$path.'<br/> to '.$path2.'<br/>';
								}
							}
						} else {
							echo 'Not allowed to overwrite'.$path2.'<br/>'; // Not technically an error message, just advisory
						}
					} elseif (is_dir($path)) {
						dirmv($source, $dest, $overwrite, $funcloc.$file.JRDS); //recurse!
						rmdir($path);
					}
				}
			}
			closedir($handle);
		}
		if ($debugging) {
			foreach ($movedFileLog as $m) {
				echo $m.'<br/>';
			}
		}

		return array('success' => true, 'errormsg' => '');
		//echo "Finished upgrade <br/>";
	} // end of dirmv()

	/**
	 * @package Jomres\Core\Functions
	 *
	 * Allows us to work independantly of Joomla, Wordpress or Mambo's emailers
	 */
	function jomresMailer($from, $jomresConfig_sitename, $to, $subject, $body, $mode = 1, $attachments = array(), $debugging = true)
	{
		if ($from == '') {
			$from = get_showtime('mailfrom');
		}

		$from = str_replace( "&#64;" , "=" , $from );
		$to = str_replace( "&#64;" , "=" , $to );

		$to = str_replace ("&#38;#38;#43;" , "+" , $to);
		$to = str_replace ("&#38;#43;" , "+" , $to);
		$to = str_replace ("&#43;" , "+" , $to);

		$from = str_replace ("&#38;#38;#43;" , "+" , $from);
		$from = str_replace ("&#38;#43;" , "+" , $from);
		$from = str_replace ("&#43;" , "+" , $from);

		logging::log_message('Sending email from '.$from.' to '.$to.' subject '.$subject, 'Mailer');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig[ 'send_emails' ])) {
			$jrConfig[ 'send_emails' ] = 1;
		}

		if ($jrConfig[ 'send_emails' ] == 0) {
			return;
		}

		$emails = array();
		if (is_array($to)) {
			foreach ($to as $t) {
				if (strlen($t) > 0) {
					$t = str_replace( "&#64;" , "@" , $t );
					$emails[ ] = trim($t);
				}
			}
		} else {
			if (strpos($to, ',')) { // we've been passed a comma separated list of emails, explode them then parse them
				$addys = explode(',', $to);
				foreach ($addys as $t) {
					if (strlen($t) > 0) {
						$t = str_replace( "&#64;" , "@" , $t );
						$emails[ ] = trim($t);
					}
				}
			} else {
				if (strlen($to) > 0) {
					$to = str_replace( "&#64;" , "@" , $to );
					$emails[ ] = trim($to);
				}
			}
		}

		try {
			if (!isset($GLOBALS['debug'])) {
				$GLOBALS['debug'] = '';
			}

			$mail = new PHPMailer\PHPMailer\PHPMailer(true);

			$mail->CharSet = 'UTF-8';

			if ($jrConfig[ 'alternate_smtp_use_settings' ] == '1') {
				$mail->Mailer = 'smtp';
				$mail->IsSMTP(); // telling the class to use SMTP
				$mail->Host = trim($jrConfig[ 'alternate_smtp_host' ]);
				$mail->Port = trim($jrConfig[ 'alternate_smtp_port' ]);
				$mail->SMTPSecure = trim($jrConfig[ 'alternate_smtp_protocol' ]);
				$mail->SMTPAuth = trim($jrConfig[ 'alternate_smtp_authentication' ]);
				$mail->Username = trim($jrConfig[ 'alternate_smtp_username' ]);
				$mail->Password = trim($jrConfig[ 'alternate_smtp_password' ]);
			} else {
				$mail->Mailer = trim(get_showtime('mailer'));

				if ($mail->Mailer == 'smtp') {
					$mail->IsSMTP(); // telling the class to use SMTP
				}

				$mail->Host = trim(get_showtime('smtphost'));
				$mail->Port = trim(get_showtime('smtpport'));
				$mail->SMTPSecure = trim(get_showtime('smtpsecure'));
				$mail->SMTPAuth = trim(get_showtime('smtpauth'));
				$mail->Username = trim(get_showtime('smtpuser'));
				$mail->Password = trim(get_showtime('smtppass'));
			}

			$mail->SMTPDebug = 2;
			$mail->Debugoutput = function ($str, $level) {
				$GLOBALS['debug'] .= "$level: $str<br/>";
			};

			$mail->Timeout = 300;

			$mail->SMTPAutoTLS = false;

			//not recommended, but it`s here for cases when certificates are self signed. Some hosting providers still do this..
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);

			if ($jrConfig[ 'default_from_address' ] != '') {
				$mail->setFrom($jrConfig[ 'default_from_address' ], $jomresConfig_sitename);
			} else {
				$mail->setFrom($from, $jomresConfig_sitename);
			}

			if ($mode == 1) {
				$mail->IsHTML(true);
			}

			$body = preg_replace("[\\\]", '', $body);

			//if ($mode == 1 && !strstr($body, '<meta http-equiv="Content-Type" content="text/html; utf-8" />')) {
			//$body = preg_replace( '@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $body );
			//}

			$mail->Body = $body;
			$mail->Subject = str_replace('&#39;', "'", $subject);
			//$mail->AltBody = strip_tags($body); //content for non-HTML email clients

			if (!empty($attachments)) {
				foreach ($attachments as $attachment) {
					switch ($attachment[ 'type' ]) { // Use a switch as it allows us to expand this later if we wish
						case 'image':
							$image_arr = explode(JRDS, $attachment[ 'image_path' ]);
							$image_name = $image_arr [ count($image_arr) - 1 ];
							$image_path = $attachment[ 'image_path' ];
							$cid = $attachment[ 'CID' ];
							$mail->addEmbeddedImage($image_path, $cid, $image_name);
							break;
						case 'pdf':
							$path = $attachment[ 'path' ];
							$name = $attachment[ 'filename' ];
							if (file_exists($path.$name)) {
								$result = $mail->addAttachment($path.$name, $name, 'base64', $type = 'application/pdf');
							}
							break;
						case 'string':
							$name = $attachment[ 'filename' ];
							$result = $mail->addStringAttachment($attachment[ 'string' ], $attachment[ 'filename' ]);
							break;
						default:
							$path = $attachment[ 'path' ];
							$name = $attachment[ 'filename' ];
							$type = $attachment['type'];
							$mail->addAttachment($path, $name, 'base64', $type);
							break;
					}
				}
			}

			foreach ($emails as $to) {
				if (strlen($to) > 0) {
					$mail->addAddress($to);
				}
			}
			$mail->Send();
			logging::log_message('Email sent successfully to '.$to, 'Mailer' , 'DEBUG' );
		} catch (PHPMailer\PHPMailer\Exception $e) {
			logging::log_message('Email failed sending to '.$to.' Message '.$GLOBALS['debug'], 'Mailer' , 'ERROR' );
			$GLOBALS['debug'] = '';

			return false;
		} catch (\Exception $e) {
			logging::log_message('Email failed sending to '.$to.' Message '.$e->getMessage(), 'Mailer' , 'ERROR' );
			//echo $e->getMessage(); //Boring error messages from anything else!
			return false;
		}

		return true;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns the guest details for a booking.
	 */
	function addBookingNote($contract_uid, $property_uid, $message)
	{
		if ($contract_uid > 0 && $property_uid > 0 && strlen($message) > 0) {
			$dt = date('Y-m-d H-i-s');
			$query = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('".(int) $contract_uid."','".RemoveXSS($message)."','$dt','".(int) $property_uid."')";
			$result = doInsertSql($query, '');

			$webhook_notification							   = new stdClass();
			$webhook_notification->webhook_event				= 'booking_note_saved';
			$webhook_notification->webhook_event_description	= 'Logs when booking notes are added/edited.';
			$webhook_notification->webhook_event_plugin		 = 'core';
			$webhook_notification->data						 = new stdClass();
			$webhook_notification->data->contract_uid		   = $contract_uid;
			$webhook_notification->data->property_uid		   = $property_uid;
			$webhook_notification->data->note_id				= $result;
			add_webhook_notification($webhook_notification);

			return $result;
		} else {
			return false;
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns the guest details for a booking.
	 */
	function getGuestDetailsForContract($contract_uid)
	{
		$query = 'SELECT rate_rules FROM #__jomres_contracts WHERE contract_uid = '.(int) $contract_uid.' LIMIT 1';
		$bookingData = doSelectSql($query);

		if (!empty($bookingData)) {
			foreach ($bookingData as $booking) {
				$guesttypeOutput = array();
				$varianceArray = explode(',', $booking->rate_rules);
				foreach ($varianceArray as $v) {
					$vDeets = explode('_', $v);
					if ($vDeets[ 0 ] == 'guesttype') {
						$vu = $vDeets[ 1 ];
						$vq = $vDeets[ 2 ];
						$vv = $vDeets[ 3 ];

						$query = "SELECT `type` FROM #__jomres_customertypes where id = '".(int) $vu."' LIMIT 1 ";
						$vtitle = doSelectSql($query, 1);
						$vtitle = jr_gettext('_JOMRES_CUSTOMTEXT_GUESTTYPE'.(int) $vu, $vtitle, false, false);
						$guesttypeOutput[ ] = array('title' => $vtitle, 'qty' => $vq, 'value' => $vv);
					}
				}
			}
			if (!empty($guesttypeOutput)) {
				sort($guesttypeOutput);
			}

			return $guesttypeOutput;
		} else {
			return array();
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Cconstruct data from session variables.
	 */
	function getCurrentBookingData($jomressession = '')
	{
		// Whilst this is a new function to construct data from session variables, we'll need to do a bunch of jiggery pokery with the nice simple data pulled from the sess vars so that the data is in a format that's understood by other functions that previously received data that had been pulled from the database

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$obj = new stdClass();
		$tempBookingDataList = array();
		$userDeets = $tmpBookingHandler->getGuestData();
		$guestDetails = new stdClass();
		foreach ($userDeets as $key => $val) {
			$guestDetails->$key = $val;
		}
		$bobj = new stdClass();
		$bookingDeets = $tmpBookingHandler->getBookingData();
		foreach ($bookingDeets as $key => $val) {
			$bobj->$key = $val;
		}
		$tempBookingDataList[ 0 ] = $bobj;
		$obj->guestDetails = $guestDetails;
		$obj->tempBookingDataList = $tempBookingDataList;
		$arr = array();
		$ob = $tempBookingDataList;
		if (!empty($ob)) {
			foreach ($ob as $k => $v) {
				$arr[ $k ] = $v;
			}
		}
		$obj->tempBookingDataArray = $arr;

		return $obj;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns the booking details from the tmpbooking session data.
	 */
	function gettempBookingdata()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$bookingDeets = $tmpBookingHandler->getBookingData();

		return $bookingDeets;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Inserts the property manager/property uid into the xref table.
	 *
	 * Receives a property uid array which is a list of the users current properties and updates the xref table to that effect
	 * If the $property_uids is empty then the manager will loose all access to properties, so ensure that $property_uids contains all of the current properties that the manager has rights to before passing data to this function.
	 */
	function updateManagerIdToPropertyXrefTable($cms_user_id = 0, $property_uids = array())
	{
		if ($cms_user_id == 0) {
			throw new Exception('Error: manager id not set');
		}

		$currentProperties = array();
		$propertiesToBeRemovedArray = array();
		$propertiesToBeAddedArray = array();

		$query = 'SELECT `property_uid` FROM #__jomres_managers_propertys_xref  WHERE `manager_id` = '.(int) $cms_user_id;
		$result = doSelectSql($query);

		if (!empty($result)) {
			foreach ($result as $r) {
				$currentProperties[] = $r->property_uid;
			}
		}

		foreach ($currentProperties as $c) {
			if (!in_array($c, $property_uids)) {
				$propertiesToBeRemovedArray[ ] = $c;
			}
		}

		foreach ($property_uids as $p) {
			if (!in_array($p, $currentProperties)) {
				$propertiesToBeAddedArray[] = $p;
			}
		}

		if (!empty($propertiesToBeRemovedArray)) {
			$query = 'DELETE FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '.(int) $cms_user_id.' AND `property_uid` IN ('.jomres_implode($propertiesToBeRemovedArray).') ';
			if (!doInsertSql($query, '')) {
				throw new Exception('Error: Deleting user`s unassigned properties failed');
			}
		}

		if (!empty($propertiesToBeAddedArray)) {
			$query = 'INSERT INTO #__jomres_managers_propertys_xref (`manager_id`,`property_uid`) VALUES ';

			foreach ($propertiesToBeAddedArray as $p) {
				$query .= '('.(int) $cms_user_id.','.(int) $p.'),';
			}

			$query = rtrim($query, ',');

			if (!doInsertSql($query, '')) {
				throw new Exception('Error: Inserting user`s assigned properties failed');
			}
		}

		return true;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Handles errors generated by the system, redirects the user to an error page.
	 *
	 * Only used if system is set to Production.
	 */
	function errorHandler($errno, $errstr, $errfile, $errline, $errcontext = '')
	{
		switch ($errno) {
			case E_USER_WARNING:
			case E_USER_NOTICE:
			case E_WARNING:
			case E_NOTICE:
			case E_CORE_WARNING:
			case E_COMPILE_WARNING:
				break;
			case E_USER_ERROR:
				recordError($errno, $errstr, $errfile, $errline, $errcontext);
			case E_ERROR:
			case E_PARSE:
			case E_CORE_ERROR:
			case E_COMPILE_ERROR:
				recordError($errno, $errstr, $errfile, $errline, $errcontext);
			default:
				break;
		} // switch
	} // errorHandler

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Pretty sure this is depreciated now
	 */
	function recordError($errno, $errstr, $errfile, $errline, $errcontext)
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$errorstring = "Fatal Error: $errstr (# $errno).";
		//$errorstring .= "User id '$jrUser->username'&nbsp;&nbsp;.";
		$errorstring .= "Error in line $errline of file '$errfile'.";
		$errorstring .= "Script: '{$_SERVER['PHP_SELF']}'";
		if (isset($errcontext[ 'this' ])) {
			if (is_object($errcontext[ 'this' ])) {
				$classname = get_class($errcontext[ 'this' ]);
				$parentclass = get_parent_class($errcontext[ 'this' ]);
				$errorstring .= "Object/Class: '$classname', Parent Class: '$parentclass'.";
			}
		}
		error_logging($errorstring);
		if (!@session_start()) {
			@ini_set('session.save_handler', 'files');
			session_start();
		}
		session_unset();
		session_destroy();
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=error'), 'FATAL ERROR');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Legacy function, previously wrote to writexml, now uses the Logger class.
	 */
	function error_logging($message, $emailMessage = true)
	{
		logging::log_message($message, 'Core', 'ERROR');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Legacy function, previously wrote to writexml, now uses the Logger class.
	 */
	function request_log()
	{
		$log = '';
		if (!empty($_REQUEST)) {
			$log .= '';
			foreach ($_REQUEST as $key => $value) {
				if (is_array($value)) {
					$value = json_encode($value);
				}
				$log .= $key.' '.$value." --- \n";
			}
			$log .= '';
			logging::log_message($log, 'REQUEST', 'DEBUG');
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Legacy function, previously wrote to writexml, now uses the Logger class.
	 */
	function system_log($message)
	{
		logging::log_message($message, 'Core', 'DEBUG');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Legacy function, previously wrote to writexml, now uses the Logger class.
	 */
	function gateway_log($message)
	{
		logging::log_message($message, 'Gateway', 'DEBUG');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Audit log.
	 */
	function jomres_audit($query, $op = '')
	{
		logging::log_message($query, 'Audit', 'INFO');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Base64 encodes urls.
	 *
	 *         Used by scripts that intercept queries, such as the "Show GDPR optin" form. To ensure that the user is returned to the correct page we need to append the url to the opt-in form, however if we include the url in the query string Joomla will send us off to some weird and wonderful places, so we base64 encode the url, add it to the form, then when we are ready to redirect back to the original page we unencode it again.
	 *
	 */

	function jr_base64url_encode($data) {
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 *  Base64 decodes urls.
	 *
	 *         Used by scripts that intercept queries, such as the "Show GDPR optin" form. To ensure that the user is returned to the correct page we need to append the url to the opt-in form, however if we include the url in the query string Joomla will send us off to some weird and wonderful places, so we base64 encode the url, add it to the form, then when we are ready to redirect back to the original page we unencode it again.
	 *
	 */
	function jr_base64url_decode($data) {
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Redirects to $url.
	 *
	 *          Can be handed a message which is then stored briefly before being shown on next page load
	 */
	function jomresRedirect($url, $msg = '', $class = 'alert-info', $code = 302)
	{
		//logging::log_message($msg, 'Core', 'INFO');

		if ($msg != '' ) {
			$jomres_messages = jomres_singleton_abstract::getInstance('jomres_messages');
			$jomres_messages->set_message($msg, $class);
		}

		if (!defined('AUTO_UPGRADE')) {
			$MiniComponents = jomres_getSingleton('mcHandler');
			$MiniComponents->triggerEvent('08000'); // Optional, post run items that *must* be run ( watchers ).

			//we have to save the session data every time we redirect
			$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
			$tmpBookingHandler->close_jomres_session();
		}

		$jr_redirect_url = jomresGetParam($_REQUEST, 'jr_redirect_url', '');
		if ( (string)$jr_redirect_url != '') {
			$url = jr_base64url_decode($jr_redirect_url);
		}

		if (strncmp('cli', PHP_SAPI, 3) !== 0) {
			if (headers_sent() !== true) {
				if (strncmp('cgi', PHP_SAPI, 3) === 0) {
					header(sprintf('Status: %03u', $code), true, $code);
				}

				header('Location: '.$url, true, (preg_match('~^30[1237]$~', $code) > 0) ? $code : 302);
			}
			doDBClose();
			exit();
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Sanitises the overlib output.
	 *
	 *          One of those functions that originally did one thing and now....
	 */
	function sanitiseOverlibOutput($data)
	{
		$data = str_replace('&#39;', "'", $data);
		$data = str_replace("'", '\\&#39;', $data);

		return $data;
	}

//------------------------------------
//-C O N F I G	S E T T I N G S	 ----
//------------------------------------

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Constructs the standard configuration settings for display in the config panel, then triggers events to show same configuration panels.
	 */
	function propertyConfiguration()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		$property_uid = (int) getDefaultProperty();
		$mrConfig = getPropertySpecificSettings($property_uid);
		$option = 'com_jomres';

		$componentArgs = array();
		$componentArgs[ 'mrConfig' ] = $mrConfig;
		$MiniComponents->triggerEvent('00500', $componentArgs); // Generate configuration options. Optional

		// the default view
		$lists = array();

		// make a standard yes/no list
		$yesno = array();
		$yesno[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
		$yesno[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

		if ($mrConfig[ 'newTariffModels' ] != '1' && $mrConfig[ 'newTariffModels' ] != '2') { // backward compatablity for pre-2.5 users who haven't yet visited General Configuration and clicked Save
			$mrConfig[ 'newTariffModels' ] = '2';
		}
		$tariffModels = array();
		$tariffModels[ ] = jomresHTML::makeOption(1, jr_gettext('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', false));
		$tariffModels[ ] = jomresHTML::makeOption(2, jr_gettext('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', false));
		$tariffModelsDropdown = jomresHTML::selectList($tariffModels, 'cfg_newTariffModels', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'newTariffModels' ]);

		$weekDays = array();
		$weekDays[ ] = jomresHTML::makeOption(1, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY', '_JOMRES_COM_MR_WEEKDAYS_MONDAY', false));
		$weekDays[ ] = jomresHTML::makeOption(2, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', false));
		$weekDays[ ] = jomresHTML::makeOption(3, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', false));
		$weekDays[ ] = jomresHTML::makeOption(4, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false));
		$weekDays[ ] = jomresHTML::makeOption(5, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false));
		$weekDays[ ] = jomresHTML::makeOption(6, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
		$weekDays[ ] = jomresHTML::makeOption(0, jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));

		$weekendDays = array();
		$weekendDays[ ] = jomresHTML::makeOption('5', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('6', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('4,5', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('4,5,6', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('4,5,6,0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('5,6', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('5,6,0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));
		$weekendDays[ ] = jomresHTML::makeOption('6,0', jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', false).', '.jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', false));

		$jsInputDateFormats = array();
		$jsInputDateFormats[ ] = jomresHTML::makeOption('%d/%m/%Y', '01/02/2006 - 1st February 2006');
		$jsInputDateFormats[ ] = jomresHTML::makeOption('%Y/%m/%d', '2006/02/01');
		$jsInputDateFormats[ ] = jomresHTML::makeOption('%m/%d/%Y', '02/01/2006');
		$jsInputDateFormats[ ] = jomresHTML::makeOption('%d-%m-%Y', '01-02-2006');
		$jsInputDateFormats[ ] = jomresHTML::makeOption('%Y-%m-%d', '2006-02-01');
		$jsInputDateFormats[ ] = jomresHTML::makeOption('%m-%d-%Y', '02-01-2006');
		//$jsInputDateFormats[] =	jomresHTML::makeOption("%d.%m.%Y", "01.02.2006");
		$jsInputFormatDropdownList = jomresHTML::selectList($jsInputDateFormats, 'cfg_cal_input', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'cal_input' ]);

		//$slideshowDropdownList= jomresHTML::selectList($slideshowNames, 'cfg_slideshow', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['slideshow']);
		$weekdayDropdown = jomresHTML::selectList($weekDays, 'cfg_fixedArrivalDay', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedArrivalDay' ]);
		$weekenddayDropdown = jomresHTML::selectList($weekendDays, 'cfg_weekenddays', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'weekenddays' ]);

		$depAmounts = array();
		$depAmounts[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_CHARGING_DEPOSIT', '_JOMRES_COM_CHARGING_DEPOSIT', false));
		$depAmounts[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_CHARGING_FULLAMT', '_JOMRES_COM_CHARGING_FULLAMT', false));
		$paymentAmounts = jomresHTML::selectList($depAmounts, 'cfg_depAmount', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depAmount' ]);

		if (!isset($mrConfig[ 'tariffmode' ])) {
			$mrConfig[ 'tariffmode' ] = 1;
		}
		$tariffMode = array();
		$tariffMode[ ] = jomresHTML::makeOption('0', jr_gettext('JOMRES_COM_A_TARIFFMODE_NORMAL', 'JOMRES_COM_A_TARIFFMODE_NORMAL', false));

		if (isset($MiniComponents->registeredClasses[ '06002']['edit_tariff_micromanage' ])) {
			$tariffMode[ ] = jomresHTML::makeOption('2', jr_gettext('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', false));
			$tariffMode[ ] = jomresHTML::makeOption('1', jr_gettext('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'JOMRES_COM_A_TARIFFMODE_ADVANCED', false));
			$tariffMode[ ] = jomresHTML::makeOption('5', jr_gettext('JOMRES_COM_A_TARIFFMODE_STANDARD', 'JOMRES_COM_A_TARIFFMODE_STANDARD', false));
		}
		$tariffModeDD = jomresHTML::selectList($tariffMode, 'cfg_tariffmode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'tariffmode' ]);

		$iconsizes = array();
		$iconsizes[ ] = jomresHTML::makeOption('small', 'small');
		$iconsizes[ ] = jomresHTML::makeOption('large', 'large');
		$editIconSize = jomresHTML::selectList($iconsizes, 'cfg_editiconsize', 'size="1" class="inputbox"', 'value', 'text', $mrConfig[ 'editiconsize' ]);

		if (!isset($mrConfig[ 'booking_form_rooms_list_style' ])) {
			$mrConfig[ 'booking_form_rooms_list_style' ] = '1';
		}
		$booking_form_rooms_list = array();
		$booking_form_rooms_list[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', false));
		$booking_form_rooms_list[ ] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', false));
		$booking_form_rooms_list_style = jomresHTML::selectList($booking_form_rooms_list, 'cfg_booking_form_rooms_list_style', 'size="1" class="inputbox"', 'value', 'text', $mrConfig[ 'booking_form_rooms_list_style' ]);

		$fixedArrivalDatesRecurring = jomresHTML::integerSelectList(01, 208, 1, 'cfg_fixedArrivalDatesRecurring', 'size="1" class="inputbox"', $mrConfig[ 'fixedArrivalDatesRecurring' ], '%02d');

		if (!isset($mrConfig[ 'booking_form_daily_weekly_monthly' ])) {
			$mrConfig[ 'booking_form_daily_weekly_monthly' ] = 'D';
		}
		$pricingOutput = array();
		if ($mrConfig[ 'wholeday_booking' ] == '1') {
			$pricingOutput[ ] = jomresHTML::makeOption('D', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', false));
		} else {
			$pricingOutput[ ] = jomresHTML::makeOption('D', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', false));
		}
		$pricingOutput[ ] = jomresHTML::makeOption('W', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', false));
		$pricingOutput[ ] = jomresHTML::makeOption('M', jr_gettext('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', false));
		$booking_form_daily_weekly_monthly = jomresHTML::selectList($pricingOutput, 'cfg_booking_form_daily_weekly_monthly', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'booking_form_daily_weekly_monthly' ]);



		if (!isset($mrConfig[ 'city_tax_models' ])) {
			$mrConfig[ 'city_tax_models' ] = 'single';
		}

		$city_tax_models = array();
		$city_tax_models[ ] = jomresHTML::makeOption('single', jr_gettext('JOMRES_CITY_TAX_MODEL_SINGLE', 'JOMRES_CITY_TAX_MODEL_SINGLE', false));
		$city_tax_models[ ] = jomresHTML::makeOption('pernight', jr_gettext('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'JOMRES_CITY_TAX_MODEL_PER_NIGHT', false));
		$city_tax_models[ ] = jomresHTML::makeOption('perguest', jr_gettext('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'JOMRES_CITY_TAX_MODEL_PER_GUEST', false));
		$city_tax_models[ ] = jomresHTML::makeOption('perguestpernight', jr_gettext('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', false));
		$city_tax_models[ ] = jomresHTML::makeOption('percentbookingtotal', jr_gettext('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', false));

		$city_tax_models_dropdown = jomresHTML::selectList($city_tax_models, 'cfg_city_tax_models', 'size="1" class="inputbox"', 'value', 'text', $mrConfig[ 'city_tax_models' ]);

		$lists[ 'showRoomImageInBookingFormOverlib' ] = jomresHTML::selectList($yesno, 'cfg_showRoomImageInBookingFormOverlib', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomImageInBookingFormOverlib' ]);
		$lists[ 'singlePersonSuppliment' ] = jomresHTML::selectList($yesno, 'cfg_singlePersonSuppliment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'singlePersonSuppliment' ]);
		$lists[ 'perPersonPerNight' ] = jomresHTML::selectList($yesno, 'cfg_perPersonPerNight', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'perPersonPerNight' ]);
		$lists[ 'depositIsPercentage' ] = jomresHTML::selectList($yesno, 'cfg_depositIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depositIsPercentage' ]);
		$lists[ 'errorChecking' ] = jomresHTML::selectList($yesno, 'cfg_errorChecking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'errorChecking' ]);
		$lists[ 'visitorscanbookonline' ] = jomresHTML::selectList($yesno, 'cfg_visitorscanbookonline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'visitorscanbookonline' ]);
		$lists[ 'fixedPeriodBookings' ] = jomresHTML::selectList($yesno, 'cfg_fixedPeriodBookings', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedPeriodBookings' ]);
		$lists[ 'singleRoomProperty' ] = jomresHTML::selectList($yesno, 'cfg_singleRoomProperty', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'singleRoomProperty' ]);
		$lists[ 'fixedArrivalDateYesNo' ] = jomresHTML::selectList($yesno, 'cfg_fixedArrivalDateYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedArrivalDateYesNo' ]);
		$lists[ 'showAvailabilityCalendar' ] = jomresHTML::selectList($yesno, 'cfg_showAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showAvailabilityCalendar' ]);
		$lists[ 'fixedPeriodBookingsShortYesNo' ] = jomresHTML::selectList($yesno, 'cfg_fixedPeriodBookingsShortYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedPeriodBookingsShortYesNo' ]);
		$lists[ 'showExtras' ] = jomresHTML::selectList($yesno, 'cfg_showExtras', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showExtras' ]);
		$lists[ 'limitAdvanceBookingsYesNo' ] = jomresHTML::selectList($yesno, 'cfg_limitAdvanceBookingsYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'limitAdvanceBookingsYesNo' ]);
		$lists[ 'roomTaxYesNo' ] = jomresHTML::selectList($yesno, 'cfg_roomTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roomTaxYesNo' ]);
		$lists[ 'euroTaxYesNo' ] = jomresHTML::selectList($yesno, 'cfg_euroTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'euroTaxYesNo' ]);
		$lists[ 'editingOn' ] = jomresHTML::selectList($yesno, 'cfg_editingOn', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'editingOn' ]);
		//$lists['popupsAllowed'] = jomresHTML::selectList( $yesno, 'cfg_popupsAllowed', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['popupsAllowed'] );
		$lists[ 'showSlideshowLink' ] = jomresHTML::selectList($yesno, 'cfg_showSlideshowLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showSlideshowLink' ]);
		$lists[ 'showSlideshowInline' ] = jomresHTML::selectList($yesno, 'cfg_showSlideshowInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showSlideshowInline' ]);
		$lists[ 'showTariffsInline' ] = jomresHTML::selectList($yesno, 'cfg_showTariffsInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showTariffsInline' ]);
		$lists[ 'showTariffsLink' ] = jomresHTML::selectList($yesno, 'cfg_showTariffsLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showTariffsLink' ]);
		$lists[ 'useOnlinepayment' ] = jomresHTML::selectList($yesno, 'cfg_useOnlinepayment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'useOnlinepayment' ]);
		$lists[ 'showdepartureinput' ] = jomresHTML::selectList($yesno, 'cfg_showdepartureinput', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showdepartureinput' ]);
		$lists[ 'dateFormatStyle' ] = jomresHTML::selectList($yesno, 'cfg_dateFormatStyle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dateFormatStyle' ]);
		$lists[ 'calstartfrombeginningofyear' ] = jomresHTML::selectList($yesno, 'cfg_calstartfrombeginningofyear', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'calstartfrombeginningofyear' ]);
		$lists[ 'showGoogleCurrencyLink' ] = jomresHTML::selectList($yesno, 'cfg_showGoogleCurrencyLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showGoogleCurrencyLink' ]);
		$lists[ 'showRoomsInPropertyDetails' ] = jomresHTML::selectList($yesno, 'cfg_showRoomsInPropertyDetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomsInPropertyDetails' ]);
		$lists[ 'showRoomsListingLink' ] = jomresHTML::selectList($yesno, 'cfg_showRoomsListingLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomsListingLink' ]);
		$lists[ 'showOnlyAvailabilityCalendar' ] = jomresHTML::selectList($yesno, 'cfg_showOnlyAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showOnlyAvailabilityCalendar' ]);
		$lists[ 'registeredUsersOnlyCanBook' ] = jomresHTML::selectList($yesno, 'cfg_registeredUsersOnlyCanBook', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'registeredUsersOnlyCanBook' ]);
		$lists[ 'roundupDepositYesNo' ] = jomresHTML::selectList($yesno, 'cfg_roundupDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roundupDepositYesNo' ]);
		$lists[ 'chargeDepositYesNo' ] = jomresHTML::selectList($yesno, 'cfg_chargeDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'chargeDepositYesNo' ]);
		$lists[ 'tariffChargesStoredWeeklyYesNo' ] = jomresHTML::selectList($yesno, 'cfg_tariffChargesStoredWeeklyYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ]);
		$lists[ 'roomslistinpropertydetails' ] = jomresHTML::selectList($yesno, 'cfg_roomslistinpropertydetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roomslistinpropertydetails' ]);
		$lists[ 'verbosetariffinfo' ] = jomresHTML::selectList($yesno, 'cfg_verbosetariffinfo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'verbosetariffinfo' ]);

		$lists[ 'bookingform_overlib_tariff_title_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_title_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_title_show' ]);
		$lists[ 'bookingform_overlib_tariff_desc_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_desc_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_desc_show' ]);
		$lists[ 'bookingform_overlib_tariff_rate_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_rate_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_rate_show' ]);
		$lists[ 'bookingform_overlib_tariff_starts_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_starts_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_starts_show' ]);
		$lists[ 'bookingform_overlib_tariff_ends_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_ends_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_ends_show' ]);
		$lists[ 'bookingform_overlib_tariff_mindays_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_mindays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_mindays_show' ]);
		$lists[ 'bookingform_overlib_tariff_maxdays_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_maxdays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_maxdays_show' ]);
		$lists[ 'bookingform_overlib_tariff_minpeeps_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_minpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_minpeeps_show' ]);
		$lists[ 'bookingform_overlib_tariff_maxpeeps_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_tariff_maxpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_maxpeeps_show' ]);

		$lists[ 'bookingform_overlib_room_number_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_number_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_number_show' ]);
		$lists[ 'bookingform_overlib_room_name_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_name_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_name_show' ]);
		$lists[ 'bookingform_overlib_room_type_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_type_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_type_show' ]);
		$lists[ 'bookingform_overlib_room_floor_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_floor_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_floor_show' ]);
		$lists[ 'bookingform_overlib_room_maxpeople_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_maxpeople_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_maxpeople_show' ]);
		$lists[ 'bookingform_overlib_room_features_show' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_overlib_room_features_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_features_show' ]);

		$lists[ 'bookingform_roomlist_showroomno' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showroomno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showroomno' ]);
		$lists[ 'bookingform_roomlist_showroomname' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showroomname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showroomname' ]);
		$lists[ 'bookingform_roomlist_showtarifftitle' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showtarifftitle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showtarifftitle' ]);
		$lists[ 'supplimentChargeIsPercentage' ] = jomresHTML::selectList($yesno, 'cfg_supplimentChargeIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'supplimentChargeIsPercentage' ]);

		$lists[ 'bookingform_requiredfields_name' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_name', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_name' ]);
		$lists[ 'bookingform_requiredfields_surname' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_surname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_surname' ]);
		$lists[ 'bookingform_requiredfields_houseno' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_houseno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_houseno' ]);
		$lists[ 'bookingform_requiredfields_street' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_street', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_street' ]);
		$lists[ 'bookingform_requiredfields_town' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_town', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_town' ]);
		$lists[ 'bookingform_requiredfields_postcode' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_postcode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_postcode' ]);
		$lists[ 'bookingform_requiredfields_region' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_region', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_region' ]);
		$lists[ 'bookingform_requiredfields_country' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_country', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_country' ]);
		$lists[ 'bookingform_requiredfields_tel' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_tel', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_tel' ]);
		$lists[ 'bookingform_requiredfields_mobile' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_mobile', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_mobile' ]);

		$mrConfig[ 'bookingform_requiredfields_email' ] = "1"; // For GDPR compliance, bookings will always require an email address and the property manager will not be allowed to change this setting
		$lists[ 'bookingform_requiredfields_email' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_requiredfields_email', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_email' ]);

		$lists[ 'bookingform_roomlist_showdisabled' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showdisabled', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showdisabled' ]);
		$lists[ 'bookingform_roomlist_showmaxpeople' ] = jomresHTML::selectList($yesno, 'cfg_bookingform_roomlist_showmaxpeople', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showmaxpeople' ]);

		$lists[ 'use_variable_deposits' ] = jomresHTML::selectList($yesno, 'cfg_use_variable_deposits', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'use_variable_deposits' ]);

		$lists[ 'prices_inclusive' ] = jomresHTML::selectList($yesno, 'cfg_prices_inclusive', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'prices_inclusive' ]);
		$lists[ 'wholeday_booking' ] = jomresHTML::selectList($yesno, 'cfg_wholeday_booking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'wholeday_booking' ]);
		$lists[ 'depositIsOneNight' ] = jomresHTML::selectList($yesno, 'cfg_depositIsOneNight', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depositIsOneNight' ]);

		$lists[ 'requireApproval' ] = jomresHTML::selectList($yesno, 'cfg_requireApproval', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'requireApproval' ]);
		$lists[ 'hide_local_address' ] = jomresHTML::selectList($yesno, 'cfg_hide_local_address', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'hide_local_address' ]);

		if (!isset($mrConfig[ 'auto_detect_country_for_booking_form' ])) {
			$mrConfig[ 'auto_detect_country_for_booking_form' ] = '1';
		}

		$lists[ 'auto_detect_country_for_booking_form' ] = jomresHTML::selectList($yesno, 'cfg_auto_detect_country_for_booking_form', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'auto_detect_country_for_booking_form' ]);

		$lists[ 'showPfeaturesCategories' ] = jomresHTML::selectList($yesno, 'cfg_showPfeaturesCategories', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'showPfeaturesCategories' ]);
		$lists[ 'currency_symbol_swap' ] = jomresHTML::selectList($yesno, 'cfg_currency_symbol_swap', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'currency_symbol_swap' ]);

		$lists[ 'use_custom_invoice_numbers' ] = jomresHTML::selectList($yesno, 'cfg_use_custom_invoice_numbers', 'class="inputbox" size="1"', 'value', 'text', (int) $mrConfig[ 'use_custom_invoice_numbers' ]);

		if (!isset($mrConfig[ 'allow_children' ])) {
			$mrConfig[ 'allow_children' ] = 1;
		}
		$lists[ 'allow_children' ] = jomresHTML::selectList($yesno, 'cfg_allow_children', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'allow_children' ]);

		if (!isset($mrConfig[ 'cformat_strip_decimals' ])) {
			$mrConfig[ 'cformat_strip_decimals' ] = 0;
		}
		$lists[ 'cformat_strip_decimals' ] = jomresHTML::selectList($yesno, 'cfg_cformat_strip_decimals', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'cformat_strip_decimals' ]);


		$componentArgs = array();
		$componentArgs[ 'mrConfig' ] = $mrConfig;
		$componentArgs[ 'lists' ] = $lists;
		$componentArgs[ 'weekdayDropdown' ] = $weekdayDropdown;
		$componentArgs[ 'jsInputFormatDropdownList' ] = $jsInputFormatDropdownList;
		$componentArgs[ 'weekenddayDropdown' ] = $weekenddayDropdown;
		//$componentArgs['templateNamesDropdownList']=$templateNamesDropdownList;
		$componentArgs[ 'paymentAmounts' ] = $paymentAmounts;
		$componentArgs[ 'editIconSize' ] = $editIconSize;
		$componentArgs[ 'fixedArrivalDatesRecurring' ] = $fixedArrivalDatesRecurring;
		$componentArgs[ 'tariffModelsDropdown' ] = $tariffModelsDropdown;
		$componentArgs[ 'jomresConfig_live_site' ] = get_showtime('live_site');
		$componentArgs[ 'tariffModeDD' ] = $tariffModeDD;
		$componentArgs[ 'booking_form_rooms_list_style' ] = $booking_form_rooms_list_style;
		$componentArgs[ 'booking_form_daily_weekly_monthly' ] = $booking_form_daily_weekly_monthly;
		$componentArgs[ 'city_tax_models_dropdown' ] = $city_tax_models_dropdown;

		ob_start();

		// The following javascript is for selecting currency codes
		?>

		<form method="post" name="adminForm">
			<input type="hidden" name="no_html" value="1">
			<input type="hidden" name="task" value="save_business_settings"/>
			<input type="hidden" name="option" value="<?php echo $option; ?>"/>
			<input type="hidden" name="cfg_jomresdotnet" value="<?php echo $mrConfig[ 'jomresdotnet' ]; ?>"/>
			<input type="hidden" name="property_uid" value="<?php echo $property_uid; ?>"/>
			<?php
				foreach ($mrConfig as $k => $v) {
					echo '<input type="hidden" name="oldsetting_cfg_'.$k.'" value="'.$v.'" />';
					echo '';
				} ?>
			<h2 class="page-header"><?php echo jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC', '_JOMRES_COM_MR_GENERALCONFIGDESC'); ?></h2>
			<?php

				$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
				$jrtb = $jrtbar->startTable();

				$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.''), '');
				$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_business_settings');
				$jrtb .= $jrtbar->endTable();

				$output[ 'JOMRESTOOLBAR' ] = $jrtb;

				echo '<div class="well clearfix"><div class="pull-left">'.$output[ 'JOMRESTOOLBAR' ].'</div></div>';

				$bs_version = jomres_bootstrap_version();

				if ($bs_version == '2' || $bs_version == '') {
					$configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel');
				} elseif ($bs_version == '3' || $bs_version == 0 ) {
					$configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel_bootstrap3');
				} elseif ($bs_version == '5') {
					if (this_cms_is_wordpress()) {
						jr_import('jomres_content_tabs_bootstrap5_wordpress');
						$configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel_bootstrap5_wordpress');
					} else {
						$configurationPanel = jomres_singleton_abstract::getInstance('jomres_configpanel_bootstrap5');
					}
				}

				$componentArgs[ 'configurationPanel' ]  = $configurationPanel;
				$componentArgs['is_channel_property']   = is_channel_property($property_uid);

				$configurationPanel->startTabs();

				$MiniComponents->triggerEvent('00501', $componentArgs); // Generate configuration options tabs

				$configurationPanel->endTabs(); ?>
		</form>

		<?php
		ob_end_flush();
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Takes settings from the configuration and saves (most of them) to the jomres_settings table.
	 */
	function savePropertyConfiguration( $property_uid = 0 )
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$MiniComponents->triggerEvent('00502', array()); // This trigger allows plugins to check saves, for example to prevent future changes to a setting once it's been made.

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($property_uid == 0) {
			$property_uid = (int)getDefaultProperty();
		}


		if ($property_uid == 0) {
			return false;
		}

		$mrConfig = getPropertySpecificSettings($property_uid);

		$tariffmodeChange = false;
		if (isset($_POST[ 'oldsetting_cfg_tariffmode' ])) {
			if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '1' && $_POST[ 'cfg_tariffmode' ] == '2') { // Advanced  -> micromanage
				echo 'Deleting old tariffs';
				removeAllPropertyTariffs($property_uid);
				$tariffmodeChange = true;
			}
			if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '0' && $_POST[ 'cfg_tariffmode' ] == '2') { // Normal  -> micromanage
				echo 'Deleting old tariffs';
				removeAllPropertyTariffs($property_uid);
				$tariffmodeChange = true;
			}
			if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '2' && ($_POST[ 'cfg_tariffmode' ] == '0' || $_POST[ 'cfg_tariffmode' ] == '1')) { // Micromanage  -> normal/advanced
				echo 'Deleting old tariffs';
				removeAllPropertyEnhanceTariffsXref($property_uid);
				$tariffmodeChange = true;
			}
			if (($_POST[ 'oldsetting_cfg_tariffmode' ] == '1' || $_POST[ 'oldsetting_cfg_tariffmode' ] == '2') && $_POST[ 'cfg_tariffmode' ] == '0') { // Advanced/Micromanage  -> normal
				echo 'Deleting old tariffs';
				removeAllPropertyTariffs($property_uid);
				removeAllPropertyEnhanceTariffsXref($property_uid);
				$tariffmodeChange = true;
			}
			if ($_POST[ 'oldsetting_cfg_tariffmode' ] == '0' && $_POST[ 'cfg_tariffmode' ] != '0') {
				$tariffmodeChange = true;
			}
		}


		// If the minimum deposit percentage setting is set, then these options cannot be altered, instead we will force them so that Deposits are always charged, the "deposit is one night's value" setting cannot be used, and of course we'll force the Deposit is Percentage setting to true
		if (!isset($jrConfig[ 'minimum_deposit_percentage' ])) {
			$jrConfig[ 'minimum_deposit_percentage' ] = 0;
		}

		if ((int) $jrConfig[ 'minimum_deposit_percentage' ] > 0) {
			$_POST[ 'cfg_chargeDepositYesNo' ] = 1;
			$_POST[ 'cfg_depositIsOneNight' ] = 0;
			$_POST[ 'cfg_depositIsPercentage' ] = 1;

			if ((int) $_POST[ 'cfg_depositValue' ] < $jrConfig[ 'minimum_deposit_percentage' ]) {
				$_POST[ 'cfg_depositValue' ] = (int) $jrConfig[ 'minimum_deposit_percentage' ];
			}
		}

		$update_count = 0;
		foreach ($_POST as $k => $v) {
			if (strpos($k, 'cfg_') === 0 && $k != 'cfg_jomres_licensekey') {
				$v = jomresGetParam($_POST, $k, '');
				$dirty = (string) $k;
				$k = addslashes($dirty);


				if (substr($k, 4) == 'encKey') {
					//saveKey($v); // Commented out, the function is no longer available, however keeping the IF statement here allows to be absolutely sure that if encKey is set (by a very naughty person) then nothing is done.
				} else {
					$oldSettingKey = 'oldsetting_'.$k;
					if ( isset($_POST[ $oldSettingKey ])) {
						$oldSettingVal = $_POST[ $oldSettingKey ];
					} else {
						$oldSettingVal = $_POST[ $k ];
					}

					//if ($oldSettingVal != $v) {
					$query = "SELECT uid FROM #__jomres_settings WHERE property_uid = '".(int) $property_uid."' and akey = '".substr($k, 4)."'";
					$result = doSelectSql($query);
					if (empty($result)) {
						$query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int) $property_uid."','".substr($k, 4)."','".$v."')";
					} else {
						$query = "UPDATE #__jomres_settings SET `value`='".$v."' WHERE property_uid = '".(int) $property_uid."' and akey = '".substr($k, 4)."'";
					}
					doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', false));
					$update_count ++;
					//}
				}
			}
		}

		if ( $update_count > 0 ) {
			$webhook_notification							   = new stdClass();
			$webhook_notification->webhook_event				= 'property_settings_updated';
			$webhook_notification->webhook_event_description	= 'Logs when property settings are updated.';
			$webhook_notification->webhook_event_plugin		 = 'core';
			$webhook_notification->data						 = new stdClass();
			$webhook_notification->data->property_uid		   = $property_uid;
			add_webhook_notification($webhook_notification);
		}

		if ( isset($_POST['cfg_property_vat_number']) && trim($_POST['cfg_property_vat_number']) != '') {
			jr_import('vat_number_validation');
			$validation = new vat_number_validation($property_uid, false);
			$validation->vies_check(filter_var($_POST['cfg_property_vat_number'], FILTER_SANITIZE_SPECIAL_CHARS));
			$validation->save_subject($type = 'property', array('property_uid' => $property_uid));
		}

		return true;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Remove old tables.
	 */
	function removeAllPropertyEnhanceTariffsXref($property_uid)
	{
		$query = 'DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE property_uid = '.(int) $property_uid;
		doInsertSql($query, '');
		$query = 'DELETE FROM #__jomcomp_tarifftypes WHERE property_uid = '.(int) $property_uid;
		doInsertSql($query, '');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Empty the tariffs table by property uid.
	 */
	function removeAllPropertyTariffs($property_uid)
	{
		$query = "DELETE FROM #__jomres_rates WHERE property_uid = '".(int) $property_uid."'";
		doInsertSql($query, '');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Empty the Rooms table for rooms with property uid.
	 */
	function removeAllPropertyRooms($property_uid)
	{
		$query = "DELETE FROM #__jomres_rooms WHERE propertys_uid = '".(int) $property_uid."'";
		doInsertSql($query, '');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * User has been logged out (or has attempted to access functionality illegally).
	 */
	function userHasBeenLoggedOut()
	{
		echo '<center><img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" />';
		echo '<img src="'.JOMRES_IMAGES_RELPATH.'Secured.png" align="middle" border="0" />';
		echo '<img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" /></center><br />';
		echo '<h2>'.jr_gettext('_JOMRES_JR_NOTLOGGEDIN', '_JOMRES_JR_NOTLOGGEDIN').'</h2>';
		echo '<center><img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" />';
		echo '<img src="'.JOMRES_IMAGES_RELPATH.'Secured.png" align="middle" border="0" />';
		echo '<img src="'.JOMRES_IMAGES_RELPATH.'Restricted.png" align="middle" border="0" /></center><br />';
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Triggers the insert booking mini-comp 03020.
	 *
	 *          This function name takes me back a long way. It's probably the very oldest function in Jomres. The code has long since been updated/refactored but for backward compatibility reasons, the name has remained the same for nearly 15 years
	 */
	function insertInternetBooking($jomressession = '', $depositPaid = false, $confirmationPageRequired = true, $customTextForConfirmationForm = '', $usejomressessionasCartid = false)
	{
		$jomressession = get_showtime('jomressession');
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		gateway_log('insertInternetBooking: Attempting to insert booking jsid: '.get_showtime('jomressession'));
		if ($tmpBookingHandler->getBookingFieldVal('cart_payment')) { // I'm probably being lazy, creating this condition like this, but I'd rather keep things clear in my own mind atm, it can be tidied up later
			$insert_failed = false;

			foreach ($tmpBookingHandler->cart_data as $key => $cart_data) {
				$tmpBookingHandler->tmpbooking = $cart_data;
				$tmpBookingHandler->tmpguest = $cart_data[ 'tmpguest' ];
				$componentArgs = array('jomressession' => get_showtime('jomressession'), 'depositPaid' => $depositPaid, 'usejomressessionasCartid' => $usejomressessionasCartid);
				$result = $MiniComponents->triggerEvent('03020', $componentArgs); // Trigger the insert booking mini-comp
				gateway_log('insertInternetBooking: '.serialize($MiniComponents->miniComponentData[ '03020' ]));
				if (!$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ]) {
					$insert_failed = true;
				}
				$tmpBookingHandler->resetTempBookingData();
				$tmpBookingHandler->resetTempGuestData();
			}

			gateway_log('insertInternetBooking: Insert successful ');
			if ($confirmationPageRequired && !$insert_failed) {
				gateway_log('insertInternetBooking:Outputting confirmation page ');
				$property_uid = (int) $tmpBookingHandler->getBookingFieldVal('property_uid');
				$componentArgs = array('property_uid' => $property_uid);
				$componentArgs = array('customText' => $customTextForConfirmationForm);
				$MiniComponents->triggerEvent('03030', $componentArgs); // Booking completed message
				if ($thisJRUser->userIsManager) {
					echo jr_gettext('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE').'<br />';
					$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
					$jrtb = $jrtbar->startTable();
					$jrtb .= $jrtbar->toolbarItem('edit_booking', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_deposit&contractUid='.$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'contract_uid' ]), '');
					$jrtb .= $jrtbar->endTable();
					echo $jrtb;
				}
				gateway_log('<h2>Resetting temp booking data</h2>');
			}
			$tmpBookingHandler->resetCart();

			return $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ];
		} else {
			$componentArgs = array('jomressession' => get_showtime('jomressession'), 'depositPaid' => $depositPaid, 'usejomressessionasCartid' => $usejomressessionasCartid);
			$result = $MiniComponents->triggerEvent('03020', $componentArgs); // Trigger the insert booking mini-comp
			gateway_log('insertInternetBooking: '.serialize($MiniComponents->miniComponentData[ '03020' ]));
			if ($MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ]) {
				gateway_log('insertInternetBooking: Insert successful ');
				if ($confirmationPageRequired) {
					gateway_log('insertInternetBooking:Outputting confirmation page ');
					$property_uid = (int) $tmpBookingHandler->getBookingFieldVal('property_uid');
					$componentArgs = array('property_uid' => $property_uid);
					$componentArgs = array('customText' => $customTextForConfirmationForm);
					$MiniComponents->triggerEvent('03030', $componentArgs); // Booking completed message
					if ($thisJRUser->userIsManager) {
						echo jr_gettext('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE').'<br />';
						$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
						$jrtb = $jrtbar->startTable();
						$jrtb .= $jrtbar->toolbarItem('edit_booking', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_deposit&contractUid='.$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'contract_uid' ]), '');
						$jrtb .= $jrtbar->endTable();
						echo $jrtb;
					}
				}

				gateway_log('<h2>Resetting temp booking data</h2>');
				$tmpBookingHandler->resetTempBookingData();

				return $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ];
			} else { // If there's a failure at this point it shouldn't be because the guest cancelled at any stage. This is intended to trap errors that shouldn't be passed to the guest on the site
				$subject = "Insert of booking failed. Likely caused by a database insert function failure.\n\n";
				gateway_log($subject);
			}
		}

		return false;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Used during the insert internet booking phase.
	 *
	 * Takes guest data from the tmpbookings table and inserts it into the guests table (or updates same, depending on the value of $existing_id).
	 */
	function insertGuestDeets($jomressession)
	{
		jr_import('jomres_encryption');
		$jomres_encryption = new jomres_encryption();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$xCustomers = $tmpBookingHandler->getGuestData();

		if (isset($xCustomers[ 'guests_uid' ])) {
			$guests_uid = (int) $xCustomers[ 'guests_uid' ];
		}

		$mos_userid = (int) $xCustomers[ 'mos_userid' ];
		$existing_id = (int) $xCustomers[ 'existing_id' ];
		$email = $xCustomers[ 'email' ];
		$firstname = $xCustomers[ 'firstname' ];
		$surname = $xCustomers[ 'surname' ];
		$house = $xCustomers[ 'house' ];
		$street = $xCustomers[ 'street' ];
		$town = $xCustomers[ 'town' ];
		$region = $xCustomers[ 'region' ];
		$country = $xCustomers[ 'country' ];
		$postcode = $xCustomers[ 'postcode' ];
		$landline = $xCustomers[ 'tel_landline' ];
		$mobile = $xCustomers[ 'tel_mobile' ];

		$property_uid = (int) $tmpBookingHandler->getBookingPropertyId($tmpBookingHandler);
		$defaultProperty = $property_uid;

		if ($mos_userid == 0) {
			if (!$thisJRUser->userIsManager && $thisJRUser->id > 0) {
				$mos_userid = $thisJRUser->id;
			} elseif (!$thisJRUser->userIsManager && $thisJRUser->id == 0) {
				$mos_userid = 0;
			}
		}

		if ($thisJRUser->is_partner) {
			$mos_userid = 0;
		}

		if ($mos_userid > 0) {
			$query = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int) $mos_userid."' AND `property_uid`= $property_uid LIMIT 1";
			$xistingGuests = doSelectSql($query);
			if (!empty($xistingGuests)) {
				foreach ($xistingGuests as $g) {
					$guests_uid = $g->guests_uid;
				}
			} else {
				$guests_uid = 0;
			}
		} elseif ($existing_id > 0) {
			$guests_uid = $existing_id;
		} else {
			$guests_uid = 0;
		}

		if ($guests_uid > 0) {
			$query = "UPDATE	#__jomres_guests SET 
			`enc_firstname`='".$jomres_encryption->encrypt($firstname)."',
			`enc_surname`='".$jomres_encryption->encrypt($surname)."',
			`enc_house`='".$jomres_encryption->encrypt($house)."',
			`enc_street`='".$jomres_encryption->encrypt($street)."',
			`enc_town`= '".$jomres_encryption->encrypt($town)."',
			`enc_county`= '".$jomres_encryption->encrypt($region)."',
			`enc_country`= '".$jomres_encryption->encrypt($country)."',
			`enc_postcode`= '".$jomres_encryption->encrypt($postcode)."',
			`enc_tel_landline`= '".$jomres_encryption->encrypt($landline)."',
			`enc_tel_mobile`= '".$jomres_encryption->encrypt($mobile)."',
			`property_uid`='".(int) $property_uid."',
			`enc_email`='".$jomres_encryption->encrypt($email)."'
		WHERE guests_uid = '".(int) $guests_uid."'";
			doInsertSql($query, false);
			$returnid = $guests_uid;
		} else {
			$query = 'INSERT INTO #__jomres_guests
			(
			`enc_firstname`,
			`enc_surname`,
			`enc_house`,
			`enc_street`,
			`enc_town`,
			`enc_county`,
			`enc_country`,
			`enc_postcode`,
			`enc_tel_landline`,
			`enc_tel_mobile`,
			`property_uid`,
			`enc_email`';
			$query .= ',`mos_userid`';
			$query .= ") VALUES (
			'".$jomres_encryption->encrypt($firstname)."',
			'".$jomres_encryption->encrypt($surname)."',
			'".$jomres_encryption->encrypt($house)."',
			'".$jomres_encryption->encrypt($street)."',
			'".$jomres_encryption->encrypt($town)."',
			'".$jomres_encryption->encrypt($region)."',
			'".$jomres_encryption->encrypt($country)."',
			'".$jomres_encryption->encrypt($postcode)."',
			'".$jomres_encryption->encrypt($landline)."',
			'".$jomres_encryption->encrypt($mobile)."',
			'".$property_uid."',
			'".$jomres_encryption->encrypt($email)."'";
			$query .= ",'".(int) $mos_userid."'";
			$query .= ')';
			$returnid = doInsertSql($query, false);
		}


		if (!$returnid) {
			echo 'Error saving users details';
			exit;
		}

		if ($thisJRUser->is_partner) {
			$query = 'UPDATE #__jomres_guests SET `partner_id`='.$thisJRUser->id." WHERE guests_uid = '".(int) $returnid."'";
			doInsertSql($query, '');
		}

		return $returnid;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Receives a date yyyy/mm/dd from the system and converts it to the configured output format.
	 */
	function outputDate($thedate)
	{
		// Assumes the date $theDate comes from the system in the format YYYY/mm/dd

		if (function_exists('jomres_cmsspecific_output_date')) {
			$thedate = str_replace('/', '-', $thedate);

			$formattedDate = jomres_cmsspecific_output_date($thedate);
		} else {
			$mrConfig = getPropertySpecificSettings();
			$date_elements = explode('/', $thedate);
			$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
			if ($mrConfig[ 'dateFormatStyle' ] == '1') {
				$formattedDate = date($mrConfig[ 'cal_output' ], $unixDate);
			} else {
				$formattedDate = strftime($mrConfig[ 'cal_output' ], $unixDate);
			}
		}

		return $formattedDate;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Makes the date for display in the javascript calendar. Will receive a yyyy/mm/dd formatted string and output it in the format desired by configuration settings.
	 */
	function JSCalmakeInputDates($inputDate, $siteCal = false)
	{
		$mrConfig = getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		// Lets make the calendar dates for display in the js calendar. will receive a Y/m/d formatted string &	output it in the desired format
		// m d y. Probably unneccesary, but we'll do it anyway, to be on the safe side.
		$date_elements = explode('/', $inputDate);
		$unixDate = mktime(0, 0, 0, (int)$date_elements[ 1 ], (int)$date_elements[ 2 ], (int)$date_elements[ 0 ]);

		$dateFormat = $jrConfig[ 'cal_input' ];
		switch ($dateFormat) {
			case '%d/%m/%Y':
				$theDate = date('d/m/Y', $unixDate);
				break;
			case '%Y/%m/%d':
				$theDate = date('Y/m/d', $unixDate);
				break;
			case '%m/%d/%Y':
				$theDate = date('m/d/Y', $unixDate);
				break;
			case '%d-%m-%Y':
				$theDate = date('d-m-Y', $unixDate);
				break;
			case '%Y-%m-%d':
				$theDate = date('Y-m-d', $unixDate);
				break;
			case '%m-%d-%Y':
				$theDate = date('m-d-Y', $unixDate);
				break;
			case '%d.%m.%Y':
				$theDate = date('d.m.Y', $unixDate);
				break;
			default:
				echo 'Error in date format. Cannot continue. If you have just installed Jomres you should log into the frontend as a property manager. This will set up sufficient data so that you can proceed.';
				exit;
				break;
		}

		return $theDate;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Converts a date that was supplied by the javascript calendar into yyyy/mm/dd for the system to use.
	 */
	function JSCalConvertInputDates($inputDate, $siteCal = false)
	{
		if ($inputDate == '') {
			return '';
		}
		// Lets convert the input calendar dates to Y/m/d
		$mrConfig = getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$dateFormat = $jrConfig[ 'cal_input' ];

		$test = explode( "-" , $inputDate );
		if (count($test) ==3) { // It's an api date, the date needs to be converted from YYYY-MM-DD to YYYY/MM/DD format so that existing functionality can work with the booking's dates
			$inputDate = str_replace("-" , '/' , $inputDate );
		}

		switch ($dateFormat) {
			case '%d/%m/%Y':
				$date_elements = explode('/', $inputDate);
				$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
				break;
			case '%Y/%m/%d':
				$date_elements = explode('/', $inputDate);
				$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
				break;
			case '%m/%d/%Y':
				$date_elements = explode('/', $inputDate);
				$unixDate = mktime(0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ]);
				break;
			case '%d-%m-%Y':
				$inputDate = str_replace("/" , "-" , $inputDate);
				$date_elements = explode('-', $inputDate);
				$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
				break;
			case '%Y-%m-%d':
				$inputDate = str_replace("/" , "-" , $inputDate);
				$date_elements = explode('-', $inputDate);
				$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ]);
				break;
			case '%m-%d-%Y':
				$inputDate = str_replace("/" , "-" , $inputDate);
				$date_elements = explode('-', $inputDate);
				$unixDate = mktime(0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ]);
				break;
			case '%d.%m.%Y':
				$inputDate = str_replace("/" , "." , $inputDate);
				$date_elements = explode('.', $inputDate);
				$unixDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ]);
				break;
			default:
				echo 'Error in date format. Cannot continue.';
				exit;
				break;
		}
		$theDate = date('Y/m/d', $unixDate);

		return $theDate;
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Imports settings from jomres_config.php for new properties, or import settings into the db during install.
	 */

	function importSettings($property_uid, $source_property_uid = 0)
	{
		$mrConfig = getPropertySpecificSettings();
		if ($property_uid == 0) { // We're installing, so all settings will be inserted from jomres_config.php into the database. We'll use property_uid 0 to create baseline settings that all other properties will use as their default when they call getPropertySpecificSettings
			include JOMRESPATH_BASE.JRDS.'jomres_config.php';
			foreach ($mrConfig as $k => $v) {
				if (!insertSetting(0, $k, $v)) {
					error_logging("Error, couldn't import setting ".$k.' - '.$v.' for property uid 0 into the jomres_settings table ');
				}
			}
		} else { // We have created a new property and are inserting their default settings into the db by pulling the default settings from the 0 property uid list
			$query = 'SELECT akey,value FROM #__jomres_settings WHERE property_uid = '.$source_property_uid." AND akey = '".$k."'";
			$settingsList = doSelectSql($query);
			foreach ($settingsList as $set) {
				if (!insertSetting($property_uid, $set->akey, $set->value)) {
					error_logging("Error, couldn't import setting ".$set->akey.' - '.$set->value.' for property uid '.$property_uid.' into the jomres_settings table ');
				}
			}
		}

		return;
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Inserts or updates a plugin's settings
	 */
	function insertSetting($property_uid, $k, $v)
	{
		$query = "SELECT value FROM #__jomres_settings WHERE property_uid = '".(int) $property_uid."' AND akey = '".$k."'";
		$settingsList = doSelectSql($query);
		if (empty($settingsList)) {
			$query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int) $property_uid."','".$k."','".$v."')";
		} else {
			$query = "UPDATE #__jomres_settings SET `value`='".$v."' WHERE property_uid = '".(int) $property_uid."' and akey = '".$k."'";
		}

		return doInsertSql($query, '');
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Saves a plugin's settings.
	 */
	function savePlugin($plugin)
	{
		$defaultProperty = getDefaultProperty();
		foreach ($_POST as $k => $v) {
			$dirty = (string) $k;
			$k = RemoveXSS($dirty);
			if ($k != 'task' && $k != 'plugin') {
				$values[ $k ] = jomresGetParam($_POST, $k, '');
			}
		}
		foreach ($values as $k => $v) {
			$query = "SELECT id FROM #__jomres_pluginsettings WHERE prid = '".(int) $defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
			$settingList = doSelectSql($query);
			if (!empty($settingList)) {
				/*
			foreach ($settingList as $set)
				{
				$id=$set->id;
				}
			*/
				$query = "UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = '".(int) $defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
				doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', false));
			} else {
				$query = "INSERT INTO #__jomres_pluginsettings
				(`prid`,`plugin`,`setting`,`value`) VALUES
				('" .(int) $defaultProperty."','$plugin','$k','$v')";
				doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_INSERT', '_JOMRES_MR_AUDIT_PLUGINS_INSERT', false));
			}
		}
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('plugin_save.html');
		$tmpl->displayParsedTemplate();

		$webhook_notification							    = new stdClass();
		$webhook_notification->webhook_event				= 'plugin_settings_saved';
		$webhook_notification->webhook_event_description	= 'Logs when plugin settings, typically gateways, are added/edited.';
		$webhook_notification->webhook_event_plugin		    = 'core';
		$webhook_notification->data						    = new stdClass();
		$webhook_notification->data->property_uid		    = $defaultProperty;
		$webhook_notification->data->plugin 				= $plugin;
		add_webhook_notification($webhook_notification);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns the property's name when passed a property uid.
	 */
	function getPropertyName($property_uid)
	{
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		if ((int) $property_uid == 0) {
			return '';
		}

		return $current_property_details->get_property_name($property_uid);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Works out the difference between two dates in days.
	 */
	function dateDiff($interval, $first_date, $second_date)
	{
		$a = explode('/', $first_date);
		$b = explode('/', $second_date);

		if (strlen($a[0]) < 4 || strlen($b[0]) < 4) {
			return 1;
		}

		if (checkdate($a[1], $a[2], $a[0]) && checkdate($b[1], $b[2], $b[0])) {
			$datetime1 = new DateTime($first_date);
			$datetime2 = new DateTime($second_date);
			$diff = $datetime1->diff($datetime2);

			switch ($interval) {
				case 'd':
					return $diff->days;
					break;
				case 'w':
					return $diff->weeks;
					break;
				default:
					return $diff->days;
					break;
			}
		}

		return 1;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Used by edit resource script to show room image.
	 *
	 * TODO Update functionality in j06002edit_resource.class.php to use modern functionality and remove this function
	 *
	 */
	function getImageForProperty($imageType, $property_uid, $itemUid)
	{
		$fileLocation = false;
		switch ($imageType) {
			case 'property':
				$default_image = JOMRES_IMAGES_RELPATH.'jrlogo.png';
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.'_property_'.$itemUid.'.jpg')) {
					$fileLocation = JOMRES_IMAGELOCATION_RELPATH.$property_uid.'_property_'.$property_uid.'.jpg';
				} else {
					$fileLocation = $default_image;
				}
				break;
			case 'room':
				$default_image = JOMRES_IMAGES_RELPATH.'noimage.gif';
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.'_room_'.$itemUid.'.jpg')) {
					$fileLocation = JOMRES_IMAGELOCATION_RELPATH.$property_uid.'_room_'.$itemUid.'.jpg';
				} else {
					$fileLocation = $default_image;
				}
				break;
			default:
				return false;
		}

		return $fileLocation;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Constructs the mrConfig data when passed a property uid.
	 */
	function getPropertySpecificSettings($property_uid = null , $force_reload = false )
	{

		$propertyConfig = jomres_singleton_abstract::getInstance('jomres_config_property_singleton');

		if ($propertyConfig->property_uid == 0) {
			$propertyConfig->init($property_uid , $force_reload );
		} else if ($force_reload) {
			$propertyConfig->init($property_uid , true );
		}

		if ($property_uid == null) {
			$mrConfig = $propertyConfig->get();
		} else {
			if ((int)$property_uid != (int)$propertyConfig->property_uid) {
				$propertyConfig->load_property_config($property_uid);
				$mrConfig = $propertyConfig->get();
			} else {
				$mrConfig = $propertyConfig->get();
			}
		}

		return $mrConfig;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Generic OR creation function.
	 *
	 * Pass a number of ids and the field you're searching on, will return ( `xyx`='1' OR `xyx`='2' OR`xyx`='3' ) etc.
	 */
	function genericOr($idArray, $fieldToSearch, $idArrayisInteger = true)
	{
		$newArr = array();
		foreach ($idArray as $id) {
			$newArr[ ] = $id;
		}
		$idArray = $newArr;
		$txt = ' ( `'.$fieldToSearch.'`=';
		for ($i = 0, $n = count($idArray); $i < $n; ++$i) {
			if ($idArrayisInteger) {
				$id = (int) $idArray[ $i ];
			} else {
				$id = $idArray[ $i ];
			}
			$txt .= " '$id' ";
			if ($i < count($idArray) - 1) {
				$txt .= ' OR `'.$fieldToSearch.'`= ';
			}
		}
		$txt .= ' ) ';

		return $txt;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Publish the user's property. Toggle action.
	 */
	function publishProperty()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$defaultProperty = jomresGetParam($_REQUEST, 'property_uid', 0);

		if ($defaultProperty == 0) {
			$defaultProperty = getDefaultProperty();
		}

		if ($defaultProperty == 0) {
			return false;
		}

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($defaultProperty);

		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
		$jomres_properties->propertys_uid = $defaultProperty;

		if (!$current_property_details->approved) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=cannot_redirect'), '');
		} else {
			$jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');

			if (in_array($defaultProperty, $thisJRUser->authorisedProperties)) {
				if ($current_property_details->published) {
					if ($jomres_properties->setPublished(0)) {
						$MiniComponents->triggerEvent('02274'); // Optional trigger after property unpublished

						$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', false));
					} else {
						$jomres_messaging->set_message('There was a problem unpublishing the property.');

						return false;
					}
				} else {
					if ($jomres_properties->setPublished(1)) {
						$MiniComponents->triggerEvent('02273'); // Optional trigger after property published

						$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', false));
					} else {
						$jomres_messaging->set_message('There was a problem publishing the property.');

						return false;
					}
				}
			} else {
				echo "You naughty little tinker, that's not your property";

				return false;
			}

			return true;
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns the editor area as a text string for inclusion in a template
	 */
	function editorAreaText($name, $content, $hiddenField, $width, $height, $col, $row)
	{
		return jomres_cmsspecific_getTextEditor($name, $content, $hiddenField, $width, $height, $col, $row);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Increments the pcounter table when a property clicked and sets a cookie to say that this user has clicked this property.
	 */
	function propertyClicked($p_uid)
	{
		//$sessionCookieName	= md5( 'site'.get_showtime('live_site'));
		$cookiename = "jomresp$p_uid";
		$alreadyClicked = jomresGetParam($_COOKIE, $cookiename, '0');
		if (!$alreadyClicked) {
			@setcookie($cookiename, '1', time() + 60 * 60 * 24 * 30);
			$query = "INSERT INTO #__jomres_pcounter (`count`, `p_uid`) VALUES (1, ".(int)$p_uid.") ON DUPLICATE KEY UPDATE `count` = `count` + 1";

			if (!doInsertSql($query, '')) {
				echo 'Mysql went byebyes';
				exit();
			}
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Makes a popup link.
	 *
	 *          Because why not? It's still 2005 somewhere, isn't it?
	 *
	 *          TODO : Modernise this!
	 */
	function makePopupLink($link, $text, $isLocalPage = true, $width = 550, $height = 500)
	{
		$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width='.$width.',height='.$height.',directories=no,location=no';
		$format = '';
		if (defined('_JOMRES_NEWJOOMLA')) {
			$format = '&tmpl='.get_showtime('tmplcomponent');
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$thelink = "<a href=\"javascript:void window.open('".$link.$format."', 'win2', '".$status."');\" rel=\"nofollow\" title=\"\">".$text.'</a>';

		$thelink = str_replace('&amp;', '&', $thelink);
		$thelink = str_replace('&', '&amp;', $thelink);

		return $thelink;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Triggers the property header event/mini-component.
	 */
	function property_header($property_uid)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$MiniComponents->specificEvent('06000', 'show_property_header', array('property_uid' => $property_uid));
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Sends emails to admins.
	 */
	function sendAdminEmail($subject, $message, $send_post = false)
	{
		$jomresConfig_mailfrom = get_showtime('mailfrom');
		$jomresConfig_fromname = get_showtime('fromname');

		$m = '';
		if (is_array($message) && !empty($message)) {
			foreach ($message as $k => $v) {
				$m .= $k.' - '.$v.'\n';
			}
			$message = $m;
		}
		if (is_object($message)) {
			$m = print_r($message);
			$message = $m;
		}

		if ($send_post) {
			$message .= "\n\n\nPost details follow (may not be applicable to email) ";
			foreach ($_POST as $key => $value) {
				$message .= "\n$key: $value";
			}
		}

		$admins = jomres_cmsspecific_getCMS_users_admin_getalladmins_ids();
		foreach ($admins as $admin) {
			jomresMailer($jomresConfig_mailfrom, $jomresConfig_fromname, $admin[ 'email' ], $subject, $message);
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * It...er...gets the month name from what is stored in the language file.
	 */
	function getMonthName($monthNo)
	{
		$monthNo = intval($monthNo);

		return jr_gettext('_JRPORTAL_MONTHS_LONG_'.$monthNo, '_JRPORTAL_MONTHS_LONG_'.$monthNo);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Used by jomres toolbar functionality to show images
	 *
	 * @todo this ancient stuff
	 *
	 */
	function makeImageValid($imageName = '')
	{
		$image = str_replace('+', '%20', $imageName);
		$image = str_replace('%2F', '/', $image);

		return $image;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Formats a string as a float
	 *
	 * @todo remove and test, doesn't seem to be used any more
	 *
	 */
	function parseFloat($ptString)
	{
		if (strlen($ptString) == 0) {
			return false;
		}

		$pString = str_replace(' ', '', $ptString);

		if (substr_count($pString, ',') > 1) {
			$pString = str_replace(',', '', $pString);
		}

		if (substr_count($pString, '.') > 1) {
			$pString = str_replace('.', '', $pString);
		}

		$pregResult = array();

		$commaset = strpos($pString, ',');
		if ($commaset === false) {
			$commaset = -1;
		}

		$pointset = strpos($pString, '.');
		if ($pointset === false) {
			$pointset = -1;
		}

		$pregResultA = array();
		$pregResultB = array();

		if ($pointset < $commaset) {
			preg_match('#(([-]?[0-9]+(\.[0-9])?)+(,[0-9]+)?)#', $pString, $pregResultA);
		}
		preg_match('#(([-]?[0-9]+(,[0-9])?)+(\.[0-9]+)?)#', $pString, $pregResultB);
		if ((isset($pregResultA[ 0 ]) && (!isset($pregResultB[ 0 ]) || strstr($preResultA[ 0 ], $pregResultB[ 0 ]) == 0 || !$pointset))) {
			$numberString = $pregResultA[ 0 ];
			$numberString = str_replace('.', '', $numberString);
			$numberString = str_replace(',', '.', $numberString);
		} elseif (isset($pregResultB[ 0 ]) && (!isset($pregResultA[ 0 ]) || strstr($pregResultB[ 0 ], $preResultA[ 0 ]) == 0 || !$commaset)) {
			$numberString = $pregResultB[ 0 ];
			$numberString = str_replace(',', '', $numberString);
		} else {
			return false;
		}
		$result = (float) $numberString;

		return $result;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Quicker replacement to scandir to find directory contents
	 */
	function get_directory_contents($dir)  // Replacement for scandir which seems to be causing system slowdowns
	{
		if (is_dir($dir)) {
			if ($handle = opendir($dir)) {
				$files = array();
				while (false !== ($file = readdir($handle))) {
					$files[] = $file;
				}
				closedir($handle);
				if (is_array($files)) {
					sort($files);
				}

				return $files;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Quicker replacement for scandir to get sub directories
	 */
	function scandir_getdirectories($path)
	{
		$data = array();
		if (is_dir($path)) {
			foreach (get_directory_contents($path) as $dir) {
				if (is_dir($path.$dir)) {
					if ($dir != '.' && $dir != '..') {
						$data[ ] = $dir;
					}
				}
			}
		}
		//echo "scandir_getdirectories executed for ".$path.'<br>';
		return $data;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Quicker replament for scandir
	 */
	function scandir_getfiles($path, $extension = false)
	{
		$data = array();
		if (is_dir($path)) {
			foreach (get_directory_contents($path) as $file) {
				if (is_file($path.JRDS.$file)) {
					if (!$extension) {
						$data[ ] = $file;
					} else {
						$filename = strtolower($file);
						$exts = explode('.', $filename);
						$n = count($exts) - 1;
						$exts = $exts[ $n ];
						if ($exts == $extension) {
							$data[ ] = $file;
						}
					}
				}
			}
		}
		//echo "scandir_getfiles executed for ".$path.'<br>';
		return $data;
	}

// Credit : http://www.php.net/manual/en/function.scandir.php#109140
	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Often used to find obsolete files, so we'll pass back an empty array if the directory does not exist
	 */
	function scandir_getfiles_recursive($directory, $recursive = true, $listDirs = false, $listFiles = true, $exclude = '')
	{
		$arrayItems = array();
		$skipByExclude = false;
		if (!is_dir($directory)) {
			throw new Exception("Tried to scan a directory that doesn't exist ".(string) $directory);
		}
		$handle = opendir($directory);
		if ($handle) {
			while (false !== ($file = readdir($handle))) {
				preg_match("/(^(([\.]){1,2})$|(\.(svn|git|md))|(Thumbs\.db|\.DS_STORE))$/iu", $file, $skip);
				if ($exclude) {
					preg_match($exclude, $file, $skipByExclude);
				}
				if (!$skip && !$skipByExclude) {
					if (is_dir($directory.$file)) {
						if ($recursive) {
							$arrayItems = array_merge($arrayItems, scandir_getfiles_recursive($directory.$file.DIRECTORY_SEPARATOR, $recursive, $listDirs, $listFiles, $exclude));
						}
						if ($listDirs) {
							$file = $directory.$file;
							$arrayItems[ ] = $file;
						}
					} else {
						if ($listFiles) {
							$file = $directory.$file;
							$arrayItems[ ] = $file;
						}
					}
				}
			}
			closedir($handle);
		}

		return $arrayItems;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Is the host CMS Joomla?
	 */
	function this_cms_is_joomla()
	{
		if (_JOMRES_DETECTED_CMS != 'joomla3' && _JOMRES_DETECTED_CMS != 'joomla4') {
			return false;
		}

		return true;
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Used by editing mode and label translation functionality to update custom text tables
	 */
	function updateCustomText($theConstant, $theValue, $audit = true, $property_uid = null, $language_context = '0' , $target_language = '')
	{
		$custom_text = jomres_singleton_abstract::getInstance('custom_text');

		return $custom_text->updateCustomText($theConstant, $theValue, $audit, $property_uid, $language_context , $target_language);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Get the current domain.
	 */
	function jomresGetDomain()
	{
		if (!isset($_SERVER[ "SERVER_NAME" ])) {
			$thisSvrName = 'CLI'; // Probably a CLI call if SERVER_NAME is not set in the global var
		} else {
			$thisSvrName = $_SERVER[ 'SERVER_NAME' ];
		}

		$dmn = str_replace('http://', '', $thisSvrName);

		//$domain=str_replace("www.","",$dmn);
		//echo "<H2>Found domain".$domain."</H2>";
		return strtolower($dmn);
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Creates new API keys (not to be confused with REST API keypairs) for properties.
	 */
	function createNewAPIKey()
	{
		$apikey = generateJomresRandomString();
		$keeplooking = true;
		while ($keeplooking):
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE apikey = '".$apikey."' LIMIT 1";
			$plist = doSelectSql($query);
			$query = "SELECT manager_uid FROM #__jomres_managers WHERE apikey = '".$apikey."' LIMIT 1";
			$clist = doSelectSql($query);
			if (empty($plist) && empty($clist)) {
				$keeplooking = false;
			}
			if ($keeplooking) {
				$apikey = generateJomresRandomString();
			}
		endwhile;

		return $apikey;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Creates a random string, default length 50 chars.
	 *
	 *          Used in a variety of places, but primarily for datepicker input names so that you can have multiple pickers on a page.
	 */
	function generateJomresRandomString($length = 50)
	{
		$str = '';
		// define possible characters
		//$possible = "0123456789bcdfghjkmnpqrstvwxyz";
		$possible = 'abcdfghijklmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYZ';
		// set up a counter
		$i = 0;
		// add random characters to $str until $length is reached
		while ($i < $length) {
			// pick a random character from the possible ones
			$char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
			$str .= $char;
			++$i;
		}

		return $str;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Find the property manager's currently active property.
	 */
	function getDefaultProperty()
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		return (int) $thisJRUser->currentproperty;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Create SEF urls, hands off to CMS specific functions to do the heavy lifting.
	 */
	function jomresURL($link)
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$link = jomres_cmsspecific_makeSEF_URL($link);

		$link = str_replace('&amp;', '&', $link);

		return $link;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Returns the guest details from the tmpguests session data.
	 */
	function getbookingguestdata()
	{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$userDeets = $tmpBookingHandler->getGuestData();

		return $userDeets;
	}

	/**
	 *
	 *  @package Jomres\Core\Functions
	 *
	 * Returns the current Jomres version.
	 */
	function get_jomres_current_version()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		return $jrConfig[ 'version' ];
	}

	/**
	 *
	 *  @package Jomres\Core\Functions
	 *
	 * Gets the latest version of Jomres from the updates server.
	 */
	function get_latest_jomres_version($outputText = true)
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (file_exists(JOMRES_TEMP_ABSPATH.'latest_version.php')) {
			$last_modified = filemtime(JOMRES_TEMP_ABSPATH.'latest_version.php');
			$seconds_timediff = time() - $last_modified;
			if ($seconds_timediff > 3600) {
				unlink(JOMRES_TEMP_ABSPATH.'latest_version.php');
			} else {
				$buffer = file_get_contents(JOMRES_TEMP_ABSPATH.'latest_version.php');
			}
		}

		if (!file_exists(JOMRES_TEMP_ABSPATH.'latest_version.php')) {
			$base_uri = 'http://updates.jomres4.net/';
			$query_string = 'versions.php';

			$buffer = '';

			try {
				$client = new GuzzleHttp\Client([
					'base_uri' => $base_uri
				]);

				logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');

				$buffer = $client->request('GET', $query_string)->getBody()->getContents();
			}
			catch (Exception $e) {
				$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
				$jomres_user_feedback->construct_message(array('message'=>'Could not get latest Jomres version', 'css_class'=>'alert-danger alert-error'));
			}

			if ($buffer != '') {
				file_put_contents(JOMRES_TEMP_ABSPATH.'latest_version.php', $buffer);
			}
		}

		if (empty($buffer)) {
			if ( $outputText )
				echo '<div class="alert alert-error alert-danger">Sorry, could not get latest version of Jomres, is there a firewall preventing communication with http://updates.jomres4.net ? Alternatively, please check that CURL is enabled on this webserver</div>';
			else
				return false;
		} else {
			return $buffer;
		}
	}

	/**
	 *  @package Jomres\Core\Functions
	 *
	 * Returns true if this version is latest, otherwise returns false.
	 *
	 * outputText flag is for use by deferred tasks that will email admin if the system has been updated.
	 */
	function check_jomres_version( $outputText = true )
	{
		$this_version = get_jomres_current_version();
		$latest_version = get_latest_jomres_version($outputText);
		if ($latest_version == false ) { // Comms error talking to Jomres.net server, can't do anything else so we'll return NULL because we don't want the system doing anything else.
			return null;
		}
		$latest_jomres_version = explode('.', $latest_version);
		$this_jomres_version = explode('.', $this_version);

		if (!isset($latest_jomres_version[ 2 ])) {
			$latest_jomres_version[ 2 ] = 0;
		}
		if (!isset($this_jomres_version[ 2 ])) {
			$this_jomres_version[ 2 ] = 0;
		}

		$latest_major_version = $latest_jomres_version[ 0 ];
		$latest_minor_version = $latest_jomres_version[ 1 ];
		$latest_revis_version = $latest_jomres_version[ 2 ];

		$current_major_version = $this_jomres_version[ 0 ];
		$current_minor_version = $this_jomres_version[ 1 ];
		$current_revis_version = $this_jomres_version[ 2 ];

		$current_version_is_uptodate = true;

		if ($current_major_version < $latest_major_version
		) {
			$current_version_is_uptodate = false;
		}

		if ($current_major_version <= $latest_major_version && $current_minor_version <= $latest_minor_version && $current_revis_version < $latest_revis_version
		) {
			$current_version_is_uptodate = false;
		}

		if ($current_major_version <= $latest_major_version && $current_minor_version < $latest_minor_version
		) {
			$current_version_is_uptodate = false;
		}

		return $current_version_is_uptodate;
	}

	/**
	 *  @package Jomres\Core\Functions
	 *
	 * Is Development mode enabled.
	 *
	 * If yes response will include a string warning about leaving dev mode on.
	 */
	function development_mode_test()
	{
		$response = '';
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($jrConfig[ 'development_production' ] != 'production') {
			$highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
			$response = "<div class='".$highlight."'>Be aware that you are using the site with Development mode enabled. Unless you are a developer we do not advise that you leave this setting enabled. To change it go to Site Settings > Debugging tab and set the mode to Production.</div>";
		}

		return $response;
	}

	/**
	 *  @package Jomres\Core\Functions
	 *
	 * Is safe mode on
	 *
	 * If yes response will return a string warning about safe mode
	 */

	function safe_mode_test()
	{
		$response = '';
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($jrConfig[ 'safe_mode' ] != '0') {
			$highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
			$response = "<div class='".$highlight."'><strong><em>Safe mode is enabled, no plugins will function, including the plugin manager. You can change this in the Jomres > Settings > Site Configurat > Debugging tab.</em></strong>	</div>";
		}

		return $response;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Try to determine php.ini's max input vars setting then show an alert if the setting is too low for micromanage tariff editing mode.
	 */
	function max_input_vars_test()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$response = '';
		$max_vars = (int) ini_get('max_input_vars');
		if ($max_vars < 1001 && isset($MiniComponents->registeredClasses[ '00005']['advanced_micromanage_tariff_editing_modes' ])) { // The default is 1000 on most installations
			$highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
			$response = "<div class='".$highlight."'>Please note, your max_input_vars setting seems to be set to 1000, which is the default setting. If you're using the Micromanage or Standard tariff editing modes and wish to save prices for more than a year in advance, we recommend that you change this setting to 3000 or more. <a href=\"http://www.jomres.net/manual/developers-guide/56-other-discussions/364-max-input-vars-max-input-vars-in-php-ini\" target=\"_blank\">This page </a>has  more information.</div>";
		}

		return $response;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Try to determine if suhosin has a max_value_length setting that can cause problems.
	 */
	function suhosin_get_max_vars_test()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		$response = '';
		$max_vars = (int) ini_get('suhosin.get.max_value_length');

		if ($max_vars != 0 && $max_vars <= 512) { // The default is 512 on most installations with the suhosin patch
			$highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
			$response = "<div class='".$highlight."'>Please note that PHP setups with the suhosin patch installed will have a default limit of 512 characters for get parameters. Although bad practice, most browsers (including IE) supports URLs up to around 2000 characters, while Apache has a default of 8000. To add support for long parameters with suhosin, add suhosin.get.max_value_length = <limit> in php.ini</div>";
		}

		return $response;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check to ensure that ZipArchive is installed in PHP
	 */
	function ziparchive_test()
	{
		$response = '';

		if (!class_exists('ZipArchive')) {
			$highlight = (using_bootstrap() ? 'alert alert-error alert-danger' : 'ui-state-highlight');
			$response = "<div class='".$highlight."'>The PHP library ZipArchive is not available, therefore you will not be able to install any plugins. Please contact your hosts for more information about installing the ZipArchive library.</div>";
		}

		return $response;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check that the google maps api key has been set
	 */
	function gmaps_apikey_check()
	{
		return;
		$message = '';
		$highlight = (using_bootstrap() ? 'alert alert-warning' : 'ui-state-highlight');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig['google_maps_api_key']) || $jrConfig['google_maps_api_key'] == '') {
			$message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_GMAP_KEY_WARNING', '_JOMRES_CONFIG_GMAP_KEY_WARNING', false).'</div>';
		}

		return $message;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check that the ip info db api key is set
	 */
	function ipinfodb_apikey_check()
	{
		$message = '';
		$highlight = (using_bootstrap() ? 'alert alert-info' : 'ui-state-default');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($jrConfig['use_conversion_feature'] && (!isset($jrConfig['geolocation_api_key']) || $jrConfig['geolocation_api_key'] == '')) {
			$message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', '_JOMRES_CONFIG_IPINFODB_KEY_WARNING', false).'</div>';
		}

		return $message;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check that the OpenExchange rates service's API key has been set
	 */
	function openexchangerates_apikey_check()
	{
		$message = '';
		$highlight = (using_bootstrap() ? 'alert alert-info' : 'ui-state-default');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($jrConfig['use_conversion_feature'] && (!isset($jrConfig['openexchangerates_api_key']) || $jrConfig['openexchangerates_api_key'] == '')) {
			$message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', '_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', false).'</div>';
		}

		return $message;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check to see if the log paths setting has been set.
	 */
	function logs_path_check()
	{
		$message = '';
		$highlight = (using_bootstrap() ? 'alert alert-warning' : 'ui-state-highlight');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '') {
			$message = '<div class="'.$highlight.'">'.jr_gettext('_JOMRES_CONFIG_LOG_LOCATION_WARNING', '_JOMRES_CONFIG_LOG_LOCATION_WARNING', false).'</div>';
		}

		return $message;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check to see if the image file paths need to be imported into the database.
	 */
	function db_images_import_check()
	{
		$message = '';
		$highlight = (using_bootstrap() ? 'alert alert-warning' : 'ui-state-highlight');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($jrConfig['images_imported_to_db'] == '0') {
			$message = '
<div class="'.$highlight.'">
	<p>'.jr_gettext('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING','_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', false).'</p>
	<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=media_centre_dbimport" class="btn btn-warning">'.jr_gettext('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION','_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', false).'</a>
</div>';
		} else {
			return '';
		}

		return $message;
	}

	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Check to see if it's possible to import s3 images.
	 */
	function s3_images_import_check()
	{
		$message = '';
		$highlight = (using_bootstrap() ? 'alert alert-danger alert-error' : 'ui-state-error');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (
			$jrConfig['images_imported_to_db'] == '1' &&
			$jrConfig['images_imported_to_s3'] == '0' &&
			$jrConfig['amazon_s3_active'] == '1' &&
			$jrConfig['amazon_s3_bucket'] != '' &&
			$jrConfig['amazon_s3_key'] != '' &&
			$jrConfig['amazon_s3_secret'] != ''
		) {
			$message = '
<div class="'.$highlight.'">
	<p>'.jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', false).'</p>
	<p><strong>'.strtoupper(jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', false)).'</strong></p>
	<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=media_centre_s3import" class="btn btn-danger btn-error">'.jr_gettext('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', false).'</a>
</div>';
		} else {
			return '';
		}

		return $message;
	}


	/**
	 *
	 * @package Jomres\Core\Functions
	 *
	 * Let's add the array_key_last function if it doesn't exist as array_key_last came in php 7.3
	 */

	if (! function_exists("array_key_last")) {
		function array_key_last($array) {
			if (!is_array($array) || empty($array)) {
				return NULL;
			}

			return array_keys($array)[count($array)-1];
		}
	}
