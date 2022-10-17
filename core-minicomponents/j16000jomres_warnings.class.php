<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.5.5
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

class j16000jomres_warnings
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

		$output = array();
		$pageoutput = array();

		// Show a warning if development mode enabled
		$output[ 'DEVELOPMENT_MODE' ] = development_mode_test();

		// Show a warning if safe mode enabled
		$output[ 'SAFE_MODE' ] = safe_mode_test();

		//max input vars set to 1000 warning only if micromanage is enabled
		$output[ 'MAX_INPUT_VARS_CHECK' ] = max_input_vars_test();

		//max get vars set to 512 or less warning for datatables
		$output[ 'SUHOSIN_GET_MAX_VARS_CHECK' ] = suhosin_get_max_vars_test();

		// Test for ZipArchive
		$output[ 'ZIPARCHIVE_CHECK' ] = ziparchive_test();

		//wordpress Page with [jomres:xx-XX] not created yet
		$output[ 'JOMRES_DEFAULT_SHORTCODE_HIGHLIGHT' ] = '';
		$output[ 'JOMRES_DEFAULT_SHORTCODE_ALERT' ] = '';
		if (this_cms_is_wordpress()) {
			//$output[ 'JOMRES_DEFAULT_SHORTCODE_HIGHLIGHT' ] = (using_bootstrap() ? 'alert alert-info' : 'ui-state-error');
			//$output[ 'JOMRES_DEFAULT_SHORTCODE_ALERT' ] = jr_gettext('WORDPRESS_THEME_ADVICE', 'WORDPRESS_THEME_ADVICE', false);

			$query = "SELECT post_content , post_status FROM #__posts WHERE post_status != 'trash' ";
			$all_posts = doSelectSql($query);
			$found = false;
			foreach ($all_posts as $post) {
				if (strstr($post->post_content, "[jomres:")) {
					$found = true;
				}
			}
			if (!$found) {
				$output[ 'JOMRES_DEFAULT_SHORTCODE_HIGHLIGHT' ] = (using_bootstrap() ? 'alert alert-danger' : 'ui-state-error');
				$output[ 'JOMRES_DEFAULT_SHORTCODE_ALERT' ] = jr_gettext('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'JOMRES_DEFAULT_SHORTCODE_ALERT', false);
			}
		}

		// Google maps api key warning
		$output['GMAPS_KEY_WARNING'] = gmaps_apikey_check();

		// Property type checks //
		// We have a situation where a property type needs to be cross-referenced with room types, this check will ascertain if any property types are missing room types
		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
		$jomres_property_types->get_all_property_types();

		$output['PROPERTY_TYPE_WARNING'] = $jomres_property_types->get_property_types_with_no_room_types_assigned($show_link_to_room_types = true);

		$output['MEDIA_CENTRE_DB_IMAGES_IMPORT_WARNING'] = db_images_import_check();

		$output['MEDIA_CENTRE_S3_IMAGES_IMPORT_WARNING'] = s3_images_import_check();


		$output['PLUGIN_UPDATES_AVAILABLE'] = '';
		if (
			get_showtime('task') != 'save_site_settings' &&
			get_showtime('task') != 'site_settings' &&
			get_showtime('task') != 'showplugins' &&
			get_showtime('task') != 'addplugin' &&
			get_showtime('task') != 'removeplugin' &&
			get_showtime('task') != 'updates'
		) {
			//jomres plugin update check
			$output['PLUGIN_UPDATES_AVAILABLE'] = $MiniComponents->specificEvent('16000', 'jomres_plugin_update_check', array('output_now' => true));
			if ($output['PLUGIN_UPDATES_AVAILABLE'] != false) {

			}
		}

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


	public function getRetVals()
	{
		return $this->retVals;
	}
}
