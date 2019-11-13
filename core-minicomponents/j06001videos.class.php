<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001videos
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$this->retVals = '';

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$defaultProperty 	= getDefaultProperty();
		
		$jomres_video_tutorials = jomres_singleton_abstract::getInstance('jomres_video_tutorials');
		$jomres_video_tutorials->property_uid = $defaultProperty;
		$jomres_video_tutorials->show_all = true;
		$video_tutorials = $jomres_video_tutorials->build_modal();

		if ($output_now) {
			echo $video_tutorials;
		} else {
			$this->retVals = $video_tutorials;
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
