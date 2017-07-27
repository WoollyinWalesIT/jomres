<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.7
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000show_license_message
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
        
		/* if (defined('LICENSE_EXPIRED_MESSAGE')) {
            $this->retVals = LICENSE_EXPIRED_MESSAGE;
        } else {
            $this->retVals = '';
        } */
		
		jr_import('jomres_check_support_key');
        $key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=showplugins');
		
		//license key status check
		$message = '';

		if (file_exists(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php')) {
			include JOMRES_TEMP_ABSPATH.'license_key_check_cache.php';
			
			if ($license_data->key_status == "Expired") {
				$message = '
<div class="alert alert-error">
	<h3>Dear '.htmlspecialchars(ucwords($license_data->owner)).', your Jomres license key has expired, so you`re missing on these great features and benefits!</h3>
	<ul>
		<li><i class="fa fa-check"></i> Plugin updates and new plugin releases</li>
		<li><i class="fa fa-check"></i> Exclusive members only Email/Tickets support</li>
		<li><i class="fa fa-check"></i> Worry-free Jomres Core updates</li>
	</ul>
	<p>Jomres membership is very affordable and offers access to all plugins and member-only support services.<p>
	<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=prices').'" class="btn btn-large btn-success">Restart your membership now!</a>
</div>';
			}
			
			if ($license_data->key_status == "Unknown") {
				$message = '
<div class="alert alert-error">				
	<h3>Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!</h3>
	<ul>
		<li><i class="fa fa-check"></i> Plugins that greatly extend Jomres functionality</li>
		<li><i class="fa fa-check"></i> Exclusive members only Email/Tickets support</li>
		<li><i class="fa fa-check"></i> Worry-free Jomres Core updates</li>
	</ul>
	<p>Jomres membership is very affordable and offers access to all plugins and member-only support services.<p>
	<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=prices').'" class="btn btn-large btn-success">Start your membership now!</a>
</div>';
			}
		}
		
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
