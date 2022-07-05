<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
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

class j16000show_feedback_message
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
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$feedback_site = array (
			"canni.io" => array ( "url" => 'https://jomres.canny.io/' , "site_name" => "Canny.io" ),
			"telegram" => array ( "url" => 'https://t.me/jomres' , "site_name" => "Telegram" )
		);


		$message = '';

		if (get_showtime("task") == "cpanel") {

			$message = '<p class="alert alert-success">Do you have feedback for Jomres? Let us know ';
			foreach ( $feedback_site as $site ) {
				$message .= '<a href="'.$site['url'].'" class="btn btn-success" target="_blank">'.$site['site_name'].'</a>&nbsp;';
			}
			$message .= '</p>';
		} else {
			$message = '';
		}
		
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
