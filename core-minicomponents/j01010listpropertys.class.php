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

/**
#
 * Lists the properties, according to property uids passed from a search function
#
 *
 * @package Jomres
#
 */
class j01010listpropertys
	{
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j01010listpropertys( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$MiniComponents->triggerEvent( '01008', $componentArgs ); // optional
		$data_only = false;
		if ( isset( $_REQUEST[ 'dataonly' ] ) ) 
			$data_only = true;
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		
		$stayDays = 1;

		if ( $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] != '' && $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'] != '')
			{
			$start = JSCalConvertInputDates( $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] , $siteCal = true );
			$end = JSCalConvertInputDates( $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'] , $siteCal = true );
			
			$bang = explode("/",$start);
			$start = $bang[2]."/".$bang[1]."/".$bang[0];
			$bang = explode("/",$end);
			$end = $bang[2]."/".$bang[1]."/".$bang[0];
			
			$range = get_periods ( $start , $end );
			$stayDays = count($range);
			}
		elseif ( $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] != '' && $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ] )
			{
			$bang = explode("/",$tmpBookingHandler->tmpsearch_data['jomsearch_availability']);
			$start = $bang[2]."/".$bang[1]."/".$bang[0];
			$bang = explode("/",$tmpBookingHandler->tmpsearch_data['jomsearch_availability_departure']);
			$end = $bang[2]."/".$bang[1]."/".$bang[0];
	
			$range = get_periods ( $start, $end);
			$stayDays = count($range);
			}
		
		$customTextObj     = jomres_singleton_abstract::getInstance( 'custom_text' );

		if ( is_null( $tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ] ) ) 
			$tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ] = $jrConfig[ 'property_list_layout_default' ];

		$property_list_layouts = get_showtime( 'property_list_layouts' );
		if ( count( $property_list_layouts ) == 1 )
			{
			$default_layout = array_keys( $property_list_layouts );
			$tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ] = $default_layout[ 0 ];
			}

		$layout_rows = array ();
		$all_layouts = array ();
		if ( ( JOMRES_NOHTML != 1 || get_showtime( 'task' ) == "ajax_search_filter" ) && count( $property_list_layouts ) > 1 )
			{
			foreach ( $property_list_layouts as $key => $layouts )
				{
				$all_layouts[ ] = $key;
				$r              = array ();
				$r[ 'TITLE' ]   = $layouts[ "title" ];
				$r[ 'LINK' ]    = jomresURL( JOMRES_SITEPAGE_URL . "&amp;task=listProperties&amp;propertylist_layout=" . $key );
				$layout_rows[ ] = $r;
				}
			}

		if ( isset( $_REQUEST[ 'propertylist_layout' ] ) && in_array( $_REQUEST[ 'propertylist_layout' ], $all_layouts ) )
			{
			$tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ] = jomresGetParam( $_REQUEST, 'propertylist_layout', "" );
			}
		$layout = $tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ];

		$propertys_uids = $componentArgs[ 'propertys_uid' ];
		
		$live_scrolling_enabled = get_showtime("live_scrolling_enabled");

		if ( !isset( $componentArgs[ 'live_scrolling_enabled' ] ) && is_null($live_scrolling_enabled) ) 
			{
			$live_scrolling_enabled = (bool)$jrConfig['live_scrolling_enabled'];
			}
		else
			{
			$live_scrolling_enabled = (bool) $componentArgs[ 'live_scrolling_enabled' ];
			}
		
		if ( $propertys_uids == "" ) $propertys_uids = array ();

		if ( !@session_start() )
			{
			@ini_set( 'session.save_handler', 'files' );
			session_start();
			}

		// Added to prevent out of memory messages.
		// Modified for 4.5.3 as the previous loop wasn't taking missing keys into account.
		// this may not be needed anymore.
		$maximumProperties = 100; // Limits the maximum number of properties that can be returned in a search
		if ( count( $propertys_uids ) > $maximumProperties )
			{
			$counter  = 1;
			$tmpArray = array ();
			foreach ( $propertys_uids as $key => $val )
				{
				$tmpArray[ ] = $propertys_uids[ $key ];
				$counter++;
				if ( $counter == $maximumProperties ) 
					{
					break;
					}
				}
			$propertys_uids = $tmpArray;
			}

		if (isset($_REQUEST['propertylist_layout']) )
			{
			$propertys_uids = $tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ];
			}
		
		if ( !AJAXCALL || get_showtime( 'task' ) == "ajax_search_filter" )
			{
			$propertys_uids = $MiniComponents->triggerEvent( '01009', array ( 'propertys_uids' => $propertys_uids ) ); // Pre list properties parser. Allows us to to filter property lists if required
			$tmpBookingHandler->tmpsearch_data[ 'ajax_list_search_results' ] = $propertys_uids;
			}

		if ( isset( $property_list_layouts[ $layout ][ "custom_task" ] ) )
			{
			$new_task = $property_list_layouts[ $layout ][ "custom_task" ];
			set_showtime( 'task', $new_task );
			echo $MiniComponents->specificEvent( '06000', $new_task, array ( "layout_rows" => $layout_rows, "property_uids" => $componentArgs[ 'propertys_uid' ] ) );
			}
		else
			{
			$shortlist_items = $tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ];
			$layout_template = $property_list_layouts[ $layout ][ "layout" ];

			if ( is_null( $property_list_layouts[ $layout ][ "path" ] ) ) 
				$layout_path_to_template = JOMRES_TEMPLATEPATH_FRONTEND;
			else
				$layout_path_to_template = $property_list_layouts[ $layout ][ "path" ];

			if ( is_null( $layout_template ) ) 
				$layout_template = "list_properties.html";

			if ($live_scrolling_enabled)
				jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/javascript/', "jquery.livequery.js" );

			if ( $jrConfig[ 'is_single_property_installation' ] == "1" )
				{
				$arrival_clause = '';
				if ( isset( $_REQUEST[ 'arrivalDate' ] ) ) 
					{
					$arrival_clause = "&arrivalDate=" . $_REQUEST[ 'arrivalDate' ]."&departureDate=".$_REQUEST[ 'departureDate' ]; // There's no need for these elements to be sanitised, as we're just redirecting again to a new url, these items will be sanitised at that point.
					}
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=dobooking&selectedProperty=" . $propertys_uids[ 0 ] . $arrival_clause ), "" );
				}

			if (!isset($jrConfig['use_budget_feature']))
				$jrConfig['use_budget_feature'] = "1";
				
			if ( using_bootstrap() && $jrConfig['use_budget_feature'] == "1")
				{
				jr_import('jomres_user_budget');
				$budget = new jomres_user_budget();

				$budget_output = array();
				$budget_output[0]['BUDGET_DROPDOWN'] = $budget-> get_budget_dropdown();
				}
			
			
			if ( count( $propertys_uids ) > 0 )
				{
				$header_output = array ();

				$header_output[ 'ORDER_DROPDOWN' ] = get_showtime( "order_dropdown" );
				$header_output[ 'CLICKTOHIDE' ]    = jr_gettext( '_JOMRES_REVIEWS_CLICKTOHIDE', _JOMRES_REVIEWS_CLICKTOHIDE, false, false );
				$header_output[ 'CLICKTOSHOW' ]    = jr_gettext( '_JOMRES_REVIEWS_CLICKTOSHOW', _JOMRES_REVIEWS_CLICKTOSHOW, false, false );
				$compare                           = array ();
				if ( JOMRES_NOHTML != 1 || get_showtime( 'task' ) == "ajax_search_filter" )
					{
					$compare[ ] = array ( '_JOMRES_COMPARE' => jr_gettext( '_JOMRES_COMPARE', _JOMRES_COMPARE, false, false ), 'COMPARELINK' => '<script type="text/javascript">var compare_url = "' . jomresURL( JOMRES_SITEPAGE_URL . "&task=compare" ) . '";</script>' );
					if ( get_showtime( 'task' ) != "show_shortlisted_properties" ) $shortlist[ ] = array ( '_JOMRES_VIEWSHORTLIST' => jr_gettext( '_JOMRES_VIEWSHORTLIST', _JOMRES_VIEWSHORTLIST, false, false ), 'SHORTLISTLINK' => jomresURL( JOMRES_SITEPAGE_URL . "&amp;task=show_shortlisted_properties" ) );
					}

				if ( JOMRES_NOHTML != 1 && get_showtime( 'task' ) != "ajax_search_filter" )
					{
					$output[ 'JOMRES_SITEPAGE_URL_AJAX' ] = "<script type=\"text/javascript\"> var live_site_ajax = '" . JOMRES_SITEPAGE_URL_AJAX . "'; </script>";
					//jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/javascript/', "list_properties.js" );
					}

				if ( $live_scrolling_enabled ) 
					$limit = (int) $jrConfig[ 'property_list_limit' ];
				else
					$limit = count( $propertys_uids );
				
				$i=0;
				foreach ($propertys_uids as $puid)
					{
					if ($i<$limit)
						$propertysToShow[]=$puid;
					$i++;
					}

				$show_paging = false;
				if ( !$live_scrolling_enabled || ( AJAXCALL && $jrConfig['live_scrolling_enabled'] == "0" ) )
					$show_paging = true;
				
				if (  get_showtime( 'disable_paging' ) == true)
					$show_paging = false;
				
				$output['PAGING'] = '';
				if ( $show_paging )
					{
					$pagination_result = $this->generate_paging( $propertys_uids , (int)$jrConfig[ 'property_list_limit' ] );
					$output['PAGING'] = $pagination_result['PAGINATION'];
					$current_page = $pagination_result['current_page'];
					$propertysToShow = array_slice ( $propertysToShow , ($current_page-1) * (int)$jrConfig[ 'property_list_limit' ] , (int)$jrConfig[ 'property_list_limit' ] );
					}

				if ( count( $propertysToShow ) > 0 )
					{
					$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
					$current_property_details->gather_data_multi( $propertysToShow );
					
					$jomres_property_list_prices = jomres_singleton_abstract::getInstance( 'jomres_property_list_prices' );
					
					$limited_property_uids = $propertys_uids;
					$jomres_property_list_prices->gather_lowest_prices_multi($propertysToShow);
					
					$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
					$jomres_media_centre_images->get_images_multi($propertysToShow, array('property'));
					
					// Now we'll grab all of the room type/classes information for these properties. The will cut the number of queries performed by this room listing script considerably.
					// For historical reasons some tables in Jomres use propertys_uid and some use property_uid (note the 's') so g_pids is for those tables that use propertys_uid, while g_pid is for those without
					$g_pids = genericOr( $propertysToShow, 'propertys_uid' );
					$g_pid  = genericOr( $propertysToShow, 'property_uid' );
					
					// Last booked
					$lastBookedArray = array ();
					$query           = "SELECT property_uid, max(timestamp) as ts FROM #__jomres_contracts WHERE " . $g_pid . " AND `timestamp` IS NOT NULL GROUP BY property_uid ";
					$result          = doSelectSql( $query );
					if ( count( $result ) > 0 )
						{
						foreach ( $result as $r )
							{
							$date = nicetime( $r->ts );
							if ( $date != "" ) $lastBookedArray[ $r->property_uid ] = $date;
							}
						}

					if ( $jrConfig[ 'use_reviews' ] == "1" )
						{
						jr_import( 'jomres_reviews' );
						$Reviews = new jomres_reviews();
						$Reviews->getRatingsMulti( $propertysToShow );
						}
					}
				}
			
			$templateCounter = 1;

			if ( !isset( $_REQUEST[ 'arrivalDate' ] ) )
				{
				if ( isset( $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] ) && $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] != "" )
					$arrivalDate = $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ];
				else
					$arrivalDate = date( "Y/m/d" );
				}
			else
				$arrivalDate = JSCalConvertInputDates( jomresGetParam( $_REQUEST, 'arrivalDate', "" ), $siteCal = true );

			$date_elements  = explode( "/", $arrivalDate );
			$unixTodaysDate = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );

			$featured_properties = get_showtime( "featured_properties" );
			if ( count( $featured_properties ) > 0 ) // only store the featured properties if their count is > 0. That's because featured properties are only set in non-ajax calls. If it's an ajax called, we don't want to set the featured properties to null
				$tmpBookingHandler->tmpsearch_data[ 'featured_properties' ] = $featured_properties;
			
			if ($jrConfig['use_budget_feature'] == "1" && using_bootstrap() )
				{
				$guest_budget = $budget->get_budget();
				}
			
			
			if ( count( $propertysToShow ) > 0 )
				{
				$property_details = array ();
				$MiniComponents->triggerEvent( '01011', array ( 'property_uids' => $propertysToShow ) ); // Discount finding script uses this trigger. We'll send it an array of property uids to reduce the number of queries it performs.
				$MiniComponents->triggerEvent( '01012', array ( 'property_uids' => $propertysToShow ) );
				
				foreach ( $propertysToShow as $propertys_uid )
					{
					$property_deets = array ();
					set_showtime( 'property_uid', $propertys_uid );
					set_showtime( 'property_type', $current_property_details->multi_query_result[ $propertys_uid ]['property_type'] );

					$customTextObj->get_custom_text_for_property( $propertys_uid );

					$property_deets = $MiniComponents->triggerEvent( '00042', array ( 'property_uid' => $propertys_uid ) );
					$mrConfig       = getPropertySpecificSettings( $propertys_uid );

					$dobooking_task = "dobooking";
					if ( $mrConfig[ 'registeredUsersOnlyCanBook' ] == "1" && $thisJRUser->id == 0 ) $dobooking_task = "contactowner";

					$featureList  = array ();
					$ptown        = stripslashes( $current_property_details->multi_query_result[ $propertys_uid ]['property_town'] );
					$property_stars = $current_property_details->multi_query_result[ $propertys_uid ]['stars'];
					$propertyDesc = strip_tags( jomres_decode( jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', $current_property_details->multi_query_result[ $propertys_uid ]['property_description'], false, false ) ) );

					if ( in_array( $propertys_uid, $tmpBookingHandler->tmpsearch_data[ 'featured_properties' ] ) )
						{
						if ( !isset( $jrConfig[ 'featured_listings_emphasis' ] ) ) 
							$jrConfig[ 'featured_listings_emphasis' ] = "";
						
						$property_deets[ 'FEATURED_LISTINGS_CLASS' ] = $jrConfig[ 'featured_listings_emphasis' ];
						}
						
					if ($jrConfig['use_budget_feature'] == "1" && in_array( $propertys_uid, $tmpBookingHandler->tmpsearch_data[ 'featured_properties' ] )) // We need to force the featured listings class to use panel-primary
						{
						$property_deets[ 'FEATURED_LISTINGS_CLASS' ] = 'panel-primary';
						}
						
					if ( ($property_deets[ 'FEATURED_LISTINGS_CLASS' ] != $jrConfig[ 'featured_listings_emphasis' ]) || !isset($jrConfig[ 'featured_listings_emphasis' ]) )
						$property_deets[ 'BUDGET_BORDER_CLASS' ] = 'panel-default';

					if ($guest_budget > 0 && $jrConfig['use_budget_feature'] == "1" && using_bootstrap() )
						{
						if (
							$guest_budget >= $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'RAW_PRICE' ] &&  
							$jomres_property_list_prices->lowest_prices[$propertys_uid][ 'RAW_PRICE' ] > 0 
							//$property_deets[ 'FEATURED_LISTINGS_CLASS' ] != $jrConfig[ 'featured_listings_emphasis' ]
							)
							{
							$property_deets[ 'BUDGET_BORDER_CLASS' ] = "panel-success";
							}
						elseif ($property_deets[ 'FEATURED_LISTINGS_CLASS' ] != $jrConfig[ 'featured_listings_emphasis' ])
							{
							$property_deets[ 'BUDGET_BORDER_CLASS' ] .= ' property-list-overbudget-properties';
							}
	
						// Don't know if I want to use this yet. Jomres 8.1
						/*if ( $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'RAW_PRICE' ] > ($guest_budget*3)) 
							{
							$property_deets[ 'BUDGET_BORDER_CLASS' ] = "panel-danger property-list-overbudget-properties";
							} */
						}
					
					if ( $jrConfig[ 'use_reviews' ] == "1" )
						{
						$Reviews->property_uid                 = $propertys_uid;
						$itemRating                            = $Reviews->showRating( $propertys_uid );
						
						$property_deets[ 'AVERAGE_RATING' ]    = number_format( $itemRating[ 'avg_rating' ], 1, '.', '' );
						$property_deets[ 'NUMBER_OF_REVIEWS' ] = $itemRating[ 'counter' ];

						$property_deets[ '_JOMRES_REVIEWS_AVERAGE_RATING' ] = jr_gettext( '_JOMRES_REVIEWS_AVERAGE_RATING', _JOMRES_REVIEWS_AVERAGE_RATING, false, false );
						$property_deets[ '_JOMRES_REVIEWS_TOTAL_VOTES' ]    = jr_gettext( '_JOMRES_REVIEWS_TOTAL_VOTES', _JOMRES_REVIEWS_TOTAL_VOTES, false, false );
						$property_deets[ '_JOMRES_REVIEWS' ]                = jr_gettext( '_JOMRES_REVIEWS', _JOMRES_REVIEWS, false, false );
						$property_deets[ '_JOMRES_REVIEWS_CLICKTOSHOW' ]    = jr_gettext( '_JOMRES_REVIEWS_CLICKTOSHOW', _JOMRES_REVIEWS_CLICKTOSHOW, false, false );
						$property_deets[ 'COLON' ]                          = " : ";
						$property_deets[ 'HYPHEN' ]                         = " - ";
						
						// Property review information needs to be in it's own array so that a patTemplate condition can be used to decide if reviews are shown or no.
						// To allow BC with older templates we'll copy the review info from the old property deets array to a new property_reviews array.
						if ( (int)$property_deets[ 'NUMBER_OF_REVIEWS' ] > 0 )
							{
							$property_reviews = array();
							$property_reviews[0][ 'AVERAGE_RATING' ]					= $property_deets[ 'AVERAGE_RATING' ];
							$property_reviews[0][ 'NUMBER_OF_REVIEWS' ]					= $property_deets[ 'NUMBER_OF_REVIEWS' ];
							$property_reviews[0][ '_JOMRES_REVIEWS_AVERAGE_RATING' ]	= $property_deets[ '_JOMRES_REVIEWS_AVERAGE_RATING' ];
							$property_reviews[0][ '_JOMRES_REVIEWS_TOTAL_VOTES' ]		= $property_deets[ '_JOMRES_REVIEWS_TOTAL_VOTES' ];
							$property_reviews[0][ '_JOMRES_REVIEWS' ]					= $property_deets[ '_JOMRES_REVIEWS' ] ;
							$property_reviews[0][ '_JOMRES_REVIEWS_CLICKTOSHOW' ]		= $property_deets[ '_JOMRES_REVIEWS_CLICKTOSHOW' ];
							$property_reviews[0][ 'COLON' ]								= $property_deets[ 'COLON' ];
							$property_reviews[0][ 'HYPHEN' ]							= $property_deets[ 'HYPHEN' ];
							$property_reviews[0][ 'REVIEWS_RANDOM_IDENTIFIER' ]			= generateJomresRandomString( 10 );
							$property_reviews[0][ 'UID' ]								= $propertys_uid;
							
							$property_reviews[0][ 'PROPERTY_NAME' ]						= urlencode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_name' ]);
							
							$property_reviews[0][ 'MODAL_BUTTON' ] = 
								make_modal_button( 
									$property_reviews[0][ '_JOMRES_REVIEWS_CLICKTOSHOW' ],  // Test of the button
									'show_property_reviews',								// The task being called
									'&property_uid='.$propertys_uid,						// Extra arguments being added to the url for that specific task
									$property_reviews[0][ 'PROPERTY_NAME' ],				// The title of the modal
									'btn-default'											// The colour of the button
									);

							
							$tmpl          = new patTemplate();
							$tmpl->addRows( 'property_reviews', $property_reviews );
							$tmpl->setRoot( $layout_path_to_template );
							$tmpl->readTemplatesFromInput( 'list_properties_reviews_snippet.html' );
							$property_deets [ 'REVIEWS_SNIPPET' ] = $tmpl->getParsedTemplate();
							}
						else
							{
							$property_deets [ 'REVIEWS_SNIPPET' ] = jr_gettext( '_JOMRES_REVIEWS_NOREVIEWS', _JOMRES_REVIEWS_NOREVIEWS, false, false );
							}
						
						}
					else
						{
						$property_deets[ 'AVERAGE_RATING' ]                 = '';
						$property_deets[ 'NUMBER_OF_REVIEWS' ]              = '';
						$property_deets[ '_JOMRES_REVIEWS_AVERAGE_RATING' ] = '';
						$property_deets[ '_JOMRES_REVIEWS_TOTAL_VOTES' ]    = '';
						$property_deets[ '_JOMRES_REVIEWS' ]                = '';
						$property_deets[ '_JOMRES_REVIEWS_CLICKTOSHOW' ]    = '';
						$property_deets[ 'COLON' ]                          = '';
						$property_deets[ 'HYPHEN' ]                         = '';
						$property_deets[ 'REVIEWS' ]                        = '';
						$property_deets [ 'REVIEWS_SNIPPET' ]               = '';
						}

					//$property_deets['AVAILABILITY_CALENDAR'] = $MiniComponents->specificEvent('06000','ui_availability_calendar',array('property_uid'=>$property->propertys_uid,'return_calendar'=>"1",'noshowlegend'=>1) );
					
					$starslink = "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/blank.png\" alt=\"star\" border=\"0\" height=\"1\" hspace=\"10\" vspace=\"1\" />";
					if ( $property_stars!= "0" )
						{
						$starslink = "";
						for ( $i = 1; $i <= $property_stars; $i++ )
							{
							$starslink .= "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/star.png\" alt=\"star\" border=\"0\" />";
							}
						$starslink .= "";
						}

					$property_deets[ 'SUPERIOR' ] = '';
					if ( $current_property_details->multi_query_result[ $propertys_uid ]['superior'] == 1 ) 
						$property_deets[ 'SUPERIOR' ] = "<img src=\"" . get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/superior.png\" alt=\"superior\" border=\"0\" />";

					$rtRows = "";
					$rtRowsLabels = "";
					if ( count($current_property_details->multi_query_result[ $propertys_uid ][ 'room_types' ]) > 0 )
						{
						$rTypes=$current_property_details->multi_query_result[ $propertys_uid ][ 'room_types' ];
						foreach ( $rTypes as $rtd )
							{
							$rtRows .= jomres_makeTooltip( $rtd['abbv'], $rtd['abbv'], $rtd['desc'],  JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/'.$rtd['image'], "", "room_type", array () );
							$rtRowsLabels .= '<span class="label label-info">'.trim($rtd['abbv']).'</span> ';
							}
						}

					$property_deets[ 'ROOMTYPES' ] = $rtRows;
					$property_deets[ 'ROOMTYPES_LABELS' ] = $rtRowsLabels;
					
					$propertyFeaturesArray = explode( ",", ( $current_property_details->multi_query_result[ $propertys_uid ]['property_features'] ) );

					if ( count( $propertyFeaturesArray ) > 0 )
						{
						$featureList = "";
						$counter     = 0;
						foreach ( $propertyFeaturesArray as $f )
							{
							if ($f!='')
								{
								if ( ( $counter / 10 ) == 0 ) 
									$br = "<br />";
								$hotel_feature_abbv=$current_property_details->all_property_features[ $f ]['abbv'];
								$hotel_feature_full_desc=$current_property_details->all_property_features[ $f ]['desc'];
								$feature_image= JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/'.$current_property_details->all_property_features[ $f ]['image'];
								$featureList .= jomres_makeTooltip( $hotel_feature_abbv, $hotel_feature_abbv, $hotel_feature_full_desc, $feature_image, "", "property_feature", array () );
								$counter++;
								}
							}
						$property_deets[ 'FEATURELIST' ] = $featureList;
						}

					$property_deets[ 'PRICE_PRE_TEXT' ]		= $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRE_TEXT' ];
					$property_deets[ 'PRICE_PRICE' ]		= $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRICE' ];
					$property_deets[ 'PRICE_POST_TEXT' ]	= $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'POST_TEXT' ];
					$property_deets[ 'PRICE_NOCONVERSION' ]	= $jomres_property_list_prices->lowest_prices[$propertys_uid][ 'PRICE_NOCONVERSION' ];
					
					//total price
					$plugin_will_provide_lowest_price = false;
					$MiniComponents->triggerEvent( '07015', array ( 'property_uid' => $propertys_uid ) ); // Optional
					$mcOutput = $MiniComponents->getAllEventPointsData( '07015' );
					if ( count( $mcOutput ) > 0 )
						{
						foreach ( $mcOutput as $val )
							{
							if ( $val == true )
								{
								$plugin_will_provide_lowest_price = true;
								}
							}
						}

					if ( $mrConfig[ 'is_real_estate_listing' ] == 0 && !$plugin_will_provide_lowest_price && $jomres_property_list_prices->lowest_prices[$propertys_uid]['PRICE'] != jr_gettext( '_JOMRES_PRICE_ON_APPLICATION', _JOMRES_PRICE_ON_APPLICATION, "", true, false ) && $stayDays > 1)
						{
						if ($jomres_property_list_prices->lowest_prices[$propertys_uid]['RAW_PRICE'] > 0)
							{
							switch ( $mrConfig[ 'booking_form_daily_weekly_monthly' ] )
								{
								case "D":
									$property_deets[ 'PRICE_CUMULATIVE' ]	= output_price($jomres_property_list_prices->lowest_prices[$propertys_uid]['RAW_PRICE'] * $stayDays,"");
									break;
								case "W":
									$property_deets[ 'PRICE_CUMULATIVE' ]	= output_price( ($jomres_property_list_prices->lowest_prices[$propertys_uid]['RAW_PRICE'] / 7) * $stayDays,"");
									break;
								case "M":
									$property_deets[ 'PRICE_CUMULATIVE' ]	= output_price( ($jomres_property_list_prices->lowest_prices[$propertys_uid]['RAW_PRICE'] / 30 ) * $stayDays,"");
									break;
								}
							}
						else
							$property_deets[ 'PRICE_CUMULATIVE' ]	=$property_deets[ 'PRICE_PRICE' ];
						
						$property_deets['FOR'] =  jr_gettext( '_JOMRES_FOR', _JOMRES_FOR , false );
						if ($jomres_property_list_prices->lowest_prices[$propertys_uid]['RAW_PRICE'] > 0 )
							{
							if ( $mrConfig[ 'wholeday_booking' ] == "1" )
								$property_deets[ 'NIGHTS_TEXT' ] = jr_gettext( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', _JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY , false );
							else
								{
								if ($stayDays ==1)
									$property_deets[ 'NIGHTS_TEXT' ] = jr_gettext( '_JOMRES_PRICINGOUTPUT_NIGHT', _JOMRES_PRICINGOUTPUT_NIGHT , false );
								else
									$property_deets[ 'NIGHTS_TEXT' ] = jr_gettext( '_JOMRES_PRICINGOUTPUT_NIGHTS', _JOMRES_PRICINGOUTPUT_NIGHTS , false );
								}
								
							$property_deets[ 'STAY_DAYS' ]	= $stayDays;
							}
						else
							{
							$property_deets[ 'NIGHTS_TEXT' ] = '';
							$property_deets[ 'STAY_DAYS' ]	= '';
							}
						}
					//end total price
					
					if ( array_key_exists( $propertys_uid, $lastBookedArray ) )
						{
						$property_deets[ 'LASTBOOKED' ]        = jr_gettext( '_JOMRES_DATEPERIOD_LATESTBOOKING', _JOMRES_DATEPERIOD_LATESTBOOKING ) . " " . $lastBookedArray[ $propertys_uid ];
						if ( !using_bootstrap() )
							$property_deets[ 'LASTBOOKING_STYLE' ] = 'ui-state-highlight ui-corner-all';
						else
							$property_deets[ 'LASTBOOKING_STYLE' ] = 'alert alert-warning';
						}

					$property_deets[ 'COUNTER' ] = $templateCounter;
					$templateCounter++;
					if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
						{
						if ( $mrConfig[ 'visitorscanbookonline' ] == "1" )
							{
							$url                      = jomresURL( JOMRES_SITEPAGE_URL . "&task=" . $dobooking_task . "&amp;selectedProperty=" . $propertys_uid );
							$property_deets[ 'LINK' ] = $url;
							if ( $mrConfig[ 'singleRoomProperty' ] == "1" ) $property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', _JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY, false, false );
							else
							$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', _JOMRES_FRONT_MR_MENU_BOOKAROOM, false, false );

							if ( $dobooking_task != "dobooking" ) $property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL, false, false );
							}
						else
							{
							$property_deets[ 'LINK' ]          = jomresURL( JOMRES_SITEPAGE_URL . "&task=contactowner&amp;selectedProperty=" . $propertys_uid );
							$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', _JOMRES_FRONT_MR_MENU_CONTACTHOTEL, false, false );
							}
						}
					else
						{
						$property_deets[ 'LINK' ]          = jomresURL( JOMRES_SITEPAGE_URL . "&task=contactowner&amp;selectedProperty=" . $propertys_uid );
						$property_deets[ 'BOOKTHIS_TEXT' ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', _JOMRES_FRONT_MR_MENU_CONTACT_AGENT, false, false );
						}

					$property_deets[ 'PROP_NAME' ] = $current_property_details->multi_query_result[ $propertys_uid ][ 'property_name' ];
					$property_deets[ 'LAT' ]       = $current_property_details->multi_query_result[ $propertys_uid ][ 'lat' ];
					$property_deets[ 'LONG' ]      = $current_property_details->multi_query_result[ $propertys_uid ][ 'long' ];
					$property_deets[ 'PROP_STREET' ]   = stripslashes( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_street' ] );
					$property_deets[ 'PROP_TOWN' ]     = '<a href="' . jomresURL( JOMRES_SITEPAGE_URL . '&send=Search&calledByModule=mod_jomsearch_m0&town=' . jomres_decode($current_property_details->multi_query_result[ $propertys_uid ][ 'property_town' ] ) ) . '">' . jomres_decode( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_town' ] ) . '</a>';
					$property_deets[ 'PROP_POSTCODE' ] = stripslashes( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_postcode' ] );
					$property_deets[ 'PROP_REGION' ]   = '<a href="' . jomresURL( JOMRES_SITEPAGE_URL . '&send=Search&calledByModule=mod_jomsearch_m0&region=' . $current_property_details->multi_query_result[ $propertys_uid ][ 'property_region_id' ] ) . '">' . jomres_decode( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_region' ] ) . '</a>';
					$property_deets[ 'PROP_COUNTRY' ]  = '<a href="' . jomresURL( JOMRES_SITEPAGE_URL . '&send=Search&calledByModule=mod_jomsearch_m0&country=' . jomres_decode( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_country_code' ] ) ) . '">' . jomres_decode( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_country' ] ) . '</a>';

					$property_deets[ 'LIVESITE' ]                    = get_showtime( 'live_site' );
					$property_deets[ 'UID' ]                         = $propertys_uid;
					$property_deets[ 'MOREINFORMATION' ]             = jr_gettext( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', _JOMRES_COM_A_CLICKFORMOREINFORMATION, $editable = false, true );
					$property_deets[ 'MOREINFORMATIONLINK' ]         = jomresURL( JOMRES_SITEPAGE_URL . "&task=viewproperty&property_uid=" . $propertys_uid );
					$property_deets[ 'MOREINFORMATIONLINK_AJAX' ]    = JOMRES_SITEPAGE_URL_AJAX . "&task=viewproperty&property_uid=" . $propertys_uid;
					$property_deets[ 'MOREINFORMATIONLINK_SEFSAFE' ] = JOMRES_SITEPAGE_URL . "&task=viewproperty&property_uid=" . $propertys_uid;
					$property_deets[ 'PROPERTYNAME' ]                = $property_deets[ 'PROP_NAME' ];

					$property_deets[ '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', _JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES );
					$property_deets[ '_JOMRES_FRONT_ROOMTYPES' ]                  = jr_gettext( '_JOMRES_FRONT_ROOMTYPES', _JOMRES_FRONT_ROOMTYPES );
					$property_deets[ 'JS_SAFE_PROPERTYNAME' ]                     = preg_replace( '/[^A-Za-z0-9_-]+/', "", $property_deets[ 'PROP_NAME' ] );
					$property_deets[ 'PROPERTYTOWN' ]                             = jomres_decode( $ptown );
					$property_deets[ 'PROPERTYREGION' ]                           = jomres_decode( stripslashes( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_region' ] ) );
					$property_deets[ 'PROPERTYCOUNTRY' ]                          = jomres_decode( stripslashes( $current_property_details->multi_query_result[ $propertys_uid ][ 'property_country' ] ) );

					$property_deets[ 'TELEPHONE_NUMBER' ] = jomres_decode( $current_property_details->multi_query_result[ $propertys_uid ]['property_tel'] );

					if ( strlen( $propertyDesc ) > (int) $jrConfig[ 'propertyListDescriptionLimit' ] ) $property_deets[ 'PROPERTYDESC' ] = jr_substr( $propertyDesc, 0, $jrConfig[ 'propertyListDescriptionLimit' ] ) . "...";
					else
					$property_deets[ 'PROPERTYDESC' ] = $propertyDesc;
					$property_deets[ 'IMAGELARGE' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
					$property_deets[ 'IMAGEMEDIUM' ] = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";
					$property_deets[ 'IMAGETHUMB' ]  = $property_deets[ 'LIVESITE' ] ."/jomres/images/noimage.gif";

					$jomres_media_centre_images->get_images($propertys_uid, array('property'));
					if ($jomres_media_centre_images->images['property'][0][0]['large'] != "")
						{
						$property_deets[ 'IMAGELARGE' ]  = $jomres_media_centre_images->images['property'][0][0]['large'];
						$property_deets[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images['property'][0][0]['medium'];
						$property_deets[ 'IMAGETHUMB' ]  = $jomres_media_centre_images->images['property'][0][0]['small'];
						}
					

					$property_deets[ '_JOMRES_QUICK_INFO' ] = jr_gettext( '_JOMRES_QUICK_INFO', _JOMRES_QUICK_INFO, false, false );
					$property_deets[ 'REMOTE_URL' ]         = $mrConfig[ 'galleryLink' ];
					$property_deets[ 'RANDOM_IDENTIFIER' ]  = generateJomresRandomString( 10 );
					$property_deets[ '_JOMRES_COMPARE' ]    = jr_gettext( '_JOMRES_COMPARE', _JOMRES_COMPARE, false, false );

					if ( !in_array( $propertys_uid, $shortlist_items ) ) 
						$property_deets[ 'SHORTLIST' ] = jr_gettext( '_JOMRES_ADDTOSHORTLIST', _JOMRES_ADDTOSHORTLIST, false, false );
					else
						$property_deets[ 'SHORTLIST' ] = jr_gettext( '_JOMRES_REMOVEFROMSHORTLIST', _JOMRES_REMOVEFROMSHORTLIST, false, false );

					add_gmaps_source(); // Needs to be included, regardless of the settings below because the module popup will not work without it.
					
					$showmaps = false;
					$layout   = $tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ];
					if ( get_showtime( 'layout_showmaps' ) != null || $layout == "listwithmaps" )
						{
						if ( get_showtime( 'layout_mapwidth' ) == null )
							{
							$mapwidth  = "119";
							$mapheight = "95";
							}
						else
							{
							$mapwidth  = get_showtime( 'layout_mapwidth' );
							$mapheight = get_showtime( 'layout_mapheight' );
							}
						$args = array ( 'property_uid' => $propertys_uid, "width" => $mapwidth, "height" => $mapheight, "disable_ui" => true );
						$MiniComponents->specificEvent( '01050', 'x_geocoder', $args );
						$property_deets[ 'MAP' ] = $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];
						}

					$sizes = array ( 'thwidth' => $jrConfig[ 'thumbnail_width' ], 'thheight' => $jrConfig[ 'thumbnail_width' ] );
					if ( file_exists( JOMRES_IMAGELOCATION_ABSPATH . $propertys_uid . "_property_" . $propertys_uid . ".jpg" ) ) $sizes = getImagesSize( JOMRES_IMAGELOCATION_ABSPATH . $propertys_uid . "_property_" . $propertys_uid . ".jpg" );

					$property_deets[ 'PROPERTY_TYPE' ]            = $current_property_details->multi_query_result[ $propertys_uid ]['property_type_title'];
					$property_deets[ 'PROPERTY_TYPE_SEARCH_URL' ] = jomresURL( JOMRES_SITEPAGE_URL . "&amp;task=search&amp;ptype=" . $current_property_details->multi_query_result[ $propertys_uid ]['ptype_id'] );

					if ( !isset( $jrConfig[ 'make_gifs_from_slideshows' ] ) ) $jrConfig[ 'make_gifs_from_slideshows' ] = "1";

					$property_deets[ 'AGENT_LINK' ] = make_agent_link( $propertys_uid );

					$property_deets[ '_JOMRES_AGENT' ] = jr_gettext( "_JOMRES_AGENT", _JOMRES_AGENT );

					if ( $jrConfig[ 'make_gifs_from_slideshows' ] == "1" )
						{
						$result = gif_builder( $propertys_uid );
						if ( $result[ 'SMALL' ] != "" )
							{
							$property_deets[ 'IMAGETHUMB' ]  = $result[ 'SMALL' ];
							$property_deets[ 'IMAGEMEDIUM' ] = $result[ 'MEDIUM' ];
							}
						}

					if ( $output_lowest ) 
						{
						$property_deets[ 'LOWESTPRICE' ] = $price;
						}
					else
						{
						$property_deets[ 'LOWESTPRICE' ] = '';
						}

					$property_deets[ 'STARS' ] = $starslink;
					
					$property_deets[ 'REQUIRE_APPROVAL' ] = '';
					$property_deets[ 'REQUIRE_APPROVAL_CLASS' ] = '';
					if ($mrConfig[ 'is_real_estate_listing' ] == 0)
						{
						if ( $mrConfig[ 'requireApproval' ] == "1" )
							{
							$property_deets[ 'REQUIRE_APPROVAL' ] = jr_gettext( '_BOOKING_ONREQUEST', _BOOKING_ONREQUEST , false );
							$property_deets[ 'REQUIRE_APPROVAL_CLASS' ] = 'booking-onrequest';
							}
						else
							{
							$property_deets[ 'REQUIRE_APPROVAL' ] = jr_gettext( '_BOOKING_INSTANT', _BOOKING_INSTANT , false );
							$property_deets[ 'REQUIRE_APPROVAL_CLASS' ] = 'booking-instant';
							}
						}

					$MiniComponents->triggerEvent( '01011', array ( 'property_uid' => $propertys_uid ) ); // Optional
					$mcOutput = $MiniComponents->getAllEventPointsData( '01011' );
					if ( count( $mcOutput ) > 0 )
						{
						foreach ( $mcOutput as $key => $val )
							{
							if ( !is_null( $val ) )
								{
								$result         = array_merge( $property_deets, $val );
								$property_deets = $result;
								}
							}
						}
					
					$MiniComponents->triggerEvent( '01012', array ( 'property_uid' => $propertys_uid ) ); // Optional
					$mcOutput = $MiniComponents->getAllEventPointsData( '01012' );
					if ( count( $mcOutput ) > 0 )
						{
						foreach ( $mcOutput as $key => $val )
							{
							if ( !is_null( $val ) )
								{
								$result         = array_merge( $property_deets, $val );
								$property_deets = $result;
								}
							}
						}

					$property_details[ ]         = $property_deets;
					$jomres_language_definitions = jomres_singleton_abstract::getInstance( 'jomres_language_definitions' );
					$jomres_language_definitions->reset_lang_and_property_type();
					}

				if ( !$data_only )
					{
					if ( !AJAXCALL || get_showtime( 'task' ) == "ajax_search_filter" )
						{
						$header_pageoutput[ ] = $header_output;
						$tmpl                 = new patTemplate();
						$tmpl->addRows( 'header_pageoutput', $header_pageoutput );
						$tmpl->addRows( 'layout_rows', $layout_rows );
						$tmpl->addRows( 'compare', $compare );
						$tmpl->addRows( 'shortlist', $shortlist );

						$tmpl->addRows( 'budget_output', $budget_output );
						$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
						$tmpl->readTemplatesFromInput( "list_properties_header.html" );
						$output[ 'HEADER' ] = $tmpl->getParsedTemplate();
						}
					
					$pageoutput[ ] = $output;
					$tmpl          = new patTemplate();
					$tmpl->addRows( 'property_reviews', $property_reviews );
					$tmpl->addRows( 'property_reviews_none', $property_reviews_none );
					$tmpl->addRows( 'pageoutput', $pageoutput );
					$tmpl->addRows( 'property_details', $property_details );
					$tmpl->setRoot( $layout_path_to_template );
					$tmpl->readTemplatesFromInput( $layout_template );
					$tmpl->displayParsedTemplate();
					}
				else
					{
					include( JOMRES_TEMPLATEPATH_FRONTEND . JRDS . 'main.php' );
					$jomres_remote_xml = new SimpleXMLElement( $xmlstr );
					foreach ( $property_details as $property )
						{
						$xml_property = $jomres_remote_xml->addChild( 'property', $property[ 'UID' ] );
						$xml_property->addChild( 'property_name', $property[ 'PROP_NAME' ] );
						$xml_property->addChild( 'booking_link', $property[ 'BOOKTHIS_TEXT' ] );
						$xml_property->addChild( 'prop_street', $property[ 'PROP_STREET' ] );
						$xml_property->addChild( 'prop_town', $property[ 'PROPERTYTOWN' ] );
						$xml_property->addChild( 'prop_postcode', $property[ 'PROP_POSTCODE' ] );
						$xml_property->addChild( 'prop_region', $property[ 'PROPERTYREGION' ] );
						$xml_property->addChild( 'prop_country', $property[ 'PROPERTYCOUNTRY' ] );
						$xml_property->addChild( 'moreinformation', $property[ 'MOREINFORMATION' ] );
						$xml_property->addChild( 'image', $property[ 'IMAGE' ] );
						$xml_property->addChild( 'property_type', $property[ 'PROPERTY_TYPE' ] );
						$xml_property->addChild( 'description', $property[ 'PROPERTYDESC' ] );
						$xml_property->addChild( 'stars', $property[ 'STARS' ] );

						$xml_property->addChild( 'livesite', urlencode( get_showtime( 'live_site' ) ) );
						$xml_property->addChild( 'lowestprice', urlencode( $property[ 'LOWESTPRICE' ] ) );
						$xml_property->addChild( 'moreinformationlink', urlencode( $property[ 'MOREINFORMATIONLINK_SEFSAFE' ] ) );
						}

					$xmlString = $jomres_remote_xml->asXML(); // returns the SimpleXML object as a serialized XML string
					echo $xmlString;
					exit;
					}
				}
			//else
			//	echo jr_gettext('_JOMRES_FRONT_NORESULTS',_JOMRES_FRONT_NORESULTS,$editable=true,$islink=false) ;
			}

		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', _JOMRES_COM_A_CLICKFORMOREINFORMATION );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_NORESULTS', _JOMRES_FRONT_NORESULTS );
		$output[ ] = jr_gettext( '_PN_PREVIOUS', _PN_PREVIOUS );
		$output[ ] = jr_gettext( '_PN_NEXT', _PN_NEXT );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_SECOND', _JOMRES_DATEPERIOD_SECOND );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_MINUTE', _JOMRES_DATEPERIOD_MINUTE );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_DAY', _JOMRES_DATEPERIOD_DAY );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_HOUR', _JOMRES_DATEPERIOD_HOUR );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_WEEK', _JOMRES_DATEPERIOD_WEEK );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_MONTH', _JOMRES_DATEPERIOD_MONTH );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_YEAR', _JOMRES_DATEPERIOD_YEAR );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_DECADE', _JOMRES_DATEPERIOD_DECADE );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_S', _JOMRES_DATEPERIOD_S );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_AGO', _JOMRES_DATEPERIOD_AGO );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_FROMNOW', _JOMRES_DATEPERIOD_FROMNOW );
		$output[ ] = jr_gettext( '_JOMRES_DATEPERIOD_LATESTBOOKING', _JOMRES_DATEPERIOD_LATESTBOOKING );
		$output[ ] = jr_gettext( '_JOMRES_QUICK_INFO', _JOMRES_QUICK_INFO );
		$output[ ] = jr_gettext( '_JOMRES_COMPARE', _JOMRES_COMPARE );

		$output[ ] = jr_gettext( '_JOMRES_ADDTOSHORTLIST', _JOMRES_ADDTOSHORTLIST );
		$output[ ] = jr_gettext( '_JOMRES_REMOVEFROMSHORTLIST', _JOMRES_REMOVEFROMSHORTLIST );
		$output[ ] = jr_gettext( '_JOMRES_VIEWSHORTLIST', _JOMRES_VIEWSHORTLIST );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	
	function generate_paging( $propertys_uids , $limit )
		{
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );

		$selections = '';
		foreach ( $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections'] as $key=>$val)
			{
			switch ($key )
				{
				case 'stars': 
					foreach ($val as $v)
						$selections .= "&stars[]=".$v;
					break;
				case 'pricerange_value_from': 
					$selections .= "&pricerange_value_from=".$val;
					break;
				case 'pricerange_value_to': 
					$selections .= "&pricerange_value_to=".$val;
					break;
				case 'feature_uids': 
					foreach ($val as $v)
						$selections .= "&feature_uids[]=".$v;
					break;
				case 'countries': 
					foreach ($val as $v)
						$selections .= "&countries[]=".$v;
					break;
				case 'regions': 
					foreach ($val as $v)
						$selections .= "&regions[]=".$v;
					break;
				case 'towns': 
					foreach ($val as $v)
						$selections .= "&towns[]=".$v;
					break;
				case 'room_type_uids': 
					foreach ($val as $v)
						$selections .= "&room_type_uids[]=".$v;
					break;
				case 'property_type_uids': 
					foreach ($val as $v)
						$selections .= "&property_type_uids[]=".$v;
					break;
				case 'guestnumbers': 
					foreach ($val as $v)
						$selections .= "&guestnumbers[]=".$v;
					break;
				case 'arrivalDate': 
					$selections .= "&arrivalDate=".$val;
					break;
				case 'departureDate': 
					$selections .= "&departureDate=".$val;
					break;
				}
			}

		$number_of_pages = ceil(count($propertys_uids) / $limit);
		
		if(!isset($_GET['page']))
			{
			$current_page = 0;
			}
		else
			{
			$current_page = (int)$_GET['page'];
			}

		if($current_page < 1)
			{
			$current_page = 1;
			}
		else if($current_page > $number_of_pages)
			{
			$current_page = $number_of_pages;
			}
		
		$rows = array();
		foreach(range(1, $number_of_pages) as $page)
			{
			$r=array();
			if ($page == $current_page)
				{
				$r['CLASS'] = "disabled";
				}
			else
				{
				$r['CLASS'] = "active";
				}
			
			$r['PAGE'] = $page;
			$r['LINK'] = jomresURL(JOMRES_SITEPAGE_URL . "&task=search&page=" . $page . $selections );
			$rows[]=$r;
			}
		
		$pageoutput = array();
		$output = array();
		
		$output['FORWARD_CLASS'] = "active";
		$output['BACKWARD_CLASS'] = "active";
		
		if ( $current_page < $number_of_pages )
			{
			$next = $current_page+1;
			$output['FORWARD_LINK'] =  jomresURL(JOMRES_SITEPAGE_URL . "&task=search&page=" . $next . $selections);
			}
		else
			{
			$output['BACKWARD_CLASS'] = "disabled";
			$output['FORWARD_LINK'] =  jomresURL(JOMRES_SITEPAGE_URL . "&task=search&page=" . $current_page . $selections);
			}

		if ( $current_page > 1 )
			{
			$prev =  $current_page-1;
			$output['BACKWARD_LINK'] =  jomresURL(JOMRES_SITEPAGE_URL . "&task=search&page=" . $prev . $selections);
			}
		else
			{
			$output['FORWARD_CLASS'] = "disabled";
			$output['BACKWARD_LINK'] =  jomresURL(JOMRES_SITEPAGE_URL . "&task=search&page=" . $current_page . $selections);
			}

		$pageoutput[]=$output;
		$tmpl                 = new patTemplate();
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( "list_properties_pagination.html" );
		$pagination = $tmpl->getParsedTemplate();

		return array ("PAGINATION" => $pagination , "current_page" => $current_page );
		
		}
	
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>