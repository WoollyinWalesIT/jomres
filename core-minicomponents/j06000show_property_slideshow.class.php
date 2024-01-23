<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.7.2
	 *
	 * @copyright	2005-2024 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

	class j06000show_property_slideshow
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
					'task' => 'show_property_slideshow',
					'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW',
					'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID',
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

			$output = array();

			$result = $MiniComponents->specificEvent('01060', 'slideshow', array('property_uid' => $property_uid  , 'image_size' => $image_size  ));
			$output[ 'SLIDESHOW' ] = $result ['slideshow'];

			$pageoutput = array();
			$pageoutput[] = $output;

			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('show_property_slideshow.html');
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
