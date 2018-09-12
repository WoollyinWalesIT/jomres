<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.13.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000videos
{
	public function __construct($componentArgs)
	{
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

		$jomres_video_tutorials = jomres_singleton_abstract::getInstance('jomres_video_tutorials');
		$jomres_video_tutorials->property_uid = 0;
		$jomres_video_tutorials->show_all = true;
		$video_tutorials = $jomres_video_tutorials->build_modal();

		if ($output_now) {
			echo $video_tutorials;
		} else {
			$this->retVals = $video_tutorials;
		}		$this->retVals = '';

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$jomres_video_tutorials = jomres_singleton_abstract::getInstance('jomres_video_tutorials');
		$jomres_video_tutorials->property_uid = 0;
		$jomres_video_tutorials->show_all = true;
		$video_tutorials = $jomres_video_tutorials->build_modal();

		if ($output_now) {
			echo $video_tutorials;
		} else {
			$this->retVals = $video_tutorials;
		}
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
