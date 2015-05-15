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

class j16000list_reviews
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
		$output     = array ();
		$pageoutput = array ();
		$rows       = array ();

		jr_import( 'jrportal_property_functions' );
		$propertyFunctions  = new jrportal_property_functions();
		$jomresPropertyList = $propertyFunctions->getAllJomresProperties();

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ]               = jr_gettext( 'JOMRES_SITEPAGE_URL_ADMIN', JOMRES_SITEPAGE_URL_ADMIN,false );
		$output[ '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO' ]  = jr_gettext( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', _JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO,false );
		$output[ '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED' ] = jr_gettext( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', _JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED,false );
		$output[ '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL' ]       = jr_gettext( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', _JOMRES_REVIEWS_ADMIN_NUMBERTOTAL,false );
		$output[ '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE' ]     = jr_gettext( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', _JOMRES_REVIEWS_REPORT_REVIEW_TITLE,false );
		$output[ '_JOMRES_REVIEWS' ]                         = jr_gettext( '_JOMRES_REVIEWS', _JOMRES_REVIEWS,false );

		$editIcon = '<IMG SRC="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';

		jr_import( 'jomres_reviews' );
		$Reviews                 = new jomres_reviews();
		$all_reviews             = $Reviews->get_all_reviews_index_by_property_uid();
		$all_reports             = $Reviews->get_all_reports_index_by_rating_id();
		$total_number_of_reports = count( $all_reports );

		foreach ( $jomresPropertyList as $key => $val )
			{
			$r                   = array ();
			$r[ 'PROPERTYNAME' ] = $val[ 'property_name' ];
			$r[ 'VIEWLINK' ]     = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=view_property_reviews&property_uid=' . (int) $key . '">' . $editIcon . '</a>';

			$review_count      = 0;
			$unpublished_count = 0;
			$report_count      = 0;
			foreach ( $all_reviews as $property_reviews )
				{
				foreach ( $property_reviews as $review )
					{
					$rating_id = $review[ 'rating_id' ];
					if ( $review[ 'property_uid' ] == $key )
						{
						if ( isset( $all_reports[ $rating_id ] ) ) $report_count = count( $all_reports[ $rating_id ] );
						$review_count++;
						if ( $review[ 'published' ] == 0 ) $unpublished_count++;
						}
					}
				}

			$r[ 'row_class' ] = '';
			if ( !using_bootstrap() )
				{
				if ( $review_count > 0 ) $r[ 'row_class' ] = "ui-state-highlight";
				if ( $unpublished_count > 0 ) $r[ 'row_class' ] = "ui-state-error";
				}
			else
				{
				if ( $review_count > 0 ) $r[ 'row_class' ] = "alert alert-info";
				if ( $unpublished_count > 0 ) $r[ 'row_class' ] = "alert";
				}

			$r[ 'NUMBERUNPUBLISHED' ] = $unpublished_count;
			$r[ 'NUMBERTOTAL' ]       = $review_count;
			$r[ 'REPORTTOTAL' ]       = $report_count;

			$rows[ ] = $r;
			}

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_reviews_propertys.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}