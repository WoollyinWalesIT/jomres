<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_charts
{
    public function __construct()
    {
        $this->chart = ''; //the generated chart/graph

        $this->type = 'line'; //line, bar, radar
        $this->title = 'Example Chart'; // string chart title
        $this->title_class = 'panel-default'; // string chart title class, eg: "panel-default"
        $this->description = 'Example chart description'; // string chart description, eg: "Total sales per month"
        $this->labels = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'); // array of X axis labels
        $this->url = ''; //url to full page chart
		$this->height = 'auto'; //chart height
		$this->is_widget = false; //set this to true to use the widget optimized templates

        $this->label = 'Example data set'; // name of the data set
        $this->data = array(rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100), rand(10, 100)); //data array for the Y axis
        $this->fillColor = 'rgba(220,220,220,0.5)';
        $this->strokeColor = 'rgba(220,220,220,1)';
        $this->pointColor = 'rgba(220,220,220,1)';
        $this->pointStrokeColor = '#fff';
        $this->pointHighlightFill = '#fff';
        $this->pointHighlightStroke = 'rgba(220,220,220,1)';

        /* Array of data sets for this chart
        $this->datasets[] = array(
                                'label' 				= 'Sales',
                                'data' 					= array ( rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100) ),
                                'fillColor' 			= "rgba(220,220,220,0.5)",
                                'strokeColor' 			= "rgba(220,220,220,1)",
                                'pointColor'			= "rgba(220,220,220,1)",
                                'pointStrokeColor' 		= "#fff",
                                'pointHighlightFill' 	= "#fff",
                                'pointHighlightStroke'	= "rgba(220,220,220,1)"
                                );
        */
        $this->datasets = array();

        //include the chart.js in the head
        jomres_cmsspecific_addheaddata('javascript',  JOMRES_ROOT_DIRECTORY.'/javascript/', 'Chart.min.js');
    }

    public function get_chart()
    {
        $output = array();
        $pageoutput = array();
        $legend_rows = array();

        //build chart
        $this->build_chart();

        if ($this->chart == '') {
            return false;
        }

        $output['TITLE'] = $this->title;
        $output['TITLE_CLASS'] = $this->title_class;
        $output['DESCRIPTION'] = $this->description;
        $output['CHART'] = $this->chart;
        $output['URL'] = $this->url;

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->addRows('pageoutput', $pageoutput);
        
		if (!$this->is_widget) {
			$tmpl->readTemplatesFromInput('show_chart.html');
		} else {
			$tmpl->readTemplatesFromInput('widget_show_chart.html');
		}

        return $tmpl->getParsedTemplate();
    }

    private function build_chart()
    {
        $output = array();
        $rows = array();
        $pageoutput = array();
		
		$output['CHART_TYPE'] = $this->type;

        //X-axis labels
        $output['LABELS'] = '"'.implode('", "', $this->labels).'"';

        //if there`s no data in the dataset, use sample data
        if (empty($this->datasets)) {
            $this->datasets[0] = $this->data;
        }

        foreach ($this->datasets as $k => $v) {
            $r = array();

            //label
            if (array_key_exists('label', $v)) {
                $r['LABEL'] = $v['label'];
            } else {
                $r['LABEL'] = $this->label;
            }

            //data
            if (array_key_exists('data', $v)) {
                $r['DATA'] = implode(',', $v['data']);
            } else {
                $r['DATA'] = implode(',', $this->data);
            }

            //fillColor
            if (array_key_exists('fillColor', $v)) {
                $r['fillColor'] = $v['fillColor'];
            } else {
                $r['fillColor'] = $this->fillColor;
            }

            //strokeColor
            if (array_key_exists('strokeColor', $v)) {
                $r['strokeColor'] = $v['strokeColor'];
            } else {
                $r['strokeColor'] = $this->strokeColor;
            }

            //pointColor
            if (array_key_exists('pointColor', $v)) {
                $r['pointColor'] = $v['pointColor'];
            } else {
                $r['pointColor'] = $this->pointColor;
            }

            //pointStrokeColor
            if (array_key_exists('pointStrokeColor', $v)) {
                $r['pointStrokeColor'] = $v['pointStrokeColor'];
            } else {
                $r['pointStrokeColor'] = $this->pointStrokeColor;
            }

            //pointHighlightFill
            if (array_key_exists('pointHighlightFill', $v)) {
                $r['pointHighlightFill'] = $v['pointHighlightFill'];
            } else {
                $r['pointHighlightFill'] = $this->pointHighlightFill;
            }

            //pointHighlightStroke
            if (array_key_exists('pointHighlightStroke', $v)) {
                $r['pointHighlightStroke'] = $v['pointHighlightStroke'];
            } else {
                $r['pointHighlightStroke'] = $this->pointHighlightStroke;
            }

            if (array_key_exists($k + 1, $this->datasets)) {
                $r['COMMA'] = ',';
            } else {
                $r['COMMA'] = '';
            }

            $rows[] = $r;
        }
		
		//chart fixed height
		$output['HEIGHT'] = $this->height;
		
		//aspect ratio if we have a fixed height
		$output['MAINTAIN_ASPECT_RATIO'] = 'true';
		if ($this->height != 'auto') {
			$output['MAINTAIN_ASPECT_RATIO'] = 'false';
		}

        $output['RANDOM_ID'] = generateJomresRandomString(10);

        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->readTemplatesFromInput('chart.html');

        $this->chart = $tmpl->getParsedTemplate();
    }
}
