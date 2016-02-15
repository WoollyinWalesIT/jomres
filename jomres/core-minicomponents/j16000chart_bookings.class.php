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

//This is a month view chart of all paid bookings, excludes cancelled/pending/unpaid ones)
class j16000chart_bookings
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;

		$chart_type = jomresGetParam( $_POST, 'jr_chart_type', 'line' );
		
		//import jomres charts class and create a new instance
		jr_import('jomres_charts');
		$chart = new jomres_charts();
		
		//set new chart data
		$chart->type 		= $chart_type;
		$chart->title 		= jr_gettext("_JOMRES_STATUS_BOOKINGS",_JOMRES_STATUS_BOOKINGS,false,false);
		$chart->url 		= jomresUrl(JOMRES_SITEPAGE_URL_ADMIN . '&task=charts&jr_chart=chart_bookings');
		$chart->title_class = 'panel-default';
		$chart->description = jr_gettext("_JOMRES_CHART_BOOKINGS_DESC",_JOMRES_CHART_BOOKINGS_DESC,false,false);
		$chart->labels 		= array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		
		//query db for relevant rows for this chart
		$query = "SELECT 
					a.id, 
					a.status, 
					a.raised_date,   
					SUM( CASE WHEN b.init_total_inclusive < 0 THEN 0 ELSE b.init_total_inclusive END ) AS grand_total   
				FROM #__jomresportal_invoices a 
					JOIN #__jomresportal_lineitems b ON a.id = b.inv_id 
				WHERE a.status = 1 
					AND a.contract_id > 0 
				GROUP BY a.id 
				ORDER BY a.raised_date ASC 
				";
		$result = doSelectSql( $query );
		
		if (count($result) > 0 ) //no bookings in db, so we`ll output a demo chart
			{
			$results 	= array ();

			//now we create an array of amounts for each year/month
			foreach ( $result as $r)
				{
				$month =  date("n" , strtotime($r->raised_date) );
				$year =  date("Y" , strtotime($r->raised_date) );
				
				$results[$year][$month] += number_format((float)$r->grand_total, 2, '.', '');
				}
			
			//sort results by year ascending
			ksort($results);

			//build chart datasets by year
			foreach ($results as $k=>$v)
				{
				$data = array();
				
				//build data for each month
				for ($i = 1; $i <= 12; $i++)
					{
					if (isset($v[$i]))
						$data[] = $v[$i];
					else
						$data[] = 0;
					}
				
				//generate the dataset color
				$a = mt_rand(0, 255);
				$b = mt_rand(0, 255);
				$c = mt_rand(0, 255);
				
				//set dataset details
				$chart->datasets[$k] = array(
											 'label' => $k, 
											 'data' => $data,
											 'fillColor' => "rgba(".$a.",".$b.",".$c.",0.2)",
											 'strokeColor' => "rgba(".$a.",".$b.",".$c.",1)",
											 'pointColor' => "rgba(".$a.",".$b.",".$c.",1)",
											 'pointStrokeColor' => "#fff",
											 'pointHighlightFill' => "#fff",
											 'pointHighlightStroke' => "rgba(".$a.",".$b.",".$c.",1)"
											 );
				}
			}
		
		//display the chart or return it
		if (!$output_now)
			$this->retVals = $chart->get_chart();
		else
			echo $chart->get_chart();
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
