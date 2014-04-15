<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
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
	function jomres_user_budget()
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		if (!isset($tmpBookingHandler->user_settings[ 'budget' ]))
			$tmpBookingHandler->user_settings[ 'budget' ] = 0;
		}

	function set_budget( $budget )
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$tmpBookingHandler->user_settings[ 'budget' ] = (int)$budget;
		$tmpBookingHandler->close_jomres_session();
		
		}
		
	function get_budget($with_currency=false)
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		if ($tmpBookingHandler->user_settings[ 'budget' ] > 0)
			{
			if ($with_currency)
				return output_price((int) $tmpBookingHandler->user_settings[ 'budget' ]);
			else
				return (int) $tmpBookingHandler->user_settings[ 'budget' ];
			}
		else
			return '';
		}

	function get_budget_dropdown($prices)
		{
		if (!using_bootstrap())
			return '';
		
		$output = array();
		$pageoutput=array();
		
		$output['BUDGET'] = jr_gettext( 'GUEST_BUDGET', GUEST_BUDGET, false, false );
		$output['FIGURE'] = $this->get_budget(true);
		
		$ranges = range(min($prices), max($prices), 50);
		
		// This can be called via either the "search" task, or more complicatedly through ajax search. If it is, instead of having a simple js function to call we need to call a different one, using the form name variable. Incidently, this is the same onclick function that's used to return to search results. If we didn't do this, clicking on the dropdown after doing an ajax search would reload the current page, e.g. "viewproperty" or somesuch.
		$onclick=false;
		if (isset($_REQUEST['ajax_search_form_name']))
			{
			$onclick = true;
			}

		$rows = array ();
		if ( ( JOMRES_NOHTML != 1 || get_showtime( 'task' ) == "ajax_search_filter" ) )
			{
			if ( $this->get_budget(true) > 0)
				{
				$r              = array ();
				$r[ 'TITLE' ]   = jr_gettext( '_JOMRES_COM_A_RESET', _JOMRES_COM_A_RESET, false, false );
				$r[ 'FIGURE' ]    = -2;
				$rows[ ] = $r;
				}
			
			foreach ( $ranges as $range )
				{
				if ( $range > 0)
					{
					$r              = array ();
					$r[ 'TITLE' ]   = output_price($range);
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
	}


?>