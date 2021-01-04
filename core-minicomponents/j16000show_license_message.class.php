<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
 *
 * @copyright	2005-2021 Vince Wooll
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

class j16000show_license_message
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
		
		$this->retVals = '';

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}
		
		$jomres_check_support_key = jomres_singleton_abstract::getInstance('jomres_check_support_key');
		
		//license key status check
		$message = '';
		
		if (get_showtime("task") != "connect" ) {
			if ($jomres_check_support_key->key_status == "Expired") {
				$message = '
	<div class="alert alert-error">
	<h3>'.jr_gettext('_LICENCE_PROMPT_DEAR', '_LICENCE_PROMPT_DEAR', false, false).htmlspecialchars(ucwords($jomres_check_support_key->owner)).jr_gettext('_LICENCE_EXPIRED', '_LICENCE_EXPIRED', false, false).'</h3>
	<ul>
		<li><i class="fa fa-check"></i> '.jr_gettext('_LICENCE_EXPIRED_BENEFITS_1', '_LICENCE_EXPIRED_BENEFITS_1', false, false).'</li>
		<li><i class="fa fa-check"></i> '.jr_gettext('_LICENCE_EXPIRED_BENEFITS_2', '_LICENCE_EXPIRED_BENEFITS_2', false, false).'</li>
		<li><i class="fa fa-check"></i> '.jr_gettext('_LICENCE_EXPIRED_BENEFITS_3', '_LICENCE_EXPIRED_BENEFITS_3', false, false).'</li>
	</ul>
	<p>'.jr_gettext('_LICENCE_EXPIRED_POST', '_LICENCE_EXPIRED_POST', false, false).'<p>
	<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=connect').'" class="btn btn-large btn-success">'.jr_gettext('_LICENCE_EXPIRED_RESTART', '_LICENCE_EXPIRED_RESTART', false, false).'</a>
	</div>';
			}

			if ($jomres_check_support_key->key_status == "Unknown"  || $jomres_check_support_key->key_status == "Disabled" ) {
				$message = '
	<div class="alert alert-error">
	<h3>'.jr_gettext('_LICENCE_INVALID_KEY', '_LICENCE_INVALID_KEY', false, false).'</h3>
	<ul>
		<li><i class="fa fa-check"></i> '.jr_gettext('_LICENCE_INVALID_BENEFITS_1', '_LICENCE_INVALID_BENEFITS_1', false, false).'</li>
		<li><i class="fa fa-check"></i> '.jr_gettext('_LICENCE_INVALID_BENEFITS_2', '_LICENCE_INVALID_BENEFITS_2', false, false).'</li>
		<li><i class="fa fa-check"></i> '.jr_gettext('_LICENCE_INVALID_BENEFITS_3', '_LICENCE_INVALID_BENEFITS_3', false, false).'</li>
	</ul>
	<p>'.jr_gettext('_LICENCE_INVALID_POST', '_LICENCE_INVALID_POST', false, false).'<p>
	<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=connect').'" class="btn btn-large btn-success">'.jr_gettext('_LICENCE_INVALID_START', '_LICENCE_INVALID_START', false, false).'</a>
	</div>';
			}
		}
		else $message = "";
		
		if ($output_now) {
			echo $message;
		} else {
			$this->retVals = $message;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
