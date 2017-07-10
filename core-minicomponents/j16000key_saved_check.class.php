<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.5
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000key_saved_check
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
		
		jr_import('jomres_check_support_key');
		$key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=cpanel');
		
        if (  trim($key_validation->key_hash) == '' ) {
			if (isset($componentArgs[ 'output_now' ])) {
				$output_now = $componentArgs[ 'output_now' ];
			} else {
				$output_now = true;
			}
			$output = array();
			$pageoutput = array();
			$output['WARNING'] = "You haven't saved a license key in Site Configuration yet.";
			
			$output['MESSAGE'] = "If you do not intend to get a license for Jomres, please consider making a donation to our favourite charity, Dog's Trust UK.";
			$output['DONATION_URL'] = 'https://www.dogstrust.org.uk/donation/';
			$output['URL_TEXT'] = "Donate to Dog's Trust now!";
			$output['CHARITY_LOGO'] = get_showtime('live_site')."/jomres/images/Dogs-Trust-Logo.png";
			
			
			
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('key_saved_check.html');

			if ($output_now) {
				$tmpl->displayParsedTemplate();
			} else {
				$this->retVals = $tmpl->getParsedTemplate();
			}
		
		}


    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
