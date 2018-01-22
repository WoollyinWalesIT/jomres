<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.18
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00060show_license_message
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
        
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

		if ( $jrConfig['licensekey'] == '' ) {
			return;
		}

		
		$jomres_check_support_key = jomres_singleton_abstract::getInstance('jomres_check_support_key');

		if ($jomres_check_support_key->key_status == "Expired") {
			$message = '
				<div class="alert alert-error">
				<h3>Your Jomres license key has expired, so you`re missing these great features and benefits!</h3>
				<ul style="list-style-type: none;">
					<li><i class="fa fa-check"></i> Plugin updates and new plugin releases</li>
					<li><i class="fa fa-check"></i> Exclusive members only Email/Tickets support</li>
					<li><i class="fa fa-check"></i> Worry-free Jomres Core updates</li>
				</ul>
				<p>Jomres membership is very affordable and offers access to all plugins and member-only support services.<p>
				<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=stripe_subscribe').'" class="btn btn-large btn-success">Restart your membership now!</a>
				</div>';
			} 
			elseif ($jomres_check_support_key->key_status == "Unknown" || $jomres_check_support_key->key_status == "Disabled" ) {
				$message = '
					<div class="alert alert-error">
					<h3>Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!</h3>
					<ul style="list-style-type: none;">
						<li><i class="fa fa-check"></i> <a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality</li>
						<li><i class="fa fa-check"></i> Exclusive members only Email/Tickets support</li>
						<li><i class="fa fa-check"></i> Worry-free Jomres Core updates</li>
					</ul>
					<p>Jomres membership is very affordable and offers access to all plugins and member-only support services.<p>
					<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=stripe_subscribe').'" class="btn btn-large btn-success">Get a new key now</a>
					</div>';
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
