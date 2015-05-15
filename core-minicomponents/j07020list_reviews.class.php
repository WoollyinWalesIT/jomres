<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j07020list_reviews
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$jomresPropertyList = get_showtime('published_properties_in_system');

		jr_import( 'jomres_reviews' );
		$Reviews                 = new jomres_reviews();
		$all_reviews             = $Reviews->get_all_reviews_index_by_property_uid();
		$all_reports             = $Reviews->get_all_reports_index_by_rating_id();
		$total_number_of_reports = count( $all_reports );

		$unpublished_count = 0;
		$report_count      = 0;

		foreach ( $jomresPropertyList as $property_uid )
			{
			foreach ( $all_reviews as $property_reviews )
				{
				foreach ( $property_reviews as $review )
					{
					$rating_id = $review[ 'rating_id' ];
					if ( $review[ 'property_uid' ] == $property_uid )
						{
						if ( isset( $all_reports[ $rating_id ] ) ) $report_count = count( $all_reports[ $rating_id ] );
						if ( $review[ 'published' ] == 0 ) $unpublished_count++;
						}
					}
				}
			}

		$this->retVals = array ( "red" => $report_count, "orange" => $unpublished_count );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}