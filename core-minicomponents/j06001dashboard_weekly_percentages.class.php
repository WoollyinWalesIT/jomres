<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001dashboard_weekly_percentages
{
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
		
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $output = array();
        $pageoutput = array();
		
		$output[ '_JOMRES_OVERALL_ROOMS_BOOKED' ] = jr_gettext('_JOMRES_OVERALL_ROOMS_BOOKED', '_JOMRES_OVERALL_ROOMS_BOOKED', false);
		
        jomres_cmsspecific_addheaddata('css', JOMRES_ROOT_DIRECTORY.'/css/purecss-circular-progress-bar-master/', 'css-circular-prog-bar.css');

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($property_uid);

		$number_of_rooms = count($current_property_details->multi_query_result[$property_uid]['rooms']);
		
		$start   = new DateTime();
		$end     = new DateTime();
		$start   = $start->modify( '0 days' ); 
		$end     = $end->modify( '+7 days' ); // Date Period doesn't include the end date
		$interval = new DateInterval('P1D');
		$daterange = new DatePeriod($start, $interval ,$end);
		$dates = array();
		foreach($daterange as $date){
			$dates[$date->format("Y/m/d")]['number_booked']= 0;
			$dates[$date->format("Y/m/d")]['date_of_month']=$date->format("d");
			$dates[$date->format("Y/m/d")]['month_name']=$date->format("M");
		}

		$query = "SELECT room_bookings_uid,date FROM #__jomres_room_bookings WHERE ";
		
		foreach ($dates as $date=>$val ) {
			$query .= "`date` = '".$date."' OR ";
		}
		$query = rtrim($query, " OR ");
		$results = doSelectSql($query);
		if (!empty($results)){
			foreach ($results as $res) {
				$dates[$res->date]['number_booked'] ++;
			}
		}
		
		foreach ($dates as $date=>$number_booked) {
			$percentage_booked = (int)($number_booked['number_booked']*100)/$number_of_rooms;
			$dates[$date]['percentage'] = $percentage_booked;
			$dates[$date]['friendly_date'] = outputDate( $date ) ; // This doesn't scale well responsivly so we'll use the days and month names as determined up above.
			$dates[$date][''] = 
			$dates[$date]['over50'] = '';
			if ( $percentage_booked>50) {
				$dates[$date]['over50'] = 'over50';
			}
		}


        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $dates);
        $tmpl->readTemplatesFromInput('dashboard_weekly_percentages.html');
        $template = $tmpl->getParsedTemplate();
        if ($output_now) {
            echo $template;
        } else {
            $this->retVals = $template;
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
