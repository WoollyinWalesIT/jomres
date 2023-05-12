<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j10501animation_library
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$configurationPanel = $componentArgs[ 'configurationPanel' ];

		$animation = array();
		$animation[] = jomresHTML::makeOption( 'fade', 'fade');
		$animation[] = jomresHTML::makeOption( 'fade-up', 'fade-up');
		$animation[] = jomresHTML::makeOption( 'fade-down', 'fade-down');
		$animation[] = jomresHTML::makeOption( 'fade-left', 'fade-left');
		$animation[] = jomresHTML::makeOption( 'fade-right', 'fade-right');
		$animation[] = jomresHTML::makeOption( 'fade-up-right', 'fade-up-right');
		$animation[] = jomresHTML::makeOption( 'fade-up-left', 'fade-up-left');
		$animation[] = jomresHTML::makeOption( 'fade-down-right', 'fade-down-right');
		$animation[] = jomresHTML::makeOption( 'fade-down-left', 'fade-down-left');
		$animation[] = jomresHTML::makeOption( 'flip-up', 'flip-up');
		$animation[] = jomresHTML::makeOption( 'flip-down', 'flip-down');
		$animation[] = jomresHTML::makeOption( 'flip-left', 'flip-left');
		$animation[] = jomresHTML::makeOption( 'flip-right', 'flip-right');
		$animation[] = jomresHTML::makeOption( 'slide-up', 'slide-up');
		$animation[] = jomresHTML::makeOption( 'slide-down', 'slide-down');
		$animation[] = jomresHTML::makeOption( 'slide-left', 'slide-left');
		$animation[] = jomresHTML::makeOption( 'slide-right', 'slide-right');
		$animation[] = jomresHTML::makeOption( 'zoom-in', 'zoom-in');
		$animation[] = jomresHTML::makeOption( 'zoom-in-up', 'zoom-in-up');
		$animation[] = jomresHTML::makeOption( 'zoom-in-down', 'zoom-in-down');
		$animation[] = jomresHTML::makeOption( 'zoom-in-left', 'zoom-in-left');
		$animation[] = jomresHTML::makeOption( 'zoom-in-right', 'zoom-in-right');
		$animation[] = jomresHTML::makeOption( 'zoom-out', 'zoom-out');
		$animation[] = jomresHTML::makeOption( 'zoom-out-up', 'zoom-out-up');
		$animation[] = jomresHTML::makeOption( 'zoom-out-down', 'zoom-out-down');
		$animation[] = jomresHTML::makeOption( 'zoom-out-left', 'zoom-out-left');
		$animation[] = jomresHTML::makeOption( 'zoom-out-right', 'zoom-out-right');


		$easing = array();
		$easing[] = jomresHTML::makeOption( 'linear', 'linear');
		$easing[] = jomresHTML::makeOption( 'ease', 'ease');
		$easing[] = jomresHTML::makeOption( 'ease-in', 'ease-in');
		$easing[] = jomresHTML::makeOption( 'ease-out', 'ease-out');
		$easing[] = jomresHTML::makeOption( 'ease-in-out', 'ease-in-out');
		$easing[] = jomresHTML::makeOption( 'ease-in-back', 'ease-in-back');
		$easing[] = jomresHTML::makeOption( 'ease-out-back', 'ease-out-back');
		$easing[] = jomresHTML::makeOption( 'ease-in-out-back', 'ease-in-out-back');
		$easing[] = jomresHTML::makeOption( 'ease-in-sine', 'ease-in-sine');
		$easing[] = jomresHTML::makeOption( 'ease-out-sine', 'ease-out-sine');
		$easing[] = jomresHTML::makeOption( 'ease-in-out-sine', 'ease-in-out-sine');
		$easing[] = jomresHTML::makeOption( 'ease-in-quad', 'ease-in-quad');
		$easing[] = jomresHTML::makeOption( 'ease-out-quad', 'ease-out-quad');
		$easing[] = jomresHTML::makeOption( 'ease-in-out-quad', 'ease-in-out-quad');
		$easing[] = jomresHTML::makeOption( 'ease-in-cubic', 'ease-in-cubic');
		$easing[] = jomresHTML::makeOption( 'ease-out-cubic', 'ease-out-cubic');
		$easing[] = jomresHTML::makeOption( 'ease-in-out-cubic', 'ease-in-out-cubic');
		$easing[] = jomresHTML::makeOption( 'ease-in-quart', 'ease-in-quart');
		$easing[] = jomresHTML::makeOption( 'ease-out-quart', 'ease-out-quart');
		$easing[] = jomresHTML::makeOption( 'ease-in-out-quart', 'ease-in-out-quart');

		$duration = array();
		$duration[] = jomresHTML::makeOption( '1000', '1000');
		$duration[] = jomresHTML::makeOption( '2000', '2000');
		$duration[] = jomresHTML::makeOption( '3000', '3000');
		$duration[] = jomresHTML::makeOption( '4000', '4000');
		$duration[] = jomresHTML::makeOption( '5000', '5000');
		$duration[] = jomresHTML::makeOption( '6000', '6000');

		$delay = array();
		$delay[] = jomresHTML::makeOption( '50', '50');
		$delay[] = jomresHTML::makeOption( '2000', '2000');
		$delay[] = jomresHTML::makeOption( '3000', '3000');
		$delay[] = jomresHTML::makeOption( '4000', '4000');
		$delay[] = jomresHTML::makeOption( '5000', '5000');
		$delay[] = jomresHTML::makeOption( '6000', '6000');

		if (!isset($jrConfig['animation_library_enabled'])) {
			$jrConfig['animation_library_enabled'] = 1;
		}

		if (!isset($jrConfig['animation_library_animation'])) {
			$jrConfig['animation_library_animation'] = 'fade';
		}

		if (!isset($jrConfig['animation_library_delay'])) {
			$jrConfig['animation_library_delay'] = "0";
		}

		if (!isset($jrConfig['animation_library_duration'])) {
			$jrConfig['animation_library_duration'] = "3000";
		}

		if (!isset($jrConfig['animation_library_easing'])) {
			$jrConfig['animation_library_easing'] = "ease-in-out";
		}

		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', jr_gettext("_JOMRES_COM_MR_NO",'_JOMRES_COM_MR_NO',false) );
		$yesno[] = jomresHTML::makeOption( '1', jr_gettext("_JOMRES_COM_MR_YES",'_JOMRES_COM_MR_YES',false) );


		$configurationPanel->startPanel('Animation Library');

		$configurationPanel->setleft('Enabled?');
		$configurationPanel->setmiddle( jomresHTML::selectList( $yesno, 'cfg_animation_library_enabled', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['animation_library_enabled'] ) );
		$configurationPanel->setright('');
		$configurationPanel->insertSetting();


		$configurationPanel->setleft('Animation');
		$configurationPanel->setmiddle( jomresHTML::selectList( $animation, 'cfg_animation_library_animation', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['animation_library_animation'] ) );
		$configurationPanel->setright('');
		$configurationPanel->insertSetting();

		$configurationPanel->setleft('Duration');
		$configurationPanel->setmiddle( jomresHTML::selectList( $duration, 'cfg_animation_library_duration', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['animation_library_duration'] ) );
		$configurationPanel->setright('');
		$configurationPanel->insertSetting();

		$configurationPanel->setleft('Easing');
		$configurationPanel->setmiddle( jomresHTML::selectList( $easing, 'cfg_animation_library_easing', 'class="inputbox" size="1"', 'value', 'text', $jrConfig['animation_library_easing'] ) );
		$configurationPanel->setright('');
		$configurationPanel->insertSetting();
		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
