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

class j16000show_reviews_message
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
		
		$jr_review_left = (int)jomresGetParam($_REQUEST, 'jr_review_left', 0);
		
		if ($jr_review_left == 1) {
			$siteConfig->update_setting('jomres_review_left', '1');
		}

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$review_sites = array (
			"capterra" => array ( "url" => 'https://www.capterra.com/p/134469/Jomres/' , "site_name" => "Capterra" )
		);

		if (this_cms_is_joomla()) {
			$review_sites['joomla'] = array ( "url" => 'https://extensions.joomla.org/extensions/extension/vertical-markets/booking-a-reservations/jomres/' , "site_name" => "Joomla Extension Directory" );
		} else {
			$review_sites['wordpress'] = array ( "url" => 'https://wordpress.org/support/plugin/jomres/reviews/' , "site_name" => "Wordpress repository" );
		}
		
		$message = '';

		if (get_showtime("task") == "cpanel" && $jrConfig['jomres_review_left'] == '0' && $jr_review_left == 0) {

			$message = '
<p class="alert alert-success"> '.jr_gettext('_REVIEW_JOMRES_PLEASEREVIEW', '_REVIEW_JOMRES_PLEASEREVIEW', false, false);
			foreach ( $review_sites as $site ) {
				$message .= '<a href="'.$site['url'].'" class="btn btn-default" target="_blank">'.$site['site_name'].'</a>&nbsp;';
			}
			
			$message .= '<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&jr_review_left=1').'" class="btn btn-success">'.jr_gettext('_REVIEW_JOMRES_ALREADYREVIEWED', '_REVIEW_JOMRES_ALREADYREVIEWED', false, false).'</a>';
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
