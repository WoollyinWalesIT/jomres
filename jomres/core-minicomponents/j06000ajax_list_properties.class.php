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

class j06000ajax_list_properties
	{
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}


		$MiniComponents->triggerEvent( '01004' );

		$number_of_results = (int) get_showtime( "number_of_ajax_results_required" );
		if ( $number_of_results == 0 ) $number_of_results = 1;

		$tmpBookingHandler       = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$last_id                 = (int) $_REQUEST[ 'lastID' ];
		$original_search_results = $tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ];
		$count                   = count( $original_search_results );

		for ( $i = 0; $i <= $count; $i++ )
			{
			if ( $original_search_results[ $i ] == $last_id )
				{
				for ( $n = 1; $n <= $number_of_results; $n++ )
					{
					$counter = $i + $n;
					if ( !is_null( $original_search_results[ $counter ] ) ) $this->resultBucket[ ] = $original_search_results[ $counter ];

					}
				break;
				}
			}

		if ( count( $this->resultBucket ) > 0 )
			{
			$componentArgs                    = array ();
			$componentArgs[ 'propertys_uid' ] = $this->resultBucket;
			$MiniComponents->specificEvent( '01010', 'listpropertys', $componentArgs );
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>