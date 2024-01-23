<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.7.2
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	/**
	 * The true heart of Jomres. Finds all core and plugin minicomponents for Jomres, enables calling of specific minicomponents and can return minicomponent stored variables.
	 */
	#[AllowDynamicProperties]
	class mcHandler
	{

		/**
		 *
		 * @package Jomres\Core\Classes
		 *
		 */

		public function __construct()
		{
			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$this->miniComponentData = array();
			$this->miniComponentDirectories = array();
			$this->template_touch = false;
			$this->log = array();
			$this->logging_enbled = false;

			if (isset($jrConfig[ 'errorChecking' ])) {
				if ($jrConfig[ 'errorChecking' ] == '1') {
					$this->logging_enbled = true;
				}
			}

			$this->currentEvent = '';

			$registry = jomres_singleton_abstract::getInstance('minicomponent_registry');

			if (!isset($registry->registeredClasses[ '00001' ]['start'])) {
				$registry->regenerate_registry();
			}

			$this->registeredClasses = $registry->get_registered_classes();
			$this->miniComponentDirectories = $registry->get_minicomponent_directories();
		}

		/**
		 *
		 *
		 *
		 */

		public function touch_templates()
		{
			$mrConfig = getPropertySpecificSettings(0);

			$mrConfig[ 'editingOn' ] = '1';
			$eventArgs = null;
			$this->template_touch = true;
			$classFileSuffix = '.class.php';

			echo jr_gettext('_JOMRES_CUSTOMTEXT_TOUCHTEMPLATES', 'This feature allows you to edit language text for any template configured to allow you to edit text. You will be editing the default text for every property and saving that text to the database. HTML code is not allowed. To change the language that the text is saved for, change the default language in the Site Settings -> Misc tab. Click on a line to edit the text.');
			echo '<br/>';

			foreach ($this->registeredClasses as $eventPoint => $ev) {
				foreach ($ev as $eventName => $eventDetails) {
					$ePointFilepath = $eventDetails[ 'filepath' ];
					set_showtime('ePointFilepath', $eventDetails[ 'filepath' ]);

					$filename = 'j'.$eventPoint.$eventName.$classFileSuffix;

					if (file_exists($eventDetails[ 'filepath' ].$filename)) {
						$event = 'j'.$eventPoint.$eventName;
						if (!class_exists($event)){
							include_once $eventDetails[ 'filepath' ].$filename;
						}

						if ($this->logging_enbled) {
							$this->log[ ] = $eventDetails[ 'filepath' ].$filename;
						}

						$eLiveSite = str_replace(JOMRESCONFIG_ABSOLUTE_PATH, get_showtime('live_site').'/', $eventDetails[ 'filepath' ]);
						$eLiveSite = str_replace(JRDS, DIRECTORY_SEPARATOR, $eLiveSite);
						set_showtime('eLiveSite', $eLiveSite);

						$e = new $event($eventArgs);

						if (isset($e->template_touchable) && $e->template_touchable) {
							echo '<br/>'.$event.'<br/>';
							if (method_exists($e, 'touch_template_language')) {
								echo $e->touch_template_language();
							} else {
								echo "Ooops, you tried to run 'touch_template_language' in the minicomponent ".$event.' but that method does not exist';
							}
						}
						unset($e);
					}
				}
			}
		}

		/**
		 *
		 *
		 *
		 */

		// Actually calls the triggered event.
		public function triggerEvent($eventPoint, $eventArgs = null)
		{
			$retVal = null;
			$check_access = false;
			$can_access = true;
			$classFileSuffix = '.class.php';

			if (!jomres_cmsspecific_areweinadminarea()) {
				$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

				if (isset($jomres_access_control->controllable_patterns[$eventPoint])) {
					$check_access = true;
				}
			}

			if (!empty($this->registeredClasses && isset($this->registeredClasses[$eventPoint]))) {
				foreach ($this->registeredClasses[$eventPoint] as $eventName => $eventDetails) {
					$ePointFilepath = $eventDetails[ 'filepath' ];
					set_showtime('ePointFilepath', $eventDetails[ 'filepath' ]);

					$filename = 'j'.$eventPoint.$eventName.$classFileSuffix;

					if ($check_access) {
						if (!$jomres_access_control->this_user_can($eventName)) {
							system_log('Access control prevented system from running '.$eventPoint.$eventName);
							$can_access = false;
						} else {
							$can_access = true;
						}
					}

					if ($can_access && file_exists($eventDetails[ 'filepath' ].$filename)) {
						$event = 'j'.$eventPoint.$eventName;

						$transposed =$this->transpose_property_type_replacement_for_minicomponent_if_exists($eventPoint,$eventName,$filename);
						if (!$transposed && !class_exists($event)) {
							include_once $this->registeredClasses[$eventPoint][$eventName][ 'filepath' ].$filename;
						}

						if ($this->logging_enbled) {
							$this->log[ ] = $eventDetails[ 'filepath' ].$filename;
						}

						$this->currentEvent = $eventDetails[ 'filepath' ].$filename;

						$eLiveSite = str_replace(JOMRESCONFIG_ABSOLUTE_PATH, get_showtime('live_site').'/', $ePointFilepath);
						$eLiveSite = str_replace(JRDS, DIRECTORY_SEPARATOR, $eLiveSite);
						set_showtime('eLiveSite', $eLiveSite);



						if (!class_exists($event)) {
							echo 'Error, class '.$event." does not exist. Most likely you've renamed a minicomponent file, but not the class in that file";

							return;
						}
						set_showtime('current_minicomp', $event);
						$e = new $event($eventArgs);
						$retVal = $e->getRetVals();
						$this->miniComponentData[ $eventPoint ][ $eventName ] = $retVal;
						set_showtime('current_minicomp', '');
						unset($e);
					} elseif (!file_exists($eventDetails[ 'filepath' ].$filename) && $eventPoint == "00001") { // Has the installation been moved to a new server?
						$registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
						$registry->regenerate_registry();
						$this->registeredClasses = $registry->get_registered_classes();
						$this->miniComponentDirectories = $registry->get_minicomponent_directories();
					}
				}
			}

			$this->currentEvent = '';

			return $retVal;
		}

		/**
		 *
		 *
		 *
		 */

		// Calls a specific event.
		public function specificEvent($eventPoint, $eventName, $eventArgs = null)
		{
			$retVal = null;
			$check_access = false;
			$can_access = true;
			$classFileSuffix = '.class.php';
			$filename = 'j'.$eventPoint.$eventName.$classFileSuffix;

			if (!jomres_cmsspecific_areweinadminarea()) {
				$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');

				if (isset($jomres_access_control->controllable_patterns[$eventPoint])) {
					$check_access = true;
				}
			}

			if (!empty($this->registeredClasses) && isset($this->registeredClasses[$eventPoint][$eventName])) {
				$ePointFilepath = $this->registeredClasses[$eventPoint][$eventName][ 'filepath' ];

				set_showtime('ePointFilepath', $this->registeredClasses[$eventPoint][$eventName][ 'filepath' ]);

				if ($check_access) {
					if (!$jomres_access_control->this_user_can($eventName)) {
						system_log('Access control prevented system from running '.$eventPoint.$eventName);
						$can_access = false;
					} else {
						$can_access = true;
					}
				}

				if ($can_access && file_exists($this->registeredClasses[$eventPoint][$eventName][ 'filepath' ].$filename)) {
					$event = 'j'.$eventPoint.$eventName;

					$transposed =$this->transpose_property_type_replacement_for_minicomponent_if_exists($eventPoint,$eventName,$filename);
					if (!$transposed && !class_exists($event)) {
						include_once $this->registeredClasses[$eventPoint][$eventName][ 'filepath' ].$filename;
					}

					if ($this->logging_enbled) {
						$this->log[ ] = $this->registeredClasses[$eventPoint][$eventName][ 'filepath' ].$filename;
					}

					$this->currentEvent = $this->registeredClasses[$eventPoint][$eventName][ 'filepath' ].$filename;

					$eLiveSite = str_replace(JOMRESCONFIG_ABSOLUTE_PATH, get_showtime('live_site').'/', $ePointFilepath);
					$eLiveSite = str_replace(JRDS, DIRECTORY_SEPARATOR, $eLiveSite);
					set_showtime('eLiveSite', $eLiveSite);

					set_showtime('current_minicomp', $event);
					$e = new $event($eventArgs);
					$retVal = $e->getRetVals();
					$this->miniComponentData[ $eventPoint ][ $eventName ] = $retVal;
					set_showtime('current_minicomp', '');
					unset($e);
				}
			}

			$this->currentEvent = '';

			return $retVal;
		}

		/**
		 *
		 *
		 *
		 */



		private function transpose_property_type_replacement_for_minicomponent_if_exists($eventPoint,$eventName,$filename)
		{
			$property_type_id = 0;
			$property_uid = get_showtime('property_uid');
			if (!is_null($property_uid) && $property_uid > 0) {
				$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
				$current_property_details->gather_data($property_uid);
				$property_type_id=$current_property_details->ptype_id;
			}

			if ( $property_type_id >0) {
				if (isset($this->registeredClasses["property_type_specific_plugins"][$property_type_id][$eventPoint][$eventName]) && !class_exists('j'.$eventPoint.$eventName )) {
					include_once $this->registeredClasses["property_type_specific_plugins"][$property_type_id][$eventPoint][$eventName]['filepath'].$filename;
					return true;
				}
				return false;
			}
		}

		/**
		 *
		 *
		 *
		 */

		//  This function is used to see if a mini-component exists for a given event point
		public function eventFileExistsCheck($eventPoint)
		{
			if (!empty($this->registeredClasses)) {
				if (isset($this->registeredClasses[$eventPoint])) {
					return true;
				}
			}

			return false;
		}

		/**
		 *
		 *
		 *
		 */

		//  This function is used to see if a mini-component exists.
		public function eventSpecificlyExistsCheck($eventPoint, $eventName)
		{
			if (!empty($this->registeredClasses)) {
				if (isset($this->registeredClasses[$eventPoint][$eventName])) {
					return true;
				}
			}

			return false;
		}

		/**
		 *
		 *
		 *
		 */

		//  This function is used to see if a mini-component file exists.
		public function eventFileLocate($eventPoint, $eventName)
		{
			if (!empty($this->registeredClasses)) {
				if (isset($this->registeredClasses[$eventPoint][$eventName])) {
					return true;
				}
			}

			return false;
		}

		/**
		 *
		 *
		 *
		 */

		public function getAllEventPointsData($ePoint)
		{
			$retVal = array();
			if (isset($this->miniComponentData[ $ePoint ]) && !empty($this->miniComponentData[ $ePoint ])) {
				foreach ($this->miniComponentData[ $ePoint ] as $key => $val) {
					$retVal[ $key ] = $this->getEventPointData($ePoint, $key);
				}
			}

			return $retVal;
		}

		/**
		 *
		 *
		 *
		 */

		public function getEventPointData($ePoint, $eName)
		{
			return $this->miniComponentData[ $ePoint ][ $eName ];
		}
	}
