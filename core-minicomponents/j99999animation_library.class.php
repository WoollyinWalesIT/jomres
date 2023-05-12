<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.7.0
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * This minicomponent doesn't do anything. It's located here to show you where to put your overrides if you want them
	 *
	 */

	class j99999animation_library
	{

		/**
		 *
		 * Constructor
		 *
		 */

		public function __construct($componentArgs)
		{
			$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
			if ($MiniComponents->template_touch) {
				$this->template_touchable = false;
			}

			if (AJAXCALL) {
				return;
			}

			if (defined('API_STARTED')) {
				return;
			}



			if (!defined('AOS_INITIALISED')) {
				$ePointFilepath=get_showtime('ePointFilepath');

				$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
				$jrConfig = $siteConfig->get();

				if (!isset($jrConfig['animation_library_enabled'])) {
					$jrConfig['animation_library_enabled'] = 1;
				}

				if ($jrConfig['animation_library_enabled'] != 1 ) {
					return;
				}

				jomres_cmsspecific_addheaddata('css', 'https://unpkg.com/aos@2.3.1/dist/','aos.css');
				jomres_cmsspecific_addheaddata('javascript', 'https://unpkg.com/aos@2.3.1/dist/', 'aos.js');

				if (!isset($jrConfig['animation_library_animation'])) {
					$jrConfig['animation_library_animation'] = 'fade';
				}

				if (!isset($jrConfig['animation_library_delay'])) {
					$jrConfig['animation_library_delay'] = "50";
				}

				if (!isset($jrConfig['animation_library_duration'])) {
					$jrConfig['animation_library_duration'] = "3000";
				}

				if (!isset($jrConfig['animation_library_easing'])) {
					$jrConfig['animation_library_easing'] = "ease-in-out";
				}

				$pageoutput = array ( [
					'ANIMATION_LIBRARY_ANIMATION' => $jrConfig['animation_library_animation'],
					'ANIMATION_LIBRARY_DELAY' => $jrConfig['animation_library_delay'],
					'ANIMATION_LIBRARY_DURATION' => $jrConfig['animation_library_duration'],
					'ANIMATION_LIBRARY_EASING' => $jrConfig['animation_library_easing'],
				]);

				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'animation_library.html' );
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				define('AOS_INITIALISED',1);
			}

		}

		/**
		 * Must be included in every mini-component.
		#
		 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
		 */
		public function getRetVals()
		{
			return null;
		}
	}
