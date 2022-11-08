<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.6.0
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

	class j06000show_property_main_image
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
				$this->shortcode_data = array(
					'task' => 'show_property_main_image',
					'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE',
					'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID',
						'arg_example' => '1',
					),
					),
				);

				return;
			}

			$this->retVals = '';

			if (isset($componentArgs[ 'property_uid' ])) {
				$property_uid = (int)$componentArgs[ 'property_uid' ];
			} else {
				$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
			}

			if ($property_uid == 0) {
				return;
			}

			if (!user_can_view_this_property($property_uid)) {
				return;
			}

			if (isset($componentArgs[ 'output_now' ])) {
				$output_now = $componentArgs[ 'output_now' ];
			} else {
				$output_now = true;
			}

			if (isset($componentArgs[ 'image_size' ])) {
				$image_size = (string)$componentArgs[ 'image_size' ];
			} else {
				if ( isset($_REQUEST['image_size']) && trim($_REQUEST['image_size']) != '' ) {
					$image_size = (string)jomresGetParam($_REQUEST, 'image_size', '');
				} else {
					$image_size = 'small';
				}
			}

			if ( $image_size != 'small' && $image_size != 'medium' && $image_size != 'large' ) {
				$image_size = 'small';
			}

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$output = array();

			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images($property_uid, array('property'));

			$imagesArray = $jomres_media_centre_images->images['property'][0];

			if ($jrConfig['plist_images_as_slideshow'] && count($imagesArray) > 1 ) {
				$slideshowArgs = array();
				$slideshowArgs['property_uid'] = $property_uid;
				$slideshowArgs['height'] = 0.60;
				$slideshowArgs['lightbox'] = 'false';
				$slideshowArgs['autoplay'] = 'false';
				$slideshowArgs['thumbnails'] = 'false';
				$slideshowArgs['transition'] = 'fade';
				$slideshowArgs['showcounter'] = 'false';
				$slideshowArgs['link_to_property_details'] = true;
				$slideshowArgs['images'] = $imagesArray;
				$slideshowArgs['image_size'] = $image_size;

				$result = $MiniComponents->specificEvent('01060', 'slideshow', $slideshowArgs);
				$output[ 'SLIDESHOW' ] = $result['slideshow'];
			} else {
				$po = [ [
					'LARGE_IMAGE' => $jomres_media_centre_images->images['property'][0][0]['large'],
					'MEDIUM_IMAGE' => $jomres_media_centre_images->images['property'][0][0]['medium'],
					'SMALL_IMAGE' => $jomres_media_centre_images->images['property'][0][0]['small'],
				] ] ;

				$tmpl = new patTemplate();
				$tmpl->addRows('pageoutput', $po);
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('card_image.html');
				$output[ 'SLIDESHOW' ] = $tmpl->getParsedTemplate();
			}


			$output['IMAGE']	=  $jomres_media_centre_images->images['property'][0][0]['medium'];
			$output['SMALL']	=  $jomres_media_centre_images->images['property'][0][0]['small'];
			$output['MEDIUM']	=  $jomres_media_centre_images->images['property'][0][0]['medium'];
			$output['LARGE']	=  $jomres_media_centre_images->images['property'][0][0]['large'];
			$output['URL']		=  get_property_details_url($property_uid);

			$pageoutput = array();
			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('show_property_main_image.html');
			$result = $tmpl->getParsedTemplate();

			if ($output_now) {
				echo $result;
			} else {
				$this->retVals = $result;
			}
		}


		public function getRetVals()
		{
			return $this->retVals;
		}
	}
