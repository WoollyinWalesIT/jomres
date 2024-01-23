<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.8.0
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

	class j06001weekly_occupancy_percentages
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
					'task' => 'dashboard',
					'arguments' => array(),
					'info' => '_JOMRES_SHORTCODES_06001DASHBOARD',
				);

				return;
			}

			$ePointFilepath = get_showtime('ePointFilepath');
			$this->retVals = '';

			if (isset($componentArgs[ 'property_uid' ])) {
				$property_uid = $componentArgs[ 'property_uid' ];
			} else {
				$property_uid = getDefaultProperty();
			}

			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
			if (!in_array($property_uid, $thisJRUser->authorisedProperties)) {
				return;
			}

			$mrConfig = getPropertySpecificSettings($property_uid);
			if ($mrConfig[ 'is_real_estate_listing' ] == 1 || get_showtime('is_jintour_property')) {
				return;
			}

			if (isset($componentArgs[ 'output_now' ])) {
				$output_now = $componentArgs[ 'output_now' ];
			} else {
				$output_now = true;
			}

			if (isset($componentArgs[ 'is_widget' ])) {
				$is_widget = $componentArgs[ 'is_widget' ];
			} else {
				$is_widget = false;
			}

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			$output = array();
			$pageoutput = array();

			$output[ '_JOMRES_OVERALL_ROOMS_BOOKED' ] = jr_gettext('_JOMRES_OVERALL_ROOMS_BOOKED', '_JOMRES_OVERALL_ROOMS_BOOKED', false);

			if (jomres_bootstrap_version() < 5) {
				jomres_cmsspecific_addheaddata('css', JOMRES_CSS_RELPATH, 'css-circular-prog-bar.css');
			}


			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->gather_data($property_uid);

			if (isset($current_property_details->multi_query_result[$property_uid]['rooms'])) {
				$number_of_rooms = count($current_property_details->multi_query_result[$property_uid]['rooms']);
			} else {
				return; // Nothing we can do, no rooms = no bookings
			}


			$start   = new DateTime();
			$end	 = new DateTime();
			$start   = $start->modify('0 days');

			if ($is_widget) {
				$end	 = $end->modify('+3 days'); // Date Period doesn't include the end date
			} else {
				$end	 = $end->modify('+7 days'); // Date Period doesn't include the end date
			}
			$interval = new DateInterval('P1D');
			$daterange = new DatePeriod($start, $interval, $end);
			$dates = array();
			foreach ($daterange as $date) {
				$dates[$date->format("Y/m/d")]['number_booked']= 0;
				$dates[$date->format("Y/m/d")]['date_of_month']=$date->format("d");
				$dates[$date->format("Y/m/d")]['month_name']=$date->format("M");
			}

			$query = "SELECT room_bookings_uid,date FROM #__jomres_room_bookings WHERE property_uid = $property_uid AND (";

			foreach ($dates as $date => $val) {
				$query .= "`date` = '".$date."' OR ";
			}
			$query = rtrim($query, " OR ").")";

			$results = doSelectSql($query);
			if (!empty($results)) {
				foreach ($results as $res) {
					$dates[$res->date]['number_booked'] ++;
				}
			}

			foreach ($dates as $date => $number_booked) {
				$percentage_booked = ($number_booked['number_booked']*100)/$number_of_rooms;

				$dates[$date]['percentage'] = (int)$percentage_booked;
				$dates[$date]['friendly_date'] = outputDate($date) ; // This doesn't scale well responsivly so we'll use the days and month names as determined up above.
				$dates[$date][''] =
				$dates[$date]['over50'] = '';
				if ($percentage_booked>50) {
					$dates[$date]['over50'] = 'over50';
				}
			}

			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $dates);

			if ($is_widget) {
				$tmpl->readTemplatesFromInput('widget_weekly_occupancy_percentages.html');
			} else {
				$tmpl->readTemplatesFromInput('weekly_occupancy_percentages.html');
			}

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
