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

	class j06000media_centre
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

			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
			if (!$thisJRUser->userIsManager) {
				echo "Error, user must be a property manager to use this feature.";
				return;
			}

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$output = array();
			$pageoutput = array();

			if (jomres_cmsspecific_areweinadminarea()) {
				$result = $MiniComponents->triggerEvent('11010');
				$resource_types = $MiniComponents->miniComponentData[ '11010' ];
			} else {
				$result = $MiniComponents->triggerEvent('03379');
				$resource_types = $MiniComponents->miniComponentData[ '03379' ];
			}


			if (isset($resource_types["slideshow"])) {
				$new_value = $resource_types["slideshow"];
				unset($resource_types["slideshow"]);
				$resource_types = $this->array_unshift_assoc($resource_types, 'slideshow' , $new_value );
			}

			if (isset($resource_types["property"])) {
				$new_value = $resource_types["property"];
				unset($resource_types["property"]);
				$resource_types = $this->array_unshift_assoc($resource_types, 'property' , $new_value );
			}


			$notes = array();
			$preview_links = array();

			if (!empty($resource_types)) {
				$resource_type_options = array();

				foreach ($resource_types as $type) {
					if (isset($type['hidden']) && $type['hidden']) {
						continue;
					}
					if (isset($type['name']) && $type['name'] != '') {
						$resource_type_options[ ] = jomresHTML::makeOption($type['resource_type'], $type['name']);
						if (isset($type['notes'])) {
							$notes[] = array('NOTE' => str_replace('"', '&#34;', $type['notes']));
						}
						if (isset($type['preview_link'])) {
							$preview_links[] = array('RESOURCE_TYPE' => $type['resource_type'] , 'PREVIEW_LINK' => $type['preview_link']);
						}
					}
				}
				$javascript = 'onchange="get_resource_ids_for_resource_type(this.value);"';

				$output['RESOURCE_TYPE_OPTIONS'] = jomresHTML::selectList($resource_type_options, 'resource_types', ' autocomplete="off" class="btn btn-primary btn-lg" size="1" '.$javascript.'', 'value', 'text', '', false);

				$output['_JOMRES_MEDIA_CENTRE_BUTTON_ADD']					  = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', '_JOMRES_MEDIA_CENTRE_BUTTON_ADD', false);
				$output['TITLE']												= jr_gettext('_JOMRES_MEDIA_CENTRE_TITLE', '_JOMRES_MEDIA_CENTRE_TITLE', false);
				$output['_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS']	 = jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', false);
				$output['_JOMRES_MEDIA_CENTRE_CLEAR']						   = jr_gettext('_JOMRES_MEDIA_CENTRE_CLEAR', '_JOMRES_MEDIA_CENTRE_CLEAR', false);
				$output['_JOMRES_MEDIA_CENTRE_DRAGNDROP']					   = jr_gettext('_JOMRES_MEDIA_CENTRE_DRAGNDROP', '_JOMRES_MEDIA_CENTRE_DRAGNDROP', false);
				$output['_JOMRES_MEDIA_CENTRE_BUTTON_DELETE']				   = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', '_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', false);
				$output['_JOMRES_MEDIA_CENTRE_BUTTON_VIEW']					 = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', '_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', false);
				$output['_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD']				   = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', '_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', false);
				$output['_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL']			   = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', '_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', false);
				$output['HUPLOAD_FORM']										 = jr_gettext('_JOMRES_UPLOAD_IMAGE', '_JOMRES_UPLOAD_IMAGE', false);
				$output['_JOMRES_FRONT_PREVIEW']								= jr_gettext('_JOMRES_FRONT_PREVIEW', '_JOMRES_FRONT_PREVIEW', false);
				$output['_JOMRES_MEDIA_CENTRE_RESOURCE']						= jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE', '_JOMRES_MEDIA_CENTRE_RESOURCE', false);
				$output['_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC']			   = jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', '_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', false);
				$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC']			= jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', false);
				$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW']			= jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', false);
				$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS']		= jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', false);
				$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE'] = jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', false);
				$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST'] = jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', false);
				$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE']	   = jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', false);
				$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST']	  = jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', false);
				$output['_JOMRES_COM_A_UPLOADS_FILESIZE']					   = jr_gettext('_JOMRES_COM_A_UPLOADS_FILESIZE', '_JOMRES_COM_A_UPLOADS_FILESIZE', false);
				$output['_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED']	   = jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', '_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', false);

				$output['MAX_WIDTH']											= $jrConfig[ 'maxwidth' ];
				$output['ALLOWED_FILE_TYPES']								   = '(jpe?g|png)';
				$output['MAX_UPLOAD_SIZE']									  = $this->filesize_formatted($this->file_upload_max_size());
				$output['WIDTH_PIXELS']										 = $jrConfig[ 'maxwidth' ];

				$output['_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM']			   = jr_gettext('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', '_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', false);


				$property_uid = getDefaultProperty();
				$mrConfig = getPropertySpecificSettings($property_uid);

				if ($mrConfig[ 'singleRoomProperty' ] == '1') {
					$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS']			   = jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', false);
				} else {
					$output['_JOMRES_MEDIA_CENTRE_INSTRUCTIONS']			   = jr_gettext('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', '_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', false);
				}

				$output['DEFAULT_PREVIEW_LINK']								= JOMRES_SITEPAGE_URL_AJAX.'&task=show_property_header&property_uid='.$property_uid;

				if (!jomres_cmsspecific_areweinadminarea()) {
					$output['AJAX_URL'] = JOMRES_SITEPAGE_URL_AJAX;
				} else {
					$output['AJAX_URL'] = JOMRES_SITEPAGE_URL_ADMIN_AJAX;
				}

				$pageoutput[] = $output;
				$tmpl = new patTemplate();

				if (jomres_cmsspecific_areweinadminarea()) {
					$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				} else {
					$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
				}

				$tmpl->readTemplatesFromInput('media_centre_main.html');
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->addRows('notes', $notes);
				$tmpl->addRows('preview_links', $preview_links);
				$tmpl->displayParsedTemplate();
			} else {
				echo 'Error, no resource types can be found in the resource types array in the media centre. The 03379 scripts must be missing';
			}
		}

		// https://www.php.net/manual/en/function.array-unshift.php#117119
		function array_unshift_assoc(&$arr, $key, $val)
		{
			$arr = array_reverse($arr, true);
			$arr[$key] = $val;
			$arr = array_reverse($arr, true);
			return $arr;
		}


		// Returns a file size limit in bytes based on the PHP upload_max_filesize
		// and post_max_size
		function file_upload_max_size()
		{
			static $max_size = -1;

			if ($max_size < 0) {
				// Start with post_max_size.
				$max_size = $this->parse_size(ini_get('post_max_size'));

				// If upload_max_size is less, then reduce. Except if upload_max_size is
				// zero, which indicates no limit.
				$upload_max = $this->parse_size(ini_get('upload_max_filesize'));
				if ($upload_max > 0 && $upload_max < $max_size) {
					$max_size = $upload_max;
				}
			}
			return $max_size;
		}

		function parse_size($size)
		{
			$unit = preg_replace('/[^bkmgtpezy]/i', '', $size); // Remove the non-unit characters from the size.
			$size = preg_replace('/[^0-9\.]/', '', $size); // Remove the non-numeric characters from the size.
			if ($unit) {
				// Find the position of the unit in the ordered string which is the power of magnitude to multiply a kilobyte by.
				return round($size * pow(1024, stripos('bkmgtpezy', $unit[0])));
			} else {
				return round($size);
			}
		}

		/**
		 * Formats filesize in human readable way.
		 *
		 * @param file $file
		 * @return string Formatted Filesize, e.g. "113.24 MB".
		 */
		function filesize_formatted($bytes)
		{
			if ($bytes >= 1073741824) {
				return number_format($bytes / 1073741824, 2) . ' GB';
			} elseif ($bytes >= 1048576) {
				return number_format($bytes / 1048576, 2) . ' MB';
			} elseif ($bytes >= 1024) {
				return number_format($bytes / 1024, 2) . ' KB';
			} elseif ($bytes > 1) {
				return $bytes . ' bytes';
			} elseif ($bytes == 1) {
				return '1 byte';
			} else {
				return '0 bytes';
			}
		}
		/**
		 * Must be included in every mini-component.
		#
		 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
		 */

		public function getRetVals()
		{
			return null;
		}
	}
