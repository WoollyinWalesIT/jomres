<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001toggle_jomres_widget_ajax
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

		$property_uid = getDefaultProperty();
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
            return;
        }
		
		$response = array();
		$content = '';

        $jr_widget = jomresGetParam($_GET, 'jr_widget', '');
		$jr_widget_enabled = (int)jomresGetParam($_GET, 'jr_widget_enabled', 0);
		$jr_widget_column = (int)jomresGetParam($_GET, 'jr_widget_column', 1);
		$jr_widget_position = (int)jomresGetParam($_GET, 'jr_widget_position', 0);

		$order = array();
		$jr_widget_order = jomresGetParam($_GET, 'jr_widget_order', '');
		$bang = explode (",",$jr_widget_order);
		if (!empty($bang)) {
			for ($i=0;$i<=count($bang);$i++) {
				if (isset($bang[$i]) && trim($bang[$i]) != '' ) {
					$order[] = jomresGetParam($bang, $i, '');
				}
			}
		}

        $jomres_widgets = jomres_singleton_abstract::getInstance('jomres_widgets');
		$jomres_widgets->property_uid = $property_uid; //we need to set this so we`ll be sure we`ll get/set just the enabled widgets for this property uid. Other properties may have other widgets enabled

		if (!isset($jomres_widgets->widgets[$jr_widget])) {
			return;
		}

		//get all enabled widgets
		if (!$jomres_widgets->get_widgets($property_uid)) {
			return;
		}
		
		//save user widgets params
		if (!$jomres_widgets->toggle_widget($jr_widget, $jr_widget_enabled, $jr_widget_column, $order )) {
			return;
		}

		$componentArgs = array(
			'output_now' => false,
			'is_widget' => true
		);
		
		if ($jr_widget_enabled == 1) {
			$widget = array();
				
			$widget['JR_WIDGET_TASK'] = $jr_widget;

			//$widget['WIDGET_SHORTCODE'] = '{jomres_shortcode '.$jr_widget.'}';
			$widget['WIDGET_SHORTCODE'] = $MiniComponents->specificEvent($jomres_widgets->widgets[$jr_widget]['eventPoint'], $jr_widget, $componentArgs);
			
			$widget['WIDGET_TITLE'] = $jomres_widgets->widgets[$jr_widget]['title'];
			
			$pageoutput = array();
			$pageoutput[] = $widget;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('widget.html');
			
			$content = $tmpl->getParsedTemplate(null, true);
		}
		
		//set ajax response
		$response = array(
			'widget' => $jr_widget,
			'enabled' => $jr_widget_enabled,
			'column' => $jr_widget_column,
			'position' => $jr_widget_position,
			'content' => $content
		);

        echo json_encode($response);
        exit;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
