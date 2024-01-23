<?php
	/**
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.8.0
	 *
	 * @copyright	2005-2024 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	use Joomla\CMS\Factory;
	use Joomla\CMS\Version;

	/**
	 *
	 * Sets up the Jomres framework.
	 *
	 * The REST API is does not have to use the Jomres framework, however it saves time to use the framework and API features can optionally request the framework to make use of already existing functions and classes.
	 *
	 */

	if (!defined('JOMRES_ROOT_DIRECTORY')) {
		if (file_exists(dirname(__FILE__).'/../jomres_root.php')) {
			require_once dirname(__FILE__).'/../jomres_root.php';
		} else {
			define('JOMRES_ROOT_DIRECTORY', 'jomres');
		}
	}

	if (defined('API_STARTED')) {
		//we need to include cms specific files
		load_cms_environment();
	}

	require_once dirname(__FILE__).'/integration.php';

//jomres framework
	$all_classes = get_declared_classes();
	if (!jomres_cmsspecific_areweinadminarea() || in_array('ElementorPro\Plugin' , $all_classes) ) {
		load_jomres_environment();
	}

	/**
	 *
	 * Include required CMS scripts
	 *
	 */
	function load_cms_environment()
	{
		if (file_exists(dirname(__FILE__).'/../configuration.php')) {
			define('JPATH_BASE', dirname(__FILE__).'/../');
			require_once JPATH_BASE.'includes/defines.php';
			require_once JPATH_BASE.'includes/framework.php';
			if (file_exists(JPATH_BASE.DIRECTORY_SEPARATOR.'libraries'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Version.php')) { // Joomla 4
				$version = new Version();
				$JoomlaVersion = $version->getShortVersion(); // I couldn't get reflection to work here for some reason so we'll do it the old fashioned way
				$bang = explode(".",$JoomlaVersion);
				$MajorVersion = (int)$bang[0];

				if($MajorVersion == 4) {
					$container = \Joomla\CMS\Factory::getContainer();
					$container->alias(\Joomla\Session\SessionInterface::class, 'session.web.site');
					$app      = $container->get(\Joomla\CMS\Application\SiteApplication::class);
				} else { // Joomla 3.10+
					$app = JFactory::getApplication('site');
				}
			} else { // Joomla 3 < 3.10
				/* Create the Application */
				$app = JFactory::getApplication('site');
			}
		} elseif (!defined('WPINC') && file_exists(dirname(__FILE__).'/../wp-load.php')) {
			define('WP_USE_THEMES', false);
			/** Loads the WordPress Environment */
			require_once dirname(__FILE__).'/../wp-load.php';
		} else {
			die('Could not detect CMS. Exiting.');
		}

		return true;
	}

	/**
	 *
	 * Setup the Jomres framework for use by functionality that doesn't come directly from the host CMS (e.g. the REST API)
	 *
	 */
	function load_jomres_environment()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		/**
		 *
		 * site config object
		 *
		 */
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		/**
		 *
		 * get all properties in system.
		 *
		 */
		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
		$jomres_properties->get_all_properties();

		/**
		 *
		 * language object - load default language file for context
		 *
		 */
		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
		$jomres_language->get_language();

		/**
		 *
		 * custom text object - load all custom text
		 *
		 */
		$customTextObj = jomres_singleton_abstract::getInstance('custom_text');

		/**
		 *
		 * trigger 00001 event
		 *
		 */
		$MiniComponents->triggerEvent('00001');


		/**
		 *
		 * trigger 00002 event
		 *
		 */
		$MiniComponents->triggerEvent('00002');


		/**
		 *
		 * Setup the user object
		 *
		 */
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		/**
		 *
		 * 00003 trigger point - input filtering
		 *
		 */
		$MiniComponents->triggerEvent('00003');

		/**
		 *
		 * jomres cron object
		 *
		 */
		if (!defined('API_STARTED')) {
			$cron = jomres_singleton_abstract::getInstance('jomres_cron');
			if ($cron->method == 'Minicomponent' && !AJAXCALL) {
				$cron->triggerJobs();
			}
		}

		/**
		 *
		 * Setup the booking object*
		 *
		 * Called the booking object, in reality it is the object that retrieves, holds for use during run, and stores specific user variables plus booking details.
		 *
		 */
		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		/**
		 *
		 * Setup the Jomres session
		 *
		 */
		if (is_null($tmpBookingHandler->jomressession) || $tmpBookingHandler->jomressession == '') {
			$tmpBookingHandler->initBookingSession();

			$jomressession = $tmpBookingHandler->getJomressession();
			set_showtime('jomressession', $jomressession);
		}

		/**
		 *
		 * currency exchange rates
		 *
		 */
		$jomres_currency_exchange_rates = jomres_singleton_abstract::getInstance('jomres_currency_exchange_rates');

		/**
		 *
		 * set currency code to the appropriate one for the detected location
		 *
		 */
		$jomres_geolocation = jomres_singleton_abstract::getInstance('jomres_geolocation');
		$jomres_geolocation->auto_set_user_currency_code();

		$property_uid = (int) detect_property_uid();

		$mrConfig = getPropertySpecificSettings($property_uid);

		/**
		 *
		 * load property type specific language file
		 *
		 */
		if ($property_uid > 0) {
			set_showtime('property_uid', $property_uid);
			$original_language_context = get_showtime('property_type');
			if (!is_null($original_language_context)) {
				set_showtime('old_language_context', $original_language_context);
			}

			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data($property_uid);

			//since we have a property uid, we also have a property type, so let`s set a showtime
			set_showtime('property_type', $current_property_details->property_type);
			set_showtime('ptype_id', $current_property_details->ptype_id);

			//load property type specific language file if $property_type is set
			$jomres_language->get_language($current_property_details->property_type);
		}

		if (!AJAXCALL) {
			/**
			 *
			 * add javascript to head
			 *
			 */
			$MiniComponents->triggerEvent('00004');

			/**
			 *
			 * trigger that sets up Core menu items
			 *
			 */
			//$MiniComponents->specificEvent('09995', 'menu', array()); //core menu items
		}

		/**
		 *
		 * Set the include_room_booking_functionality showtime variable to a default of true
		 *
		 * @todo find a better place
		 *
		 *
		 */
		set_showtime('include_room_booking_functionality', true);

		/**
		 *
		 * 00005 trigger point
		 *
		 * For example, plugins use 00005 trigger point to include language files, setup system variables
		 *
		 */
		$MiniComponents->triggerEvent('00005');

		/**
		 *
		 * 99999 trigger point
		 *
		 * Post run "things" to be done.
		 *
		 */
		$MiniComponents->triggerEvent('99999', array());

		return true;
	}
