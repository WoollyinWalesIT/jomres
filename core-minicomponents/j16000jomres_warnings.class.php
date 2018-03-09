<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000jomres_warnings
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

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $output = array();
        $pageoutput = array();

		// Show a warning if development mode enabled
		$output[ 'DEVELOPMENT_MODE' ] = development_mode_test();
				
        //max input vars set to 1000 warning only if micromanage is enabled
        $output[ 'MAX_INPUT_VARS_CHECK' ] = max_input_vars_test();

        //max get vars set to 512 or less warning for datatables
        $output[ 'SUHOSIN_GET_MAX_VARS_CHECK' ] = suhosin_get_max_vars_test();

        //license key not entered warning
		/* $output[ 'JOMRES_PRODUCT_INFORMATION' ] = '';
		$output[ 'JOMRES_PRODUCT_INFORMATION2' ] = '';
		$output[ 'JOMRES_PRODUCT_INFO_HIGHLIGHT' ] = '';
        if (trim($jrConfig['licensekey']) == '') {
            $output[ 'JOMRES_PRODUCT_INFORMATION' ] = jr_gettext('_JOMRES_PRODUCT_INFORMATION', '_JOMRES_PRODUCT_INFORMATION', false);
            $output[ 'JOMRES_PRODUCT_INFORMATION2' ] = jr_gettext('_JOMRES_PRODUCT_INFORMATION2', '_JOMRES_PRODUCT_INFORMATION2', false);
			$output[ 'JOMRES_PRODUCT_INFO_HIGHLIGHT' ] = 'alert alert-info';
        } */

        //wordpress Page with [jomres:xx-XX] not created yet
        $output[ 'JOMRES_DEFAULT_SHORTCODE_HIGHLIGHT' ] = '';
        $output[ 'JOMRES_DEFAULT_SHORTCODE_ALERT' ] = '';
        if (this_cms_is_wordpress() && (int) get_showtime('jomresItemid') == 0) {
            $output[ 'JOMRES_DEFAULT_SHORTCODE_HIGHLIGHT' ] = (using_bootstrap() ? 'alert alert-error' : 'ui-state-error');
            $output[ 'JOMRES_DEFAULT_SHORTCODE_ALERT' ] = jr_gettext('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'JOMRES_DEFAULT_SHORTCODE_ALERT', false);
        }

        // Google maps api key warning
        $output['GMAPS_KEY_WARNING'] = gmaps_apikey_check();

		//ipinfodb api key
        //$output['IPINFODB_KEY_WARNING'] = ipinfodb_apikey_check();

		//open exchange rates api key
        //$output['OPENEXCHANGERATES_KEY_WARNING'] = openexchangerates_apikey_check();

        // Logfile location warning
        //$output['LOGFILE_LOCATION_WARNING'] = logs_path_check();
		
		//review text
        /* if (this_cms_is_wordpress()) {
            $output['REVIEW_SITE_URL'] = 'https://wordpress.org/support/view/plugin-reviews/jomres';
            $output['REVIEW_SITE_TEXT'] = 'Wordpress Plugins site';
        } else {
            $output['REVIEW_SITE_URL'] = 'http://extensions.joomla.org/extensions/extension/vertical-markets/booking-a-reservations/jomres';
            $output['REVIEW_SITE_TEXT'] = 'Joomla! Extensions Directory';
        }

        $output['CAPTERRA_REVIEW_SITE_URL'] = 'http://www.capterra.com/reservations-software/reviews/134469/Jomres/Woollyinwales%20IT/new';
        $output['CAPTERRA_REVIEW_SITE_TEXT'] = 'Capterra'; */

        // Property type checks //
        // We have a situation where a property type needs to be cross-referenced with room types, this check will ascertain if any property types are missing room types
        $jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
        $jomres_property_types->get_all_property_types();

        $output['PROPERTY_TYPE_WARNING'] = $jomres_property_types->get_property_types_with_no_room_types_assigned($show_link_to_room_types = true);
		
		$output['MEDIA_CENTRE_DB_IMAGES_IMPORT_WARNING'] = db_images_import_check();
		
		$output['MEDIA_CENTRE_S3_IMAGES_IMPORT_WARNING'] = s3_images_import_check();

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->readTemplatesFromInput('jomres_warnings.html');

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
