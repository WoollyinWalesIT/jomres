<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
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

class j06001cpanel
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
					'task' => 'cpanel',
					'arguments' => array(),
					'info' => '_JOMRES_SHORTCODES_06001CPANEL',
				);

			return;
		}
		jomres_cmsspecific_setmetadata('title', jomres_purify_html( jr_gettext('_JRPORTAL_CPANEL', '_JRPORTAL_CPANEL', false) ));
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		$property_uid = getDefaultProperty();
		
		$jomres_widgets = jomres_singleton_abstract::getInstance('jomres_widgets');
		$jomres_widgets->get_widgets($property_uid);

		//widgets js
		jomres_cmsspecific_addheaddata('javascript', JOMRES_JS_RELPATH, 'jomres-widgets.js');

		$output = array();
		
		$grid_layout = explode(' ', $jrConfig['front_cpanel_home_grid']);
		
		foreach ($grid_layout as $k => $v) {
			$numbers = explode('/', $v);
			$grid_layout[$k] = (int)$numbers[0] / (int)$numbers[1];
		}

		$number_of_columns = count($grid_layout);
		
		$componentArgs = array(
			'output_now' => false,
			'is_widget' => true
		);
	
		if (!empty($jomres_widgets->this_page_widgets)) {
			foreach ($jomres_widgets->this_page_widgets as $widget => $w ) {
				if (isset($w['column']) && $w['column'] <= $number_of_columns) {
					$c = (int)$w['column'];
				} else {
					$c = 1;
				}
				
				$widget_output = array();
				
				$widget_output['JR_WIDGET_TASK'] = $widget;

				//$widget_output['WIDGET_SHORTCODE'] = '{jomres_shortcode '.$widget.'}';
				$widget_output['WIDGET_SHORTCODE'] = $MiniComponents->specificEvent($jomres_widgets->widgets[$widget]['eventPoint'], $widget, $componentArgs);
				
				$widget_output['WIDGET_TITLE'] = $jomres_widgets->widgets[$widget]['title'];
				
				$pageoutput = array();
				$pageoutput[] = $widget_output;
				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->readTemplatesFromInput('widget.html');
				
				if (isset(${'output'.$c}['WIDGETS'])) {
					${'output'.$c}['WIDGETS'] .= $tmpl->getParsedTemplate();
				} else {
					${'output'.$c}['WIDGETS'] = $tmpl->getParsedTemplate();
				}

				${'output'.$c}['COLUMN_SIZE'] = 12 * $grid_layout[$c-1]; //array keys in $grid_layout start from 0, column ids start from 1
			}
		}
		
		$pageoutput = array();
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->addRows('pageoutput', $pageoutput);

		for ($i = 1; $i <= $number_of_columns; ++$i) {
			if (!isset(${'output'.$i})) {
				${'output'.$i}['WIDGETS'] = '';
				${'output'.$i}['COLUMN_SIZE'] = 12 * $grid_layout[$i-1]; //array keys in $grid_layout start from 0, column ids start from 1
			}
			
			$tmpl->addRows('columns'.$i, array(${'output'.$i}));
		}

		$tmpl->readTemplatesFromInput('cpanel.html');
		$tmpl->displayParsedTemplate();
	}




	public function getRetVals()
	{
		return null;
	}
}
