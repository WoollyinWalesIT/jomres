<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
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
		
		$unpublished_count = 0;
		$report_count      = 0;
		
		$query = "SELECT count(`report_id`) AS report_count FROM #__jomres_reviews_reports";
		$report_count = (int)doSelectSql($query, 1);

		$query = "SELECT count(`published`) AS unpublished_count FROM #__jomres_reviews_ratings WHERE `published` = 0 ";
		$unpublished_count = (int)doSelectSql($query, 1);

		$this->retVals = array ( "red" => $report_count, "orange" => $unpublished_count );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}