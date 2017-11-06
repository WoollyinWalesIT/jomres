<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.14
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000show_reviews_message
{
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

		$review_sites = array (
			"capterra" => array ( "url" => 'https://www.capterra.com/p/134469/Jomres/' , "site_name" => "Capterra" )
		);

		if (this_cms_is_joomla()) {
			$review_sites['joomla'] = array ( "url" => 'https://extensions.joomla.org/extensions/extension/vertical-markets/booking-a-reservations/jomres/' , "site_name" => "Joomla Extension Directory" );
		} else {
			$review_sites['wordpress'] = array ( "url" => 'https://wordpress.org/support/plugin/jomres/reviews/' , "site_name" => "Wordpress repository" );
		}
		
		$message = '';

		if (get_showtime("task") == "cpanel" ) {

			$message = '
	<div class="alert alert-success">
		If you like Jomres, please consider leaving a review on one of these sites
		';
		foreach ( $review_sites as $site ) {
			$message .= '<a href="'.$site['url'].'" class="btn btn-default btn-mini" target="_blank">'.$site['site_name'].'</a>';
		}
			$message .= '	</div>
			';


			}
		else $message = "";
		
		if ($output_now) {
			echo $message;
		} else {
			$this->retVals = $message;
		}
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
