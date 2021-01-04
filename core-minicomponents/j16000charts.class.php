<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
 *
 * @copyright	2005-2021 Vince Wooll
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

//This is a month view chart the occupancy - number of rooms booked by day in the selected month
class j16000charts
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

			return;
		}

		$property_uid = getDefaultProperty();

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		//set selected jr chart showtime
		if (isset($_POST['jr_chart'])) {
			set_showtime('jr_chart', jomresGetParam($_POST, 'jr_chart', 'chart_bookings'));
		} elseif (isset($_REQUEST['jr_chart'])) {
			set_showtime('jr_chart', jomresGetParam($_REQUEST, 'jr_chart', 'chart_bookings'));
		} else {
			set_showtime('jr_chart', 'chart_bookings');
		}

		//chart type
		$chart_type = jomresGetParam($_POST, 'jr_chart_type', 'line');

		$output = array();
		$pageoutput = array();
		$chart_rows = array();

		//get all charts for the dropdown menu
		$MiniComponents->triggerEvent('13600'); // All charting minicomponents

		$all_jomres_charts = get_showtime('all_jomres_charts');

		$options = array();
		$options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_CHARTS_SELECT', '_JOMRES_CHARTS_SELECT', false));
		foreach ($all_jomres_charts as $k) {
			$options[] = jomresHTML::makeOption($k['id'], $k['title'].' - '.$k['description']);
		}
		$output['CHARTS_DROPDOWN'] = jomresHTML::selectList($options, 'jr_chart', 'class="inputbox" size="1"', 'value', 'text', get_showtime('jr_chart'));

		//chart types dropdown
		$options = array();
		$options[] = jomresHTML::makeOption('line', 'Line');
		$options[] = jomresHTML::makeOption('bar', 'Bar');
		$options[] = jomresHTML::makeOption('radar', 'Radar');
		$output['CHART_TYPES_DROPDOWN'] = jomresHTML::selectList($options, 'jr_chart_type', 'class="inputbox" size="1"', 'value', 'text', $chart_type);

		//get selected jr chart
		if (get_showtime('jr_chart') == '0') {
			$output['CHART'] = '';
		} else {
			if ($MiniComponents->eventSpecificlyExistsCheck('16000', get_showtime('jr_chart'))) {
				$output['CHART'] = $MiniComponents->specificEvent('16000', get_showtime('jr_chart'), array('output_now' => false));
			}
		}

		$output['PAGETITLE'] = jr_gettext('_JOMRES_CHARTS', '_JOMRES_CHARTS', false, false);

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('charts.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}

	public function getRetVals()
	{
		return null;
	}
}
