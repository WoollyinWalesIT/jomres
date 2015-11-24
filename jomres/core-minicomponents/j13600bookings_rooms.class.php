<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j13600bookings_rooms
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}
		
		$this->retVals = array();
		
		$query = "SELECT `date`,`room_uid` FROM #__jomres_room_bookings";
		$result = doSelectSql($query);

		if (count($result) > 0 )
			{
			$results = array ();
			foreach ( $result as $res)
				{
				$d = $res->date;
				$date =  date("Y-m-d" , strtotime($d) );
				$results[$date] += 1;
				}

			reset($results);
			$first_key = key($results);
			end($results);
			$last_key = key($results);

			$dates = array();
			$current = strtotime($first_key);
			$last = strtotime($last_key);

			while( $current <= $last ) {
				$dates[] = date("Y-m-d", $current);
				$current = strtotime('+1 day', $current);
			}

			foreach ( $dates as $date)
				{
				$months['labels'][]	= $date;
				if (isset($results[$date]))
					{
					$val = $results[$date];
					$months['data'][]	= $val;
					}
				else
					$months['data'][]	= 0;
				}
				
			foreach ( $months['labels'] as $key=>$day )
				{
				$short_month = date("Y-m" , strtotime($day) );
				$this->retVals['labels'][$short_month] = $short_month;
				$this->retVals['data'][$short_month] = $this->retVals['data'][$short_month] + $months['data'][$key];
				}

			$this->retVals['labels'] = array_values($this->retVals['labels']);
			$this->retVals['data'] = array_values($this->retVals['data']);
			
			$this->retVals['title_class']		= "default";
			$this->retVals['label'] = jr_gettext("PROPERTY_STATS_ROOM_BOOKINGS_DAYS",PROPERTY_STATS_ROOM_BOOKINGS_DAYS,false,false);
			$this->retVals['more_info'] = jr_gettext("PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC",PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC,false,false);
			
			$this->retVals['chart_params'] = http_build_query(array('chart_params' => $this->retVals));
			
			}
		else
			{
			/* 		Example return values */
			$this->retVals['labels']	= array ( "January","February","March","April","May","June","July" );
			$this->retVals['data'] 		= array ( rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100) );
			$this->retVals['title_class']		= "default";
			$this->retVals['label'] = "Example Bookings data";
			}
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
