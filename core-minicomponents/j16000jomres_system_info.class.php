<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000jomres_system_info
{
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

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $output = array();
        $pageoutput = array();

        //jomres version
        $configfile = JOMRESPATH_BASE.JRDS.'jomres_config.php'; // This is to pull in the Jomres version from mrConfig
        include $configfile;

        $this_version = get_jomres_current_version();
        $latest_version = get_latest_jomres_version();
		

		$output[ '_JOMRES_VERSIONCHECK_THISJOMRESVERSION' ] = jr_gettext('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', false);
        $output[ '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION' ] = jr_gettext('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', false);
		
		$output[ 'THIS_JOMRES_VERSION' ] = $this_version;
		$output[ 'JOMRES_VERSION_LABEL_CLASS' ] = 'label-green';
		
		$output[ 'ERROR' ] = '';
		$output[ 'HIGHLIGHT' ] = '';
		$output[ 'ALERT' ] = '';

        if (empty($latest_version)) {
			$output[ 'JOMRES_VERSION_LABEL_CLASS' ] = 'label-red';
			$output[ 'LATEST_JOMRES_VERSION' ] = 'Unknown'; 
            $output[ 'ERROR' ] = 'Sorry, could not get latest version of Jomres, is there a firewall preventing communication with http://updates.jomres4.net ? Alternatively, please check that CURL is enabled on this webserver<p>';
			$output[ 'HIGHLIGHT' ] = (using_bootstrap() ? 'alert alert-error' : 'ui-state-error');
        } else {
            $current_version_is_uptodate = check_jomres_version();

            if (!$current_version_is_uptodate) {
				
				$key_validation = jomres_singleton_abstract::getInstance('jomres_check_support_key');
				
				$this->key_valid = $key_validation->key_valid;

                $output[ 'HIGHLIGHT' ] = (using_bootstrap() ? 'alert alert-error' : 'ui-state-error');
                $output[ 'ALERT' ] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=updates" >'.jr_gettext('_JOMRES_VERSIONCHECK_VERSIONWARNING', '_JOMRES_VERSIONCHECK_VERSIONWARNING', false).'</a>';

				if ($this->key_valid) {
					$output[ 'UPDATEINFO' ] = jr_gettext('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', '_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', false);
				} else {
					$output[ 'UPDATEINFO' ] = jr_gettext('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', '_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', false);
					$output[ '_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS' ] = jr_gettext('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', '_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', false);
					
				}
				
				
				$output[ 'JOMRES_VERSION_LABEL_CLASS' ] = 'label-red';
            }

			$output[ 'LATEST_JOMRES_VERSION' ] = $latest_version;
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->readTemplatesFromInput('jomres_system_info.html');

        if ($output_now) {
            $tmpl->displayParsedTemplate();
        } else {
            $this->retVals = $tmpl->getParsedTemplate();
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
