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
	 * Ajax script. Set the guest budget found in the list properties page
	 *
	 */

class j06000animation_library
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$disable_animations = (bool)get_showtime('disable_animations');
		if ($disable_animations) {
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (!isset($jrConfig['animation_library_enabled'])) {
			$jrConfig['animation_library_enabled'] = 1;
		}

		if ($jrConfig['animation_library_enabled'] != 1 ) {
			return;
		}

		if (!isset($jrConfig['animation_library_animation'])) {
			$jrConfig['animation_library_animation'] = 'fade';
		}

		if (!isset($jrConfig['animation_library_delay'])) {
			$jrConfig['animation_library_delay'] = "0";
		}

		$delay = (int)get_showtime('animation_delay');


		if (!isset($jrConfig['animation_library_duration'])) {
			$jrConfig['animation_library_duration'] = "3000";
		}

		if (!isset($jrConfig['animation_library_easing'])) {
			$jrConfig['animation_library_easing'] = "ease-in-out";
		}

		$pageoutput = array ( [
			'ANIMATION_LIBRARY_ANIMATION' => $jrConfig['animation_library_animation'],
			'ANIMATION_LIBRARY_DELAY' => $delay,
			'ANIMATION_LIBRARY_DURATION' => $jrConfig['animation_library_duration'],
			'ANIMATION_LIBRARY_EASING' => $jrConfig['animation_library_easing'],
		]);

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'animation_library.html' );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();

		set_showtime('animation_delay' , $delay + 100 );

	}


	public function getRetVals()
	{
		return null;
	}
}
