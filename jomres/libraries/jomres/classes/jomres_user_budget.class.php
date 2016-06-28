<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_user_budget
	{
	/**
	#
	 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table
	#
	 */
	function __construct()
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		if (!isset($tmpBookingHandler->user_settings[ 'budget' ]))
			$tmpBookingHandler->user_settings[ 'budget' ] = 0;
		}

	function set_budget( $budget )
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$tmpBookingHandler->user_settings[ 'budget' ] = (int)$budget;
		//$tmpBookingHandler->close_jomres_session();
		
		}
		
	function get_budget($with_currency=false)
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		if ($tmpBookingHandler->user_settings[ 'budget' ] > 0)
			{
			if ($with_currency)
				return output_price((int) $tmpBookingHandler->user_settings[ 'budget' ] , "" , false );
			else
				return (int) $tmpBookingHandler->user_settings[ 'budget' ];
			}
		else
			return '';
		}

	function get_budget_dropdown()
		{

		if (!using_bootstrap())
			return '';
		
		$output = array();
		$pageoutput=array();
		
		$output['BUDGET'] = jr_gettext( 'GUEST_BUDGET', 'GUEST_BUDGET', false, false );
		$output['FIGURE'] = $this->get_budget(true);
		
		$prices = $this->get_price_ranges();
		
		$highest_price = max($prices);
		$range = $highest_price/10;

		$ranges = range(min($prices), max($prices)+$range, $range);

		// This can be called via either the "search" task, or more complicatedly through ajax search. If it is, instead of having a simple js function to call we need to call a different one, using the form name variable. Incidently, this is the same onclick function that's used to return to search results. If we didn't do this, clicking on the dropdown after doing an ajax search would reload the current page, e.g. "viewproperty" or somesuch.
		$onclick=false;
		if (isset($_REQUEST['ajax_search_form_name']))
			{
			$onclick = true;
			}

		$rows = array ();
		if ( ( ( defined('JOMRES_NOHTML') && JOMRES_NOHTML == 0 ) || get_showtime( 'task' ) == "ajax_search_filter" ) )
			{
			if ( $this->get_budget(true) != "" )
				{
				$r              = array ();
				$r[ 'TITLE' ]   = jr_gettext( '_JOMRES_COM_A_RESET', '_JOMRES_COM_A_RESET', false, false );
				if ( !isset($_REQUEST['ajax_search_form_name']) )
					$r[ 'ONCLICK' ]    = 'onclick="set_budget( 0 , true , \'\')"';
				else
					{
					$formname = jomresGetParam( $_REQUEST, 'ajax_search_form_name', "" );
					$r[ 'ONCLICK' ]    = 'onclick="set_budget( 0 , false , \''.$formname.'\'); "';
					}
				$rows[ ] = $r;
				}
			
			foreach ( $ranges as $range )
				{
				if ( $range > 0)
					{
					$r              = array ();
					$r[ 'TITLE' ]   = output_price($range , "" , false );
					$r[ 'FIGURE' ]    = $range;
					if ( !isset($_REQUEST['ajax_search_form_name']) )
						{
						$r[ 'ONCLICK' ]    = 'onclick="set_budget('.$range.', true , \'\')"';
						}
					else
						{
						$formname = jomresGetParam( $_REQUEST, 'ajax_search_form_name', "" );
						$r[ 'ONCLICK' ]    = 'onclick="set_budget('.$range.' , false , \''.$formname.'\'); "';
						}
					$rows[ ] = $r;
					}
				}
			}

		$pageoutput[]=$output;
		$tmpl          = new patTemplate();
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'list_properties_budget_dropdown.html' );
		return $tmpl->getParsedTemplate();

		}
		
		
	function get_price_ranges()
		{
		if (file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "price_ranges.php"))
			{
			$last_modified    = filemtime( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "price_ranges.php");
			$seconds_timediff = time() - $last_modified;
			if ( $seconds_timediff > 3600 ) 
				{
				unlink(JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "price_ranges.php" );
				}
			else
				{
				$prices = json_decode(file_get_contents( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "price_ranges.php" ));
				}
			}
		
		if ( !file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "price_ranges.php") || count($prices)==0 )
			{
			$query = "SELECT DISTINCT roomrateperday FROM #__jomres_rates WHERE roomrateperday > '0' LIMIT 100";
			$rates = doSelectSql($query);

			// Is Jintour installed?
			$tour_prices = array();
			if ( function_exists("jintour_get_tours_for_arrdep_dates"))
				{
				$query = "SELECT DISTINCT (CASE WHEN `price_adults` > 0 THEN `price_adults` ELSE `price_kids` END) AS price FROM #__jomres_jintour_tours LIMIT 100";
				$tour_prices = doSelectSql($query);
				}
			
			$results = array();
			if (count($rates)>0)
				{
				foreach ($rates as $rate)
					{
					$results[]=$rate->roomrateperday;
					}
				}
				
			if (count($tour_prices)>0)
				{
				foreach ($tour_prices as $price)
					{
					$results[]=$price->price;
					}
				}
				
			$prices=array();
			foreach ($results as $low)
				{
				$rounded = ceil($low / 10) * 10;
				if ($rounded > 0)
					$prices[] = $rounded;
				}
			$prices = array_unique ($prices);
			natsort($prices);
			$prices = array_values($prices); // Resetting the keys for "range"
			file_put_contents( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "price_ranges.php", json_encode($prices) );
			}
					
		return $prices;
		}
	}


?>