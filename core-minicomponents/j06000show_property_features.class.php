<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
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

class j06000show_property_features
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'show_property_features',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID',
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

		$output_now = true;
		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = (bool) $componentArgs[ 'output_now' ];
		}

		$mrConfig = getPropertySpecificSettings($property_uid);

		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data($property_uid);

		$output = array();

		if (!isset($componentArgs[ 'show_feature_categories' ])) {
			$componentArgs[ 'show_feature_categories' ] = true;
		}

		if (!empty($basic_property_details->features)) {
			if ((int) $mrConfig['showPfeaturesCategories'] == 0 || $componentArgs[ 'show_feature_categories' ] == false) {
				$pFeatures = array();

				$output[ 'HFEATURES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', false);

				foreach ($basic_property_details->features as $feature_id=>$f) {
					$url = jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&feature_uids='.$feature_id);
					$pFeature[ 'FEATURE' ] = jomres_makeTooltip($f[ 'abbv' ], $f[ 'abbv' ], $f[ 'desc' ], JOMRES_IMAGELOCATION_RELPATH.'pfeatures/'.$f[ 'image' ], '', 'property_feature', array() , $url);
					$pFeatures[] = $pFeature;
				}

				$pageoutput[] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->addRows('pfeatures', $pFeatures);
				$tmpl->readTemplatesFromInput('show_property_features.html');
				$features_template = $tmpl->getParsedTemplate();
				if ($output_now) {
					echo $features_template;
				} else {
					$this->retVals = $features_template;
				}
			} else { //display by categories
				//first we split the features in arrays for each category
				$propertyFeatures = array();
				$features_template = array();

				foreach ($basic_property_details->features as $feature_id=>$f) {
					$f['feature_uid']=$feature_id;
					$propertyFeatures[$f['cat_id']][] = $f;
				}

				//now we generate the putput for each category
				foreach ($propertyFeatures as $k => $v) {
					$output = array();
					$pFeatures = array();
					$pageoutput = array();

					if ($k > 0) {
						$output[ 'HFEATURES' ] = $v[0]['cat_title'];
					} else {
						$output[ 'HFEATURES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', false);
					}

					foreach ($v as $f) {
						$url = jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&feature_uids='.$f['feature_uid']);
						if (jomres_bootstrap_version() == '5' ) {
							$p = [ 0 => [
								'IMAGE' 				=> JOMRES_IMAGELOCATION_RELPATH.'pfeatures/'.$f[ 'image' ] ,
								'FEATURE_DESCRIPTION'	=> $f[ 'abbv' ],
								'URL'					=> $url,
								'TOOLTIP'				=> $pFeature[ 'FEATURE' ] = jomres_makeTooltip($f[ 'abbv' ], $f[ 'abbv' ], $f[ 'desc' ], JOMRES_IMAGELOCATION_RELPATH.'pfeatures/'.$f[ 'image' ], '', 'property_feature', array() , $url)
							]];

							$tmpl = new patTemplate();
							$tmpl->addRows('pageoutput', $p);
							$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
							$tmpl->readTemplatesFromInput('show_property_feature.html');
							$pFeature[ 'FEATURE' ] = $tmpl->getParsedTemplate();

						} else {
							$pFeature[ 'FEATURE' ] = jomres_makeTooltip($f[ 'abbv' ], $f[ 'abbv' ], $f[ 'desc' ], JOMRES_IMAGELOCATION_RELPATH.'pfeatures/'.$f[ 'image' ], '', 'property_feature', array() , $url);
						}

						$pFeatures[] = $pFeature;
					}

					$pageoutput[] = $output;
					$tmpl = new patTemplate();
					$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
					$tmpl->addRows('pageoutput', $pageoutput);
					$tmpl->addRows('pfeatures', $pFeatures);
					$tmpl->readTemplatesFromInput('show_property_features.html');
					$features_template[] = array ( 'FEATURES_CATEGORY' => $tmpl->getParsedTemplate() ) ;
				}

				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->addRows('features_template', $features_template);
				$tmpl->readTemplatesFromInput('show_property_features_wrapper.html');
				$features_template = $tmpl->getParsedTemplate();

				if ($output_now) {
					echo $features_template;
				} else {
					$this->retVals = $features_template;
				}
			}
		} else {
			$output[ 'HFEATURES' ] = '';
		}
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
